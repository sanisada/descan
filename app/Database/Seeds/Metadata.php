<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Metadata extends Seeder
{
    public function run()
    {
        // membuat data
		$meta_data = [
			[
                'dataKey' => '105',
                'label' => 'SK pembentukan/pengesahan pekon/kelurahan',
                'definisi' => 'Rincian ini untuk mengetahui apakah desa/kelurahan tersebut sudah disahkan oleh Kemendagri melalui Kepmendagri Nomor 100.1.1-6117 Tahun 2022. Selain Permendagri/Kepmendagri, SK pembentukan desa/kelurahan diantaranya
                                a. Peraturan Daerah (Perda) adalah peraturan yang dibuat oleh kepala daerah Provinsi maupun Kabupaten/Kota bersama-sama dengan Dewan Perwakilan Rakyat Daerah (DPRD) Provinsi maupun Kabupaten/Kota, dalam ranah pelaksanaan penyelenggaraan otonomi daerah yang menjadi legalitas perjalanan eksekusi pemerintah daerah.
                                b. Surat Keputusan Gubernur/Bupati, desa yang ditetapkan melalui surat keputusan Gubernur/Bupati dan belum disyahkan oleh Menteri Dalam Negeri.
                                c. Lainnya merupakan desa yang ditetapkan oleh kementerian/lembaga terkait, seperti Kemendes PDTT yang membentuk Unit Permukiman Transmigrasi (UPT). Yang merupakan suatu wilayah permukiman yang ditempati sejumlah penduduk transmigrasi yang terdiri kurang lebih 500 kepala keluarga sebagai satu kesatuan masyarakat. Contoh lainnya adalah Kementerian Sosial yang membentuk Pemukiman Masyarakat Terasing (PMT), adalah tempat bermukim masyarakat suku terasing yang secara geografis terpencil, terisolir, dan terasing.
                                Penjelasan:
                                a. Desa yang menjawab SKnya bukan SK Permendagri maka perlu ditelusuri kembali kepastian SK pembentukan wilayahnya.
                                b. Apabila dari hasil penelusuran tersebut ternyata terdaftar di Permendagri/Kepmendagri maka isian 106 berkode 1 (SK Permendagri/Kepmendagri).'
			],
            [
                'dataKey' => '201',
                'label' => 'Daftar RT/RW di pekon/kelurahan:',
                'definisi' => 'Satuan Lingkungan Setempat (SLS) di bawah desa/setingkatnya memiliki kegunaan yang sangat penting. SLS merupakan unit terkecil dari tingkatan wilayah di bawah wilayah administrasi desa/kelurahan. SLS lebih umum dikenal di masyarakat sehingga mudah untuk diidentifikasi keberadaannya.'
			],
            [
                'dataKey' => '202',
                'label' => 'Luas wilayah pekon/kelurahan',
                'definisi' => 'Rincian ini bertujuan untuk memperoleh informasi mengenai kepadatan penduduk 
                            di desa/kelurahan yang digunakan sebagai salah satu variabel penentu klasifikasi daerah 
                            perkotaan-perdesaan. Informasi luas desa/kelurahan diisikan berdasarkan SK 
                            12                                                                                          
                            Pedoman Konsep dan Definisi Podes 2024  
                            pembentukan desa atau sumber otentik terbaru. Data luas diisikan dalam satuan â€˜km2â€™. 
                            Oleh karena itu, jika satuan luas yang ada di desa/kelurahan bukan dalam km2, petugas 
                            harus melakukan konversi ke dalam satuan km2. 1 Ha sama dengan 0,01 km2. Bila ada 
                            perubahan luas wilayah, gunakan data terakhir/terbaru. 
                            Penjelasan:  
                            a. Jika ada wilayah desa yang tidak terletak dalam satu hamparan (seperti: berbeda 
                            pulau, terpisah oleh wilayah desa lain, dsb) maka luas desa mencakup seluruh 
                            wilayah desa tersebut.'
			],
            [
                'dataKey' => '203',
                'label' => 'Koordinat dan ketinggian lokasi kegiatan pemerintahan desa/kelurahan',
                'definisi' => 'Rincian pertanyaan ini dimaksudkan untuk mengetahui titik koordinat geografi dan ketinggian lokasi kegiatan pemerintahan desa/kelurahan, yang biasanya adalah kantor kepala desa/lurah. '
			],
            [
                'dataKey' => '203.1',
                'label' => 'Koordinat',
                'definisi' => 'Titik koordinat adalah titik potong antara garis lintang (latitude) dan garis bujur (longitude) suatu daerah. Kedua garis lintang dan bujur inilah yang menentukan diperolehnya suatu nilai derajat dari suatu titik yang diukur. '
			],
            [
                'dataKey' => '203.2',
                'label' => 'Ketinggian letak (altitude) lokasi kegiatan pemerintahan desa/kelurahan dari permukaan laut',
                'definisi' => 'Ketinggian letak (altitude) lokasi kegiatan pemerintahan desa/kelurahan dari permukaan laut adalah ketinggian kantor kepala desa/lurah dari permukaan air laut dalam satuan meter dpal yang diukur menggunakan altimeter. Mengetahui ketinggian (altitude) juga dapat dilakukan menggunakan aplikasi Open Camera.'
			],
            [
                'dataKey' => '301',
                'label' => 'Penduduk dan keluarga pada 1 Januari tahun sekarang',
                'definisi' => 'Rincian 401 digunakan untuk mencatat data jumlah penduduk dan keluarga desa/kelurahan berdasarkan laporan desa/kelurahan sampai 31 Desember 2023. Banyaknya penduduk desa/kelurahan yang dicatat adalah jumlah penduduk yang tercatat pada buku administrasi kependudukan desa/kelurahan atau banyaknya penduduk desa/kelurahan yang diketahui oleh aparat desa/kelurahan.
                            Penjelasan:
                            1. Jika di desa/kelurahan tidak terdapat catatan jumlah penduduk tapi kepala desa/lurah dapat memperkirakan jumlah penduduknya, maka gunakan perkiraan jumlah penduduk tersebut. Hal ini karena data desa/kelurahan tersebut juga dilegalisasi oleh kepala desa/lurah tersebut (kepala desa/lurah bertanggung jawab terhadap jumlah penduduk tersebut).
                            2. Jika di desa/kelurahan tidak terdapat catatan jumlah penduduk dan kepala desa/lurah tidak dapat memperkirakan jumlah penduduknya atau kepala desa/lurah menyerahkan penghitungan jumlah penduduk ke BPS, maka gunakan/hitung proyeksi data jumlah penduduk desa/kelurahan tersebut. Isikan catatan bahwa jumlah penduduk desa/kelurahan menggunakan data BPS.'
			],
            [
                'dataKey' => '301. a',
                'label' => 'Jumlah penduduk laki-laki',
                'definisi' => 'Jumlah penduduk laki-laki dan perempuan dicatat berdasarkan catatan data desa/kelurahan. Cukup jelas.'
			],
            [
                'dataKey' => '301. b',
                'label' => 'Jumlah penduduk perempuan',
                'definisi' => 'Jumlah penduduk laki-laki dan perempuan dicatat berdasarkan catatan data desa/kelurahan. Cukup jelas.'
			],
            [
                'dataKey' => '301. c',
                'label' => 'Jumlah keluarga keluarga',
                'definisi' => 'Keluarga adalah unit terkecil dalam masyarakat yang pada umumnya terdiri dari suami, istri, dan anaknya. Jumlah keluarga biasanya didekati dengan jumlah kartu keluarga.'
			],
            [
                'dataKey' => '301. d',
                'label' => 'Jumlah keluarga pertanian (tanaman pangan, hortikultura, perkebunan, kehutanan, peternakan, perikanan)',
                'definisi' => 'Keluarga pertanian adalah keluarga yang sekurang-kurangnya ada satu anggota keluarga yang mengusahakan produk pertanian (menanggung risiko sendiri) dengan tujuan sebagian/seluruh dijual atau memperoleh pendapatan/ keuntungan. Khusus untuk keluarga yang menanam padi dan palawija (tanaman pangan), walaupun seluruh hasilnya untuk dikonsumsi sendiri, dikategorikan sebagai keluarga pertanian. Produk pertanian meliputi tanaman pangan, hortikultura, perkebunan, peternakan, perikanan, kehutanan, dan jasa pertanian. Catatan: keluarga yang hanya sebagai buruh tani maka tidak dihitung sebagai keluarga pertanian.'
			],
            [
                'dataKey' => '302. a',
                'label' => 'Jumlah warga pekon/kelurahan yang sedang bekerja sebagai Pekerja Migran Indonesia/TKI di luar negeri pada 1 Januari tahun sekarang:
                        1. Laki- laki ........ orang
                        2. Perempuan  ........ orang',
                'definisi' => 'Rincian ini ditanyakan untuk mendapatkan jumlah PMI yang diketahui keberadaannya di luar negeri oleh aparat desa/kelurahan tersebut, dirinci menurut jenis kelamin. Pekerja Migran Indonesia (PMI)/Tenaga Kerja Indonesia (TKI) adalah WNI yang memenuhi syarat untuk bekerja di luar negeri dalam hubungan kerja untuk jangka waktu tertentu dengan menerima upah. Jangka waktu tertentu ini biasanya ditandai dengan lamanya Pekerja Migran Indonesia/TKI tersebut tinggal di luar negeri. Beberapa penjelasan terkait Pekerja Migran Indonesia/TKI yang dicatat adalah sebagai berikut (apabila informasi tersebut diketahui oleh salah satu aparatur desa/kelurahan):
                    - Niat/tujuan utama berangkat ke luar negeri adalah untuk bekerja, bukan karena hal lain.
                    - Sudah berangkat untuk bekerja/sedang bekerja di luar negeri.
                    - Bermaksud menetap atau bertempat tinggal sebagai penduduk di negara tujuan namun masih berstatus sebagai WNI
                    - Bekerja di luar negeri karena mutasi pekerjaan.
                    - Bekerja di luar negeri dengan cara mendapat langsung dari pemberi kerja di luar negeri, melalui perekrut/perantara perorangan, melalui anggota keluarga/kerabat/teman, mendaftar dari agen pemerintah/swasta di dalam negeri dan luar negeri.
                    - Bekerja di luar negeri dengan cara masuk melalui jalur resmi dengan visa bekerja.
                    - Pekerja Migran Indonesia/TKI ilegal/ireguler yaitu yang masuk melalui imigrasi reguler tanpa visa bekerja serta melalui pintu masuk jalur tidak resmi dan tanpa visa.
                    - Status pekerjaan di luar negeri harus sebagai buruh/karyawan (terikat untuk hadir secara rutin di tempat kerja).
                    Beberapa penjelasan terkait Pekerja Migran Indonesia/TKI yang tidak dicatat adalah sebagai berikut (apabila informasi tersebut diketahui oleh salah satu aparatur desa/kelurahan):
                    - Sudah kembali tinggal di Indonesia, yakni mereka yang akan atau telah tinggal selama satu tahun atau lebih di Indonesia.
                    - Belum berangkat ke luar negeri dan masih tinggal di tempat penampungan Perusahaan Jasa Tenaga Kerja Indonesia (PJTKI)/Perusahaan Penempatan Pekerja Migran Indonesia (P3MI) dan diketahui oleh kepala desa/lurah, maka masih belum terhitung sebagai Pekerja Migran Indonesia /TKI.
                    - Jenis pekerjaan di luar negeri sebagai pekerja komuter lintas negara, pekerja sirkuler lintas negara, pekerja musiman lintas negara, dan pekerja di perbatasan negara.
                    - Mereka yang berangkat ke luar negeri dengan niat/tujuan selain bekerja, seperti bersekolah, berwisata, umrah/haji, berobat, ikut keluarga, atau mencari suaka.'
			],
            [
                'dataKey' => '302. b',
                'label' => 'Keberadaan Warga Negara Asing (WNA) di pekon/kelurahan pada 1 Januari tahun sekarang:
                        Ada - 1 Tidak ada - 2',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui informasi adanya warga negara asing (WNA) yang tinggal di desa/kelurahan. Warga negara asing perlu memiliki izin tinggal atau visa yang memungkinkan mereka tinggal dan bekerja dalam batas waktu tertentu di negara tempat mereka tidak memiliki kewarganegaraan. Status hukum dan hak-hak warga negara asing sering kali diatur oleh undang-undang dan peraturan negara tersebut. Penting untuk dipahami bahwa istilah ""warga negara asing"" merujuk kepada individu yang bukan warga negara dari negara tertentu, dan mereka tunduk pada hukum dan peraturan negara yang mereka tinggali atau kunjungi. Warga Negara Asing (WNA) adalah orang-orang yang mempunyai kewarganegaraan selain WNI atau mereka yang tanpa kewarganegaraan. Kewarganegaraan berbeda dengan garis keturunan. Orang keturunan Indonesia bisa saja berkewarganegaraan asing, begitu pula sebaliknya orang keturunan asing bisa saja sudah memiliki kewarganegaraan Indonesia. Untuk anak-anak yang memiliki kewarganegaraan ganda (belum berusia 18 tahun atau belum kawin) karena orang tuanya memiliki kewarganegaraan berbeda, penentuan kewarganegaraan berdasarkan informasi dari orang tua. WNA yang dicatat hanya yang bermaksud menetap atau bertempat tinggal sebagai penduduk di desa/kelurahan minimal 1 tahun (apabila informasi tersebut diketahui oleh kepala desa/lurah). Hal ini ditandai dengan kepemilikan Izin Tinggal Sementara (ITAS) atau Izin Tinggal Tetap (ITAP).
                        Kode (1) Ada - Jika pada 1 Januari 2024 ada Warga Negara Asing yang tinggal di di desa/kelurahan tersebut
                        Kode (2) Tidak Ada - Jika pada 1 Januari 2024 tidak ada Warga Negara Asing yang tinggal di di desa/kelurahan tersebut'
			],
            [
                'dataKey' => '303',
                'label' => 'Jumlah penduduk bekerja per lapangan usaha:',
                'definisi' => 'Sumber penghasilan utama sebagian besar penduduk adalah lapangan usaha di mana sebagian besar penduduk desa/kelurahan memperoleh penghasilan/pendapatan.'
			],
            [
                'dataKey' => '303. a',
                'label' => 'Pertanian, kehutanan, dan perikanan',
                'definisi' => 'Mencakup semua kegiatan ekonomi/lapangan usaha, yang meliputi pertanian tanaman pangan, tanaman perkebunan, hortikultura, peternakan, pengambilan dan penanaman hasil hutan serta penangkapan dan budidaya ikan/biota air. Kategori ini juga mencakup jasa penunjang masing-masing kegiatan ekonomi tersebut. Kategori pertanian, kehutanan, dan perikanan mencakup 3 (tiga) subkategori, yaitu:
                            1.Pertanian Tanaman, Peternakan, Perburuan dan Kegiatan YBDI.
                            Golongan pokok ini mencakup pertanian tanaman pangan, tanaman perkebunan dan hortikultura; usaha pemeliharaan hewan ternak dan unggas; perburuan dan penangkapan hewan dengan perangkap serta kegiatan penunjang ybdi yang ditujukan untuk dijual. Termasuk budidaya tanaman dan hewan ternak secara organik dan genetik. Kegiatan konstruksi lahan seperti pembuatan petak-petak sawah, irigasi saluran pembuangan air, serta pembersihan dan perbaikan lahan untuk pertanian tidak termasuk di sini, tetapi tercakup pada kategori konstruksi (F). Klasifikasi turunannya adalah:
                            a)Pertanian Tanaman Semusim
                            b) Pertanian Tanaman Tahunan
                            c) Pertanian Tanaman Hias dan Pengembangbiakan Tanaman
                            d) Peternakan
                            e) Jasa Penunjang Pertanian dan Pasca Panen
                            f) Perburuan, penangkapan, dan penangkaran satwa liar

                            2. Kehutanan dan Penebangan Kayu.
                            Golongan pokok ini mencakup penebangan pohon untuk diambil kayunya serta pengambilan dan pemungutan hasil hutan selain kayu yang tumbuh liar. Di samping menghasilkan kayu, kegiatan kehutanan menghasilkan produk melalui proses sederhana, seperti kayu bakar, arang kayu, serbuk kayu dan kayu gelondongan dalam bentuk yang belum diolah (misalnya pitprops/kayu untuk bahan atap, bubur kayu dan lain-lain). Kegiatan ini dapat dilakukan di hutan alam yang belum diusahakan atau di hutan yang sudah diusahakan. Termasuk juga penebangan dan penanaman pohon bakau. Klasifikasi turunannya adalah:
                            a) Pengusahaan Huta
                            b) Penebangan dan Pemungutan Kayu
                            c) Pemungutan Hasil Hutan Bukan Kayu
                            d) Jasa penunjang kehutanan

                            3. Perikanan
                            Golongan pokok ini mencakup penangkapan dan budidaya ikan, jenis crustacea (seperti udang, kepiting) mollusca, dan biota air lainnya di laut, air payau dan air tawar. Tidak termasuk pemancingan untuk rekreasi. Klasifikasi turunannya adalah:
                            a) Perikanan tangkap
                            b) Perikanan Budidaya'
			],
            [
                'dataKey' => '303. b',
                'label' => 'Pertambangan dan penggalian',
                'definisi' => 'Pertambangan dan penggalian mencakup kegiatan ekonomi/lapangan usaha pengambilan mineral dalam bentuk alami, yaitu padat (batu bara dan bijih logam), cair (minyak bumi) atau gas (gas alam). Kegiatan ini dapat dilakukan dengan metode yang berbeda seperti penambangan dan penggalian di permukaan tanah atau dibawah tanah, pengoperasian sumur pertambangan, penambangan di dasar laut dan lain-lain. Kategori ini juga mencakup kegiatan tambahan untuk penyiapan barang tambang dan galian mentah untuk dipasarkan seperti pemecahan, pengasahan, pembersihan, pengeringan, sortasi, pemurnian bijih logam, pencairan gas alam dan aglomerasi bahan bakar padat. Kategori ini mencakup 5 subkategori, yaitu:
                            1. Pertambangan batu bara dan lignit
                            Golongan pokok ini mencakup pertambangan batu bara dan lignit melalui penambangan bawah tanah atau penambangan terbuka. Kegiatan ini juga mencakup pekerjaan seperti penggolongan, pembersihan, pemadatan dan langkah-langkah lain yang diperlukan dalam pengangkutan untuk dijual. Proses lainnya seperti pembuatan kokas (191) dari mineral dan jasa pertambangan batu bara dan lignit (099) atau pembuatan briket (192) tidak dicakup dalam golongan pokok ini. Klasifikasi turunannya adalah:
                            a) Pertambangan batu bara
                            b) Pertambangan lignit                     

                            2. Pertambangan minyak bumi dan gas alam dan panas bumi
                            Golongan pokok ini mencakup produksi minyak bumi mentah, pertambangan dan pengambilan minyak dari serpihan minyak dan pasir minyak dan produksi gas alam serta pencarian cairan hidrokarbon. Golongan pokok ini juga mencakup kegiatan operasi dan atau pengembangan lokasi penambangan minyak dan gas. Klasifikasi turunannya adalah:
                            a) Pertambangan minyak bumi
                            b) Pertambangan gas alam dan panas bumi 

                            3. Pertambahan bijih logam
                            Golongan pokok ini mencakup pertambangan bijih logam, yang dilakukan melalui penambangan bawah tanah, penambangan terbuka (open-cast), dasar laut dan lain-lain. Kegiatan ini juga mencakup pengolahan dan peningkatan manfaat seperti penghancuran, pengasahan, pencucian, pengeringan, sintering (pemanasan tanpa pelelehan), calcining (pemanasan sampai oksidasi) dan pelelehan bijih logam, dan operasi pengapungan dan pemisahan dengan gaya berat (gravitasi). Klasifikasi turunannya adalah:
                            a) Pertambangan pasir besi dan bijih besi
                            b) Pertambagan bijih logam yang tidak mengandung besi, tidak termasuk bijih logam muli
                            c) Pertambangan bijih logam mulia

                            4. Pertambangan dan penggalian lainnya
                            Golongan pokok ini mencakup pengambilan mineral dari tambang dan galian, juga pengerukan tanah endapan, penghancuran batu dan pengambilan garam. Sebagian besar hasil pertambangan dan penggalian mineral ini digunakan pada bidang konstruksi (pasir, batu dan lain-lain), industri bahan galian (tanah liat, gips, kapur dan lain-lain), industri bahan-bahan kimia dan lain-lain. Golongan pokok ini juga mencakup kegiatan penghancuran, pengasahan, pemotongan, pembersihan, pengeringan, sortasi dan pencampuran bahan-bahan mineral tersebut. Klasifikasi turunannya adalah:
                            a) Penggalian batu, pasir dan tanah liat
                            b) Pertambangan dan penggalian lainnya ytdl

                            5. Jasa pertambangan
                            Golongan pokok ini mencakup jasa penunjang yang dikhususkan untuk pertambangan atas dasar balas jasa (fee) atau kontrak. Golongan pokok ini mencakup jasa eksplorasi dengan cara pencarian tradisional, seperti pengambilan contoh bijih logam dan melakukan observasi geologi dengan cara pengeboran, pengeboran percobaan atau pengeboran ulang sumur minyak, mineral logam dan bukan logam. Jasa khusus lainnya mencakup pembangunan fondasi sumur minyak dan gas, penyemenan pinggiran sumur minyak dan gas, pembersihan, penimbaan dan pengepelan sumur minyak dan gas, pemompaan dan penyaluran tambang, jasa pemindahan di pertambangan dan lain-lain. Klasifikasi turunannya adalah:
                            a) Jasa pertambangan minyak bumi dan gas alam
                            b) Jasa pertambangan dan penggalian lainnya'
			],
            [
                'dataKey' => '303. c',
                'label' => 'Industri pengolahan',
                'definisi' => 'Meliputi kegiatan ekonomi/lapangan usaha di bidang perubahan secara kimia atau fisik dari bahan, unsur atau komponen menjadi produk baru. Bahan baku industri pengolahan berasal dari produk pertanian, kehutanan, perikanan, pertambangan atau penggalian seperti produk dari kegiatan industri pengolahan lainnya. Perubahan, pembaharuan atau rekonstruksi yang pokok dari barang secara umum diperlakukan sebagai industri pengolahan. Unit industri pengolahan digambarkan sebagai pabrik, mesin atau peralatan yang khusus digerakkan dengan mesin dan tangan. Termasuk kategori industri pengolahan di sini adalah unit yang mengubah bahan menjadi produk baru dengan menggunakan tangan, kegiatan maklon atau kegiatan penjualan produk yang dibuat di tempat yang sama di mana produk tersebut dijual dan unit yang melakukan pengolahan bahan-bahan dari pihak lain atas dasar kontrak. Kategori ini mencakup 24 subkategori, yaitu:
1. Industri Makanan
2. Industri Minuman
3. Industri Pengolahan Tembakau
4. Industri tekstil
5. Industri pakaian jadi
6. Industri kulit, barang dari kulit dan alas kaki
7. Industri kayu, barang dari kayu dan gabus (tidak termausk furniture) dan barang anyaman dari bambu, rotan, dan sejenisnya
8. Industri kertas dan barang dari kertas
9. Industri pencetakan dan reproduksi media rekaman
10. Industri produk dari batu bara dan pengilangan minyak bumi
11. Industri bahan kimia dan barang dari bahan kimia
12. Industri farmasi, produk obat kimia dan obat tradisional
13. Industri karet, barang dari karet dan plastik
14. Industri barang galian bukan logam
15. Industri logam dasar
16. Industri barang logam, bukan medin, dan peralatannya
17. Industri komputer, barang elektronik dan optic
18. Industri peralatan listrik
19. Industri mesin dan perlengkapan ytdl
20. Industri kendaraan bermotor, trailer dan semi trailer
21. Industri alat angkutan lainonsep dan Definisi Podes 2024nya
22. Industri furniture
23. Industri pengolahan lainnya
24. Jasa reparasi dan pemasangan mesin dan peralatan'
			],
            [
                'dataKey' => '303. d',
                'label' => 'Pengadaan listrik, gas, uap/air panas, dan udara dingin',
                'definisi' => 'Mencakup kegiatan ekonomi/lapangan usaha pengadaan tenaga listrik, gas alam, uap panas, air panas dan sejenisnya melalui jaringan, saluran atau pipa infrastruktur permanen. Dimensi jaringan/infrastruktur tidak dapat ditentukan dengan pasti, termasuk kegiatan pendistribusian listrik, gas, uap panas dan air panas serta sejenisnya dalam lokasi pabrik atau gedung tempat tinggal. Kategori ini juga mencakup pengoperasian mesin (pembangkit listrik dan gas, yang menghasilkan, mengontrol dan menyalurkan tenaga listrik atau gas. Juga mencakup pengadaan uap panas dan AC (pendingin ruangan). Kategori ini tidak mencakup pengoperasian sarana air bersih dan pembuangan limbah/kotoran, lihat golongan pokok 36 dan 37. Juga tidak mencakup (khususnya jarak jauh) angkutan gas melalui saluran pipa. Kategori ini hanya dibagi menjadi 1 subkategori yaitu pengadaan listrik, gas, uap/air panas dan udara dingin.'
			],
            [
                'dataKey' => '303. e',
                'label' => 'Treatment air, treatment air limbah, treatment dan pemulihan material sampah, dan aktivitas remediasi',
                'definisi' => 'Mencakup kegiatan ekonomi/lapangan usaha yang berhubungan dengan pengelolaan berbagai bentuk limbah/sampah, seperti limbah/sampah padat atau bukan baik rumah tangga ataupun industri, yang dapat mencemari lingkungan. Hasil dari proses pengolahan limbah sampah atau kotoran dan dibuang atau menjadi input dalam proses produksi lainnya. Kegiatan pengadaan air termasuk kategori ini, karena kegiatan ini sering kali dilakukan dalam hubungannya dengan atau oleh unit yang terlibat dalam pengolahan limbah/kotoran. Kategori ini mencakup 2 subkategori, yaitu:
1. Pengadaan air
Golongan ini mencakup kegiatan pengumpulan, pengolahan dan pendistribusian air melalui berbagai saluran pipa untuk kebutuhan rumah tangga dan industri. Golongan ini juga mencakup kegiatan pengumpulan, penjernihan dan pengolahan air dari sungai, danau, mata air, hujan dan lain-lain. Untuk pengadaan air, kebutuhan industri dan lainnya. Termasuk juga proses penghilangan garam dari air laut yang utamanya untuk menghasilkan air tawar, pendistribusian air dengan truk atau saluran lainnya dan pengoperasian kanal irigasi. Golongan ini tidak mencakup pengoperasian peralatan irigasi untuk keperluan pertanian, pengolahan air limbah dalam rangka pencegahan polusi dan angkutan saluran pipa jarak jauh untuk air.

2. Pengelolaan limbah
Golongan pokok ini mencakup kegiatan pengoperasian sistem pembuangan limbah/kotoran atau fasilitas pengolahan limbah/kotoran, termasuk kegiatan pengumpulan dan pengangkutan air limbah, seperti halnya air hujan melalui saluran dari jaringan pembuangan limbah dan fasilitas pengangkutan. Golongan pokok ini juga mencakup pengosongan dan pembersihan tempat penampungan limbah, pelayanan dan pengolahan air limbah melalui saluran secara proses biologi, kimia dan fisika, juga mencakup pemeliharaan dan pembersihan saluran air dan saluran pembuangan.

3. Pengelolaan sampah dan daur ulang
Golongan pokok ini mencakup kegiatan pengumpulan, pengolahan dan pembuangan sampah. Golongan pokok ini juga mencakup pengumpulan lokal sampah dan pengoperasian fasilitas daur ulang (misalnya pemilihan sampah yang dapat di daur ulang dari kumpulan sampah). Klasifikasi turunannya adalah:
a) Pengumpulan sampah
b) Pengelolaan dan pembuangan sampah
c) Daur ulang

4. Jasa pembersihan dan pengelolaan sampah lainnya
Golongan pokok ini mencakup penyediaan jasa pembersihan, misalnya jasa pembersihan lokasi atau tempat dan gedung, tanah, air bawah tanah atau air permukaan yang tercemar. Klasifikasi turunannya adalah jasa pembersihan dan pengelolaan sampah lainnya.'
			],
            [
                'dataKey' => '303. f',
                'label' => 'Konstruksi',
                'definisi' => 'Kategori ini mencakup kegiatan ekonomi/lapangan usaha di bidang konstruksi, yaitu kegiatan konstruksi umum dan konstruksi khusus pekerjaan bangunan gedung dan bangunan sipil. Kegiatan konstruksi mencakup pekerjaan baru, perbaikan, penambahan dan perubahan, pendirian prafabrikasi bangunan atau struktur di lokasi proyek dan juga konstruksi yang bersifat sementara. Kegiatan konstruksi umum berupa konstruksi bangunan tempat tinggal, bangunan kantor, pertokoan, dan bangunan lainnya. Sedangkan konstruksi bangunan sipil seperti jalan kendaraan bermotor, jalan raya, jembatan, terowongan, rel kereta api, lapangan udara, pelabuhan dan bangunan air lainnya, sistem irigasi, sistem limbah, fasilitas industri, jaringan pipa dan jaringan listrik, fasilitas olahraga, dan lain-lain. Kegiatan konstruksi khusus, seperti penyiapan lahan, instalasi gedung dan penyelesaian gedung dan lain-lain. Pekerjaan konstruksi dapat dilakukan atas nama sendiri atau atas dasar balas jasa/kontrak. Sebagian pekerjaan dan dimungkinkan keseluruhan pekerjaan konstruksi dapat disubkontrakan. Unit yang melakukan subkontrak kegiatan konstruksi diklasifikasikan di sini. Kategori ini mencakup juga kegiatan perbaikan bangunan gedung dan bangunan sipil. Kategori ini dibedakan menjadi konstruksi lengkap bangunan gedung (Golongan Pokok 41), konstruksi lengkap bangunan sipil (Golongan Pokok 42), dan juga kegiatan konstruksi khusus, jika hanya melakukan sebagian proses konstruksi (Golongan Pokok 43). Persewaan peralatan konstruksi dengan operatornya diklasifikasikan sesuai kegiatan konstruksi tertentu yang dilakukan dengan peralatan tersebut. Kategori ini juga mencakup pengembangan proyek konstruksi untuk bangunan gedung atau bangunan sipil dengan menggabungkan semua unsur keuangan, teknik dan fisik untuk mewujudkan proyek konstruksi dengan untuk dijual. Jika proyek konstruksi dari kegiatan tersebut dilakukan tidak untuk dijual, tetapi untuk dioperasikan (yaitu ruangan dalam bangunan tersebut disewakan, kegiatan industri pengolahan dalam pabrik), maka diklasifikasikan sesuai dengan kegiatan operasionalnya, yaitu real estat atau industri pengolahan. Kategori ini mencakup 3 subkategori, yaitu:
1. Konstruksi Gedung
Golongan pokok ini mencakup kegiatan konstruksi umum berbagai macam gedung/bangunan, termasuk pembangunan gedung baru, perbaikan gedung, penambahan dan renovasi bangunan, pendirian bangunan atau struktur prafabrikasi pada lokasi dan konstruksi yang bersifat sementara. Golongan pokok ini mencakup konstruksi bangunan tempat tinggal, gedung perkantoran, pertokoan, sarana dan prasarana umum lainnya, termasuk bangunan pertanian dan lain-lain. Kegiatan konstruksi bangunan dimungkinkan untuk disubkontrakkan sebagian atau keseluruhan.

2. Konstruksi Bangunan Sipil
Golongan pokok ini mencakup kegiatan konstruksi umum bangunan sipil, baik bangunan baru, perbaikan bangunan, penambahan bangunan dan perubahan bangunan, pendirian bangunan/struktur prafabrikasi pada lokasi proyek dan konstruksi yang bersifat sementara. Golongan pokok ini juga mencakup kegiatan konstruksi berat seperti fasilitas industri, proyek infrastruktur dan sarana umum, sistem pembuangan dan irigasi, saluran pipa dan jaringan listrik, fasilitas olahraga di tempat terbuka dan lain-lain. Sebagian atau keseluruhan pengerjaan dapat dilakukan atas biaya sendiri, berdasarkan balas jasa/kontrak. Klasifikasi turunannya adalah:
a) Konstruksi jalan dan rel kereta api
b) Konstruksi jaringan saluran untuk irigasi, komunikasi, dan limbah
c) Konstruksi bangunan sipil lainnya

