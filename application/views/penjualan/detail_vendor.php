<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detail Vendor</h3>
            </div>
            <div class="box-body">
            Pembuatan :
            <?php 
            if($keranjang['type']==1){
            foreach($produk as $p){if($p['id']==$keranjang['id_produk']){echo $p['nama']."- Jumlah : ".$keranjang['qty']; ?>
            <br><br>
            <img src="<?php echo base_url('uploads/produk/').$p['path']?>" width='25%'>
            <br><br>
            <?php }}}else{
                foreach($custom as $c){if($c->id==$keranjang['id_produk']){echo $c->color." - Jumlah : ".$keranjang['qty']; ?>
            <br><br>
            <img src="<?php echo base_url('uploads/custom/').$c->path?>" width='25%'>
            <br><br>
            <?php }}    
                } ?>
            Vendor : <?php foreach($vendor as $v){if($v['id']==$keranjang['id_vendor']){echo $v['nama']." ( No Rek : ".$v['norek']." )";}} ?>
            <br>Progress ( <?php if($keranjang['vendor_status']==0){echo "0%";}else if($keranjang['vendor_status']==1){echo "0% - Menunggu di Konfirmasi";}else if($keranjang['vendor_status']==2){echo "25% - Proses Pembuatan";}else if($keranjang['vendor_status']==3){echo "75% - Proses Pengemasan & Pengiriman";}else if($keranjang['vendor_status']==4){echo "Selesai";} ?>)
                <div class="progress">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php if($keranjang['vendor_status']==0){echo '0%';}else if($keranjang['vendor_status']==1){echo '0%';}else if($keranjang['vendor_status']==2){echo '25%';}else if($keranjang['vendor_status']==3){echo '50%';}else if($keranjang['vendor_status']==4){echo '100%';} ?>">
                    </div>
                    </div>
                <?php if($keranjang['vendor_status']==3){?>
                <a href="<?php echo site_url('Pages/acc_pesanan4/'.$keranjang['id']); ?>" class="btn btn-success btn-xs"> </span> Konfirmasi Terima Barang</a>
                    <?php }?>   
            </div>
        </div>
    </div>
</div>
