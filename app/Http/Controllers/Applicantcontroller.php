<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\sschsc_info;
use App\demodb;
use App\status;




class Applicantcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('applicantlogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checklogin(Request $request)
    {

            $pin = $request->input('pin');
            $password = $request->input('password');
            $checklogin=Applicant::where(['pin'=>$pin, 'password'=>$password])->get();

            session()->put('mypin',$request->input('pin'));
            if(count($checklogin)>0){
            //dd($request->session()->get('mypin'));
            return redirect('applicantdashboard');
            
        }
        else{
            session()->flash('notification', 'Wrong Pin or Password');
            return view('applicantlogin');
            

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePinPass()
    {
        $applicant= new Applicant();
        $applicant->pin = request('pin');
        $applicant->password=   request('password');

        $applicant->ID= sschsc_info::max('ID');
        
        $applicant->save();
        session()->flash('notif', 'Pin and Pass confirmed');
        //session(['app_pin'=>$applicant->pin]);
        //dd($request->session()->get('ID'));
        return redirect('homepage');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function statusview()
    {

          $session=session()->get('mypin');
          $myid=Applicant::where(['pin'=>$session])->value('ID');
          $payment= status::where(['ID'=>$myid])->value('PaymentConfirm');
          $eligible= status::where(['ID'=>$myid])->value('ShortList');
          //$paycheck= count($payment);
          session(['eligible'=>$eligible]);

          session(['paycheck'=>$payment]);
          $stat= status::where(['ID'=>$myid])->select('ID', 'ApplicationComplete', 'PaymentConfirm', 'ShortList')->get()->toArray();

          return view('status',compact('stat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileview()
    {        
             
            

            $aid=session()->get('mypin');
            
           
            $myid=Applicant::where(['pin'=>$aid])->value('ID');
            //dd($myid);
            $regno=sschsc_info::where(['ID'=>$myid])->value('Reg_No');
            //dd($regno);
            $name=demodb::where(['RegistrationNo'=>$regno])->value('Name');
            $alldata= demodb::where(['RegistrationNo'=>$regno])->get()->toArray();
            //dd($alldata);
            session(['myname'=>$name]);

            //return view('applicantdashboard')->with('session', $request->session()->get('mypin'));
             return view('applicantdashboard',compact('alldata'));
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
    public static function destroy($id)
    {
        //
    }

    public static function generatePin()
    {
    $keyLenght =8;
    $randomstr=substr(str_shuffle("1234567890"), 1, $keyLenght);
    $pin=$randomstr;
    return $pin;
    }

    public static function generatePass(){
    $keyLenght=8;
    $randstr=substr(str_shuffle("123456789ABCDEFGHIJKLMNPQRSTUVWXYZ"), 5, $keyLenght);
    $pass=$randstr;
    return $pass;
}
}
