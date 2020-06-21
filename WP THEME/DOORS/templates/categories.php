<section class="section categories">
    <div class="container categories_container">
        <div class="content">
            <div class="section_header">
                <h1 class="title"><?= get_option('categories_title'); ?></h1>
                <p class="description"><?= get_option('categories_desc'); ?></p>
            </div>
            <div class="categories_items">
                <?php
                $post_type = 'post_categories';
                $psts  = get_posts(array(
                    'post_type' => $post_type,
                    'order' => 'ASC',
                    '' => '',
                ));

                $i = 0;
                ?>

                <?php foreach ($psts as $pst) : setup_postdata($pst); ?>

                    <div class="categories_item <?php echo $i > 1 ? "" : "large"; ?>" id="<?= $pst->ID; ?>">
                        <?php if (has_post_thumbnail($pst->ID)) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url($pst->ID); ?>" alt="<?= $pst->post_title; ?>" class="item_photo">
                        <?php else : ?>
                            <img src=" <?= get_template_directory_uri(); ?>/assets/img/category-1.png" alt="<?= $pst->post_title; ?>" class="item_photo">
                        <?php endif; ?>
                        <div class="overlay">
                            <h2 class="item_title"><?= $pst->post_title; ?></h2>
                            <div class="item_content">
                                <p class="description"><?= wp_strip_all_tags($pst->post_content); ?></p>
                                <a href="<?= get_post_meta($pst->ID, "link_href", true); ?>" class="button text item_more"><?= get_post_meta($pst->ID, "link_title", true); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>