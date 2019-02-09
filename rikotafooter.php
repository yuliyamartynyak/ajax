<?php
$copyrights = get_field('copyright', 'option');
?>
</div><!-- end #wrap -->
<div class="footer-wrap">
   <div id="map"></div>
<!-- <div style="    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: -webkit-calc(100% - 46px);
    height: -moz-calc(100% - 46px);
    height: calc(100% - 46px);">
    <iframe src="https://www.google.com/maps/d/embed?mid=1aZj2s2Es1bX0AqYUHtt7GR-fXQk8FisZ" width="100%" height="100%"></iframe></div> -->

  <footer id="footer">

    <div class="feedback-form">
      <div class="form-body">
        <h3 class="block-type1__title"><?php _e("<!--:ua-->Зворотній зв`язок<!--:--><!--:en-->Feedback<!--:--><!--:ru-->Обратная связь<!--:--><!--:pl-->Kontakt z nami<!--:-->"); ?></h3>
          <?php echo do_shortcode('[contact-form-7 id="168" title="Контактна форма (Footer)"]'); ?>
      </div>
      <div class="success-message">
        <svg viewBox="0 0 76 76" class="success-message__icon icon-checkmark">
          <circle cx="38" cy="38" r="36" />
          <path fill="none"
            stroke="#FFFFFF"
            stroke-width="5"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-miterlimit="10"
            d="M17.7,40.9l10.9,10.9l28.7-28.7" />
        </svg>
        <h1 class="success-message__title"><?php _e("<!--:ua-->Дякуємо!<!--:--><!--:en-->Thanks!<!--:--><!--:ru-->Спасибо!<!--:--><!--:pl-->Dzięki!<!--:-->"); ?></h1>
        <div class="success-message__content">
          <p><?php _e("<!--:ua-->Ми отримали Ваше повідомлення та зателефонуємо Вам найближчим часом<!--:--><!--:en-->We have received your message and will call you soon<!--:--><!--:ru-->Мы получили Ваше сообщение и перезвоним Вам в ближайшее время<!--:--><!--:pl-->Otrzymaliśmy wiadomość, a oddzwonimy do Ciebie najszybciej<!--:-->"); ?></p>
        </div>
      </div>
    </div>

<!-- -->

  <div class="footer-contact" id="contacts2">
      <h4 class="contact-title"><?php echo get_field('work_time_title2', 'option'); ?></h4>

        <div class="contact-address">
        <p><?php echo get_field('address2', 'option'); ?></p>
        <a href="<?php the_field('link_get_directions2', 'option'); ?>"
        target="_blank"><?php echo _e("<!--:ua-->Прокласти маршрут<!--:--><!--:en-->Build route<!--:--><!--:ru-->Проложить маршрут<!--:--><!--:pl-->Pokaż trasę<!--:-->"); ?></a>
      </div>

        <?php if (have_rows('work_time_l2', 'option')):
            $counter = 0;
            ?>

          <ul class="contact-description contact-description--bottom-space time-list">


              <?php while (have_rows('work_time_l2', 'option')) : the_row();
                  $counter++;
                  $title2 = get_sub_field('day2');
                  $text2 = get_sub_field('time2');
                  ?>

                <li class="<?php if ($counter == 1) {
                    echo "contact-open";
                } ?>">
                  <span class="contact-description__title"><?php echo $title2; ?></span>
                  <span><?php echo $text2; ?></span>
                </li>

              <?php endwhile; ?>

          </ul>
        <?php else : ?>

          <h1>No info to show!</h1>

        <?php endif; ?>
      <!-- <h4 class="contact-title"><?php echo get_field('contact_title2', 'option'); ?></h4> -->


        <?php if (have_rows('phone_numbers2', 'option')):
            $counter = 0;
            ?>

          <ul class="contact-description phones-list">

              <?php while (have_rows('phone_numbers2', 'option')) : the_row();
                  $counter++;
                  $code_c2 = get_sub_field('code_c2');
                  $number2 = get_sub_field('number2');
                  ?>

                <li class="<?php if ($counter == 1) {
                    echo "contact-phone";
                } ?>">
                  <!-- <span
                    class="contact-description__title"><?php if ($counter == 1): ?><?php echo _e("<!--:ua-->Клініка<!--:--><!--:en-->Clinic<!--:--><!--:ru-->Клиника<!--:--><!--:pl-->Klinika<!--:-->"); ?><?php endif; ?></span> -->
                  <a href="tel:<?php echo $code_c2, $number2; ?>"><em><?php echo $code_c2; ?> </em><?php echo $number2; ?>
                  </a>
                </li>

              <?php endwhile; ?>

          </ul>

        <?php else : ?>

          <h1>No info to show!</h1>

        <?php endif; ?>

      <div class="contact-mail">
        <a href="mailto:<?php echo get_field('email2', 'option'); ?>"><?php echo get_field('email2', 'option'); ?></a>
      </div>


    </div>

