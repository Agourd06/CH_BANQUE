<?php
 @ include "DataBase.php";

 
 // Handle Delete action
 if (isset($_POST['deletetransaction']) && isset($_POST['delete'])) 
    {
     $id = $_POST['delete'];
 
     // Delete associated records in the 'agency' table
     $deletetransaction = "DELETE FROM transaction WHERE transactionId = $id";
     if ($conn->query($deletetransaction) !== TRUE) {
         echo "Error deleting address: " . $conn->error;
     }
     
     // Delete the record from the 'agency' table
   
     
 }
 

 ?>
 

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags and stylesheets go here -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Gestionaire Bancaire</title>
    <style>
        header {
            filter: drop-shadow(4px 4px 5px rgba(255, 255, 255));
            border: 1px white solid;
        }
    </style>
</head>

<body>
    <section class="min-h-[95vh] w-[100vw] bg-white bg-cover">
        <header class="navbr w-[100%] h-[10vh]">
            <!-- Navigation bar goes here -->
            <nav class="h-[100%] flex gap-4 justify-center text-white items-center">
                <a href="index.php" class="hover:text-gray-200">Home</a>
                <a href="client.php" class="hover:text-gray-200">Client</a>
                <a href="compts.php" class="hover:text-gray-200">Compts</a>
                <a href="transaction.php" class="hover:text-gray-200">Transactions</a>
            </nav>
        </header>


        <div class="flex justify-evenly items-center">
   <h1 class="text-[55px] h-[10%] mb-[20px] text-center text-black">Transactions</h1>
   <a href="addtransactions.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Add Transaction</a>

   </div>
   <?php
        // Check if the 'submit' and 'bankid' are set, indicating that the form is submitted
        if (isset($_POST['submit']) && isset($_POST['accountid'])) {
            $accountid = $conn->real_escape_string($_POST['accountid']);

            // Fetch bank details based on the bankid
            $account_sql = "SELECT * FROM users WHERE userid = '$accountid'";
            $account_result = $conn->query($account_sql);
           
            if ($account_result->num_rows > 0) {
                $account_row = $account_result->fetch_assoc();
                echo "<div class ='flex w-[100%]  justify-center h-[60px] border-[2px] border-black border-solid items-center text-black'>";
                echo "<p class='border-[2px] border-black border-solid w-[85%] h-[100%] flex items-center  justify-center'>RIB : {$account_row["RIB"]}</p>";
                echo "<p class='border-[2px] border-black border-solid w-[85%] h-[100%] flex items-center  justify-center'>balance : {$account_row["balane"]}</p>";
                echo "</div>";
            }


            // Fetch data based on the selected bankid for 'agency'
            $sql = "SELECT * FROM `transaction` WHERE accountid = '$accountid'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table class="leading-9 h-[90%]  w-[100%] text-center text-black">';
                echo '<thead>
                        <tr>
                            <th class="border-[2px] border-black border-solid w-[15%] ">ID</th>
                            <th class="border-[2px] border-black border-solid w-[15%] ">Type</th>
                            <th class="border-[2px] border-black border-solid w-[15%] ">Amount</th>
                            <th class="border-[2px] border-black border-solid w-[15%] ">Edit</th>
                            <th class="border-[2px] border-black border-solid w-[15%] ">Delete</th>
                        </tr>
                    </thead>';
                while ($row = $result->fetch_assoc()) {
                    echo '<form action="transaction.php" method="post" class="h-[10vh] items-start">';
                    echo "<tr>
                            <td class='border-[2px] border-black border-solid '>" . $row["transactionId"] . " </td>
                            <td class='border-[2px] border-black border-solid '>" . $row["type"] . "  MAD</td>
                            <td class='border-[2px] border-black border-solid '> " . $row["amount"] . " </td>

                         
                               

                            <td class='border-[2px] border-black border-solid '>
                            <form action='addtransactions.php' method='post' class='height-[100%] cursor-pointer width-[100%] hover:bg-black bg-white hover:text-white text-black'>
                            <input type='hidden' name='operation' value='" . $row["transactionId"]. "'>
                            <input type='hidden' name='transactionId' value='" . $row["transactionId"]. "'>
                            <input type='submit'  name='editing' value='Edit'>
                        </form>
                        
                            </td>
                            <td class='border-[2px] border-black border-solid '>
                            <form action='transactions.php' method='post' class='height-[100%] cursor-pointer width-[100%] hover:bg-black bg-white hover:text-white text-black'>
                                <input type='hidden' name='delete' value='" . $row["transactionId"] . "'>
                                <input type='submit'  name='deletetransaction' value='Delete'>
                            </form>
                        </td>
                        </tr>";
                }
                echo '</table>';
            } else {
                echo "<p class='text-center'>0 results</p>";
            }
        } else {
            // Handle the case when 'submit' and 'bankid' are not set (initial page load)
            // Fetch data for 'compts' table
            $sqlall = "SELECT * FROM `transaction`";
            $result2 = $conn->query($sqlall);
        
            if ($result2->num_rows > 0) {
                echo '<table class="leading-9  w-[100%] text-center h-[7vh] items-start text-black">';
                echo '<thead>
                        <tr>
                        <th class="border-[2px] border-black border-solid w-[15%] ">ID</th>
                            <th class="border-[2px] border-black border-solid w-[15%] ">RIB</th>
                            <th class="border-[2px] border-black border-solid w-[15%] ">Balance</th>
                            <th class="border-[2px] border-black border-solid w-[15%] ">Edit</th>
                            <th class="border-[2px] border-black border-solid w-[15%] ">Delete</th>
                        </tr>
                    </thead>';
                while ($row = $result2->fetch_assoc()) {
                
                    echo "<tr>
                    <td class='border-[2px] border-black border-solid '>" . $row["transactionId"] . " </td>
                    <td class='border-[2px] border-black border-solid '> " . $row["type"] . "</td>
                    <td class='border-[2px] border-black border-solid '> " . $row["amount"] . "  MAD</td>


                 
                               

                            <td class='border-[2px] border-black border-solid '>
                            <form action='addtransactions.php' method='post' class='height-[100%] cursor-pointer width-[100%] hover:bg-black bg-white hover:text-white text-black'>
                            <input type='hidden' name='operation' value='" . $row["transactionId"]. "'>
                            <input type='hidden' name='transactionid' value='" . $row["transactionId"]. "'>
                            <input type='submit'  name='editing' value='Edit'>
                        </form>
                        
                            </td>
                            <td class='border-[2px] border-black border-solid '>
                            <form action='transactions.php' method='post' class='height-[100%] cursor-pointer width-[100%] hover:bg-black bg-white hover:text-white text-black'>
                                <input type='hidden' name='delete' value='" . $row["transactionId"] . "'>
                                <input type='submit'  name='deletetransaction' value='Delete'>
                            </form>
                        </td>
                        </tr>";
                }
                echo '</table>';
            } else {
                echo "<p class='text-center'>0 results</p>";
            }
        }
            $conn->close();
            ?>
    </section>

    <footer class="text-center h-[5vh] text-white bg-black flex items-center justify-center">
        <h2 >Copyright © 2030 Hashtag Developer. All Rights Reserved</h2>
    </footer>
</body>

</html>