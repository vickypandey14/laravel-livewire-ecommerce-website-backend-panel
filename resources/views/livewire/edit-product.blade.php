<div>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                 <form wire:submit.prevent="update_product" class="border m-5 p-5 rounded-2">
                    <h2 class="text-center">Edit Product</h2>

                    <div class="row">
                    <div class="col">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" wire:model="name" name="name" placeholder="Product Name" class="form-control">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" wire:model="price" name="price" placeholder="Product Price" class="form-control">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mt-3">
                    <div class="col">
                        <label for="sale_price" class="form-label">Sale Price</label>
                        <input type="number" wire:model="sale_price" name="sale_price" placeholder="Product Sale Price" class="form-control">
                        @error('sale_price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="number" wire:model="qty" name="qty" placeholder="Product Quantity" class="form-control">
                        @error('qty')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mt-3">
                    <div class="col">
                    <label class="form-label" for="details">Product Detail</label>
                    <textarea class="form-control" wire:model="details" name="details" placeholder="Enter Product Details"></textarea>
                    @error('details')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    </div>

                    <div class="mt-4 text-center">
                    <input type="submit" class="btn btn-primary btn-block" value="Update Product">&nbsp
                    <a href="{{ route('show-products')}}" class="btn btn-warning">Cancel</a>
                    </div>
                 </form>
                </div>

                <!-- product image form -->
                <div class="col-sm-6">
                   <form wire:submit.prevent="product_image" class="border m-5 p-5 rounded-2">                   
                        <h2 class="text-center">Product Image</h2>
                            <div class="mt-5 text-center">
                             <img width="30%" height="30%" src="{{ asset('storage/'.$old_image) }}" alt="">
                                <input type="file" class="mt-3 form-control" wire:model="image">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror                   
                            </div>

                            <div class="mt-3">
                            @if ($image)
                                Photo Preview:
                                <img width="60%" src="{{ $image->temporaryUrl() }}">
                            @endif
                            </div>

                            <div class="mt-4 text-center">
                                <input type="submit" value="Change Image" class="btn btn-primary">
                            </div>

                            <div wire:loading wire:target="image">
                                Uploading...
                                <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
    </div>
</div>
