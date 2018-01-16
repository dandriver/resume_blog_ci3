<!--Header-->
<header class="main-header" style="background-image: url(assets/img/img_bg_header.jpg)">
    <div class="container">
        <div class="row personal-profile">
            <div class="col-md-12">
                <h1 class="personal-profile__name">Загрузка файлов_</h1>
            </div>
        </div>
    </div>
</header>
<!--Header-->
<main>
    <div class="container" id="site_content">
        <div id="content">
            <!-- insert the page content here -->
            <?php
            echo $error;
            echo form_open_multipart('upload/upload_file');
            $data_form = array(
                'name' => 'userfile'
            );
            echo form_upload($data_form);
            echo form_submit('', 'Upload');
            echo form_close();
            ?>
        </div>
    </div>
</main>