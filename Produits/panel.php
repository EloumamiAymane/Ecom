<?php


if(isset($_GET['addPanel'])){
    
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $id=$_GET['addPanel'];
    if(!isset($_SESSION['pannel'])){
        $_SESSION['pannel']=array(
            $id => 1
        );
    }
    $existe=false;
        foreach ($_SESSION['pannel'] as $key => $value) {
             if($key==$id) $existe=true;
         }
        
        
        if(!$existe){
            $arr1=$_SESSION['pannel'];
            $arr2=array($id=>1);
            $arr3=$arr1 + $arr2;
            $_SESSION['pannel']=$arr3;
        }
        print_r($_SESSION['pannel']);
        $existe=false;
    header('location: Article.php');
}


if(isset($_GET['deletefrompanel'])){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
        $id=$_GET['deletefrompanel'];
        foreach($_SESSION['pannel'] as $key=>$arr){
                if($key=$id) $indexToRemoveIt=$key;
        }
        
              unset($_SESSION['pannel'][$indexToRemoveIt]);

              header('location: ../Commander/displaypannel.php');
}

if(isset($_GET['updateQuantiter'])){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
  
    $id=$_GET['updateQuantiter'];
    foreach($_SESSION['pannel'] as $key=>$value){
        if($key==$id) {
            $valueToUpdateIt=$value;
           
        }
}
    if($_GET['incr']=='true') $valueToUpdateIt=$valueToUpdateIt+1;
    else{
        if($valueToUpdateIt>1) $valueToUpdateIt=$valueToUpdateIt-1;
    }
    $_SESSION['pannel'][$id]=$valueToUpdateIt;

    header('location: ../Commander/displaypannel.php');
    
}
