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
                                <li class="breadcrumb-item"><a>Transactions
</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                 <?php include('inc/message.php'); ?>
                <div class="alert alert-success success" style="display:none;">
			  <strong>Success !</strong> You have succesfully deleted this Trnasaction Detail
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
                                    <h4 class="card-title">Transactions
				</h4>
                                </div>

                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered file-export">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
													<th>Name</th>
                                                    <th>Email</th>
													<th>Amount</th>
													<th>Transaction Id</th>
													<th>Status</th>
                                                    <th class="mn-w-80">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php /*echo '<pre>'; print_r($transactions); echo '</pre>'; */ ?>
                                                <?php $counter=1; foreach($transactions as $transact){ ?>
                                                <tr id="<?= $transact->id; ?>">
                                                    <td><?= $counter++; ?></td>
													
												
													<td><?php if(!empty($this->db->get_where('employers',array('id'=>$transact->user_id))->result()))
													   { $data =  $this->db->get_where('employers',array('id'=>$transact->user_id))->result();
													   echo $data[0]->f_name.' '. $data[0]->l_name; }
													   ?></td>
                                                    <td>
                                                        <?php if(!empty($this->db->get_where('employers',array('id'=>$transact->user_id))->row()->email)){ echo $this->db->get_where('employers',array('id'=>$transact->user_id))->row()->email; } ?>
                                                    </td>
													<td>$<?= $transact->amount; ?></td>
													<td>#<?= $transact->transaction_id; ?></td>
													<td><?= $transact->status; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url();?>admin/transactionview?id=<?= $transact->id; ?>" class="btn btn-info btn-table"><i class="la la-eye"></i></a> 
                                                        <a href="javascript:void(0)" action="<?php echo base_url(); ?>admin/job/delete" data-id="<?php echo $transact->id; ?>" data-tbl="emp_packages" class="btn btn-danger btn-table dlt" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                <!--tr>
                                                    <td>122</td>
													<td>#43546122</td>
													<td>David Smith</td>
                                                    <td>
                                                        <a href="#">smith86@gmail.com</a>
                                                    </td>
													<td>$1500</td>
													<td><label class="badge badge-warning">Pending</label></td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123</td>
                                                    <td>#43546123</td>
													<td>David Smith</td>
                                                    <td>
                                                        <a href="#">david86@gmail.com</a>
                                                    </td>
													<td>$1400</td>
													<td><label class="badge badge-warning">Pending</label></td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>124</td>
													 <td>#43546124</td>
													 <td>Jhon Smith</td>
                                                    <td>
                                                        <a href="#">Jhonsmith@gmail.com</a>
                                                    </td>
													<td>$2400</td>
													<td><label class="badge badge-success">Approved</label></td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-danger btn-table" data-toggle="modal" data-target="#delete"><i class="la la-trash"></i></a>
                                                    </td>
                                                </tr-->
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
                title: "Transactions",
                exportOptions: {
                    columns: [ 0,1,2,3,4,5 ]
                }
            },
            {
                extend: 'excelHtml5',
                 title: "Transactions",
                exportOptions: {
                    columns: [ 0,1,2,3,4,5 ]
                }
            },
            {
                extend: 'pdfHtml5',
                 title: "Transactions",
                exportOptions: {
                    columns: [ 0,1,2,3,4,5 ]
                }
            },
             {
                extend: 'print',
                 title: "Transactions",
                exportOptions: {
                    columns: [ 0,1,2,3,4,5 ]
                }
            },
           
        ]
    } );
     $('.buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
} );

    
    
    
    
 </script>
