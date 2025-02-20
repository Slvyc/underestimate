-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2025 at 09:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ft_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_agenda` int(11) NOT NULL,
  `judul_agenda` varchar(255) NOT NULL,
  `masa_agenda` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `tahun_agenda`, `judul_agenda`, `masa_agenda`, `date`, `created_at`, `updated_at`) VALUES
(3, 2025, '23 Januari 2025 : Word Class Visiting Professor Fakultas Teknik Universitas Abulyatama', 'Kegiatan ini bekerja sama dengan The University of Tokyo', '2025-01-23', '2025-02-19 21:24:27', '2025-02-19 21:24:27'),
(4, 2025, 'Persamaan Persepsi Peningkatan Kinerja Dosen Fakultas Teknik Universitas Abulyatama', '13 Januari 2025, jam 10.30 WIB - selesai Tempat : ruang rapat rektorat Agenda Kegiatan : 1. Pengisian BKD dosen dan pemenuhan BKD Dosen FT-UNAYA 2. Peningkatan kinerja dosen melalui Percepatan LK dan Guru Besar', '2025-01-13', '2025-02-19 21:25:09', '2025-02-19 21:25:09'),
(5, 2024, 'Hari Permulaan Kuliah Semester Ganjil 2024/2025', '23 September', '2024-11-08', '2025-02-19 21:26:50', '2025-02-19 21:26:50'),
(6, 2024, 'PKKMB', 'September s.d Oktober', '2024-11-07', '2025-02-19 21:28:16', '2025-02-19 21:28:16'),
(7, 2024, 'Hari Permulaan Sidang Sarjana Sementer Ganjil 2024/2025', '30 September', '2024-11-06', '2025-02-19 21:28:45', '2025-02-19 21:28:45'),
(8, 2024, 'Perubahan KRS Online', '7 Oktober s.d 12 Oktober', '2024-11-05', '2025-02-19 21:29:17', '2025-02-19 21:29:17'),
(9, 2024, 'Periode Ujian Tengah Semester', '25 November s.d 30 November', '2024-11-03', '2025-02-19 21:29:45', '2025-02-19 21:29:45'),
(10, 2024, 'Jadwal Periode Wisuda 2024', 'Desember', '2024-11-01', '2025-02-19 21:31:02', '2025-02-19 21:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_news` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `title`, `description`, `image_news`, `date`, `created_at`, `updated_at`) VALUES
(5, 'World Class, Visiting Professor FT-UNAYA', 'Universitas Abulyatama, 23 Januari 2025 – Dalam upaya untuk meningkatkan kapasitas dan wawasan akademik di bidang energi terbarukan, Fakultas Teknik Universitas Abulyatama mengadakan kegiatan visiting professor dengan menghadirkan Prof. Muhammad Aziz dari University of Tokyo.\n\nAcara ini mengusung tema (Research and Development on Renewable Energies), yang diadakan melalui Zoom Meeting pada tanggal 23 Jnauari 2025 dan dimulai pada pukul 09.30 WIB. Kegiatan ini bertujuan untuk mendekatkan para akademisi dan mahasiswa dengan perkembangan terkini dalam penelitian dan pengembangan energi terbarukan, yang semakin relevan dan penting bagi keberlanjutan lingkungan serta perekonomian global.\n\nPembukaan acara dilakukan oleh Rektor Universitas Abulyatama, R. Agung Efriyo Hadi, Ph.D., yang mengapresiasi kehadiran Prof. Muhammad Aziz dan berharap kegiatan ini dapat memberikan wawasan baru bagi seluruh peserta, khususnya dosen Fakultas Teknik dan mahasiswa.\n\nSeluruh peserta diajak untuk aktif berpartisipasi dalam diskusi dan interaksi yang diharapkan dapat memperkaya pengetahuan serta meningkatkan kolaborasi di bidang energi terbarukan.\n\nDengan kegiatan ini, diharapkan Fakultas Teknik Universitas Abulyatama dapat terus berkontribusi dan berperan aktif dalam pengembangan ilmu pengetahuan, khususnya dalam sektor energi yang berkelanjutan.', 'uploads/berita/01JMH1Q1KY2R87MACRF6954HJM.png', '2025-01-23', '2025-02-19 23:46:24', '2025-02-19 23:46:24'),
(6, 'Fakultas Teknik UNAYA Kenalkan Panel Surya di Pesantren Daruh Hikmah, Aceh Besar', 'Aceh Besar, 19 Januari 2025 – Fakultas Teknik Universitas Abulyatama (UNAYA) melaksanakan kegiatan pengabdian kepada masyarakat bertempat di Desa Geundring, Kecamatan Darul Imarah, Kabupaten Aceh Besar. Kegiatan yang dimulai pada pukul 09.00 WIB ini dibuka oleh Dekan Fakultas Teknik, Dr. Ir. Cut Rahmawati, dan dipimpin oleh Mahyuddin, S.T., M.T., selaku Penanggung Jawab Kegiatan dari Program Studi Teknik Mesin.\nKegiatan ini dihadiri oleh seluruh dosen Fakultas Teknik UNAYA dan diikuti oleh empat puluh santri dari Pesantren Daruh Hikmah. Acara ini juga didampingi oleh ustadz dan ustazah dari pesantren. Sasaran utama dari kegiatan ini adalah untuk meningkatkan pemahaman para santri mengenai pemanfaatan panel surya sebagai energi alternatif.\nPelaksanaan pengabdian ini dilakukan melalui metode diskusi, sosialisasi, dan praktik. Tim pengabdian melakukan sosialisasi mengenai panel surya, mencakup komponen, manfaat, tata cara pemasangan, serta perawatan panel. Selain itu, tim juga melakukan pemasangan panel surya secara langsung di lokasi mitra, serta memberikan pelatihan tentang cara memasang panel dengan memaksimalkan cahaya matahari.\nKegiatan sosialisasi berlangsung lancar, dimana para santri menunjukkan antusiasme tinggi dan berhasil memahami cara kerja panel surya. Dalam sesi diskusi, kesadaran santri terhadap pentingnya keberlanjutan lingkungan melalui penggunaan energi terbarukan meningkat. Mereka juga belajar bahwa panel surya adalah perangkat semikonduktor yang dapat menghasilkan listrik ketika terkena cahaya. \nMelalui kegiatan ini, Fakultas Teknik UNAYA berharap dapat memberikan kontribusi nyata dalam edukasi dan pemberdayaan masyarakat, terutama dalam bidang energi bersih dan keberlanjutan lingkungan di Kabupaten Aceh Besar.\n\nUntuk kerjasama bidang energi terbarukan, silakan menghubungi:\nFakultas Teknik UNAYA\nEmail: fakultas_teknik@abulyatama.ac.id\nTelepon: 081360024335\n\n', 'uploads/berita/01JMH1R80H2DTR21J541YZV3RC.jpeg', '2025-01-19', '2025-02-19 23:47:03', '2025-02-19 23:47:03'),
(7, 'Persamaan Persepsi Peningkatan Kinerja Dosen FT-UNAYA', 'Kegiatan Persamaan Persepsi Peningkatan Kinerja Dosen FT-UNAYA merupakan inisiatif strategis yang bertujuan untuk meningkatkan kinerja dosen dalam melaksanakan tri dharma perguruan tinggi. Melalui kegiatan ini, kami berupaya menyamakan persepsi dan pemahaman antara dosen agar tercipta sinergi yang optimal dalam pengembangan pendidikan, penelitian, dan pengabdian masyarakat.\n\nKegiatan ini diharapkan dapat melahirkan berbagai program unggulan yang mendukung peningkatan kualitas akademik di FT-UNAYA. Salah satu program unggulan yang menjadi fokus adalah Percepatan Lektor Kepala dan Guru Besar di lingkungan dosen FT-UNAYA. Program ini dirancang untuk mendorong dosen dalam pencapaian tri dharma, sehingga dapat meningkatkan kontribusi mereka terhadap pengembangan ilmu pengetahuan dan teknologi.\nPada kegiatan ini dosen juga mendapat wawasan terkait kewajiban Beban Kerja Dosen (BKD), proses penilaian dan tindak lanjut dari ketercapaian BKD dosen yang disampaikan oleh Bapak Mahyuddin, S.T., M.T. Beliau menyampaikan bahwa dosen memiliki kewajiban untuk memenuhi BKD agar dapat eligible dalam Serdos sehingga peningkatan dosen karir dosen dapat mudah dijalankan. \n\nKami percaya bahwa melalui kolaborasi dan komunikasi yang intensif, dosen FT-UNAYA dapat mencapai kinerja yang lebih baik dan memberikan dampak positif yang signifikan bagi mahasiswa dan masyarakat luas.\n\n', 'uploads/berita/01JMH1SMQ00KF48SHPM0RZRWHG.jpeg', '2025-01-13', '2025-02-19 23:47:49', '2025-02-19 23:47:49'),
(8, 'Penandatanganan Kerjasama FT UNAYA dengan Balai Perumahan Sumatera I', 'Fakultas Teknik telah melaksanakan pengembangan kemitraan dengan Balai Perumahan Sumatera I pada tanggal  13 Desember 2024. Kegiatan ini berlangsung di kantor Balai Perumahan I yang berada di Jl. Jenderal Sudirman Kota Banda Aceh. Turut hadir Rektor Universitas Abulyatama, Ir. R. Agung Efriyo Hadi, Ph,D., IPM., ASEAN Eng, Dekan Fakultas Teknik, Dr. Ir. Cut Rahmawati, Ka.Prodi Teknik SIpil, Muhammad Zardi, M.T, LPjM UNAYA, Meliyana, M.T serta kepala bidang kerjsama UNAYA, Dr. Ferlya Elyza. Kepala Balai Perumahan I, Dudi Mustofa, S.T menyambut baik kerjasama ini dan akan menindak lanjuti dengan pelaksanaan Klinik Rumah Swadaya link: https://krs.perumahan.pu.go.id/. Kegiatan ini akan mengikutsertakan mahasiswa Fakultas Teknik dalam membangun pelayanan kepada masyarakat terkait pembangunan perumahan layak huni. Rektor UNAYA menyampaikan bahwa kegiatan kerjasama ini akan berdampak pada peningkatan kompetensi mahasiswa dan peningkatan IKU 2 dan IKU 6 UNAYA. ', 'uploads/berita/01JMH1TRJ2A2CCHK3S9S7818BB.jpeg', '2024-12-13', '2025-02-19 23:48:25', '2025-02-19 23:48:25'),
(9, 'Magang MBKM pada Bank Sampah Induk Sadar Mandiri (semester Ganjil 2024/2025), pendanaan Hibah Kompetisi Kampus Merdeka (PKKM-2024).', 'Fakultas Teknik UNAYA mengirimkan 5 (lima) mahasiswa yang terdiri dari Prodi. Teknik Sipil, Teknik Mesin dan Sistem Informasi untuk belajar mengembangkan Startup Pengelolaan Sampah dan Produk dari Limbah Plastik dengan mitra Bank Sampah Induk Sadar Mandiri. Ketua Bank Sampah Induk sadar Mandiri yaitu Muhammad Nadir S.T., M.T menyambut baik kegiatan ini dan berharap dari kolaborasi ini akan dapat menyediakan sistem informasi untuk pengumpulan sampah dari masyarakat dan mengolah kembali menjadi produk berharga. Mahasiswa fakultas Teknik UNAYA sudah menghasilkan startup pengelolaan sampah yang dapat diakses pada https://sampah.shop/ dan produk paving block dari limbah plastik dan limbah kaca. Fakultas Teknik UNAYA sangat mendukung program inisiatif keberlanjutan dengan menciptakan solusi yang tidak hanya mengurangi masalah limbah, tetapi juga menghasilkan produk yang berguna dan bernilai ekonomi. Kegiatan ini juga akan meningkatkan kesadaran masyarakat akan pentingnya pengelolaan sampah dan memberikan akses pada solusi yang dapat digunakan untuk mengelola sampah secara efektif.', 'uploads/berita/01JMH1VSFN4H4TFW9PSRJ1DNCZ.jpg', '2024-11-14', '2025-02-19 23:48:59', '2025-02-19 23:48:59'),
(10, 'Fakultas Teknik Abulyatama mengadakan rapat internal pengembangan tridharma dan penjaminan mutu internal Fakultas (23 September 2024).', 'Fakultas Teknik Abulyatama mengadakan rapat internal pengembangan tridharma dan penjaminan mutu internal Fakultas (23 September 2024). Kegiatan ini bertujuan melakukan evaluasi kinerja tridharma dosen dan untuk mewujudkan sistem penjaminan mutu yang transparan dan akuntabel sesuai standar yang ditetapkan. Turut hadir Ketua LPjM ibu Sari Wardani, S.T., M.T selaku ketua LPjM Universitas Abulyatama dan team. Dekan Fakultas Teknik berharap agar tindak lanjut dari kegiatan ini dapat meningkatkan daya saing fakultas di tingkat nasional dan internasional melalui akreditasi dan pengakuan lembaga-lembaga independen. Secara keseluruhan, kegiatan ini bertujuan untuk menciptakan lingkungan akademik yang berkualitas dan berkelanjutan demi mencapai visi dan misi Fakultas Teknik.', 'uploads/berita/01JMH1WY45R20Z433WQFXK3G97.jpg', '2024-11-06', '2025-02-19 23:49:37', '2025-02-19 23:49:37'),
(11, 'Prodi Teknik Mesin UNAYA mengikuti kegiatan Pengembangan Mata Kuliah Anti Korupsi yang diadakan oleh LLDIKTI 13 Aceh bersama KPK.', 'Prodi Teknik Mesin UNAYA mengikuti kegiatan Pengembangan Mata Kuliah Anti Korupsi yang diadakan oleh LLDIKTI 13 Aceh bersama KPK. Prodi Teknik Mesin memiliki Mata Kuliah “Pendidikan Anti Korupsi” 2 SKS sebagai edukasi bagi mahasiswa untuk menjadi agen pencegahan korupsi di Indonesia. Lulusan Teknik Mesin akan banyak terlibat pada proyek pembangunan di Indonesia sehingga MK ini menjadi modal bagi mahasiswa dalam bekerja di industri dan pemerintahan sebagai pencegahan pada tindakan korupsi. Peran mahasiswa dalam upaya pemberantasan korupsi akan maksimal jika mahasiswa memahami pengetahuan tentang korupsi dan upaya pemberantasannya dan bisa menerapkan nilai-nilai anti korupsi dalam dirinya.', 'uploads/berita/01JMH1Y3CCPVQBM4FVNZ0AEDZ5.jpg', '2024-11-04', '2025-02-19 23:50:15', '2025-02-19 23:50:15'),
(12, 'Program Studi Teknik Sipil melaksanakan Program MBKM yaitu Magang dan Praktik Kerja di Dinas Pengairan Aceh.', ' Kegiatan ini dihadiri oleh Dekanat FT UNAYA dan Muhammad Zardi S.T., M.T selaku Ka.Prodi Teknik Sipil. Kepala Bidang Teknik dan Konstruksi Dinas Pengairan Aceh, Ir. Rinal Dianto, S.T., M.T menyambut baik kehadiran 2 (dua) mahasiswa dari Prodi Teknik Sipil UNAYA. Kegiatan ini akan memberikan kesempatan luas kepada mahasiswa untuk belajar langsung terkait proses perencanaan teknis, pengembangan dan pengelolaan sumber daya air dan irigasi. Kegiatan ini dilaksanakan selama 5 (lima) bulan dari 15 Agustus 2023 sampai dengan 15 Januari 2025', 'uploads/berita/01JMH1ZT16RT5VV5K2T2MA0EGA.jpg', '2024-11-03', '2025-02-19 23:51:11', '2025-02-19 23:51:11'),
(13, 'Fakultas Teknik UNAYA Ikuti Bimtek Kurikulum OBE untuk Tingkatkan Kualitas Lulusan Berdaya Saing Industri', 'Fakultas Teknik UNAYA mengikuti kegiatan Bimbingan Teknis Penyusunan Kurikulum Berbasis Outcome Based Education (OBE) pada 9 Oktober 2024 yang bertempat di Universitas Abulyatama. Kegiatan ini sebagai upaya penyelenggaraan pendidikan tinggi sesuai Standar Dikti dan menghasilkan lulusan yang kompeten sesuai dengan kebutuhan industri dan dunia kerja. Kegiatan ini dihadiri oleh seluruh Ka.Prodi yang ada di lingkungan Fakultas Teknik UNAYA. Pemateri dari kegiatan ini adalah Dr. Andi Ulfa Tenri Pada, S.Pd. M.Pd dari Universitas Syiah Kuala. Melalui kegiatan ini setiap program studi akan mampu menyusun dokumen perangkat pembelajaran berupa RPS, rubrik penilaian, dan rencana tugas mahasiswa dalam upaya memberikan pengalaman pembelajaran yang mendukung pencapaian CPL, serta rencana evaluasi dan asesmen perkuliahan.', 'uploads/berita/01JMH20ZS7JV7H1PSSM4TBZJ4R.jpg', '2024-11-02', '2025-02-19 23:51:49', '2025-02-19 23:51:49'),
(14, 'Pembentukan pusat riset artificial intelligence d Fakultas Teknik. Riset unggulan di Prodi. SI.', 'Fakultas Teknik Universitas Abulyatama membentuk Pusat Riset Artificial Intelligence (AI) yang diketuai oleh Teuku Rizky Noviandi, S.Kom., M.Kom yang merupakan dosen pada Prodi. Sistem Informasi. Pusat riset ini akan menghasilkan inovasi-inovasi di bidang AI yang unggul di tingkat nasional dan internasional.  Area riset yang menjadi target unggulan adalah Machine Learning, Deep Learning, Data Mining and Analytics, AI for Cyber Security, dan Swarm Intelligence. Fakultas Teknik UNAYA siap berkontribusi untuk mengembangan ilmu pengetahuan dan teknologi dengan memanfaat inovasi di bidang AI.', 'uploads/berita/01JMH229CBK4ND9AX8B1RM9QWP.jpg', '2024-11-01', '2025-02-19 23:52:32', '2025-02-19 23:52:32'),
(15, 'Dosen Fakultas Teknik memenangkan hibah Dikti Ristek Tahun Anggaran 2024', 'Dosen Fakultas Teknik yang memenangkan hibah Dikti Ristek Tahun Anggaran 2024 telah melakukan Monitoring dan Evaluasi (Monev) hasil penelitian. Terdapat 2 (dua) proposal hibah pada skema Fundamental dan Penelitian Dosen Pemula (PDP) yang diraih dosen teknik. Muhtadin S.T., M.T mendapatkan pendanaan PDP dan Dr. Cut Rahmawati mendapatkan pendanaan Penelitian Fundamental. Monev ini bertujuan mengevaluasi proses dan output riset yang telah diselesaikan. Melalui hibah ini akan banyak karya dosen yang dapat dikembangkan menjadi bahan ajar dan peningkatan publikasi dosen.', 'uploads/berita/01JMH23BM090YSFPJPG0P0QWRK.jpg', '2024-10-31', '2025-02-19 23:53:07', '2025-02-19 23:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1740034626),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1740034626;', 1740034626),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1740023232),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1740023232;', 1740023232);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kalender_akademiks`
--

