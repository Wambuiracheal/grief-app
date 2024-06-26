<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $table ='bookings';

    public $primaryKey = 'id';

    use HasFactory;

    protected $fillable= [

        'ClientId',
        'CounsellorId',
        'Date',
        'Duration'

    ];
}
