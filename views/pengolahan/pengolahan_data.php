<div class="row">
    <div class="col-lg-12"><br />
       
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('pengolahan'); ?>">Pengolahan</a></li>
            <li class="active">Data Pengolahan</li>
        </ol>

        <?php
            
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
            <?php echo anchor('pengolahan/create', 'Tambah', array('class' => 'btn btn-primary btn-sm')); ?>
            <?= anchor('laporan/cetak_pengolahan', 'Cetak', array('class' => 'btn btn-primary btn-sm')); ?>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>Nama Unit</td>
                                        <td>Zona</td>
                                        <td>Pengolahan</td>
                                        <td>Lokasi</td>
                                        <td>Kap. Terpasang</td>
                                        <td>Kap. Produksi</td>
                                        <td>Elevasi</td>
                                        <td>Koordinat X</td>
                                        <td>Koordinat Y</td>
                                        <td>Keterangan</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no = 1;
                                foreach($pengolahan->result() as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <!-- jika ada pengolahan di dalam database maka tampilkan -->
                                        </td>
                                        <td><?php echo $row->nama_pengolahan;?></td>
                                        <td><?php echo $row->zona2;?></td>
                                        <td><?php echo $row->pengolahan;?></td>
                                        <td><?php echo $row->lokasi2;?></td>
                                        <td><?php echo $row->kappasang2;?></td>
                                        <td><?php echo $row->kapproduksi2;?></td>
                                        <td><?php echo $row->elevasi2;?></td>
                                        <td><?php echo $row->korx2;?></td>
                                        <td><?php echo $row->kory2;?></td>
                                        <td><?php echo $row->keterangan2;?></td>
                                        <td class="text-center">
                                <a href="<?php echo base_url('pengolahan/edit/'.$row->kode_pengolahan) ?>"><input type="submit" class="btn btn-success btn-xs" name="edit" value="Ubah"></a>
                                <a href="#" name="<?php echo $row->nama_pengolahan;?>" class="hapus btn btn-danger btn-xs" kode="<?php echo $row->kode_pengolahan;?>">Hapus</a>
                            </td>
                                    </tr>
                                <?php $no++; } ?>    
                                </tbody>
                            </table>
                            
                            
                        </div>
                        <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- Modal Hapus-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
            <input type="hidden" name="idhapus" id="idhapus">
                <p>Apakah anda yakin ingin menghapus pengolahan <strong class="text-konfirmasi"> </strong> ?</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-success btn-xs" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger btn-xs" id="konfirmasi">Hapus</button>
        </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- jQuery -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>

<script type="text/javascript">


    $(function(){
        $(".hapus").click(function(){
            var kode=$(this).attr("kode");
            var name=$(this).attr("name");
           
            $(".text-konfirmasi").text(name)
            $("#idhapus").val(kode);
            $("#myModal").modal("show");
        });
        
        $("#konfirmasi").click(function(){
            var kode_pengolahan = $("#idhapus").val();
            
            $.ajax({
                url:"<?php echo site_url('pengolahan/delete');?>",
                type:"POST",
                data:"kode_pengolahan="+kode_pengolahan,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('pengolahan/index/delete-success');?>";
                }
            });
        });
    });
</script>

