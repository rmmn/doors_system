<section class="section vendor">
    <div class="container vendor_container">
        <div class="content">
            <div class="grid vendor_grid">
                <div class="row left">
                    <h2 class="vendor_title"><?= get_option('vendors_title'); ?></h2>
                    <p class="vendor_description"><?= get_option('vendors_desc'); ?></p>
                    <a href="<?= get_option('vendors_btn_href'); ?>"
                        class="button vendor_consultation"><?= get_option('vendors_btn_title'); ?></a>
                </div>
                <?php
                $post_type = 'post_vendors';
                $psts  = get_posts(array(
                    'post_type' => $post_type,
                    'order' => 'ASC',
                    '' => '',
                ));
                ?>
                <div class="row right">
                    <div class="vendor_list">
                        <?php foreach ($psts as $pst) : setup_postdata($pst); ?>
                        <div class="vendor_item">
                            <div class="logo">
                                <?php if (has_post_thumbnail($pst->ID)) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url($pst->ID); ?>"
                                    alt="<?= $pst->post_title; ?>" draggable="false">
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <p class="city"><?= $pst->post_title; ?></p>
                                <a href="<?= get_post_meta($pst->ID, "link_href", true); ?>"
                                    class="description"><?= get_post_meta($pst->ID, "link_title", true); ?></a>
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