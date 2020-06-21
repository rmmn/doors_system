<section class="section email_subscribtion">
    <div class="container email_subscribtion_container">
        <div class="content">
            <div class="subscribe">
                <h2 class="title"><?= get_option('emailsubs_title'); ?></h2>

                <?php echo do_shortcode(get_option('emailsubs_form_shortcode', '[email-subscribers-form id="1"]')); ?>
            </div>
        </div>
    </div>
</section>