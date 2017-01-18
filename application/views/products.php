<!-- static-right-social-area end-->
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
                                <li>สินค้า</li>
                            </ul>
                        </div>
                        <!-- breadcrumbs end-->
                    </div>
                </div>
                <?php if (isset($title_tag)): ?>
                <div class="head-search">

                    <div class="product-description">
                        <h1 class="text-center product-name">
                            <?php echo $title_tag; ?>
                        </h1>
                    </div>
                </div>
                <?php endif ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="toolbar">
                            <div class="pagination-area">
                                <?php if (isset($links_pagination)): ?>
                                <?php echo $links_pagination ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding-bottom: 20px;"></div>
                <div class="row">
                    <div class="tab-content">
                        <!-- grid-product-tab-start -->
                        <div id="grid" class="tab-pane fade active in">
                            <?php $i=1; foreach ($product_list as $row): ?>
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
                                        if ($row["dis_price"] > 0) {
                                            $disprice =$row["dis_price"] ;

                                        }
                                        else{
                                             $price = $row["price"];
                                        }
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
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="toolbar">
                            <div class="pagination-area">
                                <?php if (isset($links_pagination)): ?>
                                <?php echo $links_pagination ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pagination-end -->
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('template/logo'); ?>
