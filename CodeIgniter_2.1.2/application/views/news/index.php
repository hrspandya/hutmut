<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div id="main">
       
    </div>
    <p><a href="news/<?php echo $news_item['note'] ?>">View article</a></p>

<?php endforeach ?>