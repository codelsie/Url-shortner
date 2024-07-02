<?php
require 'includes/connection.php';
require 'shorten.php';
require 'includes/template/header.php';?>

    <h1 class="text-center text-primary mb-4">Url shortener</h1>

        <div class="card text-center" style="margin: 0 auto 20px auto; max-width: 758px; box-shadow: 0 1px 4px #ccc; border-radius: 6px; padding: 10px 30px 5px; background: #fff; text-align: center;">

    <div class="card-body">
        <h5 class="card-title">Paste the URL to be shortened</h5>
        <p class="card-text">

        <form method="post">
            <div>
                <?php if(isset($link)): ?>

                    <input class='form-control mb-2' type='text' id='url' value="<?php echo $short_url; ?>" required>
                    <button id="copy" type="button" class="btn btn-success">
                        Copy Url
                    </button>

                <?php else: ?>

                    <input class='form-control mb-2' type='text' name='url' id='url' placeholder="Enter your link here" required>
                    <button type='submit' class="btn btn-primary">Shorten URL</button>

                <?php endif;  ?>
                
            </div>
        </form>

        </p>
    </div>
    <div class="car text-secondary">Easily shorten long URLs for quick sharing and    tracking. <br> Enjoy fast and reliable link shortening.</div>
</div>


<?php require 'includes/template/footer.php'?>