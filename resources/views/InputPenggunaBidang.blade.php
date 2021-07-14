@extends('layout/main')

@section('content')
<!-- Header -->
<header class="w3-container" style="padding-top:22px;">
    <h5><b style="padding-left: 20;"><i class="fa fa-users fa-fw"></i> Input Pengguna Bidang</b></h5>
</header>

<br>

<div class="container">
    <div class="container">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form action="/simpan-data-bidang" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="Kode_Bidang" class="col-2">Kode Bidang:</label>
                <div class="col-10">
                    <input type="text" onkeypress="return angka(event)" class="form-control" name="Kode_Bidang"
                        id="Kode_Bidang" readOnly="true" placeholder="Kode Bidang" required
                        oninvalid="this.setCustomValidity('harap isikan Kode Bidang')"
                        oninput="this.setCustomValidity('')" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Nama_Bidang" class="col-2">Nama Bidang:</label>
                <div class="col-10">
                    <select type="text" name="Nama_Bidang" id="Nama_Bidang" class="form-control">
                        <option value="">Nama Bidang</option>
                        <option data-kode="A001" value="Bagian Tata Usaha Kanwil Aceh">Bagian Tata Usaha Kanwil Aceh
                        </option>
                        <option data-kode="A002" value="Bidang Survei dan Pemetaan Kanwil Aceh">Bidang Survei dan
                            Pemetaan Kanwil Aceh</option>
                        <option data-kode="A003" value="Bidang Penetapan Hak dan Pendaftaran Kanwil Aceh">Bidang
                            Penetapan Hak dan Pendaftaran Kanwil Aceh</option>
                        <option data-kode="A004" value="Bidang Penataan dan Pemberdayaan Kanwil Aceh">Bidang Penataan
                            dan Pemberdayaan Kanwil Aceh</option>
                        <option data-kode="A005" value="Bidang Pengadaan Tanah dan Pengembangan Kanwil Aceh">Bidang
                            Pengadaan Tanah dan Pengembangan Kanwil Aceh</option>
                        <option data-kode="A006" value="Bidang Pengendalian dan Penanganan Sengketa Kanwil Aceh">Bidang
                            Pengendalian dan Penanganan Sengketa Kanwil Aceh</option>
                    </select>
                    <script>
                    $("#Nama_Bidang").on("change", function() {
                        let Kode_Bidang = $(this).find(":selected").data("kode");
                        $("#Kode_Bidang").val(Kode_Bidang);

                    });
                    </script>

                </div>
            </div>

            <div class="form-group row">
                <label for="No_Aset" class="col-2">No Aset:</label>
                <div class="col-10">
                    <input type="text" onkeypress="return angka(event)" class="form-control" name="No_Aset"
                        placeholder="Masukan Kode Aset" required
                        oninvalid="this.setCustomValidity('harap isikan No Aset')" oninput="this.setCustomValidity('')"
                        autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Nama_barang" class="col-2">Nama Barang:</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="Nama_Barang" placeholder="Masukkan Nama barang"
                        required oninvalid="this.setCustomValidity('harap isikan Nama Barang')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Merk_Barang" class="col-2">Merk Barang:</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="Merk_Barang" placeholder="Masukkan Merk barang"
                        required oninvalid="this.setCustomValidity('harap isikan Merk Barang')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
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

            <button name="submit" type="submit" class="btn"
                style="background-color: #272c33;color: white;">Simpan</button>

        </form>
        <tbody>
        </tbody>
        </tfoot>
        </table>
    </div>
</div>

@endsection