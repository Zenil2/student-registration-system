<?php

session_start();
if(!(isset($_SESSION['students']))){
     $_SESSION['students']=[];

}
function totalStudents(){
    return count($_SESSION['students']) > 0 ? count($_SESSION['students']) : 0 ;
}
   
?>