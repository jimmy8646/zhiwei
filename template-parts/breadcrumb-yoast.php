<?php
  if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb('<div id="breadcrumb" class="small">','</div>');
  } else {
    echo '<div id="breadcrumb" class="small"> breadcrumb is here </div>';
  }
?>
