

<div class="wrapper" x-data="{menuOpen: false,}">
    <div x-bind:class="['menubar', menuOpen ? 'close' : '']"  x-on:click="menuOpen = !menuOpen;">
        <div x-bind:class="['line1', menuOpen ? 'close' : '']"></div>
        <div x-bind:class="['line2', menuOpen ? 'close' : '']"></div>
        <div x-bind:class="['line3', menuOpen ? 'close' : '']"></div>
    </div>
    <div x-bind:class="['md-navigation', menuOpen ? 'open' : '']">
        <a href="#experience" x-on:click="menuOpen = false">經歷</a>
        <a href="#paper" x-on:click="menuOpen = false">論文</a>
        <a href="#awards" x-on:click="menuOpen = false">獎項</a>
        <a href="#works" x-on:click="menuOpen = false">作品</a>
        <a href="#contacts" x-on:click="menuOpen = false">與我聯繫</a>
        <div class="icons">
              <a href="https://www.instagram.com/14___2/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg>
              </a>
              <a href="https://line.me/ti/p/jm4Sa6RLqK">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-line" viewBox="0 0 16 16">
                    <path d="M8 0c4.411 0 8 2.912 8 6.492 0 1.433-.555 2.723-1.715 3.994-1.678 1.932-5.431 4.285-6.285 4.645-.83.35-.734-.197-.696-.413l.003-.018.114-.685c.027-.204.055-.521-.026-.723-.09-.223-.444-.339-.704-.395C2.846 12.39 0 9.701 0 6.492 0 2.912 3.59 0 8 0ZM5.022 7.686H3.497V4.918a.156.156 0 0 0-.155-.156H2.78a.156.156 0 0 0-.156.156v3.486c0 .041.017.08.044.107v.001l.002.002.002.002a.154.154 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157Zm.791-2.924a.156.156 0 0 0-.156.156v3.486c0 .086.07.155.156.155h.562c.086 0 .155-.07.155-.155V4.918a.156.156 0 0 0-.155-.156h-.562Zm3.863 0a.156.156 0 0 0-.156.156v2.07L7.923 4.832a.17.17 0 0 0-.013-.015v-.001a.139.139 0 0 0-.01-.01l-.003-.003a.092.092 0 0 0-.011-.009h-.001L7.88 4.79l-.003-.002a.029.029 0 0 0-.005-.003l-.008-.005h-.002l-.003-.002-.01-.004-.004-.002a.093.093 0 0 0-.01-.003h-.002l-.003-.001-.009-.002h-.006l-.003-.001h-.004l-.002-.001h-.574a.156.156 0 0 0-.156.155v3.486c0 .086.07.155.156.155h.56c.087 0 .157-.07.157-.155v-2.07l1.6 2.16a.154.154 0 0 0 .039.038l.001.001.01.006.004.002a.066.066 0 0 0 .008.004l.007.003.005.002a.168.168 0 0 0 .01.003h.003a.155.155 0 0 0 .04.006h.56c.087 0 .157-.07.157-.155V4.918a.156.156 0 0 0-.156-.156h-.561Zm3.815.717v-.56a.156.156 0 0 0-.155-.157h-2.242a.155.155 0 0 0-.108.044h-.001l-.001.002-.002.003a.155.155 0 0 0-.044.107v3.486c0 .041.017.08.044.107l.002.003.002.002a.155.155 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156Z"/>
                  </svg>
              </a>
              <a href="https://github.com/10994015">
                 <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                 </svg>
              </a>
        </div>
    </div>
    <header>
        <div class="navigation">
            <a href="#experience">經歷</a>
            <a href="#paper">論文</a>
            <a href="#awards">獎項</a>
            <a href="#works">作品</a>
            <a href="#contacts">與我聯繫</a>
        </div>
        <div class="icon">
            <a href="https://www.instagram.com/14___2/">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
            </a>
            <a href="https://line.me/ti/p/jm4Sa6RLqK">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-line" viewBox="0 0 16 16">
                  <path d="M8 0c4.411 0 8 2.912 8 6.492 0 1.433-.555 2.723-1.715 3.994-1.678 1.932-5.431 4.285-6.285 4.645-.83.35-.734-.197-.696-.413l.003-.018.114-.685c.027-.204.055-.521-.026-.723-.09-.223-.444-.339-.704-.395C2.846 12.39 0 9.701 0 6.492 0 2.912 3.59 0 8 0ZM5.022 7.686H3.497V4.918a.156.156 0 0 0-.155-.156H2.78a.156.156 0 0 0-.156.156v3.486c0 .041.017.08.044.107v.001l.002.002.002.002a.154.154 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157Zm.791-2.924a.156.156 0 0 0-.156.156v3.486c0 .086.07.155.156.155h.562c.086 0 .155-.07.155-.155V4.918a.156.156 0 0 0-.155-.156h-.562Zm3.863 0a.156.156 0 0 0-.156.156v2.07L7.923 4.832a.17.17 0 0 0-.013-.015v-.001a.139.139 0 0 0-.01-.01l-.003-.003a.092.092 0 0 0-.011-.009h-.001L7.88 4.79l-.003-.002a.029.029 0 0 0-.005-.003l-.008-.005h-.002l-.003-.002-.01-.004-.004-.002a.093.093 0 0 0-.01-.003h-.002l-.003-.001-.009-.002h-.006l-.003-.001h-.004l-.002-.001h-.574a.156.156 0 0 0-.156.155v3.486c0 .086.07.155.156.155h.56c.087 0 .157-.07.157-.155v-2.07l1.6 2.16a.154.154 0 0 0 .039.038l.001.001.01.006.004.002a.066.066 0 0 0 .008.004l.007.003.005.002a.168.168 0 0 0 .01.003h.003a.155.155 0 0 0 .04.006h.56c.087 0 .157-.07.157-.155V4.918a.156.156 0 0 0-.156-.156h-.561Zm3.815.717v-.56a.156.156 0 0 0-.155-.157h-2.242a.155.155 0 0 0-.108.044h-.001l-.001.002-.002.003a.155.155 0 0 0-.044.107v3.486c0 .041.017.08.044.107l.002.003.002.002a.155.155 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156Z"/>
                </svg>
            </a>
            <a href="https://github.com/10994015">
               <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
               </svg>
            </a>
        </div>
    </header>
    <div class="water-container">
        <div class="waters" id="waters">
            <img src="/images/waters/6.png" class="water" />
        </div>
    </div>
    <div class="banner">
       <div class="content">
            <div class="left" id="moveright">HELLO </div>
            <div class="right" id="moveleft">I'M LI CHENG-YAN</div>
       </div>
    </div>
    <div class="experience" id="experience">
        <div class="marquee">
            <h2 class="full">EXPERIENCE</h2>
            <h2 class=storke>EXPERIENCE</h2>
            <h2 class="full">EXPERIENCE</h2>
            <h2 class=storke>EXPERIENCE</h2>
        </div>
        <div class="content">
            <div class="personal">
                <div class="image" >
                    {{-- <div class="border"></div> --}}
                    {{-- <img src="/images/head.png" /> --}}
                    <canvas id="me" ></canvas>
                </div>
                <div class="balloon-tip">
                    <img src="/images/balloon_tip.svg" alt="">
                </div>
                <div class="paragraph">
                    <i>"I'm the man who'll become the pirate king!"</i>
                    <p>來自中原大學碩士，從大二開始學習基本網頁開發，由基礎JSP開始學習，直到現在主要使用PHP以及JavaScript來進行開發。碩士論文對GAN(生成對抗網路)與室內設計的結合進行研究，熱愛嘗試新的事物，將所有人當成學習的對象。<br><br>
                    勇於嘗試、不怕困難，遇見困難我勇於承擔。<br>
                    善於溝通、團隊合作，在學期間時常擔任團隊協調者。<br>
                    夢想投入資訊領域，共同創造美好新時代。
                    </p>
                    <div class="basic">
                        <h3>姓名:</h3>
                        <span>李承諺(Li Cheng-Yan)</span>
                    </div>
                    <div class="basic">
                        <h3>電子郵件:</h3>
                        <span>cy9577@gmail.com</span>
                    </div>
                    <div class="basic">
                        <h3>聯絡電話:</h3>
                        <span>0938-599-191</span>
                    </div>
                </div>
            </div>
            <div class="accordions" id="accordions">
                @foreach($jobs as $key=>$job)
                <div x-bind:class="['accordions-list']" 
                x-data="{
                    isOpen: false,
                }">
                
                    <div class="job"  >
                        <div class="data">
                            <div class="date">{{$job['date']}}</div>
                            <div class="cmopany-name">{{$job['company']}}</div>
                            <div class="role">{{$job['role']}}</div>
                            <div class="address">{{$job['address']}}</div>
                        </div>
                        <img src="/images/plus.svg" x-bind:class="['plus', isOpen ? 'rotate' : '']" x-on:click="isOpen = !isOpen">
                    </div>
                    <div class="accordion-content" x-ref='content' x-bind:style="{height:isOpen ? ($refs.content.scrollHeight)+'px' : 0 + 'px'}">
                        @foreach($job['contents'] as $content)
                        <div class="list">
                            <img src="/images/dot.svg" alt="">
                            <span>{{$content}}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="paper" id="paper">
        <div class="paper-container">
            <div class="paper-cover">
                <div class="left">
                    <div class="paper-img">
                        <img src="/images/paper.png" />
                    </div>
                </div>
                <div class="right">
                    <h2>碩士學位論文</h2>
                    <h3>以生成對抗網路為基礎將室內設計三維模型轉換之研究</h3>
                    <p>摘要:室內設計產業在現今來說是不可或缺的一塊產業許多時候客戶在裝潢住宅前會想預先看到自己房子內的真實樣貌此時室內設計業就會提供擬真圖提供給客戶作為參考，擬真圖是利用建模軟體所繪製出來的。而建模的步驟為先設計出一個平面，接著拉高成為一個素模，再將素模繪製出有材質、有顏色、有燈光的3D模型，最後再利用渲染軟體將3D模型渲染為3D擬真圖。但從素模到3D擬真圖的繪製過程中會花費大量的時間以及視覺化思考。隨著時間的發展，人工智慧的技術也已經非常成熟，若擬真圖的設計可以利用人工智慧來製作將會省下許多時間以及視覺化思考等技術需求。本論文中使用生成對抗網路為基礎來學習室內設計的建模，將素模直接轉換為3D擬真圖我們先利用SketchUp製圖蒐集大量的室內圖片並使用Pix2pix以及CycleGAN對圖片進行訓練，視情況調整不同的訓練次數，從中分析出最佳結果接著與VRay渲染出來的圖片進行比較。實驗結果顯示，Pix2pix對於素模與擬真圖的轉換有較不錯的表現，相比之下CycleGAN並不適合對素模與擬真圖進行轉換。最後生成出來的最佳結果與VRay渲染出來的擬真圖進行比較後能夠發現，生成對抗網路模型產生的圖片的確能自動設計好房間，生成速度也非常快，整體的架構也非常清楚，但相比之下利用VRay渲染出來的圖片，生成對抗網路產生的圖片細節並沒有那麼明顯。
                    </p>
                    <div class="paper-button-container">
                        <a href="javascript:;">電子全文</a>
                    </div>
                </div>
            </div>
            <div class="paper-page2"></div>
            <div class="paper-page3"></div>
        </div>
    </div>
    <div class="awards" id="awards">
        <canvas id="falling"></canvas>
        <div class="awards-container">
            <div class="title" id="award-title">
                <img src="/images/award.png" width="150">
                <h2>獎項經歷</h2>
            </div>
            <div class="awards-list">
                @foreach($awards as $key=>$award)
                <div class="item" >
                    <div>{{$award}}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="works" id="works">
        <div class="work-marquee">
            @for($i=0;$i<45;$i++)
            <div class="worktext">PORTFOLIO</div>
            @endfor
        </div>
        <div class="works-list">
            @foreach($public as $idx=>$work)
            <a href="@if($work['url'] != "") {{$work['url']}}@else javascript:; @endif" class="item" style="background-image:url('/images/works/{{$work['image']}}'); cursor:@if($work['url'] !='') pointer @else not-allowed @endif;" @if($work['url'] !='') target="_blank" @endif>
                <div class="tag" style="background-color:{{$colors[$idx%5]}}">{{$work['title']}}</div>
                @if($work['url']=='')
                <div class="lock">
                    <img src="/images/lock.png" />
                </div>
                @endif
            </a>
            @endforeach
        </div>
        <div class="work-disclaimer">
            <div class="text">以下專案為與他人合作或後臺管理系統，暫不開放連結。</div>
            <a href="#contacts">與我聯繫</a>
        </div>
        <div class="works-list private-works-list">
            @foreach($private as $idx=>$work)
            <a href="@if($work['url'] != "") {{$work['url']}}@else javascript:; @endif" class="item" style="background-image:url('/images/works/{{$work['image']}}'); cursor:@if($work['url'] !='') pointer @else not-allowed @endif;" @if($work['url'] !='') target="_blank" @endif>
                <div class="tag" style="background-color:{{$colors[$idx%5]}}">{{$work['title']}}</div>
                @if($work['url']=='')
                <div class="lock">
                    <img src="/images/lock.png" />
                </div>
                @endif
            </a>
            @endforeach
        </div>
        <div class="skills-marquee">
            @for($i=0;$i<80;$i++)
            <div class="skilltext">SKILL</div>
            @endfor
        </div>
        <div class="skills">
            @foreach($skills as $key=>$skill)
            <div class="skill" >
                <div class="title">
                    <span>{{$skill['skill']}}</span>
                </div>
               
            </div>
            @endforeach
        </div>
    </div>
    <div id="contacts"></div>
    <div class="contacts" id="contacts2">
        <h2>與我聯繫</h2>
        <div class="thenk" id="thenk"><h3>TAHNK YOU!</h3></div>
        <div id="speed1"></div>
        <div id="speed2"></div>
        <div id="speed3"></div>
        <div id="speed4"></div>
        <div id="speed5"></div>
        <div class="form-container" id="formContainer">
            <div class="letter" id="letter">
                <div class="top" id="letterTop">
                    <div class="line1"></div>
                    <div class="line2"></div>
                </div>
                <div class="bottom" id="letterBottom">
                    <div class="line"></div>
                </div>
                <div class="content-top" id="contentTop">
                    <div class="left"></div>
                    <div class="right"></div>
                    <img src="/images/stamp.png" id="stamp" width="150" />
                </div>
                <div class="content">
                </div>
                <form class="form" id="form" x-data="{
                    name:'',
                    email:'',
                    content:'',
                    snedMail(){
                        const form = new FormData();
                        form.append('name', this.name);
                        form.append('email', this.email);
                        form.append('content', this.content);
                        form.append('_method', 'POST');
                        axios.post('/api/senaMail', form).then(res=>{
                        })
                    }
                }">
                    <div class="top">
                        <label for="">
                            <span>Name*</span>
                            <input type="text" x-model="name" />
                        </label>
                        <label for="">
                            <span>Email*</span>
                            <input type="Email" x-model="email" />
                        </label>
                    </div>
                    <div class="bototm">
                        <label for="">
                            <span>Content*</span>
                            <textarea x-model="content" ></textarea>
                        </label>
                    </div>
                    <div class="btn">
                        <label for="">
                            <button id="send" type="button" x-on:click="snedMail()">SEND</button>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <span>Copyright LiChengYan 2023</span>
    </footer>
</div>

@push('scripts')
<script>
    var confettiSettings = { target: 'falling', size:'1.8' };
    var confetti = new ConfettiGenerator(confettiSettings);
    confetti.render();
</script>
@endpush