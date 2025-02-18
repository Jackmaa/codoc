<?php
    $path             = "../public/assets/";
    $stylesheet       = $path . "css/styles.css";
    $title            = "Create a Codoc";
    $meta_description = "Create a Codoc";
    ob_start();
?>
    <?php if (isset($error)): ?>
        <p><?php echo $error;?></p>
        <?php endif?>
        <div class="div_form">
            <form action="/codoc/post/create" method="POST" class="post_codoc">
                <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']?>">
                <div>
                    <label for="title">Titre :</label><br>
                    <input type="text" name="title" id="title" required>
                </div><br>
                <div>
                    <label for="description">Description :</label><br>
                    <input type="text" name="description" id="description" required>
                </div>
                <div>
                    <label for="content">Content :</label><br>
                    <textarea name="content" id="content" required></textarea>
                </div>
                <div>
                    <a href="<?php echo $router->generate('home')?>">Retour</a>
                    <button type="submit" name="submit" value="codoc" class="btn">Codoc</button>
                </div>
            </form>
        </div>
    
<?php
$content = ob_get_contents();
ob_end_clean();
require_once './view/base_html.php';
?>