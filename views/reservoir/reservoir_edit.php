<div class="row">
    <div class="col-lg-12"><br />
       
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('reservoir/edit/'.$edit['kode_reservoir']); ?>">Reservoir</a></li>
            <li class="active">Ubah Data Reservoir</li>
        </ol>

        <?php
            echo validation_errors();
            //buat message nis
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
                Ubah Data Reservoir
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            <?php
                //validasi error upload
                if(!empty($error)) {
                    echo $error;
                }
            ?>
            <?php echo form_open('reservoir/update', array('class' => 'form-horizontal', 'id' => 'jvalidate')) ?>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Kode Reservoir </p>

                    <div class="col-sm-10">
                        <input type="text" name="kode_reservoir" class="form-control" placeholder="Kode Reservoir" value="<?php echo $edit['kode_reservoir']; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Nama Reservoir </p>

                    <div class="col-sm-10">
                        <input type="text" name="nama_reservoir" class="form-control" placeholder="Nama Reservoir" value="<?php echo $edit['nama_reservoir']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Zona </p>

                    <div class="col-sm-10">
                        <input type="text" name="zona3" class="form-control" placeholder="Zona" value="<?php echo $edit['zona3']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Kapasitas (m3) </p>

                    <div class="col-sm-10">
                        <input type="text" name="kapasitas" class="form-control" placeholder="Kapasitas saat ini (m3)" value="<?php echo $edit['kapasitas']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Lokasi </p>

                    <div class="col-sm-10">
                        <input type="text" name="lokasi3" class="form-control" placeholder="Lokasi" value="<?php echo $edit['lokasi3']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Inlet (l/dt) </p>

                    <div class="col-sm-10">
                        <input type="text" name="inlet" class="form-control" placeholder="Debit Inlet (liter/detik)" value="<?php echo $edit['inlet']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Outlet (l/dt) </p>

                    <div class="col-sm-10">
                        <input type="text" name="outlet" class="form-control" placeholder="Debit Outlet (liter/detik)" value="<?php echo $edit['outlet']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Elevasi </p>

                    <div class="col-sm-10">
                        <input type="text" name="elevasi3" class="form-control" placeholder="Elevasi" value="<?php echo $edit['elevasi3']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Koordinat X </p>

                    <div class="col-sm-10">
                        <input type="text" name="korx3" class="form-control" placeholder="Koordinat X" value="<?php echo $edit['korx3']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Koordinat Y </p>

                    <div class="col-sm-10">
                        <input type="text" name="kory3" class="form-control" placeholder="Koordinat Y" value="<?php echo $edit['kory3']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Keterangan </p>

                    <div class="col-sm-10">
                        <textarea name="keterangan3"><?php echo $edit['keterangan3']; ?></textarea>
                    </div>
                </div>
               
            <div class="form-group">
                    <div class="col-sm-6">
                        <div class="btn-group pull-left">
                            <?php echo anchor('reservoir', 'Batal', array('class' => 'btn btn-danger btn-sm')); ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="btn-group pull-right">
                            <input type="submit" name="update" value="Ubah" class="btn btn-success btn-sm">
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