<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive">
  
    <title>Luxury Gold</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../img/Favicon.png">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
 <?php include 'include/header.php'; ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
     <?php include 'include/sidebar.php'; ?>
    <main class="app-content">
      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                     <h2 align="center"> Manage Salary</h2>
              <hr />
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th>Empid</th>
                    <th>DepartmentName</th>
                    <th>Salary</th>
                    <th>Allowancesalary</th>
                    <th>Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
              
                   <?php
                   include  'include/config.php';
                  $sql="SELECT tbladdsalary.id as sid,tbladdsalary.empid,tbladdsalary.salary,tbladdsalary.allowancesalary,tbladdsalary.total,tbldepartment.DepartmentName FROM tbladdsalary join tbldepartment on tbladdsalary.Department=tbldepartment.id ";
                  $query= $dbh->prepare($sql);
                 // $query->bindParam(':st',$st, PDO::PARAM_STR);
                  $query-> execute();
                  $results = $query -> fetchAll(PDO::FETCH_OBJ);
                  $cnt=1;
                  if($query -> rowCount() > 0)
                  {
                  foreach($results as $result)
                  {
                  ?>

                <tbody>
                  <tr>
                    <td><?php echo($cnt);?></td>
                    <td><?php echo htmlentities($result->empid);?></td>
                  <td><?php echo htmlentities($result->DepartmentName);?></td>
                  <td><?php echo htmlentities($result->salary);?></td>
                  <td><?php echo htmlentities($result->allowancesalary);?></td>
                   <td><?php echo htmlentities($result->total);?></td>
                 
                  <td>  
                  
                   <a href="edit-salary.php?id=<?php echo htmlentities($result->empid);?>"><span class="btn btn-success">Edit</span>

     <a href="salary-details.php?id=<?php echo htmlentities($result->sid);?>"><span class="btn btn-primary">View</span>
                   </td>
                  </tr>
                   
                 
                </tbody>

                
                 <?php  $cnt=$cnt+1; } } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="../js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
   
  </body>
</html>