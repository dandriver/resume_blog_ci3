<!--Header-->
<header class="main-header" style="background-image: url(assets/img/img_bg_header.jpg)">
    <div class="container">
        <div class="row personal-profile">
            <div class="col-md-12">
                <h1 class="personal-profile__name">Поиск_ <?php $query ?></h1>
            </div>
        </div>
    </div>
</header>
<!--Header-->
<main>
<div class="container" id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <?php foreach ($posts as $post) { ?>
            <h2><a style="color:red;"
                   href="<?= base_url() ?>blog/post/<?= $post['post_id'] ?>"><?= $post['post_title']; ?></a></h2>
            <?php if ($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user') { ?>
                <p>
                    <a href="<?= base_url() ?>blog/editpost/<?= $post['post_id'] ?>"><span
                                class="glyphicon glyphicon-edit" title="Edit post"></span></a> |
                    <a href="<?= base_url() ?>blog/deletepost/<?= $post['post_id'] ?>"><span style="color:#f77;"
                                                                                             class="glyphicon glyphicon-remove-circle"
                                                                                             title="Удалить пост"></span></a>
                </p>
            <?php } ?>
            <p><?= substr(strip_tags($post['post']), 0, 200) . '...'; ?></p>
            <p><a href="<?= base_url() ?>blog/post/<?= $post['post_id'] ?>">Подробнее</a></p>
            <?php
        } ?>
    </div>
</div>
</main>