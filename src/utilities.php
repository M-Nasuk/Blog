<?php


CONST MOIS = [
  'January'=> 'Janvier',
  'February'=> 'Fevrier',
  'March'=> 'Mars',
  'April'=> 'Avril',
  'May'=> 'Mai',
  'June'=> 'Juin',
  'July'=> 'Juillet',
  'August'=> 'Aout',
  'September'=> 'Septembre',
  'October'=> 'Octobre',
  'November'=> 'Novembre',
  'December'=> 'Decembre'
];

function changeMonth($a)
{
  foreach (MOIS as $key => $value) {
    if ($key == date('F',strtotime($a))) {
      return [$key, $value];
    }
  }
}

?>
