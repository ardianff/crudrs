<!-- start: Content -->
<div class="col-md-12 top-20 padding-0">
	<div class="col-md-12">
		&nbsp;<?php echo anchor('pendaftaran/add','Input Data Pasien Baru',array('class'=>'btn btn-success btn-sm'))?>
		<br>
		<br>
        <div class="panel">
            <div class="panel-heading"><h3>Data Pasien</h3></div>
            <div class="panel-body">
                <div class="responsive-table">
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No CM</th>
                                <th>No KTP</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Status Pernikahan</th>
                                <th>Agama</th>
                                <th>Golongan Darah</th>
                                <th>Alamat</th>
                                <th>Kode Pos</th>
                                <th>Aksi Edit</th>
                                <th>Aksi Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($daftar as $row):
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row->no_cm; ?></td>
                                    <td><?php echo $row->no_ktp; ?></td>
                                    <td><?php echo $row->nama_pasien; ?></td>
                                    <td><?php echo $row->jenis_kelamin; ?></td>
                                    <td><?php echo $row->status_pernikahan; ?></td>
                                    <td><?php echo $row->agama; ?></td>
                                    <td><?php echo $row->gol_dar; ?></td>
                                    <td><?php echo $row->alamat_pasien; ?></td>
                                    <td><?php echo $row->kode_pos; ?></td>
                                    <td>
                                        <!-- <button class="btn btn-warning btn-sm" onclick="show_by_id(<?php echo $row->id_pasien ?>)" data-toggle="modal" data-target="#exampleModal">
                                            <div>
                                                <span>Edit</span>
                                            </div>
                                        </button> -->
										
										<?php echo anchor('pendaftaran/edit/' . $row->no_cm, 'Edit', array('class' => 'btn btn-warning btn-sm')) ?>
                                    <td><?php echo anchor('pendaftaran/hapus/' . $row->no_cm, 'Hapus', array('class' => 'btn btn-danger btn-sm')) ?></td>
                                </tr>
                                <?php
                                $no++;
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
</div>

<!-- end: content -->



<script type="text/javascript">
    function show_by_id(id_pasien) {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Pendaftaran/show_by_id',
            data: 'id_pasien=' + id_pasien,
            success: function (data) {
                var json = data,
                        obj = JSON.parse(json);
                $("#id_pasien").val(obj.id_pasien);
                $("#no_ktp").val(obj.no_ktp);
                $("#nama_pasien").val(obj.nama_pasien);
                $("#alamat_pasien").val(obj.alamat_pasien);
                $("#keterangan").val(obj.keterangan);
                $("#jenis_pasien").val(obj.jenis_pasien);
                $("#kode_pos").val(obj.kode_pos);
            }
        })
    }

</script>
