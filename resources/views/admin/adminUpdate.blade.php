@extends('layouts.adminApp')

@section('title', 'Admin : Update')
@section('content')
<h2 class="text-center">Update Product</h2>
<form action="{{ route('admin.editProcess',$products->id) }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">Product Name</label>
        <input type="text" value="{{ $products->name }}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label class="" for="exampleInputEmail1">Condition</label>
        <select name="condition" class="form-control" required>
            <option value="Bekas" <?php echo 'Bekas' == $products->condition ? 'selected' : '' ?>>Bekas</option>
            <option value="Baru" <?php echo 'Baru' == $products->condition ? 'selected' : '' ?>>Baru</option>
        </select>
    </div>

    <div class="form-group">
        <label class="" for="exampleInputEmail1">Category</label>
        <select name="category" class="form-control" required>
            <option value="Fashion Pria" <?php echo 'Fashion Pria' == $products->category ? 'selected' : '' ?>>Fashion Pria</option>
            <option value="Fashion Wanita" <?php echo 'Fashion Wanita' == $products->category ? 'selected' : '' ?>>Fashion Wanita</option>
            <option value="Bayi dan Anak-Anak" <?php echo 'Bayi dan Anak-Anak' == $products->category ? 'selected' : '' ?>>Bayi dan Anak-Anak</option>
            <option value="Aksesoris" <?php echo 'Aksesoris' == $products->category ? 'selected' : '' ?>>Aksesoris</option>
            <option value="Tas" <?php echo 'Tas' == $products->category ? 'selected' : '' ?>>Tas</option>
            <option value="Sepatu" <?php echo 'Sepatu' == $products->category ? 'selected' : '' ?>>Sepatu</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Weight</label>
        <input type="number" name="weight" class="form-control" id="exampleInputEmail1" value="{{ $products->weight }}" aria-describedby="emailHelp" required>
    </div>

    <div class="form-group">
        <label class="" for="exampleInputEmail1">Local/Import</label>
        <select name="product_from" class="form-control" required>

            <option value="Local" <?php echo 'Local' == $products->product_from ? 'selected' : '' ?>>Local</option>
            <option value="Import" <?php echo 'Import' == $products->product_from ? 'selected' : '' ?>>Import</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Brand</label>
        <input type="text" name="brand" class="form-control" id="exampleInputEmail1" value="{{ $products->brand }}" aria-describedby="emailHelp" required>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <div class="input-group-prepend">
            <span class="input-group-text">Rp. </span>
            <input type="text" value="{{ $products->price }}" name="price" class="form-control" id="exampleInputPassword1">
        </div>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea type="text" class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $products->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Stock</label>
        <input type="text" value="{{ $products->stock }}" name="stock" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-dark">Submit</button>
        <a href="{{ route('admin.home') }}" class="btn btn-danger">Cancel</a>
    </div>
</form>
@endsection