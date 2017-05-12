<?php

namespace App\Http\Controllers;


use App\RequestPrint;
use Request;

class controladorImpressoes extends Controller
{


    function formularioImpressao()
    {
        return view('impressoes');
    }

    function store()
    {
        $input = Request::all();
        requestPrint::create($input);
        return redirect('/home');
        ////////javali


    }
}
