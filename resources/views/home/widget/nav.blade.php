<nav class="bar bar-tab">
    <a class="tab-item <?php if($class == 'index'){echo 'active';} ?>" href="/">
        <span class="icon icon-home"></span>
        <span class="tab-label">首页</span>
    </a>
    <a class="tab-item <?php if($class == 'group'){echo 'active';} ?>" href="/group/index.html">
        <span class="icon icon-app"></span>
        <span class="tab-label">我的团</span>
    </a>
    <a class="tab-item <?php if($class == 'order'){echo 'active';} ?>" href="/order/index.html">
        <span class="icon icon-cart"></span>
        <span class="tab-label">我的订单</span>
    </a>
    <a class="tab-item <?php if($class == 'member'){echo 'active';} ?>" href="/member/index.html">
        <span class="icon icon-me"></span>
        <span class="tab-label">个人中心</span>
    </a>
</nav>