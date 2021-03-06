<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage Cyrano
 * @since Cyrano 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div id="tertiary" class="sidebar-container" role="complementary">
					<div class="sidebar-inner">
						<div class="widget-area">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</div><!-- .widget-area -->
						<div style="clear:both"></div>
					</div><!-- .sidebar-inner -->
				</div><!-- #tertiary -->
<?php endif; ?>