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
        $awards = [
            '中原大學畢業專題競賽第三名',
            '全國資訊管理前瞻技術研討會第五名',
            '109學年度第2學期中原大學優良課業守護天使',
            'Microsoft Technology Python證照',
            '110學年度創新產業人才培育專班完課證明',
            '101學科能力競賽(數學科)佳作',
            '101學年度遠哲科學競賽第二名',
            '101學年度數學金頭腦競賽第二名'
        ];
        return view("index", ['jobs'=>$jobs, 'awards'=>$awards]);
    }
}
