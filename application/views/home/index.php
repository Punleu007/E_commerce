<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">

      <h1 class="my-4">Category</h1>
      <div class="list-group">
        <a href="<?php echo base_url();?>" class="list-group-item <?php if(!isset($category_menu)) echo "active"; ?>">All</a>
        <?php foreach ($product_categorys as $key => $product_category) {?>
              <a href="<?php echo base_url('Home/index/'.$product_category->CategoryID); ?>" class="list-group-item <?php if(isset($category_menu)) if( $category_menu==$product_category->CategoryID ) echo "active"; ?>"><?php echo $product_category->CategoryName  ?></a>
        <?php } ?>
      </div>

    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">

      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="<?php echo base_url('assets/img/slide/slide1.png');?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="<?php echo base_url('assets/img/slide/slide2.png');?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="<?php echo base_url('assets/img/slide/slide3.png');?>" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="row">
        <?php
            $index=0;
            foreach ($products as $key => $product) {
              if($index<6)
                $index++;
              else
                $index=1;
              if($product->ProductCategoryID==1)
                $pathPic = "rice";
              elseif ($product->ProductCategoryID==2) {
                $pathPic = "corn";
              }
              elseif ($product->ProductCategoryID==3) {
                $pathPic = "cucumber";
              }
              elseif ($product->ProductCategoryID==4) {
                $pathPic = "pepper";
              }
              elseif ($product->ProductCategoryID==5) {
                $pathPic = "palm_sugar";
              }
        ?>
             <div class="col-lg-4 col-md-6 mb-4">
               <div class="card h-100">
                 <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/img/product/'.$pathPic.'/pic'.$index.'.png');?>" alt=""></a>
                 <div class="card-body">
                   <h4 class="card-title">
                     <a><?php echo $product->ProductName;  ?></a>
                   </h4>
                   <h5><?php echo $product->ProductPrice."$"; ?></h5>
                   <h6>In Stock : <?php echo $product->ProductLive; ?></h6>
                   <h6>Code : <?php echo $product->ProductSKU;  ?></h6>
                   <p class="card-text"><?php echo $product->ProductShortDesc;  ?></p>
                 </div>
                 <div class="card-footer">
                   <small class="text-muted">
                     <?php for($i=1; $i<= 5; $i++){
                          if($i<=$product->ProductThumb)
                            echo "&#9733;";
                          else
                            echo "&#9734;";
                     } ?>
                  </small>
                 </div>
               </div>
             </div>
        <?php
            }
         ?>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
