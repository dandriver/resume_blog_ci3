<!--Header-->
<header class="main-header" style="background-image: url(assets/img/img_bg_header.jpg)">
    <div class="container">
        <div class="row personal-profile">
            <div class="col-md-12">
                <h1 class="personal-profile__name">Авторизация_</h1>
            </div>
        </div>
    </div>
</header>
<!--Header-->
<main>
    <div class="container" id="site_content">
        <div id="content">
            <!-- insert the page content here -->
            <form action="<?= base_url() ?>index.php/users/login/" method="post">
                <div class="form_settings">
                    <?php
                    if ($error) {
                        echo '<div style="color:red" >Пользователь не найден. Попробуйте еще раз</div><br>';
                    } ?>
                    <p><span>Имя пользователя:</span></p>
                    <p><input class="" type="text" name="username" value=""/></p>
                    <p><span>Пароль:</span></p>
                    <p><input class="" type="password" name="password" value=""/></p>
                    <p><span>Тип пользователя:</span>
                        <select class="form-control" name="user_type">
                            <option value="admin">Админ</option>
                            <option value="author">Автор</option>
                            <option value="user" selected>Пльзователь</option>
                        </select>
                    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add"
                                                                           value="Войти"/></p>
                </div>
            </form>
        </div>
    </div>
</main>