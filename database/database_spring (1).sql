-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 03:45 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_spring`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `highlite_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ceo_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title_name`, `highlite_name`, `next_title`, `about_details`, `bg_image`, `ceo_image`, `created_at`, `updated_at`) VALUES
(1, 'Summer', 'IOT', 'Technology Bangladesh', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'scholarship-1.jpg', 'testimonial-1.jpg', '2021-04-16 19:46:25', '2021-04-16 19:46:25'),
(2, 'Spring', 'IOT', 'Technology Bangladesh', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'blog-2-600x318.jpg', 'gallery-3-500x500.jpg', '2021-04-16 19:47:41', '2021-04-16 19:47:41'),
(3, 'Spring', 'Soft', 'Technology Bangladesh', 'fdfdghfh', 'gallery-8-500x500.jpg', 'teacher-1-300x343.jpg', '2021-04-17 18:12:48', '2021-04-17 18:12:48'),
(4, 'Springupdate', 'Softu', 'ITu', 'dfgfd to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '1620635939-blog-2-600x318.jpg', '1620631173-blog-3-600x318.jpg', '2021-04-18 03:33:13', '2021-05-10 08:38:59'),
(7, 'Leading', 'IT Consulting', 'Company', 'Spring Soft IT a high tech innovative IT consulting & software development power-house Founded in 2021 , the IT power house takes pride in assisting companies with their robust ERP system in Bangladesh and around the world. The company serves by the principle- ‘Customer, Commitment, Technology’ and positioned at the forefront of rendering high quality IT solutions to its clients\r\n\r\nOur service revoles around developing Software , Web Application , Mobile Application , ERP , IIOT , Digital Branding , UI UX ,IT Consultancy , Youth Career Development Training', '1621869667-1.jpg', '1621869654-home-about.png', '2021-05-11 04:44:53', '2021-05-24 15:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `admin_products`
--

CREATE TABLE `admin_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preview_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_products`
--

INSERT INTO `admin_products` (`id`, `product_name`, `short_description`, `description`, `regular_price`, `sale_price`, `stock_status`, `quantity`, `image`, `preview_link`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Pos', 'A laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad.', 'A laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad.A laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad.A laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad.A laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad.', '50000.00', '45000.00', 'instock', 19, '1623830208-2.jpg', 'https://pos.springsoftitproduct.com', 3, '2021-06-14 08:05:31', '2021-06-17 08:30:58'),
(2, 'Inventory', 'A laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad. ... Your line of work will dictate the laptop type you needA laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad. ... Your line of work will dictate the laptop type you needA laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad. ... Your line of work will dictate the laptop type you need', 'A laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad. ... Your line of work will dictate the laptop type you needA laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad. ... Your line of work will dictate the laptop type you needA laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad. ... Your line of work will dictate the laptop type you needA laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad. ... Your line of work will dictate the laptop type you needA laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad. ... Your line of work will dictate the laptop type you need', '50000.00', '55000.00', 'instock', 17, '1623844574-1.jpg', 'https://pos.springsoftitproduct.com', 3, '2021-06-14 08:07:44', '2021-06-17 08:33:14'),
(3, 'ERP Management software', 'ERP Base', 'ERP Base Managment software', '50000.00', '40000.00', 'instock', 10, '3.jpg', 'https://erp.springsoftitproduct.com/Admin_dashboard/login', 3, '2021-06-16 11:39:58', '2021-06-16 11:57:20'),
(4, 'Restaurants Management System Website & Android Apps', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '50000.00', '45000.00', 'instock', 10, 'food.png', 'http://food.springsoftitproduct.com/admin/auth/login', 3, '2021-06-16 12:16:01', '2021-06-16 12:16:01'),
(5, 'Ecommerce Business Solution Software Website & Apps', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum', '50000.00', '45000.00', 'instock', 15, 'eccom.png', 'https://ecommerce.springsoftitproduct.com/', 3, '2021-06-16 12:18:48', '2021-06-16 12:18:48'),
(6, 'courier business solution software website & apps', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham', '70000.00', '60000.00', 'instock', 20, 'Curerr.png', 'https://courier.springsoftitproduct.com/en', 3, '2021-06-16 12:21:37', '2021-06-16 12:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applylists`
--

CREATE TABLE `applylists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pev_job_role` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applylists`
--

INSERT INTO `applylists` (`id`, `name`, `email`, `gender`, `contact`, `pev_job_role`, `city`, `resume`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 'Shakib', 'sabakur12360@gmail.com', 'male', '01774307611', 'fvgbfh', 'rangpur', '1622617990-Resume-Of-SabakurRahman.pdf', 1, '2021-06-02 07:13:10', '2021-06-02 07:13:10'),
(2, 'Rakib', 'rahat12360@gmail.com', 'male', '01774307611', 'sdfdg', 'rangpur', '1622618052-Resume-Of-SabakurRahman.pdf', 6, '2021-06-02 07:14:12', '2021-06-02 07:14:12'),
(3, 'Reza', 'b@gmail.com', 'male', '01774307611', 'sadef', 'rangpur', '1622618307-Resume-Of-SabakurRahman.pdf', 7, '2021-06-02 07:18:27', '2021-06-02 07:18:27'),
(4, 'Rana', 'fa@gmail.com', 'male', '01774307611', 'asdsdf', 'rangpur', '1622627893-1693832048circular.pdf', 2, '2021-06-02 09:58:13', '2021-06-02 09:58:13'),
(5, 'Raha', 'sabakur12360@gmail.com', 'female', '01774307611', 'dfgerghrgh', 'rangpur', '1622629201-Resume-Of-PHPDeveloper.pdf', 6, '2021-06-02 10:20:01', '2021-06-02 10:20:01'),
(6, 'Shakib', 'sabakur12360@gmail.com', 'male', '01774307611', 'thj', 'rangpur', '1622629408-Resume-Of-PHPDeveloper.pdf', 6, '2021-06-02 10:23:28', '2021-06-02 10:23:28'),
(7, 'Shakib', 'sabakur12360@gmail.com', 'male', '01774307611', 'fghrtghy', 'rangpur', '1622629646-1693832048circular.pdf', 6, '2021-06-02 10:27:26', '2021-06-02 10:27:26'),
(8, 'Shakib', 'sabakur12360@gmail.com', 'male', '01774307611', 'wsqedwdr', 'rangpur', '1622630403-1693832048circular.pdf', 10, '2021-06-02 10:40:03', '2021-06-02 10:40:03'),
(9, 'Shakib', 'sabakur12360@gmail.com', 'male', '01774307611', 'eferfgtr', 'rangpur', '1622632581-1693832048circular.pdf', 11, '2021-06-02 11:16:21', '2021-06-02 11:16:21'),
(10, 'Shakib', 'sabakur123601@gmail.com', 'male', '01774307611', 'fghjhj', 'rangpur', '1622644465-Resume-Of-SabakurRahman.pdf', 7, '2021-06-02 14:34:25', '2021-06-02 14:34:25'),
(11, 'Shakib', 'sabakur.shakib@northsouth.edu', 'male', '01774307611', 'gdfgfd', 'rangpur', '1622648697-Resume-Of-SabakurRahman.pdf', 7, '2021-06-02 15:44:57', '2021-06-02 15:44:57'),
(12, 'Shakib Hassan', 'sabakur12399@gmail.com', 'male', '01774307611', 'ukjghky', 'rangpur', '1623320929-1693832048circular.pdf', 2, '2021-06-10 10:28:49', '2021-06-10 10:28:49'),
(13, 'Shakib Hassan', 'sabakur12360@gmail.com', 'male', '01774307611', 'fdgfdgb', 'rangpur', '1623920113-1693832048circular.pdf', 11, '2021-06-17 08:55:14', '2021-06-17 08:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `app_infos`
--

CREATE TABLE `app_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `app_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'photo.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `highlight_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_name`, `highlight_name`, `next_name`, `banner_details`, `bg_image`, `created_at`, `updated_at`) VALUES
(8, 'Sabakur', 'Rahman', 'Shakib', 'Spring Soft It', 'scholarship-2.jpg', '2021-04-17 18:14:48', '2021-04-17 18:14:48'),
(10, 'All', 'Soft', 'IT', 'dsgadhsgdhsadj', 'scholarship-1.jpg', '2021-04-18 06:20:07', '2021-05-08 08:25:14'),
(11, 'Spring', 'Soft', 'IT', 'This is a Web development firm', 'slider2.png', '2021-04-20 05:32:58', '2021-04-20 05:32:58'),
(12, 'Rakib1', 'Rahman', 'Updatee', 'Web Appication', '1621346319-blog-1-600x318.jpg', '2021-04-20 05:33:44', '2021-05-18 13:58:39'),
(16, 'Leading', 'IT Solutions', 'Company', 'Leveraging 2 years of expertise making', '1621487246-intro-1.png', '2021-05-18 11:22:45', '2021-05-20 05:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `blogcomments`
--

CREATE TABLE `blogcomments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcomments`
--

INSERT INTO `blogcomments` (`id`, `name`, `email`, `subject`, `comments`, `blog_name`, `created_at`, `updated_at`) VALUES
(1, 'Shakib', 'sabakur12360@gmail.com', 'App developments', 'sdfddfgvd', 'LARAVEL', '2021-05-30 15:17:03', '2021-05-30 15:17:03'),
(2, 'Rakib', 'sabakur@gmail.com', 'Saksas', 'sdfd', 'JavaScript', '2021-05-30 16:44:03', '2021-05-30 16:44:03'),
(3, 'Shakib', 'sabakur12360@gmail.com', 'App developments', 'gfghh', 'JavaScript', '2021-05-30 16:53:07', '2021-05-30 16:53:07'),
(4, 'Shakib', 'sabakur12360@gmail.com', 'App developments', 'fghtgyh', 'TIPS & TRICKS', '2021-05-30 16:54:23', '2021-05-30 16:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_author` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_discription`, `blog_details`, `blog_author`, `blog_type`, `blog_image`, `created_at`, `updated_at`) VALUES
(3, 'LARAVEL', 'jzjxcznjxcnzx', '<p><img style=\"width: 200px;\" data-filename=\"jquery_black-copy.png\" src=\"/frontend/images/blog/16193691070.png\"></p><p>sandasndsndd Update</p><p></p>', 'Sabakur', 'business', '1621428239-gallery-4-500x500.jpg', '2021-04-25 16:45:07', '2021-05-19 12:43:59'),
(5, 'Business', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?<p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\'><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<img style=\"width: 322.625px;\" data-filename=\"gallery-6-500x500.jpg\" src=\"/frontend/images/blog/16194075290.png\"></p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where can I get some?</h2><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\'>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p></h2>\n', 'sabakur', 'tips', 'blog-3-600x318.jpg', '2021-04-26 03:25:29', '2021-04-26 03:25:29'),
(6, 'JavaScript', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Why do we use it?<p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\'>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like.<img style=\"width: 322.625px;\" data-filename=\"gallery-7-500x500.jpg\" src=\"/frontend/images/blog/16194077560.png\"></p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\'>Aenean quis libero ullamcorper, mattis libero at, molestie eros. Nam ac ipsum eget lectus consectetur iaculis non quis eros. Vestibulum pellentesque nisi elit, id bibendum libero efficitur at. Sed sagittis eros eget porta facilisis. Curabitur lacus dolor, placerat sit amet arcu blandit, scelerisque placerat sapien. Nulla euismod molestie tortor. Aenean bibendum iaculis mattis. Etiam sit amet elementum sem. Integer nec dui a lorem auctor egestas. Aliquam rhoncus in turpis sit amet vehicula. Nulla sit amet porttitor libero. In hac habitasse platea dictumst. Quisque mattis pharetra sapien, vitae elementum mi faucibus vitae.<br></p></h2>\n', 'shakib', 'bank', 'blog-2-600x318.jpg', '2021-04-26 03:29:16', '2021-04-26 03:29:16'),
(10, 'TIPS & TRICKS', '5 Secrets To\r\nCoaching Your Employees\r\nTo Greatness', '<p>gjhhujk</p>', 'Mamun', 'bank', '1621488434-news-3.jpg', '2021-05-18 11:30:58', '2021-05-20 05:27:14'),
(11, 'BANK & FINANCE', 'Payment Online -\r\nThings That You Know To\r\nProject Your Money', '<p>dsd</p>', 'Rakib', 'bank', '1621488349-news-2.jpg', '2021-05-19 06:31:32', '2021-05-20 05:26:20'),
(12, 'Business', 'Problems About\r\nSocial Insurance For\r\nTruck Drivers', '<p>sadds</p>', 'Raha', 'other', '1621488205-news-1.jpg', '2021-05-20 04:30:41', '2021-05-20 05:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_res` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_req` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_req` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benifits` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `job_name`, `job_details`, `job_res`, `p_req`, `experience`, `e_req`, `s_range`, `benifits`, `job_type`, `created_at`, `updated_at`) VALUES
(1, 'MLaravel', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.Updated', '<p>fdgfgfgfg</p>', '<p>gdfgfdfg</p>', '2 years', 'B.sc', '100000', '<p>gfdgfdg</p>', 'marketing', '2021-05-31 10:47:17', '2021-06-03 04:22:15'),
(2, 'Hr', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia', 'fdhfdsfd', 'fedfdsgfgfghghfd', '1 years', 'bsc', '20000', 'dgdfghf', 'hr', '2021-05-31 10:49:35', '2021-05-31 10:49:35'),
(5, 'Software', 'laravel devloper needed', '', '', '', '', '', '', 'editor', '2021-06-01 06:07:45', '2021-06-01 06:07:45'),
(6, 'PHP', 'PHP devloper needed.urgent', '', '', '', '', '', '', 'development', '2021-06-01 11:48:52', '2021-06-01 11:49:19'),
(7, 'Laravel55', 'laravel devloper needed', '<p>sdrfdf</p>\n', '', '', '', '', '', 'development', '2021-06-01 14:20:00', '2021-06-01 14:20:00'),
(8, 'Software Engineering', 'Expert Engineer Needed', '<ul style=\'margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none; outline: none; list-style: none; color: rgb(68, 68, 68); font-family: \"Open Sans\", sans-serif;\'><li style=\"margin: 0px; padding: 0px; border: none; outline: none; list-style: none;\"><p style=\"margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em;\">Respond quickly and accurately to inquiries via Live Chat.</p></li><li style=\"margin: 0px; padding: 0px; border: none; outline: none; list-style: none;\"><p style=\"margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em;\">Identifying customer needs and helping customers.</p></li><li style=\"margin: 0px; padding: 0px; border: none; outline: none; list-style: none;\"><p style=\"margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em;\">Handle multiple chats at once</p></li><li style=\"margin: 0px; padding: 0px; border: none; outline: none; list-style: none;\"><p style=\"margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em;\">Recognize and prioritize tasks arriving in a dedicated queueUpdateShakib.</p></li></ul>\r\n', '', '', '', '', '', 'development', '2021-06-01 14:21:53', '2021-06-01 14:21:53'),
(9, 'Netwoking', 'laravel devloper needed', '<p>dshfcsdhfdfh<p>sjhdfjfnjdvn</p></p>\n', '<p>dsfjhdjgvfnvj<p>sdjcfdnvjf</p><p>dsfncvjfbn&nbsp;</p></p>\n', '1 years', 'B.sc', '100000', '<p>sdfchdbvf<p>sdfvfdnvnj</p><p>cfdnsvjfj</p><p>dncfvjj</p></p>\n', 'development', '2021-06-02 05:27:34', '2021-06-02 05:27:34'),
(10, 'Python', 'Python Devloper Needed', '<p>1)ghsdfgshfcdh<p>2)dfhfhbvhdf</p></p>\n', '<p>1)gdhsdghs<p>2)edfhdhf</p></p>\n', '2 years', 'B.sc', '100000', '<p>1)sdgfhsfcg<p>2)dhcdbv</p></p>\n', 'development', '2021-06-02 10:38:58', '2021-06-02 10:38:58'),
(11, 'Jr. Software Engineer', 'Jr. Software Engineer Need', '<p>1.fdgfdg<p>2gfhgfh</p></p>\n', '<p>1.fgfghg<p>2.vfggf</p></p>\n', '1 years', 'B.sc', '1000000', '<p>1.ghgj<p>2.gfhf</p></p>\n', 'development', '2021-06-17 08:42:52', '2021-06-17 08:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'photo.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'hadgxas', 1, '1.jpg', '2021-04-14 13:05:16', '2021-04-14 13:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `chooses`
--

CREATE TABLE `chooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_point1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_point2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_point3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details3` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chooses`
--

