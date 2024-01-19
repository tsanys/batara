<div id="createNewsModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah Berita
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="createNewsModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                        <!-- Modal description -->
                        <div class="sm:col-span-2">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Judul Berita
                            </label>
                            <input type="text" name="title" id="title" onkeyup="updateSlug(this, 'slug', 1000)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Masukkan Judul" required="true" autocomplete="off">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Slug
                            </label>
                            <input type="text" name="slug" id="slug"
                                class="bg-gray-50 cursor-not-allowed dark:placeholder-slate-700 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-gray-400 dark:text-gray-700 text-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Slug" readonly disabled>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Konten
                            </label>
                            <textarea id="content" rows="8" name="content"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Masukkan Konten"></textarea>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Gambar
                            </label>
                            <input name="image" accept="image/jpg, image/jpeg, image/png"
                                onchange="showImage(this,'imageElement')"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="image_help" id="image" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_help">
                                PNG, JPG atau JPEG
                            </p>
                            <img id="imageElement" src="https://i.ibb.co/2czfDhs/no-image.webp"
                                class="w-full max-h-[180px] object-contain rounded-lg bg-gray-300 dark:bg-gray-800 mt-4"
                                alt="Document">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="is_published"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Publish Berita
                            </label>

                            <label class="relative inline-flex items-center cursor-pointer">
                                <input name="is_published" type="checkbox" value="1" class="sr-only peer" checked>
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 dark:bg-gray-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                                </div>
                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Publish
                                </span>
                            </label>

                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Submit
                    </button>
                    <button data-modal-hide="createNewsModal" type="button"
                        class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="updateNewsModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Update Berita <span id="headline"></span>
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="updateNewsModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form id="formUpdate" action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                        <!-- Modal description -->
                        <div class="sm:col-span-2">
                            <label for="titleUpdate"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Judul Berita
                            </label>
                            <input type="text" name="title" id="titleUpdate"
                                onkeyup="updateSlug(this, 'slugUpdate', 1000)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Masukkan Judul" required="true" autocomplete="off">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="slugUpdate"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Slug
                            </label>
                            <input type="text" name="slug" id="slugUpdate"
                                class="bg-gray-50 cursor-not-allowed dark:placeholder-slate-700 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-gray-400 dark:text-gray-700 text-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Slug" readonly disabled>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="contentUpdate"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Konten
                            </label>
                            <textarea id="contentUpdate" rows="8" name="content"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Masukkan Konten"></textarea>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="imageUpdate"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Gambar
                            </label>
                            <input name="image" accept="image/jpg, image/jpeg, image/png"
                                onchange="showImage(this,'imageElementUpdate')"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="image_help" id="imageUpdate" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_help">
                                PNG, JPG atau JPEG
                            </p>
                            <img id="imageElementUpdate" src="https://i.ibb.co/2czfDhs/no-image.webp"
                                class="w-full max-h-[180px] object-contain rounded-lg bg-gray-300 dark:bg-gray-800 mt-4"
                                alt="Document">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="is_published_update"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Publish Berita
                            </label>

                            <label class="relative inline-flex items-center cursor-pointer">
                                <input id="isPublishedUpdate" name="is_published" type="checkbox" value="1"
                                    class="sr-only peer" checked>
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 dark:bg-gray-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                                </div>
                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Publish
                                </span>
                            </label>

                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Submit
                    </button>
                    <button data-modal-hide="updateNewsModal" type="button"
                        class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => {
            console.error(error);
        });

    const editor = ClassicEditor.create(document.querySelector(
            '#contentUpdate'))
        .catch(error => {
            console.error(error);
        });

    function generateSlug(str) {
        return str = str.toLowerCase().replace(/[^\w\s-]/g, '').replace(/\s+/g, '-');

    }

    function updateSlug(inputElement, slugId, delay) {
        let timer;
        const slugElement = document.getElementById(slugId);

        clearTimeout(timer);
        timer = setTimeout(() => {
            const slugValue = generateSlug(inputElement.value);

            slugElement.value = slugValue;

        }, delay);
    }

    function showImage(inputElement, imageElementId) {
        const fileInput = inputElement;
        const imageElement = document.getElementById(imageElementId);

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imageElement.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const headline = document.getElementById('headline');
        const titleUpdate = document.getElementById('titleUpdate');
        const slugUpdate = document.getElementById('slugUpdate');
        const contentUpdate = document.getElementById('contentUpdate');
        const imageElementUpdate = document.getElementById('imageElementUpdate');
        const isPublishedUpdate = document.getElementById('isPublishedUpdate');
        const formUpdate = document.getElementById('formUpdate');

        document.querySelectorAll('.edit-button').forEach(function(button) {
            button.addEventListener('click', function() {
                const slug = this.getAttribute('value');
                let endpoint = '{{ route('news.get', ':slug') }}'
                let updateEndpoint = '{{ route('news.update', ':slug') }}'

                endpoint = endpoint.replace(':slug', slug)
                updateEndpoint = updateEndpoint.replace(':slug', slug)

                formUpdate.action = updateEndpoint

                headline.innerText = 'Please wait...'
                titleUpdate.value = 'Please wait...'
                slugUpdate.value = 'Please wait...'
                editor.then(editorInstance => {
                    editorInstance.setData('Please wait...');
                });

                fetch(endpoint)
                    .then(response => {
                        if (response.status === 403) {
                            window.location.href = '/login';
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log(data);
                        headline.innerText = data.news.title
                        titleUpdate.value = data.news.title
                        slugUpdate.value = generateSlug(data.news.slug)
                        contentUpdate.insertAdjacentHTML('afterbegin', data.news.content)
                        imageElementUpdate.src = data.news.image ? data.news.image :
                            'https://i.ibb.co/2czfDhs/no-image.webp'
                        isPublishedUpdate.checked = data.news.is_published ? true :
                            false

                        editor.then(editorInstance => {
                            editorInstance.setData(data.news.content);
                        });
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    });
</script>