3. Konstruksi Khusus
Golongan pokok ini mencakup kegiatan konstruksi khusus (yang berhubungan dengan keahlian khusus), biasanya khusus pada satu aspek umum untuk struktur yang berbeda, yang membutuhkan peralatan atau keterampilan khusus dan lebih banyak dilakukan berdasarkan subkontrak. Golongan pokok ini juga mencakup kegiatan penyelesaian gedung, instalasi berbagai macam keperluan yang membuat bangunan berfungsi seperti pipa-pipa ledeng, pemanas, pendingin ruangan (AC), sistem alarm dan pekerjaan listrik lain, sistem penyiraman, lift dan tangga berjalan dan lain-lain. Termasuk juga kegiatan instalasi dan perbaikan sistem penerangan dan pemberian tanda isyarat untuk jalan raya, rel kereta api, bandar udara, pelabuhan, dan lain-lain. Kegiatan penyelesaian bangunan dan perbaikan meliputi kegiatan yang memberikan kontribusi untuk penyelesaian akhir suatu konstruksi. Klasifikasi turunannya adalah:
a) Pembongkaran dan penyiapan lahan
b) Instalasi system kelistrikan, air (pipa) dan instalasi konstruksi lainnya
c) Penyelesaian konstruksi bangunan
d) Konstruksi khusus lainnya'
			],
            [
                'dataKey' => '303. g',
                'label' => 'Perdagangan besar dan eceran, reparasi dan perawatan mobil dan sepeda motor',
                'definisi' => 'Meliputi kegiatan ekonomi/lapangan usaha di bidang perdagangan besar dan eceran (yaitu penjualan tanpa perubahan teknis) dari berbagai jenis barang, dan memberikan imbalan jasa yang mengiringi penjualan barang-barang tersebut. Baik penjualan secara grosir (perdagangan besar) maupun eceran merupakan tahap akhir dalam pendistribusian barang dagangan. Kategori ini juga mencakup reparasi mobil dan sepeda motor. Penjualan tanpa perubahan teknis juga mengikutkan kegiatan yang terkait dengan perdagangan, seperti penyortiran, pemisahan kualitas dan penyusunan barang, pencampuran, pembotolan, pengepakan, pembongkaran dari ukuran besar dan pengepakan ulang menjadi ukuran yang lebih kecil, penggudangan, baik dengan pendingin maupun tidak, pembersihan dan pengeringan hasil pertanian, pemotongan lembaran kayu atau logam. Perdagangan besar adalah penjualan kembali (tanpa perubahan teknis) baik barang baru maupun barang bekas kepada pengecer, industri, komersial, institusi atau pengguna profesional, atau kepada pedagang besar lainnya, atau yang bertindak sebagai agen atau broker dalam pembelian atau penjualan barang, baik perorangan maupun perusahaan. Bentuk utama kegiatan ini mencakup pedagang atau saudagar perdagangan besar, yaitu pedagang perdagangan besar yang mendapatkan hak atas barang-barang yang dijualnya, seperti pedagang grosir, pemborong, distributor, eksportir, importir, asosiasi koperasi, kantor penjualan dan kantor cabang penjualan (tetapi bukan toko pengecer) yang dikelola oleh unit-unit perusahaan industri maupun pertambangan, terpisah dari lokasi industri atau penambangan dengan tujuan untuk memasarkan hasil, dengan demikian tidak hanya menerima pesanan yang harus dipenuhi melalui pengapalan langsung dari lokasi industri maupun penambangan. Termasuk juga broker barang dagangan, pedagang komisi dan agen serta pedagang pengumpul, pembeli dan asosiasi koperasi yang diikutsertakan dalam pemasaran hasil-hasil pertanian. Pedagang besar seringkali secara fisik mengumpulkan, menyortir dan memisahkan kualitas barang dalam ukuran besar, membongkar dari ukuran besar dan mengepak ulang menjadi ukuran yang lebih kecil, misalnya produk farmasi, menyimpan, mendinginkan, mengantar dan memasang barang-barang, terlibat dalam promosi penjualan untuk pelanggannya dan perancangan label. Perdagangan eceran adalah penjualan kembali (tanpa perubahan teknis), baik barang baru maupun bekas, utamanya kepada masyarakat umum untuk konsumsi atau penggunaan perorangan maupun rumah tangga, melalui toko, departement store, kios, mail-order houses, penjual dari pintu ke pintu, pedagang keliling, koperasi konsumsi, rumah pelelangan, dan lain-lain. Pada umumnya pedagang pengecer memperoleh hak atas barang-barang yang dijualnya, tetapi beberapa pedagang pengecer bertindak sebagai agen, dan menjual atas dasar konsinyasi atau komisi. Kategori ini mencakup 3 subkategori, yaitu:
1. Perdagangan, reparasi, dan perawatan mobil dan sepeda motor
Golongan pokok ini mencakup semua kegiatan (kecuali industri dan penyewaan) yang berhubungan dengan mobil dan motor, termasuk lory dan truk, sebagaimana perdagangan besar dan eceran, perawatan dan pemeliharaan mobil dan motor baru maupun bekas. Termasuk perdagangan besar dan eceran suku cadang dan aksesori mobil dan motor, juga mencakup kegiatan agen komisi yang terdapat dalam perdagangan besar dan eceran kendaraan. Klasifikasi turunannya adalah:
a) Perdagangan mobil
b) Reparasi dan perawatan mobil
c) Perdagangan suku cadang dan aksesori mobil
d) Perdagangan, reparasi dan perawatan sepeda motor dan perdagangan suku cadang dan aksesorinya

2. Perdagangan besar, bukan mobil dan sepeda motor
Golongan pokok ini mencakup perdagangan besar nasional dan internasional atas usaha sendiri atau atas dasar balas jasa atau kontrak (perdagangan komisi). Klasifikasi turunannya adalah:
a) Perdagangan besar atas dasar balas jasa (fee) atau kontrak
b) Perdagangan besar hasil pertanian dan hewan hidup
c) Perdagangan besar makanan, minuman dan tembakau
d) Perdagangan besar barang keperluan rumah tangga
e) Perdagangan besar mesin, peralatan dan perlengkapannya
f) Perdagangan besar khusus lainnya
g) Perdagangan besar berbagai macam barang

3. Perdagangan eceran, bukan mobil dan motor
Barang yang dijual dalam golongan pokok ini dibatasi untuk barang yang biasanya berkenaan dengan barang konsumen atau barang eceran. Oleh karena itu barang yang biasanya tidak masuk perdagangan eceran, seperti bijih-bijihan, mesin industri dan lain-lain dikeluarkan dari golongan pokok ini. Di sini juga mencakup unit yang utamanya diikutsertakan dalam penjualan ke masyarakat umum dari barang dagangan yang dipertujukan, produk seperti komputer pribadi, alat tulis, lukisan atau bingkai, meskipun penjualan di sini mungkin bukan untuk penggunaan pribadi atau rumah tangga. Beberapa pengolahan barang mungkin tercakup, tetapi hanya saat-saat tertentu untuk penjualan, misalnya pemilihan dan pengepakan ulang barang, instalasi peralatan rumah tangga dan lain-lain. Di sini juga termasuk penjualan eceran oleh agen komisi dan kegiatan tempat pelelangan eceran. Tidak termasuk di sini menjual produk pertanian oleh petani, industri dan penjualan barangnya, yang umumnya diklasifikasikan sebagai industri pada golongan pokok 10-32, perdagangan mobil, motor dan bagian-bagiannya, padi-padian, minyak mentah, industri kimia, mesin dan peralatan indutri dan besi baja, perdagangan makanan dan minuman untuk konsumsi ditempat dan dibawa pulang (take away), penyewaan barang pribadi dan rumah tangga untuk masyarakat umum.'
			],
            [
                'dataKey' => '303. h',
                'label' => 'Pengangkutan dan pergudangan',
                'definisi' => 'Mencakup penyediaan angkutan penumpang atau barang, baik yang berjadwal maupun tidak, dengan menggunakan rel, saluran pipa, jalan darat, air atau udara dan kegiatan yang berhubungan, seperti fasilitas terminal dan parkir, bongkar muat, penggudangan dan lain-lain. Termasuk dalam kategori ini penyewaan alat angkutan dengan pengemudi atau operator, juga kegiatan pos dan kurir. Kategori ini mencakup 5 subkategori, yaitu:
1.Angkutan darat dan angkutan melalui saluran pipa
Golongan ini mencakup angkutan penumpang dan barang melalui jalan raya dan rel dan juga angkutan melalui saluran pipa. Klasifikasi turunannya adalah:
a) Angkutan jalan rel
b) Angkutan bus
c) Angkitan melalui saluran pipa 
d) Angkutan darat bukan bus

2. Angkutan air
Golongan pokok ini mencakup angkutan penumpang atau barang melalui air, baik bertrayek maupun tidak. Termasuk pengoperasian kapal penarik dan pendorong, kapal pesiar, wisata atau penjelajah, fery, taksi air dan lain-lain. Golongan pokok ini tidak mencakup restoran dan kegiatan bar pada kapal, jika dilaksanakan oleh unit yang terpisah. Klasifikasi turunannya adalah:
a) Angkutan laut
b) Angkutan sungai, danau dan penyeberangan

3. Angkutan udara
Golongan pokok ini mencakup angkutan penumpang atau barang melalui udara atau angkasa. Tidak termasuk kegiatan pesawat penyemprot tumbuhan atau tanaman, pemeriksaan pesawat atau mesin pesawat, pengoperasian bandara, iklan udara dan pemotretan udara. Klasifikasi turunannya adalah:
a) Angkutan udara untuk penumpang
b) Angkutan udara untuk barang

4.Pergudangan dan jasa penunjang angkutan
Golongan pokok ini mencakup kegiatan penggudangan dan jasa penunjang untuk angkutan, seperti pengoperasian infrastruktur angkutan (misalnya bandara, pelabuhan, terowongan, jembatan dan lain-lain) dan kegiatan agen angkutan dan bongkar muat barang. Klasifikasi turunannya adalah:
a) Pergudangan
b) Jasa penunjang angkutan

5. Pos dan kurir
Golongan pokok ini mencakup kegiatan pos dan kurir, seperti pengambilan, pengangkutan dan pengantaran surat dan parsel. Jasa antar lokal dan jasa kurir termasuk di sini.'
			],
            [
                'dataKey' => '303. i',
                'label' => 'Penyediaan akomodasi dan penyediaan makan minum',
                'definisi' => 'Mencakup penyediaan akomodasi penginapan jangka pendek untuk pengunjung dan pelancong lainnya serta penyediaan makanan dan minuman untuk konsumsi segera. Jumlah dan jenis layanan tambahan yang disediakan dalam kategori ini sangat bervariasi. Tidak termasuk penyediaan akomodasi jangka panjang seperti tempat tinggal utama, penyiapan makanan atau minuman bukan untuk dikonsumsi segera atau yang melalui kegiatan perdagangan besar dan eceran. Kategori ini terdiri dari 2 subkategori, yaitu:
1. Penyediaan akomodasi
Golongan pokok ini mencakup penyediaan akomodasi jangka pendek untuk pengunjung dan pelancong lainnya. Termasuk penyediaan akomodasi yang lebih lama untuk pelajar, pekerja dan sejenisnya. Penyediaan akomodasi dapat hanya menyediakan fasilitas akomodasi saja atau fasilitas akomodasi dan fasilitas makanan dan minuman, atau fasilitas akomodasi, makanan dan minuman dan/atau fasilitas rekreasi. Klasifikasi turunannya adalah penyediaan akomodasi jangka pendek dan akomodasi lainnya

2. Penyediaan makanan dan minuman
Golongan pokok ini mencakup kegiatan pelayanan makan minum yang menyediakan makanan atau minuman untuk dikonsumsi segera, baik restoran tradisional, restoran \""self service\"" atau restoran \""take away\"", baik di tempat tetap maupun sementara dengan atau tanpa tempat duduk. Yang dimaksud penyediaan makanan dan minuman adalah penyediaan makanan dan minuman untuk dikonsumsi segera berdasarkan pemesanan. Klasifikasi turunannya adalah:
a) Restoran dan penyediaan makanan keliling
b) Jasa boga untuk suatu event tertentu (event catering) dan penyediaan makanan lainnya
c) Penyediaan minuman'
			],
            [
                'dataKey' => '303. j',
                'label' => 'Informasi dan komunikasi',
                'definisi' => 'Mencakup produksi dan distribusi informasi dan produk kebudayaan, persediaan alat untuk mengirimkan atau mendistribusikan produk-produk ini dan juga data atau kegiatan komunikasi, informasi, teknologi informasi dan pengolahan data serta kegiatan jasa informasi lainnya. Termasuk penerbitan yang mencakup perolehan hak cipta untuk isinya (produk informasi) dan membuat isinya tersedia ke masyarakat umum dengan cara atau melalui reproduksi dan distribusi dalam berbagai bentuk. Semua bentuk yang layak dari penerbitan (dalam bentuk cetakan, elektronik atau audio pada internet seperti produk multimedia seperti buku reforensi cd room dan lain-lain) dicakup dalam kategori ini. Kategori ini terdiri dari 6 subkategori, yaitu:
1. Penerbitan
Golongan pokok ini mencakup penerbitan buku, brosur, leaflet, kamus, ensiklopedia, atlas, peta dan grafik; penerbitan surat kabar, jurnal dan majalah atau tabloid; direktori dan daftar alamat serta penerbitan lainnya, termasuk penerbitan piranti lunak. Semua bentuk penerbitan (cetakan, elektronik atau audio, pada internet, sebagai produk multimedia seperti CD-ROM buku referensi dan lain-lain) dicakup dalam golongan pokok ini, kecuali penerbitan gambar bergerak atau film (golongan pokok 59).

2. Produksi gambar bergerak, video dan program televisi, perekaman suara dan penerbitan musik
Golongan pokok ini mencakup pembuatan gambar bergerak baik pada film, video tape atau disk untuk diputar dalam bioskop atau untuk siaran televisi, kegiatan penunjang seperti editing, cutting, dubbing film dan lain-lain, pendistribusian dan pemutaran gambar bergerak dan produksi film lainnya untuk industri lain. Pembelian dan penjualan hak distribusi gambar bergerak dan produksi film lainnya, tercakup di sini. Golongan pokok ini juga mencakup kegiatan perekaman suara, yaitu produksi perekaman master suara asli, merilis, mempromosikan dan mendistribusikannya, penerbitan musik seperti kegiatan jasa perekaman suara dalam studio atau tempat lain. 

3. Penyiaran dan pemrograman
Golongan pokok ini mencakup pembuatan muatan atau isi siaran atau perolehan hak untuk menyalurkannya dan kemudian menyiarkannya, seperti radio, televisi dan program hiburan, berita, perbincangan dan sejenisnya. Juga termasuk penyiaran data, khususnya yang terintegrasi dengan penyiaran radio atau TV. Penyiaran dapat dilakukan dengan menggunakan teknologi yang berbeda, melalui udara, satelit, jaringan kabel atau melalui internet. Termasuk produksi dari program yang khususnya memberikan informasi dasar pada kalangan tertentu dengan format yang terbatas, seperti program berita, olahraga, pendidikan dan program yang ditujukan untuk anak muda atas dasar berlangganan atau biaya, pada pihak ke tiga, untuk penyiaran berikutnya ke masyarakat. Tidak termasuk program berlangganan dengan atau tanpa kabel lainnya (Golongan Pokok 61).

4.Telekomunikasi
Golongan pokok ini mencakup kegiatan penyediaan telekomunikasi dan kegiatan jasa ybdi yaitu pemancar suara, data, naskah, bunyi dan video. Fasilitas transmisi yang melakukan kegiatan ini dapat berdasar pada teknologi tunggal atau kombinasi dari berbagai teknologi. Umumnya kegiatan yang diklasifikasikan dalam golongan pokok ini adalah transmisi dari isi, tanpa terlibat dalam proses pembuatannya. Golongan pokok ini diuraikan atas dasar jenis infrastruktur yang digunakan. Dalam hal transmisi sinyal televisi ini dapat mencakup penggabungan saluran program lengkap (dalam golongan pokok 60) dalam paket program untuk pendistribusian.

5.Kegiatan pemrograman, konsultasi computer dan kegiatan YBDI
Golongan pokok ini mencakup kegiatan penyediaan jasa keahlian di bidang teknologi informasi, seperti penulisan, modifikasi, pengujian dan pendukung piranti lunak; perencanaan dan perancangan sistem komputer yang mengintegrasikan perangkat keras komputer, piranti lunak komputer dan teknologi komunikasi; manajemen dan pengoperasian sistem komputer klien dan/atau fasilitas pengolahan data di tempat klien serta kegiatan profesional lainnya dan kegiatan yang berhubungan dengan teknis komputer.

6.Kegiatan jasa informasi
Golongan pokok ini mencakup kegiatan \""web search portal\"", pengolahan data dan \""hosting\"", dan juga kegiatan lain yang utamanya penyediaan informasi.'
			],
            [
                'dataKey' => '303. k',
                'label' => 'Aktivitas keuangan & asuransi',
                'definisi' => 'Mencakup jasa keuangan, termasuk asuransi, reasuransi dan kegiatan dana pensiun dan jasa penunjang keuangan. Kategori ini juga mencakup kegiatan dari pemegang aset, seperti kegiatan perusahaan holding dan kegiatan dari lembaga penjaminan atau pendanaan dan lembaga keuangan sejenis. Kategori ini terdiri dari 3 subkategori, yaitu:
1. Jasa keuangan, bukan asuransi dan dana pension
2. Asuransi, reasuransi dan dana pensiun, bukan jaminan sosial wajib
3. Jasa penunjang jasa keuangan, asuransi dan dana pensiun'
			],
            [
                'dataKey' => '303. l',
                'label' => 'Real estat',
                'definisi' => 'Mencakup kegiatan orang yang menyewakan, agen dan atau broker/perantara dalam penjualan atau pembelian real estat, penyewaan real estat dan penyediaan jasa real estat lainnya, seperti jasa penaksir real estat atau bertindak sebagai agen pemegang wasiat real estat. Kegiatan dalam kategori ini bisa dilakukan atas milik sendiri atau milik orang lain yang disewa dan bisa dilakukan atas dasar balas jasa atau kontrak. Termasuk kegiatan pembangunan gedung, yang disatukan dengan pemeliharaan atau penyewaan bangunan tersebut. Kategori ini mencakup pengelola bangunan real estat. Real estat adalah properti berupa tanah dan bangunan.'
			],
            [
                'dataKey' => '303. m',
                'label' => 'Aktivitas profesional, ilmiah, dan teknis',
                'definisi' => 'Mencakup khususnya kegiatan profesional, ilmu pengetahuan dan teknik, kegiatan ini membutuhkan suatu tingkat pelatihan yang tinggi dan menghasilkan ilmu pengetahuan dan ketrampilan khusus yang tersedia untuk pengguna. Kategori ini terdiri dari 6 subkategori, yaitu:
1. Jasa hukum dan akuntansi
Golongan pokok ini mencakup kegiatan perwakilan hukum suatu kepentingan kelompok melawan kelompok lain, apakah sebelum persidangan atau tidak atau lembaga persidangan lain atau di bawah pengawasan, orang yang menjadi golongan pengacara, seperti perwakilan dan penasihat hukum untuk kasus sipil, perwakilan dan penasihat hukum dalam kasus kriminal, perwakilan dan penasihat hukum yang berkaitan dengan perselisihan tenaga kerja. Golongan pokok ini juga mencakup kegiatan penyiapan dokumen hukum seperti hukum penggabungan, perjanjian kerjasama atau dokumen sejenis dalam kaitannya dengan pembentukan perusahaan, paten dan copyright, penyiapan akte, surat wasiat, surat kuasa dan lain-lain seperti halnya kegiatan lain notaris publik, notaris hukum sipil, juru sita/bailift, juru pisah atau arbitrator, penguji atau pemeriksa dan wasit. Juga mencakup kegiatan jasa akuntansi dan pembukuan seperti pengauditan catatan akuntansi, perancangan sistem akuntansi, persiapan pembukuan dan laporan keuangan.

2. Kegiatan kantor pusat dan konsultasi manajemen
Golongan pokok ini mencakup kegiatan penyediaan nasihat dan bantuan untuk usaha dan organisasi lain pada persoalan manajemen, seperti rencana strategi dan organisasional pembiayaan dan rencana keuangan, kebijakan dan tujuan pemasaran, rencana, praktik dan kebijakan sumber daya manusia, jadwal produksi dan rencana pengawasan. Golongan pokok ini juga mencakup kegiatan pengelolaan dan pengawasan unit lain dalam satu perusahaan atau enterpris, sebagai salah satu kegiatan kantor pusat.

3. Jasa arsitektur dan teknik sipil, analisis dan uji teknis
Golongan pokok ini mencakup kegiatan penyediaan jasa arsitektur, jasa teknik mesin, jasa drafting, jasa inspeksi bangunan dan jasa pengukuran tanah (surveying) dan jasa pembuatan peta (mapping). Golongan pokok ini juga mencakup kegiatan pelaksanaan jasa pengujian fisik, kimiawi dan analisis lainnya.

4. Penelitian dan pengembangan ilmu pengetahuan
Golongan pokok ini mencakup tiga jenis kegiatan penelitian dan pengembangan : (1) penelitian dasar, yaitu pekerjaan teoritikal dan eksperimental yang dilakukan terutama untuk mendapatkan ilmu pengetahuan baru dari pondasi dasar fenomena dan fakta yang terobservasi, tanpa aplikasi fakta-fakta atau penggunaan yang disebabkan olehnya, (2) penelitian aplikasi, yaitu investigasi original yang dilakukan dalam rangka mendapatkan ilmu pengetahuan baru, terutama tertuju langsung pada maksud dan tujuan praktis tertentu, dan (3) pengembangan eksperimental, yaitu pekerjaan sistematis, menghasilkan ilmu pengetahuan yang didapat dari penelitian dan atau pengalaman praktis, tertuju langsung pada menghasilkan material baru atau layanan baru dan untuk meningkatkan substansi dari yang sudah dihasilkan atau dipasang. Kegiatan penelitian dan pengembangan eksperimental pada golongan pokok ini terbagi ke dalam dua, yaitu ilmu pengetahuan alam dan teknik dan ilmu pengetahuan sosial dan humaniora. Golongan pokok ini tidak mencakup penelitian pemasaran.

5. Periklanan dan penelitian pasar
Golongan pokok ini mencakup kegiatan pembuatan dan penempatan iklan, seperti iklan di majalah, surat kabar, radio dan televisi atau media lain dan perancangan struktur dan tempat pamer.

6. Jasa professional, ilmiah dan teknis lainnya
Golongan pokok di sini mencakup penyediaan jasa ilmu pengetahuan dan teknisi profesional (kecuali kegiatan hukum dan akuntansi; kegiatan arsitek dan teknik sipil; uji dan analisis secara teknis; manajemen dan kegiatan konsultasi manajemen; penelitian dan pengembangan serta kegiatan periklanan). Kegiatan penulis untuk semua subyek mencakup penulis fiksi, teknis dan lain-lain diklasifikasikan dalam subgolongan 9000.

7. Jasa kesehatan hewan
Golongan pokok ini mencakup penyediaan perawatan kesehatan hewan dan kegiatan pengawasan untuk hewan ternak dan hewan piaraan dilakukan oleh dokter hewan berkualitas pada rumah sakit hewan, seperti halnya ketika mengunjungi peternakan, kandang atau rumah atau di tempat lain. Di sini juga mencakup pengobatan klinik hama penyakit dan kegiatan diagnostik lainnya dari asisten dokter hewan atau personil lainnya dan kegiatan ambulans hewan.'
			],
            [
                'dataKey' => '303. n',
                'label' => 'Aktivitas penyewaan dan sewa guna tanpa hak opsi, ketenagakerjaan, agen perjalanan, dan penunjang usaha lainnya',
                'definisi' => 'Kategori ini mencakup berbagai macam kegiatan yang mendukung operasional usaha atau bisnis secara umum. Kegiatan ini berbeda dari kegiatan yang termasuk dalam kategori M, karena tujuan utamanya bukanlah transfer ilmu pengetahuan khusus. Kategori ini mencakup 6 subkategori, yaitu:
1. Jasa persewaan dan sewa guna usaha tanpa hak opsi
2. Jasa ketenagakerjaan
3. Jasa agen perjalanan, penyelenggara tur dan jasa reservasi lainnya
4. Jasa keamanan dan penyelidikan
5. Jasa untuk gedung dan pertamanan
6. Jasa administrasi kantor, jasa penunjang kantor dan jasa penunjang usaha lainnya'
			],
            [
                'dataKey' => '303. o',
                'label' => 'Administrasi pemerintahan, pertahanan, dan jaminan sosial wajib',
                'definisi' => 'Mencakup kegiatan yang sifatnya pemerintahan, yang umumnya dilakukan oleh administrasi pemerintahan. Kategori ini juga mencakup perundang-undangan dan penerjemahan hukum yang berkaitan dengan pengadilan dan menurut peraturannya, seperti halnya administrasi program berdasarkan peraturan perundangan-undangan, kegiatan legislatif, perpajakan, pertahanan negara, keamanan dan keselatan negara, pelayanan imigrasi, hubungan luar negeri dan administrasi program pemerintah. Kategori ini juga mencakup kegiatan jaminan sosial wajib. Status hukum atau institusi bukanlah, (termasuk didalamnya) faktor penentu bagi suatu kegiatan termasuk kategori ini dari pada kegiatan yang sudah disebutkan sebelumnya. Hal ini dimaksudkan bahwa kegiatan yang diklasifikasikan di tempat lain dalam KBLI tidak termasuk pada kategori ini, meskipun juga dilakukan oleh Badan pemerintahan. Sebagai contoh, administrasi sistem sekolah (peraturan, pemeriksaan, dan kurikulum) termasuk pada kategori ini, tetapi pengajaran itu sendiri tidak (kategori P), dan rumah sakit penjara atau militer diklasifikasikan pada kategori kesehatan (Q). Demikian pula, beberapa kegiatan yang disebutkan pada kategori ini mungkin saja dilakukan oleh selain badan pemerintah.'
			],
            [
                'dataKey' => '303. p',
                'label' => 'Pendidikan',
                'definisi' => 'Mencakup kegiatan pendidikan pada berbagai tingkatan dan untuk berbagai pekerjaan, baik secara lisan atau tertulis seperti halnya dengan berbagai cara komunikasi. Kategori ini juga mencakup pendidikan yang diselenggarakan oleh institusi yang berbeda dalam sistem sekolah umum pada tingkat yang berbeda-beda seperti halnya pendidikan untuk usia dewasa, program literasi dan lain-lain. Juga mencakup akademi dan sekolah militer, sekolah penjara dan lain-lain sesuai dengan tingkatan masing-masing. Untuk setiap tingkat pendidikan pertama, kelompok ini mencakup pendidikan khusus termasuk siswa cacat baik mental atau fisik. Kategori ini mencakup pendidikan negeri dan swasta juga mencakup pengajaran yang terutama mengenai kegiatan olahraga dan hiburan dan kegiatan penunjang pendidikan. Pendidikan dapat disediakan dalam ruangan, melalui penyiaran radio dan televisi, internet dan surat menyurat.'
			],
            [
                'dataKey' => '303. q',
                'label' => 'Aktivitas kesehatan manusia dan aktivitas sosial',
                'definisi' => 'Mencakup kegiatan penyediaan jasa kesehatan dan kegiatan sosial. Kegiatan yang termasuk cukup luas cakupannya, dimulai dari pelayanan kesehatan yang diberikan oleh tenaga profesional terlatih di rumah sakit dan fasilitas kesehatan lain, sampai kegiatan perawatan di rumah yang melibatkan tingkatan kegiatan pelayanan kesehatan sampai kegiatan sosial yang tidak melibatkan tenaga kesehatan profesional. Kategori ini mencakup 3 subkategori, yaitu:
1. Jasa kesehatan manusia
Golongan pokok ini mencakup kegiatan berbagai macam rumah sakit dan lembaga medis, baik rumah sakit umum atau spesialis dan lembaga kesehatan masyarakat dengan fasilitas penginapan, yang berkaitan dengan penyediaan pengobatan medis dan diagnostik untuk pasien dalam berbagai kondisi medis. Golongan pokok ini juga mencakup pengobatan dan konsultasi kesehatan dengan menggunakan obat-obatan untuk penyakit biasa atau khusus oleh dokter praktik umum dan dokter spesialis dan dokter bedah, termasuk kegiatan kegiatan praktik dokter gigi umum atau khusus dan kegiatan orthodontik. Golongan pokok ini mencakup kegiatan pelayanan kesehatan yang dilakukan paramedik yang secara sah diketahui dapat merawat pasien juga mencakup kegiatan yang dilakukan unit-unit yang berkaitan dengan pelayanan pengobatan alternatif. Klasifikasi turunannya adalah jasa rumah sakit, jasa praktik dokter dan dokter gigi, dan jasa pelayanan Kesehatan lainnya.

2. Jasa kegiatan sosial di dalam panti
Golongan pokok ini mencakup penyediaan jasa kegiatan sosial di dalam panti yang dikombinasikan baik dengan perawatan, pengawasan atau perawatan lain yang diperlukan oleh penghuni panti. Fasilitas perawatan merupakan bagian yang signifikan dari proses produksi dan perawatan yang disediakan adalah gabungan antara kegiatan sosial dan kesehatan di mana jasa kesehatan merupakan tingkatan yang lebih besar dari kegiatan perawatan. Jasa yang termasuk dalam subkategori ini antara lain jasa kegiatan sosial di dalam panti untuk perawatan dan pemuliham, jasa kegiatan sosial di dalam panti untuk keterbelakangan mental, gangguan mental dan penyalahgunaan onat terlarang, jasa kegiatan sosial di dalam panti untuk jompo dan cacat, serta jasa kegiatan sosial di dalam panti.

3. Jasa kegiatan sosial di luar panti
Golongan pokok ini mencakup penyediaan jasa kegiatan sosial di luar panti yang meliputi berbagai jasa bantuan sosial untuk masyarakat. Kegiatan di sini tidak mencakup jasa penginapan, kecuali pada hal yang sementara. Jasa yang termasuk subkategori ini antara lain jasa kegiatan sosial di luar panti untuk jompo dan cacat dan lainnya.'
			],
            [
                'dataKey' => '303. r',
                'label' => 'Kesenian, hiburan, dan rekreasi',
                'definisi' => 'Mencakup kegiatan yang cukup luas untuk memenuhi kebutuhan kesenian/kebudayaan, hiburan dan rekreasi masyarakat umum, termasuk pertunjukan langsung, pengoperasian tempat bersejarah, tempat perjudian, olahraga dan rekreasi. Kategori ini mencakup 4 subkategori, yaitu:
1. Kegiatan hiburan, kesenian dan kreativitas
Golongan pokok ini mencakup kegiatan pengoperasian fasilitas dan penyediaan jasa untuk memenuhi kebutuhan kesenian/kebudayaan, hiburan dan rekreasi dari masyarakat. Golongan pokok ini mencakup kegiatan produksi dari berbagai pertunjukan, perlombaan atau pameran yang ditujukan untuk dilihat masyarakat. Golongan pokok ini mencakup pengoperasian fasilitas seni dan kegiatan keartisan, profesional, produser atau promotor, pertunjukan langsung seni, dengan atau tanpa fasilitas.

2. Perpustakaan, arsip, museum dan kegiatan kebudayaan lainnya
Golongan pokok ini mencakup kegiatan dan pengoperasian perpustakaan, arsip, museum, kebun raya dan kebun binatang, tempat bersejarah, taman konservasi alam, pameran dan pemeliharaan barang barang seni dan bersejarah, situs dan keajaiban alam yang mengandung unsur sejarah, budaya dan pendidikan.

3. Kegiatan perjudian dan pertaruhan
Golongan pokok ini mencakup kegiatan pengoperasian fasilitas penjudian seperti kasino, arena bingo dan terminal video game dan penyediaan layanan penjudian seperti lotere dan off-track betting.

4. Kegiatan olahraga dan rekreasi lainnya
Golongan pokok ini mencakup penyediaan kegiatan olahraga, kesenangan dan rekreasi, kecuali kegiatan museum, pemeliharaan tempat bersejarah, kebun raya dan kebun binatang, konservasi alam dan kegiatan penjudian dan pertaruhan.'
			],
            [
                'dataKey' => '303. s',
                'label' => 'Aktivitas jasa lainnya',
                'definisi' => 'Mencakup kegiatan dari keanggotaan organisasi, reparasi komputer dan barang-barang rumah tangga dan barang pribadi, berbagai kegiatan jasa perorangan yang tidak dicakup di tempat lain dalam klasifikasi ini. Kategori ini mencakup 3 subkategori, yaitu:
1. Kegiatan keanggotaan organisasi
Golongan pokok ini mencakup kegiatan organisasi yang mewakili kepentingan kelompok khusus atau memperjuangkan ide atau gagasan organisasi kepada masyarakat umum. Orgnisasi seperti ini umumnya mempunyai anggota pada suatu daerah, tetapi kegiatan dapat melibatkan atau bermanfaat bagi bukan anggota maupun anggotanya. Uraian utama dari golongan pokok ini ditentukan oleh tujuan pelayanan organisasi, yaitu kepentingan bisnis, pengusaha dan komunitas ilmu pengetahuan atau profesional (golongan 941), kepentingan buruh (942) atau organisasi keagamaan atau politik, kebudayaan, pendidikan atau rekreasi atau hiburan (949).

2. Jasa reparasi computer dan barang keperluan pribadi dan perlengkapan rumah tangga
Golongan pokok ini mencakup kegiatan reparasi dan perawatan perangkat komputer dan perlengkapannya seperti desktop, laptop, terminal komputer, printer dan perangkat penyimpan, golongan pokok ini mencakup kegiatan reparasi peralatan komunikasi seperti mesin faks, radio dua arah dan barang elektronik konsumen, seperti radio dan televisi, peralatan kebun dan rumah seperti mesin potong rumput dan blower, alas kaki dan barang dari kulit, furnitur dan peralatan rumah tangga, pakaian jadi dan aksesori pakaian, barang untuk olahraga, instrumen atau alat musik, barang untuk kegemaran atau hobi dan barang rumah tangga dan barang keperluan pribadi. Golongan pokok ini tidak mencakup kegiatan reparasi peralatan medis dan image diagnostik, instrumen pengukuran dan survei, laboratorium, peralatan radar dan sonar.

3. Jasa perorangan lainnya
Golongan pokok ini mencakup kegiatan jasa perorangan lain yang tidak termasuk dimanapun dalam klasifikasi ini, seperti pencucian atau loundri produk tekstil dan kulit berbulu, penataan rambut dan perawatan kecantikan lain, jasa pemakaman dan jasa lainnya yang terkait dengan pemakaman. Jasa lainnya yang berkaitan mencakup salon dan tempat pemandian, jasa sosial perorangan, kegiatan spiritual dan astrologi, jasa perawatan hewan peliharaan dan operasi konsesi mesin layanan perorangan yang bekerja dengan menggunakan koin.'
			],
            [
                'dataKey' => '303. t',
                'label' => 'Aktivitas keluarga sebagai pemberi kerja',
                'definisi' => 'Kategori ini mencakup kegiatan yang memanfaatkan jasa perorangan dalam melayani rumah tangga, dan kegiatan yang menghasilkan barang dan jasa oleh rumah tangga yang digunakan sendiri untuk memenuhi kebutuhan. Kategori ini mencakup 2 subkategori, yaitu:
1. Jasa perorangan yang melayani rumah tangga
2. Kegiatan yang menghasilkan barang dan jasa oleh rumah tangga yang digunakan sendiri untuk memenuhi kebutuhan'
			],
            [
                'dataKey' => '303. u',
                'label' => 'Aktivitas badan internasional dan badan ekstra internasional lainnya',
                'definisi' => 'Kategori ini mencakup kegiatan Badan Internasional, seperti Perserikatan Bangsa-Bangsa dan perwakilan Perserikatan Bangsa-Bangsa, Badan Regional dan lain-lain, termasuk The International Monetary Fund, The World Bank, The World Customs Organization (WHO), the Organization for Economic Co-operation and Development (OECD), the Organization of Petroleum Exporting Countries (OPEC), the European Communities, the European Free Trade Association dan lain-lain. Kategori ini mencakup kegiatan perwakilan diplomatik dan konsulat (Kedutaan Besar) yang ditentukan oleh negara dimana berada daripada negara yang diwakilinya.'
			],
            [
                'dataKey' => '304. a',
                'label' => 'Jenis sub sektor utama sebagian besar penduduk pekon/kelurahan: 
Tanaman Pangan - 1
Tanaman Hortikultura - 2 
Tanaman Perkebunan - 3 
Peternakan - 4
Perikanan - 5
Kehutanan - 6
Jasa Pertanian - 7',
                'definisi' => 'Rincian ini terisi jika R403a berkode â€˜1â€™ yaitu lapangan usaha pertanian, kehutanan, dan perikanan. Isikan jenis komoditi/sub sektor pertanian sebagian besar keluarga sebagai sumber penghasilan utama. Jenis komoditi/sub sektor pertanian antara lain meliputi:
1) Tanaman pangan
Tanaman pangan dikelompokkan berdasarkan umur, yaitu tanaman semusim dan tanaman tahunan.
(1) Pertanian Padi: padi ladang, padi sawah hibrida, padi sawah inhibrida
(2) Pertanian Palawija: jagung, kedelai, kacang tanah, kacang hijau, ubi, sorgum, gandum, talas, ganyong, kimpul, porang, gembili, gadung, juwawut, kacang merah, sereklia, oat, dan millet.

