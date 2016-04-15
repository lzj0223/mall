@extends('home.__layout.common')
@section('hearder')
    <style>
        .card-footer{font-size: 0.1rem;min-height: .2rem;padding: .2rem .15rem;}
        .items-title{width: 100%;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;}
        .comm2-grp-ico {
            background-color: #f0373d;
            border-radius: 0 12px 12px 0;
            font-weight: 100;
            line-height: 1rem;
            color: #fff;
            padding: 3px 10px 3px 8px;
            display: block;
            float: left;
        }
        .price-grp{
            float: right;
        }
        .price-grp del{
            color: #b5b5b6;
            font-size: 0.4rem;
            line-height: 0.4rem;
        }
        .price-grp .jd-red{
            color: #C71010;;
            font-size: 0.7rem;
            height: 1rem;
            line-height: 0.7rem;
            font-weight: 100;
        }
    </style>
@endsection

@section('content')
    <div class="page" id="index">
        {!! widget('Home.Common')->setCurrentAction('index')->nav() !!}
        <div class="content">
            <div class="page-index">
                <div class="card facebook-card">
                    <a href="/index/detail.html">
                        <div class="card-content"><img src="http://testpdd.b0.upaiyun.com/goods/d41d8cd98f9af9a1d08fa9e43bec732bd985b8e840.jpg!750" width="100%"></div>
                        <div class="card-footer no-border items-title">
                            88元，9颗泰国苹果...
                        </div>
                        <div class="card-footer no-border">
                            <span class="comm2-grp-ico">3人成团</span>
                            <div class="price-grp">
                                <span class="jd-red">&nbsp;¥43.00<br></span>
                                <del class="ng-binding">&nbsp;¥60.00</del>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card facebook-card">
                    <a href="/index/detail.html">
                        <div class="card-content"><img src="http://testpdd.b0.upaiyun.com/goods/d41d8cd98f9af9a1d08fa9e43bec732bd985b8e840.jpg!750" width="100%"></div>
                        <div class="card-footer no-border items-title">
                            88元，9颗泰国苹果...
                        </div>
                        <div class="card-footer no-border">
                            <span class="comm2-grp-ico">3人成团</span>
                            <div class="price-grp">
                                <span class="jd-red">&nbsp;¥43.00<br></span>
                                <del class="ng-binding">&nbsp;¥60.00</del>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

