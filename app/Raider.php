<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//A Raider is a player that participates in a guild hosted event.
class Raider extends Model
{
    /**
     * The table associated with the model
     * 
     * @var string $table - The 
     */
    protected $table = 'raiders';

}
