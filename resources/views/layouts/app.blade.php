<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BouziWeb') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{asset('https://fonts.gstatic.com')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!--====================================For the Login page===========================================================-->
     <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
     <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
     <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
     <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
     <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
     <!--===============================================================================================-->	
         <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
     <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
     <!--===============================================================================================-->
       <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
         <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
         @yield('styles')
         <link href="{{ asset('css/style.css') }}" rel="stylesheet">


         <script src="{{asset('https://code.jquery.com/jquery-3.4.1.js')}}"></script>


 <!--====================================For my Style===========================================================-->
  <style>
      .searchButtonUnFollow{
            background-color: white !important; 
            color: #54b9cd !important;
            border: 1px solid #54b9cd !important;
            margin: 15px !important;
            padding: 7px 27px  !important;
            border-radius: 3px !important;
            font-weight: bold;
            font-family: sans-serif;
      }
      .searchButtonFollow{
            background-color: #54b9cd !important; 
            color: #fff !important;
            border: 1px solid #54b9cd !important;
            margin: 15px !important;
            padding: 7px 27px  !important;
            border-radius: 3px !important;
            font-weight: bold;
            font-family: sans-serif;
      }

      img,h1,h2,h3,h4:hover{cursor: pointer}

      /*---------- style for navbar Mobile ---------*/
      
        .menu-block {
            display: none;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            position: fixed;
            z-index: 99;
            top: 60px;
            right: 10px;

        }

        .menu-nav {
            background-color: #fff;
            height: 50px;
            line-height: 50px;
            padding-left: 20px;
            padding-right: 40px;
            margin-right: -25px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            /*--| animation |--*/
            transition: 0.5s;
            transform-origin: right center;
            transform: translateX(100%);
            opacity: 0;
        }

        .menu-nav_active {
            transform: translateX(0);
            opacity: 1;
        }

        .menu-nav__link {
            display: inline-block;
            color: #222;
            margin-right: 20px;
        }

        /*-------- button -----------*/
        .section {
            height: 100vh;
            background-color: #7b1fa2;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu-btn {
            display: block;
            width: 50px;
            height: 50px;
            background-color: #fff;
            border-radius: 50%;
            position: relative;
            border: 3px solid #3ba5bf;
        }

        .menu-btn span, 
        .menu-btn span:before,
        .menu-btn span:after { 
            position: absolute;
            top: 50%; margin-top: -1px;
            left: 50%; margin-left: -10px;
            width: 20px;
            height: 2px;
            background-color: #222;
        }

        .menu-btn span:before,
        .menu-btn span:after {
            content: '';
            display: block;
            transition: 0.2s;
        }

        .menu-btn span:before {
            transform: translateY(-5px);
        }

        .menu-btn span:after {
            transform: translateY(5px);
        }

        .menu-btn_active span {
            height: 0;
        }

        .menu-btn_active span:before {
            transform: rotate(45deg);
        }

        .menu-btn_active span:after {
            transform: rotate(-45deg);
        }

        /*--------- Responsive(mobile)----------- */
        @media (max-width: 930px){
            .main .view {
             margin-left: 0px; 
            }
            .main .nav{
                left: -200px;
            }
            .menu-block {
            display: flex !important;
          
        }

        }

  </style>
      
