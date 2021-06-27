<html>

<body>
<nav>
        <a href="5.php">Create </a> &nbsp; &nbsp;
        <a href="deposit.php">Deposit </a>&nbsp; &nbsp;
        <a href="withdraw.php">Withdraw </a>&nbsp; &nbsp;
        <a href="balance.php">Balance Enquiry</a>&nbsp; &nbsp;
    </nav>
    <form action="" method="POST">
        <input type="number" name="acno" id="" placeholder="acno"><br>

        <input type="number" name="balance" id="" placeholder="Deposit amount"><br>
        <input type="submit" name="deposit" id="" value="Deposit"><br>
    </form>
    <?php
    if (isset($_POST['deposit'])) {
        $ano = $_POST['acno'];
        $depositBal = $_POST['balance'];
        $bal = 0;
        $conn = new mysqli("localhost", "root", "", "mca", "3308");
        if (!$conn) die("Error");
        else {
            $res = $conn->query("select balance from customer where acno=$ano");
            if (mysqli_num_rows($res) == 0) {
                echo "Account does not exist!!";
            } else {
                if (mysqli_num_rows($res) > 0) {
                    $bal = mysqli_fetch_array($res);
                    // echo $bal['balance'];
                }

                $finalBal = $bal['balance'] + $depositBal;

                $conn->query("update customer set balance=$finalBal");
                if ($conn == TRUE)
                    echo "Deposited successfully";
                else {
                    echo "ERROR: $conn->error <br>";
                }
            }
        }
    }
    ?>
</body>

</html>