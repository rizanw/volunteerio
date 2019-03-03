-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ci_io.volunteer
CREATE TABLE IF NOT EXISTS `volunteer` (
  `volunteer_name` varchar(64) DEFAULT NULL,
  `volunteer_season` char(2) DEFAULT NULL,
  `volunteer_email` varchar(255) DEFAULT NULL,
  `volunteer_handphone` varchar(14) DEFAULT NULL,
  `volunteer_devision` varchar(12) DEFAULT NULL,
  `volunteer_nrp` varchar(14) NOT NULL,
  `volunteer_department` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`volunteer_nrp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table ci_io.volunteer: ~45 rows (approximately)
/*!40000 ALTER TABLE `volunteer` DISABLE KEYS */;
INSERT INTO `volunteer` (`volunteer_name`, `volunteer_season`, `volunteer_email`, `volunteer_handphone`, `volunteer_devision`, `volunteer_nrp`, `volunteer_department`) VALUES
	('Nisrina Kamilia Salsabila', '8', 'nisrinaksalsabila@gmail.com', '8.12688E+13', 'D003', '01111610000092', 'Physics\r'),
	('Rahajeng Galih Ayu Putri Basuki', '8', 'rahajeng.gapb@gmail.com', '81938877256', 'D002', '01311610000109', 'Statistics\r'),
	('Nanda Pebri Prayogo', '7', 'nando_prag@yahoo.co.id', '85745534742', 'D001', '01411510000074', 'Chemistry\r'),
	('Terry Denisa Syukrie', '8', 'terry.syukri@gmail.com', '87899559595', 'D002', '01411610000128', 'Chemistry\r'),
	('Rizqi Ardhiarini', '7', 'qiqi.ardhiarini@yahoo.com', '85655104396', 'D001', '01511510000028', 'Biology\r'),
	('Salma Arizka Putri', '8', 'salma_arizkaputri@ymail.com', '85751699950', 'D001', '01511610000054', 'Biology\r'),
	('Ghazy Dicky', '8', 'ghazy2903@gmail.com', '87760064404', 'D001', '02111610000013', 'Mechanical Engineering\r'),
	('Tripitra Wira', '8', 'tripitrawira@yahoo.com', '82350018525', 'D002', '02111610000081', 'Mechanical Engineering\r'),
	('Dhiya Aldifa Ulhaq', '8', 'aldifa2498@gmail.com', '82386167775', 'D001', '02111610000205', 'Mechanical Engineering\r'),
	('Gracia Manuella', '8', 'gmanuellas@yahoo.com', '81295210143', 'D001', '02211510000158', 'Electrical Engineering\r'),
	('Nabila Fitri Rohmawati', '7', 'nabila.f@yahoo.com', '81252258181', 'D002', '02311503000035', 'Chemical Engineering\r'),
	('Hendiyansa Dwi Nanda', '8', 'dwinandahendiyansa@gmail.com', '82113369737', 'D001', '02311510000046', 'Chemical Engineering\r'),
	('Rayhan Shiena', '7', 'rayhan.ibnu@ymail.com', '8981389489', 'D003', '02311510000102', 'Chemical Engineering\r'),
	('Maria Amelia Sandra', '8', 'meliasan2@gmail.com', '81515136996', 'D002', '02311510000112', 'Chemical Engineering\r'),
	('Fransiskus Budi', '7', 'fransiskusbudi97@gmail.com', '81242083672', 'D001', '02311510000113', 'Chemical Engineering\r'),
	('Silvania Wemona Rahma', '8', 'silvania.wemona@gmail.com', '82139417445', 'D002', '02311610000018', 'Chemical Engineering\r'),
	('Imanuel Berin', '8', 'imanuelberin@gmail.com', '82233848180', 'D001', '02311610000031', 'Chemical Engineering\r'),
	('Kezia Dewi Rona Liemen', '8', 'kezia332010@yahoo.com', '81357575798', 'D001', '02311610000056', 'Chemical Engineering\r'),
	('Agung Hanifianto Rahardjo', '8', 'agunghanif21@gmail.com', '85776506474', 'D002', '02311610000059', 'Chemical Engineering\r'),
	('Chandra Adiwijaya', '8', 'channnndra@gmail.com', '85892366230', 'D003', '02311610000179', 'Chemical Engineering\r'),
	('Nuril Hidayati', '8', 'nuril2616@gmail.com', '85649362897', 'D002', '02411610000026', 'Engineering Physics\r'),
	('Ahmed Raecky Baihaqy', '7', 'raecky.reki@gmail.com', '82337306692', 'D002', '02511510000009', 'Industrial Engineering\r'),
	('Alfia Khairani Simanjuntak', '8', 'alfiakhairani42@gmail.com', '85207922507', 'D001', '02511510000055', 'Industrial Engineering\r'),
	('Made Gilang Sedayu Bagaskara .S', '8', 'gilangsedayu98@gmail.com', '81238106483', 'D003', '02511510000076', 'Industrial Engineering\r'),
	('Rossie Augustine', '8', 'augustinerossie123@gmail.com', '87855000312', 'D002', '02511510000117', 'Industrial Engineering\r'),
	('Adolft Afwari Rahman', '7', 'adolft.afwari@gmail.com', '81276931457', 'D002', '02511510000124', 'Industrial Engineering\r'),
	('Komang Nickita Sari', '8', 'komangnickita97@gmail.com', '87852225300', 'D002', '02511610000006', 'Industrial Engineering\r'),
	('Tyas Wahyu Pramesti', '8', 'tyasms@gmail.com', '85600394909', 'D002', '02511610000007', 'Industrial Engineering\r'),
	('Steven Theja', '8', 'steven_theja@yahoo.com', '81334071915', 'D002', '02511610000145', 'Industrial Engineering\r'),
	('Bintang Ayu Nuraeni', '7', 'bintangayu@gmail.com', '85730780622', 'D001', '02711510000048', 'Materials Engineering and Metallurgy\r'),
	('Lalitadevi', '7', 'devi.lalita@gmail.com', '87853755561', 'D002', '02811510000062', 'Multimedia and Network Engineering\r'),
	('Wororeni', '8', 'wororeni@gmail.com', '85780771641', 'D002', '03311610000030', 'Environmental Engineering\r'),
	('Ahmad Syahid Abdulloh', '8', 'bangsaidd@gmail.com', '85732441244', 'D003', '03411610000025', 'Geomatics Engineering\r'),
	('Tatag Puteri Nurarifiani', '8', 'tatag.nurarifiani@yahoo.com', '82165650342', 'D001', '03411610000043', 'Geomatics Engineering\r'),
	('Daniel Pratama Manik', '8', 'dmanik03@gmail.com', '82110892638', 'D002', '03611610000049', 'Urban and Regional Planning\r'),
	('Muhammad Ilham Perkasa', '8', 'ilhamperkasa@gmail.com', '82141938055', 'D001', '03611610000068', 'Urban and Regional Planning\r'),
	('Naomi Nadya Angelia Siregar', '8', 'noms2205@gmail.com', '82285393547', 'D003', '03711510000051', 'Geophysical Engineering\r'),
	('Anindya Noviyanti Kiswiyanto', '8', 'anindyakiswiyanto@gmail.com', '81210770505', 'D001', '03811610000037', 'Interior Design\r'),
	('Ramirez Pasquale Widagdo', '7', 'ramirez.masterq@gmail.com', '82218941997', 'D001', '04211510000049', 'Sea Transportation System\r'),
	('Farah Devira', '8', 'devirafarah@gmail.com', '81234678242', 'D001', '04411510000004', 'Ship System Engineering\r'),
	('Aaron Setiawan', '7', 'aaronsetiawan@gmail.com', '81333899847', 'D003', '05111510000107', 'Informatics\r'),
	('Rafi R. Ramadhan', '7', 'rafi.rr@gmail.com', '85376565356', 'D002', '05111510000158', 'Informatics\r'),
	('Christopher Andrew', '8', 'andrew.public107@gmail.com', '81703434783', 'D003', '05111610000107', 'Informatics\r'),
	('Erica Maulidina Bening', '7', 'erica.maulidina@gmail.com', '82234755077', 'D003', '05211510000094', 'Information Systems\r'),
	('Regita Ayu Cahyani Zulaikhah', '8', 'regitaayucahyani@gmail.com', '81336639177', 'D003', '05211610000125', 'Information Systems\r');
/*!40000 ALTER TABLE `volunteer` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
