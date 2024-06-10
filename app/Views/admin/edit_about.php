<?php $this->extend('templateAdmin'); ?>

<?php $this->section('content'); ?>

<div class="mb-7">
      <h1 class="text-2xl font-bold text-center mb-10">Edit About Us</h1>
</div>
<form action="/about_edit_save" method="post" enctype="multipart/form-data">
      <button type="submit" class="text-white mb-7 bg-[#789ECD] hover:bg-[#6C8BB0] px-8 py-1 rounded-md transition ease-in">Save</button>
      <input type="hidden" name="gambar_lama" value="<?= $about['foto'] ?>">
      <div class="w-full bg-white p-11 flex gap-5 justify-center items-center">
            <div class="w-1/2 h-1/2 rounded-md">
                  <div class="flex items-center justify-center w-full h-full">
                        <div class="relative inline-block w-full h-full">
                              <img src="/img/<?= $about['foto'] ?>" id="photo" class="w-full h-full object-cover rounded-md">
                              <input type="file" name="gambar" id="file" class="hidden" value="<?= $about['foto'] ?>">
                              <label for="file" id="uploadbtn" class="absolute top-0 right-0 p-1 bg-red-500 rounded-md cursor-pointer">
                                    <i class="flex justify-center items-center text-white">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                          </svg>
                                    </i>
                              </label>
                        </div>
                  </div>
            </div>
            <div>
                  <textarea name="judul" id="" autofocus class="w-full px-2 resize-none bg-white text-4xl" cols="30" rows="3"><?= $about['judul'] ?></textarea>
                  <textarea name="isi" id="" class="w-full px-2 resize-none bg-white" cols="30" rows="10"><?= $about['isi'] ?></textarea>
                  <div class="flex w-full gap-2">
                        <div class="w-full flex gap-2">
                              <img src="/img/kiri.png" class="w-11 h-10">
                              <input type="text" name="reseller" class="bg-white px-2 h-10" value="<?= $about['reseller'] ?>">
                        </div>
                        <div class="w-full flex gap-2">
                              <img src="/img/kanan.png" class="w-11 h-10 bg-white">
                              <textarea name="kontak" id="" cols="4" class="w-full px-2 resize-none h-20 bg-white" rows="10"><?= $about['kontak'] ?></textarea>
                        </div>
                  </div>
            </div>
      </div>
</form>

</div>
<script>
    function previewImg() {
        const gambar = document.querySelector('#gambar');
        const gambarLabel = document.querySelector('label[for="gambar"]');
        const imgPreview = document.querySelector('.img-preview');

        gambarLabel.textContent = gambar.files[0].name;

        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);

        fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<script>
    const file = document.querySelector('#file');
    const img = document.querySelector('#photo');

    file.addEventListener('change', function() {
        const chosenFile = this.files[0];
        if (chosenFile) {
            const reader = new FileReader();
            reader.addEventListener('load', function() {
                img.setAttribute('src', this.result);
            });
            reader.readAsDataURL(chosenFile);
        }
    });
</script>
<?php $this->endSection(); ?>