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
              <a href="<?php echo base_url();?>admin/inbox" class="list-group-item active border-0">
                <i class="ft-inbox mr-1"></i> Inbox
                <span class="badge badge-secondary badge-pill float-right">8</span>
              </a>
              <a href="<?php echo base_url();?>admin/sent" class="list-group-item list-group-item-action border-0"><i class="la la-paper-plane-o mr-1"></i> Sent</a>
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
                <h1>Inbox</h1>
                <!-- Task List table -->
                  <div class="table-responsive">
                    <ul class="inbox-actions">
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2"></label>
                            </div>
                        </li>
                        <li>
                            <i class="icon-envelope-letter icon"></i>
                        </li>
                        <li>
                            <i class="icon-trash icon"></i>
                        </li>
                        <li>
                            <i class="icon-drawer icon"></i>
                        </li>
                    </ul>
                    <table id="inbox-mail" class="table table-white-space table-bordered display no-wrap icheck table-middle" style="padding: 0 !important;">
                      <thead>
                        <tr>
                          <th width="50px">
                          </th>
                          <th width="50px"></th>
                          <th></th>
                          <th width="50px"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- ABC Project -->
                        <tr class="unread">
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3"></label>

                                <i class="icon-star icon"></i>
                            </div>
                            
                          </td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">To: JohnSmith, Shelton</td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">Update of REC Social Media...</td>
                          <td>Aug 23</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>

                                <i class="icon-star icon"></i>
                            </div>
                            
                          </td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">To: Davikulkar, Somnath</td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">This mail is regarding to your account update of behance, please...</td>
                          <td>Aug 22</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5"></label>

                                <i class="icon-star icon"></i>
                            </div>
                            
                          </td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">To: JohnSmith</td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">Changing your life with me and I hope you will growth in your...</td>
                          <td>Aug 15</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck6">
                                <label class="custom-control-label" for="customCheck6"></label>

                                <i class="icon-star icon"></i>
                            </div>
                            
                          </td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">To: JohnSmith, Shelton</td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">Perera was the PM of your choice so...</td>
                          <td>Aug 14</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7"></label>

                                <i class="icon-star icon"></i>
                            </div>
                            
                          </td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">To: JohnSmith, Shelton</td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">Nobody tell me that you'r a expert in UI/UX...</td>
                          <td>Aug 13</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck8">
                                <label class="custom-control-label" for="customCheck8"></label>

                                <i class="icon-star icon"></i>
                            </div>
                            
                          </td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">To: JohnSmith, Shelton</td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">Summary of behavior</td>
                          <td>Aug 10</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck9">
                                <label class="custom-control-label" for="customCheck9"></label>

                                <i class="icon-star icon"></i>
                            </div>
                            
                          </td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">To: JohnSmith, Shelton</td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">Continue to biggest discount of every amazone product...</td>
                          <td>Aug 9</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck10">
                                <label class="custom-control-label" for="customCheck10"></label>

                                <i class="icon-star icon"></i>
                            </div>
                            
                          </td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">To: JohnSmith, Shelton</td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">Want to change your life, join me soon...</td>
                          <td>Aug 8</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck11">
                                <label class="custom-control-label" for="customCheck11"></label>

                                <i class="icon-star icon"></i>
                            </div>
                            
                          </td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">To: JohnSmith, Shelton</td>
                          <td class="clickable-row" data-href="<?php echo base_url();?>admin/viewmail">Update of REC Social Media...</td>
                          <td>Aug 2</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!--/ Task List table -->
                      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>

    <?php include('footer.php') ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    </script>