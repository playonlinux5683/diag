<form role="search" method="get" class="searchform input-group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" value="Search" onfocus="if (this.value == 'Search') {
                this.value = '';
            }" onblur="if (this.value == '') {
                        this.value = 'Search';
                    }" name="s" id="search" class="form-control" />
	<span class="input-group-btn">
		<button type="submit" id="searchsubmit" value="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
	</span>
</form>
<div class="clear"></div>
