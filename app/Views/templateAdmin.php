<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased font-gowun-batang leading-default bg-[#F6F6F6] text-black">
    <div class="absolute w-full min-h-75"></div>
    <!-- sidenav  -->
    <aside class="fixed bg-carrot-2 inset-y-0 flex-wrap items-center justify-between block w-full p-0 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full border-0 shadow-2xl  max-w-64 ease-nav-brand z-990  xl:left-0 xl:translate-x-0" aria-expanded="false">
        <div class="">
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times  text-slate-400 xl:hidden" sidenav-close></i>
            <a class="flex justify-center items-center px-8 py-6 m-0 text-sm whitespace-nowrap  text-black" href="#">
                <img src="<?= base_url() ?>/img/logo_sabhi.png" class="h-20">
            </a>
        </div>
        <hr class="h-1 mt-0 bg-white" />
        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 font-gowun-batang gap-2 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7  text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap transition-colors hover:bg-white  
                      " href="<?= base_url('kelola_home') ?>">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 text-5 pointer-events-none ease">Kelola Home</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7  text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap transition-colors hover:bg-white  
                      " href="<?= base_url('kelola_about_us') ?>">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 text-5 pointer-events-none ease">Kelola About Us</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap transition-colors hover:bg-white
                    " href="<?= base_url('kelola_blog') ?>">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 text-5 pointer-events-none ease">Kelola Blog</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap transition-colors hover:bg-white
                    " href="<?= base_url('kelola_katalog') ?>">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 text-5 pointer-events-none ease">Kelola Katalog</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap transition-colors hover:bg-white
                    " href="<?= base_url('jenis_katalog') ?>">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 text-5 pointer-events-none ease">Jenis Katalog</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap transition-colors hover:bg-white
                    " href="<?= base_url('deskripsi_katalog') ?>">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 text-5 pointer-events-none ease">Deskripsi Katalog</span>
                    </a>
                </li>

                <li class="absolute bottom-2 mt-0.5 w-full font-gowun-batang bg-carrot-2">
                    <a class="py-2.7  text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap  transition-colors hover:bg-white hover" href="<?= base_url('logout') ?>">
                        <div class="flex h-8 w-8 items-center justify-center bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                        </div>
                        <span class=" flex items-center text-5 font-bold duration-300 opacity-100 pointer-events-none ease">

                            Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- end sidenav -->

    <main class="flex flex-col -z-50 h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <div class="w-full px-7 pl-72 py-6 mx-auto">
            <?php $this->renderSection('content'); ?>
        </div>
    </main>
</body>
<!-- main script file  -->
<script src="<?= base_url() ?>js/main.js"></script>


</html>