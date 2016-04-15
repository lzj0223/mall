@extends('home.__layout.common')
@section('hearder')
    <style>
        .product-title{margin:0  0 .15rem 0;line-height: 1rem; font-size: 0.5rem;padding: 0 0.75rem}
        .product-price{padding: 0 0.75rem}
        .product-price .price { color: #fb3d3d; }
        .product-price .price, .product-price del, .product-price .specifications { margin-right: 5px; }
        .product-price .price span { font-size: 16px;}
        .product-price del { color: #8d8a8a; font-size: 13px; }
        .product-price { font-size: 14px; color: #8d8a8a }
        .swiper-slide img{max-width: 100%;max-height: 360px;display: block;margin-left: auto;margin-right: auto;}
        .swiper-container{padding-bottom: 10px;margin: 0 auto;width: auto;text-align: center}
        .swiper-wrapper{margin: 0 auto}
        .rule-intro {width: 100%;margin: .5rem 0;padding: .5rem 0;line-height:.1rem;color: #878787;font-size: 2px;text-align: center;background-color: #DADEDE;}
    </style>
@endsection

@section('content')
    <div class="page" id="items-detail-page">
        {!! widget('Home.Common')->setCurrentAction('index','detail')->setData(['group'=>['persons'=>'三','price'=>89.99],'one'=>49.95])->nav() !!}
        <div class="content">
            <div class="content-block" style="margin:0;padding: 0">
                <!-- Slider -->
                <div class="swiper-container" data-space-between='10'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide pb-standalone"><img src="http://img13.yiguoimg.com/e/items/2016/160310/9288692812062826_500.jpg" alt=""></div>
                        <div class="swiper-slide pb-standalone"><img src="//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i4/TB10rkPGVXXXXXGapXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg" alt=""></div>
                        <div class="swiper-slide pb-standalone"><img src="//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1kQI3HpXXXXbSXFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg" alt=""></div>
                    </div>
                    <div class="swiper-pagination" style="bottom: 2.5rem;"></div>
                </div>
                <h6 class="product-title" >西班牙晚季脐橙10个约190g/个（北京）西班牙晚季脐橙10个约190g/个（北京）</h6>
                <div class="product-price">
                    <span class="price">￥<span id="divPrice">49.00</span></span>
                    <del id="divPrice2">￥59.00</del>
                </div>

            </div>
            <div class="content-block" style="margin: .15rem 0;padding: 0">
                <div class="rule-intro">*开团并邀请2人参团,人数不足自动退款,详见<span>拼团玩法</span>*</div>

                <div class="buttons-tab fixed-tab" data-offset="0">
                    <a href="#tab1" class="tab-link active button">图文详情</a>
                    <a href="#tab2" class="tab-link button">商品参数</a>
                    <a href="#tab3" class="tab-link button">成交数</a>
                </div>

                <div class="tabs">
                    <div id="tab1" class="tab active">
                        <div class="content-block">
                            <ul>
                                <!--repeat426740653114393358891087789088488--><li><p><span>1.</span>【最佳赏味期】收到即可食用。
                                    </p></li><!--repeat426740653114393358891087789088488--><li><p><span>2.</span>【phh教你怎么吃柠檬】柠檬味道酸爽可口，在西餐中经常用柠檬搭配，可以点缀添色，去腥增香。日常生活中柠檬多用于切片泡水，将柠檬切成薄片，用90℃左右的热水浸泡，注意不要把核弄破，不然会有苦味，也可加入少量蜂蜜，做成柠檬蜂蜜茶，不宜浸泡过久，建议现泡现喝。
                                    </p></li><!--repeat426740653114393358891087789088488--><li><p><span>3.</span>【phh教你怎么储藏柠檬】柠檬适宜储藏温度在2℃~5℃之间，可以直接放在冰箱冷藏室中，保存10~15天。</p></li><!--repeat426740653114393358891087789088488:end-->
                            </ul>
                            <ul>
                                <!--repeat426740653114393358891087789088488--><li><p><span>1.</span>【最佳赏味期】收到即可食用。
                                    </p></li><!--repeat426740653114393358891087789088488--><li><p><span>2.</span>【phh教你怎么吃柠檬】柠檬味道酸爽可口，在西餐中经常用柠檬搭配，可以点缀添色，去腥增香。日常生活中柠檬多用于切片泡水，将柠檬切成薄片，用90℃左右的热水浸泡，注意不要把核弄破，不然会有苦味，也可加入少量蜂蜜，做成柠檬蜂蜜茶，不宜浸泡过久，建议现泡现喝。
                                    </p></li><!--repeat426740653114393358891087789088488--><li><p><span>3.</span>【phh教你怎么储藏柠檬】柠檬适宜储藏温度在2℃~5℃之间，可以直接放在冰箱冷藏室中，保存10~15天。</p></li><!--repeat426740653114393358891087789088488:end-->
                            </ul>
                            <ul>
                                <!--repeat426740653114393358891087789088488--><li><p><span>1.</span>【最佳赏味期】收到即可食用。
                                    </p></li><!--repeat426740653114393358891087789088488--><li><p><span>2.</span>【phh教你怎么吃柠檬】柠檬味道酸爽可口，在西餐中经常用柠檬搭配，可以点缀添色，去腥增香。日常生活中柠檬多用于切片泡水，将柠檬切成薄片，用90℃左右的热水浸泡，注意不要把核弄破，不然会有苦味，也可加入少量蜂蜜，做成柠檬蜂蜜茶，不宜浸泡过久，建议现泡现喝。
                                    </p></li><!--repeat426740653114393358891087789088488--><li><p><span>3.</span>【phh教你怎么储藏柠檬】柠檬适宜储藏温度在2℃~5℃之间，可以直接放在冰箱冷藏室中，保存10~15天。</p></li><!--repeat426740653114393358891087789088488:end-->
                            </ul>
                            <ul>
                                <!--repeat426740653114393358891087789088488--><li><p><span>1.</span>【最佳赏味期】收到即可食用。
                                    </p></li><!--repeat426740653114393358891087789088488--><li><p><span>2.</span>【phh教你怎么吃柠檬】柠檬味道酸爽可口，在西餐中经常用柠檬搭配，可以点缀添色，去腥增香。日常生活中柠檬多用于切片泡水，将柠檬切成薄片，用90℃左右的热水浸泡，注意不要把核弄破，不然会有苦味，也可加入少量蜂蜜，做成柠檬蜂蜜茶，不宜浸泡过久，建议现泡现喝。
                                    </p></li><!--repeat426740653114393358891087789088488--><li><p><span>3.</span>【phh教你怎么储藏柠檬】柠檬适宜储藏温度在2℃~5℃之间，可以直接放在冰箱冷藏室中，保存10~15天。</p></li><!--repeat426740653114393358891087789088488:end-->
                            </ul>
                            <!-- <div ms-repeat-desc="goods_desc"></div> -->
                        </div>
                    </div>
                    <div id="tab2" class="tab">
                        <div class="list-block" style="margin: .7rem 0;">
                            <ul>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">名称</div>
                                        <div class="item-after">小王子</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">ISBN</div>
                                        <div class="item-after">9787201077642</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">作者</div>
                                        <div class="item-after">圣埃克苏佩里著,李继宏译</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">出版社</div>
                                        <div class="item-after">天津人民出版社</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">出版时间</div>
                                        <div class="item-after">2013-01-01</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">版次</div>
                                        <div class="item-after">1</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">印次</div>
                                        <div class="item-after">1</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">页数</div>
                                        <div class="item-after">118</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">字数</div>
                                        <div class="item-after">86000</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">开本</div>
                                        <div class="item-after">大32开</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">纸张</div>
                                        <div class="item-after">胶版纸</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media"><i class="icon icon-f7"></i></div>
                                    <div class="item-inner">
                                        <div class="item-title">包装</div>
                                        <div class="item-after">精装</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="tab3" class="tab">
                        <div class="content-block">
                            <p>This is tab 3 content</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
    <script>$(".swiper-container").swiper({autoplay:5000,spaceBetween: 100,pagination:'.swiper-pagination'});</script>
@endsection

