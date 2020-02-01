@extends('layouts.app')
@section('styles')
<style>
          @font-face {
        font-family: 'Source Sans Pro';
        font-style: normal;
        font-weight: 200;
        src: local('Source Sans Pro ExtraLight'), local('SourceSansPro-ExtraLight'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3i94_wlxdr.ttf) format('truetype');
      }
      @font-face {
        font-family: 'Source Sans Pro';
        font-style: normal;
        font-weight: 300;
        src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdr.ttf) format('truetype');
      }
      @font-face {
        font-family: 'Source Sans Pro';
        font-style: normal;
        font-weight: 400;
        src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7g.ttf) format('truetype');
      }
      @font-face {
        font-family: 'Source Sans Pro';
        font-style: normal;
        font-weight: 600;
        src: local('Source Sans Pro SemiBold'), local('SourceSansPro-SemiBold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwlxdr.ttf) format('truetype');
      }
      @font-face {
        font-family: 'Source Sans Pro';
        font-style: normal;
        font-weight: 700;
        src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlxdr.ttf) format('truetype');
      }
      @font-face {
        font-family: 'Source Sans Pro';
        font-style: normal;
        font-weight: 900;
        src: local('Source Sans Pro Black'), local('SourceSansPro-Black'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3iu4nwlxdr.ttf) format('truetype');
      }
      body {
        background: #dce1df;
        color: #4f585e;
        font-family: 'Source Sans Pro', sans-serif;
        text-rendering: optimizeLegibility;
      }
      a.btn {
        background: #0096a0 !important;
        border-radius: 4px;
        box-shadow: 0 2px 0px 0 rgba(0, 0, 0, 0.25);
        color: #ffffff !important;
        display: inline-block;
        padding: 6px 30px 8px;
        position: relative;
        text-decoration: none;
        transition: all 0.1s 0s ease-out;
      }
      .no-touch a.btn:hover {
        background: #00a2ad !important;
        box-shadow: 0px 8px 2px 0 rgba(0, 0, 0, 0.075);
        -webkit-transform: translateY(-2px);
                transform: translateY(-2px);
        transition: all 0.25s 0s ease-out;
      }
      .no-touch a.btn:active,
      a.btn:active {
        background: #008a93;
        box-shadow: 0 1px 0px 0 rgba(255, 255, 255, 0.25);
        -webkit-transform: translate3d(0, 1px, 0);
                transform: translate3d(0, 1px, 0);
        transition: all 0.025s 0s ease-out;
      }
      div.cards {
        margin: 80px auto;
        max-width: 1200px;
        text-align: center;
      }
      div.card {
        background: #ffffff;
        display: inline-block;
        margin: 40px;
        width: 300px;
        -webkit-perspective: 1000;
                perspective: 1000;
        position: relative;
        text-align: left;
        transition: all 0.3s 0s ease-in;
        z-index: 1;
        height: auto;
      }
      div.card img {
        max-width: 300px;
        max-height: 300px;
        
      }
      .pictureUser
      {
        height:60px;
      }
      .card__image {
          height: 240px;
          width: 300px;
      }
      div.card div.card-title {
        background: #ffffff;
        padding: 6px 15px 10px;
        position: relative;
        z-index: 0;
      }
      div.card div.card-title a.toggle-info {
        border-radius: 32px;
        height: 32px;
        padding: 0;
        position: absolute;
        right: 15px;
        top: 10px;
        width: 32px;
      }
      div.card div.card-title a.toggle-info span {
        background: #ffffff;
        display: block;
        height: 2px;
        position: absolute;
        top: 16px;
        transition: all 0.15s 0s ease-out;
        width: 12px;
      }
      div.card div.card-title a.toggle-info span.left {
        right: 14px;
        -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
      }
      div.card div.card-title a.toggle-info span.right {
        left: 14px;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
      }
      div.card div.card-title h2 {
        font-size: 24px;
        font-weight: 700;
        letter-spacing: -0.05em;
        margin: 0;
        padding: 0;
      }
      div.card div.card-title h2 small {
        display: block;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: -0.025em;
      }
      div.card div.card-description {
        padding: 0 15px 10px;
        position: relative;
        font-size: 14px;
      }
      div.card div.card-actions {
        box-shadow: 0 2px 0px 0 rgba(0, 0, 0, 0.075);
        padding: 10px 15px 20px;
        text-align: center;
      }
      div.card div.card-flap {
        background: #d9d9d9;
        position: absolute;
        width: 100%;
        -webkit-transform-origin: top;
                transform-origin: top;
        -webkit-transform: rotateX(-90deg);
                transform: rotateX(-90deg);
      }
      div.card div.flap1 {
        transition: all 0.3s 0.3s ease-out;
        z-index: -1;
      }
      div.card div.flap2 {
        transition: all 0.3s 0s ease-out;
        z-index: -2;
      }
      div.cards.showing div.card {
        cursor: pointer;
        opacity: 0.6;
        -webkit-transform: scale(0.88);
                transform: scale(0.88);
      }
      .no-touch div.cards.showing div.card:hover {
        opacity: 0.94;
        -webkit-transform: scale(0.92);
                transform: scale(0.92);
      }
      div.card.show {
        opacity: 1 !important;
        -webkit-transform: scale(1) !important;
                transform: scale(1) !important;
      }
      div.card.show div.card-title a.toggle-info {
        background: #ff6666 !important;
      }
      div.card.show div.card-title a.toggle-info span {
        top: 15px;
      }
      div.card.show div.card-title a.toggle-info span.left {
        right: 10px;
      }
      div.card.show div.card-title a.toggle-info span.right {
        left: 10px;
      }
      div.card.show div.card-flap {
        background: #ffffff;
        -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
      }
      div.card.show div.flap1 {
        transition: all 0.3s 0s ease-out;
      }
      div.card.show div.flap2 {
        transition: all 0.3s 0.2s ease-out;
      }

      .flash_follower {
      position: fixed;
      bottom: 50px;
      right: 50px;
      background: #b9f8bf;
      padding: 15px;
      color: #1a5f11;
      border-radius: 8px;
      font-family:sans-serif;
      font-size: 15px;
      display: none;
      z-index: 99;
      
    }

          
    