2) Tanaman hortikultura
Pada dasarnya, aktivitas hortikultura merupakan cara berkebun domestik dengan bentuk budidaya alami seperti pertanian besar. Tanaman hortukultura lebih sering mengarah pada produk-produk yang bisa dikonsumsi atau tanaman kebun, seperti buah-buahan. sayuran, dan tanaman hias. Sub sektor utama ini mencakup:
(1) Tanaman buah-buahan tahunan: alpukat, anggur, apel, belimbing, buah naga, srikaya, cempedak, duku, durian, jambu air, jambu biji, jeruk siam, jeruk keprok, kedondong, kesemek, langsat, lengkeng, mangga, marjisam matoa, Nangka, nanas, papaya, pisang.rambutan, salak, sawo, sirsak, sukun, terong
(2) Tanaman buah-buahan semusim: blewah, melon, melon, mentimum suri, semangka, stroberi, bengkoang,
(3) Tanaman sayuran tahunan: blimbing wuluh, jengkol, kluwih, melinjo, petai, kelor
(4) Tanaman sayuran semusim: asparagus, bawang Bombay, bawang daun, bawang merah, bawang putih, bayem, brokoli, buncis, cabai, jamur, kiacang kapri, kacang Panjang, kailan, kangkong, kembang kol, kentang, labu siam, lobak, ketimun, oyong, pare, paprika, sawi, selederi, wortel, tomat, leunca, edamame, sawi putih, pak choi.
(5) Tanaman obat tahunan: daun ungu, jati, lavender, kapulaga, mahkota dea, pace, salam, sereh, sirih, sembung, cincau, jeruk nipis.
(6) Tanaman obat semusim: brotowali, jahe putih, jahe merah, kencur, kunyit, kumis kucing, lengkuas, pepagan, selasih, temulawak, jahe, lidah buaya, pejagan, kemangi, temu kunci, sambiloto
(7) Tanaman hias tahunan: bunga anthurium bunga, anthurium daun, bambu, bougenviil, caladium, euphorbia, Kaktus, ponix, polyscias, ixora, tabulampoat,
(8) Tanaman hias semusim: drasena, fitonia, glasiol, hebras, kalla, kamboja jepang, kecombrang, krisan, lantana, mawar, Melati, monstra, nanas, palm, pisang-pisangan, pakis-pakisan, rose Bombay, pedang-pedangan, sirih, sedap malam, bunga lili, talas, vanda, dll,

3) Perkebunan,
(1) Perkebunan tahunan: aren, asam jawa, cengkeh, gambir, jambu mete, jarak pagar, kakao, kapok, karet, kayu manis, kelapa sawit, kelapa, kemenyan, kemiri, kenanga, kina, klerek, kopi, lada, lontar, vanili, pala, pandan, pinang/jambe,sagu, soga, teh, andaliman, gayam kurma, kelapa (nira)
(2) Perkebunan semusim: abaca/manila, akar wangi, jute, kapas, kenaf, nilam, rami/haramay, rosela, sereh wangi, tebu, tembakau, rumput gajah, sisal.
 
4) Kehutanan mencakup penebangan pohon untuk diambil kayunya serta pengambilan dan pemungutan hasil hutan selain kayu yang tumbuh liar. Di samping menghasilkan kayu, kegiatan kehutanan menghasilkan produk melalui proses sederhana, seperti kayu bakar, arang kayu, serbuk kayu dan kayu gelondongan dalam bentuk yang belum diolah (misalnya pitprops/kayu untuk bahan atap, bubur kayu dan lain-lain). Kegiatan ini dapat dilakukan di hutan alam yang belum diusahakan atau di hutan yang sudah diusahakan. Termasuk juga penebangan dan penanaman pohon bakau. Subgolongannya antara lain:
- Pengusahaan hutan jati, pinus, mahoni, sonokeling, albasia/jeunjing, cendana, akasia, ekaliptus, pengusahaan tanaman gmelina, jabon dan tanaman belukar.
- Pengusahaan rotan, getah pinus, daun kayu putih, bambu, damar, gaharu,
- Usaha pemungutan kayu, termasuk pengumpulan dan produksi kayu bakar
- Pemungutan getah karet, rotan, getah pinus, daun kayu putih
- Pemungutan kokon/kepompong ulat sutera, damar, madu, bambu, pemungutan gumpalan shellak, jernang, daun ekaliptus, kulit kayu lawang dan kayu manis, kenanga, daun/kulit/ranting cendana, kopal, pandan, purun dan lainnya
- Kegiatan jasa kehutanan, seperti inventarisasi kehutanan, jasa konsultasi manajemen kehutanan atau tataguna lahan, perlindungan hutan dan pelestarian alam, reboisasi dan rehabilitasi, pengevaluasian kayu, pemadaman kebakaran hutan dan pengendalian hama
- Kegiatan jasa penebangan kayu, seperti pengangkutan kayu di dalam hutan
- Jasa kehutanan bidang penggunaan Kawasan hutan/planologi dalam rangka penyiapan data dasar pengelolaan hutan, seperti survei pendahuluan dan survei ulang dalam rangka penilaian potensi, pengukuran dan penataan batas hutan dan penafsiran potret udara
- Kegiatan perlindungan hutan dan konservasi alam, seperti jasa ANDAL/PIL (Pemantauan Informasi Lingkungan), UKL (Usaha Kelola Lingkungan), UPL (Usaha Pemantauan Lingkungan).
- Rehabilitasi lahan dan kehutanan sosial baik di dalam maupun kawasan hutan.

5) Perikanan
Golongan pokok ini mencakup penangkapan dan budidaya ikan, jenis crustacea (seperti udang, kepiting) moluska, dan biota air lainnya di laut, air payau dan air tawar. Tidak termasuk pemancingan untuk rekreasi.

6) Peternakan
Golongan ini mencakup budidaya dan pembibitan hewan ternak, unggas, serangga, binatang melata/reptil, cacing, hewan peliharaan. Termasuk budidaya hewan untuk diambil hasilnya seperti bulu, telur, susu, madu dan lilin lebah dan kepompong ulat sutera.

7) Jasa Pertanian
Jasa penunjang pertanian dan pasca panen mencakup kegiatan penunjang dalam memproduksi hasil pertanian dan kegiatan sejenis untuk pertanian yang tidak dilakukan untuk keperluan produksi atas dasar balas jasa (fee) atau kontrak, termasuk jasa pemanenan dan pasca panen, serta menyiapkan hasil pertanian untuk dijual ke pasar.
Subgolongan jasa penunjang pertanian mencakup:
- Jasa penyiapan lahan pertanian
- Jasa penanaman lahan pertanian
- Jasa pemeliharaan lahan pertanian
- Jasa penyiraman lahan pertanian, termasuk penyiraman lahan melalui udara
- Jasa perapihan (trimming) pohon buah dan anggur
- Jasa transplantasi padi dan bit
- Jasa pemanenan
- Jasa pengendalian hama (termasuk kelinci) dalam hubungannya dengan pertanian
- Jasa pengoperasian peralatan irigasi pertanian
- Jasa penyediaan perlengkapan mesin pertanian dengan operator
- Jasa pemeliharaan kondisi lahan agar baik digunakan untuk pertanian
Subgolongan jasa pasca panen mencakup usaha pasca panen meliputi usaha penyiapan hasil panen pertanian untuk dijual, seperti pembersihan, sortasi, pengupasan, pengeringan dengan sinar matahari dan pengepakan dari macam-macam hasil pertanian atas dasar balas jasa (fee) atau kontrak. Termasuk usaha disinfektan hasil panen, pemisahan biji kapas, penyiapan daun tembakau, penyiapan biji cokelat dan pemberian lilin pada buah-buahan.'
			],
            [
                'dataKey' => '304. b',
                'label' => 'Komoditas utama dari sub sektor utama sebagian besar penduduk pekon/kelurahan',
                'definisi' => 'Rincian ini digunakan untuk mengetahui komoditas utama dari sub sektor utama sebagian besar penduduk desa/kelurahan. Komoditas utama diukur dari banyaknya hasil produksi (kuantitas). Jika dua komoditas menghasilkan produksi yang sama banyaknya, maka selanjutnya bandingkan nilai penjualan yang paling besar. Misalnya: sebagian besar penduduk desa A bekerja di sub sektor utama perkebunan, diantaranya perkebunan teh, kopi, karet dan kelapa. Namun, hasil panen paling banyak adalah teh sehingga komoditas utama yang tercatat adalah teh. Iiskan kode 4 digit sub sektor utama.'
			],
            [
                'dataKey' => '401. a',
                'label' => 'Jumlah keluarga pengguna listrik:
1. PLN (Perusahaan Listrik Negara) 
2. Non-PLN (misalnya: swasta, swadaya, atau perseorangan)',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui penggunaan listrik oleh masyarakat, dengan adanya listrik di desa/kelurahan maka mengindikasikan bahwa desa/kelurahan tersebut sudah tidak terlalu terisolir. Untuk melihat kewajaran isian maka jumlah keluarga pengguna listrik pada isian R501a tidak boleh melebihi R401c.
1. Keluarga pengguna listrik Perusahaan Listrik Negara (PLN) adalah keluarga pengguna/ pelanggan listrik yang disalurkan oleh PLN, dengan atau tanpa meteran resmi dari PLN. PLTA Swasta yang listriknya dialirkan ke rumah-rumah melalui jaringan PLN termasuk listrik PLN.
2. Keluarga pengguna listrik non-PLN adalah keluarga pengguna/pelanggan listrik selain PLN, misalnya diesel/generator, listrik diusahakan oleh pemerintah daerah, swasta, atau listrik swadaya masyarakat.'
			],
            [
                'dataKey' => '401. b',
                'label' => 'Jumlah keluarga bukan pengguna listrik',
                'definisi' => 'Keluarga bukan pengguna listrik adalah keluarga yang tidak menggunakan listrik sebagai sumber energi untuk penerangan rumah.'
			],
            [
                'dataKey' => '402',
                'label' => 'Keberadaan Tempat Penampungan Sementara (TPS):
Ada, digunakan - 1 Ada, tidak digunakan - 2 Tidak ada - 3',
                'definisi' => 'TPS3R adalah tempat dilaksanakannya kegiatan pengumpulan, pemilahan, penggunaan ulang, pendauran ulang dan pengolahan skala Kawasan (UU Nomor 18 Tahun 2008 Tentang Pengelolaan Sampah).'
			],
            [
                'dataKey' => '403. a',
                'label' => 'Wilayah pekon/kelurahan dilalui Saluran Udara Tegangan Ekstra Tinggi (SUTET) / Saluran Udara Tegangan Tinggi (SUTT) / Saluran Udara Tegangan Tinggi Arus Searah (SUTTAS):
Ya - 1 Tidak - 2 â†’ R404',
                'definisi' => 'a. Rincian ini untuk melihat keberadaan desa/kelurahan yang dilalui oleh saluran udara tegangan tinggi. Yang dimaksud saluran udara tegangan tinggi adalah sarana di atas tanah untuk menyalurkan tenaga listrik dari Pusat Pembangkit ke Gardu Induk (GI) atau dari GI ke GI lainnya yang terdiri dari kawat/konduktor yang direntangkan antara tiang-tiang melalui isolator-isolator dengan sistim tegangan tinggi. Menurut Permen ESDM Nomor 13 Tahun 2021, saluran udara tegangan tinggi ada 3 (tiga) yaitu SUTET, SUTT, dan SUTTAS. Saluran Udara Tegangan Ekstra Tinggi (SUTET) adalah saluran tenaga listrik yang menggunakan kawat telanjang (konduktor) di udara bertegangan nominal diatas 230 kilovolt atau mempunyai tegangan tertinggi untuk perlengkapan di atas 245 kilovolt sesuai dengan standar di bidang ketenagalistrikan.
b. Saluran Udara Tegangan Tinggi (SUTT) adalah saluran tenaga listrik yang menggunakan kawat telanjang (konduktor) di udara bertegangan nominal diatas 35 kilovolt sampai dengan 230 kilovolt sesuai dengan standar di bidang ketenagalistrikan.
c. Saluran Udara Tegangan Tinggi Arus Searah (SUTTAS) adalah saluran tenaga listrik yang menggunakan kawat telanjang di udara bertegangan nominal 250 kilovolt arus searah dan 500 kilovolt arus searah dengan polaritas positif, negatif atau kombinasi dari keduanya.'
			],
            [
                'dataKey' => '403. b',
                'label' => 'Keberadaan permukiman di bawah SUTET/SUTT/SUTTAS:
Ada - 1 Tidak ada - 2 â†’ R404',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui banyaknya lokasi, bangunan rumah, dan keluarga yang bertempat tinggal di bawah SUTET/SUTT/SUTTAS. Lokasi, jumlah bangunan rumah, dan jumlah keluarga yang dicatat pada rincian ini adalah yang berada di bawah lintasan jaringan dan tidak berada pada ruang bebas SUTET/SUTT/SUTTAS.'
			],
            [
                'dataKey' => '403. c',
                'label' => 'Jika ada permukiman di bawah SUTET/SUTT/SUTTAS:
1. Jumlah lokasi 
Sebutkan alamatnya: 
2. Jumlah bangunan rumah
3. Jumlah keluarga (Isian tidak boleh lebih dari isian R301c)',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui banyaknya lokasi, bangunan rumah, dan keluarga yang bertempat tinggal di bawah SUTET/SUTT/SUTTAS. Lokasi, jumlah bangunan rumah, dan jumlah keluarga yang dicatat pada rincian ini adalah yang berada di bawah lintasan jaringan dan tidak berada pada ruang bebas SUTET/SUTT/SUTTAS.'
			],
            [
                'dataKey' => '404',
                'label' => 'Penggunaan sungai, saluran irigasi,danau/waduk/situ/bendungan, dan embung',
                'definisi' => 'Isikan penggunaan sungai, saluran irigasi, danau/waduk/situ/bendungan, dan embung yang berada di wilayah desa/kelurahan tersebut oleh masyarakat (baik warga desa/ kelurahan setempat maupun warga desa/kelurahan lain) pada kotak yang tersedia. Penggunaan sungai, saluran irigasi, danau/waduk/situ/bendungan, dan embung meliputi mandi/cuci, minum/masak, bahan baku air minum, pengairan/irigasi lahan pertanian, pariwisata atau rekreasi (misal adanya fasilitas wisata arung jeram, wisata Sungai Musi, dsb.), perikanan, transportasi, pembangkit listrik, industri/pabrik, dan lainnya. Kotak yang diarsir tidak boleh diisi.'
			],
            [
                'dataKey' => '405',
                'label' => 'a. Jika ada sungai (R404 kolom 2 berkode 1), keberadaan permukiman di bantaran sungai: Ada - 1 Tidak ada - 2 â†’ R406
b. Jika ada permukiman di bantaran sungai:
1. Jumlah lokasi ........ lokasi
2. Jumlah bangunan rumah ........ unit
3. Jumlah keluarga (Isian tidak boleh lebih dari isian R301c) ........ keluarga',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui informasi mengenai keberadaan permukiman di bantaran sungai yang mencakup banyaknya lokasi, bangunan rumah, dan keluarga yang bertempat tinggal di bantaran sungai.
Menurut PP Nomor 38 tahun 2011, bantaran sungai adalah ruang antara tepi palung sungai dan kaki tanggul sebelah dalam yang terletak di kiri dan/atau kanan palung sungai. Garis sempadan sungai sering tertukar dengan bantaran sungai. Jika bantaran sungai hanya memperlihatkan daerah bantaran sungai saat banjir (flood plain), maka sempadan sungai memperlihatkan daerah bantaran sungai ditambah dengan daerah longsoran tebing sungai yang mungkin terjadi.

Garis sempadan adalah garis maya di kiri dan kanan palung sungai yang ditetapkan sebagai batas perlindungan sungai.

Catatan : Jika permukiman dan sungai sudah dipisahkan oleh tanggul atau jalan besar (jalan yang dapat dilewati oleh kendaraan roda 4 atau lebih), maka itu bukan permukiman di bantaran sungai.'
			],
            [
                'dataKey' => '406',
                'label' => 'a. Keberadaan permukiman kumuh (sanitasi lingkungan buruk, bangunan padat dan sebagian besar tidak layak huni): Ada - 1 Tidak ada - 2 â†’ R407
b. Jika ada permukiman kumuh:
1. Jumlah lokasi ........ lokasi
2. Jumlah bangunan rumah ........ unit
3. Jumlah keluarga (Isian tidak boleh lebih dari isian R301c) ........ keluarga',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui informasi mengenai keberadaan permukiman kumuh yang mencakup jumlah lokasi, bangunan rumah, dan keluarga yang bertempat tinggal di permukiman kumuh. Rumah kumuh diartikan rumah yang tidak layak huni, dengan semakin banyaknya rumah kumuh maka desa tersebut semakin miskin.
Menurut Undang-Undang Nomor 1 Tahun 2011 tentang Perumahan dan Kawasan Permukiman, permukiman kumuh adalah permukiman yang tidak layak huni karena ketidakteraturan bangunan, tingkat kepadatan bangunan yang tinggi, dan kualitas bangunan serta sarana dan prasarana yang tidak memenuhi syarat.
Permukiman kumuh biasanya berada di lokasi marjinal (tidak boleh dijadikan sebagai tempat tinggal) misalnya bantaran sungai, pinggiran rel kereta api, sepanjang aliran drainase, di bawah jembatan (layang), pasar, dan sebagainya.
Ciri-ciri umum permukiman kumuh antara lain:
1. Penduduk/bangunan sangat padat,
2. Banyak rumah yang tidak layak huni,
3. Sanitasi lingkungan buruk.'
			],
            [
                'dataKey' => '407',
                'label' => 'Keberadaan dan keaktifan komunitas/kelompok lingkungan hidup (meliputi gerakan lingkungan berkelanjutan, sadar
lingkungan, siaga bencana)
Ada, aktif - 1 Ada, tidak aktif - 2 Tidak ada - 3 â†’ R408',
                'definisi' => 'Rincian ini ditanyakan dengan maksud untuk mengetahui keberadaan komunitas/kelompok masyarakat yang mempunyai rasa kepedulian terhadap lingkungan hidup. Komunitas/kelompok tersebut dapat berupa kelompok gerakan lingkungan berkelanjutan, kelompok sadar lingkungan, kelompok siaga bencana, dan sejenisnya salah satu contohnya adalah Walhi.
