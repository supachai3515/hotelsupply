<div class="slider-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="bend niceties preview-2">
                    <div id="ensign-nivoslider-2" class="slides">
                    <?php foreach ($slider_list as $slider): ?>
                        <?php if ($slider['id'] != '4'): ?>
                            <img src="<?php echo $slider['image'] ?>" alt="" title="#slider-direction-<?php echo $slider['id']; ?>" />
                        <?php endif ?>    
                     <?php endforeach ?>  
                    </div>
                    <?php foreach ($slider_list as $slider): ?>
                        <?php if ($slider['id'] != '4'): ?>

                          <!-- direction 1 -->
                            <div id="slider-direction-<?php echo $slider['id']; ?>" class="t-cn slider-direction">
                                <div class="slider-progress"></div>
                                <div class="slider-content t-cn s-tb slider-1">
                                    <div class="title-container s-tb-c title-compress">
                                        <h1 class="animated bounceInDown title1"><?php echo $slider['name'] ?></h1>
                                        <h3 class="title2"><span><?php echo $slider['description'] ?></span></h3>
                                        <p class="desc-layer"> <?php echo $slider['description1'] ?></p>
                                        <a href="<?php echo $slider['link'] ?>" class="link"><?php echo $slider['name_link'] ?></a>
                                    </div>
                                </div>
                            </div>

                        <?php endif ?>    
                     <?php endforeach ?>  
                   
                </div>
            </div>
        </div>
    </div>
