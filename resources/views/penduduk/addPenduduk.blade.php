<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
  <span class="fa fa-plus"></span>  Penduduk
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Isi Biodata Penduduk</h4>
      </div>
      
 
<form action="{{url('penduduk/save')}}" method="POST" role="form">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="modal-body">
        <div class="row">
          <div class="form-group">
            <label for="nik" class="col-sm-3 control-label">N I K</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="nik" name="nik" placeholder="N I K">
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="form-group">
            <label for="nama" class="col-sm-3 control-label">N A M A</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="N A M A">
            </div>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label for="" class="control-label col-sm-3">Jenis Kelamin</label>
          <div class="col-sm9">
            <label for="" class="checkbox-inline"><input type="radio" name="JK" id="" value=""> Laki-Laki</label>
            <label for="" class="checkbox-inline"><input type="radio" name="JK" id="" value=""> Perempuan</label>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
          <label for="" class="col-sm-3 control-label">Tempat/ Tgl Lahir</label>
            <div class="col-sm-5">
              <input type="" class="form-control" id="tempat" placeholder="Tempat">
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <input type="text" id="datepicker" placeholder="Tanggal" class="date-picker form-control" />
                <label for="date-picker" class="input-group-addon btn btn-info"><span class="fa fa-calendar"></span>
                </label>
              </div>
              </div>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label for="" class="control-label">Status Perkawinan</label>
          <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value=""> Belum Kawin</label>
          <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value=""> Kawin</label>
          <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value=""> Cerai Hidup</label>
          <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value=""> Cerai Mati</label>
        </div>
        <div class="row">
            <div class="form-group">
              <label for="agama" class="col-sm-3 control-label">Agama</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama">
              </div>
            </div>
        </div>
        <br>
        <div class="row">
          <div class="form-group">
            <label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
            </div>
          </div>
        </div>
        <br>
        <div class="form-group">
            <label for="" class="col-sm-3">Golongan Darah</label>
            <div class="col-sm-9">
              <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value=""> Tidak Tahu</label>
            <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value=""> A</label>
            <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value=""> B</label>
            <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value=""> AB</label>
            <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value=""> O</label>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Alamat</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
              </div>
            </div>
          </div>
          <br>
         <div class="row">
            <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Dusun, RW, RT</label>
                <div class="col-sm-3">
                  <input type="" class="form-control" id="dusun" name="dusun" placeholder="Dusun">
                </div>
                <div class="col-sm-3">
                  <input type="" class="form-control" id="rw" name="rw" placeholder="RW">
                </div>
                <div class="col-sm-3">
                    <input type="" class="form-control" id="rt" name="rt" placeholder="RT">
                </div>
            </div>
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>