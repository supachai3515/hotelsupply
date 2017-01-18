
<section class="slider-category-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- breadcrumbs start-->
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="<?php echo base_url(); ?>">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>สถาะนะสินค้า</li>
                    </ul>
                </div>
                <!-- breadcrumbs end-->
                <div style="padding-bottom: 30px;"></div>
                <div class="row">
                     <div class="col-md-4">
                        <p class="text-center">
                            <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                            </span>
                            <strong class="text-success">สั่งซื้อสำเร็จ</strong> 
                        </p>
                     
                     </div>
                     <div class="col-md-4">
                        <p class="text-center">
                           
                            <?php if ($order['order_status_id']>1): ?>
                                <span class="fa-stack fa-5x">
                                  <i class="fa fa-circle fa-stack-2x text-success"></i>
                                  <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                                </span>
                                <strong class="text-success">ชำระเงินสำเร็จ</strong> 
                            <?php else: ?>
                                <span class="fa-stack fa-5x">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-money fa-stack-1x fa-inverse" style="color: #FFF;"></i>
                                </span>
                                <strong class="">รอการชำระเงิน</strong> 
                            <?php endif ?>
                        </p>
                     
                     </div>
                     <div class="col-md-4">
                        <p class="text-center">
                         <?php if ($order['order_status_id'] == 4): ?>

                            <span class="fa-stack fa-5x">
                                  <i class="fa fa-circle fa-stack-2x text-success"></i>
                                  <i class="fa fa-truck fa-stack-1x fa-inverse"></i>
                            </span>
                            <strong class="text-success">จัดส่งเรียบร้อย</strong> 
                        <?php else: ?>

                            <span class="fa-stack fa-5x">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-truck fa-stack-1x fa-inverse" style="color: #FFF;"></i>
                            </span>
                            <strong class="">รอการจัดส่ง</strong>

                        <?php endif ?>
                            
                        </p>
                     
                     </div>
                 </div>
                 <div style="padding-bottom: 30px;"></div>
                 <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                เลขที่ใบสั่งซื้อ #<?php echo $order['id']; ?>
                            </h3>
                            </div>
                            <div class="panel-body">
                                <strong>สั่งเมื่อวันที่ <?php echo $order['date']?></strong>
                                <br/>
                                <span>กรุณาชำระเงินภายใน 3 วัน </span>
                                <br/>
                                <br/>
                                <a target="_blank" class="btn btn-success" href="<?php echo base_url('invoice/'.$order['ref_id']) ?>" role="button">
      
                                 ดูใบสั่งซื้อ
                                </a>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">ที่อยู่สำหรับจัดส่งสินค้า</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    ชื่อ : <?php echo $order["name"];?>
                                    <br/> ที่อยู่ :  <?php echo $order["address"];?> 
                                    <br/> โทร : <?php echo $order["tel"];?>
                                    <br/> Email: 
                                    <?php echo $order["email"];?>
                                    <br/> ประเภทการจักส่ง : 
                                    <?php echo $order["shipping"];?>
                                    <?php if (isset($order["trackpost"])): ?> , tracking:
                                    <?php echo $order["trackpost"];?>
                                    <?php endif ?>
                                </p>
                            </div>
                        </div>
                        <?php if($order['is_tax'] == 1 ) { ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">ที่อยู่สำหรับออกใบกำกับภาษี</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    ชื่อ :
                                    <?php echo $order["name"];?>
                                    <br/> ชื่อบริษัท / ร้าน :
                                    <?php echo $order["tax_company"];?>
                                    <br/> ที่อยู่ :
                                    <?php echo $order["tax_address"];?>
                                    <br/> เบอร์ติดต่อ :
                                    <?php echo $order["tel"];?>
                                    <br/> อีเมล์ :
                                    <?php echo $order["email"];?>
                                    <br/> เลขประจำตัวผู้เสียภาษี:
                                    <?php echo $order["tax_id"];?>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-8">
                        <?php if($order['customer_id'] != ""){ ?>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h4>สมาชิก Dealer</h4>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <td class="">รายละเอียด</td>
                                                <td class="text-center sumpricepernum">ราคาต่อชิ้น</td>
                                                <td class="text-center">จำนวน</td>
                                                <td class="text-right">ราคารวม</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($order_detail as $value): ?>
                                            <tr>
                                                <td class="lineover">
                                                    sku :
                                                    <?php echo $value['sku'] ?>
                                                    <br/>
                                                    <a target="_blank" href="<?php echo base_url("product/".$value['slug']) ?>">
                                                        <?php echo $value['name'] ?>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo number_format($value['price_order'],2) ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $value["quantity"];?>
                                                </td>
                                                <td class="text-right">
                                                    <?php echo number_format($value['price_order']*$value["quantity"],2);?>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-8">
                                <table class="table table-condensed">
                                    <tbody class="text-right">
                                         <tr>
                                                <td colspan="3" class="text-right">รวมราคาสินค้า</td>
                                                <td class="highrow text-right">
                                                    <?php echo number_format($order['total'] - $order['vat'] - $order['shipping_charge'],2);?>&nbsp;บาท</td>
                                            </tr>
                                            
                                            <?php if ($order["vat"] > 0): ?>
                                                <tr>
                                                      <td colspan="3" class="emptyrow text-right">
                                                        <?php if($order["is_tax"]==0){echo "VAT(0%)";}else{echo "VAT(7%)";} ?>
                                                    </td>
                                                    <td class="emptyrow text-right">
                                                        <?php if($order["is_tax"]==0){echo "0.00";}else{echo number_format($order["vat"],2);} ?>&nbsp;บาท</td>
                                                </tr>
                                            <?php endif ?>
                                              
                                            <tr>
                                                <td colspan="3" class="emptyrow text-right">ค่าจัดส่ง</td>
                                                <td class="emptyrow text-right">90.00&nbsp;บาท</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="emptyrow text-right">รามราคาสุทธิ</td>
                                                <td class="emptyrow text-right text-danger"><strong><?php echo number_format($order["total"],2);?>&nbsp;บาท</strong></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">การชำระเงิน</h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php echo $this->config->item('payment_transfer') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="padding-bottom: 50px;"></div>

