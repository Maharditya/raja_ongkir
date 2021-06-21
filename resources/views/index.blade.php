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
                <div class="col-6">
                    <h1>Daftar Provinsi</h1>
                </div>
                <div class="col-6">
                    <a href="/getProvince" class="btn btn-primary float-right btn-sm">Perbarui Daftar Provinsi</a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Aksi</th>
                            <th scope="col">Nama Provinsi</th>
                        </tr>
                    </thead>
                    @foreach($data as $item)
                    <tbody>
                        <tr>
                            <td>
                            <a href="/city/{{ $item->province_id }}" class="btn btn-primary btn-sm">Lihat Daftar Kota</a>
                            </td>
                            <td>
                                {{ $item->province }}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>

        </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    </body>

</html>