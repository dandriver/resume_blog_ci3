<!--Header-->
<header class="main-header" style="background-image: url(assets/img/img_bg_header.jpg)">
    <div class="container">
        <div class="row personal-profile">
            <div class="col-md-12">
                <h1 class="personal-profile__name">Файл загружен_</h1>
            </div>
        </div>
    </div>
</header>
<!--Header-->
<main>
    <div class="container" id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <ul>

            <?php foreach($upload_data as $key => $value)
            {?>
            <li> <?=$key?> : <?=$value?></li>
            <?php 
            }?>
        </ul>
        <p><a href="<?=  base_url()?>index.php/upload/">Загрузите другой файл</a></p>
    </div>
</div>