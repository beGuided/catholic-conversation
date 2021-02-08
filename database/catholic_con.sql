-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2021 at 02:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catholic_con`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `blog_post_id` int(11) NOT NULL,
  `blog_post_title` varchar(255) NOT NULL,
  `blog_post_author` varchar(11255) NOT NULL,
  `blog_post_image` text NOT NULL,
  `blog_post_details` text NOT NULL,
  `blog_post_date` date NOT NULL,
  `blog_post_category_id` int(3) NOT NULL,
  `blog_post_tag` varchar(255) NOT NULL,
  `blog_post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `blog_post_comment_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`blog_post_id`, `blog_post_title`, `blog_post_author`, `blog_post_image`, `blog_post_details`, `blog_post_date`, `blog_post_category_id`, `blog_post_tag`, `blog_post_status`, `blog_post_comment_count`) VALUES
(2, 'Friendship', 'joshua', 'dylan-gillis-KdeqA3aTnBY-unsplash@2x.png', '                                                            “You cannot just be passive. You have to become a real friend of your friends — by helping them. First, with the example of your behaviour and then with your advice and with the influence that a close friendship provides”. (Furrow, 730. St. Josemaria Escriva). Our goal is to make it to Heaven, and that, as saints. In striving to reach God, to reach his infinite goodness, we should walk with others, with friends. In the scriptures, our Lord speaks of the two greatest commandments: love for God and love for neighbour (Mk. 12: 29-31). Love for neighbour is what moves is to seek the true good of those by our side — their material and spiritual good — to help them live their best lives here on earth without losing sight of the goal of sanctity. It is in this that friendship lies.                                                             ', '2021-02-04', 1, 'friendship', 'published', 3),
(7, 'spiritual  growth', 'josh', 'chris-montgomery-smgTvepind4-unsplash.png', '<p>“You cannot just be passive. You have to become a real friend of your friends — by helping them. First, with theJosemaria Escriva). Our goal is to make it to Heaven, and that, as saints. In striving to reach God, to reach his infinite goodness, we should walk with others, with friends. In the scriptures, our Lord speaks of the two greatest commandments: love for God and love for neighbour (Mk. 12: 29-31). Love for neighbour is what moves is to seek the true good of those by our side — their material and spiritual good — to help them live their best lives here on earth without losing sight of the goal of sanctity. It is in this that friendship lies.</p>', '2021-02-01', 1, 'spirit', 'published', 5),
(11, 'new', 'josh', 'rosary.png', '<h2><strong>fresh</strong></h2>', '2021-02-01', 1, 'new', 'published', 0),
(14, 'new', 'josh', 'matheus-ferrero-TkrRvwxjb_8-unsplash.png', '<p>feeling happy</p>', '2021-02-01', 5, 'new', 'published', 0),
(15, 'new', 'test', 'ryoji-iwata-IBaVuZsJJTo-unsplash@3x.png', 'done', '2021-02-04', 4, 'new', 'published', 0),
(16, 'fresh', 'josh', 'PODCAST.png', 'free', '2021-02-04', 4, 'spirit', 'published', 0),
(17, 'afterlife', 'honor', 'matheus-ferrero-TkrRvwxjb_8-unsplash.png', 'best things', '2021-02-04', 1, 'spirit', 'published', 0),
(18, 'welcome', 'chima', '', 'free life', '2021-02-04', 1, 'free life', 'published', 0),
(19, 'take away', 'freedom', 'dylan-gillis-KdeqA3aTnBY-unsplash-1@3x.png', 'friend', '2021-02-04', 1, 'jesus', 'published', 0),
(20, 'take away now', 'freedom', 'dylan-gillis-KdeqA3aTnBY-unsplash-1@3x.png', '', '2021-02-04', 1, 'jesus', 'published', 0),
(21, 'take away now', 'freedom', 'dylan-gillis-KdeqA3aTnBY-unsplash-1@3x.png', '<p>now</p>', '2021-02-04', 1, 'jesus', 'published', 0),
(22, 'fresh', 'think', '', 'happy', '2021-02-04', 4, 'spirit', 'draft', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_description` varchar(255) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `book_image` text NOT NULL,
  `book_author_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'spiritual'),
(4, 'saint life'),
(5, 'plan of life'),
(7, 'life of prayer ');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Comments`
--

