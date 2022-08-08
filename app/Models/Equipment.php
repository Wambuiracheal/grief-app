<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table ='equipment';

    public $primaryKey = 'id';

    use HasFactory;

    protected $fillable= [

        'Name',
        'Use',
        'Weight'

    ];
}
