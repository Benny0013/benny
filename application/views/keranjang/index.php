<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Keranjang Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('keranjang/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Id Customer</th>
						<th>Id Produk</th>
						<th>Type</th>
						<th>Qty</th>
						<th>Sablon</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($keranjang as $k){ ?>
                    <tr>
						<td><?php echo $k['id']; ?></td>
						<td><?php echo $k['id_customer']; ?></td>
						<td><?php echo $k['id_produk']; ?></td>
						<td><?php echo $k['type']; ?></td>
						<td><?php echo $k['qty']; ?></td>
						<td><?php echo $k['sablon']; ?></td>
						<td><?php echo $k['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('keranjang/edit/'.$k['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('keranjang/remove/'.$k['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
