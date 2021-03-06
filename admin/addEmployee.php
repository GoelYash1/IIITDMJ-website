<?php
include('includes/header.php');
include('includes/navbar.php');

?>
<?php
include_once 'includes/connect.php';
if (isset($_POST['addemployeebtn'])) {
       $employee_name = $_POST["employee_name"];
       $department_name = $_POST["department_name"];
       $designation = $_POST["designation"];
       if ($department_name=="Academics") {
              $department_code="ACAD";
       }
       elseif ($department_name=="Students") {
              $department_code="STU";
       }
       else {
              $department_code="RSPC";
       }
       $query = "INSERT INTO dean_info(Employee_Name,department_code,department_name,Designation) VALUES ('$employee_name','$department_code','$department_name','$designation')";
       $run = mysqli_query($con, $query);
       if (!$run) {
              echo "Data Not Inserted ".mysqli_error($con);
       }
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
       <h3 class="text-center">Add Dean Staff</h3>
       <form action="" method="POST" enctype="multipart/form-data" onsubmit="addnewdata()">
              <div class="form-group">
                     <lable for="employee_name">Name</lable>
                     <input type="text" class="form-control" id="employee_name" name="employee_name" required>
              </div>
              <div class="form-group">
                     <lable for="department_name">Department Name</lable>
                     <br>
                     <select name="department_name" id="department_name">
                            <option>Choose Department</option>
                            <option value="Students">Students</option>
                            <option value="Academics">Academics</option>
                            <option value="RSPC">Research</option>
                     </select>
              </div>
              <div class="form-group">
                     <lable for="designation">Designation</lable>
                     <textarea class="form-control" id="designation" name="designation" required></textarea>
              </div>
              <div class="text-center">
                     <button type="submit" class="btn btn-primary" id="addemployeebtn" name="addemployeebtn">
                            Add
                     </button>
                     <button type="button" class="btn btn-light">
                            <a href="dean_info.php">Close</a>
                     </button>
              </div>
       </form>
       <script>
              function addnewdata() {
                     var ask = window.confirm("Are you sure you want to add new data?");
                     if (ask) {
                            window.alert("This post was successfully added.");
                            window.open("http://localhost/ygc/IIITDMJ-website/admin/dean_info.php")
                     } else {
                            event.preventDefault();
                     }
              }
       </script>
       <?php
       include('includes/script.php');
       include('includes/footer.php');
       ?>