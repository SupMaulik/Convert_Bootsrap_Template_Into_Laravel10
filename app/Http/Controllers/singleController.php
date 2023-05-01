<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        echo"This is single action controller";
    }
}
