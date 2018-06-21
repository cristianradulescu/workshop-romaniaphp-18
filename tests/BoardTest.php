<?php declare(strict_types=1);

namespace Battleship\Tests;

use Battleship\Factory\ShipFactory;
use Battleship\Model\Board;
use Battleship\Model\Location;
use Battleship\Model\Ship;
use Battleship\Model\ShotResultHit;
use Battleship\Model\ShotResultMiss;
use PHPUnit\Framework\TestCase;

/**
 * Class BoardTest
 *
 * @package Battleship\Tests
 */
class BoardTest extends TestCase
{
    /**
     * @covers \Battleship\Model\Board
     * @covers \Battleship\Model\Location
     */
    public function testShotMissed()
    {
        $board = new Board();
        $location = new Location('D-4');

        $result = $board->callShot($location);
        $this->assertInstanceOf(ShotResultMiss::class, $result);
    }

    /**
     * @covers \Battleship\Model\Board
     * @covers \Battleship\Factory\ShipFactory
     * @covers \Battleship\Model\Location
     * @covers \Battleship\Model\Ship
     */
    public function testBattleshipIsHit()
    {
        $board = new Board();
        $location = new Location('A-1');

        $ship = ShipFactory::build(Ship::TYPE_BATTLESHIP);
        $board->positionShip($ship, $location, $location);

        $result = $board->callShot($location);
        $this->assertInstanceOf(ShotResultHit::class, $result);
    }

    /**
     * @covers \Battleship\Model\Board
     * @covers \Battleship\Factory\ShipFactory
     * @covers \Battleship\Model\Location
     * @covers \Battleship\Model\Ship
     */
    public function testDestroyerIsPositioned()
    {
        $board = new Board();
        $locationStart = new Location('D-4');
        $locationEnd = new Location('D-8');

        $ship = ShipFactory::build(Ship::TYPE_BATTLESHIP);
        $board->positionShip($ship, $locationStart, $locationEnd);

        $this->assertSame($locationStart, $ship->getLocationStart());
        $this->assertSame($locationEnd, $ship->getLocationEnd());
    }
}