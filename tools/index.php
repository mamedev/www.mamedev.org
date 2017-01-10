<?php
$title = 'MAME | Tools for building MAME on Windows';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Tools for building MAME on Windows</h1></center>
                 
<h1>MAME Build Tools</h1>
<br/>
<p><a name="user-content-introduction"></a></p><a name="user-content-introduction">

<h2><a id="user-content-introduction" class="anchor" href="#introduction" aria-hidden="true"></a>Introduction</h2>

<p>The MAME development environment for Windows consists of the GCC compiler (by way of MinGW), and the MSYS2 (POSIX/Unix compatability layer), plus various utilities such as Python and Git. It is available as a prepackaged installer, or can be assembled from upstream components. </p>

</a><p>Source control is handled by github (<strong><em><a href="https://github.com/mamedev/mame.git">https://github.com/mamedev/mame.git</a></em></strong>), so you'll need to check out a copy.
Various modules are disabled by default, such as the MAME interactive debugger, but can be enabled through arguments when building and may require additional MSYS2 packages to be installed.</p>

<p><a name="user-content-installandbuild"></a></p><a name="user-content-installandbuild">

<h2><a id="user-content-installation-and-building" class="anchor" href="#installation-and-building" aria-hidden="true"></a>Installation and building</h2>

</a><p><a name="user-content-installandbuild"></a><a name="user-content-downloads"></a></p><a name="user-content-downloads">

<h3><a id="user-content-downloads" class="anchor" href="#downloads" aria-hidden="true"></a>Downloads</h3>

</a><ul><a name="user-content-downloads">
</a><li>Windows 64-bit (x64) - <a href="https://github.com/mamedev/buildtools/releases/download/1.5/msys64-2016-02-16.exe">msys64-2016-02-16.exe</a> </li>
<li>Windows 32-bit (x86) - <a href="https://github.com/mamedev/buildtools/releases/download/1.5/msys32-2016-02-16.exe">msys32-2016-02-16.exe</a></li>
<li>Dual 32-bit/64-bit - <a href="https://github.com/mamedev/buildtools/releases/download/1.5/msys64-32-2016-02-16.exe">msys64-32-2016-02-16.exe</a> <em>(If you have 64-bit Windows but wish to build for both 32-bit and 64-bit. To switch between different mingw versions use <strong>config32.bat</strong> and <strong>config64.bat</strong>)</em></li>
</ul>

<p><a name="user-content-installation"></a></p><a name="user-content-installation">

<h3><a id="user-content-installation" class="anchor" href="#installation" aria-hidden="true"></a>Installation</h3>

<p>If you are installing it in a location other than the default (<em>c:\msys64</em> or <em>c:\msys32</em>), after you unpack double-click : <strong>autorebase.bat</strong></p>

<p>To open a non-posix shell there are two batch files: <strong>win32env.bat</strong> for regular windows console, and <strong>win32con.bat</strong> for fancy looking conemu console.</p>

<p><strong>Important</strong> thing is to setup your git environment first</p>

<div class="highlight highlight-source-shell"><pre>git config --global core.autocrlf <span class="pl-c1">true</span></pre></div>

<p>And if you are contributor</p>

<div class="highlight highlight-source-shell"><pre>git config --global user.email youremail@something.com<br/>

git config --global user.name <span class="pl-s"><span class="pl-pds">"</span>Firstname Lastname<span class="pl-pds">"</span></span></pre></div>

</a><p><a name="user-content-installation"></a><a name="user-content-building"></a></p><a name="user-content-building">

<h3><a id="user-content-building" class="anchor" href="#building" aria-hidden="true"></a>Building</h3>

<p>Then, to download the MAME source under your Msys2 user's homedir:</p>

<div class="highlight highlight-source-shell"><pre>git clone https://github.com/mamedev/mame.git</pre></div>

<p>Alternatively, locate your existing source tree (drives are mapped to hidden dirs /c etc. under the virtual root):</p>

<div class="highlight highlight-source-shell"><pre><span class="pl-c1">cd</span> /c/Projects/mame</pre></div>

<p>And finally to build:</p>

<div class="highlight highlight-source-shell"><pre>make</pre></div>

</a><p><a name="user-content-building"></a><a name="user-content-updating"></a></p><a name="user-content-updating">

<h2><a id="user-content-updating-build-tools" class="anchor" href="#updating-build-tools" aria-hidden="true"></a>Updating build tools</h2>

<p>Similar to package managers on Linux like apt-get, yum etc. MSYS2 can automatically update packages for fixes, security updates etc.
To update all installed packages to current, from a regular Windows console run the following:</p>

<div class="highlight highlight-source-shell"><pre>pacman -Sy<br/>

pacman -S bash pacman msys2-runtime --noconfirm --needed</pre></div>

<p>Next, exit the console and restart Msys2.</p>

<p>Finally, once back at the console, execute:</p>

<div class="highlight highlight-source-shell"><pre>pacman -Su --noconfirm</pre></div>

</a><p><a name="user-content-updating"></a><a name="user-content-advanced"></a></p><a name="user-content-advanced">

<h2><a id="user-content-alternative-shells-for-advanced-usage" class="anchor" href="#alternative-shells-for-advanced-usage" aria-hidden="true"></a>Alternative Shells for advanced usage</h2>

<p>For a simple MSYS32 terminal use <strong>buildtools.bat</strong> to start. </p>

<p>For a fancier looking one use <strong>conemu.bat</strong>. </p>

<p>There are also <strong>buildtools_32.bat</strong> and <strong>conemu_32.bat</strong> enforcing mingw32 on 64-bit tools (makes sense if you use combined distribution).</p>

</a><p><a name="user-content-advanced">For more information about Msys2, see </a><a href="http://sourceforge.net/p/msys2/wiki/MSYS2%20introduction/">MSYS2 Introduction</a>. </p>

<p><a name="user-content-optional"></a></p><a name="user-content-optional">

<h2><a id="user-content-optional-additional-packages" class="anchor" href="#optional-additional-packages" aria-hidden="true"></a>Optional additional packages</h2>

</a><p><a name="user-content-optional"></a><a name="user-content-optional-sdl"></a></p><a name="user-content-optional-sdl">

<h3><a id="user-content-sdl" class="anchor" href="#sdl" aria-hidden="true"></a>SDL</h3>

<p>If you wish to build with the SDL renderer:</p>

<p><strong>For x64</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-x86_64-SDL2 mingw-w64-x86_64-SDL2_ttf</pre></div>

<p><strong>For x86</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-i686-SDL2 mingw-w64-i686-SDL2_ttf</pre></div>

</a><p><a name="user-content-optional-sdl"></a><a name="user-content-optional-qt5"></a></p><a name="user-content-optional-qt5">

<h3><a id="user-content-qt5" class="anchor" href="#qt5" aria-hidden="true"></a>QT5</h3>

<p>If you wish to build with the QT5 debugger:</p>

<p><strong>For x64</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-x86_64-qt5</pre></div>

<p><strong>For x86</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-i686-qt5</pre></div>

</a><p><a name="user-content-optional-qt5"></a><a name="user-content-optional-qt4"></a></p><a name="user-content-optional-qt4">

<h3><a id="user-content-qt4" class="anchor" href="#qt4" aria-hidden="true"></a>QT4</h3>

<p>If you with to build the QMC2 frontend or similar:</p>

<p><strong>For x64</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-x86_64-qt4</pre></div>

<p><strong>For x86</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-i686-qt4</pre></div>

</a><p><a name="user-content-optional-qt4"></a><a name="user-content-optional-doxygen"></a></p><a name="user-content-optional-doxygen">

<h3><a id="user-content-doxygen" class="anchor" href="#doxygen" aria-hidden="true"></a>Doxygen</h3>

<p>To be able to generate the documentation from the source:</p>

<div class="highlight highlight-source-shell"><pre>   pacman -S doxygen </pre></div>

</a><p><a name="user-content-optional-doxygen"></a><a name="user-content-optional-ccache"></a></p><a name="user-content-optional-ccache">

<h3><a id="user-content-ccache" class="anchor" href="#ccache" aria-hidden="true"></a>CCache</h3>

<p>To be able to use ccache to speed-up (re)compilation</p>

<p><strong>For x64</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-x86_64-ccache </pre></div>

<p><strong>For x86</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-i686-ccache </pre></div>

</a><p><a name="user-content-optional-ccache"></a><a name="user-content-optional-ccache"></a></p><a name="user-content-optional-ccache">

<h3><a id="user-content-cmake" class="anchor" href="#cmake" aria-hidden="true"></a>CMake</h3>

<p>Used as build system for some other project that can be handy</p>

<p><strong>For x64</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-x86_64-cmake </pre></div>

<p><strong>For x86</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-i686-cmake </pre></div>

<p><strong>To build in Windows environment use from build folder:</strong></p>

<div class="highlight highlight-source-shell"><pre>   cmake -G <span class="pl-s"><span class="pl-pds">"</span>MinGW Makefiles<span class="pl-pds">"</span></span> .. -DCMAKE_MAKE_PROGRAM=c:<span class="pl-cce">\m</span>sys64<span class="pl-cce">\w</span>in32<span class="pl-cce">\m</span>ake.exe</pre></div>

<p><strong>To build in MSYS environment use from build folder:</strong></p>

<div class="highlight highlight-source-shell"><pre>   cmake -G <span class="pl-s"><span class="pl-pds">"</span>MSYS Makefiles<span class="pl-pds">"</span></span> ..</pre></div>

</a><p><a name="user-content-optional-ccache"></a><a name="user-content-optional-clang"></a></p><a name="user-content-optional-clang">

<h3><a id="user-content-clang" class="anchor" href="#clang" aria-hidden="true"></a>Clang</h3>

<p>If you wish to compile/link with the alternative Clang, go ahead and download <strong>STILL EXPERIMENTAL</strong>:</p>

<p><strong>For x64</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-x86_64-clang mingw-w64-x86_64-clang-analyzer mingw-w64-x86_64-clang-tools-extra </pre></div>

<p><strong>For x86</strong></p>

<div class="highlight highlight-source-shell"><pre>   pacman -S mingw-w64-i686-clang mingw-w64-i686-clang-analyzer mingw-w64-i686-clang-tools-extra</pre></div>
</a>

		<br/><br/>
			<a href="previous-20150228.php">Previous version</a> is still available
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>					
