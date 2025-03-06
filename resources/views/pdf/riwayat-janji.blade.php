<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Janji Rs Dr Euis</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Riwayat Janji</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Pasien</th>
                <th>Nomor HP</th>
                <th>Alamat</th>
                <th>Dokter</th>
                <th>Spesialis</th>
                <th>Hari</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->nama }}</td>
                    <td>{{ $appointment->nomor_hp }}</td>
                    <td>{{ $appointment->alamat }}</td>
                    <td>{{ $appointment->dokter }}</td>
                    <td>{{ $appointment->spesialis }}</td>
                    <td>{{ $appointment->hari }}</td>
                    <td>{{ $appointment->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
