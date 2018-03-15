<style media="screen">
  .checked {
    color: orange;
  }
</style>
<div class="container py-5">
  <div class="card rounded-0">
      <div class="card-header">
          <h3 class="mb-0" style="color:rgb(10, 43, 78)">Post your Product</h3>
      </div>
      <div class="card-body">
    <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('Product/insertData');?>" style="background:white;">
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Product Name</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="Product Name" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="price">Product Price</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="price" class="form-control" id="price"
                               placeholder="Product Price" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="live">Product Live</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="number" name="live" class="form-control" id="live"
                               placeholder="Product List" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="codeSKU">Product Code(SKU)</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="codeSKU" class="form-control" id="codeSKU"
                               placeholder="Product Code(SKU)" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="shortDesc">ProductShortDesc</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-phone"></i></div>
                        <textarea class="form-control" name="shortDesc" id="shortDesc" rows="8" required autofocus></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Product Thumb</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group  mb-2 mr-sm-2 mb-sm-0">
                      <div class="input-group-addon" style="width: 2.6rem"><i></i></div>
                      <span id="star1" class="fa fa-star" onclick="rateStar(1)"></span>
                      <span id="star2" class="fa fa-star" onClick="rateStar(2)"></span>
                      <span id="star3" class="fa fa-star" onClick="rateStar(3)"></span>
                      <span id="star4" class="fa fa-star" onClick="rateStar(4)"></span>
                      <span id="star5" class="fa fa-star" onClick="rateStar(5)"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="thumb" id="thumb">
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="Category">ProductCategory</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-address-card"></i></div>
                        <select class="form-control" name="Category" id="Category" required autofocus>
                            <option value="1">Rice</option>
                            <option value="2">Corn</option>
                            <option value="3">Cucumber</option>
                            <option value="4">Pepper</option>
                            <option value="5">Palm Sugar</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <?php if(isset($action)){ ?>
          <div class="alert <?php echo ($alert); ?> text-center" role="alert">
          <?php if(isset($message)) echo ($message); else echo "";  ?>
          </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Save</button>
            </div>
        </div>
    </form>
    </div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
<script type="text/javascript">
    function test(){
      alert("test");
    }
    function rateStar(number){
        //debugger;
        $("#thumb").val(number);
        for(var i=1; i<=number; i++){
          $('#star'+i).addClass('checked');
        }
        if(number<5){
          for(var i=5; i>number; i--){
            $('#star'+i).removeClass('checked');
          }
        }
    }
</script>
