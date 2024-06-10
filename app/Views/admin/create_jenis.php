<?php $this->extend('templateAdmin'); ?>

<?php $this->section('content'); ?>

<h1 class="text-center font-bold mb-20"><?= $title ?></h1>

<?php
$errors = session()->getFlashdata('errors');
if ($errors !== null && is_array($errors)) :
?>
      <div class="alert flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Danger</span>
            <div>
                  <span class="font-medium">Perhatikan errror berikut :</span>
                  <ul class="mt-1.5 list-disc list-inside">
                        <?php foreach ($errors as $error) : ?>
                              <li class=""><?= esc($error) ?></li>
                        <?php endforeach ?>
                  </ul>
            </div>
      </div>
<?php endif; ?>


<form action="/tambah_jenis_save" method="post" class="w-full" enctype="multipart/form-data">

      <label class="custom-file-label hidden mb-2 text-sm font-medium text-gray-900 dark:text-white" for="gambar">Gambar:</label>
      <div class="flex items-center justify-center">
            <div class="w-36">
                  <img src="" class="img-preview object-cover">
            </div>
      </div>
      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="gambar">Gambar:</label>
      <input onchange="previewImg()" class="custom-file-input mb-3 block w-full text-sm text-gray-900 border border-gray-300 rounded-sm cursor-pointer bg-gray-50" id="gambar" name="gambar" type="file">

      <label for="katalog">Katalog:</label>
      <select class="mb-3" id="katalog" name="namakatalog">
            <option value="">Pilih katalog</option>
            <?php foreach ($katalog as $index => $k) : ?>
                  <option value="<?= $k['id_katalog']; ?>" <?= old('namakatalog') === $k['id_katalog'] ? 'selected' : '' ?>><?= $k['namakatalog']; ?></option>
            <?php endforeach ?>
      </select>

      <label for="namajenis" class="block mb-2 text-sm font-medium text-gray-900">Nama Jenis:</label>
      <input type="text" name="namajenis" id="namajenis" value="<?= old('namajenis') ?>" class="bg-gray-50 mb-3 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

      <button type="submit" class="py-2.5 px-5 bg-slate-500 hover:bg-slate-700 font-medium text-xs rounded-1 text-white transition duration-200 ease-in-out">Tambah</button>
</form>

<?php $this->endSection(); ?>