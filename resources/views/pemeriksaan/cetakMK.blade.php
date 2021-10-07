<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table.static{
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>CETAK DATA MEMENUHI KETENTUAN</title>
</head>
<body>
    <div class="form-group">
        <p align="center">Laporan Data Memenuhi Ketentuan</p>
        <table class="static" align="center" rules="all" border="1px" style="width: 100%">
            <tr>
                <th  class="text-center">Nama Petugas</th>
                <th  class="text-center">Nama Sarana</th>
                <th class="text-center">Jenis Sarana</th>
                <th class="text-center">Tanggal Periksa</th>
                <th class="text-center">Kategori Pemeriksaan</th>
                <th class="text-center">Kabupaten</th>
                <th class="text-center">Kecamatan</th>
                <th class="text-center">Kategori Temuan</th>
                <th class="text-center">Kategori Tindak Lanjut</th>
                <th class="text-center">No Surat Tindak Lanjut</th>
                <th class="text-center">Tanggal Surat Tindak Lanjut</th>
                <th class="text-center">Batas Waktu Tindak Lanjut</th>
                <th class="text-center">Status Laporan</th>
                <th class="text-center">Tanggal Capa 1</th>
                <th class="text-center">Batas Tanggal Capa 1</th>
                <th class="text-center">Status Capa 1</th>
                <th class="text-center">Tanggal Open Capa 1</th>
                <th class="text-center">Tanggal Close Capa 1</th>
                <th class="text-center">Evaluasi Capa 1</th>
                <th class="text-center">Tanggal Open Capa 2</th>
                <th class="text-center">Tanggal Close Capa 2</th>
                <th class="text-center">Keterangan Feedback Lintas Sektor</th>
                <th class="text-center">SIPT</th>
                <th class="text-center">SPV</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center">Status Pemeriksaan</th>
            </tr>
            @foreach ($pemeriksaans as $pemeriksaan)
                  <tr>
                      <td>{{ $pemeriksaan->nama_petugas }}</td>
                      <td>{{ $pemeriksaan->nama_sarana }}</td>
                      <td>{{ $pemeriksaan->jenis_sarana }}</td>
                      <td>{{ $pemeriksaan->tanggal_periksa }}</td>
                      <td>{{ $pemeriksaan->kategori_pemeriksaan }}</td>
                      <td>{{ $pemeriksaan->kabupaten }}</td>
                      <td>{{ $pemeriksaan->kecamatan }}</td>
                      <td>{{ $pemeriksaan->kategori_temuan }}</td>
                      <td>{{ $pemeriksaan->kategori_tindak_lanjut }}</td>
                      <td>{{ $pemeriksaan->no_surat_tindak_lanjut }}</td>
                      <td>{{ $pemeriksaan->tanggal_surat_tindak_lanjut }}</td>
                      <td>{{ $pemeriksaan->batas_waktu }}</td>
                      <td>{{ $pemeriksaan->status_laporan }}</td>
                      <td>{{ $pemeriksaan->tanggal_capa1 }}</td>
                      <td>{{ $pemeriksaan->batas_tanggal_capa1 }}</td>
                      <td>{{ $pemeriksaan->status_capa1 }}</td>
                      <td>{{ $pemeriksaan->tanggal_open_capa1 }}</td>
                      <td>{{ $pemeriksaan->tanggal_close_capa1 }}</td>
                      <td>{{ $pemeriksaan->evaluasi_capa1 }}</td>
                      <td>{{ $pemeriksaan->tanggal_open_capa2 }}</td>
                      <td>{{ $pemeriksaan->tanggal_close_capa2 }}</td>
                      <td>{{ $pemeriksaan->keterangan_feedback_lintas_sektor }}</td>
                      <td>{{ $pemeriksaan->sipt }}</td>
                      <td>{{ $pemeriksaan->spv }}</td>
                      <td>{{ $pemeriksaan->keterangan }}</td>
                      <td>{{ $pemeriksaan->status }}</td>
                  </tr>
                  @endforeach
        </table>
    </div>

    <script type="text/javascript">
    window.print();

    </script>
</body>
</html>