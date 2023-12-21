<div class="m-6 lg:px-24">
    <div class="mb-3 rounded-full p-2 mt-2">
        <button data-modal-target="kategoriModal" data-modal-toggle="kategoriModal"
            class="kategori-tambah text-white bg-blue-500 hover:bg-yellow-800 hover:text-black hover:duration-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2"
            type="button">
            Tambah Kategori
        </button>
    </div>
    <!-- Tabel Kategori -->
    <div class="bg-white overflow-hidden shadow-md rounded-lg w-auto">
        <table class="w-full table-fixed" id="table_kategori">
            <thead>
                <tr class="bg-gray-300">
                    <th class="w-1/6 py-4 px-6 text-left text-gray-600 font-bold uppercase">No</th>
                    <th class="w-1/2 py-4 px-6 text-left text-gray-600 font-bold uppercase">Kategori</th>
                    <th class="w-1/2 py-4 px-6 text-left text-gray-600 font-bold uppercase">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>

    <div id="kategoriModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white" id="modal-header">
                        Tambah Kategori
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="kategoriModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" action="kategori/save" method="POST">
                    <div id="modal-content">
                        <!-- dari javascript -->
                    </div>
                    <button type="submit" id="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    //isi tabel body dinamis
    $.ajax({
        url: '/api/kategoris',
        type: 'GET',
        success: function (response) {
            const tbody = response.map((item, index) => `
            <tr>
                <td class="w-1/4 py-4 px-7 text-left">${index + 1}</td>
                <td class="w-1/4 py-4 px-9 text-left">${item.nama_kategori}</td>
                <td>
                    <button type='button' class='focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 kategori-edit' data-modal-target='kategoriModal' data-modal-toggle='kategoriModal' data-bs-id='${item.id}'><i class='bi bi-pencil-square'></i>Edit</button>
                    <button type='button' class='focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 kategori-delete' data-modal-target='kategoriModal' data-modal-toggle='kategoriModal' data-bs-id='${item.id}'><i class='bi bi-trash'></i>Hapus</a>
                </td>
            </tr>
        `).join('');
            $('#table_kategori tbody').append(tbody);
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        $.ajax({
            url: '/api/kategoris',
            type: 'GET',
            success: function (response) {

                $(".kategori-tambah").on("click", function () {
                    $("#modal-header").text("Tambah Kategori");
                    $("#modal-content").html(`
          <input type="hidden" name="id">
          <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="col-span-2">
              <label for="nama_kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                Kategori</label>
              <input type="text" name="nama_kategori" id="nama_kategori"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Nama Kategori" required="">
            </div>
          </div>
        `);
                    $("#submit").html("Simpan");
                    $("form").attr("action", "kategori/save");
                });
                $(".kategori-edit").on("click", function () {
                    const userId = $(this).data('bs-id');
                    const kategori = response.find(item => item.id === userId);
                    $("#modal-header").text("Edit Kategori");
                    $("#modal-content").html(`
            <input type="hidden" name="id" value="${kategori.id}">
            <div class="grid gap-4 mb-4 grid-cols-2">
              <div class="col-span-2">
                <label for="nama_kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                  Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                  placeholder="Nama Kategori" required="" value="${kategori.nama_kategori}">
              </div>
            </div>
          `);
                    $("#submit").html("Update");
                    $("form").attr("action", "kategori/update");
                });

                $(".kategori-delete").on("click", function () {
                    const userId = $(this).data('bs-id');
                    const kategori = response.find(item => item.id === userId);
                    $("#modal-header").text("Hapus Kategori");
                    $("#modal-content").html(`<h3 class='mb-5'>Apakah anda ingin menghapus data ${kategori.nama_kategori} ini ?</h3>`);
                    $("#submit").html("Hapus");
                    $("form").attr("action", `kategori/delete/${kategori.id}`);
                });
            }
        });
    });
</script>