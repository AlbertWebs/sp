<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Photo;

class DropzoneController extends Controller
{

    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone($id)
    {
        $page_name = "";
        $page_title = "";
        return view('admin.dropzone', compact('page_name','page_title','id'));
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');

        $OriginalName = $image->getClientOriginalName();
        // $imageName = $OriginalName.'.'.$image->extension();
        $imageName = $OriginalName;

        $image->move(public_path('uploads/portfolio'),$imageName);
        // add to dDatabase
        $Photos = new Photo;
        $Photos->name  = $imageName;
        $Photos->portfolio_id = $request->portfolio_id;
        $Photos->path = public_path('uploads/portfolio');
        $Photos->save();

        return response()->json(['success'=>$imageName]);
    }

}
