@extends('home.__layout.common')
@section('hearder')
    <style>
        .card-header span strong {
            display: block;
            font-weight: normal;
            color: #333;
            font-size: .7rem;
        }
        .card-header span{font-size: .1rem;}
        .card-content{padding: 1rem 1.2rem 0 1.2rem;}
        .jd-red{color: red}
        .btn-del{display: inline-block}
        .items-img{max-height: 80px;}
        .list-block {margin: .75rem 0;}
        .items-info{margin-left: .5rem}
    </style>
@endsection

@section('content')
    <div class="page" id="order-index-page">
        {!! widget('Home.Common')->setCurrentAction('group')->nav() !!}
        <div class="content">
            <div class="list-block cards-list">
                <ul class="">
                    <li class="card">
                        <div class="card-content row">
                            <div class="col-30">
                                <img class="items-img"  src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg">
                            </div>
                            <div class="col-70 items-info">
                                <div class="">88元，9颗泰国苹果...</div>
                                <div class="">
                                    <em class="jd-red">¥&nbsp;43.00</em>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer row">
                            <div class="col-20" style="font-size: .1rem;color: #2ca02c">进行中</div>
                            <div class="col-80" style="text-align: right">
                                <a href="#" class="button button-light btn-del">查看订单</a>
                                <a href="#" class="button button-light btn-del">查看团情</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
