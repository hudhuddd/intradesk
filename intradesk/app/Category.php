<?php

namespace Intradesk;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Table Name
    protected $table = 'categories';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function resources()
    {
        return $this->hasMany('Intradesk\Resource');
    }
}
