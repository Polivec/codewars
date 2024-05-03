<?php declare(strict_types = 1);
/**
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

function bestToCamelCase(string $str): string
{
  return preg_replace_callback('/[-_](.)/', static fn($match) => strtoupper($match[1]), $str);
}