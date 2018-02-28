<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <!-- <h2 class="text-center text-white mb-4">Bootstrap 4 Login Form</h2> -->
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0" style="color:rgb(10, 43, 78)">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" method="post" autocomplete="off" id="formLogin" name="formLogin" novalidate="">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="txtUserName" id="txtUserName" required="">
                                    <div class="invalid-feedback">Enter your Username!</div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="txtPassword" id="txtPassword" required="" autocomplete="new-password">
                                    <div class="invalid-feedback">Enter your password!</div>
                                </div>
                                <div class="alert alert-danger" role="alert" id="showErrorMessage">
                                Invalid username or password!
                                </div>

                                <!-- <div>
                                    <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description small text-dark">Remember me on this computer</span>
                                    </label>
                                </div> -->
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
<script type="text/javascript">
$(document).ready(function(){
    $("#showErrorMessage").hide();
});
$("#formLogin").submit(function(event) {
    event.preventDefault();

    //Fetch form to apply custom Bootstrap validation
    var form = $("#formLogin")

    if (form[0].checkValidity() === false) {
    event.preventDefault()
    event.stopPropagation()
    }
    form.addClass('was-validated');

    $.ajax({
        url:"<?=base_url('User/login');?>",
        type:"POST",
        data:$(this).serialize(),
        dataType:"JSON",
        success:function(data){
            console.log(data);
            if(data.status==200){
              window.location.href = "<?=base_url('Home');?>";
            }else{
              $("#showErrorMessage").show();
            }
        },
        error:function(){
            $("#showErrorMessage").show();
            console.log("error : Login!");
        }
    });
});

</script>
