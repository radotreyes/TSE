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
  $align_other = ( $args['subsection_align'] == 'left' ? 'right' : 'left' );
?>

<div class="subsection section-body">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5 order-md-<?php echo $graphic_order; ?>">
        <div id="<? echo $args['title_id']; ?>" class="card-md-img card-md-split-<?php echo $args['subsection_align']; ?>">
          <div class="card">

            <div id="<? echo $args['title_id']; ?>Content" class="subsection subsection-sm section-header mobile-only">
              <h1 class="display-flex-1 display-bold"><?php echo $args['project_client']; ?></h1>
              <h4><?php echo $args['project_title']; ?></h4>
              <h4><small class="text-muted"><?php echo $args['project_loc']; ?></small></h4>
            </div>

            <div class="subsection subsection-sm section-body mobile-only">
              <p><?php echo $args['project_desc']; ?></p>
            </div>

            <div class="subsection subsection-sm section-footer mobile-only">
              <button type="button" class="btn btn-ghost" name="button">LEARN MORE</button>
            </div>

            <div class="subsection subsection-<?php echo $args['subsection_align']; ?> subsection-sm section-footer"></div>

          </div>
        </div>
      </div>

      <div class="col-12 col-md-7 mobile-hide order-md-<?php echo $detail_order; ?>">
        <div class="card card-dark card-md-split-<?php echo $align_other; ?>">
          <div class="subsection-<?php echo $args['subsection_align']; ?> subsection-sm section-header">
            <h1 class="display-flex-1 display-bold"><?php echo $args['project_client']; ?></h1>
            <h4 class="display-flex-5"><?php echo $args['project_title']; ?></h4>
            <h4><small class="text-muted"><?php echo $args['project_loc']; ?></small></h4>
          </div>

          <div class="subsection-<?php echo $args['subsection_align']; ?> subsection-sm section-body">
            <p><?php echo $args['project_desc']; ?></p>
            <div class="btn-wrapper-expand-<?php echo $align_other ?>">

            </div>
            <button type="button" class="btn btn-scared btn-md-expand-<?php echo $args['subsection_align'] ?>" name="button">LEARN MORE</button>
          </div>

          <div class="subsection subsection-sm section-footer">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
