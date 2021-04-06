<template>
    <div class="container">
        <div class="top-bar"><!-- 顶部部分 -->
<div class="top-bar">
  <div class="top w">
    <div class="top-left fl" id="login-info">

  <span class="home-entrance goIndex"><img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/index-images/home.png">首页</span>
  <!-- 新增站点跳转配置 -->
  <div class="mySite">
      <span class="textSpan">
          <span class="siteText">山东省</span>
      </span>
  		<span class="switchSpan">切换</span>
      <div class="siteList">
          <div class="firstList fl">
              <ul><li value="1" title="山东省">山东省</li><li value="2" title="临沂市">临沂市</li><li value="3" title="淄博市">淄博市</li><li value="4" title="日照市">日照市</li><li value="5" title="威海市">威海市</li><li value="6" title="济南市">济南市</li><li value="7" title="济宁市">济宁市</li><li value="8" title="德州市">德州市</li><li value="9" title="枣庄市">枣庄市</li><li value="10" title="潍坊市">潍坊市</li><li value="11" title="东营市">东营市</li><li value="12" title="泰安市">泰安市</li><li value="13" title="聊城市">聊城市</li></ul>
          </div>
      </div>
  </div>

    <span>您好，欢迎来到山东省政府采购网上商城！</span>
    <span class="top-login"><a href="javascript:void(0);">【请登录】</a></span>

 </div>
    <ul class="top-right fr">
      <li id="cart-info"></li>
      <li class="suggestion fr" id="suggestion">意见反馈</li>
    </ul>
  </div>
</div>

<!-- 顶部登陆 -->
<script id="loginInfoTemplate" type="text/html">
  <span class="home-entrance goIndex"><img src="http://ggzyjyzx.shandong.gov.cn/wssc/attach/sdszfcg/setting/images/index-images/home.png">首页</span>
  <!-- 新增站点跳转配置 -->
  <div class="mySite">
      <span class="textSpan">
          <span class="siteText">山东省</span>
      </span>
  		<span class="switchSpan">切换</span>
      <div class="siteList">
          <div class="firstList fl">
              <ul>
              </ul>
          </div>
          <!-- <div class="secondList fl">
              <ul>
              </ul>
          </div> -->
      </div>
  </div>

    <span class="top-login" ><a href="javascript:void(0);">【请登录】</a></span>

 </script>

<!-- 顶部购物车数量统计 -->
<script id="cartInfoTemplate" type="text/html">
  <a href="#">
    <i><img src="http://ggzyjyzx.shandong.gov.cn/wssc/attach/sdszfcg/setting/images/index-images/car.png" alt="">我的购物车</i>
    <span class="top-num" >0</span>
  </a>
