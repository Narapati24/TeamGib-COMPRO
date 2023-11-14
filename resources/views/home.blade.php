@extends('layouts.main')

@section('container')
  <section class="flex items-center justify-center text-white h-screen mx-auto px-4 bg-[url('/img/background/globe.png')] bg-cover bg-center">
    <div class="">
      <h1 class="text-center font-bold text-6xl">
        Jasa  Pembuatan <span class="text-[#A973B0] type-effect"></span><br>
        No . 1 Di Indonesia
        <span class="inline-flex align-middle">
          <img src="/img/icon/mendali.png" class="w-8" alt="mendali">
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