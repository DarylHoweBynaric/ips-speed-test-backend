<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Froiden\RestAPI\ApiController;
use Illuminate\Http\Request;

class EmployeeController extends ApiController
{
    protected $model = Employee::class;

}
