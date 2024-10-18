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
                    <a href="book?id=<?= $book->id ?>" aria-placeholder="Sobre o livro" class="font-semibold text-emerald-500 hover:text-emerald-700"><?= $book->title ?></a>
                    <div class="text-xs font-light"><?= $book->author ?></div>
                    <div class="text-sm font-bold "> ⭐ ⭐ ⭐ ⭐ ⭐</div>
                </div>
            </div>
            <!-- <div class="flex font-light "><?= $book->description?></div> -->
        </div>
    <?php endforeach; ?>
</section>