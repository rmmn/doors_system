<section class="section email_subscribtion">
    <div class="container email_subscribtion_container">
        <div class="content">
            <div class="subscribe">
                <h2 class="title"><?= get_option('emailsubs_title'); ?></h2>
                <!-- <form class="subscribe_form" action="" method="post">
                    <div class="form_content">
                        <div class="input_form">
                            <input type="email" name="semail" id="semail" placeholder="E-Mail">
                            <button type="submit" class="button"><?= get_option('emailsubs_btn_title'); ?></button>
                        </div>
                        <div class="form_checkbox">
                            <input type="checkbox" name="pdata" id="pdata">
                            <label for="pdata">Согласен (а) на обработку данных</label>
                        </div>
                    </div>
                </form> -->

                <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
            </div>
        </div>
    </div>
</section>