</head>
<body>
  
        @if(Auth::check())
                <div class="page">
                        <div class="pageHeader">
                        <div class="title" style="cursor:pointer" onclick="window.location='{{url('home')}}';">BouziWeb</div>
                        <div class="userPanel dropdown">
                            <i class="fa fa-chevron-down"></i>
                            <span class="username" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} </span>
                            <img src="http://localhost/instagram1/public/images/picturesProfile/{{Auth::user()->photoId}}" width="40" height="40"/>
                            <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                        </div>
                        </div>
                        <div class="main">
                        <div class="nav">
                            <form  method="get" action="/instagram1/public/home">
                                <div class="searchbox">
                                      
                                    <div><i class="fa fa-search"></i>
                                        <input type="search" name="search" value="{{request('search')}}" placeholder="Search"/>
                                        <button hidden for="search" type="submit"></button>
                                    </div>
                               </div>
                            </form>
                            <div class="menu">
                            <div class="title">Navigation</div>
                            <ul>
                            <li> <a href="{{url('/home')}}"><i class="fa fa-home"></i>Home</a></li>
                            <li><a href="{{url('/account')}}"><i class="fa fa-signal"></i>Account</a></li>
                            <li class="active"> <a href="{{url('/post')}}"><i class="fa fa-tasks"></i>Post</a></li>
                            <li> <a href="{{url('/user')}}"><i class="fa fa-envelope"></i>Modifier</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="view">
                            <div class="viewHeader">
                            <div class="title">Manage Tasks</div>
                            <div class="functions">
                                <a href="{{url('/post')}}"><div class="button active">Add New Post</div></a>
                                <a href="{{url('/account')}}"><div class="button">Account</div></a>
                                    
                            </div>
                            </div>

                         @if (request('search'))
                             
                        
                            @foreach ($user as $userSearch)
                            
                            <form method="post" action=""  id="follower">
                                    
                            <br><br> 
                         
                            <div class="row">
                                    <div class="col-md-3">
                                        <div style="margin-left:40px" class="media d-flex  align-items-center">
                                               {{-- <p hidden>{{$userSearch->id}}</p> --}}
                                            <img src="http://localhost/instagram1/public/images/picturesProfile/{{$userSearch->photoId}}" onclick="window.location='{{url('userAccount/'.$userSearch->id)}}';" alt="Click for see the profile"  width="65" class="mr-3 pictureUser rounded-circle img-thumbnail shadow-sm">
                                            <div class="media-body">
                                                <h4 class="m-0" onclick="window.location='{{url('userAccount/'.$userSearch->id)}}';">{{$userSearch->name}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                            <input type="hidden" id="following_id" name="following_id" value="{{$userSearch->id}}">
                                            <input type="hidden" id="follower_id" name="follower_id" value="{{Auth::user()->id}}">
                                            <button class="searchButton button_{{$userSearch->id}}">  
                                                 
                                                   
                                          
                                                    {{$able=false}} 
                                                    @foreach($follower as $followers )
                                                   
                                                
                                                           
                                                            @if($userSearch->id==$followers)
                                                            
                                                               {{$able=true}}
                                                               @break
                                                              
                                                              @else {{$able=false}} 
                                                           
                                                            @endif

                                                    @endforeach
                                               
                                   
                                                    <script>
                                                       
    
                                                                    @if($able)
                                                                   
                                                                        var value="Following";
                                                                        $('.button_{{$userSearch->id}}').html(value);
                                                                        $('.button_{{$userSearch->id}}').removeClass("searchButtonFollow");
                                                                        $('.button_{{$userSearch->id}}').addClass("searchButtonUnFollow");
                                                                        console.log({{$able}})
                                                                 
                                                                    @elseif(!$able)
                                                                      
                                                                        var value="Follow";
                                                                        $('.button_{{$userSearch->id}}').html(value);
                                                                        $('.button_{{$userSearch->id}}').removeClass("searchButtonUnFollow");
                                                                        $('.button_{{$userSearch->id}}').addClass("searchButtonFollow");
                                                                        console.log({{$able}})

                                                                     
                                                                    @endif
                                                             
                                                                 
                                                             
                                                      </script>
                                                      
                                                    </button>
                                                    <script>
                                                                     
                                                            $('.button_{{$userSearch->id}}').click(function(e) {
                                                              e.preventDefault(); // Prevent Default form Submission
                                                                  if ($(this).hasClass("searchButtonFollow")) {
                                                                  
                                                                      var value="Following";
                                                                      $(this).html(value);
                                                                      $(this).removeClass("searchButtonFollow");
                                                                      $(this).addClass("searchButtonUnFollow");
                                                                     
                                                                     
                                                                    
                                                                      var following_id = {{$userSearch->id}}
                                                                       var follower_id = {{Auth::user()->id}}
                           
                                                      
                                                                      $.ajax({
                                                                          type:"POST",
                                                                          url: '/instagram1/public/Following',
                                                                          data: { _token: $('meta[name="csrf-token"]').attr('content'),following_id,follower_id},
                                                                          success:function(data) {
                                                                            $('.flash').html('Following succes');
                                                                            $('.flash_follower').css({"background-color":"#24d6b9","color":"white"})
                                                                            $('.flash_follower').fadeIn('slow');
                                                                                    setTimeout(function(){
                                                                                        $('.flash_follower').fadeOut('slow')
                                                                        
                                                                                },3000)
                                                                          },
                                                                          error:function() {
                                                                          }
                                                                          
                                                                      });
                                                                  
                                                      
                                                                  
                                                                }  else if($(this).hasClass("searchButtonUnFollow")) 
                                                                {
                                                                
                                                                      var value="Follow";
                                                                      $(this).html(value);
                                                                      $(this).removeClass("searchButtonUnFollow");
                                                                      $(this).addClass("searchButtonFollow");
                                                                      e.preventDefault(); // Prevent Default form Submission
                                                                     
                                                                      var following_id = {{$userSearch->id}}
                                                                       var follower_id = {{Auth::user()->id}}
                                                                    
                                                      
                                                                      $.ajax({
                                                                          type:"post",
                                                                          url: '/instagram1/public/Following/{{$userSearch->id}}',
                                                                          data: { _token: $('meta[name="csrf-token"]').attr('content'),
                                                                                  _method: 'DELETE',
                                                                                  following_id,
                                                                                  follower_id},
                                                                          success:function(data) {
                                                                             $('.flash').html('UnFollowing succes');
                                                                             $('.flash_follower').css({"background-color":"#fb9090","color":"white"})
                                                                              $('.flash_follower').fadeIn('slow');
                                                                                    setTimeout(function(){
                                                                                        $('.flash_follower').fadeOut('slow')
                                                                        
                                                                                },3000)
                                                                             
                                                                          },
                                                                          error:function() {
                                                                          }
                                                                          
                                                                      });
                                                                      
                                                                }
                                                      
                                                                
                                                                    
                                                              });
                                                      
                                                                 
                                                                 
                                                          </script>
                                                   
                                        </form>
                                    </div>
                              </div>
                               
                            @endforeach
                            
                           

                         @else

                          {{------ menu for mobile virsion -------}}
                            <div class="menu-block">
                                    <nav class="menu-nav">
                                        <a class="menu-nav__link" href="http://localhost/instagram1/public/home">Home</a>
                                        <a class="menu-nav__link" href="http://localhost/instagram1/public/account">Account</a>
                                        <a class="menu-nav__link" href="http://localhost/instagram1/public/post">Post</a>
                                        <a class="menu-nav__link" href="http://localhost/instagram1/public/user">Modifier</a>
                                    </nav>
                                    <a href="#" class="menu-btn">
                                        <span></span>
                                    </a>
                                    
                            </div>
                        {{-- --------------------------------------- --}}

                            <div class="content">
                                
                                    @yield('content')
                                    
                            </div>
                             
                         @endif
                           
                        </div>
                        </div>
                </div>
                
        
        @else 

            @yield('content')

        @endif 

            



         









    <!--===============================================================================================-->	
    <script src="{{ asset('js/app.js') }}"></script>
     <!--===============================================================================================-->	
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
     <!--===============================================================================================-->
         <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
         <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
     <!--===============================================================================================-->
         <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
     <!--===============================================================================================-->
     
         <script src="{{asset('js/main.js')}}"></script>

         @yield('script')


         <script language="javascript">
                $(document).ready(function(){
                      
                      {{-- ------------------------Script For flash_message -------------------------------- --}}
                  
                          
                              $('.flash_message').fadeIn('slow');
                              setTimeout(function(){
                                  $('.flash_message').fadeOut('slow')
                  
                              },3000)

                            //   --------------------------------------------------------------------
                  
                        
          
          
                 
                });  
                
             </script>
             {{---------- script for navBar Mobile ---------}}
             <script>
             $('.menu-btn').on('click', function(e) {
                    e.preventDefault;
                    $(this).toggleClass('menu-btn_active');
                    $('.menu-nav').toggleClass('menu-nav_active');
                })
             </script>

             {{-- ---------------------------------------------- --}}


       
</body>
</html>
