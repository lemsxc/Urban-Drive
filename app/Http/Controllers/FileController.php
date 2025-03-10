<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    //

    public function showFile($filename)
    {
        if (Auth::check()) {
            # Check if the file exists in storage/app/
            if (!Storage::exists($filename)) {
                abort(404, 'File Not Found');
            }

            # Return the file as a response
            $path = storage_path('app/' . $filename);
            $mimeType = mime_content_type($path);

            // Generate a custom file name for download (e.g., add a timestamp)
            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
            $customFileName = 'Image_' . now()->format('YmdHis') . '.' . $fileExtension; // Custom file name with timestamp

            // Return the file as a response with the custom file name
            return response()->download($path, $customFileName, [
                'Content-Type' => $mimeType,
                'Access-Control-Allow-Origin' => '*',
            ]);
        }

        return abort(403, 'Unauthorized Access');
    }
}
