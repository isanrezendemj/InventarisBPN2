@extends('layout/main')
@section('content')

 <!-- Header -->
 <header class="w3-container" style="padding-top:22px;">
        <h5><b style="padding-left: 20;"><i class="fa fa-users fa-fw"></i> Edit Data Pengguna Pegawai</b></h5>
      </header>
   
     <br>

  <div class="container">
  <div class="padding_this">
  <form method="POST" action="{{url('/proses-edit-penggunapegawai')}}"  enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group row">
                    <label for="NRP_NIK" class="col-2">NRP/NIK:</label>
                    <div class="col-10">
                        <input type="text" value="{{$article->NRP_NIK}}" onkeypress="return angka(event)" class="form-control" name="NRP_NIK"
                            placeholder="NRP/NIK" required oninvalid="this.setCustomValidity('harap isikan nrp/nik')"
                            oninput="this.setCustomValidity('')" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Nama_Pegawai_PPNPN" class="col-2">Nama :</label>
                    <div class="col-10">
                        <input type="text" value="{{$article->Nama_Pegawai_PPNPN}}" class="form-control" name="Nama_Pegawai_PPNPN" placeholder="Masukkan Nama Anda" required
                            oninvalid="this.setCustomValidity('harap isikan nama lengkap')"
                            oninput="this.setCustomValidity('')" autocapitalize="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Nama_Bidang" class="col-2">Bidang:</label>
                    <div class="col-10">
                        <select type="text" name="Bidang" class="form-control">
                            <option value="">Bidang</option>
                            <option value="Bagian Tata Usaha Kanwil Aceh">Bagian Tata Usaha Kanwil Aceh</option>
                            <option value="Bidang Survei dan Pemetaan Kanwil Aceh">Bidang Survei dan Pemetaan Kanwil Aceh</option>
                            <option value="Bidang Penetapan Hak dan Pendaftaran Kanwil Aceh">Bidang Penetapan Hak dan Pendaftaran Kanwil Aceh</option>
                            <option value="Bidang Penataan dan Pemberdayaan Kanwil Aceh">Bidang Penataan dan Pemberdayaan Kanwil Aceh</option>
                            <option value="Bidang Pengadaan Tanah dan Pengembangan Kanwil Aceh">Bidang Pengadaan Tanah dan Pengembangan Kanwil Aceh</option>
                            <option value="Bidang Pengendalian dan Penanganan Sengketa Kanwil Aceh">Bidang Pengendalian dan Penanganan Sengketa Kanwil Aceh</option>
                            
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Status" class="col-2">Status:</label>
                    <div class="col-10">
                        <select type="text" value="{{$article->Status}}" name="Status" class="form-control">
                            <option value="">Status</option>
                            <option value="Pegawai">Pegawai</option>
                            <option value="PPNPN">PPNPN</option>
                           
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Kode Barang" class="col-2">Kode Barang :</label>
                    <div class="col-10">
                        <input type="text" value="{{$article->Kode_Barang}}" class="form-control" name="Kode_Barang" placeholder="Masukkan Kode Barang" required
                            oninvalid="this.setCustomValidity('harap isikan nama lengkap')"
                            oninput="this.setCustomValidity('')" autocapitalize="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Nama_barang" class="col-2">Nama Barang :</label>
                    <div class="col-10">
                        <input type="text" value="{{$article->Nama_Barang}}" class="form-control" name="Nama_Barang" placeholder="Masukkan Nama Barang" required
                            oninvalid="this.setCustomValidity('harap isikan nama ')"
                            oninput="this.setCustomValidity('')" autocapitalize="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Kategori" class="col-2">Kategori:</label>
                    <div class="col-10">
                        <select type="text" name="Kategori" class="form-control">
                            <option value="">Kategori</option>
                            <option value="Elektronik">Elektronik</option>
                            <option value="Furniture">Furniture</option>
                            <option value="Kendaraan">Kendaraan</option>
                           
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Image" class="col-2">image :</label>
                    <div class="col-10">
                        <input type="file"name="Image" placeholder="Masukkan Nama Barang" required>
                    </div>
                </div>

    <button type="submit">Edit</button>
  </form>
</div>
@endsection