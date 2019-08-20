<?php

namespace Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;

class TimeRange extends Model implements EntityContract
{
    use SoftDeletes, ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.time-range.data.time-range');
        parent::__construct($attributes);
    }
}
