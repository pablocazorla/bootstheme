<div class="demo-subtitle first">
  Basic Examples
</div>
<div class="alert alert-success" role="alert"> <strong>Well done!</strong> You successfully read this important alert message. </div>
<div class="alert alert-info" role="alert"> <strong>Heads up!</strong> This alert needs your attention, but it's not super important. </div>
<div class="alert alert-warning" role="alert"> <strong>Warning!</strong> Better check yourself, you're not looking too good. </div>
<div class="alert alert-danger" role="alert"> <strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
<?php  preInit(true); ?>
<div class="alert alert-success" role="alert">...</div>
<div class="alert alert-info" role="alert">...</div>
<div class="alert alert-warning" role="alert">...</div>
<div class="alert alert-danger" role="alert">...</div>
<?php  preEnd(); ?>
<div class="demo-subtitle">
  Dismissible alerts
</div>
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<?php  preInit(true); ?>
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<?php  preEnd(); ?>
<div class="demo-subtitle">
  Links in alerts
</div>

<div class="alert alert-success" role="alert"> <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>. </div>
<div class="alert alert-info" role="alert"> <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important. </div>
<div class="alert alert-warning" role="alert"> <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>. </div>
<div class="alert alert-danger" role="alert"> <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again. </div>

<?php  preInit(true); ?>
<div class="alert alert-success" role="alert">
  <a href="#" class="alert-link">...</a>
</div>
<div class="alert alert-info" role="alert">
  <a href="#" class="alert-link">...</a>
</div>
<div class="alert alert-warning" role="alert">
  <a href="#" class="alert-link">...</a>
</div>
<div class="alert alert-danger" role="alert">
  <a href="#" class="alert-link">...</a>
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Dismissable
</div>
<p>Just add <code>data-dismiss="alert"</code> to your close button to automatically give an alert close functionality. Closing an alert removes it from the DOM.</p>
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  <h4>Oh snap! You got an error!</h4>
  <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
  <p>
    <button type="button" class="btn btn-danger" data-dismiss="alert">Take this action</button>
    <button type="button" class="btn btn-default" data-dismiss="alert">Or do this</button>
  </p>
</div>
<?php  preInit(true); ?>
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  <h4>Oh snap! You got an error!</h4>
  <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
  <p>
    <button type="button" class="btn btn-danger" data-dismiss="alert">Take this action</button>
    <button type="button" class="btn btn-default" data-dismiss="alert">Or do this</button>
  </p>
</div>
<?php  preEnd(); ?>
<div class="demo-subtitle">
  Via javascript
</div>
<?php  preInit(true,'javascript'); ?>
$('#example').alert('close');
<?php  preEnd(); ?>
