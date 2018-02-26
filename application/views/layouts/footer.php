<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; <a style="textdecoration:none;" href="<?=base_url();?>">Cambodian farmer</a> <?= date("Y"); ?></p>

  </div>
  <!-- /.container -->
</footer>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url('assets/js/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
            url:"<?=base_url('Api/login') ?>",
            type:"post",
            data:{
              "username":"mengty",
              "password":"1233"
            },
            success:function(data){
                console.log("data : ");
                console.log(data);
            },
            error:function(){
                console.log("error");
            }

        });
    });
</script>
</body>

</html>
