<!-- 工具栏 -->
<nav class="bar bar-tab">
    <a class="tab-item external <?php if($class == 'index'){echo 'active';} ?>" href="/">
        <span class="iconfont block">&#xe60d;</span>
        <span class="tab-label block fs12">热门</span>
    </a>
    <a class="tab-item external <?php if($class == 'group'){echo 'active';} ?>" href="/group/index.html">
        <span class="iconfont block">&#xe607;</span>
        <span class="tab-label block fs12">收藏</span>
        <span class="badge">2</span>
    </a>
    <a class="tab-item external <?php if($class == 'order'){echo 'active';} ?>" href="/order/index.html">
        <span class="iconfont block">&#xe601;</span>
        <span class="tab-label block fs12">购物车</span>
    </a>
    <a class="tab-item external <?php if($class == 'member'){echo 'active';} ?>" href="/member/index.html">
        <span class="iconfont block">&#xe600;</span>
        <span class="tab-label block fs12">个人</span>
    </a>
</nav>