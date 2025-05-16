
<div id="game_grid" class="grid-container">
	<div class="grid-item heading">
		<span class="game_icon">🎮</span>Play games&nbsp;<img src="<?php echo base_url('assets/game2/images/banner'); ?>/coin.png" alt="Image">
	</div>
</div>

<div class="container my-2" id="game_container">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-3 col-4 image-container" style="position: relative;">
			<a href="#home">
				<img src="<?php echo base_url('assets/game2/images/banner'); ?>/ipl.png" alt="Image">
			</a>
			<div class="banner-overlay">IPL</div>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-3 col-4 image-container">
			<a onclick="isLoggedin(event);" href="<?php echo base_url() ?>slotmachine-game"><img src="<?php echo base_url('assets/game2/images/banner'); ?>/slot_mechine.png" alt="Image"></a>
			<div class="banner-overlay">Slot Machine</div>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-3 col-4 image-container">
			<a onclick="isLoggedin(event);" href="<?php echo base_url() ?>ramses-slot-machine"><img src="<?php echo base_url('assets/game2/images/banner'); ?>/ramses_slot.png" alt="Image"></a>
			<div class="banner-overlay">Ramses Slot</div>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-3 col-4 image-container">
			<a onclick="isLoggedin(event);" href="<?php echo base_url() ?>dice"><img src="<?php echo base_url('assets/game2/images/banner'); ?>/ludodice.png" alt="Image"></a>
			<div class="banner-overlay">Ludo Dice</div>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-3 col-4 image-container">
			<a onclick="isLoggedin(event);" href="<?php echo base_url() ?>ludu"><img src="<?php echo base_url('assets/game2/images/banner'); ?>/ludu.png" alt="Image"></a>
			<div class="banner-overlay">Dice Guess</div>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-3 col-4 image-container">
			<a onclick="isLoggedin(event);" href="<?php echo base_url() ?>coin"><img src="<?php echo base_url('assets/game2/images/banner'); ?>/head_tail.png" alt="Image"></a>
			<div class="banner-overlay">Head/Tail</div>
		</div>

		<?php for ($i = 1; $i <= 3; $i++): ?>
			<div class="col-lg-2 col-md-2 col-sm-3 col-4 image-container">
				<img style="opacity: 0.55;" src="<?php echo base_url('assets/game2/images/banner'); ?>/comming_soon.png" alt="Image">
				<div class="banner-overlay">Comming Soon</div>
			</div>
		<?php endfor; ?>
		
	</div>
</div>
