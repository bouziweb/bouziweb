<?php

namespace App\Http\Controllers;

use App\post;
use App\User;
use App\Follower;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class accountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       
        $user=Auth::user()->id;
        $post=post::where('user_id','=',$user)->orderBy('id','desc')->paginate(9);
        $myFollowers=Follower::where('follower_id','=',$user)->count();
        $following=Follower::where('following_id','=',$user)->count();
        $count = post::where('user_id','=',$user)->count();
        return view('accounts.account',compact('post','user','count','myFollowers','following'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userAuth=Auth::user()->id;
        $user=User::find($id);
        $postusers=post::where('user_id','=',$user->id)->orderBy('id','desc')->paginate(9);
        $countPost = post::where('user_id','=',$user->id)->count();
        $myFollowers=Follower::where('follower_id','=',$user->id)->count();
        $following=Follower::where('following_id','=',$user->id)->count();
        $follower=Follower::where('follower_id','=',$userAuth)->get();
        
        
        $able=true;
       
    
        foreach ($follower as $followers)
        { 
            if($followers->following_id===$user->id)
            {
                $able=false;
            }

        }
    
        return view('accounts.userAccount',compact('user','countPost','postusers','follower','able','following','myFollowers'));
       
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
