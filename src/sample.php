<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welfare_organization_project</title>

    <link href="/dist/output.css" rel="stylesheet">

</head>



<body>

    <?php
    $host = "localhost";
    $uname = "root";
    $password = "";
    $we = $_POST["web"];
    $re = $_POST["reg"];



    $con = mysqli_connect($host, $uname, $password);
    if (!$con) {
        echo "error";
    } else
        echo "  connected";
    if (mysqli_select_db($con, 'welfare_project'))
        echo "  db selected";
    $isql = "UPDATE old_age SET website = '$we' WHERE regno= $re ";
    // $ins = "insert into desability values('$reg','$web')";
    $cins = mysqli_query($con, $isql);
    if (!$cins) {
        echo "error";
    } else
        echo " inserted";

    ?>


</body>

</html>