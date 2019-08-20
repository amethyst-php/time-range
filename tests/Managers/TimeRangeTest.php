<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\TimeRangeFaker;
use Amethyst\Managers\TimeRangeManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class TimeRangeTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = TimeRangeManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = TimeRangeFaker::class;
}
