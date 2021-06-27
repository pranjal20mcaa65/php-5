<html>

<body>
    <nav>
        <a href="5.php">Create </a> &nbsp; &nbsp;
        <a href="deposit.php">Deposit </a>&nbsp; &nbsp;
        <a href="withdraw.php">Withdraw </a>&nbsp; &nbsp;
        <a href="balance.php">Balance Enquiry</a>&nbsp; &nbsp;
    </nav>
    <h1>Create</h1><br>
    <form action="" method="get">
        <input type="number" name="acno" id="" placeholder="acno"><br>
        <input type="text" name="name" id="" placeholder="name"><br>
        <select name="actype" id="">
            <option value="SB">Savings</option>
            <option value="FD">FD</option>
        </select><br>
        <textarea name="address" id="" cols="30" rows="5" placeholder="Address"></textarea><br>
        <input type="number" name="balance" id="" placeholder="initial balance"><br>
        <input type="submit" name="create" id="" value="create account"><br>
    </form>
    <?php
    if(isset($_GET['create'])){
        $ano=$_GET['acno'];
        $name=$_GET['name'];
        $type=$_GET['actype'];
        $address=$_GET['address'];
        $bal=$_GET['balance'];
        if($bal<500)
            echo"Inital balance must be > 500";
        else
        {
            $conn=new mysqli("localhost","root","","mca","3308");
            if(!$conn) die("Error");
            else
            {
                $sql="insert into customer (acno,name,address,type,balance) values ($ano,'$name','$type','$address',$bal)";
                if(mysqli_query($conn,$sql))
                    echo "Record inserted successfully";
                else
                {
                    echo "ERROR: $conn->error <br>";
                    //mysqli_error($conn);
                }
            }
        }
    }
    ?>
</body>

</html>