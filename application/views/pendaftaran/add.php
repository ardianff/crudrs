<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <?php echo form_open('pendaftaran/add'); ?>
		<div class="col-md-4">
		<div class="form-group">
			<label for="nama">No KTP</label>
			<input type="number" name="no_ktp" placeholder="No KTP" required id="form-field-1" class="form-control">
		</div>
		<div class="form-group">
			<label for="nama">Nama Pasien</label>
			<input type="text" name="nama_pasien" placeholder="Nama Pasien" required id="form-field-1" class="form-control">
		</div>	
		<div class="form-group">
			<label for="nama">Jenis Kelamin</label>
			<?php
            echo form_dropdown('jenis_kelamin', array('LAKI - LAKI' => 'LAKI - LAKI', 'PEREMPUAN' => 'PEREMPUAN'), null, "class='form-control'");
            ?>
		</div>		
		<div class="form-group">
			<label for="nama">Golongan Darah</label>
			<?php
            echo form_dropdown('gol_dar', array('A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'), null, "class='form-control'");
            ?>
		</div>		
		<div class="form-group">
			<label for="nama">Status Pernikahan</label>
			<?php
            echo form_dropdown('status_pernikahan', array('KAWIN' => 'KAWIN', 'BELUM KAWIN' => 'BELUM KAWIN', 'CERAI HIDUP' => 'CERAI HIDUP', 'CERAI MATI' => 'CERAI MATI'), null, "class='form-control'");
            ?>
		</div>
		<div class="form-group">
			<label for="nama">AGAMA</label>
			<?php
            echo form_dropdown('agama_pasien', array('ISLAM' => 'ISLAM', 'KRISTEN' => 'KRISTEN', 'KATOLIK' => 'KATOLIK', 'HINDU' => 'HINDU', 'BUDDHA' => 'BUDDHA', 'KHONGHUCU' => 'KONGHUCU'), null, "class='form-control'");
            ?>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat Pasien</label>
			<textarea required="" name="alamat_pasien" placeholder="Alamat" required class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="alamat">Kode Pos</label>
			<textarea required="" name="kode_pos" placeholder="Kode Pos" required class="form-control"></textarea>
		</div>		
		</div>
        <div class="col-md-12">
		<div class="col-sm-2">
                <button type="submit" name="submit" class="btn btn-success btn-sm">
                    <div>
                        <span>Tambah</span>
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
