<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TmpImage;
use Exception;
use Illuminate\Http\Request;

class TmpImageController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $folder = uniqid() . '-' . now()->timestamp;
                $file->storeAs('/public/uploads/covers/' . $folder, $filename);
                TmpImage::create([
                    'filename' => $filename,
                    'folder' => $folder
                ]);
                return $folder;
            }
            if ($request->hasFile('attachment')) {
                $file = $request->file('attachment');
                $filename = $file->getClientOriginalName();
                $folder = uniqid() . '-' . now()->timestamp;
                $file->storeAs('/public/uploads/attachments/' . $folder, $filename);

                $attachment  = TmpImage::create([
                    'filename' => $filename,
                    'folder' => $folder
                ]);

                return $attachment;
            }
            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $filename = $file->getClientOriginalName();
                $folder = uniqid() . '-' . now()->timestamp;
                $file->storeAs('/public/uploads/lectures/' . $folder, $filename);

                $document  = TmpImage::create([
                    'filename' => $filename,
                    'folder' => $folder
                ]);
                return $document;
            }
            if ($request->hasFile('profile')) {
                $file = $request->file('profile');
                $filename = $file->getClientOriginalName();
                $folder = uniqid() . '-' . now()->timestamp;
                $file->storeAs('/public/uploads/profile/' . $folder, $filename);
                $document  = TmpImage::create([
                    'filename' => $filename,
                    'folder' => $folder
                ]);
                return $document;
            }
        } catch (Exception $e) {
            return redirect()->back()->with('failed', $e->getMessage());
        }
    }
}
