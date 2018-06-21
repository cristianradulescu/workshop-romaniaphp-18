<?php declare(strict_types=1);

namespace Battleship\Factory;

use Battleship\Model\Ship;

/**
 * Class ShipFactory
 *
 * @package Battleship\Factory
 */
class ShipFactory
{
    public static function build(array $shipType): Ship
    {
        return new Ship($shipType['name'], $shipType['holes']);
    }
}