/**
 * Customizer Js
 */
( function( $ ) {

/**
 * Table of Contents
 *
 * 1.0 - General
 *   1.1 - Site Identity
 *   	1.1.1 - Blog Name
 *      1.1.2 - Tagline
 *      1.1.3 - Colors
 *   1.2 - Spacing
 *      1.2.1 - Desktop Container Width
 *      1.2.2 - Container Padding Right
 *      1.2.3 - Container Padding Left
 *      1.2.4 - Container Margin Right
 *      1.2.5 - Container Margin Left
 *   1.3 - Static Front Page
 *      1.3.1 - Front Page
 *   1.4 - Alert Colors
 *      1.4.1 - Alert Warning Background Color
 *      1.4.2 - Alert Error Background Color
 *      1.4.3 - Alert Success Background Color
 *      1.4.4 - Alert Info Background Color
 *      1.4.5 - Alert Warning Text Color
 *      1.4.6 - Alert Error Text Color
 *      1.4.7 - Alert Success Text Color
 *      1.4.8 - Alert Info Text Color
 *      1.4.9 - Alert Warning Border Color
 *      1.4.10 - Alert Error Border Color
 *      1.4.11 - Alert Success Border Color
 *      1.4.12 - Alert Info Border Color
 * 	 1.5 - Button Colors
 *      1.5.1 - Button Text Color
 *      1.5.2 - Button Background Color
 *      1.5.3 - Button Hover Background Color
 *      1.5.4 - Button Border Color
 * 2.0 - Header
 *   2.1 - Header Top
 *      2.1.1 - Enable Header Top Section
 *      2.1.2 - Header Top Text Color
 *      2.1.3 - Header Top Link Color
 *      2.1.4 - Header Top Link Hover Color
 * 		2.1.5 - Header Top Background Color
 *   2.2 - Logo
 * 		2.2.1 - Logo
 *   2.3 - Header Image
 * 		2.3.1 - Header Image
 *   2.4 - Text Colors
 * 		2.4.1 - Header Text color
 * 		2.4.2 - Header Link color
 *      2.4.3 - Header Link Hover Color
 *   2.5 - Background Colors
 * 		2.5.1 - Header Background Color
 * 		2.5.2 - Header Border Color
 * 		2.5.3 - Header Shadow Color
 * 		2.5.4 - Primary Menu - Sub menu Background Color
 *      2.5.5 - Primary Menu - Sub menu Background hover Color
 *   2.6 - Typography
 *   2.7 - Spacing
 * 		2.7.1 - Header Height
 * 		2.7.2 - Logo Margin Right
 * 		2.7.3 - Logo Margin Left
 * 		2.7.4 - Logo Margin Top
 * 		2.7.5 - Primary Menu Height
 * 		2.7.6 - Primary Menu Line Height
 * 		2.7.7 - Primary Menu Padding Left Right
 * 	    2.7.8 - Header Logo Width
 * 	    2.7.9 - Header Menu Width
 * 3.0 - Body
 *   3.1 - Background Image
 * 		3.1.1 - Background Image
 *   3.2 - Text Colors
 * 		3.2.1 - Body Color
 * 		3.2.2 - h1 to h6 Color
 * 		3.2.3 - Link Color
 * 		3.2.4 - Link Hover Color
 * 		3.2.5 - Link Visited Color
 *   3.3 - Background Colors
 * 		3.3.1 - Body Background Color
 * 		3.3.2 - Content Box Background Color
 * 		3.3.3 - Content Box Border Color
 * 		3.3.4 - Content Box Shadow Color
 *   3.4 - Typography
 * 		3.4.1 - Font Family
 * 		3.4.2 - Font Size
 * 		3.4.3 - Line Height
 *   3.5 - Spacing
 * 4.0 - Footer
 *   4.1 - Text Colors
 * 		4.1.1 - Text Color
 * 		4.1.2 - h1 to h6 Color
 * 		4.1.3 - Link Color
 * 		4.1.4 - Link Hover Color
 * 		4.1.5 - Link Visited Color
 *   4.2 - Background Colors
 * 		4.2.1 - Footer Section Background Color
 * 		4.2.2 - Footer Section Border Top Color
 * 		4.2.3 - Footer Section Border Bottom Color
 * 		4.2.4 - Footer Section Box Shadow Color
 *   4.3 - Typography
 *   4.4 - Spacing
 * 5.0 - Copyright
 * 	5.1 - Text Colors
 * 		5.1.1 - Text Color
 * 		5.1.2 - Link Color
 * 		5.1.3 - Link Hover Color
 * 		5.1.4 - Link Visited Color
 *	5.2 - Background Colors
 * 		5.2.1 - Copyright Section Background Color
 * 		5.2.2 - Copyright Section Border Color
 * 	5.3 - Typography
 * 	5.4 - Spacing
 * 		5.4.1 - Copyright Padding Top
 * 		5.4.2 - Copyright Padding Bottom
 */


//  =============================
//  1.0 - General
//  =============================

    //  =============================
    //  1.1 - Site Identity
    //  =============================

        //  =============================
        //  1.1.1 - Blog Name
        //  =============================

            wp.customize( 'blogname', function( value ) {
                value.bind( function( newval ) {
                    $( 'h1.site-title a' ).html( newval );
                } );
            } );

        //  =============================
        //  1.1.2 - Tagline
        //  =============================

        //  =============================
        //  1.1.3 - Colors
        //  =============================


    //  =============================
    //  1.2 - Spacing
    //  =============================

        //  =============================
        //  1.2.1 - Desktop Container Width
        //  =============================

            wp.customize( 'dt_container_width', function( value ) {
                value.bind( function( newval ) {
                    $( '.container, .geodir-common, .geodir-breadcrumb, .geodir_full_page .widget' ).css('width', newval );
                } );
            } );

        //  =============================
        //  1.2.2 - Container Padding Right
        //  =============================

            wp.customize( 'dt_container_padding_right', function( value ) {
                value.bind( function( newval ) {
                    $( '.container, .geodir-common, .geodir-breadcrumb, .geodir_full_page .widget' ).css('padding-right', newval );
                } );
            } );

        //  =============================
        //  1.2.3 - Container Padding Left
        //  =============================

            wp.customize( 'dt_container_padding_left', function( value ) {
                value.bind( function( newval ) {
                    $( '.container, .geodir-common, .geodir-breadcrumb, .geodir_full_page .widget' ).css('padding-left', newval );
                } );
            } );

        //  =============================
        //  1.2.4 - Container Margin Right
        //  =============================

            wp.customize( 'dt_container_margin_right', function( value ) {
                value.bind( function( newval ) {
                    $( '.container, .geodir-common, .geodir-breadcrumb, .geodir_full_page .widget' ).css('margin-right', newval );
                } );
            } );

        //  =============================
        //  1.2.5 - Container Margin Left
        //  =============================

            wp.customize( 'dt_container_margin_left', function( value ) {
                value.bind( function( newval ) {
                    $( '.container, .geodir-common, .geodir-breadcrumb, .geodir_full_page .widget' ).css('margin-left', newval );
                } );
            } );

    //  =============================
    //  1.3 - Static Front Page
    //  =============================

        //  =============================
        //  1.3.1 - Front Page
        //  =============================

    //  =============================
    //  1.4 - Alert Colors
    //  =============================

        //  =============================
        //  1.4.1 - Alert Warning Background Color
        //  =============================

            wp.customize( 'dt_alert_yellow', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-warning' ).css('background-color', newval );
                    $('#buddypress').find('#message.info').find('p').css('background-color', newval );
                } );
            } );

        //  =============================
        //  1.4.2 - Alert Error Background Color
        //  =============================

            wp.customize( 'dt_alert_red', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-error' ).css('background-color', newval );
                    $('#buddypress').find('#message.error').find('p').css('background-color', newval );
                } );
            } );

        //  =============================
        //  1.4.3 - Alert Success Background Color
        //  =============================

            wp.customize( 'dt_alert_green', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-success' ).css('background-color', newval );
                    $('#buddypress').find('#message.updated').find('p').css('background-color', newval );
                } );
            } );

        //  =============================
        //  1.4.4 - Alert Info Background Color
        //  =============================

            wp.customize( 'dt_alert_blue', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-info' ).css('background-color', newval );
                } );
            } );

        //  =============================
        //  1.4.5 - Alert Warning Text Color
        //  =============================

            wp.customize( 'dt_alert_yellow_text', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-warning' ).css('color', newval );
                    $('#buddypress').find('#message.info').find('p').css('color', newval );
                } );
            } );

        //  =============================
        //  1.4.6 - Alert Error Text Color
        //  =============================

            wp.customize( 'dt_alert_red_text', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-error' ).css('color', newval );
                    $('#buddypress').find('#message.error').find('p').css('color', newval );
                } );
            } );

        //  =============================
        //  1.4.7 - Alert Success Text Color
        //  =============================

            wp.customize( 'dt_alert_green_text', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-success' ).css('color', newval );
                    $('#buddypress').find('#message.updated').find('p').css('color', newval );
                } );
            } );

        //  =============================
        //  1.4.8 - Alert Info Text Color
        //  =============================

            wp.customize( 'dt_alert_blue_text', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-info' ).css('color', newval );
                } );
            } );

        //  =============================
        //  1.4.9 - Alert Warning Border Color
        //  =============================

            wp.customize( 'dt_alert_yellow_border', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-warning' ).css('border-color', newval );
                    $('#buddypress').find('#message.info').find('p').css('border-color', newval );
                } );
            } );

        //  =============================
        //  1.4.10 - Alert Error Border Color
        //  =============================

            wp.customize( 'dt_alert_red_border', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-error' ).css('border-color', newval );
                    $('#buddypress').find('#message.error').find('p').css('border-color', newval );
                } );
            } );

        //  =============================
        //  1.4.11 - Alert Success Border Color
        //  =============================

            wp.customize( 'dt_alert_green_border', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-success' ).css('border-color', newval );
                    $('#buddypress').find('#message.updated').find('p').css('border-color', newval );
                } );
            } );

        //  =============================
        //  1.4.12 - Alert Info Border Color
        //  =============================

            wp.customize( 'dt_alert_blue_border', function( value ) {
                value.bind( function( newval ) {
                    $( '.alert-info' ).css('border-color', newval );
                } );
            } );

    //  =============================
    //  1.5 - Button Colors
    //  =============================

        //  =============================
        //  1.5.1 - Button Text Color
        //  =============================

            wp.customize( 'dt_btn_text_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.dt-btn, button, input[type=button], input[type=reset], input[type=submit], p.edit-link, .reply .gd_comment_replaylink #gd_comment_replaylink, #buddypress form#whats-new-form input[type=submit], #buddypress .standard-form div.submit input, #buddypress .comment-reply-link, #buddypress button, #buddypress div.generic-button a, #buddypress input[type=button], #buddypress input[type=reset], #buddypress input[type=submit], #buddypress ul.button-nav li a, #buddypress input[type=submit]#notification-bulk-manage' ).css('color', newval );
                } );
            } );

        //  =============================
        //  1.5.2 - Button Background Color
        //  =============================

            wp.customize( 'dt_btn_bg_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.dt-btn, button, input[type=button], input[type=reset], input[type=submit], p.edit-link, .reply .gd_comment_replaylink #gd_comment_replaylink, #buddypress form#whats-new-form input[type=submit], #buddypress .standard-form div.submit input, #buddypress .comment-reply-link, #buddypress button, #buddypress div.generic-button a, #buddypress input[type=button], #buddypress input[type=reset], #buddypress input[type=submit], #buddypress ul.button-nav li a, #buddypress input[type=submit]#notification-bulk-manage' ).css('background-color', newval );
                } );
            } );

        //  =============================
        //  1.5.3 - Button Hover Background Color
        //  =============================

            wp.customize( 'dt_btn_hover_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.dt-btn, button, input[type=button], input[type=reset], input[type=submit], p.edit-link, .reply .gd_comment_replaylink #gd_comment_replaylink, #buddypress form#whats-new-form input[type=submit], #buddypress .standard-form div.submit input, #buddypress .comment-reply-link, #buddypress button, #buddypress div.generic-button a, #buddypress input[type=button], #buddypress input[type=reset], #buddypress input[type=submit], #buddypress ul.button-nav li a, #buddypress input[type=submit]#notification-bulk-manage' ).hover(function() {
                        $(this).css('background-color', newval );
                    });
                } );
            } );

        //  =============================
        //  1.5.4 - Button Border Color
        //  =============================

            wp.customize( 'dt_btn_border_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.dt-btn, button, input[type=button], input[type=reset], input[type=submit], p.edit-link, .reply .gd_comment_replaylink #gd_comment_replaylink, #buddypress form#whats-new-form input[type=submit], #buddypress .standard-form div.submit input, #buddypress .comment-reply-link, #buddypress button, #buddypress div.generic-button a, #buddypress input[type=button], #buddypress input[type=reset], #buddypress input[type=submit], #buddypress ul.button-nav li a, #buddypress input[type=submit]#notification-bulk-manage' ).css('border-color', newval );
                } );
            } );

