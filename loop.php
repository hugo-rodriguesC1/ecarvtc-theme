<div class="loop mt-28 sm:mt-24 bg-[#F3F5FF]">
    <?php if (have_posts()) : ?>
    <div class="flex items-center justify-center gap-10">
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
        <h1 class="w-full sm:w-auto text-center text-white bg-[#0D38AA] uppercase text-3xl font-extrabold py-8 sm:text-black sm:bg-transparent sm:normal-case">Évènements</h1>
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
    </div>

    <div class="sm:grid sm:place-content-center sm:gap-[3vw] md:gap-[5vw] sm:grid-flow-row-dense sm:grid-cols-[repeat(auto-fit,minmax(250px,325px))] sm:mx-6 pb-52">
        <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <div class="post mx-auto w-[325px] sm:w-auto flex flex-col items-start justify-center mt-14 bg-[#0378D6] text-white  ">
                <div class="self-center"><?php the_post_thumbnail('full'); ?></div>
                <h3 class="post-title font-bold text-base px-3 pt-3">
                    <?php the_title(); ?>
                </h3>
                <p class="post-info text-base px-3">
                    <?php the_date(); ?>
                </p>
                <div class="post-content px-3 pb-3">
                    <?php $content = get_the_content(); echo wp_trim_words( get_the_content(), 7, '...' );?>
                </div>
            </div>
        </a>
        <?php endwhile; ?>
        <?php else : ?>
        <div class="px-6 mt-20 xs:px-10 sm:px-16 md:px-32 text-3xl pb-20">
            <p class="">
            La page que vous recherchez n'existe pas
            </p>
            <a class="underline text-[#0378D6] hover:text-[#0d38aa]"
                    href="<?php echo home_url('/'); ?>">Accueil</a>
        </div>
        <?php endif; ?>
    </div>
</div> 
