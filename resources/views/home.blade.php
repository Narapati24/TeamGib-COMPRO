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
@endsection

@section('script')
<script>
  document.addEventListener("DOMContentLoaded", function () {
    new TypeIt(".type-effect", {
      strings: ["Design Graphic"],
    }).go();
  });
</script>
@endsection