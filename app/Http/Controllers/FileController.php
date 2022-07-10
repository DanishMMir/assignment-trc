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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($file)
    {
        $file = FileData::find($file);
        return view('admin.edit',['file' => $file, 'view' => 'file']);
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
     */
    public function update(Request $request, $file)
    {
        $file = FileData::find($file);

        $title = $request->get('title');
        $newFile = $request->file('image');

        // delete old file
        $filePath = storage_path('uploads/'.$file->file_name);
        File::delete($filePath);

        //Move Uploaded File
        $destinationPath = storage_path('uploads');
        $newFile->move($destinationPath,$newFile->getClientOriginalName());

        $file->title = $title;
        $file->file_name = $newFile->getClientOriginalName();

        $file->save();
        return response()->json([
            'message'=>'File Updated Successfully!!',
            'file'=> $file
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param FileData $file
     * @return \Illuminate\Http\Response
     */
    public function destroy($file)
    {
        $file= FileData::find($file);
        $filePath = storage_path('uploads/'.$file->file_name);
        File::delete($filePath);
        $file->delete();
        return back();
    }

    public function download($file){
        $file= FileData::find($file);
        $filePath = storage_path('uploads/'.$file->file_name);
        return response()->download($filePath);
    }
}
