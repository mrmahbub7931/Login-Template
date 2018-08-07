<?php   
include "inc/header.php";
?>
		
<style type="text/css">
    form {
        width: 400px;
        margin: 0 auto;
    }

    form th {
        text-align: center;
    }
</style>
<?php 
if (isset($_POST['submit'])) {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "loginform";
    
    try{
       $dbc = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname); 
    } catch (Exception $e){
       $e->getMessage();
    }
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];
//    $username = $name = $email = $confirmpass = "";
      
                        
                    if($pass != $confirmpass){
                        $error = ""; 
                    } 
                        
                     
    if(!isset($error)){
        $sql = "INSERT INTO userdetails SET userName = '$username', email = '$email', name = '$name', pass = '$pass', confirmpass ='$confirmpass'";
        $retval = mysqli_query($dbc, $sql);
    if(!$retval){
        echo "Check Your Databse information";
    }
    
    }
    
    
   
    
    
    class construct{
        public function __destruct() {
            mysqli_close($dbc);
        }
    }
    $construct = new construct();
}
?> 
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

    <table border="0">
        <thead>
            <tr>
                <th colspan="2">Login Form</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><label>User Name: </label></td>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="username" class="username"/></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Name: </label></td>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="name" class="name"/></td>
                <td></td>
            </tr>
            
            <tr>
                <td><label>Email: </label></td>
                <td></td>
            </tr>
            
            <tr>
                <td><input type="email" name="email" class="email" /></td>
                <td></td>
            </tr>
            
            <tr>
                <td><label>Password: </label></td>
                <td></td>
            </tr>
            <tr>
                <td><input type="password" name="password" class="password" /></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Confirm Password: </label></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <?php if(isset($error)): ?>
                    <p style="color: red;">Can't match your password</p>
                    <?php else: ?>
                    <input type="password" name="confirmpass" class="confirmpass" />
                    <?php endif; ?>
                </td>
                <td></td>
            </tr>
            
            <tr>
                <td><label>Upload Image: </label></td>
                <td><input type="file" name="file" class="file" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" class="submit" /></td>
                <td></td>
            </tr>
            
            
        </tbody>
    </table>
</form>



<?php include "inc/footer.php"; ?>