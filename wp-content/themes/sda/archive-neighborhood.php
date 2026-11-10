<?php
/**
 * Archive template for Neighborhoods — grouped by parent service area.
 */
get_header();

$areas = get_posts( array(
    'post_type'      => 'service_area',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
) );
?>

<section class="service-area-hero text-white text-center">
  <div class="container">
    <p class="product-hero__eyebrow mb-3">Neighborhoods</p>
    <h1 class="product-hero__title mb-3">Neighborhoods We Serve</h1>
    <p class="product-hero__subtitle mx-auto">Installation and service in dozens of neighborhoods across the Austin metro. Find your neighborhood below.</p>
  </div>
</section>

<section class="neighborhood-archive py-5">
  <div class="container">

    <?php if ( ! empty( $areas ) ) : foreach ( $areas as $area ) :
        $neighborhoods = new WP_Query( array(
            'post_type'      => 'neighborhood',
            'posts_per_page' => -1,
            'orderby'        => 'title',
            'order'          => 'ASC',
            'meta_query'     => array(
                array(
                    'key'   => 'parent_area',
                    'value' => $area->ID,
                ),
            ),
        ) );

        if ( ! $neighborhoods->have_posts() ) {
            continue;
        }
    ?>
      <div class="nbh-city-group mb-5">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-2 mb-3 pb-2 border-bottom">
          <h2 class="h4 mb-0">
            <a href="<?php echo esc_url( get_permalink( $area ) ); ?>" class="text-reset text-decoration-none">
              <?php echo esc_html( $area->post_title ); ?>
            </a>
          </h2>
          <a href="<?php echo esc_url( get_permalink( $area ) ); ?>" class="small text-danger text-decoration-none fw-semibold">
            View <?php echo esc_html( $area->post_title ); ?> page &rarr;
          </a>
        </div>

        <div class="row g-3">
          <?php while ( $neighborhoods->have_posts() ) : $neighborhoods->the_post();
            $tagline = get_field( 'nbh_tagline' );
          ?>
            <div class="col-lg-4 col-md-6">
              <a href="<?php the_permalink(); ?>" class="nbh-card text-decoration-none text-reset">
                <div class="nbh-card__inner">
                  <div class="nbh-card__title-row">
                    <h3 class="nbh-card__title mb-0"><?php the_title(); ?></h3>
                    <span class="nbh-card__arrow">→</span>
                  </div>
                  <?php if ( $tagline ) : ?>
                    <p class="nbh-card__tagline mb-0"><?php echo esc_html( wp_trim_words( $tagline, 22 ) ); ?></p>
                  <?php endif; ?>
                </div>
              </a>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
    <?php endforeach; endif; ?>

  </div>
</section>

<?php get_footer(); ?>
