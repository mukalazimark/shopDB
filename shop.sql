SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `sell` (
  `ItemId` varchar(4) NOT NULL,
  `ItemName` varchar(30) NOT NULL,
  `UnitPrice` int(10) NOT NULL,
  `Quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `products` (
  `ProductId` varchar(4) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `Stock` int(4) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `products` ADD PRIMARY KEY (`ProductId`);

ALTER TABLE `sell` ADD PRIMARY KEY (`ItemId`);
COMMIT;

