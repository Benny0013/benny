<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Custom</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('custom/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Katalog</th>
						<th>BOM</th>
						<th>Keterangan dan Warna</th>
						<th>Gambar</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($custom as $c){ ?>
                    <tr>
						<td><?php echo $c->id; ?></td>
						<td><?php foreach($katalog as $k){if($c->id_katalog==$k['id']){echo $k['nama'];}} ?></td>
						<td><?php foreach($bom as $b){if($c->id_bom==$b['id']){echo $b['nama']." - Rp. ".$b['total'];}} ?></td>
						<td><?php echo $c->color; ?></td>
						<td><img src="<?php echo base_url('/uploads/custom/').$c->path; ?>" width="50%"></td>
						<td>
                            <a href="<?php echo site_url('custom/edit/'.$c->id); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sunting</a> 
                            <a href="<?php echo site_url('custom/remove/'.$c->id); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
