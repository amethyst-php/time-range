<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class TimeRangeFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('year', '*');
        $bag->set('month', '*');
        $bag->set('day', '*');
        $bag->set('weekday', 1);
        $bag->set('start', '08:00:00');
        $bag->set('end', '10:00:00');
        $bag->set('aggregate', 1);
        $bag->set('count', 2);
        $bag->set('target_type', 'foo');
        $bag->set('target', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
