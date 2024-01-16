<?php include('partials/menu.php'); ?>
<div class="main-content">
            <div class="wrapper">
                <h1>Add Admin</h1>
                <br/><br/>
                <form action="" method="POST">
                <table class="tbl-30">
                        <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="full_name" placeholder="Enter your name"></td>
                        </tr>
                        <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" placeholder="Enter your username"></td>
                        </tr>
                        <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" placeholder="Enter your password"></td>
                        </tr>
                        <tr>
                        <td>
                        <td><input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                        </tr>

                </table>
                </form>
    </div>
</div>
<?php include('partials/footer.php'); ?>

<?php 

    if(isset($_POST["submit"]))
    {
        //Button clicked
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //sql query to save the data from db

        $sql = "INSERT INTO tbl_admin SET
            full_name = '$full_name',
            username = '$username',
            password = '$password'
            ";

           //Execute query and save the data in DB
           $conn = mysqli_connect('localhost:4306','root','pwd@123') or die(mysqli_error());
           $db_select = mysqli_select_db($conn,'food-order') or die(mysqli_error());


           $res = mysqli_query($conn, $sql) or die(mysqli_error()); 
           if($res==TRUE)
           {
                echo "Data Inserted";
           }
           else
           {
                echo "Failed to Insert";
           }


    }
?>
