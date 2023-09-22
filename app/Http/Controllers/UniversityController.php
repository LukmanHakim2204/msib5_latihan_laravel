<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deskripsi = 'Universitas Muhammadiyah Cirebon (UMC) merupakan lembaga pendidikan tinggi yang didirikan sebagai perwujudan idealisme dan komitmen warga Muhammadiyah Cirebon untuk terus beramal shaleh, khususnya dalam bidang peningkatan mutu kehidupan masyarakat. UMC berdiri pada tahun 1999 dan terletak di Kota Cirebon, Jawa Barat, Indonesia.UMC memiliki beragam program studi yang diselenggarakan di bawah dua tingkatan pendidikan, yaitu Program Diploma 3 (D-3) dan Program Sarjana (S1).';
        $deskripsi2 = 'Selain itu, UMC juga menawarkan Program Profesi yang bertujuan untuk menghasilkan lulusan yang siap bekerja di bidang yang spesifik. UMC berkomitmen untuk memberikan pendidikan berkualitas tinggi yang berlandaskan nilai-nilai Islam dan menjunjung tinggi etika serta moralitas. Melalui pendekatan akademik yang holistik, UMC bertujuan untuk menghasilkan lulusan yang memiliki kompetensi akademik dan keterampilan praktis yang dibutuhkan dalam dunia kerja.';
        $deskripsi3 = 'Dalam upaya mencapai standar pendidikan yang tinggi, UMC didukung oleh dosen-dosen yang berkualifikasi dan berpengalaman di bidangnya masing-masing. UMC juga melengkapi fasilitas pendidikan yang memadai, seperti laboratorium, perpustakaan, dan ruang kuliah yang nyaman, guna mendukung proses pembelajaran yang efektif dan interaktif.UMC juga mendorong mahasiswa untuk berpartisipasi dalam kegiatan ekstrakurikuler, organisasi kemahasiswaan, dan kegiatan sosial guna mengembangkan keterampilan kepemimpinan, kebersamaan, dan pemberdayaan masyarakat.';
        $data['deskripsi'] = $deskripsi;
        $data['deskripsi2'] = $deskripsi2;
        $data['deskripsi3'] = $deskripsi3;
        return view('university/index', $data);
    }
}
