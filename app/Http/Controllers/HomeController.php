<?php

namespace App\Http\Controllers;

use App\post;
use App\User;
use App\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user=User::all();
        $post=post::orderBy('id','desc ')->paginate(9);

        
        $follower=Follower::select('following_id')->where('follower_id','=',Auth::user()->id)->pluck('following_id');
       
       
        
        if ($request->has('search')) {
            $value=$request->get('search');
            $user=User::where('name', 'like', "%$value%")->get();
           
        }

        if ($request->has('following_id')) {
            $value=$request->get('search');
            $user=User::where('name', 'like', "%$value%")->get();
           
        }
       
        return view('accounts.index',compact('user','post','follower'));
    }
}
