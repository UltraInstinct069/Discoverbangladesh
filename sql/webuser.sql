-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2017 at 07:57 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `Email`, `Password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `availibility`
--

CREATE TABLE `availibility` (
  `AvailibilityId` int(11) NOT NULL,
  `Available` varchar(50) NOT NULL,
  `AvailableTime` date NOT NULL,
  `GuideId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availibility`
--

INSERT INTO `availibility` (`AvailibilityId`, `Available`, `AvailableTime`, `GuideId`) VALUES
(1, 'Yes', '2017-12-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL,
  `Feedback` text NOT NULL,
  `FeedbackTime` datetime NOT NULL,
  `AdminId` int(11) NOT NULL,
  `ReviewId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id` int(10) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `gpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id`, `gname`, `gpass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `localguideinfo`
--

CREATE TABLE `localguideinfo` (
  `GuideId` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `HouseNo` varchar(50) DEFAULT NULL,
  `RoadNo` varchar(50) DEFAULT NULL,
  `Post` varchar(50) DEFAULT NULL,
  `Thana` varchar(50) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `Password` varchar(50) NOT NULL,
  `Approve` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `localguideinfo`
--

INSERT INTO `localguideinfo` (`GuideId`, `FirstName`, `LastName`, `DateOfBirth`, `Gender`, `Email`, `HouseNo`, `RoadNo`, `Post`, `Thana`, `District`, `Password`, `Approve`) VALUES
(1, 'Abrar', 'Abir', '1995-09-15', 'Male', 'abir@email.com', '12/5', '5', 'Tongi', 'Tongi', 'Gazipur', '123456', 'Yes'),
(2, 'saif', 'hasan', '1995-12-01', 'Male', 'saif@email.com', 'N/a', 'N/a', 'Sandwip', 'Sandwip', 'Chittagong', '123456', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `localguideinfo_contact`
--

CREATE TABLE `localguideinfo_contact` (
  `Contact` varchar(50) NOT NULL,
  `GuideId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `localguideinfo_contact`
--

INSERT INTO `localguideinfo_contact` (`Contact`, `GuideId`) VALUES
('+8801710', 1),
('+8801952', 1),
('014556', 2);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `RequestId` int(11) NOT NULL,
  `ServiceTime` datetime NOT NULL,
  `TouristId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ReviewId` int(11) NOT NULL,
  `Review` text NOT NULL,
  `ReviewTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PlaceId` int(11) DEFAULT NULL,
  `TouristId` int(11) DEFAULT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ReviewId`, `Review`, `ReviewTime`, `PlaceId`, `TouristId`, `user`) VALUES
(15, 'I was luckey to go there.', '2017-02-09 11:39:48', 1, 1, 'Shahadat'),
(16, 'It is  an wonderful place to visit.\r\nI would definitely recommend this place.', '2017-02-09 12:02:22', 1, 2, 'shuvo'),
(17, 'Guide service was really helpful', '2017-02-09 18:18:07', NULL, NULL, 'Shahadat'),
(18, '@Shahadat\r\nThankyou for your concern.', '2017-02-10 16:02:49', NULL, NULL, 'Admin'),
(21, '@shuvo\r\nyou''re damn right.', '2017-02-10 16:11:54', NULL, NULL, 'Admin'),
(31, 'Thanks.Everyone.', '2017-02-10 16:21:43', NULL, NULL, 'Shahadat');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `RequestId` int(11) NOT NULL,
  `AvailibilityId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siteinfo`
--

CREATE TABLE `siteinfo` (
  `PlaceId` int(11) NOT NULL,
  `Division` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Thana` varchar(50) NOT NULL,
  `Map` longblob,
  `Details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteinfo`
--

INSERT INTO `siteinfo` (`PlaceId`, `Division`, `District`, `Thana`, `Map`, `Details`) VALUES
(1, 'Chittagong', 'Cox''s Bazar', 'Cox''s Bazar', 0x89504e470d0a1a0a0000000d49484452000000f1000000a00803000000eac77a6900000009704859730000001c0000001c000f01b98f0000016e504c5445c8e1fffbfbf9e9f2e4eef3e8f8f7f4f1f4ebf6f6f1ecf2e6f7f6f2fdfdfcfcfcfa8a8375968f82f4f6eff9f9f69f81b2e4efdee5e3dffafaf8dad7d2cecbc4b8b3aaaaab9af1efe9bfc3b4f0efec9b978c5c5340ffffffe6f0e0f8f7f3685f4d6b6655cac7c0b39bbff5eeda736b5ae2ead9a09b8f7e7768dde9d5ccbcd3f5f3eff3f5edd2e4c8f3e8c7cfcdc7eaede1daeafbe0ecf9f5e8bfe7f0e1f2f5ecf9edc93e3623917bb6fff9e7f5f6f0797365453b25f6f2e4d6e6cde8f1e2494230f4ebd2f8f8f4e1d8e5f9f9f5c3b0cae6eff8dbe7d0ecf1f6d3c5d4cee4fea19c91dad3d8f7f5ede4f0ffa396adf2f4f4947da6bea9c6514733d4e7fcab91bbf6f3e7fff7d5becef1fff3cf544e3cfef3cdf2f8ff967c98a29a866d695ceff3f5abaddcc9c1c6e9e7b49d93caf3e1a1fcedb3ebd594dedaa8d2b5a45a5127e0f0c8ffdc36917f2cfff1b96c9f43cbe6a3c8ae31b6cfa1d6ba3388b167ad972fe4c5347fab5be3b734a3ccff84742b8f9772c5000025424944415478daedfd677b22c9ceb001d0994c2693c924676767676767db93276ede3de979fffd2b55754337d00dde1d7bfc45d7390c34bd363752a92495aa6cd297f337e66164e5ee66f2b2ef3b9793aa77ce3b3f78d73cbc242d712ffc3376d5e8fffeb8bb4b24b828e0939e5b4549c0f70c884dbbdbe62164e1eaea6ac1b9dee71d3d6293681e5aac71f293c7ee56fabe3ddb269d48b481e9d7d0e797e025d16428a3e6c1b2ba303373c930dede77748987fa268938e30cfe73a0474cd509c29ab936708d5ca9e9fc4863e2613e9bf3723e9f8a0518e7bad3e94ce2837315ff6f403ccc17492419b7907f1726f588cd02e760dd09b783b04bca4554fa38cbd5fa285a8d373272de053ccc47731ecccfcc6ccd472c0c88d50a0f167c60d635c4a39a5f641e52acf155f26f6e727241ff2e29e198a0ca4e4cd02b223c1f9775df2d9d8f4147ed9bedd1f35dd3f9f9c8e8e6f670c6e75c07e299798f25103b2b452cf9d2bcc5973a4bf9985535b1e6bb1cd675c9368d8ecb885870c8d6bd2428979694e1cdf5dcdd51e723dc89469cccfcab5779fbbae72cc2146d96bcdd6289f9197f8cf1ea129b86fbc98a4d838aafc606dc2b48e3ac6ae4720a712f9546c17f4b80d89fb1a742411bc344ce2c79bfc51703a34ef90c8887fb6d8a4d9b1b379339e35b3987f6b543064eb0ddef98ffa182cd849849cee4fd413bc37890d8ea4b0171cc887873a81facd8f4c2d8d5d881f1bd30602734176a0ed98d8f77a3e1ef3ffffb0a365362a615f32956edb7327dac7a44433c8c476cdb34c438932bc6f70afd862c9da496ba6729d323e68afe02c4f9fcd9ab9999402a859e0b887da97cb7e7d2f8ea619cf5aa45b169245e30be998371bb248a139ca4b661d9b2c7b5daffc7c0408c53d1ccccd5e53a9d9dbcebcc80d9c9743ef8a7c6e3ed30ce786e42998580cb61963a13329176043aabbefaa820b7bf60cc615eb9b9b9baca993102499afb44208f2466e29664fbc5c2e400c725e264e410dd09a9336867b98402acfd1e1e498c619599109197de76740951d1cdcddd648e5e412d27cdc999999c42bc7d78783832b22b130ff8a5903e30aa9797ba31a62c1262090e6ad154a10eb75ad44a369986cb90a8100b3627f19120337ebff2d12e57266f6e40a7e48ad7136056cdeb99cc4c9b782d707f3872a8201bfe96f578dca9b93076d330ba9fbaa804870ae6c66755d7fa29f971e318bc5491597732a579c60b7a5e678a4506b54e42eadc0a645133af5ec115c69f871b9857af660e9c49b4f4e3c377afef837343118345af6aafe8e68ab2386888853126277b6c2df1b8eae661bc48478018661d9876e74900cd588018c44b5c154c473333ebaf5e5d26190b10831b2bbe9aa15e8c39bc0762306c85f858f75724ad716bf7b5c6c0908bd835ce4f68d902c41d9c86583d71991e95ade24c146698a27dde122941c264d92bc5ce20ac0cc462f068cfc7f698225eb136f34c201529d277eda9981d89a3afdbc4ba11805c01d0ca60e2890e58ada748807e9c8a4398309b1e93ad2271a004f1947fde120832be33cb5e3e1281e0231661f281668a89e443c57c2e17f3f9f3be98cffa2a9f0bc57c3e1b3312dbf70f476c8d77d516de1ce3843c28e69a6deb584af402279428845d12cda6479935c657314f380fc4567fb1386fd903abce3783a96231bf578dd90211cb1ec42279bf3f761660bc308ed7f34d8ba7188df9b5c434ccfcdf20016074eb83431073ad0686cdb280c70aee3e42fd190628a6472919898bc5521888f7004b21de2bf9fd7e8f85f1db63d5bd62f212de3a7b05c135256ec602ef525dc4d45dfeef676301e251bc73e0846ca6410811d6dc077989de840398cc8e438f6424f6c4620cb096028c4f21f68155fb7dc112664c70c50bc4f9199bdd1925c441dbe1484c97f83f7f80e0bf3fcb0f7ffda53c2031118312485bd8369d5994e113429b5d159aa87eff60b15a2c9035948a48ec8bcddbe6ab94183c57aa54b5d8d07f912b489c4b85c16fafe69b91d7f3af63612d311d4948fcc72fbf7c5bfef98f6fdf7ea60fff0f843e7488cd63038965369ca694e49815cd6a752bd582018e442b71100ba9eec8951df985b55df051ae5b0fa0dec730335749c66af1e2ec757fa89e9d3ac420dffefaf98f9f91181ffe0daf7f06dc290df18009198c9ace4fb3e39051282ac6b12bb589957c827e8041a1a6b8bd397abe998c83595b009a91ab774e084356d7e57a5e322917f5564975ef20978380e466f280dee91c3907518015cf45807ff937c1561efefd0d5fffa5d1716360822c973dccb525112055955cc5da13ca7da6814ade1c21852f9091388e86a417a0ad4ef340c93530d65694d38655790e42fcd7b79f35c47ffd018ffff9a61ec790a718b92e7142b15f8cad70a292ed1a2725512e79b5034d8d9551c13401f442e745715b0e8f56c156ef778fd7bdde2481b626e9ad34b7e82b070d15b1b60832b289cc84f8db7f34c4a0e065e5629b7861d2d0ac97dc728c85954b29c14ec8c40961b6edc4130eb348be67e52374c23ea71236f2c03bd2ce8e9c4cd1621d1d653c0cc91dbcf1381dd5166ae670efa56c7862aed168ace4160e607d06ac5afeb19ba62ed9a4c4ff5efee5975f54c4dfd0692d7ffbe597ffa888cdc6759f8e4b36d3dca91363c2158782cc096ae2111531f8e3482a60f5aeaf3ab7effd7eabd709cf18eb3cd8f22103b312497fe9e8c474421edc3069ae2c88e685950626519039a2863b91c31b8d558f6eee02b27a7622d3113efc010ff2b50eb151e1674268afc528f17367aa428fad689cceca5d234b268ea482c40d5b2df7d12275c8560b10773cb3fc488b1d38b899194249c66e5bd4a1927a2083db58032d0f1181c87239a6135a4f488971b1ed9051bfe2ac86d8bde4e82c4e3954c49df22212db6c34fd29eed963b140933cb3ccdbcf62be7b987d49011e82aed47cd17e76e643f3875fb4d246457042ae890dd5c4c7e60dd785c9344494a90878eb85fec0890e111a756dbcd6ae70c9ba9d60d537740c4d456cc3823325b614a35685d8c704f3162026a54a489b98c87c9009e4199acd8ad43703ee0a9401c485dcca8afa33aad7f476cd1e970b90372df17e6b92fd243779a363d6b31d154fd404b06028f8b8b5e9449b187d79e76328231933c25480b12ac4c57bf9d97c9c61e62d185332723809b579fc62daf93b8ce1c68a4eccbfad223e37675d3ba7ae8bcda1816175b1bf598b82a4811396dc7841e89341b9e93837f520037104523d0bd16c1188adefba886901be0fb191a84b7ba3fbae6c2874eaca3acd434bdf758909a4633b560bf5783afd3a26fa01935288a90799f8ea402c82e9411e892de459af553f8e58331f5fb8d6422118cb6be6a105d79e7acc07bdf052c755835dcbf1863abcec8824495debc7e7e8b00931632f59c0510171f82c88cf5ecb9e8bac2b6101fe91c49ac9e9ad6b2314aac62bd36b647aa3954f7da121510e2aa3ca9cbc8a3183d789f51d5655a5752f296b8a60eee3fdb40cf98486d8b4fb8646204e9c8d684e80cfe0c71fde4398054fc99a837676a2beda58363541e687694f2864b15c64cd342b21954f7d601a12c15d332b07ca25088722b49eaa44188a1eddf2aa6aad0f6f829bedee11c03546fc4a49568091d72a3c9040e3f83e0ec9cf7df0cce3552210fc176e1cec7d44edaad3f5f40500c7775c1b0c692f4097e1552aa23441595732926427246ae667ae0ee85d5e7028be3320e640c79c94906a4a798b93dcd26caf4353be8e893e5d11aa5c1989795402bee0ad55c6bb7dbfb376f8087743e5cdaef6574cbbf643de78f5747a0d593cf311749272688b39a7a56d5ef895b743222086d2a87cd73cdee324a1c6b88089045134372eb2983f40c228d4a874d5bd843e7d2023ede8cb8b6314fcb59528d9520a32ab56e6706497374a1f7aa53ba2fe00a3d81c3787b2d3a3c465cc7b9aa9fc593e6281a53a789c2fe5e50080bc663a2191e62e4b731e75ec9648d54e1ebfb55978869f5f90f3ff1a4c56ea000ca2ae5e62eabf54c47b34ca847c019f7821afbf6706f81a59c4cded6e8b06b7359d05afe50d85365ca7c7f35012b45b9a671ea614b4001e3cce872d323179cd7442a2b3ad99b9f65d94d8412b76ca5c24d5c476355e847004bf088d7d27faf7faecbee9229e8758d31787098ac497f7d1b9d499bd5f3b53172eb2eeee76fff469d79a10b78642a15636bb339f0dd852a332612458c44990b1a85e17195548b430f3aa7d1725964505b5044315cd5c6c6b555de863f5ba9b36bb88c34cb084c474262ebe1e1981160023dcedcd91fe3f19547c0a6e3a4464a7325fa954521b6142583d0bf86d482c877be435259643222456eed2108f8f7392ac647c998002b5e2aa13a27a7942d2ede71ad51263940dc44a7c193d3c7cedd7121f6f5319058125447d997679bc718e1257f9793ee2b97db74108f1a79708310d79c86b4a4c42a266fe60e65551b94b4d3c2bc8e952820c485c57e4049693d8717757840d454dbd0f86831989bd1a6239be44e277dba4e76f7bb4a709cc50de4e57f8b8b0d82686f682221f483bf1d7d8e76330a88198c1e0477e0dd9b81c1281ad2f040398b3e15d1a1d9b95e5719a200bedc680de497949f7a3411dc81b815430126bb689dbf125128f9c63e7d763e5832b12772cd65b94d8c18270ceb5ca3e0d7498376b1e082c68886391e31b3924c2392bb96e652c44ac74766a0b0edb25b3435e6e1194d2409f3044ffb3e1bab73f75160b5a3bc44a7c49884d7f43ae5da7d0d1529789dd6522f5c4c6c5db510c68b64fb3a7d9351affc835d0f57648047109b365b3954a4198b4c97b2a60323d09e66ee925e6f43fdc310d41da85680c32dbf125cc517f8bf8836bade58ed765abdeaacbd274b9a63fec1f7bdfbab2cde9d3ce07f67a89b758f57ae17fc0ce1473330b077e9ca5b5222f2077561e443a23cf3e86180bbaabb48e85c19fd52217b7566900c83f6af8ca72edba90161362bd408917ebf5c5459832387761bf5259dbd8dfdf298c6f6cf05eabd50ab060c01e1a7f4522f8142cda672b967c33be22d315882f111735deeef481f4a2ab40afc8b8fea73bdfd42c6b33dd5fabf97873e4b1e3f8ad6ba7505fe5641587ea8beeb2bb1cce64326178084703efe049e028ec6f369bb076d76cfaeccd30cc8c117fb0e9b1357d7839e387653d5b26a29d2a3808a8139d75713466097bc8ddbd62f8017755bd7cbdc4286f361fa56a97abb5b86871b764e242c85d7717dac4a98c0f9fcc05803568f3fb53cd40be59b2d9024120de4362f81afcc160068857b43a86163d4ed5dec2627b57bb38ff0862f5ce81fec4da6ace2081bc1810e3ee9022d2627d4b2cf2bc4f625987c3ce3938d6679f3bcd07a0ed20c0e4a1bdc062f17b7c417fd312819a2ad8b4c71e6c5a93b046dd30a85f032ada34861e9059b1ecd223884dbb4a8dd3f2cf89af21fa585cac5a3ac4e0ba5a7cd1179c9f08d85867745d60a37bac7de35dc9620d02b1d55a04b7e9c947a0680e1931538a404450f243b8b27065bcda483a9d24a8dccaafe5b86b0972cac19f534e1fe3ce7f4cfc613a53af17f859a94d5c5884d7bea02f15b5ed05ac45a7381760d939db9edd62032e2466a0e5b12813fb8a116842f123f1fa64ff6aae59c92d50d8ce7425133b20e718e283925c6a35ae53a5d8340d2b6fa78fc03787980e3048ab20f2369e77b0e528103b9b365b39fa2ecb5bc2f6928f1203b32d4c756c2bcd472831b372a7b32ec32aabe3e8b696ba88c1b7b1c37c54520b8af707360fefaea74f9af5ba3b6475ab81411c1ebb9965a3196b915f97fc659bcdb3b1069140c41e43e255a8c244b0d4548469caef9175ccc04a545fbbc60998045e746f8c83764228c55c6dbdda48f4fba18737ea0fd3817a7d0bca3de5b23c17cb52e67c36db5cd0e12df266d6562ecf8d5fb876189b875af52ad6f182480c1528a8e67929f12a365df7b16b4c0d05e5092614a0d6d94e4d606258625561a44b869e9cc06dd5497419dfc2c70e30204b185e4ff03c5f6589bc73b9762272b487654339d023bf50ee96e3cd3a76cdcae9845c24c0494a5504a90d4d6c3aefdf65773cf03fdc95bf930f2761a262215ec790abae160844ca5b21a15a6d95dd85adf256bd79e43aade01ab6737364f4584c928a1f752449d292b04e5629fad8b55823c4823c2125a81febec8a1a9e586727c5e880ffea7c74c3f5169f5c4f67cb44c55586806f698871442b439b5ecab8a07cbf3d0241d01b51a731a79f5dd712501ae03aebc75d5d9a8f22eedb11f46680dfba3ec514e1faeddbeb0f50bf6c61385d150961414dbca5f6deb2bd874f363647473100d26d0eeeb56b6c7a49c0b24cc78c050df163ac1ae55c7c24f0075840dcc94e7f9806c9ca40bc037020515413975b44da510991930b1834b0ebea8d6eb759af5dd3387a5c5df79034c4ece3884dbb23a3a3dbdbe2d0c0d3d97d28594ec3100e0414ab75b24023693c972234a352b47f74128299e0dc68876cb75df7e68654adaa3459781cb12cbba3c7c30093a58750a802c475a506100a5997ea500229f40196b366e5adc0c93e54cf8cfbddbbec5a5db54c24fa128fff2d629091c1159f6b5c7a20c4186b29293104207577bdd04fc5189e84487641c47f724a9a1c2029d5ed95edb26b55722889ca2c2c178226e8e2c492687a22b9fe30edda4180966b1a438f7a59268ebb0bad7a7f6059c92df95dd791d224acdf45a9ddfc85d5bd257c6049062128611748823679d16ee3ef2abbd71fde56d622a0d80ba26158179fc604a2aec496f10210eb09357dc95d803979ebd4e5a1209b067da3eade36328c39d0a6d29008a1b5d25a8d2eac969058e9bbeb78348b1d1e17aee90d0a882aceb6d587abc6650362c51088ecbb76e8a73d37d8f4b7d0e99610888ab5db142764372b12eb9e7518556fffa644809608d570a802c43e958aab96c5426838e2962b2b131b35ca0231d96f53c3286b5cd0b9aba66c44ae71a6ef2c2dd70625963ff6c5f4f4298e4b2545343beb06c405357128eb8a904f396a449ca3bdd7026e4315fa4cdd5c8d122bdfc5f726de5d7355d62ea88e23f0a1d75ce0c0d42cbc6044dcd210575cfb94d8009834011d2092ceb9012c893467db7b171da6ef2c6bb038ecd9a1c480bc333deda213ec629914f4785e92862286100c7ed66062b9096896d3797b5cd26ed4fceebe7a04fb963c6de28de9e98d4535919557c7d48b859626a5a0ac6ea02de038b8b8209fd1785343e34e99921d529fb77bfe63d3f7962c8e6020de21c4d9e9e97d0d91b5aa4a9bd0d4e557f0cf2275e872c48dcfdbf39381a8ba9e24dd1331d462fadef2165bb580f8341422c42ed55c04ae385e2da8552e1397a516bcb945b2c6c5ceb7b1efaa0cfafcd0a2daeeca15c759c37be9a12fa6ef2d6f5d1520be38cdee5409f14587b8ece093f1760eb1582e544190784ba299247e055b2afd875c59ed1eea1e998030b3d36bee480806f7d6122479347d77817587d046656d7f8d3f8e6889dde58033de7e49eb3c3c09a317a92bc744b933ea17b7168f4e0a6ece00821b83267d552ad1b59d5c7bef3fc89d8c05161eaa6b47b1a9655beb5800cfe5815431bc8520ee70da192fb4151e9d9a829b0a6ca71e80764eb4af40074ede1912b794f8838a236170afe05ee284da53e8d8f4e1a29a99b29f36e752c7665832ac54b2a795cabe7fdf3391493bbce32ceb41cb5d14a269587e49cd41a80baa4e56933ccfb182395186d1e8706f9112dfd6c9a9db686ce694ad5fb3c425739231b1669fc47794b7d9b5946d6d63ad3515f6464e6db6d3cada91ad52d9b0bd7b175c657c7bb66c65c3751466ed696e968f2e73ab7c261af4389d81a8dd1e0d725c792f1a6039d6eedf0bb32e973b61482c37ad73249e5ed21bc6b31cd90fc53d11b1a9b2319559739d46321e263035f77a2ac8ef2fdb2bb6b39db5cab16fb9545ab6552ea68f809865a5b939afd3761b9d5bf65803d16874b92436974bf6659b204c2dc7826ce0c46de48c60fbc401f6a4aec36146028c54bd999b1efa43eb9aa62790dda3a98cf9d4b511714696f73c9ebde508135ede983aaa642f76ec694fe5e8b5a7e99a66edcbe9f4ed6d61d593f6f07c2a6a05db8edeb644bb9d65035340bcc7b2092c841813e770699dc14c7889d5fd72685bccd3118f64813804fd697c660a0aecfc54c6c9cf2ddbf935e89c3f5adec351bd75347d1e8d85c3c1586962820b47a3b751be0ab7fb26603d75cf5e42e2f078b9b063dc827d49b7f779bd82503388cc1c643fa3ec034d4f2023fb53816428b25339f64ff1d52a210e4e05f86a687f0714bc7c7654590c9fecdad3c7c937e1a92d076cf004e275beb51ce513a05f9b4c2c600c62a863791fd4ea8006c259c88fc7c7658f607a021939bcb547aa49cf54c03fd54a2643537eab67d9bedce24382e514346c5baef8165b8e687a73f3383cd5cc4c95592e0d569d4ec32e00216d63d93021ae0d8ebae412c8c036d11a37eb968bd7a62790ddc3bde55333b8e17de6d6eeb5da6e2d96d773ced773bc5988cfa52b95bde5ca5639c447d3a3bb9ef4ad2333e567fdcbd1d5e872199abbc4f49cc0828e27a6c2b31875191363540d4ac6f33a06b479a3f3629f8ad8347a689b8a2ddf368f9dbe5b109f2508aed83315768a71b8909a0a7acaadd0b11d2290a9399f832b4dc56e6373e21411af6ff976796eaae9980a9b9178c39063e5e68ad6b9a0c5cd6bac66079cfa233e15b1e9f0b072f40e960aab4eab3f03edd83cbf9e847d805638808af7650a1c0751e5e62e3bb23b3a229413ac3fccb282c861cc213a1de5b00f5e423b1f21ce1a514039e0468e41568d2d7b5b548a65a6a791f3918d0d4f15ca5a4eb0364c18aa21f208071459797315434a0137f972e573481a60ae943889f4efc13db335e88c960a65d2ae9aed21563af95072b84552ce246023a1be616f6f9a9543f44c4f256fa7316dc4a287a692230033b952c5df1d92ead7d7104743ce24986797ca98154b8502ad0b90fbb317ddc074fd98ea13ea1f77ededaf49bd7624332da36c3e3131661411d018efe4ab307caa54b0d5db1af75645dee973f2b0625c287bceb7e10db333b4ef7c5393aa55584ba60d5f2d44cfba7a88a1bffc0c8e67801d22e6c6cc24399f94ee6d67acba4399148eb6712ff593ad49805cefec9b218e82d1eb65ac4e9e08b41f3a7938b807fe7d0ddb7d9d3cb407083c2c2f79adef8ad6fb6db8054773b9e02e2f62debc757432db430c3d22d0600e7a3e989981e30a660e50e71079c1de249d79992e5f89f8cf53128f6ca452e9747af9f5ebd769f8dfad2d1a4da7f045faf52dfc9382272053cbf808afe76ec97be9db589a95d3c5c545b2a6da4b8c5becf0ec1c261383dd2281d87c001b8261df6c1f62dcbfa42ef19b9e4e460e7776d6784f2a62b582cdf1b6608b8ffa51c7bcc71eb744a61ca2b8ca05eca520c7f34eabd51eb55a0f79de5c02c7dd2e85f94f36fa11fbce3c70760e1cee9789b5665273eb1e7232c9fdeb66f7484ed2617fcfac137b5f5d7d52625875dd3f4a476fe76c556bc1664bdbe7c2d10ca067e66c364bdc91e6266c66760e7a7b4ac1a8dde9cdd8730be71eb82f9ce8d4417a330972ac1fec9781b3735ec1b92a7938c6f1559251ce62b176abd77b7fb8f9661b776de16116f03a697a42193d2cd92b9e349f29c56ff7f868263317cd30ad393be87add124f7342bac0a621cef207c2293ef9d53e33192c7d59b17f6d7cf9f285026fc9cb12070bedc3dc888ea171b3190b675299667e1d880fdac4aab3eaf02038700c491cbf54d75ec784c3cb989e500e83b6d19d9d3418b1c757b24533b7f6a89f49db312be4abf1d79c2318149ae9f49c4dccd80f26c3af66c22938d4cc1e9efc08f299c8c351636525971b9b9c1c1bc3d31808f1fa7af30c0e245dc8c5fcb077e232ffea1288e18c9dc8d93bcbbada9c0f37d5f6ed7548463b43be871c8ed8d2c19dd4fed454c432115cce38387bc699b1a5c240bcb0909ec935522d3e2970737cc63e7993b18b8d5731dba4fd2b127ffaf4e9d75f7f7d7fb2717737390953d01d9ca67287d8b9dcfcc2c28cad78999fcfc7c2407c9087d383e0bc307061b17716dcb20a010ad980a85da1534ec9303da1ecc2d6025b30b5b317b65aa26c09fc70290cf5cbd65c209a7b7f95869934905a59c835d28daff6ab9bafd13713497e2f6d0f7bfc5fbe5015071f32a05e801e5b698c8d41b481e7dac14195382b81a127f1508724999feec98e06efbddce00689c5f688b6054d6999303da900f35c0aa665a7f5b56f6e8f2ddf8613b0e567a194079da557de8f5d65d2a9d4dc97ab860d8993accfc60697c3e7d7f56b93099728b2ae053c8fa0419285054f01b0c7261bb946eee080ee1e81dd2249384d27e7dca6afc99117c955f0c9a3ddab55dcb31003f2bbf4da45b6eaf4d983ec386b0fbba5958f932be99bf7b9347f39f67e921a6b237f3713b61f4c84e758361d867598ebfaff6185d795edacab8823a3d0cb76d9db8b098754dc79e40ac8a83c72dff41e45cd3e0f314cca878759d769d56a9d7043519e75bffffc09ac342760172684922b63e098723c0fe7d85c351a10818dc23dc44f5f63e3de46bb55707be40de6037de4605255a6c793018e551d581d713f13b1090f6cba7055aace5930d3f2d6e78fbf7efa9ca3a95427bf8017b9f793bf7e7c5f585c2c97af917671ad5e7f3bbdef1ed93e8683a34689f236fb2f9da392956690379b9bfdef9a4d48cf444c04961a933cacbf7cf9fce9d78f5f42fd05be8c8f9f95e5084822b05f28210940a03475e974398192dbc4e66d9d83296b826cd7a667916b584fe6cd8b44c18d909ebcc7b73bc4bde500bd0e98c1277a9383344572c693e979049043ef51c19f4306d2f80cc872b8b5d8ea2d721dc3f1f860df3d8d7c0d958e0da9611d86353d93bc75ed7d029cb190a1ac902f45462e787aca7adbca9edfedbf456cc63564d373c98787af9f3e0e0006f9f2b1a366bfd2d0d52bdb64c39d286fbb0362cf700716431b9fe9b9e4daf5f0f1d3c741c0eead0651335950cd9cecebb739c014b4390a1bbc459978a8a3edb13bd3f46cf2f664efd3c786212f6cf16bc96a7e4f887dbdc7c877c9314e5b40bc36f4a1d4a6e7930f0f81014a6eb5b0d1ad4c5ddce7cf5f1f7c6e4e1c44703c3a0abe7af813824ccf28ae872f9fde8706887b7131948369ecd74f9fbe3ef85786827884e77a5ee26bb4eb9631b044a7e231cc9cbe9e5c4d8e2d0c01318058bdc89af49a9e53b2e0af0728b9dc6edc5bd93a7a80607bac31f06c5038b5dd3002913ae550a8699b9e554e1ebe7c5c31245e6c13bb33aeecc2d8e4d5dd586e30f19dd1719a9d8e5c58aa795e1d9b2a270f1f0d950c55f9824c5c3882d5f283dc18aca50d52f3d88dd1d1fc62fb60e3753c5ec2f4bc727a12fc38d07951d93f2151f54163f2ea66ecd290b8a13a89b40fb1f2c449965c4dcf2bbb470f5f074cca8a649586880550b3f141bfb0e036f8806b588923c72d989e59d620f41a0a79bf93385d0eca8db0263039c0f293caea9ce9b9a58253d4ca60e2acaae76541f7b04c59f02f200ef06f5eb2a23efba4eb4e3a92c5d02bf708159b49838b210e29fce84767222186038f96c6cd35d3f30b865e9f1159faa9fe1348a13540c5e89a06f82e03253bb8716c5ef47af18832e187105fc314850efba7df15f969808ab11bd1d8682f27752728373d4e809e97035b844c3f40de3e046128d77fef485d3254b1d2a966208dae73853bb204a7e8988955c3613fe3eee7cb8fd5720153d4e7df35a2b1ec9d8bee0ad7c0bfd4b6a03b41c921a69781132513ee1f440c43f96b17f1ef05352f3454683ff6cacda0bf1ad2d0f75de4b2139796851f46bce33a89fe29a306820f0fd1604019ccfbd92ededfbaa53f564ef74ff48a529b78f60976f10d298d0dd7c3deefbfff198c3e3c9c1c1d9d3c801c6decec236f56bb010618fffb2ffaffdffeab4f0c66adf16e6d7d3b9670184300424faf7abeca9e56d6ee7c4748f97092cde01455cf048e4e4e702f5cb6bb9a018c7fc6fff5db9f5bbffde9ded227d694e9014da916c1a9b8020176e04160d28fb26ad32e24f15f8f0284b62d75df4ea5b77a43883924f6d70d887120b75d97885b9f20718013352624f83b6600ec7dae95363df1c15ad1fb9fba65a90f09126f717f023152b78945472fb13283e1c15c35d2e4837f0b9168d8fb5caba9bab2bb757333d68bcce910ff6bd5df456c96ba5ae65728f1acc49163bbf1cde43a85267f13e347139bd64027bdc43f1df427fead1eef26862e07cdd617481949514c3ece5afeeec455eccac578eb8713ebd8f54f627fe2ffaeb689953be05c63753f1f544bc87ebe2e62b724c0a9028e09b1f6c3894dfded3ad1871867a67f2933d46fed2f45fbe51c8ce19f7b6c9f58ae8c0fb4f01a5e1cfff1c4bbfded5aea25d64a1f3b202257421cb5cedf7037536376a8cfa437fd40f1adf4b56b6e20717f6411b3894b4139945c46c6337e40cfd22cf702884d5b1019f641261bb5e4bf820a8713c957c7eeeec6da77f423266157a1a34c8a4ccfb186dd5dec4b2046bb068a7e6a16e848ac253a17217f1a33248624b9a1229687322b3f7d09560d53547fbb06a402cea8925b7d6dec0eaaf5638f20a67b3ce5a35e1c2f8318a7a8c9bec8fd640c982729b21ef1e44f3dc4302b490eb173ca91e9c78a8ebfd66586ed4dfac4075dc4b2ef029386335289bb967e3cb1be5df797f737d47df525c69e1f35b1ecf41d8a452f396a2f8098c421c313a3fb7a2c71fb14ab25ee25e8f8b14a8650f2a7be0907e6102ae2a5890eb1e8568be9870b4cca8f51f2248cfb251d15dfb589b171ab4d2cbc30622c0e3c46c957ef0da2cc3145c31ceb6e9f40c0be30e2478ee4f75763fd81c9725b4ecd36fe52891f3792756bf597249180a38d3922e8a4e47794889a7d29c4a8e4e18975971931feb8340b9a9c49439c30275e0a312879e8c0ab71a7b7024589db820aad6988396adea69720c32bb9a6ff77812fb5056b84930b61b2af9e7d39563d74740d7f21437f255929580bca5fc319574ad6b4deb39470bf1ce221a36bceb85b40ee634b4854af9dd3716a2fcd579b8892074f5068cd2b77fa0bc99478768294fbc4a54e5ce67881c4434421053c77c9e8cf7b2f68976144559df305120f0e35f1b34a860d21ba6be612f71289770744214b1c9c24318edd797ac378a16f5f0456cb3ac0e3c2cb211e106ab62d794cb753adbf8a2538be4839d51afe52cec40b22368c423ab9922e717f158be42c1f8e4cc4d09d398be5faff0f261d02b3d03d49190000000049454e44ae426082, 'Often termed as the world''s longest beach,Cox''s Bazar has yet to become a major tourist destination in Asia.Cox''s Bazar District has an area of 2491.86 square km. It is located at 21°35'' N 92°01'' E and is bounded by Chittagong District on the north, Bay of Bengal\r\n			in the south, Bandarban District on the east, and the Bay of Bengal on the west. Major rivers include Matamuhuri, Bakkhali, Reju Khal, Naf River, Maheshkhali channel and Kutubdia channel. The area of the city of Cox''s Bazar is 6.85 square km\r\n			The town with an area of 6.85 square km, and bounded by Bakkhali River on the north and East, Bay of Bengal in the West, and Jhilwanj Union in the south.'),
(4, 'Dhaka', 'Dhaka', 'Lalbag', '', 'Lalbagh Fort (also Fort Aurangabad) is an incomplete 17th century Mughal fort complex that stands before the Buriganga River in the southwestern part of Dhaka, Bangladesh.[1] The construction was started in 1678 AD by Mughal Subahdar Muhammad Azam Shah who was son of Emperor Aurangzeb and later emperor himself. His successor, Shaista Khan, did not continue the work, though he stayed in Dhaka up to 1688.');

-- --------------------------------------------------------

--
-- Table structure for table `siteinfo_journey`
--

CREATE TABLE `siteinfo_journey` (
  `Journey` varchar(50) NOT NULL,
  `JourneyDetails` text NOT NULL,
  `PlaceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siteinfo_shelter`
--

CREATE TABLE `siteinfo_shelter` (
  `Shelter` varchar(50) NOT NULL,
  `ShelterDetails` text NOT NULL,
  `PlaceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `touristinfo`
--

CREATE TABLE `touristinfo` (
  `TouristId` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `touristinfo`
--

INSERT INTO `touristinfo` (`TouristId`, `FirstName`, `LastName`, `DateOfBirth`, `Gender`, `Email`, `Password`, `Country`) VALUES
(1, 'Shamim', 'Shahadat', '1995-12-15', 'Male', 'shamim@email.com', '123456', 'Bangladesh'),
(2, 'Sanjib', 'Shuvo', '1994-05-14', 'Male', 'sanjib@email.com', '123456', 'Bangladesh'),
(3, 'shaker', 'saju', '1996-10-16', 'Male', 'sjau@email.com', '123456', 'Bangladesh'),
(4, 'Ahnaf', 'Raghib', '1994-10-16', 'Male', 'raghib@email.com', '123456', 'Bangladesh'),
(6, 'saimun', 'khattab', '1990-02-03', 'male', 'saimun@email.com', '123456', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `touristinfo_contact`
--

CREATE TABLE `touristinfo_contact` (
  `Contact` varchar(50) NOT NULL,
  `TouristId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `availibility`
--
ALTER TABLE `availibility`
  ADD PRIMARY KEY (`AvailibilityId`),
  ADD KEY `GuideId` (`GuideId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`),
  ADD KEY `AdminId` (`AdminId`),
  ADD KEY `ReviewId` (`ReviewId`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localguideinfo`
--
ALTER TABLE `localguideinfo`
  ADD PRIMARY KEY (`GuideId`);

--
-- Indexes for table `localguideinfo_contact`
--
ALTER TABLE `localguideinfo_contact`
  ADD PRIMARY KEY (`Contact`,`GuideId`),
  ADD KEY `GuideId` (`GuideId`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RequestId`),
  ADD KEY `TouristId` (`TouristId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ReviewId`),
  ADD KEY `PlaceId` (`PlaceId`),
  ADD KEY `TouristId` (`TouristId`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`RequestId`,`AvailibilityId`),
  ADD KEY `AvailibilityId` (`AvailibilityId`);

--
-- Indexes for table `siteinfo`
--
ALTER TABLE `siteinfo`
  ADD PRIMARY KEY (`PlaceId`);

--
-- Indexes for table `siteinfo_journey`
--
ALTER TABLE `siteinfo_journey`
  ADD PRIMARY KEY (`Journey`,`PlaceId`),
  ADD KEY `PlaceId` (`PlaceId`);

--
-- Indexes for table `siteinfo_shelter`
--
ALTER TABLE `siteinfo_shelter`
  ADD PRIMARY KEY (`Shelter`,`PlaceId`),
  ADD KEY `PlaceId` (`PlaceId`);

--
-- Indexes for table `touristinfo`
--
ALTER TABLE `touristinfo`
  ADD PRIMARY KEY (`TouristId`);

--
-- Indexes for table `touristinfo_contact`
--
ALTER TABLE `touristinfo_contact`
  ADD PRIMARY KEY (`Contact`,`TouristId`),
  ADD KEY `TouristId` (`TouristId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `availibility`
--
ALTER TABLE `availibility`
  MODIFY `AvailibilityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `localguideinfo`
--
ALTER TABLE `localguideinfo`
  MODIFY `GuideId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `RequestId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `siteinfo`
--
ALTER TABLE `siteinfo`
  MODIFY `PlaceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `touristinfo`
--
ALTER TABLE `touristinfo`
  MODIFY `TouristId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `availibility`
--
ALTER TABLE `availibility`
  ADD CONSTRAINT `availibility_ibfk_1` FOREIGN KEY (`GuideId`) REFERENCES `localguideinfo` (`GuideId`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`AdminId`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`ReviewId`) REFERENCES `review` (`ReviewId`);

--
-- Constraints for table `localguideinfo_contact`
--
ALTER TABLE `localguideinfo_contact`
  ADD CONSTRAINT `localguideinfo_contact_ibfk_1` FOREIGN KEY (`GuideId`) REFERENCES `localguideinfo` (`GuideId`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`TouristId`) REFERENCES `touristinfo` (`TouristId`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`PlaceId`) REFERENCES `siteinfo` (`PlaceId`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`TouristId`) REFERENCES `touristinfo` (`TouristId`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`RequestId`) REFERENCES `request` (`RequestId`),
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`AvailibilityId`) REFERENCES `availibility` (`AvailibilityId`);

--
-- Constraints for table `siteinfo_journey`
--
ALTER TABLE `siteinfo_journey`
  ADD CONSTRAINT `siteinfo_journey_ibfk_1` FOREIGN KEY (`PlaceId`) REFERENCES `siteinfo` (`PlaceId`);

--
-- Constraints for table `siteinfo_shelter`
--
ALTER TABLE `siteinfo_shelter`
  ADD CONSTRAINT `siteinfo_shelter_ibfk_1` FOREIGN KEY (`PlaceId`) REFERENCES `siteinfo` (`PlaceId`);

--
-- Constraints for table `touristinfo_contact`
--
ALTER TABLE `touristinfo_contact`
  ADD CONSTRAINT `touristinfo_contact_ibfk_1` FOREIGN KEY (`TouristId`) REFERENCES `touristinfo` (`TouristId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
