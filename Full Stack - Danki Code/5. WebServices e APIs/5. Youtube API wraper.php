<?php
//AIzaSyAdBqAqjK220xEiQ9ddI-wcapDhxeX-5kM

  require('vendor/autoload.php');

  $youtube = new Madcoda\Youtube\Youtube(array('key' => 'AIzaSyAdBqAqjK220xEiQ9ddI-wcapDhxeX-5kM'));
  $video = $youtube->getVideoInfo('PfpEefKiG2I');

  //print_r($video);
  echo '<h2>'.$video->snippet->title.'</h2>';
 // echo '<h3>'.$video->snippet->description.'</h3>';
  echo '<h3>'.$video->snippet->channelTitle.'</h3>';
  echo '<br>';
  echo '<iframe width="480" height="270" src="//www.youtube.com/embed/PfpEefKiG2I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>';

?>