<?php get_header(); ?>
<img class="absolute -z-10 w-full sm:hidden top-28 xs:-top-20"
    src="<?php echo get_template_directory_uri(); ?>/img/visuelMobile.svg">
<img class="hidden sm:block absolute -z-10 right-0 3xl:right-[10vw]"
    src="<?php echo get_template_directory_uri(); ?>/img/visuelDesktop.svg">
<div class="main page mb-36 3xl:mx-[10vw]">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post">
        <div class="sm:grid sm:grid-cols-2 sm:w-full sm:auto-rows-auto mt-28 md:mt-0">
            <img class="md:mt-20 md:w-full lg:hidden xs:w-96 "
                src="<?php echo get_template_directory_uri(); ?>/img/voitureMobile.png" alt="voiture kia ev6">
            <img class=" hidden lg:block mt-16 xl:-mt-20"
                src="<?php echo get_template_directory_uri(); ?>/img/voitureDesktop.png" alt="voiture kia ev6">

            <div class=" col-start-2 xs:mt-6 sm:mt-10 md:mt-40 xs:mx-8 3xl:mx-[10vw]">
                <h1 class="sr-only xs:not-sr-only xs:text-3xl md:text-5xl font-extrabold text-white">
                    <?php the_title(); ?></h1>
                <div class="text-[#F3F5FF] px-6 py-6 text-sm lg:hidden xs:text-base sm:text-lg xs:px-0">
                    À votre disposition pour tous départs ou arrivées dans l'aire urbaine de Bélfort-Montbéliard.
                    Réservez dès maintenant votre course peu importe la distance !
                </div>
                <div class="text-[#F3F5FF] text-lg hidden lg:block mt-8">
                    <div class="mt-3">
                        Réservez dès maintenant votre course privée peu importe la distance !
                    </div>
                    <div class="mt-3">
                        À votre disposition pour tous départs ou arrivées dans l'aire urbaine de Belfort-Montbéliard.
                    </div>
                    <div class="mt-3">
                        Et toute autre destination en Europe, quelle que soit la distance à parcourir.
                    </div>
                </div>
                <div class="px-6 text-white w-full flex flex-row gap-6 xs:px-0 lg:mt-20 lg:pl-5">
                    <a class="px-7 py-4 uppercase text-base font-semibold border border-white w-full flex items-center justify-center"
                        href="<?php echo home_url('/tarifs-et-services'); ?>">Tarifs</a>
                    <a class="px-7 py-4 uppercase text-base font-semibold bg-[#0378D6] border border-[#0378D6] w-full flex items-center justify-center"
                        href="<?php echo home_url('/reserver'); ?>">Réserver</a>
                </div>
            </div>
        </div>


        <div class="px-6 mt-52 xs:px-10 sm:px-16 md:px-32">
            <div class="flex items-center gap-2">
                <div class="w-[40px] h-[40px] bg-gradient-to-r from-[#0378d6] to-[#0d38aa]">
                </div>
                <h2 class="uppercase">Les avantages haut de gamme d'E-Car VTC</h2>
            </div>

            <div class="flex lg:justify-center flex-col lg:flex-row gap-10 lg:mt-20">
                <div class="relative w-full mb-32 mt-10 lg:mt-0">
                    <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/pro-3.png"
                        alt="voiture kia ev6">
                    <div class="absolute w-4/5 p-4 bg-white left-1/2 right-1/2 top-3/4 -translate-x-1/2 shadow-md">
                        <h3 class=" font-bold">VTC écologique</h3>
                        <div class="w-full bg-[#0d38aa] h-0.5 my-2"></div>
                        <p class="text-sm font-medium">
                            Réserver votre VTC électrique afin de vous déplacez dans
                            n'importe quelle ville avec une mobilité écologique.
                        </p>
                    </div>
                </div>
                <div class="relative w-full mb-32 ">
                    <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/pro-1.webp"
                        alt="pot rempli par des pièces">
                    <div class="absolute w-4/5 p-4 bg-white left-1/2 right-1/2 top-3/4 -translate-x-1/2 shadow-md">
                        <h3 class=" font-bold">Tarif concurrenciel d'E-Car VTC</h3>
                        <div class="w-full bg-[#0d38aa] h-0.5 my-2"></div>
                        <p class="text-sm font-medium">
                            Possédant un des <span class="font-bold text-[#0d38aa]">tarifs les plus bas</span> du
                            Grand-Est,
                            Votre <span class="font-bold text-[#0d38aa]">VTC privé</span> est à votre disposition.
                        </p>
                    </div>
                </div>
                <div class="relative w-full mb-32 ">
                    <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/pro-2.webp"
                        alt="intérieur de la kia ev6">
                    <div class="absolute w-4/5 p-4 bg-white left-1/2 right-1/2 top-3/4 -translate-x-1/2 shadow-md">
                        <h3 class=" font-bold">Confort unique</h3>
                        <div class="w-full bg-[#0d38aa] h-0.5 my-2"></div>
                        <p class="text-sm font-medium">
                            Profitez d'un accueil chaleureux au sein de votre véhicule privé et
                            d'un <span class="font-bold text-[#0d38aa]">confort unique</span> avec Netflix, Spotify et
                            le rechargement de vos appareils.
                        </p>
                    </div>
                </div>
            </div>

        </div>


        <div class=" bg-[#0d38aa] w-full mt-40 flex flex-col gap-10 px-6 xs:px-10 sm:px-16 md:px-32">
            <p class="text-[#F3F5FF] px-6 py-6 text-base sm:w-3/5 sm:m-12">
                E-Car VTC vous propose un trajet avec un
                <span class=" lg:font-bold">impact environnemental réduit</span>.
                La conduite sereine et apaisée
                de votre <span class=" lg:font-bold">chauffeur</span>
                vous fera presque oublier qu'E-Car VTC possède un des
                <span class=" lg:font-bold">tarifs les plus bas</span>
                de la région&nbsp;!
            </p>
            <a class="px-4 py-3 uppercase text-base font-semibold bg-white border border-white text-[#0d38aa] flex items-center self-end w-56 mb-10 mr-4 hover:bg-transparent hover:text-white"
                href="<?php echo home_url('/tarifs-et-services'); ?>">Consulter les tarifs</a>
        </div>

        <div class="px-6 mt-20 xs:px-10 sm:px-16 md:px-32">

            <div class="lg:flex justify-between w-full gap-8">
                <div class="lg:w-1/2">
                    <div class="flex items-center gap-2">
                        <div class="w-[40px] h-[40px] bg-gradient-to-r from-[#0378d6] to-[#0d38aa]">
                        </div>
                        <h2 class="uppercase">Services proposés</h2>
                    </div>
                    <p class=" text-sm font-medium lg:mt-10">E-Car VTC assure tous vos déplacements personnels ou
                        professionnels,
                        100%
                        électriques, dans l'aire
                        urbaine du pays de Montbéliard, à destination de :
                    </p>
                </div>
                <div class="lg:w-1/2 lg:mt-10">
                    <div class="flex w-full items-center gap-5 mt-14">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/map-icon.svg">
                        <p class=" text-sm font-medium">Gares de Belfort , Montbéliard</p>
                    </div>
                    <div class=" bg-[#0d38aa] w-full h-0.5 my-6"> </div>
                    <div class="flex w-full items-center gap-5">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/map-icon.svg">
                        <p class=" text-sm font-medium">Aéroports régionaux et internationaux</p>
                    </div>
                    <div class=" bg-[#0d38aa] w-full h-0.5 my-6"> </div>
                    <div class="flex w-full items-center gap-5">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/map-icon.svg">
                        <p class=" text-sm font-medium">Gare TGV Belfort-Montbéliard, Gare TGV de Besançon-Viotte</p>
                    </div>

                    <div class=" w-full flex flex-col mt-8">
                        <a class="px-4 py-3 uppercase text-base font-semibold bg-[#0d38aa] border border-[#0d38aa] text-white flex items-center self-end hover:bg-[#0378D6] hover:border-[#0378D6]"
                            href="<?php echo home_url('/tarifs-et-services'); ?>">Tous les tarifs</a>
                    </div>
                </div>
            </div>

            <div class="flex w-full items-center gap-5 mt-14 lg:w-[25vw] lg:-mt-32 lg:mb-32">
                <img class="hidden lg:block" src="<?php echo get_template_directory_uri(); ?>/img/map-icon.svg">
                <p class=" text-sm font-medium ">Toute autre destination, professionnelle ou privée, quelle que soit la
                    distance à parcourir</p>
                <img class=" lg:hidden" src="<?php echo get_template_directory_uri(); ?>/img/map-icon.svg">
            </div>

            <div class="flex items-center gap-2 mt-24">
                <div class="w-[40px] h-[40px] bg-gradient-to-r from-[#0378d6] to-[#0d38aa]">
                </div>
                <h2 class="uppercase">Véhicule disponible</h2>
            </div>


            <div class="sm:flex sm:gap-5 md:gap-10 2xl:justify-center">
                <div class="sm:w-1/2">
                    <div class="flex items-center gap-6 mt-8 sm:justify-start">
                        <p class="uppercase font-bold text-xl flex-grow min-w-max sm:w-min sm:flex-grow-0">Kia EV6</p>
                        <div class="w-full flex-shrink h-px bg-black sm:w-36">
                        </div>
                    </div>
                    <div>
                        <div class="flex w-full items-center gap-5 mt-8">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/ok-icon.svg">
                            <p class=" text-sm font-medium">Jusqu'à 4 passagers</p>
                        </div>
                        <div class="flex w-full items-center gap-5 mt-6">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/ok-icon.svg">
                            <p class=" text-sm font-medium">Autonomie importante</p>
                        </div>
                        <div class="flex w-full items-center gap-5 mt-6">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/ok-icon.svg">
                            <p class=" text-sm font-medium">Confort à bord</p>
                        </div>
                        <div class="flex w-full items-center gap-5 mt-6">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/ok-icon.svg">
                            <p class=" text-sm font-medium">Capacité de recharge rapide</p>
                        </div>
                    </div>
                </div>
                <div class="sm:w-1/2">
                    <img class=" max-w-[86vw] mt-10 sm:max-w-full sm:max-h-96"
                        src="<?php echo get_template_directory_uri(); ?>/img/kia-frontpage.png" alt="voiture kia ev6">
                    <p class=" text-sm font-medium mt-10">La KIA EV6 est un véhicule aux meilleurs standards de
                        l'électromobilité : architecture électrique avec une technologie 800V, prestations premium et
                        coûts d'exploitation avantageux. L'impact environnemental est sensiblement réduit par rapport à
                        un véhicule thermique.</p>
                </div>
            </div>

            <div class=" w-full flex flex-col mt-5 ">
                <a class="px-4 py-3 uppercase text-base font-semibold bg-[#0d38aa] border border-[#0d38aa] text-white flex items-center self-end sm:self-start sm:-mt-20 lg:-mt-32 sm:px-10 hover:bg-[#0378D6] hover:border-[#0378D6]"
                    href="<?php echo home_url('/reserver'); ?>">Réserver</a>
            </div>

            <div class="font-bold text-black text-2xl text-center mt-32 hidden lg:block">
                <p>Vous souhaitez plus de renseignements ?</p>
                <p>Un problème avec votre réservation ?</p>
                <p>Contactez nous directement !</p>
            </div>

            <div class="my-14 text-center hidden lg:block mb-28">
                <a class="uppercase w-52 text-white p-3 bg-[#0D38AA] hover:bg-[#0378D6] font-semibold text-base"
                    href="<?php echo home_url('/contact'); ?>">
                    Nous contacter
                </a>
            </div>

        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>