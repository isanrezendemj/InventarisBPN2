@extends('layout/main')

@section('content')
<!-- Header -->
<header class="w3-container" style="padding-top:22px;">
    <h5><b style="padding-left: 20;"><i class="fa fa-users fa-fw"></i> Input Admin Mobile</b></h5>
</header>

<br>

<div class="container">
    <div class="container">

        <form action="/simpan-data-register" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="id_security" class="col-2">id:</label>
                <div class="col-10">
                    <input type="text" onkeypress="return angka(event)" class="form-control" name="id_security"
                        placeholder="id security" required
                        oninvalid="this.setCustomValidity('harap isikan Kode Bidang')"
                        oninput="this.setCustomValidity('')" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="nama" class="col-2">Nama:</label>
                <div class="col-10">
                    <input type="text" onkeypress="return angka(event)" class="form-control" name="nama"
                        placeholder="nama" required oninvalid="this.setCustomValidity('harap isikan Kode Bidang')"
                        oninput="this.setCustomValidity('')" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="code" class="col-2">Kode:</label>
                <div class="col-10">
                    <input type="text" onkeypress="return angka(event)" class="form-control" name="code"
                        placeholder="Masukan code" required oninvalid="this.setCustomValidity('harap isikan code')"
                        oninput="this.setCustomValidity('')" autocomplete="off">
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