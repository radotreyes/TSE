<?php
/**
 * Subsection component
 *
 * @param   subsection_align  : string
 * @param   project_client    : string
 * @param   project_title     : string
 * @param   project_loc       : string
 * @param   project_desc      : string
 * @param   project_btn       : string
 * @param   project_caption   : string
 *
 * @package TSE
 */
?>

<?php
  $graphic_order = ( $args['subsection_align'] == 'left' ? 1 : 2 );
  $detail_order = 3 - $graphic_order;
?>

<div class="subsection section-body">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5 order-md-<?php echo $graphic_order; ?>">
        <div class="featurette-graphic">
          <div class="subsection subsection-sm section-header mobile-only">
            <h1><?php echo $args['project_client']; ?></h1>
            <h4><?php echo $args['project_title']; ?></h4>
            <h4><small class="text-muted"><?php echo $args['project_loc']; ?></small></h4>
          </div>

          <div class="graphic-box-title graphic-cyan">
            <h1>a</h1>
          </div> <!-- .info-box-title -->

          <div class="subsection subsection-sm section-body mobile-only">
            <p><?php echo $args['project_desc']; ?></p>
          </div>

          <div class="subsection subsection-sm section-footer mobile-only">
            <button type="button" class="btn btn-dark" name="button">Learn more</button>
          </div>

          <div class="subsection subsection-<?php echo $args['subsection_align']; ?> subsection-sm section-footer"></div>

          <div class="graphic-box-content mobile-hide">
            <p class="lead">some caption</p>
          </div> <!-- /.info-box-content -->
        </div>
      </div>

      <div class="col-12 col-md-7 mobile-hide order-md-<?php echo $detail_order; ?>">
        <div class="featurette-detail">
          <div class="subsection-<?php echo $args['subsection_align']; ?> subsection-sm section-header">
            <h1><?php echo $args['project_client']; ?></h1>
            <h4><?php echo $args['project_title']; ?></h4>
            <h4><small class="text-muted"><?php echo $args['project_loc']; ?></small></h4>
          </div>

          <div class="subsection-<?php echo $args['subsection_align']; ?> subsection-sm section-body">
            <p><?php echo $args['project_desc']; ?></p>
          </div>

          <div class="subsection subsection-sm section-footer">
            <button type="button" class="btn btn-dark" name="button">Learn more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
