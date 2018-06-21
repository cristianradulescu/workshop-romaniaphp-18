<?php declare(strict_types=1);

namespace Battleship\Model;

/**
 * Class Board
 *
 * @package Battleship\Tests
 */
class Board
{
    private $ships = [];

    public function callShot(Location $location): ShotResult
    {
        foreach ($this->ships as $ship) {
            /** @var Ship $ship */
            if ($location->equals($ship->getLocationStart()) || $location->equals($ship->getLocationEnd())) {
                return new ShotResultHit();
            }
        }

        return new ShotResultMiss();
    }

    public function positionShip(Ship $ship, Location $start, Location $end): void
    {
        $ship->setLocationStart($start)
            ->setLocationEnd($end);

        $this->ships[] = $ship;
    }
}