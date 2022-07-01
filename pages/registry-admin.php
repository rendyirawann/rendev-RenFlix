<?php 
	$user = query ("SELECT * FROM user"); 

	if (isset ($_POST["find"])) {
		$user = find($_POST["keyword"]);
	}
?>

<!-- Start -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Panel Admin | Register Account
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="admin.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> Register Account
                    </li>
                </ol>
            </div>
        </div>
        <p id="tombol-tambah-container"><a href="admin.php?p=add-account" class="tombol">Add Account</a></p>

        <form action="" method="POST">
            <input type="text" name="keyword" autofocus placeholder="Find a Keyword..." autocomplete="off">
            <button type="submit" name="find">Search</button>
        </form>
        <br>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h2>List Admin</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($user as $row ) : ?>
                            <tr>
                                <td>
                                    <?php echo $i; ?>
                                </td>
                                <td>
                                    <?php echo $row["username"];?>
                                </td>
                                <td>
                                    <pre>Password Encrypted</pre>
                                    <!-- <?php echo $row["password"];?> -->
                                </td>
                                <td>
                                    <?php echo $row["level"];?>
                                </td>
                                <td><a class="btn btn-info" type="submit" role="button" href="admin.php?p=edit-account&id=<?php echo $row["id"];?>">Edit</a> | <a class="btn btn-danger" type="submit" role="button" href="delete-account.php?id=<?php echo $row["id"];?>">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.row -->
</div>