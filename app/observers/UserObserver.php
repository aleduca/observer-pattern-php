<?php

namespace app\observers;

use app\interfaces\ObserverInterface;
use app\interfaces\SubjectInterface;
use SplObserver;
use SplSubject;

class UserObserver implements SplObserver
{
  public function update(SplSubject $subject): void
  {
    dump('User created ' . __CLASS__);
  }
}
