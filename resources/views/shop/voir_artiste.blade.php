@extends('page2')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8" id="piste">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="730" height="400" src="{{$artiste->media->url_video}}" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="card-text"><strong>{{$artiste->media->description}}</strong></p>
                </div>

            </div>
        </div>
    </div>
@endsection
