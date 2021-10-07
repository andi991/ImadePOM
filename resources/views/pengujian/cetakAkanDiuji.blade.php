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
    <title>CETAK DATA AKAN DIUJI</title>
</head>
<body>
    <div class="form-group">
        <p align="center">Laporan Data Akan Diuji</p>
        <table class="static" align="center" rules="all" border="1px" style="width: 100%">
            <tr>
                <th  class="text-center">No Surat Tugas</th>
                      <th  class="text-center">Nama Petugas</th>
                      <th class="text-center">Izin Sarana</th>
                      <th class="text-center">Jenis Sarana</th>
                      <th class="text-center">Deputi</th>
                      <th class="text-center">Kabupaten</th>
                      <th class="text-center">Kecamatan</th>
                      <th class="text-center">Temuan</th>
                      <th class="text-center">Jumlah Temuan</th>
                      <th class="text-center">Keterangan Temuan</th>
                      <th class="text-center">MK/TMK</th>
                      <th class="text-center">Status Pengujian</th>
            </tr>
                @foreach ($pengujians as $pengujian)
                  <tr>
                    <td>{{ $pengujian->no_surat_tugas }}</td>
                    <td>{{ $pengujian->nama_petugas }}</td>
                    <td>{{ $pengujian->izin_sarana }}</td>
                    <td>{{ $pengujian->jenis_sarana }}</td>
                    <td>{{ $pengujian->deputi }}</td>
                    <td>{{ $pengujian->kabupaten }}</td>
                    <td>{{ $pengujian->kecamatan }}</td>
                    <td>{{ $pengujian->temuan }}</td>
                    <td>{{ $pengujian->jumlah_temuan }}</td>
                    <td>{{ $pengujian->keterangan_temuan }}</td>
                    <td>{{ $pengujian->mk_tmk }}</td>
                    <td>{{ $pengujian->status }}</td>
                  </tr>
                  @endforeach
        </table>
    </div>

    <script type="text/javascript">
    window.print();

    </script>
</body>
</html>