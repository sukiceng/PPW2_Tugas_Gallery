<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');

        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->storeAs('images', $imageName);

        $userImage = new UserImage();
        $userImage->user_id = Auth::user()->id;
        $userImage->original_path = $imageName;
        $userImage->save();

        return redirect()->back()->with('success', 'Gambar berhasil diunggah.');
    }
}
