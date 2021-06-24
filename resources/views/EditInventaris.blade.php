@extends('layout/main')
@section('content')

<!-- Header -->
<header class="w3-container" style="padding-top:22px;">
    <h5><b style="padding-left: 20;"><i class="fa fa-users fa-fw"></i> Edit Data Inventaris</b></h5>
</header>

<br>

<div class="container">
    <div class="padding_this">
        <form method="POST" action="{{url('/proses-edit-inventaris')}}" enctype="multipart/form-data">
            {{csrf_field()}}

            <div style="display: none" class="form-group row">
                <label for="id Barang" class="col-2">Id Barang :</label>
                <div class="col-10">
                    <input type="text" value="{{$article->id}}" onkeypress="return angka(event)" class="form-control"
                        name="id" placeholder="ID" required oninvalid="this.setCustomValidity('harap isikan ID')"
                        oninput="this.setCustomValidity('')" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Kode Barang" class="col-2">Kode Barang :</label>
                <div class="col-10">
                    <input type="text" value="{{$article->Kode_Barang}}" class="form-control" name="Kode_Barang"
                        placeholder="Kode Barang" required
                        oninvalid="this.setCustomValidity('harap isikan Kode Barang')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Nama Barang" class="col-2">Nama Barang:</label>
                <div class="col-10">
                    <input type="text" value="{{$article->Nama_Barang}}" class="form-control" name="Nama_Barang"
                        placeholder="Nama Barang" required
                        oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="No Aset" class="col-2">No Aset:</label>
                <div class="col-10">
                    <input type="text" value="{{$article->No_Aset}}" class="form-control" name="No_Aset"
                        placeholder="No Aset" required oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Tgl Peroleh" class="col-2">Tgl Peroleh:</label>
                <div class="col-10">
                    <input type="Date" value="{{$article->Tgl_Peroleh}}" class="form-control" name="Tgl_Peroleh"
                        placeholder="Tgl Peroleh" required
                        oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Asal Peroleh" class="col-2">Asal Peroleh:</label>
                <div class="col-10">
                    <input type="text" value="{{$article->Asal_Perolehan}}" class="form-control" name="Asal_Perolehan"
                        placeholder="Asal Peroleh" required
                        oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Rupiah Aset" class="col-2">Rupiah Aset:</label>
                <div class="col-10">
                    <input type="text" value="{{$article->Rupiah_Aset}}" class="form-control" name="Rupiah_Aset"
                        placeholder="Rupiah Aset" required
                        oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Rupiah Aset" class="col-2">Tempat Aset:</label>
                <div class="col-10">
                    <input type="text" value="{{$article->Tempat_Aset}}" class="form-control" name="Tempat_Aset"
                        placeholder="Tempat Aset" required
                        oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Merk Barang" class="col-2">Merk Barang:</label>
                <div class="col-10">
                    <input type="text" value="{{$article->Merk_Barang}}" class="form-control" name="Merk_Barang"
                        placeholder="Merk Barang" required
                        oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                        oninput="this.setCustomValidity('')" autocapitalize="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="Kondisi" class="col-2">Kondisi:</label>
                <div class="col-10">
                    <select type="text" value="{{$article->Kondisi}}" name="Kondisi" class="form-control">
                        <option value="">Kondisi Barang</option>
                        <option value="bagus">Bagus</option>
                        <option value="bagus">Rusak</option>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="Image" class="col-2">image :</label>
                <div class="col-10">
                    <input type="file" value="{{$article->Image}}" name="Image" placeholder="Masukkan Nama Barang">
                </div>
            </div>
            <button type="submit">Edit</button>
        </form>
    </div>
    @endsection