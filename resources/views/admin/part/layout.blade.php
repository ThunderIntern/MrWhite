<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      {{$title}} - MrWhite
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{URL::to('css/material-dashboard.min.css?v=2.0.1')}}">
    <link href="https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css" rel='stylesheet' />
    <link href="https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.print.min.css" rel='stylesheet' media='print' />
    <!-- iframe removal -->
      <script type="text/javascript">
        if (document.readyState === 'complete') {
            if (window.location != window.parent.location) {
              const elements = document.getElementsByClassName("iframe-extern");
              while (elemnts.lenght > 0) elements[0].remove();
                // $(".iframe-extern").remove();
            }
        };
      </script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
        <!-- End Google Tag Manager -->
  </head>
  <body >
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Panggil Sidebar -->
  @include('admin.part.sidebar')

  @yield('content')

  @include('admin.part.footer')

</body>

  <!--   Core JS Files   -->
<script type="text/javascript" src="{{URL::to('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/bootstrap-material-design.min.js')}}"></script>

<!-- plugin for line charts -->
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

<script type="text/javascript" src="{{URL::to('js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script type="text/javascript" src="{{URL::to('js/moment.min.js')}}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script type="text/javascript" src="{{URL::to('js/bootstrap-datetimepicker.min.js')}}"></script>

<!--	Plugin for the Sliders, full documentation here: https://refreshless.com/nouislider/ -->
<script type="text/javascript" src="{{URL::to('js/nouislider.min.js')}}"></script>
<!--	Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script type="text/javascript" src="{{URL::to('js/bootstrap-selectpicker.js')}}"></script>

<!--	Plugin for Tags, full documentation here: https://xoxco.com/projects/code/tagsinput/  -->
<script type="text/javascript" src="{{URL::to('js/bootstrap-tagsinput.js')}}"></script>

<!--	Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
<script type="text/javascript" src="{{URL::to('js/bjasny-bootstrap.min.js')}}"></script>
<!-- Plugins for presentation and navigation  -->
<script type="text/javascript" src="{{URL::to('js/modernizr.js')}}"></script>

<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script type="text/javascript" src="{{URL::to('js/material-dashboard.js')}}"></script>



<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script type="text/javascript" src="{{URL::to('js/arrive.min.js')}}"></script>

<!-- Forms Validations Plugin -->
<script type="text/javascript" src="{{URL::to('js/jquery.validate.min.js')}}"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script type="text/javascript" src="{{URL::to('js/chartist.min.js')}}"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script type="text/javascript" src="{{URL::to('js/jquery.bootstrap-wizard.js')}}"></script>

<!--  Notifications Plugin, full documentation here: https://bootstrap-notify.remabledesigns.com/    -->
<script type="text/javascript" src="{{URL::to('js/bootstrap-notify.js')}}"></script>

<!-- Vector Map plugin, full documentation here: https://jvectormap.com/documentation/ -->
<script type="text/javascript" src="{{URL::to('js/jquery-jvectormap.js')}}"></script>

<!--  Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script type="text/javascript" src="{{URL::to('js/jquery.select-bootstrap.js')}}"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script type="text/javascript" src="{{URL::to('js/jquery.datatables.js')}}"></script>

<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script type="text/javascript" src="{{URL::to('js/sweetalert2.js')}}"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script type="text/javascript" src="{{URL::to('js/fullcalendar.min.js')}}"></script>

<!-- table sorting -->
<script>
  $(document).ready(function() {
    $('#dataProduk').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }
    });

    var table = $('#dataProduk').DataTable();



    // Delete a record
    table.on('click', '.remove', function(e) {
      $tr = $(this).closest('tr');
      table.row($tr).remove().draw();
      e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });
  });
</script>

<!-- Sweet Alert 2 -->
<script>
  $('#delete').click(function() {
    swal({
      title: "Are you sure?",
      text: "You will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel plx!",
      closeOnConfirm: false,
      closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          swal("Deleted!", "Your imaginary file has been deleted.", "success");
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });
    });
</script>
</html>
