<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function biodata1(){
        return view('admin.home', [
            "name" => "Mohammad Ananta",
            "fashion" => "is finding identity",
            "image" => "Foto jas.jpg",
            "email" => "anantamohammad2003@gmail.com",
            "telepon1" => "+6281335967576",
            "telepon2" => "+6281335967576",
            "alamat" => "Jalan Raya Ijen, Jelun, Licin, Banyuwangi",
            //section_starts
            "content" => "Hai, saya saat ini sedang mengampuh pendidikan dengan mengambil jurusan Teknik Informastika. Detik ini saya masih mencari untuk menemukan identitas diri saya sendiri, semua orang berkata bahwa jam terbang menentukan jati diri. Namun tak semua orang bisa memahami atas sebuah kesbikan bahkan seorang mahasiswa tak luput dan jauh dari 'tuugas' yang ada dipundak ",
            "age" => "19",
            "qualification" => "SAP data analysis, UI/UX",
            "post" => "Looking for the best",
            "language" => "Indonesia, English",
            //bisa dimasukkan untuk organisa atau pencapaian
            "box1" => "2+",
            "keterangan1" => "years of experience sains",
            //box2
            "box2" => "50+",
            "keterangan2" => "porject completed",
            //box3
            "box3" => "4+",
            "keterangan3" => "best participant of scientific work",
            //box4
            "box4" => "3+",
            "keterangan4" => "health material filler",
            //education
            //sd
            "tahun1" => "2009-2015",
            "sekolah1" => "Madrasah Ibtidaiyah Tarbiyatus Sibyan",
            "alamat1" => "Jelun, licin, Kabupaten Banyuwangi, Jawa Timur 68415",
            //smp
            "tahun2" => "2015-2018",
            "sekolah2" => "Madrasah Tsanawiyah Negeri Banyuwangi ",
            "alamat2" => "Giri, Penataban, Kabupaten Banyuwangi, Jawa Timur 68415",
            //sma
            "tahun3" => "2018-2021",
            "sekolah3" => "Madrasah Aliyah Jember",
            "alamat3" => "Pondok Pesantren Al Qodiri 1 Jember Gebang, Patrang, Kab.Jember, Jawa Timur 68418",
            //kuliah
            "tahun4"=> "2021-Sekarang",
            "sekolah4" => "Politeknik Negeri Banyuwangi",
            "alamat4" => "Jalan Raya Jember No.KM13, Kawang, Labanasem, Kec. Kabat, Kabupaten Banyuwangi, Jawa Timur 68461", 
            //pelatihan
            "tahun5" => "2022",
            "sekolah5" => "Sertivikasi Data Analisis",
            "alamat5" => "asean data sains foundation",
            //pelatihan
            "tahun6" => "2022",
            "sekolah6" => "bootcamp freelance",
            "alamat6" => "De Boutique Style Hotel Malang. Jl. Kaliurang No. 53 , Malang Pusat, Malang, Indonesia, 65111",
            //portofolio
            "image1" => "folio1.jpeg",
            "image2" => "folio2.jpeg",
            "image3" => "folio3.jpeg",
            "image4" => "folio4.jpg",
            "image5" => "folio5.jpg",
            "image6" => "folio6.png",
    
    
        ]);
    }
}
