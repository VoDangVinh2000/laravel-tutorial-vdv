<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    //
    public function index()
    {
        //lay du lieu ngay 1
        $data_ngay1 = DB::table('posts')->select('created_at')->where(['id' => 6])->get();
        $data_ngay2 =  DB::table('posts')->select('created_at')->where(['id' => 7])->get();
        $ngay1 = date_create($data_ngay1[0]->created_at);
        $ngay2 = date_create($data_ngay2[0]->created_at);
        $diff = date_diff($ngay1,$ngay2);
        $result = $diff->format("%d ngày %h:%i:%s");
        // $posts = DB::table('posts')->inRandomOrder()->get();
        return $result;
    }
}
