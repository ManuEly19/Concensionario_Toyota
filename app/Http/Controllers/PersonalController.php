<?php

namespace App\Http\Controllers;


class PersonalController extends Controller
{

    public function personal()
    {
        $persons =
        [
            ['Nombre' => 'Manu',
            'Apellido' => 'Auqui',
            "Contacto"=>'0983191978',
            "Web"=>'https://github.com/ManuEly19',
            "img"=>'https://avatars.githubusercontent.com/u/74938678?v=4'
            ],

            ["Nombre"=>'Leoni',
            "Apellido"=>'Guambo',
            "Contacto"=>'0983753059',
            "Web"=>'https://github.com/Leoni23',
            "img"=>'https://avatars.githubusercontent.com/u/74801652?v=4'
            ],

            ["Nombre"=>'Mayerli',
            "Apellido"=>'Mendez',
            "Contacto"=>'0995986091',
            "Web"=>'https://github.com/mayerli-mendez',
            "img"=>'https://avatars.githubusercontent.com/u/74840012?v=4'
            ],

            ["Nombre"=>'Jorge',
            "Apellido"=>'Ortiz',
            "Contacto"=>'0958845034',
            "Web"=>'https://github.com/JorgeOrtiz121',
            "img"=>'https://avatars.githubusercontent.com/u/75078028?v=4'
            ],

            ["Nombre"=>'Luis',
            "Apellido"=>'Valencia',
            "Contacto"=>'0995037594',
            "Web"=>'https://github.com/stalin246',
            "img"=>'https://avatars.githubusercontent.com/u/77359338?v=4'
            ]
        ];

        return view('personal',compact('persons'));
    }
}
