<?php
// Include the database connection file
@include "DataBase.php";

// Handle Delete action
if (isset($_POST['Deletes']) && isset($_POST['bankid'])) {
    $id = $conn->real_escape_string($_POST['bankid']);

    // Delete the record from the 'bank' table where bankid matches
    $deleting = "DELETE FROM bank WHERE bankid = $id";

    // Perform the query
    $conn->query($deleting);
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
    <section class="min-h-[95vh] w-[100vw] bg-black bg-cover">
        <header class="navbr w-[100%] h-[10vh]">
            <!-- Navigation bar goes here -->
            <nav class="h-[100%] flex gap-4 justify-center text-white items-center">
                <a href="index.php" class="hover:text-gray-200">Home</a>
                <a href="client.php" class="hover:text-gray-200">Client</a>
                <a href="compts.php" class="hover:text-gray-200">Compts</a>
                <a href="transaction.php" class="hover:text-gray-200">Transactions</a>
            </nav>
        </header>

        <?php
        // Include the database connection file
        @include "DataBase.php";
        ?>

        <h1 class="text-[55px] h-[10%] mb-[20px] text-center text-white">Gestionaire Bancaire</h1>

        <?php
        // Check if the 'submit' and 'bankid' are set, indicating that the form is submitted
        if (isset($_POST['submit']) && isset($_POST['bankid'])) {
            $bankid = $conn->real_escape_string($_POST['bankid']);

            // Fetch bank details based on the bankid
            $bank_sql = "SELECT * FROM bank WHERE bankid = '$bankid'";
            $bank_result = $conn->query($bank_sql);

            if ($bank_result->num_rows > 0) {
                $bank_row = $bank_result->fetch_assoc();
                echo "<div class ='flex w-[100%]  justify-center h-[60px] border-[2px] border-white border-solid items-center text-white'>";
                echo "<img class='border-[2px] border-white border-solid w-[50%%] h-[100%] flex items-center  justify-center' src='{$bank_row['logo']}' > ";
                echo "<p class='border-[2px] border-white border-solid w-[50%%] h-[100%] flex items-center  justify-center'>Bank : {$bank_row["name"]}</p>";
                echo "</div>";
            }

            // Fetch data based on the selected bankid for 'agency'
            $sql = "SELECT * FROM `agency` WHERE bankid = '$bankid'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table class="leading-9 h-[90%] w-[100%] text-center text-white">';
                echo '<thead>
                        <tr>
                            <th class="border-[2px] border-white border-solid w-[15%]">ID</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Longtitude</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Latitude</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Agency Name</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Bank ID</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Edit</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Delete</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Agences</th>
                        </tr>
                    </thead>';
                while ($row = $result->fetch_assoc()) {
                    echo '<form action="transaction.php" method="post" class="h-[50vh] items-start">';
                    echo "<tr>
                            <td class='border-[2px] border-white border-solid w-[15%]'>" . $row["agencyId"] . " </td>
                            <td class='border-[2px] border-white border-solid w-[15%]'> " . $row["longitude"] . "</td>
                            <td class='border-[2px] border-white border-solid w-[15%]'> " . $row["latitude"] . " </td>
                            <td class='border-[2px] border-white border-solid w-[15%]'>" . $row["agencyname"] . "</td>
                            <td class='border-[2px] border-white border-solid w-[15%]'>" . $row["bankId"] . "</td>
                            <td class='border-[2px] border-white border-solid w-[15%]'>
                                <input type='submit' name='submit' class='height-[80px] cursor-pointer w-[100%] hover:bg-black bg-white hover:text-white text-black ' value='transaction'>
                            </td>
                        </tr>";
                }
                echo '</table></form>';
            } else {
                echo "<p class='text-center'>0 results</p>";
            }
        } else {
            // Handle the case when 'submit' and 'bankid' are not set (initial page load)
            // Fetch data for 'compts' table
            $sqlall = "SELECT * FROM `agency`";
            $result2 = $conn->query($sqlall);
        }
            if ($result2->num_rows > 0) {
                echo '<table class="leading-9  w-[100%] text-center h-[7vh] items-start text-white">';
                echo '<thead>
                        <tr>
                            <th class="border-[2px] border-white border-solid w-[15%]">ID</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Longitude</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Latitude</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Agency Name</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Bank ID</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Détails</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Edit</th>
                            <th class="border-[2px] border-white border-solid w-[15%]">Delete</th>
                        </tr>
                    </thead>';
                while ($row = $result2->fetch_assoc()) {
                    echo '<form action="transaction.php" method="post" class="h-[50vh] items-start">';
                    echo "<tr>
                            <td class='border-[2px] border-white border-solid w-[15%]'>" . $row["agencyId"] . " </td>
                            <td class='border-[2px] border-white border-solid w-[15%]'> " . $row["longitude"] . "</td>
                            <td class='border-[2px] border-white border-solid w-[15%]'> " . $row["latitude"] . " </td>
                            <td class='border-[2px] border-white border-solid w-[15%]'>" . $row["agencyname"] . "</td>
                            <td class='border-[2px] border-white border-solid w-[15%]'>" . $row["bankId"] . "</td>
                            <td class='border-[2px] border-white border-solid w-[15%]'>
                                <input type='hidden' name='compts_id' value='" . $row["agencyId"] . "'>
                                <input type='submit' name='submit' class='height-[80px] cursor-pointer w-[100%] hover:bg-black bg-white hover:text-white text-black ' value='transaction'>
                            </td>
                            <td class='border-[2px] border-white border-solid w-[15%]'>
                                <form action='this_page.php' method='post' style='height:10vh; align-items:start;'>
                                    <input type='hidden' name='compts_id' value='" . $row["agencyId"] . "'>
                                    <input type='submit' class='height-[100%] cursor-pointer width-[100%] hover:bg-black bg-white hover:text-white text-black' name='EditCompte' value='Edit'>
                                </form>
                            </td>
                            <td class='border-[2px] border-white border-solid w-[15%]'>
                                <form action='this_page.php' method='post' style='height:10vh; align-items:start;'>
                                    <input type='hidden' name='compts_id' value='" . $row["agencyId"] . "'>
                                    <input type='submit' class='height-[100%] cursor-pointer width-[100%] hover:bg-black bg-white hover:text-white text-black' name='DeleteCompte' value='Delete'>
                                </form>
                            </td>
                        </tr>";
                }
                echo '</table></form>';
            } else {
                echo "<p class='text-center'>0 results</p>";
            }
            $conn->close();
            ?>
    </section>

    <footer class="text-center h-[5vh] text-white bg-black flex items-center justify-center">
        <h2 >Copyright © 2030 Hashtag Developer. All Rights Reserved</h2>
    </footer>
</body>

</html>