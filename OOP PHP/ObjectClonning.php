<?php

require_once "data/Student.php";


$student1 = new Student();

$student1->id = "1";
$student1->name = "Rizki";
$student1->value = 100;
$student1->setSemple("XXX");

var_dump($student1);

$student2 = clone $student1;
var_dump($student2);