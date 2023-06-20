<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $fake = 'bullet point icon Designing an educational platform for gamers from gamers, with particular focus on the content streaming features.';
        $jobs = [
            [
                'date'=>'2022-2023',
                'company'=>'自由接案',
                'role'=>'Freelancer',
                'address'=>'遠端',
                'contents'=>[
                    $fake,
                    $fake,
                    $fake,
                    $fake,
                    $fake,
                ]
            ],
            [
                'date'=>'2022-2023',
                'company'=>'輔仁大學學生家教',
                'role'=>'PHP家教',
                'address'=>'遠端',
                'contents'=>[
                    $fake,
                    $fake,
                ]
            ],
            [
                'date'=>'2022',
                'company'=>'一踢科技',
                'role'=>'Laravel PHP工程師',
                'address'=>'台北市中山區',
                'contents'=>[
                    $fake,
                    $fake,
                ]
            ],
            [
                'date'=>'2021-2022',
                'company'=>'憶旺智慧股份有限公司',
                'role'=>'網頁工程師',
                'address'=>'新竹縣竹東市',
                'contents'=>[
                    $fake,
                    $fake,
                ]
            ],
            [
                'date'=>'2020-2021',
                'company'=>'中原大學學生家教',
                'role'=>'Python家教',
                'address'=>'桃園市中壢區',
                'contents'=>[
                    $fake,
                    $fake,
                ]
            ],
            [
                'date'=>'2021-2022',
                'company'=>'中原大學',
                'role'=>'學習護照講師、課程助教',
                'address'=>'桃園市中壢區',
                'contents'=>[
                    $fake,
                    $fake,
                ]
            ],
            [
                'date'=>'2020-2021',
                'company'=>'李紹陽補習班',
                'role'=>'國中數學輔導老師',
                'address'=>'桃園市桃園區',
                'contents'=>[
                    $fake,
                    $fake,
                ]
            ],
            
        ];
        return view("index", ['jobs'=>$jobs]);
    }
}
