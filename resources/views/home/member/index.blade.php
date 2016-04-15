@extends('home.__layout.common')
@section('hearder')
    <style>
        .user-info{text-align: center;}
        .u-pic { position: relative; width: 130px; height: 130px; padding:20px; margin:0 auto; z-index: 2; overflow: hidden; text-align: center }
        .u-pic img{ width:90px;}
        .u-pic .mask { background: url(/images/myyg-bg.png) no-repeat 0 0; background-size:130px; width: 130px; height: 130px; position: absolute; left: 0; top: 0; z-index: 2 }
        .u-name{}
        .u-name .name{color:#299d1a; font-size:14px; font-weight:bold;}
        .u-name .vip{ margin-top:5px; font-size:12px;}
        .u-account{ display:table; margin:15px auto 0; width:250px;}
        .u-account span{ display:table-cell; width:50%; color:#51c200; font-size:12px;}
        .u-account span.yb{ text-align:center; }
        .u-account span.balance{ text-align:center;}
        .u-account span strong{ color:#299d1a; font-size:12px;}
        .user-list{ width:285px; margin:40px auto 0 auto; }
        .user-list a{ display:block; float:left; width: 65px; margin:0 15px 10px; color:#666; text-align:center; font-size:12px; position:relative;}
        .user-list a span{ display:block; width: 48px; height:48px; margin:7px 7px 5px; background:url(/images/icon-UserCenter.png) no-repeat; background-size:192px 48px; text-indent:-999px; overflow: hidden;}
        .user-list-icon01 span{ background-position:0 0 !important;}
        .user-list-icon02 span{ background-position:-48px 0 !important;}
        .user-list-icon03 span{ background-position:-96px 0 !important;}
        .user-list-icon04 span{ background-position:-144px 0 !important;}
        .user-list .badge{position:absolute;  padding:2px 4px; text-align:center; text-indent:0;font-family: Arial;background-color:#ff0000; left:auto; right:3px; top:2px;color: #ECE7E7;}
        .btn-logout{ margin-top:30px;}
        .btn-logout a{ display:block; width:100px; height:35px; line-height:35px; margin:0 auto; text-align:center; border:1px solid #ccc; border-radius:5px; color:#51c200; background:#fff;}
    </style>
@endsection

@section('content')
    <div class="page" id="member-index">
        {!! widget('Home.Common')->setCurrentAction('member')->nav() !!}
        <div class="content content-padded">
            <div class="page-index">
                <div class="row user-info" id="userInfo">
                    <div class="u-pic">
                        {{--<img src="/images/no-pic.jpg" alt="用户头像">--}}
                        <img src="/images/login-pic.jpg" alt="用户头像">
                        <div class="mask"></div>
                    </div>
                    <div class="u-name">
                        <div class="name">
                            18005151538
                        </div>
                        <div class="vip">
                            普通用户
                        </div>
                    </div>
                    {{--<div class="u-account">
                        <span class="yb">悠币：<strong>120</strong></span>
                        <span class="balance">余额：<strong>￥0</strong></span>
                    </div>--}}
                </div>

                <div class="row user-list clearfix" id="userList">
                    <a href="/order/index.html" class="user-list-icon01"><span>我的订单</span>我的订单</a>
                    {{--<a href="/member/coupon.html" class="user-list-icon02"><span>优惠券</span>优惠券<font class="badge">9</font></a>--}}
                    <a href="/member/addr.html" class="user-list-icon03"><span>收货地址</span>收货地址</a>
                    <a href="/member/pwd.html" class="user-list-icon04"><span>修改密码</span>修改密码</a>
                </div>
                <div class="row btn-logout">
                    <a onclick="">退出登录</a>
                </div>
            </div>
        </div>
    </div>
@endsection

