<?php
  if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb('<div id="breadcrumb" class="small text-center">','</div>');
  } else {
    echo '<div id="breadcrumb" class="small text-center"> breadcrumb is here </div>';
  }
?>
