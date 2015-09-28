
<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'koneksi.php'; // hubungkan file php dengan file configurasi ke database
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $login_session; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Users</a>
                    </li>
                     <li class="active">
                        <a href="crud_users.html"><i class="fa fa-fw fa-table"></i>Kelola Users</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>User Table</h2>
                            <table class="table table-bordered table-hover" id='tabledata'>
                                <thead>
                                    <tr>
                                        <th>Id User</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                    </tr>
                                </thead>
                                <?php
                                $query=mysql_query("select * from user"); 
                                while($lihat=mysql_fetch_array($query)){        
                                ?>      
                                <tbody>                                                   
                                    <td><?php echo $lihat['id_user'] ?></td>        
                                    <td><?php echo $lihat['username'] ?></td>           
                                    <td><?php echo $lihat['password'] ?></td>          
                                    <td><?php echo $lihat['name'] ?></td>      
                                    <td><?php echo $lihat['email'] ?></td> 
                                    <td><?php echo $lihat['tempat_lahir'] ?></td> 
                                    <td><?php echo $lihat['tanggal_lahir'] ?></td>  
                                    <td><a href="edit_user.php?id_user=<?php echo $lihat['id_user'] ?>">Edit</a>      
                                     <a href="hapus_mhs.php?id_mhs=<?php echo $lihat['id_mhs'] ?>">Hapus</a></td>   
                                </tbody>
                                <?php
                                    }
                                ?>
                            </table>
                         </div>
                    </div>
                <!-- /.row -->
                </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="datatables/jquery.dataTables.js"></script>
    <script src="datatables/dataTables.bootstrap.js"></script>

</body>

</html>
