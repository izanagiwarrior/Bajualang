@extends('layouts.adminApp')
@section('title', 'Admin : Create')
@section('content')
<h1 class="text-center">Input Product</h1>

<form action="{{ route('admin.createProcess') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">Product Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>

    <div class="form-group">
        <label class="" for="exampleInputEmail1">Condition</label>
        <select name="condition" class="form-control" required>
            <option value="Bekas">Bekas</option>
            <option value="Baru">Baru</option>
        </select>
    </div>

    <div class="form-group">
        <label class="" for="exampleInputEmail1">Category</label>
        <select name="category" class="form-control" required>
            <option value="Fashion Pria">Fashion Pria</option>
            <option value="Fashion Wanita">Fashion Wanita</option>
            <option value="Bayi dan Anak-Anak">Bayi dan Anak-Anak</option>
            <option value="Aksesoris">Aksesoris</option>
            <option value="Tas">Tas</option>
            <option value="Sepatu">Sepatu</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Weight</label>
        <input type="number" name="weight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>

    <div class="form-group">
        <label class="" for="exampleInputEmail1">Local/Import</label>
        <select name="product_from" class="form-control" required>
            <option value="Local">Local</option>
            <option value="Import">Import</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Brand</label>
        <input type="text" name="brand" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <div class="input-group-prepend">
            <span class="input-group-text">Rp. </span>
            <input type="text" name="price" class="form-control" id="exampleInputPassword1" required>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea type="text" class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Stock</label>
        <input type="text" name="stock" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>

    <div class="form-group">
        <label class="" for="exampleInputEmail1">Image/File</label>
        <input type="file" name="foto" class="form-control-file" id="btn-img-upload" required onchange="loadFile(event)">
    </div>
    <div class="form-group d-none" id="container-img-banner">
        <img src="" class="w-100" id="img-banner">
        <a class="btn btn-secondary mt-3" onclick="reset(event)" id="btn-reset">Reset</a>
    </div>

    <div class="form-group">
        <button type="submit" value="submit" class="btn btn-dark">Submit</button>
    </div>
</form>
<script>
    var urlPath;
    var loadFile = function(event) {
        var output = document.getElementById('img-banner');
        var container = document.getElementById('container-img-banner');
        urlPath = URL.createObjectURL(event.target.files[0]);
        output.src = urlPath;
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
        container.classList.remove('d-none');
        container.classList.add('d-block');
    };
    var reset = function(evenet) {
        const output = document.getElementById('img-banner');
        const container = document.getElementById('container-img-banner');
        output.src = '';
        container.classList.remove('d-block');
        container.classList.add('d-none');
        document.getElementById('btn-img-upload').value = "";
    }
</script>
@endsection