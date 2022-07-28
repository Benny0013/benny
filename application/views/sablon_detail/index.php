<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sablon Detail Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('sablon_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Id Keranjang</th>
						<th>Id Bom</th>
						<th>Type</th>
						<th>Gambar</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sablon_detail as $s){ ?>
                    <tr>
						<td><?php echo $s['id']; ?></td>
						<td><?php echo $s['id_keranjang']; ?></td>
						<td><?php echo $s['id_bom']; ?></td>
						<td><?php echo $s['type']; ?></td>
						<td><?php echo $s['gambar']; ?></td>
						<td>
                            <a href="<?php echo site_url('sablon_detail/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('sablon_detail/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
