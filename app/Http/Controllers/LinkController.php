<?php

namespace App\Http\Controllers;

use App\Models\LinkData;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LinkController  extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $links = LinkData::all();
        $links = [
            "data" => $links
        ];
        return response()->json($links);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $link = LinkData::create($request->post());
        return response()->json([
            'message'=>'Link Created Successfully!!',
            'link'=> $link
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param LinkData $link
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, LinkData $link)
    {
        $link->fill($request->post())->save();
        return response()->json([
            'message'=>'Link Updated Successfully!!',
            'link'=>$link
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param LinkData $link
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($link)
    {
        $link = LinkData::find($link);
        $link->delete();
        return back();
    }
}
