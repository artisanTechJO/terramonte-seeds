<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Seed;
use Illuminate\Http\Request;

class CropsController extends Controller
{
    public function getCrops (Request $request){

        $products =  Product::paginate(12);
        return view('User.Crops.index',compact('products'));

    }

    public function getSpecialCrops(){
        $products =  Seed::where('status',2)->paginate(12);
        return view('User.Crops.specialCrops',compact('products'));
    }

    public function getNewCrops(){
        $products =  Seed::where('status',3)->paginate(12);

        return view('User.Crops.newCrops',compact('products'));
    }
}
