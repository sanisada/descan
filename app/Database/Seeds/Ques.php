<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Ques extends Seeder
{
    public function run()
    {
        $ques_data = [
            [
                'dataKey' => 'R101',
                'ques_label' => '101. Provinsi'
            ],
            [
                'dataKey' => 'R102',
                'ques_label' => '102. Kabupaten/Kota *)'
            ],
            [
                'dataKey' => 'R103',
                'ques_label' => '103. Kecamatan'
            ],
            [
                'dataKey' => 'R104',
                'ques_label' => '104. Desa/Kelurahan *)'
            ],
            [
                'dataKey' => 'R105',
                'ques_label' => '105. SK pembentukan/pengesahan desa/kelurahan'
            ],
            [
                'dataKey' => 'R201',
                'ques_label' => '201. Daftar SLS terkecil di desa/kelurahan:'
            ],
            [
                'dataKey' => 'R202',
                'ques_label' => '202. Luas wilayah desa/kelurahan (1 Ha= 0,01 km2 )\r\n(dalam satuan kilometer persegi)'
            ],
            [
                'dataKey' => 'R203',
                'ques_label' => '203. Koordinat lokasi kegiatan pemerintahan desa/kelurahan:'
            ],
            [
                'dataKey' => 'R203B1_LAT',
                'ques_label' => 'Koordinat Garis Lintang (Latitude):'
            ],
            [
                'dataKey' => 'R203B1_LA0',
                'ques_label' => 'Garis Lintang'
            ],
            [
                'dataKey' => 'R203B1_LON',
                'ques_label' => 'Koordinat Garis Bujur (Longitude) Timur:'
            ],
            [
                'dataKey' => 'R203B2',
                'ques_label' => 'Ketinggian letak (Altitude) lokasi kegiatan pemerintahan desa/kelurahan dari permukaan air laut (dpal)\r\n............................... m'
            ],
            [
                'dataKey' => 'R301',
                'ques_label' => '301. Penduduk dan keluarga pada 1 Januari:'
            ],
            [
                'dataKey' => 'R301A',
                'ques_label' => 'a.  Jumlah penduduk laki-laki'
            ],
            [
                'dataKey' => 'R301B',
                'ques_label' => 'b.  Jumlah penduduk perempuan'
            ],
            [
                'dataKey' => 'R301C',
                'ques_label' => 'c.  Jumlah keluarga'
            ],
            [
                'dataKey' => 'R301D',
                'ques_label' => 'd.  Jumlah keluarga pertanian (tanaman pangan, hortikultura, perkebunan, kehutanan, peternakan, perikanan )'
            ],
            [
                'dataKey' => 'R302A',
                'ques_label' => '302. a.  Jumlah warga desa/kelurahan yang sedang bekerja sebagai Pekerja Migran Indonesia/TKI di luar negeri pada 1 Januari tahun ini:'
            ],
            [
                'dataKey' => 'R302A1',
                'ques_label' => '1. Laki-laki
'
            ],
            [
                'dataKey' => 'R302A2',
                'ques_label' => '2. Perempuan'
            ],
            [
                'dataKey' => 'R302B',
                'ques_label' => 'b. Keberadaan Warga Negara Asing (WNA) di desa/kelurahan pada 1 Januari tahun ini'
            ],
            [
                'dataKey' => 'R302B1',
                'ques_label' => '1. Laki-laki
'
            ],
            [
                'dataKey' => 'R302B2',
                'ques_label' => '2. Perempuan'
            ],
            [
                'dataKey' => 'R303',
                'ques_label' => '303. Jumlah penduduk bekerja per lapangan usaha'
            ],
            [
                'dataKey' => 'R303A',
                'ques_label' => 'a. Pertanian, kehutanan, dan perikanan'
            ],
            [
                'dataKey' => 'R303B',
                'ques_label' => 'b. Pertambangan dan penggalian'
            ],
            [
                'dataKey' => 'R303C',
                'ques_label' => 'c. Industri pengolahan'
            ],
            [
                'dataKey' => 'R303D',
                'ques_label' => 'd. Pengadaan listrik, gas, uap/air panas, dan udara dingin'
            ],
            [
                'dataKey' => 'R303E',
                'ques_label' => 'e. Treatment air, treatment air limbah, Treatment dan pemulihan material sampah, dan aktivitas remediasi'
            ],
            [
                'dataKey' => 'R303F',
                'ques_label' => 'f. Konstruksi'
            ],
            [
                'dataKey' => 'R303G',
                'ques_label' => 'g. Perdagangan besar dan eceran, reparasi dan perawatan mobil dan sepeda motor'
            ],
            [
                'dataKey' => 'R303H',
                'ques_label' => 'h. Pengangkutan dan pergudangan'
            ],
            [
                'dataKey' => 'R303I',
                'ques_label' => 'i. Penyediaan akomodasi dan penyediaan makan minum'
            ],
            [
                'dataKey' => 'R303J',
                'ques_label' => 'j. Informasi dan komunikasi'
            ],
            [
                'dataKey' => 'R303K',
                'ques_label' => 'k. Aktivitas keuangan & asuransi'
            ],
            [
                'dataKey' => 'R303L',
                'ques_label' => 'l. Real estat'
            ],
            [
                'dataKey' => 'R303M',
                'ques_label' => 'm. Aktivitas profesional, ilmiah, dan teknis'
            ],
            [
                'dataKey' => 'R303N',
                'ques_label' => 'n. Aktivitas penyewaan dan sewa guna tanpa hak opsi, ketenagakerjaan, agen perjalanan, dan penunjang usaha lainnya'
            ],
            [
                'dataKey' => 'R303O',
                'ques_label' => 'o. Administrasi pemerintahan, pertahanan, dan jaminan sosial wajib'
            ],
            [
                'dataKey' => 'R303P',
                'ques_label' => 'p. Pendidikan'
            ],
            [
                'dataKey' => 'R303Q',
                'ques_label' => 'q. Aktivitas kesehatan manusia dan aktivitas sosial'
            ],
            [
                'dataKey' => 'R303R',
                'ques_label' => 'r. Kesenian, hiburan, dan rekreasi'
            ],
            [
                'dataKey' => 'R303S',
                'ques_label' => 's. Aktivitas jasa lainnya'
            ],
            [
                'dataKey' => 'R303T',
                'ques_label' => 't. Aktivitas keluarga sebagai pemberi kerja'
            ],
            [
                'dataKey' => 'R303U',
                'ques_label' => 'u. Aktivitas badan internasional dan badan ekstra internasional lainnya'
            ],
            [
                'dataKey' => 'R304A',
                'ques_label' => '304. a. Jenis sub sektor utama sebagian besar penduduk desa/kelurahan:'
            ],
            [
                'dataKey' => 'R304B',
                'ques_label' => 'b. Komoditas utama dari sub sektor utama sebagian besar penduduk desa/kelurahan'
            ],
            [
                'dataKey' => 'R401A1',
                'ques_label' => '401. a. 1. Jumlah keluarga pengguna listrik: PLN (Perusahaan Listrik Negara)'
            ],
            [
                'dataKey' => 'R401A2',
                'ques_label' => '2. Jumlah keluarga pengguna listrik: Non–PLN (misalnya: swasta, swadaya, atau perseorangan)'
            ],
            [
                'dataKey' => 'R401B',
                'ques_label' => 'b. Jumlah keluarga bukan pengguna listrik:'
            ],
            [
                'dataKey' => 'R402',
                'ques_label' => '402. Keberadaan Tempat Penampungan Sementara (TPS)'
            ],
            [
                'dataKey' => 'R402S',
                'ques_label' => 'Nama TPS'
            ],
            [
                'dataKey' => 'R403A',
                'ques_label' => '403. a. Wilayah desa/kelurahan dilalui Saluran Udara Tegangan Ekstra Tinggi (SUTET) / Saluran Udara Tegangan Tinggi (SUTT) / Saluran Udara Tegangan Tinggi Arus Searah (SUTTAS)'
            ],
            [
                'dataKey' => 'R403B',
                'ques_label' => 'b. Keberadaan permukiman di bawah SUTET/SUTT/SUTTAS:'
            ],
            [
                'dataKey' => 'R403C1',
                'ques_label' => '1. Jumlah lokasi'
            ],
            [
                'dataKey' => 'R403C1A',
                'ques_label' => 'Alamat'
            ],
            [
                'dataKey' => 'R403C2',
                'ques_label' => '2. Jumlah bangunan rumah'
            ],
            [
                'dataKey' => 'R403C3',
                'ques_label' => '3. Jumlah keluarga (Isian tidak boleh lebih dari isian R401c)'
            ],
            [
                'dataKey' => 'R404AK2',
                'ques_label' => 'Sungai'
            ],
            [
                'dataKey' => 'R404AK3',
                'ques_label' => 'Saluran irigasi'
            ],
            [
                'dataKey' => 'R404AK4',
                'ques_label' => 'Danau waduk situ bendungan'
            ],
            [
                'dataKey' => 'R404AK5',
                'ques_label' => 'Embung'
            ],
            [
                'dataKey' => 'R404B1K2',
                'ques_label' => 'Penggunaan sungai untuk : Mandi cuci'
            ],
            [
                'dataKey' => 'R404B1K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Mandi cuci'
            ],
            [
                'dataKey' => 'R404B1K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Mandi cuci'
            ],
            [
                'dataKey' => 'R404B1K5',
                'ques_label' => 'Penggunaan embung untuk : Mandi cuci'
            ],
            [
                'dataKey' => 'R404B2K2',
                'ques_label' => 'Penggunaan sungai untuk : Sumber air minum masak'
            ],
            [
                'dataKey' => 'R404B2K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Sumber air minum masak'
            ],
            [
                'dataKey' => 'R404B2K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Sumber air minum masak'
            ],
            [
                'dataKey' => 'R404B2K5',
                'ques_label' => 'Penggunaan embung untuk : Sumber air minum masak'
            ],
            [
                'dataKey' => 'R404B3K2',
                'ques_label' => 'Penggunaan sungai untuk : Bahan baku air minum'
            ],
            [
                'dataKey' => 'R404B3K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Bahan baku air minum'
            ],
            [
                'dataKey' => 'R404B3K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Bahan baku air minum masak'
            ],
            [
                'dataKey' => 'R404B3K5',
                'ques_label' => 'Penggunaan embung untuk : Bahan baku air minum masak'
            ],
            [
                'dataKey' => 'R404B4K2',
                'ques_label' => 'Penggunaan sungai untuk : Pengairan irigasi lahan pertanian'
            ],
            [
                'dataKey' => 'R404B4K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Pengairan irigasi lahan pertanian'
            ],
            [
                'dataKey' => 'R404B4K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Pengairan irigasi lahan pertanian'
            ],
            [
                'dataKey' => 'R404B4K5',
                'ques_label' => 'Penggunaan embung untuk : Pengairan irigasi lahan pertanian'
            ],
            [
                'dataKey' => 'R404B5K2',
                'ques_label' => 'Penggunaan sungai untuk : Pariwisata (komersial)'
            ],
            [
                'dataKey' => 'R404B5K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Pariwisata (komersial)'
            ],
            [
                'dataKey' => 'R404B5K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Pariwisata (komersial)'
            ],
            [
                'dataKey' => 'R404B5K5',
                'ques_label' => 'Penggunaan embung untuk : Pariwisata (komersial)'
            ],
            [
                'dataKey' => 'R404B6K2',
                'ques_label' => 'Penggunaan sungai untuk : Perikanan'
            ],
            [
                'dataKey' => 'R404B6K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Perikanan'
            ],
            [
                'dataKey' => 'R404B6K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Perikanan'
            ],
            [
                'dataKey' => 'R404B6K5',
                'ques_label' => 'Penggunaan embung untuk : Perikanan'
            ],
            [
                'dataKey' => 'R404B7K2',
                'ques_label' => 'Penggunaan sungai untuk : Transportasi'
            ],
            [
                'dataKey' => 'R404B7K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Transportasi'
            ],
            [
                'dataKey' => 'R404B7K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Transportasi'
            ],
            [
                'dataKey' => 'R404B7K5',
                'ques_label' => 'Penggunaan embung untuk : Transportasi'
            ],
            [
                'dataKey' => 'R404B8K2',
                'ques_label' => 'Penggunaan sungai untuk : Pembangkit listrik'
            ],
            [
                'dataKey' => 'R404B8K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Pembangkit listrik'
            ],
            [
                'dataKey' => 'R404B8K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Pembangkit listrik'
            ],
            [
                'dataKey' => 'R404B8K5',
                'ques_label' => 'Penggunaan embung untuk : Pembangkit listrik'
            ],
            [
                'dataKey' => 'R404B9K2',
                'ques_label' => 'Penggunaan sungai untuk : Industri pabrik'
            ],
            [
                'dataKey' => 'R404B9K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Industri pabrik'
            ],
            [
                'dataKey' => 'R404B9K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Industri pabrik'
            ],
            [
                'dataKey' => 'R404B9K5',
                'ques_label' => 'Penggunaan embung untuk : Industri pabrik'
            ],
            [
                'dataKey' => 'R404B10K2',
                'ques_label' => 'Penggunaan sungai untuk : Lainnya'
            ],
            [
                'dataKey' => 'R404B10K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Lainnya'
            ],
            [
                'dataKey' => 'R404B10K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Lainnya'
            ],
            [
                'dataKey' => 'R404B10K5',
                'ques_label' => 'Penggunaan embung untuk : Lainnya'
            ],
            [
                'dataKey' => 'R405A',
                'ques_label' => '405. a. Keberadaan permukiman di bantaran sungai :'
            ],
            [
                'dataKey' => 'R405B1',
                'ques_label' => 'b. Jumlah lokasi permukiman di bantaran sungai :'
            ],
            [
                'dataKey' => 'R405B2',
                'ques_label' => 'c. Jumlah bangunan rumah permukiman di bantaran sungai :'
            ],
            [
                'dataKey' => 'R405B3',
                'ques_label' => 'd. Jumlah keluarga permukiman di bantaran sungai :'
            ],
            [
                'dataKey' => 'R406A',
                'ques_label' => '406. a. Keberadaan permukiman kumuh (sanitasi lingkungan buruk, bangunan padat, dan sebagian besar tidak layak huni) di desa/kelurahan :'
            ],
            [
                'dataKey' => 'R406B1',
                'ques_label' => '1. Jumlah lokasi permukiman kumuh :'
            ],
            [
                'dataKey' => 'R406B2',
                'ques_label' => '2. Jumlah bangunan rumah permukiman kumuh :'
            ],
            [
                'dataKey' => 'R406B3',
                'ques_label' => '3. Jumlah keluarga permukiman kumuh :'
            ],
            [
                'dataKey' => 'R407',
                'ques_label' => '407. Keberadaan dan keaktifan komunitas/kelompok lingkungan hidup (meliputi gerakan lingkungan berkelanjutan, sadar lingkungan, siaga bencana)'
            ],
            [
                'dataKey' => 'R407S',
                'ques_label' => 'Nama komunitas/kelompok lingkungan hidup'
            ],
            [
                'dataKey' => 'R408',
                'ques_label' => '408. Keberadaan lokasi penggalian Golongan C (misalnya: batu kali, pasir, kapur, kaolin, pasir kuarsa, tanah liat, dll.) di desa kelurahan :'
            ],
            [
                'dataKey' => 'R408A',
                'ques_label' => 'Lokasi dan nama galiannya'
            ],
            [
                'dataKey' => 'R501AK2',
                'ques_label' => 'Tanah longsor'
            ],
            [
                'dataKey' => 'R501AK3',
                'ques_label' => 'Banyak kejadian tanah longsor tahun kemarin'
            ],
            [
                'dataKey' => 'R501AK4',
                'ques_label' => 'Korban meninggal tanah longsor tahun kemarin'
            ],
            [
                'dataKey' => 'R501AK5',
                'ques_label' => 'Keberadaan korban tanah longsor tahun kemarin'
            ],
            [
                'dataKey' => 'R501AK6',
                'ques_label' => 'Banyak kejadian tanah longsor Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501AK7',
                'ques_label' => 'Korban meninggal tanah longsor Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501AK8',
                'ques_label' => 'Keberadaan korban tanah longsor Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501BK2',
                'ques_label' => 'Banjir'
            ],
            [
                'dataKey' => 'R501BK3',
                'ques_label' => 'Banyak kejadian Banjir tahun kemarin'
            ],
            [
                'dataKey' => 'R501BK4',
                'ques_label' => 'Korban meninggal Banjir tahun kemarin'
            ],
            [
                'dataKey' => 'R501BK5',
                'ques_label' => 'Keberadaan korban Banjir tahun kemarin'
            ],
            [
                'dataKey' => 'R501BK6',
                'ques_label' => 'Banyak kejadian Banjir Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501BK7',
                'ques_label' => 'Korban meninggal Banjir Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501BK8',
                'ques_label' => 'Keberadaan korban Banjir Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501CK2',
                'ques_label' => 'Banjir bandang'
            ],
            [
                'dataKey' => 'R501CK3',
                'ques_label' => 'Banyak kejadian Banjir bandang tahun kemarin'
            ],
            [
                'dataKey' => 'R501CK4',
                'ques_label' => 'Korban meninggal Banjir bandang tahun kemarin'
            ],
            [
                'dataKey' => 'R501CK5',
                'ques_label' => 'Keberadaan Banjir bandang korban tahun kemarin'
            ],
            [
                'dataKey' => 'R501CK6',
                'ques_label' => 'Banyak kejadian Banjir bandang Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501CK7',
                'ques_label' => 'Korban meninggal Banjir bandang Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501CK8',
                'ques_label' => 'Keberadaan korban Banjir bandang Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501DK2',
                'ques_label' => 'Gempa bumi'
            ],
            [
                'dataKey' => 'R501DK3',
                'ques_label' => 'Banyak kejadian Gempa bumi tahun kemarin'
            ],
            [
                'dataKey' => 'R501DK4',
                'ques_label' => 'Korban meninggal Gempa bumi tahun kemarin'
            ],
            [
                'dataKey' => 'R501DK5',
                'ques_label' => 'Keberadaan korban Gempa bumi tahun kemarin'
            ],
            [
                'dataKey' => 'R501DK6',
                'ques_label' => 'Banyak kejadian Gempa bumi Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501DK7',
                'ques_label' => 'Korban meninggal Gempa bumi Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501DK8',
                'ques_label' => 'Keberadaan korban Gempa bumi Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501EK2',
                'ques_label' => 'Tsunami'
            ],
            [
                'dataKey' => 'R501EK3',
                'ques_label' => 'Banyak kejadian Tsunami tahun kemarin'
            ],
            [
                'dataKey' => 'R501EK4',
                'ques_label' => 'Korban meninggal Tsunami tahun kemarin'
            ],
            [
                'dataKey' => 'R501EK5',
                'ques_label' => 'Keberadaan korban Tsunami tahun kemarin'
            ],
            [
                'dataKey' => 'R501EK6',
                'ques_label' => 'Banyak kejadian Tsunami Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501EK7',
                'ques_label' => 'Korban meninggal Tsunami Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501EK8',
                'ques_label' => 'Keberadaan korban Tsunami Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501FK2',
                'ques_label' => 'Gelombang pasang laut'
            ],
            [
                'dataKey' => 'R501FK3',
                'ques_label' => 'Banyak kejadian Gelombang pasang laut tahun kemarin'
            ],
            [
                'dataKey' => 'R501FK4',
                'ques_label' => 'Korban meninggal Gelombang pasang laut tahun kemarin'
            ],
            [
                'dataKey' => 'R501FK5',
                'ques_label' => 'Keberadaan korban Gelombang pasang laut tahun kemarin'
            ],
            [
                'dataKey' => 'R501FK6',
                'ques_label' => 'Banyak kejadian Gelombang pasang laut Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501FK7',
                'ques_label' => 'Korban meninggal Gelombang pasang laut Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501FK8',
                'ques_label' => 'Keberadaan korban Gelombang pasang laut Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501GK2',
                'ques_label' => 'Angin puyuh puting beliung topan'
            ],
            [
                'dataKey' => 'R501GK3',
                'ques_label' => 'Banyak kejadian Angin puyuh puting beliung topan tahun kemarin'
            ],
            [
                'dataKey' => 'R501GK4',
                'ques_label' => 'Korban meninggal Angin puyuh puting beliung topan tahun kemarin'
            ],
            [
                'dataKey' => 'R501GK5',
                'ques_label' => 'Keberadaan korban Angin puyuh puting beliung topan tahun kemarin'
            ],
            [
                'dataKey' => 'R501GK6',
                'ques_label' => 'Banyak kejadian Angin puyuh puting beliung topan Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501GK7',
                'ques_label' => 'Korban meninggal Angin puyuh puting beliung topan Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501GK8',
                'ques_label' => 'Keberadaan korban Angin puyuh puting beliung topan Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501HK2',
                'ques_label' => 'Gunung meletus'
            ],
            [
                'dataKey' => 'R501HK3',
                'ques_label' => 'Banyak kejadian Gunung meletus tahun kemarin'
            ],
            [
                'dataKey' => 'R501HK4',
                'ques_label' => 'Korban meninggal Gunung meletus tahun kemarin'
            ],
            [
                'dataKey' => 'R501HK5',
                'ques_label' => 'Keberadaan korban Gunung meletus tahun kemarin'
            ],
            [
                'dataKey' => 'R501HK6',
                'ques_label' => 'Banyak kejadian Gunung meletus Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501HK7',
                'ques_label' => 'Korban meninggal Gunung meletus Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501HK8',
                'ques_label' => 'Keberadaan korban Gunung meletus Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501IK2',
                'ques_label' => 'Kebakaran hutan dan lahan'
            ],
            [
                'dataKey' => 'R501IK3',
                'ques_label' => 'Banyak kejadian Kebakaran hutan tahun kemarin'
            ],
            [
                'dataKey' => 'R501IK4',
                'ques_label' => 'Korban meninggal Kebakaran hutan tahun kemarin'
            ],
            [
                'dataKey' => 'R501IK5',
                'ques_label' => 'Keberadaan korban Kebakaran hutan dan lahan tahun kemarin'
            ],
            [
                'dataKey' => 'R501IK6',
                'ques_label' => 'Banyak kejadian Kebakaran hutan Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501IK7',
                'ques_label' => 'Korban meninggal Kebakaran hutan Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501IK8',
                'ques_label' => 'Keberadaan korban Kebakaran hutan dan lahan Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501JK2',
                'ques_label' => 'Kekeringan (lahan)'
            ],
            [
                'dataKey' => 'R501JK3',
                'ques_label' => 'Banyak kejadian Kekeringan (lahan) tahun kemarin'
            ],
            [
                'dataKey' => 'R501JK4',
                'ques_label' => 'Korban meninggal Kekeringan (lahan) tahun kemarin'
            ],
            [
                'dataKey' => 'R501JK5',
                'ques_label' => 'Keberadaan korban Kekeringan (lahan) tahun kemarin'
            ],
            [
                'dataKey' => 'R501JK6',
                'ques_label' => 'Banyak kejadian Kekeringan (lahan) Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501JK7',
                'ques_label' => 'Korban meninggal Kekeringan (lahan) Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501JK8',
                'ques_label' => 'Keberadaan korban Kekeringan (lahan) Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501KK2',
                'ques_label' => 'Abrasi'
            ],
            [
                'dataKey' => 'R501KK3',
                'ques_label' => 'Banyak kejadian abrasi tahun kemarin'
            ],
            [
                'dataKey' => 'R501KK4',
                'ques_label' => 'Korban meninggal abrasi tahun kemarin'
            ],
            [
                'dataKey' => 'R501KK5',
                'ques_label' => 'Keberadaan korban Abrasi tahun kemarin'
            ],
            [
                'dataKey' => 'R501KK6',
                'ques_label' => 'Banyak kejadian abrasi Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501KK7',
                'ques_label' => 'Korban meninggal abrasi Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R501KK8',
                'ques_label' => 'Keberadaan korban Abrasi Januari - April tahun ini'
            ],
            [
                'dataKey' => 'R502A',
                'ques_label' => '502. a. Sistem peringatan dini bencana alam'
            ],
            [
                'dataKey' => 'R502B',
                'ques_label' => 'b. Sistem peringatan dini khusus tsunami'
            ],
            [
                'dataKey' => 'R502C',
                'ques_label' => 'c. Perlengkapan keselamatan (perahu karet, tenda, masker, dll.)'
            ],
            [
                'dataKey' => 'R502D',
                'ques_label' => 'd. Rambu-rambu dan jalur evakuasi bencana'
            ],
            [
                'dataKey' => 'R502E',
                'ques_label' => 'e. Pembuatan, perawatan, atau normalisasi: sungai, kanal, tanggul, parit, drainase, waduk, pantai, dll.'
            ],
            [
                'dataKey' => 'R503A',
                'ques_label' => 'a. Desa Tangguh Bencana (Destana)'
            ],
            [
                'dataKey' => 'R503B',
                'ques_label' => 'b. Program Kampung Iklim (Proklim)'
            ],
            [
                'dataKey' => 'R503C',
                'ques_label' => 'c. Kampung Pesisir Tangguh'
            ],
            [
                'dataKey' => 'R503D',
                'ques_label' => 'd. Kampung Siaga Bencana'
            ],
            [
                'dataKey' => 'R503E',
                'ques_label' => 'e. Kampung Tangguh Covid'
            ],
            [
                'dataKey' => 'R601AK2',
                'ques_label' => 'Jenjang pendidikan Pos Pendidikan Anak Usia Dini (PAUD) negeri'
            ],
            [
                'dataKey' => 'R601AK3',
                'ques_label' => 'Jenjang pendidikan Pos Pendidikan Anak Usia Dini (PAUD) swasta'
            ],
            [
                'dataKey' => 'R601AK4',
                'ques_label' => 'Jarak mencapai Pos Pendidikan Anak Usia Dini terdekat'
            ],
            [
                'dataKey' => 'R601AK5',
                'ques_label' => 'Kemudahan untuk mencapai Pos Pendidikan Anak Usia Dini (Pos PAUD) terdekat'
            ],
            [
                'dataKey' => 'R601BK2',
                'ques_label' => 'Jumlah TK negeri'
            ],
            [
                'dataKey' => 'R601BK3',
                'ques_label' => 'Jumlah TK swasta'
            ],
            [
                'dataKey' => 'R601BK4',
                'ques_label' => 'Jarak ke TK terdekat'
            ],
            [
                'dataKey' => 'R601BK5',
                'ques_label' => 'Kemudahan mencapai TK'
            ],
            [
                'dataKey' => 'R601CK2',
                'ques_label' => 'Jumlah RA/BA negeri'
            ],
            [
                'dataKey' => 'R601CK3',
                'ques_label' => 'Jumlah RA/BA swasta'
            ],
            [
                'dataKey' => 'R601CK4',
                'ques_label' => 'Jarak ke RA/BA terdekat'
            ],
            [
                'dataKey' => 'R601CK5',
                'ques_label' => 'Kemudahan mencapai RA/BA'
            ],
            [
                'dataKey' => 'R601DK2',
                'ques_label' => 'Jumlah SD negeri'
            ],
            [
                'dataKey' => 'R601DK3',
                'ques_label' => 'Jumlah SD swasta'
            ],
            [
                'dataKey' => 'R601DK4',
                'ques_label' => 'jarak ke SD terdekat'
            ],
            [
                'dataKey' => 'R601DK5',
                'ques_label' => 'Kemudahan mencapai SD'
            ],
            [
                'dataKey' => 'R601EK2',
                'ques_label' => 'Jumlah MI negeri'
            ],
            [
                'dataKey' => 'R601EK3',
                'ques_label' => 'Jumlah MI swasta'
            ],
            [
                'dataKey' => 'R601EK4',
                'ques_label' => 'jarak ke MI terdekat'
            ],
            [
                'dataKey' => 'R601EK5',
                'ques_label' => 'Kemudahan mencapai MI'
            ],
            [
                'dataKey' => 'R601FK2',
                'ques_label' => 'Jumlah SMP negeri'
            ],
            [
                'dataKey' => 'R601FK3',
                'ques_label' => 'Jumlah SMP swasta'
            ],
            [
                'dataKey' => 'R601FK4',
                'ques_label' => 'jarak ke SMP terdekat'
            ],
            [
                'dataKey' => 'R601FK5',
                'ques_label' => 'Kemudahan mencapai SMP'
            ],
            [
                'dataKey' => 'R601GK2',
                'ques_label' => 'Jumlah MTs negeri'
            ],
            [
                'dataKey' => 'R601GK3',
                'ques_label' => 'Jumlah MTs swasta'
            ],
            [
                'dataKey' => 'R601GK4',
                'ques_label' => 'jarak ke MTs terdekat'
            ],
            [
                'dataKey' => 'R601GK5',
                'ques_label' => 'Kemudahan mencapai MTs'
            ],
            [
                'dataKey' => 'R601HK2',
                'ques_label' => 'Jumlah SMA negeri'
            ],
            [
                'dataKey' => 'R601HK3',
                'ques_label' => 'Jumlah SMA swasta'
            ],
            [
                'dataKey' => 'R601HK4',
                'ques_label' => 'jarak ke SMA terdekat'
            ],
            [
                'dataKey' => 'R601HK5',
                'ques_label' => 'Kemudahan mencapai SMA'
            ],
            [
                'dataKey' => 'R601IK2',
                'ques_label' => 'Jumlah MA negeri'
            ],
            [
                'dataKey' => 'R601IK3',
                'ques_label' => 'Jumlah MA swasta'
            ],
            [
                'dataKey' => 'R601IK4',
                'ques_label' => 'jarak ke MA terdekat'
            ],
            [
                'dataKey' => 'R601IK5',
                'ques_label' => 'Kemudahan mencapai MA'
            ],
            [
                'dataKey' => 'R601JK2',
                'ques_label' => 'Jumlah SMK negeri'
            ],
            [
                'dataKey' => 'R601JK3',
                'ques_label' => 'Jumlah SMK swasta'
            ],
            [
                'dataKey' => 'R601JK4',
                'ques_label' => 'jarak ke SMK terdekat'
            ],
            [
                'dataKey' => 'R601JK5',
                'ques_label' => 'Kemudahan mencapai SMK'
            ],
            [
                'dataKey' => 'R601KK2',
                'ques_label' => 'Jumlah Akademi Perguruan Tinggi negeri'
            ],
            [
                'dataKey' => 'R601KK3',
                'ques_label' => 'Jumlah Akademi Perguruan Tinggi swasta'
            ],
            [
                'dataKey' => 'R601KK4',
                'ques_label' => 'jarak ke Akademi Perguruan Tinggi terdekat'
            ],
            [
                'dataKey' => 'R601KK5',
                'ques_label' => 'Kemudahan mencapai Akademi Perguruan Tinggi'
            ],
            [
                'dataKey' => 'R601LK2',
                'ques_label' => 'Jumlah SDLB negeri'
            ],
            [
                'dataKey' => 'R601LK3',
                'ques_label' => 'Jumlah SDLB swasta'
            ],
            [
                'dataKey' => 'R601MK2',
                'ques_label' => 'Jumlah SMPLB negeri'
            ],
            [
                'dataKey' => 'R601MK3',
                'ques_label' => 'Jumlah SMPLB swasta'
            ],
            [
                'dataKey' => 'R601NK2',
                'ques_label' => 'Jumlah SMALB negeri'
            ],
            [
                'dataKey' => 'R601NK3',
                'ques_label' => 'Jumlah SMALB swasta'
            ],
            [
                'dataKey' => 'R601OK2',
                'ques_label' => 'Jumlah Pondok Pesantren negeri'
            ],
            [
                'dataKey' => 'R601OK3',
                'ques_label' => 'Jumlah Pondok Pesantren swasta'
            ],
            [
                'dataKey' => 'R601PK3',
                'ques_label' => 'Jumlah Madrasah Diniyah swasta'
            ],
            [
                'dataKey' => 'R601QK3',
                'ques_label' => 'Jumlah Seminari sejenisnya swasta'
            ],
            [
                'dataKey' => 'R601R',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R602A',
                'ques_label' => 'a. Kegiatan pendidikan keaksaraan dasar/lanjutan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R602B',
                'ques_label' => 'b. Kegiatan pendidikan Paket A/B/C selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R602C',
                'ques_label' => 'c. Taman Bacaan Masyarakat (TBM)'
            ],
            [
                'dataKey' => 'R603A',
                'ques_label' => 'a.  Bahasa asing'
            ],
            [
                'dataKey' => 'R603B',
                'ques_label' => 'b.  Komputer'
            ],
            [
                'dataKey' => 'R603C',
                'ques_label' => 'c.  Menjahit/tata busana'
            ],
            [
                'dataKey' => 'R603D',
                'ques_label' => 'd.  Kecantikan'
            ],
            [
                'dataKey' => 'R603E',
                'ques_label' => 'e.  Montir mobil/motor'
            ],
            [
                'dataKey' => 'R603F',
                'ques_label' => 'f.  Elektronika'
            ],
            [
                'dataKey' => 'R603G',
                'ques_label' => 'g.  Lainnya (tuliskan, misalnya: tataboga, stir mobil, mengetik, akuntansi, dll.)'
            ],
            [
                'dataKey' => 'R604AK2',
                'ques_label' => 'a. Jumlah Rumah sakit'
            ],
            [
                'dataKey' => 'R604BK2',
                'ques_label' => 'b. Jumlah Rumah sakit bersalin'
            ],
            [
                'dataKey' => 'R604CK2',
                'ques_label' => 'c. Jumlah Puskesmas dengan rawat inap'
            ],
            [
                'dataKey' => 'R604DK2',
                'ques_label' => 'd. Jumlah Puskesmas tanpa rawat inap'
            ],
            [
                'dataKey' => 'R604EK2',
                'ques_label' => 'e. Jumlah Puskesmas pembantu'
            ],
            [
                'dataKey' => 'R604FK2',
                'ques_label' => 'f. Jumlah Poliklinik/balai pengobatan'
            ],
            [
                'dataKey' => 'R604GK2',
                'ques_label' => 'g. Jumlah Tempat praktek dokter'
            ],
            [
                'dataKey' => 'R604HK2',
                'ques_label' => 'h. Jumlah Rumah bersalin'
            ],
            [
                'dataKey' => 'R604IK2',
                'ques_label' => 'i. Jumlah Tempat praktek bidan'
            ],
            [
                'dataKey' => 'R604JK2',
                'ques_label' => 'j. Jumlah Poskesdes (pos kesehatan desa)'
            ],
            [
                'dataKey' => 'R604KK2',
                'ques_label' => 'k. Jumlah Polindes (pondok bersalin desa)'
            ],
            [
                'dataKey' => 'R604LK2',
                'ques_label' => 'l. Jumlah Apotek'
            ],
            [
                'dataKey' => 'R604MK2',
                'ques_label' => 'm. Jumlah Toko khusus obat jamu'
            ],
            [
                'dataKey' => 'R605A',
                'ques_label' => 'a. Jumlah posyandu aktif'
            ],
            [
                'dataKey' => 'R605B',
                'ques_label' => 'b. Jumlah posyandu dengan kegiatan/pelayanan setiap sebulan sekali'
            ],
            [
                'dataKey' => 'R605C',
                'ques_label' => 'c. Jumlah posyandu dengan kegiatan/pelayanan setiap 2 bulan sekali atau lebih'
            ],
            [
                'dataKey' => 'R605D',
                'ques_label' => 'd. Jumlah pos pembinaan terpadu (posbindu)'
            ],
            [
                'dataKey' => 'R605E',
                'ques_label' => 'e. Jumlah kader pelaksana (KB/kesehatan ibu dan anak)'
            ],
            [
                'dataKey' => 'R606A1',
                'ques_label' => 'a. 1. Jumlah tenaga dokter umum/spesialis pria yang tinggal menetap di desa/kelurahan'
            ],
            [
                'dataKey' => 'R606A1S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R606A2',
                'ques_label' => '2. Jumlah tenaga dokter umum/spesialis wanita yang tinggal menetap di desa/kelurahan'
            ],
            [
                'dataKey' => 'R606A2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R606B',
                'ques_label' => 'b. Jumlah tenaga dokter spesialis gigi (tidak termasuk tukang gigi) yang tinggal menetap di desa/kelurahan'
            ],
            [
                'dataKey' => 'R606BS',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R606C',
                'ques_label' => 'c. Jumlah tenaga bidan yang tinggal menetap di desa/kelurahan'
            ],
            [
                'dataKey' => 'R606CS',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R606D',
                'ques_label' => 'd. Jumlah tenaga kesehatan lain yang tinggal menetap di desa/kelurahan'
            ],
            [
                'dataKey' => 'R606DS',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R607',
                'ques_label' => '607. Keberadaan bidan desa (BDD) :'
            ],
            [
                'dataKey' => 'R608',
                'ques_label' => '608. Jumlah dukun bayi/dukun bersalin/paraji yang tinggal/menetap di desa/kelurahan'
            ],
            [
                'dataKey' => 'R609',
                'ques_label' => '609. Jumlah warga penderita kekurangan gizi (marasmus dan kwashiorkor) di desa/kelurahan selama tahun kemarin:'
            ],
            [
                'dataKey' => 'R610',
                'ques_label' => '610. Jumlah surat miskin/SKTM yang dikeluarkan desa/kelurahan selama tahun kemarin:'
            ],
            [
                'dataKey' => 'R611AK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Muntaber/diare'
            ],
            [
                'dataKey' => 'R611AK3',
                'ques_label' => 'Jumlah penderita Muntaber diare'
            ],
            [
                'dataKey' => 'R611AK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Muntaber/diare'
            ],
            [
                'dataKey' => 'R611BK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Demam berdarah'
            ],
            [
                'dataKey' => 'R611BK3',
                'ques_label' => 'Jumlah penderita Demam berdarah'
            ],
            [
                'dataKey' => 'R611BK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Demam berdarah'
            ],
            [
                'dataKey' => 'R611CK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Campak'
            ],
            [
                'dataKey' => 'R611CK3',
                'ques_label' => 'Jumlah penderita Campak'
            ],
            [
                'dataKey' => 'R611CK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Campak'
            ],
            [
                'dataKey' => 'R611DK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Malaria'
            ],
            [
                'dataKey' => 'R611DK3',
                'ques_label' => 'Jumlah penderita Malaria'
            ],
            [
                'dataKey' => 'R611DK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Malaria'
            ],
            [
                'dataKey' => 'R611EK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Flu burung/SARS'
            ],
            [
                'dataKey' => 'R611EK3',
                'ques_label' => 'Jumlah penderita Flu burung/SARS'
            ],
            [
                'dataKey' => 'R611EK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Flu burung/SARS'
            ],
            [
                'dataKey' => 'R611FK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Hepatitis E'
            ],
            [
                'dataKey' => 'R611FK3',
                'ques_label' => 'Jumlah penderita Hepatitis E'
            ],
            [
                'dataKey' => 'R611FK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Hepatitis E'
            ],
            [
                'dataKey' => 'R611GK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Difteri'
            ],
            [
                'dataKey' => 'R611GK3',
                'ques_label' => 'Jumlah penderita Difteri'
            ],
            [
                'dataKey' => 'R611GK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Difteri'
            ],
            [
                'dataKey' => 'R611HK2',
                'ques_label' => 'Kejadian luar biasa Corona/Covid-19'
            ],
            [
                'dataKey' => 'R611HK3',
                'ques_label' => 'Jumlah penderita Corona/Covid-19'
            ],
            [
                'dataKey' => 'R611HK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Corona/Covid-19'
            ],
            [
                'dataKey' => 'R611IK2',
                'ques_label' => 'Jumlah penderita Lainnya (misalnya: chikungunya, leptospirosis, kolera, dll )'
            ],
            [
                'dataKey' => 'R611IK3',
                'ques_label' => 'Jumlah penderita yang meninggal karena Lainnya(misalnya: chikungunya, leptospirosis, kolera, dll )'
            ],
            [
                'dataKey' => 'R611IK4',
                'ques_label' => 'Kejadian luar biasa (KLB) Lainnya (misalnya: chikungunya, leptospirosis, kolera, dll )'
            ],
            [
                'dataKey' => 'R611JK2',
                'ques_label' => 'Kejadian luar biasa Kerawanan Pangan'
            ],
            [
                'dataKey' => 'R611JK3',
                'ques_label' => 'Jumlah penderita Kerawanan Pangan'
            ],
            [
                'dataKey' => 'R611JK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Kerawanan Pangan'
            ],
            [
                'dataKey' => 'R701_1',
                'ques_label' => '1. Jumlah warga yang menganut agama Islam'
            ],
            [
                'dataKey' => 'R701_2',
                'ques_label' => '2. Jumlah warga yang menganut agama Kristen'
            ],
            [
                'dataKey' => 'R701_3',
                'ques_label' => '3. Jumlah warga yang menganut agama Katolik'
            ],
            [
                'dataKey' => 'R701_4',
                'ques_label' => '4. Jumlah warga yang menganut agama Buddha'
            ],
            [
                'dataKey' => 'R701_5',
                'ques_label' => '5. Jumlah warga yang menganut agama Hindu'
            ],
            [
                'dataKey' => 'R701_6',
                'ques_label' => '6. Jumlah warga yang menganut agama Konghucu'
            ],
            [
                'dataKey' => 'R701_7',
                'ques_label' => '7. Jumlah warga yang menganut aliran penghayat kepercayaan'
            ],
            [
                'dataKey' => 'R702',
                'ques_label' => '702. Agama kepercayaan yang dianut oleh sebagian besar warga di desa/kelurahan :'
            ],
            [
                'dataKey' => 'R703A',
                'ques_label' => 'a. Jumlah Masjid'
            ],
            [
                'dataKey' => 'R703B',
                'ques_label' => 'b. Jumlah Surau/Langgar/Musala'
            ],
            [
                'dataKey' => 'R703C',
                'ques_label' => 'c. Jumlah Gereja Kristen'
            ],
            [
                'dataKey' => 'R703D',
                'ques_label' => 'd. Jumlah Gereja Katolik'
            ],
            [
                'dataKey' => 'R703E',
                'ques_label' => 'e. Jumlah Kapel'
            ],
            [
                'dataKey' => 'R703F',
                'ques_label' => 'f. Jumlah Pura'
            ],
            [
                'dataKey' => 'R703G',
                'ques_label' => 'g. Jumlah Wihara'
            ],
            [
                'dataKey' => 'R703H',
                'ques_label' => 'h. Jumlah Kelenteng'
            ],
            [
                'dataKey' => 'R703I',
                'ques_label' => 'i. Jumlah Balai Basarah'
            ],
            [
                'dataKey' => 'R703J',
                'ques_label' => 'j. Jumlah lainnya (tuliskan, misalnya: Pamunjungan, dll.)'
            ],
            [
                'dataKey' => 'R704A',
                'ques_label' => '704. a. Warga desa/kelurahan terdiri dari beberapa suku etnis :'
            ],
            [
                'dataKey' => 'R704B',
                'ques_label' => 'b. Warga desa/kelurahan berkomunikasi sehari-hari menggunakan beberapa bahasa :'
            ],
            [
                'dataKey' => 'R705A',
                'ques_label' => 'a. Jumlah Tuna netra (buta)'
            ],
            [
                'dataKey' => 'R705B',
                'ques_label' => 'b. Jumlah Tuna rungu (tuli)'
            ],
            [
                'dataKey' => 'R705C',
                'ques_label' => 'c. Jumlah Tuna wicara (bisu)'
            ],
            [
                'dataKey' => 'R705D',
                'ques_label' => 'd. Jumlah Tuna rungu-wicara (tuli-bisu)'
            ],
            [
                'dataKey' => 'R705E',
                'ques_label' => 'e. Jumlah Tuna daksa (cacat tubuh fisik) : kelumpuhan/kelainan/ketidaklengkapan anggota gerak'
            ],
            [
                'dataKey' => 'R705F',
                'ques_label' => 'f. Jumlah Tuna grahita (keterbelakangan mental)'
            ],
            [
                'dataKey' => 'R705G',
                'ques_label' => 'g. Jumlah Tuna laras (eks-sakit jiwa, mengalami hambatan/gangguan dalam mengendalikan emosi dan kontrol sosial)'
            ],
            [
                'dataKey' => 'R705H',
                'ques_label' => 'h. Jumlah tuna eks-sakit kusta : pernah mengalami sakit kusta dan telah dinyatakan sembuh oleh dokter'
            ],
            [
                'dataKey' => 'R705I',
                'ques_label' => 'i. Jumlah tuna ganda (cacat fisik-mental) : cacat fisik (buta, tuli, bisu, bisu-tuli atau cacat tubuh) dan cacat mental (tunagrahita atau tunalaras)'
            ],
            [
                'dataKey' => 'R706',
                'ques_label' => '706. Jumlah orang yang dipasung di desa/kelurahan'
            ],
            [
                'dataKey' => 'R707',
                'ques_label' => '707. Ruang publik terbuka yang peruntukan utamanya sebagai tempat bagi warga desa/kelurahan untuk bersantai bermain tanpa perlu membayar (misalnya: lapangan terbuka alun-alun, taman, dll.)'
            ],
            [
                'dataKey' => 'R707S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R708A',
                'ques_label' => 'a. Jumlah PKK'
            ],
            [
                'dataKey' => 'R708AS',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R708B',
                'ques_label' => 'b. Jumlah Karang taruna'
            ],
            [
                'dataKey' => 'R708BS',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R708C',
                'ques_label' => 'c. Jumlah Lembaga adat'
            ],
            [
                'dataKey' => 'R708CS',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R708D',
                'ques_label' => 'd. Jumlah Kelompok tani'
            ],
            [
                'dataKey' => 'R708DS',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R708E',
                'ques_label' => 'e. Jumlah Lembaga pengelolaan air'
            ],
            [
                'dataKey' => 'R708ES',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R708F',
                'ques_label' => 'f. Jumlah Kelompok masyarakat (pokmas)'
            ],
            [
                'dataKey' => 'R708FS',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R801AK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Sepak bola'
            ],
            [
                'dataKey' => 'R801AK3',
                'ques_label' => 'Kelompok kegiatan : Sepak bola'
            ],
            [
                'dataKey' => 'R801AK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R801BK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Bola voli'
            ],
            [
                'dataKey' => 'R801BK3',
                'ques_label' => 'Kelompok kegiatan : Bola voli'
            ],
            [
                'dataKey' => 'R801BK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R801CK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Bulu tangkis'
            ],
            [
                'dataKey' => 'R801CK3',
                'ques_label' => 'Kelompok kegiatan : Bulu tangkis'
            ],
            [
                'dataKey' => 'R801CK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R801DK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Bola basket'
            ],
            [
                'dataKey' => 'R801DK3',
                'ques_label' => 'Kelompok kegiatan : Bola basket'
            ],
            [
                'dataKey' => 'R801DK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R801EK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Tenis lapangan'
            ],
            [
                'dataKey' => 'R801EK3',
                'ques_label' => 'Kelompok kegiatan : Tenis lapangan'
            ],
            [
                'dataKey' => 'R801EK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R801FK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Tenis meja'
            ],
            [
                'dataKey' => 'R801FK3',
                'ques_label' => 'Kelompok kegiatan : Tenis meja'
            ],
            [
                'dataKey' => 'R801FK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R801GK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Futsal'
            ],
            [
                'dataKey' => 'R801GK3',
                'ques_label' => 'Kelompok kegiatan : Futsal'
            ],
            [
                'dataKey' => 'R801GK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R801HK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Renang'
            ],
            [
                'dataKey' => 'R801HK3',
                'ques_label' => 'Kelompok kegiatan : Renang'
            ],
            [
                'dataKey' => 'R801HK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R801IK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Bela diri (pencak silat, karate, dll.)'
            ],
            [
                'dataKey' => 'R801IK3',
                'ques_label' => 'Kelompok kegiatan : Bela diri (pencak silat, karate, dll.)'
            ],
            [
                'dataKey' => 'R801IK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R801JK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Bilyard'
            ],
            [
                'dataKey' => 'R801JK3',
                'ques_label' => 'Kelompok kegiatan : Bilyard'
            ],
            [
                'dataKey' => 'R801JK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R801KK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Pusat kebugaran (fitnes, aerobik)'
            ],
            [
                'dataKey' => 'R801KK3',
                'ques_label' => 'Kelompok kegiatan : pusat kebugaran (fitness center) :'
            ],
            [
                'dataKey' => 'R801KK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R801LK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Lainnya'
            ],
            [
                'dataKey' => 'R801LK3',
                'ques_label' => 'Kelompok kegiatan : Lainnya'
            ],
            [
                'dataKey' => 'R801LK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
            ],
            [
                'dataKey' => 'R802',
                'ques_label' => '802. Keberadaan pub/diskotik/tempat/karaoke yang masih berfungsi :'
            ],
            [
                'dataKey' => 'R803',
                'ques_label' => '803. Keberadaan menara telepon seluler, sinyal telepon dan sinyal internet di desa/kelurahan'
            ],
            [
                'dataKey' => 'R901A1',
                'ques_label' => '901. a. 1. Luas lahan pertanian sawah irigasi'
            ],
            [
                'dataKey' => 'R901A2',
                'ques_label' => '2. Luas lahan pertanian sawah non irigasi (tadah hujan, pasang surut, rawa)'
            ],
            [
                'dataKey' => 'R901B',
                'ques_label' => 'b. Luas lahan pertanian non sawah (tegal/kebun, ladang/huma, tambak, kolam/tebat/empang, perkebunan, peternakan, dll.)'
            ],
            [
                'dataKey' => 'R901C',
                'ques_label' => 'c. Lahan non pertanian (perumahan, industri, perkantoran, pertokoan, jalan, prasarana umum, lapangan, dll.)'
            ],
            [
                'dataKey' => 'R1001A',
                'ques_label' => 'a. Industri mikro dan kecil kulit, barang dari kulit dan alas kaki (tas, sepatu, sandal, ikat pinggang, dll)'
            ],
            [
                'dataKey' => 'R1001B',
                'ques_label' => 'b. Industri mikro dan kecil furnitur dari kayu, rotan/bambu, plastik, logam (meja, kursi, tempat tidur, lemari, dll)'
            ],
            [
                'dataKey' => 'R1001C',
                'ques_label' => 'c. Industri mikro dan kecil barang logam, bukan mesin dan peralatannya (teralis, pagar, sabit, pisau, dll)'
            ],
            [
                'dataKey' => 'R1001D',
                'ques_label' => 'd. Industri mikro dan kecil tekstil (kain ulos, kain songket, kain tenun, dan percetakan batik, dll)'
            ],
            [
                'dataKey' => 'R1001E',
                'ques_label' => 'e. Industri mikro dan kecil pakaian jadi (konveksi, pakaian, kemeja, rok, celana, mukena bordir)'
            ],
            [
                'dataKey' => 'R1001F',
                'ques_label' => 'f. Industri mikro dan kecil barang galian bukan logam/industri gerabah/keramik/batu bata (genteng, batu bata, porselin tegel, keramik, kaca patri, cangkir, guci, dll)'
            ],
            [
                'dataKey' => 'R1001G',
                'ques_label' => 'g. Industri mikro dan kecil kayu, barang dari kayu, barang anyaman dari bambu, rotan dan sejenisnya (reng kayu, papan, anyaman tas dan tikar, kusen, dll)'
            ],
            [
                'dataKey' => 'R1001H',
                'ques_label' => 'h. Industri mikro dan kecil makanan (pengolahan dan pengawetan daging, ikan, buah,sayuran, minyak dan lemak, susu, dll)'
            ],
            [
                'dataKey' => 'R1001I',
                'ques_label' => 'i. Industri mikro dan kecil minuman (minuman kemasan, air mineral, air isi ulang, sopi dll)'
            ],
            [
                'dataKey' => 'R1001J',
                'ques_label' => 'j. Industri mikro dan kecil pengolahan tembakau (industri rokok, pengeringan dan perajangan tembakau)'
            ],
            [
                'dataKey' => 'R1001K',
                'ques_label' => 'k. Industri mikro dan kecil kertas dan barang dari kertas (kantong kertas, post card, kardus, sak semen)'
            ],
            [
                'dataKey' => 'R1001L',
                'ques_label' => 'l. Industri mikro dan kecil percetakan dan reproduksi media rekaman (buku, brosur, kartu nama, kalender, spanduk, dll)'
            ],
            [
                'dataKey' => 'R1001M',
                'ques_label' => 'm. Industri mikro dan kecil alat angkutan lainnya (perahu, klotok, rakit, kursi roda, dll)'
            ],
            [
                'dataKey' => 'R1001N',
                'ques_label' => 'n. Industri mikro dan kecil kerajinan dan lainnya (kerajinan tangan, mainan anak-anak, batu akik, perhiasan emas/imitasi,)'
            ],
            [
                'dataKey' => 'R1001O',
                'ques_label' => 'o. Reparasi dan pemasangan mesin dan peralatan (las keliling, reparasi dinamo, reparasi mesin penggiling padi, dll)'
            ],
            [
                'dataKey' => 'R1001P',
                'ques_label' => 'p. Industri mikro dan kecil lainnya'
            ],
            [
                'dataKey' => 'R1002',
                'ques_label' => '1002. Jumlah Sentra Industri:'
            ],
            [
                'dataKey' => 'R1003',
                'ques_label' => '1003. Keberadaan produk barang unggulan/utama di desa/kelurahan'
            ],
            [
                'dataKey' => 'R1004A1',
                'ques_label' => 'Bank Umum Pemerintah (BRI, BNI, Mandiri, BPD, BTN)'
            ],
            [
                'dataKey' => 'R1004A2',
                'ques_label' => 'Bank Umum Swasta (BCA, Permata, Sinarmas, CIMB, dll)'
            ],
            [
                'dataKey' => 'R1004A3',
                'ques_label' => 'Bank Perkreditan Rakyat (BPR)'
            ],
            [
                'dataKey' => 'R1005A1',
                'ques_label' => 'Koperasi Unit Desa (KUD)'
            ],
            [
                'dataKey' => 'R1005A2',
                'ques_label' => 'Koperasi Industri Kecil dan Kerajinan Rakyat (Kopinkra)/Usaha mikro'
            ],
            [
                'dataKey' => 'R1005A3',
                'ques_label' => 'Koperasi Simpan Pinjam (KSP/Kospin)'
            ],
            [
                'dataKey' => 'R1005A4',
                'ques_label' => 'Koperasi lainnya'
            ],
            [
                'dataKey' => 'R1006AK2',
                'ques_label' => 'Jumlah Baitul Maal Wa Tanwil (BMT)'
            ],
            [
                'dataKey' => 'R1006AK3',
                'ques_label' => 'Jarak ke BMT'
            ],
            [
                'dataKey' => 'R1006AK4',
                'ques_label' => 'Kemudahan untuk mencapai ke BMT'
            ],
            [
                'dataKey' => 'R1006BK2',
                'ques_label' => 'Jumlah Anjungan Tunai Mandiri (ATM)'
            ],
            [
                'dataKey' => 'R1006BK3',
                'ques_label' => 'Jarak ke ATM'
            ],
            [
                'dataKey' => 'R1006BK4',
                'ques_label' => 'Kemudahan untuk mencapai ke ATM'
            ],
            [
                'dataKey' => 'R1006CK2',
                'ques_label' => 'Jumlah agen bank'
            ],
            [
                'dataKey' => 'R1006CK3',
                'ques_label' => 'Jarak ke agen bank'
            ],
            [
                'dataKey' => 'R1006CK4',
                'ques_label' => 'Kemudahan untuk mencapai ke agen bank'
            ],
            [
                'dataKey' => 'R1006DK2',
                'ques_label' => 'Jumlah Perusahaan Pembiayaan'
            ],
            [
                'dataKey' => 'R1006DK3',
                'ques_label' => 'Jarak ke Perusahaan Pembiayaan'
            ],
            [
                'dataKey' => 'R1006DK4',
                'ques_label' => 'Kemudahan untuk mencapai ke Perusahaan Pembiayaan'
            ],
            [
                'dataKey' => 'R1006EK2',
                'ques_label' => 'Jumlah Pedagang Valuta Asing'
            ],
            [
                'dataKey' => 'R1006EK3',
                'ques_label' => 'Jarak ke Pedagang Valuta Asing'
            ],
            [
                'dataKey' => 'R1006EK4',
                'ques_label' => 'Kemudahan untuk mencapai ke Pedagang Valuta Asing'
            ],
            [
                'dataKey' => 'R1006FK2',
                'ques_label' => 'Jumlah Pegadaian'
            ],
            [
                'dataKey' => 'R1006FK3',
                'ques_label' => 'Jarak ke Pegadaian'
            ],
            [
                'dataKey' => 'R1006FK4',
                'ques_label' => 'Kemudahan untuk mencapai ke pegadaian'
            ],
            [
                'dataKey' => 'R1006GK2',
                'ques_label' => 'Jumlah Agen Tiket/Travel/Biro perjalanan'
            ],
            [
                'dataKey' => 'R1006GK3',
                'ques_label' => 'Jarak ke Agen Tiket/Travel/Biro perjalanan'
            ],
            [
                'dataKey' => 'R1006GK4',
                'ques_label' => 'Kemudahan untuk mencapai ke Agen Tiket/Travel/Biro perjalanan'
            ],
            [
                'dataKey' => 'R1006HK2',
                'ques_label' => 'Jumlah Bengkel mobil/motor'
            ],
            [
                'dataKey' => 'R1006HK3',
                'ques_label' => 'Jarak ke bengkel mobil/motor'
            ],
            [
                'dataKey' => 'R1006HK4',
                'ques_label' => 'Kemudahan untuk mencapai ke bengkel mobil/motor'
            ],
            [
                'dataKey' => 'R1006IK2',
                'ques_label' => 'Jumlah Salon kecantikan'
            ],
            [
                'dataKey' => 'R1006IK3',
                'ques_label' => 'Jarak ke salon kecantikan'
            ],
            [
                'dataKey' => 'R1006IK4',
                'ques_label' => 'Kemudahan untuk mencapai ke salon kecantikan'
            ],
            [
                'dataKey' => 'R1007AK2',
                'ques_label' => 'Jumlah Kelompok pertokoan (minimal 10 toko dan mengelompok dalam satu lokasi)'
            ],
            [
                'dataKey' => 'R1007AK3',
                'ques_label' => 'Jarak Kelompok pertokoan (minimal 10 toko dan mengelompok dalam satu lokasi)'
            ],
            [
                'dataKey' => 'R1007AK4',
                'ques_label' => 'Kemudahan untuk mencapai Kelompok pertokoan (minimal 10 toko dan mengelompok dalam satu lokasi)'
            ],
            [
                'dataKey' => 'R1007BK2',
                'ques_label' => 'Jumlah Pasar dengan bangunan permanen (memiliki atap, lantai, dan dinding)'
            ],
            [
                'dataKey' => 'R1007BK3',
                'ques_label' => 'Jarak Pasar dengan bangunan permanen (memiliki atap, lantai, dan dinding)'
            ],
            [
                'dataKey' => 'R1007BK4',
                'ques_label' => 'Kemudahan untuk mencapai Pasar dengan bangunan permanen (memiliki atap, lantai, dan dinding)'
            ],
            [
                'dataKey' => 'R1007CK2',
                'ques_label' => 'Jumlah Pasar dengan bangunan semi permanen (memiliki atap dan lantai, tanpa dinding)'
            ],
            [
                'dataKey' => 'R1007CK3',
                'ques_label' => 'Jarak Pasar dengan bangunan semi permanen (memiliki atap dan lantai, tanpa dinding)'
            ],
            [
                'dataKey' => 'R1007CK4',
                'ques_label' => 'Kemudahan untuk mencapai Pasar dengan bangunan semi permanen (memiliki atap dan lantai, tanpa dinding)'
            ],
            [
                'dataKey' => 'R1007DK2',
                'ques_label' => 'Jumlah Pasar tanpa bangunan (misalnya: pasar subuh, pasar terapung, dll.)'
            ],
            [
                'dataKey' => 'R1007DK3',
                'ques_label' => 'Jarak Pasar tanpa bangunan (misalnya: pasar subuh, pasar terapung, dll.)'
            ],
            [
                'dataKey' => 'R1007DK4',
                'ques_label' => 'Kemudahan untuk mencapai Pasar tanpa bangunan (misalnya: pasar subuh, pasar terapung, dll.)'
            ],
            [
                'dataKey' => 'R1007EK2',
                'ques_label' => 'Jumlah Jumlah minimarket/swalayan/supermarket (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang secara eceran dengan label harga, sistem pelayanan mandiri)'
            ],
            [
                'dataKey' => 'R1007EK3',
                'ques_label' => 'Jarak Jumlah minimarket/swalayan/supermarket (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang secara eceran dengan label harga, sistem pelayanan mandiri)'
            ],
            [
                'dataKey' => 'R1007EK4',
                'ques_label' => 'Kemudahan untuk mencapai Jumlah minimarket/swalayan/supermarket (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang secara eceran dengan label harga, sistem pelayanan mandiri)'
            ],
            [
                'dataKey' => 'R1007FK2',
                'ques_label' => 'Jumlah Restoran/rumah makan (usaha pangan siap saji di bangunan tetap, pembeli biasanya dikenai pajak)'
            ],
            [
                'dataKey' => 'R1007FK3',
                'ques_label' => 'Jarak Restoran/rumah makan (usaha pangan siap saji di bangunan tetap, pembeli biasanya dikenai pajak)'
            ],
            [
                'dataKey' => 'R1007FK4',
                'ques_label' => 'Kemudahan untuk mencapai Restoran/rumah makan (usaha pangan siap saji di bangunan tetap, pembeli biasanya dikenai pajak)'
            ],
            [
                'dataKey' => 'R1007GK2',
                'ques_label' => 'Jumlah Warung/kedai makanan minuman (usaha pangan siap saji di bangunan tetap, pembeli biasanya tidak dikenai pajak)'
            ],
            [
                'dataKey' => 'R1007GK3',
                'ques_label' => 'Jarak Warung/kedai makanan minuman (usaha pangan siap saji di bangunan tetap, pembeli biasanya tidak dikenai pajak)'
            ],
            [
                'dataKey' => 'R1007GK4',
                'ques_label' => 'Kemudahan untuk mencapai Warung/kedai makanan minuman (usaha pangan siap saji di bangunan tetap, pembeli biasanya tidak dikenai pajak)'
            ],
            [
                'dataKey' => 'R1007HK2',
                'ques_label' => 'Jumlah Hotel (menyediakan jasa akomodasi dan ada restoran, penginapan dengan izin usaha sebagai hotel)'
            ],
            [
                'dataKey' => 'R1007HK3',
                'ques_label' => 'Jarak Hotel (menyediakan jasa akomodasi dan ada restoran, penginapan dengan izin usaha sebagai hotel)'
            ],
            [
                'dataKey' => 'R1007HK4',
                'ques_label' => 'Kemudahan untuk mencapai Hotel (menyediakan jasa akomodasi dan ada restoran, penginapan dengan izin usaha sebagai hotel)'
            ],
            [
                'dataKey' => 'R1007IK2',
                'ques_label' => 'Jumlah Penginapan: hostel/motel/losmen/wisma (menyediakan akomodasi, penginapan dengan izin usaha bukan sebagai hotel)'
            ],
            [
                'dataKey' => 'R1007IK3',
                'ques_label' => 'Jarak Penginapan: hostel/motel/losmen/wisma (menyediakan akomodasi, penginapan dengan izin usaha bukan sebagai hotel)'
            ],
            [
                'dataKey' => 'R1007IK4',
                'ques_label' => 'Kemudahan untuk mencapai Penginapan: hostel/motel/losmen/wisma (menyediakan akomodasi, penginapan dengan izin usaha bukan sebagai hotel)'
            ],
            [
                'dataKey' => 'R1007JK2',
                'ques_label' => 'Jumlah Toko/warung kelontong (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang keperluan sehari–hari secara eceran, tanpa ada sistem pelayanan mandiri)'
            ],
            [
                'dataKey' => 'R1007JK3',
                'ques_label' => 'Jarak Toko/warung kelontong (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang keperluan sehari–hari secara eceran, tanpa ada sistem pelayanan mandiri)'
            ],
            [
                'dataKey' => 'R1007JK4',
                'ques_label' => 'Kemudahan untuk mencapai Toko/warung kelontong (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang keperluan sehari–hari secara eceran, tanpa ada sistem pelayanan mandiri)'
            ],
            [
                'dataKey' => 'R110101K3',
                'ques_label' => 'Kejadian tindak pencurian yang terjadi di desa/kelurahan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R110101K4',
                'ques_label' => 'Kecenderungan tindak pencurian dibanding setahun lalu'
            ],
            [
                'dataKey' => 'R110102K3',
                'ques_label' => 'Kejadian tindak pencurian dengan kekerasan yang terjadi di desa/kelurahan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R110102K4',
                'ques_label' => 'Kecenderungan  tindak pencurian dengan kekerasan dibanding setahun lalu'
            ],
            [
                'dataKey' => 'R110103K3',
                'ques_label' => 'Kejadian tindak penipuan/penggelapan yang terjadi di desa/kelurahan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R110103K4',
                'ques_label' => 'Kecenderungan tindak penipuan/penggelapan dibanding setahun lalu'
            ],
            [
                'dataKey' => 'R110104K3',
                'ques_label' => 'Kejadian tindak penganiayaan yang terjadi di desa/kelurahan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R110104K4',
                'ques_label' => 'Kecenderungan tindak penganiayaan dibanding setahun lalu'
            ],
            [
                'dataKey' => 'R110105K3',
                'ques_label' => 'Kejadian tindak pembakaran yang terjadi di desa/kelurahan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R110105K4',
                'ques_label' => 'Kecenderungan tindak pembakaran dibanding setahun lalu'
            ],
            [
                'dataKey' => 'R110106K3',
                'ques_label' => 'Kejadian tindak perkosaan/kejahatan terhadap kesusilaan yang terjadi di desa/kelurahan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R110106K4',
                'ques_label' => 'Kecenderungan tindak perkosaan/kejahatan terhadap kesusilaan dibanding setahun lalu'
            ],
            [
                'dataKey' => 'R110107K3',
                'ques_label' => 'Kejadian tindak penyalahgunaan/peredaran narkoba yang terjadi di desa/kelurahan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R110107K4',
                'ques_label' => 'Kecenderungan tindak penyalahgunaan/peredaran narkoba dibanding setahun lalu'
            ],
            [
                'dataKey' => 'R110108K3',
                'ques_label' => 'Kejadian tindak perjudian yang terjadi di desa/kelurahan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R110108K4',
                'ques_label' => 'Kecenderungan tindak perjudian dibanding setahun lalu'
            ],
            [
                'dataKey' => 'R110109K3',
                'ques_label' => 'Kejadian tindak pembunuhan yang terjadi di desa/kelurahan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R110109K4',
                'ques_label' => 'Kecenderungan tindak pembunuhan dibanding setahun lalu'
            ],
            [
                'dataKey' => 'R110110K3',
                'ques_label' => 'Kejadian tindak perdagangan orang (trafficking) yang terjadi di desa/kelurahan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R110110K4',
                'ques_label' => 'Kecenderungan tindak perdagangan orang (trafficking) dibanding setahun lalu'
            ],
            [
                'dataKey' => 'R110111K3',
                'ques_label' => 'Kejadian tindak Korupsi yang terjadi di desa/kelurahan selama setahun terakhir :'
            ],
            [
                'dataKey' => 'R110111K4',
                'ques_label' => 'Kecenderungan tindak korupsi dibanding setahun lalu'
            ],
            [
                'dataKey' => 'R1102',
                'ques_label' => 'Jumlah anggota linmas/hansip di desa/kelurahan'
            ],
            [
                'dataKey' => 'R1103',
                'ques_label' => 'Keberadaan pos polisi (termasuk kantor polisi) di desa/kelurahan'
            ],
            [
                'dataKey' => 'R1103S',
                'ques_label' => '1103. Alamat'
            ],
            [
                'dataKey' => 'R1104AK2',
                'ques_label' => 'Jumlah korban bunuh diri laki-laki (termasuk percobaan bunuh diri) selama setahun terakhir di desa/kelurahan'
            ],
            [
                'dataKey' => 'R1104AK3',
                'ques_label' => 'Jumlah korban bunuh diri perempuan (termasuk percobaan bunuh diri) selama setahun terakhir di desa/kelurahan'
            ],
            [
                'dataKey' => 'R1104BK2',
                'ques_label' => 'Jumlah korban pembunuhan laki-laki yang terjadi selama setahun terakhir di desa/kelurahan'
            ],
            [
                'dataKey' => 'R1104BK3',
                'ques_label' => 'Jumlah korban pembunuhan perempuan selama setahun terakhir di desa/kelurahan'
            ],
            [
                'dataKey' => 'R1201A',
                'ques_label' => 'a. Jumlah unit usaha BUMDes'
            ],
            [
                'dataKey' => 'R1201B',
                'ques_label' => 'b. Tanah kas desa/ulayat'
            ],
            [
                'dataKey' => 'R1201C',
                'ques_label' => 'c. Tambatan Perahu'
            ],
            [
                'dataKey' => 'R1201D',
                'ques_label' => 'd. Pasar desa (pasar hewan, pelelangan ikan, pelelangan hasil pertanian)'
            ],
            [
                'dataKey' => 'R1201E',
                'ques_label' => 'e. Bangunan milik desa (balai desa, balai rakyat,lapangan olah raga dll.)'
            ],
            [
                'dataKey' => 'R1201F',
                'ques_label' => 'f. Hutan milik desa'
            ],
            [
                'dataKey' => 'R1201G',
                'ques_label' => 'g. Mata air milik desa'
            ],
            [
                'dataKey' => 'R1201H',
                'ques_label' => 'h. Tempat wisata/pemandian umum'
            ],
            [
                'dataKey' => 'R1201I',
                'ques_label' => 'i. Aset lainnya milik desa (kekayaan asli desa, hibah/sumbangan/sejenisnya dll)'
            ],
            [
                'dataKey' => 'R1202A1',
                'ques_label' => 'a. Rencana Pembangunan Jangka Menengah Desa (RPJM Desa) yang berlaku'
            ],
            [
                'dataKey' => 'R1202B',
                'ques_label' => 'b. Rencana Kerja Pemerintah Desa (RKP Desa) tahun ini'
            ],
            [
                'dataKey' => 'R1202C',
                'ques_label' => 'c. Jumlah peraturan desa tahun kemarin'
            ],
            [
                'dataKey' => 'R1202D',
                'ques_label' => 'd. Jumlah peraturan kepala desa tahun kemarin'
            ],
            [
                'dataKey' => 'R1203A',
                'ques_label' => '1203. a. Keberadaan kerjasama antar desa tahun kemarin'
            ],
            [
                'dataKey' => 'R1203B',
                'ques_label' => 'b. Keberadaan kerjasama antar desa tahun kemarin'
            ],
            [
                'dataKey' => 'R1204',
                'ques_label' => '1204. Keberadaan pendamping lokal desa'
            ],
            [
                'dataKey' => 'R1204S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1205A',
                'ques_label' => '1205. a. Keberadaan kader pembangunan manusia (KPM)'
            ],
            [
                'dataKey' => 'R1205AS',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1205B',
                'ques_label' => 'b. Jika ada, apakah ada KPM yang mendapatkan pembinaan dari pemerintah kabupaten/kota?'
            ],
            [
                'dataKey' => 'R1301AK2',
                'ques_label' => 'Penyaluran dana desa dalam bentuk BLT (Tiga bulan pertama)'
            ],
            [
                'dataKey' => 'R1301AK3',
                'ques_label' => 'Jumlah keluarga yang menerima BLT (Tiga bulan pertama)'
            ],
            [
                'dataKey' => 'R1301AK4',
                'ques_label' => 'Nilai BLT (Tiga bulan pertama) setiap keluarga'
            ],
            [
                'dataKey' => 'R1301AK5',
                'ques_label' => 'Persentase jumlah dana BLT (Tiga bulan pertama) terhadap total dana desa yang diterima'
            ],
            [
                'dataKey' => 'R1301BK2',
                'ques_label' => 'Penyaluran dana desa dalam bentuk BLT (Tiga bulan kedua)'
            ],
            [
                'dataKey' => 'R1301BK3',
                'ques_label' => 'Jumlah keluarga yang menerima BLT (Tiga bulan kedua)'
            ],
            [
                'dataKey' => 'R1301BK4',
                'ques_label' => 'Nilai BLT (Tiga bulan kedua) setiap keluarga'
            ],
            [
                'dataKey' => 'R1301BK5',
                'ques_label' => 'Persentase jumlah dana BLT (Tiga bulan kedua) terhadap total dana desa yang diterima'
            ],
            [
                'dataKey' => 'R1301CK2',
                'ques_label' => 'Penyaluran dana desa dalam bentuk padat karya tunai desa'
            ],
            [
                'dataKey' => 'R1301CK3',
                'ques_label' => 'Jumlah keluarga yang menerima padat karya tunai desa'
            ],
            [
                'dataKey' => 'R1301CK4',
                'ques_label' => 'Nilai BLT (Tiga bulan kedua) setiap keluarga'
            ],
            [
                'dataKey' => 'R1301CK5',
                'ques_label' => 'Persentase jumlah dana padat karya tunai desa terhadap total dana desa yang diterima'
            ],
            [
                'dataKey' => 'R1302_1',
                'ques_label' => '1. Kegiatan posyandu'
            ],
            [
                'dataKey' => 'R1302_1A',
                'ques_label' => 'a. Pemberian makanan tambahan PMT  penyuluhan'
            ],
            [
                'dataKey' => 'R1302_1B',
                'ques_label' => 'b. Pelatihan kader'
            ],
            [
                'dataKey' => 'R1302_1C',
                'ques_label' => 'c. Insentif kader'
            ],
            [
                'dataKey' => 'R1302_1D',
                'ques_label' => 'd. Lain-lain'
            ],
            [
                'dataKey' => 'R1302_2',
                'ques_label' => '2. Kelas ibu hamil'
            ],
            [
                'dataKey' => 'R1302_3',
                'ques_label' => '3. Kelas ibu balita'
            ],
            [
                'dataKey' => 'R1302_4',
                'ques_label' => '4. PMT ibu hamil Kurang Energi Kronis (KEK)/Resiko Tinggi (RESTI)'
            ],
            [
                'dataKey' => 'R1302_5',
                'ques_label' => '5. Akses air minum aman'
            ],
            [
                'dataKey' => 'R1302_6',
                'ques_label' => '6. Akses jamban sehat'
            ],
            [
                'dataKey' => 'R1302_7',
                'ques_label' => '7. Jaminan kesehatan untuk ibu hamil dari keluarga miskin'
            ],
            [
                'dataKey' => 'R1302_8',
                'ques_label' => '8. Jaminan kesehatan untuk anak baduta dari keluarga miskin'
            ],
            [
                'dataKey' => 'R1302_9',
                'ques_label' => '9. Akta kelahiran untuk bayi dari keluarga miskin'
            ],
            [
                'dataKey' => 'R1302_10',
                'ques_label' => '10. Kelas pengasuhan'
            ],
            [
                'dataKey' => 'R1302_11',
                'ques_label' => '11. Pemanfaatan pekarangan keluarga dan tanah desa'
            ],
            [
                'dataKey' => 'R1303A',
                'ques_label' => 'a. Sarana prasarana energi'
            ],
            [
                'dataKey' => 'R1303B',
                'ques_label' => 'b. Sarana prasarana sanitasi dan air bersih'
            ],
            [
                'dataKey' => 'R1303C',
                'ques_label' => 'c. Sarana prasarana penanggulangan bencana dan pelestarian alam'
            ],
            [
                'dataKey' => 'R1304A',
                'ques_label' => 'a. Pengembangan energi terbarukan'
            ],
            [
                'dataKey' => 'R1304B',
                'ques_label' => 'b. Pengelolaan lingkungan perumahan desa/kelurahan'
            ],
            [
                'dataKey' => 'R1304C',
                'ques_label' => 'c. Peningkatan kesadaran dalam pelestarian alam dan penanggulangan bencana'
            ],
            [
                'dataKey' => 'R1401AK2',
                'ques_label' => 'Keberadaan : Kepala Desa/Lurah'
            ],
            [
                'dataKey' => 'R1401AK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1401AK3',
                'ques_label' => 'Umur Kepala Desa/Lurah'
            ],
            [
                'dataKey' => 'R1401AK4',
                'ques_label' => 'Jenis kelamin Kepala Desa/Lurah'
            ],
            [
                'dataKey' => 'R1401AK5',
                'ques_label' => 'Pendidikan tertinggi yang ditamatkan Kepala Desa/Lurah'
            ],
            [
                'dataKey' => 'R1401AK6',
                'ques_label' => 'Tahun Kepala Desa/Lurah mulai menjabat'
            ],
            [
                'dataKey' => 'R1401BK2',
                'ques_label' => 'Keberadaan : Sekretaris Desa/Sekretaris Kelurahan'
            ],
            [
                'dataKey' => 'R1401BK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1401BK3',
                'ques_label' => 'Umur Sekretaris Desa/Sekretaris Kelurahan'
            ],
            [
                'dataKey' => 'R1401BK4',
                'ques_label' => 'Jenis kelamin Sekretaris Desa/Sekretaris Kelurahan'
            ],
            [
                'dataKey' => 'R1401BK5',
                'ques_label' => 'Pendidikan tertinggi yang ditamatkan Sekretaris Desa/Sekretaris Kelurahan'
            ],
            [
                'dataKey' => 'R1401BK6',
                'ques_label' => 'Tahun Sekretaris Desa/Sekretaris Kelurahan mulai menjabat'
            ],
            [
                'dataKey' => 'R1402A',
                'ques_label' => 'Sekretariat Desa/Kelurahan  (kaur keuangan, dll)'
            ],
            [
                'dataKey' => 'R1402A1',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1402B',
                'ques_label' => 'Pelaksana Teknis (kasi kesejahteraan, dll)'
            ],
            [
                'dataKey' => 'R1402B1',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1402C',
                'ques_label' => 'Pelaksana Kewilayahan (Kadus, Ketua RT, dll.)'
            ],
            [
                'dataKey' => 'R1402C1',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1402D',
                'ques_label' => 'Pegawai desa lainnya (hansip, dll)'
            ],
            [
                'dataKey' => 'R1402D1',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1403',
                'ques_label' => '1403. Badan Permusyawaratan Desa/Lembaga Musyawarah Kelurahan'
            ],
            [
                'dataKey' => 'R1404A',
                'ques_label' => 'a. Desa sudah menjalankan pemilihan kepala desa secara serentak'
            ],
            [
                'dataKey' => 'R1404B',
                'ques_label' => 'b. Tahun terakhir pelaksanaan pemilihan kepala desa'
            ],
            [
                'dataKey' => 'R1404C',
                'ques_label' => 'c. Jumlah calon pemilihan kepala desa'
            ],
            [
                'dataKey' => 'R1404D',
                'ques_label' => 'd. Persentase perolehan suara pemenang pemilihan kepala desa'
            ],
            [
                'dataKey' => 'R601AK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601AK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601BK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601BK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601CK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601CK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601DK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601DK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601EK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601EK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601FK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601FK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601GK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601GK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601HK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601HK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601IK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601IK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601JK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601JK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601KK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601KK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601LK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601LK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601MK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601MK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601NK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601NK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601OK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601OK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601PK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R601QK3S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604AK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604BK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604CK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604DK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604EK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604FK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604GK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604HK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604IK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604JK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604KK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604LK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R604MK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R803S',
                'ques_label' => 'Sebutkan alamatnya'
            ],
            [
                'dataKey' => 'R1001PS',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1005A4S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1006AK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1006BK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1006CK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1006DK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1006EK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1006FK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1006GK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1006HK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],
            [
                'dataKey' => 'R1006IK2S',
                'ques_label' => 'Sebutkan namanya (jika > 1 pisahkan dengan tanda koma ,)'
            ],

        ];
        foreach($ques_data as $data){
			// insert semua data ke tabel
			$this->db->table('ques')->insert($data);
		}
    }
}
