<?php

namespace BaymaxUmasou\FilesUpload\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FilesUploadController
{
    public function upload(Request $request)
    {
        echo response()->json(Str::uuid());
    }
}