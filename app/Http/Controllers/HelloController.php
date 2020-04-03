<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        // $data = [
        //     ['name'=>'山田太郎', 'mail'=>'taro@yamada'],
        //     ['name'=>'田中花子', 'mail'=>'hanako@flower'],
        //     ['name'=>'鈴木幸子', 'mail'=>'saxhico@happy'],
        // ];
        return view("hello.index",['message'=>'Hello!']);
    }
}
