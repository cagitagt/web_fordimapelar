-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2026 at 06:22 AM
-- Server version: 8.0.44
-- PHP Version: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fordimapelar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_cabinets`
--

CREATE TABLE `about_cabinets` (
  `id` bigint UNSIGNED NOT NULL,
  `cabinet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabinet_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabinet_ebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabinet_visual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_profile_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabinet_narrative` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `chairman_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chairman_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chairman_narrative` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabinet_vision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabinet_mission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabinet_structure_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_cabinets`
--

INSERT INTO `about_cabinets` (`id`, `cabinet_name`, `cabinet_year`, `cabinet_ebook`, `cabinet_visual`, `company_profile_link`, `cabinet_narrative`, `chairman_name`, `chairman_photo`, `chairman_narrative`, `cabinet_vision`, `cabinet_mission`, `cabinet_structure_img`, `created_at`, `updated_at`) VALUES
(1, 'Karsa Wiyata', '2026', 'https://drive.google.com/file/d/1mWYc4szpLi5nq8ff0f8J3WzU37Az5bMm/view?usp=sharing', '01M01MJ4MZQBGN0E8STYFEMESH.jpeg', NULL, '<p>Kabinet Forum Studi Pengembang Penalaran<strong> Universitas Brawijaya 2025 </strong>bernama \"Dharma Utthita\" yang diambil dari bahasa Sansekerta yang berarti \"Kebangkitan Kebenaran\". Sesuai nama kabinet kami, kami berharap bahwa kami dapat membangkitkan Fordi Mapelar UB untuk terus memperjuangkan kebenaran. Prinsip ini selaras pula dengan semboyan kami \"Nalar Hasta Terusing Budi\" yang berarti bernalar, berkarya, menganalisa pikiran adalah kelanjutan dari budi yang arif untuk membentuk manusia seutuhnya sesuai dengan hakikat manusia.</p>', 'Muhammad Ghazy Humaidi', '01KZZPSMXH258A7NP9N864CQG6.JPG', '<p><strong>Halo</strong></p><p><em>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At dolorem voluptatem recusandae voluptates voluptatibus est accusantium quis veniam obcaecati ratione, nihil maiores aut iste magni tenetur praesentium consequuntur doloremque vel neque saepe! Aspernatur, veniam dolor. Ex impedit ad placeat r</em></p>', 'Terwujudnya Fordi Mapelar sebagai Poros Dialektika Mahasiswa yang Kritis, Berkualitas, dan Inklusif, dengan Berpegang Teguh pada Landasan Konstitusional Organisasi dan Budaya Keilmuan yang Konkret guna meningkatkan intelektualitas mahasiswa.', '<p>Mengoptimalkan tata kelola organisasi yang rapi, transparan, dan akuntabel melalui perbaikan alur komunikasi dan digitalisasi arsip guna mengakomodasi kebutuhan sumber daya yang sistematis.</p><p>Memaksimalkan penyebaran produk pemikiran mahasiswa, baik berupa publikasi ilmiah maupun konten kreatif, sebagai wujud apresiasi nyata terhadap karya anggota.</p><p>Membangun sistem kaderisasi yang terintegrasi untuk menanamkan nilai ke-Fordi-an, serta memberikan peta jalan pengembangan yang jelas bagi setiap anggota sejak awal bergabung.</p><p>Mewadahi aktualisasi potensi anggota melalui pendampingan kompetisi yang intensif atau pelatihan keahlian spesifik guna mencetak kader yang berkualitas.</p><p>&nbsp;</p>', '01KH80E4ASG4YN351NEE1PQQA2.jpeg', '2026-02-11 21:06:06', '2026-08-14 19:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `artworks`
--

CREATE TABLE `artworks` (
  `id` bigint UNSIGNED NOT NULL,
  `artwork_category_id` bigint UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artworks`
--

INSERT INTO `artworks` (`id`, `artwork_category_id`, `thumbnail`, `title`, `author_name`, `slug`, `content`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, '01KH7P2BHNKGWE666MYCQM9FQ1.jpeg', 'Hari Manis Cagita', 'Cagita Dian', 'hari-manis-cagita', '<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3>Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>', '09 Januari 2023', '2026-02-11 18:04:54', '2026-02-11 18:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `artwork_categories`
--

CREATE TABLE `artwork_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artwork_categories`
--

INSERT INTO `artwork_categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Cerpen', 'cerpen', '2026-02-11 17:20:18', '2026-02-11 17:20:18'),
(2, 'Puisi', 'puisi', '2026-02-11 18:09:12', '2026-02-11 18:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `news_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `news_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2026-02-11 16:55:37', '2026-02-11 16:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('fordimapelarub-cache-356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1786761573),
('fordimapelarub-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1786761573;', 1786761573),
('fordimapelarub-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1786774564),
('fordimapelarub-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1786774564;', 1786774564);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `name_dept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name_dept`, `image`, `description`, `created_at`, `updated_at`) VALUES
(5, 'Humaniora', '01KZZQJPWDDTQN1R2AN249EDRE.JPG', 'Departemen Humaniora merupakan departemen yang berfokus pada pengembangan kepekaan sosial, nilai-nilai kemanusiaan, serta kepedulian terhadap berbagai isu di masyarakat. Melalui berbagai program kerja, Departemen Humaniora  berupaya mendorong mahasiswa untuk lebih peka, kritis, dan aktif berkontribusi dalam kehidupan sosial. ', '2026-08-14 01:52:51', '2026-08-14 01:52:51'),
(6, 'Sastra & Literasi', '01M010HBSARMX79PE652ZR2RSM.JPG', 'Sebagai departemen untuk membangun fondasi dialektika. Arah geraknya memiliki satu tujuan yaitu membangun input pengetahuan (budaya baca/literasi) dan mengelola output pemikiran (karya tulis). Literasi juga merupakan media untuk menajamkan penalaran yang dibutuhkan untuk berdiskusi. Namun selain literasi, difokuskan juga pelatihan lisan dan pembuatan karya.', '2026-08-14 13:48:38', '2026-08-14 13:48:38'),
(7, 'Eksternal', '01M010XT1HF16NP0MXBS9J9QKT.JPG', 'Departemen Eksternal memiliki tugas dan peran penting dalam menjalin hubungan dengan pihak-pihak eksternal, baik dari dalam maupun luar organisasi. Dengan visi untuk memperkuat citra organisasi serta misi membangun sinergi yang produktif. Melalui kegiatan eksternal, departemen ini membantu meningkatkan citra organisasi, mendukung keberlanjutan program, dan membuka peluang kolaborasi untuk perkembangan UKM ke depan.', '2026-08-14 13:55:26', '2026-08-14 13:55:26'),
(8, 'Media & Informasi', '01M0115K6KGTT0DBS70F2NBBYG.JPG', 'Departemen Medinfo adalah Departemen yang bertanggung jawab atas pengelolaan publikasi, dokumentasi dan distribusi informasi terkait gagasan Fordi Mapelar yang bertugas mengemas, menyebarkan, dan mengarsipkan seluruh aktivitas serta produk intelektual organisasi.\n', '2026-08-14 13:59:41', '2026-08-14 13:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `department_programs`
--

CREATE TABLE `department_programs` (
  `id` bigint UNSIGNED NOT NULL,
  `department_id` bigint UNSIGNED NOT NULL,
  `name_program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_programs`
--

INSERT INTO `department_programs` (`id`, `department_id`, `name_program`, `image`, `description`, `time_label`, `created_at`, `updated_at`) VALUES
(6, 5, 'Fordi Mengabdi ', '01KZZQW96VHG820HGN6YPGJW1S.jpg', 'Fordi Mengabdi merupakan program pengabdian kepada masyarakat sebagai implementasi Tri Dharma Perguruan Tinggi, khususnya pada aspek pengabdian. Kegiatan ini menjadi wujud kontribusi nyata Fordi Mapelar dalam menghadirkan edukasi yang ringan, aplikatif, dan memberdayakan nalar masyarakat. ', '-', '2026-08-14 01:55:35', '2026-08-14 01:59:37'),
(7, 5, 'Fordi Charity', '01KZZQTS7QKH2F948HDSVH1PZR.jpg', 'Fordi Charity dihadirkan sebagai wujud kepedulian nyata melalui aksi sosial dan penyaluran bantuan langsung kepada masyarakat yang membutuhkan. Program ini menjadi bentuk nyata semangat berbagi, empati, dan solidaritas dalam membangun kepedulian sosial di tengah masyarakat.', '-', '2026-08-14 01:57:15', '2026-08-14 01:57:15'),
(8, 5, 'Simpul Nalar', '01KZZQXTMSG7S4NKF9TR8DFVYA.jpg', 'Simpul Nalar merupakan kegiatan yang membahas dan mendiskusikan berbagai isu yang sedang hangat guna membangun daya kritis mahasiswa serta mengembangkan kemampuan penalaran dalam melihat dan memahami berbagai permasalahan secara lebih mendalam. ', '-', '2026-08-14 01:58:55', '2026-08-14 01:58:55'),
(9, 5, 'Social Action Day', '01M010D0FQCAVG0G6TKPQXWR8T.jpg', 'Social Action Day adalah kegiatan menumbuhkan kepedulian serta partisipasi aktif mahasiswa terhadap lingkungan dan ruang publik sebagai bagian dari ekosistem sosial, sehingga tercipta keseimbangan antara kepedulian terhadap manusia dan keberlanjutan lingkungan', '-', '2026-08-14 13:46:16', '2026-08-14 13:46:16'),
(10, 5, 'Fordi Berprestasi', '01M010EFPWP1E75MME2DGVRAHP.jpg', 'Fordi Berprestasi merupakan program yang memberikan ruang apresiasi bagi anggota yang berprestasi untuk berbagi pengalaman dan motivasi, sehingga dapat menginspirasi serta mendorong anggota lainnya untuk terus berkembang dan meraih prestasi.', '-', '2026-08-14 13:47:04', '2026-08-14 13:47:04'),
(11, 6, 'Sharelis (Sharing Menulis)', '01M010N1E21SF9DWR32KM4V6Q9.jpg', 'Kegiatan pembuatan karya sastra literasi dan seni secara rutin yang nantinya akan dievaluasi melalui peer review ataupun expert review.', '-', '2026-08-14 13:50:39', '2026-08-14 13:50:39'),
(12, 6, 'Workshop Kepenulisan', '01M010P7CETW4R6XPYMAJT4ZX7.jpg', 'Kegiatan workshop dengan pemateri untuk meningkatkan kemampuan Kepenulisan.', '-', '2026-08-14 13:51:18', '2026-08-14 13:51:18'),
(13, 6, 'Pustaka Rakyat', '01M010QFGV9QFYEBR3E4HX093S.jpg', 'Kegiatan baca buku bersama, gelar karya sastra dan seni, dan pengumpulan buku bekas untuk didonasikan atau di jual belikan.', '-', '2026-08-14 13:51:59', '2026-08-14 13:51:59'),
(14, 6, 'A story of Hope (SoH)', '01M010RPWMC9PP47VGJ58RGCVF.jpg', 'Pembuatan novel / cerita dari semua anggota fordi mapelar lalu pihak lain yang memberi dampak signifikan untuk pembaca.', '-', '2026-08-14 13:52:39', '2026-08-14 13:52:39'),
(15, 6, 'Foruminate', '01M010VM4G6WK53WXRNRH0W67G.jpg', 'Kegiatan podcast dan video edukasi dari pembedahan buku atau kepenulisan dengan topik pendidikan, isu, dan trend. (Kerjasama dengan ULTKSP jika memungkinkan dan kita ngobrol dengan ahlinya (apapun itu) atau berkaitan dengan psikologi, filsafat, dan politik. Climate change, sampah, banjir, kemacetan lalu lintas.)', '-', '2026-08-14 13:54:14', '2026-08-14 13:54:14'),
(16, 7, 'Jejaring Fordi', '01M010Z81WT2SY994TZN3NQRJ9.jpg', 'Jejaring Fordi merupakan program pendataan dan pengelolaan relasi eksternal UKM Fordi Mapelar yang mencakup UKM dan LKM, komunitas literasi, serta pihak lain yang berpotensi menjadi mitra kolaborasi. Kegiatan ini bertujuan untuk membangun database relasi yang terstruktur dan berkelanjutan.', '-', '2026-08-14 13:56:13', '2026-08-14 13:56:13'),
(17, 7, 'Sambang Purna', '01M0110DKEXGE671WMCCS6JQSW.jpg', 'Sambang Purna merupakan program visitasi dan komunikasi dengan alumni UKM Fordi Mapelar sebagai upaya menjalin hubungan kelembagaan serta menggali pengalaman, wawasan, dan kontribusi alumni dalam mendukung keberlanjutan dan pengembangan organisasi.', '-', '2026-08-14 13:56:52', '2026-08-14 13:56:52'),
(18, 7, 'Kelana', '01M0111APMR50YW1JZGB0B5MJ1.jpg', 'Kelana merupakan program studi banding atau visitasi dan kolaborasi yang dilakukan oleh UKM Fordi Mapelar dengan organisasi atau UKM sejenis, guna bertukar wawasan terkait sebuah isu ataupun manajemen organisasi.', '-', '2026-08-14 13:57:21', '2026-08-14 13:57:21'),
(19, 7, 'Open House Raja Brawijaya', '01M01125XNZDH7B8PQ4Y7JZZKA.jpg', 'Kampanye Open House Raja Brawijaya merupakan program promosi dan sosialisasi UKM Fordi Mapelar kepada calon mahasiswa baru melalui kegiatan Open House Universitas Brawijaya. Kegiatan ini bertujuan untuk memperkenalkan profil, program, dan kegiatan UKM Fordi Mapelar secara langsung kepada mahasiswa baru.', '-', '2026-08-14 13:57:49', '2026-08-14 13:57:49'),
(20, 7, 'Seminar Nasional', '01M01146F1WNXEFNX1MFWNW7AP.jpg', 'Seminar Nasional Fordi Mapelar merupakan kegiatan ilmiah yang menghadirkan narasumber kompeten untuk membahas isu-isu aktual. Kegiatan ini dilaksanakan sebagai bentuk kontribusi UKM Fordi Mapelar dalam pengembangan wawasan akademik serta perluasan jejaring eksternal.', '-', '2026-08-14 13:58:55', '2026-08-14 13:58:55'),
(21, 8, 'Website Fordi Mapelar', '01M0117PMRZ57EKVCYR12DKGQB.jpg', 'Website Fordi Mapelar adalah media pustaka digital sebagai tempat untuk menyebarkan informasi dan publikasi karya Fordi Mapelar.', '-', '2026-08-14 14:00:50', '2026-08-14 14:00:50'),
(22, 8, 'Merch Fordi Mapelar', '01M01192TJ6V8E9Y3N0WX7T6R1.jpg', 'Merch Fordi Mapelar sebagai salah satu upaya penambahan dana UKM.', '-', '2026-08-14 14:01:35', '2026-08-14 14:01:35'),
(23, 8, 'Fordi Insight', '01M011A5S1T1M266G4570GEF5G.jpg', 'Fordi Insight adalah konten edukasi hasil dari diskusi/kajian/buku/film/dsb yang dapat menambah wawasan untuk kawan Fordi.', '-', '2026-08-14 14:02:11', '2026-08-14 14:02:11'),
(24, 8, 'Publikasi Media Sosial', '01M011B5CP1T94QENRZ0A84WR9.jpg', 'Publikasi Media Sosial adalah pengelolaan media sosial seperti instagram, youtube, tik tok, dsb oleh departemen medinfo guna menyebarluaskan informasi, dokumentasi, publikasi, dan gagasan Fordi Mapelar', '-', '2026-08-14 14:02:44', '2026-08-14 14:02:44'),
(25, 8, 'Isu Fordi', '01M011CFHWZT832FT1YYSWVAPA.jpg', 'Isu Fordi adalah konten isu/berita terkini yang mendesak untuk segera diinformasikan baik dalam lingkup kampus, wilayah, dan nasional.', '-', '2026-08-14 14:03:27', '2026-08-14 14:03:27'),
(26, 8, 'E-Booklet', '01M011DKAJYH1DY6Q5R29GQBTN.jpg', 'E-Booklet sebagai profile publik UKM Fordi Mapelar periode 2026 Kabinet', '-', '2026-08-14 14:04:03', '2026-08-14 14:04:03'),
(27, 8, 'Pengadaan ID Card', '01M011EVJWJYN7QZQFNH7V40T3.jpg', 'Pengadaan ID Card sebagai identitas diri anggota Fordi Mapelar periode 2026', '-', '2026-08-14 14:04:45', '2026-08-14 14:04:45'),
(28, 8, 'Company Profile', '01M011FT552P90PP7R8JSWX837.jpg', 'Company Profile sebagai perkenalan jajaran pengurus Fordi Mapelar 2026 ', '-', '2026-08-14 14:05:16', '2026-08-14 14:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `external_settings`
--

CREATE TABLE `external_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `invitation_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact1_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact2_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact1_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact2_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internal_terms_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_terms_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_form_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `external_settings`
--

INSERT INTO `external_settings` (`id`, `invitation_url`, `contact1_name`, `contact2_name`, `contact1_link`, `contact2_link`, `internal_terms_url`, `external_terms_url`, `terms_form_url`, `created_at`, `updated_at`) VALUES
(1, 'https://cagitadiandev.vercel.app/', 'Cagita', 'Melur Putri', 'https://cagitadiandev.vercel.app/', 'https://cagitadiandev.vercel.app/', 'https://cagitadiandev.vercel.app/', 'https://cagitadiandev.vercel.app/', 'https://forms.gle/dhvrwf55vE2Gyc647', NULL, '2026-02-16 04:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '01KH0MVC6SNP50BHMRNHTKAJTG.jpeg', 'Example 1', 'sdc dc ', '2026-02-09 00:28:56', '2026-02-09 00:29:23'),
(4, '01KHF7S9E5RBM9XK6SMT62F6SC.jpeg', 'Pariwisata', 'yeayy', '2026-02-14 16:29:13', '2026-02-14 16:29:13'),
(5, '01KHF88PMVHGQEQW34PBMQ906T.jpeg', 'Apa yahh', 'bingung sii', '2026-02-14 16:37:38', '2026-02-14 16:37:38'),
(6, '01KHG3A7A0857WXJB78BN9YP3X.png', 'Medinfo', 'hihihihihi', '2026-02-15 00:30:19', '2026-02-15 00:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_02_07_094701_create_galleries_table', 1),
(5, '2026_02_07_095203_create_photobooth_frames_table', 1),
(6, '2026_02_07_100642_create_about_cabinets_table', 1),
(7, '2026_02_07_101439_create_external_settings_table', 1),
(8, '2026_02_07_104933_create_news_categories_table', 1),
(9, '2026_02_07_105137_create_news_table', 1),
(10, '2026_02_07_110333_create_artwork_categories_table', 1),
(11, '2026_02_07_110539_create_artworks_table', 1),
(12, '2026_02_07_111248_create_departments_table', 1),
(13, '2026_02_07_111701_create_department_programs_table', 1),
(14, '2026_02_09_040208_create_banners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `news_category_id` bigint UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_category_id`, `thumbnail`, `title`, `author_name`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, '01KH7GCTXX5HHYNKHMSXCSX8NE.jpeg', 'Bertemu bersama duduk baca', 'Cagita Dian', 'bertemu-bersama-duduk-baca', '<h2>HARI INI AKU MAU MAKAN</h2><p>cnskjnjcsbc j jbjhsvdhvc ghsjgbc g c hsdgckj&nbsp; hyudsgc ds cgsdj csd gcsd cgsduhuc sd dcghsd gc sdhcg jhsdcjhgsdhc sgdc sdhyc sd cgsdc s csdgc gc sdc gsdyuc ghjsdgc hsdc sydgcyg sjcgsdh chsdgch sd csdgh chsdg cgs chsd cghsdf chfsd csdhgcghsd chgsdf csdhc hgsdfhc sd c sdhfcghsdfgcfsd c sdghfcghsdfgchfsdfcgh sfdghc&nbsp; gsdfc</p><p><br></p>', '2026-02-11 16:25:46', '2026-02-11 16:25:46'),
(2, 2, '01KHFFW554XJGWPEXZ334P2K8A.webp', 'Karikatur ChatGPT Melejit di Indonesia: Tren Baru di Media Sosial', 'Aliyah', 'karikatur-chatgpt-melejit-di-indonesia-tren-baru-di-media-sosial', '<p>peningkatan yang signifikan. Dari 2 hingga 8 Februari 2026, ada kenaikan penggunaan fitur ini sebesar 73,2 persen dibandingkan dengan periode yang sama di bulan Januari. Hal ini menunjukkan bahwa semakin banyak pengguna yang memanfaatkan teknologi ini untuk menciptakan karya visual yang unik.</p><h3>Potensi Kreativitas Pengguna</h3><p>Fitur pembuatan karikatur ini memberikan potensi kreatif yang sangat besar bagi pengguna. Mereka bisa mendeskripsikan diri mereka dalam berbagai cara, baik sebagai profesional maupun karakter fantasi. Ini memungkinkan ekspresi individu yang lebih beragam, serta merangsang imajinasi dan inovasi di kalangan pengguna.</p><p><br></p>', '2026-02-14 18:50:35', '2026-02-14 18:50:35'),
(3, 2, '01KHFFY527W7SEF44H0N7ZSFST.webp', 'WhatsApp Web Punya Fitur Panggilan Suara dan Video, Bagaimana Caranya?', 'Cagita Dian', 'whatsapp-web-punya-fitur-panggilan-suara-dan-video-bagaimana-caranya', '<p>Saat ini, fitur panggilan suara dan video di WhatsApp Web sedang diujicobakan kepada pengguna yang terdaftar dalam program beta.</p><p>Belum semua pengguna dapat mengakses fitur ini, namun diharapkan dalam waktu dekat, lebih banyak pengguna akan dapat menikmati ketersediaan panggilan melalui web.</p><p>Salah satu keuntungan utama menggunakan WhatsApp Web adalah kemudahan akses. Pengguna tidak perlu menginstal aplikasi tambahan dan dapat langsung melakukan panggilan melalui browser.</p>', '2026-02-14 18:51:41', '2026-02-14 18:51:41'),
(4, 1, '01KHFG0VTXAT5DJDM3F2H9YEW1.webp', 'Menkes: Pemerintah Siap Putihkan Piutang BPJS Kesehatan Sebesar Rp26,47 Triliun', 'Sawit', 'menkes-pemerintah-siap-putihkan-piutang-bpjs-kesehatan-sebesar-rp2647-triliun', '<p>al piutang yang tidak tertagih dalam sistem BPJS Kesehatan mencapai Rp26,47 triliun. Angka ini mencerminkan realitas bahwa lebih dari 63 juta peserta tidak aktif sepanjang tahun 2026. Angka ini menunjukkan angka kenaikan sekitar 14 juta dari 2025.</p><p>Dalam data yang telah dihimpun, terdapat dua kategori peserta nonaktif: yang menunggak pembayaran iuran dan yang mengalami mutasi atau berpindah kategori.</p><p>Dari segi jumlah, kategori penerima bantuan iuran (PBI) paling banyak tidak aktif, mencapai 16,9 juta peserta. Sementara itu, Pekerja Bukan Penerima Upah (PBPU) tercatat memiliki jumlah nonaktif sebanyak 13,8 juta peserta.</p><p>Perbandingan yang lebih rinci menunjukkan bahwa, meskipun PBI memiliki jumlah peserta nonaktif tertinggi, nilai tunggakan terbesar justru berasal dari PBPU</p>', '2026-02-14 18:53:09', '2026-02-14 18:53:09'),
(5, 2, '01KHFG2E28GSDEAGM2B4N9B8B7.webp', 'Menteri Trenggono Skakmat Menteri Purbaya Soal Dana Pembangunan Kapal: Bersumber dari Pinjaman Inggris', 'Aliyah', 'menteri-trenggono-skakmat-menteri-purbaya-soal-dana-pembangunan-kapal-bersumber-dari-pinjaman-inggris', '<p>Di unggahannya, Trenggono turut menyertakan tangkapan layar foto Purbaya. Di dalamnya juga ditambahkan narasi tulisan komentar Purbaya soal anggaran kapal yang sudah cair, namun industri dalam negeri belum menerima pesanan.</p><h2>Respons Purbaya Terkait Anggaran Kapal</h2><p>Pernyataan Trenggono ini sebagai respons terhadap pernyataan Purbaya pada agenda diskusi yang digelar Kamar Dagang dan Industri (Kadin) Indonesia di Jakarta Selasa, 10 Februari 2026.</p><p>Dalam acara tersebut, Purbaya menekankan pentingnya penguatan industri perkapalan nasional. Ia juga menyoroti bahwa Indonesia memiliki sumber daya manusia mumpuni, tetapi industri galangan kapal belum berkembang optimal akibat minimnya&nbsp;</p>', '2026-02-14 18:54:01', '2026-02-14 18:54:01'),
(6, 1, '01KHFG3KM5NWHHG42XB9X35X6H.webp', 'Mantan Kapolres Bima Kota Resmi Jadi Tersangka Kasus Narkoba', 'Bima', 'mantan-kapolres-bima-kota-resmi-jadi-tersangka-kasus-narkoba', '<p>UU RI No. 1 tahun 2023 tentang KUHP Jo UU RI No. 1 thn 2026 tentang penyesuaian pidana dan Pasal 62 UU RI No.5 tahun 1997 ttg psikotropika Jo lampiran 1 nomor urut 9 UU RI No. 1 thn 2026 tentang penyesuaian pidana kepada tersangka AKBP. Didik Putra Kuncoro,\" jelasnya.</p><h2>Penemuan Barang Bukti</h2><h3>Lokasi Penemuan Koper Berisi Narkoba</h3><p>Koper berisi narkoba yang mengaitkan Didik ditemukan di kediaman Aipda Dianita, di Perumahan Cluster Grande Karawaci, Tangerang, Banten. Penemuan in</p>', '2026-02-14 18:54:39', '2026-02-14 18:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Event', 'event', '2026-02-10 23:54:23', '2026-02-10 23:54:23'),
(2, 'Politik', 'politik', '2026-02-10 23:54:46', '2026-02-10 23:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photobooth_frames`
--

CREATE TABLE `photobooth_frames` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frame` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photobooth_frames`
--

INSERT INTO `photobooth_frames` (`id`, `title`, `frame`, `created_at`, `updated_at`) VALUES
(1, 'trial', '01KH0NH0SRTD7QA592GV4VM2BY.png', '2026-02-09 00:40:45', '2026-02-09 00:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ASzNLnXBQxXdtYCLZahxSUoCQjgW8TjrFzhluShH', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/151.0.0.0 Safari/537.36 Edg/151.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiR1d0M1BoTmRxcHg5OHJYM0plZ2dGaXBrNVp4U1BJWUNMd1lYTUZEZCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vd2ViX2ZvcmRpbWFwZWxhci50ZXN0L2Zhdmljb24uaWNvIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjY0OiI1ZmY0MmE0MTgwN2JhNjdhNTEyYTU4OWY1MTZkZTM5NTRiNDNiMzkwZjU2ZDY1YzJhYzNiYTM0MmY5NzMxZTg5Ijt9', 1786774845),
('Bdd7sRYxr8XJ8TUJegLWekhfbWuN93cF5CcVzmGU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.24.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOTFNZ3FhUlkxck9OYVEwNWN4d1JRYmZQd0dQR3E0dVhvakxRTjNNcSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd2ViX2ZvcmRpbWFwZWxhci50ZXN0Lz9oZXJkPXByZXZpZXciO3M6NToicm91dGUiO3M6NToiaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1786773616),
('djnI9kXad5vUFHn4EkCbEr1zX3pZiwYWk4ioFacf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.24.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGdYSFJmd0VYWFY1QzRMaE93Z3lNMU5tTHIyb0lITlJPYkkxblBESSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd2ViX2ZvcmRpbWFwZWxhci50ZXN0Lz9oZXJkPXByZXZpZXciO3M6NToicm91dGUiO3M6NToiaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1786773100),
('Ir5f4wiQTcgqPJ6rdJ3N9v9vaw1RGQKx2Cq55XVr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.24.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2RkSE1kUnZpTG1USGFpSlZJTTFPaUFoUUp0SHZCVlI3dUszU2FpdyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd2ViX2ZvcmRpbWFwZWxhci50ZXN0Lz9oZXJkPXByZXZpZXciO3M6NToicm91dGUiO3M6NToiaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1786772025),
('rewis1SpNSTihOXwGXtzfbxhOOIPIstzzyk3TrkZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.24.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUkyTkhUdFdVdW1kUHpFc1pYekhHVGZFUzQwU3I1elZUVjdPcDVvOCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd2ViX2ZvcmRpbWFwZWxhci50ZXN0Lz9oZXJkPXByZXZpZXciO3M6NToicm91dGUiO3M6NToiaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1786772098),
('ubyW5DZiFrCsrgRKgrXu94lHZHqhPdiaD9WuU9Nn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.24.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlJlMmlENVhzY1NwUTVhR0s4RDQxcVBMc2tQdTRNczR3TE5HTVJXSiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd2ViX2ZvcmRpbWFwZWxhci50ZXN0Lz9oZXJkPXByZXZpZXciO3M6NToicm91dGUiO3M6NToiaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1786771621),
('wj0PlpXMFQU3Z3K0kg2ergjB5tdposm3rmd9xblI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.24.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3RLaU91Q1lpeHdyWHFMY0NMaTVJdkZwdmZhSUFSbVR2MGNNNXFCTiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd2ViX2ZvcmRpbWFwZWxhci50ZXN0Lz9oZXJkPXByZXZpZXciO3M6NToicm91dGUiO3M6NToiaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1786772007),
('ZZ0lBl6O6DjEjhUJbU8PBW2PBFchPrKw5Fuj7JI1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.24.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkcwUHN4TEVvS0t1eEVXcnlKT0prQlBpVFN1VlZRU1RnRGZyNzBtdyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd2ViX2ZvcmRpbWFwZWxhci50ZXN0Lz9oZXJkPXByZXZpZXciO3M6NToicm91dGUiO3M6NToiaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1786773919);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fordimapelarbrawijaya', 'fmapelarub@gmail.com', NULL, '$2y$12$t6bzpLrAAD8cq5ii.xwm1.Hz69QaliExDQcWuGS8oTN6mZ87ApRkC', NULL, '2026-02-09 00:02:06', '2026-02-20 00:38:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_cabinets`
--
ALTER TABLE `about_cabinets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artworks_slug_unique` (`slug`),
  ADD KEY `artworks_artwork_category_id_foreign` (`artwork_category_id`);

--
-- Indexes for table `artwork_categories`
--
ALTER TABLE `artwork_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artwork_categories_slug_unique` (`slug`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_news_id_foreign` (`news_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_dept_unique` (`name_dept`);

--
-- Indexes for table `department_programs`
--
ALTER TABLE `department_programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `department_programs_name_program_unique` (`name_program`),
  ADD KEY `department_programs_department_id_foreign` (`department_id`);

--
-- Indexes for table `external_settings`
--
ALTER TABLE `external_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`),
  ADD KEY `news_news_category_id_foreign` (`news_category_id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_categories_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `photobooth_frames`
--
ALTER TABLE `photobooth_frames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_cabinets`
--
ALTER TABLE `about_cabinets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artworks`
--
ALTER TABLE `artworks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artwork_categories`
--
ALTER TABLE `artwork_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department_programs`
--
ALTER TABLE `department_programs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `external_settings`
--
ALTER TABLE `external_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photobooth_frames`
--
ALTER TABLE `photobooth_frames`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artworks`
--
ALTER TABLE `artworks`
  ADD CONSTRAINT `artworks_artwork_category_id_foreign` FOREIGN KEY (`artwork_category_id`) REFERENCES `artwork_categories` (`id`);

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`);

--
-- Constraints for table `department_programs`
--
ALTER TABLE `department_programs`
  ADD CONSTRAINT `department_programs_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_news_category_id_foreign` FOREIGN KEY (`news_category_id`) REFERENCES `news_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
