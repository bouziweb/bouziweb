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
      background: #0096a0;
      border-radius: 4px;
      box-shadow: 0 2px 0px 0 rgba(0, 0, 0, 0.25);
      color: #ffffff;
      display: inline-block;
      padding: 6px 30px 8px;
      position: relative;
      text-decoration: none;
      transition: all 0.1s 0s ease-out;
    }
    .no-touch a.btn:hover {
      background: #00a2ad;
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
      max-width: 960px;
      text-align: center;
      overflow: hidden;
    }
    div.card {
      background: #ffffff;
      display: inline-block;
      margin: 8px;
      width: 300px;
      -webkit-perspective: 1000;
              perspective: 1000;
      position: relative;
      text-align: left;
      transition: all 0.3s 0s ease-in;
      z-index: 1;
      overflow: hidden;
    }
    .pictureUser
      {
        height:60px;
      }
  .card__image{height: 240px;}
    div.card img {
      max-width: 300px;
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


       /* --------------style for showing the button when hover for Update the post----------- */

       .updatePost{
      position: absolute;
      right: -240px;
      margin: 2px;
      -webkit-transition: right 0.8s ease;
      -moz-transition: right 0.8s ease;
      -o-transition: right 0.8s ease;
      -ms-transition: right 0.8s ease;
      transition: right 0.8s ease;
      overflow: hidden;
      
    }
    .card:hover >.updatePost{
      right: 20px;
      display:block;
      z-index: 1000;
     
      
    
    }

    /* ----------------------------------- */


       /*---------------- Style for the Confirmation Delete form --------------------- */

          .modal-confirm {		
            color: #636363;
            width: 400px;
          }
          .modal-confirm .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
                text-align: center;
            font-size: 14px;
          }
          .modal-confirm .modal-header {
            border-bottom: none;   
                position: relative;
          }
          .modal-confirm h4 {
            text-align: center;
            font-size: 26px;
            margin: 30px 0 -10px;
          }
          .modal-confirm .close {
                position: absolute;
            top: -5px;
            right: -2px;
          }
          .modal-confirm .modal-body {
            color: #999;
          }
          .modal-confirm .modal-footer {
            border: none;
            text-align: center;		
            border-radius: 5px;
            font-size: 13px;
            padding: 10px 15px 25px;
          }
          .modal-confirm .modal-footer a {
            color: #999;
          }		
          .modal-confirm .icon-box {
            width: 80px;
            height: 80px;
            margin: 0 auto;
            border-radius: 50%;
            z-index: 9;
            text-align: center;
            border: 3px solid #f15e5e;
          }
          .modal-confirm .icon-box i {
            color: #f15e5e;
            font-size: 46px;
            display: inline-block;
            margin-top: 13px;
          }
            .modal-confirm .btn {
                color: #fff;
                border-radius: 4px;
            background: #60c7c1;
            text-decoration: none;
            transition: all 0.4s;
                line-height: normal;
            min-width: 120px;
                border: none;
            min-height: 40px;
            border-radius: 3px;
            margin: 0 5px;
            outline: none !important;
            }
          .modal-confirm .btn-info {
                background: #c1c1c1;
            }
            .modal-confirm .btn-info:hover, .modal-confirm .btn-info:focus {
                background: #a8a8a8;
            }
            .modal-confirm .btn-danger {
                background: #f15e5e;
            }
            .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
                background: #ee3535;
            }
          .trigger-btn {
            display: inline-block;
            margin: 100px auto;
          }


</style>
@section('script')



<script>
    


    $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });



</script>
    
@endsection





@section('content')



<div class="container">


    @if (Session::has('flash_admin'))

        <div class="flash_message ">
          <i class="fa fa-check"></i>
           {{Session('flash_admin')}}
        </div>

    @endif
  
      <div class="profile-card js-profile-card">
        <div class="row">
            <div class="col-md-4"> 
                <div class="profile-card__img">
                    <img src="http://localhost/instagram1/public/images/picturesProfile/{{Auth::user()->photoId}}" alt="profile card">
                  </div>
                  <div class="profile-card-ctr">
                                           
                      <button id="buttonFollow"  class="profile-card__button ">
                        <script language="javascript">
                          $(document).ready(function(){
                            if ( !$("#buttonFollow").hasClass("button--orange").toString() && !$("#buttonFollow").hasClass("follow").toString() ) {
                                  var value="follow";
                                  $(".profile-card__button").addClass("button--orange");
                                  $(".profile-card__button").html(value);
                                  localStorage.setItem("value","follow");
                                  localStorage.setItem("class","button--orange");
                                 
           
                            } else
                
                                $(".profile-card__button").html(localStorage.getItem("value"));
                                $(".profile-card__button").addClass(localStorage.getItem('class'));
                                
                            });
                        </script>
                      </button>
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
                        <div class="profile-card-inf__title">{{$count}}</div>
                        <div class="profile-card-inf__txt">Articles</div>
                      </div>
              
                      
                    </div>

                    <div class="profile-card__cnt js-profile-cnt col-md-12">
                        <div class="profile-card__name">{{Auth::user()->name}}</div>
                        <div class="profile-card__txt">Front-end Developer from <strong>{{Auth::user()->country}}</strong></div>
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
            @foreach ($post as $_post)
               
                    <div class="card">

                        <div class="media d-flex align-items-center"><img src="http://localhost/instagram1/public/images/picturesProfile/{{Auth::user()->photoId}}" alt="..." width="65" class="mr-3 pictureUser rounded-circle img-thumbnail shadow-sm">
                          <div class="media-body">
                              <h4 class="m-0">{{Auth::user()->name}}</h4>
                              <p class="font-weight-light text-muted mb-0">Created : {{$_post->created_at->diffForHumans()}}</p>
                          </div>
                        </div>
                        
                        <div class="updatePost">
                         
                          <button  data-href="{{$_post->id}}" data-toggle="modal" data-target="#confirm-delete" style="width:90px;margin:15px" class="btn btn-danger btn-sm">Delete</button>
                      

                          
                        <a href="{{url('post/'.$_post->id.'/edit')}}"><button type="button" style="width:90px;margin:15px" class="btn btn-warning btn-sm">Update</button></a>
                      </div>
                    <img class="card__image" src="http://localhost/instagram1/public/images/posts/{{$_post->fileName}}" alt="wave" />
                    <div class="card-title">
                      <a class="toggle-info btn">
                        <span class="left"></span>
                        <span class="right"></span>
                      </a>
                      <h2>
                          {{$_post->title}}
                          <small>{{$_post->subTitle}}</small>
                      </h2>
                    </div>
                    <div class="card-flap flap1">
                      <div class="card-description">
                        {{$_post->description}}
                      </div>
                      <div class="card-flap flap2">
                        <div class="card-actions">
                        <a href="#" class="btnReadMore">Read more</a>
                        </div>
                      </div>
                    </div>
                  </div>

                 
             @endforeach
                
            {{-- for pagination / for show lots page in one page  --}}
            <br><br><br>
                {{$post->links()}}



                <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                      
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                          </div>
                      
                          <div class="modal-body">
                              <p>You are about to delete one track, this procedure is irreversible.</p>
                              <p>Do you want to proceed?</p>
                              <p class="debug-url"></p>
                          </div>
                          
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                              <a class="btn btn-danger btn-ok">Delete</a>
                          </div>
                      </div>
                  </div>
              </div>
             
            
       </div>


    
    
    
    
    </div>

  </div>  
    
@endsection