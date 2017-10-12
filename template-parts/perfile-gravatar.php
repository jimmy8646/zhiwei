<?php

function gravatarAPI(){
  $hash = md5( strtolower( trim( "skyroxas1521@gmail.com" ) ) );
  $str = file_get_contents( 'https://www.gravatar.com/'.$hash.'.php');
  $profile = unserialize( $str );

  if ( is_array( $profile ) && isset( $profile['entry'] ) )
   return $profile['entry'][0];
}

function get_gravatar_avatar($size=150){
  $hash = md5( strtolower( trim( "skyroxas1521@gmail.com" ) ) );
  echo 'https://www.gravatar.com/avatar/'.$hash.'?s='.$size.'.png';
}

function dump_gravatar_data(){
  $data = gravatarAPI();
  echo "<pre>".print_r($data,true)."</pre>";
}

function get_gravatar_info($field,$option=false){
  $data = gravatarAPI();

  switch ($field) {
    case 'name':
      echo $data[$field][$option];
      break;
    case 'urls':
      // foreach ($data[$field] as $key => $value) {
      //   echo '<li>
      //           <a class="'.'fa'.' '.strtolower($data[$field][$key]['title']).'" href='.$data[$field][$key]['value'].'>
      //            <span class="hidden-xl-down">'.$data[$field][$key]['title'].'</span>
      //           </a>
      //         </li>';
      // }
      echo '<li><a class="fa facebook" href ="https://www.facebook.com/profile.php?id=100002582793570"></a></li>
            <li><a class="fa github" href ="https://github.com/SkyRoxas"></a></li>';
      break;
    case 'emails':
      foreach ($data[$field] as $key => $value) {
        echo '<li>
                <a class="fa mail" href='.'mailto:'.$data[$field][$key]['value'].'>'.$data[$field][$key]['value'].'</a>
              </li>';
      }
      break;
    default:
      echo $data[$field];
      break;
  }
}

?>

<div class="d-flex flex-wrap no-gutters mb-3">
  <div class="col-md-3 col-12 d-flex justify-content-center">
    <div class="wrap">
      <img class="rounded" src="<?php get_gravatar_avatar() ?>" alt="thumbnail">
    </div>
  </div>
  <div class="col-md-9 col-12">
    <div class="wrap p-3">

      <div><?php get_gravatar_info('displayName') ?> | <?php get_gravatar_info('name','formatted') ?></div>
      <div><?php get_gravatar_info('currentLocation') ?></div>

      <div class="menu email mt-3">
        <ul>
          <?php get_gravatar_info('emails') ?>
        </ul>
      </div>

      <hr>

      <div class="menu urls">
        <ul class="d-flex">
          <?php get_gravatar_info('urls') ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="card p-5"><?php get_gravatar_info('aboutMe') ?></div>

<hr>
