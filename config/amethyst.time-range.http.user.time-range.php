<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\User\TimeRangesController::class,
    'router'     => [
        'as'     => 'time-range.',
        'prefix' => '/time-ranges',
    ],
];
