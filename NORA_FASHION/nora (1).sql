-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 06:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nora`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(1, 'Jahid Hasan', 'jahidjd18@gmail.com', 1627809808, 'Village/Town: Nabina', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_category_id` int(11) NOT NULL,
  `blog_details` text NOT NULL,
  `blog_photo` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_category_id`, `blog_details`, `blog_photo`, `date`) VALUES
(6, 4, 'Quisque pretium fermentum quam, sit amet cursus ante sollicitudin vel. Morbi consequat risus consequat, porttitor orci sit amet, iaculis nisl. Integer quis sapien nec elit ultrices euismod sit amet id lacus. Sed a imperdiet erat. Duis eu est dignissim lacus dictum hendrerit quis vitae mi. Fusce eu nulla ac nisi cursus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tristique sem eget leo faucibus porttitor. Suspendisse sagittis, magna sed varius iaculis tellus tortor non neque.\r\n\r\nNulla vitae metus tincidunt, varius nunc quis, porta nulla. Pellentesque vel dui nec libero auctor pretium id sed arcu. Nunc consequat diam id nisl blandit dignissim. Etiam commodo diam dolor, at scelerisque sem finibus sit amet. Curabitur id lectus eget purus finibus laoreet. Nam eget lectus ac sem luctus hendrerit sed nec magna. Maecenas vulputate magna sed nunc pellentesque, in consectetur nisi condimentum.', '1438698280.jpg', '2022-01-01'),
(7, 3, 'Quisque pretium fermentum quam, sit amet cursus ante sollicitudin vel. Morbi consequat risus consequat, porttitor orci sit amet, iaculis nisl. Integer quis sapien nec elit ultrices euismod sit amet id lacus. Sed a imperdiet erat. Duis eu est dignissim lacus dictum hendrerit quis vitae mi. Fusce eu nulla ac nisi cursus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tristique sem eget leo faucibus porttitor. Suspendisse sagittis, magna sed varius iaculis tellus tortor non neque.\r\n\r\nNulla vitae metus tincidunt, varius nunc quis, porta nulla. Pellentesque vel dui nec libero auctor pretium id sed arcu. Nunc consequat diam id nisl blandit dignissim. Etiam commodo diam dolor, at scelerisque sem finibus sit amet. Curabitur id lectus eget purus finibus laoreet. Nam eget lectus ac sem luctus hendrerit sed nec magna. Maecenas vulputate magna sed nunc pellentesque, in consectetur nisi condimentum.', '2037698733.jpg', '2022-01-06'),
(8, 2, 'Quisque pretium fermentum quam, sit amet cursus ante sollicitudin vel. Morbi consequat risus consequat, porttitor orci sit amet, iaculis nisl. Integer quis sapien nec elit ultrices euismod sit amet id lacus. Sed a imperdiet erat. Duis eu est dignissim lacus dictum hendrerit quis vitae mi. Fusce eu nulla ac nisi cursus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tristique sem eget leo faucibus porttitor. Suspendisse sagittis, magna sed varius iaculis tellus tortor non neque. Nulla vitae metus tincidunt, varius nunc quis, porta nulla. Pellentesque vel dui nec libero auctor pretium id sed arcu. Nunc consequat diam id nisl blandit dignissim. Etiam commodo diam dolor, at scelerisque sem finibus sit amet. Curabitur id lectus eget purus finibus laoreet. Nam eget lectus ac sem luctus hendrerit sed nec magna. Maecenas vulputate magna sed nunc pellentesque, in consectetur nisi condimentum.', '7003217.jpg', '2022-01-07'),
(9, 5, 'Quisque pretium fermentum quam, sit amet cursus ante sollicitudin vel. Morbi consequat risus consequat, porttitor orci sit amet, iaculis nisl. Integer quis sapien nec elit ultrices euismod sit amet id lacus. Sed a imperdiet erat. Duis eu est dignissim lacus dictum hendrerit quis vitae mi. Fusce eu nulla ac nisi cursus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tristique sem eget leo faucibus porttitor. Suspendisse sagittis, magna sed varius iaculis tellus tortor non neque. Nulla vitae metus tincidunt, varius nunc quis, porta nulla. Pellentesque vel dui nec libero auctor pretium id sed arcu. Nunc consequat diam id nisl blandit dignissim. Etiam commodo diam dolor, at scelerisque sem finibus sit amet. Curabitur id lectus eget purus finibus laoreet. Nam eget lectus ac sem luctus hendrerit sed nec magna. Maecenas vulputate magna sed nunc pellentesque, in consectetur nisi condimentum.', '1274577379.jpg', '2022-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `blog_category` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `blog_category`, `category_name`) VALUES
(2, 'MODERNISM IN ARCHITECTURE', 'Architecture'),
(3, 'Postmodern Architecture', 'Interior'),
(4, 'Modern Architecture Buildings', 'Urban'),
(5, 'Modern Architectural Structures', 'Planning');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`) VALUES
(4, 'Architect');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` tinyint(4) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `logo_text_big` varchar(50) NOT NULL,
  `logo_text` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `map` text NOT NULL,
  `about_text` text NOT NULL,
  `about_photo` varchar(255) NOT NULL,
  `service_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`id`, `logo`, `logo_text_big`, `logo_text`, `phone`, `email`, `footer_text`, `address`, `map`, `about_text`, `about_photo`, `service_photo`) VALUES
