<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INKGIE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script> --}}

    {{-- STYLING --}}
    <style>

     
html{
    scroll-behavior: smooth;
    background-image: url("/images/bg-1.jpg")

}
        #navbar {
            transition: top 0.3s;
        }


       
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&family=Poppins:wght@100;200;500;700;900&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100">


    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 w-full text-white z-40">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <ul class="flex space-x-6">
                <li><a href="/" class="hover:text-gray-300">Home</a></li>
                <li><a href="#artists" class="hover:text-gray-300">Artists</a></li>
                <li><a href="#works" class="hover:text-gray-300">Gallery</a></li>
            </ul>
            <a href="/" class="text-2xl font-bold">
                <img src="/images/logo-header.png" class="w-28 h-28" alt="Tattoo">
            </a>

            <ul class="flex space-x-6">
                
                <li><a href="#services" class="hover:text-gray-300">Services</a></li>
                <li><a href="#contact" class="hover:text-gray-300">Clinic</a></li>
            </ul>
        </div>
    </nav>

    
    <!-- Hero Section -->
    <section class="h-screen w-full bg-cover bg-center relative" style="background-image: url('/images/banner.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center">
            <div class="text-center flex justify-center items-center flex-col h-full w-full text-white">
                <h1 class="text-7xl  mb-6" style="font-family: 'Megrim', cursive;">We turn skin into Art;</h1>
                <button class=" font-bold absolute mt-[670px] h-[50px] w-full px-4  bg-[#7b7f5d] text-white  hover:bg-[#405060] transition delay-75 ease-in-out">Book Now</button>
            </div>
        </div> 
       
        
    </section>
    {{-- ! END OF HERO SECTION --}}



    {{-- Artise section --}}
    <section id="artists" class="py-16 bg-gray-50 h-[450px]" style="background-image: url('/images/bg-1.jpg');">
        <div class="mt-[50px]">
            <h2 class="text-5xl font-bold text-center mt-[-25px]"  style="font-family: 'Megrim', cursive;">ARTIST;</h2>
            <h2 class="text-5xl font-bold text-center mb-8" style="font-family: 'Megrim', cursive;">MASTERPIECE IN MOTION</h2>
            <h4 class="text-1xl text-center mb-8" >Crafting Dreams into Stunning, Wearable Arts</h4>
        </div>
    </section>

    <section id="artists" class="py-16 bg-gray-50 w-screen" style="background-image: url('/images/bg-2.jpg');">
       
        <div class="container mt-[50px] mx-auto grid grid-cols-5 sm:grid-cols-2 lg:grid-cols-3 gap-6  w-[85%]">
            <!-- Artist Card -->
            @foreach ([
                ['name' => 'JOSHUA BIONG', 'image' => '/images/artist1.png'],
                ['name' => 'SOLANA MERCURE', 'image' => '/images/artist2.png'],
                ['name' => 'JOSHUA BIONG', 'image' => '/images/artist3.png'],
                ['name' => 'JOSHUA BIONG', 'image' => '/images/artist4.png'],
                ['name' => 'JOSHUA BIONG', 'image' => '/images/artist5.png'],
                ['name' => 'JOSHUA BIONG', 'image' => '/images/artist6.png']
            ] as $artist)
                    <div class="bg-white shadow-lg grayscale hover:grayscale-0">
                        <img src="{{ $artist['image'] }}" alt="{{ $artist['name'] }}">
                     <div
                         class="flex justify-center items-center absolute bottom-0 left-0 right-0 top-0 h-full w-[50%] overflow-hidden opacity-0 transition duration-300 ease-in-out hover:opacity-100 backdrop-blur-xl bg-white/60">
                         <div class="rotate-90 flex justify-center items-center flex-col">
                             <span class="text-black text-2xl font-bold "  style="font-family: 'Megrim', cursive;">{{ $artist['name'] }}</span>
                             <span class="text-black font-bold">Tattoo Artist</span>
                         </div>        
                 </div>
             </div>
            @endforeach
              </div>
            <!-- Artist Card --> 
        </div>
                <button class="w-full px-4 py-2 mt-[70px] bg-[#405060] text-white rounded hover:bg-[#7b7f5d] transition delay-75 ease-in-out">Inquire Now</button>

