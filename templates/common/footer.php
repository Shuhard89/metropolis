    <footer class="main-footer">
        <div class="main-footer-contacts-container">
            <div class="main-footer-contacts">
                <h6>Зв'яжіться з <span class="decorate-leaf">нами</span></h6>
                <ul class="footer-contacts-list">
                    <li>
                        <span>Адреса</span>
                        <ul class="footer-addresses-list">
                            <li>Київ, вул. Академіка Заболотного, 1</li>
                        </ul>
                    </li>
                    <li>
                        <span>Телефон</span>
                        <ul class="footer-phones-list">
                            <li>
                                <a href="tel:+380445002121">(044) 500 21 21</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span>E-Mail</span>
                        <ul class="footer-emails-list">
                            <li>
                                <a href="mailto:sales@metropolis.com.ua">sales@metropolis.com.ua</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <span class="button main-footer-contacts-cta-btn cta-feedback">+ Організувати перегляд</span>
            </div>
        </div>
        <div class="footer-map-root" id="footer_map"></div>
    </footer>
    <!-- Gallery modal -->
    <?php require('templates/common/gallery.php'); ?>
    <!-- Web Camera Modal -->
    <div class="cctv-modal" id="cctv_modal">
        <div class="close-modal-btn" id="close_cctv_modal">
            <img src="static/img/ui/close_big_black.svg" alt="Close icon">
        </div>
    </div>
    <!-- Map Modal -->
    <div class="map-modal" id="map_modal">
        <div class="map-modal-content" id="map_modal_root"></div>
        <div class="close-modal-btn" id="close_map_modal">
            <img src="static/img/ui/close_big_black.svg" alt="Close icon">
        </div>
    </div>
    <!-- Feedback Modal -->
    <div class="feedback-modal" id="feedback_modal">
        <div class="feedback-modal-content">
            <div class="form-feedback-wrapper">
                <h3 class="form-feedback-title"><span class="decorate-leaf-left">Організувати</span> перегляд</h3>
                <form action="mails/form-feedback.php" class="form-feedback" id="form-feedback" method="post">
                    <div class="form-feedback-col-wrapper">
                        <div class="form-feedback-left-col">
                            <div class="input-wrapper">
                                <input class="forms-input" type="text" id="client-name" name="client-name" placeholder="Ім'я" title="Формат: буквы только русского и латинского алфавита (не меньше 2х букв)" autocomplete="off">
                            </div>    
                            <div class="input-wrapper">
                                <input class="forms-input" type="tel" id="client-phone" name="client-phone" placeholder="Ваш номер телефону" autocomplete="off">                           
                            </div>
                        </div>
                        <div class="form-feedback-right-col">
                            <textarea class="client-mssg" id="client-mssg" name="client-mssg" placeholder="Текст вашого повідомлення"></textarea>
                        </div>                    
                    </div>
                    <span class="phone-number-example">Приклад: 095 123 45 67</span>
                    <input type="text" name="required" class="req-input">
                    <button class="button form-feedback-order-button" id="order-button" type="submit">
                        <span>Надіслати</span>
                    </button>
                </form>
                <p class="form-feedback-info-text">Відправляючи повідомлення, ви даєте згоду на обробку своїх даних</p>           
            </div>
            <div class="form-feedback-success-container">
                <h3>Дякуємо!<br> Ваш запит надісланий</h3>
                <p>Наші консультанти зв'яжуться з вами найближчим часом</p>
            </div>
        </div>
        <div class="close-modal-btn" id="close_map_modal">
            <img src="static/img/ui/close_big_black.svg" alt="Close icon">
        </div>
    </div>
    <!-- SCRIPTS -->
    <script src="js/libs/jquery-3.3.1.min.js"></script>
    <script src="js/libs/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/libs/jquery.event.move.js"></script>
    <script src="js/libs/jquery.mobile.custom.min.js"></script>
    <script src="js/libs/rellax.min.js"></script>
    <script src="js/libs/selectize.js"></script>
    <script src="js/libs/rSlider.js"></script>
    <script src="js/libs/jquery.circliful.min.js"></script>
    <script src="js/libs/jquery.twentytwenty.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKqbrvha4p20QERUocxfrpfESrUarPZuQ"></script>
    <script src="js/main.js?ver=1.06"></script>
    <!-- Specific scripts -->
    <?php
        if ( $currentpage == '/' || $currentpage == '/projects/metropolis.front/' || strpos( $currentpage, 'index.php' ) == true ) { ?>
            <script>
                $(function() {
                   introSlider('#fp_intro_slider');
                   locationsSlider('#locations_slider');
                   progressSlider('#slider_progress');
                   newsSlider('#news_slider');
                   infoSectionSlider('#infrastructure_slider');
                });
            </script>
        <?php }
        if ( strpos( $currentpage, 'page_about_complex.php' ) == true ) { ?>
            <script src="js/libs/custom-google-marker.js"></script>
            <script>
                $(function() {
                    infrastructureMap();
                    infoSectionSlider('#infrastructure_slider');
                    docsSlider('#docs_slider');
                });
            </script>
        <?php }
        if ( strpos( $currentpage, 'single_article.php' ) == true ) { ?>
            <script>
                $(function() {
                    newsSlider('#news_slider');
                });
            </script>
        <?php }
        if ( strpos( $currentpage, 'page_progress.php' ) == true ) { ?>
            <script>
                $(function() {
                    progressCircles();
                });
            </script>
        <?php }
        if ( strpos( $currentpage, 'single_appartment.php' ) == true ) { ?>
            <script>
                $(function() {
                    appSlider('#app_slider');
                    appsSlider('#apps_slider');
                });
            </script>
        <?php }
        if ( strpos( $currentpage, 'page_genplan_stage.php' ) == true ) { ?>
            <script>
                $(function() {
                    $('body').addClass('overflow-hidden');
                    // Genplan hover
                    $('.main-genplan > a').mousemove(function (eventObject) {
                          $data_tooltip = $(this).attr("data-description");
                           $('.genplan-text').html($data_tooltip)
                              .css({ 
                                "top" : eventObject.pageY + 10,
                                "left" : eventObject.pageX + 10
                              })
                              .show();
                          }).mouseout(function () {
                             $('.genplan-text').hide()
                              .html("")
                              .css({
                                  "top" : 0,
                                  "left" : 0
                              });
                      });                    
                });
            </script>
        <?php }
        if ( strpos( $currentpage, 'page_genplan_stage1.php' ) || strpos( $currentpage, 'page_genplan_stage2.php' ) == true ) { ?>
            <script>
                $(function() {
                    $('body').addClass('overflow-hidden');
                    // floor select hover
                    $('.genplan-link-floor').hover(function() {
                        $('.floor-select-info-block').addClass('active');
                        var houseNumber = $('#house-number');
                        var sectionNumber = $('#section-number');
                        var floorNumber = $('#floor-number');
                        var attrHouseNumber = $(this).attr('data-description-house');
                        var attrSectionNumber = $(this).attr('data-description-section');
                        var attrFloorNumber = $(this).attr('data-description-floor');
                        houseNumber.html(attrHouseNumber);
                        sectionNumber.html(attrSectionNumber);
                        floorNumber.html(attrFloorNumber);
                    }, function() {
                        // $('.floor-select-info-block').removeClass('active');
                    });
                });
            </script>
        <?php }               
        if ( strpos( $currentpage, 'category_floors.php' ) == true ) { ?>
            <script>
                $(function() {
                    // Custom select
                    $('#sort_select').selectize({
                        create: true,
                        sortField: 'asc'
                    });
                });
            </script>
        <?php }        
        if ( strpos( $currentpage, 'filter_appartments.php' ) == true ) { ?>
            <script>
                $(function() {
                    // Custom ranges
                    var floorRange = new rSlider({
                        target: '#slider_floor',
                        values: { min: 1, max: 20 },
                        step: 1,
                        range: true,
                        tooltip: true,
                        scale: false,
                        labels: false,
                        set: [1, 20]
                    });
                    var sectionRange = new rSlider({
                        target: '#slider_section',
                        values: { min: 1, max: 7 },
                        step: 1,
                        range: true,
                        tooltip: true,
                        scale: false,
                        labels: false,
                        set: [2, 6]
                    });
                    var spaceRange = new rSlider({
                        target: '#slider_space',
                        values: { min: 36, max: 250 },
                        step: 1,
                        range: true,
                        tooltip: true,
                        scale: false,
                        labels: false,
                        set: [36, 250]
                    });
                    var roomsRange = new rSlider({
                        target: '#slider_rooms',
                        values: { min: 1, max: 7 },
                        step: 1,
                        range: true,
                        tooltip: true,
                        scale: false,
                        labels: false,
                        set: [1, 7]
                    });


                    // Custom select
                    $('#sort_select').selectize({
                        create: true,
                        sortField: 'text'
                    });

                    // Mobile filter
                    $('.mobile-filter-button').on('click', function(event) {
                        event.preventDefault();
                        
                        $('.filter-page-container-left').addClass('active');
                        $('body').addClass('overflow-hidden');
                    });

                    $('#mobile-filter-close-btn').on('click', function() {
                        $('.filter-page-container-left').removeClass('active');
                        $('body').removeClass('overflow-hidden');
                    });
                });
            </script>
        <?php }
        if ( strpos( $currentpage, 'page_apps_remodeled.php' ) == true ) { ?>
            <script>
                $(function() {
                    introSlider('#apps_remodeled_intro_slider');
                    remodeledAdvantagesSlider('#remodeled_advantages_slider');
                    addMetaToImages();
                    collapsableStyleInfo();
                    philosophySlider('#philosophy_slider');
                    consultForm();
                });
                $(window).on('load', function() {
                    $("#visual-impact-1").twentytwenty({
                        default_offset_pct: 0.5, // How much of the before image is visible when the page loads
                        orientation: 'horizontal', // Orientation of the before and after images ('horizontal' or 'vertical')
                        before_label: 'Before', // Set a custom before label
                        after_label: 'After', // Set a custom after label
                        no_overlay: true, //Do not show the overlay with before and after
                        move_slider_on_hover: false, // Move slider on mouse hover?
                        move_with_handle_only: true, // Allow a user to swipe anywhere on the image to control slider movement. 
                        click_to_move: true // Allow a user to click (or tap) anywhere on the image to move the slider to that location.
                    });
                });
            </script>
        <?php }  
    ?>
</body>
</html>