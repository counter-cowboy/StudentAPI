<?php

namespace App\Http\Controllers;

use App\Services\GroupService;

class GroupBaseController extends Controller
{
    public $service;
    public function __construct(GroupService $service)
    {
        $this->service=$service;
    }

}
