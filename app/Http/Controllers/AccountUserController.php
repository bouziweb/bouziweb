<?php

namespace App\Http\Controllers;
use App\post;
use App\User;
use App\Follower;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request as LaravelRequest;

class AccountUserController extends Controller
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
        
        $user=Auth::user();
        $myFollowers=Follower::where('follower_id','=',$user->id)->count();
        $following=Follower::where('following_id','=',$user->id)->count();
        $count = post::where('user_id','=',$user->id)->count();
        return view('accounts.modifier',compact('user','count','myFollowers','following'));
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
       
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $user=User::findOrFail($id);

         $input['name']=$request->name;
         $input['email']=$request->email;
         $input['password']=$request->password;
         $input['country']=$request->country;

         $input['photoId']=$request->photoId;
         


            $file=$request->file('photoId');
            $check=false;
  
                if ($file) 
                {  
                   $check=true;
                    // dd($file->getClientOriginalName());
                    $name=time().$file->getClientOriginalName();
                
                    $file->move('images/picturesProfile',$name); 
                    $input['photoId']=$name;   
               
                    
                
                }


            if (empty(trim($request->password))) {
                if($check==false){
                    $input=$request->except('password');
                    $input['photoId']=Auth::user()->photoId;

                }
                if($check==true) {

                    $input=$request->except('password');
                    $input['photoId']=$name; 
                     
                }
           
                
            } else {

                        if($check==false){
                            $input['password']=bcrypt($request->password);
                            $input['photoId']=Auth::user()->photoId;

                        }
                        if($check==true) {
                    
                            $input['password']=bcrypt($request->password);
                            $input['photoId']=$name; 
                            
                        }
                        
                    }

            $user->update($input);
            Session::flash('flash_admin','The user has been edited');
            return redirect('/user');
            
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
