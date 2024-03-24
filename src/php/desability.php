<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welfare_organization_project</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="icon" type="img/x-icon" href="/img/icare.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500&display=swap');

    * {
        font-family: 'Comfortaa', cursive;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: white;
        display: flex;
        margin-top: 25px;
        margin-left: 40px;
        flex-wrap: wrap;
        /* justify-content: center;
                                                        align-items: center; */
    }

    .card {
        background-color: aquamarine;
        display: flex;
        height: 300px;
        width: 650px;
        border-radius: 20px;
        overflow: hidden;
        border: #0000001a;
        box-shadow: #0000001a 0 2px 3px;
    }

    .card-img {
        width: 250px;
        height: 300px;
    }

    .card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-details {
        width: 450px;
    }

    .inst-ct i,
    p {
        display: inline;
    }

    .inst-touch p {
        display: block;
        padding-top: 2rem;
    }
</style>

<body>



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

            <div class="card">
                <div class="card-img">
                    <img src="iCare\1.jpg" alt="n/a" srcset="">
                </div>
                <div class="card-details">
                    <div class="inst-name">
                        <h2>
                            <?= $row['institution']; ?>
                        </h2>
                    </div>
                    <div class="inst-ct">
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <p>Location</p>,
                        <i class="fa-solid fa-phone"></i>
                        <p>
                            <?= $row['phone']; ?>
                        </p>
                    </div>
                    <div class="inst-touch">
                        <p>Reg.No :
                            <?= $row['regno']; ?>
                        </p>
                        <p>Address :
                            <?= $row['address']; ?>
                        </p>
                        <p>District :
                            <?= $row['district']; ?>
                        </p>
                        <p>Category :
                            <?= $row['category']; ?>
                        </p>
                        <p>Charge :
                            <?= $row['paid']; ?>
                        </p>
                        <p>Contact :
                            <?= $row['mobile']; ?>
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