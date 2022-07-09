<?php

namespace App\Http\Controllers;

use App\Models\FileData;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $file = FileData::create($request->post());
        return response()->json([
            'message'=>'File Uploaded Successfully!!',
            'file'=> $file
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
    public function destroy(FileData $file)
    {
        $file->delete();
        return response()->json([
            'message'=>'File Deleted Successfully!!'
        ]);
    }
}
