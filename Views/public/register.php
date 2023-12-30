<div class="bg-gradient-to-br from-purple-700 to-pink-500 min-h-screen flex flex-col justify-center items-center">
    <div class="bg-white rounded-lg shadow-lg p-8 w-[90%] lg:w-1/3">
        <img src="assets/images/logo/logovapor.png" alt="" class="w-2/3  mx-auto">
        <a href="/dashboard/users">
            <h1 class="text-4xl text-center text-purple-800 mb-8">Register</h1>
        </a>
        <form action="/registerUser" class="space-y-6" method="POST">
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="username">
                    Username
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="email" name="username" type="text"
                    requared="" required>
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="email" name="email" type="text"
                    requared="" required>
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Password
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="password" name="password"
                    type="password" requared="" required>
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="password2">
                    Konfirmasi Password
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="password2" name="password2"
                    type="password" requared="" required>
            </div>
            <div class="flex justify-around">
                <div class="">
                    <a href="/login"
                        class="text-gray-500 hover:text-blue-500 focus:outline-none focus:underline transition duration-150 ease-in-out">Log
                        in</a>
                </div>

            </div>
            <div>
                <button
                    class="w-full bg-gradient-to-r from-pink-500 to-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-4 rounded-lg"
                    type="submit">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>