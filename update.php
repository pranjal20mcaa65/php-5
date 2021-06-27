<html>

<body>
<nav>
<a href="4.php">Add </a> &nbsp; &nbsp;
<a href="delete.php">Delete </a>&nbsp; &nbsp;
<a href="update.php">Update </a>&nbsp; &nbsp;
</nav>
<br>

    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    Passport Number
                </td>
                <td>
                    <input type="number" name="passport" id="">
                </td>
            </tr>
            <tr>
                <td>
                    First name
                </td>
                <td>
                    <input type="text" name="fname" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Middle name
                </td>
                <td>
                    <input type="text" name="mname" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Last name
                </td>
                <td>
                    <input type="text" name="lname" id="">
                </td>
            </tr>
            <tr>
                <td>
                    DOB
                </td>
                <td>
                    <input type="date" name="dob" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Nationality
                </td>
                <td>
                    <input type="text" name="nat" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Address
                </td>
                <td>
                    <textarea name="address" id=""></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Gender
                </td>
                <td>
                    <input type="radio" name="gender" id="" value="male">Male <input type="radio" name="gender" id="" value="female">Female
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="update" id=""></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['update'])){
    $server="localhost";
    $uname="root";
    $pass="";
    $db="mca";
    $port=3308;
    $conn= new mysqli($server,$uname,$pass,$db,$port);
    if(!$conn)
        die("Error");
    
    $passport=$_POST['passport'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $nat=$_POST['nat'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $name=$fname.' '.$mname.' '.$lname;

 //   $sql="insert into `passport` (pass_no,`name`,`dob`,`nationality`,`address`,`gender`,`img`) values ($passport,'$name','$dob','$nat','$address','$gender','$imgname')";
    $sql="update passport set pass_no=$passport,name='$name',nationality='$nat',address='$address',gender='$gender' where pass_no='$passport'";

    if($conn->query($sql)== TRUE){
        echo "Record updated successfully";
    }
    else
        echo "Error ".$sql."<br>".$conn->error;
    }
    ?>
</body>

</html>