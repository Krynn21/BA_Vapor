<div class="flex justify-center md:hidden">
  <div class="container mx-auto py-2">
    <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
      <a href=""><img src="assets/images/produk/liquid1c.jpg" alt="" class="rounded-xl"></a>
      <br>
      <a href=""><img src="assets/images/produk/liquid1c.jpg" alt="" class="rounded-xl"></a>
      <br>
      <a href=""><img src="assets/images/produk/liquid1c.jpg" alt="" class="rounded-xl"></a>
    </div>
  </div>
</div>
<div class="hidden carousel relative container mx-auto py-4 md:flex">
  <div class="carousel-inner relative overflow-hidden w-full rounded-xl shadow-lg">
    <!--Slide 1-->
    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
      checked="checked">
    <div class="carousel-item absolute opacity-0" style="height:50vh;">
      <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right"
        style="background-image:url(assets/images/produk/liquid3.jpg)">

        <div class="container mx-auto">
          <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
            <p class="text-black text-2xl my-4"></p>
            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
              href="#"></a>
          </div>
        </div>

      </div>
    </div>
    <label for="carousel-3"
      class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
    <label for="carousel-2"
      class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

    <!--Slide 2-->
    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
    <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
      <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right"
        style="background-image: url('assets/images/produk/liquid4.jpg');">

        <div class="container mx-auto">
          <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
            <p class="text-black text-2xl my-4"></p>
            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
              href="#"></a>
          </div>
        </div>

      </div>
    </div>
    <label for="carousel-1"
      class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
    <label for="carousel-3"
      class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

    <!--Slide 3-->
    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
    <div class="carousel-item absolute opacity-0" style="height:50vh;">
      <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom"
        style="background-image: url('assets/images/produk/liquid5.jpg');">

        <div class="container mx-auto">
          <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
            <p class="text-black text-2xl my-4"></p>
            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
              href="#"></a>
          </div>
        </div>

      </div>
    </div>
    <label for="carousel-2"
      class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
    <label for="carousel-1"
      class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

    <!-- Add additional indicators for each slide-->
    <ol class="carousel-indicators">
      <li class="inline-block mr-3">
        <label for="carousel-1"
          class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
      </li>
      <li class="inline-block mr-3">
        <label for="carousel-2"
          class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
      </li>
      <li class="inline-block mr-3">
        <label for="carousel-3"
          class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
      </li>
    </ol>

  </div>
</div>

<section class="bg-gradient-to-r from-purple-300 to-pink-300 py-1">
  <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12 justify-center">
    <?php foreach ($kategoris as $index => $kategori) { ?>
      <div class="w-1/2 md:w-1/4 xl:w-1/4 p-6 flex flex-col items-center ">
        <div class="pt-3 flex items-center justify-between">
          <div
            class="<?= $index % 2 != 0 ? 'bg-blue-500' : 'bg-purple-500' ?> rounded-lg shadow-lg w-[147px] lg:w-[247px] py-6 text-center">
            <h1 class="text-3xl font-bold text-white">
              <?= $kategori['nama_kategori'] ?>
            </h1>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

    <nav id="store" class="w-full z-30 top-0 px-6 py-1">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#"
          id="produk">
          Produk Terbaru
        </a>

        <div class="flex items-center" id="store-nav-content">

          <a class="pl-3 inline-block no-underline hover:text-black" href="#">
            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24">
              <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
            </svg>
          </a>

          <a class="pl-3 inline-block no-underline hover:text-black" href="#">
            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24">
              <path
                d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
            </svg>
          </a>

        </div>
      </div>
    </nav>
    <?php foreach ($produkbaru as $produk) { ?>
      <div class=" w-1/2 md:w-1/4 xl:w-1/4 p-6 flex flex-col rounded-lg shadow-xl" data-aos="zoom-in"
        data-aos-duration="500" data-aos-delay="400">
        <a href="/detailproduk/<?= $produk['id'] ?>">
          <img class=" hover:grow hover:shadow-2xl rounded-lg" src="assets/images/produk/<?= $produk['photo'] ?>">
          <div class="pt-3 flex items-center justify-between">
            <p class="">
              <?= $produk['nama_produk'] ?>
            </p>
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24">
              <path
                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
            </svg>
          </div>
          <p class="pt-1 text-gray-900">Rp.
            <?= $produk['harga'] ?>
          </p>
        </a>
      </div>
    <?php } ?>

</section>

<section class="bg-gradient-to-r from-purple-300 to-pink-300 py-8">

  <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

    <nav id="store" class="w-full z-30 top-0 px-6 py-1">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
          Produk terlaris
        </a>

        <div class="flex items-center" id="store-nav-content">

          <a class="pl-3 inline-block no-underline hover:text-black" href="#">
            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24">
              <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
            </svg>
          </a>

          <a class="pl-3 inline-block no-underline hover:text-black" href="#">
            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24">
              <path
                d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
            </svg>
          </a>

        </div>
      </div>
    </nav>

    <?php foreach ($produks as $produk): ?>
      <div class="w-1/2 md:w-1/4 xl:w-1/4 p-6 flex flex-col rounded-lg shadow-xl" data-aos="zoom-in"
        data-aos-duration="500" data-aos-delay="400">
        <a href="/detailproduk/<?= $produk['id'] ?>">
          <img class=" hover:grow hover:shadow-2xl rounded-lg" src="assets/images/produk/<?= $produk['photo'] ?>">
          <div class="pt-3 flex items-center justify-between">
            <p class="">
              <?= $produk['nama_produk'] ?>
            </p>
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24">
              <path
                d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
            </svg>
          </div>
          <p class="pt-1 text-gray-900">Rp.
            <?= $produk['harga'] ?>
          </p>
        </a>
      </div>
    <?php endforeach; ?>

  </div>

</section>