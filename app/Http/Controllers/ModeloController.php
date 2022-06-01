<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __invoke(Request $request)
    {
        $autos =
        [
            "TOYOTA_2020.1" => 'SUPRA M4',
            "TOYOTA_2020.2" => 'FORTUNNER 2020',
            "TOYOTA_2020.3" => 'FORTUNNER RAGER',
            "TOYOTA_2020.4" => 'RAV4',
            "TOYOTA_2020.5" => 'LAND CRUISER'
        ];
    $nombre = "Equipo Dinamita";
    return view('modelos',compact('autos','nombre'));
    }

}
