                        <?php if ( in_category( 406 ) ) { ?>

                            <div class="entryList">
                                <div class="game-menu-page-title">Информация по GTA Online</div>
                                <div class="sidebar-gta-online"></div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Страница GTA Online',
								                                                      'theme_location' => 'Страница GTA Online',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) ); ?>
                                </nav>
                            </div>
                            <?php

                            $check_menu = get_post_meta($post->ID, 'menu_check', 1);

                            if (!isset($check_menu) || $check_menu == '') { }
                            else if ((isset($check_menu)) and ($check_menu != '')) {
                                echo '<div class="dop_menu" id="menu">'.(wp_nav_menu($check_menu)).'</div>';
                            }

                            ?>
                            <?php } elseif ( in_category ( 978 ) ) { ?>
					  <div class="entryList">
                                <div class="game-menu-page-title">Информация по L.A. Noire</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Информация по L.A. Noire',
								                                                     
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) );  ?>
						</nav></div>
						<?php } elseif ( in_category ( 966 ) ) { ?>
					  <div class="entryList">
                                <div class="game-menu-page-title">Информация по Bully</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Информация по Bully',
								                                                     
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) );  ?>
						</nav></div>
						
						<?php } elseif ( in_category ( 1017 ) ) { ?>
					  <div class="entryList">
                                <div class="game-menu-page-title">Страница GTA Vice City</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Страница GTA Vice City',
								                                                     
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) );  ?>
						</nav></div>
						
						<?php } elseif ( in_category ( 1081 ) ) { ?>
					  <div class="entryList">
                                <div class="game-menu-page-title">Информация по Manhunt 2</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Информация по Manhunt 2',
								                                                     
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) );  ?>
						</nav></div>
						
						<?php } elseif ( in_category (105) ) { ?>
						<div class="entryList">
                                <div class="game-menu-page-title">GTA San Andreas</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Страница GTA: San Andreas',
								                                                      'theme_location' => 'Страница GTA: San Andreas',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) ); ?>
						</nav></div>
                            
						<?php } elseif ( in_category( 2 ) ) { ?>

                            <div class="entryList">
                                <div class="game-menu-page-title">Информация по GTA 5</div>
                                <div class="sidebar-gta-5"></div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Страница GTA 5',
								                                                      'theme_location' => 'Страница GTA 5',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) ); ?>
                                </nav>
                            </div>
						<?php } elseif ( in_category( 1027 ) ) { ?>
						<div class="entryList">
                                <div class="game-menu-page-title">Информация по RDR 2 Online</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Страница Red Dead Redemption 2',
								                                                      'theme_location' => 'Страница Red Dead Redemption 2',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) ); ?>
						</nav></div>
						
						<?php } elseif ( in_category( 203 ) ) { ?>
						<div class="entryList">
                                <div class="game-menu-page-title">GTA 6</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Страница GTA 6',
								                                                      'theme_location' => 'Страница GTA 6',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) ); ?>
						</nav></div>
						<?php } elseif ( in_category( 173 ) ) { ?>
						<div class="entryList">
                                <div class="game-menu-page-title">Информация по Max Payne 3</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Информация по Max Payne 3',
								                                                      'theme_location' => 'Информация по Max Payne 3',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) ); ?>
						</nav></div>
						<?php } elseif ( in_category( 256 ) or ( 1088 ) ) { ?>
						<div class="entryList">
                                <div class="game-menu-page-title">Red Dead Redemption 2</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Страница Red Dead Redemption 2',
								                                                      'theme_location' => 'Страница Red Dead Redemption 2',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) ); ?>
						</nav></div>
						<?php } elseif ( in_category( 99 ) ) { ?>
						<div class="entryList">
                                <div class="game-menu-page-title">Red Dead Redemption</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Страница Red Dead Redemption 2',
								                                                      'theme_location' => 'Страница Red Dead Redemption 2',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) ); ?>
						</nav></div>
						<?php } elseif ( in_category ( 42 ) ) { ?>
						<div class="entryList">
                                <div class="game-menu-page-title">GTA V</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Страница GTA 5',
								                                                      'theme_location' => 'Страница GTA 5',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) ); ?>
						</nav></div>
						<?php } elseif ( in_category ( 351 ) ) { ?>
						<div class="entryList">
                                <div class="game-menu-page-title">GTA V</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Страница GTA 5',
								                                                      'theme_location' => 'Страница GTA 5',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) ); ?>
						</nav></div>

					   <?php } elseif ( in_category ( 202 ) ) { ?> 
						<div class="entryList">
                                <div class="game-menu-page-title">Рубрики новостей</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Рубрики новостей',
								                                                      'theme_location' => 'Рубрики новостей',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) ); ?>
						</nav></div>
					  <?php } elseif ( in_category ( 349 ) ) { ?>
					  <div class="entryList">
                                <div class="game-menu-page-title">Рубрики новостей</div>
                                <nav class="game-menu-page"><?php wp_nav_menu( array( 'menu'           => 'Рубрики новостей',
								                                                      'theme_location' => 'Рубрики новостей',
								                                                      'depth'          => 0,
								                                                      'walker'         => new Walker_Nav_Menu()
									) );  ?>
					<?php } else {echo 'need sidebar';}; //для проверки отсутствующих сайдбаров ?>
