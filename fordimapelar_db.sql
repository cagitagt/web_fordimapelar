-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2026 at 07:03 AM
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
(1, 'APA YAHH', '2026', 'https://cagitadiandev.vercel.app/', '01KHFC1VDHG4HK93AW70P1ZA3D.png', 'https://www.youtube.com/embed/jAYviJQYcAo', '<p><br></p><p><br></p><p>Kabinet Forum Studi Pengembang Penalaran<strong> Universitas Brawijaya 2025 </strong>bernama \"Dharma Utthita\" yang diambil dari bahasa Sansekerta yang berarti \"Kebangkitan Kebenaran\". Sesuai nama kabinet kami, kami berharap bahwa kami dapat membangkitkan Fordi Mapelar UB untuk terus memperjuangkan kebenaran. Prinsip ini selaras pula dengan semboyan kami \"Nalar Hasta Terusing Budi\" yang berarti bernalar, berkarya, menganalisa pikiran adalah kelanjutan dari budi yang arif untuk membentuk manusia seutuhnya sesuai dengan hakikat manusia.</p>', 'sapa yahh', '01KHFC1VDWRM9HCMBS4J5W0CB2.png', '<p><strong>Halo</strong></p><p><em>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At dolorem voluptatem recusandae voluptates voluptatibus est accusantium quis veniam obcaecati ratione, nihil maiores aut iste magni tenetur praesentium consequuntur doloremque vel neque saepe! Aspernatur, veniam dolor. Ex impedit ad placeat r</em></p>', 'Membangun UKM Fordi Mapelar sebagai ruang kolaborasi yang inklusif, kritis, dan inovatif untuk menghasilkan ide-ide solutif dan aplikatif serta meningkatkan daya saing intelektual mahasiswa.', '<p>Mengoptimalkan pengelolaan manajemen organisasi guna mengakomodasi kebutuhan beserta sumber daya yang sistematis</p><p>Menggencarkan budaya literasi serta berpikir kritis, analitis, dan kreatif dalam setiap kegiatan organisasi melalui pengadaan forum diskusi tematik, pengkajian, serta pelatihan pengembangan pemberdayaan anggota Mendorong kolaborasi dan jaringan kemitraan dengan pihak-pihak terkait guna terciptanya transfer keilmuan dan koordinasi yang konstruktif</p><p>Mengintensifkan publikasi ilmiah, kampanye sosial, dan hasil diskusi kajian secara masif dan konsisten guna mengapresiasi kontribusi anggota dengan baik</p>', '01KH80E4ASG4YN351NEE1PQQA2.jpeg', '2026-02-11 21:06:06', '2026-02-15 01:19:34');

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
('fordimapelarub-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1771553836),
('fordimapelarub-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1771553836;', 1771553836);

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
(1, 'Sastra Literasi', '01KH7S9KHKZDAX2SG2CBZ0C7GN.JPG', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam quos nostrum, unde autem perferendis rerum? Tempore, excepturi est sit illo voluptate tenetur fuga delectus qui earum sunt fugiat repellat odit vero aut beatae sed inventore modi, error laboriosam maiores quia provident id! Architecto sapiente incidunt laudantium minima quidem eius sint.', '2026-02-11 19:01:18', '2026-02-11 19:01:18'),
(2, 'Eksternal', '01KH7T024EGDFN8SSRJKYQNWE7.jpeg', 'The classes in the Pages directory are used to customize the pages in the app that interact with your resource. They’re all full-page Livewire components that you can customize in any way you wish.\n\nHave you created a resource, but it’s not appearing in the navigation menu? If you have a model policy, make sure you return true from the viewAny() method.', '2026-02-11 19:13:33', '2026-02-11 19:13:33'),
(4, 'Internal', '01KHG5DT6CSKJJW4B7NDHVVNJ6.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam quos nostrum, unde autem perferendis rerum? Tempore, excepturi est sit illo voluptate tenetur fuga delectus qui earum sunt fugiat repellat odit vero aut beatae sed inventore modi, error laboriosam maiores quia provident id! Architecto ', '2026-02-15 01:07:14', '2026-02-15 01:07:14');

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
(1, 2, 'Pustaka Rakyat', '01KH7T4272AFTH0Y7EY9S3MY78.jpeg', 'Record titles\nA $recordTitleAttribute may be set for your resource, which is the name of the column on your model that can be used to identify it from others.\nFor example, this could be a blog post’s title or a customer’s name:', 'setiap minggu', '2026-02-11 19:15:45', '2026-02-11 19:15:45'),
(2, 1, 'Gatau', '01KHFE6DXPXSXNMV650Q758SN6.jpeg', 'dalah pokoknya nanti aku tanya ya', 'gatau asli', '2026-02-14 18:21:15', '2026-02-14 18:21:15'),
(3, 1, 'apayaaaa', '01KHFE9JK9BKGF608WQWF3N3PC.jpg', 'gatauuu woilahhhh nanti cari info aku', 'kapan kapan', '2026-02-14 18:22:58', '2026-02-14 18:22:58'),
(4, 2, 'apaya enaknya', '01KHG349C38ZCPTZVN1CB1RVBX.jpeg', 'enaknya apa yaa', 'gatau kapan kapan', '2026-02-15 00:27:05', '2026-02-15 00:27:05'),
(5, 4, 'Sambang Purna', '01KHG5G5QJ9NPYDCWT92NN3Z25.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam quos nostrum, unde autem perferendis rerum? Tempore, excepturi est sit illo voluptate tenetur fuga delectus qui earum sunt fugiat repellat odit vero aut beatae sed inventore modi, error laboriosam maiores quia provident id! Architecto ', '12 Agustus ', '2026-02-15 01:08:31', '2026-02-15 01:08:31');

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
('8pRa552ss1eWFKqrFUphX9T2biTg8Oc8Lt1ZnYfv', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36 Edg/145.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVTNHN21zeTRDZUNQZlROMmw0eEx1cUNNRVMxMmlqV2tzdkpEeDdMaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDQ6Imh0dHBzOi8vd2ViX2ZvcmRpbWFwZWxhci50ZXN0L2FkbWluL2FydHdvcmtzIjtzOjU6InJvdXRlIjtzOjM5OiJmaWxhbWVudC5hZG1pbi5yZXNvdXJjZXMuYXJ0d29ya3MuaW5kZXgiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjY0OiI4NTMxMjEyMjFmYmFmYjc4MzllMjAyOWE0NDNhYWNjZmUwNWJjZTU0ZWQxODFmNGM3ZmJlYzBiYTRmMGE2M2FhIjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1771570871),
('uPwSlFSSdtxbMzy6iiVumA7cHtgiCejYE0dscpzl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.24.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRUxwdm5GYUpHSTVrb3pvZWFzRkRqZ3FGZ1F0MXpFTnp5N3oxT29haCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd2ViX2ZvcmRpbWFwZWxhci50ZXN0Lz9oZXJkPXByZXZpZXciO3M6NToicm91dGUiO3M6NToiaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1771565204),
('va0GWewmSfewBdhLzUKd1tmAoiPsOav1zvpL0iDc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.24.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibE1aOWU5V1Uza2lGSE5Tazg4M1RVZ0hyTVBDY1o3Z2p6YUY0NFZTaSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd2ViX2ZvcmRpbWFwZWxhci50ZXN0Lz9oZXJkPXByZXZpZXciO3M6NToicm91dGUiO3M6NToiaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1771565927);

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
(1, 'fordimapelarbrawijaya', 'fmapelarub@gmail.com', NULL, '$2y$12$KQXjoJI0Uw3BOXCF.ArdceAp9HwQCwYspaX2Phvqo1AXE8RH0Mj4q', NULL, '2026-02-09 00:02:06', '2026-02-09 00:02:06');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_programs`
--
ALTER TABLE `department_programs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
