<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
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
                        <option class="font-semibold text-lg" value="client">Banks</option>
                        <option class="font-semibold text-lg" value="admin">Agencys</option>
                        <option class="font-semibold text-lg" value="transactions">ATM</option>
                    </select>
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
</body>
</html>