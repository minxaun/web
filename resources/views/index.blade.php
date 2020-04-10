@extends('layouts.master')
@section('content')
    <!--    nav    -->
    <div id="nav_container" class="nav_container">
      <div class="nav clearfix">
              <span id="nav_welcome">HI,歡迎光臨<span class="green">欣亞排排購</span></span>
            <span id="nav_location">目前離您最近的為     <span class="fa fa-map-marker green"> </span> <span class="store">台中市英才店</span></span>
            <span id="nav_account"> | <a href="#">免費登錄</a> <a href="#">會員登入</a> <a href="#">我的帳戶</a></span>
            <span id="nav_link"><a href="#" class="truck"><span>[全館滿499免運費] <i class="fa fa-truck"></i></span></a> <a href="#">手機版</a></span>

      </div>
    </div>


    <!--    header + search bar    -->
    <div id="header_container" class="clear">
        <div id="header">
              <h1 id="logo"><a href="index.html"><img src="images/logo.jpg" title="欣亞排排購" alt="欣亞排排購" /></a></h1>
            <div id="search_bar">
               <form method="get" action="search_result.html">
                <div id="search_input">
                    <select name="" size="1">
                      <option value="">所有產品
                      <option value="">手機／門號手機／手機週邊
                      <option value="">平板電腦／皮套／平板週邊
                      <option value="">筆記型電腦／筆電週邊／背包
                      <option value="">桌上型電腦／LCD／桌機週邊
                      <option value="">CPU／主機板／零組件
                      <option value="">品牌旗鑑館
                      <option value="">福利專區
                    </select>
                    <input name="搜尋" type="text" />
                    <button type="submit">搜尋</button>
                </div>
                <div id="quick_search_link"><span class="hot">[熱門]</span> <a href="#">CoolerMaster</a> |    <a href="#">無敵菜單</a> |    <a href="#">Galaxy</a> |    <a href="#">buffalo</a> | <a href="#">暗黑3</a> | <a href="#">Sony</a></div>
               </form>
            </div>
        </div>
    </div>

    {{-- <!--         quick_menu          -->
    <div id="quick_menu" class="message_s">
        <div class="quick_menu_con">
           <div class="quick_menu_message"><a href="#"><img src="images/message_s.jpg" alt="圖片說明" title="圖片說明"/></a></div>
        </div>
    </div> --}}


    <!--         vertical_menu          -->
    <div id="vertical_menu">
         <div class="vertical_menu_con">
            <div class="v v_cart"><a href="#"><span class="fa fa-shopping-cart"></span><span class="value">999</span><span class="tooltxt">購物車</span></a></div>
               <div class="v v_compare"><a href="#"><span class="fa fa-align-justify"></span><span class="value">10</span><span class="tooltxt">比較表</span></a></div>
            <div class="v v_esheet"><a href="#"><span class="fa fa-file-text-o"></span><span class="value">0</span><span class="tooltxt">估價單</span></a></div>
            <div class="v v_eye"><a href="#"><span class="fa fa-heart"></span><span class="value">10</span><span class="tooltxt">追蹤清單</span></a></div>
            <div class="v_top"><a href="javascript:;" class="gototop"><span class="fa fa-angle-up"></span><span class="tooltxt">TOP</span></a></div>
        </div>
    </div>


    <!--    主內容     -->
    <div id="wrapper">
    <div class="sinya_help clearfix">
            <div class="sinya_promise_icon">
                  <a href="#"><img src="images/func05.png"/>我要反應／聯絡客服</a>
            </div>
    </div>
    <div id="search_banner_container" class="clearfix">
          <a href="#"><img src="images/banner_1200x150.jpg"/></a>
    </div>
      <!--    main content  -  篩選條件   -->
    <div id="search_condition_container" class="clearfix">
          <div class="bread"><a href="#">首頁</a> &gt; <a href="#">筆記型電腦</a> &gt; <span class="cat_add_rem">分類一:項目名稱<span class="fa fa-times"></span></span>  <span class="cat_add_rem">分類二:項目名稱<span class="fa fa-times"></span></span>  <span class="cat_add_rem">分類二:項目名稱<span class="fa fa-times"></span></span>  <span class="cat_add_rem">分類二:項目名稱<span class="fa fa-times"></span></span>  <span class="cat_add_rem">分類二:項目名稱<span class="fa fa-times"></span></span> &gt; <input type="text" value="在此結果下搜尋" /><a class="search_btn">搜尋</a></div>
        <div class="search_condition_con">
            <h3><i class="fa fa-1x5 fa-child"></i>快搜小幫手說明</h3>
            <div class="search_attr search_top_line clearfix">
                <div class="attr_title">品牌</div>
                <div class="attr_list brand">
                    <ul>
                        <li><input name="brand" id="brand" type="checkbox" value="acer" /><img src="images/icon_brand_acer.jpg" /></li>
                        <li><input name="brand" id="brand" type="checkbox" value="asus"/><img src="images/icon_brand_asus.jpg" /></li>
                        <li><input name="brand" id="brand" type="checkbox" value="dell"/><img src="images/icon_brand_dell.jpg" /></li>
                        <li><input name="brand" id="brand" type="checkbox" value="hp"/><img src="images/icon_brand_hp.jpg" /></li>
                        <li><input name="brand" id="brand" type="checkbox" value="lenovo"/><img src="images/icon_brand_lenovo.jpg" /></li>
                        <li><input name="brand" id="brand" type="checkbox" value="msi"/><img src="images/icon_brand_msi.jpg" /></li>
                        <li><input name="brand" id="brand" type="checkbox" value="toshiba"/><img src="images/icon_brand_toshiba.jpg" /></li>
                    </ul>
                      </div>
            </div>
            <div class="search_attr clearfix">
                <div class="attr_title">價格</div>
                <div class="attr_list">
                     <div class="attr_list_more_btn"><a href="#" id="b1"><i class="fa fa-plus-square"></i></a></div>
              <ul>
                        <li><input name="price" id="price" type="checkbox" value="12000" />12000元以下</li>
                        <li><input name="price" id="price" type="checkbox" value="15000" />12001元 ~ 15000元</li>
                        <li><input name="price" id="price" type="checkbox" value="18000" />15001元 ~ 18000元</li>
                        <li><input name="price" id="price" type="checkbox" value="21000" />18001元 ~ 21000元</li>
                        <li><input name="price" id="price" type="checkbox" value="24000" />21001元 ~ 24000元</li>
                        <li><input name="price" id="price" type="checkbox" value="27000" />24001元 ~ 27000元</li>
                    </ul>
              <ul class="attr_list_more">
                        <li><input name="price" id="price" type="checkbox" value="30000" />27001元 ~ 30000元</li>
                        <li><input name="price" id="price" type="checkbox" value="33000" />30001元 ~ 33000元</li>
                        <li><input name="price" id="price" type="checkbox" value="33001" />33001元以上</li>
                    </ul>

                </div>
            </div>
            <div class="search_attr clearfix">
                <div class="attr_title">功能導向</div>
                <div class="attr_list">
                    <ul>
                        <li><input type="checkbox" />行動商務</li>
                        <li><input type="checkbox" />遊戲電競</li>
                        <li><input type="checkbox" />文書上網 </li>
                        <li><input type="checkbox" /> 輕薄時尚</li>
                        <li><input type="checkbox" />影音娛樂</li>
                        <li><input type="checkbox" />銀髮族大尺寸</li>
                    </ul>
                </div>
            </div>
            <div class="search_attr clearfix">
                <div class="attr_title">螢幕尺寸</div>
                <div class="attr_list">
                    <ul>
                        <li><input type="checkbox" />11吋以下</li>
                        <li><input type="checkbox" />12吋~13吋</li>
                        <li><input type="checkbox" />14吋</li>
                        <li><input type="checkbox" />15吋</li>
                        <li><input type="checkbox" />17吋以上</li>
                    </ul>
                </div>
            </div>
            <div class="search_attr clearfix">
                <div class="attr_title">處理器種類</div>
                <div class="attr_list">
                    <ul>
                        <li><input type="checkbox" />Intel Core i7</li>
                        <li><input type="checkbox" />Intel Core i5</li>
                        <li><input type="checkbox" />Intel Core i3</li>
                        <li><input type="checkbox" />Intel Pentium 雙核心</li>
                    </ul>
                </div>
            </div>
            <!--  更多選項 -->
            <div class="more_search_attr">
            <div class="search_attr clearfix">
                <div class="attr_title">硬碟大小</div>
                <div class="attr_list">
                    <ul>
                        <li><input type="checkbox" />1TB以上</li>
                        <li><input type="checkbox" />750G</li>
                        <li><input type="checkbox" />500G</li>
                        <li><input type="checkbox" />320G以下</li>
                        <li><input type="checkbox" /> SSD</li>
                    </ul>
                </div>
            </div>
            <div class="search_attr clearfix">
                <div class="attr_title">作業系統</div>
                <div class="attr_list">
                    <ul>
                        <li><input type="checkbox" />Windows 8</li>
                        <li><input type="checkbox" />Windows 8 Pro</li>
                        <li><input type="checkbox" />無作業系統</li>
                    </ul>
                </div>
            </div>
            <div class="search_attr clearfix">
                <div class="attr_title">重量</div>
                <div class="attr_list">
                    <ul>
                        <li><input type="checkbox" />1.5kg 以下</li>
                        <li><input type="checkbox" />1.6kg~2.0kg</li>
                        <li><input type="checkbox" />2.1kg~2.5kg</li>
                        <li><input type="checkbox" />2.6kg 以上</li>
                    </ul>
                </div>
            </div>
            </div>  <!--end of 更多選項-->
            <div class="more_search_attr_btn"><a href="javascript:toggleAndChange();"><span class="fa fa-chevron-down"></span>更多選項</a></div>

        </div>
      <div class="sinya_promise clearfix">
            <div class="sinya_promise_list">
                  <a href="#"><span><img src="images/func01.png"/></span>一小時快取</a>
                  <a href="#"><span><img src="images/func02.png"/></span>快換中心</a>
                  <a href="#"><span><img src="images/func03.png"/></span>檢測&amp;代送</a>
                  <a href="#"><span><img src="images/func04.png"/></span>討論區</a>
            </div>
        </div>

    </div>


      <!--    main content  -  篩選列表   -->
    <div id="search_list_container" class="clearfix">
        <div class="search_list_top">
            <div class="list_filter">
                <a href="#" class="selected">人氣<span class="fa fa-caret-down"></span></a>
                <a href="#">新品<span class="fa fa-caret-down"></span></a>
                <a href="#">價格<span class="fa fa-caret-down"></span></a>
                <a href="#">折扣<span class="fa fa-caret-down"></span></a>
                <a href="#" class="selected" id="l_list">大圖<span class="fa fa-th-large"></span></a>
                <a href="#" id="s_list">小圖<span class="fa fa-reorder"></span></a>
            </div>
            <div class="page_s">1 / 28 <a href="#"><span class="fa fa-angle-left"></span></a> <a href="#"><span class="fa fa-angle-right"></span></a></div>
        </div>

        <div class="search_list_item clearfix">
            <ul id="add"></ul>
        </div>
        <div id="pagination" class="page_num">
            <button id="prev">
                上一頁
            </button>
            @for($i=1;$i<=$product->lastPage();$i++)
            <button>{{$i}}</button>
            @endfor
            <button id="next">
                下一頁
            </button> 共{{$product->lastPage()}}頁
        </div>
    </div>
    </div>

      <!--    main content  - 欣新聞    -->
      <div id="sinya_disc_container" class="clearfix">
              <h2>討論區</h2>
            <div class="sinya_disc_list">
                <div class="sinya_disc_admin"><img src="images/pic_sample0.jpg" alt="圖片說明" title="圖片說明"/></div>
                <ul class="clearfix">
                    <li><a href="#"><img src="images/pic_sample1.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample2.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample3.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample4.jpg" alt="圖片說明" title="圖片說明"/></a></li>
    </ul>
                <h3>健康 / Health</h3>
                <div class="sinya_disc_num">168888 人討論</div>
                <div class="sinya_disc_btn"><a href="#"><span class="fa fa-arrow-circle-o-right"> </span></a></div>
            </div>
            <div class="sinya_disc_list">
                <div class="sinya_disc_admin"><img src="images/pic_sample0.jpg" alt="圖片說明" title="圖片說明"/></div>
                <ul class="clearfix">
                    <li><a href="#"><img src="images/pic_sample1.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample2.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample3.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample4.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                </ul>
                <h3>旅行 攝影 / Travel Photo</h3>
                <div class="sinya_disc_num">168888 人討論</div>
                <div class="sinya_disc_btn"><a href="#"><span class="fa fa-arrow-circle-o-right"> </span></a></div>
            </div>
            <div class="sinya_disc_list">
                <div class="sinya_disc_admin"><img src="images/pic_sample0.jpg" alt="圖片說明" title="圖片說明"/></div>
                <ul class="clearfix">
                    <li><a href="#"><img src="images/pic_sample1.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample2.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample3.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample4.jpg" alt="圖片說明" title="圖片說明"/></a></li>
    </ul>
                <h3>職人 / Professional</h3>
                <div class="sinya_disc_num">168888 人討論</div>
                <div class="sinya_disc_btn"><a href="#"><span class="fa fa-arrow-circle-o-right"> </span></a></div>
            </div>
            <div class="sinya_disc_list">
                <div class="sinya_disc_admin"><img src="images/pic_sample0.jpg" alt="圖片說明" title="圖片說明"/></div>
                <ul class="clearfix">
                    <li><a href="#"><img src="images/pic_sample1.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample2.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample3.jpg" alt="圖片說明" title="圖片說明"/></a></li>
                    <li><a href="#"><img src="images/pic_sample4.jpg" alt="圖片說明" title="圖片說明"/></a></li>
    </ul>
                <h3>音樂 / Music</h3>
                <div class="sinya_disc_num">168888 人討論</div>
                <div class="sinya_disc_btn"><a href="#"><span class="fa fa-arrow-circle-o-right"> </span></a></div>
            </div>
      </div>
    </div>

    <div style="display:none">
        <div id="func_btn_con">
            <li>
                <div class="func_btn_con">
                    <div class="func_btn">
                        <div class="v_hope tooltip_list" title="價格報馬仔"><a href="#"><span class="fa fa-eye"></span></a></div>
                        <div class="v_hope tooltip_list" title="加入追蹤"><a href="#"><span class="fa fa-heart"></span></a></div>
                        <div class="v_hope tooltip_list" title="加入規格比較"><a href="#"><span class="fa fa-reorder"></span></a></div>
                        <div class="v_compare tooltip_list" title="他站價格"><a href="#"><span class="fa fa-dollar"></span></a></div>
                        <div class="v_cart tooltip_list" title="加入購物車"><a href="#"><span class="fa fa-shopping-cart"></span></a></div>
                        <div class="v_compare_box">
                            <div class="compare_syna_price">欣亞價格 <strong><ins>$</ins><span>21,000</span></strong></div>
                            <div class="compare_syna_card"><span class="fa fa-angle-right"></span>最高可分 <img src="images/icon_func21.jpg"/> 期零利率</div>
                            <div class="compare_syna_add"><span class="fa fa-angle-right"></span><span class="add_buy">贈</span> 滑鼠、耳機、鍵盤</div>
                            <div class="compare_other"><span class="compare_num1">1</span><span class="other_title">PChome 商店街</span><span class="other_price">$22000</span></div>
                            <div class="compare_other"><span class="compare_num">2</span><span class="other_title">GOHAPPY快樂購物網</span><span class="other_price">$22500</span></div>
                            <div class="compare_other"><span class="compare_num">3</span><span class="other_title">森森購物網</span><span class="other_price">$23000</span></div>
                            <div class="compare_other"><span class="compare_num">4</span><span class="other_title">MOMO購物網</span><span class="other_price">$24000</span></div>
                    </div>
                    </div>
                </div>
                <div class="item_photo"><a href="item_detail.html"><img src="images/pic_item.jpg" alt="圖片說明" title="圖片說明"/></a></div>
                <div class="item_price">
                    <strong><ins>$</ins><span id="price"></span></strong>
                    <del><ins>$</ins><span id="priceTop"></span></del>
                    <div class="p">
                    <span><img src="images/icon_func11.jpg"/></span>
                    <span><img src="images/icon_func12.jpg"/></span>
                    </div>
                </div>
                <div class="item_title"><a href="item_detail.html"></a></div>
            <div class="item_sub_title"><a href="item_detail.html"></a></div>
        </li>
        </div>
    </div>
