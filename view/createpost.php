<?php
    $path             = "../public/assets/";
    $stylesheet       = $path . "css/styles.css";
    $title            = "Create a Codoc";
    $meta_description = "Create a Codoc";
    ob_start();
?>
<?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
        <?php endif?>
        <div class="div_form">
            <form action="/codoc/post/create" method="POST" class="post_codoc">
                <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'] ?>">
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
                    <textarea name="content" id="content"></textarea>
                </div>
                <div>
                    <a href="<?php echo $router->generate('home') ?>">Retour</a>
                    <button type="submit" name="submit" value="codoc" class="btn">Codoc</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.tiny.cloud/1/17i1uxz28w5ogrsvbx8mwfgn3wv31qq77fgqsinp19cyd3nu/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: '#content',
                plugins: [
                // Core editing features
                'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks',
                ],
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            });
        </script>
<?php
    $content = ob_get_contents();
    ob_end_clean();
require_once './view/base_html.php';
?>