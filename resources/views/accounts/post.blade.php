@extends('layouts.app')

@section('styles')
<style>
   .form-group label{
    font-weight: 100;
    color: #08849ccc;
    font-size: 15px;
    font-family: monospace;
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



      @if ($errors->any())

     
        <ul>
            @foreach ($errors->all() as $error)
             
              <div class="flash_message" style="background-color:#E43537; color:floralwhite;display:flex;height:auto">
                  
                    <li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{$error}}</li>
                </div>
            @endforeach

        </ul>
      
     
          
      @endif


      


  
    <!-------- End vertical navbar --------->
    <div class="col-md-12">
      <form action="/instagram1/public/post" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row" style="margin:60px">
          <div class="col-md-3" style="margin-right: 30px; display: inline-table;">
              <div class="form-group">
                <input type="text" name="user_id" hidden>
                  <label for="fileName">Movie pic</label><br>
                  <img src="{{ url('images/NoPicture.png')}}" id="profile-img-tag" width="295px" alt="">
                  
                  <div class="input-group" style="max-width:295px;overflow: hidden;">
                      <div class="custom-file">
                        <input type="file" name="fileName" for="profile-img-tag" id="profile-img" class="custom-file-input" id="inputGroupFile01"
                          aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label"  for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
               </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" name="title" placeholder="Enter your title" class="form-control">
            </div>
            <div class="form-group">
              <label for="subTitle">Sub-Title:</label>
              <input type="text" placeholder="Enter your Sub-title" class="form-control" name="subTitle">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="article-ckeditor" rows="6" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="padding: 10px 30px;margin: 0px 40%; background-color:#3FADD0;">Publish</button>
          </div>
        </div>
      

      </form>
      {{-- // --------------------Ckeditor for descritpion column ---------------- --}}


  <script src="../vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
      var options = {
          filebrowserImageBrowseUrl: '/instagram1/public/laravel-filemanager?type=Images',
          filebrowserImageUploadUrl: '/instagram1/public/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}',
          filebrowserBrowseUrl: '//instagram1/publiclaravel-filemanager?type=Files',
          filebrowserUploadUrl: '/instagram1/public/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}'
        };
        CKEDITOR.replace( 'article-ckeditor',options );
    </script>
          <br>
     


     


</div>

<script language="javascript">
  $(document).ready(function(){
    function readPath(input) 
    {

      if (input.files && input.files[0])
         {
            var reader = new FileReader();

            reader.onload = function (e) {
               $('#profile-img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
         }
      }

      $('#profile-img').change(function(){
         readPath(this);

         }); 


        });

    
</script>




    

@endsection