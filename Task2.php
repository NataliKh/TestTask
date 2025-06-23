<?php
class PhpCodeValidator
{
  private $code;

  public function __construct($code)
  {
    $this->code = $code;
  }

  public function isValid()
  {
    $balance = 0;

    for ($i = 0; $i < strlen($this->code); $i++) {
      $char = $this->code[$i];

      if ($char == '{') {
        $balance++;
      } elseif ($char == '}') {
        $balance--;


        if ($balance < 0) {
          return false;
        }
      }
    }
  }
}
