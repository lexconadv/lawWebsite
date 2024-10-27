-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 09:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawfirmwebside`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `details` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `category_id`, `details`, `img`, `created_at`) VALUES
(1, 'Google inks pact for new 35-storey office', 5, 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', '1694191360_images.jpeg', '2024-10-16 12:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `CareerID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` text DEFAULT NULL,
  `File` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`CareerID`, `Title`, `Description`, `File`) VALUES
(1, 'Problem that we face', 'Consectetur adipiscing elit, sued do eiusmod tempor ididunt udfgt labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.\r\n\r\nRisus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan.', 'uploads/attachment_99291761.jpeg'),
(2, 'Hello', 'Consectetur adipiscing elit, sued do eiusmod tempor ididunt udfgt labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.\r\n\r\nRisus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan.', 'uploads/671deb5a2fcb3_Firefox Installer (1).exe');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`) VALUES
(5, 'Modern technology', '2024-10-16 12:55:49'),
(6, 'Travel News', '2024-10-16 13:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `designation`, `description`, `created_at`, `image`) VALUES
(3, 'edit now', 'edit now', 'edit now', '2024-10-08 12:12:16', 'uploads/1728389536_1694617997_Screenshot_2.jpg'),
(4, 'edit now', 'edit now', 'edit now', '2024-10-08 12:14:48', 'uploads/1728389802_monir.jpg'),
(5, 'edit now', 'edit now', 'edit now', '2024-10-08 13:29:06', 'uploads/1728394146_1728128033073-01.jpeg'),
(6, 'edit now', 'edit now', 'Edit Now ', '2024-10-20 10:17:33', 'uploads/1729419453_aBBAS.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(3, 'Immigration', '- Visitor Visa\r\n\r\n-Student Visa\r\n\r\n-Business Visa\r\n\r\n-Treatment Visa\r\n\r\n- Investment Visa\r\n\r\n- Family-Based Visa & Green Card\r\n\r\n- Visa & Green Card for Adopted Children\r\n\r\n- Employment & Investment-Based Visas & Green Cards\r\n\r\n- Green Card Renewal & Replacement\r\n\r\n- Re-Entry Permit/Advance Parole\r\n\r\n- Visa Refusal Review/Appeal\r\n\r\n- Work Visa/Artists & Entertainment Group Visa\r\n\r\n- Administrative Processing/Visa Pending Case Settlement Assistance\r\n\r\n-Special Visa for Green Card Holders of the USA Staying in Bangladesh for Over 1 Year', 'uploads/1729429253_360_F_222343360_uW0XdT5Tp3ruppSdV2JNHiRHQJ1TxDvh.jpg', '2024-10-20 13:00:53'),
(4, 'FAMILY LAW', '-Divorce filings\r\n\r\n-Special Marriage\r\n\r\n-Property division\r\n\r\n-Dower\r\n\r\n-Muslim succession\r\n\r\n-Maintenance\r\n\r\n-Child custody and support\r\n\r\n-Guardianship and custody of children.\r\n\r\n-Mediation and settlement\r\n\r\n-Restitution of conjugal Rights\r\n\r\n-Cases against Dowry\r\n', 'uploads/1729430445_family-court-glyph-icon-silhouette-symbol-child-custody-family-law-proceedings-divorce-mediation-legal-separation-negative-space-isolated-illustration-vector.jpg', '2024-10-20 13:20:45'),
(5, 'Criminal Laws', '-Prosecution & Defense\r\n\r\n-Criminal processes\r\n\r\nFiling Criminal Litigation\r\n\r\nDefending and investigating of criminal charges.\r\n\r\nExpertise on matters such as -Arrest\r\n\r\n-Pleas, discovery', 'uploads/1729430755_attachment_99291761.jpeg', '2024-10-20 13:25:55'),
(6, 'Civil Laws', 'Civil Disputes Settlement & Litigation Litigation relating Land, Tenancy and Transfer of Property\r\n\r\nReal Estate\r\n\r\nArbitrations and Litigations on disputes falling under Real Estate Development and Management Act\r\n\r\n2010\r\n\r\nServices to people living outside Bangladesh who have family property in Bangladesh\r\n\r\nSupport from collecting documents, deeds, Porchas to do Namjari in the names of current owner and we also assist in selling lands in Bangladesh\r\n\r\nComplete support to people living outside Bangladesh but who has property in Bangladesh.\r\n', 'uploads/1729430983_download.jpeg', '2024-10-20 13:29:43'),
(8, 'Vat & Tax', 'TIN (Tax Identification Number)\r\n\r\nBIN (Business Identification Number)\r\n\r\nAudit Report\r\n\r\nVat and Taxation\r\n\r\nTax investigations and litigation matters.\r\n\r\nTax Calculation\r\n\r\nFilling TAX return for individual Tax Payer\r\n\r\nFilling TAX return for Business Tax payers\r\n\r\nOpening VAT Bangladesh registration number and filling VAT return\r\n\r\nFilling Reference and Writ petitions in the High Court Division regarding Income Tax, VAT or customs\r\n\r\nmatter. Contesting objections and cases in Tax Appellate Commissioner or Appellate Tribunal\r\n', 'uploads/1729431452_logo_1__1_-removebg-preview.png', '2024-10-20 13:37:32'),
(9, 'Bank & Corporate', 'Contract Drafting and Negotiation\r\n\r\nCorporate Litigation\r\n\r\nLand Vetting\r\n\r\nLegal Opinions\r\n\r\nLegal Notices\r\n\r\nDrafting of Legal Instruments\r\n\r\nSearching of Records\r\n\r\nInstruments/Deeds Registration\r\n\r\nMemorandum and Articles Drafting\r\n\r\nWinding Up\r\n', 'uploads/1729431552_images.png', '2024-10-20 13:39:12'),
(10, 'Foreign Investment', '✓ Representation foreign companies before the regulatory authorities such as-BIDA, Ministry of Commerce and Industry and Government of Bangladesh.\r\n\r\nHelps in getting necessary approvals/clarifications/registrations/licenses Giving advises clients on international trade-related issues\r\n\r\nGives advices to various multinational companies & organizations regarding international trade\r\n\r\n✓ Advices foreign companies on investment regulations, sectoral caps and regulatory issues\r\n\r\n✓ Manages trade agreements, customs duty, etc.', 'uploads/1729431818_Foreign-Direct-Investment-in-Bangladesh.jpg', '2024-10-20 13:43:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`CareerID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `CareerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
