<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom_sweet
 */

get_header();
get_sidebar();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="col-lg-12">  <h2>Todos los productos:</h2>
			<?php
				$args = array(
				    'status' => 'publish',
				);
				$products = wc_get_products( $args );
	                foreach ($products as $product):
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
	                <?php    
	                endforeach;
	        ?>

			 


         </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
