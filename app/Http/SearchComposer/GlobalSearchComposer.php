<?php

namespace App\Http\SearchComposer;

use App\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class GlobalSearchComposer
{
    public $searchUser;

    public function compose(View $view)
    {
        if (Input::has('search')) {
            
            $value=Input::get('search');
            $searchUser=User::where('name', 'like', "%$value%")->get();
            $view->with('user',$searchUser);
           
        }

    }

}
