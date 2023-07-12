<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use App\Models\Society;

class TestController extends Controller
{
    public function all ()
    {
        return Society::all();
    }
}
