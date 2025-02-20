<?php
    $path             = "./public/assets/";
    $stylesheet       = $path . "css/styles.css";
    $title            = "Dashboard";
    $meta_description = "Create a Codoc";
    ob_start();
?>

<h1 class="greetings">What's up&nbsp;<?php echo $user->getUsername(); ?></h1>
<div id="dashboard-posts">
<?php if ($user_Posts): ?>
<?php foreach ($user_Posts as $user_Post): ?>
        <article class="dashboard-article">
            <h2><?php echo $user_Post->getTitle(); ?></h2>
            <p><?php echo $user_Post->getPublished_date()->format('m/d/Y'); ?></p>
            <p><?php echo $user_Post->getDescription(); ?></p>
            <div class="clamptext"><?php echo $user_Post->getContent(); ?></div>
            </div>
        </article>
<?php endforeach; ?>
<?php endif; ?>
</div>
<?php
    $content = ob_get_contents();
    ob_end_clean();
require_once './view/base_html.php';
?>