<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\TimeRangesController::class,
    'router'     => [
        'as'     => 'time-range.',
        'prefix' => '/time-ranges',
    ],
];
