<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <x-navbar/>
      <br><br><br>
      <div class="w-80 d-flex justify-content-center">
        <form action="/create-staff1" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Staff Name</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}">
            @error('nama')
              <p style="color: red;">Invalid Name</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Staff Age</label>
            <input type="number" class="form-control" id="umur" name="umur" value="{{old('umur')}}">
            @error('umur')
              <p style="color: red;">Invalid Age</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Staff Adress</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat')}}">
            @error('alamat')
              <p style="color: red;">Invalid Adress</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nomor" class="form-label">Staff Phone Number</label>
            <input type="number" class="form-control" id="nomor" name="nomor" value="{{old('nomor')}}">
            @error('nomor')
              <p style="color: red;">Invalid Number</p>
            @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Staff Photo</label>
          <input type="file" class="form-control" id="image" name="image">
          @error('image')
              <p style="color: red;">Ivalid Image</p>
            @enderror
      </div>
      <div class="mb-3">
        <select class="form-select" aria-label="Default select example" name="CategoryId">
            <option selected style="display: none;"></option>
            @foreach ($categories as $c)
                <option value="{{ $c->CategoryId }}">{{ $c->nama }}</option>
            @endforeach
        </select>

      </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
    </div>
  </body>
</html>