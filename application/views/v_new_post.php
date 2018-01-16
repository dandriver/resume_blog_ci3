<!--Header-->
<header class="main-header" style="background-image: url(assets/img/img_bg_header.jpg)">
    <div class="container">
        <div class="row personal-profile">
            <div class="col-md-12">
                <h1 class="personal-profile__name">Добавить пост_</h1>
            </div>
        </div>
    </div>
</header>
<!--Header-->
<main>
    <div class="container" id="site_content">
        <div id="content">
            <!-- insert the page content here -->
            <form action="<?= base_url() ?>index.php/blog/new_post/" method="post">
                <div class="form_settings">
                    <p><span>Title</span><input class="" type="text" name="post_title" value=""/></p>
                    <p><span>Description</span><textarea class="textarea" rows="15" cols="50" name="post"></textarea>
                    </p>
                    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add"
                                                                           value="Опубликовать"/></p>
                </div>
            </form>
        </div>
    </div>
</main>