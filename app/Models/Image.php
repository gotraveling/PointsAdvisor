<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function review()
    {
        return $this->belongsTo('App\Review', 'review_id');
    }
}
