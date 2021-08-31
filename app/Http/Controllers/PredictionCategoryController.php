<?php

namespace App\Http\Controllers;

use App\Models\PredictionCategory;
use Illuminate\Http\Request;

class PredictionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=PredictionCategory::all();
        return view('admin.predictionCategory',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addPredictionCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required'
        ]);

        $predictionCategory= new PredictionCategory();
        $predictionCategory->title=$request->title;
        $predictionCategory->save();

        return redirect('admin/predictionCategory/create')->with('success', 'Data has been added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=PredictionCategory::find($id);
        return view('admin.updatePredictionCategory', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required'
        ]);

        $predictionCategory=PredictionCategory::find($id);
        $predictionCategory->title=$request->title;
        $predictionCategory->save();

        return redirect('admin/predictionCategory/'.$id.'/edit')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PredictionCategory::Where('id',$id)->delete();
        return redirect('admin/predictionCategory');
    }
}
