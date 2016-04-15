@extends('home.__layout.common')
@section('hearder')
    <style>
        .address_team.active:after , .add_address .add_icon{background: url(/images/sprites.png) no-repeat;background-size: 222px;}
        .add_address{ position:relative; border:1px solid #ccc; border-width:1px 0px; background:#fff; margin:20px 0;}
        .add_address a{ display:block; color:#8d8a8a;  padding: 10px 0 10px 20px; line-height:21px; font-size:14px;}
        .add_address .add_icon{ display:inline-block; width:22px; height:21px; vertical-align:middle; margin-right:10px;background-position: -93px 0; }
        .add_address .arrow{overflow:hidden; float: right;margin-right: 10px;display: block}
        .address_list{ margin:0; padding:0;border-top:1px solid #ccc;}
        .address_team{ position:relative; list-style:none; padding:10px 45px 10px 20px; border-bottom:1px solid #ccc; background:#fff;}
        .user_name{ margin-bottom:3px;}
        .user_name span{ margin-right:20px; font-size:14px; color:#000;}
        .user_addrs{ font-size:12px; color:#666}
        .addrs-edit a{ display:block; width:26px; height:38px; margin-top:-19px; background-position:-119px 0; text-indent:-999px; overflow:hidden;}
        .address_team.active:after{ content: "";  position:absolute; right:0; top:0; width:50px; height:50px; background-position:-150px 0; }
        .address_team.current:before{ content: "";  position:absolute; left:10px; top:50%; width:20px; height:14px; margin-top:-7px; background-position:-64px 0; }
        .address_team.current{ padding-left:40px;}

    </style>
@endsection

@section('content')
    <div class="page" id="member-addr-page">
        {!! widget('Home.Common')->setCurrentAction('member')->nav() !!}
        <div class="content ">
            <div class="add_address">
                <a href="/member/addr_add.html"><span class="add_icon"></span>新增收货地址<span class="icon icon-right arrow"></span></a>
            </div>
            <ul class="address_list" id="divAddress">
                <li class="address_team active">
                    <a href="addr_add.html?type=edit&amp;consigneeId=9b14362c-fbc3-4e89-af16-4da77ab3469e&amp;passKey=3f0da98e6d685fceeb65595dc9a43d52">
                        <div class="user_name">
                            <span> 黄金林</span>
                            <span>18005151538</span>
                        </div>
                        <div class="user_addrs">
                            上海宝山区场景楼13号107
                        </div>
                    </a>
                </li>
                <li class="address_team">
                    <a href="addr_add.html?type=edit">
                        <div class="user_name">
                            <span> 黄金林</span>
                            <span>18005151538</span>
                        </div>
                        <div class="user_addrs">
                            北京崇文区场景楼13号107
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection