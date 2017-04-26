<section class="contuct-us-form-area">
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
                        <li>แจ้งชำระเงิน</li>
                    </ul>
                </div>
                <!-- breadcrumbs end-->
            </div>
        </div>
        <div class="" style="padding-top:30px;">
            <div class="row">
                <div class="col-sm-6">
                    <form class="form-area" ng-submit="sendPayment()" class="form-horizontal" role="form">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="textinput">ชื่อ</label>
                                <input id="textinput" ng-model="paymentMessage.txtName" name="txtName" type="text" placeholder="ชื่อ" class="form-control input-md" required="required">
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="textinput">เบอร์ติดต่อ</label>
                                <input id="textinput" ng-model="paymentMessage.txtTel" name="txtTel" type="text" placeholder="เบอร์ติดต่อ" class="form-control input-md" required="required">
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="textinput">เลขที่ใบสั่งซื้อ</label>
                                <input id="textinput" ng-model="paymentMessage.txtOrder" name="txtOrder" type="text" placeholder="เลขที่ใบสั่งซื้อ" class="form-control input-md" required="required">
                            </div>
                            <div class="form-group">
                                <label for="textinput">เลือกธนาคาร</label>
                                <select ng-model="paymentMessage.txtBank" name="txtBank" id="inputBank" class="form-control" required="required">
                                    <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
                                    <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                                    <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                                    <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="textinput">จำนวนเงิน</label>
                                <input id="textinput" ng-model="paymentMessage.txtAmount" name="txtAmount" type="text" placeholder="จำนวนเงิน" class="form-control input-md" required="required">
                            </div>
                            <div class="form-group">
                                <label for="textinput">วันที่โอน ตัวอย่าง 01/04/2016</label>
                                <input id="textinput" ng-model="paymentMessage.txtDate" name="txtDate" type="text" placeholder="วันที่โอน" class="form-control input-md" required="required">
                            </div>
                            <div class="form-group">
                                <label for="textinput">เวลาโอน ตัวอย่าง 12:00</label>
                                <input id="textinput" ng-model="paymentMessage.txtTime" name="txtTime" type="text" placeholder="เวลาโอน" class="form-control input-md" required="required">
                            </div>
                            <div class="form-group">
                                <label for="filebutton"></label>
                                <button type="submit" class="btn btn-success ">แจ้งชำระ</button>
                            </div>
                            <div class="form-group" ng-if="isProscess==true">
                                <hr>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width:70%"></div>
                                </div>
                            </div>
                            <h4 class="text-success" ng-bind="message_prosecss"></h4>
                        </fieldset>
                    </form>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
</section>
<div style="padding-top: 50px;"></div>
