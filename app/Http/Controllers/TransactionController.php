<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaction;
use App\demotransaction;
use App\Applicant;
use App\status;



class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {


        $transaction= new Transaction();
        $transaction->Pin=$request->session()->get('mypin');
        $transaction->TransactionID=request('TransactionID');
        $transaction->TransactionType=request('TransactionType');

        $transid = request('TransactionID');
        //$transid->ID= Applicant::insertGetId();
        $checkamount=demotransaction::where(['TransactionID'=>$transid])->value('Amount');
        //dd($checkamount);
        if($checkamount>1499){
            $transaction->Amount= demotransaction::where(['TransactionID'=>$transid])->value('Amount');
            $transaction->save();
            return redirect('status');
            
        }
        else{
            session()->flash('notif', 'Transaction is not valid');
             return view('applicantpayment');
             }
            //echo "Transaction is not valid";
        }
        
        
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function applicantPayment(Request $request)
    {
        verifyTransactionID(request('TransactionID'));


    }

    /*public static function verifyTransactionID($transID)
    {
        $flag=0;
        $transaction= demotransaction::find($transID);
        if($transaction->TransactionID!=NULL){
            if($transaction->amount>=1500){
                $flag = 1;
            }
        }
        return $flag;
    }*/
}
