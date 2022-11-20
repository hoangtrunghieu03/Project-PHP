-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 08:51 AM
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
-- Database: `du_an_mau`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `isActive` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `password`, `role`, `isActive`) VALUES
(19, 'nhathoa', 'nhathoa@gmail.com', '123', 'user', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `isbn` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `nxb` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `discount` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`isbn`, `category_id`, `title`, `author`, `nxb`, `image`, `description`, `price`, `discount`, `date`) VALUES
('8935086855140', 9, 'Không Bao Giờ Là Thất Bại!', 'Chung Ju Yung', 'NXB Dân Trí', 'khongbaogiothatbai_bia01.jpg', '             Không Bao Giờ Là Thất Bại! Tất Cả Là Thử Thách - Bìa Cứng\r\n\r\nTự truyện nổi tiếng của gã khổng lồ trong nền kinh tế Hàn Quốc - cố Chủ tịch tập đoàn Hyundai Chung Ju-yung\r\n\r\nThất bại xảy ra là để con người nhận ra sức mạnh nội tại của bản thân, bởi không ai sống mà chỉ trải qua những thành công trong suốt cuộc đời. Tuy vậy, ta vẫn luôn băn khoăn tự hỏi bản thân rằng bao nhiêu lần thất bại mới đủ để thành công?\r\n\r\nMỗi người đều có định nghĩa khác nhau về thành công. Nó có thể được hiểu là đạt được mục tiêu đã đề ra, nhưng ở một góc nhìn khác thì thành công chính là rút ra được kinh nghiệm và hiên ngang bước tiếp sau những lần thất bại. Việc thấu hiểu bản chất của thành công lẫn thất bại đòi hỏi ý chí và tầm nhìn của chính bản thân người trải nghiệm. Chung Ju-yung - người khởi nghiệp từ hai bàn tay trắng đã trở thành chủ tịch của Hyundai, một tập đoàn nổi tiếng trên thế giới và là niềm tự hào của người dân Hàn Quốc - có lẽ hơn ai hết sẽ thấu hiểu những vất vả, thử thách và bài học xương máu trên con đường chinh phục đỉnh vinh quang của mình.\r\n\r\n“Không bao giờ là thất bại! Tất cả là thử thách” được xem như cuốn tự truyện chi tiết về cuộc đời lẫn sự nghiệp của cố Chủ tịch Chung Ju-yung. Không chỉ thuật lại hành trình tạo lập nên một tập đoàn công nghiệp phát triển bậc nhất, cuốn sách còn chứa đựng những bài học sâu sắc về quản trị, kinh doanh cũng như đạo làm người với tinh thần “đắc nhân tâm”. Đây chính là cuốn sách gối đầu giường của rất nhiều doanh nhân Việt Nam.\r\n\r\n“Không bao giờ là thất bại! Tất cả là thử thách”, ấn phẩm đã được tái bản nhiều lần tại Việt Nam và không còn đơn thuần là tựa đề của một cuốn sách, tên của nó đã trở thành phương châm sống, truyền cảm hứng cho rất nhiều bạn trẻ.\r\n\r\nQua từng trang hồi ký, người đọc sẽ cảm nhận được tuổi thơ nghèo khó và khát khao làm giàu của cố Chủ tịch Tập đoàn Hyundai: ba lần trốn chạy khỏi gia đình và quê nhà với khát khao thoát khỏi cuộc sống vất vả của người làm nông. Đặc biệt, ông gây dựng cơ nghiệp từ xuất phát điểm không một đồng xu dính túi. Con đường vươn đến thành công của ông Chung hoàn toàn không êm ả. Khi vừa lập nghiệp với đôi chút thành tựu, ông lại gặp biến cố và trở về vạch xuất phát. Thế nhưng, điều quan trọng là con người ấy không bao giờ nghĩ mình thất bại.\r\n\r\nTrong mọi hoàn cảnh, kể cả khi đã trở nên giàu có, ông vẫn luôn xem mình là một người lao động làm giàu bằng chính năng lực của mình, luôn cần kiệm, chân thành và thẳng thắn. Và trên hết, ông luôn có tầm nhìn của một người yêu nước, luôn nghĩ đến lợi ích chung. Chính vì điều đó, ông đã vượt qua rất nhiều chướng ngại tưởng chừng như không thể vượt qua trong cuộc đời làm doanh nhân của mình.\r\n\r\nVới 9 chương sách, bạn đọc sẽ lần lượt đi qua từng chặng đường mà cố Chủ tịch Chung Ju-yung từng trải qua: từ thời thơ ấu thiếu thốn và hành trình thực hiện ước mơ - lên Seoul học để đổi đời, cho đến những va vấp khi bắt đầu dấn thân vào thương trường, và cuối cùng là chặng đường xây dựng đế chế Hyundai đồ sộ, trở thành bộ mặt của đất nước Hàn Quốc.\r\n\r\nChương 1: Cha mẹ và Quê hương\r\nChương 2: Khởi đầu của Hyundai\r\nChương 3: Tôi là một nhà xây dựng\r\nChương 4: Công ty ô-tô Hyundai và công ty đóng tàu Hyundai\r\nChương 5: Những thăng trầm ở Trung Đông và năm 1980 đầy biến động\r\nChương 6: Đăng cai Thế vận hội Olympic 1988 và Nhà nước Cộng hoà thứ năm\r\nChương 7: Dự án núi Kim Cương và Siberia đầy tiềm năng\r\nChương 8: Con đường yêu nước, thương dân\r\nChương 9: Triết lý của tôi, tinh thần của Hyundai\r\nLời cuối sách: Sinh ra trên mảnh đất này\r\nĐặc biệt, trong ấn bản mới nhất, đầy đủ nhất do First News - Trí Việt phát hành, độc giả sẽ đọc được bức tâm thư của người con trai Chung Mong-joon viết về cha mình - chỉ xuất hiện trong bản dịch tiếng Việt cho đến thời điểm hiện tại.\r\n\r\nVề tác giả\r\n\r\nChung Ju-yung (1915 - 2001) là con cả trong một gia đình làm nông có chín người con, sinh sống tại một ngôi làng nhỏ thuộc Bắc Triều Tiên. Do gia cảnh nghèo khó nên ông phải gác lại việc học khi mới ở bậc tiểu học để phụ giúp gia đình. Sau này, ông được biết đến là một nhà tư bản ngành công nghiệp, tỷ phú, nhà từ thiện nổi tiếng tại Hàn Quốc cũng như trên thế giới. Ông nổi tiếng với vai trò người sáng lập Tập đoàn Hyundai - doanh nghiệp đi tiên phong trong ngành công nghiệp xe ô-tô và đóng tàu của Hàn Quốc.\r\n\r\nLà một trong những nhân vật có tầm ảnh hưởng lớn nhất của nền kinh tế Hàn Quốc, Chung Ju-yung là người nước ngoài đầu tiên nhận bằng Tiến sĩ danh dự của Đại học George Washington. Đồng thời, ông liên tiếp giữ ghế Chủ tịch Liên đoàn Các ngành Công nghiệp Hàn Quốc trong gần một thập niên và là một trong những người có công lớn trong việc tham gia đàm phán và vận động để Seoul giành được quyền đăng cai Thế vận hội Olympic 1988.\r\n\r\nMã hàng	8935086855140\r\nTên Nhà Cung Cấp	FIRST NEWS\r\nTác giả	Chung Ju Yung\r\nNgười Dịch	Phạm Hồng Phương\r\nNXB	NXB Dân Trí\r\nNăm XB	2022\r\nNgôn Ngữ	Tiếng Việt\r\nTrọng lượng (gr)	550\r\nKích Thước Bao Bì	24 x 16 cm\r\nSố trang	512\r\nHình thức	Bìa Cứng\r\nSản phẩm hiển thị trong	\r\nFIRST NEWS\r\nSách Kinh Tế\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Nhân vật - Bài Học Kinh doanh bán chạy của tháng\r\nKhông Bao Giờ Là Thất Bại! Tất Cả Là Thử Thách - Bìa Cứng\r\n\r\nTự truyện nổi tiếng của gã khổng lồ trong nền kinh tế Hàn Quốc - cố Chủ tịch tập đoàn Hyundai Chung Ju-yung\r\n\r\nThất bại xảy ra là để con người nhận ra sức mạnh nội tại của bản thân, bởi không ai sống mà chỉ trải qua những thành công trong suốt cuộc đời. Tuy vậy, ta vẫn luôn băn khoăn tự hỏi bản thân rằng bao nhiêu lần thất bại mới đủ để thành công?\r\n\r\nMỗi người đều có định nghĩa khác nhau về thành công. Nó có thể được hiểu là đạt được mục tiêu đã đề ra, nhưng ở một góc nhìn khác thì thành công chính là rút ra được kinh nghiệm và hiên ngang bước tiếp sau những lần thất bại. Việc thấu hiểu bản chất của thành công lẫn thất bại đòi hỏi ý chí và tầm nhìn của chính bản thân người trải nghiệm. Chung Ju-yung - người khởi nghiệp từ hai bàn tay trắng đã trở thành chủ tịch của Hyundai, một tập đoàn nổi tiếng trên thế giới và là niềm tự hào của người dân Hàn Quốc - có lẽ hơn ai hết sẽ thấu hiểu những vất vả, thử thách và bài học xương máu trên con đường chinh phục đỉnh vinh quang của mình.         ', 21, 0, '2022-06-14 07:38:16'),
('8935086855546', 8, 'Đắc Nhân Tâm', 'Dale Carnegie', 'NXB Đại Học Quốc Gia TP.HCM', '8935086855546.jpg', 'Tại sao Đắc Nhân Tâm luôn trong Top sách bán chạy nhất thế giới?\r\n\r\nBởi vì đó là cuốn sách MỌI NGƯỜI ĐỀU NÊN ĐỌC.\r\n\r\nHiện nay có một sự hiểu nhầm đã xảy ra. Tuy Đắc Nhân Tâm là tựa sách hầu hết mọi người đều biết đến, vì những danh tiếng và mức độ phổ biến, nhưng một số người lại “ngại” đọc. Lý do vì họ tưởng đây là cuốn sách “dạy làm người” nên có tâm lý e ngại. Có lẽ là do khi giới thiệu về cuốn sách, người ta luôn gắn với miêu tả đây là “nghệ thuật đối nhân xử thế”, “nghệ thuật thu phục lòng người”… Những cụm từ này đã không còn hợp với hiện nay nữa, gây cảm giác xa lạ và không thực tế.\r\n\r\nNhưng đâu phải thế, Đắc Nhân Tâm là cuốn sách không hề lỗi thời!\r\n\r\nNhững vấn đề được chỉ ra trong đó đều là căn bản ứng xử giữa người với người. Nếu diễn giải theo từ ngữ bây giờ, có thể gọi đây là “giáo trình” giúp hiểu mình – hiểu người để thành công trong giao tiếp. Có ai sống mà không cần giao tiếp? Có bao nhiêu người ngày ngày mệt mỏi, khổ sở vì gặp phải các vấn đề trong giao tiếp? Vì thế, Đắc Nhân Tâm chính là cuốn sách dành cho mọi người. Con cái nên đọc – cha mẹ càng nên đọc, nhân viên nên đọc – sếp càng nên đọc, người quen nhau nên đọc – người lạ nhau càng nên đọc…. Và đó mới chính thật là lý do Đắc Nhân Tâm luôn lọt vào Top sách bán chạy nhất thế giới, dù đã ra đời cách đây gần 80 năm.\r\n\r\nCó lẽ sẽ có người vừa đọc vừa nghĩ, mấy điều trong sách này đơn giản mà, ai chẳng biết? Đúng thế, vì toàn bộ đều là những quy tắc, những cách cư xử căn bản giữa chúng ta với nhau thôi. Kiểu như “Không chỉ trích, oán trách hay than phiền”, “Thành thật khen ngợi và biết ơn người khác”, “Thật lòng làm cho người khác thấy rằng họ quan trọng”… Những điều này đúng thật là ai cũng biết, nhưng bạn có chắc bạn nhớ được và làm được những điều đơn giản đó? Vì vậy, cuốn sách mới ra đời, để giúp bạn thực hành.\r\n\r\nNhưng có lẽ đa số người đọc sẽ thành thật gật gù đồng ý với từng trang sách. Ồ nếu như bình tâm suy xét lại mọi việc, thì trong bất cứ trường hợp nào mình cũng có thể cư xử đúng mực, không làm người khác tổn thương, giúp bầu không khí luôn thoải mái, và thế là cả hai bên đều vui vẻ, công việc cũng vì thế mà suôn sẻ, thành công hơn. Vậy chứ mà cũng không dễ, bởi “cái tôi” của mỗi người thường chiến thắng tâm trí trong đa số trường hợp. Để thỏa mãn nó, chúng ta hay mắc sai lầm không đáng. Đó cũng chính là lý do Đắc Nhân Tâm có mặt, để nhắc nhở và từng chút giúp ta uốn nắn chính “cái tôi” của mình.\r\n\r\nVới giọng văn giản dị, cách trình bày gần gũi nhưng cực kỳ khoa học bằng cách đúc rút những điều mối chốt ở cuối chương, Đắc Nhân Tâm là cuốn sách hiếm hoi không kén chọn người đọc. Bất cứ ai cũng có thể đồng cảm. Đây là công trình tâm huyết cả đời của Ngài Dale Carnegie, xuất phát từ chính nhu cầu của Dale khi cảm thấy cuộc đời mình sẽ không phạm phải quá nhiều sai lầm đã qua nếu như được học tử tế về cách cư xử trong cuộc sống. Ông đã viết bằng chính trải nghiệm phong phú cả đời mình. Thậm chí ông còn thuê cả một nhà nghiên cứu chuyên nghiệp để tìm và cùng ông nghiên cứu các tài liệu liên quan. Và cuốn sách hữu ích đến mức vừa ra đời đã phải tái bản liên tục, trở thành hiện tượng chưa từng có trong bối cảnh xuất bản ảm đạm của nước Anh lúc đó. Và mãi đến bây giờ.\r\n\r\nTừ ngày ấy, Đắc Nhân Tâm trở thành cuốn sách không-chịu-nằm-yên-trên-kệ. Ngoài ý được tái bản liên tục ở khắp nơi trên thế giới, thì cụm từ này còn có một ý khác, đó là cuốn sách đã được Ngài Dale bổ sung và hiệu chỉnh liên tục các câu chuyện mới, cách diễn đạt mới, nên ở mỗi lần xuất hiện, Đắc Nhân Tâm đều có những điều mới mẻ. Việc này cũng tiếp tục được con trai ông thực hiện sau khi ông qua đời, như ý nguyện của ông.\r\n\r\nĐược đánh giá là cuốn sách có sức lan tỏa rộng lớn, được dịch ra hầu hết các ngôn ngữ trên thế giới và luôn nằm trong Top sách bán chạy ở mọi thị trường xuất bản, Đắc Nhân Tâm đã có đời sống xứng tầm với giá trị thực tế của mình. Đây có thể coi là một trong những cuốn sách dòng self-hepl chính thống đầu tiên. Và Ngài Dale cũng trở thành một trong những tác giả ảnh hưởng trực tiếp nhiều nhất đến sự thay đổi tích cực của hàng triệu độc giả trên thế giới.\r\n\r\nMã hàng	8935086855546\r\nTên Nhà Cung Cấp	FIRST NEWS\r\nTác giả	Dale Carnegie\r\nNgười Dịch	Nguyễn Văn Phước\r\nNXB	NXB Đại Học Quốc Gia TP.HCM\r\nNăm XB	2022\r\nTrọng lượng (gr)	230\r\nKích Thước Bao Bì	16.5 x 12 x 2 cm\r\nSố trang	408\r\nHình thức	Bìa Mềm\r\nSản phẩm hiển thị trong	\r\nFIRST NEWS\r\nVNPAY\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Kỹ năng sống bán chạy của tháng\r\nĐắc Nhân Tâm (Khổ Nhỏ) (Tái bản 2022)\r\n\r\nTại sao Đắc Nhân Tâm luôn trong Top sách bán chạy nhất thế giới?\r\n\r\nBởi vì đó là cuốn sách MỌI NGƯỜI ĐỀU NÊN ĐỌC.\r\n\r\nHiện nay có một sự hiểu nhầm đã xảy ra. Tuy Đắc Nhân Tâm là tựa sách hầu hết mọi người đều biết đến, vì những danh tiếng và mức độ phổ biến, nhưng một số người lại “ngại” đọc. Lý do vì họ tưởng đây là cuốn sách “dạy làm người” nên có tâm lý e ngại. Có lẽ là do khi giới thiệu về cuốn sách, người ta luôn gắn với miêu tả đây là “nghệ thuật đối nhân xử thế”, “nghệ thuật thu phục lòng người”… Những cụm từ này đã không còn hợp với hiện nay nữa, gây cảm giác xa lạ và không thực tế.\r\n\r\nNhưng đâu phải thế, Đắc Nhân Tâm là cuốn sách không hề lỗi thời!\r\n\r\nNhững vấn đề được chỉ ra trong đó đều là căn bản ứng xử giữa người với người. Nếu diễn giải theo từ ngữ bây giờ, có thể gọi đây là “giáo trình” giúp hiểu mình – hiểu người để thành công trong giao tiếp. Có ai sống mà không cần giao tiếp? Có bao nhiêu người ngày ngày mệt mỏi, khổ sở vì gặp phải các vấn đề trong giao tiếp? Vì thế, Đắc Nhân Tâm chính là cuốn sách dành cho mọi người. Con cái nên đọc – cha mẹ càng nên đọc, nhân viên nên đọc – sếp càng nên đọc, người quen nhau nên đọc – người lạ nhau càng nên đọc…. Và đó mới chính thật là lý do Đắc Nhân Tâm luôn lọt vào Top sách bán chạy nhất thế giới, dù đã ra đời cách đây gần 80 năm.', 12, 0, '2022-06-14 07:34:20'),
('8935235217737', 7, 'Bước Chậm Lại Giữa Thế Gian Vội Vã', 'Hae Min', 'NXB Hội Nhà Văn', 'buoc_cham_lai_giua_the_gian_voi_va.u335.d20160817.t102115.612356.jpg', 'Chen vai thích cánh để có một chỗ bám trên xe buýt giờ đi làm, nhích từng xentimét bánh xe trên đường lúc tan sở, quay cuồng với thi cử và tiến độ công việc, lu bù vướng mắc trong những mối quan hệ cả thân lẫn sơ… bạn có luôn cảm thấy thế gian xung quanh mình đang xoay chuyển quá vội vàng?\r\n\r\nNếu có thể, hãy tạm dừng một bước.\r\n\r\nĐể tự hỏi, là do thế gian này vội vàng hay do chính tâm trí bạn đang quá bận rộn? Để cầm cuốn sách nhỏ dung dị mà lắng đọng này lên, chậm rãi lật giở từng trang, thong thả khám phá những điều mà chỉ khi bước chậm lại mới có thể thấu rõ: về các mối quan hệ, về chính bản thân mình, về những trăn trở trước cuộc đời và nhân thế, về bao điều lý trí rất hiểu nhưng trái tim chưa cách nào nghe theo…\r\n\r\nRa mắt lần đầu năm 2012, Bước chậm lại giữa thế gian vội vã của Đại đức Hae Min đã liên tục đứng đầu danh sách best-seller của nhiều trang sách trực tuyến uy tín của Hàn Quốc, trở thành cuốn sách chữa lành cho hàng triệu người trẻ luôn tất bật với nhịp sống hiện đại hối hả.\r\n\r\n \r\n\r\nMã hàng	8935235217737\r\nTên Nhà Cung Cấp	Nhã Nam\r\nTác giả	Hae Min\r\nNgười Dịch	Nguyễn Việt Tú Anh\r\nNXB	NXB Hội Nhà Văn\r\nNăm XB	2018\r\nTrọng lượng (gr)	280\r\nKích Thước Bao Bì	14 x 20.5\r\nSố trang	254\r\nHình thức	Bìa Mềm\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Tiểu thuyết bán chạy của tháng\r\nBước Chậm Lại Giữa Thế Gian Vội Vã (Tái Bản 2018)\r\n\r\nChen vai thích cánh để có một chỗ bám trên xe buýt giờ đi làm, nhích từng xentimét bánh xe trên đường lúc tan sở, quay cuồng với thi cử và tiến độ công việc, lu bù vướng mắc trong những mối quan hệ cả thân lẫn sơ… bạn có luôn cảm thấy thế gian xung quanh mình đang xoay chuyển quá vội vàng?\r\n\r\nNếu có thể, hãy tạm dừng một bước.\r\n\r\nĐể tự hỏi, là do thế gian này vội vàng hay do chính tâm trí bạn đang quá bận rộn? Để cầm cuốn sách nhỏ dung dị mà lắng đọng này lên, chậm rãi lật giở từng trang, thong thả khám phá những điều mà chỉ khi bước chậm lại mới có thể thấu rõ: về các mối quan hệ, về chính bản thân mình, về những trăn trở trước cuộc đời và nhân thế, về bao điều lý trí rất hiểu nhưng trái tim chưa cách nào nghe theo…\r\n\r\nRa mắt lần đầu năm 2012, Bước chậm lại giữa thế gian vội vã của Đại đức Hae Min đã liên tục đứng đầu danh sách best-seller của nhiều trang sách trực tuyến uy tín của Hàn Quốc, trở thành cuốn sách chữa lành cho hàng triệu người trẻ luôn tất bật với nhịp sống hiện đại hối hả.', 7, 0, '2022-06-14 07:45:44'),
('8935235226272', 7, 'Nhà Giả Kim', 'Paulo Coelho', 'NXB Hội Nhà Văn', 'image_195509_1_36793.jpg', '             abc         ', 1, 0, '2022-06-07 07:59:55'),
('8935235226289', 7, 'Chiến Binh Cầu Vồng', 'Andrea Hirata', 'NXB Hội Nhà Văn', 'image_195509_1_36366.jpg', '             abc         ', 1, 0, '2022-06-07 08:21:00'),
('8935278601524', 9, 'Giàu Có Đâu Có Khó!', 'Napoleon Hill', 'NXB Thế Giới', 'giau_co_dau_co_kho_-_doc_thu-page-001_2.jpg', 'Trải qua thời gian dài nghiên cứu về giàu có và thành công, Napoleon Hill đã khám phá ra rằng: người đạt được những phần thưởng tài chính, dù lớn lao đến đâu đa phần đều là những người kém hạnh phúc và kém hài lòng nhất trên thế giới. Để thực sự giàu có, bạn phải giàu có về mọi mặt trong cuộc sống.\r\n\r\nBan đầu là loạt bài thuyết trình dành cho khán thính giả Chicago vào mùa xuân năm 1954, Giàu có đâu có khó! sau đó được xuất bản thành sách dưới sự cho phép của Quỹ Napoleon Hill. Bằng cách truyền cảm hứng để bạn thực hiện các mục tiêu và ước mơ, cuốn sách này thực sự có thể giúp bạn vươn tới sự giàu có toàn diện – sự giàu có không bị giới hạn bởi những thước đo hạn hẹp như tài sản hay danh vọng.', 3, 0, '2022-06-14 07:54:21'),
('8935280904262', 8, 'Đọc Vị Bất Kỳ Ai', 'TS David J Lieberman', 'NXB Lao Động', 'image_195509_1_12542.jpg', 'ạn băn khoăn không biết người ngồi đối diện đang nghĩ gì? Họ có đang nói dối bạn không? Đối tác đang ngồi đối diện với bạn trên bàn đàm phán đang nghĩ gì và nói gì tiếp theo?\r\n\r\nĐỌC người khác là một trong những công cụ quan trọng, có giá trị nhất, giúp ích cho bạn trong mọi khía cạnh của cuộc sống. ĐỌC VỊ người khác để:\r\n\r\nHãy chiếm thế thượng phong trong việc chủ động nhận biết điều cần tìm kiếm - ở bất kỳ ai bằng cách “thâm nhập vào suy nghĩ” của người khác. ĐỌC VỊ BẤT KỲ AI là cẩm nang dạy bạn cách thâm nhập vào tâm trí của người khác để biết điều người ta đang nghĩ. Cuốn sách này sẽ không giúp bạn rút ra các kết luận chung về một ai đó dựa vào cảm tính hay sự võ đoán. Những nguyên tắc được chia sẻ trong cuốn sách này không đơn thuần là những lý thuyết hay mẹo vặt chỉ đúng trong một số trường hợp hoặc với những đối tượng nhất định. Các kết quả nghiên cứu trong cuốn sách này được đưa ra dựa trên phương pháp S.N.A.P - cách thức phân tích và tìm hiểu tính cách một cách bài bản trong phạm vi cho phép mà không làm mếch lòng đối tượng được phân tích. Phương pháp này dựa trên những phân tích về tâm lý, chứ không chỉ đơn thuần dựa trên ngôn ngữ cử chỉ, trực giác hay võ đoán.\r\n\r\nCuốn sách được chia làm hai phần và 15 chương:\r\n\r\nPhần 1: Bảy câu hỏi cơ bản: Học cách phát hiện ra điều người khác nghĩ hay cảm nhận một cách dễ dàng và nhanh chóng trong bất kỳ hoàn cảnh nào.\r\n\r\nPhần 2: Những kế hoạch chi tiết cho hoạt động trí óc - hiểu được quá trình ra quyết định. Vượt ra ngoài việc đọc các suy nghĩ và cảm giác đơn thuần: Hãy học cách người khác suy nghĩ để có thể nắm bắt bất kỳ ai, phán đoán hành xử và hiểu được họ còn hơn chính bản thân họ.\r\n\r\nTrích đoạn sách hay:\r\n\r\nMột giám đốc phụ trách bán hàng nghi ngờ một trong những nhân viên kinh doanh của mình đang biển thủ công quỹ. Nếu hỏi trực tiếp “Có phải cô đang lấy trộm đồ của công ty?” sẽ khiến người bị nghi ngờ phòng bị ngay lập tức, việc muốn tìm ra chân tướng sự việc càng trở nên khó khăn hơn. Nếu cô ta không làm việc đó, dĩ nhiên cô ta sẽ nói với người giám đốc mình không lấy trộm. Ngược lại, dù có lấy trộm đi chăng nữa, cô ta cũng sẽ nói dối mình không hề làm vậy. Thay vào việc hỏi trực diện, người giám đốc khôn ngoan nên nói một điều gì đó tưởng chừng vô hại, như “Jill, không biết cô có giúp được tôi việc này không. Có vẻ như dạo này có người trong phòng đang lấy đồ của công ty về nhà phục vụ cho tư lợi cá nhân. Cô có hướng giải quyết nào cho việc này không?” rồi bình tĩnh quan sát phản ứng của người nhân viên.\r\n\r\nNếu cô ta hỏi lại và có vẻ hứng thú với đề tài này, anh ta có thể tạm an tâm rằng cô ta không lấy trộm, còn nếu cô ta đột nhiên trở nên không thoải mái và tìm cách thay đổi đề tài thì rõ ràng cô ta có động cơ không trong sáng.\r\n\r\nNgười giám đốc khi đó sẽ nhận ra sự chuyển hướng đột ngột trong thái độ và hành vi của người nhân viên. Nếu cô gái đó hoàn toàn trong sạch, có lẽ cô ta sẽ đưa ra hướng giải quyết của mình và vui vẻ khi sếp hỏi ý kiến của mình. Ngược lại, cô ta sẽ có biểu hiện không thoải mái rõ ràng và có lẽ sẽ cố cam đoan với sếp rằng cô không đời nào làm việc như vậy. Không có lí do gì để cô ta phải thanh minh như vậy, trừ phi cô là người có cảm giác tội lỗi…\r\n\r\nMã hàng	8935280904262\r\nTên Nhà Cung Cấp	Thái Hà\r\nTác giả	TS David J Lieberman\r\nNXB	NXB Lao Động\r\nNăm XB	2019\r\nTrọng lượng (gr)	250\r\nKích Thước Bao Bì	13 x 20.5 cm\r\nSố trang	223\r\nHình thức	Bìa Mềm\r\nSản phẩm hiển thị trong	\r\nĐồ Chơi Cho Bé - Giá Cực Tốt\r\nPNJ\r\nTủ Sách Tâm Lý Kỹ Năng\r\nVNPAY\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Kỹ năng sống bán chạy của tháng\r\nBạn băn khoăn không biết người ngồi đối diện đang nghĩ gì? Họ có đang nói dối bạn không? Đối tác đang ngồi đối diện với bạn trên bàn đàm phán đang nghĩ gì và nói gì tiếp theo?\r\n\r\nĐỌC người khác là một trong những công cụ quan trọng, có giá trị nhất, giúp ích cho bạn trong mọi khía cạnh của cuộc sống. ĐỌC VỊ người khác để:\r\n\r\nHãy chiếm thế thượng phong trong việc chủ động nhận biết điều cần tìm kiếm - ở bất kỳ ai bằng cách “thâm nhập vào suy nghĩ” của người khác. ĐỌC VỊ BẤT KỲ AI là cẩm nang dạy bạn cách thâm nhập vào tâm trí của người khác để biết điều người ta đang nghĩ. Cuốn sách này sẽ không giúp bạn rút ra các kết luận chung về một ai đó dựa vào cảm tính hay sự võ đoán. Những nguyên tắc được chia sẻ trong cuốn sách này không đơn thuần là những lý thuyết hay mẹo vặt chỉ đúng trong một số trường hợp hoặc với những đối tượng nhất định. Các kết quả nghiên cứu trong cuốn sách này được đưa ra dựa trên phương pháp S.N.A.P - cách thức phân tích và tìm hiểu tính cách một cách bài bản trong phạm vi cho phép mà không làm mếch lòng đối tượng được phân tích. Phương pháp này dựa trên những phân tích về tâm lý, chứ không chỉ đơn thuần dựa trên ngôn ngữ cử chỉ, trực giác hay võ đoán.', 20, 0, '2022-06-14 07:29:17'),
('8935280905948', 9, '13 Nguyên Tắc Nghĩ Giàu Làm Giàu', 'Napoleon Hill', 'NXB Lao Động', 'image_195509_1_39473.jpg', '             Cuốn sách sẽ giúp bạn trở nên giàu có, làm giàu cho cuộc sống của bạn trên tất cả các phương diện của cuộc sống chứ không chỉ về tài chính và vật chất.\r\n\r\nThink and grow rich – 13 nguyên tắc nghĩ giàu, làm giàu là cuốn sách “chỉ dẫn” duy nhất chỉ ra những nguồn lực bạn phải có để thành công. Mỗi chương trong cuốn sách đều đề cập đến bí quyết kiếm tiền, từ việc có niềm tin, có mong muốn đến những kiến thức chuyên sâu, những ý tưởng, những kế hoạch, những cách đưa ra quyết định.         ', 5, 0, '2022-06-14 07:41:47'),
('8936067599206', 8, 'Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực', 'Vĩ Nhân', 'NXB Văn Học', '8936067599206-1.jpg', '                                                                                                        xxx                                                                        ', 1, 0, '2022-06-07 08:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(7, 'Tiểu Thuyết'),
(8, 'Kỹ Năng Sống'),
(9, 'Kinh Tế');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `book_isbn` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `isApprove` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `account_id`, `book_isbn`, `content`, `date`, `isApprove`) VALUES
(5, 19, '8935235217737', 'jlajlajg', '2022-06-14', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `order_account`
--

DROP TABLE IF EXISTS `order_account`;
CREATE TABLE `order_account` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_account`
--

INSERT INTO `order_account` (`id`, `account_id`, `email`, `phone_number`, `address`, `total`, `date`, `status`, `note`) VALUES
(3, 19, 'nhathoa@gmail.com', 123, '123', 7, '2022-06-14', 'Đang xử lý', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_isbn` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `book_isbn`, `quantity`) VALUES
(2, 3, '8935235217737', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `book_category` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_account` (`account_id`),
  ADD KEY `comment_book` (`book_isbn`);

--
-- Indexes for table `order_account`
--
ALTER TABLE `order_account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_account` (`account_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail` (`order_id`),
  ADD KEY `order_detail_book` (`book_isbn`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_comment` (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_account`
--
ALTER TABLE `order_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_book` FOREIGN KEY (`book_isbn`) REFERENCES `book` (`isbn`);

--
-- Constraints for table `order_account`
--
ALTER TABLE `order_account`
  ADD CONSTRAINT `order_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail` FOREIGN KEY (`order_id`) REFERENCES `order_account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_book` FOREIGN KEY (`book_isbn`) REFERENCES `book` (`isbn`);

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_comment` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
