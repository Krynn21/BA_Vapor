<header>
  <nav id="header" class="bg-gray-200 w-full z-30 top-0 py-1">
    <div class="w-full container mx-auto  flex flex-wrap items-center justify-between mt-0 px-6 py-3">

      <label for="menu-toggle" class="cursor-pointer order-2 md:hidden block">
        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
          viewBox="0 0 20 20">
          <title>menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </label>
      <div class="order-1 md:order-2">
        <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="../assets/images/logo/logovapor.png" class="h-16" alt="Flowbite Logo">
        </a>
      </div>

      <input class="hidden" type="checkbox" id="menu-toggle" />

      <div class="hidden md:flex md:items-center md:w-auto w-full order-2 md:order-3" id="menu">
        <nav>
          <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
            <li><a
                class="inline-block no-underline border-b border-black w-full md:border-b-0 text-black hover:text-gray-800  py-3 px-4"
                href="/">Dashboard</a></li>
            <li><a
                class="inline-block no-underline border-b border-black w-full md:border-b-0 text-black hover:text-gray-800  py-3 px-4"
                href="/dashboard/kategoris">Kategori</a></li>
            <li><a
                class="inline-block no-underline border-b border-black w-full md:border-b-0 text-black hover:text-gray-800  py-3 px-4"
                href="/dashboard/produks">Produk</a></li>
            <li><a
                class="inline-block no-underline border-b border-black w-full md:border-b-0 text-black hover:text-gray-800  py-3 px-4"
                href="footer">Kontak</a></li>
          </ul>
        </nav>
        <div class="flex px-3.5 py-3 border-b border-black md:border-b-0 md:px-0">
          <a class="block no-underline text-black hover:text-gray-800" href="#">
            <svg class="fill-current text-black hover:text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24">
              <circle fill="none" cx="12" cy="7" r="3" />
              <path
                d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
            </svg>
          </a>

          <a class="pl-3 block no-underline text-black hover:text-gray-800" href="footer">
            <svg class="fill-current text-black hover:text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24">
              <path
                d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
              <circle cx="10.5" cy="18.5" r="1.5" />
              <circle cx="17.5" cy="18.5" r="1.5" />
            </svg>
          </a>
        </div>
        <div class="flex px-3 py-2 md:px-2 ">
          <a href="/logout" class=""><button
              class="text-white font-bold bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center"
              type="submit">Log out</button></a>
        </div>
      </div>
    </div>
  </nav>
</header>