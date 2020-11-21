<?php
    session_start();
    include_once '../database.php';

    if(!isset($_SESSION['email'])){
        ?>
        <script type="text/javascript">
                        alert("You Have To Login First");
                        window.location.href = "../login.php";
                    </script>

                    <?php
    }

    $price=$_GET['price'];
    $id = $_GET['id'];
    $email = $_SESSION['email'];
    

    $result = mysqli_query($con,"SELECT * FROM user WHERE email='$email'") or die('Error Quiz table Not Table');

            while($row = mysqli_fetch_array($result)) {
                $current_money = $row[6];
                $total_money = $current_money - $price;
            }      

        if($total_money > 0){
            $str="update user set total_money='$total_money' where email ='$email'";

                if((mysqli_query($con,$str)))	
		        {

                    $str="insert into ordered_product set user_email='$email',package_id='$id',amount='$price'";
                        if((mysqli_query($con,$str)))	{

                        }
                        $_SESSION['product_id'] = $id ; 
                    ?>

                    <script type="text/javascript">
                        alert("Enter Your GMAIL/FACEBOOK Authentication");
                        window.location.href = "../mailVerification.php";
                    </script>
            <?php
                }
        }else{
            ?>
            <script type="text/javascript">
                alert("You don\'t have sufficient balance . Recharge First");
                window.location.href = "../userWallet.php";
            </script>
            <?php
            
        }
        
                

    
?>
