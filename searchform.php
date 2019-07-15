<div class="header-top-search">
<form action="<?php site_url('/');?>"  method="get" >
    <input type="search" name="s" placeholder="<?php echo esc_attr_x('Search...', 'placeholder', 'carnews'); ?>" value="<?php echo get_search_query();?>">
    <button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>