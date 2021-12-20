<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class buildcontroller extends Controller
{
    
    public function build1(){
        $message = ['text' => '建物です'];
        return view('building', $message);
    }
    public function build2($room){
        // if (!isset($room)){
        //     $message = ['text' => '建物です'];
        //     return view('building', $message);
        // }else {
            $message= ['text'=>'部屋番号は' . $room . 'です'];
            return view('building', $message);
        // }
    }
}
