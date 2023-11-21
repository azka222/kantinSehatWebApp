-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2023 at 09:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userData`
--

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Caption` varchar(1000) NOT NULL,
  `qtt` int(3) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `menuType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`id`, `Name`, `Caption`, `qtt`, `Image`, `menuType`) VALUES
(1, 'Grilled Salmon', 'Nourish your body with our Grilled Salmon, a protein-rich choice, expertly seasoned and grilled to perfection.', 100, 'Images/Food/ikan.jpeg', 'Food'),
(2, 'Beef Kebab', 'Satisfy your hunger with our Beef Kebab, a flavorful and lean option served on skewers for guilt-free indulgence.', 100, 'Images/Food/kebab.jpeg', 'Food'),
(3, 'Meat Balls', 'Delight in our nutritious Meat Balls, made with meat and packed with flavor, a  treat for your taste buds.', 100, 'Images/Food/meatBalls.jpeg', 'Food'),
(4, 'Fresh Salad', 'Enhance your meal with our Fresh Salad, a crisp and nutrient-packed combination of greens and vegetables.', 100, 'Images/Food/salad.jpeg', 'Food'),
(20, 'Grilled Honey Chicken', 'Tender chicken breast marinated with honey and grilled to perfection, a lean and delicious protein source.', 100, 'Images/Food/grilledChicken.jpeg', 'Food'),
(21, 'Broccoli Cheese', 'Nutrient-rich broccoli and deliciously cheesy potatoes, a perfectly balanced and satisfying side dish.', 100, 'Images/Food/bakedBrocolli.jpeg', 'Food'),
(22, 'Mixed Vegetables', 'A vibrant medley of fresh vegetables, stir-fried expertly to preserve nutrients and flavor, a supremely wholesome choice', 100, 'Images/Food/mixVeg.jpeg', 'Food'),
(23, 'Vegetables Soup', 'Nourishing vegetable soup, lovingly filled with essential vitamins and antioxidants, an irresistibly comforting choice.', 100, 'Images/Food/soup.jpeg', 'Food'),
(24, 'Delicious Oatmeal', 'Hearty oatmeal goodness, a fiber-packed breakfast option for sustained energy and optimal digestive health.', 100, 'Images/Food/oatmeal.jpeg', 'Food'),
(25, 'Egg Filled Bread', 'Enjoy a protein-packed breakfast with our egg-filled bread, a satisfying and nutritious choice to kickstart your day', 100, 'Images/Food/roti.jpeg', 'Food'),
(26, 'Sauteed Chayote', 'Discover the health benefits of chayote in our sautéed dish. Low in calories and rich in essential nutrients.', 100, 'Images/Food/labu.jpeg', 'Food'),
(27, 'Gado Gado', 'Indulge in the vibrant flavors of Indonesia with our salad. Packed with fresh vegetables and a delectable peanut sauce,', 100, 'Images/Food/gado.jpeg', 'Food'),
(28, 'Ice Coconut', 'Energize your day with our Ice Coconut drink, a hydrating and tropical delight that\'s as healthy as it is delicious', 100, 'Images/Drink/esKelapa.jpeg', 'Drink'),
(29, 'Hot Tea', 'Unwind and boost your well-being with a cup of our Hot Tea, a soothing and antioxidant-rich beverage', 100, 'Images/Drink/tehHijau.webp', 'Drink'),
(30, 'Orange Juice', 'Revitalize your senses with our refreshing Orange Juice, bursting with natural vitamins and antioxidants', 100, 'Images/Drink/jusJeruk.webp', 'Drink'),
(31, 'Apple Juice', 'Experience the pure goodness of our Apple Juice, a naturally sweet and nutritious accompaniment to your meal.', 100, 'Images/Drink/jusApel.jpeg', 'Drink'),
(32, 'Pinapple Juice', 'Freshly squeezed pineapple juice, a tropical, vitamin C-rich, and incredibly refreshing thirst quencher.', 100, 'Images/Drink/pinappleJuice.webp', 'Drink'),
(33, 'Mineral Water', 'Pure and all-natural mineral water, your indispensable hydration source for a vibrant and healthy lifestyle.', 100, 'Images/Drink/mineralWater.jpeg', 'Drink'),
(34, 'Fresh Milk', 'Farm-fresh, creamy milk, a calcium-rich beverage for strong bones and optimal overall well-being', 100, 'Images/Drink/freshMilk.jpeg', 'Drink'),
(35, 'Avocado Juice', 'Creamy avocado blended into a refreshing and nutritious drink, rich in healthy fats and healthy vitamins', 100, 'Images/Drink/avocadoJuice.jpeg', 'Drink');

-- --------------------------------------------------------

--
-- Table structure for table `nonAdmin`
--

CREATE TABLE `nonAdmin` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nonAdmin`
--

INSERT INTO `nonAdmin` (`id`, `name`, `address`, `password`) VALUES
(19, 'Pongpet', 'Sandang', '$2y$10$YGeTZj2HYb8NLmWEYn.5ZOjFsngjq3LrMshjRIJdLhZGcOyrwoB1O'),
(20, 'Azka', 'Sandang', '$2y$10$33iDiBtcqJfAGy7AlEuSPut23CPghL3ZEe0dMjmPve6JaBcj2B5AG'),
(25, 'Arvyn', 'Sandang', '$2y$10$oB.LpXfzx7kspr7e5kj.seKhIqP9eFncvHBLJBiOx43M6YW0kuG3K'),
(26, 'Fadhil', 'Sandang', '$2y$10$yYUSHy4doSGn9NpW/ZyaHeggzoghWSNhWJQJZUFhT2krR0LGvmuui'),
(27, 'Rifa', 'Jl. Hatimu Nomor 16 Blok R Kota Jepang', '$2y$10$TIi7cTQQyF5aM0HmI1j4GutW8AO88fscRX7PoE2IdW0gjJ.nvyHDO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nonAdmin`
--
ALTER TABLE `nonAdmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `nonAdmin`
--
ALTER TABLE `nonAdmin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
