<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Book Wise</title>
</head>
<body class="bg-stone-950 text-stone-200">
    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8">
        <div class="font-bold text-xl tracking-wide">Book Wise</div>

            <ul class="flex space-x-4 font-bold">
                <li><a href="/explore" class="text-emerald-600">Explorar</a></li>
                <li><a href="/books" class="hover:underline">Livros</a></li>
            </ul>

            <ul>
                <li><a href="/login" class="hover:underline">Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-x-7">

    <h1 class="mt-4 font-bold text-lg">Explorar</h1>

        <form action="" class="w-full flex space-x-2 mt-4">
            <input type="text" name="search" class="border-stone-800 border-2 rounded-md focus:outline-none bg-stone-900 text-sm px-2 py-1 w-full" placeholder="Pesquisar...">
            <button type="submit" class="bg-emerald-600 py-1 px-2 rounded-md text-white hover:bg-emerald-700">Pesquisar</button>
        </form>
        <div>Lista Final</div>
    </main>


    <footer>

    </footer>
</body>
</html>