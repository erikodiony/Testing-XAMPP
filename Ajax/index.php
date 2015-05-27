<html>
    <head>
        <title>Modal - harviacode.com</title>
        <link rel="stylesheet" href="Scripts/bootstrap/css/bootstrap.css"/>
		<style>
		.modal-content {
		background:url('Images/bg.jpg') no-repeat fixed top center;
	}
	.modal-header {
		background:url('Images/bg-transparent.png') repeat top center;
	}
	.modal-body {
		background:url('Images/bg-transparent.png') repeat top center;
	}
	.modal-footer {
		background:url('Images/bg-transparent.png') repeat top center;
	}
		</style>
    </head>
    <body style="background:url('Images/bg.jpg') no-repeat fixed top center;">
	
	<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td>
						
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Cetak Struk/Brosur" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `tgl_masuk`, `jam_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Cetak`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `1_Edit` = 'Tuntas' AND `2_Dokter` = 'Tuntas' AND `r_rawat` = 'Poli Gigi'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text5"><?php echo $dataTampil['5_Cetak'] ; ?></label></strong></div></td>
						<td><div align="center"><strong>
						<a href="" class="modalTambahData" data-id="<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Tambah Data Pemeriksaan" class="glyphicon glyphicon-plus"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
						
        <!-- Modal -->
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="ModalEditLabel">
						<h4><span class="glyphicon glyphicon-plus"></span>&nbsp Data Pemeriksaan</h4>
						</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer" style="background:url('Images/bg-transparent.png') repeat top center;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="simpan btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="Scripts/jquery.js"></script>
        <script src="Scripts/bootstrap/js/bootstrap.js"></script>
    <script>
        $(function(){
            $(document).on('click','.modalTambahData',function(e){
                e.preventDefault();
                $("#ModalEdit").modal('show');
                $.post('hasil.php',
                    {id_pasien:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    </body>
</html>
<!--harviacode.com-->