<!-- -->

    <div class="footer-contact" style="padding-top:20px;" id="contacts">
      <h4 class="contact-title"><?php echo get_field('work_time_title', 'option'); ?></h4>


      <div class="contact-address">
        <p><?php echo get_field('address', 'option'); ?></p>
        <a href="<?php the_field('link_get_directions', 'option'); ?>"
        target="_blank"><?php echo _e("<!--:ua-->Прокласти маршрут<!--:--><!--:en-->Build route<!--:--><!--:ru-->Проложить маршрут<!--:--><!--:pl-->Pokaż trasę<!--:-->"); ?></a>
      </div>

        <?php if (have_rows('work_time_l', 'option')):
            $counter = 0;
            ?>

          <ul class="contact-description contact-description--bottom-space time-list">


              <?php while (have_rows('work_time_l', 'option')) : the_row();
                  $counter++;
                  $title = get_sub_field('day');
                  $text = get_sub_field('time');
                  ?>

                <li class="<?php if ($counter == 1) {
                    echo "contact-open";
                } ?>">
                  <span class="contact-description__title"><?php echo $title; ?></span>
                  <span><?php echo $text; ?></span>
                </li>

              <?php endwhile; ?>

          </ul>
        <?php else : ?>

          <h1>No info to show!</h1>

        <?php endif; ?>
      <!-- <h4 class="contact-title"><?php echo get_field('contact_title', 'option'); ?></h4> -->


        <?php if (have_rows('phone_numbers', 'option')):
            $counter = 0;
            ?>

          <ul class="contact-description phones-list">

              <?php while (have_rows('phone_numbers', 'option')) : the_row();
                  $counter++;
                  $code_c = get_sub_field('code_c');
                  $number = get_sub_field('number');
                  ?>

                <li class="<?php if ($counter == 1) {
                    echo "contact-phone";
                } ?>">
                  <!-- <span
                    class="contact-description__title"><?php if ($counter == 1): ?><?php echo _e("<!--:ua-->Клініка<!--:--><!--:en-->Clinic<!--:--><!--:ru-->Клиника<!--:--><!--:pl-->Klinika<!--:-->"); ?><?php endif; ?></span> -->
                  <a href="tel:<?php echo $code_c, $number; ?>"><em><?php echo $code_c; ?> </em><?php echo $number; ?>
                  </a>
                </li>

              <?php endwhile; ?>

          </ul>

        <?php else : ?>

          <h1>No info to show!</h1>

        <?php endif; ?>

      <div class="contact-mail">
        <a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a>
      </div>


    </div>



  </footer>

  <div class="footer-bottom">
    <div class="footer-bottom-content">
      <a style="display:none" href="<?php the_field('link_get_directions', 'option'); ?>" class="map-link"
        target="_blank"><?php echo _e("<!--:ua-->Прокласти маршрут<!--:--><!--:en-->Build route<!--:--><!--:ru-->Проложить маршрут<!--:--><!--:pl-->Pokaż trasę<!--:-->"); ?></a>

      <div class="copyright">
          <?php if ($copyrights == true) {
              echo $copyrights;
              echo ', ' . get_the_date('Y');
          } ?>
      </div>

        <?php if (have_rows('social_networks_rep', 'option')): ?>
          <nav class="social-nav social-nav--footer">
              <?php while (have_rows('social_networks_rep', 'option')) : ?>
                  <?php
                  the_row();
                  $icon = get_sub_field('class');
                  $link = get_sub_field('link');
                  ?>

                <a href="<?php echo $link; ?>" target="_blank" class="social-nav__link <?php echo $icon; ?>"></a>

              <?php endwhile; ?>
          </nav>
        <?php else : ?>

          <h1>No info to show!</h1>

        <?php endif; ?>

      <nav class="footer-menu footer-menu--right">

          <ul>
              <?php
              $menu_name_t_h = 'Bottom_menu';

              if (($locations = get_nav_menu_locations($menu_name_t_h)) && isset($menu_name_t_h)) {
                  $menu = wp_get_nav_menu_object($menu_name_t_h);

                  $menu_items = wp_get_nav_menu_items($menu->term_id);

                  $postID = get_the_ID();
                  $menu_list = false;
                  foreach ((array)$menu_items as $key => $menu_item) {
                      $title = $menu_item->title;
                      $url = $menu_item->url;
                      $object_id = $menu_item->object_id;
                      $custom_class = $menu_item->classes[0];

                      if ($postID == $object_id) {
                          $menu_list .= '<a class="active" href="' . $url . '">' . $title . '</a>';
                      } else {
                          $menu_list .= '<a href="' . $url . '">' . $title . '</a>';
                      }
                  }
              } else {
                  $menu_list = '<li>Menu "' . $menu_name_t . '" not defined.</li>';
              }
              echo $menu_list;
          ?>
          <?php echo '<a href="', get_permalink(__('[:en]348[:pl]351[:ru]354[:ua]88[:]')), '">', get_the_title(__('[:en]348[:pl]351[:ru]354[:ua]88[:]')), '</a>'; ?>
          </ul>
      </nav>
    </div>
  </div>
</div>

