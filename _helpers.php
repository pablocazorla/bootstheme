<div class="demo-subtitle first">
  Contextual color
</div>
<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
<?php  preInit(true); ?>
<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Contextual color
</div>
<p class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
<p class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
<p class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
<p class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</p>
<p class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
<?php  preInit(true); ?>
<p class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
<p class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
<p class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
<p class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</p>
<p class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Close icon
</div>
<div style="width: 30px;">
	<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<br>
</div>
<?php  preInit(true); ?>
<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Close icon
</div>
<span class="caret"></span>
<?php  preInit(true); ?>
<span class="caret"></span>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Quick floats
</div>
<?php  preInit(true); ?>
<div class="pull-left">...</div>
<div class="pull-right">...</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Center content blocks
</div>
<p>Set an element to <code>display: block</code> and center via <code>margin</code>.</p>
<?php  preInit(true); ?>
<div class="center-block">...</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Clearfix
</div>
<p>Easily clear <code>float</code>s by adding <code>.clearfix</code> <strong>to the parent element</strong>. Utilizes <a href="http://nicolasgallagher.com/micro-clearfix-hack/">the micro clearfix</a> as popularized by Nicolas Gallagher.</p>
<?php  preInit(true); ?>
<div class="clearfix">...</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Showing and hiding content
</div>
<?php  preInit(true); ?>
<div class="show">...</div>
<div class="hidden">...</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Showing and hiding content
</div>
<p>Hide an element to all devices <strong>except screen readers</strong> with <code>.sr-only</code>. Combine <code>.sr-only</code> with <code>.sr-only-focusable</code> to show the element again when it's focused (e.g. by a keyboard-only user). Necessary for following <a href="../getting-started/#accessibility">accessibility best practices</a>.</p>
<?php  preInit(true); ?>
<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Image replacement
</div>
<p>Utilize the <code>.text-hide</code> class to help replace an element's text content with a background image.</p>
<?php  preInit(true); ?>
<h1 class="text-hide">Custom heading</h1>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Responsive utilities
</div>
<div class="table-responsive"> <table class="table table-bordered responsive-utilities"> <thead> <tr> <th></th> <th> Extra small devices <small>Phones (&lt;768px)</small> </th> <th> Small devices <small>Tablets (≥768px)</small> </th> <th> Medium devices <small>Desktops (≥992px)</small> </th> <th> Large devices <small>Desktops (≥1200px)</small> </th> </tr> </thead> <tbody> <tr> <th scope="row"><code>.visible-xs-*</code></th> <td class="is-visible">Visible</td> <td class="is-hidden">Hidden</td> <td class="is-hidden">Hidden</td> <td class="is-hidden">Hidden</td> </tr> <tr> <th scope="row"><code>.visible-sm-*</code></th> <td class="is-hidden">Hidden</td> <td class="is-visible">Visible</td> <td class="is-hidden">Hidden</td> <td class="is-hidden">Hidden</td> </tr> <tr> <th scope="row"><code>.visible-md-*</code></th> <td class="is-hidden">Hidden</td> <td class="is-hidden">Hidden</td> <td class="is-visible">Visible</td> <td class="is-hidden">Hidden</td> </tr> <tr> <th scope="row"><code>.visible-lg-*</code></th> <td class="is-hidden">Hidden</td> <td class="is-hidden">Hidden</td> <td class="is-hidden">Hidden</td> <td class="is-visible">Visible</td> </tr> </tbody> <tbody> <tr> <th scope="row"><code>.hidden-xs</code></th> <td class="is-hidden">Hidden</td> <td class="is-visible">Visible</td> <td class="is-visible">Visible</td> <td class="is-visible">Visible</td> </tr> <tr> <th scope="row"><code>.hidden-sm</code></th> <td class="is-visible">Visible</td> <td class="is-hidden">Hidden</td> <td class="is-visible">Visible</td> <td class="is-visible">Visible</td> </tr> <tr> <th scope="row"><code>.hidden-md</code></th> <td class="is-visible">Visible</td> <td class="is-visible">Visible</td> <td class="is-hidden">Hidden</td> <td class="is-visible">Visible</td> </tr> <tr> <th scope="row"><code>.hidden-lg</code></th> <td class="is-visible">Visible</td> <td class="is-visible">Visible</td> <td class="is-visible">Visible</td> <td class="is-hidden">Hidden</td> </tr> </tbody> </table> </div>

<div class="table-responsive"> <table class="table table-bordered table-striped"> <thead> <tr> <th>Group of classes</th> <th>CSS <code>display</code></th> </tr> </thead> <tbody> <tr> <th scope="row"><code>.visible-*-block</code></th> <td><code>display: block;</code></td> </tr> <tr> <th scope="row"><code>.visible-*-inline</code></th> <td><code>display: inline;</code></td> </tr> <tr> <th scope="row"><code>.visible-*-inline-block</code></th> <td><code>display: inline-block;</code></td> </tr> </tbody> </table> </div>

<div class="demo-subtitle">
  Print classes
</div>

<div class="table-responsive"> <table class="table table-bordered table-striped responsive-utilities"> <thead> <tr> <th>Classes</th> <th>Browser</th> <th>Print</th> </tr> </thead> <tbody> <tr> <th scope="row"> <code>.visible-print-block</code><br> <code>.visible-print-inline</code><br> <code>.visible-print-inline-block</code> </th> <td class="is-hidden">Hidden</td> <td class="is-visible">Visible</td> </tr> <tr> <th scope="row"><code>.hidden-print</code></th> <td class="is-visible">Visible</td> <td class="is-hidden">Hidden</td> </tr> </tbody> </table> </div>