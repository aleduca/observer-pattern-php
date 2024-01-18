<?php

namespace app\library;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class User implements SplSubject
{

  private int $is_admin = 0;

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

  public function get_is_admin()
  {
    return $this->is_admin;
  }

  public function create()
  {
    $this->is_admin = 1;

    $this->notify();
  }

  public function notify(): void
  {
    foreach ($this->observers as $observer) {
      $observer->update($this);
    }
  }
}
