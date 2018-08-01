<?php
use yii\helpers\Url;
?>

<h1><?= $item['title']; ?></h1>
<p><?= $item['content']; ?></p>

<a href="<?= Url::to(['test/news']); ?>" class="btn btn-info"> Back</a>