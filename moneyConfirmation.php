<?php
    session_start();
    include_once 'database.php';

    $confirm = $_GET['confirm'];
    $id = $_GET['id'];
    $money=$_GET['money'];
    $email= $_GET['email'];

    if($confirm == 1){
        $str="update money set confirm='$confirm' where id ='$id'";
        
        if((mysqli_query($con,$str)))	
		{
            $result = mysqli_query($con,"SELECT * FROM user WHERE email='$email'") or die('Error Quiz table Not Table');

            while($row = mysqli_fetch_array($result)) {
                $current_money = $row[6];
                $total_money = $current_money + $money;

                $str="update user set total_money='$total_money' where email ='$email'";

                if((mysqli_query($con,$str)))	
		        {
                    header('location: moneyTransection.php');
                }
            }            
        }		
    }else if($confirm == 2){
        $str="update money set confirm='$confirm' where id ='$id'";
        
        if((mysqli_query($con,$str)))	
		{
            header('location: moneyTransection.php');
        }	
    }
    
?>
