<?php include 'views/_header.php'; ?>
  <div id="wrapper">
    <div id="container">
      <div id="title" class="header article-title">
        <a href="/new_article.php">
          <button type="button" class="btn btn-default btn-lg btn-right">Write a diary</button>
        </a>
        <h1><span class="logo-gray">Diary</span></h1>
      </div>
<?php if (isset($error)): ?>
      <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">×</span>
        </button>
        <?php echo $error; ?>
      </div>
<?php endif; ?>
<?php if (!empty($articles)): ?>
<?php foreach ($articles as $article): ?>
      <div class="post-preview">
        <h2 class="post-title"><?php echo h($article["title"]); ?></h2>
        <h3 class="post-subtitle"><?php echo h($article["body"]); ?></h3>
        <p class="post-meta">Posted on <?php echo h($article["created_at"]); ?></p>
      </div>
      <hr>
<?php endforeach; ?>
<?php if (is_numeric($offset)): ?>
      <ul class="pager">
<?php if ($offset > 2): ?>
        <li class="previous"><a href="/article.php?offset=<?php echo $offset - 3 ?>">&larr; Previous Posts</a></li>
<?php endif; ?>
<?php if ($offset < 7): ?>
        <li class="next"><a href="/article.php?offset=<?php echo $offset + 3 ?>">Older Posts &rarr;</a></li>
<?php endif; ?>
      </ul>
<?php endif; ?>
<?php endif; ?>
    </div>
  </div>
</body>
</html>
