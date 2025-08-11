<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

// use Maatwebsite\Excel\Concerns\WithColumnFormatting;


class PendaftarExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping, WithTitle, WithStyles, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = DB::table('users')->where('role', '=',2)
                ->leftJoin('biodata', 'users.id', '=', 'biodata.users')
                ->leftjoin('dataortu', 'users.id', '=', 'dataortu.users')
                ->leftjoin('datapendukung', 'users.id', '=', 'datapendukung.users')
                ->get();
        return $data;
    }
    public function headings(): array
    {
        return [
            'Id Pendaftaran',
            'NISN',
            'Email',
            'Nama',
            'Nama Panggilan',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Anak Ke',
            'Jumlah Saudara Kandung',
            'Jumlah Saudara Tiri',
            'Alamat',
            'Nomor Telp',
            'Asal Sekolah',
            'Alamat Sekolah',
            'NPSN Sekolah Asal',
            'Nomor KK',
            'Nama Ayah',
            'NIK Ayah',
            'Tempat Lahir Ayah',
            'Tanggal Lahir Ayah',
            'Pendidikan Ayah',
            'Pekerjaan Ayah',
            'Agama Ayah',
            'Alamat Ayah',
            'Nama Ibu',
            'NIK Ibu',
            'Tempat Lahir Ibu',
            'Tanggal Lahir ibu',
            'Pendidikan Ibu',
            'Pekerjaan Ibu',
            'Agama Ibu',
            'Alamat Ibu',
            'Nama Wali',
            'Tempat Lahir Wali',
            'Tanggal Lahir Wali',
            'Pekerjaan Wali',
            'Agama Wali',
            'Alamat Wali',
            'Nomor KIP',
            'Nomor PKH',
            'Nomor KKS',
            'Nomor KPS',

        ];
    }
    public function map($data): array
    {

        return [

           $data->id_registrasi,
           $data->nisn,
           $data->email,
           $data->name,
           $data->nama_panggilan,
           $data->tmp_lahir,
           $data->tgl_lahir,
           $data->jns_kelamin,
           $data->anak_ke,
           $data->jml_sdr_kandung,
           $data->jml_sdr_tiri,
           $data->alamat,
           $data->nomor_hp,
           $data->asal_sekolah,
           $data->alamat_sekolah,
           $data->npsn_sekolah,
           $data->kk,
           $data->nama_ayah,
           $data->ktp_ayah,
           $data->tmp_lahir_ayah,
           $data->tgl_lahir_ayah,
           $data->pendidikan_ayah,
           $data->pekerjaan_ayah,
           $data->agama_ayah,
           $data->alamat_ayah,
           $data->nama_ibu,
           $data->ktp_ibu,
           $data->tmp_lahir_ibu,
           $data->tgl_lahir_ibu,
           $data->pendidikan_ibu,
           $data->pekerjaan_ibu,
           $data->agama_ibu,
           $data->alamat_ibu,
           $data->nama_wali,
           $data->tmp_lahir_wali,
           $data->tgl_lahir_wali,
           $data->pekerjaan_wali,
           $data->agama_wali,
           $data->alamat_wali,
           $data->kip,
           $data->pkh,
           $data->kks,
           $data->kps,
    ];
    }
    public function title(): string
    {
        return 'Data Peserta Didik';
    }
    // public function defaultStyles(Style $defaultStyle)
    // {
    //     return [
    //         'fill'=>[
    //             'fillType'=>Fill::FILL_SOLID,
    //             'startColor'=>['argb'=>Color::RED],
    //         ],
    //     ];
    // }
    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font'=> ['bold'=>true],
            ],
        ];

    }
    public function registerEvents(): array
    {
        return[
        AfterSheet::class => function(AfterSheet $event){
            $event->sheet->getDelegate()->getStyle('A1:AQ1')
            ->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()
            ->setARGB('FABF8F');
            $event->sheet->getDelegate()->getStyle('A1:AQ1')->getFont()
            ->setSize(12);
            $event->sheet->getDelegate()->getStyle('A1:AQ1')->getFont()
            ->setName('Times New Roman');
            $styleArray=[
                'borders'=> [
                    'outline'=>[
                        'borderStyle'=> \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color'=>['argb'=>'000000'],
                    ],
                ],
            ];
            $event->sheet->getDelegate()->getStyle('A1:AQ1')->applyFromArray($styleArray);
        },
    ];
    }
}
