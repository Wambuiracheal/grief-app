<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $table ='clients';

    public $primaryKey = 'id';

    use HasFactory;

    protected $fillable= [

        'UserId',
        'Name',
        'Phone',
        'type_of_loss'

    ];
}