1. Ada, aktif, yaitu jika ada komunitas dan ada aktifitasnya.
2. Ada, tidak aktif, yaitu jika ada komunitas, tetapi tidak ada kegiatannya/aktivitasnya.
3. Tidak ada, jika tidak ada komunitas/kelompok lingkungan hidup di desa/kelurahan.'
			],
            [
                'dataKey' => '408',
                'label' => 'Keberadaan lokasi penggalian Golongan C (misalnya: batu kali, pasir, kapur, kaolin, pasir kuarsa, tanah liat,dll.):
Ada - 1 Tidak ada - 2',
                'definisi' => 'Menurut PP Nomor 27 Tahun 1980 tentang Penggolongan Bahan-Bahan Galian, bahan-bahan galian terbagi atas 3 golongan, yaitu:
1. Golongan A, golongan bahan galian yang strategis yaitu:
a. Minyak bumi, bitumen cair, lilin bumi, dan gas alam;
b. Bitumen padat, aspal;
c. Antrasit, batubara, batubara muda;
d. Uranium, radium, thorium, dan bahan-bahan galian radioaktif lainnya;
e. Nikel, kobalt;
f. Timah.

2. Golongan B, golongan bahan galian yang vital yaitu:
a. Besi, mangan, molibden, khrom, wolfram, vanadium, titan;
b. Bauksit, tembaga, timbal, seng;
c. Emas, platina, perak, air raksa, intan;
d. Arsin, antimon, bismut;
e. Yutrium, rhutenium, cerium, dan logam-logam langka lainnya;
f. Berillium, korundum, zirkon, kristal kwarsa;
g. Kriolit, fluorspar, barit;
h. Yodium, brom, khlor, belerang.

3. Golongan C, golongan bahan galian yang tidak termasuk golongan A dan B yaitu:
a. Nitrat, phosphate, garam batu (halite);
b. Asbes, talk, mika, grafit, magnesit;
c. Yarosit, leusit, tawas (alam), oker;
d. Batu permata, batu setengah permata;
e. Pasir kwarsa, kaolin, feldspar, gips, bentonite;
f. Batu apung, tras, obsidian, perlit, tanah diatome, tanah serap (fullers earth);
g. Marmer, batu tulis;
h. Batu kapur, dolomite, kalsit;
i. Granit, andesit, basal, trakhit, tanah liat, dan pasir sepanjang tidak mengandung unsur-unsur mineral golongan A dan golongan B dalam jumlah yang berarti ditinjau dari segi ekonomi pertambangan.
Penjelasan : Lokasi penggalian C dimaksud adalah tempat dilakukannya kegiatan penggalian golongan C baik yang kegiatannya aktif atau tidak, maupun yang memiliki surat perizinan atau tidak.'
			],
            [
                'dataKey' => '501',
                'label' => 'Kejadian/bencana alam(mengganggu kehidupan dan menyebabkan kerugian bagi masyarakat) yang terjadi
a. Tanah longsor
b. Banjir
c. Banjir bandang
d. Gempa bumi
e. Tsunami
f. Gelombang pasang laut
g. Angin puyuh/putting beliung/topan
h. Gunung meletus
i. Kebakaran hutan dan lahan
j. Kekeringan (lahan)
k. Abrasi',
                'definisi' => 'Rincian ini untuk mengetahui kejadian/bencana alam yang mengganggu kehidupan dan menyebabkan kerugian bagi masyarakat di desa/kelurahan. Undang-Undang Nomor 24 Tahun 2007 tentang Penanggulangan Bencana menyebutkan bahwa bencana adalah peristiwa atau rangkaian peristiwa yang mengancam dan mengganggu kehidupan dan penghidupan masyarakat yang disebabkan, baik oleh faktor alam dan/atau faktor nonalam maupun faktor manusia sehingga mengakibatkan timbulnya korban jiwa manusia, kerusakan lingkungan, kerugian harta benda, dan dampak psikologis. Sedangkan bencana alam adalah bencana yang diakibatkan oleh peristiwa atau serangkaian peristiwa yang disebabkan oleh alam antara lain berupa gempa bumi, tsunami, gunung meletus, banjir, kekeringan, angin topan, dan tanah longsor.
Jenis bencana alam
a. Tanah longsor adalah salah satu jenis gerakan massa tanah atau batuan, ataupun percampuran keduanya, menuruni atau keluar lereng akibat terganggunya kestabilan tanah atau batuan penyusun lereng.
b. Banjir adalah peristiwa terbenamnya daratan karena volume air yang meningkat. Banjir dapat terjadi karena luapan air yang berlebihan di suatu tempat akibat hujan besar, luapan air sungai atau pecahnya bendungan air. Kejadian banjir yang selalu terjadi di suatu desa/kelurahan karena luapan sungai atau sistem drainase yang buruk, seperti yang terjadi di daerah Marunda, Jakarta Utara tetap dikategorikan sebagai banjir, selama warga di daerah tersebut merasa terganggu dan mengalami kerugian.
c. Banjir bandang adalah banjir yang datang secara tiba-tiba dengan volume yang besar sehingga merusak rumah-rumah penduduk maupun menimbulkan korban jiwa. Banjir bandang disebabkan oleh beberapa faktor seperti karena jebolnya tanggul atau waduk/situ, maupun karena penggundulan hutan.
d. Gempa bumi adalah getaran atau guncangan yang terjadi di permukaan bumi yang disebabkan oleh tumbukan antar lempeng bumi, patahan aktif, akitivitas gunung api, atau runtuhan batuan. Gempa bumi terjadi karena aktivitas tektonik atau vulkanik. Gempa tektonik adalah jenis gempa yang disebabkan oleh pergeseran tanah sedangkan gempa vulkanik adalah jenis gempa yang disebabkan oleh letusan gunung berapi.
e. Tsunami adalah sebuah gelombang/ombak laut yang besar yang terjadi karena gerakan vertikal pada kerak bumi yang diakibatkan oleh gempa bumi, gempa di laut, gunung berapi meletus, atau hantaman meteor di laut. Gerakan vertikal pada kerak bumi dapat menyebabkan dasar laut naik atau turun secara tiba-tiba, yang mengakibatkan gangguan keseimbangan air yang berada di atasnya. Hal ini mengakibatkan terjadinya aliran energi air laut yang ketika sampai di pantai menjadi gelombang besar, yang disebut tsunami. Dampak negatif tsunami adalah merusak apa saja yang dilaluinya, bangunan, tumbuh-tumbuhan, dan mengakibatkan korban jiwa manusia serta menyebabkan genangan, pencemaran air asin lahan pertanian, tanah dan air bersih.
f. Gelombang pasang laut adalah gelombang tinggi yang ditimbulkan karena efek terjadinya siklon tropis di sekitar wilayah Indonesia dan berpotensi kuat menimbulkan bencana alam. Indonesia bukan daerah lintasan siklon tropis tetapi keberadaan siklon tropis akan memberikan pengaruh kuat terjadinya angin kencang, gelombang tinggi disertai hujan deras. Umumnya gelombang pasang terjadi karena adanya angin kencang/topan, perubahan cuaca yang sangat cepat, dan karena ada pengaruh dari gravitasi bulan maupun matahari.
g. Angin puyuh/puting beliung/topan adalah angin kencang yang datang secara tiba-tiba, mempunyai pusat, dan bergerak melingkar menyerupai spiral dengan kecepatan 40-50 km/jam hingga menyentuh permukaan bumi dan akan hilang dalam waktu singkat (3-5 menit).
h. Gunung meletus adalah fenomena alam yang terjadi akibat aktivitas vulkanik di gunung yang menyebabkan magma keluar maupun material vulkanik dari kawah gunung. Dalam hal ini, erupsi yang hanya menyebabkan hujan awan panas juga termasuk kedalam bencana gunung meletus.
i. Kebakaran hutan dan lahan adalah suatu keadaan di mana hutan dan lahan dilanda api, sehingga mengakibatkan kerusakan hutan dan lahan yang menimbulkan kerugian ekonomis dan atau nilai lingkungan. Kebakaran hutan dan lahan seringkali menyebabkan bencana asap yang dapat mengganggu aktivitas dan kesehatan masyarakat sekitar.
j. Kekeringan (lahan) adalah keadaan kekurangan pasokan air pada suatu daerah dalam masa yang berkepanjangan (beberapa bulan hingga bertahun-tahun). Biasanya kejadian ini muncul bila suatu wilayah mengalami musim kemarau yang panjang, yang akhirnya menyebabkan kekeringan karena cadangan air tanah habis akibat penguapan (evaporasi), transpirasi, ataupun penggunaan lain oleh manusia. Bencana kekeringan dapat menyebabkan suatu wilayah kehilangan sumber pendapatan khususnya pada wilayah-wilayah perdesaan yang bergantung pada usaha pertanian. Kekeringan yang singkat tetapi intensif dapat pula menyebabkan kerusakan yang signifikan.
k. Abrasi adalah proses pengikisan pantai oleh tenaga gelombang laut dan arus laut yang bersifat merusak. Abrasi biasanya disebut juga erosi pantai. Kerusakan garis pantai akibat abrasi ini dipicu oleh terganggunya keseimbangan alam daerah pantai tersebut. Walaupun abrasi bisa disebabkan oleh gejala alami, namun manusia sering disebut sebagai penyebab utama abrasi

Rincian 601 Kolom (2) : Kejadian bencana alam
Rincian ini bertujuan untuk mengetahui ada/tidaknya kejadian bencana alam kondisi tahun 2023 dan Januari-April 2024.
1. Bencana alam yang dicatat, yaitu bencana yang terjadi pada tahun 2023 dan Januari-April 2024.
2. Rincian ini mencatat ada tidaknya kejadian bencana alam yang berdampak langsung terhadap warga (korban jiwa, materiil, maupun nonmateriil) di desa/kelurahan. Perasaan khawatir bagi sebagian penduduk akibat bencana yang terjadi merupakan contoh kerugian non materiil
3. Dalam suatu kejadian bencana alam dapat menimbulkan beberapa peristiwa alam lainnya.

Rincian 601 Kolom (3 & 6) : Banyak kejadian bencana alam
Rincian ini bertujuan untuk mengetahui banyaknya kejadian bencana alam kondisi tahun 2023 dan Januari-April 2024.
1. Banyaknya kejadian merujuk ke berapa kali satu episode peristiwa (rentetan kejadian) bencana alam yang terjadi.
2. Untuk gempa, satu episode kejadian dimulai dari getaran pertama sampai terakhir. Misalkan dalam satu episode gempa terjadi selama 24 jam, yang mengakibatkan gempa lebih dari satu kali maka jumlah gempa yang dihitung tetap hanya satu kali.
3. Untuk gunung meletus, satu episode kejadian adalah dari letusan pertama sampai letusan terakhir dan dapat saja berlangsung dalam periode beberapa hari dan tetap dihitung sebagai satu kali letusan.

Rincian 601 Kolom (4 & 7) : Korban meninggal
Rincian ini bertujuan untuk mengetahui banyaknya korban meninggal kondisi tahun 2023 dan Januari-April 2024. Korban jiwa (meninggal) yang dicatat merujuk pada seluruh kejadian dalam kurun waktu tersebut, bukan hanya pada tahun puncak kejadian bencana alam.

Rincian 601 Kolom (5 & 8) : Keberadaan korban
Rincian ini bertujuan untuk mengetahui keberadaan korban kondisi tahun 2023 dan Januari-April 2024. Keberadaan korban yang dicatat yaitu keberadaan korban hilang, korban terluka/sakit, korban mengungsi, maupun yang tidak ada korban. Referensi kejadian yang dicatat merujuk pada seluruh kejadian dalam kurun waktu tahun 2023 dan Januari s.d April 2024, bukan hanya pada tahun puncak kejadian bencana alam. Pada rincian ini isian jawaban bisa lebih dari satu.

Keberadaan korban:
1. Korban hilang adalah orang yang dilaporkan hilang atau tidak ditemukan atau tidak diketahui keberadaannya setelah terjadi bencana (Perka BNPB No. 8/2011).
2. Korban luka/sakit adalah orang yang mengalami luka-luka atau sakit, dalam keadaan luka ringan, maupun luka parah/berat, baik yang berobat jalan maupun rawat inap.
3. Korban mengungsi adalah orang/sekelompok orang yang terpaksa atau dipaksa keluar dari tempat tinggalnya ke tempat yang lebih aman dalam upaya menyelamatkan diri/ jiwa untuk jangka waktu yang belum pasti sebagai akibat dampak buruk bencana (Perka BNPB No. 8/2011).'
			],
            [
                'dataKey' => '502',
                'label' => 'Fasilitas/upaya antisipasi/mitigasi bencana alam yang ada di pekon/kelurahan:',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui Fasilitas/upaya antisipasi/mitigasi bencana alam yang ada di desa/ kelurahan. Menurut Undang-Undang Nomor 24 Tahun 2007 tentang Penanggulangan Bencana, mitigasi adalah serangkaian upaya untuk mengurangi risiko bencana, baik melalui pembangunan fisik maupun penyadaran dan peningkatan kemampuan menghadapi ancaman bencana.'
			],
            [
                'dataKey' => '502. a',
                'label' => 'Sistem peringatan dini bencana alam',
                'definisi' => 'Sistem peringatan dini bencana alam adalah serangkaian kegiatan pemberian peringatan sesegera mungkin kepada masyarakat tentang kemungkinan terjadinya bencana alam pada suatu tempat oleh lembaga yang berwenang. Sistem peringatan dini bencana alam yang dimaksud di sini misalnya peringatan dini terhadap warga mengenai status ketinggian pintu air, status gunung, dsb, yang disampaikan melalui kentongan, pemberitahuan dengan loud speaker, dan lainnya.
Penjelasan: Pemberian peringatan status bencana melalui Short Messages Service (SMS), WhatsApp (WA), Line, dsb., yang diberikan kepada warga yang berada pada lokasi berisiko terkena bencana, dicatat sebagai sistem peringatan dini bencana alam.'
			],
            [
                'dataKey' => '502. b',
                'label' => 'Sistem peringatan dini khusus tsunami',
                'definisi' => 'Sistem peringatan dini khusus tsunami adalah fasilitas pendeteksian kejadian bencana alam tsunami untuk memberikan peringatan dini sebelum bencana alam tsunami datang/menimpa desa/kelurahan. Sistem ini menggunakan peralatan teknologi tinggi sebagai alat atau sarana untuk memonitor kapan dan di mana bencana alam tsunami itu akan terjadi. Jika desa/kelurahan masih berada dalam cakupan atau masih terjangkau sistem peringatan dini, maka desa/kelurahan tersebut dianggap memiliki sistem peringatan dini tsunami (bukan hanya desa/kelurahan dimana lokasi alat tersebut berada).
Penjelasan:
1. Sistem peringatan dini tsunami yang dimaksud disini adalah peralatan teknologi untuk memonitor datangnya gelombang air laut pasang tsunami (desa tersebut berada dalam cakupan sistem peringatan dini, bukan lokasi dimana alat tersebut dipasang).
2. Sistem peringatan dini tsunami yang dicatat adalah yang masih berfungsi. Jika warga mengatakan tidak tahu apakah sistem peringatan dini tsunami masih berfungsi atau tidak, maka tetap dicatat sebagai â€™â€™ada sistem peringatan dini tsunamiâ€™ di desa/kelurahanâ€™â€™.'
			],
            [
                'dataKey' => '502. c',
                'label' => 'Perlengkapan keselamatan (perahu karet, tenda,masker, dll',
                'definisi' => 'Perlengkapan keselamatan adalah perlengkapan yang diupayakan/disediakan oleh aparat setempat ataupun warga komunitas lokal untuk antisipasi maupun evakuasi korban saat terjadi bencana alam, seperti perahu karet, tenda, masker, dan sebagainya.'
			],
            [
                'dataKey' => '502. d',
                'label' => 'Rambu-rambu dan jalur evakuasi bencana',
                'definisi' => 'Rambu-rambu dan jalur evakuasi bencana adalah rambu-rambu/tanda dan jalur atau rute khusus yang digunakan untuk evakuasi pada saat terjadi bencana alam. Rambu-rambu dan jalur atau rute ini bisa tersedia di desa/kelurahan dalam bentuk apapun, misal peta, petunjuk evakuasi, dan lokasi aman untuk berkumpul (muster point). Hal yang terpenting adalah jika sewaktu-waktu terjadi bencana alam, warga desa/kelurahan tahu jalur atau rute evakuasi yang harus dilewati.'
			],
            [
                'dataKey' => '502. e',
                'label' => 'Pembuatan, perawatan, atau normalisasi: sungai, kanal, tanggul, parit, drainase, waduk, pantai, dll.',
                'definisi' => 'Kegiatan tersebut dapat menjadi salah satu contoh yang dapat dilakukan sebagai upaya pencegahan bencana. Menurut Peraturan Pemerintah Nomor 21 Tahun 2008 Tentang Penyelenggaraan Penanggulangan Bencana, pencegahan dilakukan dengan cara mengurangi ancaman bencana dan kerentanan pihak yang terancam bencana.'
			],
            [
                'dataKey' => '503',
                'label' => 'Apakah Desa/SLS dibawahnya termasuk dalam Desa Tangguh Bencana (Destana), Program Kampung Iklim (Proklim), Kampung Pesisir Tangguh, Kampung Siaga Bencana, atau Kampung Tangguh Covid',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui apakah Desa/SLS dibawahnya termasuk dalam Desa Tangguh Bencana (Destana), Program Kampung Iklim (Proklim), Kampung Pesisir Tangguh, Kampung Siaga Bencana, atau Kampung Tangguh Covid.'
			],
            [
                'dataKey' => '503. a',
                'label' => 'Pekon Tangguh Bencana (Destana)',
                'definisi' => 'Menurut Perka BNPB No. 1 Tahun 2012 tentang Pedoman Umum Desa/Kelurahan Tangguh Bencana, Desa/Kelurahan Tangguh Bencana adalah sebuah desa atau kelurahan yang memiliki kemampuan untuk mengenali ancaman di wilayahnya dan mampu mengorganisir sumber daya masyarakat untuk mengurangi kerentanan dan sekaligus meningkatkan kapasitas demi mengurangi risiko bencana. Kemampuan ini diwujudkan dalam perencanaan pembangunan yang mengandung upaya-upaya pencegahan, kesiapsiagaan, pengurangan risiko bencana dan peningkatan kapasitas untuk pemulihan pascabencana.'
			],
            [
                'dataKey' => '503. b',
                'label' => 'Program Kampung Iklim (Proklim)',
                'definisi' => 'Program Kampung Iklim merupakan program yang dikelola oleh Kementerian LHK dalam rangka meningkatkan keterlibatan masyarakat dan pemangku kepentingan lain untuk melakukan penguatan kapasitas adaptasi terhadap dampak perubahan iklim dan penurunan emisi gas rumah kaca serta memberikan pengakuan terhadap upaya adaptasi dan mitigasi perubahan iklim yang telah dilakukan yang dapat meningkatkan kesejahteraan di tingkat lokal sesuai dengan kondisi wilayah. Penerapan proklim dilakukan di wilayah administratif paling rendah (RW atau Dusun) atau setingkat Kelurahan atau Desa (Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor 84 Tahun 2016 tentang Program Kampung Iklim).'
			],
            [
                'dataKey' => '503. c',
                'label' => 'Kampung Pesisir Tangguh',
                'definisi' => 'Berdasarkan Peraturan Menteri Kelautan dan Perikanan Nomor 7 Tahun 2012 tentang Pedoman Pelaksanaan Program Nasional Pemberdayaan Masyarakat Mandiri Kelautan dan Perikanan, Pengembangan Kawasan Pesisir Tangguh (PKPT) merupakan program dari Kementerian KP untuk menata dan meningkatkan kehidupan desa pesisir yang berbasis masyarakat. Tujuan dilakasanakannya PKPT ini antara lain :
1. Meningkatkan kesiapsiagaan masyarakat dalam menghadapi bencana
2. Meningkatkan kualitas lingkungan hidup di kawasan pesisir
3. Memfasilitasi kegiatan pembnagunan pengembangan sarana dan prasarana sosial ekonomi di kawasan pesisir
4. Mengembangkan kelembagaan masyarakat secara partisipatif
Program PKPT ini merupakan kelanjutan atau pengembangan dari program desa pesisir tangguh yang dikembangkan sejak 2012.'
			],
            [
                'dataKey' => '503. d',
                'label' => 'Kampung Siaga Bencana',
                'definisi' => 'Kampung Siaga Bencana merupakan program dari Kemensos sebagai wadah penanggulangan bencana berbasis masyarakat yang dijadikan kawasan/tempat untuk program penanggulangan bencana. Lokasi KSB dilakukan pada 1 kawasan tertentu yang didalam kawasan tersebut terdiri dari beberapa desa/kelurahan (Peraturan Menteri Sosial Nomor 128 Tahun 2011 tentang Kampung Siaga Bencana).'
			],
            [
                'dataKey' => '503. e',
                'label' => 'Kampung Tangguh Covid',
                'definisi' => 'Desa Tangguh Bencana lawan Covid 19 merupakan program yang dikembangkan oleh Kemendagri dalam upaya untuk meningkatkan kesiapsiagaan dan melakukan pencegahan serta penanggulangan bencana terhadap ancaman covid 19 di tingkat desa (Instruksi Menteri Dalam Negeri Nomor 1 Tahun 2020 tentang Pencegahan Penyebaran dan Percepatan Penanganan Corona Virus Disease 2019 di Lingkungan Pemerintah Daerah).'
			],
            [
                'dataKey' => '601',
                'label' => 'Keberadaan sarana pendidikan menurut jenjang pendidikan di pekon/kelurahan
Jenis/Jenjang Pendidikan
a. Pos Pendidikan Anak Usia Dini (Pos PAUD) Sebutkan namanya
b. TK
RABA
d. SD
e. MI
f. SMP
g. MTs
h. SMA
i. MA
j. SMK
k. Akademi/Perguruan Tinggi
l. SDLB
m. SMPLB
n. SMALB
o. Pondok pesantren
p. Madrasah Diniyah
q. Seminari/sejenisnya
',
                'definisi' => 'Rincian ini untuk mengetahui keberadaan sarana pendidikan menurut jenjang pendidikan di desa/kelurahan. Sarana pendidikan yang dimaksud adalah lembaga pendidikan yang melakukan aktivitas belajar mengajar secara aktif. Lembaga pendidikan adalah lembaga yang menghasilkan siswa yang lulus dan diakui/disahkan oleh Kementerian Pendidikan dan Kebudayaan yang dibuktikan dengan sertifikat/ijazah. Banyak lembaga kursus keterampilan yang menyebutkan bahwa lulusan kursusnya setara dengan diploma padahal belum tentu diakui oleh Kemendikbud sebagai diploma. Ada beberapa kasus terkait cakupan lembaga pendidikan/sekolah:
1. Jika ada sekolah/kampus yang meliputi beberapa desa/kelurahan, maka dicatat di salah satu desa/kelurahan dimana kantor administrasi berada.
2. Untuk sekolah jarak jauh atau kelas jarak jauh dan sekolah terbuka dicatat menjadi satu dengan sekolah induknya dimana pengelolaan administrasi berada.
3. Lembaga yang memenuhi kriteria/karakterisitik sebagai lembaga pendidikan tetap dimasukkan sebagai lembaga pendidikan yang sesuai/setara, contoh lembaga pendidikan setara akademi seperti LP3I.

Jenis dan Jenjang Pendidikan
a. Pos Pendidikan Anak Usia Dini (Pos PAUD) atau biasa disebut PAUD adalah tempat kegiatan pembinaan anak sejak lahir sampai dengan usia enam tahun melalui pemberian rancangan pendidikan untuk membantu pertumbuhan/perkembangan jasmani dan rohani agar anak memiliki kesiapan dalam memasuki pendidikan lebih lanjut (Peraturan Menteri Pendidikan dan Kebudayaan RI Nomor 137 Tahun 2014 Tentang Standar Nasional Pendidikan Anak Usia Dini).
Penjelasan:
1. PAUD yang didirikan oleh Desa dimasukkan PAUD swasta, PAUD negeri bila berada di bawah naungan Kementerian Pendidikan dan Kebudayaan/ Kementerian Agama.
2. Jika di desa/kelurahan terdapat PAUD yang di dalamnya terdapat Kelompok Bermain, tetapi di papan namanya hanya tertulis â€PAUDâ€ maka yang dicatat hanya PAUD.

b. TK (Taman Kanak-Kanak) adalah salah satu bentuk satuan pendidikan anak usia dini pada jalur pendidikan formal yang menyelenggarakan program pendidikan bagi anak berusia 4 (empat) tahun sampai dengan 6 (enam) tahun (Peraturan Pemerintah Republik Indonesia Nomor 19 Tahun 2017).
c. RA (Raudhatul Athfal)/BA (Bustanul Athfal) adalah salah satu bentuk satuan pendidikan anak usia dini pada jalur pendidikan formal yang menyelenggarakan program pendidikan dengan kekhasan agama Islam bagi anak berusia 4 (empat) tahun sampai dengan 6 (enam) tahun (Peraturan Pemerintah Republik Indonesia Nomor 19 Tahun 2017).
d. SD (Sekolah Dasar) adalah salah satu bentuk satuan pendidikan formal yang menyelenggarakan pendidikan umum pada jenjang Pendidikan Dasar. Pendidikan Dasar adalah jenjang pendidikan pada jalur pendidikan formal yang melandasi jenjang pendidikan menengah yang diselenggarakan pada satuan pendidikan yang berbentuk sekolah dasar dan madrasah ibtidaiyah atau bentuk lain yang sederajat serta menjadi satu kesatuan kelanjutan pendidikan pada satuan pendidikan yang berbentuk sekolah menengah pertama dan madrasah tsanawiyah, atau bentuk lain yang sederajat. (Peraturan Pemerintah Republik Indonesia Nomor 19 Tahun 2017).
e.. MI (Madrasah Ibtidaiyah) adalah salah satu bentuk satuan pendidikan formal dalam binaan menteri yang menyelenggarakan urusan pemerintahan di bidang agama yang menyelenggarakan pendidikan umum dengan kekhasan agama Islam pada jenjang Pendidikan Dasar (Peraturan Pemerintah Republik Indonesia Nomor 19 Tahun 2017).
f.. SMP (Sekolah Menengah Pertama) adalah salah satu bentuk satuan pendidikan formal yang menyelenggarakan pendidikan umum pada jenjang Pendidikan Dasar sebagai lanjutan dari SD, MI, atau bentuk lain yang sederajat atau lanjutan dari hasil belajar yang diakui sama atau setara SD atau MI (Peraturan Pemerintah Republik Indonesia Nomor 19 Tahun 2017).
g. MTs (Madrasah Tsanawiyah) adalah salah satu bentuk satuan pendidikan formal dalam binaan menteri yang menyelenggarakan urusan pemerintahan di bidang agama yang menyelenggarakan pendidikan umum dengan kekhasan agama Islam pada jenjang Pendidikan Dasar sebagai lanjutan dari SD, MI, atau bentuk lain yang sederajat atau lanjutan dari hasil belajar yang diakui sama atau setara SD atau MI (Peraturan Pemerintah Republik Indonesia Nomor 19 Tahun 2017).
h. SMA (Sekolah Menengah Atas) adalah salah satu bentuk satuan pendidikan formal yang menyelenggarakan pendidikan umum pada jenjang Pendidikan Menengah sebagai lanjutan dari SMP, MTs, atau bentuk lain yang sederajat atau lanjutan dari hasil belajar yang diakui sama atau setara SMP atau MTs. Pendidikan Menengah adalah jenjang pendidikan pada jalur pendidikan formal yang merupakan lanjutan Pendidikan Dasar, berbentuk sekolah menengah atas, madrasah aliyah, sekolah menengah kejuruan, dan madrasah aliyah kejuruan atau bentuk lain yang sederajat. (Peraturan Pemerintah Republik Indonesia Nomor 19 Tahun 2017).
i. MA (Madrasah Aliyah) adalah salah satu bentuk satuan pendidikan formal dalam binaan menteri yang menyelenggarakan urusan pemerintahan di bidang agama yang menyelenggarakan pendidikan umum dengan kekhasan agama Islam pada jenjang Pendidikan Menengah sebagai lanjutan dari SMP, MTs, atau bentuk lain yang sederajat atau lanjutan dari hasil belajar yang diakui sama atau setara SMP atau MTs (Peraturan Pemerintah Republik Indonesia Nomor 19 Tahun 2017).
j. SMK (Sekolah Menengah Kejuruan) adalah salah satu bentuk satuan pendidikan formal yang menyelenggarakan pendidikan kejuruan pada jenjang Pendidikan Menengah sebagai lanjutan dari SMP, MTs, atau bentuk lain yang sedera-jat atau lanjutan dari hasil belajar yang diakui sama atau setara SMP atau MTs (Peraturan Pemerintah Republik Indonesia Nomor 19 Tahun 2017).
k. Akademi/Perguruan Tinggi adalah salah satu bentuk satuan pendidikan formal setelah pendidikan menengah yang dapat berupa program pendidikan diploma, sarjana, magister, spesialis, dan doktor serta meliputi Akademi, Politeknik, Sekolah Tinggi, Institut dan Universitas. (Konsep Definisi Operasional Baku Statistik Sosial Tahun 2018)
l. SDLB (Sekolah Dasar Luar Biasa) adalah sarana pendidikan setingkat SD yang diperuntukkan bagi peserta didik yang memiliki tingkat kesulitan dalam proses pembelajaran karena kelainan fisik, emosional, dan mental.
m. SMPLB (Sekolah Menengah Pertama Luar Biasa) adalah sarana pendidikan setingkat SMP yang diperuntukkan bagi peserta didik yang memiliki tingkat kesulitan dalam proses pembelajaran karena kelainan fisik, emosional, dan mental.
n. Sekolah Menengah Atas Luar Biasa (SMALB) adalah sarana pendidikan setingkat SMA yang diperuntukkan bagi peserta didik yang memiliki tingkat kesulitan dalam proses pembelajaran karena kelainan fisik, emosional, dan mental.
o. Pondok pesantren (Ponpes) adalah lembaga pendidikan keagamaan Islam berbasis masyarakat yang menyelenggarakan pendidikan diniyah atau secara terpadu dengan jenis pendidikan lainnya (PP Nomor 55 tahun 2007). Pondok pesantren selain mengajarkan kitab kuning atau kitab klasik, ada pula yang menyelenggarakan pendidikan seperti MI, MTs, maupun MA. Ponpes yang menyelenggarakan pendidikan formal dan atau non formal seperti MI, MTs, MA maupun madrasah diniyah, unit satuan pendidikannya selain masuk dalam ponpes juga masuk ke MI, MTs, MA dan/atau madrasah diniyah. Pondok pesantren itu terdiri dari lima unsur pokok yaitu Kiai, Santri, Masjid, Pondok, dan Pengajaran kitab-kitab Islam klasik (kitab kuning). Pengertian Pondok Pesanten yang lain adalah bercirikan:
1. Pesantren harus berbentuk asrama (full residential Islamic Boarding School),
2. Fungsi kiai sebagai centre figure, yang berperan sebagai guru, pendidik, dan pembimbing,
3. Masjid sebagai pusat kegiatan,
4. Materi yang diajarkan tidak sebatas kitab kuning saja.
p. Madrasah Diniyah adalah bagian terpadu dari pendidikan nasional untuk memenuhi hasrat masyarakat tentang pendidikan agama. Madrasah Diniyah termasuk ke dalam pendidikan yang dilembagakan dan bertujuan untuk mempersiapkan peserta didik dalam penguasaan terhadap pengetahuan agama Islam (Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional yang ditindaklanjuti dengan disahkannya PP Nomor 55 Tahun 2007, Undang-Undang Pendidikan dan Peraturan Pemerintah, Departemen Pendidikan Nasional). Madrasah Diniyah ada yang diselenggarakan di Ponpes dan di luar Ponpes (masjid, musala, rumah ataupun kantor kepala desa/lurah). Materi pembelajaran Madrasah Diniyah adalah Alâ€™quran, Hadist, fiqih/ibadah, aqidah/akhlak, sejarah kebudayaan Islam, Bahasa Arab, dll. Lembaga Pendidikan Diniyah terdiri atas:
1. Diniyah Atfal (DA), Diniyah Ula (DU), Diniyah Wustha (DW), Diniyah Ulya (DUy), dan Maâ€™had Aly yang sudah memiliki izin operasional dari Departemen Agama.
2. Lembaga pendidikan Diniyah pada jalur non-formal berjenjang, terdiri dari Diniyah Takmiliyah Awwaliyah (DTA), Diniyah Takmiliyah Wustha (DTW), Diniyah Takmiliyah Ulya (DTU), dan Diniyah Takmiliyah Aly (DTA) yang sudah memiliki izin operasional dari Departemen Agama.
3. Lembaga pendidikan Diniyah pada jalur non-formal tanpa jenjang, terdiri dari Taman Kanak-kanak Al-Qurâ€™an (TKQ), Taâ€™limul Qurâ€™an lil â€™Aulad (TQA), Taman Pendidikan Al- Qurâ€™an (TPQ) dan Majelis Taklim (MT) yang sudah memiliki izin operasional dari Departemen Agama.
q. Seminari/sejenisnya adalah lembaga pendidikan tinggi agama Katolik/Kristen, dalam profesi kepastoran dan biasanya menyediakan asrama bagi para siswanya dalam komplek pendidikan. Contoh sejenisnya adalah Pendidikan Alkitab untuk Agama Protestan.

Rincian 701 Kolom (2 & 3): Jumlah lembaga pendidikan
Rincian ini untuk mengetahui jumlah lembaga pendidikan menurut tingkat pendidikan dan statusnya sebagai negeri atau swasta. Isikan ke dalam kotak banyaknya lembaga pendidikan yang ada aktivitasnya menurut tingkat pendidikan. Tidak termasuk dalam hal ini lembaga pendidikan yang baru terdaftar secara definitif dan belum melakukan aktivitas belajar-mengajar.
Rincian 701 Kolom (4): Perkiraan jarak ke lembaga pendidikan terdekat (dalam km)
Rincian ini untuk mengetahui jarak ke lembaga pendidikan yang terdekat jika lembaga pendidikan yang dimaksud tidak ada di desa/kelurahan. Isikan perkiraan jarak ke lembaga pendidikan serupa yang terdekat (km).
Rincian 701 Kolom (5): Kemudahan untuk mencapai ke lembaga pendidikan terdekat
Rincian ini untuk mengetahui kemudahan mencapai ke lembaga pendidikan terdekat jika lembaga pendidikan yang dimaksud tidak ada di desa/kelurahan. Isikan Kolom (5) dengan persepsi kepala desa/lurah atau perangkat desa/kelurahan tentang kemudahan untuk mencapai lembaga pendidikan serupa dengan memperhitungkan sarana atau alat transportasi yang digunakan/dipakai.'
			],
            [
                'dataKey' => '602. a',
                'label' => 'Kegiatan pendidikan keaksaraan dasar/lanjutan selama setahun terakhir',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui ada atau tidaknya kegiatan pendidikan keaksaraan dasar/lanjutan selama setahun terakhir di desa/kelurahan.
Pendidikan Keaksaraan adalah layanan pendidikan bagi warga masyarakat buta aksara latin agar memiliki kemampuan membaca, menulis, berhitung, berbahasa Indonesia, dan menganalisa sehingga memberikan peluang untuk aktualisasi potensi diri. Pendidikan Keaksaraan terdiri dari Pendidikan Keaksaraan Dasar dan Pendidikan Keaksaraan Lanjutan. (Permendikbud No. 86 Tahun 2014 tentang Pedoman Penyelenggaraan Pendidikan Keaksaraan Dasar dan Permendikbud No 42 Tahun 2015 tentang Pedoman Penyelenggaraan Pendidikan Keaksaraan Lanjutan).
Pendidikan Keaksaraan Dasar adalah layanan Pendidikan pada warga masyarakat buta aksara latin agar memiliki kemampuan membaca, menulis, dan berhitung, berbahsa Indoensia, dan menganalisa, sehingga memberikan peluang untuk aktualisasi potensi diri dalam kehidupan sehari-hari.
Pendidikan Keaksaraan Lanjutan merupakan kelanjutan dari Pendidikan Keaksaraan Dasar yang ditujukan untuk memelihara penduduk yang telah melek aksara agar tidak buta aksara kembali. Pendidikan Keaksaraan Lanjutan terdiri dari Pendidikan Keaksaraan Usaha Mandiri (KUM) dan Pendidikan Multikeaksaraan.'
			],
            [
                'dataKey' => '602. b',
                'label' => 'Kegiatan pendidikan Paket A/B/C selama setahun terakhir',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui keberadaan kegiatan pendidikan paket A/B/C. Program Paket A (setara SD/MI), Paket B (setara SMP/ MTs), dan Paket C (setara SMA/MA) di desa/kelurahan tersebut.'
			],
            [
                'dataKey' => '602. c',
                'label' => 'Taman Bacaan Masyarakat (TBM):',
                'definisi' => 'Rincian ini digunakan untuk melihat minat baca masyarakat, dengan adanya TBM masyarakat bisa membaca sehingga wawasan bertambah luas.
Taman Bacaan Masyarakat (TBM) adalah lembaga yang lahir dari dan untuk masyarakat yang merupakan potensi dalam memberdayakan warga (masyarakat umum) untuk belajar dan memperoleh informasi/pengetahuan untuk meningkatkan taraf hidup. TBM dicirikan sebagai suatu ruang/tempat yang menyediakan koleksi bahan bacaan yang bertujuan untuk memberikan akses pada masyarakat untuk memperoleh bahan bacaan.
Penjelasan: Taman bacaan masyarakat yang berada di rumah kades/rumah pribadi yang difungsikan sebagai tempat membaca dan mengakses internet serta print secara gratis maka dapat dimasukkan sebagai TBM.'
			],
            [
                'dataKey' => '603',
                'label' => 'Apakah Desa/SLS dibawahnya termasuk dalam Desa Tangguh Bencana (Destana), Program Kampung Iklim (Proklim), Kampung Pesisir Tangguh, Kampung Siaga Bencana, atau Kampung Tangguh Covid',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui apakah Desa/SLS dibawahnya termasuk dalam Desa Tangguh Bencana (Destana), Program Kampung Iklim (Proklim), Kampung Pesisir Tangguh, Kampung Siaga Bencana, atau Kampung Tangguh Covid.'
			],
            [
                'dataKey' => '603. a',
                'label' => 'Pekon Tangguh Bencana (Destana)',
                'definisi' => 'Menurut Perka BNPB No. 1 Tahun 2012 tentang Pedoman Umum Desa/Kelurahan Tangguh Bencana, Desa/Kelurahan Tangguh Bencana adalah sebuah desa atau kelurahan yang memiliki kemampuan untuk mengenali ancaman di wilayahnya dan mampu mengorganisir sumber daya masyarakat untuk mengurangi kerentanan dan sekaligus meningkatkan kapasitas demi mengurangi risiko bencana. Kemampuan ini diwujudkan dalam perencanaan pembangunan yang mengandung upaya-upaya pencegahan, kesiapsiagaan, pengurangan risiko bencana dan peningkatan kapasitas untuk pemulihan pascabencana.'
			],
            [
                'dataKey' => '603. b',
                'label' => 'Program Kampung Iklim (Proklim)',
                'definisi' => 'Program Kampung Iklim merupakan program yang dikelola oleh Kementerian LHK dalam rangka meningkatkan keterlibatan masyarakat dan pemangku kepentingan lain untuk melakukan penguatan kapasitas adaptasi terhadap dampak perubahan iklim dan penurunan emisi gas rumah kaca serta memberikan pengakuan terhadap upaya adaptasi dan mitigasi perubahan iklim yang telah dilakukan yang dapat meningkatkan kesejahteraan di tingkat lokal sesuai dengan kondisi wilayah. Penerapan proklim dilakukan di wilayah administratif paling rendah (RW atau Dusun) atau setingkat Kelurahan atau Desa (Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor 84 Tahun 2016 tentang Program Kampung Iklim).'
			],
            [
                'dataKey' => '603. c',
                'label' => 'Kampung Pesisir Tangguh',
                'definisi' => 'Berdasarkan Peraturan Menteri Kelautan dan Perikanan Nomor 7 Tahun 2012 tentang Pedoman Pelaksanaan Program Nasional Pemberdayaan Masyarakat Mandiri Kelautan dan Perikanan, Pengembangan Kawasan Pesisir Tangguh (PKPT) merupakan program dari Kementerian KP untuk menata dan meningkatkan kehidupan desa pesisir yang berbasis masyarakat. Tujuan dilakasanakannya PKPT ini antara lain :
1. Meningkatkan kesiapsiagaan masyarakat dalam menghadapi bencana
2. Meningkatkan kualitas lingkungan hidup di kawasan pesisir
3. Memfasilitasi kegiatan pembnagunan pengembangan sarana dan prasarana sosial ekonomi di kawasan pesisir
4. Mengembangkan kelembagaan masyarakat secara partisipatif
Program PKPT ini merupakan kelanjutan atau pengembangan dari program desa pesisir tangguh yang dikembangkan sejak 2012.'
			],
            [
                'dataKey' => '603. d',
                'label' => 'Kampung Siaga Bencana',
                'definisi' => 'Kampung Siaga Bencana merupakan program dari Kemensos sebagai wadah penanggulangan bencana berbasis masyarakat yang dijadikan kawasan/tempat untuk program penanggulangan bencana. Lokasi KSB dilakukan pada 1 kawasan tertentu yang didalam kawasan tersebut terdiri dari beberapa desa/kelurahan (Peraturan Menteri Sosial Nomor 128 Tahun 2011 tentang Kampung Siaga Bencana).'
			],
            [
                'dataKey' => '603. e',
                'label' => 'Kampung Tangguh Covid',
                'definisi' => 'Desa Tangguh Bencana lawan Covid 19 merupakan program yang dikembangkan oleh Kemendagri dalam upaya untuk meningkatkan kesiapsiagaan dan melakukan pencegahan serta penanggulangan bencana terhadap ancaman covid 19 di tingkat desa (Instruksi Menteri Dalam Negeri Nomor 1 Tahun 2020 tentang Pencegahan Penyebaran dan Percepatan Penanganan Corona Virus Disease 2019 di Lingkungan Pemerintah Daerah).'
			],
            [
                'dataKey' => '604',
                'label' => 'Keberadaan sarana/prasarana keterampilan di pekon/kelurahan',
                'definisi' => 'Rincian ini digunakan untuk melihat pembangunan dan pemberdayaan masyarakat desa/kelurahan yang telah dilakukan oleh pemerintah desa. Isikan banyaknya lembaga yang menyediakan pendidikan keterampilan di desa/kelurahan. Pendidikan keterampilan adalah pendidikan luar sekolah yang dikelola oleh lembaga/badan pelatihan/kursus keterampilan yang mempunyai ciri: jangka waktu pendidikan relatif pendek, ditunjukkan untuk meningkatkan keterampilan masyarakat umum, dan menyediakan sertifikat bagi peserta yang lulus. Pendidikan keterampilan termasuk yang diselenggarakan oleh Balai Latihan Kerja (BLK).

Kepemilikan pendidikan keterampilan ini dipisahkan antara milik desa/kelurahan atau bukan milik desa/kelurahan karena ini merupakan salah satu target pembangunan.'
			],
            [
                'dataKey' => '605',
                'label' => 'Keberadaan sarana kesehatan di pekon/kelurahan',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui keberadaan sarana kesehatan di desa/kelurahan. Sarana kesehatan adalah tempat yang digunakan untuk menyelenggarakan upaya kesehatan.
Penjelasan: Pencatatan sarana kesehatan harus disesuaikan dengan izin operasionalnya. Misalnya Pustu yang ditinggali oleh bidan tetap dicatat sebagai Pustu (bukan tempat praktik bidan) jika izin operasionalnya adalah Pustu.
Sarana Kesehatan
a. Rumah Sakit adalah sarana kesehatan/bangunan tempat untuk melayani penderita yang sakit untuk berobat rawat jalan atau rawat inap yang pelayanannya disediakan oleh dokter, perawat, dan tenaga ahli kesehatan lainnya. Menurut Peraturan Menteri Kesehatan No. 3 Tahun 2020 tentang Klasifikasi dan Perizinan Rumah Sakit, rumah sakit merupakan institusi pelayanan kesehatan yang menyelenggarakan pelayanan kesehatan perorangan secara paripurna yang menyediakan pelayanan rawat inap, rawat jalan, dan gawat darurat.
Rumah sakit yang dicatat adalah rumah sakit umum dan rumah sakit khusus. Rumah sakit umum dapat dimiliki oleh Pemerintah Pusat, Pemerintah Daerah, TNI/POLRI, atau swasta/BUMN. RS Pemerintah Pusat misalnya RSCM/RSUP Dr. Ciptomangun-kusumo Jakarta, RS Pemerintah Daerah misalnya RS Abdul Muluk di Lampung, RS Bhayangkara milik POLRI, dan RS Swasta misalnya RS Stella Maris di Kota Makasar-Sulawesi Selatan, RS Pelni/RS Pertamina milik BUMN. Termasuk rumah sakit khusus seperti rumah sakit perawatan paru-paru dan rumah sakit jantung.

b. Rumah Sakit Bersalin adalah rumah sakit khusus untuk persalinan, dilengkapi pelayanan spesialis pemeriksaan kehamilan, persalinan, rawat inap, dan rawat jalan ibu dan anak yang berada di bawah pengawasan dokter spesialis kandungan. Biasanya Rumah Sakit Bersalin dikelola oleh swasta. Misal RSB Bunda Menteng Jakarta.

c. Puskesmas (Pusat Kesehatan Masyarakat) adalah fasilitas pelayanan kesehatan yang menyelenggarakan upaya kesehatan masyarakat dan upaya kesehatan perseorangan tingkat pertama, dengan lebih mengutamakan upaya promotif dan preventif di wilayah kerjanya (Peraturan Menteri Kesehatan Republik Indonesia Nomor 43 Tahun 2019 tentang Pusat Kesehatan Masyarakat). Puskesmas sebagai unit pelayanan kesehatan milik pemerintah (pelaksana teknis dinas kesehatan kabupaten/ kota) bertanggung jawab terhadap pelayanan kesehatan masyarakat untuk wilayah kecamatan, sebagian kecamatan, atau kelurahan/desa. Puskesmas memberikan pelayanan berobat jalan atau rawat inap. Biasanya Puskesmas berada di setiap kecamatan dan dapat terdiri dari 2 sampai 3 puskesmas di dalam 1 kecamatan. Puskesmas dengan rawat inap adalah Puskesmas yang diberi tambahan sumber daya untuk menyelenggarakan pelayanan rawat inap, sesuai pertimbangan kebutuhan pelayanan kesehatan (Peraturan Menteri Kesehatan Republik Indonesia Nomor 75 Tahun 2014 tentang Pusat Kesehatan Masyarakat).

d. Puskesmas tanpa rawat inap adalah Puskesmas yang tidak menyelenggarakan pelayanan rawat inap, kecuali pertolongan persalinan normal (Peraturan Menteri Kesehatan Republik Indonesia Nomor 75 Tahun 2014 tentang Pusat Kesehatan Masyarakat).

e. Puskesmas Pembantu (Pustu) sebagai sarana kesehatan/bangunan yang dipakai sebagai pusat kesehatan masyarakat untuk wilayah yang lebih kecil, misal di desa/kelurahan. Pustu merupakan sarana kesehatan milik pemerintah yang berfungsi menunjang dan membantu memperluas jangkauan puskesmas dengan melaksanakan kegiatan-kegiatan yang dilakukan puskesmas dalam ruang lingkup wilayah yang lebih kecil serta jenis dan kompetensi pelayanan yang disesuaikan dengan kemampuan tenaga dan sarana yang tersedia. Pustu memberikan pelayanan berobat jalan. Pustu bertanggung jawab ke puskesmas induk di kecamatan. (Peraturan Pemerintah Nomor 43 Tahun 2019 tentang Pusat Kesehatan Masyarakat)

f. Poliklinik adalah fasilitas pelayanan kesehatan yang menyelenggarakan pelayanan kesehatan perorangan yang menyediakan pelayanan medis dasar dan/ atau spesialistik (Peraturan Pemerintah Nomor 47 Tahun 2016 tentang Fasilitas Pelayanan Kesehatan). Poliklinik biasanya berupa sarana kesehatan/bangunan yang dipakai untuk pelayanan berobat jalan serta dikelola oleh swasta atau organisasi keagamaan tertentu. Sedangkan Balai pengobatan adalah tempat pemeriksaan kesehatan di bawah pengawasan mantri kesehatan.

g. Tempat praktik dokter adalah sarana kesehatan/bangunan yang digunakan untuk tempat praktik dokter yang biasanya memberikan pelayanan berobat jalan, termasuk praktik dokter yang mempunyai fasilitas rawat inap dan apotek. Tempat pratktik dokter bersama dianggap sebagai satu tempat/fasilitas.

h. Rumah Bersalin adalah sarana pelayanan kesehatan dengan izin sebagai rumah bersalin, dilengkapi pelayanan pemeriksaan kehamilan, persalinan serta pemeriksaan ibu dan anak yang berada di bawah pengawasan bidan senior. Sekarang banyak rumah bersalin yang langsung di bawah dokter spesialis, jadi sebaiknya dilihat ijinnya. Rumah Bersalin biasanya juga dikelola oleh swasta.
Penjelasan : Perbedaan Rumah Sakit Bersalin (RSB) dan Rumah Bersalin (RB) adalah RSB biasanya memberikan pelayanan tindakan operasi, sedangkan RB tidak melakukan tindakan operasi.

i. Tempat praktik bidan adalah sarana kesehatan/bangunan yang digunakan untuk tempat praktik bidan yang biasanya memberikan pelayanan ibu hamil dan bayi.

j. Poskesdes (Pos Kesehatan Desa) adalah sarana kesehatan/bangunan yang dibentuk di desa/kelurahan dalam rangka mendekatkan/ menyediakan pelayanan kesehatan dasar bagi masyarakat desa/kelurahan. Poskesdes merupakan Upaya Kesehatan Bersumber daya Masyarakat (UKBM) sehingga masyarakat dapat berperan aktif dalam meningkatkan taraf kesehatan di lingkungannya dengan kewaspadaan dini terhadap berbagai risiko dan masalah kesehatan. Poskesdes dikelola oleh bidan dan dibantu beberapa kader.

k. Polindes (Pondok Bersalin Desa) adalah bangunan yang dibangun dengan sumbangan dana pemerintah dan partisipasi masyarakat desa untuk tempat pertolongan persalinan dan pemondokan ibu bersalin, sekaligus tempat tinggal bidan di desa. Di samping pertolongan persalinan juga dilakukan pelayanan Kesehatan Ibu dan Anak (KIA), Keluarga Berencana (KB), dan pelayanan kesehatan lain sesuai kebutuhan masyarakat dan kompentensi teknis bidan tersebut.
Penjelasan: Apabila pada saat pencacahan polindes sudah berganti nama menjadi Poskesdes maka dicatat sebagai Poskesdes.

l. Apotek adalah suatu sarana kesehatan yang digunakan untuk pekerjaan kefarmasian, dan penyaluran/penjualan obat/bahan farmasi. Apotek melayani pembelian obat secara bebas atau dengan resep dokter. Apotek selalu ada tenaga apoteker selaku penanggungjawabnya (Peraturan Menteri Kesehatan Nomor 9 Tahun 2017 tentang Apotek).

m. Toko khusus obat/jamu adalah tempat tertentu yang digunakan untuk melakukan pekerjaan menyimpan, dan menjual obat/bahan khusus untuk obat/jamu. Toko obat/jamu melayani pembelian obat-obatan bebas terbatas dan juga obat bebas.
Penjelasan: Toko khusus â€˜obat kuatâ€™ tidak dikategorikan sebagai toko khusus obat/jamu.

Rincian 704 Kolom (2): Jumlah sarana kesehatan
Rincian ini bertujuan untuk mengetahui jumlah sarana kesehatan menurut jenisnya yang ada di desa/kelurahan. Jumlah sarana kesehatan adalah jumlah secara fisik berupa bangunan sarana kesehatan yang masih berfungsi (memberikan pelayanan kesehatan) yang berada di dalam wilayah desa/kelurahan ini.

Rincian 704 Kolom (3): Jarak ke sarana kesehatan terdekat
Rincian ini untuk mengetahui jarak ke sarana kesehatan yang terdekat jika sarana kesehatan yang dimaksud tidak ada di desa/kelurahan. Isikan perkiraan jarak (dalam kilometer) dari kantor kepala desa/lurah ke sarana kesehatan serupa terdekat pada kolom (3).
Penjelasan: Jika di desa tidak tersedia poskesdes/polindes dan aparat desa tidak mengetahui poskesdes/polindes terdekat maka dapat dikonfirmasikan ke narasumber lain seperti bidan desa/puskesmas.

Rincian 704 Kolom (4): Kemudahan untuk mencapai sarana kesehatan
Rincian ini untuk mengetahui kemudahan mencapai ke sarana kesehatan terdekat jika sarana kesehatan yang dimaksud tidak ada di desa/kelurahan. Isikan Kolom (4) dengan persepsi kepala desa/lurah atau perangkat desa/kelurahan tentang kemudahan akses ke sarana kesehatan serupa dengan memperhitungkan sarana atau alat transportasi yang digunakan/dipakai.'
			],
            [
                'dataKey' => '606',
                'label' => 'Jumlah Upaya Kesehatan Bersumberdaya Masyarakat (UKBM) selama setahun terakhir',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui jumlah Upaya Kesehatan Bersumber daya Masyarakat (UKBM) selama setahun terakhir yang ada di desa/kelurahan.
Posyandu adalah salah satu wadah peran serta masyarakat yang dikelola dan diselenggarakan dari, oleh, untuk, dan bersama masyarakat guna memperoleh pelayanan kesehatan dasar dan memantau pertumbuhan balita dalam rangka meningkatkan kualitas sumber daya manusia secara dini. Kegiatan tersebut meliputi pelayanan imunisasi, pendidikan gizi masyarakat, serta pelayanan kesehatan ibu dan anak.
Posyandu mempunyai dua kegiatan, yaitu: kegiatan utama dan tambahan.
Kegiatan utama posyandu meliputi:
1. Pelayanan kesehatan ibu dan anak, yaitu penimbangan berat badan dan pemberian tablet zat besi kepada ibu hamil oleh kader kesehatan dan pembentukan kelompok ibu hamil.
2. Pelayanan kesehatan bagi ibu nifas dan menyusui, yaitu penyuluhan kesehatan, KB, ASI dan gizi, ibu nifas, perawatan kebersihan jalan lahir (vagina), pemberian vitamin A dan tablet besi, perawatan payudara, senam ibu nifas, dan pemeriksaan kesehatan lainnya.
3. Pelayanan kesehatan bayi dan balita, yaitu penimbangan berat badan, penentuan status pertumbuhan, penyuluhan, dan pemeriksaan kesehatan, dll.
4. Pelayanan Keluarga Berencana (KB).
5. Pelayanan imunisasi.
6. Pelayanan gizi.
7. Pencegahan dan penanggulangan diare.

Kegiatan tambahan misalnya:
1. Perbaikan kesehatan lingkungan.
2. Pemberantasan penyakit menular.
3. Berbagai program pembangunan masyarakat desa lainnya.'
			],
            [
                'dataKey' => '606. a',
                'label' => 'Jumlah posyandu akt',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui jumlah Posyandu aktif yang ada di desa/kelurahan. Yang dimaksud posyandu aktif memiliki kriteria sebagai berikut:
1. Melakukan kegiatan rutin posyandu minimal 10 kali/setahun dalam bulan berbeda
2. Memiliki minimal 5 orang kader
3. Cakupan minimal 50% sasaran imunisasi mendapatkan layanan KIA, gizi, Imunisasi, dan KB
4. Memiliki alat pemantauan pertumbuhan dan perkembangan
5. Mengembangkan kegiatan tambahan Kesehatan minimal 1 kegiatan pengembangan seperti kesehatan remaja, usia kerja, lanjut usia, dll
Syarat tersebut merupakan syarat ideal sebuah posyandu. Namun posyandu yang tidak memenuhi semua syarat tersebut tetap dicatat, karena tujuan Podes ingin menangkap semua pelaksanaan posyandu baik yang memenuhi syarat tersebut maupun tidak.'
			],
            [
                'dataKey' => '606. b',
                'label' => 'Posyandu dengan kegiatan/pelayanan setiap sebulan sekali',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui jumlah Posyandu berdasarkan kegiatan/pelayanan yang dibagi menjadi dua, yaitu:
1. Kegiatan/pelayanan setiap sebulan sekali yaitu posyandu yang minimal ada satu kegiatan/pelayanan setiap bulan.'
			],
            [
                'dataKey' => '606. c',
                'label' => 'Posyandu dengan kegiatan/pelayanan setiap 2 bulan sekali atau lebih',
                'definisi' => '2. Kegiatan/pelayanan setiap 2 bulan sekali atau lebih yaitu posyandu yang ada kegiatan/pelayanan tapi tidak setiap bulan.'
			],
            [
                'dataKey' => '606. d',
                'label' => 'Pos Pembinaan Terpadu (Posbindu)',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui jumlah Posbindu yang ada di desa/ kelurahan. Pos Pembinaan Terpadu (Posbindu), yang saat ini dikenal Posbindu PTM (Penyakit Tidak Menular) merupakan peran serta masyarakat dalam melakukan kegiatan deteksi dini dan pemantauan faktor risiko PTM Utama yang dilaksanakan secara terpadu, rutin, dan periodik (Juknis Pelaksanaan Posbindu, Kemenkes, 2012).
Faktor risiko penyakit tidak menular meliputi merokok, konsumsi minuman beralkohol, pola makan tidak sehat, kurang aktifitas fisik, obesitas, stres, hipertensi, hiperglikemi, hiperkolesterol serta menindaklanjuti secara dini faktor risiko yang ditemukan melalui konseling kesehatan dan segera merujuk ke fasilitas pelayanan kesehatan dasar.
Beberapa bentuk Kegiatan Posbindu, antara lain:
1. Monitoring faktor risiko bersama PTM secara rutin dan periodik. Rutin berarti kebiasaan memeriksa kondisi kesehatan meski tidak dalam kondisi sakit. Sedangkan Periodik artinya pemeriksaan kesehatan dilakukan secara berkala.
2. Konseling faktor risiko PTM tentang diet, aktivitas fisik, merokok, stres, dan lain-lain.
3. Penyuluhan/dialog interaktif sesuai masalah terbanyak.
4. Aktivitas fisik bersama seperti olahraga bersama, kerja bakti, dan lain-lain.
5. Rujukan kasus faktor risiko sesuai kriteria klinis.
Penjelasan: Perbedaan posbindu dengan posyandu adalah pada sasarannya. Sasaran Posbindu adalah kelompok masyarakat sehat, berisiko dan penyandang PTM atau orang dewasa yang berumur 15 tahun keatas yang mempunyai faktor risiko PTM, sedangkan sasaran posyandu adalah bayi, balita, Ibu hamil, ibu menyusui, ibu nifas, serta wanita usia subur.'
			],
            [
                'dataKey' => '606. e',
                'label' => 'Jumlah kader pelaksana (KB/kesehatan ibu dan anak)',
                'definisi' => 'Jumlah kader pelaksana (KB/kesehatan ibu dan anak) adalah jumlah kader posyandu, kader posyandu dengan kegiatan/pelayanan setiap bulan atau setiap dua bulan dan kader pelaksana pembinaan terpadu (posbindu) yang aktif di desa. Contoh, apabila 1 orang yang sama mengelola setiap kegiatan/pelayanan di posyandu dan posbindu, maka jumlah kader pelaksana adalah 1 orang'
			],
            [
                'dataKey' => '607',
                'label' => 'Tenaga kesehatan yang tinggal/menetap di pekon/kelurahan',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui kemudahan masyarakat dalam mengakses kesehatan. Diharapkan, jika ada tenaga kesehatan yang tinggal/ menetap di desa/kelurahan, warga dengan mudah mendapatkan pelayanan pengobatan.
Menurut Permenkes Nomor 36 Tahun 2014 tentang Tenaga Kesehatan, tenaga kesehatan adalah setiap orang yang mengabdikan diri dalam bidang kesehatan serta memiliki pengetahuan dan/atau keterampilan melalui pendidikan di bidang kesehatan yang untuk jenis tertentu memerlukan kewenangan untuk melakukan upaya kesehatan.
1. Dokter meliputi dokter umum dan dokter spesialis, tidak termasuk dokter hewan.
2. Bidan adalah seorang petugas paramedis yang memperoleh pendidikan formal mengenai kebidanan dan berdomisili/tinggal di desa/kelurahan.
3. Tenaga kesehatan lainnya meliputi : tenaga keperawatan, tenaga psikologi klinis, tenaga kefarmasian (analis farmasi, asisten apoteker, dan sarjana farmasi) tenaga kesehatan masyarakat, tenaga kesehatan lingkungan, tenaga gizi, tenaga keterapian fisik, tenaga keteknisian medis, tenaga teknik biomedika, sebagainya.
a. Tenaga kesehatan masyarakat meliputi epidemiolog kesehatan, tenaga promosi kesehatan dan ilmu perilaku, pembimbing kesehatan kerja, tenaga administrasi dan kebijakan kesehatan, tenaga biostatistik dan kependudukan, serta tenaga kesehatan reproduksi dan keluarga.
b. Tenaga kesehatan lingkungan meliputi tenaga sanitasi lingkungan, entomolog kesehatan, dan mikrobiolog kesehatan.
c. Tenaga gizi meliputi nutrisionis dan dietisien.
d. enaga keterapian fisik meliputi fisioterapis, okupasiterapis, terapis wicara, dan akupuntur.
e. Tenaga keteknisian medis meliputi perekam medis dan informasi kesehatan, teknik kardiovaskuler, teknisi pelayanan darah, refraksionis optisien/optometris, teknisi gigi, penata anestesi, terapis gigi dan mulut, dan audiologis.
f. Tenaga teknik biomedika meliputi radiografer, elektromedis, ahli teknologi laboratorium medik, fisikawan medik, radioterapis, dan ortotik prostetik.'
			],
            [
                'dataKey' => '608',
                'label' => 'Keberadaan Bidan Di Pekon (BDD):',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui keberadaan bidan di desa (BDD). Bidan desa adalah seorang petugas paramedis yang bertugas sebagai bidan di desa/kelurahan dengan SK (bidan di desa). Bidan yang dimaksud adalah seorang petugas paramedis yang memperoleh pendidikan formal mengenai kebidanan dan tidak termasuk seseorang yang memperoleh pendidikan dan pelatihan kebidanan dari instansi terkait, seperti dinas kesehatan.'
			],
            [
                'dataKey' => '609',
                'label' => 'Jumlah dukun bayi/dukun bersalin/paraji yang tinggal/menetap di pekon/kelurahan',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui jumlah dukun bayi/dukun bersalin/paraji yang tinggal/menetap di desa/ kelurahan. Dukun bayi/dukun bersalin atau dengan sebutan lain paraji adalah wanita yang memiliki keterampilan secara turun temurun untuk menolong persalinan secara tradisional.'
			],
            [
                'dataKey' => '610',
                'label' => 'Jumlah warga penderita kekurangan gizi (marasmus dan kwashiorkor) di pekon/kelurahan selama tahun kemarin:',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui jumlah warga penderita Kekurangan Gizi seperti Marasmus/Kwashiorkor selama tahun 2023. Gizi buruk adalah suatu keadaan kekurangan konsumsi zat gizi yang disebabkan oleh rendahnya konsumsi energi protein dalam makanan sehari-hari, yang ditandai dengan berat dan tinggi badan tidak sesuai umur (dibawah rata-rata) dan harus ditetapkan oleh tenaga medis. Busung lapar termasuk salah satu bentuk gizi buruk. Secara klinis, status gizi buruk meliputi tiga tipe, yaitu marasmus, kwashiorkor, dan marasmus-kwashiorkor.
Marasmus merupakan salah satu bentuk gizi buruk yang paling sering ditemukan pada balita. Hal ini merupakan hasil akhir dari tingkat keparahan gizi buruk. Gejala marasmus antara lain anak tampak kurus, rambut tipis dan jarang, kulit keriput yang disebabkan oleh lemak di bawah kulit yang berkurang, muka seperti orang tua (berkerut), balita cengeng dan rewel meskipun setelah makan, dan iga gambang.
Kwashiorkor adalah suatu bentuk malnutrisi protein yang berat disebabkan oleh asupan karbohidrat yang normal atau tinggi dan asupan protein yang inadekuat. Seperti marasmus, kwashiorkor juga merupakan hasil akhir dari tingkat keparahan gizi buruk. Tanda khas kwashiorkor antara lain pertumbuhan terganggu, perubahan mental, pada sebagian besar penderita ditemukan oedema (sembab) baik ringan maupun berat, gejala gastrointestinal, rambut kepala mudah dicabut, kulit penderita biasanya kering dengan menunjukkan garis-garis kulit yang lebih mendalam dan lebar, sering ditemukan hiper pigmentasi dan persikan kulit, pembesaran hati, anemia ringan, serta pada biopsi hati ditemukan perlemakan.
Marasmus-kwashiorkor, gejala klinisnya merupakan campuran dari beberapa gejala klinis antara marasmus dan kwashiorkor.

Catatan : Jika kepala desa/lurah atau aparat pemerintahan desa/kelurahan tidak mengetahui jumlah warga penderita gizi buruk, maka petugas dapat menanyakan/mencari datanya ke puskesmas atau ke narasumber lainnya yang relevan.'
			],
            [
                'dataKey' => '611',
                'label' => 'Jumlah surat miskin/SKTM yang dikeluarkan pekon/kelurahan selama tahun kemarin:',
                'definisi' => 'Rincian ini untuk mengetahui jumlah surat miskin/SKTM yang dikeluarkan desa/ kelurahan selama tahun 2023. Surat miskin/Surat Keterangan Tidak Mampu (SKTM) adalah surat keterangan yang diberikan oleh kepala desa/lurah kepada masyarakat miskin untuk keperluan tertentu.'
			],
            [
                'dataKey' => '612',
                'label' => 'Kejadian luar biasa (KLB) atau wabah penyakit selama setahun terakhir',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui kejadian luar biasa atau wabah penyakit selama setahun terakhir di desa/kelurahan. Kejadian Luar Biasa yang selanjutnya disingkat KLB, adalah timbulnya atau meningkatnya kejadian kesakitan dan/atau kematian yang bermakna secara epidemiologi pada suatu daerah dalam kurun waktu tertentu dan merupakan keadaan yang dapat menjurus pada terjadinya wabah (Peraturan Menteri Kesehatan RI Nomor 1501/MENKES/PER/X/2010).
Penetapan KLB menurut Permenkes Nomor 1501 tahun 2010 dapat dilakukan oleh:
1. Kepala dinas kesehatan kabupaten/ kota,
2. Kepala dinas kesehatan provinsi, bila kepala dinas kesehatan kabupaten/kota tidak menetapkan daerahnya dalam keadaan KLB,
3. Menteri kesehatan, bila kepala dinas kesehatan provinsi atau kepala dinas kesehatan kabupaten/kota tidak menetapkan suatu daerah di wilayahnya dalam keadaan KLB.
Penjelasan: Satu kasus yang terjadi dapat dikatakan sebagai KLB apabila kasus tersebut sangat berbahaya. Contohnya penyakit flu burung atau corona/Covid-19.

Jenis KLB/wabah penyakit yang ditanyakan antara lain:
a. Muntaber adalah suatu penyakit yang disebabkan karena peradangan usus oleh bakteri, virus, parasit lain (jamur, cacing, protozoa), keracunan makanan atau minuman yang disebabkan oleh bakteri maupun bahan kimia serta kurang gizi, misalnya kelaparan atau kekurangan protein. Penyakit ini dapat mewabah akibat lingkungan sekitar tempat tinggal yang kurang bersih serta makanan yang dikonsumsi Pedoman Pencacah Desa/Kelurahan terkontaminasi bakteri. Sistem sanitasi yang tidak terjaga dengan baik juga memudahkan kuman untuk berkembang biak. Hujan yang terus menerus sehingga menimbulkan banjir dan lingkungan yang kotor, sangat potensial menimbulkan wabah muntaber. Tanda atau gejala seseorang yang terkena muntaber adalah sakit perut (mulas), kembung, muntah- muntah, demam tinggi, kepala pusing, nafsu makan berkurang, lemas, dan elastisitas kulit menurun. Diare adalah buang air besar dalam bentuk cairan lebih dari 3 kali dalam satu hari dan biasanya berlangsung dua hari atau lebih. Penyebab diare antara lain: bakteri, virus, alergi, dan parasit pada makanan.

b. Demam Berdarah (DB) adalah penyakit menular yang disebabkan oleh virus Dengue dan ditularkan oleh nyamuk Aedes Aegypti betina. Tanda- tanda DB antara lain: demam secara mendadak 2- 7 hari, lemah/lesu, gelisah, nyeri ulu hati disertai tanda pendarahan di kulit berupa bintik perdarahan, lebam, kadang disertai mimisan, berak/muntah darah, dan kesadaran menurun.

c. Campak (Rubiola, Measles) adalah suatu infeksi virus yang sangat menular, yang ditandai dengan demam, batuk, konjungtivitis (peradangan selaput ikat mata), dan ruam kulit.

d. Malaria adalah suatu penyakit menular yang disebabkan oleh parasit protozoa (genus plasmodium) dengan gejala utama demam berkepanjangan dan berulang. Penyebaran malaria melalui nyamuk anopheles betina.

e. Flu burung (avian influenza)/SARS adalah suatu penyakit menular yang disebabkan oleh virus influenza tipe A dan ditularkan oleh unggas.

f. Hepatitis E adalah suatu penyakit yang menyerang hati (liver) yang disebabkan oleh Virus Hepatitis E. Penyebarannya melalui makanan dan minuman yang terkontaminasi oleh virus ini. Virus ini lebih mudah menyebar pada daerah yang memiliki sanitasi buruk.

g. Difteri adalah suatu infeksi akut yang disebabkan oleh bakteri penghasil racun Corynebacterium Diphtheriae. Bakteri ini biasanya menyerang saluran pernafasan, terutama laring, amandel, dan tenggorokan. Tetapi tidak jarang racun juga menyerang kulit dan menyebabkan kerusakan saraf dan jantung. Penyakit ini lebih sering menyerang anak- anak. 

h. Corona/COVID-19 adalah penyakit menular yang disebabkan oleh virus corona baru. Virus ini merupakan virus baru meskipun mirip dengan keluarga virus yang menyebabkan SARS (Severe Acute Respiratory Syndrome) dan sejumlah influensa biasa. Virus tersebut baru ditemukan setelah terjadi wabah di Wuhan, Tiongkok, bulan Desember 2019. Gejala umumnya adalah demam, rasa lelah, dan batuk kering, infeksi ini dapat menyebabkan pnemonia dan kesulitan bernapas. Sebagian orang hanya akan mengalami gejala ringan, atau bahkan Orang Tanpa Gejala (OTG). Masa inkubasinya rata-rata 5-6 hari dengan masa inkubasi terpanjang 14 hari. Penyebaran secara langsung melalui percikan batuk dan napas orang terinfeksi yang kemudian terhirup orang sehat. Sedangkan penyebaran secara tidak langsung melalui benda-benda yang tercemar virus akibat percikan atau sentuhan tangan yang tercemar virus. Virus bisa tertinggal di permukaan benda-benda dan hidup selama beberapa jam hingga beberapa hari, namun cairan disinfektan dapat membunuhnya.
Penjelasan : jumlah penerita yang dicatat adalah yang sudah positif corona, tidak termasuk pasien dalam pengawasa (PDP) maupun orang dalam pengawasan (ODP) 

i. Lainnya, misalnya keracunan makanan, chikungunya, leptospirosis, kolera, dll.

j. Kerawanan Pangan dapat sebagai kondisi suatu daerah, masyarakat atau rumahtangga yang tingkat ketersediaan dan keamanan pangannya tidak cukup untuk memenuhi standar kebutuhan fisiologi bagi pertumubuhan dan kesehatan sebagian amsyarakat (Permentan No 43/2010).

Rincian 711 Kolom (2): KLB/wabah penyakit
Rincian ini bertujuan untuk mengetahui ada atau tidaknya KLB/wabah penyakit. Isikan kode 1 atau 2 pada masing masing baris jenis KLB/wabah penyakit.

Rincian 711 Kolom (3): Jumlah penderita KLB/wabah penyakit
Rincian ini bertujuan untuk mengetahui jumlah penderita KLB/wabah penyakit. Isikan jumlah penderita di Kolom (3) apabila Kolom (2) terisi kode 1. Apabila Kolom (2) terisi kode 2, maka Kolom (3) tidak boleh ada isian/harus blank.

Rincian 711 Kolom (4): Jumlah penderita KLB/wabah penyakit yang meninggal
Rincian ini bertujuan untuk mengetahui jumlah penderita KLB/wabah penyakit yang meninggal. Isikan jumlah penderita yang meninggal di Kolom (4) apabila Kolom (2) terisi kode 1. Apabila Kolom (2) terisi kode 2, maka Kolom (4) tidak boleh ada isian/harus blank.
Penjelasan: Jumlah penderita yang meninggal merupakan bagian dari jumlah penderita.'
			],
            [
                'dataKey' => '701',
                'label' => 'Keberadaan warga yang menganut agama/kepercayaan di pekon/kelurahan',
                'definisi' => 'Rincian ini bertujuan untuk mnegetahui keberadaan warga yang menganut agama/kepercayaan di desa/ kelurahan sesuai dengan yang tercantum dalam Kartu Tanda Penduduk (KTP). Agama Kristen memiliki beberapa aliran, antara lain: Protestan, Advent, Pantekosta, Baptis, Kharismatik, dan lain-lain.
Aliran Penghayat Kepercayaan yang dimaksud dalam rincian ini adalah kepercayaan terhadap Tuhan Yang Maha Esa, yang merupakan salah satu unsur kebudayaan warisan leluhur, sering disebut dengan kebatinan, kejiwaan, dan kerohanian yang dilestarikan dalam rangka mendukung pelestarian dan pengembangan budaya bangsa. Contoh kepercayaan yang ada di Indonesia: Organisasi Aji Dipa, Organisasi Hak Sejati, Paguyuban Jaya Sampurna, Hindu Kaharingan, dll. (Keputusan Mahkamah Konstitusi Pasal 61 Undang-Undang Nomor 23 Tahun 2006 dan Pasal 64 Undang-Undang Nomor 24 Tahun 2013 tentang Administrasi Kependudukan, yang membolehkan kolom agama diisi dengan aliran kepercayaan pada tanggal 7 November 2017).'
			],
            [
                'dataKey' => '702',
                'label' => 'Agama/kepercayaan yang dianut oleh sebagian besar warga di pekon/kelurahan',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui agama/kepercayaan yang dianut oleh sebagian besar warga di desa/kelurahan. Isian harus merujuk pada R801 kolom (1), dimana kolom (3) nya berkode 1. Isikan salah satu kode agama/kepercayaan pada Rincian 801 kolom (1) yang dianut oleh sebagian besar warga di desa/kelurahan ini.'
			],
            [
                'dataKey' => '703',
                'label' => 'Jumlah tempat ibadah di pekon/kelurahan:',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui jumlah tempat ibadah di desa/kelurahan. Tempat ibadah adalah bangunan/ruangan yang lokasinya tetap dan peruntukannya khusus untuk ibadah oleh masyarakat umum sesuai agama yang dianut tanpa memandang status kepemilikan, termasuk bangunan/ruangan yang lokasinya tetap dan fungsinya dikhususkan untuk ibadah di fasilitas umum. Tidak termasuk tempat ibadah yang khusus dipakai oleh pribadi/keluarga.

Jenis tempat ibadah
a. Masjid adalah tempat peribadatan umat Islam, yang dapat digunakan untuk Sholat Jumat.
b. Surau/Langgar/Musala adalah tempat peribadatan umat Islam, lebih kecil dari masjid dan tidak digunakan untuk Sholat Jumat.
c. Gereja Kristen adalah tempat ibadah untuk umat Kristen.
d. Gereja Katolik adalah tempat ibadah untuk umat Katolik.
e. Kapel adalah tempat ibadah untuk umat Katolik yang tidak ada Pastur.
f. Pura adalah tempat sembahyang umat Hindu.
g. Wihara adalah tempat ibadah umat Buddha.
h. Kelenteng adalah tempat ibadah umat Konghucu.
i. Balai Basarah merupakan tempat ibadah umat Kaharingan.
j. Lainnya, khusus untuk tempat ibadah Aliran Penghayat Kepercayaan. Contohnya Pamunjungan atau disebut Kabuyutan, yang merupakan tempat ibadah umat Sunda Wiwitan.

Penjelasan: Tempat ibadah yang dicatat termasuk tempat ibadah yang sedang dalam proses pembangunan namun sudah mulai beroperasi dan tempat ibadah yang sudah ada namun sedang direnovasi.'
			],
            [
                'dataKey' => '704. a',
                'label' => 'Warga pekon/kelurahan terdiri dari beberapa suku/etnis',
                'definisi' => 'Suku/etnis adalah golongan suku/etnis yang tinggal di desa/kelurahan ini yang biasanya ditandai dengan kebudayaan dan adat istiadat tertentu. Jika warga desa/kelurahan terdiri dari beberapa suku/etnis, maka isikan kode â€˜1â€™ dan isikan tiga nama suku/etnis terbesar warga di desa/kelurahan pada tempat yang tersedia (Rincian 804a.2). Penulisan nama suku/etnis diurutkan mulai dari yang jumlah warganya paling banyak.'
			],
            [
                'dataKey' => '704. b',
                'label' => 'Warga pekon/kelurahan berkomunikasi sehari-hari menggunakan beberapa bahasa',
                'definisi' => 'Bahasa yang dimaksud dalam Podes ini adalah bahasa yang digunakan oleh sebagian besar warga desa/kelurahan untuk berkomunikasi.'
			],
            [
                'dataKey' => '705',
                'label' => 'Banyaknya penyandang disabilitas di pekon/kelurahan:',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui banyaknya penyandang disabilitas di desa/kelurahan. Penyandang disabilitas adalah setiap orang yang mengalami keterbatasan fisik, intelektual, mental, dan/atau sensorik dalam jangka waktu lama yang dalam berinteraksi dengan lingkungan dapat mengalami hambatan dan kesulitan untuk berpartisipasi secara penuh dan efektif dengan warga negara lainnya berdasarkan kesamaan hak. Yang dimaksud dengan â€œdalam jangka waktu lamaâ€ adalah jangka waktu paling singkat 6 (enam) bulan dan/atau bersifat permanen (Undang-Undang Nomor 8 Tahun 2016 tentang Penyandang Disabilitas).
Penyandang Disabilitas fisik adalah terganggunya fungsi gerak, antara lain amputasi, lumpuh layuh atau kaku, paraplegi, celebral palsy (CP), akibat stroke, akibat kusta, dan orang kecil.
Penyandang Disabilitas intelektual adalah terganggunya fungsi pikir karena tingkat kecerdasan di bawah rata-rata, antara lain lambat belajar, disabilitas grahita dan down syndrom.
Penyandang Disabilitas mental adalah terganggunya fungsi pikir, emosi, dan perilaku, antara lain:
a) Psikososial di antaranya skizofrenia, bipolar, depresi, anxietas, dan gangguan kepribadian; dan
b) Disabilitas perkembangan yang berpengaruh pada kemampuan interaksi sosial di antaranya autis dan hiperaktif.
Penyandang Disabilitas sensorik adalah terganggunya salah satu fungsi dari panca indera, antara lain disabilitas netra, disabilitas rungu, dan/atau disabilitas wicara.
Penyandang Disabilitas ganda atau multi adalah Penyandang Disabilitas yang mempunyai dua atau lebih ragam disabilitas, antara lain disabilitas runguwicara dan disabilitas netra-tuli.

