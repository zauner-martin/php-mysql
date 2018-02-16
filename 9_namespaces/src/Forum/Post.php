<?php

namespace Forum;

class Post
{
  public $title;

  function __construct($title)
  {
    $this->title = $title;
  }
}
