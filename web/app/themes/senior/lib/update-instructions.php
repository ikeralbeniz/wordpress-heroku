<?php
add_action( 'admin_menu', 'wheels_theme_update_add_page', 50 );


function wheels_theme_update_add_page() {

	add_theme_page( __( 'Update Instructions', 'wheels' ), __( 'Update Instructions', 'wheels' ), 'edit_theme_options', 'theme_update', 'wheels_update_render_page' );
}

function wheels_update_render_page() {

?>

	<br/>
	<br/>
	<hr/>
	<h1>If you are updating to version 1.2+ from 1.1+, these are the changes you need to do.</h1>
	<p>If this is your first install of Senior 1.2+ than all you need is to follow installation process <a href="<?php echo admin_url( 'admin.php?page=theme_activation_options' ); ?>">here</a>.</p>

	<hr/>
	<h2>Make any change to Theme Options (like temp change body width and bring it back later) and resave (This step is needed in order to regenerate the css file)</h2>

	Depending on which demo template you used to build your Home page, this is what you need to do:
	<hr/>
	<h2>Home page</h2>
	<ul style="list-style: disc; padding-left: 40px;">
		<li>Post Grid widget needs to be removed and inserted again. The best option would be to just add a new one bellow the current one and copy over the settings to the new Post Grid widget.
			Save post and make sure the grid is displaying correctly. If so just delete the old widget.</li>
		<li>Tabs widget is depricated and can't be used anymore. You need to switch Visual Composer to "Classic Mode". Search and replace vc_tabs with vc_tta_tabs and vc_tab with vc_tta_section.
			After that switch back VC builder, edit the Tabs widget and select "White" color</li>
	</ul>

	<hr/>
	<h2>Home 2 page</h2>
	<ul style="list-style: disc; padding-left: 40px;">
		<li>.sc-feature-box css class needs to be renamed to: .sc-feature-box .vc_column-inner (please note that there are 2 occurrences of this class)</li>
		<li>h2 About Senior Care: margin-bottom 35px to be added manually on the widget Headings / Design Tab / Heading Margins</li>
		<li>Staff Member Icons
			<ul style="list-style: disc; padding-left: 40px;">
				<li>Add this class to Icons container widget sc-staff-member-icons on Staff Members (on each member). After that Click on the cog icon in the top right corner of the Visual Composer Builder which say CSS and paste this code there:</li>
			</ul>
		</li>
	</ul>

	<pre>
	.sc-staff-member-icons {
		margin-top: -15px;
	}
	.sc-staff-member-icons .aio-icon {
		width: 1em;
		height: 1em;
	}
	</pre>

	<hr/>
	<h2>Footer Social Icons (this applies to both Home and Home 2)</h2>
	<ul style="list-style: disc; padding-left: 40px;">
		<li>Add this class to Icons container widget sc-footer-social-icons. After that Click on the cog icon in the top right corner of the Visual Composer Builder which say CSS and paste this code there:</li>
	</ul>

	<pre>
	.sc-footer-social-icons {
		margin-top: -15px;
	}
	.sc-footer-social-icons .aio-icon {
		width: 1em;
		height: 1em;
	}
	</pre>
<?php
}
