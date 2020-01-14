<?php

class First
{
  protected $nameClass = __CLASS__;
  protected $letter = "A";

  function getClassname ()
  {
    print($this->nameClass);
  }

  function getLetter()
  {
    print($this->letter);
  }
}

?>
