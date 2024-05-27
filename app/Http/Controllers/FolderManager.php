<?php

namespace App\Http\Controllers;

use App\Models\library;
use App\Models\folders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FolderManager extends Controller
{
    //Create a new folder
    public function createFolder(Request $request) {

        $formData = $request->validate([
            "folder_name" => "required"
        ]);

        $formData['user_id'] =auth()->id();
        try {
            //code...
            $folder = folders::create($formData);
            dd($folder->id);
        } catch (\Throwable $th) {
           dd($th);
        }
    }

    public function folderAssign(Request $request , library $library) {
        try {
            $formData = $request->validate(['folder_id' => 'exists:folders,id']);
            dd($library->id);
        }catch (\Throwable $th) {
            dd($th);
        }
        
    }

    public function deleteFolder(Request $request) {
        try {
            $formData = $request->validate([
                'folder_id' => 'required'
            ]);
            $folder = folders::find($formData['folder_id']);
            $folder->delete();
        }catch (\Throwable $th) {
            dd($th);
        }
    }
}
