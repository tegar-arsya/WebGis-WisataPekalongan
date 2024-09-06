<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Wisata Pekalongan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .letterhead {
            border-bottom: 3px solid #0056b3;
            padding-bottom: 20px;
            margin-bottom: 40px;
            background-color: #fff;
            padding: 20px 0;
        }
        .logo {
            width: 100px;
            margin-bottom: 10px;
        }
        h1 {
            font-size: 32px;
            font-weight: bold;
            color: #0056b3;
            margin-bottom: 0;
        }
        h2 {
            font-size: 20px;
            margin-top: 5px;
            color: #666;
        }
        .report-title {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #0056b3;
        }
        table {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
        }
        table th {
            background-color: #0056b3;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
        }
        table td {
            font-size: 14px;
            padding: 12px;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #d0e6ff;
        }
        .table-responsive {
            margin-bottom: 40px;
        }
        @media (max-width: 767px) {
            h1 {
                font-size: 24px;
            }
            h2 {
                font-size: 18px;
            }
            table {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="letterhead text-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Coat_of_arms_of_Pekalongan_Regency.svg/118px-Coat_of_arms_of_Pekalongan_Regency.svg.png" alt="Logo Pekalongan" class="logo">
            <h1>Wisata Pekalongan</h1>
            <h2>KABUPATEN PEKALONGAN</h2>
        </div>

        <div class="report-title text-center">
            Laporan Wisata Tahun 2024
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped shadow-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Wisata</th>
                        <th>Kategori</th>
                        <th>Ulasan</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($petas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_wisata }}</td>
                        <td>{{ $item->nama_kategori }}</td>
                        <td>{{ $item->ulasan }}</td>
                        <td>{{ $item->rating }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
