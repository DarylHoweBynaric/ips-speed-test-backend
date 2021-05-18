<?php

namespace App\Models;

use Froiden\RestAPI\ApiModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends ApiModel
{
    protected $table = 'employee';

    use HasFactory;

    protected $default = [
        'id', 'name', 'location', 'number', 'city', 'country'
    ];
}
