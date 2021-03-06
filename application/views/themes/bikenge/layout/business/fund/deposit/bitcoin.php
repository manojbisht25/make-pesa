      <div class="visible-top"></div>

      <div class="container-fluid">
      <div class="row">
      <div class="col-sm-15 col-md-15 col-md-offset-0">
      <!-- Most out panel -->
	  <?php $this->load->view($this->themename.'/layout/business/summary/tabs/most-cover'); ?>
	  <!-- End -->

        <div class="col-sm-4 col-md-4">
		<?php $this->load->view($this->themename.'/layout/personal/summary/sidebar'); ?>
		
        </div><!--/span-->

        <div class="col-sm-8 col-md-8">
		<div class="well">
		<h5>
		<?php echo $this->lang->line('fund_deposit_bitcoin_well_header_h5'); ?>
		</h5>
		
		<?php

        if (validation_errors()) {

          echo '<div class="alert alert-danger alert-dismissible" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                  '.validation_errors().'
                </div>';
                  
        }

		// Fund add failed alert.
      	if ($this->session->fund_deposit_failed) {
      		echo '<div class="alert alert-danger alert-dismissible" role="alert">
      			  	<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
      				  '.$this->lang->line('fund_deposit_failed').'
      			  </div>';
      	}

		 // Fund add success alert.
      	if ($this->session->fund_mobile_deposit_success) {
      		echo '<div class="alert alert-success alert-dismissible" role="alert">
      			  	<a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
      				  '.$this->lang->line('fund_mobile_deposit_success').'
      			  </div>';
      	}
		
  	    ?>
		
		<!-- Form Mobile -->
		<div class="fund-payment-card">
		 <!-- Form of payment -->
		  <form method="post">
		  <label><?php echo $this->lang->line('fund_add_amount_form_label_need'); ?></label>
		<div class="form-group">
		<div class="input-group">
		<span class="input-group-addon" id="text-amount"><?php echo $this->user->curr_word; ?></span>
		<input type="text" name="amount" class="form-control" value="" placeholder="amount">
		</div>
		
		</div>
		
		<div class="fund-payment-padding">
		<div class="fund-paymet-mobile">
		  <div class="form-group">
		  </div>
		  <h3>
		  <i class="pf pf-bitcoin pf-lg" aria-hidden="true"></i>
		  </h3>
		  <p></p>
		  </div>
		  </div>
          
          <div class="form-group">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <button type="submit" class="fund-payment-button-submit" name="fund-add-bank">
			<?php echo $this->lang->line('fund_add_mobile_form_submit_button'); ?>
			</button>
          </div>
        </form>

		  <!-- End Form -->
		
		</div>
		<!-- End form -->
		</div>
		  </div><!--/span-->
        </div><!--/span-->
      </div><!--/row-->

    </div><!--/.container-->