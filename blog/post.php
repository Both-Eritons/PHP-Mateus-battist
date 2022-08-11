<?php include_once("templates/header.php"); 

if(isset($_GET['id'])){
	$postid = $_GET['id'];
	$currentpost;

	foreach($posts as $post){
		if($post['id'] == $postid){
			$currentpost = $post;
		}
	}
}

?>
<main id="post-container">
<div class="content-container">
<h1 id="main-title"><?= $currentpost['title']?></h1>
<p id="post-desc"><?= $currentpost['description'] ?></p>
<div class="img-container">
<img src="<?= $BASE_URL?>img/<?= $currentpost['img'] ?>" alt="<?= $currentpost['title'] ?>"/>
</div>
<p class="post-content">ei vou estar em uma casa pra eu 8 jeiek que não tem nada pra ti não é o que eu fiz o de PHP é o que eu fiz o de PHP são os mesmo de vim um pouco mais fácil pra mim nazista não matassem evc u sou um dos mais ativo quando</p>
<p class="post-content">ei vou estar em uma casa pra eu 8 jeiek que não tem nada pra ti não é o que eu fiz o de PHP é o que eu fiz o de PHP são os mesmo de vim um pouco mais fácil pra mim nazista não matassem evc u sou um dos mais ativo quando</p>
</div>
<aside id="nav-container">
<h3 id="tags-title">Tags</h3>
<ul class="tag-list">
<?php foreach($currentpost['tags'] as $tag):?>
<li>
<a href="#" class="tag__link"><?= $tag ?></a>
</li>
<?php endforeach; ?>
</ul>
<h3 id="categories-title">categorias</h3>
<ul id="categories-list">
<?php foreach($categories as $cate):?>
<li>
<a href="#" class="tag__link"><?= $cate ?></a>
</li>
<?php endforeach; ?>

</ul>
</aside>

</main>
<?php include_once("templates/footer.php"); ?>
