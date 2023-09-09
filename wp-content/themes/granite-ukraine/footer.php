            <?php
            echo get_template_part('template-parts/modules/modal');
            echo get_template_part('template-parts/modules/form');
            echo get_template_part('template-parts/modules/map');
            $logo = get_field('logo', 'options');
            $phone = get_field('phone', 'options');
            $email = get_field('email', 'options');
            $copyright = get_field('copyright', 'options');
            $result = preg_replace('/[\s-]+/', "", $phone );?>
            
            <footer class="footer decor">
                <div class="container">
                    <div class="footer-global">
                        <?php if ($logo['ID']) :?>
                            <div class="footer-logo">
                                <a href="<?php echo get_home_url();?>">
                                    <?php echo getImage($logo);?>
                                </a>
                            </div>
                        <?php endif;?>
                        <?php
                        $menu_args = array(
                            'theme_location' => 'main',
                            'menu_class' => 'main-wrapper global-menus'
                        );
                        wp_nav_menu($menu_args);?>
                        
                        <nav class="contact-navigation">
                            <ul class="menu-contact">
                                <li>
                                    <a href="tel:<?php echo $phone;?>"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="ic" clip-path="url(#clip0_1346_3125)"><mask id="mask0_1346_3125" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24"><rect id="Bounding box" width="24" height="24" fill="#D9D9D9"/></mask><g mask="url(#mask0_1346_3125)"><path id="call" d="M12.9538 13.6283C11.6573 13.6283 10.3733 13.3206 9.10192 12.7052C7.83057 12.0899 6.69554 11.2828 5.69682 10.2841C4.6981 9.28539 3.88999 8.15142 3.27247 6.8822C2.65495 5.61297 2.34619 4.33007 2.34619 3.0335C2.34619 2.8335 2.41286 2.66683 2.54619 2.5335C2.67952 2.40016 2.84619 2.3335 3.04619 2.3335H5.22051C5.39316 2.3335 5.54381 2.3867 5.67244 2.49311C5.80106 2.59952 5.88076 2.73692 5.91154 2.9053L6.29359 4.86681C6.32008 5.03091 6.3173 5.18006 6.28526 5.31425C6.2532 5.44844 6.1829 5.56553 6.07436 5.66553L4.54102 7.16425C5.06752 8.05827 5.69531 8.86596 6.42438 9.58733C7.15343 10.3087 7.97865 10.9378 8.90002 11.4745L10.3898 9.95913C10.4983 9.85059 10.6267 9.77345 10.775 9.72773C10.9233 9.682 11.0752 9.67238 11.2308 9.69888L13.082 10.0758C13.2504 10.1134 13.3878 10.1948 13.4942 10.32C13.6006 10.4452 13.6538 10.5942 13.6538 10.7668V12.9283C13.6538 13.1283 13.5872 13.295 13.4538 13.4283C13.3205 13.5617 13.1538 13.6283 12.9538 13.6283ZM4.06156 6.21811L5.25131 5.07965C5.27267 5.06255 5.28656 5.03904 5.29297 5.00913C5.29939 4.97921 5.29831 4.95143 5.28976 4.9258L5.00003 3.43605C4.99147 3.40186 4.97651 3.37622 4.95514 3.35913C4.93378 3.34203 4.906 3.33348 4.87181 3.33348H3.44617C3.42053 3.33348 3.39916 3.34203 3.38206 3.35913C3.36497 3.37622 3.35642 3.39759 3.35642 3.42323C3.3906 3.87879 3.46517 4.34161 3.58014 4.8117C3.6951 5.28179 3.85557 5.75059 4.06156 6.21811ZM12.5641 12.6078C12.5898 12.6078 12.6111 12.5993 12.6282 12.5822C12.6453 12.5651 12.6539 12.5437 12.6539 12.5181V11.1155C12.6539 11.0813 12.6453 11.0536 12.6282 11.0322C12.6111 11.0108 12.5855 10.9959 12.5513 10.9873L11.1513 10.7027C11.1256 10.6942 11.1032 10.6931 11.084 10.6995C11.0647 10.7059 11.0444 10.7198 11.0231 10.7412L9.83589 11.9412C10.2778 12.1472 10.7387 12.3046 11.2186 12.4136C11.6985 12.5226 12.147 12.5873 12.5641 12.6078Z" fill="white"/></g></g><defs><clipPath id="clip0_1346_3125"><rect width="16" height="16" fill="white"/></clipPath></defs></svg><?php echo $phone;?></a>
                                </li>
                                <li>
                                    <a href="mailto:<?php echo $email;?>"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="ic" clip-path="url(#clip0_1346_3222)"><mask id="mask0_1346_3222" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24"><rect id="Bounding box" width="24" height="24" fill="#D9D9D9"/></mask><g mask="url(#mask0_1346_3222)"><path id="mail" d="M2.87188 13C2.53513 13 2.25008 12.8833 2.01675 12.65C1.78341 12.4166 1.66675 12.1316 1.66675 11.7948V4.20513C1.66675 3.86838 1.78341 3.58333 2.01675 3.35C2.25008 3.11667 2.53513 3 2.87188 3H13.1282C13.465 3 13.75 3.11667 13.9834 3.35C14.2167 3.58333 14.3334 3.86838 14.3334 4.20513V11.7948C14.3334 12.1316 14.2167 12.4166 13.9834 12.65C13.75 12.8833 13.465 13 13.1282 13H2.87188ZM13.3334 4.9615L8.32441 8.16792C8.27314 8.19697 8.22015 8.21983 8.16545 8.2365C8.11075 8.25317 8.05562 8.2615 8.00006 8.2615C7.94451 8.2615 7.88938 8.25317 7.83468 8.2365C7.77998 8.21983 7.72699 8.19697 7.67571 8.16792L2.66673 4.9615V11.7948C2.66673 11.8547 2.68596 11.9038 2.72443 11.9423C2.7629 11.9808 2.81205 12 2.87188 12H13.1282C13.1881 12 13.2372 11.9808 13.2757 11.9423C13.3142 11.9038 13.3334 11.8547 13.3334 11.7948V4.9615ZM8.00006 7.33332L13.2308 3.99998H2.7693L8.00006 7.33332ZM2.66673 5.11533V4.35318V4.37305V4.3519V5.11533Z" fill="white"/></g></g><defs><clipPath id="clip0_1346_3222"><rect width="16" height="16" fill="white"/></clipPath></defs></svg><?php echo $email;?></a>
                                </li>
                            </ul>
                            <?php echo get_template_part('template-parts/modules/social') ;?>
                        </nav>
                        <div class="footer-bottom">
                            <?php if (isset($copyright)):?>
                                <div class="footer-copyright">
                                    &copy;<?php echo $copyright;?>
                                </div>
                            <?php endif;?>
                            <div class="scroll-btn">
                                <button id="scroll">
                                    <?php echo __('Догори', 'granite-ukraine');?><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="ic" clip-path="url(#clip0_1346_4311)"><mask id="mask0_1346_4311" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24"><rect id="Bounding box" width="24" height="24" fill="#D9D9D9"/></mask><g mask="url(#mask0_1346_4311)"><path id="arrow_upward_alt" d="M7.50009 5.40528L5.28467 7.62068C5.19237 7.71298 5.07635 7.7602 4.93661 7.76235C4.79687 7.76448 4.67872 7.71726 4.58214 7.62068C4.48555 7.5241 4.43726 7.40701 4.43726 7.26941C4.43726 7.1318 4.48555 7.01471 4.58214 6.91813L7.57829 3.92198C7.6988 3.80147 7.8394 3.74121 8.00007 3.74121C8.16075 3.74121 8.30135 3.80147 8.42186 3.92198L11.418 6.91813C11.5103 7.01044 11.5575 7.12646 11.5597 7.2662C11.5618 7.40594 11.5146 7.5241 11.418 7.62068C11.3214 7.71726 11.2043 7.76554 11.0667 7.76554C10.9291 7.76554 10.8121 7.71726 10.7155 7.62068L8.50006 5.40528V11.2694C8.50006 11.4113 8.4522 11.5301 8.35647 11.6258C8.26075 11.7215 8.14195 11.7694 8.00007 11.7694C7.8582 11.7694 7.7394 11.7215 7.64367 11.6258C7.54795 11.5301 7.50009 11.4113 7.50009 11.2694V5.40528Z" fill="white"/></g></g><defs><clipPath id="clip0_1346_4311"><rect width="16" height="16" fill="white"/></clipPath></defs></svg></button>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>        
        
        </div>
        <?php wp_footer();?>
    </body>
</html>