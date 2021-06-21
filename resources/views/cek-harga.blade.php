<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <h1>Daftar Provinsi</h1>
                </div>
                <form action='/cek-ongkir' method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kota Asal</label>
                        <select name="origin" class="form-control" id="exampleFormControlSelect1">
                        <option value="49">Batang</option>
                        <option value="76">Blora</option>
                        <option value="91">Boyolali</option>
                        <option value="92">Brebes</option>
                        </select>
                    </div>
                <div class="form-group">
                <div class="form-group">
                        <label for="exampleFormControlInput1">Kota Tujuan</label>
                        <select name="destination" class="form-control" id="exampleFormControlSelect1">
                        <option value="106">Cilegon</option>
                        <option value="232">Lebak</option>
                        <option value="331">Serang</option>
                        <option value="402">Pandeglang</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">berat</label>
                    <input name="weight"  type="number" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                <label for="exampleFormControlInput1">Ekspedisi</label>
                        <select name="courier" class="form-control" id="exampleFormControlSelect1">
                        <option value="jne">JNE</option>
                        <option value="pos">POS</option>
                        <option value="tiki">TIKI</option>
                        </select>
                </div>
                <button class="btn btn-secondary" type="submit">
                    Cek Harga
                </button>
                </form>

            </div>

        </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    </body>

</html>