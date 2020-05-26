<?php

namespace App\Http\Controllers;

use App\Site_commerce;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;
use Spatie\DbDumper\Databases\MySql;

class UsersController extends Controller
{
    public function index() {
        $user = Auth::user();
        $nbr_commerce = Site_commerce::where('user_id','=',$user->id)->count();
        return view('dashboard.index',compact('nbr_commerce'));
    }

    /*****add site web*****/

    public function add_web() {
        $user = Auth::user();

        $site_ecommerce = Site_commerce::where('user_id','=',$user->id)->cursor();

        return view('dashboard.add-web',compact('site_ecommerce'));
    }

    /*****edit profil*****/

    public function profil() {

        $user = Auth::user();

        return view('dashboard.profil',compact('user')) ;

    }

    /*****update profil*****/


    public function update(Request $request) {
        $user = Auth::user();
        if($user->update(array_filter($request->all()))){
            Session::flash('edit_user','La modification est faite avec succès');
        }
        return redirect()->route('profil');

    }

    /***** insert domaine name *****/

    public function insert_domaine(Request $request) {




        $user = Auth::user();
       // $sites_ecommerce = $user->site_commerce;
        $sites_ecommerce = Site_commerce::where('name_site','=',$request->domaine)->count();

        if($sites_ecommerce >0 || $request->username == '' || $request->password == '') {

           return 'exist';
        }else {
          $dbname='bb';
          DB::statement("CREATE DATABASE bb");
          DB::statement("CREATE TABLE bb.cities (
            `id` int(11) NOT NULL,
            `city` varchar(255) NOT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
          DB::statement("INSERT INTO bb.cities (`id`, `city`) VALUES
          (14, 'Al Hoceima'),
          (15, 'Aoussered'),
          (16, 'Assilah'),
          (17, 'Azrou'),
          (19, 'Benslimane'),
          (21, 'Berrechid'),
          (22, 'Boujdour'),
          (23, 'Bouskoura'),
          (24, 'Bouznika'),
          (71, 'Chafchaouen'),
          (72, 'Dakhla'),
          (85, 'Errachidia'),
          (99, 'Essmara'),
          (101, 'Guelmim'),
          (102, 'Ifrane'),
          (103, 'Kabila'),
          (106, 'Khmissat'),
          (108, 'Ksar El Kebir'),
          (110, 'Larache'),
          (141, 'Martil'),
          (143, 'Melilia'),
          (144, 'Midelt'),
          (147, 'Oualidia'),
          (148, 'Ouarzazate'),
          (149, 'Ouazzane'),
          (195, 'Saidia'),
          (197, 'Sebta'),
          (198, 'Sefrou'),
          (199, 'Settat'),
          (200, 'Sidi Ifni'),
          (201, 'Sidi Kacem'),
          (202, 'Sidi Rahal'),
          (203, 'Tamensourte'),
          (204, 'Tamesna'),
          (230, 'Tantan'),
          (231, 'Tarfaya'),
          (235, 'Tifelt'),
          (236, 'Tinghir'),
          (237, 'Tiznit'),
          (239, 'Afourar'),
          (240, 'Aghbala'),
          (241, 'Aghbalou'),
          (242, 'Agdz'),
          (243, 'Agourai'),
          (244, 'Aguelmous'),
          (245, 'Ahfir'),
          (246, 'Ain Attig'),
          (247, 'Ain Leuh'),
          (248, 'Ain Bni Mathar'),
          (249, 'Ain Cheggag'),
          (250, 'Ain Dorij'),
          (251, 'Ain El Aouda'),
          (252, 'Ain Erreggada'),
          (253, 'Ain Harrouda'),
          (254, 'Ain Jemaa'),
          (255, 'Ain Karma'),
          (256, 'Ain Taoujdate'),
          (257, 'Ait Iaaza'),
          (258, 'Ait Baha'),
          (259, 'Ait Boubidmane'),
          (260, 'Ait Daoud'),
          (261, 'Ait Ishaq'),
          (262, 'Ait Melloul'),
          (263, 'Ait Ourir'),
          (264, 'Akka'),
          (265, 'Aklim'),
          (266, 'Aknoul'),
          (267, 'Ajdir'),
          (268, 'Al Aaroui'),
          (269, 'Alnif'),
          (270, 'Amalou Ighriben'),
          (271, 'Amizmiz'),
          (272, 'Aoufous'),
          (273, 'Aoulouz'),
          (274, 'Aourir'),
          (275, 'Arbaoua'),
          (276, 'Arfoud'),
          (277, 'Assa'),
          (278, 'Assahrij'),
          (279, 'Azemmour'),
          (280, 'Azilal'),
          (282, 'Bab Berred'),
          (283, 'Bab Taza'),
          (284, 'Bejaad'),
          (285, 'Ben Ahmed'),
          (286, 'Ben Guerir'),
          (287, 'Ben Taieb'),
          (288, 'Ben Yakhlef'),
          (289, 'Bhalil'),
          (290, 'Biougra'),
          (291, 'Bni Ansar'),
          (292, 'Bni Bouayach'),
          (293, 'Bni Chiker'),
          (294, 'Bni Drar'),
          (295, 'Bni Hadifa'),
          (296, 'Bni Tadjite'),
          (297, 'Bouanane'),
          (298, 'Bouarfa'),
          (299, 'Boudnib'),
          (300, 'Bouguedra'),
          (301, 'Bouhdila'),
          (302, 'Bouizakarne'),
          (303, 'Boujniba'),
          (304, 'Boulanouare'),
          (305, 'Boulemane'),
          (306, 'Boumalne Dadès'),
          (307, 'Boumia'),
          (308, 'Bradia'),
          (309, 'Brikcha'),
          (310, 'Bzou'),
          (311, 'Chichaoua'),
          (312, 'Dar Bni Karrich'),
          (313, 'Dar Chaoui'),
          (314, 'Dar El Kebdani'),
          (315, 'Dar Gueddari'),
          (316, 'Dar Oulad Zidouh'),
          (317, 'Dcheira El Jihadia'),
          (318, 'Debdou'),
          (319, 'Demnate'),
          (320, 'Deroua'),
          (321, 'Drargua'),
          (322, 'Driouch'),
          (323, 'Echemmaia'),
          (324, 'El Aioun Sidi Mellouk'),
          (325, 'El Borouj'),
          (326, 'El Gara'),
          (327, 'El Guerdane'),
          (328, 'El Hajeb'),
          (329, 'El Hanchane'),
          (330, 'El Kbab'),
          (331, 'El Kelaa des Mgouna'),
          (332, 'El Kelaa des Sraghna'),
          (333, 'El Ksiba'),
          (334, 'El Mansouria'),
          (335, 'El Marsa'),
          (336, 'El Menzel'),
          (337, 'El Ouatia'),
          (338, 'Erfoud'),
          (339, 'Errich'),
          (340, 'Essemara'),
          (341, 'Fam El Hisn'),
          (342, 'Farkhana'),
          (343, 'Figuig'),
          (344, 'Fnideq'),
          (345, 'Foum Jamaa'),
          (346, 'Foum Zguid'),
          (347, 'Fquih Ben Salah'),
          (348, 'Ghafsai'),
          (349, 'Ghmate'),
          (350, 'Gourrama'),
          (351, 'Goulmima'),
          (352, 'Guercif'),
          (353, 'Gueznaia'),
          (354, 'Guigou'),
          (355, 'Guisser'),
          (356, 'Had Bouhssoussen'),
          (357, 'Had Kourt'),
          (358, 'Had Oued Ifrane'),
          (359, 'Haj Kaddour'),
          (360, 'Harhoura'),
          (361, 'Hattane'),
          (362, 'Houara'),
          (363, 'Ighoud'),
          (364, 'Ihddaden'),
          (365, 'Imintanoute'),
          (366, 'Imouzzer Kandar'),
          (367, 'Imouzzer Marmoucha'),
          (368, 'Imzouren'),
          (370, 'Irherm'),
          (371, 'Issaguen'),
          (372, 'Itzer'),
          (373, 'Jaadar'),
          (374, 'Jamaat Shaim'),
          (375, 'Jebha'),
          (376, 'Jerada'),
          (377, 'Jorf'),
          (378, 'Jorf El Melha'),
          (379, 'Kalaat MGouna'),
          (380, 'Karia'),
          (381, 'Karia Ba Mohamed'),
          (382, 'Kariat Arekmane'),
          (383, 'Kasba Tadla'),
          (384, 'Kassita'),
          (385, 'Kattara'),
          (386, 'Kehf Nsour'),
          (387, 'Kerouna'),
          (388, 'Kerrouchen'),
          (389, 'Khemis Sahel'),
          (390, 'Khenichet'),
          (391, 'Laaounate'),
          (392, 'Laakarta'),
          (393, 'Laattaouia'),
          (394, 'Lagouira'),
          (395, 'Lakhsas'),
          (396, 'Lahraouyine'),
          (397, 'Lalla Mimouna'),
          (398, 'Lalla Takarkoust'),
          (399, 'Lbir Jdid'),
          (400, 'Loualidia'),
          (401, 'Loulad'),
          (402, 'Lqliaa'),
          (403, 'Maaziz'),
          (404, 'Madagh'),
          (405, 'Massa'),
          (406, 'Matmata'),
          (407, 'MDiq'),
          (408, 'Mediouna'),
          (409, 'Mechra Bel Ksiri'),
          (410, 'Mehdya'),
          (411, 'MHaya'),
          (412, 'Midar'),
          (413, 'Missour'),
          (414, 'Moqrisset'),
          (415, 'Moulay Abdallah'),
          (416, 'Moulay Ali Cherif'),
          (417, 'Moulay Bouazza'),
          (418, 'Moulay Bousselham'),
          (419, 'Moulay Brahim'),
          (420, 'Moulay Driss Zerhoun'),
          (421, 'MRirt'),
          (422, 'Naïma'),
          (423, 'Nouaceur'),
          (424, 'Ouaouizeght'),
          (425, 'Oued Amlil'),
          (426, 'Oued Heïmer'),
          (427, 'Oued Laou'),
          (428, 'Oued Zem'),
          (429, 'Ouislane'),
          (430, 'Oulad Abbou'),
          (431, 'Oulad Amrane'),
          (432, 'Oulad Ayad'),
          (433, 'Oulad Berhil'),
          (434, 'Oulad Frej'),
          (435, 'Oulad Ghadbane'),
          (436, 'Oulad HRiz Sahel'),
          (437, 'Oulad MBarek'),
          (438, 'Oulad MRah'),
          (439, 'Oulad Said'),
          (440, 'Oulad Tayeb'),
          (441, 'Oulad Teima'),
          (442, 'Oulad Yaich'),
          (443, 'Oulad Zbair'),
          (444, 'Oulmes'),
          (445, 'Ounagha'),
          (446, 'Outat El Haj'),
          (447, 'Ras El Ain'),
          (448, 'Ras El Ma'),
          (449, 'Ribate El Kheïr'),
          (450, 'Rissani'),
          (451, 'Sabaa Aiyoun'),
          (452, 'Sebt El Maarif'),
          (453, 'Sebt Gzoula'),
          (454, 'Sebt Jahjouh'),
          (455, 'Selouane'),
          (456, 'Sid LMokhtar'),
          (457, 'Sid Zouin'),
          (458, 'Sidi Abdallah Ghiat'),
          (459, 'Sidi Addi'),
          (460, 'Sidi Ahmed'),
          (461, 'Sidi Ali Ban Hamdouche'),
          (462, 'Sidi Allal El Bahraoui'),
          (463, 'Sidi Allal Tazi'),
          (464, 'Sidi Bennour'),
          (465, 'Sidi Bou Othmane'),
          (466, 'Sidi Boubker'),
          (467, 'Sidi Bouknadel'),
          (468, 'Sidi Bouzid'),
          (469, 'Sidi Jaber'),
          (470, 'Sidi Lyamani'),
          (471, 'Sidi Rahhal Chatai'),
          (472, 'Sidi Slimane'),
          (473, 'Sidi Slimane Echcharraa'),
          (474, 'Sidi Smail'),
          (475, 'Sidi Taibi'),
          (476, 'Sidi Yahya El Gharb'),
          (477, 'Skhirate'),
          (478, 'Skhour Rehamna'),
          (479, 'Skoura'),
          (480, 'Smimou'),
          (481, 'Soualem'),
          (482, 'Souk El Arbaa'),
          (483, 'Souk Sebt Oulad Nemma'),
          (484, 'Tabounte'),
          (485, 'Tafetachte'),
          (486, 'Tafraout'),
          (487, 'Tafrisset'),
          (488, 'Taghjijt'),
          (489, 'Tahannaout'),
          (490, 'Tahla'),
          (491, 'Taïnaste'),
          (492, 'Talmest'),
          (493, 'Taliouine'),
          (494, 'Talsint'),
          (495, 'Tamallalt'),
          (496, 'Tamanar'),
          (497, 'Tamassint'),
          (498, 'Tameslouht'),
          (499, 'Taounate'),
          (500, 'Targuist'),
          (501, 'Taourirt'),
          (502, 'Taroudannt'),
          (503, 'Tata'),
          (504, 'Taznakht'),
          (505, 'Temsia'),
          (506, 'Tendrara'),
          (507, 'Thar Es Souk'),
          (508, 'Tidass'),
          (509, 'Tighassaline'),
          (510, 'Tighza'),
          (511, 'Timahdite'),
          (512, 'Tinejdad'),
          (513, 'Tissa'),
          (514, 'Tit Mellil'),
          (515, 'Tizi Ouasli'),
          (516, 'Tiztoutine'),
          (517, 'Touima'),
          (518, 'Touissit'),
          (519, 'Toulal'),
          (520, 'Tounfite'),
          (521, 'Youssoufia'),
          (522, 'Zag'),
          (523, 'Zagora'),
          (524, 'Zaida'),
          (525, 'Zaio'),
          (526, 'Zaouiat Bougrine'),
          (527, 'Zaouiat Cheikh'),
          (528, 'Zeghanghane'),
          (529, 'Zemamra'),
          (530, 'Zirara'),
          (531, 'Zoumi'),
          (532, 'Zrarda'),
          (4695, 'Agadir'),
          (4932, 'Beni mellal'),
          (4980, 'Berkane'),
          (5334, 'Casablanca'),
          (5786, 'El jadida'),
          (6031, 'Fes'),
          (6131, 'Inezgane'),
          (6203, 'Kenitra'),
          (6255, 'Khemisset'),
          (6326, 'Khenifra'),
          (6867, 'Khouribga'),
          (7224, 'Marrakech'),
          (7311, 'Meknes'),
          (7524, 'Mohammedia'),
          (7550, 'Nador'),
          (7781, 'Oujda'),
          (7902, 'Rabat'),
          (8009, 'Safi'),
          (8208, 'Sale'),
          (8411, 'Taza'),
          (8461, 'Temara'),
          (8676, 'Tanger'),
          (8689, 'Tetouan'),
          (8690, 'Laayoune'),
          (8691, 'Essaouira');
          ");
          DB::statement("CREATE TABLE ".$dbname.".categories (
              `id` int(11) NOT NULL,
              `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `keyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `thumbnail` int(11) NOT NULL,
              `trash` int(11) NOT NULL
           ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
           DB::statement("
            INSERT INTO ".$dbname.".categories (`id`, `title`, `slug`, `description`, `keyword`, `thumbnail`, `trash`) VALUES
            (1, 'إلكترونيك', 'إلكترونيك', '', '', 0, 0),
            (2, 'مطبخ', 'مطبخ', '', '', 0, 0),
            (3, 'أكسيسوارات', 'أكسيسوارات', '', '', 0, 0),
            (4, 'أدوات منزلية', 'أدوات-منزلية', '', '', 0, 0);");
            DB::statement("CREATE TABLE ".$dbname.".changeaddress (
              `id` int(11) NOT NULL,
              `command1` int(11) NOT NULL,
              `command2` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".clients (
              `id` int(11) NOT NULL,
              `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `email` varchar(255) NOT NULL,
              `password` varchar(255) NOT NULL,
              `phone` varchar(255) NOT NULL,
              `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `ip` varchar(255) NOT NULL,
              `datesignup` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".colors (
              `id` int(11) NOT NULL,
              `color` varchar(255) NOT NULL
            ) ENGINE=MyISAM DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".commands (
              `id` int(11) NOT NULL,
              `client` int(11) NOT NULL,
              `price` decimal(10,0) NOT NULL,
              `points` int(11) NOT NULL,
              `datepurchase` varchar(255) NOT NULL,
              `state` varchar(255) NOT NULL,
              `note` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".commandsdetails (
              `id` int(11) NOT NULL,
              `product` int(11) NOT NULL,
              `qty` int(11) NOT NULL,
              `details` varchar(255) NOT NULL,
              `command` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("CREATE TABLE ".$dbname.".comments (
              `id` int(11) NOT NULL,
              `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `stars` int(11) NOT NULL,
              `thumbnail` int(11) NOT NULL,
              `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `product` int(11) NOT NULL,
              `dateadd` varchar(255) NOT NULL,
              `trash` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("CREATE TABLE ".$dbname.".coupons (
              `id` int(11) NOT NULL,
              `product` int(11) NOT NULL,
              `code` varchar(255) NOT NULL,
              `type` varchar(255) NOT NULL,
              `discount` int(11) NOT NULL,
              `limit` int(11) NOT NULL,
              `trash` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("CREATE TABLE ".$dbname.".expenses (
              `id` int(11) NOT NULL,
              `partner` varchar(255) NOT NULL,
              `type` varchar(255) NOT NULL,
              `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `price` decimal(10,0) NOT NULL,
              `state` varchar(255) NOT NULL,
              `dateadd` varchar(255) NOT NULL,
              `trash` int(11) NOT NULL
            ) ENGINE=MyISAM DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".historylog (
              `id` int(11) NOT NULL,
              `description` varchar(255) NOT NULL,
              `datelog` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("CREATE TABLE ".$dbname.".homepage (
              `id` int(11) NOT NULL,
              `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `category` double NOT NULL,
              `nbposts` int(11) NOT NULL,
              `ord` int(11) NOT NULL,
              `trash` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("CREATE TABLE ".$dbname.".inventory (
              `id` int(11) NOT NULL,
              `product` int(11) NOT NULL,
              `details` varchar(255) NOT NULL,
              `qty` int(11) NOT NULL,
              `trash` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("CREATE TABLE ".$dbname.".medias (
              `id` int(11) NOT NULL,
              `thumbnail` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".messages (
              `id` int(11) NOT NULL,
              `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `email` varchar(255) NOT NULL,
              `phone` varchar(255) NOT NULL,
              `command` int(11) NOT NULL,
              `reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `datesend` varchar(255) NOT NULL,
              `read` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".newsletter (
              `id` int(11) NOT NULL,
              `email` varchar(255) NOT NULL,
              `datesubscribe` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".options (
              `id` int(11) NOT NULL,
              `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `frenchname` varchar(255) NOT NULL,
              `email` varchar(255) NOT NULL,
              `phone1` varchar(255) NOT NULL,
              `phone2` varchar(255) NOT NULL,
              `whatsapp` varchar(255) NOT NULL,
              `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `facebook` varchar(255) NOT NULL,
              `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `keywords` varchar(255) NOT NULL,
              `thumbnail` varchar(255) NOT NULL,
              `color1` varchar(255) NOT NULL,
              `color2` varchar(255) NOT NULL,
              `color3` varchar(255) NOT NULL,
              `color4` varchar(255) NOT NULL,
              `color5` varchar(255) NOT NULL,
              `pixel` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("CREATE TABLE ".$dbname.".pages (
              `id` int(11) NOT NULL,
              `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `trash` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".players (
              `id` int(11) NOT NULL,
              `player` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".products (
              `id` int(11) NOT NULL,
              `ref` varchar(255) NOT NULL,
              `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `pictures` varchar(255) NOT NULL,
              `category` int(11) NOT NULL,
              `oprice` decimal(10,0) NOT NULL,
              `price` int(11) NOT NULL,
              `disaccount` int(11) NOT NULL,
              `counter` varchar(255) NOT NULL,
              `qty` int(11) NOT NULL,
              `sizes` varchar(255) NOT NULL,
              `colors` varchar(255) NOT NULL,
              `others` varchar(255) NOT NULL,
              `dateadd` varchar(255) NOT NULL,
              `viewed` int(11) NOT NULL,
              `liked` int(11) NOT NULL,
              `carted` int(11) NOT NULL,
              `sold` int(11) NOT NULL,
              `freeshipping` int(11) NOT NULL,
              `showinhome` int(11) NOT NULL,
              `trash` int(11) NOT NULL,
              `upsell` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `crosssell` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("CREATE TABLE ".$dbname.".promotions (
              `id` int(11) NOT NULL,
              `product` int(11) NOT NULL,
              `price` double NOT NULL,
              `qty` int(11) NOT NULL,
              `trash` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("CREATE TABLE ".$dbname.".searchterms (
              `id` int(11) NOT NULL,
              `keyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
              `datesearch` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("CREATE TABLE ".$dbname.".shippingfees (
              `id` int(11) NOT NULL,
              `city` varchar(255) NOT NULL,
              `fees` double NOT NULL,
              `returnfees` double NOT NULL,
              `phone` varchar(255) NOT NULL,
              `trash` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("CREATE TABLE ".$dbname.".slides (
              `id` int(11) NOT NULL,
              `link` varchar(255) NOT NULL,
              `thumbnail` varchar(255) NOT NULL,
              `trash` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("
                CREATE TABLE ".$dbname.".sms (
                  `id` int(11) NOT NULL,
                  `message` text NOT NULL,
                  `action` varchar(255) NOT NULL,
                  `trash` int(11) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;              
              
            ");
            DB::statement("
              CREATE TABLE ".$dbname.".statistics (
                  `id` int(11) NOT NULL,
                  `period` varchar(255) NOT NULL,
                  `visits` int(11) NOT NULL,
                  `sales` int(11) NOT NULL,
                  `carts` int(11) NOT NULL,
                  `idpage` int(11) NOT NULL,
                  `category` varchar(255) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
               ");
            DB::statement("CREATE TABLE ".$dbname.".tracking (
              `id` int(11) NOT NULL,
              `idtrack` varchar(255) NOT NULL,
              `command` int(11) NOT NULL,
              `state` varchar(255) NOT NULL,
              `notice` varchar(255) NOT NULL,
              `dateshipping` varchar(255) NOT NULL,
              `dateendstate` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".trackingstates (
              `id` int(11) NOT NULL,
              `state` varchar(255) NOT NULL,
              `color` varchar(255) NOT NULL,
              `trash` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
            DB::statement("CREATE TABLE ".$dbname.".users (
                  `id` int(11) NOT NULL,
                  `username` varchar(255) NOT NULL,
                  `password` varchar(255) NOT NULL,
                  `fullname` varchar(255) NOT NULL,
                  `email` varchar(255) NOT NULL,
                  `phone` varchar(255) NOT NULL,
                  `rolestext` varchar(255) NOT NULL,
                  `trash` int(11) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            ");
            DB::statement("
                ALTER TABLE ".$dbname.".categories
                ADD PRIMARY KEY (`id`);
            ");
            DB::statement("
               ALTER TABLE ".$dbname.".changeaddress
               ADD PRIMARY KEY (`id`);
            ");
            DB::statement("ALTER TABLE ".$dbname.".cities
            ADD PRIMARY KEY (`id`);");
            DB::statement("ALTER TABLE ".$dbname.".clients
            ADD PRIMARY KEY (`id`);");
            DB::statement("ALTER TABLE ".$dbname.".colors
              ADD PRIMARY KEY (`id`);
            ");
            DB::statement("ALTER TABLE ".$dbname.".commands
              ADD PRIMARY KEY (`id`);
            ");
            DB::statement("ALTER TABLE ".$dbname.".commandsdetails
            ADD PRIMARY KEY (`id`);");
            DB::statement("ALTER TABLE ".$dbname.".comments
            ADD PRIMARY KEY (`id`);");
            DB::statement("ALTER TABLE ".$dbname.".coupons
            ADD PRIMARY KEY (`id`);");
            DB::statement("ALTER TABLE ".$dbname.".expenses
              ADD PRIMARY KEY (`id`);
            ");
            DB::statement("ALTER TABLE ".$dbname.".historylog
              ADD PRIMARY KEY (`id`);
            ");
            DB::statement("ALTER TABLE ".$dbname.".homepage
              ADD PRIMARY KEY (`id`);
            ");
            DB::statement("ALTER TABLE ".$dbname.".inventory
              ADD PRIMARY KEY (`id`);
            ");
            DB::statement("ALTER TABLE ".$dbname.".medias
              ADD PRIMARY KEY (`id`);       
            ");
            DB::statement("ALTER TABLE ".$dbname.".messages
              ADD PRIMARY KEY (`id`);");
            DB::statement("ALTER TABLE ".$dbname.".newsletter
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".options
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".pages
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".players
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".products
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".promotions
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".searchterms
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".shippingfees
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".slides
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".sms
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".statistics
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".tracking
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".trackingstates
                  ADD PRIMARY KEY (`id`)");




            DB::statement("ALTER TABLE ".$dbname.".users
                  ADD PRIMARY KEY (`id`)");
            DB::statement("ALTER TABLE ".$dbname.".categories
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5");




            DB::statement("ALTER TABLE ".$dbname.".changeaddress
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT");




            DB::statement("ALTER TABLE ".$dbname.".cities
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8692");




            DB::statement("ALTER TABLE ".$dbname.".clients
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1210");




            DB::statement("ALTER TABLE ".$dbname.".colors
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27");




            DB::statement("ALTER TABLE ".$dbname.".commands
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1202");




            DB::statement("ALTER TABLE ".$dbname.".commandsdetails
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1266");




            DB::statement("ALTER TABLE ".$dbname.".comments
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5");




            DB::statement("ALTER TABLE ".$dbname.".coupons
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT");




            DB::statement("ALTER TABLE ".$dbname.".expenses
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT");




            DB::statement("ALTER TABLE ".$dbname.".historylog
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT");




            DB::statement("ALTER TABLE ".$dbname.".homepage
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3");




            DB::statement("ALTER TABLE ".$dbname.".inventory
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5");




            DB::statement("ALTER TABLE ".$dbname.".medias
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81");




            DB::statement("ALTER TABLE ".$dbname.".messages
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT");




            DB::statement("ALTER TABLE ".$dbname.".newsletter
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT");




            DB::statement("ALTER TABLE ".$dbname.".options
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2");




            DB::statement("ALTER TABLE ".$dbname.".pages
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2");




            DB::statement("ALTER TABLE ".$dbname.".players
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT");




            DB::statement("ALTER TABLE ".$dbname.".products
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29");




            DB::statement("ALTER TABLE ".$dbname.".promotions
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT");




            DB::statement("ALTER TABLE ".$dbname.".searchterms
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT");




            DB::statement("ALTER TABLE ".$dbname.".shippingfees
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49");




            DB::statement("ALTER TABLE ".$dbname.".slides
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4");




            DB::statement("ALTER TABLE ".$dbname.".sms
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT");




            DB::statement("ALTER TABLE ".$dbname.".statistics
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331");




            DB::statement("ALTER TABLE ".$dbname.".tracking
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6");




            DB::statement("ALTER TABLE ".$dbname.".trackingstates
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8");

            DB::statement("ALTER TABLE ".$dbname.".users
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4");

        }
        return $sites_ecommerce ;

    }

}
