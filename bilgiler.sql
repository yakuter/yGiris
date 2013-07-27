CREATE TABLE `y_uye` (
  `yuyeID` int(11) NOT NULL auto_increment,
  `ykullanici` varchar(30) NOT NULL,
  `yparola` varchar(64) NOT NULL,
  `yseviye` smallint(6) NOT NULL,
  PRIMARY KEY  (`yuyeID`)
) DEFAULT CHARSET=utf8;


INSERT INTO `y_uye` (`yuyeID`, `ykullanici`, `yparola`, `yseviye`) VALUES
(1, 'yakuter.com', 'b079f46c6be246d21c2b4e51f17ace43', 10);