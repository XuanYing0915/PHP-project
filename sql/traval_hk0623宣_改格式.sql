-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 伺服器版本:                        10.4.28-MariaDB - mariadb.org binary distribution
-- 伺服器作業系統:                      Win64
-- HeidiSQL 版本:                  12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- 傾印 travel_kh 的資料庫結構
DROP DATABASE IF EXISTS `travel_kh`;
CREATE DATABASE IF NOT EXISTS `travel_kh` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `travel_kh`;

-- 傾印  資料表 travel_kh.area 結構
DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `area_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_name` varchar(10) NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.area 的資料：~38 rows (近似值)
INSERT INTO `area` (`area_id`, `area_name`) VALUES
	(1, '鹽埕區'),
	(2, '鼓山區'),
	(3, '新興區'),
	(4, '旗津區'),
	(5, '苓雅區'),
	(6, '左營區'),
	(7, '楠梓區'),
	(8, '三民區'),
	(9, '前金區'),
	(10, '前鎮區'),
	(11, '小港區'),
	(12, '鳳山區'),
	(13, '林園區'),
	(14, '大寮區'),
	(15, '大樹區'),
	(16, '大社區'),
	(17, '仁武區'),
	(18, '鳥松區'),
	(19, '岡山區'),
	(20, '橋頭區'),
	(21, '燕巢區'),
	(22, '阿蓮區'),
	(23, '路竹區'),
	(24, '湖內區'),
	(25, '茄萣區'),
	(26, '梓官區'),
	(27, '旗山區'),
	(28, '美濃區'),
	(29, '六龜區'),
	(30, '甲仙區'),
	(31, '杉林區'),
	(32, '內門區'),
	(33, '茂林區'),
	(34, '桃源區'),
	(35, '那瑪夏區'),
	(36, '田寮區'),
	(37, '永安區'),
	(38, '彌陀區');

-- 傾印  資料表 travel_kh.attraction 結構
DROP TABLE IF EXISTS `attraction`;
CREATE TABLE IF NOT EXISTS `attraction` (
  `attraction_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `attraction_name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fk_area_id` int(10) unsigned NOT NULL,
  `address` varchar(100) NOT NULL,
  `off_day` set('星期一','星期二','星期三','星期四','星期五','星期六','星期日','全年開放') NOT NULL,
  `open_time` time NOT NULL,
  `closed_time` time NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `description` text NOT NULL,
  `lat` decimal(13,10) DEFAULT NULL,
  `lng` decimal(13,10) DEFAULT NULL,
  `zoom` int(11) DEFAULT NULL,
  `traffic` text DEFAULT NULL,
  PRIMARY KEY (`attraction_id`),
  KEY `fk_area` (`fk_area_id`),
  CONSTRAINT `fk_area` FOREIGN KEY (`fk_area_id`) REFERENCES `area` (`area_id`)
) ENGINE=InnoDB AUTO_INCREMENT=600007 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.attraction 的資料：~6 rows (近似值)
INSERT INTO `attraction` (`attraction_id`, `attraction_name`, `title`, `fk_area_id`, `address`, `off_day`, `open_time`, `closed_time`, `phone`, `description`, `lat`, `lng`, `zoom`, `traffic`) VALUES
	(600001, '旗津星空隧道', '走進絢爛的星空隧道，體驗10種不同的主題光影動畫，來一趟奇幻空間的打卡之旅。', 4, '高雄市旗津區廟前路1巷', '全年開放', '00:00:00', '23:59:00', '07-2225136', '<div class="">星空隧道全長88公尺，開鑿於日治時期，原為軍事戰備隧道，於2005年後整建開闢成星空隧道，並新設自行車棧道供遊客使用。<br>\r\n      隧道以海洋與滿天星空為主題，可見牆上有許多鯨鯊、魚群等海洋生物夜光彩繪，在燈光的照明下，浮現繽紛的螢光色調，帶領旅人體驗幽暗迷幻的海底世界，除了此之外，更有藍色多瑙河、雷神降臨、穿梭、程式碼、聖誕節、歡樂煙火等共10種不同的主題光影動畫，讓人不禁沉浸在這奇幻的空間中，盡情拍照打卡留念。<br>\r\n      走完隧道後步行約五分鐘，即是旗後山下的旗津灣峽，浪花拍打在高聳陡峭的石灰岩璧，呈現壯闊原始的海景。如想要看高雄港景致，可繼續走海濱木棧道前行，欣賞高雄港都風景，展現旗津海天一色，在既美麗又浪漫的夕陽下看著大船入港，享受海岸風光。<br> <br> 星空隧道串連旗後燈塔、旗後砲台、珊瑚礁地形等獨有美景，是全國唯一的海景自行車棧道，無論步行或騎車，都能讓旅人感到驚艷。<br>\r\n      </div>', 22.6128673000, 120.2629577000, 17, '<p>\r\n      <div class="">大眾運輸</div>\r\n      </p>\r\n      1.公車：在前鎮總站搭市公車35路→可直達旗津半島\r\n      2.渡輪：往旗津的渡船頭搭乘渡輪抵達旗津→下旗津渡船頭走廟前路即可到達\r\n      </p>\r\n      <div class="">自行開車</div>\r\n      <p>\r\n      1.由前鎮漁港的新生路→經漁港南三路穿過過港隧道→抵達旗津半島\r\n      2.開車至鼓山→於鼓山渡輪站轉搭渡輪→下渡輪後往右直走廟前路\r\n      3.國道一號→高速公路小港端下→中山四路右轉漁港路→左轉新生路→進過港隧道後直達旗津半島\r\n      </p>'),
	(600002, '六合觀光夜市', '行人徒步逛街，燈火通明、攤位整潔，短短的街道充斥海港味，海鮮粥、鹽蒸蝦、烏魚腱都是不可錯過的美味。。', 3, '高雄市新興區六合二路與中山一路口', '全年開放', '17:00:00', '01:00:00', '07-3373184', '\r\n      <p>沒到過六合夜市，就不算真正去過高雄。</p><p>早在民國39年（西元1950年），位於現在高雄市新興區大港埔附近的空地上，就開始聚集了許多小吃攤，漸漸的越來越多，久而久之便形成以小吃聞名的「大港埔夜市」，之後逐漸擴大。轉變成為現在的六合夜市。六合夜市距離高雄火車站不遠，沿著中山路直行約十餘分鐘後右轉至六合路便可到達。</p>\r\n		白天這裡是筆直的大馬路，到了晚上便成為人來人往的熱鬧市集，以多樣化小吃聞名的「六合夜市」，最特殊的景觀是招牌林立的牛排店及海產店，大大小小有10多家，主要賣點是平價、家庭式的牛排套餐。兩排攤位從山產、海產、特產到冷飲、冰品等應有盡有，種類之多令人目不暇給，小吃口味之豐富為全臺有名。而高雄市的特色木瓜牛奶及鹽蒸蝦更是你不可錯過的好味道。\r\n		高雄市六合夜市成功塑造出國際級美食觀光夜市的整體形象，創造休憩、消費新景點。在硬體規劃部份致力於結合高雄特有港都文化，有效的增進攤販及消費者對六合夜市的認同感；在軟體上，凝聚整體攤販及管委會的向心力與行動力，並積極推廣統一制服與攤招，落實服務業「提昇顧客滿意度」的經營理念，開創出一條康莊大道。近年來市政府更積極在具國際知名度的六合夜市辦「傳統市集 YOUNG起來」、「六合美食嘉年華」系列活動，擴大商圈的商機。', 22.6321506000, 120.2992361000, 17, '<div><span class="traffic">【大眾運輸】</span><br>1.高鐵<br>搭高鐵至左營站下，再轉搭其他大眾運輸工具。<br>2.高捷<br>搭乘高雄捷運紅線，於「美麗島站」下車。11號出口出站步行約5分鐘可達。<br>3.公車<br>搭乘公車12、52、60、69、72、92、100、218、248、301至大港埔(中山一路)站下。左轉步行約3、4分鐘即可到達。<br><br><span class="traffic">【自行開車】</span><br>1.高雄車站→中山路→六合路→六合夜市。<br>2.中山高(國道1號)中正交流道→下順中正一路、二路、三路→遇中山路左轉→接六合路可抵。</div>'),
	(600003, '駁二藝術特區', '高雄最人氣的文化景點，以藝文與世界接軌，3大倉庫群各有特色，是在地人也熱愛的創意基地。', 1, '高雄市鹽埕區大勇路1號', '全年開放', '10:00:00', '20:00:00', '07-5214899', '\r\n      <div class="">\r\n      駁二藝術特區的前身為高雄港倉庫，建於1973年，過去儲放魚粉與砂糖，隨著產業轉型，一度遭遺忘閒置；直到2000年高雄市政府因尋找國慶煙火施放地點的機緣下，才讓這些舊倉庫起死回生、開創新生命，見證高雄港的繁華、沒落、再起與轉型。<br> <br> 因倉庫位於高雄港第二號接駁碼頭，藉其意涵而命名為「駁二」有傳承之意。一路走來，有公部門與民間齊心努力，才得以成為現在的「駁二」，成為臺灣最成功的文創園區之一，開啟高雄一股南方藝術的新潮流，帶動高雄城市轉型契機<br> <br> 從過去到現在，駁二藝術特區都是高雄人不可缺少的倉庫群。過去儲放貨物供應港口，現在改頭換面成為藝術家的創作天堂，匯集滿滿的設計與創意能量；過去有港邊載送貨物的西臨港線鐵道，現在則是高雄最熱門的水岸輕軌。<br> <br> 駁二藝術特區向民眾、在這個城市開展創意發想，透過各種公共藝術作品，向民眾互相親近對話，民眾可漫步、搭乘水岸輕軌穿梭其間，感受創意街區裡的悠閒與美學，是連高雄人也愛的創意基地。<br> <br> \r\n      <span style="color:#3498db"><strong><span style="font-size:1.125em">經營發展過程</span></strong></span>\r\n      <br> 駁二藝術特區經過許多人、許多年的努力，規模從發展初期的2棟倉庫，到現在擁有大勇倉庫群、大義倉庫群和蓬萊倉庫群等共25棟倉庫空間，是高雄重要的城市記憶。<br> <br> 一切源起於2000年，雙十煙火第一次不侷限在台北施放，決定南下高雄綻放，為尋覓適當的放煙火地點，人們發現了港口旁駁二倉庫的存在，一群熱心熱血的藝文界人士於2001年成立駁二藝術發展協會，將駁二規劃成一個獨特的藝術開放空間，催生推動駁二藝術特區作為南部人文藝術發展的基地。<br> <br> 駁二藝術特區透過文化部（當時的文建會）「閒置空間再利用」計畫改頭換面，為高雄開啟藝文、文創的新視窗，成為南部地區的文創重鎮。營運初期以公辦民營的模式，歷經駁二藝術發展協會、樹德科技大學，最後2006年由高雄市文化局接手。<br> \r\n      <br> 2006年高雄市政府文化局接手至今，將駁二藝術園區定位為，當代藝術與常民美學雙軌併行，將倉庫空間轉變為文創設計、生活藝術、當代藝術、獨立音樂、公共藝術等展演場域。<br> \r\n      <br> 陸續舉辦了高雄設計節、好漢玩字節、鋼雕藝術節、貨櫃藝術節、高雄人來了大公仔、The Wall駁二音樂演唱會等，匯集來自世界各地的藝術創意，透過一次又一次的展演，激盪出嶄新火花，上演海港城市的魅力文化與生活美學。<br> \r\n      <span style="font-size:1.125em"><span style="color:#3498db"><br> \r\n      <strong>現今的駁二藝術特區</strong></span></span><br> 駁二藝術特區以大勇區為中心，透過水岸輕軌串連蓬萊區與大義區，構築出獨特的海洋特性的文創氛圍。駁二塔則是登高望大港橋的最佳觀景台，每人每次10元投幣入場。<br> <br> <span style="color:#3498db"><strong>大勇倉庫群－駁二的故事從這裡開始</strong></span><br> 共有12棟倉庫，其中C5、P2為駁二最草創時期的兩個展覽場域，這兩棟倉庫目前都仍以靜態展覽為主要用途。陸續加入營運陣容的C1、C2、C4及自行車倉庫，目前主要籌辦實驗性、文創類或當代藝術型態之展覽。<br> <span style="color:#3498db"><strong>\r\n      <br> 蓬萊倉庫群－復刻百年鐵道的歷史紋理</strong></span><br> 共有7棟倉庫，自2012年加入駁二營運陣容，以舉辦展演活動和特色餐飲為主，並結合了周邊的哈瑪星鐵道文化園區，大人小孩都喜愛的哈瑪星台灣鐵道館就位在此區。<br><br> <span style="color:#3498db"><strong>大義倉庫群－自成一格的職人藝術街區</strong></span><br> 共有6棟倉庫，為最後納入駁二版圖的區域，主要讓個人營業型態的工作室進駐，作為文化創意產業發展基地，各式各樣的特色小店、公共藝術作品藏在巷弄角落，以及假日的文創市集，是整個藝術園區最有文青味的地方。<br> </div>\r\n      ', 22.6199803000, 120.2789484000, 17, '<div><span class="traffic">【大眾運輸】</span><br>1.火車、公車<br>至高雄火車站下車後→可至前站搭乘建國幹線(88)或56號→於五福四路大勇路口下車→步行五分鐘可抵達會場。<br>2.公車<br>(1)搭乘五福幹線(50)→於五福四路大勇路口下車→步行五分鐘可抵達會場。<br>(2)小港地區的民眾→可搭乘11號公車→於五福四路大勇路口下車→步行五分鐘可抵達會場。<br>(3)鳳山地區的民眾→可至建軍站搭乘五福幹線(50)公車或建國幹線(88)公車→於五福四路大勇路口下車→步行五分鐘可抵達會場。<br>(4)鳳山地區的民眾→可至建軍站搭乘248號公車→於高雄港站下車→步行約10分鐘。<br>(5)前鎮地區的民眾→可至瑞豐站搭乘11號公車→於大勇路下車→步行五分鐘可抵達會場。<br>(6)三民區的民眾(經後火車站)→可至金獅湖站搭乘33號公車→於大勇路下車→步行五分鐘可抵達會場。<br>(7)哈瑪星線→舊打狗驛(打狗鐵道故事館)捷運西子灣站二號出口搭乘→於駁二特區站下車即可。<br>3.捷運<br>捷運橘線鹽埕埔站（O2站）1號出口，沿大勇路向南步行約5分鐘即可到達。<br>捷運橘線西子灣站（O1站）2號出口，沿西臨港線自行車道向東步行約2分鐘即可到達「駁二蓬萊倉庫」。<br><br><span class="traffic">【自行開車】</span><br>行駛國道1號下中正交流道→沿中正路至凱旋路口(勿往中正地下道行駛)→轉五福路直行→過五福橋(愛河)→大勇路左轉到底即可抵達，車程約30分鐘。<br><br><span class="traffic">【自行車】</span><br>駁二藝術特區為高雄最熱門的「西臨港線自行車道」所經過。騎乘路線參考：新光碼頭→真愛碼頭→駁二藝術特區→駁二「蓬萊倉庫群」→漁人碼頭→打狗鐵道故事館→西子灣。</div>'),
	(600004, '大港橋', '是全臺首座水平旋轉景觀橋樑，也是亞洲最長的跨港旋轉橋，串連駁二藝術特區與棧貳庫2處熱門景點，是目前最新潮的旅遊路線。', 1, '高雄市鹽埕區駁二大義站', '全年開放', '00:00:00', '23:59:00', '07-5219000', '\r\n      <div>高雄輕軌駁二大義站旁<br>高雄捷運鹽埕埔站</div>', 22.6178557000, 120.2838539000, 15, '<div><span class="traffic">【大眾運輸】</span><br>1.火車、公車<br>至高雄火車站下車後→可至前站搭乘建國幹線(88)或56號→於五福四路大勇路口下車→步行五分鐘可抵達會場。<br>2.公車<br>(1)搭乘五福幹線(50)→於五福四路大勇路口下車→步行五分鐘可抵達會場。<br>(2)小港地區的民眾→可搭乘11號公車→於五福四路大勇路口下車→步行五分鐘可抵達會場。<br>(3)鳳山地區的民眾→可至建軍站搭乘五福幹線(50)公車或建國幹線(88)公車→於五福四路大勇路口下車→步行五分鐘可抵達會場。<br>(4)鳳山地區的民眾→可至建軍站搭乘248號公車→於高雄港站下車→步行約10分鐘。<br>(5)前鎮地區的民眾→可至瑞豐站搭乘11號公車→於大勇路下車→步行五分鐘可抵達會場。<br>(6)三民區的民眾(經後火車站)→可至金獅湖站搭乘33號公車→於大勇路下車→步行五分鐘可抵達會場。<br>(7)哈瑪星線→舊打狗驛(打狗鐵道故事館)捷運西子灣站二號出口搭乘→於駁二特區站下車即可。<br>3.捷運<br>捷運橘線鹽埕埔站（O2站）1號出口，沿大勇路向南步行約5分鐘即可到達。<br>捷運橘線西子灣站（O1站）2號出口，沿西臨港線自行車道向東步行約2分鐘即可到達「駁二蓬萊倉庫」。<br><br><span class="traffic">【自行開車】</span><br>行駛國道1號下中正交流道→沿中正路至凱旋路口(勿往中正地下道行駛)→轉五福路直行→過五福橋(愛河)→大勇路左轉到底即可抵達，車程約30分鐘。<br><br><span class="traffic">【自行車】</span><br>駁二藝術特區為高雄最熱門的「西臨港線自行車道」所經過。騎乘路線參考：新光碼頭→真愛碼頭→駁二藝術特區→駁二「蓬萊倉庫群」→漁人碼頭→打狗鐵道故事館→西子灣。</div>'),
	(600005, '旗津海水浴場', '夏日艷陽高照，踩踏著旗津細軟的沙，泡進清澈海水裡一解炎熱酷暑。黃昏時刻，夕陽斜照，晚霞燦爛，漫步在海岸線，海風輕拂，這就是夏天該有的浪漫模樣！', 4, '高雄市旗津區廟前路1號', '全年開放', '00:00:00', '23:59:00', '07-5710811', '\r\n      <p>\r\n	「旗津海水浴場」位於高雄市旗津區的廟前路上，與"旗津海岸公園"相鄰，是海岸公園北邊的起點，綿延數公里的海岸線，走在上頭吹吹海風欣賞宜人的美景，都是不錯的心靈與視覺的饗宴。由於「旗津海水浴場」的沙質細軟、海水清澈，以及完善的救生設備及沖水設備，每逢夏日豔陽時節，總不乏戲水的人潮，時常聚集了許多的游泳、衝浪、拖曳傘的玩家。</p>\r\n      <p>\r\n	「旗津海水浴場」內設施相當的多元，有"觀海景觀步道"、"自然生態區"、以及"越野區"等不同的休憩區，即使是海水浴場不開放的季節，遊客來到這裡還是可以從事其他的休閒娛樂。在「旗津海水浴場」若是您玩的滿身是沙，也不用擔心，這裡規劃有便利的沖水設備，讓玩水的人們可以乾乾淨淨的回家去，浴場內雖然也沒有提供餐飲，但走出海水浴場，對街即有各式販賣旗津名產與美食的店家。</p>\r\n      <p>\r\n	每到傍晚時分的時候，「旗津海水浴場」看著夕陽斜掛、彩霞滿空的美景，搭配一波一波的浪花拍打著沙岸的樂音，加上海水浴場內廣闊的視野，可輕鬆遠眺遠方的船隻與旗后山，是個適合情侶們在此談情說愛及製造浪漫的絕佳地點。</p>', 22.6101743000, 120.2565999000, 15, '<div><span class="traffic">【大眾運輸】</span><br>1.公車<br>高雄市公車1、31、50號→直達旗津半島→步行可達旗津海水浴場<br>2.渡輪<br>高雄公車總站→轉搭35號往渡輪站市公車→轉搭往旗津的渡輪船→達旗津半島→步行可達旗津海水浴場<br><br><span class="traffic">【自行開車】</span><br>1.前鎮漁港的新生路→經漁港南三路→行經過港隧道→至對岸旗津半島(約3~5分鐘)→可達旗津海水浴場<br>2.國道一號→於高速公路小港端下→沿中山四路往機場方向→右轉金福路、新生路進過港隧道→旗津渡船站→右轉直行可達旗津海水浴場</div>'),
	(600006, '壽山動物園', '園內有一百多種來自世界各地的珍禽異獸，牠們的來路各有故事，是寓教於樂的最佳場所。', 2, '高雄市鼓山區萬壽路350號', '星期一', '09:00:00', '17:00:00', '(07)5215187', '「壽山動物園」位於高雄市壽山的東南角，不但視野可以俯瞰大高雄市區，園區位置也緊鄰著市區，交通也相當的便利，可說是高雄市民最佳的休憩園地。但高雄市動物園原本是設立在西子灣，民國六十九年因市政府欲爭取中山大學設校，因此將『西子灣風景特定區』編訂為學校用地，將原處的動物園遷移至現在的『壽山風景區』，也就是現在的「壽山動物園」。\r\n\r\n「壽山動物園」雖然佔地面積不算非常大，但園區內也飼養著一百多種來自世界各地的珍禽異獸，數量多達一千三百餘隻，擁有的動物非常齊全，並且還擁有相當稀有的台灣黑熊。園區內的動物來路各有故事，是個相當有寓教娛樂的場所。「壽山動物園」大部分地質屬砂質咕咾石層，硬體建設上的維護相當不易，園區不但辛勤的維護，開發初期還針對週遭的環境加以保護，目前動物園內還有數百餘種的原生植物，成為「壽山動物園」內特殊風貌。同時園內動線安排也很順暢，在「壽山動物園」不但能欣賞到動物們也可以達到走路運動的休閒效果。\r\n\r\n「壽山動物園」所處的壽山相當的幽靜，裡頭還有許多名剎寺廟隱置其中，到了夜晚來到這裡欣賞港都的夜景，又是另外一件美事。由於『壽山』的四周環山道路，四通八達，上下山十分方便，習慣在鋼鐵建築中生活的您，如果想要與動物更親近的接觸與深入的了解，別忘了到「壽山動物園」走一走。', 22.6355110000, 120.2728432000, 17, '<div><span class="traffic">【大眾運輸】</span><br>1.可搭乘市公車31、50、99路在壽山公園站下車。<br>2.(逢架日)高雄火車站前搭乘56號公車(假日：含週六日、國定假日、寒暑春假)。<br><br><span class="traffic">【自行開車】</span><br>1.省道台一縣(民族路)→九如四路→華安街→鼓山三路→萬壽路(元亨寺)→萬壽山橋→壽山動物園。<br>2.高速公路→中正交流道→中正四路→大公路→鼓山一路→壽山公園入口→萬壽路→壽山動物園。</div>');

-- 傾印  資料表 travel_kh.attraction_favorites 結構
DROP TABLE IF EXISTS `attraction_favorites`;
CREATE TABLE IF NOT EXISTS `attraction_favorites` (
  `attraction_favorites_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_member_id` int(11) NOT NULL,
  `fk_attraction_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`attraction_favorites_id`),
  KEY `fk_attraction_id` (`fk_attraction_id`),
  KEY `fk_member_id` (`fk_member_id`),
  CONSTRAINT `attraction_favorites_ibfk_2` FOREIGN KEY (`fk_attraction_id`) REFERENCES `attraction` (`attraction_id`),
  CONSTRAINT `attraction_favorites_ibfk_3` FOREIGN KEY (`fk_member_id`) REFERENCES `member` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6000002 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.attraction_favorites 的資料：~0 rows (近似值)
