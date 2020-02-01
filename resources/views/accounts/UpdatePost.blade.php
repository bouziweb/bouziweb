@extends('layouts.app')

@section('content')

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
    <form action="/instagram1/public/post/{{$post->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        
        <div class="row" style="margin:60px">
          <div class="col-md-3" style="margin-right: 30px; display: inline-table;">

              {{-- <div class="form-group">
                  <label for="file">Movie pic</label><br>
                  <img src="http://localhost/instagram1/public/images/posts/{{$post->fileName}}" id="profile-img-tag" width="295px" alt="">
                  <div class="input-group" style="max-width:296px;overflow: hidden;">
                      <div class="custom-file" style="overflow: hidden;">
                        <input type="file" name="fileName" id="profile-img"  class="custom-file-input" id="inputGroupFile01"
                          aria-describedby="inputGroupFileAddon01" value="{{$post->fileName}}" >
                        <label class="custom-file-label"  name="fileName" for="inputGroupFile01" style="overflow:hidden">{{$post->fileName}}</label>
                      </div>
                    </div>
               </div> --}}

               <div class="form-group">
                  <input type="text" name="user_id" value="{{$post->user_id}}" hidden>
                    <label for="fileName">Movie pic</label><br>
                    <img src="{{ url('images/posts/'.$post->fileName)}}" id="profile-img-tag" width="295px" alt="">
                         
                    <div class="input-group"  style="max-width:295px;overflow: hidden;">
                        <div class="custom-file">
                          <input type="file" name="fileName" vlaue="{{$post->fileName}}"   id="profile-img" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">{{$post->fileName}}</label>
                        </div>
                      </div>
                 </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <label for="title">Title:</label>
            <input type="text" name="title" placeholder="Enter your title" value="{{$post->title}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="sub-title">Sub-Title:</label>
              <input type="text" placeholder="Enter your Sub-title" class="form-control" value="{{$post->subTitle}}" name="subTitle">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="" rows="6" class="form-control">{{$post->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="padding: 10px 30px;margin: 0px 40%; background-color:#3FADD0;">Edit</button>
          </div>
        </div>

      </form>
     

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