<?php declare(strict_types=1);

namespace Battleship\Tests;

use Battleship\Model\Board;
use Battleship\Model\Location;
use Battleship\Model\Ship;
use Battleship\Factory\ShipFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class ShipTest
 *
 * @package Battleship\Tests
 */
class ShipTest extends TestCase
{

    /**
     * @covers \Battleship\Model\Ship
     * @covers \Battleship\Factory\ShipFactory
     *
     * @dataProvider shipNumberOfHolesDataProvider
     */
    public function testShipHasCorrectNumberOfHoles(array $shipType, int $numberOfHoles): void
    {
        $ship = ShipFactory::build($shipType);
        $this->assertSame($numberOfHoles, $ship->getNumberOfHoles());
    }

    public function shipNumberOfHolesDataProvider(): array
    {
        return [
            'Carrier has 5 holes'    => [Ship::TYPE_CARRIER, 5],
            'Battleship has 4 holes' => [Ship::TYPE_BATTLESHIP, 4],
            'Cruiser has 3 holes'    => [Ship::TYPE_CRUISER, 3],
            'Submarine has 3 holes'  => [Ship::TYPE_SUBMARINE, 3],
            'Destroyer has 2 holes'  => [Ship::TYPE_DESTROYER, 2],
        ];
    }

    /**
     * @covers \Battleship\Model\Ship
     * @covers \Battleship\Factory\ShipFactory
     *
     * @dataProvider shipNameDataProvider
     */
    public function testShipHasCorrectName(array $shipType, string $name): void
    {
        $ship = ShipFactory::build($shipType);
        $this->assertSame($name, $ship->getName());
    }

    public function shipNameDataProvider(): array
    {
        return [
            [Ship::TYPE_CARRIER, 'Carrier'],
            [Ship::TYPE_BATTLESHIP, 'Battleship'],
            [Ship::TYPE_CRUISER, 'Cruiser'],
            [Ship::TYPE_SUBMARINE, 'Submarine'],
            [Ship::TYPE_DESTROYER, 'Destroyer'],
        ];
    }

    /**
     * @covers \Battleship\Model\Ship
     * @covers \Battleship\Factory\ShipFactory
     * @covers \Battleship\Model\Location
     * @covers \Battleship\Model\Board
     */
    public function testShipIsHit()
    {
        $ship = ShipFactory::build(Ship::TYPE_TEST_DESTROYER);
        $location = new Location('D-4');
        $board = new Board();
        $board->positionShip($ship, $location, $location);
        $this->assertTrue($ship->isHit($location));
    }
}