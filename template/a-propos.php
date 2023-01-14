<?php
/*
Template Name: APropos
*/
?>
<?php get_header(); ?>
<div class="loop mt-28 sm:mt-24 bg-[#F3F5FF]">

    <div class="flex items-center justify-center gap-10">
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
        <h1
            class="w-full sm:w-auto text-center text-white bg-[#0D38AA] uppercase text-3xl font-extrabold py-8 sm:text-black sm:bg-transparent sm:normal-case">
            À propos</h1>
        <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
    </div>


    <div class="px-6 xs:px-10 sm:px-20 md:px-32 lg:px-40 text-sm font-medium my-5 text-gray-600">
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
            <p id="breadcrumbs">','</p>');}?>
    </div>

    <div class="px-6 xs:px-10 sm:px-20 md:px-32 lg:px-40">


        <div class=" lg:flex justify-between w-full lg:gap-20 items-center ">

            <div>
                <h2>Notre société</h2>
                <p class=" text-sm font-medium">
                    La société E-Car VTC est une jeune entreprise qui vous propose un service de mobilité en véhicule
                    100% électrique. Contrairement à la plupart des taxis et VTC de PMA (Pays de Montbéliard Agglomération)
                    qui sont équipés de véhicules thermiques ou hybrides, votre chauffeur E-Car VTC roule en KIA EV6.
                </p>
            </div>
            <img class=" mt-5 mb-10 lg:w-1/2 lg:m-0"
                src="<?php echo get_template_directory_uri(); ?>/img/a-propos-5.png" alt="voiture électrique">
        </div>

        <div class=" lg:flex justify-between w-full lg:gap-20 items-center md-10 lg:mt-28">
            <img class=" mt-5 mb-10 lg:w-1/2 lg:m-0 hidden lg:block"
                src="<?php echo get_template_directory_uri(); ?>/img/a-propos-2.png" alt="paysage avec des arbres">

            <div>
                <h2>Nos engagements</h2>
                <p class=" text-sm font-medium">
                    E-Car VTC assure majoritairement la recharge de son véhicule sur une bonne Schneider EV-link. Son
                    fournisseur d'électricité est EDF et son abonnement « vert électrique auto » garantit une fourniture
                    électrique 100% décarbonée.
                    <br />
                    <br />
                    E-Car VTC ne recourt aux superchargeurs que pour les courses supérieures à 250 km. Dans ce cas, un
                    arrêt de 15 à 30mn suffit pour recharger les batteries, un arrêt détente pendant lequel votre chauffeur 
                    se fera un plaisir de vous offrir le café !
                </p>
            </div>
            <img class=" mt-5 mb-10 lg:w-1/2 lg:m-0 lg:hidden"
                src="<?php echo get_template_directory_uri(); ?>/img/a-propos-2.png" alt="paysage avec des arbres">
        </div>

        <div class="flex items-center justify-center gap-10 md-10 lg:mt-28">
            <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
            <h1
                class="hidden sm:block sm:w-auto text-3xl font-extrabold py-8 sm:text-black sm:bg-transparent sm:normal-case">
                Le dirigeant de la société</h1>
            <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
        </div>

        <div class=" lg:flex justify-between w-full lg:gap-20 items-center mt-10">

            <div>
                <h2>Luc Eymann</h2>
                <p class=" text-sm font-medium">
                    Luc Eymann est le créateur et le chauffeur de la société E-Car VTC. Il met à votre disposition ses
                    30 années d'expérience de la conduite automobile, qu'il a passées en tant que metteur au point chez PSA
                    Peugeot Citroën (maintenant Stellantis). Cette activité de mise au point de prototypes l'a emmené sur des
                    routes variées en Europe , Amérique du Nord, Afrique et Scandinavie.
                    <br />
                    <br />
                    Une formation continue tout au long de sa carrière lui a permis de rouler sur les plus grand
                    circuits automobiles (Spa-Franchorchamps, Nurburgring, Dijon-Prenois, …), et sur tous les terrains : asphalte,
                    anneaux de vitesse (Mortefontaine, …), circuits sur terre (Trappes, …) et sur glace (Flaine, Älvsbyn en
                    Suède, Vaalajärvi en Finlande).
                </p>
            </div>
            <img class=" mt-5 mb-10 lg:w-1/2 lg:m-0"
                src="<?php echo get_template_directory_uri(); ?>/img/a-propos-3.png"
                alt="le chauffeur devant la voiture">
        </div>

        <div class="flex items-center justify-center gap-10 md-10 lg:mt-28">
            <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
            <h1
                class="hidden sm:block sm:w-auto text-3xl font-extrabold py-8 sm:text-black sm:bg-transparent sm:normal-case">
                Notre voiture</h1>
            <div class="h-px w-[16vw] bg-black  hidden sm:block"></div>
        </div>

        <div class=" lg:flex justify-between w-full lg:gap-20 items-center mt-10">
            <img class=" mt-5 mb-10 lg:w-1/2 lg:m-0 hidden lg:block"
                src="<?php echo get_template_directory_uri(); ?>/img/a-propos-4.png" alt="voiture kia ev6">
            <div>
                <h2>La KIA EV6 AWD GT-Line</h2>
                <p class=" text-sm font-medium">
                    La KIA EV6 est le fleuron de la gamme KIA, elle dispose d'une batterie de 77,4 kwh, et son
                    efficience énergétique lui permet d'afficher une autonomie de l'ordre de 400 km en été et 300 km en hiver.
                    <br />
                    <br />
                    La Kia EV6 propose un espace à bord exceptionnel grâce à son empattement de près de 3 mètres et à
                    son plancher plat.
                </p>
            </div>
            <img class=" mt-5 mb-10 lg:w-1/2 lg:m-0 lg:hidden"
                src="<?php echo get_template_directory_uri(); ?>/img/a-propos-4.png" alt="voiture kia ev6">
        </div>


        <div class=" lg:flex justify-between w-full lg:gap-20 items-center md-10 lg:mt-28 mb-28">

            <div>
                <h2>Réseau de super chargeurs</h2>
                <p class=" text-sm font-medium mb-10">
                    E-Car VTC utilise indifféremment les réseaux de superchargeurs Fastned, Ionity et Electra.
                    <br />
                    <br />
                    Ces solutions assurent donc un approvisionnement constant en energie pour le véhicule.
                </p>
            </div>
            <img class=" mt-5 mb-10 lg:w-1/2 lg:m-0"
                src="<?php echo get_template_directory_uri(); ?>/img/a-propos-1.png"
                alt="voiture électrique qui se recharge">
        </div>

        <div class="gap-10 hidden lg:flex mb-20">
            <div class="flex flex-col items-center">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/carte1.png"
                    alt="carte réseau Lonity">
                <p class=" text-sm font-medium mt-5">Réseau Lonity</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/carte2.png"
                    alt="carte réseau Fastned">
                <p class=" text-sm font-medium mt-5">Réseau Fastned</p>
            </div>
        </div>
    </div>



</div>
<?php get_footer(); ?>