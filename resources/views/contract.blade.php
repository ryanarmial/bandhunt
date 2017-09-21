@extends('layouts.app')

@section('content')
<div class="wrap-image">
  <img class="responsive-img" src="{{ asset('images/banner.jpg') }}">
</div>
<div class="wrap-text margin-bottom-50">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="judul-page">
          Perjanjian Rekaman
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          <table id="rekaman" class="highlight">
            <tbody>
              <tr>
                <td>Opsi dan Komitmen Rilis</td>
                <td>UMI akan memproduksi, merekam, dan merilis setidaknya satu single yang melibatkan Artis. Artis akan bekerjasama untuk merekam dan menyerahkan single sesegera mungkin untuk memastikan bahwa single dapat dirilis sesegera mungkin setelah pengumuman pemenang LEVI’s BAND AUDITION.</td>
              </tr>
              <tr>
                <td>Jangka Waktu</td>
                <td>Sejak tanggal opsi dilaksanakan sampai dengan penyerahan oleh Artis atas single atau album opsi final sebagaimana diminta oleh UMI, kecuali diakhiri dengan pemberitahuan terlebih dahulu dari UMIl;</td>
              </tr>
              <tr>
                <td>Jangka Waktu Hak-hak</td>
                <td>Secara terus menerus (abadi);</td>
              </tr>
              <tr>
                <td>Biaya Rekaman</td>
                <td>UMI untuk membayar biaya rekaman sampai dengan sejumlah anggaran yang ditentukan oleh UMIl;</td>
              </tr>
              <tr>
                <td>Royalti</td>
                <td>6% dari Penerimaan Bersih penjualan album dan single dalam format fisik dan digital;<br>
                  Potongan 25% pada Royalti Artis untuk penjualan dengan harga-tengah dan penjualan format baru;<br>
                  Potongan 50% pada Royalti Artis untuk penjualan dengan anggaran lebih rendah, penjualan untuk angkatan bersenjata (armed forces sales), premium, penjualan klub (club sales), penjualan pemesanan surat (mail order sales), penjualan kiosk dan penjualan dalam bentuk kompilasi;<br>
                  Ketika kampanye televise iklan sedang dijalankan, 50% dari tarif royalty yang berlaku baru diaplikasikan sampai 50% dari biaya kampanye diperoleh kembali dari pengurangan 50%;<br>
                  50% untuk penerimaan bersih sinkronisasi.</td>
              </tr>
              <tr>
                <td>Penerimaan Bersih</td>
                <td>Penerimaan bersih adalah PPD atau digital yang setara (atau, untuk eksploitasi digital dimana tidak ada yang setara sebagai PPD digital, penerimaan bersih aktual dari Universal) masing-masingnya dikurangi pajak yang berlaku. <br>
                Pembayaran royalti atas 100% dari penjualan bersih dikurangi retur, barang gratis dan unit yang dijual dengan istilah “potongan harga”. <br>
                Pengurangan biaya kemasan dan teknis sebesar 25% untuk semua eksploitasi fisik dan digital;</td>
              </tr>
              <tr>
                <td>Recoupment</td>
                <td>Seluruh biaya rekaman sepenuhnya diperhitungkan kembali terhadap Royalti;</td>
              </tr>
              <tr>
                <td>Promosi</td>
                <td>Artis akan menyediakan segala promosi sebagaimana diminta secara wajar oleh UMI;</td>
              </tr>
              <tr>
                <td>Audit</td>
                <td>Hak-hak yang lazim akan diberikan untuk mengaudit UMI. UMI akan membukukan kepada Anda setiap semester dalam waktu 90 hari dari akhir periode. UMI berhak untuk menahan secara wajar cadangan untuk pengembalian sesuai dengan yang diterapkan untuk repertoar yang bersangkutan. Buku royalti Artis akan dicatat dalam Rupiah dan uang yang diterima selain daripada Rupiah akan dikonversi menjadi Rupiah dalam tanda terima tetapi royalti akan dibayarkan dalam mata uang pilihan Artis dengan ketentuan bahwa biaya penukaran mata uang ditanggung oleh Artis. <br>
                Artis dapat mengaudit untuk 2 tahun setelah penyampaian salinan laporan keuangan. Artis dilarang mengajukan klaim perihal diatas setelah 3 tahun diterimanya salinan laporan keuangan. Artis dilarang melakukan lebih dari satu kali audit dalam setiap 2 tahun periode. Artis harus memulai tindakan hukum sehubungan dengan pengajuan klaim yang timbul sebagai hasil audit, dalam jangka waktu 9 bulan dari awal audit, kegagalan seperti klaim tersebut dilarang. <br> Setiap audit dilakukan oleh auditor independen dan menjadi biaya Artis;</td>
              </tr>
              <tr>
                <td>Hak Cipta</td>
                <td>Seluruh lagu direkam oleh UMI berdasarkan Perjanjian ini yang telah (secara sebagian) ditulis atau dibuat oleh Artis akan dialihkan kepada pengelola lagu sebagaimana yang dipilih oleh UMI;</td>
              </tr>
              <tr>
                <td>Pembatasan Rekaman Ulang</td>
                <td>Artis untuk 10 ( sepuluh ) tahun setelah peluncuran komersial terakhir dari Rekaman atau bagiannya selama jangka waktu Perjanjian ini, kecuali dengan izin secara tertulis dari UMI (dimana izin tidak akan ditahan tanpa dasar-dasar yang tidak wajar), tidak lagi melakukan penampilan atau bagiannya, yang ada dalam Rekaman dengan tujuan untuk memproduksi dan menghasilkan rekaman secara komersial dari dirinya dan/atau untuk pihak ketiga, termasuk juga mengizinkan produksi dan eksploitasi komersial rekaman tersebut oleh pihak ketiga;</td>
              </tr>
              <tr>
                <td>Video Klip</td>
                <td>UMI memiliki hak ekslusif untuk membuat video klip. Biaya video diperhitungkan lebih dulu 50 % terhadap royalti rekaman dan 50 % dari royalti video;</td>
              </tr>
              <tr>
                <td>Persetujuan</td>
                <td>Artis memberikan kepada UMI semua persetujuan yang diperlukan untuk peluncuran rekaman dan video, dan memberikan UMI, hak untuk menggunakan nama artis, logo, kemiripan, citra dan biografi, yang berhubungan dengan Artis;</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <div class="judul-page">
          Perjanjian Manajemen
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          <table id="manajemen" class="highlight">
            <tbody>
              <tr>
                <td>Jangka Waktu</td>
                <td>Periode dimulainya pelaksanaan Opsi dan terus berlanjut sampai dengan berakhirnya periode 5 tahun atau akhir dari Jangka Waktu Perjanjian Rekaman, yang mana yang lebih akhir. <br> Dalam jangka waktu 12 bulan pertama Jangka Waktu Perjanjian, Manajer dapat mengakhiri Jangka Waktu Perjanjian dalam waktu 30 hari pemberitahuan tertulis disampaikan kepada Kontestan yang daripadanya kewajiban-kewajiban yang melekat pada Manajer dan Kontestan akan berakhir demi hukum kecuali yang tetap berlaku terlepas adanya pengakhiran Jangka Waktu Perjanjian tanpa terbatas pada pembayaran komisi.</td>
              </tr>
              <tr>
                <td>Wilayah</td>
                <td>Dunia</td>
              </tr>
              <tr>
                <td>Kegiatan Manajemen</td>
                <td>Manajer diberi kuasa penuh dan eksklusif dari Artis untuk berunding dengan pihak ketiga semua perjanjian yang sesuai dalam kaitannya dengan kegiatan professional Artis termasuk, tanpa ada batasan, penampilan musikal, menciptakan karya musik dan lirik  termasuk (tetapi tidak terbatas pada) lagu untuk rekaman, jingle komersial, tema film untuk televisi atau sinematografi atau musik latar dan eksploitasi yang ada, tampil di film, Televisi atau media audio visual lainnya, produksi, teknik, mixing dan remixing dari suara rekaman, tampil sendiri secara langsung di depan pemirsa, tampil sendiri drekam untuk video dan/atau rekaman televisi dan/atau pengambilan gambar untuk penyiaran dan sinematografi, perjalanan tur, penjualan merchandise dan penggunaan secara komersial nama Artis, kemiripan dan reputasi dalam kaitannya dengan produk atau jasa dan kegiatan sponsor, bintang iklan atau yang lainnya, jasa DJ, jasa kesusastraan, dunia peran, presenter dan kegiatan wawancara serta kegiatan media baru/digital (“Kegiatan Hiburan”).
