<?php

$global_content = get_page_by_path('global-content')->ID;
$group_stories  = ($global_content) ? get_field('group_stories', $global_content) : null;
$subheading     = isset($group_stories['subheading']) ? $group_stories['subheading'] : '';
$heading        = isset($group_stories['heading']) ? $group_stories['heading'] : '';

$args = array(
    'post_type'      => 'stories',
    'posts_per_page' => -1,
    'meta_key'       => 'year',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC'
);

$stories_query = new WP_Query($args); 
?>

<style>
    .monthContainerNos p {
        font-family: Source Sans Pro;
        font-size: 15px;
        font-weight: 400;
        color: var(--jvm-color-text-5);
        line-height: 17px;
    }
    .textContainerNos p {
        font-family: Source Sans Pro;
        font-size: 15px;
        font-weight: 400;
        color: var(--jvm-color-text-5);
        line-height: 17px;
    }

</style>

<div class="containerNuestraHistoria">
    <span class="titleNuestraHistoria"><?php echo $subheading; ?></span>
    <h2 class="titleContainerEquipo"> <?php echo $heading; ?></h2>
</div>
<section class="moduloA2 container">
    <div class="modulo-HU02-3 slide mrgt2-5">
        <?php if ($stories_query->have_posts()) : ?>
            <?php while ($stories_query->have_posts()) : $stories_query->the_post(); 
                $months = get_field('months');
                ?>
                <div class="containerCardSlideNost">
                    <a href="<?php the_permalink(); ?>">
                        <div class="cardComponent">
                            <div class="containerNos">
                                <h1 class="titleContainerNos2"><?php the_title(); ?></h1>
                            </div>
                            <div class="bodyThree">
                                <?php if (!empty($months)) : ?>
                                    <?php foreach ($months as $month) : 
                                        $title = isset($month['month']) ? $month['month'] : '';
                                        $details = isset($month['details']) ? $month['details'] : '';
                                        ?>
                                        <div class="monthContainerNos"><?php echo esc_html($title); ?></div>
                                        <div class="textContainerNos"><?php echo $details; ?></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>No se encontraron historias.</p>
        <?php endif; ?>
    </div>
</section>