//  =============================
//  2.0 - Header
//  =============================

    //  =============================
    //  2.1 - Header Top
    //  =============================

        //  =============================
        //  2.1.1 - Enable Header Top Section
        //  =============================

        //  =============================
        //  2.1.2 - Header Top Text Color
        //  =============================

            wp.customize( 'dt_header_top_text_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.ds-top-header' ).css('color', newval );
                } );
            } );

        //  =============================
        //  2.1.3 - Header Top Link Color
        //  =============================

            wp.customize( 'dt_header_top_link_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.ds-top-header' ).find('a, a:visited').css('color', newval );
                } );
            } );


        //  =============================
        //  2.1.4 - Header Top Link Hover Color
        //  =============================

            wp.customize( 'dt_header_top_link_hover', function( value ) {
                value.bind( function( newval ) {
                    $( '.ds-top-header').find('a, a:visited').bind("mouseover", function(){
                        var color  = $(this).css("color");
                        $(this).css("color", newval);
                        $(this).bind("mouseout", function(){
                            $(this).css("color", color);
                        })
                    });
                } );
            } );

        //  =============================
        //  2.1.5 - Header Top Background Color
        //  =============================

            wp.customize( 'dt_header_top_bg_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.ds-top-header' ).css('background-color', newval );
                } );
            } );

    //  =============================
    //  2.2 - Logo
    //  =============================

        //  =============================
        //  2.2.1 - Logo
        //  =============================

    //  =============================
    //  2.3 - Header Image
    //  =============================

        //  =============================
        //  2.3.1 - Header Image
        //  =============================

            // todo: fix this
            wp.customize( 'header_image', function( value ) {
                value.bind( function( newval ) {
                    $( '.site-header' ).css('background', 'url('+newval+') no-repeat scroll top' );
                } );
            } );

    //  =============================
    //  2.4 - Text Colors
    //  =============================

        //  =============================
        //  2.4.1 - Header Text color
        //  =============================

            wp.customize( 'dt_header_text_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.site-header' ).css('color', newval );
                } );
            } );

        //  =============================
        //  2.4.2 - Header Link color
        //  =============================

            wp.customize( 'dt_header_link_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.site-header' ).find('a, a:visited').css('color', newval );
                } );
            } );

            //wp.customize( 'header_textcolor', function( value ) {
            //    value.bind( function( newval ) {
            //        $( '.site-title a' ).css( 'color', newval );
            //        $( '.site-description a' ).css( 'color', newval );
            //    } );
            //} );

        //  =============================
        //  2.4.3 - Header Link Hover Color
        //  =============================

            wp.customize( 'dt_header_link_hover', function( value ) {
                value.bind( function( newval ) {
                    $( '.site-header').find('a, a:visited').bind("mouseover", function(){
                        var color  = $(this).css("color");
                        $(this).css("color", newval);
                        $(this).bind("mouseout", function(){
                            $(this).css("color", color);
                        })
                    });
                } );
            } );

    //  =============================
    //  2.5 - Background Colors
    //  =============================

        //  =============================
        //  2.5.1 - Header Background Color
        //  =============================

            wp.customize( 'dt_header_bg_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.site-header' ).css('background-color', newval );
                } );
            } );

        //  =============================
        //  2.5.2 - Header Border Color
        //  =============================

            wp.customize( 'dt_header_border_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.site-header' ).css('border-color', newval );
                } );
            } );

        //  =============================
        //  2.5.3 - Header Shadow Color
        //  =============================

            //wp.customize( 'dt_header_shadow_color', function( value ) {
            //    value.bind( function( newval ) {
            //        $( '.site-header' ).css('box-shadow', '0 1px 1px '+newval );
            //    } );
            //} );

        //  =============================
        //  2.5.4 - Primary Menu - Sub menu Background Color
        //  =============================

            wp.customize( 'dt_p_nav_submenu_bg_color', function( value ) {
                value.bind( function( newval ) {
                    $( '#primary-nav').find('.sub-menu a' ).css('background-color', newval );
                } );
            } );

        //  =============================
        //  2.5.5 - Primary Menu - Sub menu Background hover Color
        //  =============================

            wp.customize( 'dt_p_nav_submenu_bg_hover', function( value ) {
                value.bind( function( newval ) {
                    $( '#primary-nav').find('a' ).bind("mouseover", function(){
                        var bg_color  = $(this).css("background-color");
                        $(this).css("background-color", newval);
                        $(this).bind("mouseout", function(){
                            $(this).css("background-color", bg_color);
                        })
                    });
                } );
            } );

    //  =============================
    //  2.6 - Typography
    //  =============================

    //  =============================
    //  2.7 - Spacing
    //  =============================

        //  =============================
        //  2.7.1 - Header Height
        //  =============================

            wp.customize( 'dt_header_height', function( value ) {
                value.bind( function( newval ) {
                    $( '.site-header' ).css('min-height', newval );
                } );
            } );

        //  =============================
        //  2.7.2 - Logo Margin Right
        //  =============================

            wp.customize( 'dt_logo_margin_right', function( value ) {
                value.bind( function( newval ) {
                    $( '.site-logo-wrap').find('.site-logo').css('margin-right', newval );
                } );
            } );

        //  =============================
        //  2.7.3 - Logo Margin Left
        //  =============================

            wp.customize( 'dt_logo_margin_left', function( value ) {
                value.bind( function( newval ) {
                    $( '.site-logo-wrap').find('.site-logo').css('margin-left', newval );
                } );
            } );

        //  =============================
        //  2.7.4 - Logo Margin Top
        //  =============================

            wp.customize( 'dt_logo_margin_top', function( value ) {
                value.bind( function( newval ) {
                    $( '.site-logo-wrap').find('.site-logo').css('margin-top', newval );
                } );
            } );

        //  =============================
        //  2.7.5 - Primary Menu Height
        //  =============================

            wp.customize( 'dt_p_nav_height', function( value ) {
                value.bind( function( newval ) {
                    $( '#primary-nav').find('ul li a' ).css('height', newval );
                } );
            } );

        //  =============================
        //  2.7.6 - Primary Menu Line Height
        //  =============================

            wp.customize( 'dt_p_nav_line_height', function( value ) {
                value.bind( function( newval ) {
                    $( '#primary-nav').find('ul li a' ).css('line-height', newval );
                } );
            } );

        //  =============================
        //  2.7.7 - Primary Menu Padding Left Right
        //  =============================

            wp.customize( 'dt_p_nav_padding_left_right', function( value ) {
                value.bind( function( newval ) {
                    $( '#primary-nav').find('ul li' ).css('padding-right', newval).css('padding-left', newval );
                } );
            } );

        //  =============================
        //  2.7.8 - Header Logo Width
        //  =============================

            wp.customize( 'dt_header_logo_width', function( value ) {
                value.bind( function( newval ) {
                    $( '.site-logo-wrap').css('width', newval);
                } );
            } );

        //  =============================
        //  2.7.9 - Header Menu Width
        //  =============================

            wp.customize( 'dt_header_menu_width', function( value ) {
                value.bind( function( newval ) {
                    $( '#primary-nav').css('width', newval);
                } );
            } );

