<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<div class="loop mt-28 sm:mt-24 bg-[#F3F5FF]">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="flex items-center justify-center gap-10">
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
        <h1
            class="w-full sm:w-auto text-center text-white bg-[#0D38AA] uppercase text-3xl font-extrabold py-8 sm:text-black sm:bg-transparent sm:normal-case">
            Contact</h1>
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
    </div>


    <div class="px-6 xs:px-10 sm:px-20 md:px-32 lg:px-40 text-sm font-medium my-5 text-gray-600">
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
            <p id="breadcrumbs">','</p>');}?>
    </div>

    <div class="px-6 xs:px-10 sm:px-20 md:px-32 lg:px-40 flex flex-col items-start">


        <div class="justify-center w-full mb-10">
            <h2>Nous contacter</h2>
            <p class=" text-sm font-medium">
                Complétez ce formulaire et soumettez nous votre message
            </p>
        </div>
        <?php the_content(); ?>
    </div>


    <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php get_footer(); ?>