<?php declare(strict_types=1);

namespace Battleship\Model;

/**
 * Class Player
 *
 * @package Battleship\Model
 */
class Player
{
    /** @var int */
    private $number;

    /** @var string */
    private $name;

    public function assignNumber(int $number): Player
    {
        $this->number = $number;

        return $this;
    }

    public function renameTo(string $name): Player
    {
        $this->name = $name;

        return $this;
    }
}