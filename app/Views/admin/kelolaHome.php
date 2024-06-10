<?php $this->extend('templateAdmin'); ?>

<?php $this->section('content'); ?>

<div class="w-full flex flex-col gap-4 p-4">
    <div class="flex">
        <a href="/edit_home" class="block px-4 text-center py-2 mb-6 w-19 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">
            Edit
        </a>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert flex items-center p-4 mb-4 text-sm mt-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium"><?= session()->getFlashdata('pesan') ?></span>
            </div>
        </div>
    <?php endif ?>
    <form class="space-y-4" enctype="multipart/form-data">
        <h1 class="text-8 font-bold">Section 1</h1>
        <div class="flex items-center">
            <label for="section1_judul" class="text-right pr-4 font-medium">Judul :</label>
            <input type="text" disabled id="section1_judul" name="section1_judul" class="w-full p-2 border rounded-md" value="<?= $home['section1_judul']; ?>">
        </div>
        <div class="flex items-center">
            <label for="section1_deskripsi" class="text-right pr-4 font-medium">Deskripsi :</label>
            <input type="text" disabled id="section1_deskripsi" name="section1_deskripsi" class="w-full p-2 border rounded-md" value="<?= $home['section1_deskripsi']; ?>">
        </div>
        <div class="flex items-center">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="section1_gambar1">Gambar 1:</label>
            <div>
                <img id="img-preview-1" src="/img/<?= $home['section1_gambar1']; ?>" class="img-preview w-36">
            </div>
        </div>
        <div class="flex items-center">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="section1_gambar2">Gambar 2:</label>
            <div>
                <img id="img-preview-2" src="/img/<?= $home['section1_gambar2']; ?>" class="img-preview w-36">
            </div>
        </div>
        <div class="flex items-center">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="section1_gambar3">Gambar 3:</label>
            <div>
                <img id="img-preview-3" src="/img/<?= $home['section1_gambar3']; ?>" class="img-preview w-36">
            </div>
        </div>
        <div class="flex items-center">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="section1_gambar4">Gambar 4:</label>
            <div>
                <img id="img-preview-4" src="/img/<?= $home['section1_gambar4']; ?>" class="img-preview w-36">
            </div>
        </div>
        <h1 class="text-8 font-bold">Section 2</h1>
        <div class="flex items-center">
            <label for="section2_judul" class="text-right pr-4 font-medium">Judul :</label>
            <input type="text" disabled id="section2_judul" name="section2_judul" class="w-full p-2 border rounded-md" value="<?= $home['section2_judul']; ?>">
        </div>
        <div class="flex items-center">
            <label for="section2_deskripsi" class="text-right pr-4 font-medium">Deskripsi :</label>
            <input type="text" disabled id="section2_deskripsi" name="section2_deskripsi" class="w-full p-2 border rounded-md" value="<?= $home['section2_deskripsi']; ?>">
        </div>
        <div class="flex items-center">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="section2_gambar1">Gambar 1:</label>
            <div>
                <img id="img-preview-5" src="/img/<?= $home['section2_gambar1']; ?>" class="img-preview w-36">
            </div>
        </div>
        <div class="flex items-center">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="section2_gambar2">Gambar 2:</label>
            <div>
                <img id="img-preview-6" src="/img/<?= $home['section2_gambar2']; ?>" class="img-preview w-36">
            </div>
        </div>
        <div class="flex items-center">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="section2_gambar3">Gambar 3:</label>
            <div>
                <img id="img-preview-7" src="/img/<?= $home['section2_gambar3']; ?>" class="img-preview w-36">
            </div>
        </div>
        <div class="flex items-center">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="section2_gambar4">Gambar 4:</label>
            <div>
                <img id="img-preview-8" src="/img/<?= $home['section2_gambar4']; ?>" class="img-preview w-36">
            </div>
        </div>
        <div class="flex items-center">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="section2_gambar5">Gambar 5:</label>
            <div>
                <img id="img-preview-9" src="/img/<?= $home['section2_gambar5']; ?>" class="img-preview w-36">
            </div>
        </div>
        <div class="flex items-center">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="section2_gambar6">Gambar 6:</label>
            <div>
                <img id="img-preview-10" src="/img/<?= $home['section2_gambar6']; ?>" class="img-preview w-36">
            </div>
        </div>
    </form>

    <script>
        function previewImg(inputId, imgId) {
            const input = document.getElementById(inputId);
            const imgPreview = document.getElementById(imgId);
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                imgPreview.src = e.target.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>

</div>

<?php $this->endSection(); ?>