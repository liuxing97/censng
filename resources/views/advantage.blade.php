@extends('base')

@section('myCss')
    <link href="css/advantage.css" type="text/css" rel="stylesheet" />
@endsection

@section('pageMain')
    <div class="advantageList">
        <!--新公司-->
        <div class="advantageBox">
            <div class="icon"></div>
            <div class="advantageTitle">基本情况</div>
            <div class="advantageMsg">
                <p>公司成立于2017年11月16日，是一家自认为拥有生命力的公司。</p>
                <p>因为公司成立时间不长，是家新公司，同时再加上公司方向上对自主产品的研究上投入更深，故我们的案例作品并不是很多。</p>
                <p>所以在建站模块的设计上，我们取长避短，采用避开案例展示的设计方案，来让效果达到更好，这是我们的一种设计理念。</p>
                <p>我们相信从我们的设计上，您应该可以看出我们的设计水准，期待与您的合作。</p>
            </div>
        </div>
        <!--小公司-->
        <div class="advantageBox">
            <div class="icon"></div>
            <div class="advantageTitle">小公司</div>
            <div class="advantageMsg">
                <p>我们是一个初创企业，因此我们极力的节省我们所需成本。</p>
                <p>因此从内部讲，我们的公司结构，与其他公司讲，多了些特色。</p>
                <p>这些特色是好是坏我们分析：是没有必要关注的。</p>
                <p>因为我们知道：您关注的，是我们的设计能力及我们有能力将您所需为您带来。</p>
            </div>
        </div>
        <!--诚信创造价值-->
        <div class="advantageBox">
            <div class="icon"></div>
            <div class="advantageTitle">诚信，价值</div>
            <div class="advantageMsg">
                <p>在进行设计的时候，我们在素材里发现了这句话。</p>
                <p>这句话是我们一直以来说坚信的，故而重做设计结构，我们都希望将元素加入。</p>
                <p>诚信创造价值，为这句话点赞。</p>
            </div>
        </div>
    </div>
    <div class="advantageList">
        <!--专业的设计-->
        <div class="advantageBox">
            <div class="icon"></div>
            <div class="advantageTitle">专业设计</div>
            <div class="advantageMsg">
                {{--<p>专业设计！</p>--}}
                <p>没有金刚钻，别揽瓷器活。</p>
                <p>没有金刚钻，也不会去揽瓷器活。</p>
                <p>如现所示，这就是我们的设计。</p>
            </div>
        </div>
        <!---->
        <div class="advantageBox">
            <div class="icon"></div>
            <div class="advantageTitle">沟通无忧</div>
            <div class="advantageMsg">
                {{--<p>专业设计！</p>--}}
                <p>在我们所遇的各种合作中，我们深切体会到：</p>
                <p>在合作中，沟通最为困难，沟通的程度，影响着最后的成果质量。</p>
                <p>因为有着切肤之痛，所以我们更放在心上。</p>
            </div>
        </div>
        <div style="position: relative;top: -99999px;" class="advantageBox">
            <div class="icon"></div>
        </div>
    </div>
    <div style="display: none" class="advantageOther">
        辰象科技，愿望是引领更多人工作与生活
    </div>
@endsection