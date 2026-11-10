<?php
/**
 * Taxonomy template for product_category
 */
get_header();

$current_term = get_queried_object();
$parent_term  = ( $current_term && $current_term->parent ) ? get_term( $current_term->parent, 'product_category' ) : null;

// Sibling / child terms for secondary filter row
if ( $current_term && $current_term->parent ) {
    $filter_root_id = $current_term->parent;
} elseif ( $current_term ) {
    $filter_root_id = $current_term->term_id;
} else {
    $filter_root_id = 0;
}

$child_terms = $filter_root_id ? get_terms( array(
    'taxonomy'   => 'product_category',
    'parent'     => $filter_root_id,
    'hide_empty' => false,
) ) : array();

$top_level_terms = get_terms( array(
    'taxonomy'   => 'product_category',
    'parent'     => 0,
    'hide_empty' => false,
) );
?>

<section class="products-hero d-flex align-items-center text-center text-white">
  <div class="container">
    <?php if ( $parent_term ) : ?>
      <p class="text-uppercase small mb-2 opacity-75"><?php echo esc_html( $parent_term->name ); ?></p>
    <?php endif; ?>
    <h1 class="display-5 fw-bold mb-2"><?php echo esc_html( $current_term->name ); ?></h1>
    <?php if ( ! empty( $current_term->description ) ) : ?>
      <p class="lead mb-0"><?php echo esc_html( $current_term->description ); ?></p>
    <?php endif; ?>
  </div>
</section>

<section class="products-archive py-5">
  <div class="container">

    <?php if ( ! empty( $top_level_terms ) && ! is_wp_error( $top_level_terms ) ) : ?>
      <div class="product-filter d-flex flex-wrap justify-content-center gap-2 mb-4">
        <a href="<?php echo esc_url( get_post_type_archive_link( 'product' ) ); ?>" class="btn btn-outline-dark rounded-pill">All Products</a>
        <?php foreach ( $top_level_terms as $term ) :
          $active = ( $term->term_id === $filter_root_id ) ? 'btn-dark' : 'btn-outline-dark';
        ?>
          <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="btn <?php echo esc_attr( $active ); ?> rounded-pill">
            <?php echo esc_html( $term->name ); ?>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if ( ! empty( $child_terms ) && ! is_wp_error( $child_terms ) ) : ?>
      <div class="product-subfilter d-flex flex-wrap justify-content-center gap-2 mb-5">
        <?php foreach ( $child_terms as $term ) :
          $active = ( $current_term && $term->term_id === $current_term->term_id ) ? 'btn-danger text-white' : 'btn-light';
        ?>
          <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="btn btn-sm <?php echo esc_attr( $active ); ?> rounded-pill">
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
      <p class="text-center text-muted">No products in this category yet.</p>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
