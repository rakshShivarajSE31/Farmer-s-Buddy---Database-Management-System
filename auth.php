
<?php

include('auth1.php');	//enter your table names given in your db

$Email=$_POST['email'];
$Password=$_POST['psw'];
if($Email == '' || $Password == ''){
    echo json_encode("Enter all details!");
    exit();
}


$sql = "select * from signup where email = '$Email'";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res)>0){
    echo json_encode("authentication successfull!");
}
else{
    $sql = "INSERT INTO signup (Email, Password,) VALUES ('$Email','$Password')";
    $res = mysqli_query($con, $sql);
    
    if($res){
        echo "<script>
            $('#signup1').hide();
            bootbox.alert({ 
                size: 'small',
                message: 'Employee registered successfully!'
            });
        </script>";
        echo "<style>
        .modal-backdrop.show {
            opacity: 0;
        }
        .modal-backdrop {position: relative;}
            </style>
        ";
    }
    else{
        echo json_encode(" authentication unsucessfull!");
    }
}

?>