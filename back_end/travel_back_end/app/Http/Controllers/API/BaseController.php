<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function success($data, $message, $code = 200) {
        $result = [
            'data'=> $data,
            'success'=> true,
            'message'=> $message,
            'code'=> $code
        ];

        return response()->json($result, $code);
    }

    public function error($error, $messsage, $code=500) {
        $error = [
            'errors'=>$error,
            'success'=>false,
            'code'=> $code
        ];
        return response()->json($error, $code);
    }
}
