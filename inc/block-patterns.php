<?php

/**
 * Block Patterns
 * Nick Summerfield
 * @since 1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

    register_block_pattern_category(
        'nightingale',
        array( 'label' => esc_html__( 'Nightingale', 'nightingale' ) )
    );
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

    //This Section is for testing blocks to ensure that they work within the pattern. Use each line to analyse sections of the generated html block code
    //register_block_pattern(
       // 'nightingale/navigation-test',
       // array(
        //    'title' => __('Nav test', 'nightingale'),
       //     'description' => _x('A dashboard navigation area for simple page browsing.', 'Block pattern description', 'nightingale'),
        //    'categories'    => array( 'nightingale' ),
        //    'content' => '
        //    <!-- wp:nhsblocks/dashboardnav -->
        //        <div class="wp-block-nhsblocks-dashboardnav nhsuk-grid-row">
         //           <div class="nhsuk-panel-group nhsuk-dashboard">
         //               <!-- wp:nhsblocks/dashpanel {"className":"nhsuk-grid-column-one-third"} -->
           //             <div class="wp-block-nhsblocks-dashpanel nhsuk-panel-group__item nhsuk-grid-column-one-third">
            //                <a class="nhsuk-promo__link-wrapper">
             //                   <div class="nhsuk-panel-with-label" style="background-image:url(/wp-content/plugins/nhsblocks/assets/pixel_trans.png);background-size:cover;background-position:center;background-color:#ffffff;">
              //                      <h3 class="nhsuk-panel-with-label__label"></h3>
                //                    <img src="/wp-content/plugins/nhsblocks/assets/pixel_trans.png" class="nhsuk-dashboard__image"/>
                 //               </div>
              //              </a>
            //            </div>
           //             <!-- /wp:nhsblocks/dashpanel -->
         //           </div>
        //       </div>
       //     <!-- /wp:nhsblocks/dashboardnav -->',
       // )
    //);
    register_block_pattern(
        'nightingale/home-page',
        array(
            'title' => __('Home Page', 'nightingale'),
            'description' => _x('NHS Leadership Academies default Homepage look.', 'Block pattern description', 'nightingale'),
            'categories'    => array( 'nightingale' ),
            'content' => "<!-- wp:nhsblocks/heroblock -->\n<section class=\"wp-block-nhsblocks-heroblock nhsuk-hero nhsuk-hero--image nhsuk-hero--image-description\" style=\"background-image:url(/wp-content/plugins/nhsblocks/assets/pixel_trans.png);background-size:cover;background-position:center;background-color:#005eb8\"><div class=\"nhsuk-hero__overlay\"><div class=\"nhsuk-width-container\"><div class=\"nhsuk-grid-row\"><div class=\"nhsuk-grid-column-two-thirds\"><!-- wp:nhsblocks/heroinner -->\n<div class=\"wp-block-nhsblocks-heroinner nhsuk-hero-content\"><h1 class=\"nhsuk-u-margin-bottom-3\" style=\"color:#ffffff\"></h1><p class=\"nhsuk-body-l nhsuk-u-margin-bottom-0\" style=\"color:#ffffff\"></p><span class=\"nhsuk-hero__arrow\" aria-hidden=\"true\"></span></div>\n<!-- /wp:nhsblocks/heroinner --></div></div></div></div></section>\n<!-- /wp:nhsblocks/heroblock -->
                          <!-- wp:nhsblocks/dashboardnav -->
                          <div class=\"wp-block-nhsblocks-dashboardnav nhsuk-grid-row\"><div class=\"nhsuk-panel-group nhsuk-dashboard\"></div></div>
                          <!-- /wp:nhsblocks/dashboardnav -->
                          <!-- wp:latest-posts {\"postsToShow\":6,\"displayPostContent\":true,\"displayAuthor\":true,\"displayPostDate\":true} /-->",
        ),

    register_block_pattern(
        'nightingale/about-us',
        array(
            'title' => __('About Us', 'nightingale'),
            'description' => _x('NHS Leadership Academies default About Us page look. Remove any extra blocks', 'Block pattern description', 'nightingale'),
            'categories'    => array( 'nightingale' ),
            'content' => "<!-- wp:nhsblocks/card1 -->
                           <div class=\"wp-block-nhsblocks-card1 nhsuk-grid-column-width nhsuk-care-card nhsuk-care-card--type\"><div class=\"nhsuk-care-card__heading-container\"><h3 class=\"nhsuk-care-card__heading\"><span role=\"text\"><span class=\"nhsuk-u-visually-hidden\">Non-urgent advice: </span><span class=\"nhsuk-care-card__heading-text\"></span></span></h3><span class=\"nhsuk-care-card__arrow\" aria-hidden=\"true\"></span></div><div class=\"nhsuk-care-card__content\"><p></p></div></div>
                           <!-- /wp:nhsblocks/card1 -->
                           <!-- wp:nhsblocks/card1 -->
                           <div class=\"wp-block-nhsblocks-card1 nhsuk-grid-column-width nhsuk-care-card nhsuk-care-card--type\"><div class=\"nhsuk-care-card__heading-container\"><h3 class=\"nhsuk-care-card__heading\"><span role=\"text\"><span class=\"nhsuk-u-visually-hidden\">Non-urgent advice: </span><span class=\"nhsuk-care-card__heading-text\"></span></span></h3><span class=\"nhsuk-care-card__arrow\" aria-hidden=\"true\"></span></div><div class=\"nhsuk-care-card__content\"><p></p></div></div>
                           <!-- /wp:nhsblocks/card1 -->
                           <!-- wp:nhsblocks/card1 -->
                           <div class=\"wp-block-nhsblocks-card1 nhsuk-grid-column-width nhsuk-care-card nhsuk-care-card--type\"><div class=\"nhsuk-care-card__heading-container\"><h3 class=\"nhsuk-care-card__heading\"><span role=\"text\"><span class=\"nhsuk-u-visually-hidden\">Non-urgent advice: </span><span class=\"nhsuk-care-card__heading-text\"></span></span></h3><span class=\"nhsuk-care-card__arrow\" aria-hidden=\"true\"></span></div><div class=\"nhsuk-care-card__content\"><p></p></div></div>
                           <!-- /wp:nhsblocks/card1 -->
                           <!-- wp:nhsblocks/card1 -->
                           <div class=\"wp-block-nhsblocks-card1 nhsuk-grid-column-width nhsuk-care-card nhsuk-care-card--type\"><div class=\"nhsuk-care-card__heading-container\"><h3 class=\"nhsuk-care-card__heading\"><span role=\"text\"><span class=\"nhsuk-u-visually-hidden\">Non-urgent advice: </span><span class=\"nhsuk-care-card__heading-text\"></span></span></h3><span class=\"nhsuk-care-card__arrow\" aria-hidden=\"true\"></span></div><div class=\"nhsuk-care-card__content\"><p></p></div></div>
                           <!-- /wp:nhsblocks/card1 -->
                           <!-- wp:nhsblocks/card1 -->
                           <div class=\"wp-block-nhsblocks-card1 nhsuk-grid-column-width nhsuk-care-card nhsuk-care-card--type\"><div class=\"nhsuk-care-card__heading-container\"><h3 class=\"nhsuk-care-card__heading\"><span role=\"text\"><span class=\"nhsuk-u-visually-hidden\">Non-urgent advice: </span><span class=\"nhsuk-care-card__heading-text\"></span></span></h3><span class=\"nhsuk-care-card__arrow\" aria-hidden=\"true\"></span></div><div class=\"nhsuk-care-card__content\"><p></p></div></div>
                           <!-- /wp:nhsblocks/card1 -->",
        )
    ),
    );
}