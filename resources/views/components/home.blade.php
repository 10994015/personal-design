<div class="wrapper" x-data>
    <div class="experience">
        <div class="marquee">
            <h2 class="full">EXPERIENCE</h2>
            <h2 class=storke>EXPERIENCE</h2>
            <h2 class="full">EXPERIENCE</h2>
            <h2 class=storke>EXPERIENCE</h2>
        </div>
        <div class="content">
            <div class="personal">
                <div class="image">
                    <canvas id="me"></canvas>
                    {{-- <img src="/images/me.png" /> --}}
                </div>
                <div class="balloon-tip">
                    <img src="/images/balloon_tip.svg" alt="">
                </div>
                <div class="paragraph">
                    <i>"I'm the man who'll become the pirate king!"</i>
                    <p>來自中原大學碩士，從大二開始學習基本網頁開發，由基礎JSP開始學習，直到現在主要使用PHP以及JavaScript來進行開發。碩士論文對GAN(生成對抗網路)與室內設計的結合進行研究，<br>熱愛嘗試新的事物，永遠把自己當成初學者向所有人學習。</p>
                    <div class="basic">
                        <h3>姓名:</h3>
                        <span>李承諺(Li-Cheng Yan)</span>
                    </div>
                    {{-- <div class="basic">
                        <h3>出生日期:</h3>
                        <span>1997/08/22</span>
                    </div>
                    <div class="basic">
                        <h3>家鄉:</h3>
                        <span>桃園市桃園區</span>
                    </div> --}}
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
            <div class="accordions" >
                @foreach($jobs as $key=>$job)
                <div x-bind:class="['accordions-list']" x-bind:style="{height:isOpen ? ($refs.content.scrollHeight+88)+'px' : '88px'}" 
                x-data="{
                    isOpen: false,
                }">
                    <div class="job">
                        <div class="data">
                            <div class="date">{{$job['date']}}</div>
                            <div class="cmopany-name">{{$job['company']}}</div>
                            <div class="role">{{$job['role']}}</div>
                            <div class="address">{{$job['address']}}</div>
                        </div>
                        <img src="/images/plus.svg" x-bind:class="['plus', isOpen ? 'rotate' : '']" x-on:click="isOpen = !isOpen">
                    </div>
                    <div class="accordion-content" x-ref='content' >
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
    <div class="paper">
        <div class="paper-container">
            <div class="paper-cover">
                <div class="left">
                    <div class="paper-img">
                        <img src="/images/paper.jpg" />
                    </div>
                </div>
                <div class="right">
                    <h2>碩士學位論文</h2>
                    <h3>以生成對抗網路為基礎將室內設計三維模型轉換之研究</h3>
                    <p>摘要:室內設計產業在現今來說是不可或缺的一塊產業許多時候客戶在裝潢住宅前會想
                        預先看到自己房子內的真實樣貌此時室內設計業就會提供擬真圖提供給客戶作為參考，
                        擬真圖是利用建模軟體所繪製出來的。而建模的步驟為先設計出一個平面，接著拉高成
                        為一個素模，再將素模繪製出有材質、有顏色、有燈光的3D模型，最後再利用渲染軟
                        體將3D模型渲染為3D擬真圖。但從素模到3D擬真圖的繪製過程中會花費大量的時間
                        以及視覺化思考。隨著時間的發展，人工智慧的技術也已經非常成熟，若擬真圖的設計
                        可以利用人工智慧來製作將會省下許多時間以及視覺化思考等技術需求。本論文中使用
                        生成對抗網路為基礎來學習室內設計的建模，將素模直接轉換為3D擬真圖我們先利
                        用SketchUp製圖蒐集大量的室內圖片並使用Pix2pix以及CycleGAN對圖片進行訓
                        練，視情況調整不同的訓練次數，從中分析出最佳結果接著與VRay渲染出來的圖片進
                        行比較。實驗結果顯示，Pix2pix對於素模與擬真圖的轉換有較不錯的表現，相比之下
                        CycleGAN並不適合對素模與擬真圖進行轉換。最後生成出來的最佳結果與VRay渲染
                        出來的擬真圖進行比較後能夠發現，生成對抗網路模型產生的圖片的確能自動設計好房
                        間，生成速度也非常快，整體的架構也非常清楚，但相比之下利用VRay渲染出來的圖
                        片，生成對抗網路產生的圖片細節並沒有那麼明顯。
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
    <div class="awards">
        <canvas id="falling"></canvas>
        <div class="awards-container">
            <div class="title">
                <h2>課外活動經歷</h2>
            </div>
            <div class="awards-list">
                @foreach($awards as $award)
                <div class="item">
                    <div>{{$award}}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="works">
        <div class="work-marquee">
            @for($i=0;$i<10;$i++)
            <div class="worktext">WORK</div>
            @endfor
        </div>
    </div>
</div>

@push('scripts')
<script>
    var confettiSettings = { target: 'falling', size:'1.8' };
    var confetti = new ConfettiGenerator(confettiSettings);
    confetti.render();
    
</script>
@endpush