<?php

namespace App\Http\Controllers;

use App\Mail\SendFile;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      
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

        $rules = [
            'name'=>'required',
            'email'=>'required',
            'file_url'=>'required',
        ];

        $this->validate($request,$rules);

        $check_file = Sale::where('email',$request->email)->get();

        if($check_file->count() == 0){

            $saveSale = new Sale();

            $saveSale->name = $request->name;

            $saveSale->email = $request->email;            

            $saveSale->file_url =  Sale::uploadImage($request->file('file_url'));

            $saveSale->save();

        }else{

            $saveSale = $check_file->last();

            $saveSale->time_accessed = NULL;

            $saveSale->save();

        }

        $foreverCookieValue = bin2hex($saveSale->email);       
                        
        Mail::to($saveSale->email)->send(new SendFile($saveSale, $foreverCookieValue));
            
        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show($hex_email)
    {

        $request = Request::capture();

        $email = hex2bin($hex_email);

        return $email;

        $sale = Sale::where('email',$email)->get();

        if(empty($sale)) return "Resource Not found";

        $sale = $sale->last();       
      
        if (!$request->hasCookie('maselah') && empty($sale->time_accessed)){

            Cookie::forever('maselah', $hex_email);

            $sale->time_accessed = now();

            $sale->save();

            return view('sales.reload')->with(['hex_email'=>$hex_email]);

        }else{

            // if(Cookie::get('maselah') != $hex_email)   return "You are not the owner of this file. ".Cookie::get('maselah');

            $data = [
                'sale'=>$sale    
            ];

            return view('sales.accessfile')->with($data);

        } 
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
