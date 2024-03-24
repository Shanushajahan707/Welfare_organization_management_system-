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

<body>



    <style>
        @import url("https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font: 500 100%/1.4 system-ui;
            background-color: #ccc;
        }

        body {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
            gap: 0rem;
            padding: 1rem;
        }

        .card {
            height: fit-content;
            display: flex;
            flex-direction: column;
            padding: 1rem 1rem 2rem;
            background: #f8f3e8;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.2), 0 0 40px rgba(0, 0, 0, 0.2);
            border-radius: 3px;
            padding: 2px;
        }

        .card>img {
            width: 100%;
            height: auto;
            aspect-ratio: 600/300;
        }

        .card>h2 {
            margin-top: 1rem;
            font-family: "Kalam", cursive;
            font-weight: normal;
            font-size: 2rem;
            color: #4a4a7d;
            text-align: center;
        }

        .card>p {
            font-family: "Kalam", cursive;
            font-size: 1rem;
            color: #5e5e89;
            text-align: center;
        }

        .card:hover {
            transform: scale(1.15);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.6);
        }

        .card {
            transition: 0.5s ease;
            cursor: pointer;
            margin: 10px;
        }

        .card a:hover {
            color: blue;
            text-decoration: dashed;
        }
    </style>

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
            <div class="card" style="transform:rotate(0.5727005242168222deg);">
                <img src="img\disabilitymain.jpg" />
                <h2>
                    <?= $row['institution']; ?>
                </h2>
                <p>Website
                    <a href=" <?= $row['website']; ?> "><?= $row['website']; ?>
                    </a>
                </P>
                <p>Reg.No :
                    <?= $row['regno']; ?>
                </p>
                <p>Address :
                    <?= $row['address']; ?>
                </p>
                <p>Category :
                    <?= $row['category']; ?>
                </p>

                <p>phone :
                    <a href=" tel:<?= $row['phone']; ?>"><?= $row['phone']; ?>
                    </a>
                </p>


                <p>mobile :
                    <a href=" tel:<?= $row['mobile']; ?>"><?= $row['mobile']; ?>
                    </a>
                </p>
                <p>paid :
                    <?= $row['paid']; ?>
                </p>

                <p>District :
                    <?= $row['district']; ?>
                </p>
            </div>
            <?php
        }
    } else {
        echo "No Record Found";
    }

    ?>

</body>

</html>