<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    use HasFactory;

    protected $table ='trainers';

    public $primaryKey = 'id';

    use HasFactory;

    protected $fillable= [

        'UserId',
        'Name',
        'Phone',
        'Sector'

    ];
}
