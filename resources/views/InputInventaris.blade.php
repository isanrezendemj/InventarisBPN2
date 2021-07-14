@extends('layout/main')
@section('content')

<!-- Header -->
<header class="w3-container" style="padding-top:22px;">
    <h5><b style="padding-left: 20;"><i class="fa fa-users fa-fw"></i> Inventaris</b></h5>
</header>

<!-- <br> -->

<div class="container">
    <form action="/simpan-data-inventaris" method="post" enctype="multipart/form-data">
        @csrf


        <br>

        <div class="form-group row">
            <label for="Nama Barang" class="col-2">Nama Barang:</label>
            <div class="col-10">
                <input type="text" class="form-control" name="Nama_Barang" placeholder="Nama Barang" required
                    oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                    oninput="this.setCustomValidity('')" autocapitalize="off">
            </div>
        </div>



        <div class="form-group row">
            <label for="No Aset" class="col-2">No Aset:</label>
            <div class="col-10">
                <input type="text" class="form-control @error ('No_Aset') is-invalid @enderror" name="No_Aset"
                    placeholder="Kode Aset" required oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                    oninput="this.setCustomValidity('')" autocapitalize="off">
                <div class="invalid-feedback">
                    <b>No Aset!</b> yang anda masukkan sudah terdaftar
                </div>
            </div>

        </div>


        <div class="form-group row">
            <label for="Tgl Peroleh" class="col-2">Tgl Peroleh:</label>
            <div class="col-10">
                <input type="Date" class="form-control" name="Tgl_Peroleh" placeholder="Tgl Peroleh" required
                    oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                    oninput="this.setCustomValidity('')" autocapitalize="off">
            </div>
        </div>

        <div class="form-group row">
            <label for="Asal Peroleh" class="col-2">Asal Peroleh:</label>
            <div class="col-10">
                <input type="text" class="form-control" name="Asal_Perolehan" placeholder="Asal Peroleh" required
                    oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                    oninput="this.setCustomValidity('')" autocapitalize="off">
            </div>
        </div>

        <div class="form-group row">
            <label for="Rupiah Aset" class="col-2">Rupiah Aset:</label>
            <div class="col-10">
                <input type="text" class="form-control" name="Rupiah_Aset" placeholder="Rupiah Aset" id="rupiah"
                    required oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                    oninput="this.setCustomValidity('')" autocapitalize="off">
            </div>
        </div>

        <div class="form-group row">
            <label for="Tempat Aset" class="col-2">Tempat Aset:</label>
            <div class="col-10">
                <input type="text" class="form-control" name="Tempat_Aset" placeholder="Tempat Aset" required
                    oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                    oninput="this.setCustomValidity('')" autocapitalize="off">
            </div>
        </div>

        <div class="form-group row">
            <label for="Merk Barang" class="col-2">Merk Barang:</label>
            <div class="col-10">
                <input type="text" class="form-control" name="Merk_Barang" placeholder="Merk Barang" required
                    oninvalid="this.setCustomValidity('harap isikan dengan lengkap')"
                    oninput="this.setCustomValidity('')" autocapitalize="off">
            </div>
        </div>

        <div class="form-group row">
            <label for="Kondisi" class="col-2">Kondisi:</label>
            <div class="col-10">
                <select type="text" name="Kondisi" class="form-control" placeholder="Masukkan Nama Barang" required>
                    <option value="">Kondisi Barang</option>
                    <option value="bagus">Bagus</option>
                    <option value="bagus">Rusak</option>

                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Image" class="col-2">image :</label>
            <div class="col-10">
                <input type="file" name="Image" placeholder="Masukkan Nama Barang" required>
            </div>
        </div>

        <button name="submit" type="submit" class="btn" style="background-color: #272c33;color: white;">Simpan</button>

    </form>
    <tbody>
    </tbody>
    </tfoot>
    </table>
</div>
</div>

@endsection