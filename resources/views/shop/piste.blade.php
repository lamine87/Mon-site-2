@extends('header')
<!-- piste vidéo-->
<p id="top"> </p>
<div class="container">
    <div class="row">
        <div class="col-md-8" id="piste">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="730" height="400" src="{{route('piste',['id'=>$media->id])}}" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="card-text"><strong>{{$media->Description}}</strong></p>
            </div>
            <div class="form-group">
                <label for="texte">Votre login </label>
                <input id="texte" type="text" class="form-control">
            </div>
            <div class="form-group">

                <label for="textarea">commantaire: </label>
                <textarea id="textarea" class="form-control" rows="15"></textarea>
            </div>
            <button>Envoyer</button>
        </div>
    </div>
</div>
<!--fin de piste vidéo-->
@yield('content')

@extends('footer')
<div class="plus-haut">
    <a href="#top" title="Haut de page" class="scrollup " >
        <img src="{{asset('img/icon/icon_top.png')}}" alt="Monter en haut de page"/>
    </a>
</div>
