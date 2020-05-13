<?php
declare(strict_types=1);

$price = '100';

print calc_tax($price);

function calc_tax(int $price) {
  return $price * 0.08;
}
