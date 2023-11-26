<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'PEP</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .carousel-container {
            width: 100%;
            height: 70vh;
            overflow: hidden;
            position: relative;
        }

        .carousel-wrapper {
            display: flex;
            transition: transform 5s ease-in-out;
            animation: slide 20s infinite alternate;
            /* Pour l'animation automatique */
        }

        .carousel-item {
            width: 100%;
            flex: 0 0 auto;
            height: 70vh;
            background-size: cover;
            background-position: center;
        }

        @keyframes slide {

            0%,
            100% {
                transform: translateX(0);
            }

            33.33% {
                transform: translateX(-100%);
            }

            66.66% {
                transform: translateX(-200%);
            }
        }

        .faq {
            padding: 3em 0;
            background-color: #EDEDED;
            text-align: center;
        }

        .faqq {
            width: 60%;
            margin-top: 2em;
            padding-bottom: 1em;
            border-bottom: 2px solid black;
            cursor: pointer;
        }

        .faqq .question {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .faqq .reponse {
            max-height: 0;
            overflow: hidden;
            transition: max-height 1s ease, opacity 1s ease;
        }

        .faqq.activeee .reponse {
            max-height: 1000px;
            opacity: 1;
        }

        .faqq button.toggle {
            background-color: transparent;
            border: none;
            font-size: 20px;
        }
        .carousel-content {
            width: 100vw;
            height: 70vh;
            position: absolute;
            top: 19%;
            left: 49%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: end;
            align-items: center;
            gap: 30vh;
            flex-direction: column;
        }
    </style>
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
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer active">
                    <a href="">Home</a>
                </li>
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <select name="clients" id="selectOption" class="outline-none rounded">
                        <option class="font-semibold text-lg" value="client">clients</option>
                        <option class="font-semibold text-lg" value="admin">accounts</option>
                        <option class="font-semibold text-lg" value="transactions">transactions</option>
                    </select>
                </li>
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
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

    <section class="carousel-container">
        <div class="carousel-wrapper">
            <div class="carousel-item bg-black" style="background: url('images/pic1.jpg'); "></div>
            <div class="carousel-item " style="background-image: url('images/pic2.jpg');"></div>
            <div class="carousel-item " style="background-image: url('images/pic3.jpg');"></div>    
        </div>
      
    </section>

    <section class="bg-slate-200 bg-cover h-[70vh] flex items-center justify-around">

        <div class="text-center flex flex-col items-center gap-4"><svg xmlns="http://www.w3.org/2000/svg" height="2em"
                viewBox="0 0 448 512">
                <path
                    d="M210.6 5.9L62 169.4c-3.9 4.2-6 9.8-6 15.5C56 197.7 66.3 208 79.1 208H104L30.6 281.4c-4.2 4.2-6.6 10-6.6 16C24 309.9 34.1 320 46.6 320H80L5.4 409.5C1.9 413.7 0 419 0 424.5c0 13 10.5 23.5 23.5 23.5H192v32c0 17.7 14.3 32 32 32s32-14.3 32-32V448H424.5c13 0 23.5-10.5 23.5-23.5c0-5.5-1.9-10.8-5.4-15L368 320h33.4c12.5 0 22.6-10.1 22.6-22.6c0-6-2.4-11.8-6.6-16L344 208h24.9c12.7 0 23.1-10.3 23.1-23.1c0-5.7-2.1-11.3-6-15.5L237.4 5.9C234 2.1 229.1 0 224 0s-10 2.1-13.4 5.9z" />
            </svg>
            <h1 class="font-bold">
                PLANT AND ACCESSORIES SALES
            </h1>
            <p> O'PEP offers a range of indoor and outdoor<BR> plants, along with accessories like pots,<BR> substrates,
                and gardening tools.</p>
        </div>
        <div class=" text-center flex flex-col items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                viewBox="0 0 512 512">
                <path
                    d="M272 96c-78.6 0-145.1 51.5-167.7 122.5c33.6-17 71.5-26.5 111.7-26.5h88c8.8 0 16 7.2 16 16s-7.2 16-16 16H288 216s0 0 0 0c-16.6 0-32.7 1.9-48.2 5.4c-25.9 5.9-50 16.4-71.4 30.7c0 0 0 0 0 0C38.3 298.8 0 364.9 0 440v16c0 13.3 10.7 24 24 24s24-10.7 24-24V440c0-48.7 20.7-92.5 53.8-123.2C121.6 392.3 190.3 448 272 448l1 0c132.1-.7 239-130.9 239-291.4c0-42.6-7.5-83.1-21.1-119.6c-2.6-6.9-12.7-6.6-16.2-.1C455.9 72.1 418.7 96 376 96L272 96z" />
            </svg>
            <h1 class="font-bold">
                GARDENING ADVICE
            </h1>
            <p>O'PEP provides expert advice on plant selection,<BR> planting, and maintenance, tailored to growth<BR>
                conditions and location.</p>
        </div>
        <div class="text-center flex flex-col items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                viewBox="0 0 384 512">
                <path
                    d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z" />
            </svg>
            <h1 class="font-bold">
                DELIVERY AND LANDSCAPING </h1>
            <p>O'PEP provides online plant order delivery and <BR>landscaping services for customers creating<BR> floral
                arrangements </p>
        </div>
    </section>
    <section class="h-[90vh]">
        
        <div class=" flex items-center justify-evenly">
            <div class=" pr-8">
            <h1 class=" text-3xl font-bold"> &emsp;"Blossoming Beauty:<br> &emsp;Explore the Exquisite Services of O'PEP<br>&emsp;Nursery"
        </h1>
                <p>&emsp;Immerse yourself in a world where every seed is a promise, every bud <br>
                &emsp;is a work of art in the making.At O'PEP Nursery, we invite you to discover<br>
                &emsp;exceptional horticultural services crafted to reveal the splendor of <br>
                &emsp;nature in your space.Welcome to our floral kingdom, where excellence grows<br>
                &emsp;at every step of your gardening journey.Our dedicated team of horticultural<br>
                &emsp;experts is here to guide you, from the meticulous selection of plants to the<br>
                &emsp;creation of a garden that tells your story. Exotic plants, elegant shrubs,<br>
                &emsp;eachvariety has been carefully chosen to brighten your outdoor world.Let our<br>
                &emsp;tailor-made landscaping services transform your dreams into reality. Unique <br>
                &emsp;designs that captivate, outdoor spaces that enchant – that's our promise.</p>
            </div>
            <div>
                <img src="./images/aboutus.png" alt="">
            </div>
        </div>
    </section>


    <section class="h-[90vh]">
        
        <div class=" flex items-center justify-between">
            <div>
                <img src="./images/aboutus.png" alt="">
            </div>
            <div class=" pr-8">
            <h1 class=" text-3xl font-bold">&emsp; "O'PEP: Cultivating Heritage, Blooming <br>&emsp;Beauty"</h1>
                <p>&emsp;&emsp;Let's delve into the history of O'PEP Nursery, a journey rooted in deep<br>
                &emsp;&emsp;family passion. For decades,our commitment to nature has grown, with each<br>
                &emsp;&emsp;plant carrying the legacy of our roots. Our humble beginnings were lessons<br>
                &emsp;&emsp;learned, gradually shaping a collection of rare and exotic plants. Our <br>
                &emsp;&emsp;reputation blossomed, attracting gardening enthusiasts from around the <br>
                &emsp;&emsp;world. The new millennium brought an era of customized landscaping services,<br> 
                &emsp;&emsp;transforming ordinary outdoor spaces into exceptional havens. Today, O'PEP <br>
                &emsp;&emsp;Nursery evolves with unwavering passion, celebrating the continuous flourishing<br> 
                &emsp;&emsp;of nature and beauty. Join us in this botanical story, where each leaf tells <br>
                &emsp;&emsp;the living narrative of O'PEP Nursery.</p>
            </div>

        </div>
    </section>


    </section>

    <section>
        <h1 class="mb-4 text-5xl font-extrabold leading-none tracking-tight text-center py-8">Client Satisfait</h1>
        <div class="sm:grid grid-cols-3 gap-2 ">
            <div class="bg-gradient-to-b  from-gray-100 to-gray-300  rounded-md shadow-md text-center">
                <img class="rounded-full h-24 mx-auto p-2" src="../media/belle.jpg" alt="feedback">

                <p>Le service de location était très pratique et le personnel était extrêmement amical. Je louerai
                    certainement à nouveau avec eux.</p>
                <p class="font-bold text-green-500">Sophie M.</p>
            </div>
            <div class="bg-gradient-to-b from-gray-100 to-gray-300  rounded-md shadow-md text-center">
                <img class="rounded-full w-24 h-24 mx-auto p-2" src="../media/fb1.jpg" alt="feedback">

                <p>Le service de location était très pratique et le personnel était extrêmement amical. Je louerai
                    certainement à nouveau avec eux.</p>
                <p class="font-bold text-green-500">David L.</p>
            </div>
            <div class="bg-gradient-to-b  from-gray-100 to-gray-300  rounded-md shadow-md text-center">
                <img class="rounded-full h-24 w-24 mx-auto p-2" src="../media/fb2.jpg" alt="feedback">

                <p>Le service de location était très pratique et le personnel était extrêmement amical. Je louerai
                    certainement à nouveau avec eux.</p>
                <p class="font-bold text-green-500">Emma G.</p>
            </div>
        </div>
    </section>



    <section class="py-16 max-w-full ">
        <div class="bg-green-400 h-64 items-center ">
            <div class="flex justify-around text-white font-bold text-2xl text-center  ">
                <div>
                    <p class="my-16">30</p>
                    <p>Ans d'experience</p>
                </div>
                <div>
                    <p class="my-16">1024</p>
                    <p>total de voitures</p>
                </div>
                <div>
                    <p class="my-16">2389</p>
                    <p>Client satisfait</p>
                </div>
                <div>
                    <p class="my-16">1024</p>
                    <p>total des locaux</p>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="faq">
            <h1 class="mb-4 text-5xl font-extrabold leading-none tracking-tight text-center py-4 ">Frequently Asked
                Questions</h1>
            <div class="faqq mx-auto">
                <div class="question">Comment fonctionne la location de voiture ?<button class="toggle">+</button></div>
                <div class="reponse text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis
                    est deleniti,
                    animi numquam culpa vero soluta perspiciatis amet pariatur, libero, facere perferendis aspernatur?
                    Possimus, rem. Consectetur in laboriosam officia aut.</div>
            </div>
            <div class="faqq mx-auto">
                <div class="question">Quels sont les types de voitures disponibles à la location ?<button
                        class="toggle">+</button></div>
                <div class="reponse text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem odio
                    deleniti
                    voluptate, mollitia enim est quaerat culpa adipisci excepturi veritatis itaque ad officiis, sint
                    animi, voluptatibus maxime minima sapiente corrupti!</div>
            </div>
            <div class="faqq mx-auto">
                <div class="question">Où puis-je louer une voiture dans ma ville ?<button class="toggle">+</button>
                </div>
                <div class="reponse text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum
                    itaque facere amet
                    earum necessitatibus? Fugiat, minima? Alias, maxime ratione vero velit laudantium fuga illo eius qui
                    quibusdam iure soluta perspiciatis.</div>
            </div>
            <div class="faqq mx-auto">
                <div class="question">Quelles sont les exigences d'âge pour louer une voiture ?<button
                        class="toggle">+</button></div>
                <div class="reponse text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                    corporis, in cumque
                    cum minima ratione quos eum eaque possimus, porro adipisci nam numquam deserunt consequuntur
                    veritatis enim unde esse consectetur.</div>
            </div>
            <div class="faqq mx-auto">
                <div class="question">Quels documents ai-je besoin de fournir pour louer une voiture ?<button
                        class="toggle">+</button></div>
                <div class="reponse text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
                    ullam in
                    suscipit! Id, sint nostrum consectetur est non maxime, qui fugiat eum doloremque architecto libero
                    quaerat vitae, voluptas velit hic.</div>
            </div>
            <div class="faqq mx-auto">
                <div class="question">Quels sont les tarifs de location de voitures et les options de paiement ?<button
                        class="toggle">+</button></div>
                <div class="reponse text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque,
                    quaerat enim unde
                    quis qui odio optio eos culpa dolor dicta doloremque amet perferendis nihil mollitia atque veniam
                    modi ea sequi.</div>
            </div>
        </div>
    </section>



    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <footer class="relative bg-blueGray-200 pt-8 pb-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl fonat-semibold text-blueGray-700">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-dribbble"></i></button><button
                            class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful
                                Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.github.com/creativetimofficial?ref=njs-profile">Github</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free
                                        Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Other
                                Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                        Copyright © <span id="get-current-year">2021</span><a
                            href="https://www.creative-tim.com/product/notus-js"
                            class="text-blueGray-500 hover:text-gray-800" target="_blank"> Notus JS by
                            <a href="https://www.creative-tim.com?ref=njs-profile"
                                class="text-blueGray-500 hover:text-blueGray-800">Creative Tim</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const faqItems = document.querySelectorAll(".faqq");

            faqItems.forEach((item) => {
                const toggleButton = item.querySelector(".toggle");
                const answer = item.querySelector(".reponse");

                toggleButton.addEventListener("click", function () {
                    item.classList.toggle("activeee");
                    if (item.classList.contains("activeee")) {
                        toggleButton.textContent = "-";
                    } else {
                        toggleButton.textContent = "+";
                    }
                });
            });
        });
        var selectElement = document.getElementById('selectOption');

// Add an event listener to handle option selection
selectElement.addEventListener('change', function() {
    // Get the selected option value
    var selectedOption = selectElement.value;

    // Redirect to the selected page
    if (selectedOption === 'client') {
        window.location.href = 'Users.php';
    } else if (selectedOption === 'admin') {
        window.location.href = 'Admin.php';
    } else if (selectedOption === 'transactions') {
        window.location.href = 'Transactions.php';
    }
});
    </script>

</body>

</html>