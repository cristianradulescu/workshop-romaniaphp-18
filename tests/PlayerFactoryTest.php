<?php declare(strict_types=1);

namespace Battleship\Tests;

use Battleship\Factory\PlayerFactory;
use Battleship\Model\Player;
use PHPUnit\Framework\TestCase;

/**
 * Class PlayerFactoryTest
 *
 * @package Battleship\Tests
 */
class PlayerFactoryTest extends TestCase
{
    /**
     * @covers \Battleship\Factory\PlayerFactory
     */
    public function testTooManyUsersException()
    {
        $this->expectException(\InvalidArgumentException::class);
        PlayerFactory::create(3, 'FooBar');
    }

    /**
     * @covers \Battleship\Factory\PlayerFactory
     * @covers \Battleship\Model\Player
     */
    public function testCreatePlayerOne()
    {
        $playerOne = PlayerFactory::create(1, 'Foo');
        $this->assertInstanceOf(Player::class, $playerOne);
    }

    /**
     * @covers \Battleship\Factory\PlayerFactory
     * @covers \Battleship\Model\Player
     */
    public function testCreatePlayerTwo()
    {
        $playerTwo = PlayerFactory::create(2, 'Bar');
        $this->assertInstanceOf(Player::class, $playerTwo);
    }
}