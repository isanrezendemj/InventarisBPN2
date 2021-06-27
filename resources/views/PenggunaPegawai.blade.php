@extends('layout/main')
@section('content')

<!-- Header -->
<header class="w3-container" style="padding-top:22px;">
    <h5><b style="padding-left: 20;"><i class="fa fa-users fa-fw"></i> Pengguna Pegawai</b></h5>
</header>
<hr>
<div class="p-4">
    <div id="wrap-button">
        <a href="/inputpenggunapegawai" class="btn btn-primary" style="background-color:#452414;">Input</a>
        <!-- <div class="dt-buttons" style="margin-left: 10;"></div> -->
    </div>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%;padding: 0px;">

        <thead>
            <tr>
                <th>No</th>
                <th>NRP_NIK</th>
                <th>Nama Pegawai/PPNPN</th>
                <th>Bidang</th>
                <th>Status</th>
                <th>No Aset</th>
                <th>Nama Barang</th>
                <th>Kondisi</th>
                <th>Image</th>
                <th>Aksi</th>

            </tr>
        </thead>

        <tbody>
            @foreach($pengguna_pegawai as $test )
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td scope="row">{{ $test->NRP_NIK }}</td>
                <td scope="row">{{ $test->Nama_Pegawai_PPNPN }}</td>
                <td scope="row">{{ $test->Bidang }}</td>
                <td scope="row">{{ $test->Status}}</td>
                <td scope="row">{{ $test->No_Aset}}</td>
                <td scope="row">{{ $test->Nama_Barang}}</td>
                <td scope="row">{{ $test->Kondisi}}</td>
                <td scope="row"><img src="{{ 'storage/'.$test->Image }}" width="100px" /></td>
                <td>
                    <a href="{{url('/edit-data-penggunapegawai/'.$test->NRP_NIK)}}" class="badge badge-warning m-2"><i
                            class="fas fa-fw fa-edit"></i> Edit</a>
                    <a href="{{url('/delete-data-penggunapegawai/'.$test->NRP_NIK)}}" class="badge badge-danger m-2"><i
                            class="fas fa-fw fa-trash"></i> delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </tfoot>
    </table>
</div>

@endsection