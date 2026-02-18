<?php
$query = array( 'post_type' => 'job', 'posts_per_page' => 6, 'order' => 'desc' );
$the_query = new WP_Query( $query ); 
?>   

<div class="txt">
    Showing <?php echo $the_query->found_posts; ?> Positions
</div>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="area">
    <button type="button" class="collapsible">
        <span class="txt-left"><?php echo get_the_title(); ?></span>
        <span class="txt-right"><?php echo get_field('job_location'); ?></span>
    </button>
    <div class="content">
        <?php echo get_the_content(); ?><br>
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
            APPLY NOW <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect x="23" width="23" height="23" transform="rotate(90 23 0)" fill="url(#pattern0)"/><defs><pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#image0_1711_469" transform="scale(0.01)"/></pattern><image id="image0_1711_469" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAADL0lEQVR4nO3dP2tTURzG8ed3a5vW3UFRmpo4dFbBSRAqOAr1RUhFMG0H9QVUQVrHvomCvgFxdahSqGNujbVZhEKh0KRJk+PSKzVt/rS5yXkOPt/xnkPODz7chJsMAZRSKpjM9wD9Fk9MzsLZLADnzK3lKz8/+J6pn4IGiTPZFRgKJ685Z8v5wx+Lvmbqt8j3ABctHs8utWIAgJlbiDPZFR8zpVGQd0g8nl0C8KrjJof3ucPS/HAmSq/gQHrCSAoQJSiQc2EkBYYSDMiFMJICQgkCpC+MpEBQ6EFSwUgKAIUaJFWMJHIUWpCBYCQRo1A+GBYzk+/QHePggmuAoXB8Bl10IPF4dsnMOn/14bABh4V2ywZ7Abj1Ti9hZouMT/RUID0+gW/UxuozFtlu2z2GvahqD7uhwFBgQ6EBOQ/G9H65PcZxUygFiUIBkjZGUogo3kEGhZEUGopXkEFjJIWE4g2kmJl6jiFgJE2htFcbPXoEh42OGw2FODM51+95F83fHWLuZcf1FDGSpvfLu7Wx+kx3FHud1pnnzQvIOm6PGnC17YYBYCT1iHLtM3Ap7bN7yQvIHXytw7B55uIAMZK6ohg2HwBHgzq/U/7eslxzHsBhy8X1QWMk/UU5/UFfdc6d+q1+WHm5LQEgV93+FI/dvIsR9xTOXYG5L2OVxmquWq4Ma4bp/fLuL1y/X58YmXNN3EMU/XaNaDVfi78Pa4bWvIEAQK62tQngmc8ZbmCnggqWfc5wMu8PhurfBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCyBEKWQMgSCFkCIUsgZAmELIGQJRCywgVptv5/VY9r5AUL4iLbANA8Y6nRiEa+DXuetAoWJFfZ2nawt63XDe7NrUpxx8dMaWS+B+i34uXsY2vaEwBwkVvLH5Q++p5JKaX+k/4Assc5bL5z+p4AAAAASUVORK5CYII="/></defs></svg>
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel"><span>Application</span> Form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-solid fa-xmark"></i></button>
                    </div>
                    <form method="post" id="ttJobApplication" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="tt_job_application">
                    <input type="hidden" name="jobName" value="<?php echo get_the_title().' ('.get_field('job_location').")"; ?>">
                    <div class="modal-body">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="input-sec">
                                  <input type="text" placeholder="First Name" name="firstName" class="form-control" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="input-sec">
                                  <input type="text" placeholder="Last Name" name="lastName" class="form-control" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="input-sec">
                                  <input type="text" placeholder="Phone" name="mobile" class="form-control" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="input-sec">
                                  <input type="email" placeholder="Email" name="email" class="form-control" required>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="input-fil">
                                  <label><u>Upload a resume</u>
                                      <input type="file" accept=".doc, .docx, .pdf" size="60" name="resume" class="form-control" required>
                                  or drag and drop here</label>
                              </div>
                          </div>

                          <div class="col-md-12 mt-5 text-center" id="error-message-div" style="display: none;">
                            <p id="error-message-p" style="color: red;"></p>
                          </div>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button class="btn submit-btn square-pulse" type="submit">SUBMIT APPLICATION</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>