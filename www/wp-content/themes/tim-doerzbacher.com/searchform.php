<?php


?><aside id="search-2" class="widget widget_search">
	<form role="search" method="get" id="searchform" class="searchform"
				action="<?php echo esc_url( home_url( '/' ) ) ?>">
		<div class="form-group">
			<label class="sr-only" for="s">Search for:</label>
			<input type="text" class="form-control"
						 placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ) ?>"
						 value="<?php echo get_search_query() ?>" name="s" id="s">
		</div>
		<div class="form-group">
			<input type="submit" class="form-control" id="searchsubmit"
						 value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">
		</div>
	</form>
</aside>
