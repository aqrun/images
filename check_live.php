<?php
// For test can simplify your php file just as below
if(isset($_POST['search'])){
    $current_status = $_POST['search'];
    // comment this, when all down then test database query
    //$online_status = Online_status::find_by_id(1);
    if($current_status == 11){
       $data = '';
    }else{
        $data = 'some html';
    }
    echo $data;
}else{
  // if you direct view this file in browser will see 'data error' message
  echo 'data error';
}
