<section class="section useful">
    <div class="container useful_container">
        <div class="content">
            <div class="section_header">
                <h1 class="title">Полезное</h1>
                <p class="description">Душа моя озарена неземной радостью,
                    как эти чудесные весенние утра,
                    которыми я наслаждаюсь</p>
            </div>
            <?php
            $post_type = 'post_useful';
            $psts  = get_posts(array(
                'post_type' => $post_type,
                'order' => 'ASC',
                '' => '',
            ));
            ?>
            <div class="useful_items">
                <?php foreach ($psts as $pst) : setup_postdata($pst); ?>
                    <div class="useful_item">
                        <?php if (has_post_thumbnail($pst->ID)) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url($pst->ID); ?>" alt="<?= $pst->post_title; ?>" class="useful_image">
                        <?php endif; ?>
                        <div class="content">
                            <p class="title"><?= $pst->post_title; ?></p>
                            <a href="<?= get_post_meta($pst->ID, "link_href", true); ?>" class="button text"><?= get_post_meta($pst->ID, "link_title", true); ?></a>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
</section>