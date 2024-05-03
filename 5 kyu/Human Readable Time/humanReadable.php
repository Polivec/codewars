<?php declare(strict_types = 1);
/**
 * @author        tomas.polivka
 * @since         2024-05-02
 */

function human_readable(int $seconds) : string {
  $hours = floor($seconds / 3600);
  $minutes = floor(($seconds % 3600) / 60);
  $seconds = $seconds % 60;
  return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
}