<!DOCTYPE html>
<html lang="en">

<head>
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
        <header class="header sticky w-[100%] top-0 bg-white shadow-md flex items-center justify-between px-8 py-02 z-50	">
            <!-- logo -->
            <a href="">
                <img src="images/logoPage.png" alt="" class="md:h-[50px] md:w-[100px] h-[35px] w-[90px]">
            </a>
            <!-- navigation -->
            <nav class="nav font-semibold w-[100%] text-lg">
                <ul class="flex items-center w-[100%] justify-center  ">
                    <li class="p-4 border-b-2 border-black border-opacity-0 hover:border-opacity-100 hover:text-black duration-200 cursor-pointer active">
                        <a href="">Home</a>
                    </li>
                    <li class="p-4 border-b-2 border-black border-opacity-0 hover:border-opacity-100 hover:text-black duration-200 cursor-pointer">
                        <select name="clients" id="selectOption" class="outline-none rounded">
                            <option class="font-semibold text-lg" value="client">clients</option>
                            <option class="font-semibold text-lg" value="admin">accounts</option>
                            <option class="font-semibold text-lg" value="transactions">transactions</option>
                        </select>
                    </li>
                    <li class="p-4 border-b-2 border-black border-opacity-0 hover:border-opacity-100 hover:text-black duration-200 cursor-pointer">
                        <a href="">Contact</a>
                    </li>
                </ul>
            </nav>
            <!-- buttons --->
            <a href="">
                <svg class="h-8 p-1 hover:text-green-500 duration-200" aria-hidden="true" focusable="false" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-9x">
                    <path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" class=""></path>
                </svg>
            </a>
        </header>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "gestion_banque";
        $cnx = new mysqli($servername, $username, $password, $databasename);
        ?>
        <div class="flex justify-evenly items-center">

            <h1 class="text-[55px] h-[10%] mb-[20px] text-center text-white">Agences</h1>
            <button class="bg-transparent h-[5%] hover:bg-white text-white w-[12rem] font-bold hover:text-black border-[3px] py-2 px-4  border-white hover:border-transparent rounded">
                Button
            </button>
        </div>
        <?php

        if (isset($_POST['submit']) && isset($_POST['client_id'])) {

            $client_id = $cnx->real_escape_string($_POST['client_id']);


            $client_sql = "SELECT id_client, nom, prenom, nationalité, sexe FROM Client WHERE id_client = '$client_id'";
            $client_result = $cnx->query($client_sql);

            if ($client_result->num_rows > 0) {

                $client_row = $client_result->fetch_assoc();
                echo "<div class ='flex w-[100%]  justify-center h-[60px] border-[2px] border-white border-solid items-center text-white'>";

                echo "<p class='border-[2px] border-white border-solid w-[25%] h-[100%] flex items-center  justify-center'>Nom : " . $client_row["nom"] . "</p>";
                echo "<p class='border-[2px] border-white border-solid w-[25%] h-[100%] flex items-center  justify-center'>Prénom : " . $client_row["prenom"] . "</p>";
                echo "<p class='border-[2px] border-white border-solid w-[25%] h-[100%] flex items-center  justify-center'>Nationalité : " . $client_row["nationalité"] . "</p>";
                echo "<p class='border-[2px] border-white border-solid w-[25%] h-[100%] flex items-center  justify-center'>Genre : " . $client_row["sexe"] . "</p>";
                echo "</div>";
            }


            $sql = "SELECT * FROM `compts` WHERE id_client = '$client_id'";
            $result = $cnx->query($sql);


            if ($result->num_rows > 0) {

                echo '<table class="leading-9 h-[90%] w-[100%] text-center text-white">';
                echo '<thead>
                        <tr>
                            <th class = "border-[2px] border-white border-solid w-[15%]">ID</th>
                            <th class = "border-[2px] border-white border-solid w-[15%]">RIB</th>
                            <th class = "border-[2px] border-white border-solid w-[15%]">Balance</th>
                            <th class = "border-[2px] border-white border-solid w-[15%]">Devise</th>
                            <th class = "border-[2px] border-white border-solid w-[15%]">ID_client</th>
                            <th class = "border-[2px] border-white border-solid w-[15%]">Détails</th>
                        </tr>
                    </thead>';
                while ($row = $result->fetch_assoc()) {

                    echo '<form action="transaction.php" method="post" class="h-[50vh] items-start">';
                    echo "<tr><td class = 'border-[2px] border-white border-solid w-[15%]'>" . $row["id_compts"] . " </td>
                    <td class = 'border-[2px] border-white border-solid w-[15%]'> " . $row["rib"] . "</td>
                    <td class = 'border-[2px] border-white border-solid w-[15%]'> " . $row["balance"] . " </td>
                    <td class = 'border-[2px] border-white border-solid w-[15%]'>" . $row["devise"] . "</td>
                    <td class = 'border-[2px] border-white border-solid w-[15%]'>" . $row["id_client"] . "</td>
                    <td class = 'border-[2px] border-white border-solid w-[15%]'>
                    <input type='hidden' name='compts_id' value='" . $row["id_compts"] . "'>
                    <input type='submit' name='submit' class='hight-[80px] cursor-pointer	  w-[100%] hover:bg-black bg-white hover:text-white text-black ' value='transaction'>
                </td>
            </tr>";
                }
                echo '</table></form>';
            } else {
                echo "<p class='text-center'>0 results</p>";
            }
        } else {

            $sqlall = "SELECT * FROM `compts`";
            $result2 = $cnx->query($sqlall);

            if ($result2->num_rows > 0) {

                echo '<table class="leading-9  w-[100%] text-center h-[50vh] items-start text-white">';
                echo '<thead>
                        <tr>
                            <th class = "border-[2px] border-white border-solid w-[15%]">ID</th>
                            <th class = "border-[2px] border-white border-solid w-[15%]">RIB</th>
                            <th class = "border-[2px] border-white border-solid w-[15%]">Balance</th>
                            <th class = "border-[2px] border-white border-solid w-[15%]">Devise</th>
                            <th class = "border-[2px] border-white border-solid w-[15%]">ID_client</th>
                            <th class = "border-[2px] border-white border-solid w-[15%]">Détails</th>
                        </tr>
                    </thead>';
                while ($row = $result2->fetch_assoc()) {
                    echo '<form action="transaction.php" method="post" class="h-[50vh] items-start" >';
                    echo "<tr>
                            <td class = 'border-[2px] border-white border-solid w-[15%]'>" . $row["id_compts"] . " </td>
                            <td class = 'border-[2px] border-white border-solid w-[15%]'> " . $row["rib"] . "</td>
                            <td class = 'border-[2px] border-white border-solid w-[15%]'> " . $row["balance"] . " </td>
                            <td class = 'border-[2px] border-white border-solid w-[15%]'>" . $row["devise"] . "</td>
                            <td class = 'border-[2px] border-white border-solid w-[15%]'>" . $row["id_client"] . "</td>
                            
                            <td class = 'border-[2px] border-white border-solid w-[15%]'>
                                <input type='hidden' name='compts_id' value='" . $row["id_compts"] . "'>
                                <input type='submit' name='submit' class='hight-[80px] cursor-pointer	  w-[100%] hover:bg-black bg-white hover:text-white text-black ' value='transaction'>
                            </td>
                        </tr>";
                }
                echo '</table></form>';
            } else {
                echo "<p class='text-center'>0 results</p>";
            }
        }

        $cnx->close();


        ?>
    </section>

    <footer class="text-center h-[5vh] text-white bg-black flex items-center justify-center">
        <h2>Copyright © 2030 Hashtag Developer. All Rights Reserved</h2>
    </footer>
</body>

</html>