<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIH BANK</title>
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
    <?php
    session_start();
   
    ?>

<header class="header sticky w-[100%] h-[8vh] top-0 bg-white shadow-md flex items-center justify-between px-8 py-02 z-50 	">
        <!-- logo -->
        <a href="">
            <img src="images/cihlogo.png" alt="" class="md:h-[50px] md:w-[140px] h-[35px] w-[90px]">

        </a>
        <!-- navigation -->
        <nav class="nav font-semibold w-[100%] text-lg">
            <ul class="flex items-center w-[100%] justify-center  ">
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer active">
                    <a href="#">Home</a>
                </li>
           

                <li class="p-4 border-b-2 outline-none border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <select name="clients" id="clientSelect" class="border-none outline-none rounded">
                        <option class="font-semibold text-lg" value="client">Operations</option>

                        <option class="font-semibold text-lg" value="clientinfo">My infos</option>
                        <option class="font-semibold text-lg" value="clientaccounts">My accounts</option>
                        <option class="font-semibold text-lg" value="clienttransactions">My Transactions</option>
                    </select>
                </li>
                <li class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="">Contact</a>
                </li>
            </ul>
        </nav>

    </header>

    <section class="carousel-container">
        <div class="carousel-wrapper">
            <div class="carousel-item bg-black" style="background: url('images/pic1.jpg'); "></div>
            <div class="carousel-item " style="background-image: url('images/pic2.jpg');"></div>
            <div class="carousel-item " style="background-image: url('images/pic3.jpg');"></div>    
        </div>
      
    </section>

    <section class="bg-slate-100 bg-cover h-[70vh] flex items-center justify-around">

        <div class="text-center flex flex-col items-center gap-4"><svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -960 960 960" width="50"><path d="m438-338 226-226-57-57-169 169-84-84-57 57 141 141Zm42 258q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q104-33 172-132t68-220v-189l-240-90-240 90v189q0 121 68 220t172 132Zm0-316Z"/></svg>
            <h1 class="font-bold">
            Notification de Sécurité 
            </h1>
            <p> Votre sécurité est notre priorité. Assurez-vous d'utiliser<br> des mots de passe forts et de ne jamais partager vos <br>informations personnelles.
                 Consultez notre section de sécurité<br> pour en savoir plus sur les mesures que nous prenons<br> pour protéger vos comptes</p>
        </div>
        <div class=" text-center flex h-[100%] flex-col items-center gap-[65px] pt-[25px]">
        <a href="clients.php" class="text-white w-[200px] h-[50px] font-bold bg-gradient-to-r from-cyan-400 to-orange-300 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800  rounded-lg text-sm px-5 py-2.5 flex items-center text-center me-2 mb-2">Consulter Mes Données</a>
            <div class=" text-center flex  flex-col items-center gap-4" >
            <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -960 960 960" width="50"><path d="M200-280v-280h80v280h-80Zm240 0v-280h80v280h-80ZM80-120v-80h800v80H80Zm600-160v-280h80v280h-80ZM80-640v-80l400-200 400 200v80H80Zm178-80h444-444Zm0 0h444L480-830 258-720Z"/></svg>
            <h1 class="font-bold">Bienvenue chez CIH BANK!</h1>
            <p>Nous sommes ravis de vous accueillir. Explorez nos <br> services bancaires en ligne et
                 découvrez comment nous pouvons<br>  simplifier votre gestion financière.</p>
                </div>
        </div>
        <div class="text-center flex flex-col items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -960 960 960" width="50"><path d="M480-120q-75 0-140.5-28.5t-114-77q-48.5-48.5-77-114T120-480q0-75 28.5-140.5t77-114q48.5-48.5 114-77T480-840q82 0 155.5 35T760-706v-94h80v240H600v-80h110q-41-56-101-88t-129-32q-117 0-198.5 81.5T200-480q0 117 81.5 198.5T480-200q105 0 183.5-68T756-440h82q-15 137-117.5 228.5T480-120Zm112-192L440-464v-216h80v184l128 128-56 56Z"/></svg>
            <h1 class="font-bold">
            Mises à Jour et Nouveautés</h1>
            <p>Restez informé! Consultez notre page d'accueil régulièrement<br>  pour les dernières mises à jour, promotions et nouveautés. Nous <br> travaillons constamment pour améliorer votre<br>  expérience bancaire</p>
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

    <script src="main.js">

    </script>

</body>

</html>