START TRANSACTION;

DROP TABLE IF EXISTS `cars`;

CREATE TABLE IF NOT EXISTS `cars` (
  `id` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `color` varchar(80) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

INSERT INTO `cars` (`id`, `brand`, `name`, `color`, `date`) VALUES
(1, 'Škoda', 'Octavia','Modrá', '2022-11-23'),
(2, 'Kia', 'Soul','Bílá', '2021-05-05'),
(3, 'Škoda', 'Fabia','Zelená', '2009-09-15'),
(4, 'Škoda', 'Scala','Červená', '2023-01-01'),
(5, 'Fiat', 'Panda','Žlutá', '2012-10-25'),
(6, 'Toyota', 'Yaris','Bílá', '2017-02-07'),
(7, 'Mitsubishi', 'Colt','Červená', '2022-12-29');

COMMIT;
