@extends('layout/main')
@section('content')

<!-- Header -->
<header class="w3-container" style="padding-top:22px;">
    <h5><b style="padding-left: 20;"><i class="fa fa-users fa-fw"></i> Register Admin Mobile</b></h5>
</header>
<hr>
<div class="p-4">
    <div id="wrap-button">
        <a href="/inputregistermobile" class="btn btn-primary" style="background-color:#452414;">Input</a>
        <!-- <div class="dt-buttons" style="margin-left: 10;"></div> -->
    </div>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%;padding: 0px;">

        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Kode Keamanan</th>
                <th>Aksi</th>


            </tr>
        </thead>

        <tbody>
            @foreach($RegisterMobile as $test )
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>

                <td scope="row">{{ $test->nama }}</td>
                <td scope="row">{{ $test->code }}</td>
                <td>

                    <a href="{{url('/delete-data-register/'.$test->id_security)}}" class="badge badge-danger m-2"><i
                            class="fas fa-fw fa-trash"></i> delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </tfoot>
    </table>
</div>

@endsection