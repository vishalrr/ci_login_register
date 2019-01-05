<?php include('header.php');?>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">

                    <div class="row breadcrumbs-top d-inline-block pull-left">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/dashboard';?>">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a>Newsletters
</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <div class="alert alert-success success" style="display:none;">
			  <strong>Success !</strong> You have succesfully deleted this Newsletter
			</div>
			<div class="alert alert-danger danger" style="display:none;">
			  <strong>Error !</strong> Enabel to delete
			</div>
                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Newsletters
				</h4>
                                </div>

                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered file-export">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $count= 1; foreach($new as $n){ ?>
                                                <tr id="<?php echo $n->id; ?>">
                                                    <td><?php echo $count++; ?></td>
                                                    <td><?php echo $n->email_from; ?></td>
                                                    <td>
                                                        <a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/job/delete" data-id="<?php echo $n->id; ?>" data-tbl="contactus" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>

    <?php include('footer.php') ?>
     <script>
     $(document).ready(function(){
       
 var table = $('#DataTables_Table_0').DataTable();
table.destroy();
 

    $('#DataTables_Table_0').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            
            {
                extend: 'csvHtml5',
                title: "Newsletters",
                exportOptions: {
                    columns: [ 0,1 ]
                }
            },
            {
                extend: 'excelHtml5',
                title: "Newsletters",
                exportOptions: {
                    columns: [ 0,1 ]
                }
            },
            {
                extend: 'pdfHtml5',
                title: "Newsletters",
                exportOptions: {
                    columns: [ 0,1 ]
                }
            },
             {
                extend: 'print',
                title: "Newsletters",
                exportOptions: {
                    columns: [ 0,1 ]
                }
            },
           
        ]
    } );
     $('.buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
} );

    
    
    
    
 </script>
