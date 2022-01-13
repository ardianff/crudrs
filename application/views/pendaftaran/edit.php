<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <?php echo form_open('pendaftaran/edit'); 
		echo form_hidden('no_cm', $pasien['no_cm']);?>
		<div class="col-md-4">
		<div class="form-group">
			<label for="nama">No CM</label>
			<input type="number" name="no_ktp" placeholder="No KTP"  value="<?php echo $pasien['no_cm'] ?>" disabled id="form-field-1" class="form-control">
		</div>	
		<div class="form-group">
			<label for="nama">No KTP</label>
			<input type="number" name="no_ktp" placeholder="No KTP"  value="<?php echo $pasien['no_ktp'] ?>" required id="form-field-1" class="form-control">
		</div>
		<div class="form-group">
			<label for="nama">Nama Pasien</label>
			<input type="text" name="nama_pasien" placeholder="Nama Pasien" value="<?php echo $pasien['nama_pasien'] ?>" required id="form-field-1" class="form-control">
		</div>	
		<div class="form-group">
			<label for="nama">Jenis Kelamin</label>
			<?php
            echo form_dropdown('jenis_kelamin', array('LAKI - LAKI' => 'LAKI - LAKI', 'PEREMPUAN' => 'PEREMPUAN'), $pasien['jenis_kelamin'], "class='form-control'");
            ?>
		</div>		
		<div class="form-group">
			<label for="nama">Golongan Darah</label>
			<?php
            echo form_dropdown('gol_dar', array('A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'), $pasien['gol_dar'], "class='form-control'");
            ?>
		</div>		
		<div class="form-group">
			<label for="nama">Status Pernikahan</label>
			<?php
            echo form_dropdown('status_pernikahan', array('KAWIN' => 'KAWIN', 'BELUM KAWIN' => 'BELUM KAWIN', 'CERAI HIDUP' => 'CERAI HIDUP', 'CERAI MATI' => 'CERAI MATI'), $pasien['status_pernikahan'], "class='form-control'");
            ?>
		</div>
		<div class="form-group">
			<label for="nama">AGAMA</label>
			<?php
            echo form_dropdown('agama_pasien', array('ISLAM' => 'ISLAM', 'KRISTEN' => 'KRISTEN', 'KATOLIK' => 'KATOLIK', 'HINDU' => 'HINDU', 'BUDDHA' => 'BUDDHA', 'KHONGHUCU' => 'KONGHUCU'), $pasien['agama'], "class='form-control'");
            ?>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat Pasien</label>
			<textarea required="" name="alamat_pasien" placeholder="Alamat" required class="form-control"><?php echo htmlspecialchars($pasien['alamat_pasien']); ?></textarea>
		</div>
		<div class="form-group">
			<label for="alamat">Kode Pos</label>
			<input required="" name="kode_pos" type="number" placeholder="Kode Pos" required value="<?php echo $pasien['kode_pos'] ?>" class="form-control"></input>
		</div>		
		</div>
        <div class="col-md-12">
		<div class="col-sm-2">
                <button type="submit" name="submit" class="btn btn-success btn-sm">
                    <div>
                        <span>Simpan</span>
                    </div>
					
                </button>
		</div>
			<div class="col-sm-2">
                        <?php echo anchor('pendaftaran', 'Kembali', array('class' => 'btn btn-danger btn-sm')); ?>
                    </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
