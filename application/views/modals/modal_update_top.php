<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Top</h3>

  <form id="form-update-top" method="POST">
    <input type="hidden" name="id" value="<?php echo $dataTop->ID; ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-calendar"></i>
      </span>
      <input type="text" class="form-control" placeholder="Tempo" name="tempo" aria-describedby="sizing-addon2" value="<?php echo $dataTop->Tempo; ?>">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-bullhorn"></i>
      </span>
    <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" aria-describedby="sizing-addon2" value="<?php echo $dataTop->Keterangan; ?>">
    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
      </div>
    </div>
  </form>
</div>
