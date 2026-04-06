<?php
$title = 'MAME | Tools for building MAME on Windows';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Tools for building MAME on Windows</h1></center>
                 
<h1>MAME Build Tools</h1>
<br/>

<h2><a id="user-content-introduction" class="anchor" href="#introduction" aria-hidden="true"></a>Introduction</h2>

<p>The standard environment for building MAME on Windows consists
of:</p>

<ul>
    <li>The MSYS2 environment (a Linux-like POSIX compatibility
    layer</li>
    <li>The MinGW GCC or clang compiler and libraries</li>
    <li>Various utilities including Git, Python and GNU Make</li>
</ul>

<p>You can create a suitable environment by installing MSYS2, and then
installing the necessary additional packages using the <b>pacman</b>
package manager command.</p>

<p>Our main source code repository is hosted on GitHub (<a
href="https://github.com/mamedev/mame.git">https://github.com/mamedev/mame.git</a>),
so you’ll need to check out a copy.  Various optional features are
disabled by default, but can be by passing additional arguments to the
<b>make</b> command.  Optional features may require additional MSYS2
packages to be installed.  For more information on compiling MAME, see
the <a
href="https://docs.mamedev.org/initialsetup/compilingmame.html">relevant
page</a> on our documentation site.</p>

<h2><a id="user-content-installation-and-building" class="anchor" href="#installation-and-building" aria-hidden="true"></a>Installation and building</h2>

<h3><a id="user-content-installation" class="anchor" href="#installation" aria-hidden="true"></a>Installation</h3>

<p>First, download a copy of the MSYS2 environment from <a
href="https://www.msys2.org/">their web site</a> and install it.  Note
that the MSYS2 environment requires a 64-bit edition of Windows 10 1809
or later for x86 or ARM.  After installing the MSYS2 environment, open
one of the MSYS2 shells so you can start installing packages.</p>

<p>You will always need to install Git, GNU Make, and the diff/patch
utilities:</p>

<div class="highlight highlight-source-shell"><pre>pacman -S git make diffutils patch</pre></div>

<p>The additional packages you will need depend on the environment you
will be using to build MAME.  If you’re using an x86 system, you can use
the <b>UCRT64</b> environment.  This gives you a choice of the GCC and
clang compilers.  You can also use the <b>CLANG64</b> environment,
although this limits you to using the clang compiler, and some
additional tools may not be available.  If you’re using an ARM system,
you should use the <b>CLANGARM64</b> environment.</p>

<p>If you’re using the <b>UCRT64</b> environment, you should install
Python and the LLVM tools used for archiving static libraries and
linking:</p>

<div class="highlight highlight-source-shell"><pre>pacman -S mingw-w64-ucrt-x86_64-{python,libc++,llvm,llvm-tools,lld}</pre></div>

<p>If you’ll be building with the GCC compiler, install it as well:</p>

<div class="highlight highlight-source-shell"><pre>pacman -S mingw-w64-ucrt-x86_64-gcc</pre></div>

<p>If you’ll be building with the clang compiler, install it as
well:</p>

<div class="highlight highlight-source-shell"><pre>pacman -S mingw-w64-ucrt-x86_64-clang</pre></div>

<p>If you’re using the <b>CLANG64</b> environment, you should install
Python, the LLVM tools used for archiving static libraries and linking,
clang, and the GCC compatibility wrapper:</p>

<div class="highlight highlight-source-shell"><pre>pacman -S mingw-w64-clang-x86_64-{python,libc++,llvm,llvm-tools,lld,clang,gcc-compat}</pre></div>

<p>If you’re using the <b>CLANGARM64</b> environment, you should install
Python, the LLVM tools used for archiving static libraries and linking,
clang, and the GCC compatibility wrapper:</p>

<div class="highlight highlight-source-shell"><pre>pacman -S mingw-w64-clang-aarch64-{python,libc++,llvm,llvm-tools,lld,clang,gcc-compat}</pre></div>

<p>After installing the required packages, an <strong>important</strong>
thing is to set up Git first:</p>

<div class="highlight highlight-source-shell"><pre>git config --global core.autocrlf <span class="pl-c1">true</span></pre></div>

<p>And if you are contributor:</p>

<div class="highlight highlight-source-shell"><pre>git config --global user.email youremail@something.com<br/>
git config --global user.name <span class="pl-s"><span class="pl-pds">"</span>Firstname Lastname<span class="pl-pds">"</span></span></pre></div>

<h3><a id="user-content-building" class="anchor" href="#building" aria-hidden="true"></a>Building</h3>

<p>Then, to download the MAME source inside your MSYS2 home
directory:</p>

<div class="highlight highlight-source-shell"><pre>git clone https://github.com/mamedev/mame.git</pre></div>

<p>Alternatively, locate your existing source tree (drives are mapped to hidden directories <tt>/c</tt> etc. under the virtual root):</p>

<div class="highlight highlight-source-shell"><pre><span class="pl-c1">cd</span> /c/Projects/mame</pre></div>

<p>And finally to build, if you’re using the GCC compiler:</p>

<div class="highlight highlight-source-shell"><pre>make</pre></div>

<p>Or if you’re using the clang compiler:</p>

<div class="highlight highlight-source-shell"><pre>make OVERRIDE_CC=clang OVERRIDE_CXX=clang++</pre></div>

<h2><a id="user-content-updating-build-tools" class="anchor" href="#updating-build-tools" aria-hidden="true"></a>Updating build tools</h2>

<p>Similar to package managers on Linux like apt-get, yum etc. MSYS2 can
automatically update packages for fixes, security updates etc.  To
update all installed packages to current, run the following command from
an MSYS2 shell:</p>

<div class="highlight highlight-source-shell"><pre>pacman -Sy<br/>
pacman -S bash pacman msys2-runtime --needed</pre></div>

<p>Next, exit the shell and restart MSYS2.</p>

<p>Finally, once back at the shell, execute:</p>

<div class="highlight highlight-source-shell"><pre>pacman -Su</pre></div>

<h2><a id="user-content-alternative-shells-for-advanced-usage" class="anchor" href="#alternative-shells-for-advanced-usage" aria-hidden="true"></a>Alternative Shells for advanced usage</h2>

<p>The shell you should use depends on the environment you’re using to
build MAME:</p>

<ul>
    <li><strong>ucrt64.exe</strong> for the 64-bit x86 UCRT64
    environment</li>
    <li><strong>clang64.exe</strong> for the 64-bit x86 CLANG64
    environment</li>
    <li><strong>clangarm64.exe</strong> for the 64-bit ARM CLANGARM64
    environment</li>
</ul>

<p>For more information about MSYS2, see <a
href="https://www.msys2.org/wiki/MSYS2-introduction/">MSYS2-Introduction</a>.</p>

<h2><a id="user-content-optional-additional-packages" class="anchor" href="#optional-additional-packages" aria-hidden="true"></a>Optional additional packages</h2>

<p>See our <a
href="https://docs.mamedev.org/initialsetup/compilingmame.html#microsoft-windows">compiling
documentation</a> for information on additional packages needed for
optional features.</p>

		<br/><br/>
			<a href="previous-20220112.php">Previous version</a> is still available
	<br/><br/><br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>					
