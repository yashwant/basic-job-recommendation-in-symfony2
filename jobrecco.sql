-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 09:11 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobrecco`
--

-- --------------------------------------------------------

--
-- Table structure for table `College`
--

CREATE TABLE IF NOT EXISTS `College` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdOnTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `College`
--

INSERT INTO `College` (`id`, `name`, `createdOnTime`) VALUES
(1, 'IIT Mumbai', '0000-00-00 00:00:00'),
(2, 'IIT GandhiNagar', '0000-00-00 00:00:00'),
(3, 'IIT Varanasi', '2014-12-08 00:00:00'),
(4, 'IIT Delhi', '2014-12-16 00:00:00'),
(5, 'IIT Kharagpur', '2014-12-09 00:00:00'),
(6, 'IIT Rookie', '2014-12-23 00:00:00'),
(7, 'NIT Warangal', '2014-12-09 00:00:00'),
(8, 'BITS Pilani', '0000-00-00 00:00:00'),
(9, 'IIT Kanpur', '2014-12-09 00:00:00'),
(10, 'BITS Dubai', '2014-12-09 00:00:00'),
(11, 'PICT Pune', '2014-12-17 00:00:00'),
(12, 'COEP Pune', '0000-00-00 00:00:00'),
(13, 'MIT Pune', '2014-12-17 00:00:00'),
(14, 'IIT Hyd', '2014-12-09 00:00:00'),
(15, 'Pune Institute of Computer Technology', '2014-12-26 23:08:55'),
(16, 'Vidyadham Prashala Shirur,Pune', '2014-12-26 23:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `Company`
--

CREATE TABLE IF NOT EXISTS `Company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdOnTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `Company`
--

