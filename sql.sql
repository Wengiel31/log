START TRANSACTION;
CREATE TABLE `log` (
  `ID` int(11) NOT NULL,
  `IP` text NOT NULL,
  `Time` text NOT NULL,
  `URL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID`);
COMMIT;