<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class UploadController extends Controller
{
    //
    public function uploadPage(){
        return view('fileUpload');
    }

    public function upload(Request $request){
        Storage::put('test.jpg', $request->file('ImageFile')->get());
        return view('fileUpload')->withMessage('Success Upload');
    }
}