INSERT INTO `Comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_date`, `comment_status`) VALUES
(2, 2, 'chime', 'example@email.com', 'this is a text comment', '2021-01-20', 'Approved'),
(3, 2, 'chime', 'chime@email.com', 'new', '2021-01-21', 'Approved'),
(4, 2, 'wisdom', 'wisdom@gmail.com', 'also new', '2021-01-21', 'Approved'),
(5, 2, 'wisdom', 'wisdom@gmail.com', 'peace', '2021-01-21', 'Approved'),
(6, 8, 'wisdom', 'wisdom@gmail.com', 'test comment', '2021-01-28', 'unapproved'),
(7, 8, 'tunde', 'chime@email.com', 'freedom', '2021-01-28', 'Approved'),
(8, 7, 'chime', 'chime@email.com', 'alive inside', '2021-02-01', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `podcast_id` int(11) NOT NULL,
  `podcast_title` varchar(255) NOT NULL,
  `podcast_series` varchar(255) NOT NULL,
  `podcast_image` text NOT NULL,
  `podcast_date` date NOT NULL,
  `podcast_status` varchar(255) NOT NULL DEFAULT 'draft',
  `podcast_link` text NOT NULL,
  `audio_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`podcast_id`, `podcast_title`, `podcast_series`, `podcast_image`, `podcast_date`, `podcast_status`, `podcast_link`, `audio_time`) VALUES
(6, 'fresh life in christ', 'welcome', 'christopher-jolly-GqbU78bdJFM-unsplash.png', '2021-02-04', 'published', 'link', '30 min'),
(7, 'fresh life in christ', 'welcome', 'ryoji-iwata-IBaVuZsJJTo-unsplash@3x.png', '2021-02-04', 'published', 'link', '20 MIn');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_topic` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_video_link` varchar(255) NOT NULL,
  `post_image` text NOT NULL,
  `post_slide_link` varchar(255) NOT NULL,
  `post_details` text NOT NULL,
  `post_date` date NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_comment_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_topic`, `post_author`, `post_video_link`, `post_image`, `post_slide_link`, `post_details`, `post_date`, `post_category_id`, `post_tag`, `post_status`, `post_comment_count`) VALUES
(7, 'new life', 'first', 'josh', 'tgbNymZ7vqY', 'chris-montgomery-smgTvepind4-unsplash.png', 'slide link', '                                                                                       the first details             \r\n        ', '2021-02-04', 1, 'scriptures', 'published', 1),
(8, 'the future of man', 'spiritual formation', 'chima', 'www.facebook.com', 'christopher-jolly-GqbU78bdJFM-unsplash.png', 'www.facebook.com', '                                                           the spirit voice              \r\n        ', '2021-02-04', 1, 'spiritual', 'published', 4),
(10, 'new post', 'latest', 'josh', 'youtube', 'dylan-gillis-KdeqA3aTnBY-unsplash-1@3x.png', 'google drive', '                                                            new post\r\n          \r\n                \r\n        ', '2021-02-04', 1, 'latest', 'published', 4),
(13, 'new', 'free life', 'josh', 'tgbNymZ7vqY', 'christopher-jolly-GqbU78bdJFM-unsplash@2x.png', 'link', '<p>ne post</p>', '2021-01-31', 1, 'life', 'published', 0),
(14, 'new', 'enjoy', 'chima', 'tgbNymZ7vqY', 'ryoji-iwata-IBaVuZsJJTo-unsplash@3x.png', 'link', '<p>i am happy</p><p>&nbsp;</p><p>&nbsp;</p>', '2021-02-01', 5, 'happy', 'published', 0),
(15, 'freedom', 'fee life', 'chima', 'tgbNymZ7vqY', 'rosary.png', 'link', 'happy', '2021-02-01', 5, 'happy', 'published', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_firstName` varchar(255) NOT NULL,
  `user_lastName` varchar(255) NOT NULL,
  `User_name` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstName`, `user_lastName`, `User_name`, `user_role`, `user_email`, `user_password`, `randSalt`) VALUES
(1, 'joshua', 'Adejoh', 'mona', 'Subscriber', 'Adejoh382@gmail.com', '*0', '0'),
(3, 'mona', 'Adejoh', 'mona', 'Subscriber', 'example@gmail.com', '1234', 'null'),
(4, 'samuel', 'adejoh', 'sam', 'Admin', 'example@gmail.com', 'sam123', 'null'),
(6, 'null', 'null}', 'null', 'subscriber', '', 'null', 'null'),
(7, 'null', 'null', 'null', 'subscriber', 'josh@gmail', 'null', 'null'),
(8, 'null', 'null', 'null', 'subscriber', 'example@yahoo.com', 'null', 'null'),
(9, 'test', 'test', 'test', 'Subscriber', 'test@gmail.com', '1234', 'null'),
(10, 'null', 'null', 'null', 'subscriber', 'peter@gmail.com', 'null', 'null'),
(11, 'null', 'null', 'null', 'subscriber', 'example@yahoo.com', 'null', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`blog_post_id`);

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`podcast_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `blog_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `Books`
--
ALTER TABLE `Books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `podcast_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
