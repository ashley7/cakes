<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $sales = Sale::orderBy('id','DESC')->paginate(50);

        $data = [
            'sales'=>$sales,
            'title'=>'Sales'
        ];

        return view('home')->with($data);
    }
}
