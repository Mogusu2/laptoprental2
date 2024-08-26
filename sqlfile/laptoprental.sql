-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 07:57 AM


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptoprental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_Id` int(11) NOT NULL,
  `admin_UserName` varchar(100) NOT NULL,
  `admin_Password` varchar(100) NOT NULL,
  `admin_UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`admin_Id`)  
);

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_Id`, `admin_UserName`, `admin_Password`, `admin_UpdationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2024-02-27 10:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `user_Id` int(11) NOT NULL,
  `user_FullName` varchar(120) DEFAULT NULL,
  `user_Email` varchar(100) NOT NULL,
  `user_Password` varchar(100) DEFAULT NULL,
  `user_ContactNo` char(11) DEFAULT NULL,
  `user_dob` varchar(100) DEFAULT NULL,
  `user_Address` varchar(255) DEFAULT NULL,
  `user_City` varchar(100) DEFAULT NULL,
  `user_Country` varchar(100) DEFAULT NULL,
  `user_RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`user_Id`)  
);

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`user_Id`, `user_FullName`, `user_Email`, `user_Password`, `user_ContactNo`, `user_dob`, `user_Address`, `user_City`, `user_Country`, `user_RegDate`, `user_UpdationDate`) VALUES
(1, 'James Wako', 'jameswako@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '0747483647', NULL, NULL, NULL, NULL, '2024-02-17 19:59:27', '2024-02-26 21:02:58'),
(2, 'Diana Brenda', 'dianabrendagmail.com', 'f925916e2754e5e03f75dd58a5733251', '0785703354', NULL, NULL, NULL, NULL, '2024-02-17 20:00:49', '2024-02-26 21:03:09'),
(3, 'Mark Kimosi', 'markkimosi@gmail.com', 'f09df7868d52e12bba658982dbd79821', '0799857808', '03/02/1990', 'PKL', 'PKL', 'PKL', '2024-02-17 20:01:43', '2024-02-17 21:07:41'),
(4, 'Fay Pretty', 'prettyfay@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '0799857868', '', 'PKL', 'XYZ', 'XYZ', '2024-02-17 20:03:36', '2024-02-26 19:18:14');

-- --------------------------------------------------------


--
-- Table structure for table `tbllaptops`
--

CREATE TABLE IF NOT EXISTS `tbllaptops` (
  `laptop_Id` int(11) NOT NULL,
  `laptop_Title` varchar(150) DEFAULT NULL,
  `laptop_Brand` int(11) DEFAULT NULL,
  `laptop_Overview` longtext,
  `laptop_PricePerDay` int(11) DEFAULT NULL,
  `laptop_OperatingSystem` varchar(100) DEFAULT NULL,
  `laptop_ModelYear` int(6) DEFAULT NULL,
  `laptop_Storage` int(11) DEFAULT NULL,
  `laptop_Vimage1` varchar(120) DEFAULT NULL,
  `laptop_Vimage2` varchar(120) DEFAULT NULL,
  `laptop_Vimage3` varchar(120) DEFAULT NULL,
  `laptop_Vimage4` varchar(120) DEFAULT NULL,
  `laptop_Vimage5` varchar(120) DEFAULT NULL,
  `laptop_Fan` int(11) DEFAULT NULL,
  `laptop_SecureBoot` int(11) DEFAULT NULL,
  `laptop_LockScreenType` int(11) DEFAULT NULL,
  `laptop_Antivirus` int(11) DEFAULT NULL,
  `laptop_PowerSafeMode` int(11) DEFAULT NULL,
  `laptop_UserAccount` int(11) DEFAULT NULL,
  `laptop_AdministratorAcc` int(11) DEFAULT NULL,
  `laptop_TouchScreen` int(11) DEFAULT NULL,
  `laptop_CDPlayer` int(11) DEFAULT NULL,
  `laptop_BitLocker` int(11) DEFAULT NULL,
  `laptop_WebCam` int(11) DEFAULT NULL,
  `laptop_Mouse` int(11) DEFAULT NULL,
  `laptop_RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `laptop_UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`laptop_Id`)  
);

--
-- Dumping data for table `tbllaptops`
--

INSERT INTO `tbllaptops` (`laptop_Id`, `laptop_Title`, `laptop_Brand`, `laptop_Overview`, `laptop_PricePerDay`, `laptop_OperatingSystem`, `laptop_ModelYear`, `laptop_Storage`, `laptop_Vimage1`, `laptop_Vimage2`, `laptop_Vimage3`, `laptop_Vimage4`, `laptop_Vimage5`, `laptop_Fan`, `laptop_SecureBoot`, `laptop_LockScreenType`, `laptop_Antivirus`, `laptop_PowerSafeMode`, `laptop_UserAccount`, `laptop_AdministratorAcc`, `laptop_TouchScreen`, `laptop_CDPlayer`, `laptop_BitLocker`, `laptop_WebCam`, `laptop_Mouse`, `laptop_RegDate`, `laptop_UpdationDate`) VALUES
(
  1,'Dell',
  1,  
  'High-performance Ultrabook with slim design',
  80,
  'Windows 11 Pro',
  2024,
  512,
  'dellxps15.jpg',
  'dellxps13.jpg',
  'dellxps17.jpg',
  'alienwarem17.jpg',
  'alienwarem15.jpg',
  1,  
  1,  
  1,  
  1,  
  1,  
  1,  
  1,  
  1,  
  NULL,  
  1,  
  1,  
  1,
  '2024-02-27 06:18:20', 
  '2024-02-28 19:40:11'
),
(
  2, 'Apple MacBook ',
  5,  
  'Lightweight laptop with long battery life and powerful M2 chip',
  95,
  'macOS Monterey',
  2023,
  256,
  'applemacbookpro16-19.jpg',
  'applemacbookair13-20.jpg',
  'applemacbookpro16-21.jpg',
  'applemacbookpro14.jpg',
  'applemacbookair13-22.jpg',
  1,
  1,
  NULL,
  1,
  1,
  1,
  1,
  NULL,
  NULL,
  1,
  1,
  1,
  '2024-02-27 16:18:20', 
  '2024-02-28 18:40:11'
),
(
  3,'Lenovo ThinkPad X1',
  4, 
  'Durable and lightweight business laptop with excellent keyboard',
  75,
  'Windows 11 Pro',
  2024,
  512,
  'thinkpadx1carbon.jpg',
  'thinkpadx1yoga.jpg',
  'thinkpadx1fold.jpg',
  'thinkpadx1extreme.jpg',
  'thinkpadx1nano.jpg',
  1,
  1,
  NULL,
  1,
  1,
  1,
  1,
  NULL,
  1,
  NULL,
  1,
  1,
  '2024-02-27 11:18:20', 
  '2024-02-28 16:40:11'
),
(
  4, 'Microsoft Surface',
  7, 
  'Sleek and stylish laptop with long battery life and comfortable keyboard',
  85,
  'Windows 11 Home',
  2023,
  512,
  'surfacelaptop5-13.jpg',
  'surfacelaptop5-15.jpg',
  'surfacelaptopstudio2.jpg',
  'surfacelaptop5-16.jpg',
  'surfacelaptopgo3.jpg',
  1,
  1,
  1,
  1,
  1,
  1,
  1,
  NULL,
  NULL,
  1,
  1,
  1,
  '2024-02-26 16:18:20', 
  '2024-02-27 18:40:11'
),
(
  5,'ASUS',
  3, 
  'Powerful gaming laptop with high refresh rate display',
  120,
  'Windows 11 Home',
  2024,
  1000,
  'proartsudiobook.jpg',
  'zenbookpro.jpg',
  'zenbookflip.jpg',
  'zenbookfold.jpg',
  'vivobookpro.jpg',
  1,
  1,
  2,
  1,
  1,
  1,
  1,
  NULL,
  NULL,
  1,
  1,
  1,
  '2024-02-27 14:18:20', 
  '2024-02-28 15:40:11'
);






--
-- Table structure for table `tblbooking`
--

CREATE TABLE IF NOT EXISTS `tblbooking` (
  `booking_Id` int(11) NOT NULL,
  `user_Email` varchar(100) NOT NULL,
  `laptop_Id` int(11) NOT NULL,
  `booking_FromDate` varchar(20) DEFAULT NULL,
  `booking_ToDate` varchar(20) DEFAULT NULL,
  `booking_Message` varchar(255) DEFAULT NULL,
  `booking_Status` int(11) DEFAULT NULL,
  `booking_PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`booking_Id`) 
);

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`booking_Id`, `user_Email`, `laptop_Id`, `booking_FromDate`, `booking_ToDate`, `booking_Message`, `booking_Status`, `booking_PostingDate`) VALUES
(1, 'jameswako@gmail.com', 2, '27/02/2024', '29/02/2024', 'Hi liketo book 3 laptops! Please confirm availability.', 1, '2024-02-27 20:15:43'),
(2, 'dianabrendagmail.com', 3, '27/02/2024', '2/03/2024', 'Requesting laptop booking for 3 people! Please let me know the process.', 2, '2024-02-27 10:15:43'),
(3, 'markkimosi@gmail.com', 4, '27/02/2024', '07/03/2024', 'Booking 3 laptops for! Please confirm and provide any additional instructions.', 0, '2024-02-27 21:10:02');