</div>
<section class="slider-category-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="left-sidebar">
                    <!-- category-menu-area start-->
                    <div class="category-menu-area">
                        <div class="category-title">
                            <h2>ประเภทสินค้า</h2>
                        </div>
                        <div class="category-menu" id="cate-toggle">
                            <ul>
                                <?php foreach ($menu_type as $master): ?>
                                <li class="has-sub"><a href="#"><?php echo $master['name']; ?><span> (<?php echo $master['count_product'] ?>)</a>
                                    <ul class="category-sub">
                                     
                                            <?php foreach ($brand_oftype as $detail): ?>
                                            <?php if ($master['id'] == $detail['product_type_id'] && $detail['product_brand_name'] !=""): ?>
                                            <li class="sub-category"><a href="<?php echo base_url('products/category_brand/'.$master['slug'].'/'.$detail['product_brand_slug']) ?>"><?php echo  $detail['product_brand_name']; ?></a></li>
                                            <?php endif ?>
                                            <?php endforeach ?>
                                            <li class="sub-category"><a href="<?php echo base_url('products/category/'.$master['slug']) ?>">ทั้งหมด</a></li>
                                    </ul>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    <!-- category-menu-area end-->
                    <!-- category-menu-area start-->
                    <div class="category-menu-area hidden-sm hidden-xs">
                        <div class="category-title title-brand">
                            <h2>ยี่ห้อสินค้า</h2>
                        </div>
                        <div class="category-menu" id="cate-toggle">
                            <ul>
                            <?php foreach ($menu_brands as $brand): ?>
                                <?php if ($brand['name']!="" && $brand['type_id'] !="7"): ?>
                                        <li>
                                    <a href="<?php echo base_url('products/brand/'.$brand['slug']) ?>"><?php echo $brand['name'] ?>
                                    <span>(<?php echo $brand['count_product'] ?>)</span>
                                    </a></li>

                                <?php endif ?>                              
                            <?php endforeach ?>

                            </ul>
                        </div>
                    </div>
                    <!-- category-menu-area end-->
                    <!-- add-banner-slider start-->
                    <div class="add-banner-slider-area hidden-sm hidden-xs">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.6&appId=615663091936505";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="add-banner-carsuol">

                           <div class="fb-page" data-href="https://www.facebook.com/%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%AB%E0%B8%A5%E0%B9%88%E0%B9%82%E0%B8%99%E0%B9%8A%E0%B8%95%E0%B8%9A%E0%B8%B8%E0%B9%8A%E0%B8%84-%E0%B8%88%E0%B8%AD%E0%B9%82%E0%B8%99%E0%B9%8A%E0%B8%95%E0%B8%9A%E0%B8%B8%E0%B9%8A%E0%B8%84-%E0%B9%81%E0%B8%9A%E0%B8%95%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%A3%E0%B8%B5%E0%B9%88-Notebook-bboycomputer-1563145163982000/"  data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%AB%E0%B8%A5%E0%B9%88%E0%B9%82%E0%B8%99%E0%B9%8A%E0%B8%95%E0%B8%9A%E0%B8%B8%E0%B9%8A%E0%B8%84-%E0%B8%88%E0%B8%AD%E0%B9%82%E0%B8%99%E0%B9%8A%E0%B8%95%E0%B8%9A%E0%B8%B8%E0%B9%8A%E0%B8%84-%E0%B9%81%E0%B8%9A%E0%B8%95%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%A3%E0%B8%B5%E0%B9%88-Notebook-bboycomputer-1563145163982000/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%AB%E0%B8%A5%E0%B9%88%E0%B9%82%E0%B8%99%E0%B9%8A%E0%B8%95%E0%B8%9A%E0%B8%B8%E0%B9%8A%E0%B8%84-%E0%B8%88%E0%B8%AD%E0%B9%82%E0%B8%99%E0%B9%8A%E0%B8%95%E0%B8%9A%E0%B8%B8%E0%B9%8A%E0%B8%84-%E0%B9%81%E0%B8%9A%E0%B8%95%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%A3%E0%B8%B5%E0%B9%88-Notebook-bboycomputer-1563145163982000/">อะไหล่โน๊ตบุ๊ค จอโน๊ตบุ๊ค  แบตเตอร์รี่ Notebook - bboycomputer</a></blockquote></div>
                        </div>
                    </div>
                    <!-- add-banner-slider start-->
                </div>
            </div>
            <div class="col-sm-9 col-lg-9 col-md-9">
            <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="product-header">
                                <div class="area-title">
                                    <h2><i class="fa fa-bullhorn" aria-hidden="true"></i> ข่าวสารจากทางร้าน Bboyconputer</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-bottom: 20px;"></div>
                    <div class="col-md-12">
                        <div class="row">

                        <?php foreach ($slider_list as $slider): ?>
                            <?php if ($slider['id'] == '4'): ?>
                                <div class="jumbotron">
                                    <div class="container">
                                        <h1 style="font-size: 22px;"><?php echo $slider['name'] ?></h1>
                                        <p><?php echo $slider['description'] ?></p>
                                        <p>
                                            <a class="btn btn-primary btn-lg" href="<?php echo $slider['link'] ?>"><?php echo $slider['name_link'] ?></a>
                                        </p>
                                    </div>
                                </div>
                            <?php endif ?>    
                        <?php endforeach ?>
                        </div>
                    </div>

                <!-- banner-area start-->
                <div class="banner-area">
                    <div class="row">
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="single-banner">
                                <a href="<?php echo base_url('tracking');?>">
                                        <img src="<?php echo base_url('theme');?>/img/banner/banner-tacking.png" alt="">
                                    </a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="single-banner">
                                <a href="<?php echo base_url('howtobuy');?>">
                                        <img src="<?php echo base_url('theme');?>/img/banner/howtobuy.png" alt="">
                                    </a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="single-banner">
                                <a href="<?php echo base_url('warranty');?>">
                                        <img src="<?php echo base_url('theme');?>/img/banner/warranty.png" alt="">
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- banner-area end-->
                <!-- new products-area start-->
                <div class="newproducts-area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="product-header">
                                <div class="area-title">
                                    <h2>สินค้าใหม่</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-bottom: 20px;"></div>
                    <div class="row">
                        <div class="tab-content">
                            <!-- grid-product-tab-start -->
                            <div id="grid" class="tab-pane fade active in">

                            <?php $i=1; foreach ($product_new as $row): ?>
                                <?php 
                                    $image_url="";
                                    if($row['image'] !="")
                                    {$image_url = $this->config->item('url_img').$row['image'];}
                                    else{ $image_url = $this->config->item('no_url_img');}

                                    $price =0;
                                    $disprice = 0;
                                    if ($this->session->userdata('is_logged_in') && $this->session->userdata('verify') == "1"){

                                        if($row["member_discount"] > 1){
                                            $price = $row["member_discount"];
                                        }
                                        else{
                                            $price = $row["price"];
                                        }
                                        
                                    }
                                    else {
          
                                             $price = $row["price"];
                                    }

                                ?>

                                <div class="col-sm-4 col-lg-4 col-md-4">
                                    <div class="item-product"><a href="<?php echo base_url('product/'.$row['slug']) ?>">
                                        <img src="<?php echo $image_url;?>" class="img-responsive img-thumbnail" alt="Image"></a>
                                         <div class="item-product-info">
                                            <p>
                                                <h4 class="text-center item-product-title">
                                                <?php echo $row['type_name']; ?> <?php echo $row['brand_name']; ?> 
                                                <a href="<?php echo base_url('product/'.$row['slug']) ?>">
                                                 <?php echo $row['name'] ?> <br/> 
                                                 <?php if (isset($row['model'])): ?>
                                                     <small><i class="fa fa-cog" aria-hidden="true"> </i> <?php echo $row['model']; ?></small>
                                                 <?php endif ?>
                                                 </a>
                                                </h4>
                                                <h4 class="text-center"><strong class="text-success" class="amount" ng-bind="<?php echo $price;?> | currency:'฿':0"></strong></h4>
                                                
                                            </p>
                                        </div>
                                        <div class="action-button button-exclusive">
                                            <p class="text-center">
                                                <a href="<?php echo base_url('cart/add/'.$row["id"]) ?>" class="add-to-cart">
                                                    <span>+ สั่งซื้อสินค้า</span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                              <?php if ($i%3 ==0): ?>
                                    <div class="clearfix"></div>
                                <?php endif ?>
                            <?php $i++;  endforeach ?>
                            </div>
                            <!-- grid-product-tab-end -->
                        </div>
                    </div>
                </div>
                <!-- new products-area start-->
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('template/logo'); ?>
