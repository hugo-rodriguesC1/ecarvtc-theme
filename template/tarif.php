<?php
/*
Template Name: Tarif
*/
?>
<?php get_header(); ?>
<div class="main page mt-28 sm:mt-24 bg-[#F3F5FF]">
    <div class="flex items-center justify-center gap-10 lg:sr-only">
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
        <h1 class="w-full sm:w-auto text-center text-white bg-[#0D38AA] uppercase text-3xl font-extrabold py-8 sm:text-black sm:bg-transparent sm:normal-case"><?php the_title(); ?></h1>
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
    </div>

    <img class="hidden lg:block w-full" src="<?php echo get_template_directory_uri(); ?>/img/imgCB.webp" alt="photo d'une carte bancaire">

    <div class="px-6 xs:px-10 sm:px-20 md:px-32 lg:px-40 text-sm font-medium my-5 text-gray-600">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
            <p id="breadcrumbs">','</p>');}?>
        </div>

    <div class="lg:flex lg:items-center lg:justify-center lg:gap-10 lg:mt-10">
        <div class="h-px w-[16vw] bg-black hidden lg:block"></div>
        <h2 class="font-bold text-2xl ml-[25px] sm:ml-20 md:ml-10 lg:w-auto lg:text-black lg:bg-transparent lg:normal-case lg:ml-0">Transferts</h2>
        <div class="h-px w-[16vw] bg-black hidden lg:block"></div>
    </div>

    <div class=" md:mx-10 md:flex md:gap-[5vw] lg:justify-center lg:my-10">
        <?php
            $args = array(
                'post_type' => 'tarif',
                // 'name' => '400-km'
            );
            // LA REQUETE
            $my_query = new WP_Query( $args );
            // La boucle
            if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <div class="w-[325px] border border-[#0378D6] mx-auto mt-5 lg:mx-0 lg:border-0 lg:shadow-md">
                    <div class="text-white font-bold text-xl bg-[#0D38AA] flex py-3 justify-center "><?php the_content(); ?></div>
                    <div class="font-medium flex justify-center py-6 relative after:w-1/2 after:h-px after:bg-[#0378D6] after:absolute after:top-full"><?php echo the_field('tarif_de_jour'); ?> TTC par km en tarif de jour</div>
                    <div class="font-medium flex justify-center py-6"><?php echo the_field('tarif_de_nuit'); ?> TTC par km en tarif de nuit</div>
                </div>
                <?php endwhile;
            endif;
            // 4. On réinitialise à la requête principale (important)
            wp_reset_postdata();
        ?>
    </div>
    <p class="px-6 xs:px-10 sm:px-20 md:px-32 lg:px-40 text-sm font-medium my-5 text-gray-600">* Pour toutes courses pendant un jour férier : 2,30 € / km TTC</p>

    <div class="lg:flex lg:items-center lg:justify-center lg:gap-10 mt-14">
        <div class="h-px w-[16vw] bg-black hidden lg:block"></div>
        <h2 class="font-bold text-2xl ml-[25px] sm:ml-20 md:ml-10 lg:w-auto lg:text-black lg:bg-transparent lg:normal-case lg:ml-0">Pour tous les trajets</h2>
        <div class="h-px w-[16vw] bg-black hidden lg:block"></div>
    </div>

    <div class="w-[325px] flex gap-5 mx-auto mb-5 lg:w-full lg:justify-center lg:gap-[5vw] lg:my-10">
        <div class="border border-[#0378D6] w-full lg:w-[325px] lg:border-0 shadow-md">
            <h4 class="bg-[#0378D6] text-white flex justify-center items-center py-4">
                Prise en charge
            </h4>
            <div class="text-[#0D38AA] text-3xl font-medium flex justify-center items-center h-32 bg-white lg:text-base">
                12 €&nbsp;<span class="hidden lg:block text-black">TTC pour toutes commandes</span>
            </div>
        </div>
        <div class="border border-[#0378D6] w-full lg:w-[325px] lg:border-0 shadow-md">
            <h3 class="bg-[#0378D6] text-white flex justify-center items-center py-4">
                Frais d'attente
            </h3>
            <div class="flex flex-col justify-center items-center h-32 font-medium text-base px-5 bg-white">
                <div><span class="text-[#0D38AA]">Gratuit</span> avant la course</div>
                <div><span class="text-[#0D38AA]">15€</span> / 15min TTC</div>
                <div><span class="text-[#0D38AA]">50€</span> / heure TTC</div>
            </div>
        </div>
    </div>

    <div class="mt-14 text-center">
        <a class="uppercase w-52 text-white p-3 bg-[#0D38AA] hover:bg-[#0378D6] font-semibold text-base" href="<?php echo home_url('/reserver'); ?>">
            Réserver une course
        </a>
    </div>

    <div class="lg:flex lg:items-center lg:justify-center lg:gap-10 lg:my-10 mt-14">
        <div class="h-px w-[16vw] bg-black hidden lg:block"></div>
        <h2 class="font-bold text-2xl ml-[25px] sm:ml-20 md:ml-10 lg:w-auto lg:text-black lg:bg-transparent lg:normal-case lg:ml-0">Mise à disposition</h2>
        <div class="h-px w-[16vw] bg-black hidden lg:block"></div>
    </div>

    <div class="w-[325px] border border-[#0378D6] mx-auto mt-5 lg:my-10 lg:border-0 lg:shadow-md">
        <div class="text-white font-bold text-xl bg-[#0D38AA] flex py-3 justify-center ">Information de tarif</div>
        <div class="font-medium flex justify-center py-5 relative after:w-1/2 after:h-px after:bg-[#0378D6] after:absolute after:top-full"><span class="text-[#0D38AA]">50 €</span> / heure  TTC</div>
        <div class="font-medium flex justify-center py-5 relative after:w-1/2 after:h-px after:bg-[#0378D6] after:absolute after:top-full">Journée complète (8 heures) = <span class="text-[#0D38AA]">350€</span>&nbsp;TTC</div>
        <div class="font-medium flex justify-center py-5">Majoration tarif de nuit <span class="text-[#0D38AA]">+50%</span></div>
    </div>

    <div class="lg:flex lg:items-center lg:justify-center lg:gap-10 lg:mb-10 mt-14">
        <div class="h-px w-[16vw] bg-black hidden lg:block"></div>
        <h2 class="font-bold text-2xl ml-[25px] sm:ml-20 md:ml-10 lg:w-auto lg:text-black lg:bg-transparent lg:normal-case lg:ml-0">Services à bord</h2>
        <div class="h-px w-[16vw] bg-black hidden lg:block"></div>
    </div>

    <div class="w-[100vw] overflow-x-scroll pb-10 lg:w-auto lg:mx-40 lg:overflow-x-visible">
        <div class="flex gap-10 mt-5 pl-10 w-[1000px] items-start lg:grid grid-flow-row-dense lg:grid-cols-[repeat(auto-fit,minmax(200px,1fr))] lg:gap-0 lg:pl-0 lg:w-full">
            <div class="w-52 flex flex-col justify-center items-center font-medium text-base text-center gap-6 lg:w-auto">
                <img class="px-0" src="<?php echo get_template_directory_uri(); ?>/img/netflix.svg" alt="logo netflix"/>
                <div class="font-medium text-base text-center px-10">
                    Service de streaming
                    en illimité sur Netflix
                </div>
            </div>
            <div class="w-52 flex flex-col justify-center items-center font-medium text-base text-center gap-6 lg:w-auto">
                <img class="px-0" src="<?php echo get_template_directory_uri(); ?>/img/spotify.svg" alt="logo spotify"/>
                <div class="font-medium text-base text-center px-10">
                    Musiques de votre choix
                    sur Spotify
                </div>
            </div>
            <div class="w-52 flex flex-col justify-center items-center font-medium text-base text-center gap-6 lg:w-auto">
                <img class="px-0" src="<?php echo get_template_directory_uri(); ?>/img/journal.svg" alt="icone journal"/>
                <div class="font-medium text-base text-center px-10">
                    Médias disponibles 
                    (Le Monde, les Echos)
                </div>
            </div>
            
            <div class="w-52 flex flex-col justify-center items-center font-medium text-base text-center gap-6 lg:w-auto">
                <img class="px-0" src="<?php echo get_template_directory_uri(); ?>/img/accueil.svg" alt="icone deux mains qui se serrent"/>
                <div class="font-medium text-base text-center px-10">
                    Accueil personnalisé                
                </div>
            </div>
            <div class="w-52 flex flex-col justify-center items-center font-medium text-base text-center gap-6 lg:w-auto">
                <img class="px-0" src="<?php echo get_template_directory_uri(); ?>/img/recharge.svg" alt="icone batterie"/>
                <div class="font-medium text-base text-center px-10">
                    Rechargement de vos appareils                
                </div>
            </div>
            <div class="w-52 flex flex-col justify-center items-center font-medium text-base text-center gap-6 lg:w-auto">
                <img class="px-0" src="<?php echo get_template_directory_uri(); ?>/img/eau.svg" alt="icone bouteille d'eau"/>
                <div class="font-medium text-base text-center px-10">
                    Eau distribuée                
                </div>
            </div>
        </div>
    </div>

    <div class="lg:w-[55vw] lg:h-px lg:bg-black lg:mx-auto"></div>

    <div class="font-bold text-black text-2xl text-center mt-32 hidden lg:block">
        <p>Vous souhaitez plus de renseignements ?</p>
        <p>Un problème avec votre réservation ?</p>
        <p>Contactez nous directement !</p>
    </div>

    <div class="my-14 text-center hidden lg:block mb-28">
        <a class="uppercase w-52 text-white p-3 bg-[#0D38AA] hover:bg-[#0378D6] font-semibold text-base" href="<?php echo home_url('/contact'); ?>">
            Nous contacter
        </a>
    </div>


</div>
<?php get_footer(); ?>
