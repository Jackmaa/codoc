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
            // Refresh the page on switching the mode

            document.getElementById("modeIcon").addEventListener("click", () => {
                location.reload();
            });
            const savedMode = localStorage.getItem("mode");
            tinymce.init({
                selector: '#content',
                skin: (savedMode==='dark-mode' ? 'oxide-dark' : 'oxide'),
                content_css: (savedMode==='dark-mode' ? 'dark' : 'default'),
                menubar: false,
                formats: {
                    //We need to see what classes to use to format article as we wish
                    //and add them here to avoid having inline-styles
                    //so please post articles and play with this part
                    alignleft: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'left' },
                    aligncenter: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'center' },
                    alignright: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'right' },
                    alignjustify: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'full' },
                },
                plugins: [
                // Core editing features
                'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks',
                ],
                toolbar: 'blocks fontfamily fontsize | bold italic underline strikethrough | link image media table codesample| align lineheight | checklist numlist bullist indent outdent | emoticons charmap',
            });
        </script>
<?php
    $content = ob_get_contents();
    ob_end_clean();
require_once './view/base_html.php';
?>