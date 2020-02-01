@extends('layouts.app')

@section('script')
   <script language="javascript">
      $(document).ready(function(){
            function readURL(input) 
            {
              if (input.files && input.files[0]) 
              {
                  var reader = new FileReader();
                  reader.onload = function(e) 
                  {
                      $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                      $('#imagePreview').hide();
                      $('#imagePreview').fadeIn(650);
                  }
                  reader.readAsDataURL(input.files[0]);
              }   
            }

            $("#photoId").change(function() {
                readURL(this);
            });

            {{-- ------------------------Script For flash_message -------------------------------- --}}
        
                
                    $('.flash_message').fadeIn('slow');
                    setTimeout(function(){
                        $('.flash_message').fadeOut('slow')
        
                    },3000)
        
              


       
      });  
      
   </script>
    
@endsection
@section('styles')
<style>


      /*------------------------ style for upload image ----------------*/


      .avatar-upload {
      position: relative;
      max-width: 205px;
    
    }
    .avatar-upload .avatar-edit {
      position: absolute;
      right: 12px;
      z-index: 1;
      top: 10px;
    }
    .avatar-upload .avatar-edit input {
      display: none;
    }
    .avatar-upload .avatar-edit input + label {
      display: inline-block;
      width: 34px;
      height: 34px;
      margin-bottom: 0;
      border-radius: 100%;
      background: #FFFFFF;
      border: 1px solid transparent;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
      cursor: pointer;
      font-weight: normal;
      transition: all 0.2s ease-in-out;
    }
    .avatar-upload .avatar-edit input + label:hover {
      background: #f1f1f1;
      border-color: #d6d6d6;
    }
    .avatar-upload .avatar-edit input + label:after {
      content: "\f040";
      font-family: 'FontAwesome';
      color: #757575;
      position: absolute;
      top: 10px;
      left: 0;
      right: 0;
      text-align: center;
      margin: auto;
    }
    .avatar-upload .avatar-preview {
      width: 192px;
      height: 192px;
      position: relative;
      border-radius: 100%;
      border: 6px solid #F8F8F8;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }
    .avatar-upload .avatar-preview > div {
      width: 100%;
      height: 100%;
      border-radius: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
        



  /*------------------------ End style for upload image ----------------*/

      .transition, form button, form .question label, form .question input[type="text"] {
      -moz-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
      -o-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
      -webkit-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
      transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
      }


     .updateForm form {
      position: absolute;
      display: inline-block;
      max-width: 900px;
      min-width: 700px;
      box-sizing: border-box;
      padding: 30px 25px;
      background-color: white;
      border-radius: 40px;
      left: 50%;
      -moz-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
      -webkit-transform: translate(-50%, 0);
      transform: translate(-50%, 0);
      }
      form h1 {
      color: #ff4a56;
      font-weight: 100;
      letter-spacing: 0.01em;
      margin-left: 15px;
      margin-bottom: 35px;
      text-transform: uppercase;
      }
       form button .profile-card__button {
      margin: 35px 140px;
      background-color: white;
      border: 1px solid #ff4a56;
      line-height: 0;
      font-size: 17px;
      display: inline-block;
      box-sizing: border-box;
      padding: 20px 60px;
      border-radius: 60px;
      color: #ff4a56;
      font-weight: 100;
      letter-spacing: 0.01em;
      position: relative;
      z-index: 1;
      }
      form button:hover, form button:focus {
      color: white;
      background-color: #ff4a56;
      }
      form .question {
      position: relative;
      padding: 10px 0;
      }
      form .question:first-of-type {
      padding-top: 0;
      }
      form .question:last-of-type {
      padding-bottom: 0;
      }
      form .question label {
      transform-origin: left center;
      color: #36B1BF;
      font-weight: 100;
      letter-spacing: 0.01em;
      font-size: 17px;
      box-sizing: border-box;
      padding: 10px 15px;
      display: block;
      position: absolute;
      margin-top: -40px;
      z-index: 2;
      pointer-events: none;
      }
      form .question input[type="text"], input[type="password"] {
      appearance: none;
      background-color: none;
      border: 1px solid #6CA6D9;
      line-height: 0;
      font-size: 17px;
      width: 100%;
      display: block;
      box-sizing: border-box;
      padding: 10px 60px;
      border-radius: 60px;
      color: #6CA6D9;
      font-weight: 100;
      letter-spacing: 0.01em;
      position: relative;
      z-index: 1;
      }
      form .question input[type="text"]:focus, form .question input[type="password"]:focus  {
      outline: none;
      background: #5CCEED;
      color: white;
      margin-top: 30px;
      }
      form .question input[type="text"]:valid, form .question input[type="password"]:valid {
      margin-top: 30px;
      }
      form .question input[type="text"]:focus ~ label, form .question input[type="password"]:focus ~ label {
      -moz-transform: translate(0, -35px);
      -ms-transform: translate(0, -35px);
      -webkit-transform: translate(0, -35px);
      transform: translate(0, -35px);
      }
      form .question input[type="text"]:valid ~ label, form .question input[type="password"]:valid ~ label {
      text-transform: uppercase;
      font-style: italic;
      -moz-transform: translate(5px, -35px) scale(0.6);
      -ms-transform: translate(5px, -35px) scale(0.6);
      -webkit-transform: translate(5px, -35px) scale(0.6);
      transform: translate(5px, -35px) scale(0.6);
      }





</style>

@endsection
@section('content')

@if (Session::has('flash_admin'))

    <div class="flash_message ">
      <i class="fa fa-check"></i>
      {{Session('flash_admin')}}
    </div>

@endif
<div class="updateForm">
<form class="text-center" method="POST" action="/instagram1/public/user/{{Auth::user()->id}}" enctype="multipart/form-data" >
  
  {{ csrf_field() }}
  @method('PATCH')
 
         <div class=" js-profile-card">
               <div class="row">
                   <div class="col-md-4"> 
                    <div class="form-group">
                        <div class="avatar-upload">
                          <div class="avatar-edit">
                          <input class="form-control" type='file' value="{{Auth::user()->photoId}}" id="photoId"  name="photoId"/>
                              <label for="photoId"></label>
                          </div>
                          <div class="avatar-preview">
                              <div id="imagePreview"  style="background-image: url(http://localhost/instagram1/public/images/picturesProfile/{{Auth::user()->photoId}});">
                              </div>
                          </div>
                      </div>
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
                           <div class="profile-card__txt">Front-end Developer from <strong> {{Auth::user()->country}}</strong></div>
                               <div class="profile-card-loc">
                                 <span class="profile-card-loc__icon">
                                   <svg class="icon"><use xlink:href="#icon-location"></use></svg>
                                 </span>
                               </div>
                               
                             </div>
                         
                   
                       </div>
               
             </div>
              <div class="form-group">
              <div class="question">
              <input class="form-control" type="text" value="{{Auth::user()->name}}" name="name"  required/>
              <label>Name</label>
              </div>
            </div>

            <div class="form-group">
            <div class="question">
            <input class="form-control" type="text" value="{{Auth::user()->email}}" name="email"  required/>
            <label>Email</label>
            </div>
          </div>

            <div class="form-group">
            <div class="question">
                <input type="text" class="form-control" value="{{Auth::user()->country}}" name="country"/>
                <label>Country</label>
                </div>
              </div>  

                <div class="form-group">
            <div class="question">
            <input class="form-control" placeholder="********" type="password" name="password"/>
            <label>Password</label>
            </div>
            
          </div>
            <div class="form-group">
            <button type="submit"  class="profile-card__button button--orange">Update</button>
          </div>
        </div>
           
   </form>
  </div> 
    
@endsection