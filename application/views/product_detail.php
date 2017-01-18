<!-- static-right-social-area end-->
<section class="slider-category-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="left-sidebar">
                    <!-- category-menu-area start-->
                    <div class="category-menu-area hidden-sm hidden-xs">
                        <div class="category-title">
                            <h2>ประเภทสินค้า</h2>
                        </div>
                        <div class="category-menu" id="cate-toggle">
                            <ul>
                                <?php foreach ($menu_type as $master): ?>
                                <li class="has-sub">
                                    <a href="#">
                                        <?php echo $master['name']; ?><span> (<?php echo $master['count_product'] ?>)</a>
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
                                    </a>
                                </li>
                                <?php endif ?>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    <!-- category-menu-area end-->
                </div>
            </div>
            <div class="col-sm-9 col-lg-9 col-md-9">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!-- breadcrumbs start-->
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                    <i class="fa fa-angle-right"></i>
                                </li>
                                <li><a href="<?php echo base_url('products'); ?>">สินค้า</a> <i class="fa fa-angle-right"></i></li>
                                <li>
                                    <?php echo $product_detail['name'] ?>
                                </li>
                            </ul>
                        </div>
                        <!-- breadcrumbs end-->
                        <div class="product-description-area product-overview">
                            <div class="row">
                                <div class="col-sm-5 col-lg-5 col-md-5">
                                    <?php if (count($product_images)==0): ?>
                                    <img width="100%" src="<?php echo $this->config->item('no_url_img');?>" class="img-responsive" alt="Image">
                                    <?php endif ?>
                                    <?php $i= 1; foreach ($product_images as $value): ?>
                                    <?php 
										$image_url="";
										if($value['path'] !="")
										{$image_url = $this->config->item('url_img').$value['path'];}
										else{$image_url = $this->config->item('no_url_img');}
									?>
                                    <?php if ($i==1): ?>
                                    <a class="fancybox-thumb" data-fancybox-group="group" href="<?php echo $image_url;?>">
											<img  width="100%" src="<?php echo $image_url;?>" alt="" /></a>
                                    <br>
                                    <?php else: ?>
                                    <a class="fancybox-thumb" data-fancybox-group="group" href="<?php echo $image_url;?>">
											<img  width="100px" style="padding: 10px 5px" src="<?php echo $image_url;?>" alt="" /></a>
                                    <?php endif ?>
                                    <?php $i++ ; endforeach ?>
                                </div>
                                <div class="col-sm-7 col-lg-7 col-md-7">
                                    <div class="product-description">
                                        <h1 class="product-name">
										<?php echo $product_detail['name'] ?>
									</h1>
                                        <p class="model-condi">
                                            <span><strong>SKU : </strong></span><span> <?php echo $product_detail['sku'] ?></span>
                                            <br>
                                            <?php if (isset($product_detail['model']) && $product_detail['model'] !=''): ?>
                                            <span><strong>MODEL : </strong></span><span> <?php echo $product_detail['model'] ?></span>
                                            <br>
                                            <?php endif ?>
                                            <?php if (isset($product_detail['brand_name'])  && $product_detail['brand_name'] !=''): ?>
                                            <span><strong>BRAND : </strong></span><span> <?php echo $product_detail['brand_name'] ?></span>
                                            <br>
                                            <?php endif ?>
                                        </p>
                                        <p class="product-desc">
                                            <?php echo $product_detail['shot_detail'] ?>
                                        </p>
                                        <p class="pquantityavailable">
                                            <span class="stock-status">
											มีสินค้า
										</span>
                                        </p>
                                        <div class="price-box-area">
                                            <?php 
                             
			                                    $price =0;
			                                    $disprice = 0;
			                                    if ($this->session->userdata('is_logged_in') && $this->session->userdata('verify') == "1"){

			                                        if($product_detail["member_discount"] > 1){
			                                            $price = $product_detail["member_discount"];
			                                        }
			                                        else{
			                                            $price = $product_detail["price"];
			                                        }
			                                        
			                                    }
			                                    else {
			                                         $price = $product_detail["price"];
			                                    }
			                                ?>
                                            <span class="new-price" ng-bind="<?php echo $price;?> | currency:'฿':0"></span>
                                        </div>
                                        <div class="action-button button-exclusive">
                                            <a href="<?php echo base_url('cart/add/'.$product_detail["id"]) ?>" class="add-to-cart">
                                                <span>+ สั่งซื้อสินค้า</span>
                                            </a>
                                        </div>
                                        <div class="btn-group" style="padding-bottom:10px;">
                                            <div class="shere-button">
                                                <a href="https://twitter.com/home?status=<?php echo base_url('product/'.$product_detail['slug']) ?>" target="_blank">
                                                    <i class="fa fa-twitter"></i> Tweet
                                                </a>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('product/'.$product_detail['slug']) ?>" target="_blank">
                                                    <i class="fa fa-facebook"></i> Share
                                                </a>
                                                <a href="https://plus.google.com/share?url=<?php echo base_url('product/'.$product_detail['slug']) ?>" target="_blank">
                                                    <i class="fa fa-google-plus"></i> Google+
                                                </a>
                                                <a href="http://www.reddit.com/submit?url=<?php echo base_url('product/'.$product_detail['slug']) ?>&amp;title=bboycomputer" target="_blank">
                                                    <i class="fa fa-pinterest"></i> Pinterest
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-overview-start -->
                            <div class="product-overview">
                                <div class="product-overview-tab-menu">
                                    <ul>
                                        <li class="active"><a href="#moreinfo" data-toggle="tab">รายละเอียด</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div id="moreinfo" class="tab-pane fade in active">
                                        <div class="rte">
                                            <p>
                                                <?php if (isset($product_detail['detail'])  && $product_detail['detail'] !=''): ?>
                                                <?php echo $product_detail['detail'] ?>
                                                <?php endif ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product-overview-end -->
                    </div>
                </div>
            </div>
        </div>
</section>
<?php $this->load->view('template/logo'); ?>
