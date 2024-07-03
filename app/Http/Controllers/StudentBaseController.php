<?php

namespace App\Http\Controllers;

use App\Services\StudentService;

class StudentBaseController extends Controller
{
    public $service;
    public function __construct(StudentService $service)
    {
        $this->service=$service;
    }

}
