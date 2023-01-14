<?php
/*
Template Name: Event
*/
?>
<?php get_header(); ?>
<div class="loop mt-28 sm:mt-24 bg-[#F3F5FF]">

    <div class="flex items-center justify-center gap-10">
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
        <h1
            class="w-full sm:w-auto text-center text-white bg-[#0D38AA] uppercase text-3xl font-extrabold py-8 sm:text-black sm:bg-transparent sm:normal-case">
            Évènements</h1>
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
    </div>

    <div class="px-6 xs:px-10 sm:px-20 md:px-32 lg:px-40 text-sm font-medium my-5 text-gray-600">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
            <p id="breadcrumbs">','</p>');}?>
        </div>

    <?php
            $args = array(
                'post_type' => 'evenement',
                // 'name' => '400-km'
            );
            // LA REQUETE
            $my_query = new WP_Query( $args );
            // La boucle
            if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
    <div
        class="sm:grid sm:place-content-center sm:gap-[3vw] md:gap-[5vw] sm:grid-flow-row-dense sm:grid-cols-[repeat(auto-fit,minmax(250px,325px))] sm:mx-6 pb-52">
        <a href="<?php the_permalink(); ?>">
            <div
                class="post mx-auto w-[325px] sm:w-auto flex flex-col items-start justify-center mt-14 bg-[#0378D6] text-white  ">
                <div class="self-center"><?php the_post_thumbnail('full'); ?></div>
                <h3 class="post-title font-bold text-base px-3 pt-3">
                    <?php the_title(); ?>
                </h3>
                <p class="post-info text-base px-3 mb-3">
                    du 
                    <?php echo the_field('debut_de_levenement'); ?>
                    au
                    <?php echo the_field('fin_de_levenement'); ?>
                </p>
                <div class="post-content px-3 pb-3">
                    <?php $content = get_the_content(); echo wp_trim_words( get_the_content(), 7, '...' );?>
                </div>
            </div>
        </a>
    </div>
    <?php endwhile;
            endif;
            // 4. On réinitialise à la requête principale (important)
            wp_reset_postdata();
        ?>



</div>
<?php get_footer(); ?>
