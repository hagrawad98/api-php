<?php
    $data =file_get_contents('http://shopping.marwaradwan.org/api/Products/1/1/0/100/atoz');
    $dataArray= json_decode($data,true);
    $file =fopen('data.txt','w') or die('unable to open');
    fwrite($file,$data);
    fclose($file);
    foreach($dataArray['data']  as $key => $val){
        echo 'products_id'.'  '.'>>>'.'  '.$val['products_id'];
        echo '<br>';
        echo 'products_name'.'  '.'>>>'.'  '.$val['products_name'];
        echo '<br>';
        echo 'products_description'.'  '.'>>>'.'  '.$val['products_description'];
        echo '<br>';
        echo 'products_quantity'.'  '.'>>>'.'  '.$val['products_quantity'];
        echo '<br>';
        echo 'products_model'.'  '.'>>>'.'  '.$val['products_model'];
        echo '<br>';
        echo 'products_image'.'  '.'>>>'.'  '.$val['products_image'];
        echo '<br>';
        echo 'products_date_added'.'  '.'>>>'.'  '.$val['products_date_added'];
        echo '<br>';
        echo 'products_liked'.'  '.'>>>'.'  '.$val['products_liked'];
        echo '<br>';
}

?>