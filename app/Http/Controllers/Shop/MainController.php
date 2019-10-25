<?php

namespace App\Http\Controllers\Shop;

use App\Artiste;
use App\Http\Controllers\Controller;
use App\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tag;

class MainController extends Controller
{
    //
    public function index()
    {

        $artistes = DB::table('artistes')
            ->orderBy('created_at', 'desc')->paginate(20);

        $tag = DB::table('tags')
            ->orderBy('created_at', 'desc')->get();

        return view('shop.home', ['artistes' => $artistes, 'tags' => $tag]);

    }

    public function voirArtiste(Request $request) {
        $artiste = Artiste::find($request->id);
//        dd($artiste->media);
        return view('shop.voir_artiste',['artiste'=>$artiste]);

    }


}
