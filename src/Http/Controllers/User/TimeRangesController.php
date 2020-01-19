<?php

namespace Amethyst\Http\Controllers\User;

use Amethyst\Core\Http\Controllers\RestManagerController;
use Amethyst\Core\Http\Controllers\Traits as RestTraits;
use Amethyst\Managers\TimeRangeManager;
use Illuminate\Http\Request;

class TimeRangesController extends RestManagerController
{
    use RestTraits\RestCommonTrait;

    /**
     * The class of the manager.
     *
     * @var string
     */
    public $class = TimeRangeManager::class;

    /**
     * Create a new instance.
     */
    public function __construct()
    {
        parent::__construct();
    }
}
