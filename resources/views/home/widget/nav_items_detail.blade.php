<style>
    .more-bug {background-color: #ff473f;}
    .one-bug {background-color: rgba(254,78,69,.6);}
    .bug-common {margin: 0!important;text-align: center!important;color: #fff!important;font-size: 0.75rem!important;}
    .bug-price{top: .05rem;height: 1.2rem;line-height: 1.2rem;position: relative;z-index: 20;padding: 0 .1rem;display:block;vertical-align: middle;background-size: 100% auto;background-position: center;}
</style>
<nav class="bar bar-tab">
    <a class="tab-item active" href="/">
        <span class="icon icon-home"></span>
        <span class="tab-label">首页</span>
    </a>
    <a class="tab-item one-bug bug-common" href="#">
        <span class=" bug-price"><small>￥</small>{{$data['one']}}</span>
        <span class="tab-label">单独购</span>
    </a>
    <a class="tab-item more-bug bug-common" href="#">
        <span class="bug-price"><small>￥</small>{{$data['group']['price']}}</span>
        <span class="tab-label">{{$data['group']['persons']}}人团</span>
    </a>
</nav>