<!-- grid-product-tab-start -->
<div id="grid" class="tab-pane fade active in">
    <?php $i=1; foreach ($product_list as $row): ?>
        <?php 
            $image_url="";
            if($row['image'] != "") {
                $image_url = $this->config->item('url_img').$row['image'];
            }
            else { $image_url = $this->config->item('no_url_img');
            }

            $price = $row["price"];
            $disprice = $row["dis_price"];

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
        <div class="item-product"><a href="<?php echo base_url('product/'.$row['id']) ?>">
                <img src="<?php echo $image_url;?>" class="img-responsive img-thumbnail" alt="Image"></a>
            <div class="item-product-info">
                 <p>
                        <h4 class="text-center item-product-title">
                        <?php echo $row['type_name']; ?> <?php echo $row['brand_name']; ?> 
                        <a href="<?php echo base_url('product/'.$row['id']) ?>">
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