-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 10, 2020 lúc 06:23 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `job-portal`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$vOOCtphlDhUzeqS0H/IJyu0MoDFTdyI/E0/Y..81OqWZZ79EFZbNS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_cate` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_cate`, `name`, `created_at`, `updated_at`) VALUES
(1, 'JAVA', NULL, NULL),
(2, 'PHP', NULL, NULL),
(3, 'TESTER', NULL, NULL),
(4, 'PYTHON', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company_users`
--

CREATE TABLE `company_users` (
  `id_com` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `company_users`
--

INSERT INTO `company_users` (`id_com`, `username`, `companyname`, `email`, `password`, `phone`, `location`, `introduction`, `logo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'thanh', 'VNPT', 'ncthanh0411@gmail.com', '$2y$10$vOOCtphlDhUzeqS0H/IJyu0MoDFTdyI/E0/Y..81OqWZZ79EFZbNS', '0907986613', 'District 9', '<p>This is for VNPT&nbsp;company</p>', 'brasol.vn-logo-vnpt-logo-vnpt.png', NULL, '2020-07-02 19:53:53', '2020-07-09 09:00:50'),
(2, 'minh', 'LoliTech', '2018minh@gmail.com', '$2y$10$tqBKjNWDUMEC9hHHPArA7eW7rEXqLjaO6K8npWypdYEd1rMy7kqAC', '0979215152', 'district 1', '', 'tải xuống.png', NULL, '2020-07-02 23:26:29', '2020-07-09 09:06:57'),
(4, 'fpt_admin', 'FPT Software', 'fpt@gmail.com', '$2y$10$B2lgo3gcvWubIYOymbWcEOsaC0Dl4mxC741mFGykLZYhqjTp/dDq2', '0979036420', 'Ho Chi Minh, Ha Noi, Da Nang, Others', '<p>FPT Software is part of FPT Corporation (FPT &ndash; HoSE) &ndash; the global leading technology, outsourcing and IT services group headquartered in Vietnam with nearly US$2 billion in revenue and more than 13,000 employees. Qualified with CMMI Level 5 &amp; ISO 27001:2013, ASPICE LEVEL 3, FPT Software delivers world-class services in Smart factory, Digital platform, RPA, AI, IoT, Enterprise Mobilization, Cloud, AR/VR, Embedded System, Managed service, Testing, Platform modernization, Business Applications, Application Service, BPO and more services globally from delivery centers across the United States, Japan, Europe, Korea, China, Australia, Vietnam and the Asia Pacific.&nbsp;<br />\r\n<br />\r\nIn 2017, FPT Software has been placed in top 10 of the ranking for three consecutive years. Among top 10, FPT Software is the only IT Company.&nbsp;</p>', 'LogoFPT-2017-copy-3042-1513928399.jpg', NULL, '2020-07-07 09:01:08', '2020-07-07 09:13:04'),
(5, 'kms_admin', 'KMS Technology', 'kms@gmail.com', '$2y$10$sdoGy5hns8yfv9HboPghoutr05MIGYbjBwZSDGxGsQpUGWp0F/may', '0979036420', '123 Cong Hoa, ward 12, Tan Binh, Ho Chi Minh', '<p>KMS Technology, is a 10-year-old Global Technology company specialized in Software Outsourcing, Software Product Development, IT Solutions &amp; Consulting. Besides providing excellent Software Outsourcing services, KMS has launched awesome global products: QASymphony, Katalon Studio, Kobiton, Sprynkl and there will be others to come. Other companies under KMS umbrella: UpStar Labs is the startup incubation and investment; KMS Solutions focuses on technology consulting in the region.</p>\r\n\r\n<p>With the cozy working environment and the excellent leadership team, KMS has been building its team with 1000+ talents in Vietnam. Recently KMS was ranked as top 4 IT company and top 26 best places to work in Vietnam. We always strive to maximize the growth of our teams by recognizing every individual&rsquo;s strengths and building a career path for members.</p>\r\n\r\n<p>Join us to write your own success stories!</p>', 'KMS-logo3.jpg', NULL, '2020-07-07 09:46:16', '2020-07-07 09:50:11'),
(6, 'vng_admin', 'VNG Corporation', 'vng@gmail.com', '$2y$10$vuJUpggPyYCT2xrFSjsJo.jJruC1S6cQy8BvQ6zXlho/Wpj1Kcmaq', '0979036420', 'VNG Campus, Tan Thuan Dong, District 7, Ho Chi Minh', '<p>VNG believes in the power of the Internet and sees it as its mission to bring Internet users meaningful experiences. Each day, millions of young Vietnamese entertain, network and make friends, shop online or engage in social activities through VNG products, which are the ways VNG creates value for the society.</p>', 'vng-logo-share-v2.jpg', NULL, '2020-07-07 09:56:39', '2020-07-07 09:57:41'),
(7, 'Techcombank', 'Techcombank', 'gg@gmail.com', '$2y$10$QoqQVLlJc4ptTy9Tp8xtV.zHAm8cElAmwLOAVxPbN4ZIqhcS5bU/m', '', 'TP.HCM', '', '', NULL, '2020-07-10 08:54:33', '2020-07-10 08:54:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id_job` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Salary` int(11) NOT NULL,
  `Job_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Requirement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Expired_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `jobs`
--

INSERT INTO `jobs` (`id_job`, `title`, `Salary`, `Job_description`, `Requirement`, `Expired_date`, `Status`, `company_id`, `categories_id`, `created_at`, `updated_at`) VALUES
(7, 'Senior Mobile Developers (iOS, Android)', 2000, '<ul>\r\n	<li>Working for large business unit of high-profile Corporation in Europe. Get involved in professional environment with latest technologies.</li>\r\n	<li>Study requirement, existing Mobile Application, create design documents, coding and write unit test (great than 90% UT coverage).</li>\r\n	<li>Communicate with Development team in Europe to understand and work on architecture design, detail design of Product Components and Features.</li>\r\n	<li>Collaborating with PM, BA, QC and other developers to ensure highest quality of products delivered.</li>\r\n	<li>Be responsible for senior role of Viet Nam team on architecture design, Code Review tasks and be the mentor for other Developers in project.</li>\r\n	<li>You work well within a team environment and enjoy working in the office with your colleagues.</li>\r\n	<li>Report to Project Manager.</li>\r\n</ul>', '<ul>\r\n	<li>4+ years experience working with Swift 5, Objective C on iOS 13 and older versions (iOS)</li>\r\n	<li>4+ years experience working with Java 8, Kotlin on Android 10 and older versions (Android)</li>\r\n	<li>2+ Experience working with frameworks: Firebase, Notification, Location, Localization, Map, Facebook</li>\r\n	<li>2+ years experience working with REST API&rsquo;s &nbsp;</li>\r\n	<li>2+ years experience working with Open ID and/or OAuth</li>\r\n	<li>2 years experience working with Multiple Thread issues</li>\r\n	<li>2+ year experience working with Payments: Braintree, PayPal or Apple Pay</li>\r\n	<li>Ability to create and maintain continuous integration and delivery of applications to Apple Store</li>\r\n	<li>An understanding of Android/iOS best practices and a commitment to following them</li>\r\n	<li>Ability to work through new and difficult issues and contribute to libraries as needed.</li>\r\n	<li>A positive mindset and can-do attitude</li>\r\n	<li>Good English Skills, ability to effectively communicate via written and spoken English.</li>\r\n	<li>You&rsquo;re passionate about software development</li>\r\n	<li>You work well within a team environment and enjoy working in the office with your colleagues</li>\r\n</ul>', '01/02/2021', 1, 4, 1, '2020-07-07 09:05:57', '2020-07-07 09:07:09'),
(8, 'Performance Tester (QA QC, English)', 1000, '<ul>\r\n	<li>Design and execute performance test strategy.</li>\r\n	<li>Work with testing team to develop performance test plans and test scenarios.</li>\r\n	<li>Build scripts using Jmeter in integration with Athena and Google Data Studio.</li>\r\n	<li>Conduct system performance testing to ensure system reliability, capacity and scalability.</li>\r\n	<li>Communicate directly with English speaking client to get requirement, define working process and testing approaches.</li>\r\n	<li>Analyze test results and coordinate with development teams for bug fixes.</li>\r\n	<li>Generate test summary reports for management review.</li>\r\n	<li>Analyze root causes of performance issues and provide corrective actions.</li>\r\n	<li>Review and recommend improvements to existing test procedures.</li>\r\n</ul>', '<ul>\r\n	<li>Bachelor&rsquo;s degree in Computer Science, IT or related majors.</li>\r\n	<li>3 years of experience in the testing career with 3 years of experience in automation testing or performance testing.</li>\r\n	<li>Quick learner and research skills on new tools, new technologies.</li>\r\n	<li>Execute performance testing skills with JMeter.</li>\r\n	<li>Experience using Jenkins &amp; Git.</li>\r\n	<li>Have hand-on experience at CI/CD is a big plus</li>\r\n	<li>Have knowledge of software development process Agile/Scrum.</li>\r\n	<li>Good in problem-solving, analytical, and critical thinking skills.</li>\r\n	<li>Have good English skills is an advantage, both written and verbal communication (TOEIC 600)</li>\r\n</ul>', '01/01/2021', 1, 4, 3, '2020-07-07 09:24:53', '2020-07-07 09:42:42'),
(9, 'Senior Java Developers (J2EE, Spring)', 3000, '<ul>\r\n	<li>Participate in the dynamic &amp; creative project teams to build the SOA project(s) which you can contribute your most valuable strength(s) from design, analysis, implementation, verification and deployment.</li>\r\n	<li>Daily synch-up with project team from multiple locations to update progress, clarify requirement and discuss technical solution.</li>\r\n</ul>', '<ul>\r\n	<li>Bachelor degree in IT.</li>\r\n	<li>Proficient in English communication, can communicate directly with customer via emails, conference calls.</li>\r\n	<li>At least 03 years programming in J2EE technologies, very proficient in&nbsp;<strong>Java Core</strong>&nbsp;and experienced in design pattern.</li>\r\n	<li>Experienced in&nbsp;<strong>Java/J2EE, Spring framework</strong>, Hibernate, SQL Database (such as Oracle).</li>\r\n	<li>Experienced in front end development with&nbsp;<strong>Angular or React</strong></li>\r\n	<li>Experienced in&nbsp;<strong>Web Service</strong>&nbsp;(SOAP and RESTful).</li>\r\n</ul>', 'Unlimited', 1, 4, 1, '2020-07-07 09:31:11', '2020-07-07 09:42:39'),
(10, 'Senior Python Developer', 2500, '<ul>\r\n	<li>Love Coding</li>\r\n	<li>Follow Your Passion</li>\r\n	<li>Enjoy Every Single Working Day with Your Nice Colleagues and Our Kind Clients</li>\r\n	<li>Take Your Skill to the Next Level</li>\r\n</ul>', '<ul>\r\n	<li>Fluent in Python and Django technologies to develop web-based applications</li>\r\n	<li>Experience in working with SQL and database design; PostgreSQL experience preferred</li>\r\n	<li>Basic knowledge or experience in working with&nbsp;HTML, CSS, and JavaScript</li>\r\n	<li>Experience in Web application/ SaaS development/Microservices</li>\r\n	<li>Understanding of RESTful API design</li>\r\n</ul>', 'Unlimited', 1, 5, 4, '2020-07-07 09:51:17', '2020-07-07 09:53:33'),
(11, 'Senior Java Developer/ Technical Lead', 1500, '<p>Based on your competencies and potentials, you may take one of these positions:</p>\r\n\r\n<p>A. Java Technical Lead&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Lead the offshore development center, ensure the understanding and compliance of offshore engineers to the product vision, and technical direction</li>\r\n	<li>Accountable for leading the development team to maintain, improve code quality, maintainability of the software suite and achieve other operational goals for the software suite (i.e. ease of deployment, CI/CD ready&hellip;)</li>\r\n	<li>Participate in software architecture and design activities with both the client&rsquo;s technical leaders and KMS onshore/offshore, make technical decisions for the development of the applications</li>\r\n</ul>\r\n\r\n<p>B. Senior Java Software Engineer</p>\r\n\r\n<ul>\r\n	<li>Love Coding</li>\r\n	<li>Follow Your Passion</li>\r\n	<li>Enjoy Every Single Working Day with Your Nice Colleagues and Our Kind Clients</li>\r\n	<li>Take Your Skill to the Next Level</li>\r\n</ul>\r\n\r\n<p>The responsibility includes: design, coding, troubleshooting and working with project team as well as customers on features/bug fixes.</p>', '<p><em><strong>General requirements:</strong></em></p>\r\n\r\n<ul>\r\n	<li>At least an intermediate skill level of English</li>\r\n	<li>Likely having 3+ years of experience (flexible depending on how fast your learning and technical developing capabilities are)</li>\r\n	<li>Familiar with the Agile development methodologies (Scrum, XP, Kanban)</li>\r\n</ul>\r\n\r\n<p><em><strong>Technical requirements:</strong></em></p>\r\n\r\n<p>A. Java Technical Lead &nbsp;</p>\r\n\r\n<ul>\r\n	<li>Solid knowledge and experience as enterprise software architect with the ability to be hands-on as a developer, a technical lead or architect</li>\r\n	<li>5+ years of experience with Java EE and application server architectures</li>\r\n	<li>4+ years of experience with RDBMS, SQL, and object/relational mappings, dealing with large data</li>\r\n	<li>Experience with scaling web-based applications and web security issues</li>\r\n</ul>\r\n\r\n<p>B. Senior Java Software Engineer</p>\r\n\r\n<ul>\r\n	<li>Fluent with Java in order to develop enterprise web-based applications</li>\r\n	<li>Strong experience with web-based technologies: Spring (Spring Core, Spring MVC, Spring Security, Spring Data, Spring Boot) and ORM (JPA, Hibernate)</li>\r\n	<li>Good experience with unit testing: JUnit, mock</li>\r\n	<li>Experience with Web Services (REST, etc.), Micro-services</li>\r\n</ul>', '08/10/2020', 1, 5, 1, '2020-07-07 09:52:23', '2020-07-07 09:53:41'),
(12, 'Mid/Senior QC Engineer (Web/Mobile App)', 1300, '<ul>\r\n	<li>Designing and writing test automation scripts using existing automation tools &amp; frameworks.</li>\r\n	<li>Investigating problems in software as a result of testing.</li>\r\n	<li>Reviewing testcases.</li>\r\n	<li>Working with Domain Tester and Software Developers to reproduce defect and trace root cause.</li>\r\n</ul>', '<ul>\r\n	<li>Designing and writing test automation scripts using existing automation tools &amp; frameworks.</li>\r\n	<li>Investigating problems in software as a result of testing.</li>\r\n	<li>Reviewing testcases.</li>\r\n	<li>Working with Domain Tester and Software Developers to reproduce defect and trace root cause.</li>\r\n</ul>\r\n\r\n\r\n<ul>\r\n	<li>At least 2 years&rsquo; experience of Automation test with high volume of test case.</li>\r\n	<li>Expert in Automation Testing for Mobile, Web apps and API with Appium, Selenium, SoapUI, Postman&hellip;</li>\r\n	<li>Experienced in creating well-structured, re-used automation test cases.</li>\r\n	<li>Experience with automation frameworks (e.g. Cucumber, Robot Framework, Fitnesse, TestNG&hellip;)</li>\r\n	<li>Experience with performance testing &ndash; JMeter, LoadRunner is a PLUS.</li>\r\n	<li>Experienced in implementing nightly, daily execution.</li>\r\n	<li>Familiar with CI/CD (e.g. Jenkins).</li>\r\n	<li>Experience with Jira, Confluence.</li>\r\n	<li>Ability to work in agile environment.</li>\r\n</ul>', 'Unlimited', 1, 6, 3, '2020-07-07 10:00:22', '2020-07-07 10:06:03'),
(13, 'Back-end Developer (Java) - Up to $3000', 3000, '<ul>\r\n	<li>Develop core library for back-end services for VNG&#39;s products (fin-tech, cloud services, web platform,...).</li>\r\n	<li>Build back-end services.</li>\r\n	<li>Build management tools and data processing.</li>\r\n	<li>Control the service operations for running smoothly and without errors.</li>\r\n	<li>Participate in analyst, design and develop system platform.</li>\r\n</ul>', '<ul>\r\n	<li><strong>Experience with Java.</strong></li>\r\n	<li>Strong knowledge of OOP, Data Structure and Algorithms.</li>\r\n	<li>Strong knowledge of Web Programming is a plus.</li>\r\n	<li>Strong experience with RDBMS like MySQL, PostgreSQL.</li>\r\n	<li>Experience with NoSQL databases, such as LevelDB, MongoDB, Cassandra is a plus.</li>\r\n	<li>Strong experience with microservices architecture is a plus.</li>\r\n	<li>Strong experience with Messaging System like Kafka, ZeroMQ, Rabbit MQ is a plus.</li>\r\n	<li>Basic knowledge of Linux servers.</li>\r\n	<li>Basic knowledge of caching in web API.</li>\r\n	<li>Good analytical and problem-solving skills.</li>\r\n</ul>', '5/7/2020', 1, 6, 1, '2020-07-07 10:01:56', '2020-07-07 10:03:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manage_applies`
--

CREATE TABLE `manage_applies` (
  `id_apply` bigint(20) UNSIGNED NOT NULL,
  `jobs_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manage_applies`
--

INSERT INTO `manage_applies` (`id_apply`, `jobs_id`, `status`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 5, '2020-07-07 08:14:26', '2020-07-07 08:14:26'),
(2, 1, 0, 5, '2020-07-07 08:15:02', '2020-07-07 08:15:02'),
(3, 1, 0, 5, '2020-07-07 08:16:36', '2020-07-07 08:16:36'),
(4, 7, 0, 1, '2020-07-08 08:36:12', '2020-07-08 08:36:12'),
(5, 13, 0, 1, '2020-07-10 08:51:03', '2020-07-10 08:51:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_06_27_131955_create_categories_table', 1),
(4, '2020_06_27_135450_create_students_table', 1),
(5, '2020_06_27_140836_create_company_users_table', 1),
(6, '2020_06_27_143605_create_jobs_table', 1),
(7, '2020_06_27_151351_create_manage_applies_table', 1),
(8, '2020_06_27_151552_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id_stu` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id_stu`, `email`, `password`, `name`, `phone`, `major`, `CV`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '517H0036@gmail.com', '$2y$10$B1YM307xLkEiUNprPXT/YOaTXx6etObd96plm5tmDeUX2pRTLVdr2', 'Duong Gia Bao', '0913205175', 'CNPM', '517H0090.pdf', NULL, NULL, '2020-07-10 05:45:58'),
(2, '517H0066@gmail.com', '$2y$10$xAFjA.z.u/SrpXgsaT2XhO0wRUteuPyjOXwS9gH2V2QYpYNmRZ9zu', 'Le Tuan Minh', '', 'Software Engineering', '', NULL, '2020-07-06 19:16:27', '2020-07-06 19:16:27'),
(3, '517H0055@gmail.com', '$2y$10$WsYaJkfTmwBubj96UukPeevoVAa2fp7EXeDPKI09X33T8lcWjq.pm', 'Nguyen Hoang Khai', '', 'Software Engineering', '', NULL, '2020-07-07 00:34:12', '2020-07-07 00:34:12'),
(4, '517H0045@gmail.com', '$2y$10$JxaLcU0iqwZNZ2KOQAjex.cy6YLf5hNZ8/ARTgyeF3Xu81ye3c5F.', 'Pham Tien Dat', '', 'Software Engineering', '', NULL, '2020-07-07 00:35:22', '2020-07-07 00:35:22'),
(5, 'ncthanh0411@gmail.com', '$2y$10$YooCkAiqzu4s5FFL59scFuPliwCrRD50PapMr6KAaou6jL.Fh9MSC', 'Nguyen Cong thanh', '', 'Software Engineering', '', NULL, '2020-07-07 00:52:12', '2020-07-07 00:52:12'),
(6, 'duongiabao69@gmail.com', '$2y$10$RRShf4xCY47BvOVF5Ay1.ewSnqM34MCYJQPPBnAuNq52cLKE80Hfq', 'Nguyen Gia Bao', '', 'Software Engineering', '', NULL, '2020-07-07 01:06:34', '2020-07-07 01:06:34'),
(7, 'lnktoan1011@gmail.com', '$2y$10$gXEQ/MIODyD5DelLZy8EiuC3mtkmBt4iSRZrdv2DbCAYzE4uD7iZG', 'Le Ngoc Khanh Toan', '', 'Software Engineering', '', NULL, '2020-07-07 01:09:19', '2020-07-07 01:09:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `company_users`
--
ALTER TABLE `company_users`
  ADD PRIMARY KEY (`id_com`),
  ADD UNIQUE KEY `company_users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id_job`),
  ADD KEY `jobs_company_id_foreign` (`company_id`),
  ADD KEY `jobs_categories_id_foreign` (`categories_id`);

--
-- Chỉ mục cho bảng `manage_applies`
--
ALTER TABLE `manage_applies`
  ADD PRIMARY KEY (`id_apply`),
  ADD KEY `manage_applies_jobs_id_foreign` (`jobs_id`),
  ADD KEY `manage_applies_student_id_foreign` (`student_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_stu`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cate` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `company_users`
--
ALTER TABLE `company_users`
  MODIFY `id_com` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id_job` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `manage_applies`
--
ALTER TABLE `manage_applies`
  MODIFY `id_apply` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id_stu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id_cate`),
  ADD CONSTRAINT `jobs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `company_users` (`id_com`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
