@extends('layouts.app')
<style>

</style>

@section('content')

<div class="col-md-10" style="margin:40px 20px 0px 40px">
        <div style="margin-left:40px" class="media d-flex  align-items-center">
            
            <img src="http://localhost/instagram1/public/images/picturesProfile/{{$post->user->photoId}}" onclick="window.location='{{url('userAccount/'.$post->user->id)}}';" alt="Click for see the profile"  width="65" class="mr-3 pictureUser rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0" onclick="window.location='{{url('userAccount/'.$post->user->id)}}';">{{$post->user->name}}</h4>
                <p class="font-weight-light text-muted mb-0">Created : {{$post->created_at->diffForHumans()}}</p>
            </div>
          </div>
          <br>
          <article class="text-center">
                <h1 style="margin:30px;font-size: 51px;
                font-family: medium-content-serif-font, Georgia, Cambria"> {{$post->title}} </h1>
                <h5 style="margin:20px;
                font-weight: 500;
                font-size: 1.5rem;
                vertical-align: middle;
            }">{{$post->subTitle}}</h5>
        
                <img src="http://localhost/instagram1/public/images/posts/{{$post->fileName}}" style="max-width:700px;max-height:700px" class="img-fluid img-thumbnail rounded mx-auto d-block" alt="...">
                <br>
                <div  style="col-md-6 col-centered" >
                    
                            <p style="text-align:justify;display: inline-block;
                            float: none;
                            text-align: left;
                            margin-right: -4px;
                            text-align: center;
                            max-width: 700px;
                            line-height: 1.58;
                            font-size: 21px;
                            font-family: medium-content-serif-font, Georgia, Cambria">
                    
                                {!!html_entity_decode($post->description)!!}
                            </p>

                </div>
        
          </article>
          <br><br><br>
          


</div>

        
    


  
   

    
@endsection