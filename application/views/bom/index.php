<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-dollar"></i> Daftar BOM</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bom/add'); ?>" class="btn btn-success btn-sm">Tambah</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
						<th>ID</th>
						<th>Nama</th>
                        <th>Rincian Bahan</th>
						<th>Total</th>
						<th>Aksi</th>
                    </tr>
                    <?php foreach($bom as $b){ ?>
                    <tr>
						<td><?php echo $b['id']; ?></td>
						<td><?php echo $b['nama']; ?></td>
                        <td><?php foreach($detail_bom as $db){ if($db['id_bom']==$b['id']){foreach($bahan as $i){if($db['id_bahan']==$i['id']){ echo "<i class='fa fa-arrow-right'></i> ( ".$db['jumlah']."".$i['satuan']." ) ".$i['nama']." = Rp. ".number_format(($db['jumlah']*$i['harga']),2,',','.');?>
                            <a href="<?php echo site_url('detail_bom/edit/'.$db['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a> 
                            <a href="<?php echo site_url('detail_bom/remove/'.$db['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                            <br>
                        <?php }}}} ?><a href="<?php echo site_url('bom/add_detail/'.$b['id']); ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Bahan</a></td>
						<td><?php echo "Rp. ".$b['total']; ?></td>
						<td>
                            <a href="<?php echo site_url('bom/edit/'.$b['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Sunting</a> 
                            <a href="<?php echo site_url('bom/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span>   </a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
