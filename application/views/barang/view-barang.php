<!-- MAIN CONTENT -->
<style type="text/css">
.title-ds{
    margin:20px 0 15px 0;
    font-size: 20px;
    font-weight: normal;
    text-transform: uppercase;
}
.title-fav{
    margin:0;
    margin-bottom: 15px;
    font-size: 18px;
    font-weight: normal;
}
.nav-tabs { border-bottom: 1px solid #DDD;}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
.nav-tabs > li > a { border: none; color: #666; padding: 10px 20px;}
    .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #2196f3 !important; background: transparent; }
    .nav-tabs > li > a::after { content: ""; background: #2196f3; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 350ms ease 0s; transform: scale(0); }
.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 20px 0; }
.tab-content{padding:10px 0 0 0}
.title{
    font-size: 13px;
    margin-bottom: 5px;
}
.content{
    font-size: 15px;
    padding: 0;
    margin-top: 5px;
    margin-bottom: 5px;
    font-weight: 600;
}
.foto img{
    margin: 0 auto;
    display: block;
}
</style>
<div class="container">
  <ul class="page-breadcrumb breadcrumb">
      <li>
          <a href="<?php echo base_url(); ?>dashboard">Home</a>
      </li>
      <li>
          <a href="<?php echo base_url(); ?>barang">Data Barang</a>
      </li>
      <li>
        <span><?php echo $title; ?></span>
      </li>
  </ul>
</div>
<div class="main-content">
	<div class="container-fluid">
	<div class="panel panel-headline">
		  <div class="panel-body">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#profil" aria-controls="profil" role="tab" data-toggle="tab"><span class="fa fa-book"></span> Profil</a></li>
              <li role="presentation"><a href="#foto" aria-controls="foto" role="tab" data-toggle="tab"><span class="fa fa-image"> </span> Foto</a></li>
            </ul>
            <div class="tab-content" style="margin-bottom: -30px;">
                <div role="tabpanel" class="tab-pane active" id="profil">
                    <?php 
                        if($barang['status'] =="Aktif"){
                          $label = "<span class='label label-success'>".$barang['status']."</span>";
                        }else{
                          $label = "<span class='label label-danger'>".$barang['status']."</span>";
                        }
                      ?>
                    <div class="row">
                        <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item">
                              <h4>Profil</h4>
                            </li>
                            <li class="list-group-item">
                                  <p class="text-muted title">Kode Barang</p>
                                  <h4 class="content"><?php echo $barang['kode'] ?></h4>
                              </li>
                              <li class="list-group-item">
                                  <p class="text-muted title">Nama Barang</p>
                                  <h4 class="content"><?php echo $barang['nama'] ?></h4>
                              </li>
                              <li class="list-group-item">
                                  <p class="text-muted title">Kategori Barang</p>
                                  <h4 class="content"><?php echo $kategori['kategori'] ?></h4>
                              </li>
                              <li class="list-group-item">
                                  <p class="text-muted title">Satuan</p>
                                  <h4 class="content"><?php echo $satuan['satuan'] ?></h4>
                              </li>
                              <li class="list-group-item">
                                  <p class="text-muted title">Warna</p>
                                  <h4 class="content"><?php echo $warna['warna'] ?></h4>
                              </li>
                              <li class="list-group-item">
                                  <p class="text-muted title">Stok</p>
                                  <h4 class="content"><?php echo $barang['stok'] ?></h4>
                              </li>
                              <li class="list-group-item">
                                  <p class="text-muted title">Ukuran</p>
                                  <h4 class="content"><?php echo $barang['ukuran'] ?></h4>
                              </li>
                              <li class="list-group-item">
                                  <p class="text-muted title">Status</p>
                                  <h4 class="content"><?php  echo "$label" ?></span></h4>
                              </li> 
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item">
                              <h4>Harga</h4>
                            </li>
                            <li class="list-group-item">
                              <p class="text-muted title">Harga Modal</p>
                              <h4 class="content"><?php echo $barang['modal'] ?></h4>
                          </li>
                          <li class="list-group-item">
                              <p class="text-muted title">Diskon</p>
                              <h4 class="content"><?php echo $barang['diskon'] ?></h4>
                          </li>
                          <li class="list-group-item">
                              <p class="text-muted title">Harga Dasar</p>
                              <h4 class="content"><?php echo $barang['hargadasar'] ?></h4>
                          </li>
                        </ul>
                    </div>
                </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="foto">
                    <div class="col-md-6" style="border:1px solid #ddd; margin-bottom: 10px; border-radius: 5px;">
                        <div class="foto">
                            <img src="<?php echo base_url(); ?>assets/foto/<?php echo $listfoto[0]['file']; ?>" alt="" width="320">
                        </div>
                    </div>
                </div>
            </div>
           <div class="container">
              <div class="col-md-12" style="padding: 0 10px;">
                 <a href="<?php echo base_url(); ?>barang" class="btn btn-warning" style="margin-bottom: 20px;""><span class="fa fa-list"></span> Daftar Barang</a>
             </div> 
           </div>
			</div>
		</div>
	</div>
</div>
		