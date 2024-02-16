<div>
@section('title', 'Add Products')
    <div class="mt-3">
        <h4 class="text-center">
            Add Products
        </h4>
    </div>

    <div class="col-sm-6 mx-auto">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <form action="" wire:submit.prevent="make_product" class="border p-5 rounded-2">
                @if(! is_null( $message ))
                    <div class="alert alert-success text-center"> 
                        {{ $message }}                   
                    </div>
                @endif
                    <div class="row">
                        <div class="col">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" wire:model="name" name="name" placeholder="Product Name" value="{{ old('name')}}" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" wire:model="price" name="price" placeholder="Product Price" value="{{ old('price')}}" class="form-control">
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <label for="sale_price" class="form-label">Sale Price</label>
                            <input type="number" wire:model="sale_price" name="sale_price" placeholder="Product Sale Price" value="{{ old('sale_price')}}" class="form-control">
                            @error('sale_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="qty" class="form-label">Quantity</label>
                            <input type="number" wire:model="qty" name="qty" placeholder="Product Quantity" value="{{ old('qty')}}" class="form-control">
                            @error('qty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" wire:model="image">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror                   
                    </div>

                    <div class="mt-5" wire:loading wire:target="image">
                        Uploading...
                        <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                    <div class="mt-3">
                    @if ($image)
                        Uploaded Image Preview:
                        <img width="20%" src="{{ $image->temporaryUrl() }}">
                    @endif
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                        <label class="form-label" for="details">Product Detail</label>
                        <textarea class="form-control" wire:model="details" value="{{ old('details')}}" name="details" placeholder="Enter Product Details"></textarea>
                        @error('details')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <input type="submit" name="submit" value="Add Product" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
