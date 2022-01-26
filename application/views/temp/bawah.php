<!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('index.php/c_login/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

<!-- Bootstrap core JavaScript-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>  
  <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  

  <!-- Core plugin JavaScript-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>  

  <!-- Custom scripts for all pages-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>  

  <!-- Page level plugins -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/chart.js/Chart.min.js"></script>  

  <!-- Page level custom scripts -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/demo/chart-area-demo.js"></script>  
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/demo/chart-pie-demo.js"></script>  

  <!-- Page level plugins -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatables/jquery.dataTables.min.js"></script>  
  <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>  

  <!-- Page level custom scripts -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/demo/datatables-demo.js"></script>  

  <script>
    function angka(value) {
      var hasil;
      if(value < 0) {
        hasil = 0;
      } else {
        hasil = value;
      }
      return hasil;
    }

    $(document).ready(function() {
      $(document).on("keyup","input[type=number]",function() {
        $(this).val(angka($(this).val()));
      });
    });
  </script>  
  
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/chart.js@2.8.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script type="text/javascript">
      $(document).ready(function() {
          $("#sisa, #terjual").keyup(function() {
              var sisa  = $("#sisa").val();
              var terjual = $("#terjual").val();

              var total = parseInt(sisa) - parseInt(terjual);
              $("#total").val(total);
          });
      });
  </script>
  <script type="text/javascript">
      $(document).ready(function() {
          $("#sisa, #beli").keyup(function() {
              var sisa  = $("#sisa").val();
              var beli = $("#beli").val();

              var total_beli = parseInt(sisa) + parseInt(beli);
              $("#total_beli").val(total_beli);
          });
      });
  </script>
</body>

</html>