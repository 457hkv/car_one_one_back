<?php

namespace App\Http\Controllers;

use App\Models\CarBrands;
use App\Models\CarBrandSeries;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/*
 * 汽车品牌控制器
 **/
class CarBrandController extends Controller
{
    //获取汽车品牌列表
    public function findAll()
    {
        $carBrands = CarBrands::select([
            "brand_id as id",
            "brand_name as label",
            "pinyin"
        ])->get();

        // if (!$carBrands) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => '汽车品牌不存在'
        //     ], 500);
        // }

        return response()->json($carBrands, 200);
    }

    //获取汽车品牌旗下的系列
    public function findSeries($brand_id)
    {
        $carBrands = CarBrandSeries::where('brand_id', $brand_id)->get();
        if ($carBrands->isEmpty()) {
            return response()->json([
                'status' => 'error',
                'message' => '汽车品牌不存在'
            ], 500);
        }
        return response()->json($carBrands, 200);
    }
}
