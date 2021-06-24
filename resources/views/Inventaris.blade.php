@extends('layout/main')
@section('content')

<!-- Header -->
<header class="w3-container" style="padding-top:22px;">
    <h5><b style="padding-left: 20;"><i class="fa fa-users fa-fw"></i> Inventaris</b></h5>
</header>
<hr>
<div class="p-4">
    <div id="wrap-button">
        <a href="/inputinventaris" style="background-color:#452414;color: #ffffff" class="btn">Input</a>
        <!-- <div class="dt-buttons" style="margin-left: 10;"></div> -->
    </div>
    <hr>
    <table id="tablePrint" class="table table-striped table-bordered" style="width:100%;padding: 0px; margin-left: 10;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kode Aset</th>
                <th>Tgl Peroleh</th>
                <th>Asal Perolehan</th>
                <th>Rupiah Aset</th>
                <th>Tempat Aset</th>
                <th>Merk Barang</th>
                <th>Kondisi</th>
                <th>Image</th>
                <th>Aksi</th>


            </tr>
        </thead>
        <tbody>
            @foreach($inventaris as $test )
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td scope="row">{{ $test->Nama_Barang }}</td>
                <td scope="row">{{ $test->No_Aset }}</td>
                <td scope="row">{{ $test->Tgl_Peroleh }}</td>
                <td scope="row">{{ $test->Asal_Perolehan }}</td>
                <td scope="row">{{ $test->Rupiah_Aset }}</td>
                <td scope="row">{{ $test->Tempat_Aset }}</td>
                <td scope="row">{{ $test->Merk_Barang }}</td>
                <td scope="row">{{ $test->Kondisi }}</td>
                <td scope="row"><img src="{{ 'storage/'.$test->Image }}" width="100px" /></td>
                <td>
                    <!-- <a href="{{url('/edit-data-inventaris/'.$test->id)}}" class="badge badge-success">Edit</a>
                    <a href="{{url('/delete-data-inventaris/'.$test->id)}}" class="badge badge-success">delete</a> -->

                    <a href="{{url('/edit-data-inventaris/'.$test->id)}}" class="badge badge-warning m-2"><i
                            class="fas fa-fw fa-edit"></i> Edit</a>
                    <a href="{{url('/delete-data-inventaris/'.$test->id)}}" class="badge badge-danger m-2"><i
                            class="fas fa-fw fa-trash"></i> delete</a>
                    <a data-code="{{ $test->No_Aset }}" class="badge badge-secondary getQR" data-toggle="modal"
                        data-target="#showQR">QR</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="showQR" tabindex="-1" role="dialog" aria-labelledby="showQRLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showQRLabel">QR Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="capture" class="modal-body d-flex justify-content-center align-items-center">
                <div class="content">
                    <div class="mt-3 mb-3" id="qrcode"></div>
                    <hr>
                    <h3 class="text-center mt-2 mb-3 codeValue">-</h3>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <a id="ambilGambar" download="#" href="#" class="btn btn-success">Simpan Gambar</a>
            </div>
        </div>
    </div>
</div>
<script>
var qrcode = new QRCode("qrcode");

$(".getQR").on('click', function() {
    $("#ambilGambar").addClass("disabled");
    let code = $(this).data('code').toString();
    //console.log(code);
    qrcode.makeCode(code);
    $('.codeValue').html(code);
    let sumber = document.querySelector("#capture");

    setTimeout(() => {
        html2canvas(sumber)
            .then(canvas => {
                let img = canvas.toDataURL("image/png");
                //console.log(img);
                $("#ambilGambar").attr("href", img);
                $("#ambilGambar").attr("download", code + ".png");
            });
        $("#ambilGambar").removeClass("disabled");
    }, 3000);

})


//btn print dan excel
$(document).ready(function() {
    var table = $('#tablePrint').DataTable({
        buttons: [{
                extend: 'print',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7]
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible'
                },
            }
        ]
    });

    table.buttons().container()
        .appendTo('#wrap-button');
});
</script>
@endsection
