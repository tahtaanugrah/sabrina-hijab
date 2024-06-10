<?php $this->extend('templateAdmin'); ?>

<?php $this->section('content'); ?>

<div class="mb-7">
    <h1 class="text-2xl font-bold text-center mb-10">Kelola About Us</h1>
    <a href="/kelola_about_us/edit" class="text-white bg-[#789ECD] hover:bg-[#6C8BB0] px-8 py-1 mb-5 rounded-md transition ease-in ">Edit</a>
</div>
<?php if (session()->has('pesan')) : ?>
    <div class="alert w-full alert-success flex  items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50" role="alert">
        <div>
            <span class="font-medium"><?= session()->get('pesan') ?></span>
        </div>
    </div>
<?php endif ?>
<div class="w-full bg-white p-11 flex gap-5 justify-center items-center">
    <div class="w-1/2 h-1/2 rounded-full">
        <img src="/img/<?= $about['foto'] ?>" class="w-full h-full rounded-md object-cover">
    </div>
    <div>
        <textarea name="judul" disabled id="" class="w-full resize-none bg-white text-4xl" cols="30" rows="3"><?= $about['judul'] ?></textarea>
        <textarea name="isi" disabled id="" class="w-full resize-none bg-white" cols="30" rows="10"><?= $about['isi'] ?></textarea>
        <div class="flex w-full gap-2">
            <div class="w-full flex gap-2">
                <img src="/img/kiri.png" class="w-11 h-10">
                <input type="text" name="reseller" class="bg-white h-10" value="<?= $about['reseller'] ?>" disabled>
            </div>
            <div class="w-full flex gap-2">
                <img src="/img/kanan.png" class="w-11 h-10 bg-white">
                <textarea name="kontak" disabled id="" cols="4" class="w-full resize-none h-20 bg-white" rows="10"><?= $about['kontak'] ?></textarea>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>