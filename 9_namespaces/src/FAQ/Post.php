<?php

namespace FAQ;

class Post implements PostInterface {
  public $title;

  function __construct($title)
  {
    $this->title = $title;
  }

  function changeName($newTitle) {
    $this->title = $newTitle;
  }
}
