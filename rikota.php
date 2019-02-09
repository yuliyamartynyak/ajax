<?php

use Roots\Sage\Assets;

$headerLogotype = get_field('header_logotype', 'option');
$headerSignature = get_field('signature', 'option');

?>
<div id="wrap"><!-- start #wrap -->
    <header id="header">
        <a href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" class="logo">
            <img src="<?php if ($headerLogotype != 0) {
                echo $headerLogotype['url'];
            } ?>" alt="<?php echo $headerLogotype['alt']; ?>">
            <span><?php if ($headerSignature == true) {
                    echo $headerSignature;
                } ?></span>
        </a>




        <div class="contact-header">
            <!-- <a class="contact-header__title link-to-block" href="#contacts"><?php echo _e("<!--:ua-->Контакти<!--:--><!--:en-->Contacts<!--:--><!--:ru-->Контакты<!--:--><!--:pl-->Kontakt<!--:-->"); ?></a> -->
            <?php if (have_rows('phone_numbers', 'option')):
                $counter = 0;
                ?>

                <?php while (have_rows('phone_numbers', 'option')) : the_row();
                $counter++;
                $code_c = get_sub_field('code_c');
                $number = get_sub_field('number');
                ?>


                <?php if ($counter == 1): ?>

                       <a style="display:block" class="contact-header__number icon-phone"
                       href="tel:+380931703999">+38 093 170 39 99 &nbsp; <?php echo _e("<!--:ua-->просп. Свободи, 13а<!--:--><!--:en-->Svobody avenue, 13a<!--:--><!--:ru-->просп. Свободы, 13а<!--:--><!--:pl-->prospekt Wolności, 13a<!--:-->"); ?></a>
                       <a style="display:block" class="contact-header__number icon-phone"
                       href="tel:<?php echo $code_c, $number; ?>"><?php echo $code_c; ?> <?php echo $number; ?>  &nbsp; <?php echo _e("<!--:ua-->вул. Володимира Великого, 31<!--:--><!--:en-->Volodymyra Velykoho str. 31<!--:--><!--:ru-->ул. Владимира Великого, 31<!--:--><!--:pl-->ul. Włodzimierza Wielkiego, 31<!--:-->"); ?></a>
                <?php endif; ?>

            <?php endwhile; ?>

            <?php else : ?>

                <h1>No info to show!</h1>

            <?php endif; ?>

        </div>

        <div class="b-menu">

            <a href="<?= esc_url(home_url('/')); ?>" class="mobile-logo">
                <img src="<?php echo Assets\asset_path('img/logo-mobile.svg'); ?>" alt="">
            </a>

            <div class="mobile-bg"></div>

            <div class="menu" id="mobile-menu-button">
                <span class="menu-item"></span>
                <span class="menu-item"></span>
                <span class="menu-item"></span>
            </div>

            <?php if (qtranxf_getSortedLanguages()): ?>
                <div class="languges languges--open" style="width:252px" >
                    <div class="languges-wrap">
                        <?php if (qtranxf_getLanguage() == 'en'):?>
                            <div class="languges__select--wrap js-open-lang-list"><span class="lang languges__select">EN <span class="lang-flag lang-flag--en"></span></span></div>
                        <?php elseif (qtranxf_getLanguage() == 'pl'):?>
                            <div class="languges__select--wrap js-open-lang-list"><span class="lang languges__select">PL <span class="lang-flag lang-flag--pl"></span></span></div>
                        <?php elseif (qtranxf_getLanguage() == 'ru'):?>
                            <div class="languges__select--wrap js-open-lang-list"><span class="lang languges__select">RU <span class="lang-flag lang-flag--ru"></span></span></div>
                        <?php elseif (qtranxf_getLanguage() == 'ua'):?>
                            <div class="languges__select--wrap js-open-lang-list"><span class="lang languges__select">UA <span class="lang-flag lang-flag--ua"></span></span></div>
                        <?php endif; ?>
                        <?php global $q_config; ?>
                        <ul class="languges__list">
                            <?php foreach (qtranxf_getSortedLanguages() as $language): ?>
                                <?php
	                               // var_dump($q_config);
                                    $languageTitle = $q_config['language_name'][$language];
                                    $languageTitleCheck =  substr($languageTitle, 0, 2);
                                    $activeLanguage = qtranxf_getLanguage();
                                    $languageUrl = qtranxf_convertURL('', $language);
                                    $url = 0;
                                ?>
                                <?php if ($languageTitleCheck != $activeLanguage): ?>
                                    <li>
                                        <a href="<?php echo qtranxf_convertURL($url, $language, false, true); ?>" hreflang="<?php if($languageTitle == 'ua') { echo 'uk'; } else { echo $languageTitle; } ?>" title="<?php echo $languageTitle; ?>"><?php echo $languageTitle; ?> <span class="lang-flag lang-flag--<?php echo $languageTitle; ?>"></span></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <div class="menu-wrap">
	            <ul>
	                <?php wp_nav_menu([
	                    'menu'            => 'Top_menu',
	                    'container'       => false,
	                    'container_class' => '',
	                    'container_id'    => '',
	                    'menu_id'         => '',
	                    'echo'            => true,
	                    'fallback_cb'     => 'wp_page_menu',
	                    'before'          => '',
	                    'after'           => '',
	                    'link_before'     => '',
	                    'link_after'      => '',
	                    'link_class'      => '',
	                    'items_wrap'      => '%3$s',
	                    'walker'          => new NavMenu(),
	                    'theme_location'  => '',
	                ]); ?>
	                <li>
	                	<a class="contact-header__title link-to-block visible-xs" href="#contacts"><?php echo _e("<!--:ua-->Контакти<!--:--><!--:en-->Contacts<!--:--><!--:ru-->Контакты<!--:--><!--:pl-->Kontakt<!--:-->"); ?></a>
	                </li>
	            </ul>
            </div>
        </div>
    </header>