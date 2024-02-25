<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FrontendController extends Controller
{
    public function chat(){
        $data ['title'] = 'Chat';
        return view('pages.chat.index',$data);
    }
}
