<?php

namespace Intradesk;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    // Table Name
    protected $table = 'tickets';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
