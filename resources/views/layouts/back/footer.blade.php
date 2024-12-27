         <!-- footer content -->
         <footer>
            <div class="pull-right">
              Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>
  
      <!-- jQuery -->
      <script src="{{asset('storage/layouts/back/vendors/jquery/dist/jquery.min.js')}}"></script>
      <!-- Bootstrap -->
      <script src="{{asset('storage/layouts/back/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      <!-- FastClick -->
      <script src="{{asset('storage/layouts/back/vendors/fastclick/lib/fastclick.js')}}"></script>
      <!-- NProgress -->
      <script src="{{asset('storage/layouts/back/vendors/nprogress/nprogress.js')}}"></script>
      <!-- Chart.js -->
      <script src="{{asset('storage/layouts/back/vendors/Chart.js/dist/Chart.min.js')}}"></script>
      <!-- gauge.js -->
      <script src="{{asset('storage/layouts/back/vendors/gauge.js/dist/gauge.min.js')}}"></script>
      <!-- bootstrap-progressbar -->
      <script src="{{asset('storage/layouts/back/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
      <!-- iCheck -->
      <script src="{{asset('storage/layouts/back/vendors/iCheck/icheck.min.js')}}"></script>
      <!-- Skycons -->
      <script src="{{asset('storage/layouts/back/vendors/skycons/skycons.js')}}"></script>
      <!-- Flot -->
      <script src="{{asset('storage/layouts/back/vendors/Flot/jquery.flot.js')}}"></script>
      <script src="{{asset('storage/layouts/back/vendors/Flot/jquery.flot.pie.js')}}"></script>
      <script src="{{asset('storage/layouts/back/vendors/Flot/jquery.flot.time.j')}}s"></script>
      <script src="{{asset('storage/layouts/back/vendors/Flot/jquery.flot.stack.js')}}"></script>
      <script src="{{asset('storage/layouts/back/vendors/Flot/jquery.flot.resize.js')}}"></script>
      <!-- Flot plugins -->
      <script src="{{asset('storage/layouts/back/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
      <script src="{{asset('storage/layouts/back/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
      <script src="{{asset('storage/layouts/back/vendors/flot.curvedlines/curvedLines.js')}}"></script>
      <!-- DateJS -->
      <script src="{{asset('storage/layouts/back/vendors/DateJS/build/date.js')}}"></script>
      <!-- JQVMap -->
      <script src="{{asset('storage/layouts/back/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
      <script src="{{asset('storage/layouts/back/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
      <script src="{{asset('storage/layouts/back/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
       <!-- Datatables -->
    <script src="{{asset('storage/layouts/back/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('storage/layouts/back/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('storage/layouts/back/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('storage/layouts/back/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('storage/layouts/back/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('storage/layouts/back/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('storage/layouts/back/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('storage/layouts/back/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('storage/layouts/back/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('storage/layouts/back/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('storage/layouts/back/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('storage/layouts/back/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="{{asset('storage/layouts/back/vendors/moment/min/moment.min.js')}}"></script>
      <script src="{{asset('storage/layouts/back/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>


        <!-- Toaster & Sweetalert Style -->
    <script src="{{asset('public/backend/build/js/toastr.min.js')}}"></script>
  
      <!-- Custom Theme Scripts -->
      <script src="{{asset('storage/layouts/back/build/js/custom.min.js')}}"></script>



      <script>
        @if(Session::has('message'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('message') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
              case 'warning':
                  toastr.warning("{{ Session::get('message') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
          }
        @endif
      </script>
      
    </body>
  </html>