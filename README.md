# lucky7_frontend
This is a front end project

# sql updates to run
ALTER TABLE `settings` ADD `slot_game_ratio` INT NOT NULL DEFAULT '30' AFTER `dice_game_rate`;
ALTER TABLE `slotmachine` ADD `loss_amount` DECIMAL(10,2) NULL DEFAULT NULL AFTER `win_amount`;
