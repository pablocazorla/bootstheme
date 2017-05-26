<div class="demo-subtitle first">
  Basic example
</div>
<div style="max-width: 400px;">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>
<br>
<div class="input-group">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">@example.com</span>
</div>
<br>
<div class="input-group">
  <span class="input-group-addon">$</span>
  <input type="text" class="form-control text-right" aria-label="Amount (to the nearest dollar)" placeholder="00">
  <span class="input-group-addon">.00</span>
</div>
<br>
<label for="basic-url">Your vanity URL</label>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>
</div>
<?php  preInit(); ?>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">@example.com</span>
</div>

<div class="input-group">
  <span class="input-group-addon">$</span>
  <input type="text" class="form-control  text-right" aria-label="Amount (to the nearest dollar)" placeholder="00">
  <span class="input-group-addon">.00</span>
</div>

<label for="basic-url">Your vanity URL</label>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Sizing
</div>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
</div>
<?php  preInit(true); ?>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
</div>

<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Checkboxes and radio addons
</div>
<div style="max-width: 400px">
  <div class="input-group">
    <span class="input-group-addon">
        <input type="checkbox" aria-label="...">
      </span>
    <input type="text" class="form-control" aria-label="...">
  </div>
  <!-- /input-group -->
  <br>
  <div class="input-group">
    <span class="input-group-addon">
        <input type="radio" aria-label="...">
      </span>
    <input type="text" class="form-control" aria-label="...">
  </div>
  <!-- /input-group -->
</div>
<?php  preInit(true); ?>
<div class="input-group">
  <span class="input-group-addon">
      <input type="checkbox" aria-label="...">
    </span>
  <input type="text" class="form-control" aria-label="...">
</div>

<div class="input-group">
  <span class="input-group-addon">
      <input type="radio" aria-label="...">
    </span>
  <input type="text" class="form-control" aria-label="...">
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Button addons
</div>
<div style="max-width: 400px">
  <div class="input-group">
    <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    <input type="text" class="form-control" placeholder="Search for...">
  </div>
  <br>
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for...">
    <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
  </div>
</div>
<?php  preInit(true); ?>
<div class="input-group">
  <span class="input-group-btn">
      <button class="btn btn-default" type="button">Go!</button>
    </span>
  <input type="text" class="form-control" placeholder="Search for...">
</div>

<div class="input-group">
  <input type="text" class="form-control" placeholder="Search for...">
  <span class="input-group-btn">
      <button class="btn btn-default" type="button">Go!</button>
    </span>
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Buttons with dropdowns
</div>
<div style="max-width: 400px">
  <div class="input-group">
    <div class="input-group-btn">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>
    <input type="text" class="form-control" aria-label="...">
  </div>
  <br>
  <div class="input-group">
    <input type="text" class="form-control" aria-label="...">
    <div class="input-group-btn">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
      <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>
  </div>
</div>
<?php  preInit(); ?>
<div class="input-group">
  <div class="input-group-btn">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div>
  <input type="text" class="form-control" aria-label="...">
</div>

<div class="input-group">
  <input type="text" class="form-control" aria-label="...">
  <div class="input-group-btn">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div>
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Segmented buttons
</div>
<div style="max-width: 400px">
  <div class="input-group">
    <div class="input-group-btn">
      <button type="button" class="btn btn-default">Action</button>
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> </button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>
    <input class="form-control" aria-label="Text input with segmented button dropdown"> </div>
  <br>
  <div class="input-group">
    <input class="form-control" aria-label="Text input with segmented button dropdown">
    <div class="input-group-btn">
      <button type="button" class="btn btn-default">Action</button>
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> </button>
      <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>
  </div>
</div>
<?php  preInit(true); ?>
<div class="input-group">
  <div class="input-group-btn">
    <!-- Button and dropdown menu -->
  </div>
  <input type="text" class="form-control" aria-label="...">
</div>

<div class="input-group">
  <input type="text" class="form-control" aria-label="...">
  <div class="input-group-btn">
    <!-- Button and dropdown menu -->
  </div>
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  Multiple buttons
</div>
<div style="max-width: 400px">
  <div class="input-group">
    <div class="input-group-btn">
      <button type="button" class="btn btn-default" aria-label="Bold"><span class="glyphicon glyphicon-bold"></span></button>
      <button type="button" class="btn btn-default" aria-label="Italic"><span class="glyphicon glyphicon-italic"></span></button>
    </div>
    <input class="form-control" aria-label="Text input with multiple buttons"> </div>
  <br>
  <div class="input-group">
    <input class="form-control" aria-label="Text input with multiple buttons">
    <div class="input-group-btn">
      <button type="button" class="btn btn-default" aria-label="Help"><span class="glyphicon glyphicon-question-sign"></span></button>
      <button type="button" class="btn btn-default">Action</button>
    </div>
  </div>
</div>
<?php  preInit(true); ?>
<div class="input-group">
  <div class="input-group-btn">
    <button type="button" class="btn btn-default" aria-label="Bold"><span class="glyphicon glyphicon-bold"></span></button>
    <button type="button" class="btn btn-default" aria-label="Italic"><span class="glyphicon glyphicon-italic"></span></button>
  </div>
  <input class="form-control" aria-label="Text input with multiple buttons">
</div>

<div class="input-group">
  <input class="form-control" aria-label="Text input with multiple buttons">
  <div class="input-group-btn">
    <button type="button" class="btn btn-default" aria-label="Help"><span class="glyphicon glyphicon-question-sign"></span></button>
    <button type="button" class="btn btn-default">Action</button>
  </div>
</div>
<?php  preEnd(); ?>


