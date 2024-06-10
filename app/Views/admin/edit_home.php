<?php $this->extend('templateAdmin'); ?>

<?php $this->section('content'); ?>

<div class="w-full p-4">
    <form class="space-y-4" action="/edit_home_save" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_home" value="<?= $home['id_home']; ?>">
        <h1 class="text-8 font-bold">Section 1</h1>
        <div class="flex items-center">
            <label for="section1_judul" class="text-right pr-4 font-medium w-40">Judul :</label>
            <input type="text" id="section1_judul" name="section1_judul" class="w-full p-2 border rounded-md" value="<?= $home['section1_judul']; ?>">
        </div>
        <div class="flex items-center">
            <label for="section1_deskripsi" class="text-right pr-4 font-medium w-40">Deskripsi :</label>
            <input type="text" id="section1_deskripsi" name="section1_deskripsi" class="w-full p-2 border rounded-md" value="<?= $home['section1_deskripsi']; ?>">
        </div>
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <div class="flex items-center">
                <label class="block mb-2 text-sm font-medium w-40 text-gray-900" for="section1_gambar<?= $i ?>">Gambar <?= $i ?>:</label>
                <div>
                    <img id="img-preview-<?= $i ?>" src="/img/<?= $home['section1_gambar' . $i]; ?>" class="img-preview w-36">
                </div>
                <input type="hidden" name="section1_gambar<?= $i ?>_old" value="<?= $home['section1_gambar' . $i]; ?>">
                <input accept="image/*" onchange="previewImg('section1_gambar<?= $i ?>', 'img-preview-<?= $i ?>')" class="custom-file-input block w-full text-sm text-gray-900 border border-gray-300 rounded-sm cursor-pointer bg-gray-50" id="section1_gambar<?= $i ?>" name="section1_gambar<?= $i ?>" type="file">
            </div>
        <?php endfor; ?>
        <h1 class="text-8 font-bold">Section 2</h1>
        <div class="flex items-center">
            <label for="section2_judul" class="text-right pr-4 font-medium w-40">Judul :</label>
            <input type="text" id="section2_judul" name="section2_judul" class="w-full p-2 border rounded-md" value="<?= $home['section2_judul']; ?>">
        </div>
        <div class="flex items-center">
            <label for="section2_deskripsi" class="text-right pr-4 font-medium w-40">Deskripsi :</label>
            <input type="text" id="section2_deskripsi" name="section2_deskripsi" class="w-full p-2 border rounded-md" value="<?= $home['section2_deskripsi']; ?>">
        </div>
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div class="flex items-center">
                <label class="block mb-2 text-sm font-medium w-40 text-gray-900" for="section2_gambar<?= $i ?>">Gambar <?= $i ?>:</label>
                <div>
                    <img id="img-preview-<?= $i + 4 ?>" src="/img/<?= $home['section2_gambar' . $i]; ?>" class="img-preview w-36">
                </div>
                <input type="hidden" name="section2_gambar<?= $i ?>_old" value="<?= $home['section2_gambar' . $i]; ?>">
                <input accept="image/*" onchange="previewImg('section2_gambar<?= $i ?>', 'img-preview-<?= $i + 4 ?>')" class="custom-file-input block w-full text-sm text-gray-900 border border-gray-300 rounded-sm cursor-pointer bg-gray-50" id="section2_gambar<?= $i ?>" name="section2_gambar<?= $i ?>" type="file">
            </div>
        <?php endfor; ?>
        <div class="flex justify-start">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">Save</button>
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