</style>
@section('script')
<script language="javascript">
    $(document).ready(function(){
      var zindex = 10;
  
  $("div.card").click(function(){
   

    var isShowing = false;

    if ($(this).hasClass("show")) {
      isShowing = true
    }

    if ($("div.cards").hasClass("showing")) {
      // a card is already in view
      $("div.card.show")
        .removeClass("show");

      if (isShowing) {
        // this card was showing - reset the grid
        $("div.cards")
          .removeClass("showing");
      } else {
        // this card isn't showing - get in with it
        $(this)
          .css({zIndex: zindex})
          .addClass("show");

      }

      zindex++;

    } else {
      // no cards in view
      $("div.cards")
        .addClass("showing");
      $(this)
        .css({zIndex:zindex})
        .addClass("show");

      zindex++;
    }
    
  });
});


     //------------script Ajax for sending the data(Followers) without refleshing the paga --------//


              
      $('.profile-card__button').click(function(e) {
        e.preventDefault(); // Prevent Default form Submission
            if ($(".profile-card__button").hasClass("button--orange")) {
            
                var value="Following";
                $(".profile-card__button").html(value);
                $(".profile-card__button").removeClass("button--orange");
                $(".profile-card__button").addClass("follow");
                e.preventDefault(); // Prevent Default form Submission
                var following_id = $('#following_id').val();
                var follower_id = $('#follower_id').val();
              
              

                $.ajax({
                    type:"post",
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
            

            
          }  else if($(".profile-card__button").hasClass("follow")) 
          {
          
                var value="Follow";
                $(".profile-card__button").html(value);
                $(".profile-card__button").removeClass("follow");
                $(".profile-card__button").addClass("button--orange");
                e.preventDefault(); // Prevent Default form Submission
                var following_id = $('#following_id').val();
                var follower_id = $('#follower_id').val();
              
              

                $.ajax({
                    type:"post",
                    url: '/instagram1/public/Following/{{$user->id}}',
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
    
@endsection





@section('content')



<div class="container">

    
    <div class="flash_follower">
      <i class="fa fa-check"></i>
        <span class="flash"></span>
    </div>

    

    
   
  
      <div class="profile-card js-profile-card">
        <div class="row">
            <div class="col-md-4"> 
                <div class="profile-card__img">
                    <img src="http://localhost/instagram1/public/images/picturesProfile/{{$user->photoId}}" alt="profile card">
                  </div>
                  <div class="profile-card-ctr">
                    <form action="" id="follower" method="post">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <input type="hidden" id="following_id" name="following_id" value="{{$user->id}}">
                        <input type="hidden" id="follower_id" name="follower_id" value="{{Auth::user()->id}}">
                        
                         <button type="button" id="buttonFollow"  class="profile-card__button">
                         <script>
                              $(document).ready(function(){
                                  @if($able)
                                       
                                        var value="Follow";
                                        $(".profile-card__button").html(value);
                                        $(".profile-card__button").removeClass("follow");
                                        $(".profile-card__button").addClass("button--orange");
                                        
                                  @elseif(!$able)  
                                  
                                         
                                    var value="Following";
                                        $(".profile-card__button").html(value);
                                        $(".profile-card__button").removeClass("button--orange");
                                        $(".profile-card__button").addClass("follow");
                                       
                                  @endif

                         
                                                                

                                        
                                });
                        </script>

                      
                          
                      
                      </button>
                      </form>
                    </div>
               
            
              </div>
              <div class="col-md-8"> 
                  <div class="profile-card-inf">
                      <div class="profile-card-inf__item">
                        <div class="profile-card-inf__title">{{$myFollowers}}</div>
                        <div class="profile-card-inf__txt">Followers</div>
                      </div>
              
                      <div class="profile-card-inf__item">
                        <div class="profile-card-inf__title">{{$following}}</div>
                        <div class="profile-card-inf__txt">Following</div>
                      </div>
              
                      <div class="profile-card-inf__item">
                        <div class="profile-card-inf__title">{{$countPost}}</div>
                        <div class="profile-card-inf__txt">Articles</div>
                      </div>
              
                      
                    </div>

                    <div class="profile-card__cnt js-profile-cnt col-md-12">
                        <div class="profile-card__name">{{$user->name}}</div>
                        <div class="profile-card__txt">Front-end Developer from <strong>{{$user->country}}</strong></div>
                        <div class="profile-card-loc">
                          <span class="profile-card-loc__icon">
                            <svg class="icon"><use xlink:href="#icon-location"></use></svg>
                          </span>
                        </div>
                        
                      </div>
                  
            
                </div>
        </div>
      </div>

      <div class="col-md-12">
          <div class="cards">
            @foreach ($postusers as $_post)
               
            <div class="card">
          
              <div class="media  d-flex  align-items-center"><a href="{{url('userAccount/'.$_post->user->id)}}"><img src="http://localhost/instagram1/public/images/picturesProfile/{{$_post->user->photoId}}" alt="Click for see the profile"  width="65" class="mr-3 pictureUser rounded-circle img-thumbnail shadow-sm"></a>
                <div class="media-body">
                    <h4 style="cursor:pointer" onclick="window.location='{{url('userAccount/'.$_post->user->id)}}';" class="m-0">{{$_post->user->name}}</h4>
                    <p class="font-weight-light text-muted mb-0">Created : {{$_post->created_at->diffForHumans()}}</p>
                </div>
              </div>
         
          <img class="card__image" src="http://localhost/instagram1/public/images/posts/{{$_post->fileName}}" alt="wave" />
          <div class="card-title">
            <a class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h2>
                {{$_post->title}}
                <small>{{str_limit($_post->subTitle,34)}}</small>
            </h2>
          </div>
          <div class="card-flap flap1">
            <div class="card-description">
              {{str_limit($_post->description,140)}}
            </div>
            <div class="card-flap flap2">
              <div class="card-actions">
                <a href="{{url('readMore/'.$_post->id)}}" class="btn ReadMore">Read more</a>
              </div>
            </div>
          </div>
        </div>
  
                 
             @endforeach
                
            {{-- for pagination / for show lots page in one page  --}}
            <br><br><br>
                {{$postusers->links()}}



             
            
       </div>


    
    
    
    
    </div>

  </div>  
    
@endsection