<?php
/**
 * Title: Footer
 * Slug: kafco/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */

 $get_url = trailingslashit(get_template_directory_uri());

 $images = [
     $get_url . "assets/image/logo.svg",
 ];

?>


<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"transparent","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide has-transparent-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:columns {"style":{"layout":{"selfStretch":"fixed","flexSize":"100%"}}} -->
    <div class="wp-block-columns">
        <!-- wp:column {"width":"33.33%","metadata":{"name":"Contact Info"},"className":"contact-info"} -->
        <div class="wp-block-column contact-info" style="flex-basis:33.33%">
            <!-- wp:ourblocktheme/genericheading {"text":"Kuwait Aviation Fuelling Company (KAFCO)","size":"small"} -->
            <p class="wp-block-ourblocktheme-genericheading headline headline--small  text--white">Kuwait Aviation
                Fuelling Company (KAFCO)</p>
            <!-- /wp:ourblocktheme/genericheading -->

            <!-- wp:group {"style":{"dimensions":{"minHeight":"0px"},"layout":{"selfStretch":"fixed","flexSize":"100%"}},"layout":{"type":"flex"}} -->
            <div class="wp-block-group" style="min-height:0px">
                <!-- wp:group {"style":{"dimensions":{"minHeight":"0px"},"layout":{"selfStretch":"fixed","flexSize":"100%"}},"layout":{"type":"flex"}} -->
                <div class="wp-block-group" style="min-height:0px"></div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
                <div class="wp-block-group"><!-- wp:image {"id":192,"sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full"><img
                            src="http://localhost/blocktheme/wp-content/uploads/2024/04/phone-call.png" alt=""
                            class="wp-image-192" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:ourblocktheme/genericheading {"text":"Tel : +(965) 1835000 / 23828000","size":"small"} -->
                    <p class="wp-block-ourblocktheme-genericheading headline headline--small  text--white">Tel : +(965)
                        1835000 / 23828000</p>
                    <!-- /wp:ourblocktheme/genericheading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"66.67%","metadata":{"name":"Footer Links"},"className":"footer-links"} -->
        <div class="wp-block-column footer-links" style="flex-basis:66.67%">
            <!-- wp:group {"metadata":{"name":"Imoportant Links"},"style":{"dimensions":{"minHeight":"0px"},"layout":{"selfStretch":"fixed","flexSize":"100%"}},"className":"important-links","layout":{"type":"flex"}} -->
            <div class="wp-block-group important-links" style="min-height:0px">
                <!-- wp:ourblocktheme/genericheading {"text":"important Links","size":"medium"} -->
                <h3 class="wp-block-ourblocktheme-genericheading headline headline--medium  text--white">important Links
                </h3>
                <!-- /wp:ourblocktheme/genericheading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":"Contact Us"},"style":{"dimensions":{"minHeight":"0px"},"layout":{"selfStretch":"fixed","flexSize":"100%"}},"className":"contact-us","layout":{"type":"flex"}} -->
            <div class="wp-block-group contact-us" style="min-height:0px">
                <!-- wp:ourblocktheme/genericheading {"text":"Connect with Us","size":"medium"} -->
                <h3 class="wp-block-ourblocktheme-genericheading headline headline--medium  text--white">Connect with Us
                </h3>
                <!-- /wp:ourblocktheme/genericheading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"66.67%","metadata":{"name":"Footer Logos"},"className":"footer-logos"} -->
        <div class="wp-block-column footer-logos" style="flex-basis:66.67%">
            <!-- wp:ourblocktheme/genericheading {"text":"International Affiliations \u0026amp; Certificates","size":"small"} -->
            <p class="wp-block-ourblocktheme-genericheading headline headline--small  text--white">International
                Affiliations &amp; Certificates</p>
            <!-- /wp:ourblocktheme/genericheading -->

            <!-- wp:group {"metadata":{"name":""},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":167,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img
                        src="http://localhost/blocktheme/wp-content/uploads/2024/04/rospa-logo.png" alt=""
                        class="wp-image-167" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":167,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img
                        src="http://localhost/blocktheme/wp-content/uploads/2024/04/rospa-logo.png" alt=""
                        class="wp-image-167" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":167,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img
                        src="http://localhost/blocktheme/wp-content/uploads/2024/04/rospa-logo.png" alt=""
                        class="wp-image-167" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#161720"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-background" style="background-color:#161720">
    <!-- wp:ourblocktheme/genericheading {"text":"Copyright © 2024 Kuwait Aviation Fuelling Company (KAFCO)","size":"small","className":"headline\u002d\u002dsmalltext\u002d\u002dwhite"} -->
    <p class="wp-block-ourblocktheme-genericheading headline headline--small  text--white headline--smalltext--white">
        Copyright © 2024 Kuwait Aviation Fuelling Company (KAFCO)</p>
    <!-- /wp:ourblocktheme/genericheading -->

    <!-- wp:ourblocktheme/genericheading {"text":"Website Terms of Use and Conditions","size":"small","className":"headline\u002d\u002dsmalltext\u002d\u002dwhite"} -->
    <p class="wp-block-ourblocktheme-genericheading headline headline--small  text--white headline--smalltext--white">
        Website Terms of Use and Conditions</p>
    <!-- /wp:ourblocktheme/genericheading -->
</div>
<!-- /wp:group -->