<div class="container-fluid">

<h1 class="h3 mb-4 toxt-gray-800">Tambah Kategori</h1>
<div class="card-shadow mb-4">
    <div class="card-body">
        <form action="" method="post">
            <?php
                if (isset($_POST['submit'])) {
                    $kategori = strtolower($_POST['kategori']);
                    //cek data kategori
                    $cek = mysqli_query($koneksi, "SELECT * FROM kategori WHERE Lower(kategori)='$kategori' ");
                    $check = mysqli_num_rows($cek);
                    if ($check > 0) {
                        echo "Data yang dimasukkan sama";
                    }else{
                        $query = mysqli_query($koneksi, "INSERT INTO kategori(kategorI) VALUES ('$kategori')");
                        if($query) {
                            echo '<script>alert("Tambah data berhasil"); </script>';
                        }else{
                            echo '<script>alert("Tambah data gagal"); </script>';
                        }
                    }
                }
            ?>

        <div class="form-group mb-3">
            <label class="col mb-3 col-form-label">Nama kategori</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="kategori" placeholder="Masukan nama kategori" require>
            </div>
        </div>

        <div class="row">
            <div class="com-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">
                    Simpan
                </button>
                <button type="reset" class="btn btn-secondary">
                    Reset
                </button>
                <a href="?page=kategori" class="btn btn-danger">
                    Kembali
                </a>
            </div>
        </div>
        </form>
    </div>
</div>
</div>