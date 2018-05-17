@csrf
<div class="box-body">
    <div class="row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="nokk">No. Kartu Keluarga</label>
                <input type="text" name="nokk" class="form-control" id="nokk" tabindex="1" autofocus required/>
            </div>
        </div>
        <div class="col-xs-9">
            <div class="form-group">
                <label for="namakk">Nama Kartu Keluarga</label>
                <input type="text" class="form-control" id="namakk" name="namakk" tabindex="2"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                <label for="notelp">No. Telp/HP</label>
                <input type="text" name="notelp" class="form-control" id="notelp" tabindex="22">
            </div>
        </div>
        <div class="col-xs-8">
            <div class="form-group">
                <label for="jumlah">Jumlah Formulir</label>
                <input type="text" name="jumlah" class="form-control" id="jumlah" tabindex="21">
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>Kecamatan</label>
                {{--{{ Form::select('kecamatan',$kecamatan,null,['class'=>'form-control','tabindex'=>'21','id'=>'kecamatan']) }}--}}
                <select id="kecamatan" name="kecamatan" class="form-control" tabindex="20">
                    <option value="">Semua Kecamatan</option>
                    @foreach($kecamatan as $kec)
                        <option value="{{$kec->id}}" {{ ((empty($_GET['kec'])) ? '' : (($_GET['kec'] == $kec->id) ? 'selected' : '' )) }}>{{$kec->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-xs-6">
            <div class="form-group">
                <label>Kelurahan</label>
                <select id="kelurahan" name="kelurahan" class="form-control" tabindex="20">
                    <option value="">Semua Kelurahan</option>
                    @foreach($kelurahan as $kel)
                        <option value="{{$kel->id_kelurahan}}" {{ ((empty($_GET['kel'])) ? '' : (($_GET['kel'] == $kel->id_kelurahan) ? 'selected' : '' )) }}>{{$kel->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-primary" tabindex="23">Submit</button>
</div>