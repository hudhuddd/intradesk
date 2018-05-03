<?php

namespace Intradesk;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // Table Name
    protected $table = 'employees';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
