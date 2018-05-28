<?php

namespace Intradesk;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    // Table Name
    protected $table = 'holidays';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
