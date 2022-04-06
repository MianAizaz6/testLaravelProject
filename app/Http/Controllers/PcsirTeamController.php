<?php

namespace App\Http\Controllers;

use App\Models\pcsir_team;
use Illuminate\Http\Request;

class PcsirTeamController extends Controller
{
    public function index(pcsir_team $pcsir_team)
    {
        
        return view('team.team');
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
        'team_name'=>'required'
        ,'tem_role'=>'required'
        ,'team_image'=>'required|mimes:jpg,jpeg,png'
    ]);
        $res=new pcsir_team;
        $res->team_name=$request->input('team_name');
        $res->tem_role=$request->input('tem_role');
        if($request->hasfile('team_image'))
        {
            $file = $request->file('team_image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('images/team/', $filename);
            $res->team_image = $filename;
        }else{
            return $request;
            $res->team_image ='';
        }
        $res->save();
        return redirect('team_list');
        // return redirect()->back()->with('message','Student Image Upload Successfully');
         
        //  $request->session()->flash('msg','data submited');
        //  return redirect('userdetail_show');
    }

  
    public function show(pcsir_team $pcsir_team)
    {
        return view('team.team_list')->with('pcsirTeam',pcsir_team::all()); 
    }
  
    public function edit(pcsir_team $pcsir_team,$id)
    {
        return view('team/team_edit')->with('pcsirTeam',pcsir_team::find($id)); 
    }

    public function update(Request $request, pcsir_team $pcsir_team,$id)
    {
       
        $request->validate([
            'team_name'=>'required'
            ,'tem_role'=>'required'
            ,'team_image'=>'required|mimes:jpg,jpeg,png'
        ]);
        $res=pcsir_team::find($request->id);
           
            $res->team_name=$request->input('team_name');
            $res->tem_role=$request->input('tem_role');
            if($request->hasfile('team_image'))
            {
                $file = $request->file('team_image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $file->move('images/team/', $filename);
                $res->team_image = $filename;
            }else{
                return $request;
                $res->team_image ='';
            }
            $res->save();
            return redirect('team_list');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pcsir_team  $pcsir_team
     * @return \Illuminate\Http\Response
     */
    public function destroy(pcsir_team $pcsir_team,$id)
    {
        pcsir_team::destroy(array('id',$id));  
        return redirect('team_list');
    }
    public function index1(pcsir_team $pcsir_team)
    {
        $pcsir_team = pcsir_team::all();
        // dd($pcsir_team);
         return response()->json($pcsir_team,200);
    }
    
    
}