<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TmpImage;
use Illuminate\Http\Request;

class TmpImageController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('/public/uploads/' . $folder, $filename);

            TmpImage::create([
                'filename' => $filename,
                'folder' => $folder
            ]);

            return $folder;
        }
        return '';
    }
}
