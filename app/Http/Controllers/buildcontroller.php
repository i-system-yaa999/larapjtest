<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class buildcontroller extends Controller
{
    public function build($room=null){
        if (!isset($room)){
            $message = ['text' => '建物です'];
        }else {
            $message= ['text'=>'部屋番号は' . $room . 'です'];
        }
        return view('building', $message);
    }
    public function index(){
        return redirect('building');
    }
}