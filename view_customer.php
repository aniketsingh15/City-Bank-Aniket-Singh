
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/viewcus.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<title>Welcome to the Bank</title>
<link rel="icon" href="images/City-Bank-Logo.png">
    <meta name="theme-color" content="#7952b3">
</head>
<body>

<!-- Navigation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="header">
        <a href="home_page.php" class="logo">CITY BANK <i class="fa fa-university" aria-hidden="true"></i></a>
        <div class="header-right">
            <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="view_customer.php"><i class="fa fa-users" aria-hidden="true"></i>View Coustomers</a>
            <a href="transactionhistory.php"><i class="fa fa-history" aria-hidden="true"></i>Transaction History</a>
            <a href="about_bank.php"><i class="fa fa-envira" aria-hidden="true"></i>About Us</a>
        
        </div>
</div>
	
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>
    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Users</h2>
    
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : black;">
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name'] ?></td>
                                    <td class="py-2"><?php echo $rows['email'] ?></td>
                                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                                    <td><a href="selecteduserdetail.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn" style="background-color : #A569BD;color: white;">Transfer</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
</body>
</html>