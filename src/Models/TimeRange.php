<?php

namespace Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function target(): MorphTo
    {
        return $this->morphTo();
    }

    public function diffInSeconds()
    {
        return strtotime($this->end) - strtotime($this->start);
    }
}
