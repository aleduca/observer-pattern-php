<?php

namespace app\interfaces;

interface ObserverInterface
{
  public function update(SubjectInterface $subject);
}