Adapun jenis disabilitas yang dicakup dalam Podes antara lain:
a) Tuna netra adalah mereka yang tidak memiliki penglihatan sama sekali (buta total) hingga mereka yang masih memiliki sisa penglihatan tetapi tidak mampu menggunakan penglihatannya untuk membaca tulisan biasa berukuran 12 point dalam keadaan cahaya normal dan dari jarak yang normal meskipun dibantu oleh kaca mata (kurang awas/low vision).
b) Tuna rungu adalah penderita kerusakan alat dan organ pendengaran yang menyebabkan kehilangan kemampuan menerima atau menangkap bunyi atau suara.
c) Tuna wicara adalah penderita kerusakan atau kehilangan kemampuan berbahasa, mengucapkan kata-kata, ketepatan dan kecepatan berbicara serta produksi suara.
d) Tuna rungu wicara adalah penderita ketidakmampuan dalam memproduksi suara dan berbahasa yang disebabkan karena kerusakan alat dan organ pendengaran sehingga anak tidak mengenal cara mempergunakan organ bicara dan tidak mengenal konsep bahasa.
e) Tuna daksa (disabilitas tubuh)/kelumpuhan/kelainan/ ketidaklengkapan anggota gerak adalah penderita kelainan pada tulang, otot, atau sendi anggota gerak dan tubuh, serta kelumpuhan/ketidaklengkapan anggota gerak/tulang sehingga menimbulkan gangguan gerak.
Penjelasan: Lumpuh stroke tidak termasuk tuna daksa.
f) Tuna grahita (keterbelakangan mental) adalah penderita kelainan/ keterbelakangan mental/jiwa sehingga tidak mampu melakukan aktivitas yang umum dilakukan orang lain seusianya, misal idiot.
g) Tuna laras adalah penderita hambatan/gangguan dalam mengendalikan emosi dan kontrol sosial. Seseorang eks sakit jiwa termasuk ke dalam kategori tunalaras jika masih sering/kadang-kadang kambuh/mengalami gangguan dalam mengendalikan emosi dan kontrol sosial (atau yang masih harus minum obat). Jika orang eks sakit jiwa tersebut sudah sembuh total (tidak pernah kambuh lagi), maka dia tidak termasuk penyandang cacat tunalaras.
h) Tuna eks sakit kusta adalah penderita kecacatan yang disebabkan oleh penyakit kusta/lepra yang secara medis sudah dinyatakan sembuh.
i) Tuna ganda (fisik-mental) adalah orang yang menderita cacat mental (tuna grahita atau tunalaras) dan cacat fisik (buta, tuli, bisu, bisu-tuli atau cacat tubuh).'
			],
            [
                'dataKey' => '706',
                'label' => 'Jumlah orang yang dipasung di pekon/kelurahan',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui jumlah orang yang dipasung di desa/kelurahan. Berdasarkan Peraturan Menteri Kesehatan Nomor 54 Tahun 2017 tentang Penanggulangan Pemasungan, pemasungan adalah segala bentuk pembatasan gerak ODGJ oleh keluarga atau masyarakat yang mengakibatkan hilangnya kebebasan ODGJ, termasuk hilangnya hak atas pelayanan kesehatan untuk membantu pemulihan pada Orang Dengan Gangguan Jiwa. Pemasungan biasanya dilakukan masyarakat terhadap penderita gangguan jiwa (biasanya yang berat) dengan cara dikurung, dirantai kakinya, dimasukan kedalam balok kayu, dan lain-lain sehingga kebebasannya menjadi hilang.'
			],
            [
                'dataKey' => '707',
                'label' => 'Ruang publik terbuka yang peruntukan utamanya sebagai tempat bagi warga pekon/kelurahan untuk bersantai/bermain tanpa perlu membayar (misalnya: lapangan terbuka/alun-alun, taman, dll.)',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui keberadaan ruang publik terbuka yang peruntukkan utamanya sebagai tempat bagi warga/kelurahan untuk bersantai/bermain tanpa perlu membayar. Ruang publik terbuka yang dimaksud adalah ruang/lahan umum yang kegunaan utamanya sebagai tempat warga/masyarakat untuk bersantai/ bermain tanpa perlu membayar. Ruang publik terbuka dapat berupa lapangan terbuka/alun-alun, taman, tempat bermain, dsb.'
			],
            [
                'dataKey' => '708',
                'label' => 'Jumlah jenis-jenis lembaga kemasyarakatan di pekon/kelurahan

a. PKK
b. Karang Taruna
c. Lembaga adat
d. Kelompok tani
e. Lembaga Pengelolaan air
f. Kelompok masyarakat (pokmas)',
                'definisi' => 'Rincian ini bertujuan untuk mengetahui banyaknya lembaga-lembaga kemasyarakatan yang ada dan masih aktif. Lembaga Kemasyarakatan atau yang disebut dengan nama lain adalah lembaga yang dibentuk oleh masyarakat sesuai dengan kebutuhan dan merupakan mitra Kepala Desa/Lurah dalam memberdayakan masyarakat. Menurut Peraturan Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 18 Tahun 2018 tentang Lembaga Kemasyarakatan Desa Dan Lembaga Adat Desa, Lembaga Kemasyarakatan Desa yang selanjutnya disingkat LKD adalah wadah partisipasi masyarakat, sebagai mitra Pemerintah Desa, ikut serta dalam perencanaan, pelaksanaan dan pengawasan pembangunan, serta meningkatkan pelayanan masyarakat Desa.

Jenis lembaga
a. Tim Penggerak Pemberdayaan dan Kesejahteraan Keluarga Desa/Kelurahan (TP PKK) adalah lembaga kemasyarakatan sebagai mitra kerja pemerintah dan organisasi kemasyarakatan lainnya, yang berfungsi sebagai fasilitator, perencana, pelaksana, pengendali, dan penggerak pada masing-masing jenjang pemerintahan untuk terlaksananya program PKK.
b. Karang Taruna adalah lembaga kemasyarakatan yang merupakan wadah pengembangan generasi muda yang tumbuh dan berkembang atas dasar kesadaran dan rasa tanggung jawab sosial dari, oleh dan untuk masyarakat terutama generasi muda di wilayah desa/kelurahan atau komunitas adat sederajat dan terutama bergerak dibidang usaha kesejahteraan sosial, yang secara fungsional dibina dan dikembangkan oleh Departemen Sosial.
c. Lembaga Adat adalah lembaga kemasyarakatan baik yang sengaja dibentuk maupun yang secara wajar telah tumbuh dan berkembang di dalam sejarah masyarakat atau dalam suatu masyarakat hukum adat tertentu dengan wilayah hukum dan hak atas harta kekayaan di dalam hukum adat tersebut, serta berhak dan berwenang untuk mengatur, mengurus, dan menyelesaikan berbagai permasalahan kehidupan yang mengacu dan berkaitan dengan adat istiadat serta hukum adat yang berlaku.
d. Kelompok tani (poktan) adalah kumpulan petani/peternak/pekebun yang dibentuk atas dasar kesamaan kepentingan; kesamaan kondisi lingkungan sosial, ekonomi, dan sumberdaya; kesamaan komoditas; dan keakraban untuk meningkatkan dan mengembangkan usaha anggota.
e. Lembaga Pengelolaan Air, contohnya adalah Perkumpulan Petani Pemakai Air (P3A).
f. Kelompok masyarakat (pokmas) adalah sebuah organisasi kemasyarakatan yang dibentuk dengan tujuan sebagai wadah aspirasi, pikiran, dan tujuan bersama untuk memudahkan diseminasi informasi atau melibatkan sejumlah masyarakat di desa.'
			],
            [
                'dataKey' => '801',
                'label' => 'Ketersediaan fasilitas/lapangan dan kelompok kegiatan olahraga di pekon/kelurahan',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui ketersediaan fasilitas/lapangan dan kelompok kegiatan olahraga. Dimulai dari sepak bola, bola voli, bulu tangkis, bola basket, tenis lapangan, tenis meja, futsal, renang, bela diri (pencak silat, karate, dll), bilyard, pusat kebugaran (senam, fitnes, aerobik, dll) dan lainnya. Lapangan olahraga adalah tempat lapang untuk kegiatan olahraga yang ada di desa/kelurahan baik yang sesuai dengan persyaratan olahraga yang bersangkutan maupun tidak.
Penjelasan:
1) Keberadaan lapangan olahraga yang dimaksudkan bukan hanya yang dimiliki oleh desa/kelurahan, melainkan juga lapangan yang dimiliki swasta atau pribadi, baik yang difungsikan secara komersial maupun tidak komersial dan masyarakat umum dapat mengaksesnya.
2) Bila ada satu lapangan yang diperuntukkan lebih dari satu jenis kegiatan olahraga, misal untuk bulu tangkis dan voli maka dianggap memiliki dua jenis lapangan yaitu lapangan bulu tangkis dan voli.
3) Ukuran lapangan yang sesuai dengan persyaratan sebagai berikut:
a. Lapangan sepak bola adalah lapangan yang diperuntukkan bagi prasarana cabang olahraga sepak bola dengan ukuran 110 m x 70 m.
b. Lapangan bola voli adalah prasarana olahraga yang diperuntukkan bagi permainan bola voli dengan ukuran lapangan yang umum adalah 18 m x 9 m dengan lantai terbuat dari tanah/beton. Ukuran tinggi net putra 2,43 meter dan untuk net putri 2,24 meter.
c. Lapangan bulu tangkis adalah prasarana olahraga yang diperuntukkan bagi permainan bulu tangkis dengan ukuran lapangan 14,40 m x 6,10 m dengan lantai terbuat dari tanah/beton/papan kayu.
d. Lapangan bola basket adalah prasarana olahraga yang diperuntukkan bagi permainan bola basket dengan ukuran lapangan 28 m x 15 m dengan lantai terbuat dari beton.
e. Lapangan tenis adalah prasarana olahraga yang diperuntukkan bagi olahraga tenis lapangan dengan ukuran lapangan 23,77 m x 10,97 m dengan lantai terbuat dari rumput/gravel/beton.
f. Tenis Meja adalah suatu permainan yang menggunakan meja sebagai lapangan yang dibatasi oleh jaring (net) yang menggunakan bola kecil dan permainannya menggunakan pemukul atau yang disebut bet. Meja berbentuk persegi panjang dengan ukuran panjang 274 cm, lebar 152,5 cm, dan tinggi 76 cm.
g. Lapangan futsal adalah lapangan yang diperuntukkan bagi prasarana cabang olahraga sepak bola di dalam ruangan. Aturan main sama seperti bermain sepak bola biasa. Hanya saja ada sedikit modifikasi pada beberapa hal, misalnya: setiap tim memiliki lima pemain dan dipimpin oleh seorang wasit, bila bola keluar lapangan, bola tidak dilempar melainkan ditendang, dll. Luas lapangannya yaitu panjangnya 25-43 meter dan lebarnya 15-25 meter.
h. Kolam renang adalah prasarana olahraga dengan ukuran kolam 50 m x 25 m atau 25 m x 15 m, baik digunakan untuk kegiatan renang, polo air, dll.
i. Olahraga bela diri mencakup pencak silat, karate, capoera, taekwondo, martial art, dan lain-lain.
j. Bilyard atau biasa disebut dengan permainan bola sodok. Permainan ini menggunakan meja dan juga tongkat biliar agar bolanya dapat masuk ke dalam lubang. Pada olahraga ini, peserta diharapkan dapat mengarahkan bola sasaran masuk kedalam salah satu lubang dari 6 lubang yang ada dipinggir meja biliar. Meja biliar memiliki ukuran panjang dua kali dari lebarnya. Pengukuran meja dalam satu kaki (foot), yaitu 9 kaki, 8 kaki, dan 7 kaki. Untuk bagian permukaan berbentuk empat persegi panjang dengan rasio 2:1.
k. Fitness, aerobik, dll adalah tempat khusus berolahraga ataupun melakukan aktivitas fisik. Sebuah fitness centre yang biasanya menyajikan banyak fasilitas dengan konsep one stop sport dan entertainment menjadi kunci utamanya. Dengan konsep ini, diharapkan kesadaran akan pentingnya kesehatan dan olahraga tetap tinggi dan tentunya dengan harapan lain, seperti sportainment dimana orang dapat melakukan olahraga yang biasanya berujung pada kebosanan dengan sangat menyenangkan sebagai penanggulangan atas tingginya tingkat stres, dan yang terakhir adalah mengubah anggapan masyarakat bahwa olahraga tidaklah pagi hari, sore, malam bahkan setiap saatpun bisa. Ketegangan, tekanan, dan kesibukan yang disebabkan oleh rutinitas yang ada membuat energi kita terkuras, diharapkan dengan adanya sarana olahraga seperti ini, energi yang tadinya terkuras dapat di-recharge kembali.
l. Lainnya, adalah fasilitas/lapangan atau kelompok kegiatan olahraga lainya yang terdapat di desa/kelurahan.

