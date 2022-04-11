<?php
$Template = file_get_contents($dokumen_template);

$Template = str_replace("#PenetapanOleh#",$penetapan,$Template);
$Template = str_replace("#NamaDaerah#",''.$nama_kota.'',$Template);
$Template = str_replace("#TanggalPenetapan#",''.$tanggal_register.'',$Template);
$Template = str_replace("#NamaPenetap#",$panetapan_nama,$Template);
$Template = str_replace("#NamaPengadilan#",$nama_pengadilan,$Template);
$Template = str_replace("#NomorRegister#",$nomor_register,$Template);
$Template = str_replace("#TanggalRegister#",$tanggal_register,$Template);

$Template = str_replace("#NomorBAPenyitaan#",$nomor_ba_penyitaan,$Template);
$Template = str_replace("#TanggalBAPenyitaan#",$tanggal_ba_penyitaan,$Template);
$Template = str_replace("#TanggalSuratLaporanPenyidik#",$tanggal_laporan_penyidik,$Template);
$Template = str_replace("#Penyidik#",$penyidik,$Template);
$Template = str_replace("#NomorSuratLaporanPenyidik#",$nomor_laporan_penyidik,$Template);
$Template = str_replace("#TanggalSuratLaporanPenyidik#",$tanggal_laporan_penyidik,$Template);
$Template = str_replace("#NomorSuratPermohonanPenyidik#",$nomor_suratpermohonan_penyidik,$Template);
$Template = str_replace("#TanggalSuratPermohonanPenyidik#",$tanggal_suratpermohonan_penyidik,$Template);
$Template = str_replace("#PenyitaanTerhadap#",$penyitaan_terhadap,$Template);
$Template = str_replace("#NomorSuratPerintahPenyitaan#",$nomor_suratperintahpenyitaan_penyidik,$Template);
$Template = str_replace("#TanggalSuratPerintahPenyitaan#",$tanggal_suratperintahpenyitaan_penyidik,$Template);
$Template = str_replace("#PenyitaanDetil#",$penyitaan,$Template);

$Template = str_replace("#NamaPihak#",''.$nama.'',$Template);
$Template = str_replace("#JenisKelamin#",''.$jenis_kelamin.'',$Template);
$Template = str_replace("#TempatLahir#",''.$tempat_lahir.'',$Template);
$Template = str_replace("#TanggalLahir#",''.$tanggal_lahir.'',$Template);
$Template = str_replace("#Pekerjaan#",''.$pekerjaan.'',$Template);
$Template = str_replace("#Alamat#",''.$tempat_tinggal.'',$Template);
$Template = str_replace("#JenisKelamin#",''.$jenis_kelamin.'',$Template);
$Template = str_replace("#Kebangsaan#",''.$kebangsaan.'',$Template);
$Template = str_replace("#Agama#",''.$agama.'',$Template);

header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control:  must-revalidate, post-check=0, pre-check=0");
header("Content-disposition: attachment; filename=penyitaan.rtf");
echo $Template;
?>