</script></div>
        <div class="header">
            <div class="header">
                <div class="w">
                    <div class="logo fl">

                  <span class="goIndex">
                    <img src="http://ggzyjyzx.shandong.gov.cn/wssc/attach/sdszfcg/setting/image/upload/20200426181011.png" alt="">
                  </span>
                    </div>
                    <div class="search fr">
                        <div class="search-up">
                            <div class="goods-select fl">商品&nbsp;&nbsp;<img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/index-images/jiantou2.png" alt=""></div>
                            <input type="text" placeholder="请输入关键词" id="keywords">
                            <div class="search-up-img searchCase">
                                <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/index-images/search.png" alt="">
                            </div>
                        </div>
                        <ul class="search-btm clearfix">
                            <li><a href="javascript: void(0);">电脑办公</a></li>
                            <li><a href="javascript: void(0);">电脑用品</a></li>
                            <li><a href="javascript: void(0);">数码通讯</a></li>
                            <li><a href="javascript: void(0);">家用电器</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-------------------------nav start---------------------------------->


            <div class="product-detail clearfix w">
                <div class="detail-left fl" id="left-box">

                    <div class="MagnifierWrap" id="MagnifierWrap2">
                        <div class="box MagnifierMain" id="box">




                            <img class="MagnifierImg"  :src="product.image_path" data-src="https://hxbg.cn/upload/goods/album/12/565fa9fb70c6393.jpg">
                        </div>
                        <div class="spe_leftBtn">&lt;</div>
                        <div class="spe_rightBtn">&gt;</div>
                        <div class="spec-items">
                            <ul class="img-list clearfix">

                                <li class="on">
                                    <img  src="https://hxbg.cn/upload/goods/album/12/565fa9fb70c6393.jpg" alt="" data-lsrc="https://hxbg.cn/upload/goods/album/12/565fa9fb70c6393.jpg" data-maxsrc="https://hxbg.cn/upload/goods/album/12/565fa9fb70c6393.jpg">
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="detail-middle fl" id="middle-box">

                    <h2 :title="product.name">{{product.name}}</h2>
                    <div class="product-price clearfix">
                        <div class="price fl" id="price-box">
                            <div class="purchase">
                                <i>协议价</i>
                                <span>￥{{product.price}}</span>
                            </div>
                            <div class="official">
                                <i>官网价</i>

                                <span class="del"><a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_512777" target="_blank">￥{{product.mall_price}}</a></span>


                                <span class="save-span">（节约￥{{product.mall_price-product.price}}）</span>

                                <span><a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_512777" target="_blank" class="check-css">查看 &gt;&gt;</a></span>

                            </div>
                        </div>
                        <div class="sales-volume fr">
                            <p><i>总销量</i></p>
                            <p><i>0</i></p>
                        </div>
                    </div>
                    <div class="form clearfix">
                        <div class="inpt-list inpt1">
                            <span class="supplier-span">供应商 </span>

                            <span class="txt">{{product.company.compName}}</span>


                            <div class="inpt-list inpt2">
                                <span class="fl delivery-place">配送至</span>
                                <input id="current_county_id" type="hidden" value="370101">
                                <input type="text" id="location" readonly="" name="location" class="city_input  current2 proCitySelAll" value="山东省济南市">
                                <link href="" media="screen" rel="stylesheet">
                                <!--弹出省省市-->
                                <div class="provinceCityAll">
                                    <div class="tabs clearfix">
                                        <ul class="">
                                            <li><a href="javascript:;" class="current" tb="provinceAll">省份</a></li>
                                            <li><a href="javascript:;" tb="cityAll" id="cityAll">城市</a></li>
                                            <li><a href="javascript:;" tb="countyAll" id="countyAll">区县</a></li>
                                        </ul>
                                    </div>
                                    <div class="con">
                                        <div class="provinceAll invis">
                                            <div class="list">
                                                <ul>
                                                    <li></li>
                                                </ul>
                                                <label id="provincePage1" style="display:none;">1</label>
                                            </div>
                                        </div>
                                        <div class="cityAll invis" style="display: none;">
                                            <div class="list">
                                                <ul>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="countyAll invis" style="display: none;">
                                            <div class="list">
                                                <ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="inpt-list">
                                <span class="fl purchase-span">购买数量</span>
                                <div class="controls fl ">
                                    <div class="input-amount js-item-stock-quantity fl" data-max="">
                                        <a href="javascript:void(0);" class="disabled minus">-</a>
                                        <input value="1" class="count-number" id="item-quantity" maxlength="5" data-old="1" data-max-stock="">
                                        <a href="javascript:void(0);" class="plus">+</a>
                                    </div>
                                    <span class="total-stock fl" id="stock">有货</span>
                                </div>
                            </div>
                            <div id="optBox">


                                <div class="button button-css1"><a href="javascript:void(0);">请先登录</a></div>

                            </div>
                        </div>
                    </div></div>
                <div class="detail-right fr" id="right-box">

                    <div class="alert">
                        <p class="tishi"><img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/tishi.png" alt="">风险提示</p>
                        <p>本商品如用于基本办公使用，须执行本级行政事业单位通用资产配置标准限额要求，不得超标准采购。</p>
                    </div>

                    <div class="other">
                        <div class="title">
                            <span class="title-pic"><img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/on.png" alt=""></span>
                            <span>该产品其他在售商家</span>
                            <span class="on-sell">该商品有33个报价</span>
                            <span class="comparison">
                    <a href="javascript:void(0);">商品对比</a>
                </span>
                        </div>
                        <div class="tableBox">
                            <table class="main clearfix" id="mainContrast">

                                <tr>
                                    <th class="round"></th>
                                    <th class="span-name">供应商</th>
                                    <th>本网价</th>
                                    <th>官网价</th>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-462630">
                                    </td>
                                    <td class="span-name" title="青岛康悦电子科技有限公司">青岛康悦电子科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_462630">

                                            ￥2999.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.yueserve.com/goods.php?id=14766" target="_blank">￥3060.21</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-512777">
                                    </td>
                                    <td class="span-name" title="青岛海翔伟业网络科技有限公司">青岛海翔伟业网络科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_512777">

                                            ￥2999.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="https://hxbg.cn/goods/index.html?id=7203" target="_blank">￥3062.21</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-513745">
                                    </td>
                                    <td class="span-name" title="山东远帆办公设备有限公司">山东远帆办公设备有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_513745">

                                            ￥3325.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.yfjtoa.com/Home/Goods/goods/id/18.html" target="_blank">￥3500.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-566712">
                                    </td>
                                    <td class="span-name" title="临沂佳彩办公设备有限公司">临沂佳彩办公设备有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_566712">

                                            ￥3200.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.lyjcsc.cn/Home/Goods/goods/id/189.html" target="_blank">￥3325.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-673745">
                                    </td>
                                    <td class="span-name" title="滕州恒信远达信息科技有限公司">滕州恒信远达信息科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_673745">

                                            ￥3200.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.tengzhouoa.com/Goods/Detail2/77782" target="_blank">￥3352.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-676159">
                                    </td>
                                    <td class="span-name" title="兰陵县创新电脑科技有限公司">兰陵县创新电脑科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_676159">

                                            ￥3200.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.llcxkj.com.cn/goods.php?id=16" target="_blank">￥3350.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-701638">
                                    </td>
                                    <td class="span-name" title="山东思索智能技术股份有限公司">山东思索智能技术股份有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_701638">

                                            ￥2995.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.sisuoshop.cn/product/detail/9223" target="_blank">￥3056.13</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-701658">
                                    </td>
                                    <td class="span-name" title="山东思索智能技术股份有限公司">山东思索智能技术股份有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_701658">

                                            ￥3200.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.sisuoshop.cn/product/detail/9225" target="_blank">￥3265.31</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-710905">
                                    </td>
                                    <td class="span-name" title="日照吉星电子科技有限公司">日照吉星电子科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_710905">

                                            ￥2900.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://jixingshop.com/zhengcai/goods/details/597" target="_blank">￥3000.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-727811">
                                    </td>
                                    <td class="span-name" title="临沂澳利电子科技有限公司">临沂澳利电子科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_727811">

                                            ￥2999.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.linyiaoli.com/goods.php?id=1637" target="_blank">￥3060.21</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-822188">
                                    </td>
                                    <td class="span-name" title="枣庄市卓尔建商贸有限公司">枣庄市卓尔建商贸有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_822188">

                                            ￥2900.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.zhuoerjian.com/zhengcai/goods/details/30850" target="_blank">￥3000.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-822199">
                                    </td>
                                    <td class="span-name" title="枣庄市卓尔建商贸有限公司">枣庄市卓尔建商贸有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_822199">

                                            ￥2999.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.zhuoerjian.com/zhengcai/goods/details/30855" target="_blank">￥3060.21</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-822202">
                                    </td>
                                    <td class="span-name" title="枣庄市卓尔建商贸有限公司">枣庄市卓尔建商贸有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_822202">

                                            ￥2999.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.zhuoerjian.com/zhengcai/goods/details/30854" target="_blank">￥3062.21</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-822207">
                                    </td>
                                    <td class="span-name" title="枣庄市卓尔建商贸有限公司">枣庄市卓尔建商贸有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_822207">

                                            ￥3200.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.zhuoerjian.com/zhengcai/goods/details/30865" target="_blank">￥3350.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-878081">
                                    </td>
                                    <td class="span-name" title="济南佳联电讯设备有限公司">济南佳联电讯设备有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_878081">

                                            ￥2990.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://jnjLsc.cn/Home/Goods/goods/id/40.html" target="_blank">￥3060.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1003819">
                                    </td>
                                    <td class="span-name" title="山东圣励电子科技有限公司">山东圣励电子科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1003819">

                                            ￥2880.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        ￥3200.00

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1026806">
                                    </td>
                                    <td class="span-name" title="山东冠宸信息科技有限公司">山东冠宸信息科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1026806">

                                            ￥2999.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.sdguanchen.com/goods.php?id=83" target="_blank">￥3060.21</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1080248">
                                    </td>
                                    <td class="span-name" title="枣庄市隆丰电子科技有限公司">枣庄市隆丰电子科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1080248">

                                            ￥2999.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.zzlongfeng.com/goods.php?id=1711" target="_blank">￥3060.21</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1120982">
                                    </td>
                                    <td class="span-name" title="东营市恒泰商贸有限责任公司">东营市恒泰商贸有限责任公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1120982">

                                            ￥3070.17
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.htscmall.com/Goods/Detail2/296260" target="_blank">￥3699.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1121100">
                                    </td>
                                    <td class="span-name" title="东营市恒泰商贸有限责任公司">东营市恒泰商贸有限责任公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1121100">

                                            ￥2904.17
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.htscmall.com/Goods/Detail2/296247" target="_blank">￥3499.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1122190">
                                    </td>
                                    <td class="span-name" title="东营市恒泰商贸有限责任公司">东营市恒泰商贸有限责任公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1122190">

                                            ￥3070.17
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.htscmall.com/Goods/Detail2/296186" target="_blank">￥3699.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1152289">
                                    </td>
                                    <td class="span-name" title="临沂星旭网络科技有限公司">临沂星旭网络科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1152289">

                                            ￥3200.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://lyxxwl.com/zhengcai/goods/details/634" target="_blank">￥3350.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1157489">
                                    </td>
                                    <td class="span-name" title="耘创（山东）数字科技有限公司">耘创（山东）数字科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1157489">

                                            ￥2800.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_512777" target="_blank">￥2999.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1162138">
                                    </td>
                                    <td class="span-name" title="山东华章电子商务有限公司">山东华章电子商务有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1162138">

                                            ￥2980.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://sdhzdz.cn/goods.php?id=2078" target="_blank">￥3056.13</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1167447">
                                    </td>
                                    <td class="span-name" title="淄博麦田网络科技有限公司">淄博麦田网络科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1167447">

                                            ￥2999.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://maitianwangluo.com/Home/Goods/goods/id/143.html" target="_blank">￥3060.21</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1171549">
                                    </td>
                                    <td class="span-name" title="济南海天世纪电子科技有限公司">济南海天世纪电子科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1171549">

                                            ￥3200.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.jnhtsj.cn/goods.php?id=709" target="_blank">￥3325.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1212144">
                                    </td>
                                    <td class="span-name" title="兰陵县创安电子科技有限公司">兰陵县创安电子科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1212144">

                                            ￥3200.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.cadzkj.com/zhengcai/goods/details/990" target="_blank">￥3350.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1447508">
                                    </td>
                                    <td class="span-name" title="临沂金瑞信息技术有限公司">临沂金瑞信息技术有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1447508">

                                            ￥2900.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://linyijinrui.com/zhengcai/goods/details/531" target="_blank">￥3000.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1484866">
                                    </td>
                                    <td class="span-name" title="临沂瑞辰办公用品有限公司">临沂瑞辰办公用品有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1484866">

                                            ￥2904.17
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.lyznbg.com/goods.php?id=426" target="_blank">￥3499.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1493452">
                                    </td>
                                    <td class="span-name" title="济南章杰电讯工程有限公司">济南章杰电讯工程有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1493452">

                                            ￥2900.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://jnzhangjie.com/zhengcai/goods/details/665" target="_blank">￥3000.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1521879">
                                    </td>
                                    <td class="span-name" title="滕州理信数码办公设备有限公司">滕州理信数码办公设备有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1521879">

                                            ￥2900.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://www.tzlxsm.com/goods.php?id=789" target="_blank">￥3480.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1529064">
                                    </td>
                                    <td class="span-name" title="济南芳卓信息科技有限公司">济南芳卓信息科技有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1529064">

                                            ￥2900.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://jnfzxi.cn/Home/Goods/goods/id/132.html" target="_blank">￥3200.00</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="round">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/weixuan.png" alt="" class="checked" id="contrastListDl-1547467">
                                    </td>
                                    <td class="span-name" title="山东创彩智能工程有限公司">山东创彩智能工程有限公司</td>
                                    <td class="span-price span-price1">

                                        <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1547467">

                                            ￥3200.00
                                        </a>
                                    </td>
                                    <td class="span-price span-price2">

                                        <a href="http://sdccsc.cn/Home/Goods/goods/id/22.html" target="_blank">￥3350.00</a>

                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-------------------------nav end---------------------------------->

            <!-------------------------detail start---------------------------------->
            <div class="goods-show clearfix w">
                <!-- 左侧展示 -->
                <div class="show-left fl">
                    <!-- 商品推荐 -->
                    <div class="recommend" id="recommend-box">

                        <h2><img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/goods-list-images/recommend.png" alt="">商品推荐</h2>
                        <ul class="recommend-list clearfix">

                            <li>
                                <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1554149">
                                    <div class="recommend-pic">
                                        <img src="http://www.hexuu.com/images/202003/goods_img/0_P_1584728785764.jpg" alt="">
                                    </div>
                                    <div class="recommend-wrods">
                                        <p>★柯尼卡美能达/Konica Minolta  复合机 bizhub 246 A3黑白 网络打印/复印/扫描</p>
                                        <p class="price">￥9299.00</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1553990">
                                    <div class="recommend-pic">
                                        <img src="http://www.hexuu.com/images/202003/goods_img/0_P_1584728785764.jpg" alt="">
                                    </div>
                                    <div class="recommend-wrods">
                                        <p>★柯尼卡美能达/Konica Minolta  复合机 bizhub 246 A3黑白 网络打印/复印/扫描</p>
                                        <p class="price">￥9299.00</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1552417">
                                    <div class="recommend-pic">
                                        <img  src="http://zbxdshop.cn/Public/upload/goods/thumb/113/goods_thumb_113_180_180.jpg" alt="">
                                    </div>
                                    <div class="recommend-wrods">
                                        <p>e-STUDIO2610AC</p>
                                        <p class="price">￥20800.00</p>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- 排行榜 -->
                    <div class="ranking" id="ranking-box">

                        <h2><img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/goods-list-images/ranking.png" alt="">商品排行</h2>
                        <ul class="ranking-list clearfix">

                            <li>
                                <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_271805">
                                    <div class="ranking-top">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/goods-list-images/top1.png" alt="">
                                    </div>
                                    <div class="ranking-pic">
                                        <img  src="http://www.shandongyunpin.com/images/202006/thumb_img/24810_thumb_G_1593391997825.jpg" alt="">
                                    </div>
                                    <div class="ranking-wrods">
                                        <p>惠普（HP）M437dn 桌面级 自动双面 打印 A3数码复合机</p>
                                        <p class="price">￥5005.00</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_1159515">
                                    <div class="ranking-top">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/goods-list-images/top2.png" alt="">
                                    </div>
                                    <div class="ranking-pic">
                                        <img  src="http://www.thldfw.com/Storage/Shop/1/Products/14456/1.png" alt="">
                                    </div>
                                    <div class="ranking-wrods">
                                        <p>理光（Ricoh）M 2701 A3黑白数码复合机（主机+送稿器+单纸盒）（27页/分钟/彩色复印 /彩色扫描/自动双面输稿器）</p>
                                        <p class="price">￥7500.00</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_198|p_561913">
                                    <div class="ranking-top">
                                        <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/goods-list-images/top3.png" alt="">
                                    </div>
                                    <div class="ranking-pic">
                                        <img  src="https://resource.donvv.com/1/GoodsPhoto/2020/3/24/fa8b972e4ae3c1a6be74e74742dbdd14.jpg!w250" alt="">
                                    </div>
                                    <div class="ranking-wrods">
                                        <p>佳能（Canon）iRC3125 A3彩色数码复合机（双面打印/复印/扫描/WiFi）含双面 双输 原装底柜</p>
                                        <p class="price">￥18000.00</p>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- 右侧展示 -->
                <div class="show-right fr">
                    <ul class="title clearfix">
                        <li ><span class="span-item">商品详情</span></li>
                        <li class="active"><span class="span-item">规格参数</span></li>
                        <li><span class="span-item">用户评价</span></li>
                        <!--<li><span class="span-item">成交记录</span></li>-->
                        <!-- <li><span class="span-item">服务承诺</span></li> -->
                        <!--<li><span class="span-item">价格趋势</span></li>-->
                        <!--<li><span class="span-item">联系人列表</span></li>-->
                        <li><span class="span-item">节能环保</span></li>
                    </ul>
                    <div class="parameter clearfix">
                        <!-- 核心参数 -->
                        <div class="key-parameter act" id="key-box">

                            <h1><span>核心参数</span></h1>
                            <div class="more-detail" v-html="product.param"></div>
                            <div class="detail-div" v-html="product.introduction">

                            </div>
                        </div>
                        <!-- 规格参数 -->
                        <div class="specifications" id="specifications-box">


                            <div class="specifications-detail">
                                <div class="specifications-item">

                                    <table class="Ptable">
                                        <tbody><tr>
                                            <th colspan="2">基本参数</th>
                                        </tr>

                                        <tr>
                                            <td class="tdTitle">品牌</td>
                                            <td>{{product.brand_name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="tdTitle">型号</td>
                                            <td>{{product.model}}</td>
                                        </tr>

                                        </tbody></table>

                                </div>
                            </div>

                        </div>
                        <!-- 用户评价 -->
                        <div class="user-review" id="review-box">

                            <h1><span>用户评价</span></h1>
                            <ul class="review-content clearfix">

                                <div class="textCenter">暂无评价</div>

                            </ul>
                        </div>
                        <!-- 成交记录 -->
                        <!--<div class="record" id="record-box">-->

                            <!--<h1><span>成交记录</span></h1>-->
                            <!--<table border="1" cellspacing="0" cellpadding="0">-->
                                <!--<thead>-->
                                <!--<tr>-->
                                    <!--<td>成交时间</td>-->
                                    <!--<td>采购单位</td>-->
                                    <!--<td>成交价（元）</td>-->
                                    <!--<td>成交数量</td>-->
                                    <!--<td>成交总价（元）</td>-->
                                <!--</tr>-->
                                <!--</thead>-->
                                <!--<tbody>-->

                                <!--</tbody>-->
                            <!--</table>-->
                        <!--</div>-->
                        <!-- 服务承诺 -->
                        <!-- <div class="service-promise" id="promise-box">
                        </div> -->
                        <!-- 价格趋势 -->
                        <!--<div class="price-movement">-->
                            <!--<h1><span>价格趋势</span></h1>-->
                            <!--<div id="main" class="price-trend" _echarts_instance_="ec_1617545310957" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; overflow: hidden; width: 800px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="800" height="400" style="position: absolute; left: 0px; top: 0px; width: 800px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>-->
                        <!--</div>-->
                        <!-- 联系人列表 -->
                        <!--<div class="linkman" id="contacts">-->

                            <!--<h1>-->
        <!--<span class="contactsInfo">-->

        <!--电商信息-->

        <!--</span>-->
                            <!--</h1>-->
                            <!--<div class="link-Main">-->

        <!--<span>-->

            <!--电商名称：-->

            <!--<b class="mallName">耘创（山东）数字科技有限公司</b>-->
        <!--</span>-->
                                <!--<span>-->

            <!--电商所在地：-->


            <!--<b class="regDetailAddress">济南市</b>-->
            <!--<i class="query-icon queryTip" title="市中区纬二路66号2号楼3F-002室">?</i>-->

        <!--</span>-->
                                <!--<span>-->
            <!--服务团队：-->

           <!--<i id="team-30455" data-code="emall" class="team-span">-->

            <!--查看详情</i>-->
        <!--</span>-->

                            <!--</div>-->

                            <!--&lt;!&ndash; 代理商信息(地区) &ndash;&gt;-->
                            <!--<div class="agentList" id="agentList">-->
                            <!--</div>-->
                        <!--</div>-->
                        <!-- 节能环保 -->
                        <div class="energy key-parameter" id="energyBox">
                            <h1><span>节能资质</span></h1>
                            <div class="more-detail">
                                <span>主机节能证书编号：</span>
                                <span>主机证书有效期止：</span><br>


                            </div>
                            <span class="energySaveCertAnnex">




                            </span>
                        </div>
                    </div>
                    <!-- 价格说明 -->
                    <div class="explain clearfix">
                        <h3>
                            <img src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/images/product-images/jiage.png" alt="">价格说明:
                        </h3>
                        <ul class="explain-main clearfix">
                            <li><span></span>本网价格：供应商在山东省政府采购网上商城出售该商品的价格。</li>
                            <li><span></span>电商平台价：电商自营平台价格</li>
                            <li><span></span>市场参考价：以主流电商平台和其他省市政府采购网上商城中同款商品近期成交均价为基础，结合政采行业成本科学计算而成，作为政府采购参考价。</li>
                            <li><span></span>成交均价：该商品在山东省政府采购网上商城成交平均价。</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-------------------------detail end---------------------------------->


            <div class="container">
                <router-view></router-view>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                productId: 0,
                api: '/api/product/detail?id=',

                product: {
                    attributes: "[]",
                    brandNO: null,
                    brand_name: "Comix/齐心",
                    case: null,
                    category: "15894",
                    category_path: "Y15889-E15894",
                    code_69: null,
                    compID: "YI20210304",
                    created_at: "2021-03-29T09:19:41.000000Z",
                    del_state: 0,
                    deleted_at: "2021-03-29 17:19:41",
                    goods_date: null,
                    goods_number: null,
                    id: 77,
                    image_path: "https://resource.donvv.com/1/GoodsPhoto/2020/1/14/75c459af0dc37bc20b6fc1e4230ec1dc.jpg",
                    images: '[{"path":"https:\/\/resource.donvv.com\/1\/GoodsPhoto\/2020\/1\/14\/75c459af0dc37bc20b6fc1e4230ec1dc.jpg","order":0}]',
                    introduction: '<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p><img src="https://resource.donvv.com/1/GoodsPhoto/2020/1/14/93bfee539f6f2675d0d4f74d69b9f82a.jpg"/></p><p><img src="https://resource.donvv.com/1/GoodsPhoto/2020/1/14/f1fb16bfad475c3be40e660d8c3c1517.jpg"/></p><p><img src="https://resource.donvv.com/1/GoodsPhoto/2020/1/14/ba9706255b65eb3e5aed863b0bb035df.jpg"/></p><p><img src="https://resource.donvv.com/1/GoodsPhoto/2020/1/14/7f5b3f5dae8414cd30d7462f0a455420.jpg"/></p><p><img src="https://resource.donvv.com/1/GoodsPhoto/2020/1/14/d2c49c3d3d4324a070acd17675464347.jpg"/></p><p><img src="https://resource.donvv.com/1/GoodsPhoto/2020/1/14/c20591fef010e6c745341cf188959c26.jpg"/></p><p><img src="https://resource.donvv.com/1/GoodsPhoto/2020/1/14/0d0b359574291995d61c966be0f71ca4.jpg"/></p><p><img src="https://resource.donvv.com/1/GoodsPhoto/2020/1/14/f6ab4107290ec417d84f6b2fa0971d05.jpg"/></p>',
                    lock_stock_num: 0,
                    mall_price: "0.42",
                    model: "C4784",
                    name: "齐心（COMIX）晶纯高速王打印 A4复印纸 C4784 A4 80g 500张/包 单包",
                    param: "<table><tr><td>品牌</td><td>OLOEY</td></tr><tr><td>类型</td><td>复印纸</td></tr><tr><td>包装</td><td>500张/包</td></tr></table>",
                    platNO: "ZF00004",
                    price: "0.40",
                    product_area: null,
                    purity: null,
                    sale_actives: 0,
                    service: null,
                    sku: "YZS1615859163",
                    state: 2,
                    stock_num: 100,
                    unit: null,
                    upc: null,
                    updated_at: "2021-03-29T09:19:41.000000Z",
                    url: "http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/html/product.html?c_145|p_1043691",
                    ware: null,
                    weight: "0.00",
                    company: {
                        id: 0,
                        compID: '',
                        compName: '',
                    }
                }
            }
        },
        created() {
            this.productId = this.$route.query.id;
            axios.get(this.api + this.$route.query.id).then(res => {
                this.product = res.data;
                this.product.introduction += "<style>img { width: 100% }</style>"
            })

            console.log(this.$route.query)
        },

        watch: {
            $route() {
                $("#navbarCollapse").collapse("hide");
            },
        },
    };
</script>
<!--<style scoped src="http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/css/public.css"></style>-->
<style scoped>
    .detail-div img {
        width: 100%
    }

    @import url('http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/css/public.css');
    @import url('http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/css/base.css');
    @import url('http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/css/product.css');
    @import url('http://ggzyjyzx.shandong.gov.cn/wssc/sdszfcg/mall/assets/css/magnifier.css');





</style>