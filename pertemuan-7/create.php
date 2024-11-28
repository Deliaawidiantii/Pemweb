<!DOCTYPE html>
<html lang="en">

<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; 
            padding: 20px; 
        }

        .container{
            max-width: 1000px; 
            margin: 0 auto; 
            background-color: #C9DABF; 
            padding: 20px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            border-radius: 8px; 
        }

        a:hover{
            text-decoration: underline;
        }

        form{
            display: flex;
            flex-direction: colum;
        }

        input[type="text"], 
        input[type="number"], 
        input[type="file"],
        input[type="submit"] {
        margin-bottom: 10px;
        padding: 12px;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        transition: border-color 0.3s;
        }

        </style>

</head>

<body>
    <h1>Tambah Produk</h1>
    <div class="data-produk">
        <a href="show.php">Lihat data produk</a>
    </div>
    <form action="./backend/create.php" method="post" enctype="multipart/form-data">
        <div class="nama-produk"></div>
        <input type="text" name="name" placeholder="input nama produk">
        </div>

        <div class="harga-produk">
            <input type="number" name="price" placeholder="input harga produk">
        </div>

        <div class="foto-produk">
            <input type="file" name="image">
        </div>

        <div class="simpan-produk">
            <input type="submit" value="simpan" name="submit">
        </div>
    </form>
</body>

</html>