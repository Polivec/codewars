<?php declare(strict_types = 1);
/**
 * @author        tomas.polivka
 * @since         2024-05-03
 */

const UNITS = [
  'year' => 365 * 24 * 60 * 60,
  'day' => 24 * 60 * 60,
  'hour' => 60 * 60,
  'minute' => 60,
  'second' => 1
];

function format_duration($seconds) {
  if($seconds === 0)
  {
    return 'now';
  }

  $result = [];
  foreach(UNITS as $unit => $value)
  {
    $count = floor($seconds / $value);
    if($count > 0)
    {
      $result[] = $count . ' ' . $unit . ($count > 1 ? 's' : '');
      $seconds -= $count * $value;
    }
  }

  return prepareStringFormat($result);
}

function prepareStringFormat(array $result) : string
{
  if(count($result) === 1)
  {
    return $result[0];
  }

  $last = array_pop($result);
  return implode(', ', $result) . ' and ' . $last;
}