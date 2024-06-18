<!DOCTYPE html>
<html>
<head>
    <title>Mutasi Rekening</title>
</head>
<body>
    <h1>Mutasi Rekening</h1>

    <form method="POST" action="{{ route('transactions.store') }}">
        @csrf
        <div>
            <label for="account_id">Akun:</label>
            <select id="account_id" name="account_id" required>
                @foreach ($accounts as $account)
                    <option value="{{ $account->id }}">{{ $account->account_name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="amount">Jumlah:</label>
            <input type="number" id="amount" name="amount" required>
        </div>
        <div>
            <label for="type">Jenis:</label>
            <select id="type" name="type" required>
                <option value="credit">Kredit</option>
                <option value="debit">Debit</option>
            </select>
        </div>
        <button type="submit">Mutasi Rekening</button>
    </form>
</body>
</html>
