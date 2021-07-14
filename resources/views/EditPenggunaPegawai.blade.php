@extends('layout/main')
@section('content')

<!-- Header -->
<header class="w3-container" style="padding-top:22px;">
    <h5><b style="padding-left: 20;"><i class="fa fa-users fa-fw"></i> Edit Data Pengguna Pegawai</b></h5>
</header>

<br>

<div class="container">
    <div class="padding_this">
        <form method="POST" action="{{url('/proses-edit-penggunapegawai')}}" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group row">
                <label for="NRP_NIK" class="col-2">NRP/NIK:</label>
                <div class="col-10">
                    <input type="text" value="{{$article->NRP_NIK}}" onkeypress="return angka(event)"
                        class="form-control" name="NRP_NIK" placeholder="NRP/NIK" required
                        oninvalid="this.setCustomValidity('harap isikan nrp/nik')" oninput="this.setCustomValidity('')"
                        autocomplete="off" readonly="readonly">
                </div>
            </div>

            <div class="form-group row">
                <label for="Nama_Pegawai_PPNPN" class="col-2">Nama :</label>
                <div class="col-10">
                    <input type="text" value="{{$article->Nama_Pegawai_PPNPN}}" class="form-control"
                        name="Nama_Pegawai_PPNPN" placeholder="Masukkan Nama Anda" required
                        oninvalid="this.setCustomValidity('harap isikan nama lengkap')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Bidang" class="col-2">Bidang:</label>
                <div class="col-10">
                    <select type="text" value="{{$article->Bidang}}" name="Bidang" id="Bidang" class="form-control">
                        <option value="">Bidang</option>
                        <option value="Bagian Tata Usaha Kanwil Aceh">Bagian Tata Usaha Kanwil Aceh</option>
                        <option value="Bidang Survei dan Pemetaan Kanwil Aceh">Bidang Survei dan Pemetaan Kanwil Aceh
                        </option>
                        <option value="Bidang Penetapan Hak dan Pendaftaran Kanwil Aceh">Bidang Penetapan Hak dan
                            Pendaftaran Kanwil Aceh</option>
                        <option value="Bidang Penataan dan Pemberdayaan Kanwil Aceh">Bidang Penataan dan Pemberdayaan
                            Kanwil Aceh</option>
                        <option value="Bidang Pengadaan Tanah dan Pengembangan Kanwil Aceh">Bidang Pengadaan Tanah dan
                            Pengembangan Kanwil Aceh</option>
                        <option value="Bidang Pengendalian dan Penanganan Sengketa Kanwil Aceh">Bidang Pengendalian dan
                            Penanganan Sengketa Kanwil Aceh</option>

                    </select>
                    <script>
                    $("#Bidang").val("{{$article->Bidang}}");
                    </script>
                </div>
            </div>

            <div class="form-group row">
                <label for="Status" class="col-2">Status:</label>
                <div class="col-10">
                    <select type="text" value="{{$article->Status}}" name="Status" id="Status" class="form-control">
                        <option value="">Status</option>
                        <option value="Pegawai">Pegawai</option>
                        <option value="PPNPN">PPNPN</option>

                    </select>
                    <script>
                    $("#Status").val("{{$article->Status}}");
                    </script>
                </div>
            </div>

            <div class="form-group row">
                <label for="No_Aset" class="col-2">No Aset :</label>
                <div class="col-10">
                    <input type="text" value="{{$article->No_Aset}}" class="form-control" name="No_Aset"
                        placeholder="Masukkan Kode Barang" required
                        oninvalid="this.setCustomValidity('harap isikan nama lengkap')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Nama_barang" class="col-2">Nama Barang :</label>
                <div class="col-10">
                    <input type="text" value="{{$article->Nama_Barang}}" class="form-control" name="Nama_Barang"
                        placeholder="Masukkan Nama Barang" required
                        oninvalid="this.setCustomValidity('harap isikan nama ')" oninput="this.setCustomValidity('')"
                        autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Kondisi" class="col-2">Kondisi:</label>
                <div class="col-10">
                    <select type="text" name="Kondisi" id="kondisi" class="form-control">
                        <option value="{{ $article->Kondisi }}">{{ $article->Kondisi }}</option>
                        <option value="bagus">Bagus</option>
                        <option value="Rusak">Rusak</option>

                    </select>
                    <script>
                    $("#kondisi").val("{{$article->Kondisi}}");
                    </script>
                </div>
            </div>

            <div class="form-group row">
                <label for="Image" class="col-2">image :</label>
                <div class="col-10">
                    <input type="file" name="Image" placeholder="Ambiol">
                </div>
            </div>
            <button type="submit" style="background-color:#452414; color:white;">Simpan</button>
        </form>
    </div>
    @endsection