<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> AnyxTech </title>
  @vite('resources/css/app.css')
  @vite('resources/css/swiper-bundle.min.css')
  @vite('resources/js/swiper-bundle.min.js')
  @vite('resources/js/script.js')
</head>
<body>

  <!-- debut de ma navbar -->
  <nav class="flex items-center w-full py-2 px-16 justify-between max-sm:px-6">
    <a href="{{url('/')}}"><img src="{{asset('images/logo-anyx 1.png')}}" alt="" class="max-sm:w-44 w-56"></a>
    <a href="{{url('/login')}}" class="bg-gradient-to-r from-[#3BBCCEF7] to-[#1D4C9FF7] text-white py-2 px-6 rounded-20 max-sm:px-3 max-sm:text-sm duration-500 hover:bg-gradient-to-r hover:to-[#3BBCCEF7] hover:from-[#1D4C9FF7] ">Se connecter</a>
  </nav>
  <!-- fin de ma navbar -->

  <!-- debut de ma section (le corps de la page) -->
  <section class="bg-[#C5D1D7]  absolute top-28 bottom-0 left-0 right-0  rounded-t-40  ">
    <h1 class="text-center max-sm:text-3xl text-4xl mt-10 font-sans">Nos Offres</h1>

      <!-- la div qui prend en compte tout le swiper -->
  
    <div class=" flex items-center justify-center mt-[92px] body">
    <!-- slide-container -->
    <div class="flex items-center justify-center">
      <!-- slide-content -->
      <div class="slide-content w-[300px] overflow-hidden">
          <div class="card-wrapper  swiper-wrapper ">
            <!-- card -->
            <div class="rounded-3xl swiper-slide">
              <!-- card-image -->
                <div class="flex flex-col items-center py-[18px] px-[14px] bg-[#D9D9D9] rounded-t-25">
                  <p class="">Internet</p>
                </div>
                <div class="bg-white rounded-b-25">
                  <div class="flex flex-col items-center">
                    <div class="flex items-center py-[10px] px-[14px] gap-4">
                      <img src="./images/duree.png" alt="">
                      <strong>Durée :</strong>
                      <p>6 heures</p>
                    </div>
                    <div class="flex items-center py-[10px] px-[14px] gap-4">
                      <img src="./images/prix.png" alt="">
                      <strong>Prix :</strong>
                      <p>300 FCFA</p>
                    </div>
                  </div>
                  <a href="" class="flex items-center py-[10px] px-[14px] bg-[#0047AB] justify-center rounded-b-25 cursor-pointer hover:bg-blue-600 hover:transition-all duration-300 ease-in-out"><span class="text-white">Souscrire</span></a>
                </div>
            </div>
            <div class="rounded-3xl swiper-slide">
              <!-- card-image -->
                <div class="flex flex-col items-center py-[18px] px-[5px] bg-[#D9D9D9] rounded-t-25">
                  <p class="">Internet</p>
                </div>
                <div class="bg-white rounded-b-25">
                  <div class="flex flex-col items-center">
                    <div class="flex items-center py-[10px] px-[5px] gap-4">
                      <img src="./images/duree.png" alt="">
                      <strong>Durée :</strong>
                      <p>6 heures</p>
                    </div>
                    <div class="flex items-center py-[10px] px-[5px] gap-4">
                      <img src="./images/prix.png" alt="">
                      <strong>Prix :</strong>
                      <p>300 FCFA</p>
                    </div>
                  </div>
                  <a href="" class="flex items-center py-[10px] px-[5px] bg-[#0047AB] justify-center rounded-b-25 cursor-pointer hover:bg-blue-600 hover:transition-all duration-300 ease-in-out"><span class="text-white">Souscrire</span></a>
                </div>
            </div>
          </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!-- <div class="swiper-pagination"></div> -->
    </div>
  </div>


  </section>
  <!-- fin de ma section (le corps de la page) -->

  <!-- debut de mon footer -->
  <footer class="bg-[#0047AB] p-10 absolute bottom-0 w-full">
    <p class="font-sans not-italic font-normal max-sm:text-sm text-base text-center text-white">© Copyrights 2023. Tout Droits Réservés.</p>
  </footer>
  <!-- fin de mon footer -->

</body>
</html>