<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-list-ul"></i> Daftar Katalog </h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('katalog/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Aksi</th>
                    </tr>
                    <?php foreach($katalog as $k){ ?>
                    <tr>
						<td><?php echo $k['id']; ?></td>
						<td><?php echo $k['nama']; ?></td>
						<td>
                            <a href="<?php echo site_url('katalog/edit/'.$k['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sunting</a> 
                            <a href="<?php echo site_url('katalog/remove/'.$k['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
