<div class="row col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading">Selamat datang <b><?php echo $this->session->userdata('admin_nama') ?></b>, di Sistem: Aplikasi Bimbingan Belajar Primagama.</div>
    <div class="panel-body">
        <?php 
        if (!empty($p_mapel)) {
        	echo "<h3>Mata pelajaran yang telah Anda ikuti: </h3><ul>";
        	foreach ($p_mapel as $p) {	
        		echo '<li>'.$p->nama.'</li>';
        	}
        	echo '</ul>';
        }
        ?>
      </div>
    </div>
  </div>
</div>