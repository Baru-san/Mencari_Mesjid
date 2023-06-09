<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = [
            [
                'name' => 'User 1',
                'email' => 'test1@example.com',
                'password' => bcrypt('123456789'),
                'role' => '1'
            ],
            [
                'name' => 'User 2',
                'email' => 'test2@example.com',
                'password' => bcrypt('123456789'),
                'role' => '1'
            ],
            [
                'name' => 'User 3',
                'email' => 'test3@example.com',
                'password' => bcrypt('123456789'),
                'role' => '1'
            ],
            [
                'name' => 'User 4',
                'email' => 'test4@example.com',
                'password' => bcrypt('123456789'),
                'role' => '1'
            ],
            [
                'name' => 'User 5',
                'email' => 'test5@example.com',
                'password' => bcrypt('123456789'),
                'role' => '1'
            ],
            [
                'name' => 'User 6',
                'email' => 'test6@example.com',
                'password' => bcrypt('123456789'),
                'role' => '1'
            ],
        ];

        $data_masjids = [
            [
                'name' => "Masjid Oman Al-Makmur",
                'provinsi' => 'Aceh',
                'kabupaten' => '0119',
                'alamat' => "Jl. Teuku Moh. Daud Beureueh, Bandar Baru, Kec. Kuta Alam, Kota Banda Aceh, Aceh",
                'Mosque_image_url' => 'images/masjid/masjid_oman.jpg',
                'negara' => 'indonesia',
                'History' => ' Masjid Al-Makmur adalah sebuah masjid bersejarah yang berada di Kota Banda Aceh, Provinsi Aceh, Indonesia. Masjid ini dibangun pada tahun 1979. Pembangunannya dikerjakan secara swadaya oleh masyarakat dengan pelan-pelan; dan peletakan batu pertama masjid ini dilakukan oleh Prof. Ahmad Madjid Ibrahim.

                Pada awalnya, masjid ini diberi nama Masjid Baitul Makmur oleh Abdullah Ujong Rimba, yang saat itu adalah Imam besar masjid tersebut. Ia juga menjabat sebagai Ketua Majelis Ulama Indonesia pada masa itu. Namun, pada tahun 2004 ketika gempa dan tsunami melanda Aceh menyebabkan masjid tersebut rusak parah dan harus diperbaiki.
                
                Kemudian perbaikan masjid ini pun dibiayai oleh Pemerintah Oman melalui Sultan Qaboos. Pembangunan masjid akhirnya dimulai pada tahun 2006 dan selesai tahun 2008. Masjid ini sekarang menjadi salah satu bangunan masjid termegah di Banda Aceh dengan corak arsitektur Timur Tengah.',
                'user_id' => 1,
                'PenanggungJawab1' => 'Dr. H. M. Jamil Ibrahim, S.H., M.H., M.M.',
                'PenanggungJawab2' => 'Ir. H. Rizal Aswandi',
                'PenanggungJawab3' => 'Dr. Drs. H. Jufri Ghalib, S.H., M.H.',
            ],
            [
                'name' => "Masjid Istiqlal",
                'provinsi' => 'DKI Jakarta',
                'kabupaten' => '1301',
                'alamat' => "Jl. Taman Wijaya Kusuma Daerah Khusus Ibukota Jakarta, Kota Jakarta Pusat, DKI Jakarta",
                'Mosque_image_url' => 'images/masjid/masjid_istiqlal.png',
                'negara' => 'indonesia',
                'History' => ' Masid Istiqlal merupakan masjid terbesar di Indonesia hingga saat ini. Masjid ini memiliki luas bangunan hingga 24.20 meter persegi dan berdiri diatas tanah seluas 98.247 meter persegi. Masjid ini dikenal sebagai salah satu ikon ibu kota Jakarta, yang lokasinya berseberangan dengan Gereja Katedral dan Gereja Imanuel. Dalam sejarah Islam di Indonesia, Masjid Istiqlal menjadi sebuah bangunan yang memiliki berbagai nilai penting, seperti nilai ilmu pengetahuan, pendidikan, dan keagamaan. Masjid ini menjadi masjid terbesar di Asia Tenggara dan masjid terbesar keenam di dunia dalam hal kapasitas jamaah. Masjid ini dibangun untuk memperingati kemerdekaan Indonesia, masjid nasional Indonesia ini diberi nama "Istiqlal", kata bahasa Arab untuk "kemerdekaan". Mengutip laman Istiqlal.or.id, Masjid Istiqlal dibangun pada 1951 yang digagas oleh presiden pertama Indonesia, Soekarno. Ide awal pembangunan Masjid Istiqlal sebenarnya sudah muncul sejak 1944 dalam sebuah pertempuan sejumlah ulama dan pimpinan organisasi serta para tokoh Islam yang berada di Pegangsaan Timur, Jakarta.

                Arsitektur Masjid Istiqlal dirancang oleh Friedrich Silaban. Pencanangan tiang pertama Masjid Istiqlal dilakukan oleh Presiden Soekarno pada 24 Agustus 1961
                Sejak direncakan pada 1950 hingga 1965, pembangunan Masjid Istiqlal tidak mengalami banyak kemajuan akibat adanya gejolak politik dan ekonomi. Persoalan yang menghambat pembangunan Masjid Istiqlal mulai dari kurangnya dana karena krisis ekonomi pada 1960-an sampai meletusnya peristiwa G30S pada 1965. Setelah kondisi sudah lebih kondusif, pada 1966, Menteri Agama KH Muhammad Dahlan mempelopori kembali pembangunan masjid ini. Tujuh belas tahun setelahnya, Masjid Istiqlal selesai dibangun.
                
                Masjid Istiqlal diresmikan pada 22 Februari 1978 oleh Presiden Soeharto. Peresmian masjid ditandai dengan prasasti yang dipasang di area tangga pintu As-Salam. Diketahui, biaya pembangunan Masjid Istiqlal mencapai Rp 7 miliar (diperoleh terutama dari APBN) dan US$ 12 juta.',
                'user_id' => 2,
                'PenanggungJawab1' => 'Nasaruddin Umar',
                'PenanggungJawab2' => 'Bukhari Sail At-Tahiri',
                'PenanggungJawab3' => 'Farid F. Saenong',
            ],
            [
                'name' => "Masjid Nabawi",
                'provinsi' => 'Al Madinah',
                'kabupaten' => 'Al Haram',
                'alamat' => "Al Haram, Al Madinah Al Munawwarah 42311, Saudi Arabia",
                'Mosque_image_url' => 'images/masjid/masjidNabawi.png',
                'negara' => 'Saudi Arabia',
                'History' => ' Menurut sejarah Masjid Nabawi, tempat ibadah satu ini merupakan masjid kedua yang didirikan langsung oleh Rasulullah SAW setelah Masjid Quba. Di mana, Rasulullah SAW langsung mendirikan Masjid Nabawi setibanya di Kota Madinah. Lokasi pembangunan masjid ini merupakan titik dimana unta yang ditunggangi nabi berhenti.
                Awalnya, masjid ini berukuran sekitar 50 m × 50 m, dengan tinggi atap sekitar 3,5 m.[9] Muhammad turut membangunnya dengan tangannya sendiri, bersama-sama dengan para sahabat dan kaum muslimin. Tembok di keempat sisi masjid ini terbuat dari batu bata dan tanah, sedangkan atapnya dari daun kurma dengan tiang-tiang penopangnya dari batang kurma. Sebagian atapnya dibiarkan terbuka begitu saja. Selama sembilan tahun pertama, masjid ini tanpa penerangan di malam hari. Hanya di waktu Isya, diadakan sedikit penerangan dengan membakar jerami.',
                'user_id' => 3,
                'PenanggungJawab1' => 'Abdur Rahman Al Huthaify',
                'PenanggungJawab2' => 'Salaah Al Budair',
                'PenanggungJawab3' => 'Abdulbari Awadh Al-Thubaity',
            ],
            [
                'name' => "Masjid Baitul Musyahadah",
                'provinsi' => 'Aceh',
                'kabupaten' => '0119',
                'alamat' => "Jl. Teuku Umar, Geuceu Kayee Jato, Kec. Banda Raya, Kota Banda Aceh",
                'Mosque_image_url' => 'images/masjid/masjid_Musyahadah.png',
                'negara' => 'Indonesia',
                'History' => "Pada awalnya, proses pembangunan masjid tersebut didirikan pada tahun 1989 dan memiliki nama masjid Al-Ikhlas. Pembangunannya berasal dari swadaya masyarakat Aceh. Nama masjid tersebut kemudian dirubah menjadi nama Masjid Baitul Musyahadah di tahun 1993 dan perancangan arsitektur masjid tersebut dilakukan oleh Ali Hasjmy. Beliau merupakan seorang cendikiawan yang sangat terkenal di Aceh.\n"
        . "Beliau merancang masjid tersebut sangat menarik dimana terdapat simbol rukun islam yang berasal dari bentuk denah masjid dengan segi lima. Selain itu, arsitekturnya yang menarik dengan kubah yang berbentuk kopiah serta terdapat hiasan yang sesuai dengan ornamen seperti kopiah Aceh. Kubah kecil tersebut juga ditempatkan di atas mimbar masjid. Bangunan masjid Baitul Musyahadah terkesan cukup megah ditambah dengan dinding catnya yang berwarna putih. Dibagian depan masjid juga terdapat anak tangga bagi para jamaah dan pengunjung untuk memasuki masjid Baitul Musyahadah Banda Aceh.\n"
        . "Hal yang unik dan menjadi daya tarik dari masjid ini yaitu terletak pada bagian kubahnya. Dimana kubah tersebut sangat mirip dengan Kupiah Meukuetop atau kopiah tradisional dari Aceh. Kopiah tersebut sering digunakan oleh pahlawan Nasional Teuku Umar pada saat memimpin perjuangan rakyat Aceh ketika melawan penjajahan Belanda. Maka tak heran masjid Baitul Musyahadah lebih dikenal oleh masyarakat sekitar dengan nama Masjid Teuku Umar. Dengan bentuk kubahnya yang seperti itu, maka masjid tersebut berbeda dengan beberapa masjid lainnya dimana sebuah kubah masjid biasanya hanya berbentuk bundar atau kubah seperti umumnya.",
                'user_id' => 4,

                'PenanggungJawab1' => 'Ustad Thamlica Haan, Lc.',
                'PenanggungJawab2' => 'Ustad Samsul Bahri M Ag.',
                'PenanggungJawab3' => 'Ustad Zumhuri Al Hafiz',
            ],
            [
                'name' => "Masjid Baiturrahman",
                'provinsi' => 'Aceh',
                'kabupaten' => '0119',
                'alamat' => "Jl. Moh. Jam No.1, Kp. Baru, Kec. Baiturrahman, Kota Banda Aceh, Aceh",
                'Mosque_image_url' => 'images/masjid/masjid_baiturahman.png',
                'negara' => 'Indonesia',
                'History' => "Awalnya masjid yang asli dibangun pada tahun 1612 di masa pemerintahan Sultan Iskandar Muda. Ada juga yang mengatakan, bahwa masjid yang asli dibangun lebih awal pada tahun 1292 oleh Sultan Alaidin Mahmudsyah. Pada saat itu status masjid ini sebagai masjid kerajaan yang menampilkan atap jerami berlapis-lapis yang merupakan fitur khas arsitektur Aceh. Kemudian ketika Kolonial Hindia Belanda menyerang Kesultanan Aceh pada tanggal 10 April 1873, masyarakat Aceh menggunakan bangunan masjid yang asli sebagai benteng pertempuran, dan menyerang pasukan Royal Belanda dari dalam masjid. Pasukan Royal Belanda pun membalas dengan menembakkan suar ke atap jerami masjid, yang menyebabkan masjid terbakar. Ibadah Salat dan lainnya saat itu direlokasi ke Masjid Baiturrahim Ulee Lheue. Jenderal Van Swieten pun menjanjikan pemimpin lokal bahwa dia akan membangun kembali masjid dan menciptakan tempat yang hangat untuk permintaan maaf. Lalu pada tanggal 9 Oktober 1879, Kerajaan Belanda membangun kembali masjid ini sebagai pemberian dan untuk mengurangi kemarahan rakyat Aceh.\n" 
                ."Konstruksi dimulai pada tahun 1879, ketika peletakan batu pertama diletakkan oleh Tengku Qadhi Malikul Adil, yang kemudian menjadi Imam pertama masjid, dan diselesaikan pada tanggal 27 Desember 1881 ketika masa pemerintahan Sultan terakhir Aceh, Muhammad Daud Syah. Banyak orang Aceh yang awalnya menolak untuk beribadah di Masjid Baiturrahman yang baru ini karena dibangun oleh orang Belanda, yang awalnya merupakan musuh mereka. Namun sekarang masjid ini telah menjadi kebanggaan masyarakat Banda Aceh. Pada awalnya, masjid ini hanya memiliki satu kubah dan satu minaret. Kemudian kubah-kubah dan minaret, baru ditambahkan pada tahun 1935, 1958, dan 1982. Hingga saat ini, Masjid Baiturrahman memiliki 7 kubah dan 8 minaret, termasuk yang tertinggi di Banda Aceh. Masjid ini sempat selamat dari peristiwa gempa bumi dan tsunami pada tanggal 26 Desember 2004 yang hanya mendapatkan sedikit kerusakan seperti beberapa dinding yang retak. Salah satu minaret 35 meter juga mengalami sedikit keretakan dan menjadi sedikit miring akibat gempa bumi tersebut. Di saat kejadian bencana alam tersebut, masjid ini digunakan sebagai tempat penampungan sementara untuk orang-orang yang terlantar dan baru dibuka kembali untuk ibadah Salat setelah 2 minggu kemudian.",
                'user_id' => 5,

                'PenanggungJawab1' => 'Drs. H. Sukardi, M.M.',
                'PenanggungJawab2' => 'Rohmadi Untoro S.',
                'PenanggungJawab3' => 'H. Muhajir',
                
            ],
            [
                'name' => "Masjid Keuchik Leumik",
                'provinsi' => 'Aceh',
                'kabupaten' => '0119',
                'alamat' => "Lamseupeung, Lueng Bata, Kota Banda Aceh",
                'Mosque_image_url' => 'images/masjid/masjid_keuchik.png',
                'negara' => 'Indonesia',
                'History' => "Masjid Keuchik Leumik dibangun mulai 19 Juli 2016, dan diresmikan 28 Januari 2019. Sejak diresmikan, masjid dengan luas 34 x 22 meter ini menjadi ikon baru di Banda Aceh. Masjid Keuchik Leumik dibangun oleh Haji Harun Keuchik Leumik. Nama Masjid Keuchik Leumik, diambil dari nama ayah dari wartawan senior, kolektor benda bersejarah, pengusaha logam mulia dan budayawan Aceh ternama itu. Niat membangun masjid seindah mungkin itu jauh tertanam di relung hatinya. Pengusaha dan kolektor benda bersejarah itu meniatkan masjid itu untuk seluruh masyarakat. Masjid dibangun seindah mungkin agar masyarakat nyaman beribadah.\n"
                ."Setelah mendapatkan persetujuan dari keluarga, pada 19 Juli 2016 maka dilaksanakan peletakan batu pertama pembangunan Masjid Haji Keuchik Leumiek, pada waktu itu dilakukan oleh Wali Kota Banda Aceh Illiza Sa’duddin Djamal, Imam Masjid Raya Baiturrahman Banda Aceh Prof Dr H Azman Ismail, perangkat desa Lamseupeung dan keluarga Haji Harun. Pada tanggal 28 Januari 2019, Masjid Haji Keuchik Leumiek diresmikan oleh Plt Gubernur Aceh Nova Iriansyah. Pengerjaan yang tergolong cepat, dengan para pekerja dari Aceh sampai didatangkan dari Sumatera Utara dan Pulau Jawa, memakan durasi 2,4 tahun dan desain masjid murni dari hasil diskusi H Harun dengan putera beliau M Kamaruzzaman.\n",
                'user_id' => 6,
                'PenanggungJawab1' => 'H. Muhammad Kamaruzzaman HKL, SE',
                'PenanggungJawab2' => 'H. Darwin Hasibuan',
                'PenanggungJawab3' => 'H. Takdir Feriza',
            ],
        ];
        $kegiatan_masjids = [
            [
                'masjid_id' => 1,
                'nama_kegiatan' => 'bazar kuliner dan umkm',
                'jenis_kegiatan' => 'maulid',
                'tanggal_kegiatan' => '2023-04-11',
                'waktu' => '10:00'
            ],
            [
                'masjid_id' => 2,
                'nama_kegiatan' => 'Pengajian Ihya ulumuddin',
                'jenis_kegiatan' => 'dzikir_bersama',
                'tanggal_kegiatan' => '2023-03-15',
                'waktu' => '05:45'
            ],
            [
                'masjid_id' => 4,
                'nama_kegiatan' => 'TPA',
                'jenis_kegiatan' => 'dzikir_bersama',
                'tanggal_kegiatan' => '2023-01-21',
                'waktu' => '14:00'
            ],
            [
                'masjid_id' => 5,
                'nama_kegiatan' => 'one day with Al-quran',
                'jenis_kegiatan' => 'dzikir_bersama',
                'tanggal_kegiatan' => '2023-06-05',
                'waktu' => '10:00'
            ],
            [
                'masjid_id' => 6,
                'nama_kegiatan' => 'Tablig Akbar',
                'jenis_kegiatan' => 'dzikir_akbar',
                'tanggal_kegiatan' => '2023-05-22',
                'waktu' => '23:30'
            ],
        ];

        $kajian_masjid = [
            [
                'Tema' => 'MEWASPADAI SIHIR KRISTENISASI',
                'Penceramah' => 'H. Edy Achyar, SE.',
                'Jadwal' => '2023-06-08',
                'Waktu' => '06:00',
                'masjid_id' => 1,
            ],
            [
                'Tema' => 'Kajian Qaabla Jumat',
                'Penceramah' => 'Asep Saifuddin',
                'Jadwal' => '2023-05-25',
                'Waktu' => '11:00',
                'masjid_id' => 2,
            ],
            [
                'Tema' => 'Mukhtasar Shahih Muslim imam Almunziri',
                'Penceramah' => "Abdullah Bu'ayjaan",
                'Jadwal' => '2023-03-11',
                'Waktu' => '05:15',
                'masjid_id' => 3,
            ],
            [
                'Tema' => 'Wadah Menimba Ilmu Menuju Kehidupan Yang Lebih Terarah dan Benar Dalam Beribadah',
                'Penceramah' => "Ustad Zumhuri Al Hafiz",
                'Jadwal' => '2023-08-07',
                'Waktu' => '19:10',
                'masjid_id' => 4,
            ],
            [
                'Tema' => 'Nuzulul Quran',
                'Penceramah' => "H. Muhajir",
                'Jadwal' => '2023-04-08',
                'Waktu' => '13:30',
                'masjid_id' => 5,
            ],
            [
                'Tema' => 'Hikam Berhizmet',
                'Penceramah' => "H. Sidik Mulyana	",
                'Jadwal' => '2023-08-07',
                'Waktu' => '19:10',
                'masjid_id' => 6,
            ],
        ];

        $shalat_khusus = [
            [
                'jenis_shalat' => 'Idul Fitri',
                'imam' => 'Sairul Maklum',
                'muazzin' => 'tgk hafadz hafizi',
                'khatib' => 'Dr. Tgk. Ismu Ridha, M.A',
                'masjid_id' => 1,
                'tanggal' => '2023-04-22',
            ],
            [
                'jenis_shalat' => 'Idul Adha',
                'imam' => 'Sairul Maklum',
                'muazzin' => 'tgk hafadz hafizi',
                'khatib' => 'Dr. Tgk. Ismu Ridha, M.A',
                'masjid_id' => 1,
                'tanggal' => '2023-07-09',
            ],
            [
                'jenis_shalat' => 'taraweh',
                'imam' => ' Sairul Maklum',
                'muazzin' => 'tgk hafadz hafizi',
                'khatib' => 'Dr. Tgk. Ismu Ridha, M.A',
                'masjid_id' => 1,
                'tanggal' => '2022-04-04',
            ],
            [
                'jenis_shalat' => 'Idul Fitri',
                'imam' => 'H. Drs. H. Muhasyim Abdul Majid, M.Ag. ',
                'muazzin' => 'Ust. H. Hasan Basri',
                'khatib' => 'H. Drs. H. Muhasyim Abdul Majid, M.Ag.',
                'masjid_id' => 2,
                'tanggal' => '2021-07-25',
            ],
            [
                'jenis_shalat' => 'Idul Adha',
                'imam' => 'Dr. KH. A. Muchlis M. Hanafi, MA.',
                'muazzin' => 'Ust. Ahmad Rafiuddin Mahfudz',
                'khatib' => 'Ust. Ahmad Rafiuddin Mahfudz',
                'masjid_id' => 2,
                'tanggal' => '2022-10-09',
            ],
            [
                'jenis_shalat' => 'Idul Fitri',
                'imam' => 'Ustad Thamlica Haan, Lc.',
                'muazzin' => 'Amiruddin',
                'khatib' => 'Tgk. Umar Ismail, S. Ag. ',
                'masjid_id' => 4,
                'tanggal' => '2023-04-22',
            ],
            [
                'jenis_shalat' => 'Idul Adha',
                'imam' => 'Tgk Abdul Manaf Daud',
                'muazzin' => 'Amiruddin',
                'khatib' => 'Tgk. Gamal Achyar, Lc. M.Sh',
                'masjid_id' => 4,
                'tanggal' => '2023-07-09',
            ],
            [
                'jenis_shalat' => 'taraweh',
                'imam' => ' Ustad Umhuri Al Hafiz',
                'muazzin' => 'Amiruddin',
                'khatib' => 'Ustad Thamlica Haan, Lc',
                'masjid_id' => 4,
                'tanggal' => '2022-04-04',
            ],
            [
                'jenis_shalat' => 'Idul Fitri',
                'imam' => 'Darusman, S.Ag., M.A.',
                'muazzin' => 'Teungku M Khaled',
                'khatib' => 'Ir. H. Marsudi Hadiwiyanto ',
                'masjid_id' => 5,
                'tanggal' => '2023-04-22',
            ],
            [
                'jenis_shalat' => 'Idul Adha',
                'imam' => 'Tgk Abdul Manaf Daud',
                'muazzin' => 'Teungku M Khaled',
                'khatib' => 'Teungku H. Salman SPd M. Ag.',
                'masjid_id' => 5,
                'tanggal' => '2022-07-09',
            ],
            [
                'jenis_shalat' => 'taraweh',
                'imam' => 'Tgk Abdul Manaf Daud',
                'muazzin' => 'Teungku M Khaled',
                'khatib' => 'Teungku H. Salman SPd M. Ag.',
                'masjid_id' => 5,
                'tanggal' => '2022-04-04',
            ],
            [
                'jenis_shalat' => 'Idul Fitri',
                'imam' => ' Tgk. Takdir Feriza, S. Pd.',
                'muazzin' => 'Tgk Masrul Aidi',
                'khatib' => 'Tgk. Umar Ismail, S. Ag. ',
                'masjid_id' => 6,
                'tanggal' => '2023-04-22',
            ],
            [
                'jenis_shalat' => 'Idul Adha',
                'imam' => 'H. Muhammad Kamaruzzaman HKL, SE',
                'muazzin' => 'H. Takdir Feriza',
                'khatib' => 'Tgk. Gamal Achyar, Lc. M.Sh',
                'masjid_id' => 6,
                'tanggal' => '2022-07-09',
            ],
            [
                'jenis_shalat' => 'taraweh',
                'imam' => 'H. Darwin Hasibuan',
                'muazzin' => 'H. Takdir Feriza',
                'khatib' => 'Dr. Bismi Khalidin, S.Ag, M.Si',
                'masjid_id' => 6,
                'tanggal' => '2022-04-04',
            ],
        ];
        DB::table('users')->insert($users);
        DB::table('data_masjids')->insert($data_masjids);
        DB::table('kegiatan_masjids')->insert($kegiatan_masjids);
        DB::table('kajian_masjids')->insert($kajian_masjid);
        DB::table('shalat_khususes')->insert($shalat_khusus);
    }
}
