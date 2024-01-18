<?php

namespace app\observers;

use app\interfaces\ObserverInterface;
use app\interfaces\SubjectInterface;
use SplObjectStorage;
use SplObserver;
use SplSubject;

abstract class Subject implements SplSubject
{
  public function __construct(
    private SplObjectStorage $observers
  ) {
  }

  public function attach(SplObserver $observer): void
  {
    $this->observers->attach($observer);
  }

  public function detach(SplObserver $observer): void
  {
    $this->observers->detach($observer);
  }

  public function notify(): void
  {
    foreach ($this->observers as $observer) {
      $observer->update($this);
    }
  }
}
