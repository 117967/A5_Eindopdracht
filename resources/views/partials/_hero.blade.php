<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
  <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"></div>

  <div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-white">
      Jan & Peters
    </h1>
    <p class="text-2xl text-gray-200 font-bold my-4">
     your favorite band website
    </p>
    <div>
      @auth
      @else
      <a href="/register"
        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign
        Up to insert your Babd</a>
      @endauth
    </div>
  </div>
</section>
