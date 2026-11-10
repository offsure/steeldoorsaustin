<?php
/**
 * Archive template for Service Areas
 */
get_header();
?>

<section class="service-area-hero text-white text-center">
  <div class="container">
    <p class="product-hero__eyebrow mb-3">Service Areas</p>
    <h1 class="product-hero__title mb-3">We Serve Austin &amp; the Central Texas Hill Country</h1>
    <p class="product-hero__subtitle mx-auto">Custom steel doors and windows installed across fifteen communities in and around Austin. Pick your city to see local project notes.</p>
  </div>
</section>

<section class="service-area-archive py-5">
  <div class="container">

    <?php if ( have_posts() ) : ?>
      <div class="row g-4">
        <?php while ( have_posts() ) : the_post();
          $tagline = get_field( 'area_tagline' );
        ?>
          <div class="col-lg-4 col-md-6">
            <a href="<?php the_permalink(); ?>" class="area-card text-decoration-none text-reset">
              <div class="area-card__media">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy' ) ); ?>
                <?php else : ?>
                  <div class="area-card__placeholder"></div>
                <?php endif; ?>
                <div class="area-card__overlay"></div>
                <div class="area-card__label">
                  <h2 class="h4 mb-0"><?php the_title(); ?></h2>
                  <span class="area-card__arrow">→</span>
                </div>
              </div>
              <?php if ( $tagline ) : ?>
                <p class="area-card__tagline mt-3 mb-0"><?php echo esc_html( wp_trim_words( $tagline, 22 ) ); ?></p>
              <?php endif; ?>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <p class="text-center text-muted">No service areas published yet.</p>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
