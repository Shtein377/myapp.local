<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke()
    {

        dispatch(new TestJob());
        return response(now());
    }
}
