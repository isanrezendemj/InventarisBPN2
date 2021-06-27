@extends('layout/main')
@section('content')

 <!-- Header -->
 <header class="w3-container" style="padding-top:22px;">
        <h5><b style="padding-left: 20;"><i class="fa fa-users fa-fw"></i> Edit Data Bidang</b></h5>
      </header>
   
     <br>

  <div class="container">
  <div class="padding_this">
  <form method="POST" action="{{url('/proses-edit')}}">
    {{csrf_field()}}

                <div class="form-group row">
                    <label for="Kode Bidang" class="col-2">Kode Bidang:</label>
                    <div class="col-10">
                        <input type="text" value="{{$article->Kode_Bidang}}" onkeypress="return angka(event)" class="form-control" name="Kode_Bidang"value="{{$article->id}}"
                            placeholder="Kode bidang" required oninvalid="this.setCustomValidity('harap isikan ')"
                            oninput="this.setCustomValidity('')" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Nama Bidang" class="col-2">Nama Bidang:</label>
                    <div class="col-10">
                        <input type="text" onkeypress="return angka(event)" class="form-control" name="Nama_Bidang"
                            placeholder="Nama bidang" required oninvalid="this.setCustomValidity('harap isikan ')"
                            oninput="this.setCustomValidity('')" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Jumlah Pegawai" class="col-2">Jumlah Pegawai:</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="Jumlah_Pegawai" placeholder="Pegawai" required
                            oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                            oninput="this.setCustomValidity('')" autocapitalize="off">
                    </div>
                </div>  

                <div class="form-group row">
                    <label for="Jumlah PPNPN" class="col-2">Jumlah PPNPN:</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="Jumlah_PPNPN" placeholder="PPNPN" required
                            oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                            oninput="this.setCustomValidity('')" autocapitalize="off">
                    </div>
                </div>  

                <div class="form-group row">
                    <label for="Keterangan" class="col-2">Keterangan:</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="Keterangan" placeholder="Keterangan" required
                            oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                            oninput="this.setCustomValidity('')" autocapitalize="off">
                    </div>
                </div>  
    <button type="submit">Edit</button>
  </form>
</div>
@endsection