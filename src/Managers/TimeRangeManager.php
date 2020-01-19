<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

class TimeRangeManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.time-range.data.time-range';
}