{{--  --}}
    </section>

    {{-- ! END OF ARTIST SECTION --}}


    <!-- Services Section -->
<section id="services" class="abosolute h-[600px]  flex justify-center items-center flex-col w-full"
style="background-image: url('/images/bg-1.jpg');">
<div class="w-full h-[400px] flex justify-center items-center flex-col" style="background-image: url('/images/bg-3.jpg');">
    <h2 class="text-6xl text-center mb-8 text-white"  style="font-family: 'Megrim', cursive;">Services;</h2>
    <p class=" text-center mb-8 text-white -mt-6"  >Harmonizing Art and Expression</p>
    <div class="flex justify-around w-full items-center">
        <button class="text-6xl px-20 py-5 hover:bg-gray-800 text-white rounded transition ease-in-out delay-75"  style="font-family: 'Megrim', cursive;">Tattoos</button>
        <button class="text-6xl px-20 py-5 hover:bg-gray-800 text-white rounded transition ease-in-out delay-75"  style="font-family: 'Megrim', cursive;">Aesthetics</button>
    </div>
</div>
</section>


<!-- Works Section -->
<section id="works" class="w-full h-screen" 
 style="background-image: url('/images/bg-1.jpg');"
 >
    <h2 class="text-6xl text-center " style="font-family: 'Megrim', cursive;">Our Works</h2>
    <p class=" font-bold text-center py-10">In your Memories, Wear your Stories</p>
    <div class="carousel flex justify-center space-x-4">
        <!-- Add carousel logic -->
        <div class="slide-container swiper ">
            <div class="slide-content">
              <div class="card-wrapper swiper-wrapper ">
               <div class="card swiper-slide grayscale hover:grayscale-0 ]">
                    <div class="card-content">
                      <div class="card-content">
                          <img class=" h-[600px] w-[600px]" src="/images/img-works-1.png" alt="" srcset="">
                        </div>
                    </div>
                  </div>
                
                <div class="card swiper-slide grayscale hover:grayscale-0">
                    <div class="card-content">
                      <div class="card-content">
                        <img class=" h-[600px] w-[600px]" src="/images/img-works-2.png" alt="" srcset="">
                        </div>
                    </div>
                  </div>

                 
                <div class="card swiper-slide grayscale hover:grayscale-0">
                    <div class="card-content">
                      <div class="card-content">
                        <img class=" h-[600px] w-[600px]" src="/images/img-works-3.png" alt="" srcset="">
                        </div>
                    </div>
                  </div>

                  <div class="card swiper-slide grayscale hover:grayscale-0">
                    <div class="card-content">
                      <div class="card-content">
                        <img class=" h-[600px] w-[600px]" src="/images/img-works-2.png" alt="" srcset="">
                        </div>
                    </div>
                  </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
          </div>
    </div>
</section>