//  =============================
//  3.0 - Body
//  =============================

    //  =============================
    //  3.1 - Background Image
    //  =============================

        //  =============================
        //  3.1.1 - Background Image
        //  =============================

    //  =============================
    //  3.2 - Text Colors
    //  =============================

        //  =============================
        //  3.2.1 - Body Color
        //  =============================

            wp.customize( 'dt_body_color', function( value ) {
                value.bind( function( newval ) {
                    $( 'body' ).css('color', newval );
                } );
            } );

        //  =============================
        //  3.2.2 - h1 to h6 Color
        //  =============================

            wp.customize( 'dt_h1toh6_color', function( value ) {
                value.bind( function( newval ) {
                    $( 'h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6' ).css('color', newval );
                } );
            } );

        //  =============================
        //  3.2.3 - Link Color
        //  =============================

            wp.customize( 'dt_link_color', function( value ) {
                value.bind( function( newval ) {
                    $( 'body' ).find('a').css('color', newval );
                } );
            } );

        //  =============================
        //  3.2.4 - Link Hover Color
        //  =============================

            wp.customize( 'dt_link_hover', function( value ) {
                value.bind( function( newval ) {
                    $( 'body').find('a, a:visited').bind("mouseover", function(){
                        var color  = $(this).css("color");
                        $(this).css("color", newval);
                        $(this).bind("mouseout", function(){
                            $(this).css("color", color);
                        })
                    });
                } );
            } );

        //  =============================
        //  3.2.5 - Link Visited Color
        //  =============================

            wp.customize( 'dt_link_color', function( value ) {
                value.bind( function( newval ) {
                    $( 'body' ).find('a:visited').css('color', newval );
                } );
            } );

    //  =============================
    //  3.3 - Background Colors
    //  =============================

        //  =============================
        //  3.3.1 - Body Background Color
        //  =============================

            wp.customize( 'background_color', function( value ) {
                value.bind( function( newval ) {
                    $( 'body' ).css('background-color', newval );
                } );
            } );

        //  =============================
        //  3.3.2 - Content Box Background Color
        //  =============================

            wp.customize( 'dt_content_bg', function( value ) {
                value.bind( function( newval ) {
                    $( '.content-box, .content .entry, #geodir_content, .sidebar .widget, .geodir-content-right .geodir-company_info, .geodir_full_page .geodir-category-list-in, .geodir_full_page .geodir-loc-bar' ).css('background-color', newval );
                } );
            } );

        //  =============================
        //  3.3.3 - Content Box Border Color
        //  =============================

            wp.customize( 'dt_content_border', function( value ) {
                value.bind( function( newval ) {
                    $( '.content-box, .content .entry, #geodir_content, .sidebar .widget, .geodir-content-right .geodir-company_info, .geodir_full_page .geodir-category-list-in, .geodir_full_page .geodir-loc-bar' ).css('border-color', newval );
                } );
            } );

        //  =============================
        //  3.3.4 - Content Box Shadow Color
        //  =============================

            wp.customize( 'dt_content_shadow', function( value ) {
                value.bind( function( newval ) {
                    $( '.content-box, .content .entry, #geodir_content, .sidebar .widget, .geodir-content-right .geodir-company_info, .geodir_full_page .geodir-category-list-in, .geodir_full_page .geodir-loc-bar' ).css('box-shadow', newval );
                } );
            } );

    //  =============================
    //  3.4 - Typography
    //  =============================

        //  =============================
        //  3.4.1 - Font Family
        //  =============================

            wp.customize( 'dt_font_family', function( value ) {
                value.bind( function( newval ) {
                    $( 'body' ).css('font-family', newval );
                } );
            } );

        //  =============================
        //  3.4.2 - Font Size
        //  =============================

            wp.customize( 'dt_font_size', function( value ) {
                value.bind( function( newval ) {
                    $( 'body' ).css('font-size', newval );
                } );
            } );

        //  =============================
        //  3.4.3 - Line Height
        //  =============================

            wp.customize( 'dt_line_height', function( value ) {
                value.bind( function( newval ) {
                    $( 'body' ).css('line-height', newval );
                } );
            } );

    //  =============================
    //  3.5 - Spacing
    //  =============================

