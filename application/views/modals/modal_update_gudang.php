<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Gudang</h3>

  <form id="form-update-gudang" method="POST">
    <input type="hidden" name="id" value="<?php echo $dataGudang->ID; ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-cd"></i>
      </span>
      <input type="text" class="form-control" placeholder="Kode" name="kode" aria-describedby="sizing-addon2" value="<?php echo $dataGudang->Kode; ?>">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-th-list"></i>
      </span>
    <input type="text" class="form-control" placeholder="Keterangan" name="ket" aria-describedby="sizing-addon2" value="<?php echo $dataGudang->Keterangan; ?>">
    </div>
    <div class="input-group form-group" style="display: inline-block;">
          <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-tag"></i>
          </span>
          <span class="input-group-addon">
              <input type="radio" name="jenis" value="UT" id="UT" class="minimal" <?php if($dataGudang->Jenis == "UT"){echo "checked='checked'";} ?>>
          <label for="UT">Gudang Utama</label>
            </span>
            <span class="input-group-addon">
              <input type="radio" name="jenis" value="BS" id="BS" class="minimal" <?php if($dataGudang->Jenis == "BS"){echo "checked='checked'";} ?>>
          <label for="BS">Gudang BS</label>
            </span>
            <span class="input-group-addon">
              <input type="radio" name="jenis" value="LN" id="LN" class="minimal" <?php if($dataGudang->Jenis == "LN"){echo "checked='checked'";} ?>>
          <label for="LN">Gudang Lain</label>
            </span>
      </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
      </div>
    </div>
  </form>
</div>
