<?php

namespace Intradesk;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    // Table Name
    protected $table = 'resources';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo('Intradesk\Category', 'category_id');
    }
}
