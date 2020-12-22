<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sschsc_info;
use App\demodb;

class SscHscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //dd(session('SSC_HSC_ID'));

        if(session('SSC_HSC_ID')!=null)
            $sdata= sschsc_info::where('ID',session('SSC_HSC_ID'))->get()->toArray();
            //dd(sschsc_info::where('ID',session('SSC_HSC_ID'))->get());
      
        return view('preview',compact('sdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSscHscinfo(Request $request)
    { 
        //dd($request->session()->all());
        //session_start();
        $sschsc_info= new sschsc_info();

        $sschsc_info->contact_no = request('contact_no');
        $sschsc_info->email=   request('email');
    
        $sschsc_info->SSCroll = request('SSCroll');
        $sschsc_info->SSCPassingYear=   request('SSCPassingYear');
        $sschsc_info->SSCBoard=   request('SSCBoard');
        $sschsc_info->HSCroll = request('HSCroll');
        $sschsc_info->HSCPassingYear=   request('HSCPassingYear');
        $sschsc_info->HSCBoard=   request('HSCBoard');
        $reg = $request->input('Reg_no');
        $checkreg= demodb::where(['RegistrationNo'=>$reg])->get();
        
        if(count($checkreg)>0)
        {
            $sschsc_info->Reg_no=$reg;
            $sschsc_info->save();
            session(['SSC_HSC_ID'=>$sschsc_info->ID]);
            return redirect('preview')->with('success');
        }
        //dd($sschsc_info->ID);
        
        else{
            session()->flash('notif', 'Registration No is not valid');
             return view('sschscinfo');
             }
        //dd(session('SSC_HSC_ID'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //print_r($request->input('SSCroll'));
       //$data=$request->input();
        //$request->session()->put('',$data);
        //print_r($request->session()->get('');)

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
