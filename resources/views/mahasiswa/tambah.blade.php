<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card">
                            <div class="card-header text-center">
                                <h4>Form Tambah Data Mahasiswa </h4>

                            </div>
                            <div class="card-body">
                                <form action="/mahasiswa/simpan" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="">nama</label>
                                        <input type="text" class="form-control" name="nama" id=""
                                            placeholder="Masukan nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">nim</label>
                                        <input type="text" class="form-control" name="nim" id=""
                                            placeholder="Masukan nim" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">alamat</label>
                                        <input type="text" class="form-control" name="alamat" id=""
                                            placeholder="Masukan Alamat" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">telp</label>
                                        <input type="text" class="form-control" name="telp" id=""
                                            placeholder="Masukan telp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">jurusan</label>
                                        <input type="text" class="form-control" name="jurusan" id=""
                                            placeholder="Masukan jurusan" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="/mahasiswa" class="btn btn-secondary">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
