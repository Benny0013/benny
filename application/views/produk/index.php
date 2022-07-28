<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-tag"></i> Daftar Produk Standart</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('produk/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Katalog</th>
						<th>BOM</th>
						<th>Nama</th>
						<th>Gambar</th>
						<th>Deskripsi</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($produk as $p){ ?>
                    <tr>
						<td><?php echo $p->id; ?></td>
						<td><?php foreach($katalog as $k){if($p->id_katalog==$k['id']){echo $k['nama'];}} ?></td>
						<td><?php foreach($bom as $b){if($p->id_bom==$b['id']){echo $b['nama']." - Rp. ".$b['total'];}} ?></td>
						<td><?php echo $p->nama; ?></td>
						<td><img src="<?php echo base_url('uploads/produk/').$p->path; ?>" width="25%"></td>
						<td><?php echo $p->deskripsi; ?></td>
						<td>
                            <a href="<?php echo site_url('produk/edit/'.$p->id); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sunting</a> 
                            <a href="<?php echo site_url('produk/remove/'.$p->id); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