//  =============================
//  4.0 - Footer
//  =============================

    //  =============================
    //  4.1 - Text Colors
    //  =============================

        //  =============================
        //  4.1.1 - Text Color
        //  =============================

            wp.customize( 'dt_fw_text_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.footer-widgets' ).css('color', newval );
                } );
            } );

        //  =============================
        //  4.1.2 - h1 to h6 Color
        //  =============================

            wp.customize( 'dt_fw_h1toh6_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.footer-widgets h1, .footer-widgets .h1, .footer-widgets h2, .footer-widgets .h2, .footer-widgets h3, .footer-widgets .h3, .footer-widgets h4, .footer-widgets .h4, .footer-widgets h5, .footer-widgets .h5, .footer-widgets h6, .footer-widgets .h6' ).css('color', newval );
                } );
            } );

        //  =============================
        //  4.1.3 - Link Color
        //  =============================

            wp.customize( 'dt_fw_link_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.footer-widgets' ).find('a').css('color', newval );
                } );
            } );

        //  =============================
        //  4.1.4 - Link Hover Color
        //  =============================

            wp.customize( 'dt_fw_link_hover', function( value ) {
                value.bind( function( newval ) {
                    $( '.footer-widgets').find('a, a:visited').bind("mouseover", function(){
                        var color  = $(this).css("color");
                        $(this).css("color", newval);
                        $(this).bind("mouseout", function(){
                            $(this).css("color", color);
                        })
                    });
                } );
            } );

        //  =============================
        //  4.1.5 - Link Visited Color
        //  =============================

            wp.customize( 'dt_fw_link_visited', function( value ) {
                value.bind( function( newval ) {
                    $( '.footer-widgets' ).find('a:visited').css('color', newval );
                } );
            } );


    //  =============================
    //  4.2 - Background Colors
    //  =============================

        //  =============================
        //  4.2.1 - Footer Section Background Color
        //  =============================

            wp.customize( 'dt_fw_bg', function( value ) {
                value.bind( function( newval ) {
                    $( '.footer-widgets' ).css('background-color', newval );
                } );
            } );

        //  =============================
        //  4.2.2 - Footer Section Border Top Color
        //  =============================

            wp.customize( 'dt_fw_border_top_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.footer-widgets' ).css('border-top-color', newval );
                } );
            } );

        //  =============================
        //  4.2.3 - Footer Section Border Bottom Color
        //  =============================

            wp.customize( 'dt_fw_border_bottom_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.footer-widgets' ).css('border-bottom-color', newval );
                } );
            } );

        //  =============================
        //  4.2.4 - Footer Section Box Shadow Color
        //  =============================

    //  =============================
    //  4.3 - Typography
    //  =============================

    //  =============================
    //  4.4 - Spacing
    //  =============================


