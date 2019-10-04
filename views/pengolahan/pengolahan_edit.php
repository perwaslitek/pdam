<div class="row">
    <div class="col-lg-12"><br />
       
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('pengolahan/edit/'.$edit['kode_pengolahan']); ?>">Pengolahan</a></li>
            <li class="active">Ubah Data Pengolahan</li>
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
                Ubah Data Pengolahan
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            <?php
                //validasi error upload
                if(!empty($error)) {
                    echo $error;
                }
            ?>
            <?php echo form_open('pengolahan/update', array('class' => 'form-horizontal', 'id' => 'jvalidate')) ?>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Kode Pengolahan </p>

                    <div class="col-sm-10">
                        <input type="text" name="kode_pengolahan" class="form-control" placeholder="Kode Pengolahan" value="<?php echo $edit['kode_pengolahan']; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Nama Pengolahan </p>

                    <div class="col-sm-10">
                        <input type="text" name="nama_pengolahan" class="form-control" placeholder="Nama Pengolahan" value="<?php echo $edit['nama_pengolahan']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Zona </p>

                    <div class="col-sm-10">
                        <input type="text" name="zona2" class="form-control" placeholder="Zona" value="<?php echo $edit['zona2']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Pengolahan </p>

                    <div class="col-sm-10">
                        <input type="text" name="pengolahan" class="form-control" placeholder="Pengolahan" value="<?php echo $edit['pengolahan']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Lokasi </p>

                    <div class="col-sm-10">
                        <input type="text" name="lokasi2" class="form-control" placeholder="Lokasi" value="<?php echo $edit['lokasi2']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Kap Terpasang </p>

                    <div class="col-sm-10">
                        <input type="text" name="kappasang2" class="form-control" placeholder="Kapasitas terpasang saat ini" value="<?php echo $edit['kappasang2']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Kap Produksi </p>

                    <div class="col-sm-10">
                        <input type="text" name="kapproduksi2" class="form-control" placeholder="Kapasitas produksi saat ini" value="<?php echo $edit['kapproduksi2']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Elevasi </p>

                    <div class="col-sm-10">
                        <input type="text" name="elevasi2" class="form-control" placeholder="Elevasi" value="<?php echo $edit['elevasi2']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Koordinat X </p>

                    <div class="col-sm-10">
                        <input type="text" name="korx2" class="form-control" placeholder="Koordinat X" value="<?php echo $edit['korx2']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Koordinat Y </p>

                    <div class="col-sm-10">
                        <input type="text" name="kory2" class="form-control" placeholder="Koordinat Y" value="<?php echo $edit['kory2']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Keterangan </p>

                    <div class="col-sm-10">
                        <textarea name="keterangan2"><?php echo $edit['keterangan2']; ?></textarea>
                    </div>
                </div>
               
            <div class="form-group">
                    <div class="col-sm-6">
                        <div class="btn-group pull-left">
                            <?php echo anchor('pengolahan', 'Batal', array('class' => 'btn btn-danger btn-sm')); ?>
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