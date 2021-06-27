<html>

<body>
    <?php
    date_default_timezone_set('Asia/Calcutta');
    $expire = 60 * 60 * 24 * 1 + time();
    setcookie('lastVisit', date("G:i - m/d/y"), $expire);
    $name = "";
    if (isset($_COOKIE['lastVisit'])) {
        $visit = $_COOKIE['lastVisit'];

        if (isset($_POST['name'])) {
            $nm = $_POST['name'];

            if (isset($_COOKIE['ids'])) {
                setcookie('ids', $nm, $expire);
                $name = $_COOKIE['ids'];
                echo "Welcome back $name <br>";
                echo "Last visited on: " . $visit . '<br>';
            } else {
                setcookie('ids', $nm, $expire);
                $name = $_COOKIE['ids'];
            }

            echo "1Welcome back $name <br>";
        }
        
        echo "2Welcome back $name <br>";
        echo "Last visited on: " . $visit . '<br>';
    } else {
        echo "3Welcome back $name <br>";
        echo "Welcome to website";
    }
    ?>
    <form action="" method="POST">
        <table border="2">
            <tr>
                <td colspan="2">
                    <center>Preference</center>
                </td>
            </tr>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Seat selection
                </td>
                <td>
                    <input type="radio" name="seat" value="Aisle">Aisle<input type="radio" name="seat" value="Window">Window<input type="radio" name="seat" value="Center">Center
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" id=""></td>
            </tr>
        </table>
    </form>
    <?php

    ?>
</body>

</html>