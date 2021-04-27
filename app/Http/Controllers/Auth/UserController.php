<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
   //indexメソッド
	public function index(Request $request)
	{
        //メソッドの引数でオブジェクトのインスタンス化→メソッドインジェクション
        //DB処理:usersテーブルから全データを取得する
        //eroquantシステムでusersテーブルオブジェクトuserを使用する。
        $query= \App\User::all();
        // dd($query);
        return $query;
    }
}
