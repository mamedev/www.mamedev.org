<?php
$title = 'MAME | Tools for building MAME on Windows';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Tools for building MAME on Windows</h1></center>
                 
					<p>
					The primary build of MAME is a command-line Windows program. It is compiled
					using gcc version 4.9.1 under the MinGW development environment. If you want
					to build your own version of MAME, there are two ways of acquiring the 
					necessary tools to do so. The <a href="#easy">easy way</a> is to download one
					of the pre-assembled packages from this site, as described below.
					The <a href="#hard">hard way</a> is to acquire all the individual components that are used
					directly from the original sources and assemble the pieces together. Both
					approaches are described below.
					</p>

<!--					<p>
					Information about setting up the <a href="previous-20121207.html">previous set of build tools 
					from Dec 2012</a> is still available.
					</p>
-->

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

					<div class="panel panel-primary">
					  <div class="panel-heading">Binaries</div>
					  <table class="table">
					<tr>
						<td class="link"><a href="https://www.dropbox.com/s/hxy2css2oadp0rp/mingw-mame-w32-20140905.exe?dl=0"-->mingw-mame-w32-20140905.exe</a> (32-bit only)</td>
					</tr>
					<tr>
						<td class="link"><a href="https://www.dropbox.com/s/sf36vt1mp4glesz/mingw-mame-w64-20140905.exe?dl=0"-->mingw-mame-w64-20140905.exe</a> (64-bit only)</td>
					</tr>
					<tr>
						<td class="link"><a href="https://www.dropbox.com/s/wtq3sq7p5nv9jtr/mingw-mame-20140905.exe?dl=0"-->mingw-mame-20140905.exe</a> (32-bit and 64-bit)</td>
					</tr>
					</table>
					  <div class="panel-footer">
						<center><?php require($_SERVER['DOCUMENT_ROOT'] . '/mirrors.txt'); ?></center>
					  </div>
					</div>

					<p>
					Note that the packages expand greatly (over 200MB for each one), so if you only intend
					on ever compiling 32-bit MAME or 64-bit MAME, just grab the specific one you want.
					</p>

					<p>
					Extract the package you downloaded into your <i>mingw</i> directory.
					</p>
					<p>
					Next, switch to the yours <i>mingw</i> directory and run setup-Qt.bat
					</p>

					<a name="compile"></a>

					<h3>3. Compile</h3>

					<p>
					Open up a command-line window. First, ensure that the appropriate <i>mingw</i>/bin directory
					is part of your search path (There is setenv.bat to help you with this as well). Do that by typing:
					</p>

					<code>set path=<i>mingw</i>\mingw64-w32\bin;<i>mingw</i>\mingw64-w32\opt\bin;<i>mingw</i>\mingw64-w32\Qt\bin; (32-bit)<br/>set path=<i>mingw</i>\mingw64-w64\bin;<i>mingw</i>\mingw64-w64\opt\bin;<i>mingw</i>\mingw64-w64\Qt\bin; (64-bit)</code>

					<p>
					Next, switch to the directory where the MAME sources live:
					</p>

					<code>cd <i>mame-source-path</i></code>

					<p>
					And then execute make to build it:
					</p>

					<code>make</code>

					<p>
					Wait a while, and you will have a fully built MAME executable.
					</p>

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

					<div class="panel panel-primary">
					  <div class="panel-heading">Binaries</div>
					  <table class="table">
					
					<tr>
						<td class="link">
							<a href="https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Personal%20Builds/mingw-builds/4.9.1/threads-win32/sjlj/i686-4.9.1-release-win32-sjlj-rt_v3-rev0.7z/download">i686-4.9.1-release-win32-sjlj-rt_v3-rev0.7z</a>							
						</td>
					</tr>
					<tr>
						<td class="link">
							<a href="https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Personal%20Builds/mingw-builds/4.9.1/threads-win32/seh/x86_64-4.9.1-release-win32-seh-rt_v3-rev0.7z/download">x86_64-4.9.1-release-win32-seh-rt_v3-rev0.7z</a>
						</td>
					</tr>
					</table>
					</div>

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

					<div class="panel panel-primary">
					  <div class="panel-heading">GNU-like tools</div>
					  <table class="table">
					<tr>
						<th width="50%">Binaries</th>
						<th width="50%">Source</th>
					</tr>
					<tr>
						<td class="link"><a href="20110519/mame-gnulike-20110519.exe">mame-gnulike-20110519.exe</a></td>
						<td class="link"><a href="20110519/mame-gnulike-src-20110519.exe">mame-gnulike-src-20110519.exe</a></td>
					</tr>
					</table>
					</div>

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

					<div class="panel panel-primary">
					  <div class="panel-heading">SDL</div>
					  <table class="table">

					<tr>
						<th width="50%">Binaries</th>
						<th width="50%">Source</th>
					</tr>
					<tr>
						<td class="link">
							<a href="http://www.libsdl.org/release/SDL-devel-1.2.15-mingw32.tar.gz">SDL-devel-1.2.15-mingw32.tar.gz</a>
						</td>
						<td class="link">
							<a href="http://www.libsdl.org/release/SDL-1.2.15.tar.gz">SDL-1.2.15.tar.gz</a>
						</td>
					</tr>
					<tr>
						<td class="link">
							<a href="https://www.libsdl.org/release/SDL2-devel-2.0.3-mingw.tar.gz">SDL2-devel-2.0.3-mingw.tar.gz</a>
						</td>
						<td class="link">
							<a href="https://www.libsdl.org/release/SDL2-2.0.3.tar.gz">SDL2-2.0.3.tar.gz</a>
						</td>
					</tr>
					</table>
					</div>

					<p>
					Extract this file into your a temporary directory. Move the <b>bin</b>, <b>include</b>,
					and <b>lib</b> directories into your <i>mingw</i> directory, merging the contents with
					the existing directories.
					</p>

					<h3>5. Compile</h3>

					<p>
					<a href="#compile">Hop back to the Easy Way</a> to finish these final two steps.
					</p>

				
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>					