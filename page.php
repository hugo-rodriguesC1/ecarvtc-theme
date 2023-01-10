<?php get_header(); ?>
<div class="main page mt-28">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="">
<div class="flex items-center justify-center gap-10">
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
        <h1 class="w-full sm:w-auto text-center text-white bg-[#0D38AA] uppercase text-3xl font-extrabold py-8 sm:text-black sm:bg-transparent sm:normal-case"><?php the_title(); ?></h1>
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
    </div>    
    <div class="px-6 text-sm font-medium">
    <?php the_content(); ?>
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