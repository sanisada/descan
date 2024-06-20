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
                'ques_label' => 'Provinsi'
			],
            [
                'dataKey' => 'R102',
                'ques_label' => 'Kabupaten/Kota'
			],
            [
                'dataKey' => 'R103',
                'ques_label' => 'Kecamatan'
			],
            [
                'dataKey' => 'R104',
                'ques_label' => 'Desa/Kelurahan *)'
			],
            [
                'dataKey' => 'R106A',
                'ques_label' => 'SK pembentukan/pengesahan desa/kelurahan'
			],
            [
                'dataKey' => 'R303D',
                'ques_label' => 'Daftar SLS terkecil di desa/kelurahan:'
			],
            [
                'dataKey' => 'R304',
                'ques_label' => 'Luas wilayah desa/kelurahan (1 Ha= 0,01 km2 )'
			],
            [
                'dataKey' => 'R307B1',
                'ques_label' => 'Koordinat lokasi kegiatan pemerintahan desa/kelurahan:'
			],
            [
                'dataKey' => 'R307B1_LAT',
                'ques_label' => 'Koordinat Garis Lintang (Latitude):'
			],
            [
                'dataKey' => 'R307B1_LA0',
                'ques_label' => 'Garis Lintang'
			],
            [
                'dataKey' => 'R307B1_LON',
                'ques_label' => 'Koordinat Garis Bujur (Longitude) Timur:'
			],
            [
                'dataKey' => 'R307B2',
                'ques_label' => 'Ketinggian letak (Altitude) lokasi kegiatan pemerintahan desa/kelurahan dari permukaan air laut (dpal)'
			],
            [
                'dataKey' => 'R401',
                'ques_label' => 'Penduduk dan keluarga pada 1 Januari 2024:'
			],
            [
                'dataKey' => 'R401A',
                'ques_label' => 'a.  Jumlah penduduk laki– laki'
			],
            [
                'dataKey' => 'R401B',
                'ques_label' => 'b.  Jumlah penduduk perempuan'
			],
            [
                'dataKey' => 'R401C',
                'ques_label' => 'c.  Jumlah keluarga'
			],
            [
                'dataKey' => 'R401D',
                'ques_label' => 'd.  Jumlah keluarga pertanian (tanaman pangan, hortikultura, perkebunan, kehutanan, peternakan, perikanan )'
			],
            [
                'dataKey' => 'R402B',
                'ques_label' => 'b.  Jumlah warga desa/kelurahan yang sedang bekerja sebagai Pekerja Migran Indonesia/TKI di luar negeri pada 1 Januari 2024:'
			],
            [
                'dataKey' => 'R402B1',
                'ques_label' => '1. Laki-laki'
			],
            [
                'dataKey' => 'R402B2',
                'ques_label' => '2. Perempuan'
			],
            [
                'dataKey' => 'R402E',
                'ques_label' => 'Keberadaan Warga Negara Asing (WNA) di desa/kelurahan pada 1 Januari 2024'
			],
            [
                'dataKey' => 'R402E1',
                'ques_label' => '1. Laki-laki'
			],
            [
                'dataKey' => 'R402E2',
                'ques_label' => '2. Perempuan'
			],
            [
                'dataKey' => 'R403A',
                'ques_label' => 'Jumlah penduduk bekerja per lapangan usaha'
			],
            [
                'dataKey' => 'R403A1',
                'ques_label' => 'Pertanian, kehutanan, dan perikanan'
			],
            [
                'dataKey' => 'R403A2',
                'ques_label' => 'Pertambangan dan penggalian'
			],
            [
                'dataKey' => 'R403A3',
                'ques_label' => 'Industri pengolahan'
			],
            [
                'dataKey' => 'R403A4',
                'ques_label' => 'Pengadaan listrik, gas, uap/air panas, dan udara dingin'
			],
            [
                'dataKey' => 'R403A5',
                'ques_label' => 'Treatment air, treatment air limbah, Treatment dan pemulihan material sampah, dan aktivitas remediasi'
			],
            [
                'dataKey' => 'R403A6',
                'ques_label' => 'Konstruksi'
			],
            [
                'dataKey' => 'R403A7',
                'ques_label' => 'Perdagangan besar dan eceran, reparasi dan perawatan mobil dan sepeda motor'
			],
            [
                'dataKey' => 'R403A8',
                'ques_label' => 'Pengangkutan dan pergudangan'
			],
            [
                'dataKey' => 'R403A9',
                'ques_label' => 'Penyediaan akomodasi dan penyediaan makan minum'
			],
            [
                'dataKey' => 'R403A10',
                'ques_label' => 'Informasi dan komunikasi'
			],
            [
                'dataKey' => 'R403A11',
                'ques_label' => 'Aktivitas keuangan & asuransi'
			],
            [
                'dataKey' => 'R403A12',
                'ques_label' => 'Real estat'
			],
            [
                'dataKey' => 'R403A13',
                'ques_label' => 'Aktivitas profesional, ilmiah, dan teknis'
			],
            [
                'dataKey' => 'R403A14',
                'ques_label' => 'Aktivitas penyewaan dan sewa guna tanpa hak opsi, ketenagakerjaan, agen perjalanan, dan penunjang usaha lainnya'
			],
            [
                'dataKey' => 'R403A15',
                'ques_label' => 'Administrasi pemerintahan, pertahanan, dan jaminan sosial wajib'
			],
            [
                'dataKey' => 'R403A16',
                'ques_label' => 'Pendidikan'
			],
            [
                'dataKey' => 'R403A17',
                'ques_label' => 'Aktivitas kesehatan manusia dan aktivitas sosial'
			],
            [
                'dataKey' => 'R403A18',
                'ques_label' => 'Kesenian, hiburan, dan rekreasi'
			],
            [
                'dataKey' => 'R403A19',
                'ques_label' => 'Aktivitas jasa lainnya'
			],
            [
                'dataKey' => 'R403A20',
                'ques_label' => 'Aktivitas keluarga sebagai pemberi kerja'
			],
            [
                'dataKey' => 'R403A21',
                'ques_label' => 'Aktivitas badan internasional dan badan ekstra internasional lainnya'
			],
            [
                'dataKey' => 'R403B1',
                'ques_label' => 'Jenis sub sektor utama sebagian besar penduduk desa/kelurahan:'
			],
            [
                'dataKey' => 'R403B2',
                'ques_label' => 'Komoditas utama dari sub sektor utama sebagian besar penduduk desa/kelurahan'
			],
            [
                'dataKey' => 'R501A1',
                'ques_label' => ' Jumlah keluarga pengguna listrik: PLN (Perusahaan Listrik Negara)'
			],
            [
                'dataKey' => 'R501A2',
                'ques_label' => ' Jumlah keluarga pengguna listrik: Non–PLN (misalnya: swasta, swadaya, atau perseorangan)'
			],
            [
                'dataKey' => 'R501B',
                'ques_label' => 'Jumlah keluarga bukan pengguna listrik:'
			],
            [
                'dataKey' => 'R504C',
                'ques_label' => 'Keberadaan Tempat Penampungan Sementara (TPS)'
			],
            [
                'dataKey' => 'R504C1',
                'ques_label' => 'Nama TPS'
			],
            [
                'dataKey' => 'R509A',
                'ques_label' => 'Wilayah desa/kelurahan dilalui Saluran Udara Tegangan Ekstra Tinggi (SUTET) / Saluran Udara Tegangan Tinggi (SUTT) / Saluran Udara Tegangan Tinggi Arus Searah (SUTTAS)'
			],
            [
                'dataKey' => 'R509B',
                'ques_label' => 'Keberadaan permukiman di bawah SUTET/SUTT/SUTTAS:'
			],
            [
                'dataKey' => 'R509C1',
                'ques_label' => 'Jumlah lokasi'
			],
            [
                'dataKey' => 'R509C1A',
                'ques_label' => 'Alamat'
			],
            [
                'dataKey' => 'R509C2',
                'ques_label' => 'Jumlah bangunan rumah'
			],
            [
                'dataKey' => 'R509C3',
                'ques_label' => 'Jumlah keluarga'
			],
            [
                'dataKey' => 'R509AK2',
                'ques_label' => 'Sungai'
			],
            [
                'dataKey' => 'R509AK3',
                'ques_label' => 'Saluran irigasi'
			],
            [
                'dataKey' => 'R509AK4',
                'ques_label' => 'Danau/waduk/situ/bendungan'
			],
            [
                'dataKey' => 'R509AK5',
                'ques_label' => 'Embung'
			],
            ['dataKey' => 'R510B1K2',
                'ques_label' => 'Penggunaan sungai untuk : Mandi cuci'
			],
            ['dataKey' => 'R510B1K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Mandi cuci'
			],
            ['dataKey' => 'R510B1K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Mandi cuci'
			],
            ['dataKey' => 'R510B1K5',
                'ques_label' => 'Penggunaan embung untuk : Mandi cuci'
			],
            ['dataKey' => 'R510B2K2',
                'ques_label' => 'Penggunaan sungai untuk : Sumber air minum masak'
			],
            ['dataKey' => 'R510B2K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Sumber air minum masak'
			],
            ['dataKey' => 'R510B2K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Sumber air minum masak'
			],
            ['dataKey' => 'R510B2K5',
                'ques_label' => 'Penggunaan embung untuk : Sumber air minum masak'
			],
            ['dataKey' => 'R510B3K2',
                'ques_label' => 'Penggunaan sungai untuk : Bahan baku air minum'
			],
            ['dataKey' => 'R510B3K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Bahan baku air minum'
			],
            ['dataKey' => 'R510B3K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Bahan baku air minum masak'
			],
            ['dataKey' => 'R510B3K5',
                'ques_label' => 'Penggunaan embung untuk : Bahan baku air minum masak'
			],
            ['dataKey' => 'R510B4K2',
                'ques_label' => 'Penggunaan sungai untuk : Pengairan irigasi lahan pertanian'
			],
            ['dataKey' => 'R510B4K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Pengairan irigasi lahan pertanian'
			],
            ['dataKey' => 'R510B4K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Pengairan irigasi lahan pertanian'
			],
            ['dataKey' => 'R510B4K5',
                'ques_label' => 'Penggunaan embung untuk : Pengairan irigasi lahan pertanian'
			],
            ['dataKey' => 'R510B5K2',
                'ques_label' => 'Penggunaan sungai untuk : Pariwisata (komersial)'
			],
            ['dataKey' => 'R510B5K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Pariwisata (komersial)'
			],
            ['dataKey' => 'R510B5K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Pariwisata (komersial)'
			],
            ['dataKey' => 'R510B5K5',
                'ques_label' => 'Penggunaan embung untuk : Pariwisata (komersial)'
			],
            ['dataKey' => 'R510B6K2',
                'ques_label' => 'Penggunaan sungai untuk : Perikanan'
			],
            ['dataKey' => 'R510B6K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Perikanan'
			],
            ['dataKey' => 'R510B6K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Perikanan'
			],
            ['dataKey' => 'R510B6K5',
                'ques_label' => 'Penggunaan embung untuk : Perikanan'
			],
            ['dataKey' => 'R510B7K2',
                'ques_label' => 'Penggunaan sungai untuk : Transportasi'
			],
            ['dataKey' => 'R510B7K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Transportasi'
			],
            ['dataKey' => 'R510B7K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Transportasi'
			],
            ['dataKey' => 'R510B7K5',
                'ques_label' => 'Penggunaan embung untuk : Transportasi'
			],
            ['dataKey' => 'R510B8K2',
                'ques_label' => 'Penggunaan sungai untuk : Pembangkit listrik'
			],
            ['dataKey' => 'R510B8K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Pembangkit listrik'
			],
            ['dataKey' => 'R510B8K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Pembangkit listrik'
			],
            ['dataKey' => 'R510B8K5',
                'ques_label' => 'Penggunaan embung untuk : Pembangkit listrik'
			],
            ['dataKey' => 'R510B9K2',
                'ques_label' => 'Penggunaan sungai untuk : Industri pabrik'
			],
            ['dataKey' => 'R510B9K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Industri pabrik'
			],
            ['dataKey' => 'R510B9K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Industri pabrik'
			],
            ['dataKey' => 'R510B9K5',
                'ques_label' => 'Penggunaan embung untuk : Industri pabrik'
			],
            ['dataKey' => 'R510B10K2',
                'ques_label' => 'Penggunaan sungai untuk : Lainnya'
			],
            ['dataKey' => 'R510B10K3',
                'ques_label' => 'Penggunaan saluran irigasi untuk : Lainnya'
			],
            ['dataKey' => 'R510B10K4',
                'ques_label' => 'Penggunaan danau waduk situ bendungan untuk : Lainnya'
			],
            [   'dataKey' => 'R510B10K5',
                'ques_label' => 'Penggunaan embung untuk : Lainnya'
			],
            [
                'dataKey' => 'R511A',
                'ques_label' => 'Keberadaan permukiman di bantaran sungai'
            ],
            [
                'dataKey' => 'R511B1',
                'ques_label' => 'Jumlah lokasi'
			],
            [
                'dataKey' => 'R511B2',
                'ques_label' => 'Jumlah bangunan rumah'
			],
            [
                'dataKey' => 'R511B3',
                'ques_label' => 'Jumlah keluarga'
			],
            [
                'dataKey' => 'R513A',
                'ques_label' => 'Keberadaan permukiman kumuh (sanitasi lingkungan buruk, bangunan padat, dan sebagian besar tidak layak huni) di desa/kelurahan :'
			],
            [
                'dataKey' => 'R513B1',
                'ques_label' => 'Jumlah lokasi'
			],
            [
                'dataKey' => 'R513B2',
                'ques_label' => 'Jumlah bangunan rumah'
			],
            [
                'dataKey' => 'R513B3',
                'ques_label' => 'Jumlah keluarga'
			],
            [
                'dataKey' => 'R516',
                'ques_label' => 'Keberadaan dan keaktifan komunitas/kelompok lingkungan hidup (meliputi gerakan lingkungan berkelanjutan, sadar lingkungan, siaga bencana)'
			],
            [
                'dataKey' => 'R516A',
                'ques_label' => 'Nama komunitas/kelompok lingkungan hidup'
			],
            [
                'dataKey' => 'R518',
                'ques_label' => 'Keberadaan lokasi penggalian Golongan C (misalnya: batu kali, pasir, kapur, kaolin, pasir kuarsa, tanah liat, dll.) di desa kelurahan :'
			],
            [
                'dataKey' => 'R518A',
                'ques_label' => 'Lokasi dan nama galiannya'
			],
            [
                'dataKey' => 'R601AK2',
                'ques_label' => 'Tanah longsor'
			],
            [
                'dataKey' => 'R601AK3',
                'ques_label' => 'Banyak kejadian tanah longsor 2023'
			],
            [
                'dataKey' => 'R601AK4',
                'ques_label' => 'Korban meninggal tanah longsor 2023'
			],
            [
                'dataKey' => 'R601AK5',
                'ques_label' => 'Keberadaan korban tanah longsor 2023'
			],
            [
                'dataKey' => 'R601AK6',
                'ques_label' => 'Banyak kejadian tanah longsor Januari - April 2024'
			],
            [
                'dataKey' => 'R601AK7',
                'ques_label' => 'Korban meninggal tanah longsor Januari - April 2024'
			],
            [
                'dataKey' => 'R601AK8',
                'ques_label' => 'Keberadaan korban tanah longsor Januari - April 2024'
			],
            [
                'dataKey' => 'R601BK2',
                'ques_label' => 'Banjir'
			],
            [
                'dataKey' => 'R601BK3',
                'ques_label' => 'Banyak kejadian Banjir 2023'
			],
            [
                'dataKey' => 'R601BK4',
                'ques_label' => 'Korban meninggal Banjir 2023'
			],
            [
                'dataKey' => 'R601BK5',
                'ques_label' => 'Keberadaan korban Banjir 2023'
			],
            [
                'dataKey' => 'R601BK6',
                'ques_label' => 'Banyak kejadian Banjir Januari - April 2024'
			],
            [
                'dataKey' => 'R601BK7',
                'ques_label' => 'Korban meninggal Banjir Januari - April 2024'
			],
            [
                'dataKey' => 'R601BK8',
                'ques_label' => 'Keberadaan korban Banjir Januari - April 2024'
			],
            [
                'dataKey' => 'R601CK2',
                'ques_label' => 'Banjir bandang'
			],
            [
                'dataKey' => 'R601CK3',
                'ques_label' => 'Banyak kejadian Banjir bandang 2023'
			],
            [
                'dataKey' => 'R601CK4',
                'ques_label' => 'Korban meninggal Banjir bandang 2023'
			],
            [
                'dataKey' => 'R601CK5',
                'ques_label' => 'Keberadaan Banjir bandang korban 2023'
			],
            [
                'dataKey' => 'R601CK6',
                'ques_label' => 'Banyak kejadian Banjir bandang Januari - April 2024'
			],
            [
                'dataKey' => 'R601CK7',
                'ques_label' => 'Korban meninggal Banjir bandang Januari - April 2024'
			],
            [
                'dataKey' => 'R601CK8',
                'ques_label' => 'Keberadaan korban Banjir bandang Januari - April 2024'
			],
            [
                'dataKey' => 'R601DK2',
                'ques_label' => 'Gempa bumi'
			],
            [
                'dataKey' => 'R601DK3',
                'ques_label' => 'Banyak kejadian Gempa bumi 2023'
			],
            [
                'dataKey' => 'R601DK4',
                'ques_label' => 'Korban meninggal Gempa bumi 2023'
			],
            [
                'dataKey' => 'R601DK5',
                'ques_label' => 'Keberadaan korban Gempa bumi 2023'
			],
            [
                'dataKey' => 'R601DK6',
                'ques_label' => 'Banyak kejadian Gempa bumi Januari - April 2024'
			],
            [
                'dataKey' => 'R601DK7',
                'ques_label' => 'Korban meninggal Gempa bumi Januari - April 2024'
			],
            [
                'dataKey' => 'R601DK8',
                'ques_label' => 'Keberadaan korban Gempa bumi Januari - April 2024'
			],
            [
                'dataKey' => 'R601EK2',
                'ques_label' => 'Tsunami'
			],
            [
                'dataKey' => 'R601EK3',
                'ques_label' => 'Banyak kejadian Tsunami 2023'
			],
            [
                'dataKey' => 'R601EK4',
                'ques_label' => 'Korban meninggal Tsunami 2023'
			],
            [
                'dataKey' => 'R601EK5',
                'ques_label' => 'Keberadaan korban Tsunami 2023'
			],
            [
                'dataKey' => 'R601EK6',
                'ques_label' => 'Banyak kejadian Tsunami Januari - April 2024'
			],
            [
                'dataKey' => 'R601EK7',
                'ques_label' => 'Korban meninggal Tsunami Januari - April 2024'
			],
            [
                'dataKey' => 'R601EK8',
                'ques_label' => 'Keberadaan korban Tsunami Januari - April 2024'
			],
            [
                'dataKey' => 'R601FK2',
                'ques_label' => 'Gelombang pasang laut'
			],
            [
                'dataKey' => 'R601FK3',
                'ques_label' => 'Banyak kejadian Gelombang pasang laut 2023'
			],
            [
                'dataKey' => 'R601FK4',
                'ques_label' => 'Korban meninggal Gelombang pasang laut 2023'
			],
            [
                'dataKey' => 'R601FK5',
                'ques_label' => 'Keberadaan korban Gelombang pasang laut 2023'
			],
            [
                'dataKey' => 'R601FK6',
                'ques_label' => 'Banyak kejadian Gelombang pasang laut Januari - April 2024'
			],
            [
                'dataKey' => 'R601FK7',
                'ques_label' => 'Korban meninggal Gelombang pasang laut Januari - April 2024'
			],
            [
                'dataKey' => 'R601FK8',
                'ques_label' => 'Keberadaan korban Gelombang pasang laut Januari - April 2024'
			],
            [
                'dataKey' => 'R601GK2',
                'ques_label' => 'Angin puyuh/puting beliung/topan'
			],
            [
                'dataKey' => 'R601GK3',
                'ques_label' => 'Banyak kejadian Angin puyuh/puting beliung/topan 2023'
			],
            [
                'dataKey' => 'R601GK4',
                'ques_label' => 'Korban meninggal Angin puyuh/puting beliung/topan 2023'
			],
            [
                'dataKey' => 'R601GK5',
                'ques_label' => 'Keberadaan korban Angin puyuh/puting beliung/topan 2023'
			],
            [
                'dataKey' => 'R601GK6',
                'ques_label' => 'Banyak kejadian Angin puyuh/puting beliung/topan Januari - April 2024'
			],
            [
                'dataKey' => 'R601GK7',
                'ques_label' => 'Korban meninggal Angin puyuh/puting beliung/topan Januari - April 2024'
			],
            [
                'dataKey' => 'R601GK8',
                'ques_label' => 'Keberadaan korban Angin puyuh/puting beliung/topan Januari - April 2024'
			],
            [
                'dataKey' => 'R601HK2',
                'ques_label' => 'Gunung meletus'
			],
            [
                'dataKey' => 'R601HK3',
                'ques_label' => 'Banyak kejadian Gunung meletus 2023'
			],
            [
                'dataKey' => 'R601HK4',
                'ques_label' => 'Korban meninggal Gunung meletus 2023'
			],
            [
                'dataKey' => 'R601HK5',
                'ques_label' => 'Keberadaan korban Gunung meletus 2023'
			],
            [
                'dataKey' => 'R601HK6',
                'ques_label' => 'Banyak kejadian Gunung meletus Januari - April 2024'
			],
            [
                'dataKey' => 'R601HK7',
                'ques_label' => 'Korban meninggal Gunung meletus Januari - April 2024'
			],
            [
                'dataKey' => 'R601HK8',
                'ques_label' => 'Keberadaan korban Gunung meletus Januari - April 2024'
			],
            [
                'dataKey' => 'R601IK2',
                'ques_label' => 'Kebakaran hutan dan lahan'
			],
            [
                'dataKey' => 'R601IK3',
                'ques_label' => 'Banyak kejadian Kebakaran hutan 2023'
			],
            [
                'dataKey' => 'R601IK4',
                'ques_label' => 'Korban meninggal Kebakaran hutan 2023'
			],
            [
                'dataKey' => 'R601IK5',
                'ques_label' => 'Keberadaan korban Kebakaran hutan dan lahan 2023'
			],
            [
                'dataKey' => 'R601IK6',
                'ques_label' => 'Banyak kejadian Kebakaran hutan Januari - April 2024'
			],
            [
                'dataKey' => 'R601IK7',
                'ques_label' => 'Korban meninggal Kebakaran hutan Januari - April 2024'
			],
            [
                'dataKey' => 'R601IK8',
                'ques_label' => 'Keberadaan korban Kebakaran hutan dan lahan Januari - April 2024'
			],
            [
                'dataKey' => 'R601JK2',
                'ques_label' => 'Kekeringan (lahan)'
			],
            [
                'dataKey' => 'R601JK3',
                'ques_label' => 'Banyak kejadian Kekeringan (lahan) 2023'
			],
            [
                'dataKey' => 'R601JK4',
                'ques_label' => 'Korban meninggal Kekeringan (lahan) 2023'
			],
            [
                'dataKey' => 'R601JK5',
                'ques_label' => 'Keberadaan korban Kekeringan (lahan) 2023'
			],
            [
                'dataKey' => 'R601JK6',
                'ques_label' => 'Banyak kejadian Kekeringan (lahan) Januari - April 2024'
			],
            [
                'dataKey' => 'R601JK7',
                'ques_label' => 'Korban meninggal Kekeringan (lahan) Januari - April 2024'
			],
            [
                'dataKey' => 'R601JK8',
                'ques_label' => 'Keberadaan korban Kekeringan (lahan) Januari - April 2024'
			],
            [
                'dataKey' => 'R601KK2',
                'ques_label' => 'Abrasi'
			],
            [
                'dataKey' => 'R601KK3',
                'ques_label' => 'Banyak kejadian abrasi 2023'
			],
            [
                'dataKey' => 'R601KK4',
                'ques_label' => 'Korban meninggal abrasi 2023'
			],
            [
                'dataKey' => 'R601KK5',
                'ques_label' => 'Keberadaan korban Abrasi 2023'
			],
            [
                'dataKey' => 'R601KK6',
                'ques_label' => 'Banyak kejadian abrasi Januari - April 2024'
			],
            [
                'dataKey' => 'R601KK7',
                'ques_label' => 'Korban meninggal abrasi Januari - April 2024'
			],
            [
                'dataKey' => 'R601KK8',
                'ques_label' => 'Keberadaan korban Abrasi Januari - April 2024'
			],
            [
                'dataKey' => 'R604A',
                'ques_label' => 'Sistem peringatan dini bencana alam'
			],
            [
                'dataKey' => 'R604B',
                'ques_label' => 'Sistem peringatan dini khusus tsunami'
			],
            [
                'dataKey' => 'R604C',
                'ques_label' => 'Perlengkapan keselamatan (perahu karet, tenda, masker, dll.)'
			],
            [
                'dataKey' => 'R604D',
                'ques_label' => 'Rambu-rambu dan jalur evakuasi bencana'
			],
            [
                'dataKey' => 'R604E',
                'ques_label' => 'Pembuatan, perawatan, atau normalisasi: sungai, kanal, tanggul, parit, drainase, waduk, pantai, dll.'
			],
            [
                'dataKey' => 'R605A',
                'ques_label' => 'Desa Tangguh Bencana (Destana)'
			],
            [
                'dataKey' => 'R605B',
                'ques_label' => 'Program Kampung Iklim (Proklim)'
			],
            [
                'dataKey' => 'R605C',
                'ques_label' => 'Kampung Pesisir Tangguh'
			],
            [
                'dataKey' => 'R605D',
                'ques_label' => 'Kampung Siaga Bencana'
			],
            [
                'dataKey' => 'R605E',
                'ques_label' => 'Kampung Tangguh Covid'
			],
            [
                'dataKey' => 'R701AK2',
                'ques_label' => 'Jenjang pendidikan Pos Pendidikan Anak Usia Dini (PAUD) negeri'
			],
            [
                'dataKey' => 'R701AK3',
                'ques_label' => 'Jenjang pendidikan Pos Pendidikan Anak Usia Dini (PAUD) swasta'
			],
            [
                'dataKey' => 'R701AK4',
                'ques_label' => 'Jarak mencapai Pos Pendidikan Anak Usia Dini terdekat'
			],
            [
                'dataKey' => 'R701AK5',
                'ques_label' => 'Kemudahan untuk mencapai Pos Pendidikan Anak Usia Dini (Pos PAUD) terdekat'
			],
            [
                'dataKey' => 'R701BK2',
                'ques_label' => 'Jumlah TK negeri'
			],
            [
                'dataKey' => 'R701BK3',
                'ques_label' => 'Jumlah TK swasta'
			],
            [
                'dataKey' => 'R701BK4',
                'ques_label' => 'Jarak ke TK terdekat'
			],
            [
                'dataKey' => 'R701BK5',
                'ques_label' => 'Kemudahan mencapai TK'
			],
            [
                'dataKey' => 'R701CK2',
                'ques_label' => 'Jumlah RA/BA negeri'
			],
            [
                'dataKey' => 'R701CK3',
                'ques_label' => 'Jumlah RA/BA swasta'
			],
            [
                'dataKey' => 'R701CK4',
                'ques_label' => 'Jarak ke RA/BA terdekat'
			],
            [
                'dataKey' => 'R701CK5',
                'ques_label' => 'Kemudahan mencapai RA/BA'
			],
            [
                'dataKey' => 'R701DK2',
                'ques_label' => 'Jumlah SD negeri'
			],
            [
                'dataKey' => 'R701DK3',
                'ques_label' => 'Jumlah SD swasta'
			],
            [
                'dataKey' => 'R701DK4',
                'ques_label' => 'jarak ke SD terdekat'
			],
            [
                'dataKey' => 'R701DK5',
                'ques_label' => 'Kemudahan mencapai SD'
			],
            [
                'dataKey' => 'R701EK2',
                'ques_label' => 'Jumlah MI negeri'
			],
            [
                'dataKey' => 'R701EK3',
                'ques_label' => 'Jumlah MI swasta'
			],
            [
                'dataKey' => 'R701EK4',
                'ques_label' => 'jarak ke MI terdekat'
			],
            [
                'dataKey' => 'R701EK5',
                'ques_label' => 'Kemudahan mencapai MI'
			],
            [
                'dataKey' => 'R701FK2',
                'ques_label' => 'Jumlah SMP negeri'
			],
            [
                'dataKey' => 'R701FK3',
                'ques_label' => 'Jumlah SMP swasta'
			],
            [
                'dataKey' => 'R701FK4',
                'ques_label' => 'jarak ke SMP terdekat'
			],
            [
                'dataKey' => 'R701FK5',
                'ques_label' => 'Kemudahan mencapai SMP'
			],
            [
                'dataKey' => 'R701GK2',
                'ques_label' => 'Jumlah MTs negeri'
			],
            [
                'dataKey' => 'R701GK3',
                'ques_label' => 'Jumlah MTs swasta'
			],
            [
                'dataKey' => 'R701GK4',
                'ques_label' => 'jarak ke MTs terdekat'
			],
            [
                'dataKey' => 'R701GK5',
                'ques_label' => 'Kemudahan mencapai MTs'
			],
            [
                'dataKey' => 'R701HK2',
                'ques_label' => 'Jumlah SMA negeri'
			],
            [
                'dataKey' => 'R701HK3',
                'ques_label' => 'Jumlah SMA swasta'
			],
            [
                'dataKey' => 'R701HK4',
                'ques_label' => 'jarak ke SMA terdekat'
			],
            [
                'dataKey' => 'R701HK5',
                'ques_label' => 'Kemudahan mencapai SMA'
			],
            [
                'dataKey' => 'R701IK2',
                'ques_label' => 'Jumlah MA negeri'
			],
            [
                'dataKey' => 'R701IK3',
                'ques_label' => 'Jumlah MA swasta'
			],
            [
                'dataKey' => 'R701IK4',
                'ques_label' => 'jarak ke MA terdekat'
			],
            [
                'dataKey' => 'R701IK5',
                'ques_label' => 'Kemudahan mencapai MA'
			],
            [
                'dataKey' => 'R701JK2',
                'ques_label' => 'Jumlah SMK negeri'
			],
            [
                'dataKey' => 'R701JK3',
                'ques_label' => 'Jumlah SMK swasta'
			],
            [
                'dataKey' => 'R701JK4',
                'ques_label' => 'jarak ke SMK terdekat'
			],
            [
                'dataKey' => 'R701JK5',
                'ques_label' => 'Kemudahan mencapai SMK'
			],
            [
                'dataKey' => 'R701KK2',
                'ques_label' => 'Jumlah Akademi Perguruan Tinggi negeri'
			],
            [
                'dataKey' => 'R701KK3',
                'ques_label' => 'Jumlah Akademi Perguruan Tinggi swasta'
			],
            [
                'dataKey' => 'R701KK4',
                'ques_label' => 'jarak ke Akademi Perguruan Tinggi terdekat'
			],
            [
                'dataKey' => 'R701KK5',
                'ques_label' => 'Kemudahan mencapai Akademi Perguruan Tinggi'
			],
            [
                'dataKey' => 'R701LK2',
                'ques_label' => 'Jumlah SDLB negeri'
			],
            [
                'dataKey' => 'R701LK3',
                'ques_label' => 'Jumlah SDLB swasta'
			],
            [
                'dataKey' => 'R701MK2',
                'ques_label' => 'Jumlah SMPLB negeri'
			],
            [
                'dataKey' => 'R701MK3',
                'ques_label' => 'Jumlah SMPLB swasta'
			],
            [
                'dataKey' => 'R701NK2',
                'ques_label' => 'Jumlah SMALB negeri'
			],
            [
                'dataKey' => 'R701NK3',
                'ques_label' => 'Jumlah SMALB swasta'
			],
            [
                'dataKey' => 'R701OK2',
                'ques_label' => 'Jumlah Pondok Pesantren negeri'
			],
            [
                'dataKey' => 'R701OK3',
                'ques_label' => 'Jumlah Pondok Pesantren swasta'
			],
            [
                'dataKey' => 'R701PK3',
                'ques_label' => 'Jumlah Madrasah Diniyah swasta'
			],
            [
                'dataKey' => 'R701QK3',
                'ques_label' => 'Jumlah Seminari sejenisnya swasta'
			],
            [
                'dataKey' => 'R701R',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R702A',
                'ques_label' => 'a. Kegiatan pendidikan keaksaraan dasar/lanjutan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R702B',
                'ques_label' => 'b. Kegiatan pendidikan Paket A/B/C selama setahun terakhir :'
			],
            [
                'dataKey' => 'R702C',
                'ques_label' => 'c. Taman Bacaan Masyarakat (TBM)'
			],
            [
                'dataKey' => 'R703A',
                'ques_label' => 'a.  Bahasa asing'
			],
            [
                'dataKey' => 'R703B',
                'ques_label' => 'b.  Komputer'
			],
            [
                'dataKey' => 'R703C',
                'ques_label' => 'c.  Menjahit/tata busana'
			],
            [
                'dataKey' => 'R703D',
                'ques_label' => 'd.  Kecantikan'
			],
            [
                'dataKey' => 'R703E',
                'ques_label' => 'e.  Montir mobil/motor'
			],
            [
                'dataKey' => 'R703F',
                'ques_label' => 'f.  Elektronika'
			],
            [
                'dataKey' => 'R703G',
                'ques_label' => 'g.  Lainnya (tuliskan, misalnya: tataboga, stir mobil, mengetik, akuntansi, dll.)'
			],
            [
                'dataKey' => 'R704AK2',
                'ques_label' => 'Jumlah Rumah sakit'
			],
            [
                'dataKey' => 'R704BK2',
                'ques_label' => 'Jumlah Rumah sakit bersalin'
			],
            [
                'dataKey' => 'R704CK2',
                'ques_label' => 'Jumlah Puskesmas dengan rawat inap'
			],
            [
                'dataKey' => 'R704DK2',
                'ques_label' => 'Jumlah Puskesmas tanpa rawat inap'
			],
            [
                'dataKey' => 'R704EK2',
                'ques_label' => 'Jumlah Puskesmas pembantu'
			],
            [
                'dataKey' => 'R704FK2',
                'ques_label' => 'Jumlah Poliklinik/balai pengobatan'
			],
            [
                'dataKey' => 'R704GK2',
                'ques_label' => 'Jumlah Tempat praktek dokter'
			],
            [
                'dataKey' => 'R704HK2',
                'ques_label' => 'Jumlah Rumah bersalin'
			],
            [
                'dataKey' => 'R704IK2',
                'ques_label' => 'Jumlah Tempat praktek bidan'
			],
            [
                'dataKey' => 'R704JK2',
                'ques_label' => 'Jumlah Poskesdes (pos kesehatan desa)'
			],
            [
                'dataKey' => 'R704KK2',
                'ques_label' => 'Jumlah Polindes (pondok bersalin desa)'
			],
            [
                'dataKey' => 'R704LK2',
                'ques_label' => 'Jumlah Apotek'
			],
            [
                'dataKey' => 'R704MK2',
                'ques_label' => 'Jumlah Toko khusus obat jamu'
			],
            [
                'dataKey' => 'R705A',
                'ques_label' => 'Jumlah posyandu aktif'
			],
            [
                'dataKey' => 'R705B',
                'ques_label' => 'Jumlah posyandu dengan kegiatan/pelayanan setiap sebulan sekali'
			],
            [
                'dataKey' => 'R705C',
                'ques_label' => 'Jumlah posyandu dengan kegiatan/pelayanan setiap 2 bulan sekali atau lebih'
			],
            [
                'dataKey' => 'R705D',
                'ques_label' => 'Jumlah pos pembinaan terpadu (posbindu)'
			],
            [
                'dataKey' => 'R705E',
                'ques_label' => 'Jumlah kader pelaksana (KB/kesehatan ibu dan anak)'
			],
            [
                'dataKey' => 'R706A1',
                'ques_label' => 'Jumlah tenaga dokter umum/spesialis pria yang tinggal menetap di desa/kelurahan'
			],
            [
                'dataKey' => 'R706A1B',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R706A2',
                'ques_label' => 'Jumlah tenaga dokter umum/spesialis wanita yang tinggal menetap di desa/kelurahan'
			],
            [
                'dataKey' => 'R706A2B',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R706B',
                'ques_label' => 'Jumlah tenaga dokter spesialis gigi (tidak termasuk tukang gigi) yang tinggal menetap di desa/kelurahan'
			],
            [
                'dataKey' => 'R706B2',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R706C',
                'ques_label' => 'Jumlah tenaga bidan yang tinggal menetap di desa/kelurahan'
			],
            [
                'dataKey' => 'R706C2',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R706D',
                'ques_label' => 'Jumlah tenaga kesehatan lain yang tinggal menetap di desa/kelurahan'
			],
            [
                'dataKey' => 'R706D2',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R707',
                'ques_label' => 'Keberadaan bidan desa (BDD) :'
			],
            [
                'dataKey' => 'R708',
                'ques_label' => 'Jumlah dukun bayi/dukun bersalin/paraji yang tinggal/menetap di desa/kelurahan'
			],
            [
                'dataKey' => 'R709',
                'ques_label' => 'Jumlah warga penderita kekurangan gizi (marasmus dan kwashiorkor) di desa/kelurahan selama tahun 2023:'
			],
            [
                'dataKey' => 'R710',
                'ques_label' => 'Jumlah surat miskin/SKTM yang dikeluarkan desa/kelurahan selama tahun 2023:'
			],
            [
                'dataKey' => 'R711AK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Muntaber/diare'
			],
            [
                'dataKey' => 'R711AK3',
                'ques_label' => 'Jumlah penderita Muntaber diare'
			],
            [
                'dataKey' => 'R711AK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Muntaber/diare'
			],
            [
                'dataKey' => 'R711BK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Demam berdarah'
			],
            [
                'dataKey' => 'R711BK3',
                'ques_label' => 'Jumlah penderita Demam berdarah'
			],
            [
                'dataKey' => 'R711BK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Demam berdarah'
			],
            [
                'dataKey' => 'R711CK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Campak'
			],
            [
                'dataKey' => 'R711CK3',
                'ques_label' => 'Jumlah penderita Campak'
			],
            [
                'dataKey' => 'R711CK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Campak'
			],
            [
                'dataKey' => 'R711DK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Malaria'
			],
            [
                'dataKey' => 'R711DK3',
                'ques_label' => 'Jumlah penderita Malaria'
			],
            [
                'dataKey' => 'R711DK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Malaria'
			],
            [
                'dataKey' => 'R711EK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Flu burung/SARS'
			],
            [
                'dataKey' => 'R711EK3',
                'ques_label' => 'Jumlah penderita Flu burung/SARS'
			],
            [
                'dataKey' => 'R711EK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Flu burung/SARS'
			],
            [
                'dataKey' => 'R711FK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Hepatitis E'
			],
            [
                'dataKey' => 'R711FK3',
                'ques_label' => 'Jumlah penderita Hepatitis E'
			],
            [
                'dataKey' => 'R711FK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Hepatitis E'
			],
            [
                'dataKey' => 'R711GK2',
                'ques_label' => 'Kejadian luar biasa (KLB) Difteri'
			],
            [
                'dataKey' => 'R711GK3',
                'ques_label' => 'Jumlah penderita Difteri'
			],
            [
                'dataKey' => 'R711GK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Difteri'
			],
            [
                'dataKey' => 'R711HK2',
                'ques_label' => 'Kejadian luar biasa Corona/Covid-19'
			],
            [
                'dataKey' => 'R711HK3',
                'ques_label' => 'Jumlah penderita Corona/Covid-19'
			],
            [
                'dataKey' => 'R711HK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Corona/Covid-19'
			],
            [
                'dataKey' => 'R711IK2',
                'ques_label' => 'Jumlah penderita Lainnya (misalnya: chikungunya, leptospirosis, kolera, dll )'
			],
            [
                'dataKey' => 'R711IK3',
                'ques_label' => 'Jumlah penderita yang meninggal karena Lainnya(misalnya: chikungunya, leptospirosis, kolera, dll )'
			],
            [
                'dataKey' => 'R711IK4',
                'ques_label' => 'Kejadian luar biasa (KLB) Lainnya (misalnya: chikungunya, leptospirosis, kolera, dll )'
			],
            [
                'dataKey' => 'R711JK2',
                'ques_label' => 'Kejadian luar biasa Kerawanan Pangan'
			],
            [
                'dataKey' => 'R711JK3',
                'ques_label' => 'Jumlah penderita Kerawanan Pangan'
			],
            [
                'dataKey' => 'R711JK4',
                'ques_label' => 'Jumlah penderita yang meninggal karena Kerawanan Pangan'
			],
            [
                'dataKey' => 'R801_1',
                'ques_label' => 'Jumlah warga yang menganut agama Islam'
			],
            [
                'dataKey' => 'R801_2',
                'ques_label' => 'Jumlah warga yang menganut agama Kristen'
			],
            [
                'dataKey' => 'R801_3',
                'ques_label' => 'Jumlah warga yang menganut agama Katolik'
			],
            [
                'dataKey' => 'R801_4',
                'ques_label' => 'Jumlah warga yang menganut agama Buddha'
			],
            [
                'dataKey' => 'R801_5',
                'ques_label' => 'Jumlah warga yang menganut agama Hindu'
			],
            [
                'dataKey' => 'R801_6',
                'ques_label' => 'Jumlah warga yang menganut agama Konghucu'
			],
            [
                'dataKey' => 'R801_7',
                'ques_label' => 'Jumlah warga yang menganut aliran penghayat kepercayaan'
			],
            [
                'dataKey' => 'R802',
                'ques_label' => 'Agama kepercayaan yang dianut oleh sebagian besar warga di desa/kelurahan :'
			],
            [
                'dataKey' => 'R803A',
                'ques_label' => 'Jumlah Masjid'
			],
            [
                'dataKey' => 'R803B',
                'ques_label' => 'Jumlah Surau/Langgar/Musala'
			],
            [
                'dataKey' => 'R803C',
                'ques_label' => 'Jumlah Gereja Kristen'
			],
            [
                'dataKey' => 'R803D',
                'ques_label' => 'Jumlah Gereja Katolik'
			],
            [
                'dataKey' => 'R803E',
                'ques_label' => 'Jumlah Kapel'
			],
            [
                'dataKey' => 'R803F',
                'ques_label' => 'Jumlah Pura'
			],
            [
                'dataKey' => 'R803G',
                'ques_label' => 'Jumlah Wihara'
			],
            [
                'dataKey' => 'R803H',
                'ques_label' => 'Jumlah Kelenteng'
			],
            [
                'dataKey' => 'R803I',
                'ques_label' => 'Jumlah Balai Basarah'
			],
            [
                'dataKey' => 'R803J',
                'ques_label' => 'Jumlah lainnya (tuliskan, misalnya: Pamunjungan, dll.)'
			],
            [
                'dataKey' => 'R804A1',
                'ques_label' => 'Warga desa/kelurahan terdiri dari beberapa suku etnis :'
			],
            [
                'dataKey' => 'R804B1',
                'ques_label' => 'Warga desa/kelurahan berkomunikasi sehari-hari menggunakan beberapa bahasa :'
			],
            [
                'dataKey' => 'R805A',
                'ques_label' => 'Jumlah Tuna netra (buta)'
			],
            [
                'dataKey' => 'R805B',
                'ques_label' => 'Jumlah Tuna rungu (tuli)'
			],
            [
                'dataKey' => 'R805C',
                'ques_label' => 'Jumlah Tuna wicara (bisu)'
			],
            [
                'dataKey' => 'R805D',
                'ques_label' => 'Jumlah Tuna rungu-wicara (tuli-bisu)'
			],
            [
                'dataKey' => 'R805E',
                'ques_label' => 'Jumlah Tuna daksa (cacat tubuh fisik) : kelumpuhan/kelainan/ketidaklengkapan anggota gerak'
			],
            [
                'dataKey' => 'R805F',
                'ques_label' => 'Jumlah Tuna grahita (keterbelakangan mental)'
			],
            [
                'dataKey' => 'R805G',
                'ques_label' => 'Jumlah Tuna laras (eks-sakit jiwa, mengalami hambatan/gangguan dalam mengendalikan emosi dan kontrol sosial)'
			],
            [
                'dataKey' => 'R805H',
                'ques_label' => 'Jumlah tuna eks-sakit kusta : pernah mengalami sakit kusta dan telah dinyatakan sembuh oleh dokter'
			],
            [
                'dataKey' => 'R805I',
                'ques_label' => 'Jumlah tuna ganda (cacat fisik-mental) : cacat fisik (buta, tuli, bisu, bisu-tuli atau cacat tubuh) dan cacat mental (tunagrahita atau tunalaras)'
			],
            [
                'dataKey' => 'R806',
                'ques_label' => 'Jumlah orang yang dipasung di desa/kelurahan'
			],
            [
                'dataKey' => 'R807A',
                'ques_label' => 'Ruang publik terbuka yang peruntukan utamanya sebagai tempat bagi warga desa/kelurahan untuk bersantai bermain tanpa perlu membayar (misalnya: lapangan terbuka alun-alun, taman, dll.)'
			],
            [
                'dataKey' => 'R807A1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R809A',
                'ques_label' => 'Jumlah PKK'
			],
            [
                'dataKey' => 'R809A1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R809B',
                'ques_label' => 'Jumlah Karang taruna'
			],
            [
                'dataKey' => 'R809B1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R809C',
                'ques_label' => 'Jumlah Lembaga adat'
			],
            [
                'dataKey' => 'R809C1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R809D',
                'ques_label' => 'Jumlah Kelompok tani'
			],
            [
                'dataKey' => 'R809D1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R809E',
                'ques_label' => 'Jumlah Lembaga pengelolaan air'
			],
            [
                'dataKey' => 'R809E1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R809F',
                'ques_label' => 'Jumlah Kelompok masyarakat (pokmas)'
			],
            [
                'dataKey' => 'R809F1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R901AK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Sepak bola'
			],
            [
                'dataKey' => 'R901AK3',
                'ques_label' => 'Kelompok kegiatan : Sepak bola'
			],
            [
                'dataKey' => 'R901AK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R901BK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Bola voli'
			],
            [
                'dataKey' => 'R901BK3',
                'ques_label' => 'Kelompok kegiatan : Bola voli'
			],
            [
                'dataKey' => 'R901BK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R901CK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Bulu tangkis'
			],
            [
                'dataKey' => 'R901CK3',
                'ques_label' => 'Kelompok kegiatan : Bulu tangkis'
			],
            [
                'dataKey' => 'R901CK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R901DK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Bola basket'
			],
            [
                'dataKey' => 'R901DK3',
                'ques_label' => 'Kelompok kegiatan : Bola basket'
			],
            [
                'dataKey' => 'R901DK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R901EK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Tenis lapangan'
			],
            [
                'dataKey' => 'R901EK3',
                'ques_label' => 'Kelompok kegiatan : Tenis lapangan'
			],
            [
                'dataKey' => 'R901EK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R901FK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Tenis meja'
			],
            [
                'dataKey' => 'R901FK3',
                'ques_label' => 'Kelompok kegiatan : Tenis meja'
			],
            [
                'dataKey' => 'R901FK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R901GK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Futsal'
			],
            [
                'dataKey' => 'R901GK3',
                'ques_label' => 'Kelompok kegiatan : Futsal'
			],
            [
                'dataKey' => 'R901GK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R901HK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Renang'
			],
            [
                'dataKey' => 'R901HK3',
                'ques_label' => 'Kelompok kegiatan : Renang'
			],
            [
                'dataKey' => 'R901HK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R901IK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Bela diri (pencak silat, karate, dll.)'
			],
            [
                'dataKey' => 'R901IK3',
                'ques_label' => 'Kelompok kegiatan : Bela diri (pencak silat, karate, dll.)'
			],
            [
                'dataKey' => 'R901IK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R901JK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Bilyard'
			],
            [
                'dataKey' => 'R901JK3',
                'ques_label' => 'Kelompok kegiatan : Bilyard'
			],
            [
                'dataKey' => 'R901JK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R901KK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Pusat kebugaran (fitnes, aerobik)'
			],
            [
                'dataKey' => 'R901KK3',
                'ques_label' => 'Kelompok kegiatan : pusat kebugaran (fitness center) :'
			],
            [
                'dataKey' => 'R901KK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R901LK2',
                'ques_label' => 'Ketersediaan fasilitas lapangan: Lainnya'
			],
            [
                'dataKey' => 'R901LK3',
                'ques_label' => 'Kelompok kegiatan : Lainnya'
			],
            [
                'dataKey' => 'R901LK4',
                'ques_label' => 'Sebutkan alamat fasilitas/lapangan'
			],
            [
                'dataKey' => 'R902A',
                'ques_label' => 'Keberadaan pub/diskotik/tempat/karaoke yang masih berfungsi :'
			],
            [
                'dataKey' => 'R1005A',
                'ques_label' => 'Keberadaan menara telepon seluler, sinyal telepon dan sinyal internet di desa/kelurahan'
			],
            [
                'dataKey' => 'R1101A1',
                'ques_label' => 'Luas lahan pertanian sawah irigasi'
			],
            [
                'dataKey' => 'R1101A2',
                'ques_label' => 'Luas lahan pertanian sawah non irigasi (tadah hujan, pasang surut, rawa)'
			],
            [
                'dataKey' => 'R1101B',
                'ques_label' => 'Luas lahan pertanian non sawah (tegal/kebun, ladang/huma, tambak, kolam/tebat/empang, perkebunan, peternakan, dll.)'
			],
            [
                'dataKey' => 'R1101C',
                'ques_label' => 'Lahan non pertanian (perumahan, industri, perkantoran, pertokoan, jalan, prasarana umum, lapangan, dll.)'
			],
            [
                'dataKey' => 'R1201A',
                'ques_label' => 'Industri mikro dan kecil kulit, barang dari kulit dan alas kaki (tas, sepatu, sandal, ikat pinggang, dll)'
			],
            [
                'dataKey' => 'R1201B',
                'ques_label' => 'Industri mikro dan kecil furnitur dari kayu, rotan/bambu, plastik, logam (meja, kursi, tempat tidur, lemari, dll)'
			],
            [
                'dataKey' => 'R1201C',
                'ques_label' => 'Industri mikro dan kecil barang logam, bukan mesin dan peralatannya (teralis, pagar, sabit, pisau, dll)'
			],
            [
                'dataKey' => 'R1201D',
                'ques_label' => 'Industri mikro dan kecil tekstil (kain ulos, kain songket, kain tenun, dan percetakan batik, dll)'
			],
            [
                'dataKey' => 'R1201E',
                'ques_label' => 'Industri mikro dan kecil pakaian jadi (konveksi, pakaian, kemeja, rok, celana, mukena bordir)'
			],
            [
                'dataKey' => 'R1201F',
                'ques_label' => 'Industri mikro dan kecil barang galian bukan logam/industri gerabah/keramik/batu bata (genteng, batu bata, porselin tegel, keramik, kaca patri, cangkir, guci, dll)'
			],
            [
                'dataKey' => 'R1201G',
                'ques_label' => 'Industri mikro dan kecil kayu, barang dari kayu, barang anyaman dari bambu, rotan dan sejenisnya (reng kayu, papan, anyaman tas dan tikar, kusen, dll)'
			],
            [
                'dataKey' => 'R1201H',
                'ques_label' => 'Industri mikro dan kecil makanan (pengolahan dan pengawetan daging, ikan, buah,sayuran, minyak dan lemak, susu, dll)'
			],
            [
                'dataKey' => 'R1201I',
                'ques_label' => 'Industri mikro dan kecil minuman (minuman kemasan, air mineral, air isi ulang, sopi dll)'
			],
            [
                'dataKey' => 'R1201J',
                'ques_label' => 'Industri mikro dan kecil pengolahan tembakau (industri rokok, pengeringan dan perajangan tembakau)'
			],
            [
                'dataKey' => 'R1201K',
                'ques_label' => 'Industri mikro dan kecil kertas dan barang dari kertas (kantong kertas, post card, kardus, sak semen)'
			],
            [
                'dataKey' => 'R1201L',
                'ques_label' => 'Industri mikro dan kecil percetakan dan reproduksi media rekaman (buku, brosur, kartu nama, kalender, spanduk, dll)'
			],
            [
                'dataKey' => 'R1201M',
                'ques_label' => 'Industri mikro dan kecil alat angkutan lainnya (perahu, klotok, rakit, kursi roda, dll)'
			],
            [
                'dataKey' => 'R1201N',
                'ques_label' => 'Industri mikro dan kecil kerajinan dan lainnya (kerajinan tangan, mainan anak-anak, batu akik, perhiasan emas/imitasi,)'
			],
            [
                'dataKey' => 'R1201O',
                'ques_label' => 'Reparasi dan pemasangan mesin dan peralatan (las keliling, reparasi dinamo, reparasi mesin penggiling padi, dll)'
			],
            [
                'dataKey' => 'R1201P',
                'ques_label' => 'Industri mikro dan kecil lainnya'
			],
            [
                'dataKey' => 'R1202A',
                'ques_label' => 'Jumlah Sentra Industri:'
			],
            [
                'dataKey' => 'R1203A',
                'ques_label' => 'Keberadaan produk barang unggulan/utama di desa/kelurahan'
			],
            [
                'dataKey' => 'R1205A1',
                'ques_label' => 'Bank Umum Pemerintah (BRI, BNI, Mandiri, BPD, BTN)'
			],
            [
                'dataKey' => 'R1205A2',
                'ques_label' => 'Bank Umum Swasta (BCA, Permata, Sinarmas, CIMB, dll)'
			],
            [
                'dataKey' => 'R1205A3',
                'ques_label' => 'Bank Perkreditan Rakyat (BPR)'
			],
            [
                'dataKey' => 'R1206A1',
                'ques_label' => 'Koperasi Unit Desa (KUD)'
			],
            [
                'dataKey' => 'R1206A2',
                'ques_label' => 'Koperasi Industri Kecil dan Kerajinan Rakyat (Kopinkra)/Usaha mikro'
			],
            [
                'dataKey' => 'R1206A3',
                'ques_label' => 'Koperasi Simpan Pinjam (KSP/Kospin)'
			],
            [
                'dataKey' => 'R1206A4',
                'ques_label' => 'Koperasi lainnya'
			],
            [
                'dataKey' => 'R1208AK2',
                'ques_label' => 'Jumlah Baitul Maal Wa Tanwil (BMT)'
			],
            [
                'dataKey' => 'R1208AK3',
                'ques_label' => 'Jarak ke BMT'
			],
            [
                'dataKey' => 'R1208AK4',
                'ques_label' => 'Kemudahan untuk mencapai ke BMT'
			],
            [
                'dataKey' => 'R1208BK2',
                'ques_label' => 'Jumlah Anjungan Tunai Mandiri (ATM)'
			],
            [
                'dataKey' => 'R1208BK3',
                'ques_label' => 'Jarak ke ATM'
			],
            [
                'dataKey' => 'R1208BK4',
                'ques_label' => 'Kemudahan untuk mencapai ke ATM'
			],
            [
                'dataKey' => 'R1208CK2',
                'ques_label' => 'Jumlah agen bank'
			],
            [
                'dataKey' => 'R1208CK3',
                'ques_label' => 'Jarak ke agen bank'
			],
            [
                'dataKey' => 'R1208CK4',
                'ques_label' => 'Kemudahan untuk mencapai ke agen bank'
			],
            [
                'dataKey' => 'R1208DK2',
                'ques_label' => 'Jumlah Perusahaan Pembiayaan'
			],
            [
                'dataKey' => 'R1208DK3',
                'ques_label' => 'Jarak ke Perusahaan Pembiayaan'
			],
            [
                'dataKey' => 'R1208DK4',
                'ques_label' => 'Kemudahan untuk mencapai ke Perusahaan Pembiayaan'
			],
            [
                'dataKey' => 'R1208EK2',
                'ques_label' => 'Jumlah Pedagang Valuta Asing'
			],
            [
                'dataKey' => 'R1208EK3',
                'ques_label' => 'Jarak ke Pedagang Valuta Asing'
			],
            [
                'dataKey' => 'R1208EK4',
                'ques_label' => 'Kemudahan untuk mencapai ke Pedagang Valuta Asing'
			],
            [
                'dataKey' => 'R1208FK2',
                'ques_label' => 'Jumlah Pegadaian'
			],
            [
                'dataKey' => 'R1208FK3',
                'ques_label' => 'Jarak ke Pegadaian'
			],
            [
                'dataKey' => 'R1208FK4',
                'ques_label' => 'Kemudahan untuk mencapai ke pegadaian'
			],
            [
                'dataKey' => 'R1208GK2',
                'ques_label' => 'Jumlah Agen Tiket/Travel/Biro perjalanan'
			],
            [
                'dataKey' => 'R1208GK3',
                'ques_label' => 'Jarak ke Agen Tiket/Travel/Biro perjalanan'
			],
            [
                'dataKey' => 'R1208GK4',
                'ques_label' => 'Kemudahan untuk mencapai ke Agen Tiket/Travel/Biro perjalanan'
			],
            [
                'dataKey' => 'R1208HK2',
                'ques_label' => 'Jumlah Bengkel mobil/motor'
			],
            [
                'dataKey' => 'R1208HK3',
                'ques_label' => 'Jarak ke bengkel mobil/motor'
			],
            [
                'dataKey' => 'R1208HK4',
                'ques_label' => 'Kemudahan untuk mencapai ke bengkel mobil/motor'
			],
            [
                'dataKey' => 'R1208IK2',
                'ques_label' => 'Jumlah Salon kecantikan'
			],
            [
                'dataKey' => 'R1208IK3',
                'ques_label' => 'Jarak ke salon kecantikan'
			],
            [
                'dataKey' => 'R1208IK4',
                'ques_label' => 'Kemudahan untuk mencapai ke salon kecantikan'
			],
            [
                'dataKey' => 'R1209AK2',
                'ques_label' => 'Jumlah Kelompok pertokoan (minimal 10 toko dan mengelompok dalam satu lokasi)'
			],
            [
                'dataKey' => 'R1209AK3',
                'ques_label' => 'Jarak Kelompok pertokoan (minimal 10 toko dan mengelompok dalam satu lokasi)'
			],
            [
                'dataKey' => 'R1209AK4',
                'ques_label' => 'Kemudahan untuk mencapai Kelompok pertokoan (minimal 10 toko dan mengelompok dalam satu lokasi)'
			],
            [
                'dataKey' => 'R1209BK2',
                'ques_label' => 'Jumlah Pasar dengan bangunan permanen (memiliki atap, lantai, dan dinding)'
			],
            [
                'dataKey' => 'R1209BK3',
                'ques_label' => 'Jarak Pasar dengan bangunan permanen (memiliki atap, lantai, dan dinding)'
			],
            [
                'dataKey' => 'R1209BK4',
                'ques_label' => 'Kemudahan untuk mencapai Pasar dengan bangunan permanen (memiliki atap, lantai, dan dinding)'
			],
            [
                'dataKey' => 'R1209CK2',
                'ques_label' => 'Jumlah Pasar dengan bangunan semi permanen (memiliki atap dan lantai, tanpa dinding)'
			],
            [
                'dataKey' => 'R1209CK3',
                'ques_label' => 'Jarak Pasar dengan bangunan semi permanen (memiliki atap dan lantai, tanpa dinding)'
			],
            [
                'dataKey' => 'R1209CK4',
                'ques_label' => 'Kemudahan untuk mencapai Pasar dengan bangunan semi permanen (memiliki atap dan lantai, tanpa dinding)'
			],
            [
                'dataKey' => 'R1209DK2',
                'ques_label' => 'Jumlah Pasar tanpa bangunan (misalnya: pasar subuh, pasar terapung, dll.)'
			],
            [
                'dataKey' => 'R1209DK3',
                'ques_label' => 'Jarak Pasar tanpa bangunan (misalnya: pasar subuh, pasar terapung, dll.)'
			],
            [
                'dataKey' => 'R1209DK4',
                'ques_label' => 'Kemudahan untuk mencapai Pasar tanpa bangunan (misalnya: pasar subuh, pasar terapung, dll.)'
			],
            [
                'dataKey' => 'R1209EK2',
                'ques_label' => 'Jumlah Jumlah minimarket/swalayan/supermarket (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang secara eceran dengan label harga, sistem pelayanan mandiri)'
			],
            [
                'dataKey' => 'R1209EK3',
                'ques_label' => 'Jarak Jumlah minimarket/swalayan/supermarket (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang secara eceran dengan label harga, sistem pelayanan mandiri)'
			],
            [
                'dataKey' => 'R1209EK4',
                'ques_label' => 'Kemudahan untuk mencapai Jumlah minimarket/swalayan/supermarket (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang secara eceran dengan label harga, sistem pelayanan mandiri)'
			],
            [
                'dataKey' => 'R1209FK2',
                'ques_label' => 'Jumlah Restoran/rumah makan (usaha pangan siap saji di bangunan tetap, pembeli biasanya dikenai pajak)'
			],
            [
                'dataKey' => 'R1209FK3',
                'ques_label' => 'Jarak Restoran/rumah makan (usaha pangan siap saji di bangunan tetap, pembeli biasanya dikenai pajak)'
			],
            [
                'dataKey' => 'R1209FK4',
                'ques_label' => 'Kemudahan untuk mencapai Restoran/rumah makan (usaha pangan siap saji di bangunan tetap, pembeli biasanya dikenai pajak)'
			],
            [
                'dataKey' => 'R1209GK2',
                'ques_label' => 'Jumlah Warung/kedai makanan minuman (usaha pangan siap saji di bangunan tetap, pembeli biasanya tidak dikenai pajak)'
			],
            [
                'dataKey' => 'R1209GK3',
                'ques_label' => 'Jarak Warung/kedai makanan minuman (usaha pangan siap saji di bangunan tetap, pembeli biasanya tidak dikenai pajak)'
			],
            [
                'dataKey' => 'R1209GK4',
                'ques_label' => 'Kemudahan untuk mencapai Warung/kedai makanan minuman (usaha pangan siap saji di bangunan tetap, pembeli biasanya tidak dikenai pajak)'
			],
            [
                'dataKey' => 'R1209HK2',
                'ques_label' => 'Jumlah Hotel (menyediakan jasa akomodasi dan ada restoran, penginapan dengan izin usaha sebagai hotel)'
			],
            [
                'dataKey' => 'R1209HK3',
                'ques_label' => 'Jarak Hotel (menyediakan jasa akomodasi dan ada restoran, penginapan dengan izin usaha sebagai hotel)'
			],
            [
                'dataKey' => 'R1209HK4',
                'ques_label' => 'Kemudahan untuk mencapai Hotel (menyediakan jasa akomodasi dan ada restoran, penginapan dengan izin usaha sebagai hotel)'
			],
            [
                'dataKey' => 'R1209IK2',
                'ques_label' => 'Jumlah Penginapan: hostel/motel/losmen/wisma (menyediakan akomodasi, penginapan dengan izin usaha bukan sebagai hotel)'
			],
            [
                'dataKey' => 'R1209IK3',
                'ques_label' => 'Jarak Penginapan: hostel/motel/losmen/wisma (menyediakan akomodasi, penginapan dengan izin usaha bukan sebagai hotel)'
			],
            [
                'dataKey' => 'R1209IK4',
                'ques_label' => 'Kemudahan untuk mencapai Penginapan: hostel/motel/losmen/wisma (menyediakan akomodasi, penginapan dengan izin usaha bukan sebagai hotel)'
			],
            [
                'dataKey' => 'R1209JK2',
                'ques_label' => 'Jumlah Toko/warung kelontong (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang keperluan sehari–hari secara eceran, tanpa ada sistem pelayanan mandiri)'
			],
            [
                'dataKey' => 'R1209JK3',
                'ques_label' => 'Jarak Toko/warung kelontong (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang keperluan sehari–hari secara eceran, tanpa ada sistem pelayanan mandiri)'
			],
            [
                'dataKey' => 'R1209JK4',
                'ques_label' => 'Kemudahan untuk mencapai Toko/warung kelontong (tempat usaha di bangunan tetap untuk menjual berbagai jenis barang keperluan sehari–hari secara eceran, tanpa ada sistem pelayanan mandiri)'
			],
            [
                'dataKey' => 'R1303A01K3',
                'ques_label' => 'Kejadian tindak pencurian yang terjadi di desa/kelurahan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R1303A01K4',
                'ques_label' => 'Kecenderungan tindak pencurian dibanding setahun lalu'
			],
            [
                'dataKey' => 'R1303A02K3',
                'ques_label' => 'Kejadian tindak pencurian dengan kekerasan yang terjadi di desa/kelurahan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R1303A02K4',
                'ques_label' => 'Kecenderungan  tindak pencurian dengan kekerasan dibanding setahun lalu'
			],
            [
                'dataKey' => 'R1303A03K3',
                'ques_label' => 'Kejadian tindak penipuan/penggelapan yang terjadi di desa/kelurahan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R1303A03K4',
                'ques_label' => 'Kecenderungan tindak penipuan/penggelapan dibanding setahun lalu'
			],
            [
                'dataKey' => 'R1303A04K3',
                'ques_label' => 'Kejadian tindak penganiayaan yang terjadi di desa/kelurahan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R1303A04K4',
                'ques_label' => 'Kecenderungan tindak penganiayaan dibanding setahun lalu'
			],
            [
                'dataKey' => 'R1303A05K3',
                'ques_label' => 'Kejadian tindak pembakaran yang terjadi di desa/kelurahan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R1303A05K4',
                'ques_label' => 'Kecenderungan tindak pembakaran dibanding setahun lalu'
			],
            [
                'dataKey' => 'R1303A06K3',
                'ques_label' => 'Kejadian tindak perkosaan/kejahatan terhadap kesusilaan yang terjadi di desa/kelurahan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R1303A06K4',
                'ques_label' => 'Kecenderungan tindak perkosaan/kejahatan terhadap kesusilaan dibanding setahun lalu'
			],
            [
                'dataKey' => 'R1303A07K3',
                'ques_label' => 'Kejadian tindak penyalahgunaan/peredaran narkoba yang terjadi di desa/kelurahan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R1303A07K4',
                'ques_label' => 'Kecenderungan tindak penyalahgunaan/peredaran narkoba dibanding setahun lalu'
			],
            [
                'dataKey' => 'R1303A08K3',
                'ques_label' => 'Kejadian tindak perjudian yang terjadi di desa/kelurahan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R1303A08K4',
                'ques_label' => 'Kecenderungan tindak perjudian dibanding setahun lalu'
			],
            [
                'dataKey' => 'R1303A09K3',
                'ques_label' => 'Kejadian tindak pembunuhan yang terjadi di desa/kelurahan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R1303A09K4',
                'ques_label' => 'Kecenderungan tindak pembunuhan dibanding setahun lalu'
			],
            [
                'dataKey' => 'R1303A10K3',
                'ques_label' => 'Kejadian tindak perdagangan orang (trafficking) yang terjadi di desa/kelurahan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R1303A10K4',
                'ques_label' => 'Kecenderungan tindak perdagangan orang (trafficking) dibanding setahun lalu'
			],
            [
                'dataKey' => 'R1303A11K3',
                'ques_label' => 'Kejadian tindak Korupsi yang terjadi di desa/kelurahan selama setahun terakhir :'
			],
            [
                'dataKey' => 'R1303A11K4',
                'ques_label' => 'Kecenderungan tindak korupsi dibanding setahun lalu'
			],
            [
                'dataKey' => 'R1305',
                'ques_label' => 'Jumlah anggota linmas/hansip di desa/kelurahan'
			],
            [
                'dataKey' => 'R1306A',
                'ques_label' => 'Keberadaan pos polisi (termasuk kantor polisi) di desa/kelurahan'
			],
            [
                'dataKey' => 'R1306A2',
                'ques_label' => 'Alamat'
			],
            [
                'dataKey' => 'R1307AK2',
                'ques_label' => 'Jumlah korban bunuh diri laki-laki (termasuk percobaan bunuh diri) selama setahun terakhir di desa/kelurahan'
			],
            [
                'dataKey' => 'R1307AK3',
                'ques_label' => 'Jumlah korban bunuh diri perempuan (termasuk percobaan bunuh diri) selama setahun terakhir di desa/kelurahan'
			],
            [
                'dataKey' => 'R1307BK2',
                'ques_label' => 'Jumlah korban pembunuhan laki-laki yang terjadi selama setahun terakhir di desa/kelurahan'
			],
            [
                'dataKey' => 'R1307BK3',
                'ques_label' => 'Jumlah korban pembunuhan perempuan selama setahun terakhir di desa/kelurahan'
			],
            [
                'dataKey' => 'R1403A',
                'ques_label' => 'Jumlah unit usaha BUMDes'
			],
            [
                'dataKey' => 'R1403B',
                'ques_label' => 'Tanah kas desa/ulayat'
			],
            [
                'dataKey' => 'R1403C',
                'ques_label' => 'Tambatan Perahu'
			],
            [
                'dataKey' => 'R1403D',
                'ques_label' => 'Pasar desa (pasar hewan, pelelangan ikan, pelelangan hasil pertanian)'
			],
            [
                'dataKey' => 'R1403E',
                'ques_label' => 'Bangunan milik desa (balai desa, balai rakyat,lapangan olah raga dll.)'
			],
            [
                'dataKey' => 'R1403F',
                'ques_label' => 'Hutan milik desa'
			],
            [
                'dataKey' => 'R1403G',
                'ques_label' => 'Mata air milik desa'
			],
            [
                'dataKey' => 'R1403H',
                'ques_label' => 'Tempat wisata/pemandian umum'
			],
            [
                'dataKey' => 'R1403I',
                'ques_label' => 'Aset lainnya milik desa (kekayaan asli desa, hibah/sumbangan/sejenisnya dll)'
			],
            [
                'dataKey' => 'R1404A1',
                'ques_label' => 'Rencana Pembangunan Jangka Menengah Desa (RPJM Desa) yang berlaku'
			],
            [
                'dataKey' => 'R1404B',
                'ques_label' => 'Rencana Kerja Pemerintah Desa (RKP Desa) tahun 2024'
			],
            [
                'dataKey' => 'R1404C',
                'ques_label' => 'Jumlah peraturan desa tahun 2023'
			],
            [
                'dataKey' => 'R1404D',
                'ques_label' => 'Jumlah peraturan kepala desa tahun 2023'
			],
            [
                'dataKey' => 'R1405A',
                'ques_label' => 'Keberadaan kerjasama antar desa tahun 2023'
			],
            [
                'dataKey' => 'R1405B',
                'ques_label' => 'Keberadaan kerjasama desa dengan pihak ketiga tahun 2023'
			],
            [
                'dataKey' => 'R1406',
                'ques_label' => 'Keberadaan pendamping lokal desa'
			],
            [
                'dataKey' => 'R14061',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R1407A',
                'ques_label' => 'Keberadaan kader pembangunan manusia (KPM)'
			],
            [
                'dataKey' => 'R1407A1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R1407B',
                'ques_label' => 'Jika ada, apakah ada KPM yang mendapatkan pembinaan dari pemerintah kabupaten/kota?'
			],
            [
                'dataKey' => 'R1501AK2',
                'ques_label' => 'Penyaluran dana desa dalam bentuk BLT (Tiga bulan pertama)'
			],
            [
                'dataKey' => 'R1501AK3',
                'ques_label' => 'Jumlah keluarga yang menerima BLT (Tiga bulan pertama)'
			],
            [
                'dataKey' => 'R1501AK4',
                'ques_label' => 'Nilai BLT (Tiga bulan pertama) setiap keluarga'
			],
            [
                'dataKey' => 'R1501AK5',
                'ques_label' => 'Persentase jumlah dana BLT (Tiga bulan pertama) terhadap total dana desa yang diterima'
			],
            [
                'dataKey' => 'R1501BK2',
                'ques_label' => 'Penyaluran dana desa dalam bentuk BLT (Tiga bulan kedua)'
			],
            [
                'dataKey' => 'R1501BK3',
                'ques_label' => 'Jumlah keluarga yang menerima BLT (Tiga bulan kedua)'
			],
            [
                'dataKey' => 'R1501BK4',
                'ques_label' => 'Nilai BLT (Tiga bulan kedua) setiap keluarga'
			],
            [
                'dataKey' => 'R1501BK5',
                'ques_label' => 'Persentase jumlah dana BLT (Tiga bulan kedua) terhadap total dana desa yang diterima'
			],
            [
                'dataKey' => 'R1501CK2',
                'ques_label' => 'Penyaluran dana desa dalam bentuk padat karya tunai desa'
			],
            [
                'dataKey' => 'R1501CK3',
                'ques_label' => 'Jumlah keluarga yang menerima padat karya tunai desa'
			],
            [
                'dataKey' => 'R1501CK4',
                'ques_label' => 'Nilai BLT (Tiga bulan kedua) setiap keluarga'
			],
            [
                'dataKey' => 'R1501CK5',
                'ques_label' => 'Persentase jumlah dana padat karya tunai desa terhadap total dana desa yang diterima'
			],
            [
                'dataKey' => 'R1502_1',
                'ques_label' => 'Kegiatan posyandu'
			],
            [
                'dataKey' => 'R1502_1A',
                'ques_label' => 'a. Pemberian makanan tambahan PMT  penyuluhan'
			],
            [
                'dataKey' => 'R1502_1B',
                'ques_label' => 'b. Pelatihan kader'
			],
            [
                'dataKey' => 'R1502_1C',
                'ques_label' => 'c. Insentif kader'
			],
            [
                'dataKey' => 'R1502_1D',
                'ques_label' => 'd. Lain-lain'
			],
            [
                'dataKey' => 'R1502_2',
                'ques_label' => 'Kelas ibu hamil'
			],
            [
                'dataKey' => 'R1502_3',
                'ques_label' => 'Kelas ibu balita'
			],
            [
                'dataKey' => 'R1502_4',
                'ques_label' => 'PMT ibu hamil Kurang Energi Kronis (KEK)/Resiko Tinggi (RESTI)'
			],
            [
                'dataKey' => 'R1502_5',
                'ques_label' => 'Akses air minum aman'
			],
            [
                'dataKey' => 'R1502_6',
                'ques_label' => 'Akses jamban sehat'
			],
            [
                'dataKey' => 'R1502_7',
                'ques_label' => 'Jaminan kesehatan untuk ibu hamil dari keluarga miskin'
			],
            [
                'dataKey' => 'R1502_8',
                'ques_label' => 'Jaminan kesehatan untuk anak baduta dari keluarga miskin'
			],
            [
                'dataKey' => 'R1502_9',
                'ques_label' => 'Akta kelahiran untuk bayi dari keluarga miskin'
			],
            [
                'dataKey' => 'R1502_10',
                'ques_label' => 'Kelas pengasuhan'
			],
            [
                'dataKey' => 'R1502_11',
                'ques_label' => 'Pemanfaatan pekarangan keluarga dan tanah desa'
			],
            [
                'dataKey' => 'R1503A',
                'ques_label' => 'Sarana prasarana energi'
			],
            [
                'dataKey' => 'R1503B',
                'ques_label' => 'Sarana prasarana sanitasi dan air bersih'
			],
            [
                'dataKey' => 'R1503C',
                'ques_label' => 'Sarana prasarana penanggulangan bencana dan pelestarian alam'
			],
            [
                'dataKey' => 'R1504A',
                'ques_label' => 'Pengembangan energi terbarukan'
			],
            [
                'dataKey' => 'R1504B',
                'ques_label' => 'Pengelolaan lingkungan perumahan desa/kelurahan'
			],
            [
                'dataKey' => 'R1504C',
                'ques_label' => 'Peningkatan kesadaran dalam pelestarian alam dan penanggulangan bencana'
			],
            [
                'dataKey' => 'R1601AK2',
                'ques_label' => 'Keberadaan : Kepala Desa/Lurah'
			],
            [
                'dataKey' => 'R1601AK2_1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R1601AK3',
                'ques_label' => 'Umur Kepala Desa/Lurah'
			],
            [
                'dataKey' => 'R1601AK4',
                'ques_label' => 'Jenis kelamin Kepala Desa/Lurah'
			],
            [
                'dataKey' => 'R1601AK5',
                'ques_label' => 'Pendidikan tertinggi yang ditamatkan Kepala Desa/Lurah'
			],
            [
                'dataKey' => 'R1601AK6',
                'ques_label' => 'Tahun Kepala Desa/Lurah mulai menjabat'
			],
            [
                'dataKey' => 'R1601BK2',
                'ques_label' => 'Keberadaan : Sekretaris Desa/Sekretaris Kelurahan'
			],
            [
                'dataKey' => 'R1601BK2_1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R1601BK3',
                'ques_label' => 'Umur Sekretaris Desa/Sekretaris Kelurahan'
			],
            [
                'dataKey' => 'R1601BK4',
                'ques_label' => 'Jenis kelamin Sekretaris Desa/Sekretaris Kelurahan'
			],
            [
                'dataKey' => 'R1601BK5',
                'ques_label' => 'Pendidikan tertinggi yang ditamatkan Sekretaris Desa/Sekretaris Kelurahan'
			],
            [
                'dataKey' => 'R1601AK6',
                'ques_label' => 'Tahun Sekretaris Desa/Sekretaris Kelurahan mulai menjabat'
			],
            [
                'dataKey' => 'R1602A',
                'ques_label' => 'Sekretariat Desa/Kelurahan  (kaur keuangan, dll)'
			],
            [
                'dataKey' => 'R1602A1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R1602B',
                'ques_label' => 'Pelaksana Teknis (kasi kesejahteraan, dll)'
			],
            [
                'dataKey' => 'R1602B1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R1602C',
                'ques_label' => 'Pelaksana Kewilayahan (Kadus, Ketua RT, dll.)'
			],
            [
                'dataKey' => 'R1602C1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R1602D',
                'ques_label' => 'Pegawai desa lainnya (hansip, dll)'
			],
            [
                'dataKey' => 'R1602D1',
                'ques_label' => 'Sebutkan namanya'
			],
            [
                'dataKey' => 'R1603A',
                'ques_label' => 'Badan Permusyawaratan Desa/Lembaga Musyawarah Kelurahan'
			],
            [
                'dataKey' => 'R1604A',
                'ques_label' => 'Desa sudah menjalankan pemilihan kepala desa secara serentak'
			],
            [
                'dataKey' => 'R1604B',
                'ques_label' => 'Tahun terakhir pelaksanaan pemilihan kepala desa'
			],
            [
                'dataKey' => 'R1604C',
                'ques_label' => 'Jumlah calon pemilihan kepala desa'
			],
            [
                'dataKey' => 'R1604D',
                'ques_label' => 'Persentase perolehan suara pemenang pemilihan kepala desa'
			]
        ];
        foreach($ques_data as $data){
			// insert semua data ke tabel
			$this->db->table('ques')->insert($data);
		}
    }
}
