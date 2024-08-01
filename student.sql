-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 06:23 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ad_id` int(11) NOT NULL,
  `ad_username` varchar(255) NOT NULL,
  `ad_email` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ad_id`, `ad_username`, `ad_email`, `ad_password`) VALUES
(1, 'nilesh', 'nilesh@gmail.com', 'Qwerty@1234');

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

CREATE TABLE `booknow` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`id`, `user_id`, `name`, `email`, `phone_number`, `pincode`, `region`, `address`, `services`, `status`, `date`, `time`) VALUES
(9, '1', 'Shahid', 'kasjdk', 2147483647, '', '', '', '', 'Cancelled', '', ''),
(10, '1', 'Om Prakash', 'om@kajsd.com', 2147483647, '400101', 'Kandivali East  ', ' Some address', 'asdsad', 'Cancelled', '', ''),
(11, '1', 'B/002,SHELTER CHS, CS ROAD NO 3', 'mansurishahid37@gmail.com', 2147483647, '400068', 'Dahisar ', 'B/002,SHELTER CHS, CS ROAD NO 3', 'Electrician Carpenter Washing Machine', '', '', ''),
(12, '1', 'B/002,SHELTER CHS, CS ROAD NO 3', 'mansurishahid37@gmail.com', 2147483647, '400068', 'Dahisar ', 'B/002,SHELTER CHS, CS ROAD NO 3', ' Plumber', 'Booked', '2021-04-07', '17:29'),
(13, '1', 'Shahid', 'hajksdh@gmail.com', 2147483647, '400097', 'Malad East  ', ' KSjdhah', ' Plumber Electrician Carpenter', 'Cancelled', '2021-04-14', '16:26');

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

