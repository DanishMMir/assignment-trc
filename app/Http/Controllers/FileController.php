<?php

namespace App\Http\Controllers;

use App\Models\FileData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Controller as BaseController;

class FileController  extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $files = FileData::all();
        $files = [
            "data" => $files
        ];
        return response()->json($files);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $title = $request->get('title');
        $file = $request->file('image');

        //Move Uploaded File
        $destinationPath = storage_path('uploads');
        $file->move($destinationPath,$file->getClientOriginalName());

        $file = FileData::create(['title' => $title, 'file_name' => $file->getClientOriginalName()]);

        return response()->json([
            'message'=>'File Uploaded Successfully!!',
            'file'=> $file
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param FileData $file
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, FileData $file)
    {
        $file->fill($request->post())->save();
        return response()->json([
            'message'=>'File Updated Successfully!!',
            'file'=>$file
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param FileData $file
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($file)
    {
        $file= FileData::find($file);
        $filePath = storage_path('uploads/'.$file->file_name);
        File::delete($filePath);
        $file->delete();
        return back();
    }
}
