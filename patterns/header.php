<?php
/**
 * Title: Header
 * Slug: kafco/header
 * Categories: header
 * Block Types: core/template-part/header
 */

$get_url = trailingslashit(get_template_directory_uri());

// $images = [
//     $get_url . "assets/image/logo-white.svg",
// ];

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"transparent","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide has-transparent-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"style":{"dimensions":{"minHeight":"0px"},"layout":{"selfStretch":"fixed","flexSize":"100%"}},"layout":{"type":"flex"}} -->
	<div class="wp-block-group" style="min-height:0px">
		<!-- wp:columns {"style":{"layout":{"selfStretch":"fixed","flexSize":"100%"}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:site-logo {"width":259} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.67%"} -->
			<div class="wp-block-column" style="flex-basis:66.67%">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
				<div class="wp-block-group"><!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a
								class="wp-block-button__link wp-element-button">Employee Login</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a
								class="wp-block-button__link wp-element-button">Customer Login</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- wp:polylang/language-switcher {"dropdown":false,"show_names":true,"show_flags":false,"hide_current":true} /-->

					<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
				<div class="wp-block-group">
					<!-- wp:navigation {"ref":43,"overlayBackgroundColor":"primary","overlayTextColor":"contrast"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->