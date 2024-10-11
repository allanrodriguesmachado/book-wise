<?php

$books = [
    [
        "id"=> "1",
        "title"=> "O Mistério da Casa Assombrada",
        "author"=> "Allan",
        "description"=> "Uma intrigante história de suspense e mistério que mantém o leitor à beira da cadeira.",
    ],
    [
        "id"=> "2",
        "title"=> "As Aventuras de um Viajante",
        "author"=> "Mariana",
        "description"=> "Um relato emocionante sobre viagens, descobertas e os encontros inusitados pelo mundo.",
    ],
    [
        "id"=> "3",
        "title"=> "Segredos da Mente",
        "author"=> "Carlos",
        "description"=> "Uma exploração fascinante sobre como a mente humana funciona e seus segredos ocultos.",
    ],
    [
        "id"=> "4",
        "title"=> "Culinária Rápida e Prática",
        "author"=> "Julia",
        "description"=> "Receitas fáceis e rápidas para quem não tem muito tempo, mas não abre mão de uma boa refeição.",
    ],
    [
        "id"=> "5",
        "title"=> "A Arte da Poesia",
        "author"=> "Rafael",
        "description"=> "Uma coleção de poemas que capturam emoções e reflexões sobre a vida.",
    ],
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Book Wise</title>
</head>
<body class="bg-stone-950 text-stone-200">
    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
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

    <main class="mx-auto max-w-screen-lg space-x-7 p-4">

    <h1 class="mt-4 font-bold text-lg">Explorar</h1>

        <form action="" class="flex space-x-2 mt-4">
            <input type="text" name="search" class="border-stone-800 border-2 rounded-md focus:outline-none bg-stone-900 text-sm px-2 py-1 w-full" placeholder="Pesquisar...">
            <button type="submit" class="bg-emerald-600 py-1 px-2 rounded-md text-white hover:bg-emerald-700">Pesquisar</button>
        </form>
        <section class="grid-cols-1 md:grid-cols-2 lg:grid-cols-3 flex grid gap-4 mt-4">
            <?php foreach($books AS $book): ?>
                <div class="p-2 rounded border-stone-800 bg-stone-900">
                <div class="flex ">
                    <div class="w-1/4 mr-4 w-15 h-15 rounded-full"><img src="https://avatar.iran.liara.run/public" alt=""></div>
                    <div>
                        <a href="/about-books.php?" aria-placeholder="Sobre o livro" class="font-semibold text-emerald-500 hover:text-emerald-700"><?= $book['title'] ?></a>
                        <div class="text-xs font-light"><?= $book['author'] ?></div>
                        <div class="text-sm font-bold "> ⭐ ⭐ ⭐ ⭐ ⭐</div>
                    </div>
                </div>
                <div class="flex font-light "><?= $book['description'] ?></div>
            </div>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>

