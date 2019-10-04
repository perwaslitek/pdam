</br>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-lg-12">
                Halaman Utama
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>

    <div class="panel-body">

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <!-- <i class="fa fa-comments fa-5x"></i> -->
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $countkaryawan; ?></div>
                                <div>Karyawan</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url('karyawan'); ?>">
                        <div class="panel-footer">
                            <span class="pull-left">Lihat Rincian</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-share-square-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= $countsumber; ?></div>
                                <div>Sumber</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url('sumber'); ?>">
                        <div class="panel-footer">
                            <span class="pull-left">Lihat Rincian</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-gears fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= $countpengolahan; ?></div>
                                <div>Pengolahan</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url('pengolahan'); ?>">
                        <div class="panel-footer">
                            <span class="pull-left">Lihat Rincian</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-check-square-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?= $countreservoir; ?></div>
                                <div>Reservoir</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url('reservoir'); ?>">
                        <div class="panel-footer">
                            <span class="pull-left">Lihat Rincian</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            




<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>


<!-- test jquery -->
<script type="text/javascript">

    $(document).ready(function(){
        // alert('test jquery');
        
    });
</script>