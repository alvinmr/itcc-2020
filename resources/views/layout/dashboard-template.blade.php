<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--fav icon-->
    <link rel="icon" type="image/jpg" href="{{asset('/desain-2020/logo-red.png')}}">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('asset/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/icon-sets.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/main.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/demo.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/learn.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/css/dataTables.bootstrap.min.css')}}">

    <link href="{{asset('assets2020/css/custom.css')}}" rel="stylesheet">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <!-- Javascript -->
    <script src="{{asset('asset/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/lib/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('asset/js/klorofil.min.js')}}"></script>
    <script src="{{asset('DataTables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('DataTables/js/dataTables.bootstrap.min.js')}}"></script>
    
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- SIDEBAR -->
        <div class="sidebar" style="background: linear-gradient(0deg, rgba(32,32,32,1) 0%, rgba(22,22,22,1) 35%);">
            <div class="brand" style="background: transparent;">
                <a><img src="{{asset('/desain-2020/logo-red.png')}}" alt="ITCC Logo" class="img-responsive logo" width="100px" height="100px"></a>
            </div>
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li class="hidden-lg"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color: rgba(33, 57, 80, 1);"><i class="glyphicon glyphicon-user"></i> <span style="color: white">{{Auth::user()->group_name}}</span></a></li>
                        <li><a href="/dashboard"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
                        <li><a href="/verifikasi"><i class="glyphicon glyphicon-list-alt"></i> <span>Pembayaran Pendaftaran</span></a></li>
                        @if(Auth::user()->competition_id==4 or Auth::user()->competition_id==5 or Auth::user()->competition_id==3)
                            <li><a href="/upload"><i class="glyphicon glyphicon-cloud-upload"></i> <span>Upload Proposal</span></a></li>
                        @endif
                        
                        @if(Auth::user()->competition_id==2)
                            <li><a href="/uploadBerkasWeb"><i class="glyphicon glyphicon-cloud-upload"></i> <span>Upload Bahan Web</span></a></li>
                        @endif
                        
                        @if(Auth::user()->competition_id == 5)
                            <li><a href="/uploadVideoAPK"><i class="glyphicon glyphicon-cloud-upload"></i> <span>Upload Video dan APK</span></a></li>
                        @endif
                        @if(Auth::user()->competition_id == 3 or Auth::user()->competition_id == 4)
                            <li><a href="/uploadPowerPoint"><i class="glyphicon glyphicon-cloud-upload"></i> <span>Upload PowerPoint</span></a></li>
                        @endif
                        
                        @if(Auth::user()->competition_id == 4)
                            <li><a href="/uploadPoster"><i class="glyphicon glyphicon-cloud-upload"></i> <span>Upload Poster</span></a></li>
                        @endif

                        @if(Auth::user()->competition_id==3)
                            <li><a href="/uploadPosterInovasi"><i class="glyphicon glyphicon-cloud-upload"></i> <span>Upload Poster</span></a></li>
                        @endif
                        <li><a href="/setting"><i class="glyphicon glyphicon-cog"></i> <span>Setting</span></a></li>
                       {{--  <li><a href="/pesanUser"><i class="glyphicon glyphicon-envelope"></i> <span>Pesan Masuk</span> @yield('pesan')</a></li>
                        <li><a href="/pesanUserKeluar"><i class="glyphicon glyphicon-envelope"></i> <span>Pesan Keluar</span></a></li> --}}
                        <li class="hidden-lg"><a href="#" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-log-out"></i> <span>Log Out</span></a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                        </form>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- NAVBAR -->
            <nav class="navbar navbar-default" style="background: linear-gradient(90deg, rgba(188,25,31,1) 0%, rgba(7,7,7,1) 35%);">
                <div class="container-fluid">
                    <div class="navbar-btn">
                        <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars" style="color: white"></i></button>
                    </div>
                    <!--div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                            <span class="sr-only">Toggle Navigation</span>
                            <i class="fa fa-bars icon-nav"></i>
                        </button>
                    </div-->
                    <div id="navbar-menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="background-color: #070707;">
                                    <!--<img class="img-circle" src="{{asset('asset/images/user.png')}}" width="30px" height="30px" alt="Avatar">-->
                                    <i class="glyphicon glyphicon-user" style="color: #fff"></i>
                                    <span style="color: #fff"> {{Auth::user()->group_name}}</span>  <i class="fa fa-chevron-down" style="color: #fff; font-size: 10px;"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-log-out"></i> <span>Log Out</span></a></li>
                                </ul>
                            </li>
                            <!--li class="dropdown">
                                <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown" style="background-color: rgba(33, 57, 80, 1);">
                                    <i class="fa fa-bell" style="color: white"></i>
                                    <span class="badge bg-danger">5</span>
                                </a>
                                <ul class="dropdown-menu notifications">
                                    <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
                                    <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
                                    <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
                                    <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
                                    <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
                                    <li><a href="#" class="more">See all notifications</a></li>
                                </ul>
                            </li-->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END NAVBAR -->
            <!-- MAIN CONTENT -->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- END MAIN CONTENT -->
            <footer style="position: relative !important;">
                <div class="container-fluid" >
                    <p class="copyright" style="color: rgba(33, 57, 80, 1);;">&copy; Information Technology Creative Competition 2020 | <a href="http://it.unud.ac.id" style="color: #0575E6;">Teknologi Informasi Udayana</a></p>
                </div>
            </footer>
        </div>
        <!-- END MAIN -->
    </div>
    <!-- END WRAPPER -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

</body>

</html>
