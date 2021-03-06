<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff</title>
  <link rel="stylesheet" href="stylesheets/style.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="stylesheets/about.css">
  <link rel="stylesheet" href="stylesheets/carousel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="stylesheets/table.css">
</head>

<body>
  <div class="navbar">
    <?php include 'topnav.php'; ?>
    <?php include 'mainnav.php'; ?>
    <div class="about">
      <h1>Staff of IIITDM</h1>
    </div>
  </div>
  <div id="block" class="container" style="padding: 0.8rem;">
    <div class="container" style="text-align: center;">
      <h1>Staff</h1>
    </div>
    <table class="table table-bordered  text-center " style="margin:auto; margin-bottom: 20px;">
      <thead>
        <tr>
          <th> Name</th>
          <th> Designation</th>
          <th> Department Name </th>
          <th> Email </th>
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
        $qry = 'SELECT * FROM people';

        /*Execute query*/
        $result = mysqli_query($link, $qry);

        /*Show the rows in the fetched result set one by one*/
        while ($row = mysqli_fetch_assoc($result)) {
          echo
          '<tr> 
          <td>' . $row['name'] . '</td>
          <td>' . $row['registration_role'] . '</td>
          <td>' . $row['Department'] . '</td>
          <td>' . $row['email'] . '</td> 
          </tr>';
        }
        echo '</tbody>     
</table>';
        ?>
  </div>
  <?php include 'footer.php'; ?>

</body>

</html>