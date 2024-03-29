<?php include_once 'header.inc'; ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Extending Bootstrap</h1>
    <p class="lead">Extend Bootstrap to take advantage of included styles and components, as well as LESS variables and mixins.</p>
  <div>
</header>

  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#built-with-less"><i class="icon-chevron-right"></i> Built with LESS</a></li>
          <li><a href="#compiling"><i class="icon-chevron-right"></i> Compiling Bootstrap</a></li>
          <li><a href="#static-assets"><i class="icon-chevron-right"></i> Use as static assets</a></li>
        </ul>
      </div>
      <div class="span9">



        <!-- BUILT WITH LESS
        ================================================== -->
        <section id="built-with-less">
          <div class="page-header">
            <h1>Built with LESS</h1>
          </div>

          <img style="float: right; height: 36px; margin: 10px 20px 20px" src="assets/img/less-logo-large.png" alt="LESS CSS">
          <p class="lead">Bootstrap is made with LESS at its core, a dynamic stylesheet language created by our good friend, <a href="http://cloudhead.io">Alexis Sellier</a>. It makes developing systems-based CSS faster, easier, and more fun.</p>

          <h3>Why LESS?</h3>
          <p>One of Bootstrap's creators wrote a quick <a href="http://www.wordsbyf.at/2012/03/08/why-less/">blog post about this</a>, summarized here:</p>
          <ul>
            <li>Bootstrap compiles faster ~6x faster with Less compared to Sass</li>
            <li>Less is written in JavaScript, making it easier to us to dive in and patch compared to Ruby with Sass.</li>
            <li>Less is more; we want to feel like we're writing CSS and making Bootstrap approachable to all.</li>
          </ul>

          <h3>What's included?</h3>
          <p>As an extension of CSS, LESS includes variables, mixins for reusable snippets of code, operations for simple math, nesting, and even color functions.</p>

          <h3>Learn more</h3>
          <p>Visit the official website at <a href="http://lesscss.org">http://lesscss.org</a> to learn more.</p>
        </section>



        <!-- COMPILING LESS AND BOOTSTRAP
        ================================================== -->
        <section id="compiling">
          <div class="page-header">
            <h1>Compiling Bootstrap with Less</h1>
          </div>

          <p class="lead">Since our CSS is written with Less and utilizes variables and mixins, it needs to be compiled for final production implementation. Here's how.</p>

          <div class="alert alert-info">
            <strong>Note:</strong> If you're submitting a pull request to GitHub with modified CSS, you <strong>must</strong> recompile the CSS via any of these methods.
          </div>

          <h2>Tools for compiling</h2>

          <h3>Node with makefile</h3>
          <p>Install the LESS command line compiler, JSHint, Recess, and uglify-js globally with npm by running the following command:</p>
          <pre>$ npm install -g less jshint recess uglify-js</pre>
          <p>Once installed just run <code>make</code> from the root of your bootstrap directory and you're all set.</p>
          <p>Additionally, if you have <a href="https://github.com/mynyml/watchr">watchr</a> installed, you may run <code>make watch</code> to have bootstrap automatically rebuilt every time you edit a file in the bootstrap lib (this isn't required, just a convenience method).</p>

          <h3>Command line</h3>
          <p>Install the LESS command line tool via Node and run the following command:</p>
          <pre>$ lessc ./less/bootstrap.less > bootstrap.css</pre>
          <p>Be sure to include <code>--compress</code> in that command if you're trying to save some bytes!</p>

          <h3>JavaScript</h3>
          <p><a href="http://lesscss.org/">Download the latest Less.js</a> and include the path to it (and Bootstrap) in the <code>&lt;head&gt;</code>.</p>
<pre class="prettyprint">
&lt;link rel="stylesheet/less" href="/path/to/bootstrap.less"&gt;
&lt;script src="/path/to/less.js"&gt;&lt;/script&gt;
</pre>
          <p>To recompile the .less files, just save them and reload your page. Less.js compiles them and stores them in local storage.</p>

          <h3>Unofficial Mac app</h3>
          <p><a href="http://incident57.com/less/">The unofficial Mac app</a> watches directories of .less files and compiles the code to local files after every save of a watched .less file. If you like, you can toggle preferences in the app for automatic minifying and which directory the compiled files end up in.</p>

          <h3>More apps</h3>
          <h4><a href="http://crunchapp.net/" target="_blank">Crunch</a></h4>
          <p>Crunch is a great looking LESS editor and compiler built on Adobe Air.</p>
          <h4><a href="http://incident57.com/codekit/" target="_blank">CodeKit</a></h4>
          <p>Created by the same guy as the unofficial Mac app, CodeKit is a Mac app that compiles LESS, SASS, Stylus, and CoffeeScript.</p>
          <h4><a href="http://wearekiss.com/simpless" target="_blank">Simpless</a></h4>
          <p>Mac, Linux, and Windows app for drag and drop compiling of LESS files. Plus, the <a href="https://github.com/Paratron/SimpLESS" target="_blank">source code is on GitHub</a>.</p>

        </section>



        <!-- Static assets
        ================================================== -->
        <section id="static-assets">
          <div class="page-header">
            <h1>Use as static assets</h1>
          </div>
          <p class="lead"><a href="./getting-started.php">Quickly start</a> any web project by dropping in the compiled or minified CSS and JS. Layer on custom styles separately for easy upgrades and maintenance moving forward.</p>

          <h3>Setup file structure</h3>
          <p>Download the latest compiled Bootstrap and place into your project. For example, you might have something like this:</p>
<pre>
  <span class="icon-folder-open"></span> app/
      <span class="icon-folder-open"></span> layouts/
      <span class="icon-folder-open"></span> templates/
  <span class="icon-folder-open"></span> public/
      <span class="icon-folder-open"></span> css/
          <span class="icon-file"></span> bootstrap.min.css
      <span class="icon-folder-open"></span> js/
          <span class="icon-file"></span> bootstrap.min.js
      <span class="icon-folder-open"></span> img/
          <span class="icon-file"></span> glyphicons-halflings.png
          <span class="icon-file"></span> glyphicons-halflings-white.png
</pre>

          <h3>Utilize starter template</h3>
          <p>Copy the following base HTML to get started.</p>
<pre class="prettyprint linenums">
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;link href="public/css/bootstrap.min.css" rel="stylesheet"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;script src="public/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

          <h3>Layer on custom code</h3>
          <p>Work in your custom CSS, JS, and more as necessary to make Bootstrap your own with your own separate CSS and JS files.</p>
<pre class="prettyprint linenums">
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;link href="public/css/bootstrap.min.css" rel="stylesheet"&gt;
    &lt;!-- Project --&gt;
    &lt;link href="public/css/application.css" rel="stylesheet"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;script src="public/js/bootstrap.min.js"&gt;&lt;/script&gt;
    &lt;!-- Project --&gt;
    &lt;script src="public/js/application.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

        </section>

      </div>
    </div>

  </div>

<?php include_once 'footer.inc'; ?>