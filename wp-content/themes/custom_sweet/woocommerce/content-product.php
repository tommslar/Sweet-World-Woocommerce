<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

global $product;

?>

    <div class="card mt-4">
       <img class="card-img-top img-fluid" src=<?php echo $product->get_image('view'); ?>
       <div class="card-body">
        <h3 class="card-title"><?php echo $product->get_name() ?></h3>
        <h4>$ <?php echo $product->get_price(); ?></h4>
        <p class="card-text"><?php echo $product->get_description()  ?></p>
        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
        4.0 stars
        <br/><br/>
        <a class="btn btn-success" href=<?php echo $product->add_to_cart_url() ?> role="button">Agregar al carrito</a>
       </div>
    </div>
    <!-- /.card -->



