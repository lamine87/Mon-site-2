@extends('page')
@section('content2')
    <div class="tag">
        <div class="container">
            <div class="row">
                @foreach($tags as $tag)
                <a href="{{route('piste_tag',['id'=>$artiste->id])}}" target="_self">
                    <button type="button" class="btn btn-primary"><strong>{{$tag->nom}}</strong></button>
                </a>
                @endforeach
            </div>
            </div>
        </div>
@endsection