CREATE TABLE `pincode` (
  `id` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `district` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pincode`
--

INSERT INTO `pincode` (`id`, `pincode`, `district`) VALUES
(239, 400037, 'B P T Colony '),
(240, 400003, 'B.P.Lane '),
(241, 400012, 'BEST STaff Quarters  '),
(242, 400037, 'C G S Colony  '),
(243, 400012, 'Chamarbaug  '),
(244, 400009, 'Chinchbunder  '),
(245, 400033, 'Cotton Exchange  '),
(246, 400014, 'Dadar Colony  '),
(247, 400014, 'Dadar  '),
(248, 400010, 'Dockyard Road  '),
(249, 400012, 'Haffkin Institute  '),
(250, 400033, 'Kalachowki  '),
(251, 400031, 'Kidwai Nagar    Mumbai '),
(252, 400033, 'L B S N E collage  '),
(253, 400012, 'Lal Baug  '),
(254, 400003, 'Mandvi    Mumbai '),
(255, 400003, 'Masjid  '),
(256, 400010, 'Mazgaon Dock  '),
(257, 400010, 'Mazgaon Road  '),
(258, 400010, 'Mazgaon  '),
(259, 400014, 'Naigaon    Mumbai '),
(260, 400009, 'Noor Baug  '),
(261, 400003, 'Null Bazar  '),
(262, 400012, 'Parel Naka  '),
(263, 400012, 'Parel Rly Work Shop  '),
(264, 400012, 'Parel City  '),
(265, 400009, 'Princess Dock  '),
(266, 400033, 'Reay Road  '),
(267, 400015, 'Sewri  '),
(268, 400033, 'Tank Road  '),
(269, 400027, 'V J B Udyan  '),
(270, 400010, 'V K Bhavan  '),
(271, 400031, 'Wadala Rs  '),
(272, 400031, 'Wadala  '),
(273, 400037, 'Wadala Truck Terminal  '),
(274, 400029, 'A I Staff Colony  '),
(275, 400099, 'Airport    Mumbai '),
(276, 400069, 'Andheri East  '),
(277, 400053, 'Andheri  '),
(278, 400058, 'Andheri Railway Station  '),
(279, 400051, 'Audit Bhavan  '),
(280, 400053, 'Azad Nagar    Mumbai '),
(281, 400051, 'B.N. Bhavan  '),
(282, 400050, 'Bandra West  '),
(283, 400051, 'Bandra East   '),
(284, 400093, 'Chakala Midc  '),
(285, 400052, 'Danda  '),
(286, 400051, 'Government Colony  '),
(287, 400058, 'H.M.P. School  '),
(288, 400057, 'Hanuman Road  '),
(289, 400099, 'International Airport  '),
(290, 400056, 'IRLA  '),
(291, 400059, 'J.B. Nagar  '),
(292, 400049, 'Juhu  '),
(293, 400052, 'Khar Colony  '),
(294, 400052, 'Khar Delivery  '),
(295, 400051, 'Kherwadi  '),
(296, 400061, 'Madh B.O'),
(297, 400059, 'Marol Bazar  '),
(298, 400059, 'Marol Naka  '),
(299, 400069, 'Nagardas Road  '),
(300, 400099, 'Sahar P and T Colony  '),
(301, 400099, 'Sahargaon B.O'),
(302, 400054, 'Santacruz Central  '),
(303, 400029, 'Santacruz Pandt Colony  '),
(304, 400055, 'Santacruz East   '),
(305, 400054, 'Santacruz West   '),
(306, 400096, 'Seepz  '),
(307, 400052, 'V.P. Road  '),
(308, 400055, 'Vakola  '),
(309, 400061, 'Vesava  '),
(310, 400098, 'Vidyanagari  '),
(311, 400057, 'Vileeparle  East   '),
(312, 400057, 'Vileparle Railway Station  '),
(313, 400056, 'Vileparle West   '),
(314, 400094, 'Anushakti Nagar  '),
(315, 400085, 'BARC  '),
(316, 400084, 'Barve Nagar  '),
(317, 400075, 'Best Staff Colony  '),
(318, 400082, 'Bhandup Complex  '),
(319, 400042, 'Bhandup East  '),
(320, 400078, 'Bhandup Ind. Estate  '),
(321, 400078, 'Bhandup West  '),
(322, 400074, 'Chembur Extension  '),
(323, 400071, 'Chembur  '),
(324, 400089, 'Chembur Rs  '),
(325, 400022, 'Chunabhatti  '),
(326, 400043, 'D.M. Colony  '),
(327, 400074, 'FCI  '),
(328, 400086, 'Ghatkopar West  '),
(329, 400088, 'Govandi  '),
(330, 400078, 'J.M. Road  '),
(331, 400083, 'Kannamwar Nagar  '),
(332, 400070, 'Kurla North  '),
(333, 400070, 'Kurla  '),
(334, 400074, 'Mahul Road  '),
(335, 400019, 'Matunga  '),
(336, 400081, 'Mhada Colony  '),
(337, 400082, 'Mulund Colony  '),
(338, 400080, 'Mulund Dd Road  '),
(339, 400081, 'Mulund East  '),
(340, 400080, 'Mulund West  '),
(341, 400080, 'Nahur  '),
(342, 400024, 'Nehru Nagar    Mumbai '),
(343, 400080, 'Nehru Road    Mumbai '),
(344, 400070, 'Netajinagar  '),
(345, 400087, 'NITIE  '),
(346, 400078, 'P.H. Colony  '),
(347, 400075, 'Pant Nagar  '),
(348, 400076, 'Powai Iit  '),
(349, 400079, 'Psm Colony  '),
(350, 400075, 'R.A.Nagar  '),
(351, 400077, 'Rajawadi  '),
(352, 400022, 'Raoli Camp  '),
(353, 400086, 'Rifle Range  '),
(354, 400080, 'S.B. Road  '),
(355, 400086, 'Sahakar Bhavan  '),
(356, 400072, 'Sakinaka  '),
(357, 400043, 'Shivaji Nagar    Mumbai '),
(358, 400071, 'Sindhi Society  '),
(359, 400022, 'Sion  '),
(360, 400088, 'T.F.Donar  '),
(361, 400083, 'Tagore Nagar  '),
(362, 400089, 'Tilak Nagar    Mumbai '),
(363, 400022, 'Transit Camp  '),
(364, 400088, 'Trombay  '),
(365, 400078, 'Usha Nagar  '),
(366, 400072, 'Vihar Road  '),
(367, 400079, 'Vikhroli  '),
(368, 400065, 'Aareymilk Colony  '),
(369, 400104, 'Bangur Nagar  '),
(370, 400066, 'Borivali East  '),
(371, 400091, 'Borivali  '),
(372, 400092, 'Borivali West  '),
(373, 400067, 'Charkop  '),
(374, 400068, 'Dahisar '),
(375, 400068, 'Dahisar'),
(376, 400066, 'Daulat Nagar    Mumbai '),
(377, 400063, 'Goregaon East  '),
(378, 400104, 'Goregaon RS  '),
(379, 400104, 'Goregaon    Mumbai '),
(380, 400095, 'Ins Hamla  '),
(381, 400060, 'Jogeshwari East  '),
(382, 400102, 'Jogeshwari West  '),
(383, 400101, 'Kandivali East  '),
(384, 400067, 'Kandivali RS  '),
(385, 400067, 'Kandivali West  '),
(386, 400068, 'Ketkipada B.O'),
(387, 400095, 'Kharodi  '),
(388, 400064, 'Liberty Garden  '),
(389, 400066, 'Magthane B.O'),
(390, 400097, 'Malad East  '),
(391, 400064, 'Malad  '),
(392, 400064, 'Malad West Dely  '),
(393, 400103, 'Mandapeshwar  '),
(394, 400104, 'Motilal Nagar  '),
(395, 400065, 'Nagari Niwara  '),
(396, 400064, 'Orlem  '),
(397, 400102, 'Oshiwara  '),
(398, 400066, 'Rajendra Nagar    Mumbai '),
(399, 400097, 'Rani Sati Marg  '),
(400, 400065, 'S R P F Camp  '),
(401, 400066, 'S. K.Nagar  '),
(402, 400063, 'Sharma Estate  '),
(403, 400004, 'Ambewadi    Mumbai '),
(404, 400005, 'Asvini  '),
(405, 400001, 'Bazargate  '),
(406, 400020, 'Central Building  '),
(407, 400004, 'Charni Road  '),
(408, 400004, 'Chaupati  '),
(409, 400020, 'Churchgate  '),
(410, 400005, 'Colaba Bazar  '),
(411, 400005, 'Colaba  '),
(412, 400004, 'Girgaon  '),
(413, 400032, 'High Court Building    Mumbai '),
(414, 400005, 'Holiday Camp  '),
(415, 400002, 'Kalbadevi  '),
(416, 400001, 'M.P.T.  '),
(417, 400004, 'Madhavbaug  '),
(418, 400032, 'Mantralaya    Mumbai '),
(419, 400020, 'Marine Lines  '),
(420, 400021, 'Nariman Point  '),
(421, 400021, 'New Yogakshema  '),
(422, 400004, 'Opera House  '),
(423, 400002, 'Ramwadi  '),
(424, 400002, 'S. C. Court  '),
(425, 400032, 'Secretariate  '),
(426, 400001, 'Stock Exchange  '),
(427, 400001, 'Tajmahal  '),
(428, 400002, 'Thakurdwar  '),
(429, 400001, 'Town Hall    Mumbai '),
(430, 400005, 'V.W.T.C.  '),
(431, 400011, 'Agripada  '),
(432, 400007, 'Bharat Nagar    Mumbai '),
(433, 400028, 'Bhawani Shankar Rd  '),
(434, 400028, 'Bhawani Shankar  '),
(435, 400011, 'BPC  Jacob Circle  '),
(436, 400030, 'Century Mill  '),
(437, 400011, 'Chinchpokli  '),
(438, 400026, 'Cumballa Hill  '),
(439, 400026, 'Cumballa Sea Face  '),
(440, 400013, 'Delisle Road  '),
(441, 400017, 'Dharavi Road  '),
(442, 400017, 'Dharavi  '),
(443, 400026, 'Dr Deshmukh Marg  '),
(444, 400008, 'Falkland Road  '),
(445, 400028, 'Gokhale Road    Mumbai '),
(446, 400026, 'Gowalia Tank  '),
(447, 400007, 'Grant Road  '),
(448, 400011, 'Haines Road  '),
(449, 400034, 'Haji Ali  '),
(450, 400008, 'J.J.Hospital  '),
(451, 400011, 'Jacob Circle  '),
(452, 400008, 'Kamathipura  '),
(453, 400016, 'Kapad Bazar  '),
(454, 400008, 'M A Marg  '),
(455, 400016, 'Mahim Bazar  '),
(456, 400016, 'Mahim East  '),
(457, 400016, 'Mahim  '),
(458, 400006, 'Malabar Hill  '),
(459, 400016, 'Mori Road  '),
(460, 400008, 'Mumbai Central  '),
(461, 400007, 'N.S.Patkar Marg  '),
(462, 400025, 'New Prabhadevi Road  '),
(463, 400025, 'Prabhadevi  '),
(464, 400035, 'Rajbhavan    Mumbai '),
(465, 400028, 'Ranade Road  '),
(466, 400007, 'S V Marg  '),
(467, 400028, 'S V S Marg  '),
(468, 400028, 'Shivaji Park    Mumbai '),
(469, 400007, 'Tardeo  '),
(470, 400034, 'Tulsiwadi  '),
(471, 400030, 'Worli Colony  '),
(472, 400018, 'Worli Naka  '),
(473, 400030, 'Worli Police Camp  '),
(474, 400018, 'Worli  '),
(475, 400030, 'Worli Sea Face  '),
(476, 400001, 'Mumbai G.P.O. ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `email`, `password`) VALUES
(1, 'nilesh', 'nilesh@gmail.com', 'Qwerty@123'),
(39, 'nilesh2', 'nilesh34@gmail.com', 'Qwerty@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `booknow`
--
ALTER TABLE `booknow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pincode`
--
ALTER TABLE `pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booknow`
--
ALTER TABLE `booknow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pincode`
--
ALTER TABLE `pincode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=477;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
