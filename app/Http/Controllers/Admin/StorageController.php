<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $record = YourModel::findOrFail($id);

        // if ($request->file('cover')) {
        //     $file = $request->file('cover');
        //     $filename = $file->getClientOriginalName();
        //     $file->storeAs('public/storage/cover', $filename);
        //     return response()->json(['link' => asset('storage/cover/' . $filename)]);
        // }


        // // Delete the file from the server if it exists
        // if (Storage::exists($record->file_path)) {
        //     Storage::delete($record->file_path);
        // }

        // // Remove the record from the database
        // $record->delete();
    }
}
