<?php
include "Erin/DoDoStudy/22dodoStudyUser.php";
include "Erin/ErinStudy/21erinStudyUser.php";
include "Erin/20erinUser.php";

$user2 = new \Erin\User();
echo $user2->getNamespaceName()."<br/>";

$user3 = new \Erin\ErinStudy\User();
echo $user3->getNamespaceName()."<br/>";

$user4 = new \Erin\DodoStudy\User();
echo $user4->getNamespaceName()."<br/>";

?>