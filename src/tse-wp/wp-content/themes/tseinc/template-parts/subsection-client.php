<?php
/**
 * "Featurette" section
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TSE
 */
?>

<?php
  $align = $args['align'] == 'left' ? 'left' : 'right';
  $primary_order = ( $args['align'] == 'right' ? 1 : 2 );
  $title_order = 3 - $primary_order;

?>

<section id="<?php echo $args['title_id'] ?>" class="featurette">
  <div class="separator separator-transparent"></div>
  <div class="subsection section-header">
    <div class="container">
      <div class="row">
        <div class="col-12">
        </div>
      </div>
    </div>
  </div>

  <div class="subsection section-body">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-5 order-<?php echo $title_order ?>">
          <div class="featurette-detail mobile-hide">
            <div class="subsection-<?php echo $align; ?> subsection-sm section-header">
              <h1><?php echo $args['title'] ?></h1>
              <h4><?php echo $args['subtitle'] ?></h4>
              <h4><small class="text-muted"><?php echo $args['detail'] ?></small></h4>
            </div>

            <div class="subsection-<?php echo $align; ?> subsection-sm section-body">
              <?php echo $args['excerpt'] ?>
            </div>

            <div class="subsection-<?php echo $align; ?> subsection-sm section-footer"></div>
          </div>

          <div class="featurette-detail mobile-only">
            <div class="subsection subsection-sm section-header">
              <h1><?php echo $args['title'] ?></h1>
              <h4><?php echo $args['subtitle'] ?></h4>
              <h4><small class="text-muted"><?php echo $args['detail'] ?></small></h4>
            </div>

            <div class="subsection subsection-sm section-body">
              <?php echo $args['excerpt'] ?>
            </div>

            <div class="subsection subsection-sm section-footer"></div>
          </div>
        </div>

        <div class="col-12 col-md-7 <?php echo $primary_order ?>">
          <div class="featurette-detail featurette-alt">
            <div class="subsection subsection-sm section-body">
                <?php echo $args['content'] ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="subsection section-footer"></div>
  <div class="separator separator-transparent"></div>
</section>
