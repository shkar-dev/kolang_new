<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

trait WithRemoveStorageImage
{
    public function RemoveStorageImage($path, $folder)
    {

        try {
            unlink(storage_path(
                '/app/public/uploads/' . $folder . '/' . $path
            ));
            $path = explode('/', $path);
            File::deleteDirectory(storage_path(
                '/app/public/uploads/' . $folder . '/' . $path[0]
            ));
            return true;
        } catch (\Exception $e) {
            Log::error('Error while deleting file from storage: ' . $e->getMessage());
            return false;
        }
    }
}
