 <footer class="footer <?php if($this->uri->segment(2)=="message"){ echo "email-application"; }else if($this->uri->segment(2)=="compose"){ echo "email-application"; } else{ echo 'footer-static'; }?>  footer-light navbar-border navbar-shadow" style="float: left;
    width: 100%;
    margin: 0px;
    padding-left: 260px;">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Designed By Indi IT Solutions</span>
    </p>
  </footer>
  
  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <input type="hidden" class="action" data-action="">
       <input type="hidden" class="del_id" data-id="">
       <input type="hidden" class="del_tbl" data-tbl="">
      <div class="modal-body">
        <h4> Are you sure you wants to delete it ? </h4>
      </div>
      <div class="modal-footer">
        <button type="button" data-src="<?php echo base_url(); ?>" class="btn btn-success deleteaction">Yes</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Status" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <input type="hidden" class="action" value="">
       <input type="hidden" class="status_id" value="">
        <input type="hidden" class="Status" value="">
       <input type="hidden" class="status_tbl" value="">
      <div class="modal-body">
        <h4> Are you sure you wants to <span class="status-title"></span> it? </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success Statusaction">Yes</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
  
  
  <!-- BEGIN VENDOR JS-->
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>

  <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js"  type="text/javascript"></script>
   <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js"  type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"
  type="text/javascript"></script>
 
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/core/app.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/pages/dashboard-ecommerce.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>
   <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
  
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/extensions/dragula.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/forms/checkbox-radio.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/tables/datatables/datatable-advanced.js"
  type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
 <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/jquery.richtext.js"></script> 
 <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/extensions/drag-drop.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/gallery.js" type="text/javascript"></script>
   <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/ui/jquery-ui/date-pickers.min.js" type="text/javascript"></script>
 <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/ssi-uploader.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/forms/select/selectivity-full.min.js"  type="text/javascript"></script>
 <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/forms/select/form-selectivity.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/validation.js"></script>
  <!--script src="<?php echo base_url(); ?>assets/front/js/validin.js"></script-->
   <script src="<?php echo base_url(); ?>assets/employer/js/chosen.jquery.js" type="text/javascript"></script>
 <script src="<?php echo base_url(); ?>assets/employer/js/init.js" type="text/javascript"></script>
 <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/custom.js" type="text/javascript"></script>
 
 
 <script src="<?php echo base_url(); ?>assets/admin/app-assets/vendors/js/forms/tags/tagging.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/app-assets/js/scripts/forms/tags/tagging.min.js" type="text/javascript"></script>
 
 <script>
    var notifyOptions = {
        iconButtons: {
            className: 'fa fa-question about',
            method: function (e, modal) {
                ssi_modal.closeAll('notify');
                var btn = $(this).addClass('disabled');
                ssi_modal.dialog({
                    onClose: function () {
                        btn.removeClass('disabled')
                    },
                    onShow: function () {
                    },
                    okBtn: {className: 'btn btn-primary btn-sm'},
                    title: 'ssi-modal',
                    content: 'ssi-modal is an open source modal window plugin that only depends on jquery. It has many options and it\'s super flexible, maybe the most flexible modal out there... For more details click <a class="sss" href="http://ssbeefeater.github.io/#ssi-modal" target="_blank">here</a>',
                    sizeClass: 'small',
                    animation: true
                });
            }
        }
    };

    // option 1
    $('#ssi-upload').ssi_uploader({
        url: 'http://localhost:3300/upload',
        inForm:true
    });

    // option 2

    var uploader = $('#ssi-upload').ssi_uploader({
        url: 'http://localhost:3300/upload'
    });

    $( "#myForm" ).on( "submit", function( event ) {
        event.preventDefault();
        uploader.data('ssi_upload').uploadFiles();
        uploader.on('onUpload.ssi-uploader',function(){
            console.log('complete');
            $( "#myForm" ).submit();
        });
    });
    $('#ssi-upload2').ssi_uploader({url: 'uploadAction.php', preview: false});
    $('#ssi-upload3').ssi_uploader({url: 'uploadAction.php', dropZone: false});
    $('#ssi-upload4').ssi_uploader({url: 'uplodadAction.php', dropZone: false, allowed: ["pdf"]});
</script>


 <script>
        $(document).ready(function() {
            $('.content-text').richText();
             $('.des2').richText();
              $('.des3').richText();
               $('.des61').richText();
               $('.des62').richText();
               $('.des63').richText();
               $('.des7').richText();
        });
</script>
<script>
$(".show-check").hide();
$(".check-btn").click(function() {
    if($(this).is(":checked")) {
        $(".show-check").show(300);
    } else {
        $(".show-check").hide(200);
    }
});
</script>

 <script src="<?php echo base_url(); ?>assets/admin/app-assets/js/jquery.validate.min.js"></script>
 
  </body>
</html>