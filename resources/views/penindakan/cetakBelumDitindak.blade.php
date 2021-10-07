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
    <title>CETAK DATA BELUM DITINDAK</title>
</head>
<body>
    <div class="form-group">
        <p align="center">Laporan Data Belum Ditindak</p>
        <table class="static" align="center" rules="all" border="1px" style="width: 100%">
            <tr>
                <th  class="text-center">No Surat Tugas</th>
                <th  class="text-center">No LHP</th>
                <th class="text-center">Nama Sarana</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Kabupaten</th>
                <th class="text-center">Telepon</th>
                <th class="text-center">Pemilik / Pimpinan</th>
                <th class="text-center">Golongan</th>
                <th class="text-center">Uraian Temuan</th>
                <th class="text-center">Kategori Temuan</th>
                <th class="text-center">Tindakan</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Kesimpulan</th>
                <th class="text-center">Tindak Lanjut</th>
                <th class="text-center">Status Penindakan</th>
            </tr>
            @foreach ($penindakans as $penindakan)
                  <tr>
                    <td>{{ $penindakan->no_surat_tugas }}</td>
                    <td>{{ $penindakan->no_lhp }}</td>
                    <td>{{ $penindakan->nama_sarana }}</td>
                    <td>{{ $penindakan->alamat }}</td>
                    <td>{{ $penindakan->kabupaten }}</td>
                    <td>{{ $penindakan->telepon }}</td>
                    <td>{{ $penindakan->pemilik }}</td>
                    <td>{{ $penindakan->golongan }}</td>
                    <td>{{ $penindakan->uraian_temuan }}</td>
                    <td>{{ $penindakan->kategori_temuan }}</td>
                    <td>{{ $penindakan->tindakan }}</td>
                    <td>{{ $penindakan->tanggal }}</td>
                    <td>{{ $penindakan->kesimpulan }}</td>
                    <td>{{ $penindakan->tindak_lanjut }}</td>
                    <td>{{ $penindakan->status }}</td>
                  </tr>
                  @endforeach
        </table>
    </div>

    <script type="text/javascript">
    window.print();

    </script>
</body>
</html>