INSERT INTO `chooses` (`id`, `b_point1`, `details1`, `b_point2`, `details2`, `b_point3`, `details3`, `created_at`, `updated_at`) VALUES
(1, 'Why do we use it?', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing', 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of', '2021-04-19 09:37:46', '2021-04-19 09:37:46'),
(2, 'What is Lorem Ipsum?', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'Why do we use it?', 't is a long established fact that a reader will be distracted by the readable content of a page', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', '2021-04-19 09:40:47', '2021-04-19 09:40:47'),
(3, 'What is Lorem Ipsum?1', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'Why do we use it?', 't is a long established fact that a reader will be distracted by the readable content of a page', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', '2021-05-11 07:18:19', '2021-05-11 07:18:19'),
(4, 'What is Lorem Ipsum?', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been2', 'Why do we use it?', 't is a long established fact that a reader will be distracted by the readable content of a page', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', '2021-05-11 07:18:27', '2021-05-11 07:18:27'),
(5, 'What is Lorem Ipsum?', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'Why do we use it?', 't is a long established fact that a reader will be distracted by the readable content of a page', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', '2021-05-11 07:18:32', '2021-05-11 07:18:32'),
(6, 'What is Lorem Ipsum?', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'Why do we use it?', 't is a long established fact that a reader will be distracted by the readable content of a page', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', '2021-05-11 07:20:38', '2021-05-11 07:36:08'),
(7, 'oneStrong Martket Analysis', 'We always analysis what technology is now in trending\r\nwe are happy to implement innovative something', 'Experience & Percision', 'Our Experience is our backbone\'s strength\r\nOur Software Engineer always try to improve their skills', 'Experts About Business', 'We are dedicated to our loving clients\r\nand we provide 24/7 services them', '2021-05-11 07:39:55', '2021-05-20 05:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `consulations`
--

CREATE TABLE `consulations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consulations`
--

INSERT INTO `consulations` (`id`, `name`, `phone`, `topic`, `message`, `created_at`, `updated_at`) VALUES
(1, 'MD.SABAKUR RAHMAN SHAKIB', '1774307611', 'Mobile Application', 'sbzcbzxczx', '2021-04-18 13:40:37', '2021-04-18 13:40:37'),
(2, 'SABAKUR RAHMAN SHAKIB', '1774307411', 'Website Development', 'web devlpment ,', '2021-04-19 05:20:34', '2021-04-19 05:20:34'),
(3, 'Spring', '1774307611', 'Mobile Application', 'dfjdsfjd', '2021-04-19 08:05:08', '2021-04-19 08:05:08'),
(4, 'Sabakur Rahman', '1609587657', 'Youth Career Development', 'Youth Career', '2021-04-20 05:28:21', '2021-04-20 05:28:21'),
(5, 'Sabakur Rahman', '1773450', 'Cloud software', 'ertre', '2021-05-08 11:55:40', '2021-05-08 11:55:40'),
(6, 'Moni', '1774307611', 'Mobile Application', 'asdef', '2021-05-10 15:37:46', '2021-05-10 15:37:46'),
(7, 'MD.SABAKUR RAHMAN SHAKIB1', '1733049717', 'Cloud software', 'jfgj', '2021-05-19 06:42:17', '2021-05-19 06:42:17'),
(8, 'Shakib', '1733049717', 'Digital Branding', 'ghjgj', '2021-05-19 06:43:05', '2021-05-19 06:43:05'),
(9, 'Rahat', '1609587657', 'Mobile Application', 'fhddghg', '2021-05-19 13:10:48', '2021-05-19 13:10:48'),
(10, 'MD.SABAKUR RAHMAN SHAKIB', '1774307611', 'Mobile Application', 'fgvdgfdg', '2021-05-20 07:43:35', '2021-05-20 07:43:35'),
(11, 'Monir', '1733049717', 'Mobile Application', 'dfjkndjfgdjg', '2021-05-20 10:09:18', '2021-05-20 10:09:18'),
(12, 'Sabakur Rahman', '1733049717', 'Cloud software', 'hcfsdhc', '2021-05-20 14:14:31', '2021-05-20 14:14:31'),
(13, 'Md.Monir', '1733049717', 'Youth Career Development', 'egwehrf', '2021-05-23 04:47:10', '2021-05-23 04:47:10'),
(14, 'Sabakur Rahman', '1773450', 'Cloud software', 'fgfhg', '2021-05-27 10:46:14', '2021-05-27 10:46:14'),
(15, 'MD.SABAKUR RAHMAN SHAKIB', '1774307611', 'Mobile Application', 'fjkgffjghfjg', '2021-05-30 09:57:55', '2021-05-30 09:57:55'),
(16, 'Rahat', '17743076111', 'Mobile Application', 'jjnj', '2021-05-31 04:07:12', '2021-05-31 04:07:12'),
(17, 'MD.SABAKUR RAHMAN SHAKIB', '177430761112132132', 'Cloud software', 'dcsfsd', '2021-06-14 10:57:43', '2021-06-14 10:57:43'),
(18, 'MD.SABAKUR RAHMAN SHAKIB', '4534', 'Cloud software', 'dfdfgfd', '2021-06-14 10:58:00', '2021-06-14 10:58:00'),
(19, 'MD.SABAKUR RAHMAN SHAKIB', '17743076111', 'Cloud software', 'dfgfgf', '2021-06-16 10:19:54', '2021-06-16 10:19:54'),
(20, 'MD.SABAKUR RAHMAN SHAKIB', '1774307611', 'Cloud software', 'rtry', '2021-06-17 05:45:59', '2021-06-17 05:45:59'),
(21, 'MD.SABAKUR RAHMAN SHAKIB', '01774307611111111', 'Cloud software', 'sdsd', '2021-06-17 06:12:37', '2021-06-17 06:12:37'),
(22, 'MD.SABAKUR RAHMAN SHAKIB', '0177430761111', 'Cloud software', 'sdadsd', '2021-06-17 09:02:31', '2021-06-17 09:02:31'),
(23, 'MD.SABAKUR RAHMAN SHAKIB', '01774307611', 'Cloud software', 'cvb cvgb', '2021-06-17 09:03:03', '2021-06-17 09:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Shakib', 'sabakur12360@gmail.com', 'Saksas', 'xbs cnbcn', '2021-04-21 07:28:08', '2021-04-21 07:28:08'),
(2, 'Shakib', 'sabakur12360@gmail.com', 'Saksas', 'dscsfc', '2021-04-21 07:28:19', '2021-04-21 07:28:19'),
(3, 'Rakib', 'b@gmail.com', 'App developments', 'App developments in Laravel', '2021-04-22 03:59:21', '2021-04-22 03:59:21'),
(4, 'Shakib', 'sabakur12360@gmail.com', 'App developments', 'rfgergrgg', '2021-05-10 08:35:48', '2021-05-10 08:35:48'),
(5, 'New', 'b@gmail.com', 'web', 'dsddfewdf', '2021-05-10 08:37:23', '2021-05-10 08:37:23'),
(6, 'Shakib12212', 'fa@gmail.com', 'App developments', 'ewdsedfe', '2021-05-18 05:41:56', '2021-05-18 05:41:56'),
(7, 'new', 'rahat12360@gmail.com', 'App developments', 'sdadjsfdn', '2021-05-18 06:33:34', '2021-05-18 06:33:34'),
(8, 'Monir', 'fa@gmail.com', 'App developments', 'dfsfdfg', '2021-05-18 09:29:13', '2021-05-18 09:29:13'),
(9, 'Shakib', 'sabakur12360@gmail.com', 'App developments', 'sadasds', '2021-05-18 09:58:45', '2021-05-18 09:58:45'),
(10, 'Rakib', 'rahat12360@gmail.com', 'App developments', 'Rakib send mail', '2021-05-20 05:42:03', '2021-05-20 05:42:03'),
(11, 'Shakib', 'sabakur12360@gmail.com', 'App developments', 'wowow', '2021-05-20 07:04:06', '2021-05-20 07:04:06'),
(12, 'Shakib', 'rakib365007@gmail.com', 'web', 'wowowoow', '2021-05-20 07:06:06', '2021-05-20 07:06:06'),
(13, 'Rakib', 'rakib365007@gmail.com', 'App developments', 'wowowoowowwoowo', '2021-05-20 07:08:07', '2021-05-20 07:08:07'),
(14, 'Shakib', 'rakib365007@gmail.com', 'App developments', 'wowoowowowow', '2021-05-20 07:27:17', '2021-05-20 07:27:17'),
(15, 'Shakib', 'sabakur12360@gmail.com', 'Saksas', 'dfefge', '2021-05-20 07:37:21', '2021-05-20 07:37:21'),
(16, 'Shakib', 'b@gmail.com', 'App developments', 'dasds', '2021-05-20 07:38:22', '2021-05-20 07:38:22'),
(17, 'Shakib', 'sabakur12360@gmail.com', 'Saksas', 'sdfbsdnf', '2021-05-20 07:41:43', '2021-05-20 07:41:43'),
(18, 'Shakib', 'sabakur12360@gmail.com', 'App developments', 'sdsfdf', '2021-05-20 07:45:42', '2021-05-20 07:45:42'),
(19, 'Shakib', 'sabakur12360@gmail.com', 'App developments', 'sjfjsdfjd', '2021-05-20 10:11:07', '2021-05-20 10:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `learncontents_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `learncontents_id`, `course_content`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'css', 1, '2021-06-11 10:31:13', '2021-06-11 10:31:13'),
(2, 2, 'html 1', 1, '2021-06-11 10:31:13', '2021-06-12 00:05:37'),
(5, 4, 'css', 4, '2021-06-12 01:55:34', '2021-06-12 01:55:34'),
(6, 4, 'html 2', 4, '2021-06-12 01:55:34', '2021-06-12 01:55:44'),
(7, 5, 'css', 2, '2021-06-12 03:07:18', '2021-06-12 03:07:18'),
(8, 5, 'html', 2, '2021-06-12 03:07:18', '2021-06-12 03:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ofclass` int(11) NOT NULL,
  `course_done` int(11) NOT NULL DEFAULT 0,
  `total_hours` int(11) NOT NULL,
  `reg_deadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_learns` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_instructor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_type`, `course_details`, `course_duration`, `no_ofclass`, `course_done`, `total_hours`, `reg_deadline`, `class_schedule`, `why_learns`, `course_content`, `course_instructor`, `venue`, `course_price`, `course_image`, `created_at`, `updated_at`) VALUES
(1, 'Laravel - The PHP Framework', 'web', 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.', '18 Sept to 8 Oct', 33, 0, 200, '17 Sept', 'Sun 9 to 4', '<p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"> </span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">Simple and professional design                    </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-weight: 400;\">  User friendly                                               </span></span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">Original and unique content                         </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">Optimizing for mobile visitors                      </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-size: 20px;\">  Optimizing for different browsers               </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">Speed of the website                                      </span><br></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-weight: 400;\">  Clearing Calls to Action across the site      </span><br></span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-weight: 400;\"> Options to contact with the company</span></span></p><p><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\"><br></span></p>', '<div><h3 style=\"margin-right: 0px; margin-left: 0px; font-weight: 500; line-height: 1.1; font-size: 24px; padding: 70px 0px 25px; outline: 0px; font-family: nexa_regular; color: rgb(25, 48, 89);\">               <span class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\">  100+ Customized websites as per client\'s requirement.                                                      </span></span><span class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Web 2.0 & Web 3.0 based web designing.                                                                              </span></span><span class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Website design with cross browser compatibility.                                                    </span></span><span class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Designing websites with W3C Validation.    </span></span></h3></div><p><span class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Quality Controlling and Assuring for website.                                                             </span></span></p><p><span class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Professional, eye-catching and concept relevant websites.                                              </span></span></p><p><span class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Websites designing with User friendly operation and Simple navigation.                      </span></span></p><p><span class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> </span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\">On time delivery with competitive pricing.     </span></span></p><p><span class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> SEO Semantic and neat & clean coding structure.                                                                  </span></span></p><p><span class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> </span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\">Cross platform and resolution  compatibility.</span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span></span></p>', 'Sabakur Rahman', 'online', 6000, '1623913832-fastcomet-laravel-6.png', '2021-05-10 11:12:07', '2021-06-17 07:26:59'),
(3, 'JavaScript', 'cms', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor', '18 Sept to 8 Oct', 30, 3, 260, '6 May', 'Sun 9 to 2', '<p>1.hasdjadhfjksd</p><p>2.sdhsfbhd</p>', '<p>1.sghdfsf</p><p>2.shdcf</p>', 'sabakur', 'online', 8000, '1623914906-programmers-using-javascript-programming-language-computer-tiny-people-javascript-language-javascript-engine-js-web-development-concept_335657-2412.jpg', '2021-05-10 11:25:20', '2021-06-17 07:28:26'),
(4, 'Networking', 'web', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor', '18 Sept to 8 Oct', 40, 0, 200, '21 Mar', 'Sun 9 to 4', '<p>1)hgdshsfhd</p><p><font color=\"#9c00ff\">2)sdshdshcf</font></p>', '<p>adsad</p><p>sadsfdf</p><p>dfdf</p>', 'Sabakur Rahman', 'online', 10000, '1623915140-Networking3.jpg', '2021-05-10 11:26:14', '2021-06-17 07:32:20'),
(5, 'LARAVEL-PROJRCT', 'web', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor', '23 Mar - 24 jun', 30, 0, 200, '21 Mar', 'Sun 9 to 2', 'zxcxv', 'vcv', 'Sabakur Rahman', 'online', 10000, '1623915325-javascript-illustration.png', '2021-05-10 11:26:55', '2021-06-17 07:50:37'),
(10, 'React Js', 'app', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor', '23 Mar - 24 jun', 33, 0, 200, '21 Mar', 'Sun 9 to 1', '', '', '', 'online', 1500, '1623915456-the-benefits-of-reactjs-main.jpg', '2021-05-20 09:22:29', '2021-06-17 07:37:36'),
(13, 'PHP', 'app', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor', '18 Sept to 8 Oct', 33, 0, 44, '17 Sept', 'Sun 9 to 4', 'sahdgshf', 'fsdfdfg', 'Sabakur Rahman', 'online', 10000, '1623915544-thumb.jpg', '2021-05-30 04:46:09', '2021-06-17 07:39:04'),
(14, 'Web Design & Development', 'web', 'e your fate?', '18 Sept to 8 Oct', 40, 0, 400, '21 Mar', 'Sun 9 to 1', '<p><i class=\"fas fa-check\" style=\"font-size: 20px;\r\n    color: #ffb400;\r\n    padding-right: 10px;\"> </i><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">Simple and professional design                    </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-weight: 400;\">  User friendly                                               </span></span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">Original and unique content                         </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">Optimizing for mobile visitors                      </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-size: 20px;\">  Optimizing for different browsers               </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">Speed of the website                                      </span><br></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-weight: 400;\">  Clearing Calls to Action across the site      </span><br></span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-weight: 400;\"> Options to contact with the company</span></span></p><p><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\"><br></span></p>', '<p> </p><div><h3 style=\"margin-right: 0px; margin-left: 0px; padding: 70px 0px 25px; outline: 0px; font-family: nexa_regular; font-weight: 500; line-height: 1.1; color: rgb(25, 48, 89); font-size: 24px;\">               <i class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\">  100+ Customized websites as per client\'s requirement.                                                      </span></i><i class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Web 2.0 & Web 3.0 based web designing.                                                                              </span></i><i class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Website design with cross browser compatibility.                                                    </span></i><i class=\"fa fa-circle\" style=\"color: rgb(255, 180, 0); padding-right: 10px; font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Designing websites with W3C Validation.    </span></i></h3></div><p><i class=\"fa fa-circle\" style=\"color: #ffb400;\r\n    padding-right: 10px;font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Quality Controlling and Assuring for website.                                                             </span></i></p><p><i class=\"fa fa-circle\" style=\"color: #ffb400;\r\n    padding-right: 10px;font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Professional, eye-catching and concept relevant websites.                                              </span></i></p><p><i class=\"fa fa-circle\" style=\"color: #ffb400;\r\n    padding-right: 10px;font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> Websites designing with User friendly operation and Simple navigation.                      </span></i></p><p><i class=\"fa fa-circle\" style=\"color: #ffb400;\r\n    padding-right: 10px;font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> </span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\">On time delivery with competitive pricing.     </span></i></p><p><i class=\"fa fa-circle\" style=\"color: #ffb400;\r\n    padding-right: 10px;font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> SEO Semantic and neat & clean coding structure.                                                                  </span></i></p><p><i class=\"fa fa-circle\" style=\"color: #ffb400;\r\n    padding-right: 10px;font-size: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"> </span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\">Cross platform and resolution  compatibility.</span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic; font-weight: 400;\"><br></span><br></i></p>', 'Sabakur Rahman', 'online platform', 15000, '1623915647-Web-Design.png', '2021-06-12 16:29:27', '2021-06-17 07:40:47'),
(15, 'Software Development', 'web', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor', '18 Sept to 8 Oct', 33, 0, 399, '17 Sept', 'Sun 9 to 4', '<p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"> </span><span style=\"color: rgb(27, 27, 27); font-family: Roboto_Light; font-size: 15px;\">Providing fast ROI with efficient teamwork and utmost dedication.</span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">                   </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-weight: 400;\">  </span><span style=\"color: rgb(27, 27, 27); font-family: Roboto_Light; font-size: 15px; font-weight: 400;\">Support to make decision by offering efficient consultancy</span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-weight: 400;\">                                               </span></span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(27, 27, 27); font-family: Roboto_Light; font-size: 15px;\">Excellent Service with best product Quality.</span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">                       </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(27, 27, 27); font-family: Roboto_Light; font-size: 15px;\">Making sure remarkable value with investment for developing.</span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">                     </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-size: 20px;\"> </span><span style=\"color: rgb(27, 27, 27); font-family: Roboto_Light; font-size: 15px;\">Contained with quick and consistent development progress.</span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-size: 20px;\">              </span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"></span><span style=\"color: rgb(27, 27, 27); font-family: Roboto_Light; font-size: 15px;\">Experienced with developing and well settled broad range of software solutions.</span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-size: 20px; font-style: italic;\">                                     </span><br></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-weight: 400;\">  </span><span style=\"color: rgb(27, 27, 27); font-family: Roboto_Light; font-size: 15px; font-weight: 400;\">Efficient developing operations and its perfect execution.</span><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-weight: 400;\">e      </span><br></span></p><p><span class=\"fas fa-check\" style=\"font-size: 20px; color: rgb(255, 180, 0); padding-right: 10px;\"><span style=\"color: rgb(25, 48, 89); font-family: Roboto_Light; font-style: italic; font-weight: 400;\"> </span></span><span style=\"color: rgb(27, 27, 27); font-family: Roboto_Light; font-size: 15px;\">Available good variety of operating systems with development tools and technologies</span></p>', '<p><span class=\"fas fa-check\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-weight:=\"\" 400;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;Contrary to popular belief, Lorem Ipsum is not simply random text.</span><br></span></p><p><span class=\"fas fa-check\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-weight:=\"\" 400;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;It has roots in a piece of classical Latin literature from 45 BC</span><br></span></p><p><span class=\"fas fa-check\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-weight:=\"\" 400;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;The standard chunk of Lorem Ipsum used since the 1500s</span></span></p><p><span class=\"fas fa-check\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-weight:=\"\" 400;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;</span></span><span style=\"font-family: &quot;Font Awesome 5 Pro&quot;; font-weight: 900; font-size: 0.875rem;\">The standard chunk of Lorem Ipsum used since the 1500s</span></p><div><span style=\"font-family: &quot;Font Awesome 5 Pro&quot;; font-weight: 900; font-size: 0.875rem;\"><br></span></div><p></p>', 'Sabakur Rahman', 'online', 12000, '1623916121-22-220591_custom-software-development-custom-software-application-development.png', '2021-06-13 03:49:46', '2021-06-17 07:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `ctas`
--

CREATE TABLE `ctas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bold_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ctas`
--

INSERT INTO `ctas` (`id`, `title`, `bold_title`, `phone`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Springupdate123', 'Soft ITupdate', 1609587657, 'sxbdsdsjdsdscksdsddsdf', '2021-04-17 15:05:01', '2021-05-19 07:03:31'),
(2, 'Book an appoitment quickly?', 'Call us now!', 1774307411, 'We prodive a dedicated support 24/7 for any your question', '2021-05-19 07:08:20', '2021-06-07 05:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_confirmation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `f_name`, `l_name`, `phone`, `email`, `password`, `password_confirmation`, `created_at`, `updated_at`) VALUES
(1, 'Shakib', 'Hassan', '01774307699', 'sabakur1250@gmail.com', '$2y$10$oqeFAY900a.PxJwO8egFSupjh/V8Ds.UIYbOls1bHq33sf1aJ4Mt2', '$2y$10$tA7SO3zsbi2PK6o3IVFiquHZlQcb.JpFf4dv53QhEn/AYB40atRRW', '2021-06-14 10:46:33', '2021-06-14 10:46:33'),
(2, 'Shakib', 'Hassan', '01774307787', 'sabakur1@gmail.com', '$2y$10$BOrV8DcJu7dqpcs6rqjPRejcfBYdewZbjUXJU4CB.8YroIfse8Miu', '$2y$10$ZnOFC28wsQVGcXAS9LY3m./cwFv.PI0K8kHrYjyV4cHKlW.Ykp8Na', '2021-06-14 12:05:40', '2021-06-14 12:05:40'),
(3, 'Test', 'Test', '01846921763', 'admin@gmail.com', '$2y$10$qeHQ9.oewKChbQW288hYRuTEcO1o2hvezgUiZFdRqgVJbvfuiy8jO', '$2y$10$PAuHl9QmPZZuZt3qMDtct.q2l32ASNWjQMhRMQUgaet6IFpxgqOWO', '2021-06-16 06:26:21', '2021-06-16 06:26:21'),
(4, 'Rahat', 'Alom', '01774307618', 'rahat365@gmail.com', '$2y$10$f7C.XsyicHcs3Cj.IdzBs.bkwoDHbZuGiRLpBzCpJjkuQdzskxl6m', '$2y$10$IwBtBjBHv03TkyXJ2uFYK.GFFnFKgeZbgvJEJLjLFLNe1Ruui9Ble', '2021-06-17 07:56:39', '2021-06-17 07:56:39'),
(5, 'Emran', 'Hossan', '01897458965', 'ehossen825@gmail.com', '$2y$10$ZUH5cGLQEIb1WDNYF0p0wOyDrg686ngAJO/EbDZURNnEAC5kZf7Ca', '$2y$10$1cMV2NP8kI3tfL2B.SAd5O1JQIT6B7YmPXYfPSOn5KvQFoQvyWMuu', '2021-06-20 01:27:04', '2021-06-20 01:27:04'),
(6, 'Test', 'Test', '01789654789', 'ehossen@gmail.com', '$2y$10$7SA9oVnjRtywg0fFORhoReMOpaivYK65DfAQ8rRCrqFYE8UVpQLku', '$2y$10$rH1EI37CHK5GKhUQt3Z4hOY6M2JO4VsOLfFK91YSxLU4YTFieediO', '2021-06-20 01:28:29', '2021-06-20 01:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_no` int(11) NOT NULL,
  `floor_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uk_road` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uk_phone` bigint(20) NOT NULL,
  `working_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `thana`, `district`, `house_no`, `floor_no`, `road_no`, `sector`, `uk_road`, `uk_phone`, `working_hours`, `created_at`, `updated_at`) VALUES
(2, 'Uttora', 'Dhaka', 23, '1st', '3/B', '9', '257 UXBRIDGE ROAD', 7904723257, 'Sun - Sat: 10.00 - 18.00, Friday closed', '2021-05-24 06:24:13', '2021-06-17 07:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolls`
--

INSERT INTO `enrolls` (`id`, `name`, `email`, `phone`, `gender`, `address`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Shakib', 'sabakur12360@gmail.com', 1774307611, 'male', 'rangpur', 1, '2021-05-11 09:08:21', '2021-05-11 09:08:21'),
(2, 'MD.SABAKUR RAHMAN SHAKIB', 'sabakur12360@gmail.com', 1774307411, 'male', 'Modonpur', 2, '2021-05-11 09:09:20', '2021-05-11 09:09:20'),
(3, 'Sabakur Rahman', 'fa@gmail.com', 1774307611, 'male', 'dhjhdfjsd', 7, '2021-05-11 09:34:31', '2021-05-11 09:34:31'),
(4, 'Rahat', 'rahat12360@gmail.com', 1774307611, 'male', 'rangpur', 3, '2021-05-17 03:50:38', '2021-05-17 03:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_features_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_features` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `product_features_id`, `product_features`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Product feature 2', 1, '2021-06-14 08:11:12', '2021-06-14 08:11:12'),
(2, 1, 'Product feature 3', 1, '2021-06-14 08:11:12', '2021-06-14 08:11:12'),
(3, 1, 'Product feature 4', 1, '2021-06-14 08:11:12', '2021-06-14 08:11:12'),
(4, 1, 'Product feature 5', 1, '2021-06-14 08:11:12', '2021-06-14 08:11:12'),
(5, 1, 'Product feature 1', 1, '2021-06-14 08:11:12', '2021-06-14 08:11:12'),
(6, 2, 'This is Good Product 3', 2, '2021-06-14 08:11:42', '2021-06-14 08:11:42'),
(7, 2, 'This is Good Product 2', 2, '2021-06-14 08:11:42', '2021-06-14 08:11:42'),
(8, 2, 'Product feature 4', 2, '2021-06-14 08:11:42', '2021-06-14 08:11:42'),
(9, 2, 'This is Good Product', 2, '2021-06-14 08:11:43', '2021-06-14 08:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link4` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link5` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `title`, `link1`, `link2`, `link3`, `link4`, `link5`, `created_at`, `updated_at`) VALUES
(4, 'PHP', 'abot', 'zxcxc', 'xsdsab', 'czxcx', 'sdfsd', '2021-04-20 15:11:45', '2021-04-20 15:11:45'),
(5, 'Spring', 'abot', 'zxcxc', 'xzczxc', 'czxcx', 'sdbhsjf', '2021-04-20 20:24:50', '2021-04-20 20:24:50'),
(6, 'Update', 'abot', 'zxcxc', 'sdsf', 'czxcx', 'sdbhsjf', '2021-04-21 05:45:36', '2021-04-21 05:45:36'),
(7, 'Quick Links', 'FAQS', 'Support', 'Sitemap', 'czxcx', 'sczxcx', '2021-05-11 06:20:36', '2021-05-20 05:30:49'),
(8, 'Company', 'About Us', 'Team', 'Careers', 'Investors', 'Contact Us', '2021-05-11 06:38:36', '2021-05-20 05:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_type`, `gallery_image`, `created_at`, `updated_at`) VALUES
(1, 'events', '1621934902-1.jpg', '2021-05-25 07:56:50', '2021-05-25 09:28:22'),
(2, 'seminar', '1621937735-2.jpg', '2021-05-25 10:15:35', '2021-05-25 10:15:35'),
(3, 'seminar', '1621937747-4.jpg', '2021-05-25 10:15:47', '2021-05-25 10:15:47'),
(4, 'seminar3', '1621941322-1 (2).jpg', '2021-05-25 10:16:06', '2021-05-25 11:15:22'),
(5, 'seminar2', '1621941388-1 (1).jpg', '2021-05-25 10:16:15', '2021-05-25 11:16:28'),
(6, 'seminar', '1621939512-project-3.jpg', '2021-05-25 10:45:12', '2021-05-25 10:45:12'),
(7, 'seminar1', '1621939635-project-4.jpg', '2021-05-25 10:47:15', '2021-05-25 10:47:15'),
(8, 'seminar1', '1621940118-1.jpg', '2021-05-25 10:55:18', '2021-05-25 10:55:18'),
(9, 'award1', '1621941729-img (73).jpg', '2021-05-25 11:22:09', '2021-05-25 11:22:09'),
(10, 'award2', '1621941790-mountain1.jpg', '2021-05-25 11:23:10', '2021-05-25 11:23:10'),
(11, 'award3', '1621941831-mountain2.jpg', '2021-05-25 11:23:51', '2021-05-25 11:23:51'),
(12, 'award4', '1621941881-img (73) (1).jpg', '2021-05-25 11:24:41', '2021-05-25 11:24:41'),
(13, 'award5', '1621942013-img (18).jpg', '2021-05-25 11:26:53', '2021-05-25 11:26:53'),
(14, 'award6', '1621942839-mountain3.jpg', '2021-05-25 11:31:09', '2021-05-25 11:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `get_user_information`
--

CREATE TABLE `get_user_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `give_answers`
--

CREATE TABLE `give_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `give_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `email`, `phone`, `open_time`, `f_link`, `i_link`, `t_link`, `u_link`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'sabakur12360@gmail.com', '1774307611', '9 to 10', 'www.fb', 'www.ins', 'www.tw', 'www.you', '', '2021-04-15 16:51:25', '2021-04-15 16:51:25'),
(2, 'sabakur.shakib@northsouth.edu', '1774307411', 'Sun - Sat: 9.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-04-15 16:52:46', '2021-04-15 16:52:46'),
(3, 'update12360@gmail.com', '1774307411', 'Sun - Sat: 11.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-04-17 18:05:54', '2021-04-17 18:05:54'),
(4, 'rahat12360@gmail.com', '1774307611', 'Sun - Sat: 12.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-04-18 05:51:48', '2021-04-18 05:51:48'),
(5, 'sabakur12360@gmail.com', '1774307611', 'Sun - Sat: 12.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-04-18 06:00:35', '2021-04-18 06:00:35'),
(6, 'b@gmail.com', '1774307611', 'Sun - Sat: 1.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-04-18 06:17:25', '2021-04-18 06:17:25'),
(7, 'sabakur.shakib@northsouth.edu', '1774307611', 'Sun - Sat: 12.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-04-21 05:21:32', '2021-04-21 05:21:32'),
(8, 'sabakur.shakib@northsouth.edu', '1774307611', 'Sun - Sat: 12.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-04-21 05:21:33', '2021-04-21 05:21:33'),
(9, 'sabakur.shakib@northsouth.gov', '1774307611', 'Sun - Sat: 12.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-05-08 09:06:00', '2021-05-08 09:06:00'),
(10, 'sabakur.shakib@northsouth.edu', '1774307611', 'Sun - Sat: 12.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-05-08 09:06:16', '2021-05-08 09:06:16'),
(11, 'b@gmail.com', '1774307611', '9 to 10', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-05-11 04:29:32', '2021-05-11 04:29:32'),
(12, 'sabakur12360@gmail.com', '1774307611', 'Sun - Sat: 9.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-05-11 04:30:00', '2021-05-11 04:30:00'),
(13, 'sabakur12360@gmail.com', '1774307611', 'Sun - Sat: 9.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-05-17 12:54:39', '2021-05-17 12:54:39'),
(14, 'sabakur12360@gmail.com1', '1774307611', 'Sun - Sat: 9.00 - 18.00, Always Open', 'www.facebook.com', 'www.ins', 'www.twitter.com', 'www.youtube.com', '', '2021-05-18 06:51:08', '2021-05-18 06:51:08'),
(15, 'info@springsoftit.com', '01323-723223', 'Sun - Sat: 9.00 - 18.00, Always Open', 'https://web.facebook.com/springsoftit?_rdc=1&_rdr', 'https://www.instagram.com/springsoftit/', 'https://twitter.com/SpringSoftIT2', 'https://www.youtube.com/channel/UCt0giS-zfYXfHPRSXUKMpRA', 'Spring Soft IT', '2021-05-18 07:04:35', '2021-06-17 06:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `key_features`
--

CREATE TABLE `key_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_keys_id` bigint(20) UNSIGNED DEFAULT NULL,
  `key_features` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `key_features`
--

INSERT INTO `key_features` (`id`, `product_keys_id`, `key_features`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Key Feature 1', 1, '2021-06-14 08:13:16', '2021-06-14 08:13:16'),
(2, 1, 'Key Feature 3', 1, '2021-06-14 08:13:16', '2021-06-14 08:13:16'),
(3, 1, 'Key Feature 5', 1, '2021-06-14 08:13:16', '2021-06-14 08:13:16'),
(4, 1, 'Key Feature 2', 1, '2021-06-14 08:13:16', '2021-06-14 08:13:16'),
(5, 2, 'Key Feature 2', 2, '2021-06-14 08:13:46', '2021-06-14 08:13:46'),
(6, 2, 'Key Feature 54', 2, '2021-06-14 08:13:46', '2021-06-14 08:13:46'),
(7, 2, 'Key Feature 54', 2, '2021-06-14 08:13:46', '2021-06-14 08:13:46'),
(8, 2, 'Key Feature 2', 2, '2021-06-14 08:13:46', '2021-06-14 08:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `learncontents`
--

CREATE TABLE `learncontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learncontents`
--

INSERT INTO `learncontents` (`id`, `course_id`, `created_at`, `updated_at`) VALUES
(2, 1, '2021-06-11 10:31:13', '2021-06-11 10:31:13'),
(4, 4, '2021-06-12 01:55:34', '2021-06-12 01:55:34'),
(5, 2, '2021-06-12 03:07:17', '2021-06-12 03:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `learns`
--

CREATE TABLE `learns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learns`
--

INSERT INTO `learns` (`id`, `course_id`, `created_at`, `updated_at`) VALUES
(8, 12, '2021-06-11 23:40:59', '2021-06-11 23:40:59'),
(11, 2, '2021-06-12 03:02:40', '2021-06-12 03:02:40'),
(12, 3, '2021-06-12 03:48:23', '2021-06-12 03:48:23'),
(13, 1, '2021-06-13 05:25:20', '2021-06-13 05:25:20'),
(14, 13, '2021-06-13 05:27:23', '2021-06-13 05:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `m_name`, `m_link`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.346164283071!2d90.39741431429954!3d23.877340689833552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5c2bd27484f%3A0x5630d98beae118ad!2sSpring%20Soft%20IT!5e0!3m2!1sen!2sbd!4v1614124988397!5m2!1sen!2sbd', '2021-05-19 06:18:26', '2021-05-19 06:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 2),
(12, '2014_10_12_100000_create_password_resets_table', 2),
(13, '2019_08_19_000000_create_failed_jobs_table', 2),
(14, '2020_12_03_110656_create_questions_table', 2),
(15, '2020_12_06_102828_create_answers_table', 2),
(16, '2020_12_07_091045_create_give_answers_table', 2),
(17, '2020_12_09_131051_create_categories_table', 2),
(18, '2020_12_09_164403_create_app_infos_table', 2),
(19, '2020_12_09_170055_create_get_user_information_table', 2),
(23, '2021_04_14_105341_create_headers_table', 5),
(25, '2021_04_16_222140_create_banners_table', 7),
(27, '2021_04_17_012214_create_abouts_table', 8),
(28, '2021_04_17_194028_create_ctas_table', 9),
(29, '2021_04_17_215132_create_videos_table', 10),
(31, '2021_04_18_132629_create_testimonials_table', 12),
(32, '2021_04_18_145346_create_sponsors_table', 13),
(33, '2021_04_18_192153_create_consulations_table', 14),
(37, '2021_04_19_115204_create_chooses_table', 18),
(38, '2021_04_19_222321_create_footers_table', 19),
(41, '2021_04_21_131737_create_contacts_table', 21),
(44, '2021_04_18_225452_create_blogs_table', 22),
(53, '2021_04_14_144740_create_services_table', 25),
(54, '2021_04_18_102352_create_projects_table', 26),
(55, '2021_05_05_122859_create_blogcomments_table', 27),
(56, '2021_04_27_103128_create_courses_table', 28),
(57, '2021_04_15_105213_create_navbars_table', 29),
(58, '2021_04_29_124118_create_enrolls_table', 30),
(61, '2021_05_19_120052_create_maps_table', 31),
(62, '2021_05_18_134407_create_payments_table', 32),
(63, '2021_05_19_095306_create_tests_table', 32),
(64, '2021_05_19_095731_create_orders_table', 32),
(65, '2021_05_23_114931_create_teams_table', 33),
(66, '2021_05_23_152401_create_subcribes_table', 34),
(67, '2021_05_24_115522_create_details_table', 35),
(68, '2021_05_24_173309_create_teamdetails_table', 36),
(69, '2021_05_25_133550_create_galleries_table', 37),
(74, '2021_05_31_155924_create_careers_table', 39),
(75, '2021_06_02_113954_create_applylists_table', 40),
(76, '2021_06_03_122414_create_students_table', 41),
(77, '2021_05_29_122043_create_product_categories_table', 42),
(99, '2021_05_27_154010_create_learns_table', 44),
(100, '2021_05_27_154019_create_whylearns_table', 44),
(101, '2021_05_27_154100_create_learncontents_table', 44),
(102, '2021_05_27_154102_create_contents_table', 44),
(114, '2021_05_30_062450_create_admin_products_table', 45),
(115, '2021_06_02_081800_create_customers_table', 45),
(116, '2021_06_02_081900_create_shippings_table', 45),
(117, '2021_06_02_171746_create_order_tables_table', 45),
(118, '2021_06_02_171747_create_productorders_table', 45),
(119, '2021_06_02_213339_create_order_payments_table', 45),
(120, '2021_06_13_220614_create_product_features_table', 45),
(121, '2021_06_13_220700_create_features_table', 45),
(122, '2021_06_14_064633_create_product_keys_table', 45),
(123, '2021_06_14_064720_create_key_features_table', 45),
(124, '2021_06_14_092001_create_preview_products_table', 45);

-- --------------------------------------------------------

--
-- Table structure for table `navbars`
--

CREATE TABLE `navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nav_one` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav_two` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav_three` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav_four` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav_five` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav_six` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav_seven` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav_eight` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navbars`
--

INSERT INTO `navbars` (`id`, `nav_one`, `nav_two`, `nav_three`, `nav_four`, `nav_five`, `nav_six`, `nav_seven`, `nav_eight`, `logo`, `created_at`, `updated_at`) VALUES
(4, 'Home', 'About', 'Service', 'Project', 'Blog', 'Contact', 'Course', 'gallery', '1621488506-logo.png', '2021-05-10 16:20:45', '2021-05-20 05:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `course_id`, `student_id`, `city`, `currency`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Pending', '60a76b9e82d27', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(2, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Pending', '60a76bf74adf5', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(3, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Pending', '60a76c6dd2c58', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(4, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Pending', '60a76df0135ab', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(5, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Pending', '60a76edacb55f', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(6, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Pending', '60a7715290e6b', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(7, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Pending', '60a7733a7412a', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(8, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Pending', '60a773e094828', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(9, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Pending', '60a774709c6b5', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(10, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Pending', '60a7748b7240f', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(11, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Pending', '60a7752593a80', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(12, 'Sabakur Rahman', 'you@example.com', '01774307611', 8000, '93 B, New Eskaton Road', 'Pending', '60a779373eb53', 'JavaScript', 0, 'Dhaka', 'BDT', NULL, NULL),
(13, 'John Doe', 'you@example.com', '01774307611', 15000, '93 B, New Eskaton Road', 'Pending', '60a77e1e28f60', 'React Js', 0, 'Dhaka', 'BDT', NULL, NULL),
(14, 'John Doe', 'you@example.com', '01774307611', 8000, '93 B, New Eskaton Road', 'Processing', '60a780a60e93a', 'JavaScript', 0, 'Dhaka', 'BDT', NULL, NULL),
(15, 'John Doe', 'you@example.com', '01774307611', 8000, '93 B, New Eskaton Road', 'Processing', '60a9d4444f562', 'PHP', 0, 'Dhaka', 'BDT', NULL, NULL),
(16, 'John Doe', 'you@example.com', '01774307611', 8000, '93 B, New Eskaton Road', 'Processing', '60a9ddb2b65fe', 'PHP', 0, 'Dhaka', 'BDT', NULL, NULL),
(17, 'John Doe', 'you@example.com', '01774307611', 8000, '93 B, New Eskaton Road', 'Pending', '60afc73c9b73a', 'shakib', 0, 'Dhaka', 'BDT', NULL, NULL),
(18, 'John Doe', 'you@example.com', '01774307611', 8000, '93 B, New Eskaton Road', 'Processing', '60afc7d33de37', 'shakib', 0, 'Dhaka', 'BDT', NULL, NULL),
(19, 'John Doe', 'you@example.com', '01774307611', 10000, '93 B, New Eskaton Road', 'Processing', '60b316a10fe23', 'New', 0, 'Dhaka', 'BDT', NULL, NULL),
(20, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Processing', '60b31b0f7f000', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(21, 'Sabakur Rahman', 'you@example.com', '01774307611', 8000, '93 B, New Eskaton Road', 'Processing', '60b34c89458ab', 'JavaScript', 0, 'Dhaka', 'BDT', NULL, NULL),
(22, 'John Doe', 'you@example.com', '01774307611', 6000, '93 B, New Eskaton Road', 'Processing', '60b361fcd3d00', 'Lravel1', 0, 'Dhaka', 'BDT', NULL, NULL),
(23, 'John Doe', 'you@example.com', '01774307611', 10000, '93 B, New Eskaton Road', 'Pending', '60b386747f8e2', 'New', 0, 'Dhaka', 'BDT', NULL, NULL),
(24, 'Rakib Hassan', 'you@example.com', '01774307611', 10000, '93 B, New Eskaton Road', 'Processing', '60b3869e708d2', 'New', 0, 'Dhaka', 'BDT', NULL, NULL),
(25, 'Mufty', 'you@example.com', '01774307611', 8000, '93 B, New Eskaton Road', 'Processing', '60b386e391366', 'shakib', 0, 'Dhaka', 'BDT', NULL, NULL),
(26, 'Sabakur Rahman', 'sabakur12360@gmail.com', '01774307611', 10000, 'rangpur', 'Processing', '60c1e4a7bf87a', '5', 2, 'Dhaka', 'BDT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_payments`
--

CREATE TABLE `order_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_payments`
--

INSERT INTO `order_payments` (`id`, `order_id`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Card', '2021-06-14 12:06:54', '2021-06-14 12:06:54'),
(2, 2, 'Card', '2021-06-16 08:01:55', '2021-06-16 08:01:55'),
(3, 3, 'Card', '2021-06-16 08:08:48', '2021-06-16 08:08:48'),
(4, 4, 'card', '2021-06-17 08:30:58', '2021-06-17 08:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `order_tables`
--

CREATE TABLE `order_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `shipping_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_total` decimal(8,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_tables`
--

INSERT INTO `order_tables` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '66550.00', 'Pending', '2021-06-14 12:06:54', '2021-06-14 12:06:54'),
(2, 3, 2, '0.00', 'Pending', '2021-06-16 08:01:55', '2021-06-16 08:01:55'),
(3, 3, 3, '66550.00', 'Pending', '2021-06-16 08:08:48', '2021-06-16 08:08:48'),
(4, 4, 5, '54450.00', 'Pending', '2021-06-17 08:30:58', '2021-06-17 08:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `trxID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preview_products`
--

CREATE TABLE `preview_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `preview_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productorders`
--

CREATE TABLE `productorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` bigint(20) DEFAULT NULL,
  `product_quentity` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productorders`
--

INSERT INTO `productorders` (`id`, `order_id`, `customer_id`, `product_id`, `product_name`, `product_price`, `product_quentity`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 'Laptop', 55000, 1, '2021-06-14 12:06:55', '2021-06-14 12:06:55'),
(2, 2, 3, 2, 'Inventory', 55000, 1, '2021-06-16 08:01:55', '2021-06-16 08:01:55'),
(3, 3, 3, 2, 'Inventory', 55000, 1, '2021-06-16 08:08:48', '2021-06-16 08:08:48'),
(4, 4, 4, 1, 'Pos', 45000, 1, '2021-06-17 08:30:58', '2021-06-17 08:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'phone', 'phone', '1', '2021-06-06 11:28:22', '2021-06-12 01:57:14'),
(2, 'erp', 'erp', '1', '2021-06-16 11:43:31', '2021-06-16 11:43:31'),
(3, 'ERP Base', 'erp-base', '1', '2021-06-16 11:44:05', '2021-06-16 11:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_features`
--

INSERT INTO `product_features` (`id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-06-14 08:11:12', '2021-06-14 08:11:12'),
(2, 2, '2021-06-14 08:11:42', '2021-06-14 08:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `product_keys`
--

CREATE TABLE `product_keys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_keys`
--

INSERT INTO `product_keys` (`id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-06-14 08:13:15', '2021-06-14 08:13:15'),
(2, 2, '2021-06-14 08:13:45', '2021-06-14 08:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_awards` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `client_name`, `project_type`, `project_awards`, `demo_link`, `project_details`, `project_image`, `created_at`, `updated_at`) VALUES
(3, 'ATOMATED CAR1', 'Rahat', 'card', '2018 Card Awards 2018', 'https://ecommerce.springsoftitproduct.com', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><img src=\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/hAypodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3RTQ1QTc2QkE1OEYxMUU3QUIxNkFBRkYyNEUxMzJCQiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3RTQ1QTc2Q0E1OEYxMUU3QUIxNkFBRkYyNEUxMzJCQiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjdFNDVBNzY5QTU4RjExRTdBQjE2QUFGRjI0RTEzMkJCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjdFNDVBNzZBQTU4RjExRTdBQjE2QUFGRjI0RTEzMkJCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/9sAQwAGBAQFBAQGBQUFBgYGBwkOCQkICAkSDQ0KDhUSFhYVEhQUFxoh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\" style=\"width: 469.5px;\" data-filename=\"gallery-8-500x500.jpg\"><br></p>', '1622613199-gallery-6-500x500.jpg', '2021-05-02 08:32:29', '2021-06-02 05:53:19'),
(6, 'New check', 'Sabakur12', 'web', '2017 Digital World Awards 201712', 'https://ecommerce.springsoftitproduct.com', '<p>hwgedwhgdwer</p>', '1621486431-gallery-5-500x500.jpg', '2021-05-11 09:32:41', '2021-05-20 04:53:51'),
(9, 'spring', 'Rahat', 'app', '2015 Digital World Awards 2016 Finale Awards', 'https://ecommerce.springsoftitproduct.com', '<p>dfgr</p>', '1621488020-3.jpg', '2021-05-19 06:30:21', '2021-05-20 05:20:20'),
(10, 'React Js', 'Mamun', 'web', '2018 Card Awards 2018', 'https://ecommerce.springsoftitproduct.com', '<p>asdwadsdfdg</p>\n', '1621488006-2.jpg', '2021-05-20 04:56:58', '2021-05-20 05:20:06'),
(11, 'JavaScript', 'Tanmin', 'app', '2018 Card Awards 2018', 'https://web.facebook.com/', '<p>sadsdsf</p>', '1621487992-1.jpg', '2021-05-20 04:58:16', '2021-05-27 16:43:27'),
(12, 'Hospital', 'Sabakur12', 'web', '2015 Digital World Awards 2016 Finale Awards', 'https://www.springsoftit.com', '<p>dhsjdfhs</p>\n', '2.jpg', '2021-05-20 05:35:39', '2021-05-20 05:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_topic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_class` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_topic`, `service_details`, `service_class`, `service_image`, `created_at`, `updated_at`) VALUES
(4, 'Service1', 'service Check', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'check', '1621349642-blog-2-600x318.jpg', '2021-05-02 06:01:54', '2021-05-18 14:54:02'),
(5, 'Car', 'Car service', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'car', 'blog-3-600x318.jpg', '2021-05-02 06:16:57', '2021-05-02 06:16:57'),
(6, 'Camera', 'Camera Service', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'camera', 'scholarship-1.jpg', '2021-05-02 06:43:19', '2021-05-02 06:43:19'),
(11, 'Service', 'Car service', '6y7546', 'check', 'gallery-1-500x500.jpg', '2021-05-18 11:04:07', '2021-05-18 11:04:07'),
(13, 'Service', 'Database service', 'vvbh', 'server', 'blog-2-600x318.jpg', '2021-05-18 14:49:31', '2021-05-18 14:49:31'),
(14, 'ERP Solutions', 'Database service', 'Manufacturing enterprise resource planning (ERP) software.', 'check', 'project-1.jpg', '2021-05-20 05:15:19', '2021-05-20 05:16:36'),
(15, 'Bus', 'Bus service', 'Enterprise Software Makes your Business Easier', 'car', 'project-2.jpg', '2021-05-20 05:17:30', '2021-05-20 05:17:49'),
(16, 'Book', 'book service', 'By using Cloud App you can monitor your business everywhere.', 'magnet', 'project-3.jpg', '2021-05-20 05:19:00', '2021-05-20 05:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `fname`, `lname`, `email`, `phone`, `country`, `add`, `zip_code`, `city`, `shipping_status`, `created_at`, `updated_at`) VALUES
(1, 'Shakib', 'Hassan', 'sabakur12360@gmail.com', '01774307611', 'Bangladesh', 'rangpur', '99', 'rangpur', 'Delivered', '2021-06-14 12:05:48', '2021-06-16 07:52:27'),
(2, 'Test', 'Test', 'admin@gmail.com', '01846921763', 'Bangladesh', 'Bangladesh', '5464', 'Bangladesh', 'Pending', '2021-06-16 08:01:22', '2021-06-16 08:01:22'),
(3, 'Test', 'Test', 'admin@gmail.com', '01846921763', 'Bangladesh', 'Bangladesh', '5464', 'Bangladesh', 'Pending', '2021-06-16 08:08:23', '2021-06-16 08:08:23'),
(4, 'Shakib', 'Hassan', 'sabakur12360@gmail.com', '01774307611', 'Bangladesh', 'rangpur', '99', 'rangpur', 'Pending', '2021-06-17 07:56:45', '2021-06-17 07:56:45'),
(5, 'Shakib', 'Hassan', 'sabakur12360@gmail.com', '01774307611', 'Bangladesh', 'rangpur', '99', 'rangpur', 'Pending', '2021-06-17 08:30:30', '2021-06-17 08:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `s_name`, `sponsor_image`, `created_at`, `updated_at`) VALUES
(1, 'XP', '1621405761-dribble_black.png', '2021-04-18 09:03:29', '2021-05-19 06:29:21'),
(2, 'Hp', 'wordpress_black.png', '2021-04-18 09:10:09', '2021-04-18 09:10:09'),
(3, 'PK', '1620616225-jquery_black-copy.png', '2021-04-18 09:16:09', '2021-05-10 03:10:25'),
(4, 'Rd', 'dribble_black.png', '2021-04-18 09:16:40', '2021-04-18 09:16:40'),
(8, 'Xpppp', '1621338099-logo(2).png', '2021-05-18 11:41:39', '2021-05-18 11:41:39'),
(10, 'Hp', '1621351321-dribble_black.png', '2021-05-18 15:22:01', '2021-05-18 15:22:01'),
(12, 'Gh', '1621509780-dribble_black.png', '2021-05-20 11:23:00', '2021-05-20 11:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `curr_course_id` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `curr_course_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sabakur Rahman', 'sabkur12360@gmail.com', 1774307611, 0, '$2y$10$N/K/rVqxObUGxZ9F.ND4z..0LX7UGVsEYsD9vzWOAO7jXJ53A6/2G', '2021-06-03 11:14:59', '2021-06-03 11:14:59'),
(2, 'Shakib', 'sabakur12360@gmail.com', 1774307611, 3, '$2y$10$aF3s91pI1SvNOUgae9xuaut2BKj2vdjnropvMikuwe9uqXoGbYRIG', '2021-06-06 10:04:12', '2021-06-12 06:20:02'),
(3, 'Shakib', 'sabakur12360@gmail.com', 1774307611, 0, '$2y$10$NoQAyBcOhjWjmy09kaAB9eBFHk/H5jj.AftmA72h9loBZc.jkGsY.', '2021-06-06 10:07:09', '2021-06-06 10:07:09'),
(4, 'Shakib', 'sabakur12360@gmail.com', 1774307611, 0, '$2y$10$AcfVpj5UXC9fYXdsgkhr/ubmvBDUqcD9GitIl8y3WQfXI6yGGQVMO', '2021-06-07 08:46:15', '2021-06-07 08:46:15'),
(5, 'Rahat', 'sabakur12362@gmail.com', 1774307611, 0, '$2y$10$DHHf6CYfbjhyBWIkUK1skuZwptydJ.OKkPW1t/7TA/YGG0jrZQcKq', '2021-06-07 15:08:26', '2021-06-07 15:08:26'),
(6, 'Shakib Hassan', 'sabakur1260@gmail.com', 1774307611, 0, '$2y$10$5977nPywI.AGc01tGf0gcedzZ9BFzkrrYPsKL8hr6ekd.MUniVhjW', '2021-06-07 15:59:03', '2021-06-07 15:59:03'),
(7, 'Shakib', 'sabakur360@gmail.com', 1774307611, 0, '$2y$10$QFhAS2Q.WnhD3VPEWuTxUuOSmQybJG/cz0I8hjsN6pfoF4uAWBPEq', '2021-06-07 16:01:43', '2021-06-07 16:01:43'),
(8, 'Shakib', 'sabakur123604@gmail.com', 1774307611, 0, '$2y$10$Tr/aL90cgFZDagGIZyUkfODzrHES5IY1IfdX8IW6dgIs2k1BE5m/e', '2021-06-07 16:06:49', '2021-06-07 16:06:49'),
(10, 'Mamun', 'mamun12360@gmail.com', 1774307611, 3, '$2y$10$IZlvW7r8Mwz3HdIhJH2KNuJV5hXpsVuCdq.bTUooIvGuRMAyQg5LW', '2021-06-13 09:15:33', '2021-06-13 09:32:26'),
(11, 'Shakib Hassan', 'sabakur1255@gmail.com', 1774307645, NULL, '$2y$10$5EJKCyDlGQNPfrfhE0r/.ue4RSG896dljZnG1LXsiRrvZoDp.oygm', '2021-06-14 12:23:16', '2021-06-14 12:23:16'),
(12, 'Mamun', 'mamun33@gmail.com', 1774307656, NULL, '$2y$10$L58i1zy.22nW4fz0Sr2u5unLOwCseFU25vHA7V/.23mIiSueIq6ba', '2021-06-17 09:01:24', '2021-06-17 09:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `subcribes`
--

CREATE TABLE `subcribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcribes`
--

INSERT INTO `subcribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sabakur.shakib@northsouth.edu', '2021-05-23 09:41:32', '2021-05-23 09:41:32'),
(2, 'sabakur12360@gmail.com', '2021-05-23 09:43:04', '2021-05-23 09:43:04'),
(3, 'rahat12360@gmail.com', '2021-05-23 09:57:50', '2021-05-23 09:57:50'),
(4, 'sabakur@gmail.com', '2021-05-23 09:59:44', '2021-05-23 09:59:44'),
(5, 'sabakur@gmail.com', '2021-05-23 12:09:22', '2021-05-23 12:09:22'),
(6, 'sabakur@gmail.com', '2021-05-27 10:55:21', '2021-05-27 10:55:21'),
(7, 'new2752021@gmail.com', '2021-05-27 10:55:46', '2021-05-27 10:55:46'),
(8, 'rahat123620@gmail.com', '2021-05-30 04:39:26', '2021-05-30 04:39:26'),
(9, 'fa@gmail.com', '2021-05-30 09:58:24', '2021-05-30 09:58:24'),
(10, 'toha@gmail.com', '2021-06-07 06:07:32', '2021-06-07 06:07:32'),
(11, 'sabakur123699@gmail.com', '2021-06-10 10:03:50', '2021-06-10 10:03:50'),
(12, 'nahid@gmail.com', '2021-06-14 11:20:01', '2021-06-14 11:20:01'),
(13, 'sabakur987@gmail.com', '2021-06-17 09:03:39', '2021-06-17 09:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `teamdetails`
--

CREATE TABLE `teamdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `highlite_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teamdetails`
--

INSERT INTO `teamdetails` (`id`, `title_name`, `highlite_name`, `next_title`, `team_details`, `bg_image`, `team_image`, `created_at`, `updated_at`) VALUES
(1, 'Best Team', 'Ready To Work', 'With', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,vcnmLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,vcnm\r\nLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,vcnm\r\nLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,vcnm', '1621925978-blog-banner-team.jpg', 'home-about.png', '2021-05-24 12:02:39', '2021-05-25 07:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `f_link`, `i_link`, `t_link`, `l_link`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Mehnaj Sultana', 'Senior developer', 'https://www.facebook.com/', 'https://www.instagram.com', 'https://twitter.com/', 'https://www.linkedin.com/', '1621756137-teacher-2-300x343.jpg', '2021-05-23 06:55:29', '2021-06-16 10:05:34'),
(3, 'Shakib Rahman', 'Junior developer', 'https://web.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '1621756210-teacher-3-300x343.jpg', '2021-05-23 07:50:10', '2021-06-16 10:06:14'),
(4, 'Abanti Debnat', 'Junior developer', 'https://web.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '1621759242-teacher-1-300x343.jpg', '2021-05-23 08:40:42', '2021-06-16 10:06:42'),
(5, 'Md.Mamun', 'Junior developer', 'https://web.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '1621759305-teacher-4-300x343.jpg', '2021-05-23 08:41:45', '2021-06-16 10:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `clint` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `author`, `designation`, `details`, `clint`, `created_at`, `updated_at`) VALUES
(1, 'Sabakur1', 'Rahman', 'sghdsfdhfsdfhdshfsdhfsahdshf', 190, '2021-04-18 07:37:29', '2021-05-18 15:21:37'),
(2, 'Rakib', 'Rahman', 'shdsdjhsds', 300, '2021-04-18 07:57:05', '2021-04-18 07:57:05'),
(6, 'Sabakur', 'Rahman', 'tyry', 200, '2021-05-18 15:18:42', '2021-05-18 15:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Rakib', 'rakib@gmail.com', NULL, '$2y$10$PIAm7esiJ1mqJcwAXkdj6uM.D9pgQ3y02hcL.pVqK1O.hcJfpVa.m', 1, NULL, '2021-04-20 20:04:33', '2021-04-20 20:04:33'),
(3, 'Shakib', 'sabakur12360@gmail.com', NULL, '$2y$10$FpHJYc//uFymYzOiXCyjuOt4d6tlu5POd7.VVMbbQ2hgcag0iTRoO', 1, NULL, '2021-05-08 17:14:43', '2021-05-08 17:14:43'),
(4, 'monir', 'monir@gmail.com', NULL, '$2y$10$V83Lz9GiiYqe4wDttdP3T.ZKKY.MVgxUR9FjwErb03ih90hLbg.wm', 0, NULL, '2021-05-16 04:43:19', '2021-05-16 04:43:19'),
(5, 'Monir', 'moniruzzaman@gmail.com', NULL, '$2y$10$KCAzLEoIxkUczp3Az8cVJe1cv6G9.3d8dogF.rscBhNw9F7scOWju', 1, NULL, '2021-05-16 04:51:02', '2021-05-16 04:51:02'),
(6, 'Rahat', 'rahat12360@gmail.com', NULL, '$2y$10$g3gTf3VoH8MSgNm0mYIUi.W.itKw2wbDdYPfPSqCgkK1r5boLTDUq', 0, NULL, '2021-06-03 11:26:42', '2021-06-03 11:26:42'),
(7, 'Test Test', 'admin@gmail.com', NULL, '$2y$10$MjP12xKJfH5O/hWui1zKTuF6LE056N4VOJGTQq0KJXLeb8lqy9MIK', 1, NULL, '2021-06-09 01:54:08', '2021-06-09 01:54:08'),
(8, 'Shakib Hassan', 'sabakur99@gmail.com', NULL, '$2y$10$VB5.k/eVTd1zqHckINVU3OihRtikcM/HF9o8G9XsCtfvcg4xgKxPW', 1, NULL, '2021-06-16 12:11:56', '2021-06-16 12:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `v_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `v_name`, `v_link`, `created_at`, `updated_at`) VALUES
(1, 'Spring', 'https://www.youtube.com/watch?v=WLwqM0grWkc&ab_channel=MyMusic', '2021-04-17 16:00:51', '2021-04-17 16:00:51'),
(2, 'Spring', 'https://www.youtube.com/watch?v=VQNaCRYoS6Q&ab_channel=SpringSoftit', '2021-04-17 16:23:19', '2021-04-17 16:23:19'),
(3, 'Spring', 'https://www.youtube.com/embed/VQNaCRYoS6Q', '2021-04-17 16:27:41', '2021-04-17 16:27:41'),
(4, 'Spring4', 'https://www.youtube.com/embed/VQNaCRYoS6Q', '2021-05-11 04:54:58', '2021-05-11 04:54:58'),
(5, 'Spring', 'https://www.youtube.com/embed/VQNaCRYoS6Q', '2021-05-11 04:55:04', '2021-05-11 04:55:04'),
(6, 'Spring', 'https://www.youtube.com/watch?v=e26VqdU1RXQ&ab_channel=NextGear', '2021-05-11 05:17:51', '2021-05-11 05:17:51'),
(7, 'Spring', 'https://www.youtube.com/embed/VQNaCRYoS6Q', '2021-05-11 05:18:59', '2021-05-11 05:18:59'),
(8, 'Spring4', 'https://www.youtube.com/embed/VQNaCRYoS6Q', '2021-05-18 14:49:00', '2021-05-18 14:49:00'),
(9, 'Spring44', 'https://www.youtube.com/watch?v=e26VqdU1RXQ&ab_channel=NextGear', '2021-05-19 06:50:19', '2021-05-19 06:50:19'),
(11, 'Spring Soft It', 'https://www.youtube.com/embed/VQNaCRYoS6Q', '2021-05-19 07:15:20', '2021-05-19 07:15:20'),
(12, 'Spring Soft It', 'https://www.youtube.com/embed/VQNaCRYoS6Q', '2021-06-17 08:56:07', '2021-06-17 08:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `whylearns`
--

CREATE TABLE `whylearns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `learns_id` bigint(20) UNSIGNED DEFAULT NULL,
  `why_learn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whylearns`
--

INSERT INTO `whylearns` (`id`, `learns_id`, `why_learn`, `course_id`, `created_at`, `updated_at`) VALUES
(8, 8, 'Learn advanced', 12, '2021-06-11 23:41:00', '2021-06-11 23:41:00'),
(14, 11, 'Learn advanced Python features, like the collections', 2, '2021-06-12 03:02:40', '2021-06-12 03:02:40'),
(15, 11, 'html 1', 2, '2021-06-12 03:02:40', '2021-06-12 03:02:40'),
(16, 11, 'Learn advanced', 2, '2021-06-12 03:02:40', '2021-06-12 03:02:40'),
(17, 12, NULL, 3, '2021-06-12 03:48:23', '2021-06-12 03:48:23'),
(18, 13, 'Learn advanced', 1, '2021-06-13 05:25:20', '2021-06-13 05:25:20'),
(19, 13, 'Learn advanced', 1, '2021-06-13 05:25:21', '2021-06-13 05:25:21'),
(20, 14, 'Learn advanced1', 13, '2021-06-13 05:27:23', '2021-06-13 05:27:23'),
(21, 14, 'Learn advanced', 13, '2021-06-13 05:27:23', '2021-06-13 05:27:23'),
(22, 14, 'Learn advanced', 13, '2021-06-13 05:27:23', '2021-06-13 05:27:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_products`
--
ALTER TABLE `admin_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_products_category_id_foreign` (`category_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applylists`
--
ALTER TABLE `applylists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_infos`
--
ALTER TABLE `app_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcomments`
--
ALTER TABLE `blogcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chooses`
--
ALTER TABLE `chooses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consulations`
--
ALTER TABLE `consulations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_learncontents_id_foreign` (`learncontents_id`),
  ADD KEY `contents_course_id_foreign` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctas`
--
ALTER TABLE `ctas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `features_product_features_id_foreign` (`product_features_id`),
  ADD KEY `features_product_id_foreign` (`product_id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_user_information`
--
ALTER TABLE `get_user_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `give_answers`
--
ALTER TABLE `give_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `key_features`
--
ALTER TABLE `key_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key_features_product_keys_id_foreign` (`product_keys_id`),
  ADD KEY `key_features_product_id_foreign` (`product_id`);

--
-- Indexes for table `learncontents`
--
ALTER TABLE `learncontents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `learncontents_course_id_foreign` (`course_id`);

--
-- Indexes for table `learns`
--
ALTER TABLE `learns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `learns_course_id_foreign` (`course_id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbars`
--
ALTER TABLE `navbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_payments`
--
ALTER TABLE `order_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_payments_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_tables`
--
ALTER TABLE `order_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_tables_customer_id_foreign` (`customer_id`),
  ADD KEY `order_tables_shipping_id_foreign` (`shipping_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preview_products`
--
ALTER TABLE `preview_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preview_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `productorders`
--
ALTER TABLE `productorders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productorders_customer_id_foreign` (`customer_id`),
  ADD KEY `productorders_order_id_foreign` (`order_id`),
  ADD KEY `productorders_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_name_unique` (`name`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_features_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_keys`
--
ALTER TABLE `product_keys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_keys_product_id_foreign` (`product_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcribes`
--
ALTER TABLE `subcribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamdetails`
--
ALTER TABLE `teamdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whylearns`
--
ALTER TABLE `whylearns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_products`
--
ALTER TABLE `admin_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applylists`
--
ALTER TABLE `applylists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `app_infos`
--
ALTER TABLE `app_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blogcomments`
--
ALTER TABLE `blogcomments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chooses`
--
ALTER TABLE `chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `consulations`
--
ALTER TABLE `consulations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ctas`
--
ALTER TABLE `ctas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enrolls`
--
ALTER TABLE `enrolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `get_user_information`
--
ALTER TABLE `get_user_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `give_answers`
--
ALTER TABLE `give_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `key_features`
--
ALTER TABLE `key_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `learncontents`
--
ALTER TABLE `learncontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `learns`
--
ALTER TABLE `learns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `navbars`
--
ALTER TABLE `navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `order_payments`
--
ALTER TABLE `order_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_tables`
--
ALTER TABLE `order_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preview_products`
--
ALTER TABLE `preview_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productorders`
--
ALTER TABLE `productorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_keys`
--
ALTER TABLE `product_keys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subcribes`
--
ALTER TABLE `subcribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teamdetails`
--
ALTER TABLE `teamdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `whylearns`
--
ALTER TABLE `whylearns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
