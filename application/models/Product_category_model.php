<?php
class Product_category_model extends MY_Model {
    public $table = 'productcategories'; // you MUST mention the table name
  	public $primary_key = 'CategoryID'; // you MUST mention the primary key
  	public $fillable = array(); // If you want, you can set an array with the fields that can be filled by insert/update
    public $timestamps = FALSE;
    //public $protected = array(); // ...Or you can set an array with the fields that cannot be filled by insert/update
  	public function __construct()
  	{
  		parent::__construct();
  	}
}
 ?>