CREATE TABLE `kalender_akademiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_ganjil` varchar(255) NOT NULL,
  `image_genap` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kalender_akademiks`
--

INSERT INTO `kalender_akademiks` (`id`, `image_ganjil`, `image_genap`, `created_at`, `updated_at`) VALUES
(2, 'uploads/kalender_akademik/01JMH1G9RM7NNZXH6B90M2F28X.jpg', 'uploads/kalender_akademik/01JMH1G9RRC046923QMACV3JNB.jpg', '2025-02-19 23:42:43', '2025-02-19 23:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_akademiks`
--

CREATE TABLE `kegiatan_akademiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan_akademiks`
--

INSERT INTO `kegiatan_akademiks` (`id`, `nama_kegiatan`, `link`, `tanggal_pelaksanaan`, `created_at`, `updated_at`) VALUES
(2, 'WORKSHOP “IMPLEMENTASI PPEPP MENUJU AKREDITASI UNGGUL STANDAR LAM INFOKOM”', 'https://drive.google.com/file/d/1gGipGZqus9RCvP0Xa2YBlWwDsoOlM2zp/view?usp=sharing', '2025-02-14', '2025-02-19 21:43:03', '2025-02-19 21:43:03'),
(3, 'Peningkatan Manajerial Pengurus Ormawa Fakultas Teknik ', 'https://drive.google.com/file/d/1ePwi8wtAqZOflFcxLsqL_Z1kuP8R1Uzr/view?usp=sharing', '2025-02-08', '2025-02-19 21:44:38', '2025-02-19 21:44:38'),
(4, 'World Class, Visiting Professor ', 'https://drive.google.com/file/d/1fd3QpYSrK4It-cFcP3rGhGIs3QL-x_cg/view?usp=sharing', '2025-01-23', '2025-02-19 21:47:06', '2025-02-19 21:47:06'),
(5, 'Kuliah Tamu Fakultas Perikanan dan Fakultas Teknik : PENGEMBANGAN  INOVASI PERIKANAN DAN MATERIAL MAJU DALAM MEWUJUDKAN PERIKANAN YANG BERKELANJUTAN', 'https://drive.google.com/file/d/1iZCja7TqD1vG5M8IuCW0opxQiSZDRhBk/view?usp=sharing', '2025-01-17', '2025-02-19 21:48:05', '2025-02-19 21:48:05'),
(6, 'PERSAMAAN PERSEPSI PENINGKATAN KINERJA DOSEN FAKULTAS TEKNIK UNIVERSITAS ABULYATAMA', 'https://drive.google.com/file/d/1RmtvTn1oYfF5T28k60wFgxrDqSue6_s6/view?usp=sharing', '2025-01-12', '2025-02-19 21:49:22', '2025-02-19 21:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_bems`
--

CREATE TABLE `kegiatan_bems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_news` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_himasis`
--

CREATE TABLE `kegiatan_himasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_news` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan_himasis`
--

INSERT INTO `kegiatan_himasis` (`id`, `title`, `description`, `image_news`, `date`, `created_at`, `updated_at`) VALUES
(1, 'awdawd', 'awdawdawdawd', 'uploads/kegiatan_himasi/01JM442Q5T4DWRFHW5RK5ESPMJ.jpeg', '2025-02-06', '2025-02-14 23:17:36', '2025-02-14 23:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_himatesyas`
--

CREATE TABLE `kegiatan_himatesyas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_news` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan_himatesyas`
--

INSERT INTO `kegiatan_himatesyas` (`id`, `title`, `description`, `image_news`, `date`, `created_at`, `updated_at`) VALUES
(1, 'jawd', 'doajwd', 'uploads/kegiatan_himatesya/01JM44Y07VMPE0C535C09M20SY.jpeg', '2025-02-05', '2025-02-14 23:32:30', '2025-02-14 23:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_hmms`
--

CREATE TABLE `kegiatan_hmms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_news` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan_hmms`
--

INSERT INTO `kegiatan_hmms` (`id`, `title`, `description`, `image_news`, `date`, `created_at`, `updated_at`) VALUES
(2, 'FMMA FORWIL 1A di Universitas Samudra Langsa', 'Kegiatan berbentuk Saweu Gampong untuk memecahkan masalah yang ada di Desa Telaga Tujoh dan kegiatan seminar dengan Univ. Samudra Langsa', 'uploads/kegiatan_hmm/01JMH295MMHZ7AQQJF13JBHMA4.png', '2024-11-30', '2025-02-19 23:56:18', '2025-02-19 23:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `kerjasamas`
--

CREATE TABLE `kerjasamas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kerjasama` varchar(255) NOT NULL,
  `lingkup_kerjasama` varchar(255) NOT NULL,
  `jenis_dokumen` varchar(255) NOT NULL,
  `status_kerjasama` enum('Aktif','Selesai') NOT NULL,
  `link` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kerjasamas`
--

INSERT INTO `kerjasamas` (`id`, `nama_kerjasama`, `lingkup_kerjasama`, `jenis_dokumen`, `status_kerjasama`, `link`, `tanggal`, `created_at`, `updated_at`) VALUES
(3, 'Penyelenggaraan Tri Dharma PT dengan Balai Pelaksana Penyediaan Perumahan Sumatera I', 'Nasional', 'MoU', 'Aktif', 'https://drive.google.com/file/d/1P0y6rnbyf2RY5OZnncz9310hiO9i1iQd/view?usp=sharing', '2024-12-13', '2025-02-19 23:22:11', '2025-02-19 23:22:11'),
(4, 'Klinik Rumah Swadaya dengan Balai Pelaksana Penyediaan Perumahan Sumatera I', 'Nasional', 'MoA', 'Aktif', 'https://drive.google.com/file/d/12PSbYZhHTPXjb3HMjHILHsK22DiE6l3J/view?usp=sharing', '2024-12-12', '2025-02-19 23:22:52', '2025-02-19 23:22:52'),
(5, 'Praktisi Mengajar 5 DIKTI', 'Nasional', 'MoU', 'Selesai', 'https://drive.google.com/file/d/1yq0_r3mvPUJamxoifTAlWvFREJ2jTONx/view?usp=sharing', '2024-09-24', '2025-02-19 23:23:30', '2025-02-19 23:23:30'),
(6, 'Magang Prodi Teknik Sipil UNAYA dengan Dinas Pengairan Aceh', 'Lokal', 'IA', 'Aktif', 'https://drive.google.com/file/d/1r5tCBuEU6C5RMqvDJU9dJ2uLaeliSKGJ/view?usp=sharing', '2024-09-09', '2025-02-19 23:24:15', '2025-02-19 23:24:15'),
(7, 'Magang PKKM di Bank Sampah Induk Sadar Mandiri', 'Lokal', 'IA', 'Selesai', 'https://drive.google.com/file/d/1pByi8-XPcOneXGE7473q8fxkNOhBOTIj/view?usp=sharing', '2024-08-15', '2025-02-19 23:24:56', '2025-02-19 23:24:56'),
(8, 'Magang Prodi Sistem Informasi dengan PT Zand Family Propertindo', 'Lokal', 'MoU/MoA/IA', 'Aktif', 'https://drive.google.com/file/d/1FuI1AXfDz7T_HAjhyoE_tU6MJnTNdCZs/view?usp=sharing', '2024-07-08', '2025-02-19 23:25:42', '2025-02-19 23:25:42'),
(9, 'Studi Independen Mahasiswa Sistem Informasi dengan PT KINEMA SYSTRANS MULTIMEDIA', 'Nasional', 'MoU', 'Aktif', 'https://drive.google.com/file/d/1FQphyuMZdET6Qz7DGS1DiXblOIMV2UwF/view?usp=sharing', '2024-03-08', '2025-02-19 23:26:27', '2025-02-19 23:26:27'),
(10, 'Pengembangan Tri dharma dan MBKM dengan Fakultas Teknik USK', 'Provinsi', 'MoA', 'Aktif', 'https://drive.google.com/file/d/1kO2zchSu3PGKGKxsgG7XLGcYlTOwpcua/view?usp=sharing', '2023-11-27', '2025-02-19 23:27:06', '2025-02-19 23:27:06'),
(11, 'Penyelenggaraan Tri Dharma Perguruan Tinggi dengan Universitas Halu Oleo', 'Nasional', 'MoU', 'Aktif', 'https://drive.google.com/file/d/16YLjdGQ3VrjRT4SNSdk9uV-En7Q2rNWP/view?usp=sharing', '2023-09-20', '2025-02-19 23:28:05', '2025-02-19 23:28:05'),
(12, 'Pertukaran Mahasiswa Merdeka (PMM) ke Universitas Gorontalo', 'Nasional', 'MoU', 'Aktif', 'https://drive.google.com/file/d/1pDpuunfQu-93iuOcJIqy6Q7wV_LO_vGT/view?usp=sharing', '2023-08-24', '2025-02-19 23:29:56', '2025-02-19 23:29:56'),
(13, 'Wirausaha Merdeka Prodi Teknik Sipil UNAYA dengan Politeknik Kutaraja', 'Lokal', 'IA', 'Selesai', 'https://drive.google.com/file/d/1ZfCXKLK-rzKHyQDsDjsvERxwAoxe_9cm/view?usp=sharing', '2023-08-19', '2025-02-19 23:30:45', '2025-02-19 23:30:45'),
(14, 'Riset dan Publikasi bersama Universitas Prima Indonesia (UNPRI)', 'Nasional', 'IA', 'Selesai', 'https://drive.google.com/file/d/1EmPKgOKz-Z2aEPhxSf0KEgH0DoJUKmo7/view?usp=sharing', '2023-05-08', '2025-02-19 23:31:18', '2025-02-19 23:31:18'),
(15, 'Pelaksanaan Tridharma PT dan MBKM dengan Universitas Prima Indonesia (UNPRI)', 'Nasional', 'MoA', 'Aktif', 'https://drive.google.com/file/d/1gQU_98fepB6ugY6Fbyr5JjRkJSw5LCVI/view?usp=sharing', '2023-05-04', '2025-02-19 23:32:11', '2025-02-19 23:32:11'),
(16, 'Program Praktisi Mengajar dengan Pelagis', 'Nasional', 'IA', 'Selesai', 'https://drive.google.com/file/d/1BrspEWstu9xK_7zqXyQJ888W8yJN25q7/view?usp=sharing', '2023-04-12', '2025-02-19 23:32:44', '2025-02-19 23:32:44'),
(17, 'Penyelenggaraan Tri Dharma Perguruan Tinggi dengan Universitas Teuku Umar', 'Nasional', 'MoU', 'Aktif', 'https://drive.google.com/file/d/1ED-5FTC7Cpe9ft_LSplWIHo9q7JKb4Jq/view?usp=sharing', '2022-11-25', '2025-02-19 23:33:18', '2025-02-19 23:33:18'),
(18, 'Kegiatan Tridarma Perguruan Tinggi dan Pengembangan Sumber Daya Masyarakat dan Gampong Aceh Besar Dengan                                                    Dinas Pemberdayaan Masyarakat dan Gampong Aceh Besar', 'Provinsi', 'MoA', 'Aktif', 'https://drive.google.com/file/d/1tDAAlDbj73zjrQAxUC9k6bulyZPfyapY/view?usp=sharing', '2022-11-25', '2025-02-19 23:33:48', '2025-02-19 23:33:48'),
(19, 'Penyelenggaraan Pendidikan, Pelatihan, Penelitian, Pengabdian Kepada Masyarakat dan Pengembangan Sumber Daya Manusia Aceh dengan Pemerintah Aceh', 'Provinsi', 'MoU', 'Aktif', 'https://drive.google.com/file/d/15dOKYA26GIZYb07E7zf7Y9hcckABXIav/view?usp=sharing', '2022-11-25', '2025-02-19 23:34:49', '2025-02-19 23:34:49'),
(20, 'Tridharma PT UNAYA-UPM', 'Internasional', 'MoU', 'Aktif', 'https://drive.google.com/file/d/1XHiaPe6TktlPv6XQPw-t0Oeoc4qoi2EY/view?usp=sharing', '2022-09-20', '2025-02-19 23:35:24', '2025-02-19 23:35:24'),
(21, 'Penyelenggaraan Tri Dharma Perguruan Tinggi dan Merdeka Belajar Kampus Merdeka dengan Institut Sains & Teknologi Akprind Yogyakarta', 'Nasional', 'MoU', 'Aktif', 'https://drive.google.com/file/d/1zA8KszyOTQB8j_IaiILSETHA7VgTao5Q/view?usp=sharing', '2022-08-25', '2025-02-19 23:37:07', '2025-02-19 23:37:07'),
(22, 'Dikti untuk Program Matching Fund', 'Nasional', 'MoU', 'Selesai', 'https://drive.google.com/file/d/1QXRD2BEkdlb80eahG5CACJUoxpBBQfUI/view?usp=sharing', '2022-07-18', '2025-02-19 23:37:44', '2025-02-19 23:37:44'),
(23, 'Penelitian, Pengabdian Masyarakat dan Punyusunan Bahan Ajar dengan Universitas Lancang Kuning, Riau', 'Nasional', 'MoA/IA', 'Aktif', 'https://drive.google.com/file/d/1L-UgFe4T8xnnWg-RkYkCcWdMsTNYLW7w/view?usp=sharing', '2022-06-06', '2025-02-19 23:38:09', '2025-02-19 23:38:09'),
(24, 'Kerja Sama Dalam Bidang Tridarma Perguruan Tinggi dengan Universitas Syiah Kuala', 'Provinsi', 'MoU', 'Aktif', 'https://drive.google.com/file/d/1QJbrpQ4SqJ6HNfudAQd5AL9_RENU0R4f/view?usp=sharing', '2022-04-20', '2025-02-19 23:38:52', '2025-02-19 23:38:52'),
(25, 'Pusat Penelitian Material Rekayasa Lanjut dan Teknologi Nano(MatNano) Universitas Abulyatama dengan Quijing Normal University', 'Internasional', 'IA', 'Selesai', 'https://drive.google.com/file/d/147oJjvFfYLqV48XoQt93g7_HR8etMq-E/view?usp=sharing', '2022-01-24', '2025-02-19 23:39:26', '2025-02-19 23:39:26'),
(26, 'Pengembangan Tridarma Perguruan Tinggi dengan Pusat Daur Ulang Bank Sampah Induk Sadar Mandiri Aceh', 'Lokal', 'MoA', 'Aktif', 'https://drive.google.com/file/d/10l6xlGGtI7igLpJOyuSIfv40LCcTrI1q/view?usp=sharing', '2021-06-28', '2025-02-19 23:39:55', '2025-02-19 23:39:55'),
(27, 'Pendidikan, Penelitian, dan Pengabdian Masyarakat dengan Politeknik Negeri lhokseumawe', 'Nasional', 'MoU', 'Aktif', 'https://drive.google.com/file/d/1Gdk5gwLeMeb0ByOyq3-6kLvHWVqVlaub/view?usp=sharing', '2021-04-22', '2025-02-19 23:40:42', '2025-02-19 23:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum_mesins`
--

CREATE TABLE `kurikulum_mesins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` int(11) NOT NULL,
  `kode_mk` varchar(255) NOT NULL,
  `mata_kuliah` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `praktek` int(11) NOT NULL,
  `teori` int(11) NOT NULL,
  `kategori` enum('wajib','pilihan') NOT NULL,
  `rps` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulum_mesins`
--

INSERT INTO `kurikulum_mesins` (`id`, `semester`, `kode_mk`, `mata_kuliah`, `sks`, `praktek`, `teori`, `kategori`, `rps`, `created_at`, `updated_at`) VALUES
(1, 1, 'MKN101', 'Pendidikan Agama', 2, 2, 2, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'MKU105', 'Bahasa Inggris', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'MFT101', 'Matematika I', 3, 3, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'MSN101', 'Fisika Dasar', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1EAdUQlsbStHpzAH7Ih_erX49GudBnZdF/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'MSN103', 'Kimia Dasar', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'MSN105', 'Menggambar Teknik', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'MSN107', 'Pengenalan Teknik Mesin', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 'MSN109', 'Material Teknik', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1IcrVZQUYifwh8hfnsxIfrGc7aB9OBMgs/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2, 'MKN102', 'Bahasa Indonesia', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2, 'MKN104', 'Pendidikan Kewarganegaraan', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 2, 'MFT102', 'Matematika II', 3, 3, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 2, 'MSN102', 'Pengantar Mesin Konversi', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 2, 'MSN104', 'Pengukuran Teknik', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 2, 'MSN106', 'Fisika Lanjut', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1Kkj7DAQkUbMfJkLuNtPHbplqunOHDby5/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 2, 'MSN108', 'Gambar Mesin', 2, 1, 1, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 2, 'MSN110', 'Metalurgi Fisik', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1FYaiSRjxGDYR653wzMhoFPTM_Hf4-oc-/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 2, 'MSN112', 'Keselamatan, Kesehatan Kerja & Lingkungan', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1VDeZvMp5jewmIMNtI1TbaKUdMzm12t-3/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 3, 'MFT201', 'Statistika dan Probabilitas', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 3, 'PTM201', 'Mekanika dan Kekuatan Material', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1Ke6RI8lpoXE_OwpHcKbt6cZ4xgBDIwqV/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 3, 'MSN203', 'Matematika III', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 3, 'MSN205', 'Elemen Mesin I', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 3, 'MSN207', 'Aplikasi Komputer', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1F66E1CW9EjvZTVWW8vXdMiNBdNv9o_X4/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 3, 'MSN209', 'Proses manufaktur  ', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 3, 'MSN211', 'Thermodinamika Dasar', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1F4pVqc0HK7J1mCA_tGb35cdT8mOnXWpw/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 3, 'MSN213', 'Kinematika dan Dinamika', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 3, 'MSN215', 'Mekanika Fluida Dasar', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 3, 'MSN217', 'Statika struktur', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 4, 'MSN202', 'Matematika IV', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 4, 'MSN204', 'Elemen Mesin II', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 4, 'MSN206', 'Thermodinamika Lanjut', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1thxEk4c5JXay6kbWBCXSsbrYMIlrWqgo/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 4, 'MSN208', 'Perpindahan Kalor dan Massa I', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 4, 'MSN210', 'Getaran Mekanik', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 4, 'MSN212', 'Mesin Konversi Energi', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 4, 'MSN214', 'Pemilihan Material dan proses', 2, 2, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 4, 'MSN216', 'Mekanika Fluida Lanjut', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 4, 'MSN218', 'Tekink Pengelasan', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 4, 'MSN220', 'Plant Lay out', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1PTTdb2N1Q0S9dCRjJ4tLD97LP7b8e7R4/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 4, 'MSN222', 'Teknik Pengecoran Logam', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 5, 'MSN301', 'Proses Pemesinan  ', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 5, 'MSN303', 'Manajemen Industri', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 5, 'MSN305', 'Perpindahan Kalor dan Massa II', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 5, 'MSN307', 'Mesin-Mesin Fluida', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 5, 'MSN309', 'Sistem Kendali', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 5, 'MSN311', 'Energi Bio Massa', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 5, 'MSN313', 'Technopreneurship  ', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 5, 'MSN315', 'Teknologi Pembakaran', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 5, 'MSN317', 'Rancang Inovasi Produk', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1FUaXIFn5S6eZR2ZFAq1KE6mO65OsIOWx/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 5, 'MSN319', 'Material Komposit', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1lsXNfGX4TQALHPfc1DUDYfN0wo2H0CQy/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 6, 'MSN302', 'Alat Pengangkat & Pengangkut bahan', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 6, 'MSN304', 'Pendidikan Anti Korupsi', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 6, 'MSN306', 'Teknik Tenaga Listrik', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 6, 'MSN308', 'Etika Profesi', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 6, 'MSN310', 'Konsep Teknologi dan Desain', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 6, 'MSN312', 'Mekatronika', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 6, 'MSN314', 'Tugas Purnarupa Inovasi Produk', 2, 0, 2, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 6, 'MSNXXX', 'MK Pilihan Keahlian  ', 3, 3, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 6, 'MSNXXX', 'MK Pilihan Keahlian', 3, 3, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 6, 'MSN502', 'Motor Bakar', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 6, 'MSN504', 'Teknik Penukar Kalor', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 6, 'MSN506', 'Turbin Uap', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 6, 'MSN508', 'Energi Terbarukan', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 6, 'MSN510', 'Mesin Pengkondisin Udara', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 6, 'MSN512', 'Teknik Pembentukan Material', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 6, 'MSN514', 'Nano Material', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 6, 'MSN516', 'Material Polimer dan Proses', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 6, 'MSN518', 'Sistem perpipaan', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 6, 'MSN520', 'Bio Material', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 7, 'MKU111', 'Metode Penelitin', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 7, 'MSN401', 'Pratikum Fenomena Dasar dan Uji Prestasi Mesin', 2, 0, 0, 'wajib', 'https://drive.google.com/file/d/1JNHI4w1XY-r2XFsf4E8b4aPDj3tw40Rp/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 7, 'MSN403', 'Pemilihan Bahan dan Proses', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 7, 'MSN405', 'Kerja Praktek', 2, 0, 2, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 7, 'MSN407', 'Kuliah Kerja Nyata', 4, 0, 4, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 7, 'MSNXXX', 'MK Pilihan Keahlian', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 7, 'MSNXXX', 'MK Pilihan Keahlian', 3, 0, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 7, 'MSN501', 'Teknik Tenaga Surya', 3, 3, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 7, 'MSN503', 'Perawatan Mesin', 3, 3, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 7, 'MSN505', 'Teknik Tenaga Listrik Lanjut', 3, 3, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 7, 'MSN507', 'Bahan Bakar dan Pembakaran', 3, 3, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 7, 'MSN509', 'Ketel Uap', 3, 3, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 7, 'MSN511', 'Plant Lay Out', 3, 3, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 7, 'MSN513', 'Perawatan Mesin', 3, 3, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 7, 'MSN515', 'Industri Daur Ulang', 3, 3, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 7, 'MSN517', 'Teknik Pengelasan', 3, 3, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 7, 'MSN519', 'Teknologi Tepat Guna', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1vZ6bqFbNFd69VDzmWvaSh5ERSW6Ee68D/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 7, 'MFT402', 'Tugas Akhir', 4, 0, 4, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum_sipils`
--

CREATE TABLE `kurikulum_sipils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` int(11) NOT NULL,
  `kode_mk` varchar(255) NOT NULL,
  `mata_kuliah` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `praktek` int(11) NOT NULL,
  `teori` int(11) NOT NULL,
  `kategori` enum('wajib','pilihan') NOT NULL,
  `rps` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulum_sipils`
--

INSERT INTO `kurikulum_sipils` (`id`, `semester`, `kode_mk`, `mata_kuliah`, `sks`, `praktek`, `teori`, `kategori`, `rps`, `created_at`, `updated_at`) VALUES
(1, 1, 'MKN101', 'Pendidikan Agama', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1r_w4LJzLPzhhA4GeCS38ERbjW_L40oiL/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'MKN105', 'Bahasa Indonesia', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1uAVCC3io6q-fWIovn00G-KRH4ozVZFSE/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'MFT101', 'Matematika I', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1dyN-V0EjmETy8Lvzu-W_CsfnGAH5A0ow/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'SPL101', 'Fisika Dasar', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1irM4d9ncGIymqy-IRWJSjXB1_XUja6GF/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'SPL103', 'Kimia Dasar', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1rG3Kqzb6i_A0bpPZi3gPHoafzRgD4Suy/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'SPL105', 'Menggambar Bangunan Sipil', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1CIUPCd9acWprHr6qYuhk8iNxCn6i96ji/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'SPL107', 'Analisa Struktur I', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1-6KfINfkyUzBprtAbexnead9MYCi2zQb/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 2, 'MKN102', 'Pendidikan Kewarganegaraan', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1B46vTUM1piuCRFVkULfMwKt13y0BGaJJ/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2, 'MKU102', 'Bahasa Inggris ', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1ARYK89R7uCABpa8jB8NnhUf6a6XxuyCr/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2, 'MFT102', 'Matematika II', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1AeRLxZXgMtcGw3DlxHpaz_KkT4NAMO0C/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 2, 'MFT104', 'Statistika dan Probabilitas', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1WN83emlT2GykO90qQIGQMUaCrW9RkaJs/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 2, 'SPL102', 'Teknologi Bahan (*)', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1BOiiFRepR6scvENgh4WChS79a4mo-1Vp/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 2, 'SPL104', 'Mekanika Bahan ', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1yJboNOxF5Z6F841d93IiWDsc8nUb6ZA0/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 2, 'SPL106', 'Mekanika Fluida', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1jMDSwhHuKaO3XTB03dhTbaCp-ozk5dkk/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 2, 'SPL108', 'Bahan Perkerasan ', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1SP8-UuHueA96mCICtI3Gnii8qtKyfda5/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 2, 'SPL110', 'Hidrologi', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/19Vpg362jeYZwF8P09nRW-TGmUb7yvww9/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 3, 'MKU201', 'Aplikasi Komputer', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1qCbLCctcCTGDt80L5C5QckbZvtKCQVq4/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 3, 'SPL201', 'Ilmu Ukur Tanah', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1HyVxfmrjDdExbzTqDE1h9czS6HLcqCJe/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 3, 'SPL203', 'Hidrolika', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 3, 'SPL205', 'Matematika III', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1_LfhTpx6_Iixmp2rORbtVlOUVl-6hy1s/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 3, 'SPL207', 'Rencana Anggaran Biaya', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 3, 'SPL209', 'Mekanika Tanah I', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1WDJ0UyTqZWXED1mm4OUHjnDeW-luzz40/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 3, 'SPL211', 'Analisa Struktur II', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1EKAHbyJtUPu1K6CZW-xAcZywHvJVeMN-/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 3, 'SPL213', 'Praktikum Teknologi Bahan ', 1, 0, 1, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 3, 'SPL215', 'Praktikum Bahan Perkerasan ', 1, 0, 1, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 3, 'SPL217', 'Rekayasa Irigasi                                           ', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1mwe2Ze6FUcKUoAldqwpcYay645UTVFxz/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 3, 'SPL219', 'Geometri Jalan', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1VHG71xV02A__SJo8LCjH-AumpchYdg_F/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 4, 'SPL202', 'Matematika IV', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1mkwWSc0DQgPiqJ2YohSgyKxbkNLIBZ2_/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 4, 'SPL204', 'Mekanika Tanah II', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1WLqO2KaKd2QVGf35Da1ZesptLP3rWY_9/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 4, 'SPL206', 'Analisa Struktur III', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1qfs9gpj7DYosfcmOIP7heLo0ie5DNRwb/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 4, 'SPL208', 'Praktikum Mekanika Tanah', 1, 0, 1, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 4, 'SPL210', 'Praktikum Hidrolika ', 1, 0, 1, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 4, 'SPL212', 'Perancangan Bangunan Air', 2, 0, 0, 'wajib', 'https://drive.google.com/file/d/1SPUFFAAOzSYUvpS0StE_OaphTo9Rih-z/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 4, 'SPL214', 'Struktur Beton I', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1J7aCc5lNETc7DHlqrkktIbkhJ6W_s8mj/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 4, 'SPL216', 'Desain Pondasi I', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1BB82fnR4KqtgP3mGBZdVinAN9VFMBvDe/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 4, 'SPL218', 'Struktur Baja I', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1-ImJpDqmUFUAKdd5PpK0AR9WjOcb7e2j/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 4, 'SPL220', 'Struktur Kayu I', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1-Dm8_GTkZ7WLAO3qKQJUnOJBdJkD45CK/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 4, 'SPL222', 'Rekayasa Gempa', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 5, 'SPL301', 'Drainase ', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1dZ_3fpcGlwwzrKSwMqasof5sQ5gf_3lw/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 5, 'SPL303', 'Kewirausahaan Teknik Sipil', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1yhP8e79RpBkB5ZzN8fFANrW-KBpQBIbi/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 5, 'SPL305', 'Rekayasa Lalu Lintas', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1H2Ra0YImw2sTd8CkNwpkbnDHhTM0IvT9/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 5, 'SPL307', 'Pengantar Metode Pelaksanaan dan Pembongkaran Konstruksi', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1WGMXwY-O-psGoFr7URTPOrRSLbNfL6XL/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 5, 'SPL309', 'Bahasa Pemograman ', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/19fEby2zCv6BAmlQN4bWmCBn4o9wpug2A/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 5, 'SPL311', 'Struktur Kayu II', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1--ABpyvHpnM4Uh4eX9UNn3g6x350G79W/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 5, 'SPL501', 'Metode Elemen Hingga', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/18Q9u10adlQFMZJ4kuCO4sIZmRVwMY7Sq/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 5, 'SPL503', 'Keselamatan Konstruksi', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1f8Ba-kaeWc-ajbwHF3sBzsSR8caizZIF/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 5, 'SPL505', 'Ekonomi Rekayasa', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1M9STVG9d9uAeyaXLvMAZWfT8D_3rE5m6/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 5, 'SPL507', 'Pelabuhan', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1Pzz647i9C6ZGdY_7h32wsJKB_qLCiyyN/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 5, 'SPL509', 'Lapangan Terbang', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/16qSma8Et-lcDozg2qm14shvVV4PAYrj5/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 6, 'MKU302', 'Kuliah Kerja Nyata', 4, 0, 4, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 6, 'SPL302', 'Geologi Rekayasa', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1axwc2Jm8wOMj9DQhosX9Dw2iO2w1ANGL/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 6, 'SPL304', 'Dasar-Dasar Rekayasa Transportasi', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1noAwrmP36-tOclCgsmbmky2tIWtiKQCw/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 6, 'SPL306', 'Pengembangan Sumber Daya Air', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1esaBeRlgTT8_yHL4p6AwcOJVNkguABqu/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 6, 'SPL308', 'Analisa Numerik', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/181WIgg7dHrAYZCO0mvLeNuLO9q9FjJa7/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 6, 'SPL310', 'Struktur Baja II', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1PO6EolopdOshDLKN-SI-_KFR024_gJjl/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 6, 'SPL312', 'Manajemen Proyek', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1iJuRVLKqN12uxgfrvcqGyXR3n2z2kcbI/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 6, 'SPL502', 'Mitigasi Bencana', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/13-TXJmgwl64I0ctb00ErhwcHVGm-EOOe/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 6, 'SPL504', 'Kependudukan & Lingkungan Hidup', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1NHzrLyBdfuJAyJuAt3vMmhtMn-GSOGrp/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 6, 'SPL506', 'Perancangan Pelabuhan', 2, 0, 2, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 6, 'SPL508', 'Perancangan Jembatan', 2, 0, 0, 'wajib', 'https://drive.google.com/file/d/1q-otwmDtYV1YTPVC978MCnitEgFO1FDs/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 7, 'MFT401', 'Kerja Praktik', 2, 0, 2, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 7, 'SPL401', 'Perancangan Bangunan Gedung', 3, 0, 0, 'wajib', 'https://drive.google.com/file/d/1jFBer7gWMiybtL9Uorc9crxvAlyZzg8q/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 7, 'SPL403', 'Disain Pondasi II', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1W7i9VnLLxWgZFRurNpA7MElCKt5iMovI/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 7, 'SPL405', 'Struktur Beton II', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/14TW6iTMVnUmfWnZXhakGk-3-2HYFtO_6/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 7, 'SPL407', 'Ilmu Lingkungan', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1RcZtzvgn36vJbWDu6vPV-jZTXnM0yVso/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 7, 'SPL409', 'Metodologi Penelitian', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1nMHdbvMqOa5IalTAs-o4zA0CcAkmZBKZ/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 8, 'MFT402', 'Tugas Akhir', 4, 0, 4, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum_sis`
--

CREATE TABLE `kurikulum_sis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` int(11) NOT NULL,
  `kode_mk` varchar(255) NOT NULL,
  `mata_kuliah` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `praktek` int(11) NOT NULL,
  `teori` int(11) NOT NULL,
  `kategori` enum('wajib','pilihan') NOT NULL,
  `rps` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulum_sis`
--

INSERT INTO `kurikulum_sis` (`id`, `semester`, `kode_mk`, `mata_kuliah`, `sks`, `praktek`, `teori`, `kategori`, `rps`, `created_at`, `updated_at`) VALUES
(1, 1, 'MKN101', 'Pendidikan Agama', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1Iph62Aog4ktEuAAYD5_u5KRp5osK7e_I/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'MKN103', 'Pendidikan Pancasila ', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1o6zvTo6CJgIM1ypWkoanW1Ck2XKRwt1b/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'MKN105', 'Bahasa Indonesia', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1JlahCgk0KYL_19YNxR6ty0-KbqsT57g5/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'MKU101', 'Aplikasi Komputer', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1lDsnxCwJqY-iMjRx7vjHoLiH8ppkmdcY/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'MKU103', 'Bahasa Inggris', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1Ed97twz0hhXUuoJ3TEO6CrfDLAG7wWxx/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'MFT101', 'Matematika I', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1xSeeDR0hrDyJ1ckm4PO-ZfV_faBXhqme/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'SIF103', 'Arsitektur Komputer', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1h_vVLxFfyU7aPeyJEfNCwtV_Q2Wo3ql3/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 'SIF107', 'Algoritma dan Pemrograman ', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1S86ohu5zM2xPVgsTTUo_r7tm_BEq5RlA/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2, 'MKN102', 'Kewarganegaraan', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1eDHT1qCuwy3VhvonqeJeGzAbOIEIDQ3S/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2, 'MFT102', 'Matematika II', 3, 3, 3, 'wajib', 'https://drive.google.com/file/d/1iIF67oResTwzBQAB1CCejLEx_rCQfm0-/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 2, 'SIF102', 'Pengantar Teknologi Informasi', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1qX4r7kx4CuFJFNbjvGz4ET9svmuqeNxq/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 2, 'SIF104', 'UI/ UX Desain ', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/13PahB3-NPBp7FXORGsUMzNNhNG_BzK_Y/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 2, 'SIF106', 'Konsep Basis Data', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1WBoyruSYqnzRS6s0aB_3p8qZuQ8Omlj8/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 2, 'SIF108', 'Dasar Telekomunikasi', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1AtazQfyUCRMtgD4Gxbe0j7Qb9XtbHKpQ/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 2, 'SIF110', 'Sistem Operasi', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1I7JjINHpAp7DdE4mPIs4f46I1g5XQvHU/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 2, 'SIF112', 'Algoritma dan Struktur Data', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1vTgK6HNtmjbEHp6FQm6ZZv7hhwumoGec/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 2, 'SIF114', 'Logika Digital', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1W6eUwMFhqRp1nhRUWxj-bZJst-zGQ9ND/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 3, 'MFT201', 'Statistika dan Probabilitas', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1WkZVaOc8-MH_27cJWUr9fJ9biPedgaCi/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 3, 'SIF201', 'Analisa dan Perancangan Sistem', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1jsQ4glqJ12Iq_6U7OftZxsmRKJvPUiJs/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 3, 'SIF203', 'Sistem Informasi Manajemen', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1oOmudGvoMW-wmZBdc8FFmOsRMgnDsUww/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 3, 'SIF205', 'Jaringan Komputer', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1KU1aknL4ReRAsqSAdZytRTYesVX0yJvN/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 3, 'SIF207', 'Desain Grafis dan Multimedia', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1SfYq7VlJuUaj4C_f1IiqGy20a509GmnM/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 3, 'SIF209', 'Pemrograman Berorientasi Objek', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1ULQKNlEY6ZsQ-Tj_URtHh8mmKJZg2dLI/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 3, 'SIF211', 'Sistem Basis Data', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1vT4GrcKG3iTjG7REffzsujPv0SvcUAXg/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 3, 'SIF213', 'Akuntansi Dasar', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1Uw6x_VTJZVmNasr2VcX_YB99tQI22iCo/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 3, 'SIF215', 'Kepemimpinan dan Manajemen Organisasi', 2, 2, 0, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 4, 'SIF202', 'Pengolahan Citra Digital', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1RfpQ7Rsx_JKf4WEVSDuqkgZq_BFY3E36/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 4, 'SIF204', 'Keamanan Jaringan', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1awd3ppwLtvYcTeGIEy_bYrfEpxTuc7qj/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 4, 'SIF206', 'Komunikasi Data', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1bvD4t8CGrTnEUs8k1JL1mmDjezr4Kmsu/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 4, 'SIF208', 'Pemrograman Lanjutan', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1HuGNX20O5VIeSCYO65ha-IVcTTeFSC3c/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 4, 'SIF210', 'Kecerdasan Buatan', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1JYdXJN3e4FVMP5GF-F5-K0XpKIhumu65/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 4, 'SIF212', 'Financial Technology', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1lQlHg6YK-SjvFYXJZBHAwWzGrM2L-0xp/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 4, 'SIF214', 'Sistem Informasi Geografis', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1u8CPG7qnLpcPEId9FmPazHPQ-UZS6O-a/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 4, 'SIF216', 'Rekayasa Perangkat Lunak', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1DuGmpWOc_kpxjuFdpjzF3q2ygkGUZ7dK/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 4, 'SIF218', 'Pemrograman Web', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1RzN6Y-DWWFzgA1HAwJzTDzxp1GsBaIV2/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 5, 'SIF301', 'Natural Language Processing', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1EVmnrGJhztAeCnRXh25pcmu7IoG2DiDK/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 5, 'SIF303', 'Simulasi dan Pemodelan', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1DYwa_Mv8pfISpfU1N6L2IBgMypaYphrQ/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 5, 'SIF305', 'Kapita Selekta Sistem Informasi', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1yhprq4wnkIkw-HabAgEhaNnti90LoozT/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 5, 'SIF307', 'Pemrograman Web Lanjut', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1zsmTPBeOrFN-UmqPkKem4zuUQiYxxK7o/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 5, 'SIF309', 'Keamanan Sistem Informasi', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1HHJADnh7UWALTzy3IlIi9CDxP6813OCy/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 5, 'SIF311', 'Mobile Technology ', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1AU1A4cuMYBq42uUUF4v4008w8XCuGr1h/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 5, 'SIF501', 'Cloud Computing', 2, 1, 1, 'pilihan', 'https://drive.google.com/file/d/14wnNRzsm0hmSUvmvUyvDJ9wqfPhni3pA/view?usp=drive_link\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 5, 'SIF503', 'Internet of Things', 2, 1, 1, 'pilihan', 'https://drive.google.com/file/d/1EbrWNy2oMnKgLae0tvbb8ngS3d7h2C-H/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 5, 'SIF505', 'Sistem Terdistribusi', 2, 1, 1, 'pilihan', 'https://drive.google.com/file/d/1S7f59K0k30rOCe1LJee98pLEnmWOYyMU/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 5, 'SIF507', 'Mobile Technology Lanjutan', 2, 1, 1, 'pilihan', 'https://drive.google.com/file/d/1AU1A4cuMYBq42uUUF4v4008w8XCuGr1h/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 5, 'SIF509', 'Komputer Grafik', 2, 1, 1, 'pilihan', 'https://drive.google.com/file/d/1FTLajAXqqhogCLXTuLYxe0wmRglqk2B2/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 5, 'SIF511', 'Machine Learning', 2, 1, 1, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 5, 'SIF513', 'Manajemen Proses Bisnis', 2, 2, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 5, 'SIF515', 'Blockchain', 2, 2, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 5, 'SIF517', 'Financial Accounting', 2, 2, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 6, 'SIF302', 'Analitik dan Visualisasi Data', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1LseFKB2j_fTIg22-tCsLcg4rQE_DLj9r/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 6, 'SIF304', 'Data Mining', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/18vN4044MrAMuNtaRvxuRSgVRHuY6m0d5/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 6, 'SIF306', 'Testing dan Implementasi Sistem', 2, 1, 1, 'wajib', 'https://drive.google.com/file/d/1dMAbSBqao3FJJQZ_4NmfZK3iJ8hUdh7W/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 6, 'SIF308', 'Tata Kelola Teknologi Informasi', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1BR0GRJ1aZy8PMu9Pxwib5EJaMYgD7esN/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 6, 'SIF310', 'Audit Sistem Informasi', 3, 2, 2, 'wajib', 'https://drive.google.com/file/d/1aPflmCfFfjjhailpfVnQJVp0vdtD4anO/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 6, 'SIF312', 'Etika Profesi dan Profesional', 2, 2, 2, 'wajib', 'https://drive.google.com/file/d/1US77RJ76itz7ap4eq3N7vlRKtCGOsO39/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 6, 'SIF502', 'Information Retrieval', 2, 1, 1, 'pilihan', 'https://drive.google.com/file/d/1LJZuIYrhgnmZR2f6p6hUVEBwm3gvmu2F/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 6, 'SIF504', 'Desain Sistem Tertanam', 2, 1, 1, 'pilihan', 'https://drive.google.com/file/d/1vh1DvoGNWApXQkeyQpBNKLeBPWsdj7u3/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 6, 'SIF506', 'Communication Skill', 2, 2, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 6, 'SIF508', 'Sistem Pendukung Keputusan', 2, 1, 1, 'pilihan', 'https://drive.google.com/file/d/1LfcS1g_364MR87Vguo0BWRVC7xlmm9iP/view?usp=drive_link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 6, 'SIF510', 'Interaksi Manusia Komputer', 2, 1, 1, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 6, 'SIF512', 'Supply Chain Management', 2, 1, 1, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 6, 'SIF514', 'Computer Vision', 2, 1, 1, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 6, 'SIF516', 'Human Resource Management', 2, 2, 0, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 6, 'SIF518', 'Business Intelligence', 2, 1, 1, 'pilihan', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 7, 'MKU401', 'Kuliah Kerja Nyata', 4, 0, 4, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 7, 'MFT401', 'Kerja Praktek', 2, 0, 2, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 7, 'SIF401', 'Manajemen Proyek Sistem Informasi', 2, 0, 0, 'wajib', 'https://drive.google.com/file/d/1LD5U1Kk1e5WJVLO378DppvcoKAmZISIa/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 7, 'SIF403', 'Technopreneurship', 2, 0, 0, 'wajib', 'https://drive.google.com/file/d/19ue_P-ggbl0-vZH9XpZ1SavfF0bfbZr6/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 7, 'SIF405', 'Transformasi Digital', 3, 0, 0, 'wajib', 'https://drive.google.com/file/d/1CkB-410IDQWShLIUqC35uTYnF1mz6Qew/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 7, 'SIF407', 'Metodologi Penelitian ', 3, 1, 1, 'wajib', 'https://drive.google.com/file/d/1ssfTZqp2UERkfLe9wCSR0TbfgmuXSFKL/view?usp=sharing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 8, 'MFT402', 'Tugas Akhir', 4, 0, 4, 'wajib', 'Link', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_12_032835_create_beritas_table', 1),
(5, '2025_02_12_074741_create_agendas_table', 1),
(6, '2025_02_12_083300_change_tahun_agenda_in_agenda_tables', 1),
(7, '2025_02_12_085516_create_sops_table', 1),
(8, '2025_02_12_134220_create_kalender_akademiks_table', 1),
(9, '2025_02_14_145208_create_kegiatan_akademiks_table', 2),
(10, '2025_02_14_151314_create_kerjasamas_table', 3),
(11, '2025_02_14_153147_create_pengumumen_table', 4),
(12, '2025_02_14_161217_create_pengumumen_table', 5),
(13, '2025_02_14_170053_create_pengurusan_surats_table', 6),
(14, '2025_02_15_023554_create_penghargaan_dosens_table', 7),
(15, '2025_02_15_040132_update_tahun_column_in_penghargaan_dosens_table', 8),
(16, '2025_02_15_040859_create_penghargaan_mahasiswas_table', 9),
(18, '2025_02_15_043945_update_tahun_column_in_penghargaan_mahasiswas_table', 10),
(19, '2025_02_15_044500_update_date_column_in_penghargaan_mahasiswas_table', 11),
(20, '2025_02_15_052448_create_kegiatan_bems_table', 12),
(21, '2025_02_15_055841_create_himasis_table', 13),
(22, '2025_02_15_060826_create_kegiatan_himasis_table', 14),
(23, '2025_02_15_062632_create_kegiatan_himatesyas_table', 15),
(24, '2025_02_15_063324_create_kegiatan_hmms_table', 16),
(25, '2025_02_15_070227_create_kurikulum_sis_table', 17),
(26, '2025_02_17_022226_create_kurikulum_sis_table', 18),
(27, '2025_02_17_025037_create_kurikulum_sipils_table', 19),
(28, '2025_02_17_025805_create_kurikulum_mesins_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan_dosens`
--

CREATE TABLE `penghargaan_dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar_person` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `prestasi` varchar(255) NOT NULL,
  `tingkat` enum('Internasional','Nasional','Wilayah','Lokal','Provinsi','Kabupaten/Kota') NOT NULL,
  `tahun` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penghargaan_dosens`
--

INSERT INTO `penghargaan_dosens` (`id`, `gambar_person`, `person`, `prestasi`, `tingkat`, `tahun`, `link`, `date`, `created_at`, `updated_at`) VALUES
(1, 'uploads/gambar_person/01JM3WK6ZZPE3DDPQK4754XMB6.jpeg', 'tes', 'tes', 'Lokal', 2023, 'https://disbun.kaltimprov.go.id/halaman/tes-aja', '2025-02-22', '2025-02-14 21:06:48', '2025-02-18 23:30:21'),
(2, 'uploads/gambar_person/01JM3WMN81V2SQT593826HEBE3.jpeg', 'tes', 'tes', 'Wilayah', 2030, 'adw', '2025-03-01', '2025-02-14 21:07:35', '2025-02-14 21:07:35'),
(3, 'uploads/gambar_person/01JM3XWKZ7VBNEPCB09TJ33GX4.jpeg', 'tes', 'wda', 'Internasional', 2021, 'awda', '2025-02-22', '2025-02-14 21:29:24', '2025-02-14 21:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan_mahasiswas`
--

CREATE TABLE `penghargaan_mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar_person` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `prestasi` varchar(255) NOT NULL,
  `tingkat` enum('Internasional','Nasional','Wilayah','Lokal','Provinsi','Kabupaten/Kota') NOT NULL,
  `tahun` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penghargaan_mahasiswas`
--

INSERT INTO `penghargaan_mahasiswas` (`id`, `gambar_person`, `person`, `prestasi`, `tingkat`, `tahun`, `link`, `date`, `created_at`, `updated_at`) VALUES
(1, 'uploads/gambar_person/01JM3YWF5E1JV5MR2KK8ZAT7E8.jpeg', 'tes', 'ts', 'Nasional', 2023, 'https://disbun.kaltimprov.go.id/halaman/tes-aja', '2025-02-15', '2025-02-14 21:46:48', '2025-02-18 23:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `pengumumen`
--

CREATE TABLE `pengumumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pengumuman` int(11) NOT NULL,
  `bulan_pengumuman` enum('JAN','FEB','MAR','APR','MEI','JUNI','JULI','AGU','SEP','OKT','NOV','DES') NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `deskripsi_pengumuman` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumumen`
--

INSERT INTO `pengumumen` (`id`, `tanggal_pengumuman`, `bulan_pengumuman`, `judul_pengumuman`, `deskripsi_pengumuman`, `link`, `created_at`, `updated_at`) VALUES
(3, 19, 'NOV', 'Pembukaan Periode Pelaporan Beban Kerja Dosen Semester Ganjil 2024/2025', 'Pengisian laporan BKD wajib dilakukan oleh seluruh dosen yang memiliki nomor registrasi termasuk dosen dengan status Tugas Belajar melalui laman SISTER sampai Dosen memperoleh hasil cetak Beban Kerja Dosen', 'https://drive.google.com/file/d/1lWbPmf9jyMmeNWsjUSZBO-JEgAlWXmgC/view?usp=sharing', '2025-02-19 21:37:08', '2025-02-19 21:37:08'),
(4, 17, 'OKT', 'Kewajiban Publikasi Mahasiswa', 'Berdasarkan Surat Edaran Dekan Nomor 002.SED.FT.X.2024 tentang Kewajiban Publikasi Mahasiswa, Fakultas Teknik Universitas Abulyatama mewajibkan mahasiswa Program Sarjana untuk...', '-', '2025-02-19 21:38:21', '2025-02-19 21:38:21'),
(5, 30, 'SEP', 'Kewajiban Publikasi dan Sitasi Artikel di Lingkungan Fakultas Teknik', 'Berdasarkan Surat Edaran Dekan Nomor 001.SED.FT.IX.2024 tentang Kewajiban Publikasi dan Sitasi Artikel di Lingkungan Fakultas Teknik, Universitas Abulyatama, seluruh Dosen diwajibkan...', '-', '2025-02-19 21:39:04', '2025-02-19 21:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `pengurusan_surats`
--

CREATE TABLE `pengurusan_surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengurusan_surat` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengurusan_surats`
--

INSERT INTO `pengurusan_surats` (`id`, `pengurusan_surat`, `link`, `date`, `created_at`, `updated_at`) VALUES
(2, 'Ijin melaksanakan penelitian', 'https://forms.gle/axDpFxxq61kSuPNw5', '2024-11-28', '2025-02-19 21:55:40', '2025-02-19 21:55:40'),
(3, 'Ijin melaksanakan pengabdian kepada masyarakat', 'https://forms.gle/B1w1nCYqMSJuLkui9', '2024-11-28', '2025-02-19 21:56:37', '2025-02-19 21:56:37'),
(4, 'Ijin melaksanakan kegiatan di luar kampus/mengikuti seminar, dll', 'https://forms.gle/6s6FTK98KQif5raAA', '2024-11-28', '2025-02-19 21:58:58', '2025-02-19 21:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('j0pLTeFnLIyGMd8bt0p0Nzx12y1nR60PnXa37sbD', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiVVNNdHFSMkdIOHJ1TVlndUV6eGl5MVl5SkYzdUVHdXVkSUxYN0dyVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkWWRtbFZoajVZV3pGbExNWXhrYjRSLmhkWmo1dHJVNWhOelhFQVFVLlZkM2MvTGJjWTBlaU8iO3M6ODoiZmlsYW1lbnQiO2E6MDp7fXM6NjoidGFibGVzIjthOjM6e3M6MTk6Ik1hbmFnZVNvcHNfcGVyX3BhZ2UiO3M6MToiNSI7czoyMjoiTWFuYWdlQmVyaXRhc19wZXJfcGFnZSI7czoxOiI1IjtzOjI3OiJNYW5hZ2VLdXJpa3VsdW1TaXNfcGVyX3BhZ2UiO3M6MzoiYWxsIjt9fQ==', 1740041774);

-- --------------------------------------------------------

--
-- Table structure for table `sops`
--

CREATE TABLE `sops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sops`
--

INSERT INTO `sops` (`id`, `nama_file`, `link`, `date`, `created_at`, `updated_at`) VALUES
(2, 'Biodata Usul Ijazah ', 'https://docs.google.com/document/d/1e0L2hJY-k1h84YTBD0u4pcFy0gyIe4Jg/edit?usp=sharing&ouid=113791097037092795730&rtpof=true&sd=true', '2025-02-21', '2025-02-19 23:06:46', '2025-02-19 23:06:46'),
(3, 'Panduan Praktikum Perkerasan Jalan (Sipil)', 'https://drive.google.com/file/d/1ikXcbOsKMDqNRGwPCml-GZ927fsx1hbx/view?usp=sharing', '2024-12-05', '2025-02-19 23:07:16', '2025-02-19 23:07:16'),
(4, 'Panduan Penulisan TGA Teknik Sipil', 'https://drive.google.com/file/d/1UUx4EQlQo2TEcD3yppsm6N4lkXcA_RDS/view?usp=sharing', '2024-11-29', '2025-02-19 23:08:02', '2025-02-19 23:08:02'),
(5, 'Pedoman Ejaan Bahasa Indonesia', 'https://drive.google.com/file/d/1e4vAMuls8EnypFjcLcZY-MvNoAoHXLS8/view?usp=sharing', '2024-11-29', '2025-02-19 23:08:29', '2025-02-19 23:08:29'),
(6, 'Panduan Penulisan KP Teknik Sipil', 'https://drive.google.com/file/d/19QfxvWuQPRI7XEhrr4BqTfp2FcgLAJOD/view?usp=sharing', '2024-12-29', '2025-02-19 23:09:19', '2025-02-19 23:09:19'),
(7, 'Peraturan Akademik UNAYA 2024', 'https://drive.google.com/file/d/1IjkMxi2cpcbzX1khP3_m6FE9EVoP4nKB/view?usp=sharing', '2024-11-02', '2025-02-19 23:13:43', '2025-02-19 23:13:43'),
(8, 'RENSTRA UNAYA 2024-2028 ', 'https://drive.google.com/file/d/1b4hjDc3DLSYMKcIlcVq-lAInyu3Q5SGu/view?usp=sharing', '2024-07-19', '2025-02-19 23:14:09', '2025-02-19 23:14:09'),
(9, 'SOP Formulir Akademik Universitas Abulyatama', 'https://drive.google.com/file/d/1NLRkJR36WkTIYB9TmmT7otzG8zL8R_PI/view?usp=sharing', '2024-03-25', '2025-02-19 23:14:30', '2025-02-19 23:14:30'),
(10, 'SOP Formulir Akademik Universitas Abulyatama', 'https://drive.google.com/file/d/1NLRkJR36WkTIYB9TmmT7otzG8zL8R_PI/view?usp=sharing', '2024-03-25', '2025-02-19 23:14:54', '2025-02-19 23:14:54'),
(11, 'Data mahasiswa Teknik Sipil', 'https://docs.google.com/spreadsheets/d/1P8VPvtjgojKwI0HtGcRuHHtn9Ir707B6/edit?usp=sharing&ouid=113791097037092795730&rtpof=true&sd=true', '2023-09-01', '2025-02-19 23:15:47', '2025-02-19 23:15:47'),
(12, 'Panduan Praktikum Beton (Teknik Sipil)', 'https://drive.google.com/file/d/1KCJA000PgcqouNgZYJajg2D5Wi1TQVQ5/view?usp=sharing', '2023-08-10', '2025-02-19 23:16:08', '2025-02-19 23:16:08'),
(13, 'SOP Penelitian dan Pengabdian UNAYA', 'https://drive.google.com/file/d/1dlajEaMCIP_CBvpxlu2IiM3aJkkPV2oj/view?usp=sharing', '2022-03-12', '2025-02-19 23:16:31', '2025-02-19 23:16:31'),
(14, 'Formulir Mutu Unaya ', 'https://drive.google.com/file/d/1bXit621kaKw-WYBO8Olid_7zvF33vF7J/view?usp=sharing', '2021-02-25', '2025-02-19 23:17:31', '2025-02-19 23:17:31'),
(15, 'Petunjuk Praktikum Mekanika Tanah (Sipil)', 'https://drive.google.com/file/d/1DujAXjF3hTBDuAcYIXrq-gVqjXz0TdXM/view?usp=sharing', '2020-12-20', '2025-02-19 23:18:00', '2025-02-19 23:18:00'),
(16, 'Petunjuk Praktikum Hidrolika (Sipil)', 'https://drive.google.com/file/d/1D_7SQwKtuFwdpfaBKcF14mH2tDP7Xjx7/view?usp=sharing', '2020-12-12', '2025-02-19 23:18:20', '2025-02-19 23:18:20'),
(17, 'SOP Mahasiswa Habis Masa Studi dan Menngajukan RE-Nim ', 'https://drive.google.com/file/d/1K1em3Ub8CwvL-ljUkJQlCH3VaXw8EAjT/view?usp=sharing', '2020-11-02', '2025-02-19 23:19:12', '2025-02-19 23:19:12'),
(18, 'SOP Konversi Mata Kuliah', 'https://drive.google.com/file/d/1MMaE5DwpsEokZJCULADpE-nsIqIdj2KS/view?usp=sharing', '2020-11-01', '2025-02-19 23:19:27', '2025-02-19 23:19:27'),
(19, 'RENSTRA UNAYA 2019-2023', 'https://drive.google.com/file/d/1z8Ucz8Y3gpZ6-1uXxLKoRi2_07YejWbH/view?usp=sharing', '2020-02-01', '2025-02-19 23:19:43', '2025-02-19 23:19:43'),
(20, 'Petunjuk Praktikum Ilmu Ukur Tanah (Sipil)', 'https://drive.google.com/file/d/1OlBbkJNnIxcM6-RQkHX94Zkh5v82bOCo/view?usp=sharing', '2019-12-12', '2025-02-19 23:20:25', '2025-02-19 23:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cut Rahmawati', 'cutrahmawati@admin.com', NULL, '$2y$12$YdmlVhj5YWzFlLMYxkb4R.hdZj5trU5hNzXEAQU.Vd3c/LbcY0eiO', 'ZrDEnY7RLBrlXshAFmZ2mJDMmo9ex7AyUfjtk7FrzOTKcemlI7uXOWE5lKCT', '2025-02-13 19:18:52', '2025-02-13 19:18:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `kalender_akademiks`
--
ALTER TABLE `kalender_akademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_akademiks`
--
ALTER TABLE `kegiatan_akademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_bems`
--
ALTER TABLE `kegiatan_bems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_himasis`
--
ALTER TABLE `kegiatan_himasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_himatesyas`
--
ALTER TABLE `kegiatan_himatesyas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_hmms`
--
ALTER TABLE `kegiatan_hmms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerjasamas`
--
ALTER TABLE `kerjasamas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulum_mesins`
--
ALTER TABLE `kurikulum_mesins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulum_sipils`
--
ALTER TABLE `kurikulum_sipils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulum_sis`
--
ALTER TABLE `kurikulum_sis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penghargaan_dosens`
--
ALTER TABLE `penghargaan_dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penghargaan_mahasiswas`
--
ALTER TABLE `penghargaan_mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumumen`
--
ALTER TABLE `pengumumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurusan_surats`
--
ALTER TABLE `pengurusan_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sops`
--
ALTER TABLE `sops`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kalender_akademiks`
--
ALTER TABLE `kalender_akademiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatan_akademiks`
--
ALTER TABLE `kegiatan_akademiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kegiatan_bems`
--
ALTER TABLE `kegiatan_bems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kegiatan_himasis`
--
ALTER TABLE `kegiatan_himasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kegiatan_himatesyas`
--
ALTER TABLE `kegiatan_himatesyas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kegiatan_hmms`
--
ALTER TABLE `kegiatan_hmms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kerjasamas`
--
ALTER TABLE `kerjasamas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kurikulum_mesins`
--
ALTER TABLE `kurikulum_mesins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `kurikulum_sipils`
--
ALTER TABLE `kurikulum_sipils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `kurikulum_sis`
--
ALTER TABLE `kurikulum_sis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `penghargaan_dosens`
--
ALTER TABLE `penghargaan_dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penghargaan_mahasiswas`
--
ALTER TABLE `penghargaan_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumumen`
--
ALTER TABLE `pengumumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengurusan_surats`
--
ALTER TABLE `pengurusan_surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sops`
--
ALTER TABLE `sops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
