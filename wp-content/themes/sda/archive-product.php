<?php
/**
 * Archive template for Products
 */
get_header();

$top_level_terms = get_terms( array(
    'taxonomy'   => 'product_category',
    'parent'     => 0,
    'hide_empty' => false,
) );
?>

<section class="products-hero d-flex align-items-center text-center text-white">
  <div class="container">
    <h1 class="display-5 fw-bold mb-2">All Products</h1>
    <p class="lead mb-0">Browse our complete catalog of steel doors, windows, and options.</p>
  </div>
</section>

<section class="products-archive py-5">
  <div class="container">

    <?php if ( ! empty( $top_level_terms ) && ! is_wp_error( $top_level_terms ) ) : ?>
      <div class="product-filter d-flex flex-wrap justify-content-center gap-2 mb-5">
        <a href="<?php echo esc_url( get_post_type_archive_link( 'product' ) ); ?>" class="btn btn-dark rounded-pill">All Products</a>
        <?php foreach ( $top_level_terms as $term ) : ?>
          <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="btn btn-outline-dark rounded-pill">
            <?php echo esc_html( $term->name ); ?>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if ( have_posts() ) : ?>
      <div class="row g-4">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="col-6 col-md-4 col-lg-3">
            <a href="<?php the_permalink(); ?>" class="product-card card h-100 text-decoration-none text-reset">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium_large', array( 'class' => 'card-img-top', 'loading' => 'lazy' ) ); ?>
              <?php else : ?>
                <div class="product-card__placeholder"></div>
              <?php endif; ?>
              <div class="card-body">
                <h3 class="h6 mb-1"><?php the_title(); ?></h3>
                <?php $short = get_field( 'product_short_desc' ); if ( $short ) : ?>
                  <p class="small text-muted mb-0"><?php echo esc_html( wp_trim_words( $short, 18 ) ); ?></p>
                <?php endif; ?>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      </div>

      <div class="d-flex justify-content-center mt-5">
        <?php the_posts_pagination( array(
          'mid_size'  => 1,
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;',
        ) ); ?>
      </div>

    <?php else : ?>
      <p class="text-center text-muted">No products have been added yet.</p>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
