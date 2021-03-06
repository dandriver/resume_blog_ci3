<!--Header-->
<header class="main-header" style="background-image: url(assets/img/img_bg_header.jpg)">
    <div class="container">
        <div class="row personal-profile">
            <div class="col-md-12">
                <h1 class="personal-profile__name">Блог_</h1>
            </div>
        </div>
    </div>
</header>
<!--Header-->
<main class="home_blog">
    <div class="container">
        <div id="site_content">
            <?php // include 'sidebar.php' ?>
            <div id="content">
                <?php if ($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user') { ?>
                    <h2><a style="color: green" href="<?= base_url() ?>index.php/blog/new_post/"><span
                                    class="glyphicon glyphicon-pencil"></span> Create a new post</a></h2>
                <?php } ?>
                <!-- insert the page content here -->
                <?php foreach ($posts as $post) { ?>
                    <h2><a style="color:red;"
                           href="<?= base_url() ?>index.php/blog/post/<?= $post['post_id'] ?>"><?= $post['post_title']; ?></a>
                    </h2>
                    <?php if ($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user') { ?>
                        <p>
                            <a href="<?= base_url() ?>index.php/blog/editpost/<?= $post['post_id'] ?>"><span
                                        class="glyphicon glyphicon-edit" title="Edit post"></span></a> |
                            <a href="<?= base_url() ?>index.php/blog/deletepost/<?= $post['post_id'] ?>"><span
                                        style="color:#f77;" class="glyphicon glyphicon-remove-circle"
                                        title="Delete post"></span></a>
                        </p>
                    <?php } ?>
                    <p><?= substr(strip_tags($post['post']), 0, 200) . '...'; ?></p>
                    <p><a href="<?= base_url() ?>index.php/blog/post/<?= $post['post_id'] ?>">Подробнее</a></p>
                    <?php
                } ?>
                <?= $pages ?>
            </div>
        </div>
    </div>
</main>