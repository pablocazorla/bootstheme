<div class="demo-subtitle first">
  Example
</div>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
<?php  preInit(true); ?>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
<?php  preEnd(); ?>
<div class="demo-subtitle">
  Pills
</div>
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
<?php  preInit(true); ?>
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
<?php  preEnd(); ?>
<p>Pills are also vertically stackable. Just add <code>.nav-stacked</code>.</p>
<div style="max-width: 200px">
	<ul class="nav nav-pills nav-stacked">
	  <li role="presentation" class="active"><a href="#">Home</a></li>
	  <li role="presentation"><a href="#">Profile</a></li>
	  <li role="presentation"><a href="#">Messages</a></li>
	</ul>
</div>
<?php  preInit(true); ?>
<ul class="nav nav-pills nav-stacked">
  ...
</ul>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Justified
</div>
<ul class="nav nav-tabs nav-justified">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
<?php  preInit(true); ?>
<ul class="nav nav-tabs nav-justified">
  ...
</ul>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Disabled links
</div>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation" class="disabled" ><a href="#">Disabled link</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
<?php  preInit(true); ?>
...
<li class="disabled"><a href="#">Disabled link</a></li>
...
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Using dropdowns
</div>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Help</a></li>
  <li role="presentation" class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </a>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </li>
</ul>
<?php  preInit(true); ?>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Help</a></li>
  <li role="presentation" class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </a>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </li>
</ul>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Fade effect
</div>
<?php  preInit(true); ?>
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="home">...</div>
  <div role="tabpanel" class="tab-pane fade" id="profile">...</div>
  <div role="tabpanel" class="tab-pane fade" id="messages">...</div>
  <div role="tabpanel" class="tab-pane fade" id="settings">...</div>
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Via javascript
</div>
<?php  preInit(true,'javascript'); ?>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});
<?php  preEnd(); ?>