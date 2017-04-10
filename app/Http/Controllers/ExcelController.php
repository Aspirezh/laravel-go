<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Excel;

class ExcelController extends Controller
{
    //Excel文件导出功能 By Laravel学院
    public function export(){
        $cellData = [
            ['公司','手机','地址'],
            ['大王','111','你'],
            ['巡山','222','要'],
            ['吃土','333','上'],
            ['上天','444','天'],
            ['发神经','555','吗'],
        ];
        $a = iconv('UTF-8','GBK','客户信息');
        Excel::create($a,function($excel) use ($cellData){
            $excel->sheet('score', function($sheet) use ($cellData){
                $sheet->rows($cellData);
            });
        })->store('xls')->export('xls');
    }
    public function import(){
        $filePath = 'storage/exports/'.iconv('UTF-8', 'GBK', '客户信息').'.xls';
        Excel::load($filePath, function($reader) {
            $data = $reader->all();
            dd($data);
        });
    }

}
