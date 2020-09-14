SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
--
-- Database: `graphical_pwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

-- CREATE TABLE `images` (
--   `layer` bigint(7) NOT NULL,
--   `1` varchar(800) NOT NULL,
--   `2` varchar(800) NOT NULL,
--   `3` varchar(800) NOT NULL,
--   `4` varchar(800) NOT NULL,
--   `5` varchar(800) NOT NULL,
--   PRIMARY KEY  (`layer`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `clg` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `userimage` varchar(800) NOT NULL,
  `image1` varchar(800) NOT NULL,
  `image2` varchar(800) NOT NULL,
  `image3` varchar(800) NOT NULL,
  `image4` varchar(800) NOT NULL,
  `image5` varchar(800) NOT NULL,
  PRIMARY KEY  (`username`,`email`,`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--
