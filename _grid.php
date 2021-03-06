<div class="demo-subtitle first">
  Media queries
</div>
<?php  preInit(true,'css'); ?>
/* Extra small devices (phones, less than 768px) */
/* No media query since this is the default in Bootstrap */

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { ... }

/* Medium devices (desktops, 992px and up) */
@media (min-width: 992px) { ... }

/* Large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) { ... }
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Grid options
</div>
<div class="table-responsive"> <table class="table table-bordered table-striped"> <thead> <tr> <th></th> <th> Extra small devices <small>Phones (&lt;768px)</small> </th> <th> Small devices <small>Tablets (≥768px)</small> </th> <th> Medium devices <small>Desktops (≥992px)</small> </th> <th> Large devices <small>Desktops (≥1200px)</small> </th> </tr> </thead> <tbody> <tr> <th class="text-nowrap" scope="row">Grid behavior</th> <td>Horizontal at all times</td> <td colspan="3">Collapsed to start, horizontal above breakpoints</td> </tr> <tr> <th class="text-nowrap" scope="row">Container width</th> <td>None (auto)</td> <td>750px</td> <td>970px</td> <td>1170px</td> </tr> <tr> <th class="text-nowrap" scope="row">Class prefix</th> <td><code>.col-xs-</code></td> <td><code>.col-sm-</code></td> <td><code>.col-md-</code></td> <td><code>.col-lg-</code></td> </tr> <tr> <th class="text-nowrap" scope="row"># of columns</th> <td colspan="4">12</td> </tr> <tr> <th class="text-nowrap" scope="row">Column width</th> <td class="text-muted">Auto</td> <td>~62px</td> <td>~81px</td> <td>~97px</td> </tr> <tr> <th class="text-nowrap" scope="row">Gutter width</th> <td colspan="4">30px (15px on each side of a column)</td> </tr> <tr> <th class="text-nowrap" scope="row">Nestable</th> <td colspan="4">Yes</td> </tr> <tr> <th class="text-nowrap" scope="row">Offsets</th> <td colspan="4">Yes</td> </tr> <tr> <th class="text-nowrap" scope="row">Column ordering</th> <td colspan="4">Yes</td> </tr> </tbody> </table> </div>

<div class="demo-subtitle">
  Example
</div>
<?php  preInit(true); ?>
<div class="row">
  <div class="col-xs-12 col-md-8">...</div>
  <div class="col-xs-6 col-md-4">...</div>
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Fluid container
</div>
<?php  preInit(true); ?>
<div class="container-fluid">
  <div class="row">
    ...
  </div>
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Offsetting columns
</div>
<?php  preInit(true); ?>
<div class="row">
  <div class="col-md-4">...</div>
  <div class="col-md-4 col-md-offset-4">...</div>
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Column ordering
</div>
<p>Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code> modifier classes.</p>
<div class="row">
  <div class="col-md-9 col-md-push-3" style="border:1px solid #DDD;padding: 15px;">.col-md-9 .col-md-push-3</div>
  <div class="col-md-3 col-md-pull-9" style="border:1px solid #DDD;border-right:none;padding: 15px;">.col-md-3 .col-md-pull-9</div>
</div>
<?php  preInit(true); ?>
<div class="row">
  <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
  <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
</div>
<?php  preEnd(); ?>