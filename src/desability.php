<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welfare_organization_project</title>


</head>
<style>
    body {
        display: flex;
        justify-content: center;
        background-color: lightcyan;
    }

    .tbl {
        border: 5px black solid;
    }

    card {
        width: 200px;
        height: 400px;
        border: 2px black solid;
    }
</style>

<body>


    <table border="2" class="tbl">
        <thead>
            <th>
                <tr>
                    <td>Regno</td>
                    <td>Institution</td>
                    <td>Address</td>
                    <td>Category</td>
                    <td>Phone</td>
                    <td>Mobile</td>
                    <td>Paid</td>
                    <td>District</td>
                </tr>
            </th>
        <tbody>
            <?php
            $host = "localhost";
            $uname = "root";
            $password = "";
            $dis = $_POST["dis"];

            $con = mysqli_connect($host, $uname, $password);
            if (mysqli_select_db($con, 'welfare_project'))
                $disp = "select * from desability where district='$dis';";
            $cdis = mysqli_query($con, $disp);
            if (mysqli_num_rows($cdis) > 0) {
                foreach ($cdis as $row) {
                    ?>

                    <tr>
                        <td>
                            <?= $row['regno']; ?>
                        </td>
                        <td>
                            <?= $row['institution']; ?>
                        </td>
                        <td>
                            <?= $row['address']; ?>
                        </td>
                        <td>
                            <?= $row['category']; ?>
                        </td>
                        <td>
                            <?= $row['phone']; ?>
                        </td>
                        <td>
                            <?= $row['mobile']; ?>
                        </td>
                        <td>
                            <?= $row['paid']; ?>
                        </td>
                        <td>
                            <?= $row['district']; ?>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "No Record Found";
            }

            ?>

        </tbody>
        </thead>
    </table>
    <div class="card">
        <div class="pic">
            <img src="img\download (1).jpg" alt="">
        </div>
        <h3>Institution:
            <?php echo $row['district']; ?>
        </h3>
    </div>
</body>

</html>