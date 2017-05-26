<div class="demo-subtitle first">
  Basic example
</div>
<div class="panel panel-default">
  <div class="panel-body">
    Basic panel example
  </div>
</div>
<?php  preInit(true); ?>
<div class="panel panel-default">
  <div class="panel-body">
    Basic panel example
  </div>
</div>
<?php  preEnd(); ?>
<div class="demo-subtitle">
  Panel with heading
</div>
<div class="panel panel-default">
  <div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">
    Panel content
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
<?php  preInit(true); ?>
<div class="panel panel-default">
  <div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">
    Panel content
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
<?php  preEnd(); ?>
<div class="demo-subtitle">
  Panel with footer
</div>
<div class="panel panel-default">
  <div class="panel-body">
    Panel content
  </div>
  <div class="panel-footer">Panel footer</div>
</div>
<?php  preInit(true); ?>
<div class="panel panel-default">
  <div class="panel-body">
    Panel content
  </div>
  <div class="panel-footer">Panel footer</div>
</div>
<?php  preEnd(); ?>
<div class="demo-subtitle">
  Contextual alternatives
</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3> </div>
  <div class="panel-body"> Panel content </div>
</div>
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3> </div>
  <div class="panel-body"> Panel content </div>
</div>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3> </div>
  <div class="panel-body"> Panel content </div>
</div>
<div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3> </div>
  <div class="panel-body"> Panel content </div>
</div>
<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3> </div>
  <div class="panel-body"> Panel content </div>
</div>
<?php  preInit(true); ?>
<div class="panel panel-primary">...</div>
<div class="panel panel-success">...</div>
<div class="panel panel-info">...</div>
<div class="panel panel-warning">...</div>
<div class="panel panel-danger">...</div>
<?php  preEnd(); ?>


<div class="demo-subtitle">
  With tables
</div>

<div class="panel panel-default"> <div class="panel-heading">Panel heading</div> <div class="panel-body"> <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> </div> <table class="table"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table> </div>
<?php  preInit(true); ?>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
    <p>...</p>
  </div>

  <!-- Table -->
  <table class="table">
    ...
  </table>
</div>
<?php  preEnd(); ?>

<div class="demo-subtitle">
  With list groups
</div>
<div class="panel panel-default"> <div class="panel-heading">Panel heading</div> <div class="panel-body"> <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> </div> <ul class="list-group"> <li class="list-group-item">Cras justo odio</li> <li class="list-group-item">Dapibus ac facilisis in</li> <li class="list-group-item">Morbi leo risus</li> <li class="list-group-item">Porta ac consectetur ac</li> <li class="list-group-item">Vestibulum at eros</li> </ul> 
<div class="panel-body">
  <p>ulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
</div>

</div>
<?php  preInit(true); ?>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
    <p>...</p>
  </div>

  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>

  <div class="panel-body">
    <p>...</p>
  </div>
</div>
<?php  preEnd(); ?>