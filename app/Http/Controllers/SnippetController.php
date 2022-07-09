<?php

namespace App\Http\Controllers;

use App\Models\SnippetData;
use Illuminate\Routing\Controller as BaseController;

class SnippetController  extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $snippets = SnippetData::all();
        $snippets = [
            "data" => $snippets
        ];
        return response()->json($snippets);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $snippet = SnippetData::create($request->post());
        return response()->json([
            'message'=>'Snippet Created Successfully!!',
            'snippet'=> $snippet
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param SnippetData $snippet
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, SnippetData $snippet)
    {
        $snippet->fill($request->post())->save();
        return response()->json([
            'message'=>'Snippet Updated Successfully!!',
            'snippet'=>$snippet
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SnippetData $snippet
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(SnippetData $snippet)
    {
        $snippet->delete();
        return response()->json([
            'message'=>'Snippet Deleted Successfully!!'
        ]);
    }
}