//  =============================
//  5.0 - Copyright
//  =============================

    //  =============================
    //  5.1 - Text Colors
    //  =============================

        //  =============================
        //  5.1.1 - Text Color
        //  =============================

            wp.customize( 'dt_copyright_text_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.copyright' ).css('color', newval );
                } );
            } );

        //  =============================
        //  5.1.2 - Link Color
        //  =============================

            wp.customize( 'dt_copyright_link_color', function( value ) {
                value.bind( function( newval ) {
                    $( '.copyright' ).find('a').css('color', newval );
                } );
            } );

        //  =============================
        //  5.1.3 - Link Hover Color
        //  =============================

            wp.customize( 'dt_copyright_link_hover', function( value ) {
                value.bind( function( newval ) {
                    $( '.copyright').find('a, a:visited').bind("mouseover", function(){
                        var color  = $(this).css("color");
                        $(this).css("color", newval);
                        $(this).bind("mouseout", function(){
                            $(this).css("color", color);
                        })
                    });
                } );
            } );

        //  =============================
        //  5.1.4 - Link Visited Color
        //  =============================

            wp.customize( 'dt_copyright_link_visited', function( value ) {
                value.bind( function( newval ) {
                    $( '.copyright' ).find('a:visited').css('color', newval );
                } );
            } );

    //  =============================
    //  5.2 - Background Colors
    //  =============================

        //  =============================
        //  5.2.1 - Copyright Section Background Color
        //  =============================

        wp.customize( 'dt_copyright_bg', function( value ) {
            value.bind( function( newval ) {
                $( '.copyright' ).css('background-color', newval );
            } );
        } );

        //  =============================
        //  5.2.2 - Copyright Section Border Color
        //  =============================

        wp.customize( 'dt_copyright_border_color', function( value ) {
            value.bind( function( newval ) {
                $( '.copyright' ).css('border-top-color', newval );
            } );
        } );

    //  =============================
    //  5.3 - Typography
    //  =============================

    //  =============================
    //  5.4 - Spacing
    //  =============================

        //  =============================
        //  5.4.1 - Copyright Padding Top
        //  =============================

        wp.customize( 'dt_copyright_padding_top', function( value ) {
            value.bind( function( newval ) {
                $( '.copyright .container' ).css('padding-top', newval );
            } );
        } );

        //  =============================
        //  5.4.2 - Copyright Padding Bottom
        //  =============================

        wp.customize( 'dt_copyright_padding_bottom', function( value ) {
            value.bind( function( newval ) {
                $( '.copyright .container' ).css('padding-bottom', newval );
            } );
        } );


} )( jQuery );