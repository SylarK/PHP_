<?php

  $request = file_get_contents('https://www.instagram.com/lucasamado2/?__a=1');
  $object = json_decode($request);
  $imagens = $object->graphql->user->edge_owner_to_timeline_media->edges;
  //print_r($imagens[1])
  //$imagens = $object->user->media->nodes;

  //echo $imagens[0]->thumbnail_src;

  //print_r($imagens[0]->node->display_url);

  for ($i = 0; $i < 6; $i++){
    echo '<img src="'.$imagens[$i]->node->display_url.'">';
  }

?>

