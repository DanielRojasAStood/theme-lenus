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

<section class="sectionHistory">
    <div class="sectionHistory__container">
        <div class="sectionHistory__title">
            <p class="subheading"><?php echo $subheading; ?></p>
            <h2 class="heading--48 line line--blue line--center"> <?php echo $heading; ?></h2>
        </div>
    </div>
    <div class="sectionHistory__container">
        <div class="slickSliderHistory">
            <?php if ($stories_query->have_posts()) : ?>
                <?php while ($stories_query->have_posts()) : $stories_query->the_post(); 
                    $months = get_field('months');
                    ?>
                    <a href="<?php the_permalink(); ?>" class="slickSliderHistory__card">
                        <h2 class="heading--64"><?php the_title(); ?></h2>
                        <div class="slickSliderHistory__info">
                            <?php if (!empty($months)) : ?>
                                <?php foreach ($months as $month) : 
                                    $title = isset($month['month']) ? $month['month'] : '';
                                    $details = isset($month['details']) ? $month['details'] : '';
                                    ?>
                                    <div class="subheading"><?php echo esc_html($title); ?></div>
                                    <div class="heading--18"><?php echo $details; ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>No se encontraron historias.</p>
            <?php endif; ?>
        </div>
        <div class="slider-pagination">
            <div class="seccionSliderClass__counter"></div>
            <div class="slick-dots"></div>
        </div>
    </div>
</section>