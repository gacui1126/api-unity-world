<?php

namespace App\Http\Controllers;

use App\Events\LoadModel;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function sendLocation(Request $request){
        $location = $request->location;
        broadcast(new LoadModel($location))->toOthers();
        return response()->json([
            'code' => 200,
            'msg' => "success"
        ]);
    }
}
