<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $fake = 'bullet point icon Designing an educational platform for gamers from gamers, with particular focus on the content streaming features.';
        $jobs = [
            [
                'date'=>'2023-至今',
                'company'=>'永佳捷科技股份有限公司',
                'role'=>'資訊工程師',
                'address'=>'桃園市觀音區',
                'contents'=>[
                    "<h2>1.負責全公司PC、資訊主機、網路維運，資料庫之規劃、設計、運維、優化與資訊安全，以確保系統之正常運作。</h2>",
                    "<h2>2.負責各部門程式、公用程式與平臺開發之撰寫、測試，以符合設計規範與委託部門的需求，並確保系統開發的進度與品質。</h2>",
                    "<h2>3.負責IT公用程式/平臺開發，諮詢專案的規劃和實施工作安排。</h2>",
                ],
            ],
            [
                'date'=>'2022-2023',
                'company'=>'自由接案',
                'role'=>'Freelancer',
                'address'=>'桃園市桃園區',
                'contents'=>[
                    "<h2>1.與赫成補習班合作幫他們製作前後台官方網站:</h2>",
                    "<li>前台使用Livewire+Alpine.js 進行架設，包含切版及頁面設計</li>",
                    "<li>後台使用Vue.js+Laravel RESTful API 進行撰寫包含CRUD</li>",
                    "<li>伺服器架設在Hostinger</li>",
                    "<li>幫忙追蹤成效，除了Google Ads架設廣告外也幫忙建立資料至後台</li>",
                    "<h2>2.與臺灣碳材料學會合作幫他們製作前後台官方網站:</h2>",
                    "<li>前台使用Livewire+Alpine.js 進行架設，包含切版及頁面設計</li>",
                    "<li>後台使用Vue.js+Laravel RESTful API 進行撰寫包含CRUD</li>",
                    "<li>伺服器架設在Hostinger</li>",
                    "<h2>3.與中原大學商業設計系學生合作，參與畢製專題，負責Web部分:</h2>",
                    "<li>使用Canvas製作網頁NPC遊戲</li>",
                    "<li>參與遊戲角色的設計</li>",
                    "<h2>4.與金恩公司合作，負責設計與撰寫充電車的API:</h2>",
                    "<li>使用Laravel撰寫API將上游資料彙整處理至下游</li>",
                    "<li>使用Scribe撰寫API文件</li>",
                    "<li>將API架設於AWS EC2伺服器上，串接至IIS MySQL資料庫</li>",
                    "<h2>5..與朋友合作，製作Web遊戲及後台管理系統:</h2>",
                    "<li>用Livewire製作出網頁遊戲及遊戲後台</li>",
                    "<li>將程式部署至AWS EC2、資料庫使用RDS(MySQL)並用Docker架設PHPMyAdmin服務</li>",
                ]
            ],
            [
                'date'=>'2022-2023',
                'company'=>'輔仁大學學生家教',
                'role'=>'PHP家教',
                'address'=>'遠端',
                'contents'=>[
                    "<h2>1.教導PHP，協助輔仁大學大二學生製作期末專題購物網站，包含HTML、CSS、PHP、MySQL以及簡易的購物車。</h2>",
                    "<h2>2.協助輔仁大學大二學生順利修過PHP程式課程，幫助解決問題，並分享自身經驗。</h2>",
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
                'role'=>'前端工程師',
                'address'=>'新竹縣竹東市',
                'contents'=>[
                    "<h2>1.使用HTML、CSS進行UI切版，JavaScript、Vue.js、PHP(Laravel)、MySQL撰寫網頁前端及後台架設</h2>",
                    "<h2>2.協助將PHP導入公司</h2>",
                    "<h2>3.使用AWS EC2、RDS架設API伺服器與資料庫，並架設SSL服務</h2>",
                    "<h2>4.使用Hostinger架設伺服器部署網站前後台</h2>",
                    "<h2>5.使用Scribe撰寫API文件</h2>",
                    "<h2>6.設計網頁排版</h2>",
                    "<h2>7.協助行銷人員SEO規劃</h2>",
                    "<h2>8.協助專案經理進行窗口溝通</h2>",
                ]
            ],
            [
                'date'=>'2021-2022',
                'company'=>'中原大學',
                'role'=>'學習護照講師、課程助教、課程輔導',
                'address'=>'桃園市中壢區',
                'contents'=>[
                    "<h2>1.Python課程程式助教，指導學生課堂Python程式。</h2>",
                    "<h2>2.前端網頁課程助教，指導中原大學學生HTML、CSS、JavaScript基本程式。</h2>",
                    "<h2>3.協助老師課堂上的運作。</h2>",
                    "<h2>4.課後輔導中原大學學生基礎程式概念，包含PHP、RWD、Python、SCSS等。</h2>",
                    "<h2>5.一對一教導大四特殊生基礎Python程式設計撰寫且協助修過Python課程。</h2>",
                    "<h2>1.Python課程程式助教，指導學生課堂Python程式。</h2>",
                    "<h2>6.與學弟妹分享JSP知識，並教導使用JSP與資料庫進行溝通製作學校期末專題購物網頁。</h2>",
                ]
            ],
            [
                'date'=>'2020-2021',
                'company'=>'李紹陽補習班',
                'role'=>'國中數學輔導老師',
                'address'=>'桃園市桃園區',
                'contents'=>[
                    "<p>因高中數學學測滿級分以及指考數甲88分，因此對數學指導感到有熱忱</p>",
                    "<h2>1.一對一輔導國中生數理科目</h2>",
                    "<h2>2.小班制國小數學教學經驗(約20人左右)</h2>",
                    "<h2>3.大班制國小導師助理(100人以上)</h2>"
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
        $public = [
            [
                'title'=>'九霄空間設計',
                'image'=>'jiousaio.jpg',
                'url'=>'https://jiousaio.com/',
            ],
            [
                'title'=>'赫成教育',
                'image'=>'hecheng.png',
                'url'=>'https://hechengschool.com/',
            ],
            [
                'title'=>'臺灣碳材料學會',
                'image'=>'carbon.jpg',
                'url'=>'https://carboncst.com/',
            ],
            [
                'title'=>'冰芬文教',
                'image'=>'benfen.png',
                'url'=>'https://ice-finland.club/',
            ],
            [
                'title'=>'房子ROW家俱',
                'image'=>'fzr.jpg',
                'url'=>'http://3.1.217.108/',
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
                'title'=>'中原大學衛保組衛教小遊戲',
                'image'=>'marvel.jpg',
                'url'=>'https://marvel.jiousaio.com/',
            ],
            [
                'title'=>'憶旺智慧',
                'image'=>'evone.jpg',
                'url'=>'https://www.evoneic.com/',
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
        ];
        $private = [
            [
                'title'=>'赫成教育後臺管理',
                'image'=>'hecheng.cms.jpg',
                'url'=>'',
            ],
            [
                'title'=>'臺灣碳材料學會後臺管理',
                'image'=>'carbon.cms.jpg',
                'url'=>'',
            ],
            [
                'title'=>'冰芬文教後臺管理',
                'image'=>'benfen.cms.jpg',
                'url'=>'',
            ],
            [
                'title'=>'漫威衛教抽獎後台',
                'image'=>'marvel.cms.jpg',
                'url'=>'',
            ],
            [
                'title'=>'補習班試卷系統',
                'image'=>'cycu.jpg',
                'url'=>'',
            ],
            [
                'title'=>'飛機遊戲',
                'image'=>'airplane.jpg',
                'url'=>'',
            ],
            [
                'title'=>'論文問卷系統',
                'image'=>'ads.jpg',
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
                'skill'=>'Livewire',
                'bar'=>8
            ],
            [
                'skill'=>'Vue.Js',
                'bar'=>7
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
        return view("index", ['jobs'=>$jobs, 'awards'=>$awards, 'public'=>$public, 'private'=>$private, 'colors'=>$colors, 'skills'=>$skills]);
    }
}
