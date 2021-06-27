<html>

<body>
    <form method="get" enctype="multipart/form-data">
        Enter passport number to delete
        <input type="text" name="passport">
        <br><br>
        <input type="submit" name="delete">
        <br>
    </form>
    <?php
    if(isset($_GET['delete'])){
        $pno=$_GET['passport'];

        $conn=new mysqli("localhost","root","","mca","3308");
        if(!$conn) die("ERROR");

        $sql="delete from passport where pass_no=$pno";

        // if($conn->query($sql)== TRUE){
        //     echo "Record inserted successfully";
        // }
        // else
        //     echo "Error ".$sql."<br>".$conn->error;

        $delete=mysqli_query($conn,$sql);
        if($delete){
            echo "<script> alert('Deleted successfully');</script>";
        }
    }
    ?>
</body>

</html>