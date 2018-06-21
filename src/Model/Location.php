<?php declare(strict_types=1);

namespace Battleship\Model;

/**
 * Class Location
 *
 * @package Battleship\Model
 */
class Location
{
    private $xAxis;

    private $yAxis;

    public function __construct(string $coordinates)
    {
        list($this->yAxis, $this->xAxis) = explode('-', $coordinates);
    }

    public function equals(Location $that): bool
    {
        return $this->xAxis === $that->xAxis && $this->yAxis === $that->yAxis;
    }
}