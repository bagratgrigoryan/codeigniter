<form style="width: 800px; margin: 30px auto" method="post" action="<?= base_url('v1/dashboard/addPartner/add')?>">
	<?= $this->session->userdata('msg')?>

	<div class="form-group row">
		<label for="partnerName" class="col-sm-2 col-form-label col-form-label-sm">Partner Name:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control form-control-sm" name="partnerName" id="partnerName"
				   placeholder="Partner Name">
			<small><?= form_error('partnerName')?></small>
		</div>
	</div>
	<div class="form-group row">
		<label for="partnerId" class="col-sm-2 col-form-label col-form-label-sm">Partner ID:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control form-control-sm" name="partnerId" id="partnerId"
				   placeholder="Partner ID">
			<small><?= form_error('partnerId')?></small>
		</div>
	</div>
	<div class="form-group row">
		<label for="domain" class="col-sm-2 col-form-label col-form-label-sm">Domain:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control form-control-sm" name="domain" id="domain" placeholder="Domain">
			<small><?= form_error('domain')?></small>
		</div>
	</div>
	<div class="form-group row">
		<label for="key" class="col-sm-2 col-form-label col-form-label-sm">Key:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control form-control-sm" name="key" id="key" value="TK">
		</div>
	</div>
	<div class="form-group row">
		<label for="wallet" class="col-sm-2 col-form-label col-form-label-sm">Wallet:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control form-control-sm" name="wallet" id="wallet" placeholder="Wallet">
			<small><?= form_error('wallet')?></small>
		</div>
	</div>
	<button type="submit" style="align-items: center" class="btn btn-primary btn-lg btn-block">Save</button>
</form>


