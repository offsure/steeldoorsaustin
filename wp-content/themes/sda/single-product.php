<?php
/**
 * Single template for Products
 */
get_header();

while ( have_posts() ) : the_post();

    $gallery  = get_field( 'product_gallery' );
    $specs    = get_field( 'product_specs' );
    $cta_text = get_field( 'product_cta_text' );
    $cta_link = get_field( 'product_cta_link' );
    $short    = get_field( 'product_short_desc' );
    $cats     = get_the_terms( get_the_ID(), 'product_category' );

    $primary_cat = null;
    $parent_cat  = null;
    if ( $cats && ! is_wp_error( $cats ) ) {
        foreach ( $cats as $c ) {
            if ( $c->parent == 0 ) {
                $parent_cat = $c;
            } else {
                $primary_cat = $c;
            }
        }
        if ( ! $parent_cat )  { $parent_cat  = $primary_cat; }
        if ( ! $primary_cat ) { $primary_cat = $parent_cat; }
    }
?>

<!-- Product Hero -->
<section class="product-hero text-white text-center">
  <div class="container">
    <?php if ( $parent_cat ) : ?>
      <p class="product-hero__eyebrow mb-3"><?php echo esc_html( $parent_cat->name ); ?></p>
    <?php endif; ?>
    <h1 class="product-hero__title mb-3"><?php the_title(); ?></h1>
    <?php if ( $short ) : ?>
      <p class="product-hero__subtitle mx-auto"><?php echo esc_html( $short ); ?></p>
    <?php endif; ?>

    <nav aria-label="breadcrumb" class="product-hero__breadcrumb mt-4">
      <ol class="breadcrumb justify-content-center small mb-0">
        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo esc_url( get_post_type_archive_link( 'product' ) ); ?>">Products</a></li>
        <?php if ( $parent_cat ) : ?>
          <li class="breadcrumb-item"><a href="<?php echo esc_url( get_term_link( $parent_cat ) ); ?>"><?php echo esc_html( $parent_cat->name ); ?></a></li>
        <?php endif; ?>
        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
      </ol>
    </nav>
  </div>
</section>

<!-- Product Detail -->
<section class="product-detail py-5">
  <div class="container">
    <div class="row g-5">

      <!-- Gallery -->
      <div class="col-lg-7">
        <?php
        $images = array();
        if ( has_post_thumbnail() ) {
            $images[] = array(
                'url' => get_the_post_thumbnail_url( get_the_ID(), 'large' ),
                'alt' => get_the_title(),
            );
        }
        if ( ! empty( $gallery ) && is_array( $gallery ) ) {
            foreach ( $gallery as $img ) {
                $images[] = array(
                    'url' => $img['sizes']['large'] ?? $img['url'],
                    'alt' => $img['alt'] ?: get_the_title(),
                );
            }
        }
        ?>

        <?php if ( ! empty( $images ) ) : ?>
          <div class="product-main-image mb-3">
            <img id="productMainImage" src="<?php echo esc_url( $images[0]['url'] ); ?>" alt="<?php echo esc_attr( $images[0]['alt'] ); ?>">
          </div>

          <?php if ( count( $images ) > 1 ) : ?>
            <div class="product-thumbs d-flex flex-wrap gap-2">
              <?php foreach ( $images as $i => $img ) : ?>
                <button type="button" class="product-thumb<?php echo $i === 0 ? ' is-active' : ''; ?>" data-full="<?php echo esc_url( $img['url'] ); ?>" aria-label="View image <?php echo $i + 1; ?>">
                  <img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>">
                </button>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        <?php else : ?>
          <div class="product-card__placeholder rounded-3"></div>
        <?php endif; ?>
      </div>

      <!-- Details -->
      <div class="col-lg-5">
        <div class="product-body"><?php the_content(); ?></div>

        <?php if ( $specs && is_array( $specs ) ) : ?>
          <div class="product-specs-wrap mt-4">
            <h2 class="product-section-heading">Specifications</h2>
            <table class="table table-sm product-specs mb-4">
              <tbody>
                <?php foreach ( $specs as $row ) : ?>
                  <tr>
                    <th scope="row" class="w-50"><?php echo esc_html( $row['label'] ); ?></th>
                    <td><?php echo esc_html( $row['value'] ); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php endif; ?>

        <?php if ( $cta_text && $cta_link ) : ?>
          <div class="product-cta mt-4">
            <a href="<?php echo esc_url( $cta_link ); ?>" class="btn btn-danger btn-lg w-100 w-sm-auto">
              <?php echo esc_html( $cta_text ); ?>
            </a>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<?php
// Related products
if ( $parent_cat ) :
    $related = new WP_Query( array(
        'post_type'      => 'product',
        'posts_per_page' => 4,
        'post__not_in'   => array( get_the_ID() ),
        'tax_query'      => array(
            array(
                'taxonomy'         => 'product_category',
                'field'            => 'term_id',
                'terms'            => $parent_cat->term_id,
                'include_children' => true,
            ),
        ),
    ) );

    if ( $related->have_posts() ) : ?>
      <section class="related-products py-5 bg-body-tertiary">
        <div class="container">
          <div class="text-center mb-5">
            <p class="section-eyebrow mb-1">More From <?php echo esc_html( $parent_cat->name ); ?></p>
            <h2 class="h3 mb-0">You may also like</h2>
          </div>
          <div class="row g-4">
            <?php while ( $related->have_posts() ) : $related->the_post(); ?>
              <div class="col-6 col-md-3">
                <a href="<?php the_permalink(); ?>" class="product-card card h-100 text-decoration-none text-reset">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium', array( 'class' => 'card-img-top', 'loading' => 'lazy' ) ); ?>
                  <?php else : ?>
                    <div class="product-card__placeholder"></div>
                  <?php endif; ?>
                  <div class="card-body">
                    <h3 class="h6 mb-0"><?php the_title(); ?></h3>
                  </div>
                </a>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </section>
    <?php endif;
    wp_reset_postdata();
endif;
?>

<script>
(function(){
  var thumbs = document.querySelectorAll('.product-thumb');
  var main   = document.getElementById('productMainImage');
  if ( !thumbs.length || !main ) return;
  thumbs.forEach(function(btn){
    btn.addEventListener('click', function(){
      main.src = btn.getAttribute('data-full');
      thumbs.forEach(function(b){ b.classList.remove('is-active'); });
      btn.classList.add('is-active');
    });
  });
})();
</script>

<?php endwhile; ?>

<?php get_footer(); ?>
