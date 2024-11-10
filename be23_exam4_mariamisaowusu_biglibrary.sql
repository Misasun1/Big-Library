-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 05:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be23_exam4_mariamisaowusu_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be23_exam4_mariamisaowusu_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be23_exam4_mariamisaowusu_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `ISBN_code` bigint(9) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `author_first_Name` varchar(70) DEFAULT NULL,
  `author_last_name` varchar(70) DEFAULT NULL,
  `publisher_name` varchar(100) DEFAULT NULL,
  `publisher_address` varchar(150) DEFAULT NULL,
  `publish_date` year(4) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `ISBN_code`, `type`, `author_first_Name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `short_description`, `status`) VALUES
(1, 'The Great Gatsby', 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781645173519/the-great-gatsby-and-other-works-9781645173519_hr.jpg', 9780743273565, 'Book', 'Francis Scott', 'Fitzgerald', 'Scribner', '1234 Fictional Ave, New York, NY', '1925', '\"The Great Gatsby\" follows Jay Gatsbys pursuit of the American Dream, as he yearns for his lost love, Daisy Buchanan, in the lavish and tumultuous world of 1920s Long Island.', 'available'),
(2, '1984', 'https://mir-s3-cdn-cf.behance.net/project_modules/1400/b468d093312907.5e6139cf2ab03.png', 9780451524935, 'Book', 'George', 'Orwell', 'Secker & Warburg', '230 KingsRoad,London,UK', '1949', 'A man rebels against a totalitarian regime in a dystopian future where Big Brother is always watching.', 'available'),
(3, 'To Kill a Mockingbird', 'https://cdn11.bigcommerce.com/s-gibnfyxosi/images/stencil/2560w/products/114990/116752/51IXWZzlgSL__41945.1615559130.jpg?c=1', 9780061120084, 'Book', 'Harper', 'Lee', 'J.B. Lippincott & Co.', '221B Mockingbird Lane, Philadelphia, PA', '1960', 'A young girl navigates the complexities of race, justice, and compassion in a small Southern town during the Great Depression.', 'available'),
(4, 'Moby-Dick', 'https://cdn.commercev3.net/cdn.teachersdiscovery.com/images/legacy/4-b-4b1115_1.jpg', 9781853260087, 'Book', 'Herman', 'Melville', 'Harper & Brothers', 'New York, NY', '0000', '\"Moby-Dick or, the Whale\" by Herman Melville is the epic tale of Captain Ahabs obsessive quest for revenge against the giant white whale that bit off his leg.', 'reserved'),
(5, 'Pride and Prejudice', 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781524861759/pride-and-prejudice-9781524861759_hr.jpg', 9780141439518, 'Book', 'Jane', 'Austen', 'T. Egerton', 'Whitehall, London, UK', '0000', 'An unsettling story about a mysterious apartment where occupants disappear without a trace.', 'available'),
(6, 'The Catcher in the Rye', 'https://blog.mulerasfireplace.com/userfile/userupload/324/20589-IMG_5690.jpg', 9780316769488, 'Book', 'Jerome David', 'Salinger', 'Little, Brown and Company', 'New York, NY', '1951', 'In Avis heartwarming childrens novel, \"Poppy and Rye,\" readers are transported into the enchanting world of Dimwood Forest, where animals live and thrive. This delightful tale follows the adventures and challenges faced by Poppy, a courageous and determin', 'reserved'),
(7, 'The Hobbit', 'http://1.bp.blogspot.com/-tz40y0OlrCc/VGfG-NmL_AI/AAAAAAAAAJg/JVArqytkaOE/s1600/81Dd%2BimpKAL.jpg', 9780345339683, 'Book', 'John Ronald Reuel', 'Tolkien', 'George Allen & Unwin', '8 North Street,London, UK', '1937', 'Bilbo Baggins, a reluctant hobbit, embarks on an unexpected adventure with a group of dwarves to reclaim their homeland from the dragon Smaug.', 'available'),
(8, 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe', 'https://cdn.kobo.com/book-images/92cc43f2-0709-4e8e-9128-2cb2fc0c93fc/1200/1200/False/the-lion-the-witch-and-the-wardrobe-the-chronicles-of-narnia-book-2.jpg', 9780064471190, 'Book', 'Clive Staples', 'Lewis', 'Geoffrey Bles', 'London, UK', '1950', 'Children stumble upon a magical wardrobe that leads them to a fantastical world called Narnia, where they must fight against an evil witch and aid a talking lion.', 'available'),
(9, 'Brave New World', 'https://diwanegypt.com/wp-content/uploads/2020/08/9780099477464.jpg', 9780060850524, 'Book', 'Aldous', 'Huxley', 'Chatto & Windus', '153 Manchester Road, London, UK', '1932', 'Aldous Huxleys \"Brave New World / Brave New World Revisited\" explores a dystopian future where technological advancements and societal control create an ostensibly utopian society that ultimately suppresses individuality and freedom.', 'available'),
(10, 'The Lord of the Rings: The Fellowship of the Ring', 'https://i.redd.it/yws7wxec16z41.jpg', 9780261103573, 'Book', 'John Ronald Reuel', 'Tolkien', 'George Allen & Unwin', '8 North Street,London, UK', '1954', 'Sauron, the Dark Lord, has gathered to him all the Rings of Power - the means by which he intends to rule Middle-earth. All he lacks in his plans for dominion is the One Ring - the ring that rules them all - which has fallen into the hands of the hobbit, ', 'reserved'),
(11, 'Inception', 'http://www.aceshowbiz.com/images/still/inception_poster16.jpg', 9780555176, 'DVD', 'Christopher', 'Nolan', 'Warner Bros.', 'USA', '2010', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O., but his tragic past may doom the project and his team to disaster.', 'available'),
(12, 'The Matrix', 'https://picfiles.alphacoders.com/385/385304.jpg', 980004132, 'DVD', 'Lana', ' Wachowski', 'Warner Bros.', 'USA', '1999', 'When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.', 'reserved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN_code` (`ISBN_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
