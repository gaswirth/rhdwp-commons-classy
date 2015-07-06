<?php
/**
 * Roundhouse Designs
 *
 * Custom Search Form
 *
 * @package WordPress
 * @subpackage rhd
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url('/') ); ?>">
    <div>
        <input type="text" value="" class="search-field" placeholder="I'm looking for..." name="s" />
        <input type="submit" class="search-submit" value="Search" />
    </div>
</form>
