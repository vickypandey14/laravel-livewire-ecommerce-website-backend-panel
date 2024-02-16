<div>
   <div class="col-sm-12 mx-auto">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 mt-5 g-4">

            @foreach($products as $product)
                <div class="col">
                    <div class="card">
                        <img width="130" height="130" style="object-fit: contain;" src="{{ asset('storage/'. $product['image'] ) }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="text-center"><del>{{ $product['price']}}</del>&nbsp<span class="fs-5">{{ $product['sale_price']}}</span></h4>
                            <hr>
                            <div>
                            <p class="float-end">Quantity: {{ $product['qty']}}</p>
                            <h5 class="card-title">{{ $product['name']}}</h5>
                            </div> 
                            <p class="card-text">{{ $product['details']}}</p>
                            <div class="mt-3">
                                <button class="btn btn-success">Purchase</button>
                            </div>
                        </div>
                    </div>
                </div>          
            <!-- col -->
            @endforeach


        </div>
        <!-- row -->
   </div>
   <!-- container -->
</div>
</div>
