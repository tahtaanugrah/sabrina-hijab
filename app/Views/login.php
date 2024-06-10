<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title; ?></title>

</head>

<body class=" antialiased font-normal leading-default bg-white text-black">
    <div class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-800">
        <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-lg">
            <div class="container mx-auto px-4">
                <?php echo form_open('auth/cek_login', ['class' => 'px-9']); ?>
                <h1 class="text-center text-4xl mb-8">Login Admin</h1>
                <?php
                $errors = session()->getFlashdata('errorslogin');
                if ($errors !== null && is_array($errors)) :
                ?>
                    <div class="alert flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Danger</span>
                        <div>
                            <span class="font-medium">Terdapat beberapa hal yang perlu anda perhatikan:</span>
                            <ul class="mt-1.5 list-disc list-inside">
                                <?php foreach ($errors as $error) : ?>
                                    <li class=""><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('pesanlogin')) : ?>
                    <div class="alert flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Danger</span>
                        <div>
                            <span class="font-medium"><?= session()->getFlashdata('pesanlogin') ?></span>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (session()->has('pesan')) : ?>
                    <div class="alert alert-success flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium"><?= session()->get('pesan') ?></span>
                        </div>
                    </div>
                <?php endif ?>
                <div class="modal-body">
                    <div class="mt-7">
                        <label for="name" class=" text-lg">Name</label>
                        <input type="text" name="username" class="w-full bg-gray-200 dark:bg-gray-700  placeholder-gray-500 dark:placeholder-gray-400 shadow-lg rounded-full p-4 mt-2">
                    </div>
                    <div class="mt-7">
                        <label for="password" class=" text-lg">Password</label>
                        <input type="password" name="password" class="w-full bg-gray-200 dark:bg-gray-700  placeholder-gray-500 dark:placeholder-gray-400 shadow-lg rounded-full p-4 mt-2">
                    </div>
                    <div class="flex flex-col justify-center items-center gap-4 mt-7">
                        <button type="submit" class="rounded-full px-7 py-2  text-lg shadow-lg bg-gray-200 dark:bg-gray-700 text-black">Login</button>
                    </div>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3000);
    </script>
</body>

</html>