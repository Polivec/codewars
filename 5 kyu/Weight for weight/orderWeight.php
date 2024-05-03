<?php declare(strict_types = 1);
/**
 * @copyright (c) 2024 Sportisimo s.r.o.
 * @author        tomas.polivka
 * @since         2024-05-03
 */

function orderWeight($str) : string
{
  $nums = explode(' ', $str);
  usort($nums, "compareWeights");
  return implode(' ', $nums);
}

function compareWeights(string $a, string $b) : int
{
  $sumA = array_sum(str_split($a));
  $sumB = array_sum(str_split($b));
  return $sumA === $sumB ? strcmp($a, $b) : $sumA - $sumB;
}
