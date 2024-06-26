<!DOCTYPE html>
<html>
<head>
    <title>Daftar Transaksi</title>
</head>
<body>
    <h1>Daftar Transaksi</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Akun</th>
                <th>Jumlah</th>
                <th>Jenis</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->account->account_name }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->type }}</td>
                    <td>{{ $transaction->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('transactions.create') }}">Tambah Transaksi</a>
</body>
</html>
