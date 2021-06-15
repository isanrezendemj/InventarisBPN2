@extends('layout/main')

@section('content')
<!-- Header -->
<header class="w3-container" style="padding-top:22px">
    <h5><b style="    padding-left: 20;"><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
</header>
<br><br>
<div class="row">
    <div class="col-lg-4 col-sm-2">
        <div class="card" style="background-color: #272c33;">
            <p style="margin-top: -42;color: white;">penggunabidang</p>
            <h3 style="padding-left: 204;background-color: #272c33; color: white;">{{$Pengguna_bidang}}</h3>

        </div>
    </div>
    <div class="col-lg-4 col-sm-2">
        <div class="card" style="background-color: #272c33; padding-top: ;">
            <p style="  margin-top: -42;color: white;">penggunapegawai</p>
            <h3 style="padding-left: 220;background-color: #272c33; color: white;"> {{$Pengguna_pegawai}}</h3>
        </div>
    </div>
    <div class="col-lg-4 col-sm-2">
        <div class="card" style="background-color: 	#272c33;">
            <p style="margin-top: -42;color:white;">Inventaris</p>
            <h3 style="padding-left: 188;background-color: #272c33; color: white;">{{$inventaris}}</h3>
        </div>
    </div>




    </body>

    </html>

    <style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: none;
        color: white;
        text-align: center;
    }
    </style>
    </head>

    <body>

        @endsection