-- table tblpayment
CREATE TABLE IF NOT EXISTS `tblpayment` (
  `payment_Id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `payment_Method` varchar(50) DEFAULT NULL,
  `payment_Status` varchar(50) DEFAULT NULL,
  `payment_Amount` int(11) DEFAULT NULL,
  `payment_Date` datetime DEFAULT NULL,
  PRIMARY KEY (`payment_Id`)
);

-- Insert 5 entries into tblpayment 
INSERT INTO `tblpayment` (`booking_Id`, `user_Id`, `payment_Method`, `payment_Status`, `payment_Amount`, `payment_Date`)
VALUES
  (1, 1, 'Credit Card', 'Paid', 100, '2024-03-28'),
  (2, 2, 'Debit Card', 'Paid', 120, '2024-03-28'),
  (3, 3, 'Cash on Delivery', 'Pending', 80, '2024-03-28'),
  (2, 2, 'E-wallet', 'Failed', 0, '2024-03-28'),
  (3, 3, 'M-Pesa', 'Paid', 85, '2024-03-28');


--
-- Table structure for table `tblbrands`
--

CREATE TABLE IF NOT EXISTS `tblbrands` (
  `brand_Id` int(11) NOT NULL,
  `brand_Name` varchar(120) NOT NULL,
  `brand_CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `brand_UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`brand_Id`)
);

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`brand_Id`, `brand_Name`, `brand_CreationDate`, `brand_UpdationDate`) VALUES
(1, 'Dell', '2024-02-27 16:24:34', '2024-02-19 02:42:23'),
(2, 'Acer', '2024-02-27 16:24:50', NULL),
(3, 'Asus', '2024-02-27 16:25:03', NULL),
(4, 'Lenovo', '2024-02-27 16:25:13', NULL),
(5, 'Apple', '2024-02-26 16:25:24', NULL),
(7, 'Microsoft', '2024-02-27 02:22:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE IF NOT EXISTS `tblcontactusinfo` (
  `contactusinfo_Id` int(11) NOT NULL,
  `contactusinfo_Address` tinytext,
  `user_Email` varchar(100) DEFAULT NULL,
  `contactusinfo_No` char(11) DEFAULT NULL,
  PRIMARY KEY (`contactusinfo_Id`)
);

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`contactusinfo_Id`, `contactusinfo_Address`, `user_Email`, `contactusinfo_No`) VALUES
(1, 'Kabuku', 'jameswako@gmail.com', '0785233222');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE IF NOT EXISTS `tblcontactusquery` (
  `contactusquery_Id` int(11) NOT NULL,
  `contactusquery_Name` varchar(100) DEFAULT NULL,
  `user_Email` varchar(100) NOT NULL,
  `contactusquery_No` char(11) DEFAULT NULL,
  `contactusquery_Message` longtext,
  `contactusquery_PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contactusquery_Status` int(11) DEFAULT NULL,
  PRIMARY KEY (`contactusquery_Id`)
);

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`contactusquery_Id`, `contactusquery_Name`, `user_Email`, `contactusquery_No`, `contactusquery_Message`, `contactusquery_PostingDate`, `contactusquery_Status`) VALUES
(1, 'James Wako', 'jameswako@gmail.com', '0747483647', 'I am writing to inquire about booking laptops for Please let me know 
your availability and the process for booking laptops.Additionally, if there are any specific instructions or requirements for booking,
please provide them at your earliest convenience.', '2024-02-18 10:03:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE IF NOT EXISTS `tblpages` (
  `page_Id` int(11) NOT NULL,
  `page_Name` varchar(255) DEFAULT NULL,
  `page_Type` varchar(255) NOT NULL DEFAULT '',
  `page_Detail` longtext NOT NULL,
  PRIMARY KEY (`page_Id`)
);

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`page_Id`, `page_Name`, `page_Type`, `page_Detail`) VALUES
(1, 'Terms and Conditions', 'terms', '<P align=justify><FONT size=2><STRONG><FONT color=#990000>(1) ACCEPTANCE OF TERMS</FONT><BR><BR></STRONG>Last updated: December 05, 2024
Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the ->code-projects.org/ website (the "Service") operated by Code Projects ("us", "we", or "our").
Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.
By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. Terms and Conditions from TermsFeed for Code Projects. Links To Other Web Sites
Our Service may contain links to third-party web sites or services that are not owned or controlled by Code Projects.
Code Projects has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Code Projects shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.
We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit. Governing Law
These Terms shall be governed and construed in accordance with the laws of New York, United States, without regard to its conflict of law provisions.
Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service. Changes
We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.
By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service. Contact Us
If you have any questions about these Terms, please contact us. </FONT></P>'),
(2, 'Privacy Policy', 'privacy', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'About Us ', 'aboutus', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">WE ARE THE BIKE RENTAL MANAGER. The only 100% dedicated bike rental booking website. The first Bike Rental Manager (BRM) shop was our own bike shop. Ever Since it has been our aim to make bike rental easier for everyone, everywhere.We focus on making bike rentals easier for you.Your rental business has a unique set of challenges. We are the only dedicated bike rental site and will be able to offer you a solution to match your needs.Get in touch with us today! We provide affordable bike rates, we hae lost of Satiisfied customers feedback, you can have a look at our home page too!! </span>'),
(11, 'FAQs', 'faqs', '																														<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">How do I use discounts coupons?
Except for promotion codes, Our discounts are applied automatically if your reservation meets any of the criteria mentioned above.

To use a promotion code, simply enter the code on the homepage widget as you start your reservation. You can do this by selecting the "Have a promotion code?" prompt. Promotion codes can also be entered on the checkout page, under Reservation Total. Please note that the promotion code prompt does not appear for certain types of reservations, such as reservations made on the Deals page.
<br>
Our Discounts Terms & Conditions
We no longer offer or accept returning customer discounts. All discounts are non-transferable and cannot be combined with additional promotions or discounts.</br>

* Liability in case accident:
The hirer should have coverage through his own accident and liability insurance.
The renting company is not responsible under any circumstances for accidents or damages caused to the hirer or which the hirer causes to any third party or cases of liability </span>');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE IF NOT EXISTS `tblsubscribers` (
  `subscriber_Id` int(11) NOT NULL,
  `subscriber_Email` varchar(120) DEFAULT NULL,
  `subscriber_PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`subscriber_Id`)
);

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`subscriber_Id`, `subscriber_Email`, `subscriber_PostingDate`) VALUES
(1, 'mogusu@gmail.com', '2024-02-27 16:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE IF NOT EXISTS `tbltestimonial` (
  `testimonial_Id` int(11) NOT NULL,
  `user_Email` varchar(100) NOT NULL,
  `testimonial` mediumtext NOT NULL,
  `testimonial_PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `testimonial_Status` int(11) DEFAULT NULL,
  PRIMARY KEY (`testimonial_Id`)
);

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`testimonial_Id`, `user_Email`, `testimonial`, `testimonial_PostingDate`, `testimonial_Status`) VALUES
(1, 'jameswako@gmail.com', 'This is amazing! I mean really such great laptop for rent at affordable price. oh this is crazy man!', '2024-02-18 07:44:31', 1),
(2, 'dianabrendagmail.com', '\nI think this is the one and only top laptop rental site in the world. 5-Stars from me - Full satisfaction, no complain at all', '2024-02-18 07:46:05', 1);

-- --------------------------------------------------------


--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `booking_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `brand_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `contactusinfo_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `contactusquery_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `page_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `subscriber_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `testimonial_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbllaptops`
--
ALTER TABLE `tbllaptops`
  MODIFY `laptop_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;


ALTER TABLE `tblbooking`  
ADD FOREIGN KEY (`laptop_Id`) REFERENCES `tbllaptops`(`laptop_Id`) 
ON DELETE RESTRICT ON UPDATE RESTRICT;


ALTER TABLE `tblpayment`  
ADD FOREIGN KEY (`booking_Id`) REFERENCES `tblbooking`(`booking_Id`) 
ON DELETE RESTRICT ON UPDATE RESTRICT;


ALTER TABLE `tblpayment`  
ADD FOREIGN KEY (`user_Id`) REFERENCES `tblusers`(`user_Id`) 
ON DELETE RESTRICT ON UPDATE RESTRICT;




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
