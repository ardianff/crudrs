<div class="col-md-6" style="padding:10px;">
                    <div class="panel box-v1">
                        <div class="panel-heading bg-white border-none">
                            <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                <h4 class="text-left">Jumlah Pasien</h4>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <h4>
                                    <span class="icon-user icons icon text-right"></span>
                                </h4>
                            </div>
                        </div>
                        <div class="panel-body text-center">
                            <?php
                            $jumlah = $this->db->query("SELECT COUNT(id_pasien) as jumlah FROM `tbl_pasien`")->result();
                            foreach ($jumlah as $row) {
                                echo "<h1>$row->jumlah</h1>";
                            }
                            ?>
                            <hr/>
                        </div>
                    </div>
     
</div>
