<?php
include_once "includes/connect.php";
if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
    $query = "DELETE FROM news_events WHERE id='$event_id'";
    $result = mysqli_query($con, $query);
    if ($result) {
        header('Location: news_notice.php');
    }
    else {
        echo "<font color='red'>Record not Deleted</font>";
    }
}
?>
<!-- Delete function for Dean Faculties/Office Staff -->
<?php
include_once "includes/connect.php";
if (isset($_GET['e_id'])) {
    $employee_id = $_GET['e_id'];
    $query2 = "DELETE FROM dean_info WHERE E_id='$employee_id'";
    $result = mysqli_query($con, $query2);
    if ($result) {
        header('Location: dean_info.php');
    }
    else {
        echo "<font color='red'>Record not Deleted</font>";
    }
}
?>
<!-- Delete function for Students -->
<?php
include_once "includes/connect.php";
if (isset($_GET['roll'])) {
    $roll_number = $_GET['roll'];
    $query3 = "DELETE FROM students WHERE roll_number='$roll_number'";
    $result = mysqli_query($con, $query3);
    if ($result) {
        header('Location: students.php');
    }
    else {
        echo "<font color='red'>Record not Deleted</font>";
    }
}
?>
<!-- Delete function for faculty -->
<?php
include_once "includes/connect.php";
if (isset($_GET['faculty_id'])) {
    $faculty_id = $_GET['faculty_id'];
    $query4 = "DELETE FROM faculty WHERE faculty_id='$faculty_id'";
    $result = mysqli_query($con, $query4);
    if ($result) {
        header('Location: faculty.php');
    }
    else {
        echo "<font color='red'>Record not Deleted</font>";
    }
}
?>
<!-- Delete function for General Staff -->
<?php
include_once "includes/connect.php";
if (isset($_GET['staff_id'])) {
    $staff_id = $_GET['staff_id'];
    $query5 = "DELETE FROM people WHERE registration_id='$staff_id'";
    $result = mysqli_query($con, $query5);
    if ($result) {
        header('Location: gen_staff.php');
    }
    else {
        echo "<font color='red'>Record not Deleted</font>";
    }
}
?>
<!-- Delete function for Dean -->
<?php
include_once "includes/connect.php";
if (isset($_GET['dean_id'])) {
    $dean_id = $_GET['dean_id'];
    $query6 = "DELETE FROM dean WHERE dean_id='$dean_id'";
    $result = mysqli_query($con, $query6);
    if ($result) {
        header('Location: dean.php');
    }
    else {
        echo "<font color='red'>Record not Deleted</font>";
    }
}
?>