Catatan: Yang dicatat adalah tempat fitness yang menggunakan bangunan tetap, untuk masuk biasanya berbayar, dan minimal tersedia fasilitas untuk melakukan latihan beban (barbell, dumbell, dll) dan kardio (treadmill, sepeda statis, aerobik, dll). Jika di desa/kelurahan tersebut terdapat kelompok aerobik/yoga tapi pelaksanaan aerobik/yoga tersebut dilakukan di lapangan bulu tangkis atau lainnya, maka dianggap di desa/kelurahan tersebut tidak memiliki fasilitas pusat kebugaran tetapi terdapat kelompok kegiatan pusat kebugaran.
Penjelasan: Ukuran lapangan diatas merupakan ukuran standar. Apabila ada yang tidak sesuai dengan ukuran standar tetapi diperuntukkan sebagai lapangan olahraga maka dianggap ada fasilitas lapangan olahraga di desa/kelurahan tersebut.

Kelompok kegiatan olahraga mengacu pada kelompok kegiatan yang dibentuk oleh warga desa dan anggotanya adalah warga desa/kelurahan setempat maupun warga di luar desa/kelurahan, tanpa memperhatikan apakah kegiatan olahraga tersebut dilakukan di desa/kelurahan maupun di tempat lain.

Rincian 901 Kolom (2): Fasilitas/lapangan olahraga
Kolom ini digunakan untuk mengetahui kondisi fasilitas/lapangan olahraga untuk tiap jenis olahraga pada rincian 901 kolom (1). Kategori pilihan jawaban pada kolom ini:
1) Ada, baik
2) Ada, rusak sedang
3) Ada, rusak parah
4) Tidak ada
Rincian 901 Kolom (3): Kelompok kegiatan
Kolom ini digunakan untuk mengetahui keberadaan kelompok kegiatan tiap jenis olahraga pada rincian 901 kolom (1). Kategori pilihan jawaban pada kolom ini:
1) Ada
2) Tidak ada'
			],
            [
                'dataKey' => '802',
                'label' => 'Keberadaan pub/diskotek/tempat karaoke yang masih berfungsi di pekon/kelurahan',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui keberadaan pub/diskotek/tempat karaoke yang masih berfungsi. Pub/diskotek/tempat karaoke adalah tempat/gedung yang digunakan secara permanen untuk pub/diskotek/karaoke. Tidak termasuk peralatan karaoke yang disewakan.'
			],
            [
                'dataKey' => '803',
                'label' => 'Jumlah menara telepon seluler atau Base Transceiver Station (BTS)',
                'definisi' => 'BTS adalah alat yang berfungsi sebagai pengirim dan penerima (transceiver) sinyal komunikasi seluler. BTS ditandai adanya menara/tower yang dilengkapi antena sebagai perangkat transceiver. Masyarakat umum sering menyebutnya sebagai tower telepon seluler/handphone.
Ada dua jenis antena BTS yang sering kita jumpai di tower seluler yaitu:
1. Antena parabola (Microwave)
Antena ini disebut juga dengan antena parabola. Antena parabola ini memiliki radiasi gelombang elektromagnetik yang menyempit sehingga dapat menjangkau jarak yang jauh. Sehingga antena parabola ini dipakai untuk menghubungkan antar tower seolah-olah kabel tak terlihat.
2. Antena yang berbentuk persegi panjang (sektoral)
Antena ini disebut antena sektoral. Karakteristik antena ini memiliki radiasi yang lebih lebar yang berguna untuk menangkap sinyal dari handphone di sekitar tower. Antena jenis ini yang dipakai oleh perangkat yang disebut sebagai BTS (2G), NodeB (3G), maupun eNodeB (LTE).
Penegasan: Di desa/kelurahan yang terdapat BTS terpasang pada gedung tinggi dianggap bahwa di desa/kelurahan tersebut ada menara BTS. Jumlah menara BTS yang dihitung adalah jumlah gedung yang terpasang/terdapat BTS.'
			],
            [
                'dataKey' => '901',
                'label' => 'Luas lahan menurut jenis penggunaan lahan (1 kmÂ²=100 ha)
a. Lahan pertanian sawah (R901a.1+R901a.2) : â€¦â€¦â€¦â€¦â€¦â€¦â€¦. Ha
1. Lahan sawah irigasi : â€¦â€¦â€¦â€¦â€¦â€¦â€¦. Ha
2. Lahan sawah non irigasi (tadah hujan, pasang surut, rawa) : â€¦â€¦â€¦â€¦â€¦â€¦â€¦. Ha

b. Lahan pertanian non sawah : â€¦â€¦â€¦â€¦â€¦â€¦â€¦. Ha
(tegal/kebun, ladang/huma, tambak, kolam/tebat/empang, perkebunan, peternakan, dll.)

c. Lahan nonpertanian : â€¦â€¦â€¦â€¦â€¦â€¦â€¦. Ha
(perumahan, industri, perkantoran, pertokoan, jalan, prasarana umum, lapangan, dll.)',
                'definisi' => 'Secara umum, penggunaan lahan yang ada di desa/kelurahan dapat dibagi menjadi: a) lahan pertanian sawah, b) lahan pertanian non sawah, dan c) lahan non pertanian.
a. Lahan pertanian sawah 
Lahan pertanian sawah adalah lahan pertanian yang berpetak-petak dan dibatasi oleh pematang atau saluran irigasi, yang biasanya ditanami padi sawah, palawija, atau tanaman budidaya lainnya. Lahan pertanian sawah terdiri dari lahan sawah irigasi dan nonirigasi.
1. Lahan sawah irigasi:
- Lahan sawah irigasi teknis adalah lahan sawah yang mempunyai jaringan irigasi dimana saluran pemberi terpisah dari saluran pembuang agar penyediaan dan pembagian air dalam lahan sawah tersebut dapat sepenuhnya diatur dan diukur dengan mudah. Biasanya sawah irigasi teknis mempunyai jaringan irigasi yang memiliki saluran primer dan sekunder serta bangunannya dikuasai dan dipelihara oleh PU (Pekerjaan Umum). Ciri-ciri irigasi teknis: air dapat diatur dan diukur sampai dengan saluran tersier serta bangunannya permanen.
- Lahan sawah irigasi setengah teknis adalah lahan sawah yang memperoleh irigasi dari irigasi setengah teknis. Sama halnya dengan pengairan teknis, namun dalam hal ini PU hanya mengusai bangunan penyadap untuk dapat mengatur dan mengukur pemasukan air, sedangkan pada jaringan selanjutnya tidak diukur dan tidak dikuasai oleh PU. Ciri-ciri irigasi setengah teknis: air dapat diatur seluruh sistem, tetapi yang dapat diukur hanya sebagian (primer/sekunder). Bangunan sebagian belum permanen (sekunder/tersier), sementara primer sudah permanen.
- Lahan sawah irigasi sederhana adalah lahan sawah yang memperoleh pengairan dari irigasi sederhana yang sebagian besar jaringannya (bendungan) dibangun oleh PU. Ciri-ciri irigasi sederhana: air dapat diatur, bangunan-bangunannya belum/tidak permanen (mulai dari primer sampai tersier).
- Lahan sawah irigasi desa/non PU adalah lahan sawah yang memperoleh pengairan dari sistem pengairan yang dikelola sendiri oleh masyarakat atau irigasi desa. Termasuk lahan sawah irigasi desa/non PU adalah lahan sawah yang diairi dari air yang ditampung di parit.
2. Lahan sawah non irigasi terdiri dari:
- Lahan sawah tadah hujan adalah lahan sawah yang bergantung pada air hujan.
- Lahan sawah pasang surut adalah lahan sawah yang pengairannya tergantung pada air sungai yang dipengaruhi oleh pasang surutnya air laut.
- Lahan sawah lebak adalah lahan sawah yang pengairannya berasal dari reklamasi rawa lebak (bukan pasang surut).
- Rawa adalah lahan genangan air secara ilmiah yang terjadi terus-menerus atau musiman akibat drainase yang terhambat serta mempunyai ciri-ciri khusus secara fisika, kimiawi dan biologis.
- Polder adalah lahan sawah yang terdapat di delta sungai yang pengairannya dipengaruhi oleh air sungai tersebut.
- Lahan sawah yang sementara tidak diusahakan adalah lahan yang biasanya diusahakan tetapi untuk sementara tidak diusahakan lebih dari 1 tahun kurang kurang dari 2 tahun.

b. Lahan pertanian non sawah
1. Tegal/kebun adalah lahan bukan sawah (lahan kering) terpisah dari halaman sekitar rumah yang ditanami tanaman semusim atau tahunan.
2. Ladang/huma adalah lahan bukan sawah (lahan kering) yang biasanya ditanami tanaman musiman, penggunaan lahannya hanya satu atau dua musim, kemudian ditinggalkan bila sudah tidak subur lagi.
3. Perkebunan adalah lahan yang ditanami tanaman perkebunan/industri seperti: karet, kelapa, kopi, teh, dan sebagainya
4. Tambak adalah lahan pertanian yang berpetak-petak dan dibatasi oleh pematang (galengan/saluran) untuk menahan/menyalurkan air payau yang biasanya digunakan untuk melakukan pemeliharaan bandeng, udang, atau biota air lainnya. Letak tambak tidak jauh dari laut dan airnya payau.
5. Kolam/tebat/empang adalah lahan yang digunakan untuk pemeliharaan/ pembenihan ikan dan biota air lainnya.
6. Padang rumput/penggembalaan adalah lahan yang khusus digunakan untuk penggembalaan ternak. Lahan yang sementara tidak diusahakan (>1 tahun dan â‰¤2 tahun) tidak dianggap sebagai padang rumput/penggembalaan meskipun ada hewan yang digembalakan disana.
7. Lahan bukan sawah yang sementara tidak diusahakan adalah lahan bukan sawah yang biasanya diusahakan tetapi untuk sementara (>1 tahun dan â‰¤ dari 2 tahun) tidak diusahakan.

c. Lahan non pertanian
Lahan non pertanian (bukan pertanian) antara lain lahan untuk: perumahan, industri, perkantoran, pertokoan, jalan, prasarana umum, lapangan, dsb.
Penjelasan:
a. Lahan pertanian yang tidak diusahakan kurang dari 2 tahun, tetap termasuk lahan pertanian.
b. Jumlah luas isian pada Rincian ini harus sama dengan luas Rincian Luas Wilayah Pekon
'
			],
            [
                'dataKey' => '1001',
                'label' => 'a. Industri mikro dan kecil (memiliki tenaga kerja kurang dari 20 pekerja) menurut jenis produk',
                'definisi' => 'Pertanyaan ini bertujuan untuk mendapatkan informasi mengenai jumlah industri mikro dan kecil (memiliki tenaga kerja kurang dari 20 pekerja) menurut jenis produknya.
Industri mikro adalah industri yang jumlah pekerjanya paling banyak 4 orang, termasuk pengusaha.
Industri kecil adalah industri yang jumlah pekerjanya paling sedikit 5 orang dan paling banyak 19 orang, termasuk pengusaha.
Penjelasan: Banyaknya industri mikro dan kecil berdasarkan pengelolanya, yaitu pihak yang menanggung risiko. Untuk maklun, bila hanya diupah tenaganya saja maka tidak termasuk industri.

Industri mikro dan kecil (memiliki tenaga kerja kurang dari 20 pekerja) menurut jenis produk:
a. Industri kulit, barang dari kulit dan alas kaki (tas, sepatu, sandal, ikat pinggang, dll).
b. Industri furnitur dari kayu, rotan/bambu, plastik logam, (meja, kursi, tempat tidur, lemari, dll).
c. Industri barang logam, bukan mesin dan peralatannya (teralis, pagar, sabit, pisau, parang, gunting, sendok, golok, dll).
d. Industri tekstil (kain ulos, kain songket, kain tenun, dan percetakan batik, dll).
e. Industri Industri pakaian jadi (konveksi, pakaian, kemeja, rok, celana, mukena bordir)
f. Industri barang galian bukan logam/industri gerabah/keramik/batu bata (genteng, batu bata, porselin, tegel, keramik, kaca patri, cangkir, guci, dll).
g. Industri kayu, barang dari kayu, barang anyaman dari bambu, rotan dan sejenisnya (reng kayu, papan, anyaman tas dan tikar kusen, dll)
h. Industri makanan (pengolahan dan pengawetan daging, ikan, buah, sayuran, minyak dan lemak, susu, dll
i. Industri minuman (minuman kemasan, air mineral, air isi ulang, sopi dll)
j. Industri pengolahan tembakau (industri rokok, pengeringan dan perajangan tembakau).
k. Industri kertas dan barang dari kertas (kantong kertas, post card, kardus, sak semen)
l. Industri percetakan dan reproduksi media rekaman (buku, brosur, kartu nama, kalender, spanduk, dll)
m. Industri alat angkutan lainnya (perahu, klotok, rakit, kursi roda, dll)
n. Industri kerajinan dan lainnya (kerajinan tangan, mainan anak-anak batu akik, perhiasan emas/imitasi,)
o. Reparasi dan pemasangan mesin dan peralatan (las keliling, reparasi dinamo, reparasi mesin penggiling padi, dll)
p. Industri lainnya adalah industri selain yang telah disebutkan sebelumnya'
			],
            [
                'dataKey' => '1002',
                'label' => 'Jumlah Sentra Industri',
                'definisi' => 'Sentra Industri adalah lokasi pemusatan kegiatan industri sejenis yang menghasilkan produk sejenis, menggunakan bahan baku sejenis, dan atau mengerjakan proses industri yang sama yang dilengkapi sarana dan prasarana penunjang yang dirancang berbasis pada pengembangan potensi sumber daya daerah, serta dikelola oleh suatu pengurus profesional. Termasuk yang sudah dianggap oleh penduduk desa tersebut sebagai sentra industri.'
			],
            [
                'dataKey' => '1003',
                'label' => 'Keberadaan produk barang unggulan/utama di pekon/kelurahan',
                'definisi' => 'Produk (barang) unggulan yang dimaksud adalah komoditas atau barang dagangan yang diproduksi dalam jumlah besar dan menjadi ciri khas desa/kelurahan, bentuknya dapat berupa hasil bumi maupun kerajinan setempat. Jika di desa terdapat beberapa produk unggulan, maka pilih produk yang dihasilkan dalam jumlah terbesar.'
			],
            [
                'dataKey' => '1004',
                'label' => 'Jumlah bank yang beroperasi di pekon/kelurahan
1. Bank Umum Pemerintah (BRI, BNI, Mandiri, BPD, BTN)
2. Bank Umum Swasta (BCA, Permata, Sinarmas, CIMB, dll) 
3. Bank Perkreditan Rakyat (BPR)',
                'definisi' => 'Rincian ini digunakan untuk mengetahui bank yang masih beroperasi di desa/kelurahan. Pada Undang-undang Nomor 10 Tahun 1998 tentang Perbankan, Bank disebutkan sebagai badan usaha yang menghimpun dana dari masyarakat dalam bentuk simpanan dan menyalurkannya kepada masyarakat dalam bentuk kredit dan atau bentuk-bentuk lainnya dalam rangka meningkatkan taraf hidup Masyarakat.
Bank Umum adalah bank yang melaksanakan kegiatan usaha secara konvensional dan atau berdasarkan prinsip syariah, yang dalam kegiatannya memberikan jasa dalam lalu lintas pembayaran (Sumber: Perbankan (ojk.go.id).
1. Bank umum pemerintah meliputi Bank Rakyat Indonesia (BRI), Bank Negara Indonesia (BNI), Bank Mandiri, Bank Pembangunan Daerah (BPD), Bank Tabungan Negara (BTN), dan Teras BRI.
2. Bank umum swasta, meliputi Bank Permata, Bank Syariah Indonesia (BSI), Bank Central Asia (BCA), Bank Mutiara, Rabo Bank, Bank Sinarmas, dsb.
3. Bank Perkreditan Rakyat (BPR) adalah bank yang menerima simpanan dalam bentuk deposito berjangka, tabungan, atau bentuk lain yang disamakan dengan itu, manyalurkan dana dalam bentuk kredit kepada masyarakat yang membutuhkan. BPR dapat menempatkan dananya dalam bentuk Sertifikat BI (SBI), deposito berjangka, atau tabungan pada bank lain.'
			],
            [
                'dataKey' => '1005',
                'label' => 'Jumlah koperasi di pekon/kelurahan yang masih aktif
1. Koperasi Unit Pekon (KUD) 
2. Koperasi Industri Kecil dan Kerajinan Rakyat (Kopinkra)/Usaha mikro 
3. Koperasi Simpan Pinjam (KSP/Kospin) 
4. Koperasi lainnya ',
                'definisi' => '1. Koperasi Unit Desa (KUD) adalah suatu organisasi ekonomi yang bersifat sosial merupakan wadah bagi pengembangan berbagai kegiatan ekonomi masyarakat perdesaan yang diselenggarakan oleh dan untuk masyarakat itu sendiri.
2. Koperasi Industri Kecil dan Kerajinan Rakyat (Kopinkra) merupakan koperasi yang beranggotakan industri-industri kecil dan kerajinan rakyat yang ada di wilayah desa/kelurahan.
3. Koperasi Simpan Pinjam (Kospin) adalah koperasi yang bergerak di bidang simpanan dan pinjaman.
4. Koperasi lainnya, seperti koperasi serbaguna dan koperasi konsumsi.

Penjelasan:
1. Koperasi yang dicakup pada rincian ini adalah koperasi yang sudah berbadan hukum.
2. Koperasi dihitung berdasarkan nama koperasinya, bukan berdasarkan kegiatan/ pelayanannya.'
			],
            [
                'dataKey' => '1006',
                'label' => 'Keberadaan sarana penunjang ekonomi di pekon/kelurahan
a. Baitul Maal Wa Tamwil (BMT)
b. Anjungan Tunai Mandiri (ATM)
c. Agen Bank
d. Perusahaan Pembiayaan
e. Pedagang Valuta Asing
f. Pergadaian
g. Agen Tiket/Travel/Biro Perjalanan
h. Bengkel Mobil/Motor
i. Salon Kecantikan',
                'definisi' => 'Rincian ini dimaksudkan untuk memperoleh informasi mengenai keberadaan sarana penunjang ekonomi yang tersedia di desa/kelurahan. Sarana penunjang ekonomi mencakup Baitul Maal Wa Tamwil (BMT), pegadaian, Anjungan Tunai Mandiri (ATM), bengkel motor/mobil, salon kecantikan, dan agen tiket/travel/biro perjalanan.
a. Baitul Maal Wa Tamwil (BMT) adalah lembaga keuangan mikro yang dioperasikan dengan prinsip bagi hasil untuk menumbuh kembangkan usaha mikro dan kecil. Contohnya BMT Insan Kamil yang ada di Semarang. 

b. Anjungan Tunai Mandiri (ATM) adalah mesin elektronik yang dapat melayani nasabah bank untuk melakukan berbagai kegiatan perbankan (mengambil uang, transfer, mengecek rekening tabungan, dll) secara mandiri tanpa perlu dilayani oleh petugas bank.

c. Agen Bank adalah pihak yang bekerjasama dengan Bank penyelenggara Laku Pandai yang menjadi kepanjangan tangan Bank untuk menyediakan layanan perbankan kepada masyarakat dalam rangka keuangan inklusif sesuai yang diperjanjikan. Agen melayani nasabah dan/atau calon nasabah sesuai dengan cakupan layanan yang dicantumkan dalam perjanjian kerjasama. Agen hanya dapat melayani nasabah dan/atau calon nasabah di sekitar wilayah tempat kedudukan Agen yang mencakup desa atau setara dan/atau daerah lain di sekitarnya.

d. Perusahaan Pembiayaan adalah badan usaha yang khusus didirikan untuk melakukan Sewa Guna Usaha, Anjak Piutang, Pembiayaan Konsumen, dan/atau usaha Kartu Kredit. Kegiatan usaha yang dilakukan oleh Perusahaan Pembiayaan
1. Sewa guna usaha (Leasing) adalah kegiatan pembiayaan dalam bentuk penyediaan barang modal baik secara Sewa Pembiayaan (Finance Lease) maupun Sewa Operasional (Operating Lease)
2. Anjak piutang (Factoring) adalah kegiatan pembiayaan dalam bentuk pembelian piutang dagang jangka pendek suatu perusahaan berikut pengurusan atas piutang tersebut.
3. Usaha Kartu Kredit (Credit Card) adalah kegiatan pembiayaan untuk pembelian barang dan/atau jasa dengan menggunakan kartu kredit.
4. Pembiayaan konsumen (Consumer Finance) adalah kegiatan pembiayaan untuk pengadaan barang berdasarkan kebutuhan konsumen dengan pembayaran secara angsuran.

e. Pedagang Valuta Asing (money changer), yang selanjutnya disebut PVA, adalah perusahaan yang melakukan jual beli uang kertas asing (UKA) dan pembelian travellerâ€™s cheque (TC). PVA Bukan Bank adalah perusahaan berbadan hukum Perseroan Terbatas bukan bank yang maksud dan tujuan perseroan adalah melakukan kegiatan usaha jual beli UKA dan pembelian TC yang telah memenuhi ketentuan dan persyaratan dalam Peraturan Bank Indonesia. PVA Bank adalah bank umum bukan bank devisa yang melaksanakan kegiatan usaha secara konvensional dan/atau berdasarkan prinsip syariah, Bank Perkreditan Rakyat, dan Bank Perkreditan Rakyat Syariah, yang melakukan kegiatan usaha jual beli UKA dan pembelian TC yang telah memenuhi ketentuan dan persyaratan dalam Peraturan Bank Indonesia Nomor: 9/11/PBI/2007 tentang Pedagang Valuta Asing. Dalam hal ini yang dicatat sebagai PVA dalam Podes adalah PVA bukan bank.
Uang Kertas Asing (banknotes), yang selanjutnya disebut UKA, adalah uang kertas dalam valuta asing yang resmi diterbitkan oleh suatu negara di luar Indonesia yang diakui sebagai alat pembayaran yang sah negara yang bersangkutan (legal tender).
Travellerâ€™s Cheque, yang selanjutnya disebut TC, adalah cek perjalanan dalam valuta asing yang dapat digunakan sebagai alat pembayaran. Sumber: Peraturan Bank Indonesia no. 9/11/PBI/2007

f. Pergadaian adalah badan usaha yang secara resmi memiliki izin untuk melaksanakan kegiatan lembaga keuangan berupa pembiayaan dalam bentuk penyaluran dana ke masyarakat atas dasar hukum gadai. Menurut Undang- undang Hukum Perdata Pasal 1150, gadai adalah hak yang diperoleh seseorang yang mempunyai piutang atas suatu barang bergerak. Barang bergerak tersebut diserahkan kepada orang yang berpiutang oleh seseorang yang mempunyai utang atau oleh seorang lain atas nama orang yang mempunyai utang. Seseorang yang berutang tersebut memberikan kekuasaan kepada orang berpiutang untuk menggunakan barang bergerak yang telah diserahkan untung melunasi utang apabila pihak yang berutang tidak dapat memenuhi kewajibannya pada saat jatuh tempo. Usaha Pergadaian adalah segala usaha menyangkut pemberian pinjaman dengan jaminan barang bergerak, jasa titipan, jasa taksiran, dan/atau jasa lainnya, termasuk yang diselenggarakan berdasarkan prinsip syariah. Perusahaan Pergadaian adalah perusahaan pergadaian swasta daan perusahaan pergadaian pemerintah yang diatur dan diawasi oleh Otoritas Jasa Keuangan. (Peraturan Otoritas Jasa Keuangan Nomor 31/POJK.05/2016).

g. Agen tiket/travel/biro perjalanan adalah kegiatan usaha yang bersifat komersial yang mengatur dan menyediakan pelayanan bagi seseorang maupun sekelompok orang untuk melakukan perjalanan dengan tujuan utama berwisata.

h. Bengkel mobil/motor adalah tempat yang menyediakan ruang dan peralatan untuk melakukan konstruksi atau manufaktur dan memperbaiki mobil atau motor. Bengkel umum kendaraan bermotor adalah bengkel umum yang berfungsi untuk membetulkan, memperbaiki, dan merawat kendaraan bermotor agar tetap memenuhi persyaratan teknis dan layak jalan.

i. Salon Kecantikan adalah bentuk usaha yang berhubungan dengan perawatan kosmetika, wajah, dan rambut, baik untuk laki-laki maupun perempuan. Variasi lain dari jenis usaha salon kecantikan adalah salon rambut, dan salon tangan dan kuku (pedikur dan manikur).

Kolom (3) - (4) diisi jika sarana penunjang ekonomi yang dimaksud tidak ada di desa/kelurahan (Kolom (2) berkode 0).
Kolom (3): Perkiraan jarak ke sarana penunjang ekonomi terdekat
Bila sarana penunjang ekonomi yang dimaksud tidak ada di desa/kelurahan (Kolom (2) terisi 0), maka perlu ditanyakan kolom (3). Isikan perkiraan jarak (dalam kilometer) dari kantor kepala desa/lurah ke sarana penunjang ekonomi serupa terdekat pada kolom (3).
Kolom (4): Kemudahan untuk mencapai sarana penunjang ekonomi
Isikan Kolom (4) dengan persepsi kepala desa/lurah atau perangkat desa/kelurahan tentang kemudahan akses ke sarana penunjang ekonomi serupa dengan memperhitungkan sarana atau alat transportasi yang digunakan/dipakai.'
			],
            [
                'dataKey' => '1007',
                'label' => 'Jumlah sarana dan prasarana ekonomi di pekon/kelurahan
a. Kelompok pertokoan (minimal 10 toko dan mengelompok dalam satu lokasi)
b. Pasar dengan bangunan permanen (memiliki atap, lantai, dan dinding)
c. Pasar dengan bangunan semi permanen (memiliki atap dan lantai, tanpa dinding)
d. Pasar tanpa bangunan (misalnya: pasar subuh, pasar terapung, dll.)
e. Jumlah minimarket/swalayan/supermarket (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang secara eceran dengan label harga, sistem pelayanan mandiri)
f. Restoran/rumah makan (usaha pangan siap saji di bangunan tetap, pembeli biasanya dikenai pajak)
g. Warung/kedai makanan minuman (usaha pangan siap saji di bangunan tetap, pembeli biasanya tidak dikenai pajak)
h. Hotel (menyediakan jasa akomodasi dan ada restoran, penginapan dengan izin usaha sebagai hotel)
i. Penginapan: hostel/motel/losmen/wisma (menyediakan akomodasi, penginapan dengan izin usaha bukan sebagai hotel)
j. Toko/warung kelontong (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang keperluan sehari-hari secara eceran, tanpa ada sistem pelayanan mandiri)',
                'definisi' => 'Rincian ini ditanyakan untuk mengetahui jumlah sarana dan prasana ekonomi yang terdapat di desa/kelurahan.
Jumlah adalah banyaknya sarana dan prasarana ekonomi yang terdapat di desa/ kelurahan. Untuk desa/kelurahan yang tidak memiliki sarana dan prasarana ekonomi ditanyakan pertanyaan lanjutan terkait jarak dan kemudahan untuk mencapai sarana dan prasarana ekonomi terdekat ke desa/kelurahan lain.
Jarak adalah perkiraan jarak yang dihitung dari kantor kepala desa/lurah ke sarana dan prasarana ekonomi terdekat dan dinyatakan dalam km.
Kemudahan untuk mencapai adalah kemudahan akses menuju sarana dan prasarana ekonomi terdekat dengan memperhitungkan sarana atau alat transportasi yang digunakan/ dipakai. Pilihan kategorinya adalah sangat mudah, mudah, sulit, atau sangat sulit.
a. Kelompok pertokoan adalah sejumlah toko yang terdiri dari minimal 10 toko dan mengelompok dalam satu lokasi. Dalam satu kelompok pertokoan, jumlah bangunan fisiknya dapat lebih dari satu.
Penjelasan: Tidak termasuk ke dalam kelompok pertokoan untuk sejumlah toko yang ada di dalam mall dan pusat perbelanjaan lainnya.

b. Pasar adalah tempat pertemuan antara penjual dan pembeli barang dan jasa. Pasar dapat menggunakan bangunan yang bersifat permanen atau semi permanen ataupun tanpa bangunan. Barang yang diperjualbelikan di dalam pasar dapat terdiri dari banyak komoditas (campuran) ataupun secara khusus suatu komoditas tertentu. Menurut Peraturan Presiden (Perpres) Nomor 112 Tahun 2007 tentang Penataan dan Pembinaan Pasar Tradisional, pasar adalah area tempat jual beli barang dengan jumlah penjual lebih dari satu baik yang disebut sebagai pusat perbelanjaan, pasar tradisional, pertokoan, mall, plasa, pusat perdagangan maupun sebutan lainnya.
Penjelasan:
1. Banyaknya pasar yang dicatat mengacu pada lokasi dan kegiatan. Jika dua atau lebih pasar yang bangunannya berada di lokasi yang saling berdekatan maka dianggap terletak pada lokasi yang berbeda jika pasar-pasar tersebut pengelolanya berbeda.
2. Jika pasar hanya aktif pada hari-hari tertentu saja tetap dicatat sebagai pasar.
Pasar dengan bangunan permanen adalah pasar pada bangunan tetap yang memiliki lantai, atap, dan dinding permanen.
 
c. Pasar dengan bangunan semi permanen adalah pasar pada bangunan tetap yang memiliki lantai dan atap, tetapi tanpa dinding.
Penjelasan: Bangunan pada pasar tradisional yang mencakup bangunan permanen dan semi permanen dikategorikan sebagai pasar dengan bangunan permanen.
Contoh: Pasar Minggu memliki bangunan permanen 2 lantai tetapi di sekelilingnya terdapat bangunan semi permanen untuk berjualan ikan dan daging.

d. Pasar tanpa bangunan adalah pasar yang tidak berada dalam bangunan.
Contoh: pasar terapung, pasar subuh, dll
Penjelasan: Pasar terapung biasanya meliputi sejumlah wilayah yang luas bahkan sampai satu kabupaten. Oleh karena itu, penentuan suatu desa/kelurahan dikatakan mempunyai pasar terapung jika wilayahnya dilalui pasar terapung.

e. Minimarket/swalayan adalah sistem pelayanan mandiri, menjual berbagai jenis barang secara eceran, dan semua barang memiliki label harga, denganluas bangunan kurang dari 400m2. Yang dicatat adalah minimarket yang masih aktif
Penjelasan: Luas yang dimaksud merujuk pada luas lantai yang terdapat pelayanan (menjual barang).
Supermarket, atau dengan sebutan lain adalah tempat perdagangan dengan sistem pelayanan mandiri, semua barang memiliki label harga, dan luas minimal 400m2. Jika dalam 1 bangunan terdiri dari beberapa unit usaha tersebut, maka tetap dihitung sebagai satu kesatuan saranan ekonomi.

f. Restoran adalah suatu jenis usaha yang mempergunakan seluruh bangunan secara permanen untuk menyediakan jasa pangan yang pengolahan dan penyajiannya secara langsung di tempat sesuai dengan keinginan para pengguna jasa yang mempunyai ciri pembeli biasanya dikenakan pajak. Izin restoran dan kualifikasinya diberikan oleh Ditjen Pariwisata/Kanwil Parpostel setempat.
Rumah makan adalah jenis usaha yang menyediakan jasa pangan yang pengolahan makanannya dapat dilakukan diluar rumah makan, yang mempunyai ciri pembeli biasanya dikenakan pajak. Izin rumah makan diberikan oleh Diparda (pada kabupaten/kota). Di wilayah yang terdapat Dinas Pariwisata, biasanya pemberian izin ditangani oleh Direktorat Perekonomian/Bagian Perekonomian Pemda setempat.

g. Warung/kedai makanan minuman adalah usaha yang menjual makanan dan minuman siap saji yang dijual di bangunan yang tetap dan tidak mempunyai surat izin usaha. Ciri utama dari warung/kedai makanan minuman adalah pembeli biasanya tidak dikenakan pajak.

h. Hotel adalah jenis akomodasi yang mempergunakan sebagian atau keseluruhan bangunan untuk jasa pelayanan penginapan, penyedia makanan dan minuman serta jasa lainnya (seperti restoran, binatu, dll) bagi masyarakat umum yang dikelola secara komersial dengan izin usaha sebagai hotel.

i. Penginapan (hostel/motel/losmen/wisma) adalah jenis akomodasi yang memper-gunakan sebagian atau keseluruhan bangunan untuk jasa pelayanan penginapan bagi umum, biasanya tanpa fasilitas pelayanan makan minum yang dikelola secara komersial dengan izin usaha bukan hotel. Yang dicatat mencakup hostel, motel, matel, bumi perkemahan, pondok wisata, losmen, wisma, dan sejenisnya.

j. Toko/warung kelontong adalah bangunan yang berfungsi sebagai tempat usaha di bangunan tetap untuk menjual barang keperluan sehari-hari secara eceran, tidak mempunyai sistem pelayanan mandiri yang dikelola oleh satu penjual.
Penjelasan:
1. Toko yang terdapat di dalam pasar, tidak dicatat sebagai toko.
2. Toko kelontong yang terdapat di kelompok pertokoan, dicatat sebagai toko.
Kolom (3) - (4) diisi jika sarana dan prasarana ekonomi yang dimaksud tidak ada di desa/kelurahan (Kolom (2) berkode 0).
Kolom (3): Perkiraan jarak ke sarana dan prasarana ekonomi terdekat
Bila sarana dan prasarana ekonomi yang dimaksud tidak ada di desa/kelurahan (Kolom (2) terisi 0), maka perlu ditanyakan kolom (3). Isikan perkiraan jarak (dalam kilometer) dari kantor kepala desa/lurah ke sarana dan prasarana ekonomi serupa terdekat pada kolom (3).
Kolom (4): Kemudahan untuk mencapai sarana dan prasarana ekonomi
Isikan Kolom (4) dengan persepsi kepala desa/lurah atau perangkat desa/kelurahan tentang kemudahan akses ke sarana dan prasarana ekonomi serupa dengan memperhitungkan sarana atau alat transportasi yang digunakan/dipakai.'
			],
            [
                'dataKey' => '1101',
                'label' => 'Tindak kejahatan yang terjadi di pekon/kelurahan selama setahun terakhir
01. Pencurian
02. Pencurian dengan kekerasan
03. Penipuan/penggelapan
04. Penganiayaan
05. Pembakaran
06. Perkosaan/kejahatan terhadap kesusilaan
07. Penyalahgunaan/peredaran narkoba
08. Perjudian
09. Pembunuhan
10. Perdagangan orang (trafficking)
11. Korupsi',
                'definisi' => 'Rincian ini berusaha mengumpulkan secara rinci terkait tindak kejahatan yang terjadi di desa/kelurahan selama setahun terakhir.
Tindak kejahatan adalah segala tindakan yang disengaja atau tidak, telah terjadi atau baru percobaan, yang dapat merugikan orang lain dalam hal badan, jiwa, harta, benda, kehormatan, dan lainnya serta tindakan tersebut dapat diancam hukuman penjara atau kurungan.
Jenis-jenis tindak kejahatan yang dibedakan menjadi:
01. Pencurian adalah pengambilan barang tanpa hak dengan maksud memiliki tanpa disertai dengan kekerasan terhadap korban baik dengan pengrusakan maupun tidak.

02. Pencurian dengan kekerasan (atau perampokan) adalah pencurian barang tanpa hak yang didahului, disertai, diikuti dengan kekerasan atau ancaman kekerasan terhadap korban dengan maksud akan menyiapkan atau memudahkan pencurian itu.

03. Penipuan adalah perbuatan dengan maksud hendak menguntungkan diri sendiri atau orang lain secara melawan hak, memakai nama palsu atau keadaan palsu, akal tipu muslihat, perkataan bohong supaya memberikan uang atau barang.

04. Penggelapan adalah perbuatan dengan sengaja memiliki secara melawan hak atas suatu barang yang sekarang ini dikuasai pelaku, barang tersebut sebagian atau seluruhnya dimiliki oleh orang lain.

05. Penganiayaan adalah perbuatan menyakiti orang lain secara fisik yang mengakibatkan korban menjadi sakit atau luka/cacat.

06. Pembakaran adalah perbuatan dengan sengaja membakar sesuatu, misalnya rumah, hutan, yang dapat mendatangkan bahaya bagi barang, jiwa, atau badan.

07. Perkosaan/kejahatan terhadap kesusilaan adalah pemaksaan terhadap korban untuk melakukan hubungan seksual dengan kekerasan atau ancaman. Pelecehan seksual dan sejenisnya dikelompokkan sebagai kejahatan terhadap kesusilaan.

08. Penyalahgunaan/peredaran narkoba adalah perbuatan menyalahgunakan atau mengonsumsi narkoba untuk kesenangan.

09. Perjudian adalah perbuatan mempertaruhkan sejumlah uang atau harta yang bersifat untung-untungan, artinya bila tidak menang, uang atau barang taruhan hilang.

10. Pembunuhan adalah perbuatan menghilangkan nyawa orang lain baik berencana maupun tidak. Dalam hal ini, pembunuhan dicatat di desa/kelurahan tempat jenazah korban pembunuhan tersebut ditemukan.

11. Perdagangan orang (trafficking) adalah upaya perekrutan, pengangkutan, pemindahan, penampungan, atau penerimaan seseorang dengan ancaman atau penggunaan kekerasan atau bentuk-bentuk paksaan lainnya, penculikan, pemalsuan, penipuan, penyalahgunaan kekuasaan atau posisi rentan ataupun memberi atau menerima bayaran atau manfaat sehingga memperoleh persetujuan dari orang yang memegang kendali atas orang lain, baik yang dilakukan di dalam negara maupun antar negara untuk tujuan eksploitasi atau mengakibatkan orang tereksploitasi. Trafficking ditujukan pada lokasi kejadian trafficking di wilayah desa/kelurahan ini, meskipun korban bukan berasal dari warga/desa/ kelurahan ini.

12. Korupsi adalah penyelewengan atau penyalahgunaan uang negara (perusahaan dan sebagainya) untuk keuntungan pribadi atau orang lain. Yang dicatat di sini adalah lokasi kantor yang dikorupsi, bukan tempat tinggal orang yang melakukan korupsi. Korupsi yang dicatat adalah korupsi yang telah diputus pengadilan.

Rincian Kolom (3): Keberadaan kejadian
Keberadaan tindak kejahatan menanyakan keberadaan kejadian tindak kejahatan selama setahun terakhir.
Rincian Kolom (4): Kecenderungan tindak kejahatan dibanding setahun yang lalu
Rincian ini ditanyakan ketika terdapat tindakan kejahatan atau isian pertanyaan kejadian tindakan kejahatan menurut jenisnya terisi â€˜Adaâ€™. Penilaian terhadap kecenderungan kejahatan didasarkan pada frekuensi kejadian dan besarnya kerugian.'
			],
            [
                'dataKey' => '1102',
                'label' => 'Jumlah anggota linmas/hansip di pekon/kelurahan',
                'definisi' => 'Rincian ini untuk mengetahui jumlah anggota linmas/hansip di desa/ kelurahan. Isikan jumlah anggota hansip/linmas yang ada di desa/kelurahan.'
			],
            [
                'dataKey' => '1103',
                'label' => 'Keberadaan pos polisi (termasuk kantor polisi) di pekon/kelurahan',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui keberadaan, jumlah pos polisi, dan bila tidak ada pos polisi di desa/kelurahan, berapa jarak terdekat dari kantor desa ke pos polisi tersebut, serta kemudahan untuk mencapai lokasi tersebut.
Pos polisi adalah tempat polisi menjaga kamtibmas wilayah sekitar, termasuk Polisi Sektor (Polres), Polisi Resort (Polres), dan Polisi Daerah (Polda). Rincian ini ingin mengetahui keberadaan pos polisi (termasuk kantor polisi) baik yang masih digunakan ataupun yang sudah tidak digunakan di desa/kelurahan.'
			],
            [
                'dataKey' => '1104',
                'label' => 'Jumlah korban bunuh diri dan pembunuhan selama setahun terakhir di pekon/kelurahan
a. Bunuh diri (termasuk percobaan bunuh diri)
b. Pembunuhan',
                'definisi' => 'Rincian ini untuk mencatat data jumlah korban bunuh diri selama satu tahun terakhir di desa/kelurahan. Isikan jumlah korban bunuh diri dan pembunuhan yang pernah terjadi di wilayah desa/kelurahan ini selama setahun terakhir.
Korban dibagi menjadi dua:
a. Bunuh diri (termasuk percobaan bunuh diri). Korban bunuh diri mencakup juga upaya percobaan bunuh diri. Bunuh diri adalah perbuatan dengan sengaja menghilangkan nyawa sendiri atas kemauan sendiri atau karena bujukan, rayuan, dan hasutan, termasuk yang mencoba bunuh diri tetapi tidak meninggal.
b. Pembunuhan (Jika R1303a.09) kolom (3) berkode 1). Pertanyaan ini hanya terisi jika pada rincian 1303a, jenis tindak kejahatan pembunuhan (kode 09) terisi â€˜Adaâ€™.'
			],
            [
                'dataKey' => '1201',
                'label' => 'Kepemilikan badan usaha dan aset desa
a. Jumlah unit usaha BUMDes
b. Tanah kas pekon/ulayat
c. Tambatan perahu
d. Pasar desa
e. Bangunan milik desa 
f. Hutan milik desa
g. Mata air milik desa
h. Tempat wisata/Pemandian umum
i. Aset lainnya milik desa',
                'definisi' => 'Rincian pertanyaan ini dimaksudkan untuk mengetahui badan usaha dan aset yang dimiliki desa. Aset Desa adalah barang milik desa yang berasal dari kekayaan asli desa, dibeli atau diperoleh atas beban Anggaran Pendapatan dan Belanja Desa (APB Desa) atau perolehan Hak lainnya yang sah (Undang-Undang No.6 Tahun 2014 tentang Desa).
Penjelasan: Aset desa mengacu pada Peraturan Menteri Dalam Negeri No.1 Tahun 2016 tentang Pengelolaan Aset Desa (Permendagri 1/2016). Aset desa yang dicakup dalam Permendagri meliputi berupa tanah kas desa, tanah ulayat, pasar desa, pasar hewan, tambatan perahu, bangunan desa, pelelangan ikan, pelelangan hasil pertanian, hutan milik desa, mata air milik desa, pemandian umum, dan aset lainnya milik desa. Laptop, meja kursi, kendaraan, dan lain-lain masuk ke Aset Lainnya.

a. Jumlah unit usaha BUMDes
Rincian ini untuk mencatat jumlah unit usaha BUMDes yang dimiliki desa. Isikan jumlah unit usaha BUMDes.
Penegasan:
Jika di desa/kelurahan ada Badan Usaha Milik Desa (BUMDes) tetapi belum beroperasi, maka di desa/kelurahan tersebut tetap dianggap ada BUMDes.

b. Tanah kas desa/ulayat
Rincian ini untuk mencatat keberadaan tanah kas desa/ulayat. Menurut Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2007 tentang Pedoman Pengelolaan Kekayaan Desa, Tanah Desa adalah barang milik desa berupa tanah bengkok, kuburan, dan titisara.

c. Tambatan perahu
Rincian ini untuk mencatat keberadaan tambatan perahu di desa. Tambatan perahu adalah suatu pangkalan tempat mengikat/menambat perahu saat berlabuh, sekaligus berfungsi sebagai tempat menunggu bagi penumpang dan menimbun barang sementara. Tujuan pembuatan tambatan perahu adalah agar pelaksanaan pembangunan prasarana tambatan perahu yang menggunakan teknologi sederhana dapat dilaksanakan dengan mudah dan benar oleh masyarakat perdesaan dengan tata cara pelaksanaan tambatan perahu secara sederhana yang konstruksinya disesuaikan dengan situasi dan kondisi lapangan.

d. Pasar desa (pasar hewan, pelelangan ikan yang dikelola desa, pelelangan hasil pertanian)
Rincian ini untuk mencatat keberadaan pasar desa. Pasar desa adalah pasar tradisional yang berkedudukan di desa dan dikelola serta dikembangkan oleh pemerintah desa dan masyarakat desa. Pengelolaan pasar desa dilaksanakan oleh pemerintah desa dan pemerintah desa dapat menunjuk pengelola dari masyarakat setempat untuk mengelola pasar desa. Contoh pasar desa: pasar hewan, pelelangan ikan, pelelangan hasil pertanian, dll.

e. Bangunan milik desa (balai desa, balai rakyat, lapangan olah raga, dll)
Rincian ini untuk mencatat keberadaan bangunan milik desa, misalnya: kantor kepala desa, balai desa, dll.

f. Hutan milik desa
Rincian ini untuk mencatat keberadaan hutan milik desa.

g. Mata air desa
Rincian ini untuk mencatat keberadaan mata air desa.

h. empat wisata/Pemandian umum
Rincian ini untuk mencatat keberadaan tempat wisata/pemandian umum milik desa. 

i. Aset lainnya milik desa
Rincian ini untuk mencatat aset lainnya milik desa. Aset lainnya milik desa, yaitu aset desa yang dapat diperoleh dari:
a. Kekayaan desa yang dibeli atau diperoleh atas beban Anggaran Pendapatan dan Belanja Negara, Anggaran Pendapatan dan Belanja Daerah, serta Anggaran Pendapatan dan Belanja Desa.
b. Kekayaan desa yang diperoleh dari hibah dan sumbangan atau yang sejenis.
c. Kekayaan desa yang diperoleh sebagai pelaksanaan dari perjanjian/kontrak dan lain-lain sesuai dengan ketentuan peraturan perundang-undangan.
d. Hasil kerja sama desa.
e. Kekayaan desa yang berasal dari perolehan lainnya yang sah (tambatan perahu, pemandian umum, lapangan bola, dll).'
			],
            [
                'dataKey' => '1202. a',
                'label' => 'Rencana Pembangunan Jangka Menengah Desa (RPJM Desa) yang berlaku',
                'definisi' => 'Rincian pertanyaan ini dimaksudkan untuk mengetahui adanya perencanaan pembangunan desa sesuai dengan kewenangannya dengan mengacu pada perencanaan pembangunan kabupaten/kota, yang dilihat dari keberadaan Rencana Pembangunan Jangka Menengah Desa (RPJM Desa) di desa ini.
Menurut Undang-Undang Nomor 6 Tahun 2014 tentang Desa Pasal 79, perencanaan pembangunan desa disusun secara berjangka meliputi:
a. Rencana Pembangunan Jangka Menengah Desa untuk jangka waktu 6 (enam) tahun; dan
b. Rencana Pembangunan Tahunan Desa atau yang disebut Rencana Kerja Pemerintah Desa merupakan penjabaran dari Rencana Pembangunan Jangka Menengah Desa untuk jangka waktu 1 (satu) tahun.'
			],
            [
                'dataKey' => '1202. b',
                'label' => 'Rencana Kerja Pemerintah Desa (RKP Desa) tahun sekarang',
                'definisi' => 'Rincian pertanyaan ini dimaksudkan untuk mengetahui keberadaan rencana kerja Pemerintah Desa (RKP Desa) tahun 2024. Sebagaimana yang tercantum dalam UU Nomor 6 Tahun 2016 tentang Desa, RKP Desa merupakan penjabaran RPJM Desa. RKP Desa memuat program/kegiatan desa selama satu tahun, terdiri dari program/kegiatan yang didanai sendiri oleh pemerintah desa maupun program/kegiatan yang diusulkan untuk didanai oleh pemerintah, pemerintah provinsi, dan pemerintah kabupaten.'
			],
            [
                'dataKey' => '1202. c',
                'label' => 'Jumlah peraturan desa tahun kemarin',
                'definisi' => 'Rincian pertanyaan ini dimaksudkan untuk mengetahui keberadaan peraturan desa di desa. Menurut Undang-Undang Nomor 6 Tahun 2014 tentang Desa Pasal 1, Peraturan Desa adalah peraturan perundang - undangan yang ditetapkan oleh kepala desa setelah dibahas dan disepakati bersama Badan Permusyawaratan Desa. Peraturan Desa diundangkan dalam Lembaran Desa dan Berita Desa oleh sekretaris desa.
Penjelasan: Peraturan Desa yang dimaksud dalam rincian ini hanya Peraturan Desa yang masih/mulai berlaku pada tahun 2023.'
			],
            [
                'dataKey' => '1202. d',
                'label' => 'Jumlah peraturan kepala desa tahun kemarin',
                'definisi' => 'Rincian pertanyaan ini dimaksudkan untuk mengetahui keberadaan Peraturan Kepala Desa di desa. Menurut Peraturan Pemerintah Nomor 43 Tahun 2014 Peraturan Pelaksanaan Undang-Undang Nomor 6 Tahun 2014 Tentang Desa Pasal 86, Peraturan Kepala Desa merupakan peraturan pelaksanaan Peraturan Desa Peraturan Kepala Desa ditandatangani oleh kepala desa. Peraturan Kepala Desa diundangkan oleh sekretaris desa dalam lembaran desa dan berita desa. Peraturan Kepala Desa wajib disebarluaskan oleh Pemerintah Desa.
Menurut Undang-Undang Nomor 6 Tahun 2014 tentang Desa Pasal 69, Jenis peraturan di desa terdiri atas Peraturan Desa, Peraturan Bersama Kepala Desa, dan Peraturan Kepala Desa.
Peraturan Desa meliputi seluruh materi muatan dalam rangka penyelenggaraan pemerintahan desa, pembangunan desa, dan pemberdayaan masyarakat, serta penjabaran lebih lanjut dari ketentuan peraturan perundang-undangan yang lebih tinggi. Peraturan Kepala Desa atau yang disebut dengan nama lain mempunyai fungsi sebagai peraturan pelaksana dari peraturan desa ataupun pelaksana dari peraturan yang lebih tinggi.'
			],
            [
                'dataKey' => '1203. a',
                'label' => 'Keberadaan kerjasama antar desa tahun kemarin',
                'definisi' => 'Rincian pertanyaan ini dimaksudkan untuk mengetahui keberadaan kerja sama yang dilakukan antar desa pada tahun 2023.'
			],
            [
                'dataKey' => '1203. b',
                'label' => 'Keberadaan kerjasama desa dengan pihak ketiga tahun kemarin',
                'definisi' => 'Rincian ini untuk mencatat keberadaan kerja sama yang dilakukan desa dengan pihak ketiga pada tahun 2023. Contoh: Kerjasama dengan TNI/Polri.'
			],
            [
                'dataKey' => '1204',
                'label' => 'Keberadaan pendamping lokal desa',
                'definisi' => 'Rincian pertanyaan ini dimaksudkan untuk mengetahui keberadaan pendamping desa yang ada di desa/kelurahan. Menurut Peraturan pemerintah RI Nomor 43 Tahun 2014 tentang Peraturan Pelaksanaan Undang-Undang Nomor 6 Tahun 2014 tentang Desa, pendampingan masyarakat desa secara teknis dilaksanakan oleh satuan kerja perangkat daerah kabupaten/ kota dan dapat dibantu oleh tenaga pendamping profesional, kader pemberdayaan masyarakat desa, dan/atau pihak ketiga. Kader pemberdayaan masyarakat desa berasal dari unsur masyarakat yang dipilih oleh desa untuk menumbuhkan dan mengembangkan serta menggerakkan prakarsa, partisipasi, dan swadaya gotong royong. Sementara, tenaga pendamping profesional harus memiliki sertifikasi kompetensi dan kualifikasi pendampingan di bidang ekonomi, sosial, budaya, dan/atau teknik. Pendamping desa bertugas mendampingi desa dalam menyelenggarakan pemerintah desa, kerja sama desa, pengembangan BUM Desa, dan pembangunan yang berskala lokal desa. '
			],
            [
                'dataKey' => '1205',
                'label' => 'a. Keberadaan Kader Pembangunan Manusia (KPM): Ada, aktif - 1 Ada, tidak aktif - 2 Tidak ada - 3 â†’ R1301
Sebutkan namanya.........................................................................................
b. Jika ada, apakah ada KPM yang mendapatkan pembinaan dari Pemerintah Kabupaten/Kota? Ada',
                'definisi' => 'a. Keberadaan Kader Pembangunan Manusia (KPM)
Rincian ini bermaksud untuk mencatat keberadaan kader pembangunan manusia (KPM). Kader Pembangunan Manusia (KPM) adalah warga masyarakat desa yang dipilih melalui musyawarah desa untuk bekerja membantu pemerintah desa dalam memfasilitasi masyarakat desa dalam merencanakan, melaksanakan dan mengawasi pembangunan sumber daya manusia di desa.
1. KPM aktif diindikasikan bahwa KPM tersebut melakukan pendataan di Desa sesuai yang ditugaskan oleh aparat Desa
2. KPM tidak aktif diindikasikan bahwa KPM tersebut tidak melakukan pendataan di Desa sesuai yang ditugaskan oleh aparat Desa
3. Tidak ada KPM berarti:
a. KPM memang tidak ditunjuk,
b. KPM berhenti dan tidak ada pengganti, atau
c. Desa tidak tahu apa itu KPM

Catatan:
Jika menanyakan Kader Pembangunan Desa disebut dengan lengkap, tidak disebut dengan singkatan KPM agar perangkat desa/kelurahan mengerti.

b. Jika ada apakah KPM yang mendapatkan pembinaan dari Pemerintah Kabupaten/Kota?
Rincian ini untuk mencatat keberadaan pembinaan dari pemerintah kabupaten/kota untuk KPM.'
			],
            [
                'dataKey' => '1301',
                'label' => 'Penggunaan Dana Desa pada tahun kemarin
a. Bantuan Langsung Tunai (Tiga Bulan Pertama)
b. Bantuan Langsung Tunai (Tiga Bulan kedua)
c. Padat Karya Tunai Desa â€¦ orang',
                'definisi' => 'Rincian ini bertujuan untuk memperoleh informasi mengenai penggunaan Dana Desa tahun 2023. Jenis bantuan/kegiatan yang dicatat adalah bantuan/kegiatan yang diberikan/dilaksanakan pada tahun 2023.
Jenis bantuan/kegiatan:
a. Bantuan Langsung Tunai
- Bantuan Langsung Tunai Dana Desa (BLT-Dana Desa) adalah bantuan uang kepada keluarga miskin di desa yang bersumber dari Dana Desa.
- Penerima BLT Dana Desa adalah keluarga miskin atau tidak mampu di desa yang belum mendapatkan program bantuan dari Pemerintah Pusat dan/atau Pemerintah Daerah.

b. Padat Karya Tunai Desa
- Rincian ini mencatat keterangan mengenai Padat Karya Tunai Desa (PKTD) yang ada di wilayah desa/kelurahan selama tahun 2023.
- Padat karya tunai merupakan kegiatan pemberdayaan masyarakat desa khususnya yang miskin dan marginal yang bersifat produktif dengan mengutamakan pemanfaatan sumber daya, tenaga kerja, dan teknologi lokal untuk memberikan tambahan upah/ pendapatan, meningkatkan daya beli, mengurangi kemiskinan, dan sekaligus mendukung penurunan angka stunting.
- Dengan skema Padat Karya Tunai dalam pelaksanaan Dana Desa diharapkan dapat menyerap tenaga kerja dalam jumlah besar, dengan memberikan honorarium (upah) langsung tunai kepada tenaga kerja yang terlibat, baik secara harian maupun mingguan, sehingga dapat memperkuat daya beli masyarakat, meningkatkan pertumbuhan ekonomi, dan kesejahteraan masyarakat.
ï‚·
Berdasarkan Permendes Nomor 13 Tahun 2020, pekerja diprioritaskan bagi penganggur, setengah penganggur, Perempuan Kepala Keluarga (PEKKA), anggota keluarga miskin, serta anggota masyarakat marginal lainnya.
ï‚·
Jenis kegiatan PKTD meliputi (a) pertanian dan perkebunan untuk ketahanan pangan; (b) restoran dan wisata desa; (c) perdagangan logistik pangan; (d) perikanan; (e) peternakan; dan (f) industri pengolahan dan pergudangan untuk pangan.'
			],
            [
                'dataKey' => '1302. 1',
                'label' => '1. Paket layanan terkait stunting di desa selama tahun kemarin
a. Kegiatan posyandu
b. Pemberian Makanan Tambahan (PMT)/penyuluhan
c. Pelatihan kader 
d. Insentif kader 
e. Lain-lain',
                'definisi' => 'Untuk memastikan proses pendataan terkait program stunting, diperlukan informasi aparatur desa terkait dengan Kesehatan dan Pendidikan. Data dan informasi terkait dengan Stunting seharusnya dilaporkan oleh para Pegiat Desa (Bidan Desa, Kader Posyandu, Kader BKB, Guru PAUD, dan kader lainnya di Desa/Kelurahan) kepada Pemerintah Desa/Kelurahan secara berkala.
a, Kegiatan Posyandu
Rincian ini untuk mencatat keberadaan kegiatan posyandu selama tahun 2023. Posyandu merupakan perpanjangan tangan Puskesmas yang memberikan pelayanan
146 Pedoman Konsep dan Definisi Podes 2024
dan pemantauan kesehatan yang dilaksanakan secara terpadu. Kegiatan posyandu dilakukan oleh dan untuk masyarakat. Posyandu sebagai wadah peran serta masyarakat, yang menyelenggarakan sistem pelayanan pemenuhan kebutuhan dasar, peningkatan kualitas manusia, secara empiris telah dapat memeratakan pelayanan bidang kesehatan. Kegiatan tersebut meliputi pelayanan imunisasi, pendidikan gizi masyarakat serta pelayanan kesehatan ibu dan anak (Departemen Kesehatan, 1999).
Lima kegiatan posyandu antara lain:
1. Kesehatan ibu anak,
2. Keluarga berencana,
3. Imunisasi,
4. Peningkatan gizi
5. Penanggulangan diare

b. Pemberian Makanan Tambahan (PMT)/penyuluhan
Rincian ini bermaksud mencatat keberadaan kegiatan pemberian makanan tambahan (PMT)/penyuluhan di desa yang dilakukan oleh Posyandu selama tahun 2023. Pemberian Makanan Tambahan (PMT) adalah kegiatan pemberian makanan kepada balita dalam bentuk kudapan yang aman dan bermutu beserta kegiatan pendukung lainnya dengan memperhatikan aspek mutu dan keamanan pangan. Serta mengandung nilai gizi yang sesuai dengan kebutuhan sasaran. Pemberian Makanan Tambahan (PMT) ada dua macam yaitu Pemberian Makanan Tambahan (PMT) pemulihan dan Pemberian Makanan Tambahan (PMT) penyuluhan. Memiliki tujuan yang sama yaitu untuk memenuhi kebutuhan zat gizi yang dibutuhkan oleh balita.
PMT Penyuluhan adalah makanan tambahan yang diberikan kepada balita yang disediakan oleh kader posyandu. Tujuan PMT Penyuluhan adalah sebagai sasaran penyuluhan kepada orang tua balita tentang makanan kudapan (snack) yang baik diberikan untuk balita, sebagai sarana untuk membantu mencukupi kebutuhan gizi balita, dan sebagai sarana untuk menggerakkan peran serta masyarakat dalam mendukung kesinambungan penyelenggaraan posyandu.

c. Pelatihan kader
Rincian ini bermaksud mencatat keberadaan kegiatan pelatihan kader posyandu di desa selama tahun 2023. Kader posyandu adalah kader kesehatan yang berasal dari warga masyarakat yang dipilih masyarakat serta bekerja dengan sukarela untuk membantu peningkatan kesehatan masyarakat termasuk berupaya dalam mendukung pencegahan kejadian stunting di wilayah kerja posyandunya. Kader posyandu merupakan garda terdepan dalam pelayanan posyandu kepada masyarakat. Hal ini menunjukkan peran penting kader posyandu sehingga para kader perlu memiliki pemahaman dan keterampilan yang memadai dalam melaksanakan tugasnya. Maka dari itu, pelatihan kader posyandu dibutuhkan untuk meningkatkan kapasitas dan kemampuan kader posyandu.

d. Insentif kader
Rincian ini bermaksud mencatat ada tidaknya insentif kader posyandu yang diperoleh selama tahun 2023. Insentif adalah tambahan penghasilan yang diberikan untuk meningkatkan gairah kerja. Petugas kesehatan termasuk kader perlu mendapat insentif yang memadai untuk menjamin efektivitas dan keberlanjutan program. Misalnya, berdasarkan SK Kepala Desa Purwoharjo Nomor 188/14/429.513.05/2023 tentang Penetapan Honorarium/Insentif Kader Posyandu Desa Purwoharjo Kecamatan Purwoharjo Kabupaten Banyuwangi Tahun Anggaran 2023 ditetapkan bahwa kader posyandu Desa Purwoharjo akan memperoleh insentif sebesar Rp 100.000,- per orang kegiatan.

e. Lain-lain
Rincian ini bermaksud mencatat kegiatan posyandu selain yang telah dicatat pada rincian sebelumnya. Kegiatan posyandu yang dicakup adalah posyandu terkait Stunting. Contoh kegiatan posyandu lainnya seperti imunisasi, skrining TBC, dll.'
			],
            [
                'dataKey' => '1302.2',
                'label' => 'Kelas ibu hamil',
                'definisi' => 'Rincian ini bertujuan untuk mencatat keberadaan kelas ibu hamil yang dilakukan di desa selama tahun 2023. Kelas Ibu Hamil adalah kegiatan bagi ibu hamil, berdiskusi, dan tukar pengalaman untuk meningkatkan pengetahuan dan keterampilan tentang kehamilan, persalinan, perawatan nifas, dan perawatan bayi baru lahir melalui praktik dengan menggunakan buku KIA yang difasilitasi petugas kesehatan. Kelas ibu hamil banyak disediakan di berbagai tempat layanan kesehatan umum masyarakat, seperti puskesmas dan rumah sakit. Selain itu, beberapa kelas ibu hamil juga dibuka oleh bidan praktik mandiri, posyandu, kantor balai desa, atau di rumah warga.'
			],
            [
                'dataKey' => '1302. 3',
                'label' => 'Kelas ibu balita',
                'definisi' => 'Rincian ini bertujuan untuk mencatat keberadaan kelas ibu balita yang dilakukan di desa selama tahun 2023. Kelas Ibu Balita adalah kegiatan bagi ibu yang mempunyai anak usia 0-5 tahun berdiskusi dan tukar pengalaman untuk meningkatkan pengetahuan dan keterampilan tentang pemenuhan pelayanan kesehatan, gizi dan stimulasi tumbuh kembang anak dengan menggunakan Buku KIA (Kesehatan Ibu dan Anak) yang difasilitasi petugas kesehatan. Materi yang disampaikan bisa meliputi inisiasi menyusui dini, perawatan gigi pada bayi, imunisasi pada bayi, MPASI, tumbuh kembang anak, dan penyakit pada anak.'
			],
            [
                'dataKey' => '1302. 4',
                'label' => 'PMT ibu hamil Kurang Energi Kronis (KEK)/Resiko Tinggi (RESTI) dari keluarga miskin',
                'definisi' => 'Rincian ini bertujuan untuk mencatat keberadaan PMT ibu hamil kurang energi kronis (KEK)/resiko tinggi (RESTI) di desa selama tahun 2023. Salah satu kebijakan dan upaya yang ditempuh pemerintah untuk mengatasi masalah kekurangan gizi pada balita dan ibu hamil Kurang Energi Kronis (KEK), dilakukan dengan Pemberian Makanan Tambahan (PMT) Pemulihan. Pemberian PMT Pemulihan dimaksudkan sebagai tambahan, bukan sebagai pengganti makanan utama sehari-hari pada sasaran. Bahan makanan tambahan ini merupakan produk berbasis bahan makanan lokal dengan menu khas daerah yang disesuaikan dengan kondisi setempat. Makanan Tambahan Pemulihan bumil KEK adalah makanan bergizi yang diperuntukkan bagi ibu hamil sebagai makanan tambahan untuk pemulihan gizi. Makanan tambahan ibu hamil sasaran diutamakan berupa sumber protein hewani maupun nabati (misalnya ikan/telur/daging/ayam, kacang-kacangan dan hasil olahannya seperti tempe dan tahu) serta sumber vitamin dan mineral yang terutama berasal dari sayur-sayuran dan buah-buahan setempat. Makanan tambahan diberikan sekali sehari selama 90 hari berturut-turut. Ibu hamil yang berisiko KEK adalah ibu hamil yang mempunyai ukuran Lingkar Lengan Atas (LiLA) < 23,5 cm.'
			],
            [
                'dataKey' => '1302. 5',
                'label' => 'Akses air minum aman',
                'definisi' => 'Rincian ini bertujuan untuk mencatat kegiatan yang menjamin akses air minum aman di desa pada tahun 2023. Kegiatan yang menjamin akses air minum aman bagi warga desa terdapat banyak variasi, seperti pembuatan sumur bor/gali, perpipaan air, pembuatan bak penampungan air bersih, dll.'
			],
            [
                'dataKey' => '1302. 6',
                'label' => 'Akses jamban sehat',
                'definisi' => 'Rincian ini bermaksud mencatat kegiatan yang menjamin akses pada jamban sehat di desa pada tahun 2023. Jamban sehat efektif untuk memutus mata rantai penularan penyakit. Dalam Permenkes Nomor 3 Tahun 2014 tentang Sanitasi Total Berbasis Masyarakat, standar jamban sehat meliputi dinding dan/atau atap yang melindungi pemakai dari gangguan, lubang dengan konstruksi leher angsa atau tanpa leher angsa tetapi harus memiliki tutup, lantai jamban kedap air dan memiliki saluran pembuangan air bekas, serta memiliki bangunan penampung tinja (tangki septik/cubluk) yang berfungsi mencegah pencemaran. Terdiri dari serangkaian kegiatan yang memastikan adanya tempat mandi - cuci - kakus (MCK) untuk buang air besar (BAB) yang tertutup, dengan ketersediaan air bersih yang memadai, dan dilengkapi dengan penampungan limbah keluarga yang baik, termasuk adanya tempat penampungan kotoran (septic-tank).'
			],
            [
                'dataKey' => '1302. 7',
                'label' => 'Jaminan Kesehatan untuk ibu hamil dari keluarga miskin',
                'definisi' => 'Rincian ini bermaksud untuk mencatat keberadaan jaminan kesehatan untuk ibu hamil dari keluarga miskin di desa selama tahun 2023. Jaminan kesehatan yang dimaksud adalah jaminan kesehatan yang diberikan untuk ibu hamil dari keluarga miskin yang belum tercakup dalam Kartu Indonesia Sehat (KIS).'
			],
            [
                'dataKey' => '1302. 8',
                'label' => 'Jaminan Kesehatan untuk anak baduta dari keluarga miskin',
                'definisi' => 'Rincian ini untuk mencatat keberadaan jaminan kesehatan untuk anak bawah dua tahun (baduta) dari keluarga miskin di desa selama tahu 2023. Jaminan kesehatan yang dimaksud adalah jaminan kesehatan yang diberikan untuk anak baduta dari keluarga miskin yang belum tercakup dalam Kartu Indonesia Sehat (KIS).'
			],
            [
                'dataKey' => '1302. 9',
                'label' => 'Akta kelahiran untuk bayi dari keluarga miskin',
                'definisi' => 'Rincian ini bertujuan untuk mencatat keberadaan dukungan biaya pengurusan akta lahir bagi bayi yang berasal dari keluarga miskin selama tahun 2023.'
			],
            [
                'dataKey' => '1302. 10',
                'label' => 'Kelas pengasuhan',
                'definisi' => 'Rincian ini untuk mencatat keberadaan kelas pengasuhan selama tahun 2023. Kelas pengasuhan merupakan pendidikan yang berkaitan dengan cara atau teknik pengasuhan atau mengasuh anak saat mereka tumbuh berkembang. Dalam kelas pengasuhan ini memiliki tujuan meningkatkan pengetahuan dan keterampilan orang tua dalam melaksanakan perawatan dan pengasuhan anak-anak mereka, serta meningkatkan kesadaran orang tua atau anggota keluarga lain sebagai pendidik yang pertama dan utama.
Jenis kelas pengasuhan PAUD ini mungkin bisa dilakukan dengan dibentuknya: Keterlibatan orang tua dalam acara bersama atau disingkat dengan KODAB, Kelompok pertemuan orang tua di singkat dengan KPO PAUD, Keterlibatan orang tua di kelompok/kelas anak di singkat dengan KOK, Kunjungan rumah, dan Hari konsul orang tua.'
			],
            [
                'dataKey' => '1302. 11',
                'label' => 'Pemanfaatan pekarangan keluarga dan tanah',
                'definisi' => 'Rincian ini bermaksud untuk mengidentifikasi ketahanan pangan keluarga melalui program 3 K: Kandang, Kolam, Kebun. Program 3K dirancang dalam rangka penyediaan makanan yang sehat dan bergizi untuk ibu hamil, balita, dan anak sekolah.'
			],
            [
                'dataKey' => '1303',
                'label' => 'Keberadaan program kegiatan pembangunan masyarakat: Sarana prasarana energi',
                'definisi' => 'Rincian ini dimaksudkan untuk mengetahui apa saja program/kegiatan pembangunan di desa/kelurahan yang berkaitan dengan lingkungan selama setahun terakhir.
Contoh sarana prasarana energi meliputi pembangkit listrik, instalasi biogas, jaringan listrik, dll.'
			],
            [
                'dataKey' => '1304',
                'label' => 'Keberadaan program kegiatan pemberdayaan masyarakat
a. Pengembangan energi terbarukan
b. Pengelolaan lingkungan perumahan pekon/kelurahan
c. Peningkatan kesadaran dalam pelestarian alam dan penanggulangan bencana',
                'definisi' => 'Rincian ini ditanyakan untuk mengetahui program/kegiatan pemberdayaan masyarakat di desa/kelurahan yang berkaitan dengan lingkungan selama setahun terakhir. Adapun jenis program/kegiatan pemberdayaan masyarakat bisa berupa pengembangan energi terbarukan, pengelolaan lingkungan perumahan desa/kelurahan, dan peningkatan kesadaran dalam pelestarian alam dan penanggulangan bencana.
a. Pengembangan energi terbarukan
Contoh pengembangan energi terbarukan meliputi pengelolaan limbah peternakan untuk biogas, pembuatan bioetanol, pengelolaan pembangkit listrik desa, dll.

b. Pengelolaan lingkungan perumahan desa/kelurahan
Contoh pengelolaan lingkungan perumahan desa/kelurahan meliputi pengelolaan sampah, air bersih, limbah, fasilitas olahraga, dll. 

c. Peningkatan kesadaran dalam pelestarian alam dan penanggulangan bencana
Contoh peningkatan kesadaran dalam pelestarian alam dan penanggulangan bencana meliputi penyediaan informasi bencana, pelatihan kesiapsiagaan masyarakat menghadapi bencana, pelatihan relawan bencana, pembibitan pohon langka, reboisasi, rehabilitasi lahan gambut, pembersihan DAS, pemeliharaan hutan bakau, perlindungan terumbu, dll.'
			],
            [
                'dataKey' => '1401',
                'label' => 'Keberadaan kepala pekon/lurah dan sekretaris kepala pekon/lurah
a. Kepala Pekon/Lurah
b. Sekretaris Pekon/Sekretaris Kelurahan',
                'definisi' => 'Rincian ini untuk mencatat keterangan pemerintah desa/kelurahan yang menjabat pada desa/kelurahan yang dikunjungi petugas Podes, yang meliputi Kepala Desa atau Lurah dan Sekretaris Desa atau Sekretaris Kelurahan.
Menurut Undang-Undang Nomor 6 Tahun 2014 tentang Desa, pemerintah desa adalah kepala desa atau yang disebut dengan nama lain dibantu perangkat desa sebagai unsur penyelenggara pemerintah desa. Perangkat desa terdiri atas sekretaris desa (yang memimpin sekretariat desa) dan perangkat desa lainnya (terdiri atas sekretariat desa, pelaksana kewilayahan, dan pelaksana teknis).
Menurut Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 84 Tahun 2015 tentang Susunan Organisasi dan Tata Kerja Pemerintah Desa, dijelaskan bahwa:
a. Kepala desa/lurah adalah pejabat pemerintah desa yang mempunyai wewenang, tugas, dan kewajiban untuk menyelenggarakan rumah tangga desanya dan melaksanakan tugas dari Pemerintah dan Pemerintah Daerah.

b. Sekretaris desa/sekretaris lurah berkedudukan sebagai unsur pimpinan sekretariat desa/kelurahan. Sekretaris desa/sekretaris lurah bertugas membantu kepala desa/lurah dalam bidang administrasi pemerintahan. Sekretaris mempunyai fungsi:
1) Melaksanakan urusan ketatausahaan seperti tata naskah, administrasi surat menyurat, arsip, dan ekspedisi,
2) Melaksanakan urusan umum seperti penataan administrasi perangkat desa, penyediaan prasarana perangkat desa dan kantor, penyiapan rapat, pengadministrasian aset, inventarisasi, perjalanan dinas, dan pelayanan umum,
3) Melaksanakan urusan keuangan seperti pengurusan administrasi keuangan, administrasi sumber pendapatan dan pengeluaran, verifikasi administrasi keuangan, dan administrasi penghasilan kepala desa, perangkat desa, BPD, dan lembaga pemerintahan desa lainnya,
4) Melaksanakan urusan perencanaan seperti menyusun rencana anggaran pendapatan dan belanja desa, menginventarisir data-data dalam rangka pembangunan, melakukan monitoring dan evaluasi program, serta penyusunan laporan

