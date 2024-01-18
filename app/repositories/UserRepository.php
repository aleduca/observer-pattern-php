<?php

namespace app\repositories;

use app\interfaces\SubjectInterface;
use app\observers\Subject;

class UserRepository extends Subject
{
  public function create()
  {
    $this->notify();
  }
}