{{-- FOOTER --}}
<footer id="contact" class="bg-gray-800 text-white py-16 justify-center  ">
    <div class="container mx-auto text-center flex justify-around items-center ">
        <!-- Embedded Map -->
        <div class="mb-8">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18..."
                width="100%" height="300" style="border:0;" allowfullscreen=""></iframe>
        </div>
{{-- Logoooo here  --}}
        <div class="h-full justify-around items-center flex flex-col">
            <img src="/images/logo-header.png" alt="" srcset="">
            <h1 class="text-5xl py-8"  style="font-family: 'Megrim', cursive;">INKGIE</h1>
            <p>Tattoo & Aesthetics</p>
        </div>
        <!-- Opening Hours -->
        <div class="">
            <h2 class="mb-4 text-4xl font-extralight">Hours:</h2>
            <p>10:00 AM - 8:00 PM</p>
            <!-- Social Media -->
            <h2 class="mb-4 text-4xl font-extralight">Social Media</h2>
            <div class="flex justify-center space-x-6 mb-4">
                <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white shadow-md shadow-gray-200 group transition-all duration-300">
                    <svg class="transition-all duration-300 group-hover:scale-110"
                    xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 72 72" fill="none">
                      <path d="M46.4927 38.6403L47.7973 30.3588H39.7611V24.9759C39.7611 22.7114 40.883 20.4987 44.4706 20.4987H48.1756V13.4465C46.018 13.1028 43.8378 12.9168 41.6527 12.8901C35.0385 12.8901 30.7204 16.8626 30.7204 24.0442V30.3588H23.3887V38.6403H30.7204V58.671H39.7611V38.6403H46.4927Z" fill="#337FFF"/>
                    </svg>
                    </button>

                    <button class="w-10 h-10 flex items-center justify-center group rounded-lg bg-white shadow-md shadow-gray-200 group transition-all duration-300">
                        <svg class="transition-all duration-300 group-hover:scale-110" width="28" height="28" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M27.4456 35.7808C27.4456 31.1786 31.1776 27.4468 35.7826 27.4468C40.3875 27.4468 44.1216 31.1786 44.1216 35.7808C44.1216 40.383 40.3875 44.1148 35.7826 44.1148C31.1776 44.1148 27.4456 40.383 27.4456 35.7808ZM22.9377 35.7808C22.9377 42.8708 28.6883 48.618 35.7826 48.618C42.8768 48.618 48.6275 42.8708 48.6275 35.7808C48.6275 28.6908 42.8768 22.9436 35.7826 22.9436C28.6883 22.9436 22.9377 28.6908 22.9377 35.7808ZM46.1342 22.4346C46.1339 23.0279 46.3098 23.608 46.6394 24.1015C46.9691 24.595 47.4377 24.9797 47.9861 25.2069C48.5346 25.4342 49.1381 25.4939 49.7204 25.3784C50.3028 25.2628 50.8378 24.9773 51.2577 24.5579C51.6777 24.1385 51.9638 23.6041 52.0799 23.0222C52.1959 22.4403 52.1367 21.8371 51.9097 21.2888C51.6828 20.7406 51.2982 20.2719 50.8047 19.942C50.3112 19.6122 49.7309 19.436 49.1372 19.4358H49.136C48.3402 19.4361 47.5771 19.7522 47.0142 20.3144C46.4514 20.8767 46.1349 21.6392 46.1342 22.4346ZM25.6765 56.1302C23.2377 56.0192 21.9121 55.6132 21.0311 55.2702C19.8632 54.8158 19.0299 54.2746 18.1538 53.4002C17.2777 52.5258 16.7354 51.6938 16.2827 50.5266C15.9393 49.6466 15.533 48.3214 15.4222 45.884C15.3009 43.2488 15.2767 42.4572 15.2767 35.781C15.2767 29.1048 15.3029 28.3154 15.4222 25.678C15.5332 23.2406 15.9425 21.918 16.2827 21.0354C16.7374 19.8682 17.2789 19.0354 18.1538 18.1598C19.0287 17.2842 19.8612 16.7422 21.0311 16.2898C21.9117 15.9466 23.2377 15.5406 25.6765 15.4298C28.3133 15.3086 29.1054 15.2844 35.7826 15.2844C42.4598 15.2844 43.2527 15.3106 45.8916 15.4298C48.3305 15.5408 49.6539 15.9498 50.537 16.2898C51.7049 16.7422 52.5382 17.2854 53.4144 18.1598C54.2905 19.0342 54.8308 19.8682 55.2855 21.0354C55.6289 21.9154 56.0351 23.2406 56.146 25.678C56.2673 28.3154 56.2915 29.1048 56.2915 35.781C56.2915 42.4572 56.2673 43.2466 56.146 45.884C56.0349 48.3214 55.6267 49.6462 55.2855 50.5266C54.8308 51.6938 54.2893 52.5266 53.4144 53.4002C52.5394 54.2738 51.7049 54.8158 50.537 55.2702C49.6565 55.6134 48.3305 56.0194 45.8916 56.1302C43.2549 56.2514 42.4628 56.2756 35.7826 56.2756C29.1024 56.2756 28.3125 56.2514 25.6765 56.1302ZM25.4694 10.9322C22.8064 11.0534 20.9867 11.4754 19.3976 12.0934C17.7518 12.7316 16.3585 13.5878 14.9663 14.977C13.5741 16.3662 12.7195 17.7608 12.081 19.4056C11.4626 20.9948 11.0403 22.8124 10.9191 25.4738C10.7958 28.1394 10.7676 28.9916 10.7676 35.7808C10.7676 42.57 10.7958 43.4222 10.9191 46.0878C11.0403 48.7494 11.4626 50.5668 12.081 52.156C12.7195 53.7998 13.5743 55.196 14.9663 56.5846C16.3583 57.9732 17.7518 58.8282 19.3976 59.4682C20.9897 60.0862 22.8064 60.5082 25.4694 60.6294C28.138 60.7506 28.9893 60.7808 35.7826 60.7808C42.5759 60.7808 43.4286 60.7526 46.0958 60.6294C48.759 60.5082 50.5774 60.0862 52.1676 59.4682C53.8124 58.8282 55.2066 57.9738 56.5989 56.5846C57.9911 55.1954 58.8438 53.7998 59.4842 52.156C60.1026 50.5668 60.5268 48.7492 60.6461 46.0878C60.7674 43.4202 60.7956 42.57 60.7956 35.7808C60.7956 28.9916 60.7674 28.1394 60.6461 25.4738C60.5248 22.8122 60.1026 20.9938 59.4842 19.4056C58.8438 17.7618 57.9889 16.3684 56.5989 14.977C55.2088 13.5856 53.8124 12.7316 52.1696 12.0934C50.5775 11.4754 48.7588 11.0514 46.0978 10.9322C43.4306 10.811 42.5779 10.7808 35.7846 10.7808C28.9913 10.7808 28.138 10.809 25.4694 10.9322Z" fill="url(#paint0_radial_7092_54471)"/>
                          <path d="M27.4456 35.7808C27.4456 31.1786 31.1776 27.4468 35.7826 27.4468C40.3875 27.4468 44.1216 31.1786 44.1216 35.7808C44.1216 40.383 40.3875 44.1148 35.7826 44.1148C31.1776 44.1148 27.4456 40.383 27.4456 35.7808ZM22.9377 35.7808C22.9377 42.8708 28.6883 48.618 35.7826 48.618C42.8768 48.618 48.6275 42.8708 48.6275 35.7808C48.6275 28.6908 42.8768 22.9436 35.7826 22.9436C28.6883 22.9436 22.9377 28.6908 22.9377 35.7808ZM46.1342 22.4346C46.1339 23.0279 46.3098 23.608 46.6394 24.1015C46.9691 24.595 47.4377 24.9797 47.9861 25.2069C48.5346 25.4342 49.1381 25.4939 49.7204 25.3784C50.3028 25.2628 50.8378 24.9773 51.2577 24.5579C51.6777 24.1385 51.9638 23.6041 52.0799 23.0222C52.1959 22.4403 52.1367 21.8371 51.9097 21.2888C51.6828 20.7406 51.2982 20.2719 50.8047 19.942C50.3112 19.6122 49.7309 19.436 49.1372 19.4358H49.136C48.3402 19.4361 47.5771 19.7522 47.0142 20.3144C46.4514 20.8767 46.1349 21.6392 46.1342 22.4346ZM25.6765 56.1302C23.2377 56.0192 21.9121 55.6132 21.0311 55.2702C19.8632 54.8158 19.0299 54.2746 18.1538 53.4002C17.2777 52.5258 16.7354 51.6938 16.2827 50.5266C15.9393 49.6466 15.533 48.3214 15.4222 45.884C15.3009 43.2488 15.2767 42.4572 15.2767 35.781C15.2767 29.1048 15.3029 28.3154 15.4222 25.678C15.5332 23.2406 15.9425 21.918 16.2827 21.0354C16.7374 19.8682 17.2789 19.0354 18.1538 18.1598C19.0287 17.2842 19.8612 16.7422 21.0311 16.2898C21.9117 15.9466 23.2377 15.5406 25.6765 15.4298C28.3133 15.3086 29.1054 15.2844 35.7826 15.2844C42.4598 15.2844 43.2527 15.3106 45.8916 15.4298C48.3305 15.5408 49.6539 15.9498 50.537 16.2898C51.7049 16.7422 52.5382 17.2854 53.4144 18.1598C54.2905 19.0342 54.8308 19.8682 55.2855 21.0354C55.6289 21.9154 56.0351 23.2406 56.146 25.678C56.2673 28.3154 56.2915 29.1048 56.2915 35.781C56.2915 42.4572 56.2673 43.2466 56.146 45.884C56.0349 48.3214 55.6267 49.6462 55.2855 50.5266C54.8308 51.6938 54.2893 52.5266 53.4144 53.4002C52.5394 54.2738 51.7049 54.8158 50.537 55.2702C49.6565 55.6134 48.3305 56.0194 45.8916 56.1302C43.2549 56.2514 42.4628 56.2756 35.7826 56.2756C29.1024 56.2756 28.3125 56.2514 25.6765 56.1302ZM25.4694 10.9322C22.8064 11.0534 20.9867 11.4754 19.3976 12.0934C17.7518 12.7316 16.3585 13.5878 14.9663 14.977C13.5741 16.3662 12.7195 17.7608 12.081 19.4056C11.4626 20.9948 11.0403 22.8124 10.9191 25.4738C10.7958 28.1394 10.7676 28.9916 10.7676 35.7808C10.7676 42.57 10.7958 43.4222 10.9191 46.0878C11.0403 48.7494 11.4626 50.5668 12.081 52.156C12.7195 53.7998 13.5743 55.196 14.9663 56.5846C16.3583 57.9732 17.7518 58.8282 19.3976 59.4682C20.9897 60.0862 22.8064 60.5082 25.4694 60.6294C28.138 60.7506 28.9893 60.7808 35.7826 60.7808C42.5759 60.7808 43.4286 60.7526 46.0958 60.6294C48.759 60.5082 50.5774 60.0862 52.1676 59.4682C53.8124 58.8282 55.2066 57.9738 56.5989 56.5846C57.9911 55.1954 58.8438 53.7998 59.4842 52.156C60.1026 50.5668 60.5268 48.7492 60.6461 46.0878C60.7674 43.4202 60.7956 42.57 60.7956 35.7808C60.7956 28.9916 60.7674 28.1394 60.6461 25.4738C60.5248 22.8122 60.1026 20.9938 59.4842 19.4056C58.8438 17.7618 57.9889 16.3684 56.5989 14.977C55.2088 13.5856 53.8124 12.7316 52.1696 12.0934C50.5775 11.4754 48.7588 11.0514 46.0978 10.9322C43.4306 10.811 42.5779 10.7808 35.7846 10.7808C28.9913 10.7808 28.138 10.809 25.4694 10.9322Z" fill="url(#paint1_radial_7092_54471)"/>
                          <defs>
                          <radialGradient id="paint0_radial_7092_54471" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(17.4144 61.017) scale(65.31 65.2708)">
                          <stop offset="0.09" stop-color="#FA8F21"/>
                          <stop offset="0.78" stop-color="#D82D7E"/>
                          </radialGradient>
                          <radialGradient id="paint1_radial_7092_54471" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(41.1086 63.257) scale(51.4733 51.4424)">
                          <stop offset="0.64" stop-color="#8C3AAA" stop-opacity="0"/>
                          <stop offset="1" stop-color="#8C3AAA"/>
                          </radialGradient>
                          </defs>
                          </svg>
                          
                        </button>
            </div>
            <!-- Contact Info -->
            <h2 class="mb-4 text-4xl font-extralight">Contact</h2>
            <p>+63 123 4567 8910</p>
            <p>contact@tattooshop.com</p>
        </div>
    </div>
    <div class="border h-[1px] bg-red-700"></div>
   <div class="flex justify-center items-center w-full h-full">
    <h1>Made with sweat and food!</h1>
   </div>
</footer>

{{-- ! END OF FOOTER --}}









<script>

// Hide navbar
let prevScrollPos = window.pageYOffset;
    window.onscroll = function () {
        const navbar = document.getElementById("navbar");
        const currentScrollPos = window.pageYOffset;
        navbar.style.top = prevScrollPos > currentScrollPos ? "0" : "-150px";
        prevScrollPos = currentScrollPos;
    };


    // change background


    document.addEventListener("DOMContentLoaded", () => {
        const navbar = document.getElementById("navbar");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 600) {
                navbar.classList.remove("bg-opacity-30");
                navbar.classList.add("bg-black", "shadow-lg");
            } else {
                navbar.classList.remove("bg-black", "shadow-lg");
                navbar.classList.add("bg-opacity-30");
            }
        });
    });




    var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });

</script>

</body>
</html>