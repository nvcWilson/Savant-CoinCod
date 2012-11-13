<?php
	require $this->template_path.'config.php';
?>

<!-- BEGIN header -->
<?php echo $this->header; ?>
<!-- END header -->

<!-- BEGIN main -->
<section id="content_container">	
<?php if ($_SERVER["PHP_SELF"] == $PATH."/index.php") { echo $this->product;} //load out in product template?>
<?php if ($_SERVER["PHP_SELF"] == $PATH."/product/product_description.php") { echo $this->product_desc;} //load out in product_description template?>
<?php if ($_SERVER["PHP_SELF"] == $PATH."/search/index.php") { echo $this->search;} //load out in search template?>
<?php if ($_SERVER["PHP_SELF"] == $PATH."/product/product_form.php") { echo $this->fpass;} //load out fpass template?>

	<?php foreach ($this->content_container as $key => $val): ?>
		<h5><?php echo $this->eprint($val['title']); ?></h5>
			<article class="auction_container">
				<?php echo $val['content'];?>
				<br>
				<?php if ($_SERVER["PHP_SELF"] == $PATH."/forgot_password/index.php") { echo $this->fpass;} //load out fpass template?>
				<?php if ($_SERVER["PHP_SELF"] == $PATH."/site_status/index.php") { echo $this->status;} //load out status template?>
				<?php if ($_SERVER["PHP_SELF"] == $PATH."/register/register_activation.php") { echo $this->regact;} //load out activation template?>
				<?php if ($_SERVER["PHP_SELF"] == $PATH."/login/index.php") { echo $this->loginform;} //load out loginform template?>
				<?php if ($_SERVER["PHP_SELF"] == $PATH."/buy_tokens/index.php") { echo $this->buy_token;} //load out in buy_tokens template?>
				<?php if ($_SERVER["PHP_SELF"] == $PATH."/user_profile/index.php") { echo $this->user_profile;} //load out user profile template?>
				<?php if ($_SERVER["PHP_SELF"] == $PATH."/registration/index.php") { echo $this->register;} //load out register template?>
				<?php if ($_SERVER["PHP_SELF"] == $PATH."/admin_site/user_list.php") { echo $this->userlist;} //load out user list template?>
				<?php echo $val['bottom_image'];?>
			</article>
	<?php endforeach; ?>

</section>
<!-- END main -->

<!-- BEGIN footer -->
<?php echo $this->footer; ?>
<!-- END footer -->		