INSERT INTO `Company` (`id`, `name`, `createdOnTime`) VALUES
(1, 'ABC Pvt Ltd', '2014-12-10 00:00:00'),
(2, 'Limetray', '2014-12-23 00:00:00'),
(3, 'FoodPanda', '2014-12-02 00:00:00'),
(4, 'Microsoft', '2014-12-02 00:00:00'),
(5, 'Google', '2014-12-01 00:00:00'),
(6, 'Apple', '2014-12-08 00:00:00'),
(7, 'Cisco', '2014-12-16 00:00:00'),
(8, 'TastyKhana', '2014-12-16 00:00:00'),
(9, 'Samsung', '2014-12-16 00:00:00'),
(10, 'Infosys', '2014-12-22 00:00:00'),
(11, 'Cognizant', '2014-12-10 00:00:00'),
(12, 'Apoorva Computers', '2014-12-23 00:00:00'),
(13, 'ABC Farm ltd', '2014-12-02 00:00:00'),
(14, 'Pandora', '2014-12-02 00:00:00'),
(15, 'Lastfm', '2014-12-01 00:00:00'),
(16, 'FIAT', '2014-12-08 00:00:00'),
(17, 'Maruti Ltd', '2014-12-16 00:00:00'),
(18, 'Suzuki Ltd', '2014-12-16 00:00:00'),
(19, 'Hero Ltd india', '2014-12-16 00:00:00'),
(20, 'Deloit', '2014-12-22 00:00:00'),
(21, 'YoPano', '2014-12-26 23:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `Industry`
--

CREATE TABLE IF NOT EXISTS `Industry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdOnTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;

--
-- Dumping data for table `Industry`
--

INSERT INTO `Industry` (`id`, `name`, `createdOnTime`) VALUES
(1, 'Test', '2014-12-22 00:00:00'),
(2, 'Accounting ', '2014-12-09 00:00:00'),
(3, 'Advertising ', '2014-12-09 00:00:01'),
(4, 'Agriculture ', '2014-12-09 00:00:02'),
(5, 'Animation ', '2014-12-09 00:00:03'),
(6, 'Architecture ', '2014-12-09 00:00:04'),
(7, 'Automobile ', '2014-12-09 00:00:05'),
(8, 'Aviation ', '2014-12-09 00:00:06'),
(9, 'BPO ', '2014-12-09 00:00:07'),
(10, 'Bank ', '2014-12-09 00:00:08'),
(11, 'Brewery ', '2014-12-09 00:00:09'),
(12, 'Sanitary Chemical ', '2014-12-09 00:00:10'),
(13, 'Engineering ', '2014-12-09 00:00:11'),
(14, 'Consumer Durables ', '2014-12-09 00:00:12'),
(15, 'Courier ', '2014-12-09 00:00:13'),
(16, 'Defence ', '2014-12-09 00:00:14'),
(17, 'Teacher ', '2014-12-09 00:00:15'),
(18, 'Electrical ', '2014-12-09 00:00:16'),
(19, 'Export Import ', '2014-12-09 00:00:17'),
(20, 'FMCG ', '2014-12-09 00:00:18'),
(21, 'Facility Management ', '2014-12-09 00:00:19'),
(22, 'Fertilizers ', '2014-12-09 00:00:20'),
(23, 'Food Processing ', '2014-12-09 00:00:21'),
(24, 'Fresher ', '2014-12-09 00:00:22'),
(25, 'Gems Jewellery ', '2014-12-09 00:00:23'),
(26, 'Glass ', '2014-12-09 00:00:24'),
(27, 'Air Conditioning ', '2014-12-09 00:00:25'),
(28, 'Airline ', '2014-12-09 00:00:26'),
(29, 'Networking ', '2014-12-09 00:00:27'),
(30, 'IT ', '2014-12-09 00:00:28'),
(31, 'Industrial ', '2014-12-09 00:00:29'),
(32, 'Insurance ', '2014-12-09 00:00:30'),
(33, 'KPO ', '2014-12-09 00:00:31'),
(34, 'Legal ', '2014-12-09 00:00:32'),
(35, 'Media ', '2014-12-09 00:00:33'),
(36, 'Dotcom ', '2014-12-09 00:00:34'),
(37, 'Entertainment ', '2014-12-09 00:00:35'),
(38, 'Medical ', '2014-12-09 00:00:36'),
(39, 'Mining ', '2014-12-09 00:00:37'),
(40, 'NGO ', '2014-12-09 00:00:38'),
(41, 'Automation ', '2014-12-09 00:00:39'),
(42, 'Oil and Gas ', '2014-12-09 00:00:40'),
(43, 'Paper ', '2014-12-09 00:00:41'),
(44, 'Pharma ', '2014-12-09 00:00:42'),
(45, 'Printing ', '2014-12-09 00:00:43'),
(46, 'Publishing ', '2014-12-09 00:00:44'),
(47, 'Real Estate ', '2014-12-09 00:00:45'),
(48, 'Recruitment ', '2014-12-09 00:00:46'),
(49, 'Retail ', '2014-12-09 00:00:47'),
(50, 'Security ', '2014-12-09 00:00:48'),
(51, 'Electronics ', '2014-12-09 00:00:49'),
(52, 'Shipping ', '2014-12-09 00:00:50'),
(53, 'Steel ', '2014-12-09 00:00:51'),
(54, 'Consultant ', '2014-12-09 00:00:52'),
(55, 'Telecom ', '2014-12-09 00:00:53'),
(56, 'Textiles ', '2014-12-09 00:00:54'),
(57, 'Tyres ', '2014-12-09 00:00:55'),
(58, 'Water Treatment ', '2014-12-09 00:00:56'),
(59, 'Fitness Trainer ', '2014-12-09 00:00:57'),
(60, 'Ecommerce ', '2014-12-09 00:00:58'),
(61, 'Internet ', '2014-12-09 00:00:59'),
(62, 'Computer Software', '2014-12-26 23:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `IndustrySimIndex`
--

CREATE TABLE IF NOT EXISTS `IndustrySimIndex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `industry1` int(11) NOT NULL,
  `industry2` int(11) NOT NULL,
  `index` int(11) NOT NULL,
  `createdOnTime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C7B72D9355C7B633` (`industry1`),
  KEY `IDX_C7B72D93CCCEE789` (`industry2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Job`
--

CREATE TABLE IF NOT EXISTS `Job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `createdOnTime` datetime NOT NULL,
  `minExp` int(11) NOT NULL,
  `maxExp` int(11) NOT NULL,
  `company` int(11) DEFAULT NULL,
  `industry` int(11) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C395A6184FBF094F` (`company`),
  KEY `IDX_C395A618CDFA6CA0` (`industry`),
  KEY `IDX_C395A6185E9E89CB` (`location`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Job`
--

INSERT INTO `Job` (`id`, `title`, `description`, `createdOnTime`, `minExp`, `maxExp`, `company`, `industry`, `location`) VALUES
(1, 'Senior PHP Developer', '\r\nSenior/TL- Responsibilities and Duties:-\r\nShould have expertise on PHP5 /should have good knowledge of Oops\r\nShould have knowledge of Ajax and APIs integration ie. Google API, Facebook API, third party affiliates etc are highly desirable.\r\nShould have knowledge of expertise with interfaces, HTML, CSS, JavaScript, AJAX, Templating, caching, sessions, and authentication.\r\nShould have knowledge of Linux environment\r\nShould have experienced with complex SQL queries and database schema design.\r\nOpen to write code/ Provide technical support to team/ Proactive in actions\r\nDevelop and manage highly trafficked, highly scalable web properties with PHP5\r\nFramework knowledge like CakePhp , Zend etc/Knowledge of e-commerce website like Zen cart, Custom php.\r\nAnalyze, design, code, debug, test, document and deploy changes to the system\r\nParticipate in deployment planning/ Participate in project planning.\r\nProject Management which includes Planning of projects / Deadline Setup & Status to our Customer Service Department in UK.\r\nResearching and suggesting new technologies and opportunities that could be beneficial to the technological needs of the company.\r\nGathering requirements from design and technical staff and client on web development needs/Defining effective solutions for business and process problems.\r\nCollaborating with team members to devise and launch new site features and content that meet the expectations.\r\n\r\nCoordinating with senior management to create sustainable project management processes around the web design and development.\r\n\r\nDesired Candidate Profile\r\n**Should have expertise on PHP5 /Oops/ Linux environment\r\n* Should have knowledge of Ajax and APIs integration ie. Google API, Facebook API, third party affiliates etc are highly desirable.\r\n* Knowledge of consuming and creating Web Services, ecommerce website experience, Travel website /Team handling experience is additional / worked on mobile compatible websites is any additional.\r\n* Should have knowledge of expertise with interfaces, HTML, CSS, JavaScript, AJAX, Templating, caching, sessions, and authentication.\r\n* Should have experienced with complex SQL queries and database schema design.\r\n* Open to write code/ Provide technical support to team/ Proactive in actions\r\n\r\nDesired Skills:-\r\n\r\n* Knowledge of payment gateways integration/Exposure on APIs.\r\n* Knowledge of open source applications. ie. Joomla,Wordpress ,Magento etc\r\n* Should have worked on highly scalable, highly available and high traffic web applications.\r\n* Excellent communication skills (should be able to communicate with UK team )', '2014-12-27 00:00:00', 3, 6, 10, 30, 1),
(2, 'PHP Developer', 'Job Role: PHP Software Developer\r\nTechnical / Key Skills:\r\nmin 3+ years of experience in Core PHP Strong.\r\nHands on Experience in MYSQL, CSS, Javascript, Jquery, AJAX\r\nHands on experience in Magento Compulsory\r\nGood Knowledge of CSS-3, and HTML-5', '2014-12-27 00:00:00', 3, 7, 11, 30, 2),
(3, 'Mechanic', 'Bike Servicing Mechanic', '2014-12-26 00:00:00', 1, 3, 20, 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `JobSkills`
--

CREATE TABLE IF NOT EXISTS `JobSkills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` int(11) NOT NULL,
  `skill` int(11) NOT NULL,
  `createdOnTime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DB08C009FBD8E0F8` (`job`),
  KEY `IDX_DB08C0095E3DE477` (`skill`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `JobSkills`
--

INSERT INTO `JobSkills` (`id`, `job`, `skill`, `createdOnTime`) VALUES
(1, 1, 8, '2014-12-27 00:00:00'),
(2, 1, 9, '2014-12-27 00:00:00'),
(3, 1, 10, '2014-12-27 00:00:00'),
(4, 1, 12, '2014-12-27 00:00:00'),
(5, 1, 14, '2014-12-27 00:00:00'),
(6, 2, 14, '2014-12-27 00:00:00'),
(7, 2, 10, '2014-12-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `LinkedinGroup`
--

CREATE TABLE IF NOT EXISTS `LinkedinGroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkedinId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `createdOnTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=45 ;

--
-- Dumping data for table `LinkedinGroup`
--

INSERT INTO `LinkedinGroup` (`id`, `linkedinId`, `name`, `description`, `createdOnTime`) VALUES
(1, '2634409', 'The North-South Network', 'The North-South Network is intended to bring together professionals from around the globe seeking new "trade routes" between the North and the South. Increasingly the world is no longer divided between East and West but North and South.  This Network aims bridge this gap, to share opportunities and issues relating to professional collaborations, bid/contract opportunities and market access actions among others.  It aims to open business and market opportunities which before focused primarily on an east/west context.', '2014-12-26 21:37:50'),
(2, '48513', 'Global Private Equity & Venture Capital', 'Exclusively for professional private equity & venture capital investors, business angels and entrepreneurs. In the Group you will be able to raise funds for your ventures, contact directly to leading investment professionals, find interesting proposals to invest your capital, discuss news from different industries and accelerate careers/business through referrals from investment industry.\r\n\r\nspammers be warned!', '2014-12-26 21:52:56'),
(3, '2914985', 'BootStrapToday', 'This group will provide a platform for all the startup Community who have some ideas & they want to Bootstrap their ideas into reality. This will bring companies, investors, budding Entrepreneur, consultant you can join this community. Specially startup''s can educate others with their experiences as well.', '2014-12-26 21:52:57'),
(4, '35846', 'OCC Bangalore', 'The OpenCoffee Club was started to encourage entrepreneurs, developers and investors to organise real-world informal meetups to chat, network and grow.', '2014-12-26 21:52:57'),
(5, '2802594', 'Pune Google Technology User Group', 'Idea Behind Google Technology User Group\r\n\r\nWeb 2.0 has finally arrived!! Loads of Services can be seen on the Web, some of them are blogging, scrapping on Orkut, finding places on Maps. To  add to this services like Google Docs now allow online documentation creation and collaboration. Also, the decade old popular Google Search still is one of the most valued internet tools.\r\n \r\nAll and all a good thing, but these are still only services accessed by ones browser. The next step is not just using these as services, but to use them as building blocks for your applications. Yes, this is now possible, since Google has released the APIs to almost all of its online services.The reason this is being done, is Google realizes the fact that the next revolution in the web is going to come from communities themselves, and google has choosen the right path by empowering the user with APIs, tools and ways to allowing user to build on top of these services.\r\n \r\nBut this is far easier said then done in India, where most of us are not even aware of the services provided by Google. The Idea behind Pune GTUG is to first educate all about existing services, introduce them what can now be possible. This would be followed by actual coding camps, talks on new services and APIs, where we all come together and play around in actual with code. Finally the essential thing to help people innovate is to allow them to collaborate, let them communicate with each other, form groups, launch new applications, and even give them a platform to talk about what they have done so far. This is why we have this Google Group being launched\r\n \r\nSo what are you waiting for! Lets transform the Web!!\r\n \r\nJoin Pune GTUG, be a part of revolution!', '2014-12-26 21:52:57'),
(6, '3073698', 'The VCCircle Network', 'VCCircle.com, a leading independent source of news, information and analysis for the Indian investment and entrepreneurial ecosystem. It is read by an influential global community of deal makers, entrepreneurs and professionals for trusted content related to Indian investments, M&A, venture capital, private equity, investment banking, public equity, and emerging companies and sectors.\r\nWe offer a Premium Subscription Service which allows access to exclusive and breaking articles, analysis, interviews and the archives beyond seven days.  \r\nTechcircle.in, a news website launched in Feb 2011, is dedicated to covering the Indian technology startup ecosystem. It has emerged as a destination site for the tech startups, investors and executives in India.\r\nVCCEdge is India’s leading online research platform targeted at dealmakers. A fully hosted platform with a comprehensive database of VC/PE/M&A deals, IPOs, directories, private and public company information, financials, shareholding structures, professionals & key developments related to companies, VCCEdge has all of them in one place.\r\nVCCircle Events\r\nFor the last 5 years, the Network has conducted about 60 conferences which are editorial events with a strong focus on content, speakers and high quality delegates. We organise 16-18 conferences every year across industry verticals and have over a dozen annual properties now running in multi-year editions. Over 12,000 delegates and 1200 speakers have attended the events since its inception in 2007.\r\nVCCircle Training\r\nSince its launch in June 2011, the training division has organised about 20 training workshops in finance, legal and regulatory topics targeted at Indian corporate, financial and legal professionals.\r\nAbout 750 participants have attended the workshops over last 18 months.', '2014-12-26 21:52:57'),
(7, '1938322', 'The Indus Entrepreneurs Mumbai', 'TiE Mumbai is part of a global network of entrepreneurs which mentors, supports and facilitates the growth of new enterprises. TiE Mumbai was seeded in October 1999, and formally launched on December 7th, 1999. Today, TiE Mumbai is a multi-faceted organization and is an active TiE chapter dedicated to fostering entrepreneurship leading to wealth and job creation.', '2014-12-26 21:52:57'),
(8, '535', 'TEC - The Entrepreneurs Club', 'The Entrepreneurs’ Club (formerly CoolTech Club) is a strong international multi-ethnic network of several thousand high-tech entrepreneurs, executives and other professionals started in 2003.\r\n\r\nOur members speak English, Russian, Hebrew and many European languages. We are headquartered in the Silicon Valley and hold regular meetings in Palo Alto, San Francisco, New York, Tel Aviv, and Moscow.\r\n\r\nOur goals are:\r\n-	To provide a networking platform for high-tech entrepreneurs coming to Silicon Valley and other high-tech centers from different countries and variety of ethnic backgrounds;\r\n-	To match cool start-up ideas with hot venture capital investors, corporate partners and help grow global companies\r\n-	To educate, showcase and support entrepreneurs in Israel, Russian, Ukraine, Great Britain and Europe \r\n-	To enhance all aspects of technology partnership between the United States and the countries of our members', '2014-12-26 21:52:57'),
(9, '2717104', 'Algorithms and Data Structures Development', 'It is all about algorithms. From sorting, data lists to cloud computing and map reduce. Do not forget the AI for games. Ask questions, and help others.', '2014-12-26 21:52:57'),
(10, '45466', 'Indian Startups', 'Startups which have roots in India, were founded by Indians, or are predominantly operating out of India.', '2014-12-26 21:52:57'),
(11, '39836', 'BUSINESS IN CHINA', 'Search and identification of opportunities and local partners on precise interest on the Part of undertakings, dossiers and business plan, assistance in identification of any public funds available both in Europe and at world organizations (World Bank or IMF), import export and consulting.', '2014-12-26 21:52:57'),
(12, '4685016', 'Boston Jaspersoft User Group', 'The goal of this group is to get together to learn, share, and collaborate with others that are working with or want to work with the Jaspersoft Business Intelligence Suite, including: * JasperReports * iReport and Jaspersoft Studio * JasperReports Server * Jaspersoft ETL The members of the group will help to decide on topics for future meetings, present their experiences, and learn from each other.', '2014-12-26 21:52:57'),
(13, '2819595', 'PICT Pune', 'Pune Institute of Computer Technology, (PICT) is an engineering college in Pune, India. Established by the Society for Computer Research and Training in 1983, it was the first institute to introduce a Computer Engineering branch among private colleges in the Maharashtra state. It currently offers degrees in Computer Engineering (CE),Information Technology(IT) and Electronics & Telecommunication(E&TC). In 2009-10, PICT was ranked 18th amongst the private engineering colleges in India by Livemint.com', '2014-12-26 21:52:57'),
(14, '39715', 'HeadStart Network', 'The HeadStart Network is a not-for-profit organization run by volunteers and full time professionals to create and promote the innovation ecosystem in India. We define the innovation ecosystem as consisting of entrepreneurs and startups, researchers in academia and industry, adopters of new technology and products, and investors.\r\n\r\nThe HeadStart Network carries out a number of activities including\r\n\r\n- organizing the annual HeadStart conference that showcases the best and most innovative products coming out of India and enables various innovation ecosystem stakeholders to exchange views and network\r\n\r\n- organizing the monthly Startup Saturdays that provide continuous engagement with entrepreneurs and startups with new product adopters, investors and prospective employees\r\n\r\n- working with mainstream media to highlight and promote entrepreneurship and startups, new products and technology\r\n\r\n- working with entrepreneurs and investors to refine business plans, raise funding and make introductions to prospective customers\r\n\r\n- partnering with various organizations to promote entrepreneurs, incubate companies and showcase innovation\r\n\r\nHeadquartered in Bangalore but carrying out activities in Mumbai, Hyderabad, Ahmedabad and Pune (with Delhi, Kolkata, Chennai being added by end of 2008), the HeadStart Network is led by a team of 16 founders who are a mix of entrepreneurs, academics and industry professionals. If you want to become a promoter of the HeadStart Network, do write to Amit Singh at amit@headstart.in; promoters of the HeadStart Network are involved in the daily execution of the network’s activities and form the decision making body of the organization.', '2014-12-26 21:52:57'),
(15, '22320', 'BMC Alumni', 'This group seeks current and former employees of BMC Software.  Members desire to build on the relationships and common experiences gained from working at BMC.\r\n\r\nIf you would like to join the group, please make sure that your BMC service is listed on your Linked In profile.\r\n\r\nThis group is not affiliated with or sanctioned by BMC Software, Inc.', '2014-12-26 21:52:57'),
(16, '41522', 'Venture Capital Cafe (+6200 Members)', 'Joining the VC Cafe Network (VCN) will allow you to connect with professionals in the venture capital industry as well as entrepreneurs and angel investors interested in early stage technology with a spotlight on Israel.\r\n\r\nBe part of the VC Cafe Network to form new connections between you and other people that provide the opportunity to:\r\n– Get your job done\r\n– Obtain Information (ideas)\r\n– Complete Tasks\r\n– Gather Advice\r\n– Have fun and obtain social support\r\n– Advance your personal and professional agenda\r\n\r\nMore than 6,200 start up and investment professionals are already in. If you want more information, here are 10 reasons to join the VC Cafe Network: http://bit.ly/vcafenetwork\r\nLearn more at http://www.vccafe.com or on twitter at http://www.twitter.com/ediggs', '2014-12-26 21:52:58'),
(17, '57014', 'Proto.in : The Community', 'To Stay abreast of whats happening at Proto.in, also ensure that you sign up for the mailing list. More details on the site.', '2014-12-26 21:52:58'),
(18, '62903', 'eCommerce in India', 'This group is for individuals who have an interest in the eCommerce space in India. Join this group if you are interested in entrepreneurship opportunities or networking with other eCommerce professionals.', '2014-12-26 21:52:58'),
(19, '2877', 'On Startups - The Community For Entrepreneurs', 'The largest entrepreneurial startup group on LinkedIn with close to 400,000 members.\r\n\r\nDiscuss marketing, sales, financing, operations, hiring and any other startup or small business related topic.', '2014-12-26 21:52:58'),
(20, '56766', 'A Startup Specialists Group - Online Network for Entrepreneurs and Startups (Business Jobs Careers)', 'A Startup Specialists Group - Online Network for Entrepreneurs and Startups (Mentors Experts Business Jobs Careers) is the LARGEST moderated (members only) community for startups, mentors, founders and investors on LinkedIn. \r\n\r\nThis LinkedIn group is NOT an "Open Group" so the membership is approved by reviewing the profiles of the members.The group is also moderated:\r\n\r\nPLEASE DO NOT POST ANY SPAM IN THE GROUP DISCUSSIONS: ANY MEMBER SPAMMING IS BLOCKED.\r\n\r\nWhether you are looking at startup support, reaching out to the startup community on a global or regional level, planning your new venture, crowd sourcing your challenges, or looking to reach out for networking, crowdfunding, mentors, startups, incubators, accelerators, entrepreneurs, founders, consultants, inventors, experts, coaches, VCs, angels, investors,new ideas,plans,marketing, sales, jobs,funds, promotions, self employed, co-founders, small business founders or best practices in the Startup Global Ecosystem, you can find it all here.\r\n\r\nWhether you are in Silicon Valley, San Francisco Bay Area, New York City, Boston, Detroit, Chicago, Alaska, Atlanta, Los Angeles, Kansas City, Cambridge, Portland, Austin, Texas, San Diego, Denver, Seattle, Colorado Springs, Fort Collins, Cambridge, Kansas City,Cheyenne, Raleigh, Durham, Dallas, Boulder, Washington, Huntsville, Las Vegas, San Jose, Salt Lake City, London, Oxford, Toronto, Tokyo, Vancouver, Montreal, Waterloo, Berlin, Frankfurt, Barcelona, Singapore, Hong Kong, Paris, Tel Aviv, Sydney, Melbourne, Antwerp, Sao Paulo, Dubai,Milan,Istanbul, Oslo, Stockholm, Helsinki, Dublin, Dubai, Beijing, Santiago, New Zealand, Netherlands,Egypt,UAE, Dubai, Sydney, Melbourne, Moscow, Mumbai, Bangalore, New Delhi, Chennai or anywhere else across the world feel free to connect with like-minded folks in the startup ecosystem.\r\n\r\nShare and Take what you want but ensure you give back whatever you can :)\r\n\r\nStartup wishes to all :)\r\n\r\nFollow me on Twitter @ravikikan', '2014-12-26 21:52:58'),
(21, '114497', 'PuneTech', 'Quickly find (and be found by) Pune-based technology professionals. Know what interesting technology work is happening near you. No HR or Recruiters, please. See http://punetech.com/subscribe for information about various special interest groups in Pune and how to stay in touch with the technology user group of your choice in Pune.', '2014-12-26 21:52:58'),
(22, '4054392', 'Pune Institute of Computer Technology, Pune', 'This group is for alumni of PICT.', '2014-12-26 21:52:58'),
(23, '61513', 'Cloud Computing', 'This is a group for people involved in Current Big Thing - Cloud Computing. Discussion is done through Google Groups.\r\n\r\nOur group organizes two annual conferences Cloud Slam and UP - world''s premier cloud computing events, covering technology, business models, industry experiences, legal aspects, research, development and innovations in the world of cloud computing. \r\n\r\nPlease visit http://cloudslam.org and http://up-con.com for more details.', '2014-12-26 21:52:58'),
(24, '58314', 'New York Venture Community', 'The New York Venture Community is the group for entrepreneurs, startup teams, venture capitalists and venture service providers in the New York Metro region.  Joining this group will enable you to find other like minded venture people in the region and it will also enable them to find you.', '2014-12-26 21:52:58'),
(25, '1474887', 'Idea Funding Cafe', 'Joining the Idea Funding Cafe will allow you to connect with professionals in the venture capital industry as well as idea people, entrepreneurs and angel investors. Join Idea Funding Cafe to form new connections between you and other people where you have the opportunity to: meet new people, obtain information (ideas), gather advice, have fun and obtain social support.  With Idea Funding Cafe you will advance your personal and professional agenda.', '2014-12-26 21:52:58'),
(26, '2272371', 'Startup Network - India', 'Group for members involved in or assisting or financing startups. \r\n You can connect directly with the group manager John Ricci at http://tinyurl.com/3kdchb. The email address is johnr (at) usangelinvestors.com. John Ricci''s profile is at http://www.linkedin.com/in/jfricci', '2014-12-26 21:52:58'),
(27, '2013391', 'iPhone | Android | Mobile App Design, Development & Promotion', '★ Most Active Mobile Professional Group for Entrepreneurs, App Owners, Developers, Programmers & Designers. App Marketing, Promotion & Downloads on iTunes & Google Playstore. HTML5, Apple iPhone, Google Android, iPad, BlackBerry & Windows SmartPhone iTunes iOS Samsung HTC SDK Admob GPS Mac Design 4G UI marketing freelancers Cloud Business outsourcing jobs Company.', '2014-12-26 21:52:58'),
(28, '1920463', 'Algorithms (O)', 'This is a group for people passionate about computer algorithms - research going on in this area and how algorithms are used for solving real world problems. Discussions can range from simple tree algorithms (e.g., binary trees) to algorithms for distributed system processing (e.g., Map Reduce by Google). The purpose is to provide a forum for networking, Q&A, discussion, recent technological advancements, conference and workshop announcements, and employment opportunities!!!', '2014-12-26 21:52:58'),
(29, '76373', 'Google Android', 'This group is independent from Google. It''s for users and developers working with Android - join in, network and discuss everything from startups, job announcements, coding issues, industry developments through to handset and device rumours... if it''s about Android, it''s covered in here. We operate a zero tolerance spam policy where offenders are evicted on the first strike. It''s the garbage we keep out that ensures the high quality content the good guys n gals enjoy is maintained :-)', '2014-12-26 21:52:58'),
(30, '47449', 'BMC Software Employees - Past and present', 'BMC Software - Past and Present\r\n\r\nAllows current and ex-bmcer''s to reconnect with each other for social and professional networking.', '2014-12-26 21:52:58'),
(31, '5135252', 'Hadoop, Bigdata and Data Scientist', 'This group is a platform to bring talented Hadoop, Bigdata, Analytics, and related technologies engineers to bring under one umbrella and discuss the current and future growth of Hadoop, Analytics and Bigdata. Groups aim to connect worldwide IT practitioner in Analytics and Bigdata and bring the global opportunities in USA, Australia, Europe, India etc.. We aim to discuss the new business areas for bigdata applicability and discuss the case studies. Some of the areas are mining, construction, defense, telecommunication, FMCG, automotive, manufacturing etc...', '2014-12-26 21:52:58'),
(32, '66394', 'Pune Institute of Computer Technology (PICT) Alumni', 'This is a group for all people who graduate from PICT, Pune.', '2014-12-26 21:52:58'),
(33, '44512', 'YOUNG INDIAN ENTREPRENEURS', 'Members Voice::\r\n\r\nA platform for young entrepreneurs to share their success stories, and how they could overcome some major challenges.\r\n--Roopalakshmi B G\r\n\r\nThis Group is an arena for the YOUNG ENTREPRENEURS who have been there and done that; a perfect Platform to open up and share new business ideas.\r\n--Ketan Katira\r\n\r\nYoung Indian Entrepreneurs is a platform for the Dreamers of India to come together-\r\nConnect - with fellow entrepreneurs\r\nCreate - your dream organization\r\nCollaborate - to help and learn\r\n--Rajiv Talreja & Vinay Aggarwal\r\n\r\n\r\nA positive thinking can take you forward and its a good platform to share different experiences and views.\r\n--Swati Vats\r\n\r\nPresenting not just the issues etc but also the solutions for them, implemented by the one facing it or by someone else who had faced and addressed similar issues. A platform of learning for all budding entrepreneurs on the lines of `mistakes that can be avoided or things to lookout for...\r\n--Kanchana Dwarakanath & Ravindra Pande', '2014-12-26 21:52:58'),
(34, '43875', 'Open Source', 'This group is for all the Software professionals who are working on Open Source Technologies like - Drupal, Joomla, PHP, Linux, Apache, MySQL, Perl, Ruby on Rails, X-Cart, iDevAffiliate, Redaxo etc.', '2014-12-26 21:52:58'),
(35, '67173', 'The Indus Entrepreneur', 'TiE- founded in Silicon Valley in 1992 by successful entrepreneurs and professionals with roots in the Indus region. TiE is spread over 61 chapters in 17 countries with over 20,000 Members and 3,000 plus Charter Members - entrepreneurs, VCs, Private Equity, Angels, Law Firms, Tech & Mgt.professionals.', '2014-12-26 21:52:59'),
(36, '1915642', 'Open Source Programmer', 'Start your open source project now. Start discussing about it.\r\nOur aim is to start open source projects with you (the community) which should not be under control of big companies who want to make huge money from it. Your ideas for new open source project and products are invited. \r\nYou can use this forum to ask any issue related to open source tools and can also share your experience.\r\nThis group is dedicated to open source technologies like: \r\neclipse, netbeans, on rails, groovy on grails, seam, tapestry, wicket, spring, struts, gwt, ajax, joomla, jahia, liferay, alfresco, jboss, tomcat, java, j2ee, ruby, mono, linux, mysql, python, xml, php, drupal, linux, apache, perl, ruby on rails, freebsd, gnu project, openoffice, wordpress, mozilla, open solaris, media wiki, os ecommerce, symbian, typo3, mule, suse, ubuntu and others', '2014-12-26 21:52:59'),
(37, '89576', 'PICT Alumni Association', 'This group is administered by the PICTAlumni Association. All alumni from PICT are encouraged to join this Group, including current students, faculty, and staff.', '2014-12-26 21:52:59'),
(38, '3431262', 'BPlanExperts.com - World''s Top Business Plan Consulting Firm', 'BPlanExperts.com specializes in Business Planning, Market Research & Startup Consulting. We help entrepreneurs across the world in realizing their dreams by collaborating with them and supporting them through our business business consulting practice. Our consulting practice enables our clients to be on the competitive edge in this dynamic business environment. We have a highly experienced team of professionals in the field of business planning, market research and startup consulting dedicated to provide innovative solutions to our client’s dynamic business problems. Our comprehensive business planning framework is highly effective for the new age business and maintains global standard followed across the world.', '2014-12-26 21:52:59'),
(39, '73451', 'Pune OpenCoffee Club', 'Nurture the startup eco-system through Community participation. Entrepreneurs, Developers, Mentors, and others are all welcome.\r\n\r\nWebsite:\r\nhttp://punestartups.ning.com/\r\nDiscussion:\r\nhttp://groups.google.com/group/punestartups', '2014-12-26 21:52:59'),
(40, '3196124', 'Indian Angel Network', 'Indian Angel Network(IAN)  is India''s first and largest angel investment network and looks to invest up to US$ 1 mn, though our sweet spot is between US$ 200 to 400K. Apart from funding, the Network also seeks to provide mentoring through IAN Incubator which is one of the largest business Incubator supported by Govt.Of India ( Dept. Of Science & technology), strategic thought leadership and leverage the Network''s network for the investee companies.  The  Network has invested in over40  companies across multiple sector with 4 partial / full exits, the last giving the investors 12X on their investment over a period of ~15 months.\r\n\r\nIndian Angel Network(IAN) currently has over 200 members drawn from across the country and some from overseas, including leading lights from diverse sectors such as Jerry Rao, Saurabh Srivastava, Pramod Bhasin, Raman Roy, Rajiv Luthra, Pradeep Gupta, Sunil Munjal, Arvind Singhal and institutions such as IBM, SIDBI, Spice Televentures, Intel', '2014-12-26 21:52:59'),
(41, '1774825', 'Indian Entrepreneurs– From The Economic Times ''Power of Ideas''', 'Smack in the middle of a slowdown, when conventional wisdom advised lying low and letting the bad times pass, The Economic Times called for a few brave men and women. To break free of the corporate chains suppressing their entrepreneurial energy and write their own destiny. Little did we know that it would unleash an army of tens of thousands. Over 12,000 people turned up in Jan 2009 with nothing more than an idea, a partner, and a laptop.\r\n\r\nSuch overwhelming response, besides boosting our self-belief in India Inc and crashing our servers, also sent some awards our way – the Effies 2009, the Abbys 2010, and the ‘Best of Show’ Gold at the INMA Awards 2010 (New York), besides three other wins.\r\n\r\nThat was The Power of Ideas in 2009. A humble platform created by The Economic Times to groom and nurture entrepreneurs by connecting them with relevant mentors and investors. It is back. And this year, The Power of Ideas is bigger and even more relevant and even more rewarding.\r\n\r\nThe Economic Times is delighted to join hands with the Department of Science and Technology (DST), Government of India. The Department of Science & Technology, with its immense expertise and relationships in the entrepreneurial space, is offering guaranteed funds worth Rs 5 crore. It will be given out to not just for those who have taken the first step, but even to dreamers who come with nothing more than a good idea. It’s our way of saluting innovation. Working alongside will be the Centre for Innovation, Incubation and Entrepreneurship (CIIE), Indian Institute of Management (IIM), Ahmedabad. Started as an incubating lab of IIM Ahmedabad, CIIE is today a domain expert, with experience in mentoring, hand-holding and making entrepreneurs investor-ready.\r\n\r\nSo this unique public-private-academia partnership means there is real money and real expertise powering The Power of Ideas 2010. Now what are you waiting for? Start up!', '2014-12-26 21:52:59'),
(42, '4558390', 'Co-Founders & Core Teams for Startups', 'This group is for Indian Entrepreneurs and Working Professionals employed in Corporations to connect and network with each other, find team members with Complimenting Skill sets, explore various options of working together like Mentorship, Co Founders, Core Team members, Advisors, Consultants, Evangelists or Investors.\r\n\r\nA very important phase in an Entrepreneur''s journey is the initial Core team formation. This becomes a key driver for venture''s success. Even an Angel Investor or a VC typically looks at the initial Founding team, their credibility, skills, commitment, apart from just the idea, before he considers investing into it. A great idea executed bad is a disaster.  The Core team, their skills are very essential for great execution. \r\n\r\nOn the other hand, there are highly talented professionals working as employees in large companies.  Some are happy with their jobs and Organizational career advancement.  Some feel they can achieve more, are currently under utilized or not having enough opportunities to contribute their best.  Some may have spare time.  Some have worked long enough and its time now for them to pursue their passions. \r\n\r\nThis Group''s few use case examples -\r\n\r\n1)  A Founder having initial idea with business / industry expertise may be looking for a Technical Co-founder \r\n\r\n2)  A Technical Engineer could be looking for Business people or other Engineers with different skill sets.  \r\n\r\n3)  Working professionals aspiring to become entrepreneurs OR wish to associate with interesting Startups as Mentors, Advisors, Co Founders, Core team members, Consultants, Evangelists or Investors.\r\n\r\n4)  To discuss topics of mutual interest concerning Entrepreneurship or Professional Working Challenges & Opportunities.\r\n\r\nPlease note this group is for Startups and for Core Team members only.  This is not a job posting group for all kinds of openings that may exist.', '2014-12-26 21:52:59'),
(43, '2019943', 'Global Investment Network', 'Global Investment Network is to connect Venture Capitalists, Investment Funds, Angel Investors & Other Investors & share opportunities. It is also a Group where Individuals, Entities and Firms looking for Funding can connect to Investors and share details about their Venture & funding needs.\r\n\r\nUSA, America, US, India, Gulf, Europe, UK, Asia Pacific, Africa, Canada, Australia, UAE, China', '2014-12-26 21:52:59'),
(44, '47993', 'Venture Capital: Funds, Growth Capital Funding, Business Capital & Financing | PrivateEquity.com', 'The Venture Capital Group is focused on providing resources, events, discussions, connections, videos, and training on the venture capital industry. \r\n\r\nDownload our free book on private equity at http://PrivateEquity.com/Book\r\n\r\nWe provide the industry leading Certified Private Equity Professional (CPEP) certificate program, the #1 self-directed private equity training program.  http://PrivateEquity.com/Private-Equity-Certificate\r\n\r\nLearn more about our team at http://PrivateEquity.com', '2014-12-26 21:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `Location`
--

CREATE TABLE IF NOT EXISTS `Location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdOnTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Location`
--

INSERT INTO `Location` (`id`, `name`, `createdOnTime`) VALUES
(1, 'Pune', '2014-12-01 00:00:00'),
(2, 'Mumbai', '2014-12-09 00:00:00'),
(3, 'Delhi', '2014-12-01 00:00:00'),
(4, 'Chennai', '2014-12-09 00:00:00'),
(5, 'Pune Area, India', '2014-12-26 23:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `LocationSimIndex`
--

CREATE TABLE IF NOT EXISTS `LocationSimIndex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location1` int(11) NOT NULL,
  `location2` int(11) NOT NULL,
  `index` int(11) NOT NULL,
  `createdOnTime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1E6D08428F346A06` (`location1`),
  KEY `IDX_1E6D0842163D3BBC` (`location2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Skill`
--

CREATE TABLE IF NOT EXISTS `Skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdOnTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `Skill`
--

INSERT INTO `Skill` (`id`, `name`, `createdOnTime`) VALUES
(1, 'C', '2014-12-01 00:00:00'),
(2, 'C++', '2014-12-01 00:00:00'),
(3, 'Computer', '2014-12-01 00:00:00'),
(4, 'Software Testing', '2014-12-01 00:00:00'),
(5, 'Testing', '2014-12-01 00:00:00'),
(6, 'QA', '2014-12-01 00:00:00'),
(7, 'Java', '2014-12-01 00:00:00'),
(8, 'Data Structure', '2014-12-01 00:00:00'),
(9, 'Algorithms', '2014-12-01 00:00:00'),
(10, 'PHP', '2014-12-01 00:00:00'),
(11, 'C#', '2014-12-01 00:00:00'),
(12, 'MVC', '2014-12-01 00:00:00'),
(13, '.NET', '2014-12-01 00:00:00'),
(14, 'MYSQL', '2014-12-01 00:00:00'),
(15, 'Python', '2014-12-01 00:00:00'),
(16, 'R', '2014-12-01 00:00:00'),
(17, 'Objective C', '2014-12-01 00:00:00'),
(18, 'Scalability', '2014-12-01 00:00:00'),
(19, 'Apache', '2014-12-01 00:00:00'),
(20, 'Load Balancing', '2014-12-01 00:00:00'),
(21, 'Joomla', '2014-12-27 00:00:00'),
(22, 'Drupal', '2014-12-27 00:00:00'),
(23, 'Tomcat', '2014-12-27 00:00:00'),
(24, 'LAMP', '2014-12-27 00:00:00'),
(25, 'OOPS', '2014-12-27 00:00:00'),
(26, 'E-Commerce', '2014-12-27 00:00:00'),
(27, 'CakePHP', '2014-12-27 00:00:00'),
(28, 'Zend', '2014-12-27 00:00:00'),
(29, 'Symfony', '2014-12-27 00:00:00'),
(30, 'CodeIgnitor', '2014-12-27 00:00:00'),
(31, 'jQuery', '2014-12-26 22:30:56'),
(32, 'JavaScript', '2014-12-26 22:30:56'),
(33, 'SDLC', '2014-12-26 22:30:56'),
(34, 'Software Development', '2014-12-26 22:30:56'),
(35, 'SQL', '2014-12-26 22:30:56'),
(36, 'XML', '2014-12-26 22:30:56'),
(37, 'Linux', '2014-12-26 22:30:57'),
(38, 'Web Services', '2014-12-26 22:30:57'),
(39, 'Unix', '2014-12-26 22:30:57'),
(40, 'Eclipse', '2014-12-26 22:30:57'),
(41, 'AJAX', '2014-12-26 22:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkedinId` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pictureUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `headline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8_unicode_ci,
  `industry` int(11) DEFAULT NULL,
  `email` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signupOnTime` datetime NOT NULL,
  `lastUpdatedOnTime` datetime NOT NULL,
  `lastLoginTime` datetime NOT NULL,
  `currentCompany` int(11) DEFAULT NULL,
  `experience` int(11) NOT NULL,
  `location` int(11) DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2DA179777EF80D3E` (`currentCompany`),
  KEY `IDX_2DA179775E9E89CB` (`location`),
  KEY `IDX_2DA17977CDFA6CA0` (`industry`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `linkedinId`, `firstName`, `lastName`, `pictureUrl`, `headline`, `summary`, `industry`, `email`, `signupOnTime`, `lastUpdatedOnTime`, `lastLoginTime`, `currentCompany`, `experience`, `location`, `position`) VALUES
(1, 'hkhdfakhfdkas', NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Software', '2014-12-25 22:00:07', '2014-12-25 22:00:07', '2014-12-25 22:00:07', NULL, 0, NULL, NULL),
(2, 'behqdbEcFl_old', 'Yashwant', 'Gaikawad', NULL, 'Co-Founder at YoPano', NULL, NULL, NULL, '2014-12-25 22:05:12', '2014-12-25 22:05:12', '2014-12-25 22:05:12', NULL, 0, NULL, NULL),
(3, 'behqdbEcFl', 'Yashwant', 'Gaikawad', NULL, 'Co-Founder at YoPano', NULL, 62, NULL, '2014-12-27 00:11:10', '2014-12-27 00:11:10', '2014-12-27 00:11:10', 21, 4, 5, 'Co-Founder');

-- --------------------------------------------------------

--
-- Table structure for table `UserAlumniCompWeight`
--

CREATE TABLE IF NOT EXISTS `UserAlumniCompWeight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `company` int(11) NOT NULL,
  `lastUpdatedOn` datetime NOT NULL,
  `weight` decimal(10,3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_33060DB18D93D649` (`user`),
  KEY `IDX_33060DB14FBF094F` (`company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `UserEducations`
--

CREATE TABLE IF NOT EXISTS `UserEducations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `degree` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fieldOfStudy` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL,
  `createdOnTime` datetime NOT NULL,
  `linkedinId` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BC4D215CAADA8702` (`college`),
  KEY `IDX_BC4D215C8D93D649` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `UserEducations`
--

INSERT INTO `UserEducations` (`id`, `college`, `user`, `degree`, `fieldOfStudy`, `notes`, `startDate`, `endDate`, `createdOnTime`, `linkedinId`) VALUES
(1, 15, 2, 'Bachelor of Engineering (BE)', 'Computer Science', NULL, NULL, NULL, '2014-12-26 23:09:33', NULL),
(2, 15, 2, 'Bachelor of Engineering (BE)', 'Computer Science', NULL, NULL, NULL, '2014-12-26 23:10:58', NULL),
(3, 16, 2, 'HSC', NULL, NULL, NULL, NULL, '2014-12-26 23:10:59', NULL),
(4, 15, 3, 'Bachelor of Engineering (BE)', 'Computer Science', NULL, NULL, NULL, '2014-12-27 00:11:15', NULL),
(5, 16, 3, 'HSC', NULL, NULL, NULL, NULL, '2014-12-27 00:11:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `UserGroupJobWeight`
--

CREATE TABLE IF NOT EXISTS `UserGroupJobWeight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `job` int(11) NOT NULL,
  `lastUpdatedOn` datetime NOT NULL,
  `weight` decimal(10,3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FFF8A7B18D93D649` (`user`),
  KEY `IDX_FFF8A7B1FBD8E0F8` (`job`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `UserGroups`
--

CREATE TABLE IF NOT EXISTS `UserGroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `ligroup` int(11) NOT NULL,
  `createdOnTime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D06628528D93D649` (`user`),
  KEY `IDX_D0662852556314A5` (`ligroup`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=89 ;

--
-- Dumping data for table `UserGroups`
--

INSERT INTO `UserGroups` (`id`, `user`, `ligroup`, `createdOnTime`) VALUES
(1, 2, 1, '2014-12-26 22:01:35'),
(2, 2, 2, '2014-12-26 22:01:35'),
(3, 2, 3, '2014-12-26 22:01:35'),
(4, 2, 4, '2014-12-26 22:01:35'),
(5, 2, 5, '2014-12-26 22:01:35'),
(6, 2, 6, '2014-12-26 22:01:36'),
(7, 2, 7, '2014-12-26 22:01:36'),
(8, 2, 8, '2014-12-26 22:01:36'),
(9, 2, 9, '2014-12-26 22:01:36'),
(10, 2, 10, '2014-12-26 22:01:36'),
(11, 2, 11, '2014-12-26 22:01:36'),
(12, 2, 12, '2014-12-26 22:01:36'),
(13, 2, 13, '2014-12-26 22:01:36'),
(14, 2, 14, '2014-12-26 22:01:36'),
(15, 2, 15, '2014-12-26 22:01:36'),
(16, 2, 16, '2014-12-26 22:01:36'),
(17, 2, 17, '2014-12-26 22:01:36'),
(18, 2, 18, '2014-12-26 22:01:36'),
(19, 2, 19, '2014-12-26 22:01:36'),
(20, 2, 20, '2014-12-26 22:01:36'),
(21, 2, 21, '2014-12-26 22:01:36'),
(22, 2, 22, '2014-12-26 22:01:36'),
(23, 2, 23, '2014-12-26 22:01:36'),
(24, 2, 24, '2014-12-26 22:01:36'),
(25, 2, 25, '2014-12-26 22:01:37'),
(26, 2, 26, '2014-12-26 22:01:37'),
(27, 2, 27, '2014-12-26 22:01:37'),
(28, 2, 28, '2014-12-26 22:01:37'),
(29, 2, 29, '2014-12-26 22:01:37'),
(30, 2, 30, '2014-12-26 22:01:37'),
(31, 2, 31, '2014-12-26 22:01:37'),
(32, 2, 32, '2014-12-26 22:01:37'),
(33, 2, 33, '2014-12-26 22:01:37'),
(34, 2, 34, '2014-12-26 22:01:37'),
(35, 2, 35, '2014-12-26 22:01:37'),
(36, 2, 36, '2014-12-26 22:01:37'),
(37, 2, 37, '2014-12-26 22:01:37'),
(38, 2, 38, '2014-12-26 22:01:37'),
(39, 2, 39, '2014-12-26 22:01:37'),
(40, 2, 40, '2014-12-26 22:01:37'),
(41, 2, 41, '2014-12-26 22:01:37'),
(42, 2, 42, '2014-12-26 22:01:37'),
(43, 2, 43, '2014-12-26 22:01:37'),
(44, 2, 44, '2014-12-26 22:01:37'),
(45, 3, 1, '2014-12-27 00:11:11'),
(46, 3, 2, '2014-12-27 00:11:11'),
(47, 3, 3, '2014-12-27 00:11:11'),
(48, 3, 4, '2014-12-27 00:11:11'),
(49, 3, 5, '2014-12-27 00:11:11'),
(50, 3, 6, '2014-12-27 00:11:11'),
(51, 3, 7, '2014-12-27 00:11:11'),
(52, 3, 8, '2014-12-27 00:11:11'),
(53, 3, 9, '2014-12-27 00:11:11'),
(54, 3, 10, '2014-12-27 00:11:11'),
(55, 3, 11, '2014-12-27 00:11:11'),
(56, 3, 12, '2014-12-27 00:11:12'),
(57, 3, 13, '2014-12-27 00:11:12'),
(58, 3, 14, '2014-12-27 00:11:12'),
(59, 3, 15, '2014-12-27 00:11:12'),
(60, 3, 16, '2014-12-27 00:11:12'),
(61, 3, 17, '2014-12-27 00:11:12'),
(62, 3, 18, '2014-12-27 00:11:12'),
(63, 3, 19, '2014-12-27 00:11:12'),
(64, 3, 20, '2014-12-27 00:11:12'),
(65, 3, 21, '2014-12-27 00:11:12'),
(66, 3, 22, '2014-12-27 00:11:12'),
(67, 3, 23, '2014-12-27 00:11:12'),
(68, 3, 24, '2014-12-27 00:11:12'),
(69, 3, 25, '2014-12-27 00:11:12'),
(70, 3, 26, '2014-12-27 00:11:12'),
(71, 3, 27, '2014-12-27 00:11:12'),
(72, 3, 28, '2014-12-27 00:11:12'),
(73, 3, 29, '2014-12-27 00:11:12'),
(74, 3, 30, '2014-12-27 00:11:12'),
(75, 3, 31, '2014-12-27 00:11:12'),
(76, 3, 32, '2014-12-27 00:11:12'),
(77, 3, 33, '2014-12-27 00:11:12'),
(78, 3, 34, '2014-12-27 00:11:12'),
(79, 3, 35, '2014-12-27 00:11:13'),
(80, 3, 36, '2014-12-27 00:11:13'),
(81, 3, 37, '2014-12-27 00:11:13'),
(82, 3, 38, '2014-12-27 00:11:13'),
(83, 3, 39, '2014-12-27 00:11:13'),
(84, 3, 40, '2014-12-27 00:11:13'),
(85, 3, 41, '2014-12-27 00:11:13'),
(86, 3, 42, '2014-12-27 00:11:13'),
(87, 3, 43, '2014-12-27 00:11:13'),
(88, 3, 44, '2014-12-27 00:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `UserSkills`
--

CREATE TABLE IF NOT EXISTS `UserSkills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `skill` int(11) NOT NULL,
  `createdOnTime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F53A07528D93D649` (`user`),
  KEY `IDX_F53A07525E3DE477` (`skill`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `UserSkills`
--

INSERT INTO `UserSkills` (`id`, `user`, `skill`, `createdOnTime`) VALUES
(1, 2, 2, '2014-12-26 22:30:56'),
(2, 2, 1, '2014-12-26 22:30:56'),
(3, 2, 18, '2014-12-26 22:30:56'),
(4, 2, 7, '2014-12-26 22:30:56'),
(5, 2, 10, '2014-12-26 22:30:56'),
(6, 2, 31, '2014-12-26 22:30:56'),
(7, 2, 32, '2014-12-26 22:30:56'),
(8, 2, 33, '2014-12-26 22:30:56'),
(9, 2, 34, '2014-12-26 22:30:56'),
(10, 2, 35, '2014-12-26 22:30:56'),
(11, 2, 36, '2014-12-26 22:30:57'),
(12, 2, 14, '2014-12-26 22:30:57'),
(13, 2, 37, '2014-12-26 22:30:57'),
(14, 2, 38, '2014-12-26 22:30:57'),
(15, 2, 39, '2014-12-26 22:30:57'),
(16, 2, 40, '2014-12-26 22:30:57'),
(17, 2, 41, '2014-12-26 22:30:57'),
(18, 3, 2, '2014-12-27 00:11:13'),
(19, 3, 1, '2014-12-27 00:11:14'),
(20, 3, 18, '2014-12-27 00:11:14'),
(21, 3, 7, '2014-12-27 00:11:14'),
(22, 3, 10, '2014-12-27 00:11:14'),
(23, 3, 31, '2014-12-27 00:11:14'),
(24, 3, 32, '2014-12-27 00:11:14'),
(25, 3, 33, '2014-12-27 00:11:14'),
(26, 3, 34, '2014-12-27 00:11:14'),
(27, 3, 35, '2014-12-27 00:11:14'),
(28, 3, 36, '2014-12-27 00:11:14'),
(29, 3, 14, '2014-12-27 00:11:14'),
(30, 3, 37, '2014-12-27 00:11:14'),
(31, 3, 38, '2014-12-27 00:11:14'),
(32, 3, 39, '2014-12-27 00:11:14'),
(33, 3, 40, '2014-12-27 00:11:14'),
(34, 3, 41, '2014-12-27 00:11:14');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `IndustrySimIndex`
--
ALTER TABLE `IndustrySimIndex`
  ADD CONSTRAINT `FK_C7B72D93CCCEE789` FOREIGN KEY (`industry2`) REFERENCES `Industry` (`id`),
  ADD CONSTRAINT `FK_C7B72D9355C7B633` FOREIGN KEY (`industry1`) REFERENCES `Industry` (`id`);

--
-- Constraints for table `Job`
--
ALTER TABLE `Job`
  ADD CONSTRAINT `FK_C395A6185E9E89CB` FOREIGN KEY (`location`) REFERENCES `Location` (`id`),
  ADD CONSTRAINT `FK_C395A6184FBF094F` FOREIGN KEY (`company`) REFERENCES `Company` (`id`),
  ADD CONSTRAINT `FK_C395A618CDFA6CA0` FOREIGN KEY (`industry`) REFERENCES `Industry` (`id`);

--
-- Constraints for table `JobSkills`
--
ALTER TABLE `JobSkills`
  ADD CONSTRAINT `FK_DB08C0095E3DE477` FOREIGN KEY (`skill`) REFERENCES `Skill` (`id`),
  ADD CONSTRAINT `FK_DB08C009FBD8E0F8` FOREIGN KEY (`job`) REFERENCES `Job` (`id`);

--
-- Constraints for table `LocationSimIndex`
--
ALTER TABLE `LocationSimIndex`
  ADD CONSTRAINT `FK_1E6D0842163D3BBC` FOREIGN KEY (`location2`) REFERENCES `Location` (`id`),
  ADD CONSTRAINT `FK_1E6D08428F346A06` FOREIGN KEY (`location1`) REFERENCES `LocationSimIndex` (`id`);

--
-- Constraints for table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `FK_2DA17977CDFA6CA0` FOREIGN KEY (`industry`) REFERENCES `Industry` (`id`),
  ADD CONSTRAINT `FK_2DA179775E9E89CB` FOREIGN KEY (`location`) REFERENCES `Location` (`id`),
  ADD CONSTRAINT `FK_2DA179777EF80D3E` FOREIGN KEY (`currentCompany`) REFERENCES `Company` (`id`);

--
-- Constraints for table `UserAlumniCompWeight`
--
ALTER TABLE `UserAlumniCompWeight`
  ADD CONSTRAINT `FK_33060DB14FBF094F` FOREIGN KEY (`company`) REFERENCES `Company` (`id`),
  ADD CONSTRAINT `FK_33060DB18D93D649` FOREIGN KEY (`user`) REFERENCES `User` (`id`);

--
-- Constraints for table `UserEducations`
--
ALTER TABLE `UserEducations`
  ADD CONSTRAINT `FK_BC4D215C8D93D649` FOREIGN KEY (`user`) REFERENCES `User` (`id`),
  ADD CONSTRAINT `FK_BC4D215CAADA8702` FOREIGN KEY (`college`) REFERENCES `College` (`id`);

--
-- Constraints for table `UserGroupJobWeight`
--
ALTER TABLE `UserGroupJobWeight`
  ADD CONSTRAINT `FK_FFF8A7B18D93D649` FOREIGN KEY (`user`) REFERENCES `User` (`id`),
  ADD CONSTRAINT `FK_FFF8A7B1FBD8E0F8` FOREIGN KEY (`job`) REFERENCES `Job` (`id`);

--
-- Constraints for table `UserGroups`
--
ALTER TABLE `UserGroups`
  ADD CONSTRAINT `FK_D0662852556314A5` FOREIGN KEY (`ligroup`) REFERENCES `LinkedinGroup` (`id`),
  ADD CONSTRAINT `FK_D06628528D93D649` FOREIGN KEY (`user`) REFERENCES `User` (`id`);

--
-- Constraints for table `UserSkills`
--
ALTER TABLE `UserSkills`
  ADD CONSTRAINT `FK_F53A07525E3DE477` FOREIGN KEY (`skill`) REFERENCES `Skill` (`id`),
  ADD CONSTRAINT `FK_F53A07528D93D649` FOREIGN KEY (`user`) REFERENCES `User` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
