<?php

namespace App\Http\Controllers;

use App\Services\LectionService;

class LectionBaseController extends Controller
{
    public $service;
    public function __construct(LectionService $service)
    {
        $this->service=$service;
    }

}
