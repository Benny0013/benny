<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-cubes"></i> Daftar Bahan</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bahan/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Harga</th>
						<th>Satuan</th>
						<th>Aksi</th>
                    </tr>
                    <?php foreach($bahan as $b){ ?>
                    <tr>
						<td><?php echo $b['id']; ?></td>
						<td><?php echo $b['nama']; ?></td>
						<td><?php echo "Rp ".number_format($b['harga'],2,',','.');?></td>
						<td>/ <?php echo $b['satuan']; ?></td>
						<td>
                            <a href="<?php echo site_url('bahan/edit/'.$b['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sunting</a> 
                            <a href="<?php echo site_url('bahan/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
