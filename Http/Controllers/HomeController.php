<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Quote;

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
        $quotes = Quote::all();
        return view('admin.index',compact('quotes'));
    }

    public function addQuote(){
        return view('admin.add');
    }

    public function insertQuote(Request $req){

        $this->validate($req, [
            'author' => 'required',
            'description' => 'required',
        ]);

        $quote = new Quote;
        $quote->author = $req->author;
        $quote->description = $req->description;
        $quote->save();
        return redirect('home')->with('msg','Successfully Added!');
    }

    public function deleteQuote($id){
        $quote = Quote::find($id);
        if($quote != null){
            $quote->delete();
            return redirect('home')->with('msg','Successfully Deleted!');
        } else {
            return redirect('home')->with('msg','No Found!');
        }
    }

}
