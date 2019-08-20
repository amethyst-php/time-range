<?php

namespace Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class TimeRangeSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('year')
                ->setRequired(true),
            Attributes\TextAttribute::make('month')
                ->setRequired(true),
            Attributes\TextAttribute::make('day')
                ->setRequired(true),
            Attributes\TextAttribute::make('weekday')
                ->setRequired(true),
            Attributes\TextAttribute::make('start')
                ->setRequired(true),
            Attributes\TextAttribute::make('end')
                ->setRequired(true),
            Attributes\BooleanAttribute::make('aggregate')
                ->setDefault(function($entity) {
                    return 1;
                }),
            Attributes\NumberAttribute::make('count')
                ->setDefault(function($entity) {
                    return 1;
                }),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
