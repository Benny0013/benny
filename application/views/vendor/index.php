<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-group"></i> Daftar Vendor</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('vendor/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Kode</th>
						<th>Nama</th>
						<th>Email</th>
                        <th>Password</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>No Rekening</th>
						<th>Aksi</th>
                    </tr>
                    <?php foreach($vendor as $v){ ?>
                    <tr>
						<td><?php echo $v['id']; ?></td>
						<td><?php echo $v['kode']; ?></td>
						<td><?php echo $v['nama']; ?></td>
						<td><?php echo $v['email']; ?></td>
                        <td><?php echo $v['password']; ?></td>
                        <td><?php echo $v['alamat']; ?></td>
                        <td><?php echo $v['notelp']; ?></td>
                        <td><?php echo $v['norek']; ?></td>
						<td>
                            <a href="<?php echo site_url('vendor/edit/'.$v['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sunting</a> 
                            <a href="<?php echo site_url('vendor/remove/'.$v['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
