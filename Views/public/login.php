<div class="bg-gradient-to-br from-purple-700 to-pink-500 min-h-screen flex flex-col justify-center items-center">
    <div class="bg-white rounded-lg shadow-lg p-8 w-[80%] lg:w-1/4">
        <a href="/"><img src="assets/images/logo/logovapor.png" alt="" class="w-2/1 mx-auto"></a>
        <a href="#">
            <h1 class="text-4xl text-center text-purple-900 mb-8">Login</h1>
        </a>
        <form class="space-y-6" action="/verifylogin" method="POST">
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="username">
                    Username
                </label>
                <input id="username" name="username" type="text"
                    class=" w-full px-4 py-2 rounded-lg border border-gray-400">
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Password
                </label>
                <input id="password" name="password" type="password"
                    class="w-full px-4 py-2 rounded-lg border border-gray-400">
            </div>
            <div class="flex justify-around">
                <div class="">
                    <a href="/register"
                        class="text-gray-500 hover:text-blue-500 focus:outline-none focus:underline transition duration-150 ease-in-out">Buat
                        Akun</a>
                </div>
                <div class="">
                    <a href="#"
                        class="text-gray-500 hover:text-blue-500 focus:outline-none focus:underline transition duration-150 ease-in-out">Lupa
                        password ?</a>
                </div>
            </div>
            <div>
                <button
                    class="w-full bg-gradient-to-r from-pink-500 to-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-4 rounded-lg"
                    type="submit">
                    Log In
                </button>
            </div>
        </form>
    </div>
</div>