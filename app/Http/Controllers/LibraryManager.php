<?php

namespace App\Http\Controllers;


use App\Models\library;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LibraryManager extends UserManager
{

    public static function entryform()
    {
        return view('dashboard.entryform');
    }

    public static function comicInsert(Request $request)
    {

        $formData = $request->validate([
            "name" => 'required',
            "link" => "nullable",
            "bookmark" => "nullable",
            "reading_status" => "nullable",
            "manga_status" => "nullable",
            "tags" => "nullable",
            "review" => "nullable",
            "folder_id" => "nullable"
        ]);

        dd($formData);

        if ($request->hasFile('cover_image')) {
            $formData['cover_image'] = $request->file('cover_image')->store('coverImage', 'public');
        }
        $formData['user_id'] = auth()->id();

        library::create($formData);

        return redirect('/home')->with('message', "Woohoo! your library increased in size.");
    }

    public function selectedManga(library $library)
    {
        return view('dashboard.viewmore', [
            'library' => $library,
            'folders' => $this->getFolders()
        ]);
    }

    public static function updateManga(library $library)
    {
        return view('dashboard.updateForm', [
            'library' => $library
        ]);
    }
    public static function comicUpdate(Request $request, library $library)
    {
        $formData = $request->validate([
            "name" => "required",
            "link" => "nullable",
            "bookmark" => "nullable",
            "reading_status" => "required",
            "manga_status" => "required",
            "tags" => "nullable",
            "review" => "nullable",
        ]);

        if ($request->hasFile('cover_image')) {
            self::imageDelete($library->cover_image);
            $formData['cover_image'] = $request->file('cover_image')->store('coverImage', 'public');
        }

        $library->update($formData);
        return back();
    }

    public static function mangaDrop(library $library)
    {
        if ($library->user_id != Auth::user()->id) {
            dd('hello world');
        }
        self::imageDelete($library->cover_image);
        $library->delete();
        return redirect('/home')->with('message', "Sadge! we lost one :(");
    }
    private static function imageDelete($Dbimage)
    {
        if (empty($Dbimage)) return;
        $image_path = public_path('storage/' . $Dbimage);
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }
}
