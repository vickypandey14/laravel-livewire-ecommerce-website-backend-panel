<div>

<img 
width="20%"
src="{{ asset('storage/photos/lqzsoH8ldgni6yjSLMdTKtv7IeTrloNx2WM2c4vQ.jpg') }}" alt="">

<div class="row">
    <div class="col-sm-4 mx-auto">
        <div class="card">
            <div class="card-body">
                <form class="p-2" wire:submit.prevent="save">
                    <div class="mb-2">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" wire:model="photo">                    
                        @error('photo') 
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror                        
                    </div>
                    

                    @if ($photo)
                        Photo Preview:
                        <img width="20%" src="{{ $photo->temporaryUrl() }}">
                    @endif


                    <div class="mb-2">
                        <input type="submit" value="Upload" class="btn btn-primary">
                    </div>

                    <div wire:loading wire:target="photo">
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


    
</div>
