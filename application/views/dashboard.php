<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #fff;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <style>
        .aboutus-section {
            padding: 90px 0;
        }

        .aboutus-title {
            font-size: 30px;
            letter-spacing: 0;
            line-height: 32px;
            margin: 0 0 39px;
            padding: 0 0 11px;
            position: relative;
            text-transform: uppercase;
            color: #000;
        }

        .aboutus-title::after {
            background: #fdb801 none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 2px;
            left: 0;
            position: absolute;
            width: 54px;
        }

        .aboutus-text {
            color: #606060;
            font-size: 13px;
            line-height: 22px;
            margin: 0 0 35px;
        }

        a:hover,
        a:active {
            color: #ffb901;
            text-decoration: none;
            outline: 0;
        }

        .aboutus-more {
            border: 1px solid #fdb801;
            border-radius: 25px;
            color: #fdb801;
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0;
            padding: 7px 20px;
            text-transform: uppercase;
        }

        .feature .feature-box .iconset {
            background: #fff none repeat scroll 0 0;
            float: left;
            position: relative;
            width: 18%;
        }

        .feature .feature-box .iconset::after {
            background: #fdb801 none repeat scroll 0 0;
            content: "";
            height: 150%;
            left: 43%;
            position: absolute;
            top: 100%;
            width: 1px;
        }

        .feature .feature-box .feature-content h4 {
            color: #0f0f0f;
            font-size: 18px;
            letter-spacing: 0;
            line-height: 22px;
            margin: 0 0 5px;
        }


        .feature .feature-box .feature-content {
            float: left;
            padding-left: 28px;
            width: 78%;
        }

        .feature .feature-box .feature-content h4 {
            color: #0f0f0f;
            font-size: 18px;
            letter-spacing: 0;
            line-height: 22px;
            margin: 0 0 5px;
        }

        .feature .feature-box .feature-content p {
            color: #606060;
            font-size: 13px;
            line-height: 22px;
        }

        .icon {
            color: #f4b841;
            padding: 0px;
            font-size: 40px;
            /*border: 1px solid #fdb801;*/
            border-radius: 100px;
            color: #fdb801;
            font-size: 28px;
            height: 70px;
            line-height: 70px;
            text-align: center;
            width: 70px;
        }
    </style>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <?php if ($is_admin == true): ?>

            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3><?php echo $total_products ?></h3>

                            <p>Products</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag" style="color: #fff;"></i>
                        </div>
                        <a href="<?php echo base_url('products/') ?>" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo $total_paid_orders ?></h3>

                            <p>Paid Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars" style="color: #fff;"></i>
                        </div>
                        <a href="<?php echo base_url('orders/') ?>" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?php echo $total_users; ?></h3>

                            <p>Employees</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-people" style="color: #fff;"></i>
                        </div>
                        <a href="<?php echo base_url('users/') ?>" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3><?php echo $total_stores ?></h3>

                            <p>Suppliers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-home" style="color: #fff;"></i>
                        </div>
                        <a href="<?php echo base_url('stores/') ?>" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        <?php endif; ?>
    </section>

    <section class="content" style="margin-top: -80px">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <div id="messages"></div>

                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php elseif ($this->session->flashdata('error')): ?>
                    <div class="alert alert-error alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <!--                  --><?php //if(in_array('createProduct', $user_permission)): ?>
                <!--                      <a href="-->
                <?php //echo base_url('products/create') ?><!--" class="btn btn-primary">Add Product</a>-->
                <!--                      <br /> <br />-->
                <!--                  --><?php //endif; ?>

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Manage Products</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="manageTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>SKU</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Store</th>
                                <th>Availability</th>
                                <?php if (in_array('updateProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
                                    <th>Action</th>
                                <?php endif; ?>
                            </tr>
                            </thead>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- col-md-12 -->
        </div>
        <!-- /.row -->


    </section>
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    $(document).ready(function () {
        $("#dashboardMainMenu").addClass('active');
    });

    var manageTable;
    var base_url = "<?php echo base_url(); ?>";

    $(document).ready(function () {

        $("#mainProductNav").addClass('active');

        // initialize the datatable
        manageTable = $('#manageTable').DataTable({
            'ajax': base_url + 'products/fetchProductData',
            'order': []
        });

    });
</script>
