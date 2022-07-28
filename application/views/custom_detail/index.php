<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Custom Detail Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('custom_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Id Lengan</th>
						<th>Id Badan</th>
						<th>Id Kerah</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($custom_detail as $c){ ?>
                    <tr>
						<td><?php echo $c['id']; ?></td>
						<td><?php echo $c['id_lengan']; ?></td>
						<td><?php echo $c['id_badan']; ?></td>
						<td><?php echo $c['id_kerah']; ?></td>
						<td>
                            <a href="<?php echo site_url('custom_detail/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('custom_detail/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
