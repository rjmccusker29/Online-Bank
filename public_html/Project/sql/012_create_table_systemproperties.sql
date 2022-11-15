/* rjm8 05/12/2022 */

CREATE TABLE IF NOT EXISTS `SystemProperties` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`account_id` INT,
	`apy` FLOAT DEFAULT 0.15,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`account_id`) REFERENCES Accounts(`id`)
)