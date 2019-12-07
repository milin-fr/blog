<main class="main__container">

<div id="carousel1">
  <?php foreach ($articleList as $articleId=>$article) : ?>
      <article class="card">
        <div class="card-body">
          <h2 class="card-title"><?= $article->title; ?></h2>
          <p class="card-text"><?= $article->content; ?></p>
        </div>
      </article>
  <?php endforeach; ?>
</div>
    
</main>