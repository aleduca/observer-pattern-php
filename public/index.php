<?php

use app\library\User;
use app\observers\AdminObserver;
use app\observers\UserObserver;
use app\repositories\UserRepository;

require dirname(__FILE__, 2) . '/vendor/autoload.php';

$userRepo = new UserRepository();
$userObserver = new UserObserver();
$adminObserver = new AdminObserver();
$userRepo->attach($userObserver);
$userRepo->attach($adminObserver);
$userRepo->create();
$userRepo->detach($adminObserver);
