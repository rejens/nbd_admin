<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../dist/js/demo.js"></script> -->

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>



<!-- custom js -->

<script src="../dist/js/custom.js"></script>
<script>
  let table = document.querySelector('table').rows[0].cells.length
  console.log(table)
  if (table > 6) {
    console.log("ok")
    $('table').DataTable({
      scrollY: "500px",
      scrollX: true,
      paging: true
    });
  } else {
    $('table').DataTable({
      scrollY: "500px",
      paging: true,
      width: "100%"
    })
    console.log("not ok")
  }
</script>

</body>

</html>