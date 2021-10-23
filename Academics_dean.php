<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dean Academics @iiitdmj</title>
    <link rel="stylesheet" href="stylesheets/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="stylesheets/about.css">
    <link rel="stylesheet" href="stylesheets/carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #block {
            height: 88%;
            width: 70%;
            margin: auto;
            margin-top: 3%;
            margin-bottom: 2.5%;
            background-color: #ebe0d2;
            box-shadow: 10px 10px grey;
        }

        h1 {
            margin-bottom: 1.2rem;
            color: rgb(43, 43, 153);
            text-shadow: 1px 1px 2px black;
        }

        .table-bordered>tbody>tr>td,
        .table-bordered>tbody>tr>th,
        .table-bordered>tfoot>tr>td,
        .table-bordered>tfoot>tr>th,
        .table-bordered>thead>tr>td,
        .table-bordered>thead>tr>th {
            border: 1px solid #555;
        }

        .table-bordered {
            border: 3px solid #555;
            width: 80%;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <?php include 'topnav.php'; ?>
        <?php include 'mainnav.php'; ?>
        <div class="about">
            <h1>Office of Dean Academic</h1>
        </div>
    </div>
    <div id="block" class="container" style="padding: 0.8rem;">
        <div class="container" style="text-align: center;">
            <h1>Office of Dean (Academic)</h1>
            <p style="background-color: aqua;"><?php 
            $link=mysqli_connect('localhost','root','','iiitdmj');
            $result=mysqli_query($link,'SELECT * FROM dean WHERE department_name="Academics"');
            $row=mysqli_fetch_assoc($result);
            echo $row['name'];
            ?><br>
                Professor, Mechanical Engineering Discipline <br>
                Dean (Academic) <br>
                PDPM IIITDM Jabalpur</p>
        </div><br>
        <table class="table table-bordered  text-center " style="margin:auto; margin-bottom: 20px;">
            <thead>
                <tr style="background-color: rgba(0,0,0,0.6);color:white; font-size:x-large">
                    <th> Employee Name </th>
                    <th> Designation </th>

                </tr>
            </thead>
            <tbody>
                <?php
                $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
                /*Check link to the mysql server*/
                if (!$link) {
                    die('Failed to connect to server: ');
                }
                /*Create query*/
                $qry = 'SELECT * FROM dean_info WHERE department_name="Academics"';

                /*Execute query*/
                $result = mysqli_query($link, $qry);

                /*Show the rows in the fetched result set one by one*/
                while ($row = mysqli_fetch_assoc($result)) {
                    echo
                    '<tr> 
          <td style="font-size: large">' . $row['Employee_Name'] . '</td>
          <td style="font-size: large">' . $row['Designation'] . '</a></td>
          </tr>';
                }
                echo '</tbody>     
</table>';
                ?>
    </div>
    <?php include 'footer.php'; ?>

</body>

</html>