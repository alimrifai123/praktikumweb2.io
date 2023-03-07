<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<div class="container">
        <h1>Belanja Online</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label>
            <div class="col-8">
                <input id="customer" name="customer" placeholder="nama customer" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="p_produk" id="p_produk_0" type="radio" class="custom-control-input" value="TV">
                    <label for="p_produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="p_produk" id="p_produk_1" type="radio" class="custom-control-input" value="Kulkas">
                    <label for="p_produk_1" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="p_produk" id="p_produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                    <label for="p_produk_2" class="custom-control-label">Mesin Cuci</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
            <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $_customer = $_POST['customer'];
        if (empty($_customer)) {
            echo "Costomer is empty";
        } else {
            $_jumlah = $_POST['jumlah'];
            $_pilih_produk = $_POST['p_produk'];
            echo 'Costomer = ' . $_customer;

            $h_barang;
            $total;

            if ($_pilih_produk == "TV") {
                $h_barang = 4200000;
            } else {
                if ($_pilih_produk == "Kulkas") {
                    $h_barang = 3100000;
                } else {
                    if ($_pilih_produk == "Mesin Cuci") {
                        $h_barang = 3800000;
                    }
                }
            }
            echo '<br>Pilih Produk = ' . $_pilih_produk;
            echo '<br>harga Brg = ' . $h_barang;
            echo '<br>Jumlah = ' . $_jumlah;
            $total = $h_barang * $_jumlah;
            echo '<br>total = ' .  $total;
        }
    }
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Daftar harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">TV : 4200000</th>
            </tr>
            <tr>
                <th scope="row">Kulkas : 3100000</th>
            </tr>
            <tr>
                <th scope="row">Mesin Cuci : 3800000</th>
            </tr>
        </tbody>
    </table>
</div>
</body>

</html>