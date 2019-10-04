<div class="row">
    <div class="col-lg-12"><br />
       
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('sumber/create'); ?>">Sumber</a></li>
            <li class="active">Masukkan Data Sumber</li>
        </ol>

        <?php
            echo validation_errors();
            //buat message nik
            if(!empty($message)) {
            echo $message;
            }
        ?>

    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="panel panel-default">

            <div class="panel-heading">
                Masukkan Data Sumber 
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            <?php
                //validasi error upload
                if(!empty($error)) {
                    echo $error;
                }
            ?>
            <?php echo form_open_multipart('sumber/insert', array('class' => 'form-horizontal', 'id' => 'jvalidate')) ?>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Kode Sumber </p>

                    <div class="col-sm-10">
                        <input type="text" name="kode_sumber" class="form-control" placeholder="Kode sumber" value="<?php echo set_value('kode_sumber'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Nama Sumber </p>

                    <div class="col-sm-10">
                        <input type="text" name="nama_sumber" class="form-control" placeholder="Nama sumber" value="<?php echo set_value('nama_sumber'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Zona </p>

                    <div class="col-sm-10">
                        <input type="text" name="zona" class="form-control" placeholder="Zona" value="<?php echo set_value('zona'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Sumber </p>

                    <div class="col-sm-10">
                        <input type="text" name="sumber" class="form-control" placeholder="Sumber" value="<?php echo set_value('sumber'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Lokasi </p>

                    <div class="col-sm-10">
                        <input type="text" name="lokasi" class="form-control" placeholder="Lokasi" value="<?php echo set_value('lokasi'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Kap Terpasang </p>

                    <div class="col-sm-10">
                        <input type="text" name="kappasang" class="form-control" placeholder="Kapasitas terpasang saat ini" value="<?php echo set_value('kappasang'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Kap Produksi </p>

                    <div class="col-sm-10">
                        <input type="text" name="kapproduksi" class="form-control" placeholder="Kapasitas produksi saat ini" value="<?php echo set_value('kapproduksi'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Elevasi </p>

                    <div class="col-sm-10">
                        <input type="text" name="elevasi" class="form-control" placeholder="Elevasi" value="<?php echo set_value('elevasi'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Koordinat X </p>

                    <div class="col-sm-10">
                        <input type="text" name="korx" class="form-control" placeholder="Koordinat X" value="<?php echo set_value('korx'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Koordinat Y </p>

                    <div class="col-sm-10">
                        <input type="text" name="kory" class="form-control" placeholder="Koordinat Y" value="<?php echo set_value('kory'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Keterangan </p>

                    <div class="col-sm-10">
                        <textarea name="keterangan"><?php echo set_value('keterangan'); ?></textarea>
                    </div>
                </div>

         

                <div class="form-group">
                    <div class="col-sm-6">
                        <div class="btn-group pull-left">
                            <?php echo anchor('sumber', 'Batal', array('class' => 'btn btn-danger btn-sm')); ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="btn-group pull-right">
                            <input type="submit" name="save" value="Simpan" class="btn btn-success btn-sm">
                        </div>
                    </div>
                </div>
            <?php echo form_close(); ?>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>



<!-- jQuery -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Datepicker -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/js/bootstrap-datepicker.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Datepicker -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/js/tinymce/tinymce.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>



<script type="text/javascript">

tinymce.init({selector:'textarea'});

$(document).ready(function() {
    $("#tanggal1").datepicker({
        format:'yyyy-mm-dd'
    });
    
    $("#tanggal2").datepicker({
        format:'yyyy-mm-dd'
    });
    
    $("#tanggal").datepicker({
        format:'yyyy-mm-dd'
    });
})



</script>