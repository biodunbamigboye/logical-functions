<?php

function addDays(int $numberOfDays): string
 {
  $date = new DateTime();
  $date->add(new DateInterval('P' . $numberOfDays . 'D'));
  return $date->format('Y-m-d');

}
