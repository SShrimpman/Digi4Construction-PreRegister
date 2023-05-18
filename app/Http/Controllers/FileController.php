<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function uploadFilePublicDisk(Request $request)
    {

        if ($request->hasFile('ms_logo')) {

            $path = $request->file('ms_logo')->store('images', 'public');
            //podemos criar uma pasta e no ->store passamos: (images, public)

            $proj_image = [
                'project_image' => $path,
            ];

            return ($path);
        } else {
            return 'No file selected';
        }
    }



    public function ecoLogo(Request $request)
    {

        echo asset('storage/images/VQHrMgKaYxMgo9I4xJeHIANTAv5B3b2BACQyikor.png');
    }
}
