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

  <section class="flex items-center justify-center h-screen mx-auto px-4 text-center bg-main-smoke-white">
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

  <section class="flex items-center justify-center bg-main-smoke-white py-40">
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

  <section class="flex items-center justify-center bg-main-gray mx-auto px-4 py-20">
    <div class="w-[95%] text-center">
      <div class="mb-16">
        <h3 class="ms-4 text-5xl font-bold bg-gradient-to-b from-[#9E00FF] to-[#27AAE1] bg-clip-text text-transparent">Our Team</h3>
      </div>
      <div class="flex flex-wrap items-center justify-center w-full">
        @for ($i = 0; $i < 5; $i++)
            <div class="w-1/5 p-2 flex flex-col items-center text-white">
                <div class="h-[359px] bg-main-smoke-white m-auto border-b border-b-slate-400 overflow-hidden">
                  <img src="/img/our-teams/rafli-chaerul.png" alt="icon creative" class="w-full mb-8">
                </div>
                <div class="mt-[-40px] w-[90%] py-4 bg-gradient-to-b from-[#9E00FF] to-[#292930] rounded-lg">
                  <div class="flex justify-evenly">
                    <img src="/img/icons/instagram.svg" class="w-8" alt="icon instagram">
                    <img src="/img/icons/facebook.svg" class="w-8" alt="icon facebook">
                    <img src="/img/icons/twitter.svg" class="w-8" alt="icon twitter">
                  </div>
                </div>
                <p class="text-3xl">Rafli Chaerul. G</p>
                <p class="text-xl text-[#DDBB74]">Directur</p>
            </div>
        @endfor
      </div>
    </div>
  </section>

  @php
      $ourClients = ['wifiku.png', 'priba.png', 'Tpb.png', 'msn.png'];
  @endphp
  <section class="flex items-center justify-center flex-col bg-main-smoke-white py-40">
    <div class="mb-16">
      <h3 class="font-bold text-5xl bg-gradient-to-b from-[#9E00FF] to-[#27AAE1] bg-clip-text text-transparent">Our Client</h3>
    </div>
    <div class="flex flex-row justify-evenly w-full">
      @foreach ($ourClients as $ourClient)
      <img src="img/our-client/{{ $ourClient }}" alt="{{ $ourClient }}" class="h-24 aspect-auto">
      @endforeach
    </div>
  </section>
  
  <section class="flex items-center flex-col justify-center text-white bg-main-gray py-40">
    <div class="flex justify-evenly w-full">
      <h3 class="font-bold text-5xl bg-gradient-to-b from-[#9E00FF] to-[#27AAE1] bg-clip-text text-transparent">Support</h3>
      <p class="whitespace-break-spaces text-start text-lg">
        Kami percaya, setiap produk berkualitas harus diimbangi dengan layanan. 
        Kami ada untuk melayanimu di manapun berada. 
        Karena kami adalah PT.Generasi Inspirasi Berkarya
      </p>
    </div>
    <div class="flex flex-row justify-evenly items-center w-full">
      <img src="img/assets/supports.png" alt="support" class="w-[30%]">
      <div class="w-[45%] flex flex-col justify-evenly">
        <h4 class="font-bold text-4xl bg-gradient-to-b from-[#9E00FF] to-[#27AAE1] bg-clip-text text-transparent">Telepon</h4>
        <p class="text-start text-lg ps-2">
          Perlu bantuan langsung tanpa ketik? Hubungi kami di nomor 0896-9663-0009 dan sampaikan permasalahan yang kamu hadapi
        </p>
          <hr>
        <h4 class="font-bold text-4xl bg-gradient-to-b from-[#9E00FF] to-[#27AAE1] bg-clip-text text-transparent">Livechat</h4>
        <p class="text-start text-lg ps-2">
          Malas untuk keluar uang hanya untuk telpon? Tenang, kami ada fitur livechat yang selalu siap 24 jam!
        </p>
          <hr>
        <h4 class="font-bold text-4xl bg-gradient-to-b from-[#9E00FF] to-[#27AAE1] bg-clip-text text-transparent">Email</h4>
        <p class="text-start text-lg ps-2">
          Kamu butuh panduan tulis lengkap? Kirim kendala kamu melalui email dan semua akan teratasi
        </p>
          <hr>
        <h4 class="font-bold text-4xl bg-gradient-to-b from-[#9E00FF] to-[#27AAE1] bg-clip-text text-transparent">Whatsapp</h4>
        <p class="text-start text-lg ps-2">
          Kami siap memberikan solusi atas setiap permasalahan dan pertanyaan yang kamu berikan melalui aplikasi WhatsApp
        </p>
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