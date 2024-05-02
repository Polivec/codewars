<?php declare(strict_types = 1);
/**
 * @copyright (c) 2024 Sportisimo s.r.o.
 * @author        tomas.polivka
 * @since         2024-05-02
 */

function toCamelCase(string $str){

  $toUpper = false;
  $result = '';
  foreach(str_split($str) as $ch)
  {
    if ($ch === '-' || $ch === '_')
    {
      $toUpper = true;
      continue;
    }

    $result .= $toUpper ? strtoupper($ch) : $ch;
    $toUpper = false;
  }

  return $result;
}