<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-group"></i> Daftar Karyawan</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('karyawan/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Email</th>
                        <th>Password</th>
						<th>Aksi</th>
                    </tr>
                    <?php foreach($karyawan as $k){ ?>
                    <tr>
						<td><?php echo $k['id']; ?></td>
						<td><?php echo $k['nip']; ?></td>
						<td><?php echo $k['nama']; ?></td>
						<td><?php echo $k['email']; ?></td>
                        <td><?php echo $k['password']; ?></td>
						<td>
                            <a href="<?php echo site_url('karyawan/edit/'.$k['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sunting</a> 
                            <a href="<?php echo site_url('karyawan/remove/'.$k['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
