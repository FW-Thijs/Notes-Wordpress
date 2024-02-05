<?php

$post_url = get_permalink();

$taxonomies = get_post_taxonomies();
$post_id = get_the_ID();
?>
<div class="block w-2/3 p-4 mx-auto border-2 rounded-xl bg-blue-50">
    <a href="<?= $post_url ?>">
        <h1 class="text-2xl text-center"><?php the_title() ?></h1>
    </a>
    <div class="flex *:border *:rounded-xl *:bg-blue-100 *:px-1.5 *:py-1 text-sm">
        <?php foreach ($taxonomies as $taxonomy) {
            $terms = get_the_terms($post_id, $taxonomy);
            foreach ($terms ? $terms : [] as $term) {
        ?>
                <a href="<?= get_term_link($term) ?>"><?= $term->name ?></a>
        <?php
            }
        } ?>
    </div>
    <p><?php the_content() ?></p>
</div>