(1, '646461301.png', ' BAUEN', ' INNOVATE DESIGN', '8801627809808', 'jahid@gmail.com', 'Our firm nisl sodales sit amet sapien idea placerat sodales orcite. Vivamus ne miss rhoncus felis bauen architecture.', 'Mohammadour, Dhaka, Bangladesh', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14606.06792955237!2d90.3510152864666!3d23.764597991642656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c09f9ba3d447%3A0x1babce9f1c6c95a3!2sMohammadpur%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1641706608179!5m2!1sen!2sbd\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu atelit finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique.\r\n\r\nDesign inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen.\r\n\r\nPlanner inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen. Viverra tristique jusio the ivite dianne onen nivami acsestion augue artine.', '672945542.jpg', '1260180403.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `price` varchar(15) NOT NULL,
  `information_architecture` enum('Yes','No') NOT NULL,
  `lifetime_support` enum('Yes','No') NOT NULL,
  `a-z_design` enum('Yes','No') NOT NULL,
  `full_concept` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `plan_name`, `price`, `information_architecture`, `lifetime_support`, `a-z_design`, `full_concept`) VALUES
(9, 'Basic Plan', '60,000', 'Yes', 'Yes', 'No', 'No'),
(10, 'Popular Plan', '95,000', 'Yes', 'Yes', 'Yes', 'No'),
(11, 'Premium Plan', '150,000', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `details` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `arrow` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`id`, `p_name`, `details`, `number`, `icon`, `arrow`) VALUES
(1, 'CLIENT NEEDS', 'Nulla ane sapienu tincie miss oviverra odio sen nena motis omaurise nediam the misthe ovivense endum the drana osemsuti isendum.', 1, 'icon ti-thought', '305165361.png'),
(2, 'DIRECTION', 'Nulla ane sapienu tincie miss oviverra odio sen nena motis omaurise nediam the misthe ovivense endum the drana osemsuti isendum.', 2, 'icon ti-direction-alt', '890481277.png'),
(3, 'DESIGN', 'Nulla ane sapienu tincie miss oviverra odio sen nena motis omaurise nediam the misthe ovivense endum the drana osemsuti isendum.', 3, 'icon ti-ruler-pencil', '151381070.png'),
(4, 'VALUE', 'Nulla ane sapienu tincie miss oviverra odio sen nena motis omaurise nediam the misthe ovivense endum the drana osemsuti isendum.', 4, 'icon ti-tag', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category_id`, `title`, `photo`, `details`, `status`) VALUES
(10, 1, 'COTTON HOUSE', '1393238871.jpg', 'Architecture non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer masin libero sempe. Fusceler mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus. Villa gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac anteipsu pimsine faucibus. Curabitur arcu site feugiat in tortor in, volutpat sollicitudin libero.', 'active'),
(11, 5, 'Armada Center', '579374559.jpg', 'Architecture non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer masin libero sempe. Fusceler mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus. Villa gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac anteipsu pimsine faucibus. Curabitur arcu site feugiat in tortor in, volutpat sollicitudin libero.', 'active'),
(12, 4, 'Twins Office', '65124486.jpg', 'Architecture non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer masin libero sempe. Fusceler mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus. Villa gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac anteipsu pimsine faucibus. Curabitur arcu site feugiat in tortor in, volutpat sollicitudin libero.', 'active'),
(13, 3, 'Geometric Addo', '81044568.jpg', 'Architecture non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer masin libero sempe. Fusceler mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus. Villa gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac anteipsu pimsine faucibus. Curabitur arcu site feugiat in tortor in, volutpat sollicitudin libero.', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `project_category`
--

CREATE TABLE `project_category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `short_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_category`
--

INSERT INTO `project_category` (`id`, `title`, `c_name`, `short_details`) VALUES
(1, 'Interior', 'Cotton House', 'Architecture viverra tristique duis vitae diam neque nivamus aestan ateuene artines finibus. Nedana '),
(2, 'Urban', 'Geometric Addo', 'Architecture viverra tristique duis vitae diam neque nivamus aestan ateuene artines finibus. Nedana '),
(3, 'Interior', 'Stonya Villa', 'Architecture viverra tristique duis vitae diam neque nivamus aestan ateuene artines finibus. Nedana '),
(4, 'Exterior', 'Prime Hotel', 'Architecture viverra tristique duis vitae diam neque nivamus aestan ateuene artines finibus. Nedana '),
(5, 'urban', 'Armada Center', 'Architecture viverra tristique duis vitae diam neque nivamus aestan ateuene artines finibus. Nedana'),
(6, 'urban', 'Twins Office', 'Architecture viverra tristique duis vitae diam neque nivamus aestan ateuene artines finibus. Nedana');

-- --------------------------------------------------------

--
-- Table structure for table `project_photo`
--

CREATE TABLE `project_photo` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_photo`
--

INSERT INTO `project_photo` (`id`, `project_id`, `photo`) VALUES
(1, 13, '507942530.jpg'),
(4, 10, '894289246.jpg'),
(5, 12, '1213128148.jpg'),
(6, 11, '2078997266.jpg'),
(10, 13, '796636805.jpg'),
(11, 10, '1072920.jpg'),
(12, 11, '85107952.jpg'),
(13, 10, '402752981.jpg'),
(14, 12, '2138556283.jpg'),
(15, 12, '145219763.jpg'),
(16, 13, '2047382132.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `project_photo_view`
-- (See below for the actual view)
--
CREATE TABLE `project_photo_view` (
`id` int(11)
,`project_id` int(11)
,`photo` varchar(255)
,`title` varchar(100)
,`c_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `project_view`
-- (See below for the actual view)
--
CREATE TABLE `project_view` (
`id` int(11)
,`category_id` int(11)
,`title` varchar(255)
,`photo` varchar(255)
,`details` longtext
,`status` enum('active','inactive')
,`c_name` varchar(100)
,`c_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `service_icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `number`, `title`, `photo`, `details`, `status`, `service_icon`) VALUES
(8, 1, 'Achitecture', '835865058.jpg', 'Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.', 'active', '396413551.png'),
(9, 2, 'Interior Design', '1051766929.jpg', 'Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.', 'active', '1853425852.png'),
(10, 3, 'Urban Design', '924970416.jpg', 'Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.', 'active', '1461756768.png'),
(11, 4, 'Planning', '1674274888.jpg', 'Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.', 'active', '848802842.png'),
(12, 5, '3D Modelling', '451371646.jpg', '	Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.', 'active', '414715629.png'),
(13, 6, 'Decor Plan', '475486823.jpg', '	Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.', 'active', '1664798603.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `brief` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `action_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `photo`, `title`, `brief`, `status`, `action_url`) VALUES
(0, '1306324900.jpg', 'Innovate Desing in Dhaka', 'Architecture viverra tellus nec massa dictum the euismoe.<br>\r\nCurabitur viverra the posuere aukue velit.', 'active', 'services.php'),
(2, '1305378354.jpg', 'Innovate Desing in Dhaka', 'Architecture viverra tellus nec massa dictum the euismoe.<br>Curabitur viverra the posuere aukue velit.', 'active', 'services.php'),
(3, '1260276824.jpg', 'Innovate Desing in Brahmanbaria', 'Architecture viverra tellus nec massa dictum the euismoe.<br>Curabitur viverra the posuere aukue velit.', 'active', 'services.php'),
(4, '1815708840.jpg', 'Innovate Desing in Rajshahi', 'Architecture viverra tellus nec massa dictum the euismoe.<br>\r\nCurabitur viverra the posuere aukue velit.', 'active', 'services.php'),
(5, '1037438837.jpg', 'Innovate Desing in Bandarban', 'Architecture viverra tellus nec massa dictum the euismoe.<br>\r\nCurabitur viverra the posuere aukue velit.', 'active', 'services.php');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skill` varchar(150) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `history` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `department_id`, `name`, `age`, `contact`, `email`, `skill`, `experience`, `history`, `photo`) VALUES
(9, 4, 'Jason Brown', 25, '01627809808', 'jason@gmail.com', 'Web Application Development with PHP & Framework ', '5 years', 'Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante ipsum primis in faucibus. Curabitur arcu erosite feugiat in torton volutpat sollicitudin libero. Maecenas nisl est, conselur rhoncus loremir consequat et, finibus nec purus. Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer massa in libero semper. Fusceler mollis augue sit amet hendrerit vestibulum.', '1892343544.jpg'),
(10, 4, 'Emily White', 22, '01627809808', '', 'Web Application Development with PHP & Framework ', '10 years', 'Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante ipsum primis in faucibus. Curabitur arcu erosite feugiat in torton volutpat sollicitudin libero. Maecenas nisl est, conselur rhoncus loremir consequat et, finibus nec purus. Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer massa in libero semper. Fusceler mollis augue sit amet hendrerit vestibulum.', '124163609.jpg'),
(11, 4, 'Jahid Hasan', 24, '01627809808', 'jahid@gmail.com', 'Web Application Development with PHP & Framework ', '0', 'Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante ipsum primis in faucibus. Curabitur arcu erosite feugiat in torton volutpat sollicitudin libero. Maecenas nisl est, conselur rhoncus loremir consequat et, finibus nec purus. Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer massa in libero semper. Fusceler mollis augue sit amet hendrerit vestibulum.', '1027552807.jpg'),
(12, 4, 'RAMIDUL ISLAM', 25, '01627809808', 'robin@gmail.com', 'painting', '5 years', 'Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante ipsum primis in faucibus. Curabitur arcu erosite feugiat in torton volutpat sollicitudin libero. Maecenas nisl est, conselur rhoncus loremir consequat et, finibus nec purus. Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer massa in libero semper. Fusceler mollis augue sit amet hendrerit vestibulum.', '1536409155.jpg'),
(13, 4, 'Rafat Uddin', 25, '01627809808', 'rafat@gmail.com', 'Cooking', '2 years', 'Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante ipsum primis in faucibus. Curabitur arcu erosite feugiat in torton volutpat sollicitudin libero. Maecenas nisl est, conselur rhoncus loremir consequat et, finibus nec purus. Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer massa in libero semper. Fusceler mollis augue sit amet hendrerit vestibulum.', '92501996.jpg'),
(14, 4, 'Sabiha Hasan', 22, '01627809808', 'sabiha@gmail.com', 'Painting', '10 years', 'Quisque gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac ante ipsum primis in faucibus. Curabitur arcu erosite feugiat in torton volutpat sollicitudin libero. Maecenas nisl est, conselur rhoncus loremir consequat et, finibus nec purus. Yuroin non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer massa in libero semper. Fusceler mollis augue sit amet hendrerit vestibulum.', '34071476.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `company_name`, `photo`, `email`, `message`) VALUES
(3, 'JD', 'Crowne Plaza Owner', '', 'jason@gmail.com', 'Architect dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the lemon sanleo nec feugiat erat hendrerit necuis ve ante.'),
(4, 'Jahid Hasan', 'Alsa Manager', '', 'jahid@gmail.com', 'Interior dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the lemon sanleo nec feugiat erat hendrerit necuis ve ante.'),
(5, 'Naim', 'Armada Owner', '', 'naim@gmail.com', 'Urban dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the lemon sanleo nec feugiat erat hendrerit necuis ve ante.');

-- --------------------------------------------------------

--
-- Structure for view `project_photo_view`
--
DROP TABLE IF EXISTS `project_photo_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project_photo_view`  AS SELECT `project_photo`.`id` AS `id`, `project_photo`.`project_id` AS `project_id`, `project_photo`.`photo` AS `photo`, `project_category`.`title` AS `title`, `project_category`.`c_name` AS `c_name` FROM ((`project_photo` join `projects` on(`project_photo`.`project_id` = `projects`.`id`)) join `project_category` on(`projects`.`category_id` = `project_category`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `project_view`
--
DROP TABLE IF EXISTS `project_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project_view`  AS SELECT `projects`.`id` AS `id`, `projects`.`category_id` AS `category_id`, `projects`.`title` AS `title`, `projects`.`photo` AS `photo`, `projects`.`details` AS `details`, `projects`.`status` AS `status`, `project_category`.`title` AS `c_name`, `project_category`.`id` AS `c_id` FROM (`projects` join `project_category` on(`projects`.`category_id` = `project_category`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category_id` (`blog_category_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `project_category`
--
ALTER TABLE `project_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_photo`
--
ALTER TABLE `project_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `project_category`
--
ALTER TABLE `project_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_photo`
--
ALTER TABLE `project_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `project_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_photo`
--
ALTER TABLE `project_photo`
  ADD CONSTRAINT `project_photo_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
