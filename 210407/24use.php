<?php

include "Erin/DoDoStudy/22dodoStudyUser.php";
include "Erin/ErinStudy/21erinStudyUser.php";
include "Erin/20erinUser.php";

use Erin\User as User;
use Erin\ErinStudy\User as ErinUser;
use Erin\DodoStudy\User as DodoUser;

$user1 = new User();
echo $user1->getNamespaceName()."<br/>";

$user2 = new User();
echo $user2->getNamespaceName()."<br/>";

$user3 = new User();
echo $user3->getNamespaceName()."<br/>";

?>