INSERT INTO `attraction_favorites` (`attraction_favorites_id`, `fk_member_id`, `fk_attraction_id`) VALUES
	(600001, 900001, 600003);

-- 傾印  資料表 travel_kh.attraction_hegtag 結構
DROP TABLE IF EXISTS `attraction_hegtag`;
CREATE TABLE IF NOT EXISTS `attraction_hegtag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_tag_name_id` int(11) DEFAULT NULL,
  `fk_attraction_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`tag_id`),
  KEY `fk_tag_name_id` (`fk_tag_name_id`),
  KEY `fk_attraction_id` (`fk_attraction_id`),
  CONSTRAINT `attraction_hegtag_ibfk_1` FOREIGN KEY (`fk_tag_name_id`) REFERENCES `attraction_tag_name` (`tag_name_id`),
  CONSTRAINT `attraction_hegtag_ibfk_2` FOREIGN KEY (`fk_attraction_id`) REFERENCES `attraction` (`attraction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.attraction_hegtag 的資料：~20 rows (近似值)
INSERT INTO `attraction_hegtag` (`tag_id`, `fk_tag_name_id`, `fk_attraction_id`) VALUES
	(1, 1, 600001),
	(2, 10, 600001),
	(3, 2, 600001),
	(4, 10, 600001),
	(5, 3, 600003),
	(6, 9, 600003),
	(7, 13, 600003),
	(8, 14, 600003),
	(9, 1, 600004),
	(10, 2, 600004),
	(11, 3, 600004),
	(12, 2, 600005),
	(13, 8, 600005),
	(14, 6, 600005),
	(15, 2, 600002),
	(16, 12, 600002),
	(17, 2, 600002),
	(18, 15, 600006),
	(19, 2, 600006),
	(20, 5, 600006);

