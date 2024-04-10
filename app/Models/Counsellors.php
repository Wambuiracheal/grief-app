<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counsellors extends Model
{
    use HasFactory;

    protected $table ='counsellors';

    public $primaryKey = 'id';

    use HasFactory;

    protected $fillable= [

        'UserId',
        'Name',
        'Phone',
        'Therapy_Session'

    ];
}
