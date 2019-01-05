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
            <div class="card-content col-md-12">
              <div class="col-md-12">
                <h1>Create Group</h1>
              <form>
                <div class="form-group">
                    <label for="companyName">Group Name:</label>
                    <input type="text" id="companyName" class="form-control" placeholder=""
                          name="company">
                </div>
                <div class="form-group">
                    <label for="projectinput8">Group Description</label>
                    <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder=""></textarea>
                </div>
                <div class="form-group">
                    <label>Organization Group Logo</label>
                    <label id="projectinput7" class="file center-block">
                        <input type="file" id="file">
                        <span class="file-custom"></span>
                    </label>
                </div>
                <div class="form-group">
                    <label for="sbject">Add Members</label>
                    <div class="case-sensitive form-control" data-tags-input-name="case-sensitive">john@gmail.com, shelton@gmail.com, davidwalker@gmail.com</div>
                </div>
                <div class="form-group mb-5">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-danger">
                          <i class="la la-check-square-o"></i> Create
                        </button>
                      </div>
                        
                      </div>

                  </form>
                      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>

    <?php include('footer.php') ?>