-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2025 at 08:45 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `room_number` int NOT NULL,
  `status` enum('vacant','occupied') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'vacant',
  `classification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `capacity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenities` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_number`, `status`, `classification`, `price`, `capacity`, `amenities`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 101, 'occupied', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(2, 102, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(3, 103, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(4, 104, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(5, 105, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(6, 106, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(7, 107, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(8, 108, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(9, 109, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(10, 110, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(11, 111, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(12, 112, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(13, 113, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(14, 114, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(15, 115, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(16, 116, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(17, 117, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(18, 118, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(19, 119, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(20, 120, 'vacant', 'Normal', 1200.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom', 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.', NULL, NULL),
(21, 201, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(22, 202, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(23, 203, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(24, 204, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(25, 205, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(26, 206, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(27, 207, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(28, 208, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(29, 209, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(30, 210, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(31, 211, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(32, 212, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(33, 213, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(34, 214, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(35, 215, 'vacant', 'Deluxe', 2500.00, '3', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.', NULL, NULL),
(36, 301, 'vacant', 'VIP Suite', 5000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(37, 302, 'vacant', 'VIP Suite', 5000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(38, 303, 'vacant', 'VIP Suite', 5000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(39, 304, 'vacant', 'VIP Suite', 5000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(40, 305, 'vacant', 'VIP Suite', 5000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(41, 306, 'vacant', 'VIP Suite', 5000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(42, 307, 'vacant', 'VIP Suite', 5000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(43, 308, 'vacant', 'VIP Suite', 5000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(44, 309, 'vacant', 'VIP Suite', 5000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(45, 310, 'vacant', 'VIP Suite', 5000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.', NULL, NULL),
(46, 401, 'vacant', 'Executive Suite', 7000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area, Work Desk', 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Perfect for business travelers, our Executive Suite provides a balance of productivity and relaxation.', NULL, NULL),
(47, 402, 'vacant', 'Executive Suite', 7000.00, '4', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Hot/Cold Shower, Living Area, Work Desk', 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Perfect for business travelers, our Executive Suite provides a balance of productivity and relaxation.', NULL, NULL),
(48, 501, 'vacant', 'Presidential Suite', 12000.00, '6', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Jacuzzi, Private Dining Area, 24/7 Butler Service', 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'The crown jewel of our hotel — a spacious suite with unmatched luxury, panoramic views, and personalized services.', NULL, NULL),
(49, 601, 'vacant', 'Honeymoon Suite', 9000.00, '2', 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Jacuzzi, Romantic Lighting, Private Balcony', 'https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80', 'Celebrate love in our Honeymoon Suite, designed to create unforgettable memories with romantic ambiance and luxurious touches.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_room_number_unique` (`room_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
