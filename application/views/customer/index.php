<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-group"></i> Daftar Customer</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('customer/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Telp</th>
						<th>Alamat</th>
                        <th>Password</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($customer as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['nama']; ?></td>
						<td><?php echo $c['email']; ?></td>
						<td><?php echo $c['telp']; ?></td>
						<td><?php echo $c['alamat']; ?></td>
                        <td><?php echo $c['password']; ?></td>
						<td>
                            <a href="<?php echo site_url('customer/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sunting</a> 
                            <a href="<?php echo site_url('customer/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
