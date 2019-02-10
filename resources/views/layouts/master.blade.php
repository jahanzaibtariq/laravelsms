<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>School System | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/morris.js/morris.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">

  <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
</head>

<style type="text/css">
.student-photo{
  height: 160px;
  padding-left: 1px;
  padding-right: 1px;
  border: 1px solid #ccc;
  background: #eee;
  width: 140px;
  margin: 0 auto;
}

.photo > input[type='file']{
  display: none;
}
.photo{
  width: 30px;
  height: 30px;
  border-radius: 100%;

}
.student-id{
  background-repeat: repeat-x;
  border-color: #ccc;
  padding: 5px;
  text-align: center;
  background:#eee;
  border-bottom: 1px solid #ccc;
}
.btn-browse{
  border-color: #ccc;
  padding: 5px;
  text-align: center;
  background:#eee;
  border: none;
  border-top: 1px solid #ccc;

}
fieldset{
  margin-top: 5px;

}
fieldset legend{
  display: block;
  width: 100%;
  padding: 0px;
  font-size: 15px;
  line-height: inherit;
  color: #797979;
  border: 0;
  border-bottom: 1px solid #e5e5e5;

}
</style>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-mini"><b>E</b></span>
      <span class="logo-lg"><b>E School</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->username}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  Jahanzaib Tariq - Mean Developer
                  <small>Member since Aug. 2017</small>
                </p>
              </li>
              
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{url('/admin-logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          
             <h2><a href="/home" >Home</a></h2>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Attendence</span>
            <span class="pull-right-container">
          
                  <i class="fa fa-angle-left pull-right"></i>

          </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/take-attendence') }}"><i class="fa fa-circle-o"></i>Take Attendence</a>
            </li>
            <li><a href="{{ url('/show-attendence') }}"><i class="fa fa-circle-o"></i>Show Attendence</a>
            </li>
          </ul>
        </li>
        
        <li class="treeview">
           <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Staff</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/teacher"><i class="fa fa-circle-o"></i>Teacher</a> </li>
            <li><a href="/sweeper"><i class="fa fa-circle-o"></i>Sweeper</a> </li>
            <li><a href="/guard"><i class="fa fa-circle-o"></i>Security Guard</a> </li>
            <li><a href="/peon"><i class="fa fa-circle-o"></i>Peons</a> </li>
            </li>
          </ul>
        </li>
        <li class="treeview">
           <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Student</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/student"><i class="fa fa-circle-o"></i>Student Info</a> </li>
          </ul>
        </li>
        <li class="treeview">
           <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Class Shedule</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/class-shedule"><i class="fa fa-circle-o"></i>View Shedule</a> </li>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="">
            <i  class="fa fa-files-o"></i> <span>Mark Sheet</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{url('/enter-marks-of-student')}} "><i class="fa fa-circle-o"></i> Enter Marks</a></li> 
            <li><a href="{{ url('/show-marksheet') }}"><i class="fa fa-circle-o"></i>Show MarkSheet</a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          
            <i ></i> <span></span>
          
          <ul class="treeview-menu">
            <li><a href=" {{url('/enter-marks-of-class')}} "><i class="fa fa-circle-o"></i> Enter Marks</a></li> 
            <li><a href=" {{url('/enter-marks-of-student')}} "><i class="fa fa-circle-o"></i>  Marks of Student</a></li> 
          </ul>
        </li>

        </li>
        
           </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @yield('content')
   
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2017-2020 <a href="index.php">Jahanzaib Tariq</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
 
 
<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
 <script>

    function handleClass() {
      var value = document.getElementById('class').value;
      console.log(value);
      $.ajax({
                    type: 'GET',
                    url: '/add-student-class',
                    data: {
                        value : value
                    },
         });
    }
      $(document).ready(function() {

      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      });

      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
 </body>
</html>
