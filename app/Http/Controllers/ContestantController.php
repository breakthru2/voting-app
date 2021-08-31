<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use Illuminate\Http\Request;

class ContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Contestant::all();
        return view('admin.contestants.index',[
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
        return view('admin.contestants.addContestant');
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
            'contestant_name'=>'required',
            'isEvicted'=>'required',
        ]);

        // Contestant Image
        if($request->hasFile('full_img')){
            $image=$request->file('full_img');
            $reImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/imgs');
            $image->move($dest,$reImage);
        }else{
            $reImage='na';
        }

        $contestant= new Contestant();
        $contestant->contestant_name=$request->contestant_name;
        $contestant->full_img=$reImage;
        $contestant->isEvicted=$request->isEvicted;

        $contestant->save();

        return redirect('admin/contestant/create')->with('success', 'Data has been added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Contestant::find($id);
        return view('admin.contestants.updateContestant', ['data'=>$data]);
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
            'contestant_name'=>'required',
            'isEvicted'=>'required',
        ]);

        // Contestant Image
        if($request->hasFile('full_img')){
            $image=$request->file('full_img');
            $reImage=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/imgs');
            $image->move($dest,$reImage);
        }else{
            $reImage=$request->full_img;
        }

        $contestant=Contestant::find($id);
        $contestant->contestant_name=$request->contestant_name;
        $contestant->full_img=$reImage;
        $contestant->isEvicted=$request->isEvicted;

        $contestant->save();

        return redirect('admin/contestant/'.$id.'/edit')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contestant::Where('id',$id)->delete();
        return redirect('admin/contestant');
    }
}
