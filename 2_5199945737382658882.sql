-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 15 2019 г., 18:40
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `maktab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `haqida` text,
  `rasm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `haqida`, `rasm`) VALUES
(1, '\r\n                        UYChI TUMANI XALQ TA’LIMI BO`LIMIGA QARAShLI 26- SONLI\r\n«Innovatsion tajriba-sinov maktabi»\r\nXAQIDA MA’LUMOT\r\n\r\n26- o`rta ta’lim maktabi 1935 yilda 8 yillik umumiy ta’lim maktabi sifatida ish boshlagan. 1176 o`rinli.\r\n    Maktabdagi faoliyat olib borayotgan jami pedagoglar soni 96 nafar. Oliy toifalilar 11 nafar, 1- toifali 12 nafar, 2- toifali 27 nafar, mutaxassislar soni 46 nafarni tashkil etadi.  Ta’lim olayotgan o`quvchilar soni  1615 nafar shundan 825 nafarini qizlar tashkil etadi.', NULL),
(2, 'Maktab direktori: \r\nBoltiboyev Karimjon Mirzamaxmudovich \r\nO`quv ishlari bo`yicha direktor o`rinbosarlari: \r\nXamdamov Abdulqaxor Boydedayevich \r\nZiyamova Mavjuda Maxammadjanovna \r\nMa’naviy- ma’rifiy ishlar bo`yicha direktor o`rinbosarlari: \r\nIsmoilova  E’tibor Jo`raxanovna \r\nBaxramov Azimjon Muxammadkomiljanovich \r\nMaktab amaliyotchi psixologi: \r\nG`aniyeva Adiba Akbaraliyevna \r\nManzil: Namangan viloyati Uychi shaxarchasi Bog`ieram ko`chasi,57- uy Telefon  48-21-294', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `bitiruvchilar`
--

CREATE TABLE `bitiruvchilar` (
  `id` int(11) NOT NULL,
  `fish` text,
  `sinf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bitiruvchilar`
--

INSERT INTO `bitiruvchilar` (`id`, `fish`, `sinf`) VALUES
(1, 'Naimova Gulnora Abduvali qizi', '11-A');

-- --------------------------------------------------------

--
-- Структура таблицы `biznesmaktab`
--

CREATE TABLE `biznesmaktab` (
  `id` int(11) NOT NULL,
  `matn` text,
  `rasm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `biznesmaktab`
--

INSERT INTO `biznesmaktab` (`id`, `matn`, `rasm`) VALUES
(1, 'Buyuk yozuvchilardan biri shunday degan edi: «Hayotda Siz uchun eng sevimli bo’lgan kasbni tanlab va Siz bir umr ishga bormaysiz». Agar kishi o’z sevgan kasbida ishlayotgan bo’lsa u hech qachon har ertalab o’zini ishga ketayapman, deb hisoblamaydi. O’z sevgan kasbi bilan shug’ullanish kishiga zavq, xursandchilik, shijoat, rag’bat hamda ma’naviy ozuqa beradi. O’zi yoqtirgan ishni qilayotgan kishi vaqt qanchalar tez o’tib ketganligini sezmay qoladi, u hech qachon bajarayotgan ishidan charchamaydi.\r\n\r\nBugun dunyo bo’ylab qanchadan-qancha kishi zavod-fabrikalarda, idoralarda, avtomobillarda, ish maydonlarida ish vaqtining tezroq tugashini intizorlik bilan kutib, tushlik vaqtining tezroq kelishi ilinjida soatga ma’yus termulib o’tirishadi. Bu toifadagi kishilar, o’z haddi-harakatlaridan ma’lumki, o’zlari yoqtirgan mashg’ulotni o’z kasblari sifatida tanlashmagan. Ya’ni, ular o’zlariga yoqmaydigan kasb bilan shug’ullanuvchi kishilardir.\r\n\r\nBa’zilar «Kishi bajarayotgan ishidan katta daromad olsa bo’ldi-da, kasb kishiga katta pul keltirsa bo’lgani, uning qilayotgan ishi o’ziga yoqishi ikkinchi darajali», deb hisoblashadi. Ammo hech bir kishi kasbidan zavqlana olmas ekan, o’z bajarayotgan faoliyati orqali katta daromadga erisha olmaydi. Balki biror kishi shug’ullanayotgan kasb katta foyda keltiradigan ishdir, balki kimlardir shu kasb ortidan katta daromadga erishayotgandir, ammo bu kasbning egasida o’z ishiga nisbatan qiziqish va zavqlanish bo’lmasa, u hech qachon o’z kasbidan barakat topa olmaydi.\r\n\r\nShundan kelib chiqqan holda bugun haqiqiy hayotda kasbidan zavqlana olganlarning muvaffaqiyatli faoliyat yuritayotganini, o’z kasbini yomon ko’rganlarning esa kunni zerikarli bekorchilik bilan o’tkazishayotganligini ko’rishimiz mumkin. Bunday sharoitda o’z kasbini sevgan, qilayotgan ishidan zavqlana olgan oddiy poyafzal ta’mirlovchisi bugungi kunda milliardlab foyda ko’rish mumkin bo’lgan ilg’or tashkilotda yetuk mutaxassis sifatida ishlovchi, ammo o’z kasbini yomon ko’radigan, qilayotgan ishidan zavq topa olmaydigan kishidan ancha ko’proq foyda ko’rishi mumkin.\r\n\r\nIshoning, kasb – bu faqat pul topish usuli emas, balki hayotingizning katta qismini mazmunli o’tkazish vositasi sifatida ham katta ahamiyatga ega hisoblanadi.\r\n\r\nAgar Siz hozirgi yoshingizda kelajakda shug’ullanishingiz uchun kasb tanlayotgan bo’lsangiz, faqatgina bu kasbdan Sizga keladigan moddiy daromadni emas, balki undan olishingiz kerak bo’lgan ma’naviy ozuqani ham hisobga oling. Bordi-yu Siz allaqachon biror kasbga ega bo’lsangiz, ammo bu kasb Sizning sevimli kasbingiz bo’lmasa, qilayotgan ishingizdan zavqlana olmasangiz, o’z bajarayotgan ishingizda xursandchilik, ma’no topishga intiling. Bajarayotgan ishingizdan zavqlanishni o’rganing. Agar buning iloji bo’lmasa, kasbingizni imkon qadar o’zingiz zavqlanib ishlaydigan faoliyat turiga o’zgartirishga harakat qiling.\r\n\r\nUnutmang, Siz kasbingizda jon saqlashingiz emas, balki yashashingiz kerak. Shundagina qilayotgan ishingiz Sizning haqiqiy sevimli kasbingiz hisoblanadi!\r\n\r\n', 'kasb.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `boglanish`
--

CREATE TABLE `boglanish` (
  `id` int(11) NOT NULL,
  `pinterest` text,
  `facebook` text,
  `twitter` text,
  `sayt` text,
  `linkedin` text,
  `location` text,
  `tel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `boglanishform`
--

CREATE TABLE `boglanishform` (
  `id` int(11) NOT NULL,
  `ism` text,
  `email` text,
  `matn` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `boglanishform`
--

INSERT INTO `boglanishform` (`id`, `ism`, `email`, `matn`) VALUES
(1, 'llllllllllllll', 'lllllllllllllllllll', 'llllllllllllllllllllll'),
(2, 'lll', 'lllll', 'lll'),
(3, 'lll', 'lllll', 'lll'),
(4, 'lll', 'lllll', 'lll'),
(5, 'lll', 'lllll', 'lll'),
(6, 'lll', 'lllll', 'lll'),
(7, 'lll', 'lllll', 'lll'),
(8, 'lll', 'lllll', 'lll'),
(9, 'lll', 'lllll', 'lll'),
(10, 'lll', 'lllll', 'lll'),
(11, 'lll', 'lllll', 'lll'),
(12, 'lll', 'lllll', 'lll'),
(13, 'ppp', 'pppp', 'pppq'),
(14, 'ppp', 'pppp', 'pppq'),
(15, '999999999', '99999999999', '999999'),
(16, '999999999', '99999999999', '999999'),
(17, '999999999', '99999999999', '999999'),
(18, '6666', '666', '99999966666'),
(19, '6666', '666', '99999966666'),
(20, '7777', '777', '99999966666777'),
(21, 'aka', 'uka', 'kkkkk');

-- --------------------------------------------------------

--
-- Структура таблицы `darsliklar`
--

CREATE TABLE `darsliklar` (
  `id` int(11) NOT NULL,
  `nomi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `darsliklar`
--

INSERT INTO `darsliklar` (`id`, `nomi`) VALUES
(1, 'http://localhost/26-maktab.uz/web/index.php?r=site%2Fdarsliklar'),
(2, 'http://n.ziyouz.com/kutubxona/category/64-adabiyot'),
(3, 'http://n.ziyouz.com/kutubxona/category/65-biologiya'),
(4, 'http://n.ziyouz.com/kutubxona/category/66-chizmachilik'),
(5, 'http://n.ziyouz.com/kutubxona/category/67-fizika'),
(6, 'http://n.ziyouz.com/kutubxona/category/68-fransuz-tili');

-- --------------------------------------------------------

--
-- Структура таблицы `foydalisaytlar`
--

CREATE TABLE `foydalisaytlar` (
  `id` int(11) NOT NULL,
  `nomi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `iqtidorlilar`
--

CREATE TABLE `iqtidorlilar` (
  `id` int(11) NOT NULL,
  `fish` text,
  `rasm` varchar(255) DEFAULT NULL,
  `matn` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `iqtidorlilar`
--

INSERT INTO `iqtidorlilar` (`id`, `fish`, `rasm`, `matn`) VALUES
(1, 'Akbarova Nilufar Bahodir qizi', 'nilufar.jpg', 'Akbarova Nilufar maktabimiz o\'quvchilari uchun o\'rnak bo\'la oladigan aqilli va odobli qiz.Bir qancha olimpiadalarda g\'lib chiqqan'),
(2, 'Laziz Akramov Aziz o\'g\'li', 'laziz.jpg', 'Laziz Akramov iqtidorli o\'quvchilardan. Shaxmat bo\'yicha maktabimizda o\'tkazilgan turnir g\'olibi.');

-- --------------------------------------------------------

--
-- Структура таблицы `ixtirochilar`
--

CREATE TABLE `ixtirochilar` (
  `id` int(11) NOT NULL,
  `fish` text,
  `data` date DEFAULT NULL,
  `text` text,
  `rasm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ixtirochilar`
--

INSERT INTO `ixtirochilar` (`id`, `fish`, `data`, `text`, `rasm`) VALUES
(1, 'Elbek Yusupov ', '2019-04-26', 'Yangi ixtiro bo\'yicha izlanish', 'bg-img/bg-4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `korinish`
--

CREATE TABLE `korinish` (
  `id` int(11) NOT NULL,
  `rasm` text,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `maktabhaqida`
--

CREATE TABLE `maktabhaqida` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `marketing`
--

CREATE TABLE `marketing` (
  `id` int(11) NOT NULL,
  `matn` text,
  `tolovlar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `marketing`
--

INSERT INTO `marketing` (`id`, `matn`, `tolovlar`) VALUES
(1, '1-sinf', '20000'),
(2, '2-sinf', '20000');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nomi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `nomi`) VALUES
(1, 'Bosh sahifa'),
(2, 'Yangiliklar'),
(3, 'Q\'shimcha darslar'),
(4, 'Biz haqimizda'),
(5, 'Bog\'lanish');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1558932914),
('m190527_051728_createdarsliklar_table', 1559296786),
('m190527_052131_create_darsliklar_table', 1559296786),
('m190527_052156_create_rahbariyat_table', 1559296787),
('m190527_052213_create_boglanish_table', 1559296787),
('m190531_064141_create_biznesmaktab_table', 1559296787),
('m190531_064210_create_marketing_table', 1559296827),
('m190531_064221_create_rasmlar_table', 1559296827),
('m190531_064247_create_iqtidorlilar_table', 1559296827),
('m190531_064312_create_rivojlanish_table', 1559296828),
('m190531_064323_create_korinish_table', 1559296828),
('m190531_064345_create_bitiruvchilar_table', 1559296829),
('m190531_064405_create_maktabhaqida_table', 1559296829),
('m190531_064430_create_talimnidavomi_table', 1559296829),
('m190531_064522_create_yangiliklar_table', 1559299019),
('m190531_064535_create_foydalisaytlar_table', 1559299019),
('m190531_064550_create_qoshimchadarslar_table', 1559299055),
('m190531_064608_create_ixtirochilar_table', 1559299076),
('m190531_064622_create_about_table', 1559299076),
('m190531_085407_create_boglanishform_table', 1559299174),
('m190531_094355_create_sinflar_table', 1559299174);

-- --------------------------------------------------------

--
-- Структура таблицы `qoshimchadarslar`
--

CREATE TABLE `qoshimchadarslar` (
  `id` int(11) NOT NULL,
  `rasm` varchar(255) DEFAULT NULL,
  `nomi` text,
  `fish` text,
  `sana` date DEFAULT NULL,
  `matn` text,
  `tel` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `qoshimchadarslar`
--

INSERT INTO `qoshimchadarslar` (`id`, `rasm`, `nomi`, `fish`, `sana`, `matn`, `tel`) VALUES
(1, 'bg-img/pc-6.jpg', 'Mentalniy arifmetika', 'Dilnoza Abdurasulova', '2019-06-03', 'Matematika fanidan alohida qo\'shimcha darslar, mantiqiy masalalarni yechish', '996663232'),
(2, 'bg-img/pc-2.jpg', 'Horijiy tillar', 'Mamatqulov Zaylobiddin', '2019-06-02', 'Horijiy tillar ingliz tili, rus tili, fransuz tili, koreys tili', '915852999'),
(3, 'bg-img/pc-3.jpg', 'Informatika', 'Murodjon Mirzayev', '2019-06-05', 'Office dasturlar, kompyuter savodhonligi, dasturlash, qo\'shimcha qurilmalar bilan ishlash kompyuter qurilmasiga sistemaar o\'rnatish, dasturlash sohasini mukammal o\'rganish. Kompyuter grafikasini o\'rganish', '913656556'),
(4, 'bg-img/pc-4.jpg', 'Tasviriy san\'at', 'Muminov o.', '2019-05-08', 'Tasviriy san\'at, dizaynerlik, chizmachilik - garfika, rang tasvir.', '934455454'),
(5, 'bg-img/pc-5.jpg', 'Tabiiy fanlar', 'Ulug\'bek', '2019-06-07', 'Biologiya, Zoologiya, Botanika va boshqa tabiiy fanlar.', '977475458'),
(6, 'bg-img/pc-1.jpg', 'Adabiyotshunoslar', 'Umar Qurbonov', '2019-06-08', 'Biz kop kitob o\'qiymiz va o\'rganamiz', '993662232');

-- --------------------------------------------------------

--
-- Структура таблицы `rahbariyat`
--

CREATE TABLE `rahbariyat` (
  `id` int(11) NOT NULL,
  `rasm` varchar(255) DEFAULT NULL,
  `fish` text,
  `lavozimi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rahbariyat`
--

INSERT INTO `rahbariyat` (`id`, `rasm`, `fish`, `lavozimi`) VALUES
(1, 'hodimlar/t1.jpg', 'Boltiboyev Karimjon mirzamahmudovich', 'Maktab direktori'),
(2, 'hodimlar/t2.jpg', 'Ziyamova\r\nMavjuda Muhammadjonovna\r\n\r\n', 'O\'quv-tarbiya ishlari bo\'yicha\r\ndirektor o\'rinbosari'),
(3, 'hodimlar/t3.jpg', 'Hamdamov Abduqahhor Boydedayevich\r\n\r\n', 'O\'quv-tarbiya ishlari bo\'yicha\r\ndirektor o\'rinbosari'),
(4, 'hodimlar/t4.jpg', 'Ismoilova\r\nE\'tibor Jo\'raxonovna\r\n\r\n', 'Ma\'naviy-marifiy ishlar bo\'yicha\r\ndirektor o\'rinbosari');

-- --------------------------------------------------------

--
-- Структура таблицы `rahbariyat2`
--

CREATE TABLE `rahbariyat2` (
  `id` int(11) NOT NULL,
  `rasm` varchar(255) DEFAULT NULL,
  `fish` text,
  `lavozimi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rahbariyat2`
--

INSERT INTO `rahbariyat2` (`id`, `rasm`, `fish`, `lavozimi`) VALUES
(1, 'hodimlar/t1.jpg', 'Boltiboyev Karimjon mirzamahmudovich', 'Maktab direktori'),
(2, 'hodimlar/t2.jpg', 'Ziyamova\r\nMavjuda Muhammadjonovna\r\n\r\n', 'O\'quv-tarbiya ishlari bo\'yicha\r\ndirektor o\'rinbosari'),
(3, 'hodimlar/t3.jpg', 'Hamdamov Abduqahhor Boydedayevich\r\n\r\n', 'O\'quv-tarbiya ishlari bo\'yicha\r\ndirektor o\'rinbosari'),
(4, 'hodimlar/t4.jpg', 'Ismoilova\r\nE\'tibor Jo\'raxonovna\r\n\r\n', 'Ma\'naviy-marifiy ishlar bo\'yicha\r\ndirektor o\'rinbosari');

-- --------------------------------------------------------

--
-- Структура таблицы `rasmlar`
--

CREATE TABLE `rasmlar` (
  `id` int(11) NOT NULL,
  `rasm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rasmlar`
--

INSERT INTO `rasmlar` (`id`, `rasm`) VALUES
(1, 'bg-img/m1.jpg'),
(2, 'bg-img/m2.jpg'),
(3, 'bg-img/m3.jpg'),
(4, 'bg-img/m4.jpg'),
(5, 'bg-img/m5.jpg'),
(6, 'bg-img/m6.jpg'),
(7, 'bg-img/m-8.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reytingnatija`
--

CREATE TABLE `reytingnatija` (
  `id` int(11) NOT NULL,
  `sinf` varchar(255) DEFAULT NULL,
  `fish` text,
  `chorak` varchar(255) DEFAULT NULL,
  `natija` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `rivojlanish`
--

CREATE TABLE `rivojlanish` (
  `id` int(11) NOT NULL,
  `text` text,
  `rasm` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rivojlanish`
--

INSERT INTO `rivojlanish` (`id`, `text`, `rasm`) VALUES
(1, '2000-yil maktabimizning ko\'rinishi', 'bg-img/m-5.jpg'),
(2, '2019-yil maktabimiz', 'bg-img/hozir.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `sinflar`
--

CREATE TABLE `sinflar` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `rasm` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `rasm`, `content`, `text`) VALUES
(1, 'bg-img/bg-1.jpg', 'Iqtidorli yoshlarni kelajak sari yo\'naltirish', 'O‘zbekiston prezidenti Shavkat Mirziyoyev «Iqtidorli yoshlarni aniqlash va yuqori malakali kadrlar tayyorlashning uzluksiz tizimini tashkil etish chora-tadbirlari to‘g‘risida» qarorni imzoladi. Xujjat matni «O‘zA»da keltirilgan. \r\n\r\nO‘nga ko‘ra, O‘zbekiston Respublikasi Xalq ta’limi vazirligi tizimining belgilangan shtatlar soni doirasida ushbu vazirlik tuzilmasida 14 ta shtat birligidan iborat Fan olimpiadalari bo‘yicha iqtidorli o‘quvchilar bilan ishlash departamenti tashkil etiladi.\r\n\r\nQuyidagilar Departamentning asosiy vazifalari etib belgilandi:\r\n\r\n-iqtidorli o‘quvchi yoshlarni aniqlash, ular faoliyatini ilmiy va uslubiy jihatdan ta’minlab borish, sohada ilg‘or tajribalarni ommalashtirish va ular asosida ta’lim muassasalari uchun tavsiya va qo‘llanmalar ishlab chiqish;\r\n\r\n-umumiy o‘rta ta’lim maktablari, akademik litsey va kasb-hunar kollejlari o‘quvchilari o‘rtasida mahalliy va xalqaro, shu jumladan, nodavlat fan olimpiadalarini tashkil etish, ularning xalqaro olimpiadalardagi ishtirokini ta’minlash;\r\n\r\n-yuqori malakali mutaxassislarni jalb qilgan holda olimpiadalar uchun doimiy yangi nazorat materiallarini ishlab chiqish;\r\n\r\n-xalqaro olimpiadalar ishtirokchilarini yuqori malakali mutaxassislar, shu jumladan, olimlar, professor-o‘qituvchilar, xorijlik mutaxassislarni jalb qilgan holda tayyorlash, ingliz tili va rus tili fanlaridan muloqot qilish ko‘nikmalarini shakllantirish maqsadida maxsus kurslar tashkil etish;\r\n\r\n-olimpiadalarda yuqori natijalarni qayd etgan iqtidorli o‘quvchilarning kelgusidagi faoliyatini monitoring qilib borish va qo‘llab-quvvatlash choralarini ko‘rish.\r\n\r\n2019-2020 o‘quv yilidan boshlab asosiy olimpiadalarning respublika bosqichida 1-3 o‘rinlarni egallagan ishtirokchilarga ixtisoslik fani bo‘yicha davlat oliy ta’lim muassasalarigakirish imtihonlarida maksimal ball olish huquqini beruvchi va uch yil muddat davomida amal qiluvchi sertifikat taqdim qilinadi;\r\n\r\nO‘zbekiston Respublikasi Oliy va o‘rta maxsus ta’lim vazirligi tomonidan Fanlar akademiyasi, boshqa manfaatdor vazirlik va idoralar bilan birgalikda oliy ta’lim muassasasiga qabul qilingan olimpiada g‘oliblariga ustoz-shogird tizimi asosida tegishli sohada yuqori natijalarga erishgan malakali mutaxassislar biriktiriladi.\r\n\r\nXalqaro olimpiadalar g‘oliblari va ularning o‘qituvchilari eng kam oylik ish haqining quyidagi miqdorlarida bir martalik pul mukofotlari bilan taqdirlanadi:\r\n\r\n1-o‘rin (oltin medal) uchun – 500, o‘qituvchisiga –450 baravari;\r\n\r\n2-o‘rin (kumush medal) uchun – 300, o‘qituvchisiga –250 baravari;\r\n\r\n3-o‘rin (bronza medal) uchun – 200, o‘qituvchisiga –150 baravari;\r\n\r\nb) asosiy olimpiadalar respublika bosqichi g‘oliblarining o‘qituvchilari eng kam oylik ish haqining quyidagi miqdorlarida bir martalik pul mukofotlari bilan taqdirlanadi:\r\n\r\n1-o‘rin uchun – 50 baravari;\r\n\r\n2-o‘rin uchun – 35 baravari;\r\n\r\n3-o‘rin uchun – 30 baravari;\r\n\r\nv)xalqaro olimpiadalar g‘oliblarini tayyorlagan o‘qituvchilar va ta’lim muassasasi direktorlariga navbatdagi o‘quv yili uchun direktor jamg‘armasidan oltin, kumush va bronza medallari bo‘yicha tegishincha qo‘shimcha 200, 175 va 150 foizlik ustama to‘lanadi;\r\n\r\ng) ta’lim muassasalarida o‘qituvchi bo‘lib faoliyat yuritayotgan:\r\n\r\nxalqaro olimpiadalar g‘oliblari lavozim maoshiga har oy 150 foiz;\r\n\r\nasosiy olimpiadalar respublika bosqichi g‘oliblari lavozim maoshiga har oy 100 foizlik ustama haqi to‘lanadi;\r\n\r\nd) oliy ta’lim muassasasini tamomlagan olimpiada g‘oliblari O‘zbekiston Respublikasi Vazirlar Mahkamasi huzuridagi Mutaxassislarni xorijda tayyorlash va vatandoshlar bilan muloqot qilish bo‘yicha «El-yurt umidi» jamg‘armasi tomonidan shakllantiriladigan istiqbolli mutaxassislar zaxirasiga kiritiladi.\r\n\r\n6. Departament O‘zbekiston Respublikasi Vazirlar Mahkamasi huzuridagi Davlat test markazi bilan birgalikda 2019-2020 o‘quv yilidan boshlab umumiy o‘rta ta’lim maktablarining 4-11 sinf, akademik litsey va kasb-hunar kollejlari o‘quvchilari uchunhar chorakda onlayn tarzda olimpiadalar tashkil qilish orqali iqtidorli o‘quvchilar zaxirasini shakllantirsin hamda zaxiraga kiritilgan yoshlar uchun Xalq ta’limi vazirligi veb-sayti orqali har oyda chuqurlashtirilgan nazorat materiallari, shu jumladan, test, yozma ishlar uchun masalalar yetkazib borilishini ta’minlanadi.\r\n\r\nO‘zbekiston Respublikasi Xalq ta’limi vazirligi sohadagi islohotlarga ko‘maklashish jamg‘armasi mablag‘lari hisobidan 2019-yil 1-avgustga qadar barcha bosqichdagi olimpiadalar bo‘yicha ma’lumotlar, shu jumladan, olimpiadalar uchun tanlangan nazorat materiallari, iqtidorli o‘quvchilar zaxirasi, olimpiada ishtirokchilari, g‘oliblari, ularga biriktirilgan o‘qituvchilar hisobini yurituvchi axborot tizimini ishga tushiriladi.\r\n\r\n'),
(2, 'bg-img/bg-2.jpg', 'Innovatsion maktabimizga marhamat', 'UYChI TUMANI XALQ TA’LIMI BO`LIMIGA QARAShLI 26- SONLI\r\n«Innovatsion tajriba-sinov maktabi»\r\nXAQIDA MA’LUMOT\r\n\r\n26- o`rta ta’lim maktabi 1935 yilda 8 yillik umumiy ta’lim maktabi sifatida ish boshlagan. 1176 o`rinli.\r\n	Maktabdagi faoliyat olib borayotgan jami pedagoglar soni 96 nafar. Oliy toifalilar 11 nafar, 1- toifali 12 nafar, 2- toifali 27 nafar, mutaxassislar soni 46 nafarni tashkil etadi.  Ta’lim olayotgan o`quvchilar soni  1615 nafar shundan 825 nafarini qizlar tashkil etadi. \r\nMaktab direktori: \r\nBoltiboyev Karimjon Mirzamaxmudovich \r\nO`quv ishlari bo`yicha direktor o`rinbosarlari: \r\nXamdamov Abdulqaxor Boydedayevich \r\nZiyamova Mavjuda Maxammadjanovna \r\nMa’naviy- ma’rifiy ishlar bo`yicha direktor o`rinbosarlari: \r\nIsmoilova  E’tibor Jo`raxanovna \r\nBaxramov Azimjon Muxammadkomiljanovich \r\nMaktab amaliyotchi psixologi: \r\nG`aniyeva Adiba Akbaraliyevna \r\nManzil: Namangan viloyati Uychi shaxarchasi Bog`ieram ko`chasi,57- uy Telefon  48-21-294\r\n\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `talimnidavomi`
--

CREATE TABLE `talimnidavomi` (
  `id` int(11) NOT NULL,
  `oliynomi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yangiliklar`
--

CREATE TABLE `yangiliklar` (
  `id` int(11) NOT NULL,
  `rasm` varchar(255) DEFAULT NULL,
  `title` text,
  `content` text,
  `fish` text,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yangiliklar`
--

INSERT INTO `yangiliklar` (`id`, `rasm`, `title`, `content`, `fish`, `data`) VALUES
(1, 'blog-img/1.jpg', 'O\'quvchilar o\'rtasida kitobxonlikni targ\'ib qilish', 'O\'quvchilar o\'rtasida kitobxonlikni targ\'ib qilish uchun maktab hududida yirik maydonga ega bo\'lgan kutubxona qurilishi rejalashtirilmoqda', 'Abdullayev A.', '2019-06-02'),
(2, 'blog-img/2.jpg', 'Innovatsion o\'qitish tizimlari', 'Hozirgi kunda dars jarayonlarini innovatsion texnologiyalar asosida olib borish koplab samaralarni bermoqda. Yangi pedagogik texnologiyalar asosida dars jarayonlarini olib borish. Zamonaviy texnologiyalar asosida olib borish', 'Qodir Mirzayev', '2019-06-03'),
(3, 'blog-img/3.jpg', 'Aqliy faoliyatni rivojlantirish', 'Boshlang\'ich va yuqori sinf o\'quvchilari uchun qo\'shimcha darslar. Har bir o\'quvchining o\'ziga hos qobilyatlari bo\'ladi ushbu qobilyatni o\'qituvchilar anglagan holda ularni rivojlantirishga yordam berishi zarur.', 'Nazira Qurbonova', '2019-05-05');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bitiruvchilar`
--
ALTER TABLE `bitiruvchilar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `biznesmaktab`
--
ALTER TABLE `biznesmaktab`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `boglanish`
--
ALTER TABLE `boglanish`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `boglanishform`
--
ALTER TABLE `boglanishform`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `darsliklar`
--
ALTER TABLE `darsliklar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `foydalisaytlar`
--
ALTER TABLE `foydalisaytlar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `iqtidorlilar`
--
ALTER TABLE `iqtidorlilar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ixtirochilar`
--
ALTER TABLE `ixtirochilar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `korinish`
--
ALTER TABLE `korinish`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maktabhaqida`
--
ALTER TABLE `maktabhaqida`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `qoshimchadarslar`
--
ALTER TABLE `qoshimchadarslar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rahbariyat`
--
ALTER TABLE `rahbariyat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rahbariyat2`
--
ALTER TABLE `rahbariyat2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rasmlar`
--
ALTER TABLE `rasmlar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reytingnatija`
--
ALTER TABLE `reytingnatija`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rivojlanish`
--
ALTER TABLE `rivojlanish`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sinflar`
--
ALTER TABLE `sinflar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `talimnidavomi`
--
ALTER TABLE `talimnidavomi`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `yangiliklar`
--
ALTER TABLE `yangiliklar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `bitiruvchilar`
--
ALTER TABLE `bitiruvchilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `biznesmaktab`
--
ALTER TABLE `biznesmaktab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `boglanish`
--
ALTER TABLE `boglanish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `boglanishform`
--
ALTER TABLE `boglanishform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `darsliklar`
--
ALTER TABLE `darsliklar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `foydalisaytlar`
--
ALTER TABLE `foydalisaytlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `iqtidorlilar`
--
ALTER TABLE `iqtidorlilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `ixtirochilar`
--
ALTER TABLE `ixtirochilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `korinish`
--
ALTER TABLE `korinish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `maktabhaqida`
--
ALTER TABLE `maktabhaqida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `qoshimchadarslar`
--
ALTER TABLE `qoshimchadarslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `rahbariyat`
--
ALTER TABLE `rahbariyat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `rahbariyat2`
--
ALTER TABLE `rahbariyat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `rasmlar`
--
ALTER TABLE `rasmlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `reytingnatija`
--
ALTER TABLE `reytingnatija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `rivojlanish`
--
ALTER TABLE `rivojlanish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `sinflar`
--
ALTER TABLE `sinflar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `talimnidavomi`
--
ALTER TABLE `talimnidavomi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yangiliklar`
--
ALTER TABLE `yangiliklar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
