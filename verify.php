<?PHP 
    if(isset($_GET['vkey'])){
        require_once("db.php");
        $vkey = $conn->real_escape_string($_GET['vkey']);
        $sql = "SELECT * FROM users WHERE vkey = 1 AND verified = 0";
        $result = $conn->query($sql);

        if($result->num_rows == 1){
            $sql_verify = "UPDATE users SET verified = 1 WHERE vkey = $vkey";
            if($conn->query($sql)){
                header="login.php";
            }else{
                echo "<h4>The email has already verified.</h4>";
            }
        }
    }else{
        echo "Somthing went wrong";
    }
?>