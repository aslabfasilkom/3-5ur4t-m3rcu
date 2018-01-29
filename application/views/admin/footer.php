<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.0.0-beta
  </div>
  <strong>Copyright &copy; 2017-2018 <a href="http://fasilkom.mercubuana.ac.id/bagan-organisasi-asisten-laboratorium-fasilkom/" target="_blank">Team Aslab</a>.</strong> All rights
  reserved.
</footer>
</body>

<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/jQueryUI/jquery-ui.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/moment/moment.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/fullcalendar/dist/fullcalendar.min.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/sweetalert.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/toast.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/morris.js/morris.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<script>
  $(function(){
    $('#datatable').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
<script>
  /*Script untuk chart KP jgn dihapus dulu*/
  $(function () {
    "use strict";
    var donut = new Morris.Donut({
      element: 'kp-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954","#f21fa2", "#00a65a"],
      data: [
      {label: "Waiting", value: 35},
      {label: "Process", value: 30},
      {label: "Finish", value: 15},
      {label: "Take", value: 20}
      ],
      hideHover: 'auto'
    });
  });
</script>
<script>
  /*Script untuk chart Sidang jgn dihapus dulu*/
  $(function () {
    "use strict";
    var donut = new Morris.Donut({
      element: 'sidang-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954","#f21fa2", "#00a65a"],
      data: [
      {label: "Waiting", value: 12},
      {label: "Process", value: 18},
      {label: "Finish", value: 25},
      {label: "Take", value: 45}
      ],
      hideHover: 'auto'
    });
  });
</script>
<script>
 $(document).ready(function () {
   $('.sidebar-menu').tree()
 })
</script>

<!-- Untuk meng-email yang ditolak -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>

<script>
        $('#confirm').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').prop('href', $(e.relatedTarget).data('href'));
        });
    </script>

</html>