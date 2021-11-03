-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 03:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ttms`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Enquiryid` int(11) NOT NULL,
  `Packageid` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobileno` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoofDays` int(11) NOT NULL,
  `Child` int(11) NOT NULL,
  `Adults` int(11) NOT NULL,
  `message` varchar(900) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `Statusfield` varchar(200) NOT NULL,
  `enquiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Enquiryid`, `Packageid`, `Name`, `Gender`, `Mobileno`, `Email`, `NoofDays`, `Child`, `Adults`, `message`, `hotel_name`, `Statusfield`, `enquiry_date`) VALUES
(3, 4, '', 'female', '', '', 0, 0, 0, '', '', 'Confirm', '2020-01-08 18:15:48'),
(4, 4, '', 'female', '', '', 0, 0, 0, '', '', 'Confirm', '2020-01-08 18:16:19'),
(8, 4, '', 'female', '', '', 0, 0, 0, '', '', 'Confirm', '2020-01-08 18:27:00'),
(9, 4, '', 'female', '', '', 0, 0, 0, '', '', 'Confirm', '2020-01-08 18:50:23'),
(10, 4, '', 'female', '', '', 0, 0, 0, '', 'Hotel Night Heaven ', 'Cancel', '2020-01-09 13:42:04'),
(11, 5, '', 'female', '', '', 0, 0, 0, 'Hotel Hill View ', '', 'Confirm', '2020-01-10 06:55:31'),
(12, 2, 'Rahajul sujon', 'male', '01747999441', 'rahajul@gmail.com', 5, 0, 5, 'Hotel Sea Crown ', 'i want to tour with you.....', 'Pending', '2020-01-10 09:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertiesment`
--

CREATE TABLE `tbl_advertiesment` (
  `a_id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `subcategory` int(11) NOT NULL,
  `package` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `a_img_1` text NOT NULL,
  `a_img_2` text NOT NULL,
  `a_img_3` text NOT NULL,
  `offer` varchar(255) NOT NULL,
  `a_details` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_advertiesment`
--

INSERT INTO `tbl_advertiesment` (`a_id`, `title`, `category`, `subcategory`, `package`, `company_name`, `a_img_1`, `a_img_2`, `a_img_3`, `offer`, `a_details`) VALUES
(1, 'winter offer', 2, 10, 4, 'x3 team', 'image/advertisment/53048576_596870617406376_2470958650336739328_n.jpg', 'image/advertisment/balikhola-kishoreganj-770x420.jpg', 'image/advertisment/gettyimages-139201751-2048x2048.jpg', '30% off', 'winter package offer for enjoy your tour....'),
(2, '', 0, 0, 0, '', 'image/advertisment/42809766054_89643fde67_b.jpg', 'image/advertisment/Kotka-Beach.jpg', 'image/advertisment/WEB_Sundarbans_Spotted-Deer_Featured_Syed-Zakir-Hossain_Edited_07.12.2017.jpg', '', ''),
(3, 'winter offer', 2, 12, 4, 'x3 team', 'image/advertisment/main-qimg-32fd5d5b908ec6c36e65dc6a16623f76.webp', 'image/advertisment/Sundarban.jpg', 'image/advertisment/Ell58VC.jpg', '40% off', 'enjoy your tour... with best winter offer...');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(2) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(2, 'family tour'),
(3, 'Friends and family tour'),
(4, 'Single trip tour');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `comment_sender_name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'hi', 'mahbub', '2020-01-08 14:56:53'),
(2, 1, 'hellow...', 'hiron', '2020-01-08 14:57:19'),
(3, 2, 'please tell me ,what do you want...', 'hiron', '2020-01-08 15:01:45'),
(4, 0, 'i am here', 'kazol', '2020-01-08 20:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phn_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `phn_no`, `email`, `details`) VALUES
(1, 'mahbub', '01914679736', 'mhalom19@gmail.com', 'here i have lost problem about visit  your page...can your help me.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `package_id` int(2) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `category` int(2) NOT NULL,
  `subcategory` int(2) NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `place_img_one` text NOT NULL,
  `place_img_two` text NOT NULL,
  `place_img_three` text NOT NULL,
  `hotel_name_one` varchar(255) NOT NULL,
  `hotelone_img_one` text NOT NULL,
  `hotelone_img_two` text NOT NULL,
  `hotelone_img_three` text NOT NULL,
  `hotel_link_one` varchar(255) NOT NULL,
  `hotel_name_two` varchar(255) NOT NULL,
  `hoteltwo_img_one` text NOT NULL,
  `hoteltwo_img_two` text NOT NULL,
  `hoteltwo_img_three` text NOT NULL,
  `hotel_link_two` varchar(255) NOT NULL,
  `hotel_name_three` varchar(255) NOT NULL,
  `hotelthree_img_one` text NOT NULL,
  `hotelthree_img_two` text NOT NULL,
  `hotelthree_img_three` text NOT NULL,
  `hotel_link_three` varchar(255) NOT NULL,
  `package_details` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`package_id`, `package_name`, `category`, `subcategory`, `package_price`, `place_img_one`, `place_img_two`, `place_img_three`, `hotel_name_one`, `hotelone_img_one`, `hotelone_img_two`, `hotelone_img_three`, `hotel_link_one`, `hotel_name_two`, `hoteltwo_img_one`, `hoteltwo_img_two`, `hoteltwo_img_three`, `hotel_link_two`, `hotel_name_three`, `hotelthree_img_one`, `hotelthree_img_two`, `hotelthree_img_three`, `hotel_link_three`, `package_details`) VALUES
(2, 'lowest package with coxs bazar', 2, 10, '30000', 'image/package/1.jpg', 'image/package/2.jpg', 'image/package/7.jpg', 'Exotica Sampan', 'image/package/hotel/117749138.jpg', 'image/package/hotel/124665485.jpg', 'image/package/hotel/203485915.jpg', 'https://www.booking.com/hotel/bd/exotica-sampan.en-gb.html?aid=306395;label=coxs-bazar-uV09lFQ73Ls%2A4y%2AdQUxZwwS360647158466%3Apl%3Ata%3Ap115%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-11531325386%3Alp9069450%3Ali%3Adec%3Adm;sid=c89fc0e2365768fc964bf36a131698', 'Saint Martin Resort', 'image/package/hotel/120397144.jpg', 'image/package/hotel/203485878.jpg', 'image/package/hotel/124665485.jpg', 'https://www.booking.com/hotel/bd/saint-martin-resort.en-gb.html?aid=306395;label=coxs-bazar-uV09lFQ73Ls%2A4y%2AdQUxZwwS360647158466%3Apl%3Ata%3Ap115%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-11531325386%3Alp9069450%3Ali%3Adec%3Adm;sid=c89fc0e2365768fc964bf36a1', 'Hotel Sea Crown', 'image/package/hotel/120397144.jpg', 'image/package/hotel/120808230.jpg', 'image/package/hotel/121138028.jpg', 'https://www.booking.com/hotel/bd/sea-crown.en-gb.html?aid=306395;label=coxs-bazar-uV09lFQ73Ls%2A4y%2AdQUxZwwS360647158466%3Apl%3Ata%3Ap115%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-11531325386%3Alp9069450%3Ali%3Adec%3Adm;sid=c89fc0e2365768fc964bf36a13169839', 'this is the best package for tour tour with your family.....'),
(3, 'adventure in bandorban', 3, 11, '35000', 'image/package/hqdefault.jpg', 'image/package/3.jpg', 'image/package/4.jpg', 'Exotica Sampan', 'image/package/hotel/01e29d7f_z.jpg', 'image/package/hotel/2c9cc1fd_z.jpeg', 'image/package/hotel/e88c78bf_z.jpg', 'https://www.booking.com/hotel/bd/exotica-sampan.en-gb.html?aid=306395;label=coxs-bazar-uV09lFQ73Ls%2A4y%2AdQUxZwwS360647158466%3Apl%3Ata%3Ap115%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-11531325386%3Alp9069450%3Ali%3Adec%3Adm;sid=c89fc0e2365768fc964bf36a131698', 'Saint Martin Resort', 'image/package/hotel/893c13d6_z.jpeg', 'image/package/hotel/bf423fc3_z.jpg', 'image/package/hotel/e92f9ff1_z.jpeg', 'https://www.booking.com/hotel/bd/saint-martin-resort.en-gb.html?aid=306395;label=coxs-bazar-uV09lFQ73Ls%2A4y%2AdQUxZwwS360647158466%3Apl%3Ata%3Ap115%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-11531325386%3Alp9069450%3Ali%3Adec%3Adm;sid=c89fc0e2365768fc964bf36a1', 'Hotel Sea Crown', 'image/package/hotel/141393781.jpg', 'image/package/hotel/c78877e8_z.jpg', 'image/package/hotel/09853fbb_z.jpg', 'https://www.booking.com/hotel/bd/sea-crown.en-gb.html?aid=306395;label=coxs-bazar-uV09lFQ73Ls%2A4y%2AdQUxZwwS360647158466%3Apl%3Ata%3Ap115%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-11531325386%3Alp9069450%3Ali%3Adec%3Adm;sid=c89fc0e2365768fc964bf36a13169839', 'enjoy your tour with family and friends with the best lowest package.....'),
(4, 'bandarban hill', 4, 12, '20000', 'image/package/42809766054_89643fde67_b.jpg', 'image/package/Ell58VC.jpg', 'image/package/sundarban-threat.jpg', 'Hotel Night Heaven', 'image/package/hotel/138338511.jpg', 'image/package/hotel/135215625.jpg', 'image/package/hotel/236265721.jpg', 'https://www.booking.com/hotel/bd/night-heaven-bandarban.en-gb.html?aid=306395;label=bandarban-oUf8MLclSpPvXxIsCsEGPwS329825465029%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-297813782576%3Alp9069450%3Ali%3Adec%3Adm;sid=c89fc0e2365768fc964bf36a1316', 'Hotel Hill View ', 'image/package/hotel/141405273.jpg', 'image/package/hotel/141405335.jpg', 'image/package/hotel/141405291.jpg', 'https://www.booking.com/hotel/bd/hill-view.en-gb.html?aid=306395;label=bandarban-oUf8MLclSpPvXxIsCsEGPwS329825465029%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-297813782576%3Alp9069450%3Ali%3Adec%3Adm;sid=c89fc0e2365768fc964bf36a13169839;dest_id=', 'Hill Palace Resort', 'image/package/hotel/236241956.jpg', 'image/package/hotel/141405285.jpg', 'image/package/hotel/141405335.jpg', 'https://www.booking.com/hotel/bd/hill-palace-resort.en-gb.html?aid=306395;label=bandarban-oUf8MLclSpPvXxIsCsEGPwS329825465029%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-297813782576%3Alp9069450%3Ali%3Adec%3Adm;sid=c89fc0e2365768fc964bf36a13169839', 'enjoy your days....'),
(5, 'bandarban hill 001', 4, 12, '50000', 'image/package/53048576_596870617406376_2470958650336739328_n.jpg', 'image/package/balikhola-kishoreganj-770x420.jpg', 'image/package/gettyimages-139201751-2048x2048.jpg', 'Hill Palace Resort', 'image/package/hotel/24302300_363821950711306_3364757199936733474_o.jpg', 'image/package/hotel/sea-beach.jpg', 'image/package/hotel/WEB_Sundarbans_Spotted-Deer_Featured_Syed-Zakir-Hossain_Edited_07.12.2017.jpg', 'https://www.booking.com/hotel/bd/exotica-sampan.en-gb.html?aid=306395;label=coxs-bazar-uV09lFQ73Ls%2A4y%2AdQUxZwwS360647158466%3Apl%3Ata%3Ap115%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-11531325386%3Alp9069450%3Ali%3Adec%3Adm;sid=c89fc0e2365768fc964bf36a131698', 'Hotel Hill View', 'image/package/hotel/main-qimg-32fd5d5b908ec6c36e65dc6a16623f76.webp', 'image/package/hotel/16177568_1387808947959660_6244156527426967439_o.jpg', 'image/package/hotel/hqdefault (1).jpg', 'https://www.booking.com/hotel/bd/saint-martin-resort.en-gb.html?aid=306395;label=coxs-bazar-uV09lFQ73Ls%2A4y%2AdQUxZwwS360647158466%3Apl%3Ata%3Ap115%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-11531325386%3Alp9069450%3Ali%3Adec%3Adm;sid=c89fc0e2365768fc964bf36a1', 'Hill Palace Resort', 'image/package/hotel/maxresdefault (1).jpg', 'image/package/hotel/5.jpg', 'image/package/hotel/5.jpg', 'https://www.booking.com/hotel/bd/venus-resort-pvs-ltd.en-gb.html?aid=306395;label=bandarban-B2bQWvqBm8rw8XFthCCv3QS203193096126%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap1t1%3Aneg%3Afi%3Atikwd-391473103877%3Alp9069450%3Ali%3Adec%3Adm;sid=3bbcbfcb086346a32b0c37c9031834', 'ok package set....');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(2) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `subcategory_image` text,
  `subcategory_details` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_name`, `subcategory_image`, `subcategory_details`) VALUES
(10, 'family tour in coxs bazar', '2', './image/subcategory_image/3.jpg', 'Enjoy your family tour...'),
(11, 'friends and family tour is shylet', '3', './image/subcategory_image/1.jpg', 'Enjoy the tour your family and your friends..... '),
(12, 'bandarban', '4', './image/subcategory_image/hqdefault.jpg', 'enjoy your day.........');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(2) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_no` varchar(255) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_confirm_pass` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `user_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_no`, `user_pass`, `user_confirm_pass`, `user_type`, `user_img`) VALUES
(2, 'a', 'a@gamil.com', '1358', 'a', 'a', 'genarel', 'image/4.jpg'),
(3, 'admin', 'admin@gmail.com', '1735371722', 'admin', 'admin', 'admin', './image/7.jpg'),
(4, 'demo', 'demo@gmail.com', '01756007000', '123', '123', 'admin', 'image/Screenshot (9).png'),
(5, 'mahbub hiron', 'ahiron@gmail.com', '01756007000', 'hiron', 'hiron', 'admin', './image/p.jpg'),
(6, 'Rahul', 'rahul@gmail.com', '01527989898', 'rahul', 'rahul', 'admin', './image/2-in-1-type-c-charging-audio-cable-type-c.jpg'),
(7, 'Rahul', 'rahul@gmail.com', '01519898989', 'rahul', 'rahul', 'genarel', './image/2-in-1-type-c-charging-audio-cable-type-c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`Enquiryid`);

--
-- Indexes for table `tbl_advertiesment`
--
ALTER TABLE `tbl_advertiesment`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `Enquiryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_advertiesment`
--
ALTER TABLE `tbl_advertiesment`
  MODIFY `a_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `package_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
