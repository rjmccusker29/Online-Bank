CREATE TABLE IF NOT EXISTS `Accounts` (
  `id` int AUTO_INCREMENT,
  `user_id` int,
  `account_number` varchar(12) DEFAULT (LPAD(`user_id`, 12, "0")),
  `balance` int DEFAULT 0,
  `account_type` int,
  `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES Users(`id`),
  FOREIGN KEY (`account_type`) REFERENCES Account_Types(`id`),
  PRIMARY KEY (`id`),
  UNIQUE KEY (`account_number`),
  check (LENGTH(`account_number`) = 12)
)