<!DOCTYPE html>
<html lang="en">

<head>
<!-- Favicons -->
    <link rel="icon" href="images/cs-favicon.png">
    <meta name="theme-color" content="#7952b3"> 
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/history.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<title>Welcome to the Bank</title>
<link rel="icon" href="images/City-Bank-Logo.png">
</head>
<body>

<!-- Navigation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="header">
        <a href="">CITY BANK <i class="fa fa-university" aria-hidden="true"></i></a>
        <div class="header-right">
            <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="view_customer.php"><i class="fa fa-users" aria-hidden="true"></i>View Coustomers</a>
            <a href="transactionhistory.php"><i class="fa fa-history" aria-hidden="true"></i>Transaction History</a>
            <a href="about_bank.php"><i class="fa fa-envira" aria-hidden="true"></i>About Us</a>
        
        </div>
</div>

    <div class="container">
        <h2 class="text-center pt-4" style="color: black;">Transaction History</h2>

        <br>
        <div>
            <table>
                <thead style="color: black;">
                    <tr>
                        <th class="text-center">S.No</S></th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Date & Time</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';

                    $sql = "SELECT * FROM `transaction`";
                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {

                    ?>

                        <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['sno']; ?></td>
                            <td class="py-2"><?php echo $rows['sender']; ?></td>
                            <td class="py-2"><?php echo $rows['receiver']; ?></td>
                            <td class="py-2"><?php echo $rows['balance']; ?></td>
                            <td class="py-2"><?php echo $rows['datetime']; ?></td>
                        </tr>

                    <?php
                    }

                    ?>

                </tbody>


            </table>

        </div>

    </div>
    
</body>

</html>