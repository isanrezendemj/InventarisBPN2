<html>
<title>ATRBPNACEH</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src="https://kit.fontawesome.com/405f324e77.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="{{ asset('/Chart.js') }}"></script>
<script type="text/javascript" src="{{ asset('/qrcode.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/html2canvas.min.js') }}"></script>

<style>
html,
body,
h1,
h2,
h3,
h4,
h5 {
    font-family: "Raleway", sans-serif;
    background-color: #f1f2f7;

}
</style>

<body class="background-color:#f1f2f7;">

    <!-- Top container -->
    <div class="w3-bar w3-top  w3-large" style="z-index:-1;    color: #fff!important;
    background-color:#f1f2f7
    height: 43px">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey"
            onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-right"></span>
    </div>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-aquamarine w3-animate-left" style="z-index:4;width:331px;margin-top: -6px;background-color
    :#272c33;" id="mySidebar">
        <div class="w3-container w3-row" style="height:80px; padding-top: 35px">
            <div class="w3-col s4">
                <img src="logo.png" class="w3-circle w3-margin-right" style="width:46px">
            </div>
            <div class="w3-col s8 w3-bar pt-2">
                <span style="color: white;">Welcome, <strong>Admin</strong></span><br>
            </div>
        </div>
        <hr>
        <div class="w3-container">
            <a href="/home" class="w3-bar-item w3-button w3-padding" style="color: white; margin-left: -20;"><i
                    class=""></i> 
                Dasboard</a>
        </div>
        <div class="w3-bar-block">
            <a href="#" class="padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()"
                title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>

            <a href="/Inventaris" class="w3-bar-item w3-button w3-padding" style="color: white"><i
                    class="fa fa-boxes fa-fw"></i> 
                Inventaris</a>

            <a href="/penggunabidang" class="w3-bar-item w3-button w3-padding" style="color: white"> <i
                    class="fa fa-users fa-fw"></i> 
                Pengguna Bidang</a>

            <a href="/penggunapegawai" class="w3-bar-item w3-button w3-padding" style="color: white"> <i
                    class="fa fa-users fa-fw"></i> 
                Pengguna Pegawai dan PPNPN</a>

            <a href="{{ url('/register') }}" class="w3-bar-item w3-button w3-padding" style="color: white"> <i
                    class=""></i> 
                Register</a>

            <a href="{{ url('/logout') }}" class="w3-bar-item w3-button w3-padding" style="color: white"> <i
                    class=""></i> 
                Logout</a>

        </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="background-color: #f1f2f7;;;margin-left:330px;">
        <!-- ISI DALAM YANG AKAN BERUBAH -->
        @yield('content')
    </div>

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

        <div class="footer" style="padding-top: 1px;">
            <p style="padding-left: 350;color:#272c33;">@KanwilBpnAceh</p>
        </div>
    </body>

</html>
</script>
</body>

</html>

</script>
<h1 style="font-size: 20;padding: top 1px; ;"> </h1>
</body>

</html>

<!-- End page content -->
</div>
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable();
    table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
});
</script>
</body>
<style>
.card {
    background-color: white;
    padding: 56px;
    margin: 20px;
    margin-top: -32px;
    border-radius: 12px;

}

body {
    background-color: white(255, 255, 220);
}

p {
    /* margin-bottom: 12px; */
    margin-left: -36px;
    /* TOP: -30PX; */
    font-size: 19px;
}
</style>

</html>