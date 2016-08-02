<?php
//公众控控制器
class CommonControl extends Control{
  public function __init(){
      if(!isset($_SESSION['uname']) || !isset($_SESSION['uid'])){
go(U('Login/index'));
} 
  }
}
?>