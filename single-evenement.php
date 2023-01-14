<?php get_header(); ?>
<div class="mt-28 sm:mt-24 bg-[#F3F5FF]">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="">
        <div class="flex items-center justify-center gap-10 lg:sr-only">
            <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
            <h1
                class="w-full sm:w-auto text-center text-white bg-[#0D38AA] uppercase text-3xl font-extrabold py-8 sm:text-black sm:bg-transparent sm:normal-case">
                <?php the_title(); ?></h1>
            <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
        </div>
        
        <div  class="px-6 mt-20 xs:px-10 sm:px-16 md:px-32">

        <div class="text-sm font-medium my-5 text-gray-600">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
            <p id="breadcrumbs">','</p>');}?>
        </div>

            <div class="flex gap-2 items-center">
                <div class="w-[40px] h-[40px] bg-gradient-to-r from-[#0378d6] to-[#0d38aa]"></div>
                <h2><?php the_title(); ?></h2>
            </div>
            <p class="font-bold">
                Du
                <?php echo the_field('debut_de_levenement'); ?>
                au
                <?php echo the_field('fin_de_levenement'); ?>
            </p>
            <div class="">
                <?php the_content(); ?>
            </div>
            <div class="max-w-[325px] mb-14"><?php the_post_thumbnail('full'); ?></div>

        </div>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>

<style>
p {
    padding-bottom: 1.5rem;
    font-size: 0.875rem;
}
</style>