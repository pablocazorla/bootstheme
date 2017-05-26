<?php include_once('header.php'); 

function preInit($min=false,$lang='html'){
  if($min){
    echo '<div class="demo-pre-container open">';
    echo '<div class="demo-pre-min-title">Code:</div>';
  }else{
    echo '<div class="demo-pre-container">';
    echo '<div class="demo-pre-trigger"><i class="fa fa-chevron-right"></i> View Code</div>';
  }  
  echo '<div class="demo-pre-content">';
  echo '<pre class="prettyprint lang-'.$lang.'">';
}
function preEnd(){
  echo '</pre>';
  echo '</div>';
  echo '</div>';
}

function getLink($name){
  echo '<li>';
  echo '<a href="#'.str_replace(' ', '-', strtolower($name)).'">'.$name.'</a>';
  echo '</li>';
}

function getContent($name){
  echo '<div class="demo-section" id="'.str_replace(' ', '-', strtolower($name)).'">';
  echo '<div class="container">';
  echo '<div class="demo-section-title">'.$name.'</div>';
  include_once('_'.str_replace(' ', '-', strtolower($name)).'.php');
  echo '</div>';
  echo '</div>';
}

$list = [
  [
    'Basic',  
    'Typography',    
    'Lists',
    'Tables',
    'Code',
    'Helpers',
    'Grid'
  ],
  [
    'Inputs',
    'Form',
    'Inputs',
    'Checkbox and Radios',
    'Progress bars'
  ],
  [
    'Groups',
    'List group',
    'Input groups',  
    'Button groups'
  ],
  [
    'Buttons',
    'Buttons',  
    'Button Dropdowns',
    'Dropdowns',
    'Labels',
    'Badges'
  ], 
  [
    'Nav',
    'Nav Bars',    
    'Tabs',
    'Pagination'
  ],
  [
    'Panels',
    'Page header',
    'Breadcrumbs',
    'Panels',
    'Wells'
  ],
  [
    'Floats',
    'Modal',
    'Tooltips',
    'Popovers',
    'Alerts'
  ],
  [
    'Images',
    'Images',  
    'Glyphicons',
    'Thumbnails',
    'Media Objects',
    'Responsive Embeb'
  ],
  [
    'Components',
    'Affix',
    'ScrollSpy',  
    'Collapse',
    'Carousel'
  ]
];
$length = count($list);
?>
<div class="demo-sidebar">
  <ul class="demo-index">
    <?php 
      for($i = 0; $i < $length; $i++){
        $lin = $list[$i];
        $l = count($lin);
        echo '<li class="demo-ind-title">';
        echo $lin[0];
        echo '</li>';
        for($j = 1; $j < $l; $j++){
          getLink($lin[$j]);
        }
      }
      ?>
  </ul>
</div>
<div class="demo-content">

      <?php 
      for($i = 0; $i < $length; $i++){
        $lin = $list[$i];
        $l = count($lin);
        for($j = 1; $j < $l; $j++){
          getContent($lin[$j]); 
        }
      }
      ?>
</div>
<?php include_once('footer.php'); ?>
