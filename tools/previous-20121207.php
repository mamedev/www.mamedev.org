<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	
	<!-- #DEV NOTE: add title and keywords for SEO -->	
	
	<title>MAME | Tools for building MAME on Windows</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link rel="stylesheet" href="/_include/css/core.css" type="text/css" media="screen" /> 
	<!--[if IE 6]><link rel="stylesheet" href="/_include/css/ie6.css" type="text/css" media="screen" /><![endif]-->
	
	<link href="/_include/img/favicon.ico" rel="shortcut icon"/>
	
</head>

<body>
	
	<!--#include virtual="/_include/html/header.txt" -->
    
    <!-- main start -->
    <div id="main">
        <div class="clearfix width913">
             
			<!--#include virtual="/_include/html/sidebar.txt" -->
            
            <!-- content start -->         
            <div id="content">
            		
                 <h1>Tools for building MAME on Windows</h1>
                 
                 <div class="row">
					<p>
					The primary build of MAME is a command-line Windows program. It is compiled
					using gcc version 4.6.3 under the MinGW development environment. If you want
					to build your own version of MAME, there are two ways of acquiring the 
					necessary tools to do so. The <a href="#easy">easy way</a> is to download one
					of the pre-assembled packages from this site, as described below.
					The <a href="#hard">hard way</a> is to acquire all the individual components that are used
					directly from the original sources and assemble the pieces together. Both
					approaches are described below.
					</p>

					<p>
					Information about setting up the <a href="previous-20120807.html">previous set of build tools 
					from Aug 2012</a> is still available.
					</p>
				</div>
				
				<div id="easy" class="row">
					<h2>The Easy Way</h2>
					
					<h3>1. Root Directory</h3>

					<p>
					Create a root directory; generally, this is called <i>mingw</i>.
					</p>

					<h3>2. Install one or both of the mingw-mame packages</h3>

					<p>
					This package is designed to be an easy pre-assembled installation for the 
					development environment. It consists of a collection of mostly GPL-licensed 
					tools from a variety of sources, and is the exact same set of tools and headers/
					libraries that are used to compile the official sources. Go to 
					<a href="/tools">mamedev.org</a> and download one of the following 
					packages:
					</p>

					<table>
					<tr align="center">
						<th width="100%">Binaries</th>
					</tr>
					<tr align="center">
						<!-- <td class="link"><a href="mingw-mame-w32-20121207.exe">mingw-mame-w32-20121207.exe</a> (32-bit only)</td> -->
						<td class="link"><a href="/downloader.php?file=tools/mingw-mame-w32-20121207.exe"-->mingw-mame-w32-20121207.exe</a> (32-bit only)</td>
					</tr>
					<tr align="center">
						<!-- <td class="link"><a href="mingw-mame-w64-20121207.exe">mingw-mame-w64-20121207.exe</a> (64-bit only)</td> -->
						<td class="link"><a href="/downloader.php?file=tools/mingw-mame-w64-20121207.exe"-->mingw-mame-w64-20121207.exe</a> (64-bit only)</td>
					</tr>
					<tr align="center">
						<!-- <td class="link"><a href="mingw-mame-20121207.exe">mingw-mame-20121207.exe</a> (32-bit and 64-bit)</td> -->
						<td class="link"><a href="/downloader.php?file=tools/mingw-mame-20121207.exe"-->mingw-mame-20121207.exe</a> (32-bit and 64-bit)</td>
					</tr>
					<tr>
						<td style="text-align:center">
						<!--#include virtual="/mirrors.txt" -->
						</td>
					</tr>
					</table>

					<p>
					Note that the packages expand greatly (over 100MB for each one), so if you only intend
					on ever compiling 32-bit MAME or 64-bit MAME, just grab the specific one you want.
					</p>

					<p>
					Extract the package you downloaded into your <i>mingw</i> directory.
					</p>

					<a name="compile"></a>

					<h3>3. Compile</h3>

					<p>
					Open up a command-line window. First, ensure that the appropriate <i>mingw</i>/bin directory
					is part of your search path. Do that by typing:
					</p>

					<p class="code">
					set path=<i>mingw</i>\mingw64-w32\bin (32-bit)<br/>
					set path=<i>mingw</i>\mingw64-w64\bin (64-bit)
					</p>

					<p>
					Next, switch to the directory where the MAME sources live:
					</p>

					<p class="code">
					cd <i>mame-source-path</i>
					</p>

					<p>
					And then execute make to build it:
					</p>

					<p class="code">
					make
					</p>

					<p>
					Wait a while, and you will have a fully built MAME executable.
					</p>
				</div>

				<div id="hard" class="rowlast">
					<h2>The Hard Way</h2>

					<h3>1. Root Directory</h3>

					<p>
					Create a root directory; generally, this is called <i>mingw</i>.
					</p>

					<h3>2. mingw-w64</h3>

					<p>
					mingw-w64 is the official set compile tools for MAME. It is a repackaging of
					the gcc compiler along with the necessary tools, all ported to Windows.
					Part of mingw-w64 is an effort to produce Windows-compatible header files so
					that you can build executables linked against standard Windows libraries.
					This is a very complete solution for free Windows development, and much 
					lighter weight than the Microsoft tools.
					</p>

					<p>
					Go to <a href="http://mingw.sourceforge.net">mingw-w64.sourceforge.net</a>, and 
					download the following binary packages :
					</p>

					<table>
					<tr align="center">
						<th width="100%">Binaries</th>
					</tr>
					<tr align="center">
						<td class="link">
							<a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Personal%20Builds/rubenvb/gcc-4.6-release/i686-w64-mingw32-gcc-4.6.3-1-release-win32_rubenvb.7z/download">i686-w64-mingw32-gcc-4.6.3-1-release-win32_rubenvb.7z</a>							
							<a href="20121207/mingw-w32-bin_i686-mingw_20110510_sezero.zip">(mirror)</a>
						</td>
					</tr>
					<tr align="center">
						<td class="link">
							<a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Personal%20Builds/rubenvb/gcc-4.6-release/x86_64-w64-mingw32-gcc-4.6.3-1-release-win64_rubenvb.7z/download">x86_64-w64-mingw32-gcc-4.6.3-1-release-win64_rubenvb.7z</a>
							<a href="20121207/mingw-w64-bin_x86_64-mingw_20110510_sezero.zip">(mirror)</a>
						</td>
					</tr>
					</table>

					<p>
					Extract one or both of these items into your <i>mingw</i> directory. They are independent
					of one another, and are designed to live side-by-side. The 64-bit toolchain extracts to
					a directory called simply mingw64, which has been renamed in the official toolchain to
					mingw64-w64 for clarity. Also note that the .exe files in the mingw64 distribution have
					an x86_64-w64-mingw32- prefix on them which must be removed.
					</p>
					
					<h3>3. Win32 GNU-like tools</h3>

					<p>
					In order to build MAME, we rely on a few standard GNU tools. Fortunately, we only
					rely on basic behaviors of these tools, so we have taken the step of providing
					simple implementations of the common tools <b>rm</b> and <b>mkdir</b>.
					</p>

					<p>
					In addition, the tools <b>diff</b> and <b>patch</b> are used for 
					<a href="/devwiki/index.php/Submitting_Source_Code">submitting code to MAME</a> and for
					<a href="/updates.html">applying the latest intermediate 'u' update</a>. 
					These two tools have been built into Win32-native versions by taking the
					GNU tarballs and updating/modifying them as necessary to build under MinGW.
					</p>

					<table>
					<tr align="center">
						<th width="50%">Binaries</th>
						<th width="50%">Source</th>
					</tr>
					<tr align="center">
						<td class="link"><a href="20110519/mame-gnulike-20110519.exe">mame-gnulike-20110519.exe</a></td>
						<td class="link"><a href="20110519/mame-gnulike-src-20110519.exe">mame-gnulike-src-20110519.exe</a></td>
					</tr>
					</table>

					<p>
					Simply extract these items directly into your bin directory of one or both of
					the mingw distributions you started with.
					</p>

					<h3>4. SDL</h3>

					<p>
					This step is optional, but is nice if you wish to have a complete development
					environment for both native Win32 and SDL hosted versions of MAME. Note that
					the 64-bit version of SDL is not provided by the SDL team, and you need to 
					compile it yourself.
					</p>

					<table>
					<tr align="center">
						<th width="50%">Binaries</th>
						<th width="50%">Source</th>
					</tr>
					<tr align="center">
						<td class="link">
							<a href="http://www.libsdl.org/release/SDL-devel-1.2.15-mingw32.tar.gz">SDL-devel-1.2.15-mingw32.tar.gz</a>
						</td>
						<td class="link" rowspan="2">
							<a href="http://www.libsdl.org/release/SDL-1.2.15.tar.gz">SDL-1.2.15.tar.gz</a>
						</td>
					</tr>
					</table>

					<p>
					Extract this file into your a temporary directory. Move the <b>bin</b>, <b>include</b>,
					and <b>lib</b> directories into your <i>mingw</i> directory, merging the contents with
					the existing directories.
					</p>

					<h3>5. Compile</h3>

					<p>
					<a href="#compile">Hop back to the Easy Way</a> to finish these final two steps.
					</p>
				</div>
            </div>
            <!-- content end --> 
		
		<!--#include virtual="/_include/html/footer.txt" -->
    
    </div>    
    </div>
    <!-- main end -->


</body>

</html>
