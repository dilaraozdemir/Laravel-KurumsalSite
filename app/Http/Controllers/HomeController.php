<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Content;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Seting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    //

    public static function categorylist(){
        return Menu::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getseting()
    {
        return Seting::first();
    }
    public function countreview($id)
    {
        return Review::where('content_id',$id)->count();
    }
    public function avrgreview($id)
    {
        return Review::where('content_id',$id)->average('rate');
    }




    public function contentlist($search)
    {
        $datalist = Content::where('title','like','%'.$search.'%')->get();

        return view('home.search_contents',['search'=>$search, 'datalist'=>$datalist] );
    }


    public function getcontent(Request $request)
    {
        $search = $request->input('search');
        $count = Content::where('title','like','%'.$search.'%')->get()->count();
        if ($count == 1)
        {
            $data = Content::where('title','like','%'.$search.'%')->first();
            return redirect()->route('icerik',['id'=>$data->id]);
        }
        else
        {
            return redirect()->route('contentlist',['search'=>$search]);
        }

    }


    public function icerik($id)
    {
        $data = Content::find($id);
        $datalist = Image::where('content_id',$id)->get();
        $reviews = \App\Models\Review::where('content_id',$id)->get();
        return view('home.icerik',['data'=>$data,'datalist'=>$datalist, 'reviews'=> $reviews]);
    }

    public function index()
    {
        $seting = Seting::first();
        $slider = Content::Select('id','title','image','description')->limit(4)->get();
        $haber = Content::select('id','title','image','description')->inRandomOrder()->where('type', '=', 'Haber')->get();;
        $duyuru = Content::select('id','title','image','description')->inRandomOrder()->where('type', '=', 'Duyuru')->get();;
        $etkinlik = Content::select('id','title','image','description')->limit(3)->inRandomOrder()->where('type', '=', 'Etkinlik')->get();;
        $last = Content::select('id','title','image','description')->limit(3)->inRandomOrder()->get();

        $slider1 = Content::where('id', 11)->select('id','title','image','description')->first();
        $slider2 = Content::where('id', 7)->select('id','title','image','description')->first();
        $slider3 = Content::where('id', 5)->select('id','title','image','description')->first();
        $slider4 = Content::where('id', 6)->select('id','title','image','description')->first();
        $slider5 = Content::where('id', 4)->select('id','title','image','description')->first();
        //print_r($daily);
        //exit();

        $data = [
            'seting'=>$seting,
            'slider'=>$slider,
            'slider1'=>$slider1,
            'slider2'=>$slider2,
            'slider3'=>$slider3,
            'slider4'=>$slider4,
            'slider5'=>$slider5,
            'haber'=>$haber,
            'duyuru'=>$duyuru,
            'etkinlik'=>$etkinlik,
            'last'=>$last,
            'page'=>'home'

        ];


        return view('home.index',$data);
    }


    public function categoryproduct($id)
    {
        $datalist = Content::where('menu_id',$id)->get();
        $data = Menu::find($id);
        //print_r($data);
        //();
        return view('home.category_products',['data'=>$data,'datalist'=>$datalist]);
    }

    public function aboutus()
    {
        $seting = Seting::first();
        return view('home.about',['seting'=>$seting]);
    }
    public function references()
    {
        $seting = Seting::first();
        return view('home.references',['seting'=>$seting]);
    }
    public function academic()
    {
        $seting = Seting::first();
        return view('home.academic',['seting'=>$seting]);
    }
    public function contact()
    {
        $seting = Seting::first();
        return view('home.contact',['seting'=>$seting]);
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('home_contact')->with('success','Your message saved, thank you.');
    }
    public function research()
    {
        $seting = Seting::first();
        return view('home.research',['seting'=>$seting]);
    }
    public function faq()
    {
        $seting = Seting::first();
        return view('home.faq',['seting'=>$seting]);
    }

    public function login()
    {
        return view('admin.login');
    }


    public function logincheck(Request $request)
    {
        if( $request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)){
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
