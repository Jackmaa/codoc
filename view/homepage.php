<?php
$title = "Bienvenue sur Codoc";
$meta_description = "Bienvenue sur la page d'accueil de Codoc";
ob_start();
?>
        <h1>Les derniers articles</h1>
        <?php foreach ($datas as $data): ?>
            <article>
                <h2><?php echo $data->post->getTitle(); ?></h2>
                <p><?php echo $data->username; ?> -<?php echo $data->post->getPublished_date()->format('m/d/Y'); ?></p>
                <p><?php echo $data->post->getDescription(); ?></p>
                <p><?php echo $data->post->getContent(); ?></p>
                <div class="article_footer">
                    <a href="<?php echo $router->generate('readPost', ['id' => $data->post->getId_post()]); ?>" class="btn">Read</a>
                    <div class="likes">
                        <div class="glow-unlike"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="like_button" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M17.5.917a6.4,6.4,0,0,0-5.5,3.3A6.4,6.4,0,0,0,6.5.917,6.8,6.8,0,0,0,0,7.967c0,6.775,10.956,14.6,11.422,14.932l.578.409.578-.409C13.044,22.569,24,14.742,24,7.967A6.8,6.8,0,0,0,17.5.917Z" fill=""/></svg>
                    </div>
                </div>
            </article>


        <?php endforeach; ?>
        <script src="./public/assets/js/main.js"></script>
<?php 
$content = ob_get_contents();
ob_end_clean();
require_once('./view/base_html.php');
?>