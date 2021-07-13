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
                    <input type="text" value="{{$article->Kode_Bidang}}" onkeypress="return angka(event)"
                        class="form-control" name="Kode_Bidang" value="{{$article->id}}" placeholder="Kode bidang"
                        required oninvalid="this.setCustomValidity('harap isikan ')"
                        oninput="this.setCustomValidity('')" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Nama_Bidang" class="col-2">Nama Bidang:</label>
                <div class="col-10">
                    <select type="text" value="{{$article->Nama_Bidang}}" name="Nama_Bidang" id="Nama_Bidang"
                        class="form-control">
                        <option value="">Nama Bidang</option>
                        <option value="Bagian Tata Usaha Kanwil Aceh">Bagian Tata Usaha Kanwil Aceh</option>
                        <option value="Bidang Survei dan Pemetaan Kanwil Aceh">Bidang Survei dan Pemetaan Kanwil
                            Aceh
                        </option>
                        <option value="Bidang Penetapan Hak dan Pendaftaran Kanwil Aceh">Bidang Penetapan Hak dan
                            Pendaftaran Kanwil Aceh</option>
                        <option value="Bidang Penataan dan Pemberdayaan Kanwil Aceh">Bidang Penataan dan
                            Pemberdayaan
                            Kanwil Aceh</option>
                        <option value="Bidang Pengadaan Tanah dan Pengembangan Kanwil Aceh">Bidang Pengadaan Tanah
                            dan
                            Pengembangan Kanwil Aceh</option>
                        <option value="Bidang Pengendalian dan Penanganan Sengketa Kanwil Aceh">Bidang Pengendalian
                            dan
                            Penanganan Sengketa Kanwil Aceh</option>
                    </select>
                    <script>
                    $("#Nama_Bidang").val("{{$article->Nama_Bidang}}");
                    </script>

                    <div class="container">
                        <div class="padding_this">
                            <form method="POST" action="{{url('/proses-edit-penggunabidang')}}"
                                enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group row">
                                    <label for="Kode Bidang" class="col-2">Kode Bidang:</label>
                                    <div class="col-10">
                                        <input type="text" value="{{$article->Kode_Bidang}}"
                                            onkeypress="return angka(event)" class="form-control" readonly="true"
                                            name="Kode_Bidang" value="{{$article->id}}" placeholder="Kode bidang"
                                            required oninvalid="this.setCustomValidity('harap isikan ')"
                                            oninput="this.setCustomValidity('')" autocomplete="off">
                                    </div>

                                </div>
                        </div>


                        <div class="form-group row">
                            <label for="No_Aset" class="col-2">No Aset:</label>
                            <div class="col-10">
                                <input type="text" value="{{$article->No_Aset}}" class="form-control" name="No_Aset"
                                    placeholder="No Aset" required
                                    oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                                    oninput="this.setCustomValidity('')" autocapitalize="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nama Barang" class="col-2">Nama Barang:</label>
                            <div class="col-10">
                                <input type="text" value="{{$article->Nama_Barang}}" class="form-control"
                                    name="Nama_Barang" placeholder="Nama Barang" required
                                    oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                                    oninput="this.setCustomValidity('')" autocapitalize="off">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="Kondisi" class="col-2">Kondisi:</label>
                            <div class="col-10">
                                <select type="text" value="{{$article->Kondisi}}" name="Kondisi" id="kondisi"
                                    class="form-control">
                                    <option value="">Kondisi Barang</option>
                                    <option value="bagus">Bagus</option>
                                    <option value="rusak">Rusak</option>

                                </select>
                                <script>
                                $("#kondisi").val("{{$article->Kondisi}}");
                                </script>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Image" class="col-2">Image :</label>
                            <div class="col-10">
                                <input type="file" name="Image" placeholder="Ambiol" required>
                            </div>
                        </div>

                        <button type="submit" style="background-color:#452414; color:white;">
                            Simpan</button>
        </form>
    </div>
    @endsection

    <button type="submit" style="background-color:#452414; color:white;">Simpan</button>
    </form>
</div>
@endsection