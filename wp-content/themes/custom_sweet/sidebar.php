<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_sweet
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


<div class="col-lg-3">
	<img class="logo" src="http://www.stickpng.com/assets/images/580b57fbd9996e24bc43c0be.png">
	<br/><br/>
    <div class="list-group">
       <a href="/sweet/categoria-producto/dulces/" class="list-group-item">Dulces</a>
       <a href="/sweet/categoria-producto/postres/" class="list-group-item">Postres</a>
       <a href="/sweet/categoria-producto/helados/" class="list-group-item">Helados</a>
     </div>
</div>