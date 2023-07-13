<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $fake = 'bullet point icon Designing an educational platform for gamers from gamers, with particular focus on the content streaming features.';
        $jobs = [
            // [
            //     'date'=>'2022-2023',
            //     'company'=>'自由接案',
            //     'role'=>'Freelancer',
            //     'address'=>'遠端',
            //     'contents'=>[
            //         "在畢業之後利用等當兵的時間自由接案，學習新技術、規劃時間、吸取經驗。",
            //         "與赫成補習班合作幫他們製作前後台官方網站。",
            //         "與臺灣碳材料學會合作幫他們製作前後台官方網站。",
            //         "與中原大學商業設計系學生合作，參與畢制專題，負責Web部分。",
            //         "與金恩公司合作，負責設計與撰寫充電車的API。",
            //         "與朋友合作，製作Web遊戲及後台管理系統。",
            //         "與學弟妹分享JSP知識，並教導使用JSP與資料庫進行溝通製作學校期末專題購物網頁。",
            //     ]
            // ],
            [
                'date'=>'2022-2023',
                'company'=>'輔仁大學學生家教',
                'role'=>'PHP家教',
                'address'=>'遠端',
                'contents'=>[
                    "教導PHP，協助輔仁大學大二學生製作期末專題購物網站。",
                    "協助輔仁大學大二學生順利修過PHP程式課程，並分享程式語言基本知識。",
                ]
            ],
            // [
            //     'date'=>'2022',
            //     'company'=>'一踢科技',
            //     'role'=>'Laravel PHP工程師',
            //     'address'=>'台北市中山區',
            //     'contents'=>[
            //         "負責用Laravel寫出SaaS平台的API。"
            //     ]
            // ],
            [
                'date'=>'2021-2022',
                'company'=>'憶旺智慧股份有限公司',
                'role'=>'網頁工程師',
                'address'=>'新竹縣竹東市',
                'contents'=>[
                    "使用JavaScript、PHP、MySQL撰寫網頁前端及後端開發。",
                    "設計網頁排版包含電腦及手機版。",
                    "參與網頁SEO規劃。",
                    "協助專案經理進行窗口溝通。",
                ]
            ],
            [
                'date'=>'2020-2021',
                'company'=>'中原大學學生Python家教',
                'role'=>'Python家教',
                'address'=>'桃園市中壢區',
                'contents'=>[
                    "一對一教導大四特殊生基礎Python程式設計撰寫且協助修過Python課程。",
                ]
            ],
            [
                'date'=>'2021-2022',
                'company'=>'中原大學',
                'role'=>'學習護照講師、課程助教',
                'address'=>'桃園市中壢區',
                'contents'=>[
                    "課後輔導中原大學學生基礎程式概念。",
                    "擔任網頁前端助教，指導學生HTML、CSS、JavaScript基本程式知識。",
                    "擔任Python課程助教，指導學生Python基本程式知識。",
                    "協助老師課堂上的運作。",
                    "與學弟妹分享JSP知識，並教導使用JSP與資料庫進行溝通製作學校期末專題購物網頁。",
                ]
            ],
            [
                'date'=>'2020-2021',
                'company'=>'李紹陽補習班',
                'role'=>'國中數學輔導老師',
                'address'=>'桃園市桃園區',
                'contents'=>[
                    "因為大學學測數學滿級分以及指考數甲88分(頂標)，因此有對數學有興趣，並一對一輔導國中生數理以及小班制教學。",
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
        $works = [
            [
                'title'=>'赫成教育',
                'image'=>'hecheng.png',
                'url'=>'https://hechengschool.com/',
            ],
            [
                'title'=>'赫成教育後臺管理',
                'image'=>'hecheng.cms.jpg',
                'url'=>'',
            ],
            [
                'title'=>'臺灣碳材料學會',
                'image'=>'carbon.jpg',
                'url'=>'https://carboncst.com/',
            ],
            [
                'title'=>'臺灣碳材料學會後臺管理',
                'image'=>'carbon.cms.jpg',
                'url'=>'',
            ],
            [
                'title'=>'冰芬文教',
                'image'=>'benfen.png',
                'url'=>'https://ice-finland.club/',
            ],
            [
                'title'=>'冰芬文教後臺管理',
                'image'=>'benfen.cms.jpg',
                'url'=>'',
            ],
            [
                'title'=>'房子ROW家俱',
                'image'=>'fzr.jpg',
                'url'=>'https://shop.jiousaio.com',
            ],
            [
                'title'=>'九霄空間設計',
                'image'=>'jiousaio.jpg',
                'url'=>'https://jiousaio.com/',
            ],
            [
                'title'=>'九霄模型',
                'image'=>'jiousaioshop.jpg',
                'url'=>'https://jiousaioshop.com/',
            ],
            [
                'title'=>'ODDCity',
                'image'=>'oddcity.jpg',
                'url'=>'https://10994015.github.io/odd-city/',
            ],
            [
                'title'=>'漫威衛教益智遊戲',
                'image'=>'marvel.jpg',
                'url'=>'https://marvel.jiousaio.com/',
            ],
            [
                'title'=>'漫威衛教抽獎後台',
                'image'=>'marvel.cms.jpg',
                'url'=>'',
            ],
            [
                'title'=>'憶旺智慧',
                'image'=>'evone.jpg',
                'url'=>'https://www.evoneic.com/',
            ],
            [
                'title'=>'論文問卷系統',
                'image'=>'ads.jpg',
                'url'=>'',
            ],
            [
                'title'=>'7.ZIP',
                'image'=>'7zip.jpg',
                'url'=>'https://10994015.github.io/7zip/',
            ],
            [
                'title'=>'益康診所APP',
                'image'=>'tripleE.jpg',
                'url'=>'https://10994015.github.io/tripleE/',
            ],
            [
                'title'=>'飛機遊戲',
                'image'=>'airplane.jpg',
                'url'=>'',
            ],
            [
                'title'=>'補習班試卷系統',
                'image'=>'cycu.jpg',
                'url'=>'',
            ],
        ];
        $colors = [
            '#01FDF6',
            '#FFCB46',
            '#FF81CC',
            '#57EF97',
            '#D661FF',
        ];
        $skills = [
            [
                'skill'=>'Laravel',
                'bar'=>8
            ],
            [
                'skill'=>'Vue.Js',
                'bar'=>7
            ],
            [
                'skill'=>'Livewire',
                'bar'=>8
            ],
            [
                'skill'=>'Alpine.Js',
                'bar'=>6
            ],
            [
                'skill'=>'MySQL',
                'bar'=>8
            ],
            [
                'skill'=>'PHP',
                'bar'=>9
            ],
            [
                'skill'=>'JavaScript',
                'bar'=>9
            ],
            [
                'skill'=>'SCSS',
                'bar'=>9
            ],
            [
                'skill'=>'TailwindCSS',
                'bar'=>7
            ],
            [
                'skill'=>'Bootstrap5',
                'bar'=>8
            ],
           
            [
                'skill'=>'Python',
                'bar'=>7
            ],
            [
                'skill'=>'Git',
                'bar'=>8
            ],
            [
                'skill'=>'Linux',
                'bar'=>6
            ],

            [
                'skill'=>'AWS',
                'bar'=>6
            ],
            [
                'skill'=>'JSP',
                'bar'=>6
            ],
        ];
        return view("index", ['jobs'=>$jobs, 'awards'=>$awards, 'works'=>$works, 'colors'=>$colors, 'skills'=>$skills]);
    }
}
