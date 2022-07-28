<div class="pull-right">
	<a href="<?php echo site_url('detail_bom/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Bahan</th>
		<th>Id Bom</th>
		<th>Jumlah</th>
		<th>Actions</th>
    </tr>
	<?php foreach($detail_bom as $d){ ?>
    <tr>
		<td><?php echo $d['id']; ?></td>
		<td><?php echo $d['id_bahan']; ?></td>
		<td><?php echo $d['id_bom']; ?></td>
		<td><?php echo $d['jumlah']; ?></td>
		<td>
            <a href="<?php echo site_url('detail_bom/edit/'.$d['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('detail_bom/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
