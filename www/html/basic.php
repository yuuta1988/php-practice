<?php
require_once 'TriangeFigure.php';
$tri = new TriangeFigure();
$tri->setBase(-10);
$tri->setHeight(-10);
print $tri->getArea();
