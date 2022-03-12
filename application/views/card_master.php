<style>
.alert-info{
    color: #fdfdfd!important;
    background-color: #089BF8!important;
    border-color: #bee5eb!important;
    font-size: 14px!important;
}
.fade:not(.show){
    opacity: 9!important;
}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.error {
	color: red!important;
}
</style>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<div id="page-banner-area" class="page-banner-area" style="background-image:url(../assets/images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Card master</h2>
               <ol class="breadcrumb">
                  
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->
<section class="ts-contact-form">
         <div class="container">
		
            <div class="row">
              <!-- col end-->
            </div>
			<?php if( $this->session->flashdata('card_add')):?>
								<div class="alert alert-success alert-dismissible show fade">
									<div class="alert-body">
										<button class="close" data-dismiss="alert"><span>&times;</span></button>
										<strong><?php echo $this->session->flashdata('card_add'); ?></strong> 
									</div>
								</div>
						    <?php endif; ?>
		 <?php if( $this->session->flashdata('delete')):?>
								<div class="alert alert-danger alert-dismissible show fade">
									<div class="alert-body">
										<button class="close" data-dismiss="alert"><span>&times;</span></button>
										<strong><?php echo $this->session->flashdata('delete'); ?></strong> 
									</div>
								</div>
						    <?php endif; ?>	
            <div class="row">
			
               <div class="col-lg-8 mx-auto">
                  <form id="contact-form" class="contact-form" action="<?php echo base_url(); ?>Admincontroller/card_master" method="post" enctype="multipart/form-data" >
                     <div class="error-container"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
						   <h4>Card Name</h4>
                              <input class="form-control form-control-name" placeholder="Card Name" name="cardname" id="f-name"
                                 type="text" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
						   <h4>Card File</h4>
                              <input class="form-control form-control-name"  name="cardupload" 
                                 type="file" required>
                           </div>
                        </div>
                     </div>
                     <div class="text-center"><br>
                        <button class="btn" type="submit"> Add Card</button>
                     </div>
                  </form><!-- Contact form end -->
               </div>
            </div>
         </div> <br>
		<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                     <div class="col-md-8">
             <h4>Cards List</h4>
            </div>
            <div class="col-md-4">
          
            </div>
                    
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
      <table class="table table-striped" id="example">
      <thead>
						<tr>
						  <th>S.No</th>
						  <th>Card Name</th>                                 
						  <th>Action</th>
						  
						</tr>
					  </thead>
                      <tbody>
                       <?php $i=1; foreach($getcards as $cards) : ?>      
					  <tr>
					  <td><?php echo $i;?></td>
					  <td><?php echo $cards->card_name; ?></td>                               
					  <td>  
						<a href="<?php echo base_url(); ?>Admincontroller/card_delete/<?php echo $cards->id;  ?>" class="btn" style="background: #e31f11;">Delete</a>
					  
                      </td>
                      
                      </tr> 
                            <?php $i++; endforeach; ?>                               
                        </tbody>
                     </table>
                    </div>
                   </div>
                 </div>
               </div>
              </div>
			  
         <div class="speaker-shap">
            <img class="shap1" src="images/shap/home_schedule_memphis2.png" alt="">
         </div>
		</section>
		
<script>
$(document).ready( function() {
    $('#example').dataTable({
        /* Disable initial sort */
        "aaSorting": []
    });
})
 </script> 