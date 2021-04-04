<?php
/**
 * Created by PhpStorm.
 * User: spf_r
 * Date: 2021/4/4
 * Time: 22:26
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(Request $request)
    {

        $product = Product::with('company')->find($request->get('id'));
//        dd($product);
        return response()->json($product);
    }
}