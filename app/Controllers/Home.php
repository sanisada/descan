<?php

namespace App\Controllers;
use App\Models\data_model;
use App\Models\data2_model;
use App\Models\desa_model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{

    public function index(): string
    {
        $session = session();

        $wilayah = $this->request->getGet('wilayah') ?? '1810030011';
        // $this->desaModel = new desa_model();
        $currentYear = date("Y");
        $tahun = $this->request->getGet('tahun') ?? $currentYear;
        return $this->show_data($wilayah);

    }

    public function show_data($wilayah) {
        // Menggunakan parameter $wilayah untuk memfilter data
        $wilayah = $this->request->getGet('wilayah') ?? '1810030011';
        $currentYear = date("Y");
        $tahun = $this->request->getGet('tahun') ?? $currentYear;
        $dataModel = new data_model();
        $data2Model = new data2_model();
        $desaModel = new desa_model();
        $sectorMapping = [
            1 => 'Tanaman Pangan',
            2 => 'Tanaman Hortikultura',
            3 => 'Tanaman Perkebunan',
            4 => 'Peternakan',
            5 => 'Perikanan',
            6 => 'Kehutanan',
            7 => 'Jasa Pertanian'
        ];

        $tpsMapping = [
            1 => 'Ada, digunakan',
            2 => 'Ada, tidak digunakan',
            3 => 'Tidak ada'
        ];

        $polisiMapping = [
            1 => 'Ada',
            2 => 'Tidak ada'
        ];

        $olahragaMapping = [
            4 => 'Tidak ada',
            3 => 'Ada, rusak parah',
            2 => 'Ada, rusak sedang',
            1 => 'Ada, baik'
        ];

        $kemudahanMapping = [
            1 => 'Sangat Mudah',
            2 => 'Mudah',
            3 => 'Sulit',
            4 => 'Sangat Sulit'
        ];
        
        if (!empty($wilayah) && !empty($tahun)) {
            // Jika filter wilayah dipilih, ambil populasi berdasarkan wilayah tersebut
            $total  = $dataModel->getsubsektorbypekon($wilayah, $tahun);
            $tps    = $dataModel->gettpsbypekon($wilayah, $tahun);

            $getlakilakibypekon = $dataModel->getlakilakibypekon($wilayah, $tahun);
            $getprbypekon = $dataModel->getprbypekon($wilayah, $tahun);
            $getpendudukbypekon = $dataModel->getpendudukbypekon($wilayah, $tahun);

            $getsubsektorbypekon = isset($sectorMapping[$total]) ? $sectorMapping[$total] : '-'; 
            $getkomoditasbypekon = $dataModel->getkomoditasbypekon($wilayah, $tahun);
            $getsungaibypekon = $dataModel->getsungaibypekon($wilayah, $tahun);
            $gettpsbypekon = isset($tpsMapping[$tps]) ? $tpsMapping[$tps] : '-'; 

            $getbencanabypekon   = $dataModel->getbencanabypekon($wilayah, $tahun);
            $getbencanasekarangbypekon   = $dataModel->getbencanasekarangbypekon($wilayah, $tahun);

            $getsarkesbypekon   = $data2Model->getsarkesbypekon($wilayah, $tahun);
            $getnamasarkesbypekon   = $data2Model->getnamasarkesbypekon($wilayah, $tahun);
            $getsarpendbypekon   = $data2Model->getsarpendbypekon($wilayah, $tahun);
            $getsarpendswastabypekon   = $data2Model->getsarpendswastabypekon($wilayah, $tahun);
            $getjaraksarpendbypekon   = $data2Model->getjaraksarpendbypekon($wilayah, $tahun);
            $kemudahan = $data2Model->getkemudahansarpendbypekon($wilayah, $tahun);
            $getkemudahansarpendbypekon = array_map(function($value) use ($kemudahanMapping) {return isset($kemudahanMapping[$value]) ? $kemudahanMapping[$value] : '-';
            }, $kemudahan);

            $getmasjidbypekon    = $data2Model->getmasjidbypekon($wilayah, $tahun);
            $getsuraubypekon    = $data2Model->getsuraubypekon($wilayah, $tahun);
            $getkristenbypekon    = $data2Model->getkristenbypekon($wilayah, $tahun);
            $getkatolikbypekon    = $data2Model->getkatolikbypekon($wilayah, $tahun);
            $getkapelbypekon    = $data2Model->getkapelbypekon($wilayah, $tahun);
            $getpurabypekon    = $data2Model->getpurabypekon($wilayah, $tahun);
            $getwiharabypekon    = $data2Model->getwiharabypekon($wilayah, $tahun);
            $getkelentengbypekon    = $data2Model->getkelentengbypekon($wilayah, $tahun);
            $getbasarahbypekon    = $data2Model->getbasarahbypekon($wilayah, $tahun);
            $getlainnyabypekon    = $data2Model->getlainnyabypekon($wilayah, $tahun);

            $getbankbypekon    = $data2Model->getbankbypekon($wilayah, $tahun);
            $getkoperasibypekon    = $data2Model->getkoperasibypekon($wilayah, $tahun);
            $getsarpekbypekon    = $data2Model->getsarpekbypekon($wilayah, $tahun);
            $getsarprasebypekon    = $data2Model->getsarprasebypekon($wilayah, $tahun);

            $olahraga = $data2Model->getolahragabypekon($wilayah, $tahun);
            $getolahragabypekon = array_map(function($value) use ($olahragaMapping) {return isset($olahragaMapping[$value]) ? $olahragaMapping[$value] : '-';
            }, $olahraga);

            $kelolahraga = $data2Model->getkomunitasolahragabypekon($wilayah, $tahun);
            $getkomunitasolahragabypekon = array_map(function($value) use ($polisiMapping) {return isset($polisiMapping[$value]) ? $polisiMapping[$value] : '-';
            }, $kelolahraga);

            $gethansipbypekon    = $data2Model->gethansipbypekon($wilayah, $tahun);
            $polisi    = $data2Model->getpolisibypekon($wilayah, $tahun);
            $getpolisibypekon = isset($polisiMapping[$polisi]) ? $polisiMapping[$polisi] : '-';

            $getaparaturbypekon    = $data2Model->getaparaturbypekon($wilayah, $tahun);
            $getthpilkadesbypekon    = $data2Model->getthpilkadesbypekon($wilayah, $tahun);
            $getcalonpilkadesbypekon    = $data2Model->getcalonpilkadesbypekon($wilayah, $tahun);
            $getsuarapilkadesbypekon    = $data2Model->getsuarapilkadesbypekon($wilayah, $tahun);
            
        }
        
        $data = array(
            'wilayah'               => $wilayah,
            'tahun'                 => $tahun,
            'getlakilakibypekon'      => $getlakilakibypekon,
            'getprbypekon'            => $getprbypekon,
            'getpendudukbypekon'      => $getpendudukbypekon,
            'getsubsektorbypekon'   => $getsubsektorbypekon,
            'getkomoditasbypekon'   => $getkomoditasbypekon,
            'gettpsbypekon'         => $gettpsbypekon,
            'getsungaibypekon'      => $getsungaibypekon,
            'getbencanabypekon'     => $getbencanabypekon,
            'getbencanasekarangbypekon'     => $getbencanasekarangbypekon,
            'getsarkesbypekon'       => $getsarkesbypekon,
            'getnamasarkesbypekon'       => $getnamasarkesbypekon,
            'getsarpendbypekon'       => $getsarpendbypekon,
            'getsarpendswastabypekon'       => $getsarpendswastabypekon,
            'getjaraksarpendbypekon'       => $getjaraksarpendbypekon,
            'getkemudahansarpendbypekon'       => $getkemudahansarpendbypekon,
            'getmasjidbypekon'      => $getmasjidbypekon,
            'getsuraubypekon'       => $getsuraubypekon,
            'getkristenbypekon'       => $getkristenbypekon,
            'getkatolikbypekon'       => $getkatolikbypekon,
            'getkapelbypekon'       => $getkapelbypekon,
            'getpurabypekon'       => $getpurabypekon,
            'getwiharabypekon'        => $getwiharabypekon,
            'getkelentengbypekon'        => $getkelentengbypekon,
            'getbasarahbypekon'       => $getbasarahbypekon,
            'getlainnyabypekon'       => $getlainnyabypekon,
            'getbankbypekon'       => $getbankbypekon,
            'getkoperasibypekon'       => $getkoperasibypekon,
            'getsarpekbypekon'       => $getsarpekbypekon,
            'getsarprasebypekon'       => $getsarprasebypekon,
            'getolahragabypekon'        => $getolahragabypekon,
            'getkomunitasolahragabypekon' => $getkomunitasolahragabypekon,
            'gethansipbypekon'       => $gethansipbypekon,
            'getpolisibypekon'       => $getpolisibypekon,
            'getthpilkadesbypekon'       => $getthpilkadesbypekon,
            'getcalonpilkadesbypekon'       => $getcalonpilkadesbypekon,
            'getsuarapilkadesbypekon'       => $getsuarapilkadesbypekon,
            'getaparaturbypekon'            => $getaparaturbypekon,
            'desa' => $desaModel->findAll(),
        );

        // Load view dengan data yang sudah disiapkan
        return view('home', $data);
    }

    public function filter() {
        // Tangkap nilai wilayah dari POST request
        $wilayah = $this->request->getPost('wilayah');
        $tahun = $this->request->getPost('tahun');
    
        // Panggil function show_data dengan parameter $wilayah
        $this->show_data($wilayah, $tahun);
    }

    public function downloadExcel()
    {
        // Initialize wilayah and tahun
        $wilayah = $this->request->getGet('wilayah');
        $tahun = $this->request->getGet('tahun');

        // Initialize models
        $dataModel = new data_model();
        $data2Model = new data2_model();

        // Mappings for various fields
        $sectorMapping = [
            1 => 'Tanaman Pangan',
            2 => 'Tanaman Hortikultura',
            3 => 'Tanaman Perkebunan',
            4 => 'Peternakan',
            5 => 'Perikanan',
            6 => 'Kehutanan',
            7 => 'Jasa Pertanian'
        ];

        $tpsMapping = [
            1 => 'Ada, digunakan',
            2 => 'Ada, tidak digunakan',
            3 => 'Tidak ada'
        ];

        $polisiMapping = [
            1 => 'Ada',
            2 => 'Tidak ada'
        ];

        $waterFeaturesMap = [
            2 => 'Ada sungai',
            3 => 'Ada Saluran irigasi',
            4 => 'Ada Danau/waduk/situ/bendungan',
            5 => 'Ada embung'
        ];
        

        if (!empty($wilayah) && !empty($tahun)) {
            $total = $dataModel->getsubsektorbypekon($wilayah, $tahun);
            $mappedSubsektor = $sectorMapping[$total] ?? '-';
            
            $tps = $dataModel->gettpsbypekon($wilayah, $tahun);
            $mappedTps = $tpsMapping[$tps] ?? '-';

            $getlakilakibypekon = $dataModel->getlakilakibypekon($wilayah, $tahun);
            $getprbypekon = $dataModel->getprbypekon($wilayah, $tahun);
            $getpendudukbypekon = $dataModel->getpendudukbypekon($wilayah, $tahun);

            $getkomoditasbypekon = $dataModel->getkomoditasbypekon($wilayah, $tahun);
            $getsungaibypekon = $dataModel->getsungaibypekon($wilayah, $tahun);
            $mappedValues = [];
            foreach ($getsungaibypekon as $value) {
                // If the value exists in the map, replace it
                if (isset($waterFeaturesMap[$value])) {
                    $mappedValues[] = $waterFeaturesMap[$value];
                }
            }

            $stringsungai = implode(', ', $mappedValues);

            $getmasjidbypekon    = $data2Model->getmasjidbypekon($wilayah, $tahun);
            $getsuraubypekon    = $data2Model->getsuraubypekon($wilayah, $tahun);
            $getkristenbypekon    = $data2Model->getkristenbypekon($wilayah, $tahun);
            $getkatolikbypekon    = $data2Model->getkatolikbypekon($wilayah, $tahun);
            $getkapelbypekon    = $data2Model->getkapelbypekon($wilayah, $tahun);
            $getpurabypekon    = $data2Model->getpurabypekon($wilayah, $tahun);
            $getwiharabypekon    = $data2Model->getwiharabypekon($wilayah, $tahun);
            $getkelentengbypekon    = $data2Model->getkelentengbypekon($wilayah, $tahun);
            $getbasarahbypekon    = $data2Model->getbasarahbypekon($wilayah, $tahun);
            $getlainnyabypekon    = $data2Model->getlainnyabypekon($wilayah, $tahun);

            $gethansipbypekon    = $data2Model->gethansipbypekon($wilayah, $tahun);
            $polisi = $data2Model->getpolisibypekon($wilayah, $tahun);
            $mappedPolisi = $polisiMapping[$polisi] ?? '-';

            $getaparaturbypekon    = $data2Model->getaparaturbypekon($wilayah, $tahun);
            $aparaturCounts = [
                'Sekretariat Desa/Kelurahan' => $getaparaturbypekon['count_a'],
                'Pelaksana Teknis' => $getaparaturbypekon['count_b'],
                'Pelaksana Kewilayahan' => $getaparaturbypekon['count_c'],
                'Pegawai Desa Lainnya' => $getaparaturbypekon['count_d']
            ];

            $getthpilkadesbypekon    = $data2Model->getthpilkadesbypekon($wilayah, $tahun);
            $getcalonpilkadesbypekon    = $data2Model->getcalonpilkadesbypekon($wilayah, $tahun);
            $getsuarapilkadesbypekon    = $data2Model->getsuarapilkadesbypekon($wilayah, $tahun);

            $data = [
                ['Variabel', 'Nilai'],  // Column headers
                ['Jumlah Penduduk Laki-laki', $getlakilakibypekon],
                ['Jumlah Penduduk Perempuan', $getprbypekon],
                ['Total Penduduk', $getpendudukbypekon],
                ['Jenis sub sektor utama', $mappedSubsektor],
                ['Komoditas utama', $getkomoditasbypekon],
                ['Keberadaan Tempat Penampungan Sementara (TPS)', $mappedTps],
                ['Keberadaan sungai, saluran irigasi, danau/waduk/situ/bendungan,dan embung', $stringsungai],
                ['Jumlah Masjid', $getmasjidbypekon],
                ['Jumlah Surau/Langgar/Musala', $getsuraubypekon],
                ['Jumlah Gereja Kristen', $getkristenbypekon],
                ['Jumlah Gereja Katolik', $getkatolikbypekon],
                ['Jumlah Kapel', $getkapelbypekon],
                ['Jumlah Pura', $getpurabypekon],
                ['Jumlah Wihara', $getwiharabypekon],
                ['Jumlah Kelenteng', $getkelentengbypekon],
                ['Jumlah Balai Basarah', $getbasarahbypekon],
                ['Jumlah Tempat Ibadah Lainnya', $getlainnyabypekon],
                ['Jumlah anggota linmas/hansip', $gethansipbypekon],
                ['Keberadaan pos polisi', $mappedPolisi],
                ['Jumlah Sekretariat Desa/Kelurahan (kaur keuangan, dll)', $aparaturCounts['Sekretariat Desa/Kelurahan']],
                ['Jumlah Pelaksana Teknis (kasi kesejahteraan, dll)', $aparaturCounts['Pelaksana Teknis']],
                ['Jumlah Pelaksana Kewilayahan (Kadus, Ketua RT, dll.)', $aparaturCounts['Pelaksana Kewilayahan']],
                ['Jumlah Pegawai desa lainnya (hansip, dll)', $aparaturCounts['Pegawai Desa Lainnya']],
                ['Tahun terakhir pelaksanaan pemilihan kepala desa', $getthpilkadesbypekon],
                ['Jumlah calon pemilihan kepala desa', $getcalonpilkadesbypekon],
                ['Persentase perolehan suara pemenang pemilihan kepala desa', $getsuarapilkadesbypekon . '%']
            ];

            // Load the spreadsheet library
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            // Write the data to the sheet
            $sheet->fromArray($data, null, 'A1');

            // Set header information for download
            $fileName = 'data_export_' . $wilayah . '_' . $tahun . '.xlsx';
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="' . $fileName . '"');
            header('Cache-Control: max-age=0');

            // Write the file to output
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
            exit;
        } else {
            return 'No data found for wilayah: ' . $wilayah . ' and tahun: ' . $tahun;
        }
    }

    public function downloadTableToExcel()
    {
        // Get the JSON data from the request body
        $data = json_decode($this->request->getBody(), true);

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set the table header
        $sheet->setCellValue('A1', 'Jenis Sarana Kesehatan');
        $sheet->setCellValue('B1', 'Jumlah');
        $sheet->setCellValue('C1', 'Nama Sarana Kesehatan');

        // Populate the spreadsheet with dynamic data
        $row = 2; // Start from the second row
        foreach ($data as $entry) {
            $sheet->setCellValue('A' . $row, $entry[0]);
            $sheet->setCellValue('B' . $row, $entry[1]);
            $sheet->setCellValue('C' . $row, $entry[2]);
            $row++;
        }

        // Set the header for the response
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="data_sarana_kesehatan.xlsx"');
        header('Cache-Control: max-age=0');

        // Write the file to the output
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }

    public function downloadPendTableToExcel()
    {
        // Get the JSON data from the request body
        $data = json_decode($this->request->getBody(), true);

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set the table header
        $sheet->setCellValue('A1', 'Jenis/Jenjang Pendidikan');
        $sheet->setCellValue('B1', 'Negeri');
        $sheet->setCellValue('C1', 'Swasta');
        $sheet->setCellValue('D1', 'Jarak (km)');
        $sheet->setCellValue('E1', 'Kemudahan untuk mencapai');

        // Populate the spreadsheet with dynamic data
        $row = 2; // Start from the second row
        foreach ($data as $entry) {
            $sheet->setCellValue('A' . $row, $entry[0]);
            $sheet->setCellValue('B' . $row, $entry[1]);
            $sheet->setCellValue('C' . $row, $entry[2]);
            $sheet->setCellValue('D' . $row, $entry[3]);
            $sheet->setCellValue('E' . $row, $entry[4]);
            $row++;
        }

        // Set the header for the response
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="data_fasilitas_pendidikan.xlsx"');
        header('Cache-Control: max-age=0');

        // Write the file to the output
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }

    public function downloadOlahragaTableToExcel()
    {
        // Get the JSON data from the request body
        $data = json_decode($this->request->getBody(), true);

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set the table header
        $sheet->setCellValue('A1', 'Jenis Olahraga');
        $sheet->setCellValue('B1', 'Fasilitas/Lapangan Olahraga');
        $sheet->setCellValue('C1', 'Kelompok Kegiatan');

        // Populate the spreadsheet with dynamic data
        $row = 2; // Start from the second row
        foreach ($data as $entry) {
            $sheet->setCellValue('A' . $row, $entry[0]);
            $sheet->setCellValue('B' . $row, $entry[1]);
            $sheet->setCellValue('C' . $row, $entry[2]);
            $row++;
        }

        // Set the header for the response
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="data_fasilitas_olahraga.xlsx"');
        header('Cache-Control: max-age=0');

        // Write the file to the output
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }
}
