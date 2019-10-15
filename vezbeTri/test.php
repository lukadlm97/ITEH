<?php
include "klase.php";
$student1 = new Student(145,2016);
$student1->upisiGodinu();
$student1->getBrojIndeksa();
$student1 = new MasterStudent(145,2016,"mio");
$student1->upisiGodinu();
$student1->getBrojIndeksa();
