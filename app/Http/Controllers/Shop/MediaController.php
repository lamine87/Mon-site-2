<?php

namespace App\Http\Controllers\Shop;

use App\Artiste;
use App\Http\Controllers\Controller;
use App\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediaController extends Controller
{
    //
//    public function index()
//    {
//        $artistes = DB::table('artistes')
//            ->orderBy('created_at', 'desc')->paginate(12);
//
//       return view('shop.piste',['artistes'=>$artistes]);

//   // }
////
////    public function piste(Request $request){
////
////        $artistes = Artiste::find($request->id);
////        $media = Media::find($request->id);
////
////        return view('shop.piste', ['artistes'=>$artistes,'media'=>$media]);
////    }
////
////    public function index(){
////        //artiste recommandé
////        $artistes = DB::table('artistes')->orderBy('created_at','desc')->paginate(12);
////
////        return view('shop.piste',['artistes'=>$artistes]);
//    }

}