@endsection
@section('script')
<script>
    $(function(){
        $("input[name='brand']").change(function(){
            //當複選單沒有被選上長度等於零時恢復列表
            if($('input:checkbox:checked[name="brand"]').length == 0 && $('input:checkbox:checked[name="price"]').length == 0){
                list();
            }
            //有幾個複選單被選上
            $('input:checkbox:checked[name="brand"]').each(function(i,data) {
                search(data.value,null);
            });
        })

        $("input[name='price']").change(function(){
            //當複選單沒有被選上長度等於零時恢復列表
            if($('input:checkbox:checked[name="brand"]').length == 0 && $('input:checkbox:checked[name="price"]').length == 0){
                list();
            }
            //有幾個複選單被選上
            $('input:checkbox:checked[name="price"]').each(function(i,data) {
                search(null,data.value);
            });
            // search(null,$(this).val());
        })

        //產品列表
        list();
        //分頁
        $('#pagination #prev').val(1);
        $('#pagination #next').val(2);
        $('button').click(function(){
            $('#add').html('');
            if(!isNaN($(this).text())){
                $text = $(this).text();
            }else{
                $text = $(this).val();
            }
            $.getJSON("{{route('productData')}}?page="+ $text , function(data) {
                    // console.log(data);
                    for(var i=0;i<data.data.length;i++){
                        $('#func_btn_con #price').text(data.data[i].product_price);
                        $('#func_btn_con #priceTop').text(data.data[i].product_price + 10000);
                        $('#func_btn_con .item_title').text(data.data[i].product_title);
                        $('#func_btn_con .item_sub_title').text(data.data[i].product_content);
                        $('#add').html( $('#add').html() + $('#func_btn_con').html());
                    }

                    if($text <= data.last_page){
                        $last_page = data.last_page;
                    }else{
                        $last_page += 1;
                    }

                    if($text == 1){
                        $text = 1;
                    }else{
                        $text -= 1;
                    }

                    $('#pagination #prev').val($text);
                    $('#pagination #next').val($last_page);
            });
        })
    })

    //產品列表
    function list(){
                $.getJSON('{{route('productData')}}?page=1', function(data) {
                    // console.log(data);
                    for(var i=0;i<data.data.length;i++){
                        $('#func_btn_con #price').text(data.data[i].product_price);
                        $('#func_btn_con #priceTop').text(data.data[i].product_price + 10000);
                        $('#func_btn_con .item_title').text(data.data[i].product_title);
                        $('#func_btn_con .item_sub_title').text(data.data[i].product_content);
                        $('#add').html( $('#add').html() + $('#func_btn_con').html());
                    }
                });
            }

    //搜尋
    function search(val,price){
        $('#add').html('');
        $.getJSON('{{route('productData')}}', function(data) {
                //篩選
                var pro_search = $.grep(data.data, function(element, index){
                    var result;
                    switch(price){
                        case '12000':
                            result = element.product_price < 12000;
                            break;
                        case '15000':
                            result = element.product_price > 12001 && element.product_price < 15000;
                            break;
                        case '18000':
                            result = element.product_price > 15001 && element.product_price < 18000;
                            break;
                        case '21000':
                            result = element.product_price > 18001 && element.product_price < 21000;
                            break;
                        case '24000':
                            result = element.product_price > 21001 && element.product_price < 24000;
                            break;
                        case '27000':
                            result = element.product_price > 24001 && element.product_price < 27000;
                            break;
                        case '30000':
                            result = element.product_price > 27001 && element.product_price < 30000;
                            break;
                        case '33000':
                            result = element.product_price > 30001 && element.product_price < 33000;
                            break;
                        case '33001':
                            result = element.product_price > 33001;
                            break;
                    }
                    return (element.product_brand == val || result);
                });
                // console.log(pro_search);
                //篩選完顯示列表
                for(var i=0;i<pro_search.length;i++){
                    $('#func_btn_con #price').text(pro_search[i].product_price);
                    $('#func_btn_con #priceTop').text(pro_search[i].product_price + 10000);
                    $('#func_btn_con .item_title').text(pro_search[i].product_title);
                    $('#func_btn_con .item_sub_title').text(pro_search[i].product_content);
                    $('#add').html( $('#add').html() + $('#func_btn_con').html());
                }
        });
    }
</script>
@endsection
