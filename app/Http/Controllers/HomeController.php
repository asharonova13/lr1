<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $links = ["url1"=>"about_us","url2"=>"contact_page"];
        return view('home',compact('links'));
    }
    public function about()
    {
        $tex="    Пробник магазина. Здесь должно быть отличное предложение, но его пока нет :с
    Покупайте нашу продукцию (пожалуйста)";
        $about = ["url"=>"about_us","text"=>$tex];
        return view('about',compact('about'));
    }
    public function contact()
    {
        $contact_us=["fio"=>"Шаронова Анастасия Андреевна","number_phone"=>"8(917)093-65-13"];
        return view('contact',compact('contact_us'));
    }
    public function result(Request $request)
    {
        $phone = $request->input('number_phone');
        $fio = $request->input('fio');
        $links = ["url1"=>"about_us","url2"=>"contact_page"];
        if (empty($phone) || empty($fio)){
            return view('home',compact('links'));
        }
        else{
            return view('home',compact('links','fio','phone'));
        }

    }
}
