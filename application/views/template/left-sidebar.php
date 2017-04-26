<div class="left-sidebar">
    <!-- category-menu-area start-->
    <div class="category-menu-area <?php if ($page == "product_detail"): ?> hidden-sm hidden-xs <?php endif ?>">
        <div class="category-title">
            <h2>ประเภทสินค้า</h2>
        </div>
        <div class="category-menu" id="cate-toggle">
            <ul>
                <?php foreach ($menu_type as $master): ?>


                <?php  

                    $count_sub = 0;
                    foreach ($menu_sub_type as $sub) {
                       if ($master['id'] == $sub['parenttype_id'] && $sub['name'] !=""){
                        $count_sub++;
                       }
                    }

                ?>
                <?php if ($count_sub == 0): ?>
                    <li>
                        <a href="<?php echo base_url('products/category/'.$master['slug']) ?>">
                            <?php echo $master['name']; ?>
                        </a>
                    </li>
                    
                <?php else: ?>
                    <li class="has-sub">
                        <a href="#">
                            <?php echo $master['name']; ?>
                        </a>
                        <ul class="category-sub">
                            <?php foreach ($menu_sub_type as $sub): ?>
                            <?php if ($master['id'] == $sub['parenttype_id'] && $sub['name'] !=""): ?>
                            <li class="sub-category">
                                <a href="<?php echo base_url('products/category/'.$sub['slug']) ?>">
                                    <?php echo  $sub['name']; ?> <span>(<?php echo $sub['count_product'] ?>)</span></a>
                            </li>
                            <?php endif ?>
                            <?php endforeach ?>
                            <li class="sub-category"><a href="<?php echo base_url('products/category/'.$master['slug']) ?>">ทั้งหมด</a></li>
                        </ul>
                    </li>
                <?php endif ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <!-- category-menu-area end-->
    <!-- category-menu-area start-->
    <div class="category-menu-area <?php if ($page == "product_detail"): ?> hidden-sm hidden-xs <?php endif ?>">
        <div class="category-title title-brand">
            <h2>ยี่ห้อสินค้า</h2>
        </div>
        <div class="category-menu" id="cate-toggle">
            <ul>
                <?php foreach ($menu_brands as $brand): ?>
                <?php if ($brand['name']!="" && $brand['type_id'] !="7"): ?>
                <li>
                    <a href="<?php echo base_url('products/brand/'.$brand['slug']) ?>">
                        <?php echo $brand['name'] ?>
                        <span>(<?php echo $brand['count_product'] ?>)</span>
                    </a>
                </li>
                <?php endif ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <!-- category-menu-area end-->
    <!-- add-banner-slider start-->
    <!-- add-banner-slider start-->
</div>
