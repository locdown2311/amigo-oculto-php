<div class="conteudo">
    <?php foreach ($blog as $item): ?>
        <div class="post">
            <h2><?= $item['titulo']; ?></h2>
            <span class="data">postado em: <?= $item['data']; ?> </span>
            <p>
                <?= $item['texto']; ?>
            </p>
            <span class="autor">Postado por: <?= $item['autor']; ?></span> 
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>