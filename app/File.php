<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    public static function toStore($file, $path)
    {
        $fileToStore = Carbon::createFromTimeStamp(time())->format('m-d-Y').'-'.md5(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).time()).'.'.$file->getClientOriginalExtension();
        $file->storeAs('public/'.$path, $fileToStore);

        return $fileToStore;
    }

    public static function toDelete($fileToDelete, $path)
    {
        if (!empty($fileToDelete)) {
            return Storage::delete('public/'.$path.'/'.$fileToDelete);
        }

        return false;
    }
}
