<!-- JS Scripts-->
    <!-- jQuery Js -->

    <script>
function conf_del(id){
    var r = confirm("Apakah anda yakin akan menghapusnya ?");
    if(r) window.location.href = "<?php echo base_url('coba/delete?id='); ?>" + id;
}
</script>
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js')?>"></script>
      <!-- Bootstrap Js -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url('assets/js/jquery.metisMenu.js')?>"></script>
      <!-- Custom Js -->
    <script src="<?php echo base_url('assets/js/custom-scripts.js')?>"></script>
    
   
</body>
</html>