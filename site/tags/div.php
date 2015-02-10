<?php

kirbytext::$tags['div'] = array(
  'attr' => array(
      'class',
      'id',
      'text'
      
  ),
  'html' => function($tag) {

    $class = $tag->attr('class', 'div');
    $id = $tag->attr('id', 'div');
    $text    = $tag->attr('text', 'div');

    return '<div class="'.$class.'" id="'.$id.'">' . $text . '</div>';

  }
);