<?php
/* Template Name: Homepage */
get_header();
?>

<!-- Hero Section -->
<?php 
$hero_bg = get_field('hero_background'); 
$bg_url  = $hero_bg ? esc_url($hero_bg['url']) : '';
?>
<section class="hero-section d-flex align-items-center text-center text-white" style="background-image: url('<?php echo $bg_url; ?>');">
  <div class="container">
    <h1 class="display-5 fw-bold mb-3"><?php the_field('hero_title'); ?></h1>
    <p class="lead"><?php the_field('hero_subtitle'); ?></p>
    <?php 
    $btn = get_field('hero_button_link'); 
    if ($btn): ?>
      <a href="<?php echo esc_url($btn['url']); ?>" class="btn btn-danger btn-lg">
        <?php the_field('hero_button_text'); ?>
      </a>
    <?php endif; ?>
  </div>
</section>



<!-- About Section -->
<section id="about" class="py-5 bg-body-tertiary">
  <div class="container">
    <div class="row g-4 align-items-center">

      <!-- Image -->
      <div class="col-lg-5">
        <div class="ratio ratio-4x3 rounded-3 overflow-hidden shadow">
          <?php 
          $about_img = get_field('about_image'); 
          if( $about_img ): ?>
            <img src="<?php echo esc_url( is_array($about_img) ? $about_img['url'] : $about_img ); ?>" 
                 alt="<?php echo is_array($about_img) ? esc_attr($about_img['alt']) : 'Steel door'; ?>" 
                 class="w-100 h-100 object-fit-cover img-fluid">
          <?php endif; ?>
        </div>
      </div>

      <div class="col-lg-1"></div>

      <!-- Content -->
      <div class="col-lg-6">
        <h2 class="h3 mb-3"><?php the_field('about_hd'); ?></h2>
        <div><?php the_field('about_content'); ?></div>
        <?php if( get_field('about_btn_text') && get_field('about_btn_link') ): ?>
          <a href="<?php the_field('about_btn_link'); ?>" class="btn btn-danger">
            <?php the_field('about_btn_text'); ?>
          </a>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>



<!-- Services Section -->
  <section id="services" class="py-5">
    <div class="container">
      <h2 class="text-center h3 mb-4">Our Steel Door Services</h2>
      <div class="row g-4">
        <div class="col-6 col-md-3">
           <div class="service-card card h-100 text-center">
    <?php 
    $image = get_field('residential_img'); 
    $title = get_field('residential_txt'); 
    ?>

    <?php if( $image ): ?>
        <img class="card-img-top" 
             src="<?php echo esc_url($image['url']); ?>" 
             alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <div class="card-body">
        <?php if( $title ): ?>
            <h3 class="h6 mb-0"><?php echo esc_html($title); ?></h3>
        <?php endif; ?>
    </div>
</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="service-card card h-100 text-center">
    <?php 
    $image = get_field('iron_img'); 
    $title = get_field('iron_txt'); 
    ?>

    <?php if( $image ): ?>
        <img class="card-img-top" 
             src="<?php echo esc_url($image['url']); ?>" 
             alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <div class="card-body">
        <?php if( $title ): ?>
            <h3 class="h6 mb-0"><?php echo esc_html($title); ?></h3>
        <?php endif; ?>
    </div>
</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="service-card card h-100 text-center">
    <?php 
    $image = get_field('oversized_img'); 
    $title = get_field('oversized_txt'); 
    ?>

    <?php if( $image ): ?>
        <img class="card-img-top" 
             src="<?php echo esc_url($image['url']); ?>" 
             alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <div class="card-body">
        <?php if( $title ): ?>
            <h3 class="h6 mb-0"><?php echo esc_html($title); ?></h3>
        <?php endif; ?>
    </div>
</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="service-card card h-100 text-center">
    <?php 
    $image = get_field('patio_img'); 
    $title = get_field('patio_txt'); 
    ?>

    <?php if( $image ): ?>
        <img class="card-img-top" 
             src="<?php echo esc_url($image['url']); ?>" 
             alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <div class="card-body">
        <?php if( $title ): ?>
            <h3 class="h6 mb-0"><?php echo esc_html($title); ?></h3>
        <?php endif; ?>
    </div>
</div>
        </div>
      </div>
    </div>
  </section>

