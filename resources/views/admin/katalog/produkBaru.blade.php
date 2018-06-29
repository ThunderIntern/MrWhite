
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='../fullcalendar.min.css' rel='stylesheet' />
<link href='../fullcalendar.print.min.css' rel='stylesheet' media='print' />
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
<script type="text/javascript" src="{{URL::to('js/fullcalendar.min.js')}}"></script><script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2018-03-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-03-01',
        },
        {
          title: 'Long Event',
          start: '2018-03-07',
          end: '2018-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-03-11',
          end: '2018-03-13'
        },
        {
          title: 'Meeting',
          start: '2018-03-12T10:30:00',
          end: '2018-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-03-28'
        }
      ]
    });

  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

</body>
</html>
