/**
 * @todo findout what we are doing about account mobile menu, using GD or building our own.
 */
jQuery(document).ready(function ($) {

    var $dt_menuright = jQuery("#primary-nav");
    $dt_menuright.mmenu({
        offCanvas: {
            position: "right"
        }
    }, {
        clone: 1
    }); // clone it so we can do responsive


    // if the location switcher present then make it swap the switcher to the correct position when open
    if (jQuery('#menu-item-gd-location-switcher').length) {
        jQuery('#mm-primary-nav').on(
            "opened.mm",
            function () {
                jQuery("#menu-item-gd-location-switcher:first .geodir_location_tab_container").detach().appendTo('#mm-primary-nav .gd-location-switcher-menu-item');
                jQuery('#mm-primary-nav .geodir_location_tab_container.mm-panel').remove();
            }
        );

        jQuery('#mm-primary-nav').on(
            "closed.mm",
            function () {
                jQuery("#mm-primary-nav .geodir_location_tab_container").detach().appendTo('#menu-item-gd-location-switcher:first .gd-location-switcher-menu-item');
            }
        );
    }


    if (jQuery('#gd-account-nav').length) {
        var $dt_menuleft = jQuery("#gd-account-nav");
        $dt_menuleft.mmenu({}, {});
    }
});