'
			],
            [
                'dataKey' => '1402',
                'label' => 'Jumlah aparatur pemerintahan
a. Sekretariat Pekon/Kelurahan (kaur keuangan, dll)
b. Pelaksana Teknis (kasi kesejahteraan, dll)
c. Pelaksana Kewilayahan (Kadus, Ketua RT, dll)
d. Pegawai Pekon/Kelurahan lainnya (hansip, dll)',
                'definisi' => 'Rincian ini untuk mencatat jumlah aparatur pemerintahan yang meliputi sekretariat desa (bendahara, dll) dan pelaksana teknis (kaur/kasi, dll).
a. Sekretariat Desa/Kelurahan (kaur keuangan, dll)
Rincian ini mencatat jumlah aparatur sekretariat desa/kelurahan yang sedang menjabat saat didata petugas Podes. Sekretariat desa dipimpin oleh sekretaris desa dibantu oleh unsur staf sekretariat yang bertugas membantu kepala desa dalam bidang administrasi pemerintahan. Sekretariat desa paling banyak terdiri atas 3 (tiga) urusan yaitu urusan tata usaha dan umum, urusan keuangan, dan urusan perencanaan, dan paling sedikit 2 (dua) urusan yaitu urusan umum dan perencanaan, dan urusan keuangan. Masing-masing urusan dipimpin oleh kepala urusan. Kepala urusan berkedudukan sebagai unsur staf sekretariat. Kepala urusan bertugas membantu sekretaris desa dalam urusan pelayanan administrasi pendukung pelaksanaan tugas-tugas pemerintahan. Untuk melaksanakan tugas kepala urusan mempunyai fungsi:
a) Kepala urusan tata usaha dan umum memiliki fungsi seperti melaksanakan urusan ketatausahaan seperti tata naskah, administrasi surat menyurat, arsip, dan ekspedisi, dan penataan administrasi perangkat desa, penyediaan prasarana perangkat desa dan kantor, penyiapan rapat, pengadministrasian aset, inventarisasi, perjalanan dinas, dan pelayanan umum.
b) Kepala urusan keuangan memiliki fungsi seperti melaksanakan urusan keuangan seperti pengurusan administrasi keuangan, administrasi sumbersumber pendapatan dan pengeluaran, verifikasi administrasi keuangan, dan administrasi penghasilan kepala desa, perangkat desa, BPD, dan lembaga pemerintahan desa lainnya.
c) Kepala urusan perencanaan memiliki fungsi mengoordinasikan urusan perencanaan seperti menyusun rencana anggaran pendapatan dan belanja desa, menginventarisir data-data dalam rangka pembangunan, melakukan monitoring dan evaluasi program, serta penyusunan laporan.

