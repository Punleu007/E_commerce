<?php
class Product_model extends MY_Model {
    public $table = 'products'; // you MUST mention the table name
  	public $primary_key = 'ProductID'; // you MUST mention the primary key
  	public $fillable = array('ProductSKU','ProductName','ProductPrice','ProductWeight','ProductCartDesc','ProductShortDesc','ProductLongDesc','ProductThumb','ProductImage','ProductCategoryID','ProductUpdateDate','ProductStock','ProductLive','ProductUnlimited','ProductLocation','UserID'); // If you want, you can set an array with the fields that can be filled by insert/update
    public $timestamps = FALSE;
    //public $protected = array(); // ...Or you can set an array with the fields that cannot be filled by insert/update
  	public function __construct()
  	{
  		parent::__construct();
  	}
}
 ?>
