<?php
$catlist = array(
	"mame"       => "MAME", 
);

function getpostnumber($post)
{
	$extract = explode("_", $post);
	return (int)$extract[0];
}

function getposttimestamp($post)
{
	$extract = explode("_", $post);
	$day = $extract[1] % 100;
	$month = ($extract[1] / 100) % 100;
	$year = (int)($extract[1] / 10000);
	return mktime(12, 0, 0, $month, $day, $year);
}

function getpostcategory($post)
{
	$extract = explode("_", $post);
	return $extract[2];
}

// error_reporting(E_ALL);

$monthlist = array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

// Extract parameters
$category = "";
$date = "";
$post = "";

$count = 7;
$start = 0;
$prevurl = "";
$nexturl = "?page=2";

if (isset($_GET["page"]) && $_GET["page"] != "")
{
	$pagenum = $_GET["page"] - 1;
	$start = $pagenum * $count;
	$prevurl = "?page=" . ($pagenum);
	$nexturl = "?page=" . ($pagenum + 2);
}
if (isset($_GET["p"]) && $_GET["p"] != "")
{
	$postnum = $_GET["p"];
	$post = (($postnum/10000) % 10) . (($postnum/1000) % 10) . (($postnum/100) % 10) . (($postnum/10) % 10) . ($postnum % 10);
	$count = 1;
}
if (isset($_GET["m"]) && $_GET["m"] != "")
{
	$date = $_GET["m"];
	$prevurl = $prevurl . "&m=" . $date;
	$nexturl = $nexturl . "&m=" . $date;
}
if (isset($_GET["cat"]) && $_GET["cat"] != "")
{
	$category = $_GET["cat"];
	$prevurl = $prevurl . "&cat=" . $category;
	$nexturl = $nexturl . "&cat=" . $category;
}

// Specify the path to where the diffs are located
$postpath = $_SERVER["DOCUMENT_ROOT"] . "/posts";

// Build an array of post files
$postfiles = array();
$months = array();
$categories = array();
if (($dir = opendir($postpath)) != false)
{
    while (($curfile = readdir($dir)) != false)
    {
    	$extract = explode("_", $curfile);
	    if (count($extract) == 3)
        {
	        if ($extract[2] == "hidden" && $category != "hidden")
	      		continue;
	    	if ($extract[1] > 20050000)
	    	{
	    		$aindex = (int)($extract[1] / 100);
	    		if (!array_key_exists($aindex, $months))
	    			$months[$aindex] = 0;
		    	$months[$aindex] += 1;
		    }
			if ($extract[2] != "")
			{
	    		$aindex = $extract[2];
	    		if (!array_key_exists($aindex, $categories))
	    			$categories[$aindex] = 0;
				$categories[$extract[2]] += 1;
			}
        	if ($post != "" && $post == $extract[0])
        		$post = $curfile;
        	if ($date != "" && $date != substr($extract[1], 0, 6))
        		continue;
        	if ($category != "" && $category != $extract[2])
        		continue;
        	$postfiles[] = $curfile;
        }
    }
    closedir($dir);
}

// Sort the array
rsort($postfiles);

// get the key of the element if we have a specific post
if ($post != "")
{
	$start = array_search($post, $postfiles);
	if ($start > 0)
	{
	   	$extract = explode("_", $postfiles[$start -1]);
		$prevurl = "?p=" . (int)$extract[0];
	}
	if ($start < count($postfiles) - 1)
	{
	   	$extract = explode("_", $postfiles[$start + 1]);
		$nexturl = "?p=" . (int)$extract[0];
	}
}

// Determine the entries we want
if ($start >= 0)
	$entries = array_slice($postfiles, $start, $count);
else
	$entries = array();

// Compute a title for the page
$pagetitle = "MAME";
if ($category != "")
	$pagetitle = $pagetitle . " in " . $catlist[$category];
else if ($date != "")
	$pagetitle = $pagetitle . " from " . $monthlist[$date % 100] . " " . (int)($date / 100);

// Either HTML or RSS
if (isset($_GET["feed"]) && $_GET["feed"] != "")
	require("gennews-rss.php");
else
	require("gennews-html.php");

?>
