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
                            <div class="card-header">
                                <h4>Form Edit Data</h4>

                            </div>
                            <div class="card-body">
                                <form action="/book/{{ $book->id }}/update" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control" name="title" id=""
                                            placeholder="Masukan Title" value="{{ $book->title }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Author</label>
                                        <input type="text" class="form-control" name="author" id=""
                                            placeholder="Masukan Author" value="{{ $book->author }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Published Date</label>
                                        <input type="date" class="form-control" name="published_date" id=""
                                            placeholder="Masukan Date" value="{{ $book->published_date }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Publisher</label>
                                        <input type="text" class="form-control" name="publisher" id=""
                                            placeholder="Masukan Publisher" value="{{ $book->publisher }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Stok</label>
                                        <input type="number" class="form-control" name="stock" id=""
                                            placeholder="Masukan Stok" value="{{ $book->stock }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/book" class="btn btn-secondary">Cancel</a>
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
