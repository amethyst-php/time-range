<?php

return [
    'table'      => 'amethyst_time_ranges',
    'comment'    => 'TimeRange',
    'model'      => Amethyst\Models\TimeRange::class,
    'schema'     => Amethyst\Schemas\TimeRangeSchema::class,
    'repository' => Amethyst\Repositories\TimeRangeRepository::class,
    'serializer' => Amethyst\Serializers\TimeRangeSerializer::class,
    'validator'  => Amethyst\Validators\TimeRangeValidator::class,
    'authorizer' => Amethyst\Authorizers\TimeRangeAuthorizer::class,
    'faker'      => Amethyst\Fakers\TimeRangeFaker::class,
    'manager'    => Amethyst\Managers\TimeRangeManager::class,
];
