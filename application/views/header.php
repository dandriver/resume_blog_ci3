<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Тестовый блог</title>
    <link rel="stylesheet" href="<?= base_url() ?>public/css/color.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono|Inconsolata" rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
    <script type="text/javascript"> (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter41478434 = new Ya.Metrika({
                        id: 41478434,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true,
                        trackHash: true
                    });
                } catch (e) {
                }
            });
            var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
                n.parentNode.insertBefore(s, n);
            };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks"); </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/41478434" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
</head>
<body>

<!--Main menu-->
<div class="menu">
    <div class="container">
        <div class="row">
            <div class="menu__wrapper d-none d-lg-block col-md-12">
                <nav class="">
                    <ul>
                        <li class="<?= $main_class; ?>"><a href="<?= base_url() ?>index.php/pages/main">Главная</a></li>
                        <li><a href="<?= base_url() ?>index.php/pages/main#resume">Резюме</a></li>
                        <li class="<?= $home_class; ?>"><a href="<?= base_url() ?>index.php/blog/">Блог</a></li>
                        <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
                        <?php if ($this->session->userdata('user_id')) {
                            ?>
                            <li class="<?= $login_class; ?>"><a
                                        href="<?= base_url() ?>index.php/users/logout">(<?= $this->session->userdata['username'] ?>
                                    )Выйти</a></li>
                            <?php
                        } else { ?>
                            <li class="<?= $login_class; ?>"><a href="<?= base_url() ?>index.php/users/login">Войти</a>
                            </li>
                        <?php } ?>

                        <li class="<?= $register_class; ?>"><a href="<?= base_url() ?>index.php/users/register/">Зарегистрироваться</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="menu__wrapper col-md-12 d-lg-none">
                <button type="button" class="menu__mobile-button">
                    <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                </button>
            </div>
        </div>
    </div>
</div>
<!--Main menu-->

<!-- Mobile menu -->
<div class="mobile-menu d-lg-none">
    <div class="container">
        <div class="mobile-menu__close">
            <span><i class="mdi mdi-close" aria-hidden="true"></i></span>
        </div>
        <nav class="mobile-menu__wrapper">
            <ul>
                <li><a href="#hello">Главная</a></li>
                <li><a href="#resume">Резюме</a></li>
                <li><a href="#portfolio">Вывод из базы</a></li>
                <li><a href="#testimonials">Запись в базу</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- Mobile menu -->