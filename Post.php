<?php
require ('DB_business.php');
 

class Post extends DB_business 
{
    function __construct() 
    {
      
        $this->_table_name = 'post';
         
      
        $this->_key = 'id';
         
      
        parent::__construct();
    }
}
 
$post = new Post();
 
$post->add_new(array(
    'name' => 'Nguyễn Văn Cường',
    'phone' => '0970 306 603'
));
 
$post->delete_by_id(1);
 
$post->update_by_id(array(
    'name' => 'thehalfheart'
), 2);
 
var_dump($post->select_by_id('*', 2));