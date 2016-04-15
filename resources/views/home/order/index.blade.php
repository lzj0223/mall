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
        .card-content{padding: 0 0.8rem;}
        .text-right {color: #51c200;font-size: .7rem;}
        .btn-pay{background: #51c200;color: #fff;border: 1px solid rgb(81, 194, 0);display: inline-block}
        .btn-del{display: inline-block}
    </style>
@endsection

@section('content')
    <div class="page" id="order-index-page">
        {!! widget('Home.Common')->setCurrentAction('order')->nav() !!}
        <div class="content ">
            <div class="buttons-tab fixed-tab">
                <a href="#tab1" class="tab-link active button">全部</a>
                <a href="#tab2" class="tab-link button">待付款</a>
                <a href="#tab3" class="tab-link button">待收货</a>
            </div>
            <div class="content-block">
                <div class="tabs">
                    <div id="tab1" class="tab active">
                        <div class="list-block cards-list">
                            <ul class="">
                                <li class="card">
                                    <div class="card-header">
                                    <span>
                                        <strong>订单流水号：11739268</strong>
                                        2015-10-25 17:33:55
                                    </span>
                                        <span class="text-right">待付款</span>
                                    </div>
                                    <div class="card-content">
                                        <img width="50" height="50" style="display: inline;" src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg">
                                    </div>
                                    <div class="card-footer row">
                                        <span class="col-50">实付：￥124.00</span>
                                    <span class="col-50">
                                        <a href="#" class="button button-light btn-del">取消</a>
                                        <a href="#" class="button button-success btn-pay">支付</a>
                                    </span>
                                    </div>
                                </li>
                                <li class="card">
                                    <div class="card-header">
                                    <span>
                                        <strong>订单流水号：11739268</strong>
                                        2015-10-25 17:33:55
                                    </span>
                                        <span class="text-right">待收货</span>
                                    </div>
                                    <div class="card-content">
                                        <img width="50" height="50" style="display: inline;" src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <span class="col-50">实付：￥124.00</span>
                                    <span class="col-50">
                                        <a href="#" class="button button-success btn-pay">确认收货</a>
                                    </span>
                                    </div>
                                </li>
                                <li class="card">
                                    <div class="card-header">
                                    <span>
                                        <strong>订单流水号：11739268</strong>
                                        2015-10-25 17:33:55
                                    </span>
                                        <span class="text-right">已完成</span>
                                    </div>
                                    <div class="card-content">
                                        <img width="50" height="50" style="display: inline;" src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <span class="col-50">实付：￥124.00</span>
                                    <span class="col-50">
                                        <a href="#" class="button button-light btn-del">删除</a>
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="tab2" class="tab">
                        <div class="list-block cards-list">
                            <ul>
                                <li class="card">
                                    <div class="card-header">
                                    <span>
                                        <strong>订单流水号：11739268</strong>
                                        2015-10-25 17:33:55
                                    </span>
                                        <span class="text-right">待付款</span>
                                    </div>
                                    <div class="card-content">
                                        <img width="50" height="50" style="display: inline;" src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg">
                                    </div>
                                    <div class="card-footer row">
                                        <span class="col-50">实付：￥124.00</span>
                                    <span class="col-50">
                                        <a href="#" class="button button-light btn-del">取消</a>
                                        <a href="#" class="button button-success btn-pay">支付</a>
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="tab3" class="tab">
                        <div class="list-block cards-list">
                            <ul>
                                <li class="card">
                                    <div class="card-header">
                                    <span>
                                        <strong>订单流水号：11739268</strong>
                                        2015-10-25 17:33:55
                                    </span>
                                        <span class="text-right">待收货</span>
                                    </div>
                                    <div class="card-content">
                                        <img width="50" height="50" style="display: inline;" src="http://gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i3/TB10LfcHFXXXXXKXpXXXXXXXXXX_!!0-item_pic.jpg_250x250q60.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <span class="col-50">实付：￥124.00</span>
                                    <span class="col-50">
                                        <a href="#" class="button button-success btn-pay">确认收货</a>
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
