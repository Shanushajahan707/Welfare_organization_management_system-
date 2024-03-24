<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        width: 100%;
        height: 100vh;
        background-color: lightcyan;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;

        margin: auto;
    }

    .card {
        height: 480px;
        max-width: 300px;
        border: 2px black solid;
        border-radius: 13px;
        flex: 1 1 210px;
        text-align: center;
        margin: 20px;
    }

    .card .img {
        height: 50%;
        margin-bottom: -49px;
    }

    .card .img img {
        height: 80%;
        width: 100%;
        object-fit: cover;
        border-radius: 13px;
    }

    .info {
        text-align: left;
        line-height: 1em;
    }
</style>
<?php
$host = "localhost";
$uname = "root";
$password = "";
$con = mysqli_connect($host, $uname, $password);
if (mysqli_select_db($con, 'welfare_project'))
    $dis = "select * from old_age;";
$cdis = mysqli_query($con, $dis);
if (mysqli_num_rows($cdis) > 0) {
    foreach ($cdis as $row) {
        ?>
        <div class="main">
            <div class="card">
                <div class="img">
                    <img src="img\66313-ykoigjdjse-1583479947.jpg" alt="">
                </div>
                <div class="info">
                    <p>
                        <b>Regno:</b>
                        <?php echo $row['regno']; ?>
                    </p>
                    <p>
                        <b>Institution:</b>
                        <?php echo $row['institution']; ?>
                    </p>
                    <p>
                        <b>Address:</b>
                        <?php echo $row['address']; ?>
                    </p>
                    <p>
                        <b> Category:</b>
                        <?php echo $row['category']; ?>
                    </p>
                    <p>
                        <b> Phone:</b>
                        <?php echo $row['phone']; ?>
                    </p>
                    <p>
                        <b> Mobile:</b>
                        <?php echo $row['mobile']; ?>
                    </p>
                    <p>
                        <b>Paid:</b>
                        <?php echo $row['paid']; ?>
                    </p>
                    <p>
                        <b> District:</b>
                        <?php echo $row['district']; ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "No Record Found";
}
?>
</body>

</html>