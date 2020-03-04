<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Blog extends Model
{
    use HasTrixRichText;

    protected $guarded = [];

    public function getCreatedAtAttribute($time)
    {
        return (new Carbon($time))->format('M d, Y');
    }
}
