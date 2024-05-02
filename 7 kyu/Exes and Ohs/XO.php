<?php declare(strict_types = 1);
/**
 * @copyright (c) 2024 Sportisimo s.r.o.
 * @author        tomas.polivka
 * @since         2024-05-02
 */

function XO(string $s): bool {
  $count = 0;
  foreach(str_split(strtolower($s)) as $ch)
  {
    $count += match ($ch) {
      'o' => 1,
      'x' => -1,
      default => 0
    };
  }

  return $count === 0;
}