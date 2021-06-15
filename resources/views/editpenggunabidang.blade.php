@extends('layout/main')
@section('content')

 <!-- Header -->
 <header class="w3-container" style="padding-top:22px;">
        <h5><b style="padding-left: 20;"><i class="fa fa-users fa-fw"></i> Edit Data Pengguna Bidang</b></h5>
      </header>
   
     <br>

  <div class="container">
  <div class="padding_this">
  <form method="POST" action="{{url('/proses-edit-penggunabidang')}}" enctype="multipart/form-data">
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
                        <input type="text"  value="{{$article->Nama_Bidang}}" onkeypress="return angka(event)" class="form-control" name="Nama_Bidang"
                            placeholder="Nama bidang" required oninvalid="this.setCustomValidity('harap isikan ')"
                            oninput="this.setCustomValidity('')" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Kode Barang" class="col-2">Kode Barang:</label>
                    <div class="col-10">
                        <input type="text"  value="{{$article->Kode_Barang}}" class="form-control" name="Kode_Barang" placeholder="Kode Barang" required
                            oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                            oninput="this.setCustomValidity('')" autocapitalize="off">
                    </div>
                </div>  

                <div class="form-group row">
                    <label for="Nama Barang" class="col-2">Nama Barang:</label>
                    <div class="col-10">
                        <input type="text"  value="{{$article->Nama_Barang}}" class="form-control" name="Nama_Barang" placeholder="Nama Barang" required
                            oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                            oninput="this.setCustomValidity('')" autocapitalize="off">
                    </div>
                </div>  

                <div class="form-group row">
                    <label for="Kategori" class="col-2">Kategori:</label>
                    <div class="col-10">
                        <select type="text" name="Kategori" class="form-control">
                            <option value="">Kategori</option>
                            <option value="Furniture">Furniture</option>
                            <option value="Elektronik">Elektronik</option>
                            <option value="kendaraan">kendaraan</option>
                            
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Kondisi" class="col-2">Kondisi:</label>
                    <div class="col-10">
                        <select type="text" name="Kondisi" class="form-control">
                            <option value="">Kondisi Barang</option>
                            <option value="bagus">Bagus</option>
                            <option value="bagus">Rusak</option>
                          
                        </select>
                    </div>
                </div> 

                <div class="form-group row">
                    <label for="Image" class="col-2">Image :</label>
                    <div class="col-10">
                        <input type="file" name="Image" placeholder="Masukkan Gambar" required>
                    </div>
                </div>

    <button type="submit">Edit</button>
  </form>
</div>
@endsection