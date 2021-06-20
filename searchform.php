<?php
/**
 * Created by PhpStorm.
 * User: e.kvasnyi
 * Date: 15.07.2018
 * Time: 19:06
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="search-field" placeholder="<?php echo esc_attr__( 'Search...', 'beautytemple' ) ?>"
           value="<?php echo get_search_query() ?>" name="s"
           title="<?php echo esc_attr__( 'Search for:', 'beautytemple' ) ?>"/>
    <input type="submit" class="search-submit" value="<?php echo esc_attr__( 'Search', 'beautytemple' ) ?>"/>
</form>