<?php
/**
 * Single template for Neighborhoods
 */
get_header();

while ( have_posts() ) : the_post();
    $tagline   = get_field( 'nbh_tagline' );
    $parent_id = get_field( 'parent_area' );
    $parent    = $parent_id ? get_post( $parent_id ) : null;
?>

<!-- Hero -->
<section class="service-area-hero text-white text-center">
  <div class="container">
    <p class="product-hero__eyebrow mb-3">
      <?php if ( $parent ) : ?>
        <?php echo esc_html( $parent->post_title ); ?> Neighborhood
      <?php else : ?>
        Neighborhood
      <?php endif; ?>
    </p>
    <h1 class="product-hero__title mb-3">Steel Doors &amp; Windows in <?php the_title(); ?><?php echo $parent ? ', ' . esc_html( $parent->post_title ) : ''; ?>, TX</h1>
    <?php if ( $tagline ) : ?>
      <p class="product-hero__subtitle mx-auto"><?php echo esc_html( $tagline ); ?></p>
    <?php endif; ?>

    <nav aria-label="breadcrumb" class="product-hero__breadcrumb mt-4">
      <ol class="breadcrumb justify-content-center small mb-0">
        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo esc_url( get_post_type_archive_link( 'service_area' ) ); ?>">Service Areas</a></li>
        <?php if ( $parent ) : ?>
          <li class="breadcrumb-item"><a href="<?php echo esc_url( get_permalink( $parent ) ); ?>"><?php echo esc_html( $parent->post_title ); ?></a></li>
        <?php endif; ?>
        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
      </ol>
    </nav>
  </div>
</section>

<!-- Content -->
<section class="service-area-detail py-5">
  <div class="container">
    <div class="row g-5">

      <div class="col-lg-8">
        <div class="product-body"><?php the_content(); ?></div>

        <?php if ( $parent ) : ?>
          <div class="nbh-parent-callout mt-4">
            <p class="section-eyebrow mb-1">Looking Broader?</p>
            <p class="mb-2">See the full overview of our work across <?php echo esc_html( $parent->post_title ); ?>.</p>
            <a href="<?php echo esc_url( get_permalink( $parent ) ); ?>" class="btn btn-outline-dark rounded-pill">
              Explore <?php echo esc_html( $parent->post_title ); ?> &rarr;
            </a>
          </div>
        <?php endif; ?>

        <div class="mt-5">
          <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-danger btn-lg">
            Get a Free Quote in <?php the_title(); ?>
          </a>
        </div>
      </div>

      <aside class="col-lg-4">
        <div class="service-area-sidebar">
          <h2 class="product-section-heading mb-3">Popular Products</h2>
          <ul class="service-area-products list-unstyled mb-0">
            <?php
            $products = get_posts( array(
                'post_type'      => 'product',
                'posts_per_page' => 6,
                'orderby'        => 'rand',
            ) );
            foreach ( $products as $product ) : ?>
              <li class="d-flex align-items-center gap-3 py-2 border-bottom">
                <?php if ( has_post_thumbnail( $product ) ) : ?>
                  <?php echo get_the_post_thumbnail( $product, array( 56, 56 ), array( 'class' => 'rounded', 'loading' => 'lazy', 'style' => 'object-fit: cover; width: 56px; height: 56px;' ) ); ?>
                <?php endif; ?>
                <a href="<?php echo esc_url( get_permalink( $product ) ); ?>" class="text-reset text-decoration-none small fw-semibold flex-grow-1">
                  <?php echo esc_html( get_the_title( $product ) ); ?>
                </a>
                <span class="text-muted small">→</span>
              </li>
            <?php endforeach;
            wp_reset_postdata();
            ?>
          </ul>
        </div>
      </aside>

    </div>
  </div>
</section>

<?php
// Sibling neighborhoods in same city
if ( $parent ) :
    $siblings = new WP_Query( array(
        'post_type'      => 'neighborhood',
        'posts_per_page' => 6,
        'post__not_in'   => array( get_the_ID() ),
        'orderby'        => 'rand',
        'meta_query'     => array(
            array(
                'key'   => 'parent_area',
                'value' => $parent->ID,
            ),
        ),
    ) );

    if ( $siblings->have_posts() ) : ?>
      <section class="related-areas py-5 bg-body-tertiary">
        <div class="container">
          <div class="text-center mb-5">
            <p class="section-eyebrow mb-1">Also in <?php echo esc_html( $parent->post_title ); ?></p>
            <h2 class="h3 mb-0">Nearby Neighborhoods</h2>
          </div>
          <div class="row g-3">
            <?php while ( $siblings->have_posts() ) : $siblings->the_post(); ?>
              <div class="col-lg-2 col-md-4 col-6">
                <a href="<?php the_permalink(); ?>" class="related-area-chip">
                  <span class="related-area-chip__name"><?php the_title(); ?></span>
                  <span class="related-area-chip__arrow">→</span>
                </a>
              </div>
            <?php endwhile; ?>
          </div>
          <div class="text-center mt-4">
            <a href="<?php echo esc_url( get_permalink( $parent ) ); ?>" class="btn btn-outline-dark rounded-pill">
              View All of <?php echo esc_html( $parent->post_title ); ?>
            </a>
          </div>
        </div>
      </section>
    <?php endif;
    wp_reset_postdata();
endif;
?>

<?php endwhile; ?>

<?php get_footer(); ?>
