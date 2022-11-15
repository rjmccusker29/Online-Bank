CREATE TABLE IF NOT EXISTS `Transactions` (
  `id` int AUTO_INCREMENT,
  `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `account_src` int,
  `account_dest` int,
  `balance_change` int,
  `memo` VARCHAR(100) DEFAULT "",
  `transaction_type` ENUM(
    "deposit",
    "withdrawal",
    "transfer",
    "ext-transfer"
  ),
  `expected_total` int,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`account_src`) REFERENCES Accounts(`id`),
  FOREIGN KEY (`account_dest`) REFERENCES Accounts(`id`)
)