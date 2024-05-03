<?php declare(strict_types = 1);
/**
 * @author        tomas.polivka
 * @since         2024-05-03
 */

const RIGHT = 0;
const DOWN = 1;
const LEFT = 2;
const UP = 3;

function snail(array $array): array
{
  $result = [];
  $direction = RIGHT;
  $x = 0;
  $y = 0;
  $maxX = count($array[0]) - 1;
  $maxY = count($array) - 1;
  $minX = 0;
  $minY = 0;
  $max = count($array) * count($array[0]);

  for($i = 0; $i < $max; $i++)
  {
    $result[] = $array[$y][$x];
    updateValues($direction, $x, $y, $minX, $minY, $maxX, $maxY);
  }

  return $result;
}

function updateValues(int &$direction, int &$x, int &$y, int &$minX, int &$minY, int &$maxX, int &$maxY): void
{
  match ($direction)
  {
    RIGHT => moveRight($direction, $x, $y, $minY, $maxX),
    DOWN => moveDown($direction, $x, $y, $maxX, $maxY),
    LEFT => moveLeft($direction, $x, $y, $minX, $maxY),
    UP => moveUp($direction, $x, $y, $minX, $minY),
  };
}

function moveRight(int &$direction, int &$x, int &$y, int &$minY, int $maxX): void
{
  if($x === $maxX)
  {
    $direction = DOWN;
    $y++;
    $minY++;
  }
  else
  {
    $x++;
  }
}

function moveDown(int &$direction, int &$x, int &$y, int &$maxX, int $maxY): void
{
  if($y === $maxY)
  {
    $direction = LEFT;
    $x--;
    $maxX--;
  }
  else
  {
    $y++;
  }
}

function moveLeft(int &$direction, int &$x, int &$y, int $minX, int &$maxY): void
{
  if($x === $minX)
  {
    $direction = UP;
    $y--;
    $maxY--;
  }
  else
  {
    $x--;
  }
}

function moveUp(int &$direction, int &$x, int &$y, int &$minX, int $minY): void
{
  if($y === $minY)
  {
    $direction = RIGHT;
    $x++;
    $minX++;
  }
  else
  {
    $y--;
  }
}