<?php

namespace App\Service;

use File;
use Illuminate\Support\Facades\DB;

class Media
{
    public function saveMedia($name, $path, $fullPath, $type = 'featured', $description = '')
    {
        $media = \App\Models\Media::create([
            'filename' => $name,
            'path' => $path,
            'fullpath' => $fullPath,
            'type' => $type,
            'description' => $description
        ]);
        return $media;
    }

    public function getUniqueFileName($file, $folder)
    {
        $imageName = $file->getClientOriginalName();
        $imageName = str_replace(' ', '-', $imageName);
        $filename = pathinfo($imageName, PATHINFO_FILENAME);
        $extension = pathinfo($imageName, PATHINFO_EXTENSION);
        $sluggedFilename = str_slug($filename) . '.' . $extension;
        $imagePath = public_path($folder . '/' . $sluggedFilename);
        if (File::isFile($imagePath)) {
            $newFilename = $filename . '_' . strtotime(date('Y-m-d H:i:s'));
            return $newFilename . '.' . $extension;
        }
        return $sluggedFilename;
    }

    public function getMedias()
    {
        return \App\Models\Media::where('type', 'featured')->get();
    }
}