-- 傾印  資料表 travel_kh.attraction_image 結構
DROP TABLE IF EXISTS `attraction_image`;
CREATE TABLE IF NOT EXISTS `attraction_image` (
  `img_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_attraction_id` int(10) unsigned DEFAULT NULL,
  `img_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`img_id`),
  KEY `fk_attraction_id` (`fk_attraction_id`),
  CONSTRAINT `attraction_image_ibfk_1` FOREIGN KEY (`fk_attraction_id`) REFERENCES `attraction` (`attraction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.attraction_image 的資料：~24 rows (近似值)
INSERT INTO `attraction_image` (`img_id`, `fk_attraction_id`, `img_name`) VALUES
	(1, 600001, '星空隧道01.jfif'),
	(2, 600001, '星空隧道02.jfif'),
	(3, 600001, '星空隧道03.jpg'),
	(4, 600001, '星空隧道04.jpg'),
	(5, 600003, '駁二01.jfif'),
	(6, 600003, '駁二02.jfif'),
	(7, 600003, '駁二03.jfif'),
	(8, 600003, '駁二04.jfif'),
	(9, 600004, '大港橋01.jpg'),
	(10, 600004, '大港橋02.jpg'),
	(11, 600004, '大港橋03.jpg'),
	(12, 600004, '大港橋04.jpg'),
	(13, 600004, '大港橋05.jpg'),
	(14, 600005, '旗津海水浴場01.jfif'),
	(15, 600005, '旗津海水浴場01.jpg'),
	(16, 600005, '旗津海水浴場02.jpg'),
	(17, 600005, '旗津海水浴場03.jpg'),
	(18, 600002, '六合夜市01.jfif'),
	(19, 600002, '六合夜市02.jfif'),
	(20, 600002, '六合夜市03.jpg'),
	(21, 600006, '壽山動物園01.jpg'),
	(22, 600006, '壽山動物園02.jpg'),
	(23, 600006, '壽山動物園03.jpg'),
	(24, 600006, '壽山動物園04.jpg');

-- 傾印  資料表 travel_kh.attraction_reviews 結構
DROP TABLE IF EXISTS `attraction_reviews`;
CREATE TABLE IF NOT EXISTS `attraction_reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_member_id` int(11) NOT NULL,
  `fk_attraction_id` int(10) unsigned NOT NULL,
  `rating` enum('1','2','3','4','5') NOT NULL,
  `content` text DEFAULT NULL,
  PRIMARY KEY (`review_id`),
  KEY `fk_attraction_id` (`fk_attraction_id`),
  KEY `fk_member_id` (`fk_member_id`),
  CONSTRAINT `attraction_reviews_ibfk_1` FOREIGN KEY (`fk_attraction_id`) REFERENCES `attraction` (`attraction_id`),
  CONSTRAINT `attraction_reviews_ibfk_2` FOREIGN KEY (`fk_member_id`) REFERENCES `member` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.attraction_reviews 的資料：~2 rows (近似值)
INSERT INTO `attraction_reviews` (`review_id`, `fk_member_id`, `fk_attraction_id`, `rating`, `content`) VALUES
	(1, 900001, 600003, '4', '讚'),
	(2, 900001, 600006, '3', '熱');

-- 傾印  資料表 travel_kh.attraction_tag_name 結構
DROP TABLE IF EXISTS `attraction_tag_name`;
CREATE TABLE IF NOT EXISTS `attraction_tag_name` (
  `tag_name_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`tag_name_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.attraction_tag_name 的資料：~15 rows (近似值)
INSERT INTO `attraction_tag_name` (`tag_name_id`, `tag_name`) VALUES
	(1, '網美必拍'),
	(2, '親子共遊'),
	(3, '打卡熱點'),
	(4, '古蹟巡禮'),
	(5, '生態體驗'),
	(6, '夏天戲水'),
	(7, '遊樂園'),
	(8, '浪漫約會'),
	(9, '文青必訪'),
	(10, '單車漫遊'),
	(11, '老街尋訪'),
	(12, '觀光夜市'),
	(13, '藝術'),
	(14, '展覽'),
	(15, '動物園');

-- 傾印  資料表 travel_kh.a_to_tk 結構
DROP TABLE IF EXISTS `a_to_tk`;
CREATE TABLE IF NOT EXISTS `a_to_tk` (
  `fk_attraction_id` int(11) unsigned NOT NULL,
  `fk_tk_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`fk_attraction_id`),
  KEY `fk_tk_id` (`fk_tk_id`),
  CONSTRAINT `a_to_tk_ibfk_1` FOREIGN KEY (`fk_tk_id`) REFERENCES `ticket` (`tk_id`) ON DELETE SET NULL,
  CONSTRAINT `a_to_tk_ibfk_2` FOREIGN KEY (`fk_attraction_id`) REFERENCES `attraction` (`attraction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.a_to_tk 的資料：~1 rows (近似值)
INSERT INTO `a_to_tk` (`fk_attraction_id`, `fk_tk_id`) VALUES
	(600006, 3000000001);

-- 傾印  資料表 travel_kh.backend_manage 結構
DROP TABLE IF EXISTS `backend_manage`;
CREATE TABLE IF NOT EXISTS `backend_manage` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(45) NOT NULL,
  `pwd` varchar(45) NOT NULL,
  `account_permission` varchar(45) NOT NULL,
  `account_state` varchar(45) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=908 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.backend_manage 的資料：~7 rows (近似值)
INSERT INTO `backend_manage` (`staff_id`, `staff_name`, `pwd`, `account_permission`, `account_state`) VALUES
	(901, '阿隆', '0000', '嗨', '嗨'),
	(902, '賢', 'password1', 'admin', 'active'),
	(903, '稚微', 'password2', 'user', 'active'),
	(904, '朝隆', 'password3', 'user', 'active'),
	(905, '德中', 'password4', 'user', 'inactive'),
	(906, '宣瑩', 'password5', 'admin', 'inactive'),
	(907, '佑佑', '0000', 'admin', 'inactive');

-- 傾印  資料表 travel_kh.food_categorize 結構
DROP TABLE IF EXISTS `food_categorize`;
CREATE TABLE IF NOT EXISTS `food_categorize` (
  `categorize_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`categorize_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2009 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.food_categorize 的資料：~7 rows (近似值)
INSERT INTO `food_categorize` (`categorize_id`, `name`) VALUES
	(2001, '在地小吃'),
	(2002, '夜市美食'),
	(2003, '米其林餐廳'),
	(2005, '鮮鮮海產'),
	(2006, '特色美食'),
	(2007, '百貨優質商家'),
	(2008, '購物商圈趣');

-- 傾印  資料表 travel_kh.food_merchants 結構
DROP TABLE IF EXISTS `food_merchants`;
CREATE TABLE IF NOT EXISTS `food_merchants` (
  `merchant_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `facilities` varchar(50) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `longitude` decimal(13,10) DEFAULT NULL,
  `latitude` decimal(13,10) DEFAULT NULL,
  `zoom` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`merchant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=200100004 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.food_merchants 的資料：~2 rows (近似值)
INSERT INTO `food_merchants` (`merchant_id`, `name`, `description`, `phone`, `facilities`, `address`, `longitude`, `latitude`, `zoom`) VALUES
	(200100002, '屋台小吃', '高雄知名屋台小吃', '07-1234567', '提供座位、外帶服務', '高雄市鹽埕區1號', 120.2877462000, 22.6218753000, 10.00),
	(200100003, '王牌豆花', '夜市必嚐美食', '07-9876543', '提供座位、外帶服務', '高雄市前金區2號', 120.2907684000, 22.6305321000, 8.50);

-- 傾印  資料表 travel_kh.food_merchant_images 結構
DROP TABLE IF EXISTS `food_merchant_images`;
CREATE TABLE IF NOT EXISTS `food_merchant_images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `merchant_id` (`merchant_id`),
  CONSTRAINT `food_merchant_images_ibfk_1` FOREIGN KEY (`merchant_id`) REFERENCES `food_merchants` (`merchant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=200200007 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.food_merchant_images 的資料：~4 rows (近似值)
INSERT INTO `food_merchant_images` (`image_id`, `image`, `merchant_id`) VALUES
	(200200003, 'https://reurl.cc/DA4Xoe', 200100002),
	(200200004, 'https://reurl.cc/eDLWDb', 200100002),
	(200200005, 'https://reurl.cc/3x73kl', 200100003),
	(200200006, 'https://reurl.cc/y7YmWM', 200100003);

-- 傾印  資料表 travel_kh.food_merchant_products 結構
DROP TABLE IF EXISTS `food_merchant_products`;
CREATE TABLE IF NOT EXISTS `food_merchant_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `specifications` varchar(50) DEFAULT NULL,
  `purchase_notes` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `merchant_id` (`merchant_id`),
  CONSTRAINT `food_merchant_products_ibfk_1` FOREIGN KEY (`merchant_id`) REFERENCES `food_merchants` (`merchant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20003 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.food_merchant_products 的資料：~2 rows (近似值)
INSERT INTO `food_merchant_products` (`product_id`, `name`, `description`, `specifications`, `purchase_notes`, `price`, `product_image`, `merchant_id`) VALUES
	(20001, '經典小籠包', '鹽埕屋台小吃必嚐美食', '規格1', '備註1', 80, 'https://reurl.cc/2Lz8D9', 1),
	(20002, '特色炒麵', '六合夜市必吃美食', '規格2', '備註2', 120, 'https://reurl.cc/657LZ6', 2);

-- 傾印  資料表 travel_kh.food_orderdetails 結構
DROP TABLE IF EXISTS `food_orderdetails`;
CREATE TABLE IF NOT EXISTS `food_orderdetails` (
  `fd_orderdetails_id` int(10) NOT NULL AUTO_INCREMENT,
  `fd_order_id` bigint(13) unsigned NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(10) unsigned NOT NULL,
  `product_price` int(10) unsigned NOT NULL,
  PRIMARY KEY (`fd_orderdetails_id`,`fd_order_id`),
  KEY `order_id` (`fd_order_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `food_orderdetails_ibfk_1` FOREIGN KEY (`fd_order_id`) REFERENCES `food_orders` (`fd_order_id`),
  CONSTRAINT `food_orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `food_merchant_products` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  travel_kh.food_orderdetails 的資料：~0 rows (近似值)

-- 傾印  資料表 travel_kh.food_orders 結構
DROP TABLE IF EXISTS `food_orders`;
CREATE TABLE IF NOT EXISTS `food_orders` (
  `fd_order_id` bigint(13) unsigned NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `payment_id` int(10) DEFAULT NULL,
  `receiver_name` varchar(50) DEFAULT NULL,
  `receiver_phone` varchar(30) DEFAULT NULL,
  `shipping_method` enum('寄送到家','無實體商品','超商取貨') DEFAULT NULL,
  `shipping_city` enum('台北市','新北市','基隆市','新竹市','桃園市','新竹縣','宜蘭縣','台中市','苗栗縣','彰化縣','南投縣','雲林縣','嘉義市','嘉義縣','台南市','高雄市','屏東縣','澎湖縣','花蓮縣','臺東縣','金門縣','連江縣') DEFAULT NULL,
  `shipping_address` varchar(100) DEFAULT NULL,
  `shipping_fee` int(10) unsigned DEFAULT NULL,
  `order_total` int(10) unsigned DEFAULT NULL,
  `grand_total` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`fd_order_id`),
  KEY `member_id` (`member_id`),
  KEY `payment_id` (`payment_id`),
  KEY `staff_id` (`staff_id`),
  CONSTRAINT `food_orders_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`),
  CONSTRAINT `food_orders_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`),
  CONSTRAINT `food_orders_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `backend_manage` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  travel_kh.food_orders 的資料：~1 rows (近似值)
INSERT INTO `food_orders` (`fd_order_id`, `member_id`, `staff_id`, `order_date`, `payment_id`, `receiver_name`, `receiver_phone`, `shipping_method`, `shipping_city`, `shipping_address`, `shipping_fee`, `order_total`, `grand_total`) VALUES
	(2023061420001, 900001, 901, '2023-06-14 14:35:22', 1, '吳柳琪', '0956756756', '寄送到家', '屏東縣', '鹽埔鄉中和路4號', 30, 290, 320);

-- 傾印  資料表 travel_kh.food_product_favorites 結構
DROP TABLE IF EXISTS `food_product_favorites`;
CREATE TABLE IF NOT EXISTS `food_product_favorites` (
  `favorite_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`favorite_id`),
  KEY `member_id` (`member_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `food_product_favorites_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`),
  CONSTRAINT `food_product_favorites_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `food_merchant_products` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.food_product_favorites 的資料：~2 rows (近似值)
INSERT INTO `food_product_favorites` (`favorite_id`, `product_id`, `member_id`) VALUES
	(1, 20002, 900011),
	(2, 20001, 900008);

-- 傾印  資料表 travel_kh.food_tag_groups 結構
DROP TABLE IF EXISTS `food_tag_groups`;
CREATE TABLE IF NOT EXISTS `food_tag_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `categorize_id` int(11) DEFAULT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  `area_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`group_id`),
  KEY `area_id` (`area_id`),
  KEY `categorize_id` (`categorize_id`),
  KEY `merchant_id` (`merchant_id`),
  CONSTRAINT `food_tag_groups_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`),
  CONSTRAINT `food_tag_groups_ibfk_2` FOREIGN KEY (`categorize_id`) REFERENCES `food_categorize` (`categorize_id`),
  CONSTRAINT `food_tag_groups_ibfk_3` FOREIGN KEY (`merchant_id`) REFERENCES `food_merchants` (`merchant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=200600006 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.food_tag_groups 的資料：~2 rows (近似值)
INSERT INTO `food_tag_groups` (`group_id`, `categorize_id`, `merchant_id`, `area_id`) VALUES
	(200600004, 2002, 200100003, 9),
	(200600005, 2001, 200100002, 1);

-- 傾印  資料表 travel_kh.hotel_category 結構
DROP TABLE IF EXISTS `hotel_category`;
CREATE TABLE IF NOT EXISTS `hotel_category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5004 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.hotel_category 的資料：~4 rows (近似值)
INSERT INTO `hotel_category` (`category_id`, `category_name`) VALUES
	(1, ''),
	(5001, '親子同樂'),
	(5002, '寵物友善'),
	(5003, '青年旅宿');

-- 傾印  資料表 travel_kh.hotel_facility 結構
DROP TABLE IF EXISTS `hotel_facility`;
CREATE TABLE IF NOT EXISTS `hotel_facility` (
  `facility_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `facility_name` varchar(30) NOT NULL,
  PRIMARY KEY (`facility_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5215 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.hotel_facility 的資料：~14 rows (近似值)
INSERT INTO `hotel_facility` (`facility_id`, `facility_name`) VALUES
	(5201, '健身中心'),
	(5202, '室內游泳池'),
	(5203, '室外游泳池'),
	(5204, '禁菸客房'),
	(5205, '免費停車'),
	(5206, '免費無線網路'),
	(5207, '所有客房都有咖啡／沏茶設施'),
	(5208, '家庭房'),
	(5209, '私人停車場'),
	(5210, '無障礙設施'),
	(5211, '機場接駁車'),
	(5212, '停車場'),
	(5213, 'SPA 及養生會館'),
	(5214, '酒吧');

-- 傾印  資料表 travel_kh.hotel_favorites 結構
DROP TABLE IF EXISTS `hotel_favorites`;
CREATE TABLE IF NOT EXISTS `hotel_favorites` (
  `favorites_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `hotel_id` int(10) unsigned NOT NULL,
  `favorites_date` datetime DEFAULT NULL,
  PRIMARY KEY (`favorites_id`),
  KEY `hotel_id` (`hotel_id`),
  KEY `member_id` (`member_id`),
  CONSTRAINT `hotel_favorites_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotel_kh` (`hotel_id`),
  CONSTRAINT `hotel_favorites_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=570007 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.hotel_favorites 的資料：~6 rows (近似值)
INSERT INTO `hotel_favorites` (`favorites_id`, `member_id`, `hotel_id`, `favorites_date`) VALUES
	(570001, 900001, 500010011, '2023-06-07 19:42:12'),
	(570002, 900001, 500010037, '2023-06-07 11:12:22'),
	(570003, 900001, 500010011, '2023-06-07 12:52:33'),
	(570004, 900001, 500010047, '2023-06-07 10:32:38'),
	(570005, 900001, 500010031, '2023-06-07 17:22:19'),
	(570006, 900001, 500010043, '2023-06-07 18:41:21');

-- 傾印  資料表 travel_kh.hotel_img 結構
DROP TABLE IF EXISTS `hotel_img`;
CREATE TABLE IF NOT EXISTS `hotel_img` (
  `img_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img_name` varchar(30) NOT NULL,
  `img_src` varchar(30) DEFAULT NULL,
  `room_id` int(10) unsigned DEFAULT NULL,
  `hotel_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`img_id`),
  KEY `hotel_id` (`hotel_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `hotel_img_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotel_kh` (`hotel_id`),
  CONSTRAINT `hotel_img_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `hotel_room` (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=500030054 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.hotel_img 的資料：~53 rows (近似值)
INSERT INTO `hotel_img` (`img_id`, `img_name`, `img_src`, `room_id`, `hotel_id`) VALUES
	(500030001, '萬豪經典', '經典1.jpg', 500020011, 500010011),
	(500030002, '萬豪經典', '經典2.jpg', 500020011, 500010011),
	(500030003, '萬豪經典', '經典3.jpg', 500020011, 500010011),
	(500030004, '萬豪經典', '經典4.jpg', 500020011, 500010011),
	(500030005, '萬豪豪特', '豪特1.jpg', 500020012, 500010011),
	(500030006, '萬豪豪特', '豪特2.jpg', 500020012, 500010011),
	(500030007, '萬豪豪特', '豪特3.jpg', 500020012, 500010011),
	(500030008, '萬豪豪特行', '豪特行1.jpg', 500020013, 500010011),
	(500030009, '萬豪豪特行', '豪特行2.jpg', 500020013, 500010011),
	(500030010, '萬豪豪特行', '豪特行3.jpg', 500020013, 500010011),
	(500030011, '萬豪豪特行', '豪特行4.jpg', 500020013, 500010011),
	(500030012, '萬豪豪特行', '豪特行5.jpg', 500020013, 500010011),
	(500030013, '萬豪尊爵行', '尊爵行1.jpg', 500020014, 500010011),
	(500030014, '萬豪尊爵行', '尊爵行2.jpg', 500020014, 500010011),
	(500030015, '萬豪尊爵行', '尊爵行3.jpg', 500020014, 500010011),
	(500030016, '萬豪尊爵行', '尊爵行4.jpg', 500020014, 500010011),
	(500030017, '萬豪尊爵行', '尊爵行5.jpg', 500020014, 500010011),
	(500030018, '萬豪單臥', '單臥1.jpg', 500020015, 500010011),
	(500030019, '萬豪單臥', '單臥2.jpg', 500020015, 500010011),
	(500030020, '萬豪單臥', '單臥3.jpg', 500020015, 500010011),
	(500030021, '萬豪單臥', '單臥4.jpg', 500020015, 500010011),
	(500030022, '萬豪單臥', '單臥5.jpg', 500020015, 500010011),
	(500030023, '萬豪單臥', '單臥6.jpg', 500020015, 500010011),
	(500030024, '萬豪家庭', '家庭1.jpg', 500020016, 500010011),
	(500030025, '萬豪家庭', '家庭2.jpg', 500020016, 500010011),
	(500030026, '萬豪家庭', '家庭3.jpg', 500020016, 500010011),
	(500030027, '萬豪連通', '連通1.jpg', 500020017, 500010011),
	(500030028, '萬豪連通', '連通2.jpg', 500020017, 500010011),
	(500030029, '萬豪連通', '連通3.jpg', 500020017, 500010011),
	(500030030, '萬豪連通', '連通4.jpg', 500020017, 500010011),
	(500030031, '萬豪連通', '連通5.jpg', 500020017, 500010011),
	(500030032, '萬豪連通', '連通6.jpg', 500020017, 500010011),
	(500030033, '福容市高', '市高1.jpg', 500020001, 500010037),
	(500030034, '福容市高', '市高2.jpg', 500020001, 500010037),
	(500030035, '福容市高', '市高3.jpg', 500020001, 500010037),
	(500030036, '福容市高', '市高4.jpg', 500020001, 500010037),
	(500030037, '福容市高', '市高5.jpg', 500020001, 500010037),
	(500030038, '福容市豪', '市豪1.jpg', 500020002, 500010037),
	(500030039, '福容市豪', '市豪2.jpg', 500020002, 500010037),
	(500030040, '福容市豪', '市豪3.jpg', 500020002, 500010037),
	(500030041, '福容市豪', '市豪4.jpg', 500020002, 500010037),
	(500030042, '福容市豪', '市豪5.jpg', 500020002, 500010037),
	(500030043, '福容海港', '海港1.jpg', 500020003, 500010037),
	(500030044, '福容海港', '海港2.jpg', 500020003, 500010037),
	(500030045, '福容海港', '海港3.jpg', 500020003, 500010037),
	(500030046, '福容海港', '海港4.jpg', 500020003, 500010037),
	(500030047, '福容海港', '海港5.jpg', 500020003, 500010037),
	(500030048, '福容豪家', '豪家1.jpg', 500020004, 500010037),
	(500030049, '福容豪家', '豪家2.jpg', 500020004, 500010037),
	(500030050, '福容豪家', '豪家3.jpg', 500020004, 500010037),
	(500030051, '福容豪家', '豪家4.jpg', 500020004, 500010037),
	(500030052, '福容豪家', '豪家5.jpg', 500020004, 500010037),
	(500030053, '福容豪家', '豪家6.jpg', 500020004, 500010037);

-- 傾印  資料表 travel_kh.hotel_intermediary 結構
DROP TABLE IF EXISTS `hotel_intermediary`;
CREATE TABLE IF NOT EXISTS `hotel_intermediary` (
  `intermediary_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `facility_id` int(10) unsigned NOT NULL,
  `hotel_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`intermediary_id`),
  KEY `hotel_id` (`hotel_id`),
  KEY `facility_id` (`facility_id`),
  CONSTRAINT `hotel_intermediary_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotel_kh` (`hotel_id`),
  CONSTRAINT `hotel_intermediary_ibfk_2` FOREIGN KEY (`facility_id`) REFERENCES `hotel_facility` (`facility_id`)
) ENGINE=InnoDB AUTO_INCREMENT=580038 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.hotel_intermediary 的資料：~37 rows (近似值)
INSERT INTO `hotel_intermediary` (`intermediary_id`, `facility_id`, `hotel_id`) VALUES
	(580001, 5201, 500010037),
	(580002, 5203, 500010037),
	(580003, 5210, 500010037),
	(580004, 5204, 500010037),
	(580005, 5205, 500010037),
	(580006, 5206, 500010037),
	(580007, 5208, 500010037),
	(580008, 5201, 500010047),
	(580009, 5208, 500010047),
	(580010, 5206, 500010047),
	(580011, 5204, 500010047),
	(580012, 5207, 500010047),
	(580013, 5211, 500010047),
	(580014, 5212, 500010047),
	(580015, 5202, 500010011),
	(580016, 5204, 500010011),
	(580017, 5211, 500010011),
	(580018, 5208, 500010011),
	(580019, 5213, 500010011),
	(580020, 5201, 500010011),
	(580021, 5206, 500010011),
	(580022, 5207, 500010011),
	(580023, 5214, 500010011),
	(580024, 5202, 500010043),
	(580025, 5204, 500010043),
	(580026, 5211, 500010043),
	(580027, 5201, 500010043),
	(580028, 5206, 500010043),
	(580029, 5205, 500010043),
	(580030, 5207, 500010043),
	(580031, 5214, 500010043),
	(580032, 5204, 500010031),
	(580033, 5211, 500010031),
	(580034, 5208, 500010031),
	(580035, 5206, 500010031),
	(580036, 5214, 500010031),
	(580037, 5205, 500010031);

-- 傾印  資料表 travel_kh.hotel_kh 結構
DROP TABLE IF EXISTS `hotel_kh`;
CREATE TABLE IF NOT EXISTS `hotel_kh` (
  `hotel_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(30) NOT NULL,
  `hotel_address` varchar(100) NOT NULL,
  `hotel_tel` varchar(20) DEFAULT NULL,
  `hotel_img` varchar(30) DEFAULT NULL,
  `hotel_price` int(11) DEFAULT NULL,
  `hotel_introduction` text DEFAULT NULL,
  `hotel_lat` decimal(13,10) DEFAULT NULL,
  `hotel_lng` decimal(13,10) DEFAULT NULL,
  `hotel_zoom` decimal(5,2) DEFAULT NULL,
  `hotel_mrt` int(11) unsigned NOT NULL,
  `hotel_area` int(10) unsigned NOT NULL,
  `hotel_category` int(11) unsigned NOT NULL,
  `CoverImage` mediumblob NOT NULL,
  PRIMARY KEY (`hotel_id`),
  KEY `hotel_mrt` (`hotel_mrt`),
  KEY `hotel_area` (`hotel_area`),
  KEY `hotel_category` (`hotel_category`),
  CONSTRAINT `hotel_kh_ibfk_1` FOREIGN KEY (`hotel_mrt`) REFERENCES `hotel_mrt` (`mrt_id`),
  CONSTRAINT `hotel_kh_ibfk_2` FOREIGN KEY (`hotel_area`) REFERENCES `area` (`area_id`),
  CONSTRAINT `hotel_kh_ibfk_3` FOREIGN KEY (`hotel_category`) REFERENCES `hotel_category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=500010124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.hotel_kh 的資料：~123 rows (近似值)
INSERT INTO `hotel_kh` (`hotel_id`, `hotel_name`, `hotel_address`, `hotel_tel`, `hotel_img`, `hotel_price`, `hotel_introduction`, `hotel_lat`, `hotel_lng`, `hotel_zoom`, `hotel_mrt`, `hotel_area`, `hotel_category`, `CoverImage`) VALUES
	(500010001, '宮賞藝術大飯店', '高雄市新興區林森一路237號', '072399888', '宮賞.jpg', 5355, '', 22.6341439000, 120.3021807000, 17.00, 5105, 3, 5001, _binary ''),
	(500010002, '捷絲旅高雄站前館', '高雄市新興區中山一路280號', '079733588', '捷絲旅.jpg', 3870, '', 22.6354560000, 120.3012609000, 18.00, 5105, 3, 5001, _binary ''),
	(500010003, '康橋大飯店 - 火車站前館', '高雄市三民區建國二路295號', '072386677', '康橋.jpg', 2704, '', 22.6375721000, 120.3004324000, 17.00, 5103, 8, 5001, _binary ''),
	(500010004, 'WO Hotel', '高雄市前金區七賢二路394號', '072826000', 'WO.jpg', 2822, '', 22.6309710000, 120.2861376000, 17.00, 5124, 9, 5001, _binary ''),
	(500010005, '華園大飯店草衙館', '高雄市前鎮區中安路1號', '079560555', '華園草衙.jpg', 3773, '', 22.5849698000, 120.3277201000, 17.00, 5112, 10, 5001, _binary ''),
	(500010006, '秝芯旅店駁二館', '高雄市鹽埕區五福四路67號', '075219666', '秝芯.jpg', 1556, '', 22.6219101000, 120.2839766000, 17.00, 5123, 1, 5001, _binary ''),
	(500010007, '巨蛋旅店', '高雄市鼓山區文忠路1號', '075868388', '巨蛋旅店.jpg', 3750, '', 22.6650537000, 120.2997141000, 17.00, 5102, 2, 5001, _binary ''),
	(500010008, '義大皇家酒店', '高雄市大樹區學城路一段153號', '076568111', '義大皇家.jpg', 4620, '義大皇家酒店，環抱觀音山是全台唯一結合休閒度假飯店、大型購物商場、主題遊樂園和藝術生態於一體的多元化渡假休閒勝地。 雖坐擁名山勝地，交通便捷，緊鄰高雄市區，距離高鐵站20分鐘車程。飯店擁有656間(含睡眠中心)各式高級客房、5間中西料理餐廳、20間多功能會議及宴會場地、兒童俱樂部及時尚水療設施，亞洲唯一的“夢之湖”高科技影音聲光秀。 而多元化的房型選擇，可以滿足不同的住宿需求，結合環保意識的綠建築，提供您永續度假的小小體貼心意。每間房都特別設計獨立陽台，盡覽美麗風光，房內並備有液晶電視、免費網際網路、乾濕分離衛浴等現代化設施，以及舒適寬敞的客房設計讓賓客身心得以徹底放鬆。此外，住宿於皇家貴賓樓層，您可以享受到我們為您準備的各項禮遇及專屬服務。 兩千坪以上的休閒設施包羅萬象，在放鬆的氛圍中提供絕佳的健康體驗。設施包括：健身房、三溫暖、皇家E Spa、時尚水療、戶外親子戲水區、網球場及專為兒童規劃的兒童俱樂部等。斥資上億打造的“夢之湖”，震撼的聲光水影絢麗舞動，是戶外派對、時尚秀及浪漫婚禮舉辦的絕佳場地。 飯店的兩間大型宴會廳各可容納六百多人，是大型聚會、活動的最佳選擇。另外飯店提供貼心的專業婚禮策劃服務，專業的皇家婚禮經理將會為即將步入結婚殿堂的新人們打造一場別開生面的結婚慶典，締造賓主盡歡的成功宴席。', 22.7298023000, 120.3988532000, 17.00, 1, 15, 5001, _binary ''),
	(500010009, '義大天悅飯店', '高雄市大樹區義大八街100號', '076568000', '義大天悅.jpg', 3069, '', 22.7309051000, 120.3985433000, 17.00, 1, 15, 5001, _binary ''),
	(500010010, '鈞怡大飯店', '高雄市前金區河東路10號', '072821888', '鈞怡.jpg', 4390, '', 22.6219980000, 120.2885491000, 17.00, 1, 9, 5001, _binary ''),
	(500010011, '高雄萬豪酒店', '高雄市鼓山區龍德新路222號', '075599111', '萬豪.jpg', 7277, '高雄萬豪酒店為全台最大萬豪酒店，座落於於愛河地區，鄰近凹仔底森林公園。酒店距高雄國際機場僅25分鐘車程，距高鐵站15分鐘，距捷運凹仔底站步行5分鐘，交通便利性極佳。酒店會議及宴會空間分佈於 8 樓、10 樓及 11 樓，總面積達2,518 坪，稱霸南台灣；面積最大的萬享大宴會廳空間挑高、氣派華麗，面積約 847 坪可容納約 2,000 人；首創兩座戶外禮堂，滿足不同場合及宴會型態。從13到33樓共700間客房，12種不同房型，設計經典兼具現代風格〪12 樓健身中心設有室內溫水游泳池、水療池以及維琪浴，幫助紓壓煥發身心。酒店提供多樣精緻美食，包括歐陸餐廳、頂級中、西、日式佳餚美饌，為賓客締造賓至如歸奢華體驗。', 22.6545596000, 120.3036712000, 17.00, 5108, 2, 5002, _binary ''),
	(500010012, '237重機主題旅店', '高雄市鹽埕區七賢三路229號', '075218237', '237重機.jpg', 1550, '', 22.6298015000, 120.2812699000, 17.00, 1, 1, 5002, _binary ''),
	(500010013, '八五亞太旅店', '高雄市苓雅區中華四路31號號 17 樓', '0930056780', '八五亞太.jpg', 931, '', 22.6142430000, 120.2972115000, 16.00, 5104, 5, 5002, _binary ''),
	(500010014, '康瀚行旅', '高雄市前金區七賢二路195號', '072112151', '康瀚行旅.jpg', 1520, '', 22.6325835000, 120.2918564000, 17.00, 5124, 9, 5002, _binary ''),
	(500010015, '悠活農16', '高雄市鼓山區美術東五路46號', '0902311616', '悠活農16.jpg', 1035, '', 22.6591921000, 120.2932338000, 17.00, 5108, 2, 5002, _binary ''),
	(500010016, '艾旅汽車旅館', '高雄市鳳山區鳳東路165號', '077013030', '艾旅.jpg', 1700, '', 22.6287934000, 120.3586152000, 15.00, 1, 12, 5002, _binary ''),
	(500010017, '高雄晨宿', '高雄市前鎮區新光路21號Area 高雄', '0979777116', '高雄晨宿.jpg', 1081, '', 22.6114998000, 120.3016702000, 17.00, 5104, 10, 5002, _binary ''),
	(500010018, '高雄漫步妘端旅店', '高雄市苓雅區中華四路29號', '0973126568', '漫步妘端.jpg', 1701, '', 22.6125712000, 120.2995633000, 17.00, 5104, 5, 5002, _binary ''),
	(500010019, '迎曦醉月', '高雄市鼓山區明倫路115號', '0966558593', '迎曦醉月.jpg', 1667, '', 22.6661219000, 120.2955530000, 17.00, 5102, 2, 5002, _binary ''),
	(500010020, '悅來居旅店', '高雄市三民區建國三路40號', '072883173', '悅來居.jpg', 3040, '', 22.6379785000, 120.2978280000, 17.00, 5103, 8, 5002, _binary ''),
	(500010021, '鴨家青年旅館', '高雄市新興區六合一路158號5樓', '0963806800', '鴨家青年.jpg', 1009, '', 22.6330741000, 120.3008432000, 17.00, 5105, 3, 5003, _binary ''),
	(500010022, '秧秧微旅', '高雄市新興區中山一路14號12F', '072315020', '秧秧.jpg', 1450, '', 22.6261808000, 120.2990722000, 17.00, 5107, 3, 5003, _binary ''),
	(500010023, '國泰旅社_背包客的窩', '高雄市左營區左營大路401巷33弄10號', '075822592', '國泰旅社.jpg', 1240, '', 22.6885399000, 120.2901821000, 17.00, 1, 6, 5003, _binary ''),
	(500010024, '吃吃睡設計宅', '高雄市鼓山區華榮路49號', '0900343579', '吃吃睡.jpg', 1974, '', 22.6624483000, 120.2943211000, 17.00, 5108, 2, 5003, _binary ''),
	(500010025, '棚棚屋民宿Inn', '高雄市苓雅區苓中路28號', '0985129568', '棚棚屋.jpg', 1200, '', 22.6141804000, 120.2925361000, 17.00, 1, 5, 5003, _binary ''),
	(500010026, '旅悅青年旅館', '高雄市前鎮區三多三路211號3樓', '0975928000', '旅悅青年.jpg', 1278, '', 22.6146072000, 120.3062781000, 17.00, 1, 10, 5003, _binary ''),
	(500010027, '七桃公寓', '高雄市新興區中正三路128號', '072360677', '七桃.jpg', 1013, '', 22.6313904000, 120.3025943000, 17.00, 5105, 3, 5003, _binary ''),
	(500010028, '單人房住宿空間- 高雄站前館', '高雄市新興區八德一路392號', '072363256', '單人房.jpg', 2766, '', 22.6360921000, 120.3000440000, 17.00, 5103, 3, 5003, _binary ''),
	(500010029, '飛行家青年旅館', '高雄市苓雅區仁義街2-4號櫃台及大廳號 b1', '0906776511', '飛行家.jpg', 712, '', 22.6142840000, 120.3009660000, 17.00, 5104, 5, 5003, _binary ''),
	(500010030, '承億文旅小承輕旅', '高雄市新興區中山一路145號', '072881212', '承億文旅.jpg', 896, '', 22.6323390000, 120.2992121000, 17.00, 5105, 3, 5003, _binary ''),
	(500010031, '旗津道沙灘酒店', '高雄市旗津區旗津三路1050號3樓', '075721818', '旗津道.jpg', 2349, '', 22.6103690000, 120.2646185000, 17.00, 1, 4, 1, _binary ''),
	(500010032, '西子灣沙灘會館', '高雄市鼓山區蓮海路51號', '075250005', '西子灣.jpg', 4080, '', 22.6248657000, 120.2602705000, 17.00, 1, 2, 1, _binary ''),
	(500010033, '天子閣飯店', '高雄市鹽埕區七賢三路128號', '075328899', '天子閣.jpg', 2502, '', 22.6263420000, 120.2786531000, 17.00, 5123, 1, 1, _binary ''),
	(500010034, '塩 • 泊思行旅', '高雄市鹽埕區七賢三路58號', '075517066', '柏思.jpg', 4031, '', 22.6231571000, 120.2762501000, 17.00, 5123, 1, 1, _binary ''),
	(500010035, '高雄文賓大飯店-駁二館', '高雄市鹽埕區大勇路22號', '0986563266', '文賓.jpg', 1880, '', 22.6211316000, 120.2781004000, 17.00, 5123, 1, 1, _binary ''),
	(500010036, '翰品酒店', '高雄市鹽埕區大仁路43號', '075217388', '翰品.jpg', 6184, '', 22.6238024000, 120.2801583000, 17.00, 5123, 1, 1, _binary ''),
	(500010037, '高雄福容大飯店', '高雄市鹽埕區五福四路45號', '075511188', '福容.jpg', 3564, '福容大飯店高雄位於鹽埕區五福四路、大成街口，地理環境極佳且交通便利。緊鄰知名景點愛河旁，定位為國際觀光飯店，提供250間客房，設施包括游泳池、三溫暖、健身中心等，並提供全館WIFI無線上網服務，備極貼心；專為頂級消費者設計的尊榮樓層，提供氣派奢華的舒適環境，從制高點一覽海洋之都，凡塵喧囂瞬間落盡，是專屬的私密景點，輕啜著一杯紅酒，一天奔波幻化為心中的滿足。 周邊景點多元，潺潺清流的愛河，多元的休閒藝文活動，值得在此度過悠閒時光；氛圍優雅的和平公園，吸引雙雙儷人來此拍攝婚紗；如意橋在夜裡恍若發著光的河流，浪漫美麗。真愛碼頭以雙座風帆的特殊造型，分別對著高雄市區及旗津渡輪碼頭，來到福容可欣賞高雄摩天大樓林立的現代都市風貌，也可眺望高雄海港體驗大船入港的震撼，白天、夜晚各具不同的風貌。', 22.6228370000, 120.2832909000, 16.71, 5123, 1, 1, _binary ''),
	(500010038, '城市商旅', '高雄市鹽埕區公園二路83號', '075322777', '城市商旅 .jpg', 1728, '', 22.6215958000, 120.2823196000, 17.17, 5123, 1, 1, _binary ''),
	(500010039, '高雄愛河智選假日酒店', '高雄市鹽埕區大智路129號', '075323333', '愛河智選.jpg', 3115, '', 22.6232737000, 120.2833272000, 17.46, 5123, 1, 1, _binary ''),
	(500010040, '帕可麗酒店', '高雄市鼓山區文信路192號', '079628800', '帕可麗.jpg', 3980, '', 22.6646451000, 120.2932210000, 16.00, 5102, 2, 1, _binary ''),
	(500010041, '水京棧國際酒店', '高雄市鼓山區明華路366號', '075537001', '水京棧.jpg', 5544, '', 22.6630493000, 120.3007087000, 17.00, 5102, 2, 1, _binary ''),
	(500010042, 'Hotel dùa', '高雄市新興區林森一路165號', '072722999', 'Hotel dùa.jpg', 3404, '', 22.6306778000, 120.2684011000, 14.00, 5105, 3, 1, _binary ''),
	(500010043, '高雄洲際酒店', '高雄市前鎮區新光路33號', '073391888', '洲際.jpg', 5627, '高雄洲際酒店坐落於亞洲新灣區, 地理位置位於便捷的中華路與新光路上。酒店的豪華設施和專業與貼心的服務將替您下次的度假行程或商務之旅提供完美的體驗。 我們酒店距離小港國際機場8公里, 高雄火車站4公里, 毗鄰三多購物商圈, 高雄展覽館與著名的85大樓。 高雄洲際酒店擁有253間精緻客房及俯瞰美麗高雄港全景的豪華套房。我們靈活的2間宴會廳，將會是您婚宴會場的首選並將滿足您各種會議和宴會的需求。', 22.6113474000, 120.2854688000, 15.00, 5104, 10, 1, _binary ''),
	(500010044, '承億酒店', '高雄市前鎮區林森四路189號', '073333999', '承億酒店.jpg', 6560, '', 22.6113474000, 120.2854688000, 15.00, 5104, 10, 1, _binary ''),
	(500010045, '和逸-高雄中山館', '高雄市前鎮區中山二路260號', '079756699', '和逸.jpg', 4505, '和逸飯店．高雄中山館坐落於繁華的三多商圈，此區聚集了新光三越百貨、SOGO百貨、大遠百形成的黃金三角，是高雄的時尚重鎮，優越的地理位置匯集了高雄的主要交通幹道-三多三路、一心二路、中山二路，飯店即位於捷運三多商圈站3號出口，走進飯店可以感受到室內空間的自然光與暖色燈光，打造最合意的悠閒時光。', 22.6113474000, 120.2854688000, 15.00, 5104, 10, 1, _binary ''),
	(500010046, '寒軒國際大飯店', '高雄市苓雅區四維三路33號', '073322000', '寒軒.jpg', 3625, '寒軒國際大飯店矗立於高雄市政府對面，四維林蔭大道上，是南台灣最具規模的五星觀光飯店。42樓美觀建築設計、挑高明亮的景觀玻璃，風格獨具。完善硬體設備與無微不至的溫馨服務，滿足商務人士及渡假旅客的多重需求。 　　寒軒國際大飯店擁有311 間設計一流的典雅客房與套房，所有房間均大面採光，景觀視野極佳，能將高雄全景一覽無遺， 美食餐廳提供中外美食，另有大型宴會廳及典雅貴賓包廂，位居交通四通八達的市中心，機場、購物、娛樂、古蹟名勝近在比鄰，是您在南台灣最舒適便利的家。', 22.6191800000, 120.2928299000, 15.00, 1, 5, 1, _binary ''),
	(500010047, '英迪格酒店', '高雄市新興區中山一路4號No', '072721888', '英迪格.jpg', 4912, '', 22.6252130000, 120.2974825000, 17.00, 5107, 3, 1, _binary ''),
	(500010048, '晶英國際行館', '高雄市前鎮區中山二路199號', '079730189', '晶英.jpg', 6868, '', 22.6104726000, 120.3010136000, 17.00, 5104, 10, 1, _binary ''),
	(500010049, '輕旅店商務旅館', '高雄市苓雅區新光路26號之4號', '0909667678', '輕旅店.jpg', 800, '', 22.6120879000, 120.2989467000, 17.00, 5104, 5, 1, _binary ''),
	(500010050, '高雄富野渡假酒店', '高雄市前鎮區瑞田街99號', '078215299', '富野.jpg', 3480, '', 22.5981933000, 120.2978128000, 14.00, 5114, 10, 1, _binary ''),
	(500010051, '康橋商旅 五甲館', '高雄市鳳山區福德街143巷22號', '078122840', '康橋五甲.jpg', 1600, '', 22.5913139000, 120.3193708000, 16.17, 5113, 12, 1, _binary ''),
	(500010052, '金銀島汽車旅館', '高雄市鳳山區大明路223號', '077638933', '金銀鳳山.jpg', 1480, '', 22.6072298000, 120.3227571000, 15.00, 1, 12, 1, _binary ''),
	(500010053, '薇風精品汽車旅館', '高雄市楠梓區楠盛街137號', '073551177', '薇風精品.jpg', 1800, '', 22.7367098000, 120.3209525000, 15.33, 5120, 7, 1, _binary ''),
	(500010054, '亞泰旅館', '高雄市楠梓區建楠路139號', '073533157', '亞泰.jpg', 1600, '', 22.7268176000, 120.3242791000, 17.00, 5120, 7, 1, _binary ''),
	(500010055, '龍陽商務旅館', '高雄市楠梓區楠都東街116號', '073512786', '龍陽.jpg', 880, '', 22.7247878000, 120.3231850000, 17.00, 5120, 7, 1, _binary ''),
	(500010056, '凱莉都精品旅店', '高雄市楠梓區大學七街236號', '075918988', '凱莉都.jpg', 1680, '', 22.7281697000, 120.2863928000, 17.00, 5132, 7, 1, _binary ''),
	(500010057, '御宿旅館楠梓館', '高雄市楠梓區興西路145號', '073516699', '御宿.jpg', 1700, '', 22.7285216000, 120.3306781000, 17.00, 5132, 7, 1, _binary ''),
	(500010058, '花季度假飯店', '高雄市田寮區崗北路111號', '076362288', '花季.jpg', 5500, '', 22.8750186000, 120.3004360000, 13.00, 1, 36, 1, _binary ''),
	(500010059, '那瑪夏LU-MAH', '高雄市那瑪夏區鞍山巷74號', '0906115059', '那瑪夏.jpg', 3800, '', 23.2459991000, 120.5803871000, 12.00, 1, 35, 1, _binary ''),
	(500010060, '香堤文旅', '高雄市楠梓區興楠路355巷82弄1號', '073535799', '香堤.jpg', 1800, '', 22.7299381000, 120.3267392000, 15.83, 5120, 7, 1, _binary ''),
	(500010061, '高雄溜滑梯親子民宿', '高雄市楠梓區新昌街10巷15弄23號', '0985309531', '溜滑梯.jpg', 3500, '', 22.7090486000, 120.2904412000, 16.00, 5119, 7, 1, _binary ''),
	(500010062, '興達港民宿', '高雄市茄萣區健康路318號', '0921528211', '興達港.jpg', 1850, '', 22.8722113000, 120.1857804000, 16.00, 1, 25, 1, _binary ''),
	(500010063, '茄萣黃金海岸民宿', '高雄市茄萣區民族路178號', '0921528211', '茄萣黃金.jpg', 1750, '', 22.8753058000, 120.1917527000, 18.33, 1, 25, 1, _binary ''),
	(500010064, '印水涵觀景汽車旅館', '高雄市湖內區湖中路165號', '076998800', '印水涵.jpg', 2380, '', 22.8964082000, 120.1440918000, 13.00, 1, 24, 1, _binary ''),
	(500010065, '風起文旅', '高雄市旗山區旗南一路30號', '0981999529', '風起.jpg', 3700, '', 22.8660598000, 120.4291274000, 13.00, 1, 27, 1, _binary ''),
	(500010066, '弘州商務旅館', '高雄市林園區東林西路105巷11號', '076438889', '弘州.jpg', 1748, '', 22.5069611000, 120.3526779000, 13.00, 1, 13, 1, _binary ''),
	(500010067, '花鄉商務汽車旅館', '高雄市大寮區光明路三段397號', '077813752', '花鄉.jpg', 1778, '', 22.5923466000, 120.3665780000, 13.00, 1, 14, 1, _binary ''),
	(500010068, '香堤精品旅館', '高雄市大寮區仁愛路52號', '077026606', '香堤精品.jpg', 1984, '', 22.6188116000, 120.3483818000, 13.00, 1, 14, 1, _binary ''),
	(500010069, '歐閣精品汽車旅館', '高雄市鳳山區頂新一街122號', '077926600', '歐閣精品.jpg', 1800, '', 22.5926496000, 120.3463351000, 14.62, 1, 12, 1, _binary ''),
	(500010070, '金銀島汽車旅館 仁武店', '高雄市仁武區大豐街51號', '073723200', '金銀仁武.jpg', 1500, '', 22.6760728000, 120.3324260000, 16.50, 1, 17, 1, _binary ''),
	(500010071, '媚力泊飯店', '高雄市仁武區仁雄路451號', '073713188', '媚力泊.jpg', 2580, '', 22.6739069000, 120.3284820000, 16.00, 1, 17, 1, _binary ''),
	(500010072, '雅博泊特汽車旅館', '高雄市鳥松區忠誠路105號', '077323300', '雅博泊.jpg', 1800, '', 22.6561302000, 120.3565147000, 16.50, 1, 18, 1, _binary ''),
	(500010073, '澄清湖水漾會館', '高雄市鳥松區大埤路32之2號', '077312608', '澄清湖水漾.jpg', 2240, '', 22.6568413000, 120.3381041000, 15.00, 1, 18, 1, _binary ''),
	(500010074, '高雄圓山大飯店', '高雄市鳥松區圓山路2號', '073705911', '圓山.jpg', 3645, '高雄圓山莊園渡假飯店位於澄清湖畔。特有的宮殿式建築是集西方建築的雄偉與東方建築的古典於一體，七彩畫棟、丹朱圓柱等建築特色，東方傳統的藝術色彩，匠心獨運。 107間客房，舒適寬敞的空間，結合中西合併，古典婉約的風格，從景觀陽台，坐望燈火輝煌的夜色，澄清湖碧波蕩漾四季如畫之美景，盡收眼底，讓您身心完全放鬆的莊園渡假飯店。 飯店餐廳匯集了中、西式傳統道地的經典名菜，宮廷般的尊貴氣派，讓您在喧鬧的城市中，享受一個靜謐的餐飲環境。 飯店多項休閒設施，花園游泳池、池畔坐望林、健身中心、撞球、桌球、景觀木棧道等，讓您除了徜徉於澄清湖的湖光山色之間，又能鬆弛筋骨，享受輕鬆自在又健康的美好假期。', 22.6561284000, 120.3361300000, 15.00, 1, 18, 1, _binary ''),
	(500010075, '隱君子的撒野', '高雄市岡山區三和里菜寮路2-26號', '0933346863', '隱君子.jpg', 2800, '', 22.8111462000, 120.3119798000, 14.17, 1, 19, 1, _binary ''),
	(500010076, '香堤時尚旅館', '高雄市橋頭區鐵道北路33號', '076117166', '香堤時尚.jpg', 1802, '', 22.7619677000, 120.2508834000, 13.00, 5127, 20, 1, _binary ''),
	(500010077, '莉莉的家民宿', '高雄市橋頭區橋頭路81號', '0980188875', '莉莉的家.jpg', 1550, '', 22.7639788000, 120.2885806000, 14.17, 5127, 20, 1, _binary ''),
	(500010078, '中正湖民宿', '高雄市美濃區福美路30號', '076812736', '中正湖.jpg', 1508, '', 22.9166039000, 120.5002235000, 13.17, 1, 28, 1, _binary ''),
	(500010079, '望峰息心民宿', '高雄市美濃區雙峰街8之18號', '0936796516', '望峰.jpg', 1760, '', 22.9088846000, 120.5330985000, 15.50, 1, 28, 1, _binary ''),
	(500010080, '美濃雲山居民宿', '高雄市美濃區龍山街56-1號', '0928739959', '雲山.jpg', 2000, '', 22.9063669000, 120.4879989000, 13.17, 1, 28, 1, _binary ''),
	(500010081, '美濃森林星光小屋', '高雄市美濃區廣林里朝元159之7號 159-7', '0967073288', '森林星光.jpg', 1600, '', 22.9420531000, 120.5762158000, 15.50, 1, 28, 1, _binary ''),
	(500010082, '川雅居藝術空間民宿', '高雄市旗山區富興路23巷3號', '0919237086', '川雅居.jpg', 1680, '', 22.9287409000, 120.4668410000, 14.17, 1, 27, 1, _binary ''),
	(500010083, '日景園', '高雄市六龜區光明巷37之1號', '076891317', '日景園.jpg', 1000, '', 22.9849162000, 120.6121573000, 14.33, 1, 29, 1, _binary ''),
	(500010084, '松柏林民宿渡假山莊', '高雄市六龜區土壠路37之8號', '076891010', '松柏林.jpg', 2300, '', 23.0061956000, 120.6463249000, 15.50, 1, 29, 1, _binary ''),
	(500010085, '道時尚悠然渡假山莊', '高雄市六龜區和平路130-5號', '076791003', '道時尚.jpg', 2500, '', 23.0382462000, 120.6535559000, 15.50, 1, 29, 1, _binary ''),
	(500010086, '溫德莊園', '高雄市六龜區', '0967300048', '溫德.jpg', 3360, '', 23.0578922000, 120.6696843000, 16.67, 1, 29, 1, _binary ''),
	(500010087, '草地人溫泉會館', '高雄市六龜區新開路33之1號', '076791992', '草地人.jpg', 2166, '', 23.0579793000, 120.6725500000, 16.67, 1, 29, 1, _binary ''),
	(500010088, '芳晨溫泉渡假村', '高雄市六龜區中正路132號', '076882311', '芳晨.jpg', 2800, '', 23.1096777000, 120.6917106000, 15.50, 1, 29, 1, _binary ''),
	(500010089, '河堤國際商旅', '高雄市小港區宏平路447號', '078038881', '河堤.jpg', 1530, '', 22.5703622000, 120.3535166000, 17.50, 5106, 11, 1, _binary ''),
	(500010090, '打狗戀館', '高雄市小港區港平路167號', '078129988', '打狗.jpg', 2330, '', 22.5648339000, 120.3217265000, 15.00, 5106, 11, 1, _binary ''),
	(500010091, '香堤晶典汽車旅館', '高雄市小港區宏平路579號', '078035566', '香堤晶典.jpg', 2093, '', 22.5699708000, 120.3502813000, 17.00, 5106, 11, 1, _binary ''),
	(500010092, '旅港汽車旅館', '高雄市小港區宏平路93號', '078063880', '旅港.jpg', 1380, '', 22.5704392000, 120.3559757000, 16.00, 5106, 11, 1, _binary ''),
	(500010093, '金建商務飯店', '高雄市小港區飛機路459號', '078021655', '金建.jpg', 1800, '', 22.5701537000, 120.3425613000, 16.00, 5106, 11, 1, _binary ''),
	(500010094, '橙屋商務旅館', '高雄市小港區大業北路300號', '078012266', '橙屋.jpg', 1318, '', 22.5636772000, 120.3469079000, 18.00, 5106, 11, 1, _binary ''),
	(500010095, '皇家金宸大飯店', '高雄市鳳山區國泰路一段288號', '077405999', '皇家金宸.jpg', 2070, '', 22.6162604000, 120.3504394000, 17.00, 5128, 12, 1, _binary ''),
	(500010096, '高雄親子嗨翻旅店', '高雄市鳳山區平等路3號', '0979101888', '親子嗨.jpg', 1988, '', 22.6258085000, 120.3508770000, 18.00, 5136, 12, 5001, _binary ''),
	(500010097, '克來大飯店', '高雄市鳳山區五甲一路130號', '077469692', '克來.jpg', 1200, '', 22.6204496000, 120.3548404000, 18.00, 1, 12, 1, _binary ''),
	(500010098, '麗馨精品商旅鳳山館', '高雄市鳳山區曹公路77號', '077462128', '麗馨精品.jpg', 1480, '', 22.6294131000, 120.3553976000, 18.00, 5136, 12, 1, _binary ''),
	(500010099, '高雄春天藝術大飯店', '高雄市鳳山區五甲一路364號', '077631027', '春天藝術.jpg', 1080, '', 22.6127521000, 120.3500535000, 19.00, 5128, 12, 1, _binary ''),
	(500010100, '慕夏汽車旅館', '高雄市苓雅區身修路2號', '077171668', '慕夏.jpg', 2400, '', 22.6297096000, 120.3266340000, 18.00, 5137, 5, 1, _binary ''),
	(500010101, '捷絲旅高雄中正館', '高雄市苓雅區中正一路134號', '079723568', '捷絲旅中正.jpg', 2655, '', 22.6285062000, 120.3311754000, 19.00, 5133, 5, 1, _binary ''),
	(500010102, '高第商旅', '高雄市苓雅區建民路37號', '077119061', '高第.jpg', 1300, '', 22.6287190000, 120.3306385000, 17.50, 5133, 5, 1, _binary ''),
	(500010103, '歐遊國際連鎖精品旅館', '高雄市苓雅區建國一路73號', '077493333', '歐遊國際.jpg', 1429, '', 22.6296591000, 120.3363113000, 18.50, 5133, 5, 1, _binary ''),
	(500010104, '歌德商旅', '高雄市苓雅區建國一路57號', '077498666', '歌德.jpg', 900, '', 22.6292927000, 120.3375354000, 18.50, 5133, 5, 1, _binary ''),
	(500010105, '御宿Motel 建國館', '高雄市苓雅區建國一路155號', '077261200', '御宿建國.jpg', 1500, '', 22.6327931000, 120.3267803000, 17.50, 5137, 5, 1, _binary ''),
	(500010106, '高雄比歐緻居', '高雄市新興區中山一路14-26號', '072817900', '比歐.jpg', 7646, '', 22.6264773000, 120.3005883000, 18.17, 5107, 3, 1, _binary ''),
	(500010107, 'Uno青年旅舍', '高雄市新興區中山二路548號', '072018686', 'Uno青年.jpg', 1001, '', 22.6230238000, 120.3000031000, 18.17, 5107, 3, 1, _binary ''),
	(500010108, '世奇商旅', '高雄市左營區裕誠路450號', '075572299', '世奇商旅.jpg', 2431, '', 22.6661712000, 120.3042059000, 19.50, 5102, 6, 1, _binary ''),
	(500010109, '德立莊', '高雄市三民區博愛一路338號', '073238777', '德立莊.jpg', 1620, '', 22.6504662000, 120.3029911000, 19.50, 5109, 8, 1, _binary ''),
	(500010110, '旅人小棧', '高雄市左營區孟子路462號', '0974385458', '旅人小棧.jpg', 1150, '', 22.6763148000, 120.3067942000, 21.00, 5117, 2, 1, _binary ''),
	(500010111, '春風時尚汽車旅館', '高雄市左營區重上街117號', '073453758', '春風時尚.jpg', 1300, '', 22.6759550000, 120.3046245000, 18.67, 5117, 2, 1, _binary ''),
	(500010112, '京城大飯店', '高雄市三民區九如二路362號', '073119906', '京城.jpg', 2475, '', 22.6412960000, 120.3016196000, 18.67, 5103, 8, 1, _binary ''),
	(500010113, '西悠巢旅', '高雄市三民區安寧街454號', '073219999', '西悠.jpg', 1563, '', 22.6406793000, 120.3008822000, 18.38, 5103, 8, 1, _binary ''),
	(500010114, '頭等艙飯店', '高雄市三民區建國三路33號', '072853888', '頭等艙.jpg', 1870, '', 22.6380712000, 120.3006696000, 18.96, 5103, 8, 1, _binary ''),
	(500010115, '國星商務旅店', '高雄市三民區同愛街81號', '072853888', '國星.jpg', 1377, '', 22.6375106000, 120.3001285000, 18.96, 5103, 8, 1, _binary ''),
	(500010116, '日光高鐵精品旅館', '高雄市左營區大中二路597號', '073455536', '日光.jpg', 1800, '', 22.6847710000, 120.3052993000, 17.17, 5101, 6, 1, _binary ''),
	(500010117, '棧貳沐居', '高雄市鼓山區蓬萊路17號2F', '075317568', '棧貳.jpg', 1399, '', 22.6200488000, 120.2758482000, 18.17, 5116, 2, 1, _binary ''),
	(500010118, '荷本-Pier2', '高雄市鼓山區鼓山一路43號', '0935606043', '荷本.jpg', 927, '', 22.6230094000, 120.2754966000, 18.17, 5116, 2, 1, _binary ''),
	(500010119, 'In Style House', '高雄市新興區渤海街90號', '0967226278', 'InStyle.jpg', 1180, '', 22.6309981000, 120.3089509000, 17.00, 5125, 3, 1, _binary ''),
	(500010120, '高雄商旅', '高雄市新興區民族二路33號', '072221333', '高雄商旅.jpg', 1720, '', 22.6309981000, 120.3089509000, 17.00, 5125, 3, 1, _binary ''),
	(500010121, '統茂松柏大飯店', '高雄市苓雅區和平一路219號', '072232251', '統茂.jpg', 899, '', 22.6307359000, 120.3172391000, 18.17, 5121, 5, 1, _binary ''),
	(500010122, '麗池汽車旅館', '高雄市左營區重義路11號', '073459677', '麗池.jpg', 1100, '', 22.6876587000, 120.3081133000, 17.33, 5101, 6, 1, _binary ''),
	(500010123, '高巢民宿', '高雄市左營區站前路69號', '0973473245', '高巢.jpg', 1739, '', 22.6888532000, 120.3063506000, 16.00, 5101, 6, 1, _binary '');

-- 傾印  資料表 travel_kh.hotel_message 結構
DROP TABLE IF EXISTS `hotel_message`;
CREATE TABLE IF NOT EXISTS `hotel_message` (
  `message_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL,
  `hotel_id` int(10) unsigned NOT NULL,
  `message_head` varchar(100) DEFAULT NULL,
  `message_content` text DEFAULT NULL,
  `message_evaluate` int(11) DEFAULT NULL,
  `message_time` datetime DEFAULT NULL,
  PRIMARY KEY (`message_id`),
  KEY `hotel_id` (`hotel_id`),
  KEY `member_id` (`member_id`),
  CONSTRAINT `hotel_message_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotel_kh` (`hotel_id`),
  CONSTRAINT `hotel_message_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=560006 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.hotel_message 的資料：~5 rows (近似值)
INSERT INTO `hotel_message` (`message_id`, `member_id`, `hotel_id`, `message_head`, `message_content`, `message_evaluate`, `message_time`) VALUES
	(560001, 900001, 500010037, '好極了', '房間很大，床很舒服，工作人員熱心，地理位置很棒，去捷運站跟輕軌站都方便。\r\n', 5, '2023-06-04 19:41:09'),
	(560002, 900001, 500010037, '是一間合格有餘性價比高的旅店\r\n', '有不錯的遊泳池，而三溫暖的熱水池高達41.5 C，有點過熱，但有這個設施亦很不錯。房間很大，床亦舒適。早餐並不是很豪華，但作為一頓早餐，有多種選擇，甚至可當作午餐，有排骨，燒雞，西蘭花等。很喜歡在旅店游完早水後吃早餐的感覺，很休閒，很舒服，吃到10時後。」\r\n', 4, '2023-06-14 19:46:53'),
	(560003, 900001, 500010011, '傑出', '都很滿意', 5, '2023-06-08 15:46:53'),
	(560004, 900001, 500010011, '從服務、客房設施到早餐餐點都很棒，對得起這個價位!\r\n', '早餐非常豐富，蛋奶素也可以吃得很滿足，客房很乾淨且隔音效過良好\r\n', 5, '2023-06-07 13:16:51'),
	(560005, 900001, 500010011, '健身房及舞蹈教室也超棒的，　下次一定要早點起床去水療池玩水\r\n', '落地窗的視野好, 房間浴室也有視野很好的窗戶，超棒!\r\n', 3, '2023-06-05 19:42:12');

-- 傾印  資料表 travel_kh.hotel_mrt 結構
DROP TABLE IF EXISTS `hotel_mrt`;
CREATE TABLE IF NOT EXISTS `hotel_mrt` (
  `mrt_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mrt_name` varchar(30) NOT NULL,
  PRIMARY KEY (`mrt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5139 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.hotel_mrt 的資料：~39 rows (近似值)
INSERT INTO `hotel_mrt` (`mrt_id`, `mrt_name`) VALUES
	(1, ''),
	(5101, '左營'),
	(5102, '巨蛋'),
	(5103, '高雄車站'),
	(5104, '三多商圈'),
	(5105, '美麗島'),
	(5106, '小港'),
	(5107, '中央公園'),
	(5108, '凹子底'),
	(5109, '後驛'),
	(5110, '南岡山'),
	(5111, '世運'),
	(5112, '草衙'),
	(5113, '前鎮高中'),
	(5114, '凱旋'),
	(5115, '楠梓加工區'),
	(5116, '西子灣'),
	(5117, '生態園區'),
	(5118, '獅甲'),
	(5119, '油廠國小'),
	(5120, '都會公園'),
	(5121, '文化中心'),
	(5122, '大寮'),
	(5123, '鹽埕埔'),
	(5124, '市議會'),
	(5125, '信義國小'),
	(5126, '衛武營'),
	(5127, '橋頭火車站'),
	(5128, '鳳山西'),
	(5129, '青埔'),
	(5130, '橋頭糖廠'),
	(5131, '大東'),
	(5132, '後勁'),
	(5133, '技擊館'),
	(5134, '鳳山國中'),
	(5135, '高雄國際機場'),
	(5136, '鳳山'),
	(5137, '五塊厝'),
	(5138, '沒有');

-- 傾印  資料表 travel_kh.hotel_orderdetails 結構
DROP TABLE IF EXISTS `hotel_orderdetails`;
CREATE TABLE IF NOT EXISTS `hotel_orderdetails` (
  `ht_order_id` bigint(13) NOT NULL,
  `ht_orderdetails_id` int(11) NOT NULL,
  `hotel_id` int(10) unsigned DEFAULT NULL,
  `room_id` int(10) unsigned DEFAULT NULL,
  `hotel_order_checkin` date DEFAULT NULL,
  `hotel_order_ckeckout` date DEFAULT NULL,
  `hotel_order_price` int(11) DEFAULT NULL,
  `hotel_order_adult` int(11) DEFAULT NULL,
  `hotel_order_child` int(11) DEFAULT NULL,
  `hotel_order_room` int(11) DEFAULT NULL,
  PRIMARY KEY (`ht_order_id`,`ht_orderdetails_id`),
  KEY `hotel_id` (`hotel_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `hotel_orderdetails_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotel_kh` (`hotel_id`),
  CONSTRAINT `hotel_orderdetails_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `hotel_room` (`room_id`),
  CONSTRAINT `hotel_orderdetails_ibfk_4` FOREIGN KEY (`ht_order_id`) REFERENCES `hotel_orders` (`ht_order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.hotel_orderdetails 的資料：~5 rows (近似值)
INSERT INTO `hotel_orderdetails` (`ht_order_id`, `ht_orderdetails_id`, `hotel_id`, `room_id`, `hotel_order_checkin`, `hotel_order_ckeckout`, `hotel_order_price`, `hotel_order_adult`, `hotel_order_child`, `hotel_order_room`) VALUES
	(2023061550001, 0, 500010047, 500020006, '2023-02-15', '2023-02-16', 9137, 1, 1, 1),
	(2023061650001, 0, 500010011, 500020016, '2023-02-23', '2023-02-24', 11655, 2, 2, 1),
	(2023061650002, 0, 500010043, 500020019, '2023-03-10', '2023-03-11', 11597, 2, 0, 1),
	(2023061750001, 1, 500010037, 500020001, '2023-01-21', '2023-01-22', 7020, 2, 0, 1),
	(2023061750002, 0, 500010031, 500020028, '2023-04-04', '2023-04-05', 4770, 2, 1, 1);

-- 傾印  資料表 travel_kh.hotel_orders 結構
DROP TABLE IF EXISTS `hotel_orders`;
CREATE TABLE IF NOT EXISTS `hotel_orders` (
  `ht_order_id` bigint(13) NOT NULL,
  `member_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_id` int(10) NOT NULL,
  `receiver_name` varchar(50) DEFAULT NULL,
  `receiver_phone` varchar(30) DEFAULT NULL,
  `shipping_method` enum('寄送到家','無實體商品','超商取貨') DEFAULT '無實體商品',
  `shipping_city` enum('台北市','新北市','基隆市','新竹市','桃園市','新竹縣','宜蘭縣','台中市','苗栗縣','彰化縣','南投縣','雲林縣','嘉義市','嘉義縣','台南市','高雄市','屏東縣','澎湖縣','花蓮縣','臺東縣','金門縣','連江縣') DEFAULT NULL,
  `shipping_address` varchar(100) DEFAULT NULL,
  `shipping_fee` int(10) unsigned DEFAULT 0,
  `order_total` int(10) unsigned DEFAULT NULL,
  `grand_total` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ht_order_id`),
  KEY `payment_id` (`payment_id`),
  KEY `member_id` (`member_id`),
  KEY `staff_id` (`staff_id`),
  CONSTRAINT `hotel_orders_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`),
  CONSTRAINT `hotel_orders_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`),
  CONSTRAINT `hotel_orders_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `backend_manage` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  travel_kh.hotel_orders 的資料：~5 rows (近似值)
INSERT INTO `hotel_orders` (`ht_order_id`, `member_id`, `staff_id`, `order_date`, `payment_id`, `receiver_name`, `receiver_phone`, `shipping_method`, `shipping_city`, `shipping_address`, `shipping_fee`, `order_total`, `grand_total`) VALUES
	(2023061550001, 900001, 901, '2023-06-15 14:45:11', 1, '吳華城', '0986545687', '無實體商品', NULL, NULL, 0, 9137, 9137),
	(2023061650001, 900001, 901, '2023-06-16 14:50:03', 2, '蕭晴雅', '0911567850', '無實體商品', NULL, NULL, 0, 11655, 11655),
	(2023061650002, 900001, 901, '2023-06-16 14:50:03', 2, '陳依依', '0911787878', '無實體商品', NULL, NULL, 0, 11597, 11597),
	(2023061750001, 900001, 901, '2023-06-17 14:50:03', 3, '張武與', '0986123456', '無實體商品', NULL, NULL, 0, 7020, 7020),
	(2023061750002, 900001, 901, '2023-06-16 14:50:03', 1, '莊依璇', '0990145678', '無實體商品', NULL, NULL, 0, 4770, 4770);

-- 傾印  資料表 travel_kh.hotel_room 結構
DROP TABLE IF EXISTS `hotel_room`;
CREATE TABLE IF NOT EXISTS `hotel_room` (
  `room_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_name` varchar(50) NOT NULL,
  `room_type` varchar(50) DEFAULT NULL,
  `hotel_id` int(10) unsigned DEFAULT NULL,
  `room_describe` text DEFAULT NULL,
  `room_capacity` int(11) DEFAULT NULL,
  `room_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`room_id`),
  KEY `hotel_id` (`hotel_id`),
  CONSTRAINT `hotel_room_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotel_kh` (`hotel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=500020029 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.hotel_room 的資料：~28 rows (近似值)
INSERT INTO `hotel_room` (`room_id`, `room_name`, `room_type`, `hotel_id`, `room_describe`, `room_capacity`, `room_price`) VALUES
	(500020001, '市景高級雙床房', '2張單人床', 500010037, '含早餐－評價還不錯', 2, 4049),
	(500020002, '市景豪華雙床房', '2張雙人床', 500010037, '含早餐－評價還不錯', 4, 5345),
	(500020003, '海港景高級雙人房', '1張雙人床', 500010037, '含早餐－評價還不錯', 2, 4859),
	(500020004, '豪華家庭套房', '2張雙人床', 500010037, '含早餐－評價還不錯', 4, 8505),
	(500020005, '高級特大雙人床房(無窗)', '1張特大雙人床', 500010047, '含早餐－評價非常好', 2, 8634),
	(500020006, '市景高級特大雙人床房', '1張加大雙人床', 500010047, '含早餐－評價非常好', 2, 9137),
	(500020007, '雙人房(不指定房型)', '1張加大雙人床', 500010047, '含早餐－評價非常好', 2, 9137),
	(500020008, '市景高級雙床房', '2張單人床', 500010047, '含早餐－評價非常好', 2, 9137),
	(500020009, '公園景豪華特大雙人床房', '1張特大雙人床', 500010047, '含早餐－評價非常好', 2, 12151),
	(500020010, '公園景特大雙人床套房', '1張加大雙人床', 500010047, '含早餐－評價非常好', 3, 26288),
	(500020011, '經典客房', '2張加大雙人床', 500010011, '含早餐－評價很好', 2, 9135),
	(500020012, '豪華特大號床間', '1張特大雙人床', 500010011, '含早餐－評價很好', 2, 9450),
	(500020013, '豪華行政特大床號間-可使用行政酒廊', '1張特大雙人床', 500010011, '含早餐－評價很好', 2, 11340),
	(500020014, '尊爵套房－附 1 張特大雙人床－可使用行政貴賓廳', '1張特大雙人床', 500010011, '含早餐－評價很好', 2, 14910),
	(500020015, '單臥室行政特級特大雙人床套房－可使用行政貴賓廳', '1張特大雙人床', 500010011, '含早餐－評價很好', 2, 15708),
	(500020016, '家庭房－附 2 張雙人床', '2張加大雙人床', 500010011, '含早餐－評價很好', 4, 11655),
	(500020017, '連通雙臥室家庭套房－可使用行政貴賓廳', '1張特大雙人床 1張加大雙人床', 500010011, '含早餐－評價很好', 4, 18648),
	(500020018, '洲際豪華經典特大雙人床客房', '1 張特大雙人床', 500010043, '含早餐－評價非常好', 2, 9437),
	(500020019, '洲際豪華雅緻雙床客房', '2 張單人床', 500010043, '含早餐－評價非常好', 2, 9638),
	(500020020, '洲際豪華經典特大雙人床港灣海景客房', '1 張特大雙人床', 500010043, '含早餐－評價非常好', 2, 9940),
	(500020021, '洲際豪華雅緻雙床客房－高樓層', '2 張單人床', 500010043, '含早餐－評價非常好', 2, 9940),
	(500020022, '洲際豪華經典特大雙人床港灣海景客房－高樓層', '1 張特大雙人床', 500010043, '含早餐－評價非常好', 2, 10241),
	(500020023, '洲際豪華雅緻家庭客房', '2 張雙人床', 500010043, '含早餐－評價非常好', 3, 11597),
	(500020024, '洲際豪華雅緻家庭客房', '2 張雙人床', 500010043, '含早餐－評價非常好', 4, 12752),
	(500020025, '標準雙床房', '2 張單人床', 500010031, '含早餐－評價很好', 2, 2349),
	(500020026, '海景標準雙人房', '1 張加大雙人床', 500010031, '含早餐－評價很好', 2, 2592),
	(500020027, '海景標準雙床房', '2 張單人床', 500010031, '含早餐－評價很好', 2, 2880),
	(500020028, '經典四人房', '2 張加大雙人床', 500010031, '含早餐－評價很好', 4, 4770);

-- 傾印  資料表 travel_kh.itinerary 結構
DROP TABLE IF EXISTS `itinerary`;
CREATE TABLE IF NOT EXISTS `itinerary` (
  `itinerary_id` int(11) NOT NULL AUTO_INCREMENT,
  `itinerary_name` varchar(100) DEFAULT NULL,
  `fk_member_id` int(11) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `departure_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`itinerary_id`),
  KEY `fk_member_id` (`fk_member_id`),
  CONSTRAINT `itinerary_ibfk_1` FOREIGN KEY (`fk_member_id`) REFERENCES `member` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60000002 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.itinerary 的資料：~0 rows (近似值)
INSERT INTO `itinerary` (`itinerary_id`, `itinerary_name`, `fk_member_id`, `duration`, `departure_date`, `return_date`, `count`) VALUES
	(60000001, '高雄自由行', 900001, 1, '2023-06-17', '2023-06-17', 2);

-- 傾印  資料表 travel_kh.itinerary_detail 結構
DROP TABLE IF EXISTS `itinerary_detail`;
CREATE TABLE IF NOT EXISTS `itinerary_detail` (
  `itinerary_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `itinerary_id` int(11) NOT NULL,
  `fk_attraction_id` int(11) unsigned DEFAULT NULL,
  `fk_merchant_id` int(11) DEFAULT NULL,
  `fk_hotel_id` int(10) unsigned DEFAULT NULL,
  `itinerary_day` date NOT NULL,
  `departure_time` time NOT NULL,
  `leave_time` time DEFAULT NULL,
  `comment` text DEFAULT NULL,
  PRIMARY KEY (`itinerary_d_id`),
  KEY `itinerary_id` (`itinerary_id`),
  KEY `fk_attraction_id` (`fk_attraction_id`),
  KEY `fk_merchant_id` (`fk_merchant_id`),
  KEY `fk_hotel_id` (`fk_hotel_id`),
  CONSTRAINT `itinerary_detail_ibfk_1` FOREIGN KEY (`itinerary_id`) REFERENCES `itinerary` (`itinerary_id`),
  CONSTRAINT `itinerary_detail_ibfk_2` FOREIGN KEY (`fk_attraction_id`) REFERENCES `attraction` (`attraction_id`),
  CONSTRAINT `itinerary_detail_ibfk_3` FOREIGN KEY (`fk_merchant_id`) REFERENCES `food_merchants` (`merchant_id`),
  CONSTRAINT `itinerary_detail_ibfk_4` FOREIGN KEY (`fk_hotel_id`) REFERENCES `hotel_kh` (`hotel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.itinerary_detail 的資料：~3 rows (近似值)
INSERT INTO `itinerary_detail` (`itinerary_d_id`, `itinerary_id`, `fk_attraction_id`, `fk_merchant_id`, `fk_hotel_id`, `itinerary_day`, `departure_time`, `leave_time`, `comment`) VALUES
	(1, 60000001, 600003, NULL, NULL, '2023-06-17', '10:00:00', '16:00:00', '駁二爬爬走'),
	(2, 60000001, 600002, NULL, NULL, '2023-06-17', '17:30:00', '19:00:00', '逛夜市!'),
	(3, 60000001, NULL, NULL, 500010001, '2023-06-17', '21:00:00', '00:00:00', '回飯店睡覺');

-- 傾印  資料表 travel_kh.member 結構
DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `pwd` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=900013 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.member 的資料：~12 rows (近似值)
INSERT INTO `member` (`member_id`, `first_name`, `last_name`, `birth_date`, `phone`, `address`, `city`, `pwd`, `email`, `avatar`) VALUES
	(900001, '嘉', '佑佑', '2000-06-16', '(07)-0123456#123', '高雄', '高雄', '0000', 'yoyo@gmail.com', '嘉佑佑.jpg'),
	(900002, '張', '三', '1985-03-12', '0912345678', '台北市中山區XX街XX號', '台北市', 'mypassword1', 'zhangsan@example.com', NULL),
	(900003, '李', '四', '1990-07-21', '0923456789', '新北市XX區XX路XX號', '新北市', 'mypassword2', 'lisi@example.com', NULL),
	(900004, '王', '五', '1982-12-05', '0934567890', '台中市XX區XX路XX號', '台中市', 'mypassword3', 'wangwu@example.com', NULL),
	(900005, '陳', '六', '1995-09-17', '0945678901', '高雄市XX區XX路XX號', '高雄市', 'mypassword4', 'chenliu@example.com', NULL),
	(900006, '張', '七', '1998-02-28', '0956789012', '彰化縣XX區XX路XX號', '彰化縣', 'mypassword5', 'zhangqi@example.com', NULL),
	(900007, '林', '八', '1989-06-15', '0967890123', '嘉義市XX區XX路XX號', '嘉義市', 'mypassword6', 'linba@example.com', NULL),
	(900008, '吳', '九', '1993-11-09', '0978901234', '桃園市XX區XX路XX號', '桃園市', 'mypassword7', 'wujiu@example.com', NULL),
	(900009, '蔡', '十', '1987-04-24', '0989012345', '新竹市XX區XX路XX號', '新竹市', 'mypassword8', 'caishi@example.com', NULL),
	(900010, '黃', '十一', '1991-08-07', '0990123456', '宜蘭縣XX區XX路XX號', '宜蘭縣', 'mypassword9', 'huangshiyi@example.com', NULL),
	(900011, '劉', '十二', '1996-01-31', '0912345678', '苗栗縣XX區XX路XX號', '苗栗縣', 'mypassword10', 'liushi@example.com', NULL),
	(900012, '陳', '以賢', '2023-06-01', '0915-151-151', '高雄', '高雄', '0000', '@gmail.coom', NULL);

-- 傾印  資料表 travel_kh.new_table 結構
DROP TABLE IF EXISTS `new_table`;
CREATE TABLE IF NOT EXISTS `new_table` (
  `account_permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `permission_state` varchar(45) NOT NULL,
  PRIMARY KEY (`account_permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.new_table 的資料：~0 rows (近似值)

-- 傾印  資料表 travel_kh.payment 結構
DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `payment_name` varchar(30) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  travel_kh.payment 的資料：~3 rows (近似值)
INSERT INTO `payment` (`payment_id`, `payment_name`) VALUES
	(1, '信用卡線上付款'),
	(2, 'ATM虛擬帳號'),
	(3, '超商代碼');

-- 傾印  資料表 travel_kh.ticket 結構
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `tk_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tk_name` varchar(100) NOT NULL,
  `tk_explain` text DEFAULT NULL,
  `tk_directions` text DEFAULT NULL,
  `tk_purchase_notes` text DEFAULT NULL,
  `tk_description` text DEFAULT NULL,
  `tk_remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3000000011 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.ticket 的資料：~10 rows (近似值)
INSERT INTO `ticket` (`tk_id`, `tk_name`, `tk_explain`, `tk_directions`, `tk_purchase_notes`, `tk_description`, `tk_remark`) VALUES
	(3000000001, '【台灣南部最大動物園】高雄壽山動物園門票', '"－園區介紹－\n\n高雄市壽山動物園是南部最大的公立動物園，提供大高雄地區以及廣大的台灣中南部與東部地區民眾親子休閒、戶外教學、生態科普及觀光遊憩等多重功能與服務。近期逐步改裝呈現嶄新面貌在所有大小朋友面前，展示介面更符合動物的生態習性，大量採用玻璃圍籬，讓遊客的視野不受欄杆阻礙，能一窺動物的真實樣貌，並持續舉辦生態講座、夏令營、兒童劇場以及攝影展、夜遊動物園、票選最佳情侶等活動，園區　熱鬧非凡。 園內分六區，亞洲區、美洲區、非洲區、靈長動物區、臺灣原生動物區及新闢的「兒童牧場」，動線規劃完整，兒童牧場為國內動物園首見之牧場形式展示區，結合放牧式可愛溫馴動物，讓大小朋友們在工作人員的指導之下能親近、觸摸及餵食動物，讓遊客在大高雄都會區裡，就能體驗牧場般的閒適氛圍與情趣。\n\n－園區資訊－\n\n開放時間：\n週二至週日 09:00~17:00 (最後入園時間 16:30)\n星期一及除夕休園，如星期一遇國定假日則照常開園\n參觀票價\n全票：NT$40，年滿 18 ~ 64 歲者\n半票：NT$20，年滿 6 ~ 17 歲並持有證明文件者\n免票：免費票適用條件如下，應當場提示相關 證明文件\n一、未滿六歲之兒童。\n二、年滿六十五歲之老人。\n三、身心障礙者及必要之陪伴者一人。\n四、設籍本市鼓山區登山里、興宗里、光化里、山下里、鼓岩 里、綠川里、寶樹里、峰南里、樹德里、河邊里、壽山里 、惠安里及新民里之居民。\n五、本市低收入戶。\n六、依法設立之社會福利機構。\n七、本府或本府所屬機關主辦之活動。\n八、本市國民小學辦理師生校外教學活動。\n九、本市國民小學之學童。\n\n遊客服務\n借問小站：遊園諮詢\n服務中心：播音暨協尋服務、護理服務、代客叫車。\n                       娃娃車、輪椅租用 娃娃車限乘載 18 公斤以下幼兒、免租金、需備妥證件或押金 NT$1,000\n哺乳室：備有 3 室安全隱密哺乳空間，皆提供插座使用、尿布台、熱水供應服務、提供冰箱存放母乳，洗手台、垃圾桶。\n親水廣場\n動物園親水廣場為戶外戲水空間，全新特色戲水設施，提供親子家庭大小朋友於炎熱天氣能清涼消暑。每週四上午配合定期清洗維護保養，暫停開放。\n\n遊客注意事項\n禁止攜帶寵物(導盲犬除外)、禁止騎腳踏車、滑板車、獨輪車、直排輪\n園區全面禁菸、請勿餵食動物、嚴禁跨越欄杆、嚴禁騷擾動物、拍照請關閃光燈\n\n\n\n－園區服務－\n\n團體導覽解說服務\n歡迎滿 20 人以上團體於來園前兩星期申請，本園安排確認後通知回覆。\n導覽時間：約 1.5~2 小時\n申請方式：電話洽詢，請撥 07-5215187 分機 539 洽詢預約。\n申辦結果：請於來園前3-7天，來電確認有無解說員導覽。\n＊因故未能如期來園之團體，請於原訂參觀日前3-7天與本園聯絡改期或取消。\n \nZOO ZOO BUS遊園車\n可愛的ZOO ZOO BUS將帶領大家走訪壽山動物園。\n營業時間：首班發車時間 09:20，末班發車時間 16:20。\n每周一及除夕休園，若周一適逢國定假日則照常開放；遊園車每趟約 15 分鐘，平日遊客滿車後發車，例假日每 20 分鐘一班車。\n2 歲以下或手抱嬰兒免費，120 公分以下幼童需一位成人陪同搭乘。\n\n兒童牧場餵食體驗\n動物餵食體驗開放時間：\n每週二至週日 10:00、14:00 於現場發放牧草，數量有限發完為止。\n現場領取之牧草僅供餵食兒童牧場內波爾羊之用，並請遵守現場人員引導及公告之相關規定。\n高雄市壽山動物園是南部最大的公立動物園，提供大高雄地區以及廣大的台灣中南部與東部地區民眾親子休閒、戶外教學、生態科普及觀光遊憩等多重功能與服務。近期逐步改裝呈現嶄新面貌在所有大小朋友面前，展示介面更符合動物的生態習性，大量採用玻璃圍籬，讓遊客的視野不受欄杆阻礙，能一窺動物的真實樣貌，並持續舉辦生態講座、夏令營、兒童劇場以及攝影展、夜遊動物園、票選最佳情侶等活動，園區　熱鬧非凡。 園內分六區，亞洲區、美洲區、非洲區、靈長動物區、臺灣原生動物區及新闢的「兒童牧場」，動線規劃完整，兒童牧場為國內動物園首見之牧場形式展示區，結合放牧式可愛溫馴動物，讓大小朋友們在工作人員的指導之下能親近、觸摸及餵食動物，讓遊客在大高雄都會區裡，就能體驗牧場般的閒適氛圍與情趣。\n\n遊客服務\n借問小站：遊園諮詢\n服務中心：播音暨協尋服務、護理服務、代客叫車。\n                       娃娃車、輪椅租用 娃娃車限乘載 18 公斤以下幼兒、免租金、需備妥證件或押金 NT$1,000\n哺乳室：備有 3 室安全隱密哺乳空間，皆提供插座使用、尿布台、熱水供應服務、提供冰箱存放母乳，洗手台、垃圾桶。\n親水廣場\n動物園親水廣場為戶外戲水空間，全新特色戲水設施，提供親子家庭大小朋友於炎熱天氣能清涼消暑。每週四上午配合定期清洗維護保養，暫停開放。\n\n遊客注意事項\n禁止攜帶寵物(導盲犬除外)、禁止騎腳踏車、滑板車、獨輪車、直排輪\n園區全面禁菸、請勿餵食動物、嚴禁跨越欄杆、嚴禁騷擾動物、拍照請關閃光燈\n\n\n\n－園區服務－\n\n團體導覽解說服務\n歡迎滿 20 人以上團體於來園前兩星期申請，本園安排確認後通知回覆。\n導覽時間：約 1.5~2 小時\n申請方式：電話洽詢，請撥 07-5215187 分機 539 洽詢預約。\n申辦結果：請於來園前3-7天，來電確認有無解說員導覽。\n＊因故未能如期來園之團體，請於原訂參觀日前3-7天與本園聯絡改期或取消。\n \nZOO ZOO BUS遊園車\n可愛的ZOO ZOO BUS將帶領大家走訪壽山動物園。\n營業時間：首班發車時間 09:20，末班發車時間 16:20。\n每周一及除夕休園，若周一適逢國定假日則照常開放；遊園車每趟約 15 分鐘，平日遊客滿車後發車，例假日每 20 分鐘一班車。\n2 歲以下或手抱嬰兒免費，120 公分以下幼童需一位成人陪同搭乘。\n\n兒童牧場餵食體驗\n動物餵食體驗開放時間：\n每週二至週日 10:00、14:00 於現場發放牧草，數量有限發完為止。\n現場領取之牧草僅供餵食兒童牧場內波爾羊之用，並請遵守現場人員引導及公告之相關規定。"', '"憑證使用方式\n現場請出示 QR code\n出示電子憑證的條碼兌換 (不接受單一條碼圖樣或紙本券樣或手抄或口說序號方式兌換)\n憑證兌換期限\n需要按照預訂日期及當天開放時間內兌換，逾期失效\n使用期限\n需要按照預訂日期及當天開放時間內使用，逾期失效"', '"－遊園需知－禁止攜帶各類寵物入園。禁止攜帶兇器或危險物品入園。禁止餵食動物。請勿將塑膠袋、紙杯、飲料罐、食品包裝袋等物品投動物入展示欄舍內， 以免動物誤食， 導致生病或死亡。請勿以棍棒、石頭或鐵器等戲弄或打傷動物，或是用不正當動作、拍打欄杆或展示櫥窗、嘶喊以驚擾動物。園區全面禁止吸煙。請勿騎腳踏車、幼兒三輪車、滑板車及直排輪入園。"', '"「溫室咖啡廳」，遊客可以與動物來場浪漫約會，感受新型態的餐飲遊憩體驗 \n「空中線性長廊」貫穿整座園區，讓民眾能夠漫步在大自然中看動物 \n「親水廣場」新設雨淋、水霧裝置，讓大朋友、小朋友能一次玩個過癮"', '台灣 - 高雄'),
	(3000000002, '【高雄】義大世界入園券', '"高雄-義大遊樂世界\n\n義大遊樂世界全園區分為三大主題區，位於入口處的「大衛城」是以古希臘神殿為造型的設計，裡面擁有一座大型專業劇院「義大皇家劇院」，共1,800個以上座位，戶外有許多大型機械刺激遊樂設施。\n\n\n\n「聖托里尼山城」設計概念為複製愛琴海藍白山城聖托里尼，裡面擁有各式特色商店與異國風情的餐廳，還有一個「5D鬼船」的鬼屋。\n\n\n\n位於右側「特洛伊城堡」呈現特洛伊木馬屠城記場景打造，體驗穿越時空的神話時代。\n\n\n\n「特洛伊城堡」主題館是全台最大的室內遊樂館，主要以親子家庭客層為主，擁有50種以上的遊樂設施每季都會準備各種精彩絕倫的表演活動，例如萬聖節及聖誕節遊行，劇院表演......等。\n\n\n\n2012年7月推出全新設施「3D鬼船」，成為全台灣唯一擁有雙鬼屋的遊樂園，並於2014年7月升級為「5D鬼船」，增設恐怖頭髮林與飄散地獄氣味，驚嚇指數破百。\n\n\n\n2016年1月推出全新設施「LIVE！唐基大嘴巴」+「3D塗鴉魚」，結合即時互動的科技設施，同一遊樂設施有兩種新奇玩法。"', '現場請出示 QR code', '"－ 義大遊樂世界購買須知 －\n\n義大遊樂世界全年無休，故每日皆排定設施保養工作，因保養作業而致遊具停駛之處，敬請見諒。\n設施維護保養公告請參考 義大遊樂世界官網。\n90 公分以下兒童或未滿 3 歲兒童免費入園但需家長陪同，為安全起見園區內設施大多數限制身高 90 公分以上兒童方能搭乘；如有心臟病、孕婦、高血壓、酒醉、90 公斤以上或身體不適者，部分遊樂設施依限制規定搭乘。\n設施開放時間：於開園後 1.5 小時內陸續分項開放。設施關閉時間：設施於17:00關閉，部分設施將因營業狀況於閉園前1小時陸續關閉，如因維修保養或其他不可抗力因素必須停止運作，依現場公告為準。為維護遊客安全，本園保有調整設施營運之權利。\n本園嚴禁攜帶危險物品、酒精飲品、腳踏車、滑板車、寵物入園及大型攝影器材，如：Beta-Cam、S-Vhs、35 厘米大型攝影機、4X5 蛇腹大型攝影器材及遙控無人機(空拍機)。\n為顧及您的安全，請遵守各項設施使用規定， 園區全面禁食口香糖及檳榔。\n為了您與其他遊客的健康及響應菸害防治規定，請勿於室內空間吸菸。\n已入園之遊客於出口處由服務人員於手臂上加蓋「再入園章」即可當日再次入園。\n園區內部分設施於搭乘時會有濺濕衣物情形，請自備或於園區購買雨衣或更換衣物。\n為避免影響遊客遊玩的歡樂氣氛，園區內不提供廣播尋人之服務，請事先與您的同伴約定好見面時間、地點。\n園區內設有投幣式小型置物櫃，可供遊客放物品。本園區不負任何保管責任，不便之處敬請見諒。\n本園區提供「寵物寄放」「愛心公物租借」「手機充電」等服務項目，嬰兒推車租借 100元／次，詳情請洽遊客服務中心。\n為維護遊園品質及遊客安全當園區遊客量達滿載標準時將實施流量管制，暫停對外開放（含已持票）。\n義大摩天輪屬購買樂園門票遊客之額外加贈，義大遊樂世界保留終止贈送之權利。如逢摩天輪因故暫停或保養恕不另行補償或退票。 （本設施禁止孕婦及飲用酒精性飲料者搭乘）相關須知以現場公告為準。\n園區獲得穆斯林友善環境認證，園內提供祈禱室、朝拜毯、可蘭經、洗手間等設備，如需使用可向服務人員詢問。\n票券最後換票時間 15:30，請於最後換票時間前兌換入園。"', '全台最大室內親子主題館 不管颳風下雨都能讓親子暢快遊玩 還有全台最高摩天輪、精彩的日間遊行 讓您玩樂一整天', '台灣 - 高雄'),
	(3000000003, '高雄鈴鹿賽道樂園', '"日本鈴鹿賽車場SUZUKA CIRCUIT唯一海外授權的「鈴鹿賽道樂園」，交通非常便利，從高雄捷運草衙站2號出口出站後，就會看到草衙道購物中心，再往裡面走就到鈴鹿賽道樂園了，匯集了shopping、餐飲、運動、娛樂、親子、休閒、度假…等歡樂元素，讓你從早到晚忘卻煩憂，盡情歡樂~無論是親子同遊或是好友情侶，都能玩上一整天捨不得離開！\n\n全台唯一駕駛主題遊樂園一票玩到底！"', '"1.單張適用於鈴鹿賽道樂園，每券限1人使用。\n2.請持本券至園區售票中心人工櫃台兌換暢遊手環，憑手環可享全園遊樂設施不限搭乘次數(不含迷你鈴鹿賽道及小小騎士)。\n3.本券不分平假日皆可適用。若於除夕、農曆春節期間，須依現場規定補足差額使用。\n4.為確保安全，請遵守現場工作人員指示及搭乘須知。\n5.本券不得抵用其他消費或折現，恕無法與其他優惠及專案合併使用，未持券者依樂園現場收費標準辦理。\n6.本券優惠期限即為信託期間，逾期須向原購買票商辦理換票事宜。\n7.如有任何疑問敬請洽詢鈴鹿賽道樂園，服務專線：(07)796-7766。\n8.如票券無法使用需退換,請憑購票證明至原購票地辦理,每張收取10%手續費,匯款手續費$30另計。\n※票面金額不等於售價"', '"1. 您在本網站上完成線上訂購程序後，本網站會經由電子郵件或其他方式發送給您一封訂購通知，但是該通知只是通知您本網站已經收到您的訂單資料，不代表交易已經完成，本公司保留是否接受您的訂單的權利。\n\n2. 目前開放信用卡線上刷卡服務、可用ATM轉帳或其他方式完成付款，完成付款不代表交易已經完成，本公司確認交易內容無誤、付款完成並有存貨，本公司會為您辦理出貨。若交易內容有誤、商品無存貨或有本公司無法接受訂單之情形，本公司得主動為您辦理退款。"', '"\n日本鈴鹿賽車場SUZUKA CIRCUIT唯一海外授權\n平假日皆可使用，不限搭乘次數\n"', '高雄捷運草衙站2號出口，緊鄰草衙道購物中心 '),
	(3000000004, '高雄｜奧斯丁夢想樂園高雄草衙店門票', '"奧斯丁夢想樂園 AUSTIN LAND】減少了以往親子樂園中會運用的大量卡通圖案與繁複色彩，使用單純、流線的線條，搭配簡約、乾淨的色調，構築出清新、自然，充滿質感與藝術氣息的城堡！而您與孩子的互動和凝聚，更是成就完美構圖的靈魂，在這裡，您和小寶貝就是主角！同時為了給您和孩子更完善的服務，特別推出「Austin caf’e」，讓孩子在玩樂之餘，也能好好享受美食、補充體力，更是家長們的休憩空間！親愛的爸爸媽媽，不妨邀約也同樣肩負育兒大任的好友，一同舉家前往，讓孩子彼此相聚、玩樂，體驗社交生活，您也可以在這繁忙、急促的世界中，找到片刻的慢活與寧靜。\n孩子的快樂，不應該是家長的負擔！【奧斯丁夢想樂園 AUSTIN LAND】了解家長，也了解孩子，所以，才能打造出一座讓雙方都心滿意足的夢幻樂園！"', '現場請出示 QR code', '商品（服務）禮券銷售所收取之金額，已存入陽信商業銀行之信託專戶，專款專用。信託期間自禮券銷售日（以票券上記載之銷售日期為準）起算一年', '"地址：高雄市前鎮區中安路1-1號大道東B1\n\n電話：(07)796-6532\n\n營業時間：週一至週五 11:00~21:00 週六至週日 10:30~21:00"', '台灣 - 高雄'),
	(3000000005, '科學工藝博物館', '待查', '待查', '待查', '待查', '台灣 - 高雄'),
	(3000000006, '打狗英國領事館', '待查', '待查', '待查', '待查', '台灣 - 高雄'),
	(3000000007, '高雄永添藝術?金馬賓館當代美術館', '待查', '待查', '待查', '待查', '台灣 - 高雄'),
	(3000000008, 'SKI SCHOOL 飄雪樂園', '待查', '待查', '待查', '待查', '高雄市前鎮區復興四路17號'),
	(3000000009, '紅頂穀創穀物文創樂園', '待查', '待查', '待查', '待查', '左營區'),
	(3000000010, '建築樂園', '待查', '待查', '待查', '待查', '左營區');

-- 傾印  資料表 travel_kh.ticket_orderdetails 結構
DROP TABLE IF EXISTS `ticket_orderdetails`;
CREATE TABLE IF NOT EXISTS `ticket_orderdetails` (
  `tk_order_id` bigint(13) unsigned NOT NULL,
  `tk_orderdetails_id` int(5) NOT NULL,
  `product_id` int(5) unsigned NOT NULL,
  `product_quantity` int(10) unsigned NOT NULL,
  `product_price` int(10) unsigned NOT NULL,
  PRIMARY KEY (`tk_orderdetails_id`,`tk_order_id`),
  KEY `order_id` (`tk_order_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `ticket_orderdetails_ibfk_1` FOREIGN KEY (`tk_order_id`) REFERENCES `ticket_orders` (`tk_order_id`),
  CONSTRAINT `ticket_orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tk_product` (`tk_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  travel_kh.ticket_orderdetails 的資料：~5 rows (近似值)
INSERT INTO `ticket_orderdetails` (`tk_order_id`, `tk_orderdetails_id`, `product_id`, `product_quantity`, `product_price`) VALUES
	(2023061530001, 1, 30016, 1, 120),
	(2023061630001, 1, 30010, 1, 569),
	(2023061530001, 2, 30001, 1, 40),
	(2023061630001, 2, 30011, 2, 459),
	(2023061630001, 3, 30012, 1, 569);

-- 傾印  資料表 travel_kh.ticket_orders 結構
DROP TABLE IF EXISTS `ticket_orders`;
CREATE TABLE IF NOT EXISTS `ticket_orders` (
  `tk_order_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `payment_id` int(10) NOT NULL,
  `receiver_name` varchar(50) DEFAULT NULL,
  `receiver_phone` varchar(30) DEFAULT NULL,
  `shipping_method` enum('寄送到家','無實體商品','超商取貨') DEFAULT NULL,
  `shipping_city` enum('台北市','新北市','基隆市','新竹市','桃園市','新竹縣','宜蘭縣','台中市','苗栗縣','彰化縣','南投縣','雲林縣','嘉義市','嘉義縣','台南市','高雄市','屏東縣','澎湖縣','花蓮縣','臺東縣','金門縣','連江縣') DEFAULT NULL,
  `shipping_address` varchar(100) DEFAULT NULL,
  `shipping_fee` int(10) unsigned DEFAULT NULL,
  `order_total` int(10) unsigned DEFAULT NULL,
  `grand_total` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`tk_order_id`),
  KEY `payment_id` (`payment_id`),
  KEY `staff_id` (`staff_id`),
  KEY `member_id` (`member_id`),
  CONSTRAINT `ticket_orders_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`),
  CONSTRAINT `ticket_orders_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `backend_manage` (`staff_id`),
  CONSTRAINT `ticket_orders_ibfk_3` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2023061630003 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  travel_kh.ticket_orders 的資料：~2 rows (近似值)
INSERT INTO `ticket_orders` (`tk_order_id`, `member_id`, `staff_id`, `order_date`, `payment_id`, `receiver_name`, `receiver_phone`, `shipping_method`, `shipping_city`, `shipping_address`, `shipping_fee`, `order_total`, `grand_total`) VALUES
	(2023061530001, 900001, 901, '2023-06-15 14:15:39', 1, '王曉明', '0911234567', '寄送到家', '高雄市', '林園區港嘴一路35號', 30, 160, 190),
	(2023061630001, 900001, 901, '2023-06-16 14:19:32', 3, '劉語彤', '0945454545', '寄送到家', '彰化縣', '大村鄉大智三街14號', 30, 2056, 2086);

-- 傾印  資料表 travel_kh.tk_class 結構
DROP TABLE IF EXISTS `tk_class`;
CREATE TABLE IF NOT EXISTS `tk_class` (
  `tk_class_id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `tk_class_name` varchar(100) NOT NULL,
  PRIMARY KEY (`tk_class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=307 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.tk_class 的資料：~6 rows (近似值)
INSERT INTO `tk_class` (`tk_class_id`, `tk_class_name`) VALUES
	(301, '動物園'),
	(302, '親子遊玩'),
	(303, '樂園優惠'),
	(304, '展覽優惠'),
	(305, '電影優惠'),
	(306, '古蹟');

-- 傾印  資料表 travel_kh.tk_class_table 結構
DROP TABLE IF EXISTS `tk_class_table`;
CREATE TABLE IF NOT EXISTS `tk_class_table` (
  `tk_class_table_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `fk_tk_class_id` int(3) unsigned DEFAULT NULL,
  `fk_tk_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`tk_class_table_id`),
  KEY `fk_tk_id` (`fk_tk_id`),
  KEY `fk_tk_class_id` (`fk_tk_class_id`),
  CONSTRAINT `tk_class_table_ibfk_1` FOREIGN KEY (`fk_tk_id`) REFERENCES `ticket` (`tk_id`) ON DELETE SET NULL,
  CONSTRAINT `tk_class_table_ibfk_2` FOREIGN KEY (`fk_tk_class_id`) REFERENCES `tk_class` (`tk_class_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3020 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.tk_class_table 的資料：~19 rows (近似值)
INSERT INTO `tk_class_table` (`tk_class_table_id`, `fk_tk_class_id`, `fk_tk_id`) VALUES
	(3001, 301, 3000000001),
	(3002, 302, 3000000001),
	(3003, 302, 3000000002),
	(3004, 303, 3000000002),
	(3005, 302, 3000000003),
	(3006, 303, 3000000003),
	(3007, 302, 3000000004),
	(3008, 303, 3000000004),
	(3009, 302, 3000000005),
	(3010, 304, 3000000005),
	(3011, 304, 3000000006),
	(3012, 306, 3000000006),
	(3013, 304, 3000000007),
	(3014, 302, 3000000008),
	(3015, 302, 3000000009),
	(3016, 303, 3000000009),
	(3017, 304, 3000000009),
	(3018, 302, 3000000010),
	(3019, 303, 3000000010);

-- 傾印  資料表 travel_kh.tk_favorites 結構
DROP TABLE IF EXISTS `tk_favorites`;
CREATE TABLE IF NOT EXISTS `tk_favorites` (
  `tk_favorites_id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `fk_tk_id` int(10) unsigned DEFAULT NULL,
  `fk_member_id` int(11) NOT NULL,
  PRIMARY KEY (`tk_favorites_id`),
  KEY `fk_tk_id` (`fk_tk_id`),
  KEY `fk_member_id` (`fk_member_id`),
  CONSTRAINT `tk_favorites_ibfk_1` FOREIGN KEY (`fk_tk_id`) REFERENCES `ticket` (`tk_id`) ON DELETE SET NULL,
  CONSTRAINT `tk_favorites_ibfk_2` FOREIGN KEY (`fk_member_id`) REFERENCES `member` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=380000001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.tk_favorites 的資料：~0 rows (近似值)

-- 傾印  資料表 travel_kh.tk_image 結構
DROP TABLE IF EXISTS `tk_image`;
CREATE TABLE IF NOT EXISTS `tk_image` (
  `tk_img_id` int(7) unsigned NOT NULL AUTO_INCREMENT,
  `fk_tk_id` int(10) unsigned DEFAULT NULL,
  `tk_image_src` longblob DEFAULT NULL,
  `tk_status` int(1) DEFAULT NULL,
  PRIMARY KEY (`tk_img_id`),
  KEY `fk_tk_id` (`fk_tk_id`),
  CONSTRAINT `tk_image_ibfk_1` FOREIGN KEY (`fk_tk_id`) REFERENCES `ticket` (`tk_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3000005 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.tk_image 的資料：~4 rows (近似值)
INSERT INTO `tk_image` (`tk_img_id`, `fk_tk_id`, `tk_image_src`, `tk_status`) VALUES
	(3000001, 3000000001, NULL, NULL),
	(3000002, 3000000001, NULL, NULL),
	(3000003, 3000000001, NULL, NULL),
	(3000004, 3000000001, NULL, NULL);

-- 傾印  資料表 travel_kh.tk_product 結構
DROP TABLE IF EXISTS `tk_product`;
CREATE TABLE IF NOT EXISTS `tk_product` (
  `tk_product_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `fk_tk_id` int(10) unsigned DEFAULT NULL,
  `tk_pd_name` varchar(50) DEFAULT NULL,
  `tk_expiry_date` date DEFAULT NULL,
  `tk_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`tk_product_id`),
  KEY `fk_tk_id` (`fk_tk_id`),
  CONSTRAINT `tk_product_ibfk_1` FOREIGN KEY (`fk_tk_id`) REFERENCES `ticket` (`tk_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=30028 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  travel_kh.tk_product 的資料：~27 rows (近似值)
INSERT INTO `tk_product` (`tk_product_id`, `fk_tk_id`, `tk_pd_name`, `tk_expiry_date`, `tk_price`) VALUES
	(30001, 3000000001, '壽山動物園門票 -成人', NULL, 40),
	(30002, 3000000001, '壽山動物園門票 -兒童', NULL, 20),
	(30003, 3000000002, '義大世界入園券-全日票', '2025-12-31', 640),
	(30004, 3000000002, '義大世界入園券-午後票', '2025-12-31', 520),
	(30005, 3000000003, '高雄鈴鹿賽道樂園單人暢遊券', NULL, 550),
	(30006, 3000000003, '高雄迷你鈴鹿賽道Birel N35單人卡丁賽車券', NULL, 550),
	(30007, 3000000003, '高雄鈴鹿賽道樂園單人星光暢遊票', NULL, 340),
	(30008, 3000000004, '奧斯丁夢想樂園高雄草衙店 - 一大一小，平日不限時／假日三小時＋200 元主餐一份 ', NULL, 599),
	(30009, 3000000004, '奧斯丁夢想樂園高雄草衙店 - 一大一小平日假日兩小時＋200 元代幣 ', NULL, 569),
	(30010, 3000000004, '奧斯丁夢想樂園高雄草衙店 - 一大一小平日不限時／假日三小時 ', NULL, 459),
	(30011, 3000000004, '奧斯丁夢想樂園高雄草衙店 - 一大一小平日不限時／假日三小時＋下午茶套餐 ', NULL, 569),
	(30012, 3000000005, '高雄科工館展示廳入場券', NULL, 70),
	(30013, 3000000005, '高雄國立科學工藝博物館熱雪天堂探索樂園優惠套票（兒童130cm以下，可一位大人免費陪同，即買即用）\r', NULL, 280),
	(30014, 3000000005, '高雄科工館大銀幕電影院', NULL, 100),
	(30015, 3000000006, '打狗英國領事館｜門票｜全票', NULL, 90),
	(30016, 3000000007, '全票', NULL, 120),
	(30017, 3000000007, '半票', NULL, 80),
	(30018, 3000000008, '平日入場門票-單人票', NULL, 290),
	(30019, 3000000008, '平日入場門票-四人套票', NULL, 1050),
	(30020, 3000000008, '假日入場門票-單人票', NULL, 390),
	(30021, 3000000008, '假日入場門票-四人套票', NULL, 1500),
	(30022, 3000000009, '全票', NULL, 100),
	(30023, 3000000009, '團體票', NULL, 90),
	(30024, 3000000009, '磨穀樂DIY', NULL, 150),
	(30025, 3000000009, '雙人DIY體驗套票（含入場門票）', NULL, 310),
	(30026, 3000000010, '建築樂園親子票', '2023-09-03', 299),
	(30027, 3000000010, '建築樂園家長票', '2023-09-03', 100);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
