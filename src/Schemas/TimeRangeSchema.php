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
                ->setRequired(true)
                ->setDefault(function ($entity) {
                    return '*';
                }),
            Attributes\TextAttribute::make('month')
                ->setRequired(true)
                ->setDefault(function ($entity) {
                    return '*';
                }),
            Attributes\TextAttribute::make('day')
                ->setRequired(true)
                ->setDefault(function ($entity) {
                    return '*';
                }),
            Attributes\TextAttribute::make('weekday')
                ->setRequired(true)
                ->setDefault(function ($entity) {
                    return '*';
                }),
            Attributes\TextAttribute::make('start')
                ->setRequired(true),
            Attributes\TextAttribute::make('end')
                ->setRequired(true),
            Attributes\BooleanAttribute::make('aggregate')
                ->setDefault(function ($entity) {
                    return 1;
                }),
            Attributes\NumberAttribute::make('count')
                ->setDefault(function ($entity) {
                    return 1;
                }),
            Attributes\EnumAttribute::make('target_type', app('amethyst')->getDataNames())
                ->setRequired(true),
            Attributes\MorphToAttribute::make('target_id')
                ->setRelationKey('target_type')
                ->setRelationName('target')
                ->setRelations(app('amethyst')->getDataManagers())
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
