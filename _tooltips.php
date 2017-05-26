<div class="demo-subtitle first">
  Example
</div>
<p>Tight pants next level keffiyeh <a href="#" data-toggle="tooltip" title="" data-original-title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" data-toggle="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" data-toggle="tooltip" title="" data-original-title="Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" data-toggle="tooltip" title="" data-original-title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.</p>

<div class="demo-subtitle">
  Visual
</div>

<div class="showwer-tooltip">
  <div class="tooltip left" role="tooltip">
    <div class="tooltip-arrow"></div>
    <div class="tooltip-inner"> Tooltip on the left </div>
  </div>
  <div class="tooltip top" role="tooltip">
    <div class="tooltip-arrow"></div>
    <div class="tooltip-inner"> Tooltip on the top </div>
  </div>
  <div class="tooltip bottom" role="tooltip">
    <div class="tooltip-arrow"></div>
    <div class="tooltip-inner"> Tooltip on the bottom </div>
  </div>
  <div class="tooltip right" role="tooltip">
    <div class="tooltip-arrow"></div>
    <div class="tooltip-inner"> Tooltip on the right </div>
  </div>
</div>


<div class="demo-subtitle">
  Four directions
</div>
<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>

<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>

<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>

<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
<?php  preInit(true); ?>
<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>

<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>

<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>

<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  You must initialize via javascript
</div>
<?php  preInit(true,'javascript'); ?>
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
<?php  preEnd(); ?>
<div class="demo-subtitle">
  Usage
</div>
<?php  preInit(true,'javascript'); ?>
$('#example').tooltip(options);
<?php  preEnd(); ?>