<!-- Products Section -->
<section id="products" class="py-5 bg-body-tertiary">
  <div class="container">
    <h2 class="text-center h3 mb-2">Our Products</h2>
    <p class="text-center text-muted mb-5">Browse our full catalog of steel doors, windows, and product options.</p>

    <?php
    $parent_terms = get_terms( array(
        'taxonomy'   => 'product_category',
        'parent'     => 0,
        'hide_empty' => false,
        'orderby'    => 'term_id',
        'order'      => 'ASC',
    ) );

    if ( ! empty( $parent_terms ) && ! is_wp_error( $parent_terms ) ) :
        foreach ( $parent_terms as $parent_term ) :
            $products = new WP_Query( array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC',
                'tax_query'      => array(
                    array(
                        'taxonomy'         => 'product_category',
                        'field'            => 'term_id',
                        'terms'            => $parent_term->term_id,
                        'include_children' => true,
                    ),
                ),
            ) );

            if ( ! $products->have_posts() ) {
                continue;
            }
    ?>
      <div class="home-product-group mb-5">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-2 mb-3">
          <h3 class="h5 mb-0"><?php echo esc_html( $parent_term->name ); ?></h3>
          <a href="<?php echo esc_url( get_term_link( $parent_term ) ); ?>" class="small fw-semibold text-danger text-decoration-none">
            View All <?php echo esc_html( $parent_term->name ); ?> &rarr;
          </a>
        </div>

        <div class="row g-3">
          <?php while ( $products->have_posts() ) : $products->the_post(); ?>
            <div class="col-6 col-md-4 col-lg-3">
              <a href="<?php the_permalink(); ?>" class="product-card card h-100 text-decoration-none text-reset">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'medium', array( 'class' => 'card-img-top', 'loading' => 'lazy' ) ); ?>
                <?php else : ?>
                  <div class="product-card__placeholder"></div>
                <?php endif; ?>
                <div class="card-body">
                  <h4 class="h6 mb-0"><?php the_title(); ?></h4>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    <?php
            wp_reset_postdata();
        endforeach;
    endif;
    ?>

    <div class="text-center mt-4">
      <a href="<?php echo esc_url( get_post_type_archive_link( 'product' ) ); ?>" class="btn btn-danger btn-lg">
        View All Products
      </a>
    </div>
  </div>
</section>

<!-- Service Areas -->
<section id="area" class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <p class="section-eyebrow mb-1">Where We Work</p>
      <h2 class="h3 mb-2">Areas We Serve</h2>
      <p class="text-muted mb-0">Steel doors and windows installed across Austin and the surrounding Hill Country.</p>
    </div>

    <?php
    $areas = new WP_Query( array(
        'post_type'      => 'service_area',
        'posts_per_page' => 15,
        'orderby'        => 'title',
        'order'          => 'ASC',
    ) );

    if ( $areas->have_posts() ) : ?>
      <div class="row g-3 home-service-areas">
        <?php while ( $areas->have_posts() ) : $areas->the_post(); ?>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="<?php the_permalink(); ?>" class="home-area-card text-decoration-none text-reset">
              <div class="home-area-card__media">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'medium', array( 'loading' => 'lazy' ) ); ?>
                <?php else : ?>
                  <div class="home-area-card__placeholder"></div>
                <?php endif; ?>
                <div class="home-area-card__overlay"></div>
              </div>
              <div class="home-area-card__label">
                <span class="home-area-card__name"><?php the_title(); ?></span>
                <span class="home-area-card__arrow">→</span>
              </div>
            </a>
          </div>
        <?php endwhile;
        wp_reset_postdata();
        ?>
      </div>

      <div class="text-center mt-5">
        <a href="<?php echo esc_url( get_post_type_archive_link( 'service_area' ) ); ?>" class="btn btn-outline-dark rounded-pill">
          View All Service Areas
        </a>
      </div>
    <?php else : ?>
      <p class="text-center text-muted">Service areas will appear here after you publish them.</p>
    <?php endif; ?>
  </div>
</section>


<section class="faq-section py-5" id="faq">
  <div class="container">
    <h2 class="mb-4 text-center">FAQ</h2>

 <div class="accordion accordion-flush" id="faqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="q1">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="false" aria-controls="a1">
             How much does steel door installation cost in Austin?
            </button>
          </h2>
          <div id="a1" class="accordion-collapse collapse" aria-labelledby="q1" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Costs depend on the size, design, and hardware you select. Standard residential steel doors are generally more affordable, while oversized steel doors or custom iron front doors with glass and unique finishes can be higher. We provide a detailed quote after measurements so you know exactly what to expect.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="q2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false" aria-controls="a2">
              Can steel doors include glass panels?
            </button>
          </h2>
          <div id="a2" class="accordion-collapse collapse" aria-labelledby="q2" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
             Yes. Many of our designs, especially steel patio doors and decorative iron front doors, feature tempered or insulated glass for style, light, and energy efficiency—without compromising security.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="q3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3" aria-expanded="false" aria-controls="a3">
              What kind of maintenance do steel doors need?
            </button>
          </h2>
          <div id="a3" class="accordion-collapse collapse" aria-labelledby="q3" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
             They’re very low-maintenance. A simple wipe-down keeps them clean, and checking the hinges and hardware every so often ensures everything stays smooth. Even large oversized steel doors require minimal upkeep.
            </div>
          </div>
        </div>
      </div>
  </div>
</section>





<?php
// Contact Section + Footer in PHP
?>

<!-- Contact -->
<section id="contact" class="py-5 bg-body-tertiary">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="ratio ratio-4x3 rounded-3 overflow-hidden shadow-sm">
          <iframe src="https://www.google.com/maps?q=Austin%20TX&output=embed" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card border-0">
          <div class="card-body p-4">
            <h2 class="h4 mb-3">Get a Free Quote Today</h2>
<?php echo do_shortcode('[contact-form-7 id="4b12459" title="Contact form 1"]'); ?>

            <?php
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