b. Pelaksana Teknis (kasi kesejahteraan,dll)
Rincian ini mencatat jumlah aparatur pelaksana teknis yang sedang menjabat saat didata petugas podes. Pelaksana teknis merupakan unsur pembantu kepala desa sebagai pelaksana tugas operasional. Pelaksana teknis paling banyak terdiri atas 3 (tiga) seksi, yaitu seksi pemerintahan, seksi kesejahteraan dan seksi pelayanan, paling sedikit 2 (dua) seksi yaitu seksi pemerintahan, serta seksi kesejahteraan dan pelayanan. Masing-masing seksi dipimpin oleh kepala seksi. Untuk melaksanakan tugas kepala seksi mempunyai fungsi:
a) Kepala seksi pemerintahan mempunyai fungsi melaksanakan manajemen tata praja pemerintahan, menyusun rancangan regulasi desa, pembinaan masalah pertanahan, pembinaan ketentraman dan ketertiban, pelaksanaan upaya perlindungan masyarakat, kependudukan, penataan dan pengelolaan wilayah, serta pendataan dan pengelolaan Profil Desa.
b) Kepala seksi kesejahteraan mempunyai fungsi melaksanakan pembangunan sarana prasarana perdesaan, pembangunan bidang pendidikan, kesehatan, dan tugas sosialisasi serta motivasi masyarakat di bidang budaya, ekonomi, politik, lingkungan hidup, pemberdayaan keluarga, pemuda, olahraga, dan karang taruna.
c) Kepala seksi pelayanan memiliki fungsi melaksanakan penyuluhan dan motivasi terhadap pelaksanaan hak dan kewajiban masyarakat, meningkatkan upaya partisipasi masyarakat, pelestarian nilai sosial budaya masyarakat, keagamaan, dan ketenagakerjaan.
Penjelasan:
a. Pada kenyataannya, jabatan kaur/kasi di desa/kelurahan sangat beragam (belum tentu sama dengan beberapa contoh di atas).
b. Jika di desa/kelurahan terdapat salah satu kaur/kasi (walaupun dengan penamaan yang berbeda), maka tetap dicatat.

c. Pelaksana Kewilayahan (Kadus, Ketua RT, dll)
Rincian ini mencatat jumlah aparatur pelaksana kewilayahan yang sedang menjabat saat didata petugas podes. Dalam PP Nomor 43 Tahun 2014 tentang Peraturan Pelaksanaan Undang-undang Nomor 6 Tahun 2014 tentang Desa disebutkan bahwa pelaksana kewilayahan merupakan unsur pembantu kepala desa sebagai satuan tugas kewilayahan. Tugas kewilayahan yang dimaksud meliputi penyelenggaraan pemerintahan desa, pelaksanaan pembangunan desa, pembinaan kemasyarakatan desa, dan pemberdayaan masyarakat desa. Pelaksana kewilayahan beragam antar desa karena menyesuaikan dengan kondisi sosial budaya masyarakat setempat.
Contoh pelaksana kewilayahan: kepala dusun (kadus), ketua RT, dll.

d. Pegawai Desa/Kelurahan lainnya (linmas, dll)
Rincian ini mencatat jumlah aparatur pegawai desa/kelurahan lainnya. Misalnya: linmas, dll.'
			],
            [
                'dataKey' => '1403',
                'label' => 'Badan Permusyawaratan Pekon/Lembaga Musyawarah Kelurahan',
                'definisi' => 'Rincian ini ditanyakan untuk setiap desa/kelurahan, apakah sudah terbentuk Badan Permusyawaratan Desa/Lembaga Musyawarah Kelurahan, yang dapat menggambarkan semakin banyak kegiatan yang dilakukan oleh BPD maka semakin maju desa tersebut.
Badan Permusyawaratan Desa (BPD) adalah lembaga yang melaksanakan fungsi pemerintahan yang anggotanya merupakan wakil dari penduduk desa berdasarkan keterwakilan wilayah dan ditetapkan secara demokratis. Anggota Badan Permusyawaratan Desa merupakan wakil dari penduduk desa berdasarkan keterwakilan wilayah yang pengisiannya dilakukan secara demokratis. (Undang-Undang Nomor 6 Tahun 2014 tentang Desa). 
Lembaga Musyawarah Kelurahan (LMK) adalah lembaga musyawarah pada tingkat kelurahan yang bertujuan untuk membantu lurah sebagai mitra dalam penyelenggaraan pemerintahan dan untuk menampung aspirasi serta meningkatkan partisipasi dan pemberdayaan masyarakat. Anggota LMK adalah satu orang perwakilan tokoh masyarakat yang dipilih secara demokratis pada tingkat RW (Peraturan Daerah Provinsi DKI Jakarta Nomor 5 Tahun 2010).
Penjelasan: Ada beberapa kelurahan yang tidak menggunakan istilah LMK tetapi dengan istilah lain, contoh Lembaga Ketahanan Musyawarah Kelurahan (LKMK) di NTT, Lembaga Pemberdayaan Masyarakat (LPM) di Kalimantan Timur.
Untuk yang berstatus Nagari maka yang ada biasanya Bamus Nagari. Badan Permusyawaratan Nagari yang selanjutnya disebut Bamus Nagari adalah lembaga yang merupakan perwujudan demokrasi dalam penyelenggaraan pemerintah nagari sebagai unsur penyelenggaraan pemerintahan nagari (Peraturan Daerah Provinsi Sumatera Barat Nomor 2 Tahun 2007).'
			],
            [
                'dataKey' => '1404. a',
                'label' => 'Desa sudah menjalankan pemilihan kepala desa secara serentak',
                'definisi' => 'Rincian ini untuk mengukur partisipasi pemilihan kepala desa terutama sejak implementasi UU Desa dan adanya transfer dana desa. Pemilihan kepala desa serentak adalah Pemilihan Kepala Desa Serentak adalah Pemilihan Kepala Desa yang dilaksanakan pada hari yang sama di seluruh Desa di Daerah Kabupaten. Jika di desa sudah menjalankan pemilihan kepala desa secara serentak, lanjut ke rincian selanjutnya. Jika desa belum menjalankan pemilihan kepala desa secara serentak, stop.'
			],
            [
                'dataKey' => '1404. b',
                'label' => 'Tahun terakhir pelaksanaan pemilihan kepala desa',
                'definisi' => 'Rincian ini untuk mengetahui tahun terakhir pelaksanaan pemilihan kepala desa sebelum pendataan Podes.'
			],
            [
                'dataKey' => '1404. c',
                'label' => 'Jumlah calon pemilihan kepala desa',
                'definisi' => 'Rincian ini untuk mengetahui jumlah calon kepala desa yang mencalonkan dalam pemilihan kepala desa. Jumlah calon kepala desa adalah jumlah calon yang ikut pemilihan kepala desa terakhir (orang).'
			],
            [
                'dataKey' => '1404. d',
                'label' => 'Persentase perolehan suara pemenang pemilihan kepala desa',
                'definisi' => 'Persentase perolehan suara pemenang pemilihan kepala desa adalah jumlah suara pemenang pemilihan kepala desa dibagi total pemilih yang terdaftar (yang ikut memilih dan yang tidak ikut melakukan pemilihan/tidak hadir pada masa pencoblosan), apabila calon kepala desa hanya 1 orang, pencoblosan tetap dilakukan biasanya antara calon kepala desa dengan kotak kosong, sehingga persentase perolehan suara pemenang pemilihan kepala desa adalah suara kepala desa terpilih dibagi dengan total suara (suara yang memilih dan suara dalam kotak kosong).'
			],

		];

		foreach($meta_data as $data){
			// insert semua data ke tabel
			$this->db->table('metadata')->insert($data);
		}
    }
}
