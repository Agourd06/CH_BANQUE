<?php
 @ include "DataBase.php";

 
 // Handle Delete action
 if (isset($_POST['Deletes']) && isset($_POST['bankid'])) {
     $id = $_POST['bankid'];
 
     // Delete associated records in the 'agency' table
     $deleteAgencies = "DELETE FROM agency WHERE bankId = $id";
     $conn->query($deleteAgencies);
 
     // Delete the record from the 'bank' table
     $deleteBank = "DELETE FROM bank WHERE bankid = $id";
     $conn->query($deleteBank);
 }
 

 ?>
 













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
<section class="min-h-[95vh] w-[100vw] bg-black  bg-cover">
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

   
   <div class="flex justify-evenly items-center">
   <h1 class="text-[55px] h-[10%] mb-[20px] text-center text-white">Agency</h1>
   <a href="addbank.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Add Banks</a>

   </div>



<table class="leading-9 w-[100%] text-white text-center">
    <thead class="text-white">
        <tr>
            <th class="border-[2px] border-white border-solid w-[15%]">Logo</th>
            <th class="border-[2px] border-white border-solid w-[15%]">Bank</th>
            <th class="border-[2px] border-white border-solid w-[15%]">ID</th>
            <th class="border-[2px] border-white border-solid w-[15%]">Edit</th>
            <th class="border-[2px] border-white border-solid w-[15%]">Delete</th>
            <th class="border-[2px] border-white border-solid w-[15%]">Agences</th>
        </tr>
    </thead>
    <tbody>
        <?php



        $sql = "SELECT logo, name, bankid FROM bank";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $id=$row["bankid"];
                echo "<tr>
                    <td class='border-[2px] border-white border-solid w-[2%]'><img class='h-[72px] w-[240px]' src='" . $row["logo"] . "' alt=''></td>
                    <td class='border-[2px] border-white border-solid w-[35%]'>" . $row["name"] . "</td>
                    <td class='border-[2px] border-white border-solid w-[30%]'>" . $row["bankid"] . "</td>
                    <td class='border-[2px] border-white border-solid w-[30%]'>
                   
                    <form action='addbank.php' method='post' style='height:10vh; align-items:start;'>
                    <input type='hidden' name='operation' value='" . $row["bankid"]. "'>
                    <input type='hidden' name='bankid' value='" . $row["bankid"]. "'>
                    <input type='submit' class='height-[100%] cursor-pointer width-[100%] hover:bg-black bg-white hover:text-white text-black' name='editing' value='Edit'>
                </form>
                

                
                </td>
                
                    <td class='border-[2px] border-white border-solid w-[30%]'>
                    <form action='banques.php' method='post' style='height:10vh; align-items:start;'>
                        <input type='hidden' name='bankid' value='" . $row["bankid"] . "'>
                        <input type='submit' class='height-[100%] cursor-pointer width-[100%] hover:bg-black bg-white hover:text-white text-black' name='Deletes' value='Delete'>
                    </form>
                </td>
                
                    <td class='border-[2px] border-white border-solid w-[30%]'>
                        <form action='agences.php' method='post' style='height:10vh; align-items:start;'>
                            <input type='hidden' name='bankid' value='" . $row["bankid"]. "'>
                            <input type='submit' class='height-[100%] cursor-pointer width-[100%] hover:bg-black bg-white hover:text-white text-black' name='submit' value='Agences'>
                        </form>
                    </td>
                </tr><br>";
            }
        } else {
            // Handle case when there are no rows in the table
        }
        $conn->close();
        ?>
    </tbody>
</table>




    </section>
    <footer class="text-center h-[5vh] text-white bg-black flex items-center justify-center">
        <h2 >Copyright © 2030 Hashtag Developer. All Rights Reserved</h2>
    </footer>
</body>

</html>