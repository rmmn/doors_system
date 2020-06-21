<section class="section advantages">
    <div class="container advantages_container">
        <div class="content">
            <div class="section_header">
                <h1 class="title"><?= get_option('whyus_title'); ?></h1>
                <p class="description"><?= get_option('whyus_desc'); ?></p>
            </div>
            <div class="grid advantages_grid">
                <div class="row"><img src="<?= get_option('whyus_image'); ?>" alt="<?= get_option('whyus_title'); ?>" class="advantages_image_left">
                </div>
                <?php
                $post_type = 'post_whyus';
                $psts  = get_posts(array(
                    'post_type' => $post_type,
                    'order' => 'ASC',
                    '' => '',
                ));
                ?>
                <div class="row">
                    <div class="adantages_pluses">
                        <?php foreach ($psts as $pst) : setup_postdata($pst); ?>
                            <div class="adantages_plus">
                                <?php if (has_post_thumbnail($pst->ID)) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url($pst->ID); ?>" alt="<?= $pst->post_title; ?>" class="icon" draggable="false">
                                <?php endif; ?>
                                <div class="advantage_content">
                                    <h2 class="title"><?= $pst->post_title; ?></h2>
                                    <p class="description"><?= wp_strip_all_tags($pst->post_content); ?></p>
                                </div>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>