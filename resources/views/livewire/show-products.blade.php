<div>
   <div class="col-sm-12 mt-5 mx-auto">
    <div class="container">
        <div class="row">
                @if(! is_null($product_alert))
                    <div class="alert alert-success">
                        {{ $product_alert }}
                    </div>
                @endif

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header d-flex justify-content-between align-items-center">
                            <div>
                            All Products
                            </div>
                            <a href="{{ route('add-products')}}" class="btn btn-success"><i class="bi bi-plus"></i>Add Product</a>
                        </h4>
                        <input class="form-control me-2" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for products..">
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-dark table-striped" wire:poll.keep-alive.10000ms>
                            <thead>
                                <tr>
                                    <th><h4>Product Name</h4></th>
                                    <th><h4>Price</h4></th>
                                    <th><h4>Sale Price</h4></th>
                                    <th><h4>Quantity</h4></th>
                                    <th><h4>Image</h4></th>
                                    <th class="text-center"><h4>Product Detail</h4></th>
                                    <th colspan="2" class="text-center"><h4>Action</h4></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr x-data>
                                    <td>{{ $product['name']}}</td>
                                    <td>{{ $product['price']}}</td>
                                    <td>{{ $product['sale_price']}}</td>
                                    <td>{{ $product['qty']}}</td>
                                    <td>
                                        <img class="img-thumbnail"
                                    style="width:70px; height:70px; object-fit:contain;" 
                                    src="{{ asset('storage/'. $product['image'] ) }}"></td>
                                    <td>{{ $product['details']}}</td>

                                    <td><button type="button" class="btn btn-danger"
                                    @click="confirm(`Are you sure you want to delete this product?`) ? $wire.delete_product({{ $product['id'] }}) : ''">Delete</button>                                    
                                    </td>
                                    <td><a href="{{ route('edit-product', ['id'=>$product['id']])}}" class="btn btn-primary">Edit</a></td>
                                </tr>
                            @endforeach

                            {{ $products->links() }}
                            </tbody>
                    </table>
              </div>
          </div>
       </div>
   </div>
</div>
