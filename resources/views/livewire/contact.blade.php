<div>
    <div class="mt-3">
        <h1 class="text-center">
            Contact - Livewire
        </h1>
    </div>
    <div class="col-sm-4 mx-auto">
    <div class="container">
        <div class="row justify-content-center">
            <form wire:submit.prevent="contact_message" class="border p-5 rounded-2">
                @if(! is_null( $message ))
                        <div class="alert alert-success text-center"> 
                            {{ $message }}                   
                        </div>
                @endif
                <!-- name -->
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" wire:model="name" name="name" placeholder="Enter Name" value="{{ old('name')}}" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- email -->
                <div class="mb-3">
                    <label class="form-label" for="email">E-mail</label>
                    <input type="text" wire:model="email" value="{{ old('email')}}" name="email" placeholder="Enter E-mail" class="form-control">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- subject -->
                <div class="mb-3">
                    <label class="form-label" for="subject">Subject</label>
                    <input type="text" wire:model="subject" value="{{ old('subject')}}" name="subject" placeholder="Enter Subject" class="form-control">
                    @error('subject')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- message -->
                <div class="mb-3">
                    <label class="form-label" for="textmessage">Message</label>
                    <textarea class="form-control" wire:model="textmessage" value="{{ old('textmessage')}}" name="textmessage" placeholder="Enter Message"></textarea>
                    @error('textmessage')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- submit -->
                <div class="text-center">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
