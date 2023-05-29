<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    /**
     * 指定ユーザーのプロファイルを表示
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
         $hoge=1;
    if(true){echo "test";}else{echo 'test';}

    // Files changedで差分のある箇所のみ、フォーマットチェックが入る
          $hoge=1;
    if(true) {
        echo "test";}else {
    echo 'test';
    }

        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