Semua perjanjian ditandatangani dalam kaitannya dengan Kegiatan Hiburan Artis, akan selalu dilakukan konsultasi dengan  Artis dan tidak boleh diputuskan oleh manajer tanpa ada persetujuan sebelumnya dari Artis dan minta ditandatangani oleh Artis dimana Artis akan bekerja sama dengan permintaan pertama Manajer. Artis tidak akan menolak atau menunda secara tidak wajar persetujuan dalam penandatanganan setiap perjanjian tersebut.</td>
              </tr>
              <tr>
                <td>Komisi</td>
                <td>Manajer berhak atas komisi sejumlah Lima Puluh Persen (50%) dari: (A) semua pendapatan bersih yang diperoleh (nilai kontrak dikurangi pajak dan biaya produksi) atau diterima oleh artis atau setiap pihak ketiga atas nama Artis (termasuk pembayaran dalm bentuk natura) untuk setiap Kegiatan Hiburan selama Jangka Waktu dari Perjanjian Manajemen, dan (B) semua pendapatan bersih yang diperoleh atau diterima oleh Artis atau setiap pihak ketiga atas nama Artis (termasuk pembayaran dalam bentuk natura) setelah jangka waktu dari Perjanjian Manajemen yang timbul dari perjanjian yang dibuat selama jangka waktu dari Perjanjian Manajemen atau Kegiatan Hiburan selama jangka waktu dari Perjanjian Manajemen, tidak masalah kapan diterima.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <div class="judul-page">
          Perjanjian Pengelolaan Lagu
        </div>
      </div>
      <div class="col s12">
        <div class="isi-page">
          <table id="lagu" class="highlight">
            <tbody>
              <tr>
                <td>Pelaksanaan Otomatis dari Opsi</td>
                <td>Opsi secara otomatis dianggap telah dilaksanakan jika: Artis adalah pemenang dari Program; atau UMI melaksanakan Opsinya terhadap Perjanjian Rekaman.</td>
              </tr>
              <tr>
                <td>Pembagian Penerimaan Bersih</td>
                <td>Artis akan berhak menerima, untuk pendapatan yang tertagihkan secara langsung oleh Pengelola Lagu yang Ditunjuk, 50% dari penerimaan bersih (seperti kebiasaan yang ditetapkan oleh Pengelola Lagu yang Ditunjuk dan termasuk, setelah pengurangan dari pajak, komisi organisasi, pembayaran untuk penterjemah, Adaptor dan Arranger, pengurangan sub-Pengelola Lagu dan aggregator dan tidak termasuk pendapatan atas pengumuman kepada umum dimana Artis akan menerima porsinya dari bagian pengumuman, dari masyarakat kolektif hak cipta lokal secara langsung), yang diterima oleh Pengelola Lagu yang Ditunjuk jika Artis adalah penulis 100% dari komposisi lagu; jika Artis adalah penulis yang kurang dari 100% Artis akan berhak menerima porsi pro-rata dalam hal ini.</td>
              </tr>
              <tr>
                <td>Jaminan dan Janji Artis</td>
                <td>Artis dengan ini menyatakan dan menjamin bahwa Pengelola Lagu yang Ditunjuk akan berhak secara eksklusif terhadap karya tulis lagu dari Artis selama jangka waktu dan hak cipta dan semua hak lainnya, milik dan kepentingan dalam semua lagu termasuk lirik tersebut yang ditulis oleh Artis sebelum dan selama jangka waktu termasuk semua lagu yang akan direkam sesuai dengan Perjanjian Pengelola Lagu  atau dengan cara lain, dalam hal ini bahwa bagian atau keseluruhan yang telah ditulis atau akan ditulis dan/atau yang diciptakan oleh Artis menurut nama Artis itu sendiri atau dengan nama samaran sebagai pencipta lagu dan/atau penulis lirik ("Komposisi") akan diserahkan kepada Pengelola Lagu yang Ditunjuk (termasuk, tanpa ada batasan, hak untuk pengumuman yang tergantung dari setiap izin sebelumnya dari masyarakat kolektif hak cipta) untuk periode penuh dari hak cipta dan semua pembaharuan dan perpanjangannya dan Pengelola Lagu yang Ditunjuk memiliki hak untuk mengelola  dalam semua cara dan media. <br>
                Jika dan sejauh Komposisi tersebut ditulis oleh Artis dengan rekan penulis, Artis akan mengusahakan dengan itikad baik sebisa mungkin, untuk membawa rekan penulis Artis untuk menempatkan semua hak-hak Pengelola Laguan musik kepada Pengelola Lagu yang Ditunjuk. Kendati demikian, Artis akan menginformasikan Universal terlebih dahulu sebelum membuat Perjanjian ini jika Artis telah menyerahkan, melisensikan atau dengan cara lain mengizinkan atau memindahkan setiap hak Pengelola Laguan Artis kepada perusahaan lainnya sebelum tanggal yang tercantum atau dengan cara lain membebankan hak-hak demikian, dan Artis menyetujui dan mengakui bahwa segera, setelah pengakhiran atau habis berlakunya dari setiap dan semua Perjanjian Pengelola Laguan yang telah ada, Artis akan segera menyerahkan kepada Pengelola Lagu yang Ditunjuk atas hak cipta dan semua hak, milik dan kepentingan dalam dan untuk semua lagu yang telah dikembalikan kepada Artis.</td>
              </tr>
              <tr>
                <td>Tidak ada Sampel</td>
                <td>Artis menyetujui dan mengakui bahwa Artis tidak akan menggunakan dan tidak akan memiliki setiap hak untuk menggunakan setiap sampel atau porsi lain dari setiap karya yang punya hak cipta, yang dimiliki oleh pihak ketiga di setiap Komposisi atau rekaman yang bakal diciptakan Artis sesuai dengan Perjanjian ini atau setiap Perjanjian Bakat.</td>
              </tr>
              <tr>
                <td>Wilayah</td>
                <td>Dunia</td>
              </tr>
              <tr>
                <td>Jangka Waktu</td>
                <td>Periode mulainya pelaksanaan Opsi dan berlanjut sampai batas akhir dari periode 5  tahun atau akhir dari Jangka Waktu Perjanjian Rekaman, mana yang belakangan, kecuali diakhiri dengan pemberitahuan lebih dulu secara tertulis dari Universal.</td>
              </tr>
              <tr>
                <td>Pengalihan</td>
                <td>Pengalihan dalam grup Universal dan GMTA tanpa persetujuan Artis. Pengalihan oleh Artis membutuhkan persetujuan GMTA dan Universal.</td>
              </tr>
              <tr>
                <td>Umum</td>
                <td>Artis akan mengesampingkan hak moral dalam Komposisi seluas mungkin antara Artis dan Pengelola Lagu yang Ditunjuk dan cara lain tidak akan mengambil tindakan atas hak moral terhadap Pengelola Lagu yang Ditunjuk ataupun penerima lisensi yang berhak.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
