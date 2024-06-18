<!DOCTYPE html>
<html>
<head>
    <title>Saldo Akun</title>
</head>
<body>
    <h1>Saldo Akun</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Akun</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accounts as $account)
            <tr>
                <td>{{ $account->id }}</td>
                <td>{{ $account->account_name }}</td>
                <td>{{ $account->balance }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
