<?php declare(strict_types=1);

namespace Battleship\Model;

/**
 * Class Ship
 *
 * @package Battleship\Model
 */
class Ship
{
    /** @var string */
    private $name;

    /** @var int */
    private $numberOfHoles;

    /** @var Location */
    private $locationStart;

    /** @var Location */
    private $locationEnd;

    public const TYPE_CARRIER = [
        'name'  => 'Carrier',
        'holes' => 5
    ];

    public const TYPE_BATTLESHIP = [
        'name'  => 'Battleship',
        'holes' => 4
    ];

    public const TYPE_CRUISER = [
        'name'  => 'Cruiser',
        'holes' => 3
    ];

    public const TYPE_SUBMARINE = [
        'name'  => 'Submarine',
        'holes' => 3
    ];

    public const TYPE_DESTROYER = [
        'name'  => 'Destroyer',
        'holes' => 2
    ];

    public const TYPE_TEST_DESTROYER = [
        'name' => 'TestDestroyer',
        'holes' => 1
    ];

    public function __construct(string $name, int $numberOfHoles)
    {
        $this->name = $name;
        $this->numberOfHoles = $numberOfHoles;
    }

    /**
     * @return int
     */
    public function getNumberOfHoles(): int
    {
        return $this->numberOfHoles;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Location
     */
    public function getLocationStart(): Location
    {
        return $this->locationStart;
    }


    public function setLocationStart(Location $locationStart): Ship
    {
        $this->locationStart = $locationStart;

        return $this;
    }

    /**
     * @return Location
     */
    public function getLocationEnd(): Location
    {
        return $this->locationEnd;
    }


    public function setLocationEnd(Location $locationEnd): Ship
    {
        $this->locationEnd = $locationEnd;

        return $this;
    }


    public function isHit(Location $location): bool
    {
        return $location->equals($this->locationStart) || $location->equals($this->locationEnd);
    }
}
