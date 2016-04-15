@extends('home.__layout.common')
@section('hearder')
    <style>
        .content input,.content select{color: #8d8a8a;}
    </style>
@endsection

@section('content')
    <div class="page" id="member-addr-add-page">
        {!! widget('Home.Common')->setCurrentAction('member')->nav() !!}
        <div class="content ">
            <div class="list-block" style="margin: 0.1rem 0">
                <ul>
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-name"></i></div>
                            <div class="item-inner">
                                <div class="item-input">
                                    <input type="text" placeholder="收货人姓名">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-email"></i></div>
                            <div class="item-inner">
                                <div class="item-input">
                                    <input type="tel" placeholder="手机号码">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-gender"></i></div>
                            <div class="item-inner">
                                <div class="item-input">
                                    <select>
                                        <option>请选择省份</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-gender"></i></div>
                            <div class="item-inner">
                                <div class="item-input">
                                    <select>
                                        <option>请选择城市</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-gender"></i></div>
                            <div class="item-inner">
                                <div class="item-input">
                                    <select>
                                        <option>请选择地区</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-email"></i></div>
                            <div class="item-inner">
                                <div class="item-input">
                                    <input type="text" placeholder="详细地址">
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Switch (Checkbox) -->
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-toggle"></i></div>
                            <div class="item-inner">
                                <div class="item-title label">默认地址</div>
                                <div class="item-input">
                                    <label class="label-switch">
                                        <input type="checkbox">
                                        <div class="checkbox"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content-block">
                <div class="row">
                    <div class="col-50"><a href="#" class="button button-big button-fill button-danger back">取消</a></div>
                    <div class="col-50"><a href="#" class="button button-big button-fill button-success">提交</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
