@extends('layouts.main')

@section('container')
  <section class="flex items-center justify-center text-white h-screen mx-auto px-4 bg-[url('/img/background/globe.png')] bg-cover bg-center">
    <div class="">
      <h1 class="text-center font-bold text-6xl">
        Jasa  Pembuatan <span class="text-[#A973B0] type-effect"></span><br>
        No . 1 Di Indonesia
        <span class="inline-flex align-middle">
          <img src="/img/icons/mendali.png" class="w-8" alt="mendali">
        </span>
      </h1>
    </div>
  </section>
  <section class="flex items-center justify-center h-screen mx-auto px-4 text-center">
    <div>
      <h2 class="text-5xl font-bold bg-gradient-to-b from-[#9E00FF] to-[#27AAE1] bg-clip-text text-transparent">About Us?</h2>
      <p class="text-xl px-40 mt-6">PT. GIB menyediakan jasa layanan di bidang Multimedia dalam Empat bidang utama, 
        yaitu software development, Design Graphic, Foto & Video Profesional Dan Sinematografi . 
        Selain layanan tersebut, dengan memanfaat kan serta melatih dan menyalurkan 
        keahlian para pemuda Indonesia yang menjadi prioritas utama
        perusahaan kami adalah kepuasan customer.</p>
    </div>
  </section>
  <section class="flex items-center justify-center bg-main-gray mx-auto px-4 text-white py-40">
    <div class="w-[90%]">
      <div class="flex items-center mb-16">
        <div class="bg-main-blue ms-4 p-4 rounded-full">
          <img src="/img/icons/eye.svg" alt="icon eye" class="w-10">
        </div>
        <h3 class="ms-4 text-5xl font-bold bg-gradient-to-b from-[#9E00FF] to-[#27AAE1] bg-clip-text text-transparent">Mengapa Kami?</h3>
      </div>
      <div class="flex flex-wrap items-center justify-center w-full">
        @for ($i = 0; $i < 6; $i++)
            <div class="w-1/3 p-4 px-10">
                <div class="h-[475px] bg-gradient-to-b from-[#36363E] to-[#292930] rounded-lg m-auto border-b border-b-slate-400">
                    <div class="flex justify-center flex-col w-full h-full px-8">
                        <img src="/img/icons/creative.svg" alt="icon creative" class="w-28 mb-8">
                        <h6 class="text-lg font-semibold mb-2">Creative</h6>
                        <p class="font-light">Tim yang berpengalaman dan kreatif siap membantu segala kebutuhan anda.</p>
                    </div>
                </div>
            </div>
        @endfor
      </div>
    </div>
  </section>
  <section class="flex items-center justify-center py-40">
    <div class="w-[90%]">
      <div class="flex items-center mb-16">
        <div class="bg-main-blue ms-4 p-4 rounded-full">
          <img src="/img/icons/gear.svg" alt="icon gear" class="w-10">
        </div>
        <h3 class="ms-4 text-5xl font-bold bg-gradient-to-b from-[#9E00FF] to-[#27AAE1] bg-clip-text text-transparent">Product</h3>
      </div>
      <div class="flex flex-wrap items-center justify-center w-full text-white">
        @for ($i = 0; $i < 3; $i++)
            <div class="w-1/3 p-4 px-10">
                <div class="h-[475px] bg-gradient-to-b from-[#36363E] to-[#292930] rounded-lg m-auto border-b border-b-slate-400">
                    <div class="flex justify-center flex-col w-full h-full px-8">
                        <img src="/img/icons/creative.svg" alt="icon creative" class="w-28 mb-8">
                        <h6 class="text-6xl font-bold">Graphic Design</h6>
                        <button class="flex items-center justify-center mt-8 py-4 px-8 rounded-lg bg-gradient-to-b from-[#9E00FF] to-transparent">
                          <span class="me-4 text-lg">Read More</span>
                          <img src="/img/icons/right-arrow-next.svg" alt="right arrow icon" class="w-4 mt-1">
                        </button>
                    </div>
                </div>
            </div>
        @endfor
      </div>
    </div>
  </section>
@endsection

@section('script')
  <script>
    var names = ['Design Graphic','Software Development','Photo & Video Profesional'];
    
    document.addEventListener("DOMContentLoaded", function () {
      const typeElement = new TypeIt(".type-effect", {
          lifeLike: false,
          loop: true
      });

      // Loop through each name in the array
      names.forEach((name, index) => {
          // Add the name to the typing effect
          typeElement.type(name);

          typeElement.pause(3000).delete(names[index].length);
      });

      // Start the typing animation
      typeElement.go();
  });
  </script>
@endsection