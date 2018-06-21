<?php declare(strict_types=1);

namespace Battleship\Factory;

use Battleship\Model\Player;

/**
 * Class PlayerFactory
 *
 * @package Battleship\Factory
 */
class PlayerFactory
{
    public static function create(int $number, string $name): Player
    {
        if ($number > 2) {
            throw new \InvalidArgumentException('Only 2 players are allowed.');
        }

        return (new Player())
            ->assignNumber($number)
            ->renameTo($name);
    }
}