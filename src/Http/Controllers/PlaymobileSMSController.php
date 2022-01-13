<?php

namespace Playmobile\SMS\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class PlaymobileSMSController extends Controller
{
    public function send(Request $request)
    {
        dd($request->all());
    }
}