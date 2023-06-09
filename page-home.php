<?php // Template Name: Start Page ?>

<?php get_header(); ?>

        <!-- Hero -->
        <div class="hero">
            <div class="hero__inner">
                <div class="hero__title">HELLO.</div>
                <h5 class="hero__text">Front-end development & Web design. Based in Falun, Sweden.</h5>
            </div>
        </div>

        <!-- About -->
        <div id="about" class="about">
            <div class="about__inner">
                <h5 class="about__title"><?php the_field( 'title_about' ) ?></h5>

                <div class="about__facts">
                    <p class="facts__text"><?php the_field( 'heading_facts' ) ?></p>
                    <?php the_field( 'contents_facts' ) ?>
                </div>

                <div class="about__skills">
                    <h5 class="skills__title"><?php the_field( 'title_skills' ) ?></h5>
                    <div class="skills__content">
                        <div class="skills__webdev">
                            <?php the_field( 'contents-1_skills' ) ?>
                        </div>
                        <div class="skills__design">
                            <?php the_field( 'contents-2_skills' ) ?>
                        </div>
                    </div>
                </div>

                <div class="about__ability">
                    <h5 class="ability__title"><?php the_field( 'title_ability' ) ?></h5>
                    <div class="ability__content">
                        <?php if( get_field( 'image_card-1' ) ): ?>
                            <div class="card">
                                <h5 class="card__title card__title--dark"><?php the_field( 'title_card-1' ) ?></h5>
                                <figure class="card__image">
                                    <img src="<?php the_field('image_card-1'); ?>" />
                                </figure>
                                <div class="card__overlay"></div>
                                <p class="card__text"><?php the_field( 'text_card-1' ) ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if( get_field( 'image_card-2' ) ): ?>
                            <div class="card">
                                <h5 class="card__title"><?php the_field( 'title_card-2' ) ?></h5>
                                <figure class="card__image">
                                    <img src="<?php the_field('image_card-2'); ?>" />
                                </figure>
                                <div class="card__overlay"></div>
                                <p class="card__text"><?php the_field( 'text_card-2' ) ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if( get_field( 'image_card-3' ) ): ?>
                            <div class="card">
                                <h5 class="card__title"><?php the_field( 'title_card-3' ) ?></h5>
                                <figure class="card__image">
                                    <img src="<?php the_field('image_card-3'); ?>" />
                                </figure>
                                <div class="card__overlay"></div>
                                <p class="card__text"><?php the_field( 'text_card-3' ) ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if( get_field( 'image_card-4' ) ): ?>
                            <div class="card">
                                <h5 class="card__title"><?php the_field( 'title_card-4' ) ?></h5>
                                <figure class="card__image">
                                    <img src="<?php the_field('image_card-4'); ?>" />
                                </figure>
                                <div class="card__overlay"></div>
                                <p class="card__text"><?php the_field( 'text_card-4' ) ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if( get_field( 'image_card-5' ) ): ?>
                            <div class="card">
                                <h5 class="card__title"><?php the_field( 'title_card-5' ) ?></h5>
                                <figure class="card__image">
                                    <img src="<?php the_field('image_card-5'); ?>" />
                                </figure>
                                <div class="card__overlay"></div>
                                <p class="card__text"><?php the_field( 'text_card-5' ) ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if( get_field( 'image_card-6' ) ): ?>
                            <div class="card">
                                <h5 class="card__title"><?php the_field( 'title_card-6' ) ?></h5>
                                <figure class="card__image">
                                    <img src="<?php the_field('image_card-6'); ?>" />
                                </figure>
                                <div class="card__overlay"></div>
                                <p class="card__text"><?php the_field( 'text_card-6' ) ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Contact -->
        <div id="contact" class="contact">
            <div class="contact__inner">
                <h5 class="contact__title"><?php the_field( 'title_contact' ) ?></h5>
                <div class="contact__content">
                    <div class="contact__message">
                        <p class="contact__text"><?php the_field( 'text_contact' ) ?></p>
                        <ul class="social__list">
                            <li class="social__item"><a href="" class="social__link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35.573" height="26.68" viewBox="0 0 35.573 26.68">
                                    <path id="Icon_simple-gmail" data-name="Icon simple-gmail" d="M35.573,7.223V29.456A2.184,2.184,0,0,1,33.35,31.68H31.126V11.5l-13.34,9.579L4.447,11.5V31.68H2.223A2.183,2.183,0,0,1,0,29.456V7.223A2.185,2.185,0,0,1,2.223,5h.741L17.786,15.746,32.608,5h.741a2.185,2.185,0,0,1,2.223,2.223Z" transform="translate(0 -5)" fill="#60bfbf"/>
                                </svg>
                            </a></li>
                            <li class="social__item"><a href="" class="social__link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35.395" height="35.393" viewBox="0 0 35.395 35.393">
                                    <path id="Icon_awesome-facebook-messenger" data-name="Icon awesome-facebook-messenger" d="M18.362.625C8.369.625.625,7.928.625,17.792A16.778,16.778,0,0,0,6.2,30.49c.6.536.473.846.574,4.155A1.422,1.422,0,0,0,8.76,35.9c3.776-1.663,3.824-1.794,4.464-1.62,10.939,3.011,22.8-3.99,22.8-16.487C36.02,7.928,28.355.625,18.362.625Zm10.65,13.211L23.8,22.083a2.667,2.667,0,0,1-3.847.709l-4.145-3.1a1.07,1.07,0,0,0-1.284,0L8.934,23.931a.841.841,0,0,1-1.221-1.118l5.209-8.247a2.666,2.666,0,0,1,3.847-.709l4.143,3.1a1.07,1.07,0,0,0,1.284,0l5.6-4.237A.839.839,0,0,1,29.012,13.836Z" transform="translate(-0.625 -0.625)" fill="#60bfbf"/>
                                </svg>
                            </a></li>
                            <li class="social__item"><a href="" class="social__link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35.573" height="35.573" viewBox="0 0 35.573 35.573">
                                    <path id="Icon_awesome-linkedin" data-name="Icon awesome-linkedin" d="M33.032,2.5H2.533A2.552,2.552,0,0,0,0,5.065V35.508a2.552,2.552,0,0,0,2.533,2.565h30.5a2.559,2.559,0,0,0,2.541-2.565V5.065A2.559,2.559,0,0,0,33.032,2.5ZM10.751,32.991H5.479V16.015h5.28V32.991ZM8.115,13.7a3.057,3.057,0,1,1,3.057-3.057A3.058,3.058,0,0,1,8.115,13.7Zm22.4,19.3H25.242V24.733c0-1.969-.04-4.5-2.739-4.5-2.747,0-3.168,2.144-3.168,4.359v8.4H14.062V16.015H19.12v2.319h.071a5.553,5.553,0,0,1,4.995-2.739c5.336,0,6.328,3.518,6.328,8.091Z" transform="translate(0 -2.5)" fill="#60bfbf"/>
                                </svg>                              
                            </a></li>
                            <li class="social__item"><a href="" class="social__link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36.107" height="35.204" viewBox="0 0 36.107 35.204">
                                    <path id="Icon_awesome-github" data-name="Icon awesome-github" d="M12.077,28.972c0,.146-.167.262-.379.262-.24.022-.408-.095-.408-.262,0-.146.167-.262.379-.262C11.887,28.688,12.077,28.8,12.077,28.972Zm-2.264-.328c-.051.146.095.313.313.357a.341.341,0,0,0,.451-.146c.044-.146-.095-.313-.313-.379A.374.374,0,0,0,9.813,28.644Zm3.218-.124c-.211.051-.357.189-.335.357.022.146.211.24.429.189s.357-.189.335-.335S13.241,28.5,13.03,28.52ZM17.82.625A17.456,17.456,0,0,0,0,18.387,18.251,18.251,0,0,0,12.339,35.8c.932.167,1.259-.408,1.259-.881,0-.451-.022-2.941-.022-4.47,0,0-5.1,1.092-6.166-2.169,0,0-.83-2.118-2.024-2.664,0,0-1.667-1.143.116-1.121a3.843,3.843,0,0,1,2.81,1.878,3.848,3.848,0,0,0,5.307,1.521,4.046,4.046,0,0,1,1.165-2.453C10.715,24.99,6.61,24.4,6.61,17.4a5.517,5.517,0,0,1,1.718-4.288,6.878,6.878,0,0,1,.189-4.943c1.521-.473,5.023,1.965,5.023,1.965a17.2,17.2,0,0,1,9.143,0s3.5-2.446,5.023-1.965a6.875,6.875,0,0,1,.189,4.943A5.659,5.659,0,0,1,29.773,17.4c0,7.025-4.288,7.585-8.357,8.044a4.3,4.3,0,0,1,1.238,3.378c0,2.453-.022,5.489-.022,6.086,0,.473.335,1.048,1.259.881a18.082,18.082,0,0,0,12.215-17.4C36.107,8.29,27.917.625,17.82.625ZM7.076,25.732c-.095.073-.073.24.051.379.116.116.284.167.379.073.095-.073.073-.24-.051-.379C7.338,25.688,7.17,25.637,7.076,25.732Zm-.786-.59c-.051.095.022.211.167.284a.217.217,0,0,0,.313-.051c.051-.095-.022-.211-.167-.284C6.457,25.048,6.34,25.07,6.29,25.142Zm2.359,2.592c-.116.095-.073.313.095.451.167.167.379.189.473.073.095-.095.051-.313-.095-.451C8.961,27.639,8.743,27.618,8.648,27.734Zm-.83-1.07c-.116.073-.116.262,0,.43s.313.24.408.167a.332.332,0,0,0,0-.451C8.124,26.642,7.935,26.569,7.818,26.664Z" transform="translate(0 -0.625)" fill="#60bfbf"/>
                                </svg>
                            </a></li>
                        </ul>
                    </div>
                    <div class="contact__form">
                        <?= do_shortcode( '[contact-form-7 id="76" title="Contact Form"]' ) ?>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>