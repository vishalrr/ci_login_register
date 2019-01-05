<?php include('header.php');?>
     <div class="app-content composepage content">
    <div class="sidebar-left">
      <div class="sidebar">
        <div class="sidebar-content email-app-sidebar d-flex">
          <div class="email-app-menu col-md-5 card d-none d-lg-block">
            <div class="form-group form-group-compose text-center">
              <a href="<?php echo base_url();?>admin/compose" class="btn btn-danger btn-block my-1"><i class="ft-mail"></i> Compose</a>
            </div>
            <h6 class="text-muted text-bold-500 mb-1">Messages</h6>
            <div class="list-group list-group-messages">
              <a href="<?php echo base_url();?>admin/inbox" class="list-group-item  border-0">
                <i class="ft-inbox mr-1"></i> Inbox
                <span class="badge badge-secondary badge-pill float-right">8</span>
              </a>
              <a href="<?php echo base_url();?>admin/sent" class="list-group-item active list-group-item-action border-0"><i class="la la-paper-plane-o mr-1"></i> Sent</a>
              <a href="<?php echo base_url();?>admin/draft" class="list-group-item list-group-item-action border-0"><i class="ft-file mr-1"></i> Draft</a>
              <a href="<?php echo base_url();?>admin/starred" class="list-group-item list-group-item-action border-0"><i class="ft-star mr-1"></i> Starred<span class="badge badge-danger badge-pill float-right">3</span> </a>
              <a href="<?php echo base_url();?>admin/trash" class="list-group-item list-group-item-action border-0"><i class="ft-trash-2 mr-1"></i> Trash</a>
              <a href="<?php echo base_url();?>admin/group" class="list-group-item list-group-item-action border-0 text-info"><i class="ft-plus mr-1"></i> Create Group</a>
            </div>
            <h6 class="text-muted text-bold-500 mt-1 mb-1">Labels</h6>
            <div class="list-group list-group-messages">
              <a href="#" class="list-group-item list-group-item-action border-0">
                <i class="ft-circle mr-1 warning"></i> Work
                <span class="badge badge-warning badge-pill float-right">5</span>
              </a>
              <!--<a href="#" class="list-group-item list-group-item-action border-0"><i class="ft-circle mr-1 danger"></i> Family</a>-->
              <!--<a href="#" class="list-group-item list-group-item-action border-0"><i class="ft-circle mr-1 primary"></i> Friends</a>-->
              <a href="#" class="list-group-item list-group-item-action border-0"><i class="ft-circle mr-1 success"></i> Private <span class="badge badge-success badge-pill float-right">3</span> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content-right">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <div class="card email-app-details d-none d-lg-block">
            <div class="card-content">
              <div class="email-app-options card-body">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Replay"><i class="la la-reply"></i></button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Replay All"><i class="la la-reply-all"></i></button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Report SPAM"><i class="ft-alert-octagon"></i></button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="ft-trash-2"></i></button>
                    </div>
                  </div>
                  <div class="col-md-6 col-12 text-right">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Previous"><i class="la la-angle-left"></i></button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Next"><i class="la la-angle-right"></i></button>
                    </div>
                    <div class="btn-group ml-1">
                      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Mark as unread</a>
                        <a class="dropdown-item" href="#">Mark as unimportant</a>
                        <a class="dropdown-item" href="#">Add star</a>
                        <a class="dropdown-item" href="#">Add to task</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Filter mail</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="email-app-title card-body">
                <h3 class="list-group-item-heading">Project ABC Status Report</h3>
                <p class="list-group-item-text">
                  <span class="primary">
                    <span class="badge badge-primary">Previous</span> <i class="float-right font-medium-3 ft-star warning"></i></span>
                </p>
              </div>
              <div class="media-list">
                <div id="headingCollapse1" class="card-header p-0">
                  <a data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1" class="collapsed email-app-sender media border-0 bg-blue-grey bg-lighten-5">
                    <div class="media-left pr-1">
                      <span class="avatar avatar-md">
                        <img class="media-object rounded-circle" src="<?php echo base_url();?>assets/admin/app-assets/images/portrait/small/avatar-s-1.png" alt="Generic placeholder image">
                      </span>
                    </div>
                    <div class="media-body w-100">
                      <h6 class="list-group-item-heading">John Doe</h6>
                      <p class="list-group-item-text">Can you please provide me ABC Status Report.
                        <span class="float-right text muted">12 July</span>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="card-collapse collapse" aria-expanded="true">
                  <div class="card-content">
                    <div class="card-body">
                      <p>Hi Wayne,</p>
                      <p>Can you please provide me ABC Status Report.</p>
                      <p>Gmail Material Design Concept. Please check the full project
                        on Behance. Hope that will be fine for you.</p>
                      <p>Thanks for your consideration !</p>
                      <p>Regards,
                        <br>John</p>
                    </div>
                  </div>
                </div>
                <div id="headingCollapse2" class="card-header p-0">
                  <a data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="email-app-sender media border-0">
                    <div class="media-left pr-1">
                      <span class="avatar avatar-md">
                        <img class="media-object rounded-circle" src="<?php echo base_url();?>assets/admin/app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                      </span>
                    </div>
                    <div class="media-body w-100">
                      <h6 class="list-group-item-heading">Wayne Burton</h6>
                      <p class="list-group-item-text">to me
                        <span>Today</span>
                        <span class="float-right">
                          <i class="la la-reply mr-1"></i>
                          <i class="la la-arrow-right mr-1"></i>
                          <i class="la la-ellipsis-v"></i>
                        </span>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="card-collapse" aria-expanded="false">
                  <div class="card-content">
                    <div class="email-app-text card-body">
                      <div class="email-app-message">
                        <p>Hi John,</p>
                        <p>Thanks for your feedback ! Here's a new layout for a new
                          Modern Admin theme.</p>
                        <p>We will start the new application development soon once this
                          will be completed, I will provide you more details after
                          this Saturday. Hope that will be fine for you.</p>
                        <p>Hope your like it, or feel free to comment, feedback or rebound
                          !
                        </p>
                        <p>Cheers~</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="email-app-text-action card-body">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>

    <?php include('footer.php') ?>