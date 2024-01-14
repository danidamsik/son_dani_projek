<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Example</title>
    <link rel="stylesheet" href="css/stock.css">
</head>
<body>

<div id="crud-container">
    <h2>STOCK BARANG</h2>

    <!-- Create Form -->
    <form method="post" action="{{route('create-stock')}}">
     {{ @csrf_field()}}
     <label>nama barang:</label>
     <input type="text" name ="namabarang">

	   <label>harga jual:</label>
	   <input type="text" name ="hargajual">
					    
	   <label>harga beli:</label>
	   <input type="text" name ="hargabeli">
	   <button type="submit">tambah</button>
    </form>

    <!-- Read Table -->
    <h3>Daftar Barang</h3>
    <table id="barang-table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($stock as $s)
            <tr>
                <td>{{ $s->nama_barang }}</td>
                <td>Rp{{ number_format($s->harga_jual, 0, ',', '.')}}</td>
                <td>Rp{{ number_format($s->harga_beli, 0, ',', '.') }}</td>
                <td>
                  <form action="#" method = "post">
                   {{ @csrf_field()}}
                    <button>Edit</button>
                  </form>
                  <form action="{{ route('delete-stock', ['stock_id' => $s->stock_id]) }}" method = "post">
                   @csrf
                   @method('DELETE')
                    <button type = "submit">Delete</button>
                  </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
</div>

</body>
</html>