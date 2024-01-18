<?php

namespace app\observers;

use app\interfaces\ObserverInterface;
use app\interfaces\SubjectInterface;
use SplObserver;
use SplSubject;

class AdminObserver implements SplObserver
{
  public function update(SplSubject $subject): void
  {
    dump('Admin created ' . __CLASS__);
  }
}
