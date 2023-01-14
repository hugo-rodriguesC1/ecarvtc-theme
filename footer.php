      <footer class="text-white bg-[#0D38AA] p-8 lg:p-20 ">
          <div class=" w-full text-lg font-bold text-white flex gap-[2.66vw]">
              <h3 class="w-[150px] ">Société</h3>
              <h3 class="w-[150px] ">Informations</h3>
              <h3 class="w-[150px] hidden lg:block">Réserver</h3>
          </div>
          <div class="hidden lg:flex w-full text-lg text-white gap-[2.66vw] opacity-50 mt-5">
          <a href="<?php echo home_url('/evenement'); ?>" class="w-[150px] ">Évènements</a>
          <a href="<?php echo home_url('/contact'); ?>" class="w-[150px] ">Contact</a>
          <a href="<?php echo home_url('/tarifs-et-services'); ?>" class="w-[150px] ">Tarifs</a>
          </div>
          <div class="hidden lg:flex w-full text-lg text-white gap-[2.66vw] opacity-50 mt-5">
          <a href="<?php echo home_url('/a-propos'); ?>" class="w-[150px] ">À propos</a>
          <a href="<?php echo home_url('/tarifs-et-services'); ?>" class="w-[150px] ">Services</a>
          <a href="<?php echo home_url('/reserver'); ?>" class="w-[150px] ">Réserver</a>
          </div>
          <nav class="opacity-50 text-lg mt-6 lg:hidden">
              <?php wp_nav_menu ( array ('theme_location' => 'footer-menu' ) ); ?>
          </nav>
          <div class="bg-white opacity-10 w-full h-0.5 my-10"></div>
          <div class="lg:flex items-center justify-between w-full">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/img/logo-white.svg" alt="Logo">
              <div class=" font-medium text-sm mt-10 lg:flex lg:gap-7 lg:mt-0">
                  <div class="flex w-full justify-between xs:justify-center xs:gap-5  lg:w-auto lg:gap-7">
                      <a href="<?php echo home_url('/conditions-generales-de-vente'); ?>">
                          <p>Conditions générales de ventes</p>
                      </a>
                      <a href="<?php echo home_url('/mentions-legales'); ?>">
                          <p>Mentions légales</p>
                      </a>
                  </div>
                  <a href="<?php echo home_url('/politique-de-confidentialite'); ?>">
                      <p class="flex w-full justify-center mt-4 lg:mt-0 lg:w-auto">Politique de confidentialité</p>
                  </a>
              </div>
              <div class=" w-full flex justify-around items-center mt-8 lg:justify-center lg:gap-2 lg:w-auto">
                  <div
                      class="w-16 h-16 border-2 border-[#254cb2] bg-transparent rounded-full flex justify-center items-center lg:w-12 lg:h-12">
                      <a href="https://www.instagram.com/ecar_vtc/?hl=fr"><img class="w-7 h-7 "
                              src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="Logo Instagram"></a>
                  </div>
                  <div
                      class="w-16 h-16 border-2 border-[#254cb2] bg-transparent rounded-full flex justify-center items-center lg:w-12 lg:h-12">
                      <a href="https://www.facebook.com/E.Car.VTC"><img class="w-7 h-7"
                              src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="Logo facebook"></a>
                  </div>
                  <div
                      class="w-16 h-16 border-2 border-[#254cb2] bg-transparent rounded-full flex justify-center items-center lg:w-12 lg:h-12">
                      <a href=""><img class="w-7 h-7" src="<?php echo get_template_directory_uri(); ?>/img/leboncoin.svg"
                              alt="Logo leboncoin"></a>
                  </div>
                  <div
                      class="w-16 h-16 border-2 border-[#254cb2] bg-transparent rounded-full flex justify-center items-center lg:w-12 lg:h-12">
                      <a href="https://www.linkedin.com/company/e-car-vtc/"><img class="w-7 h-7"
                              src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" alt="Logo linkedin"></a>
                  </div>
              </div>
          </div>
      </footer>
      </div>
      <?php wp_footer(); ?>
      </body>

      </html>