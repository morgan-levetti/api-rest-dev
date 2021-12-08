-- -------------------------------------------------------------
-- TablePlus 4.5.0(396)
--
-- https://tableplus.com/
--
-- Database: api-wine-list
-- Generation Time: 2021-12-08 13:47:58.2490
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211201123038', '2021-12-01 12:30:59', 135),
('DoctrineMigrations\\Version20211201124346', '2021-12-01 12:43:57', 130),
('DoctrineMigrations\\Version20211201125449', '2021-12-01 12:55:01', 137),
('DoctrineMigrations\\Version20211201125742', '2021-12-01 12:57:51', 112),
('DoctrineMigrations\\Version20211201130215', '2021-12-01 13:02:29', 123),
('DoctrineMigrations\\Version20211201135140', '2021-12-01 13:51:56', 99),
('DoctrineMigrations\\Version20211201150140', '2021-12-01 15:01:55', 99),
('DoctrineMigrations\\Version20211201150448', '2021-12-01 15:05:25', 126),
('DoctrineMigrations\\Version20211202142107', '2021-12-02 14:21:24', 172),
('DoctrineMigrations\\Version20211202154155', '2021-12-02 15:42:08', 161),
('DoctrineMigrations\\Version20211206122115', '2021-12-06 12:21:27', 278),
('DoctrineMigrations\\Version20211206124001', '2021-12-06 12:40:09', 153),
('DoctrineMigrations\\Version20211206140051', '2021-12-06 14:00:58', 142),
('DoctrineMigrations\\Version20211206140519', '2021-12-06 14:05:49', 156);


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;