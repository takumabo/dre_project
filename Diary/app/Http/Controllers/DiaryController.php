<?php

namespace App\Http\Controllers;

use App\Diary; // App/Diaryクラスを使用する宣言
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function home ()
    {
        return view('home');
    }

    public function newestate ()
    {
        $diaries = Diary::all();
        // dd($diaries);
        return view('newestate', ['diaries' => $diaries]);
    }

    public function location ()
    {
        return view('location');
    }

    public function price ()
    {
        return view('price');
    }

    public function newpost ()
    {
        return view('newpost');
    }

    public function store(Request $request){

        $imgPath = $this->saveImage($request->file('eimg'));

        $diary = new Diary();
        $diary->ename = $request->ename;
        $diary->eprice = $request->eprice;
        $diary->ewords = $request->ewords;
        $diary->epurl = $request->epurl;
        $diary->eyurl = $request->eyurl;
        $diary->eimg = $imgPath;
        $diary->ekind = $request->ekind;
        $diary->ebuild = $request->ebuild;
        $diary->eplace = $request->eplace;
        $diary->efloor = $request->efloor;
        $diary->eroom = $request->eroom;
        $diary->eshare = $request->eshare;
        $diary->erange = $request->erange;
        $diary->eright = $request->eright;
        $diary->eyield = $request->eyield;
        $diary->econdition = $request->econdition;
        $diary->emanage = $request->emanage;
        $diary->esale = $request->esale;
        $diary->extra = $request->extra;

        $diary->save();
        return redirect()->route('newestate');

    }

    private function saveImage($image)
    {
         // デフォルトではstorage/appに画像が保存されます。
         // 第2引数にpublicをつけることで、storage/app/publicに保存されます。
         // 今回は、/images/profilePictureをつけて、
         // storage/app/public/images/profilePictureに画像が保存されるようにしています。
         // 自分で指定しない場合、ファイル名は自動で設定されます。
       $imgPath = $image->store('newEstate', 'public');

       return 'storage/' . $imgPath;
    }
}
