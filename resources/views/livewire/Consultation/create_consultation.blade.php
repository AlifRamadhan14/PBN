<div>
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="store" >
                        <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" name="title" wire:model="name" class="form-control" id="title" value="{{ old('title')}}">
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="description">phone</label>
                        <input type="tel" wire:model=phone name="description" class="form-control" id="description" value="{{ old('description')}}">
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Topic</label>
                        <input type="text" wire:model="topic" name="description" class="form-control" id="description" value="{{ old('description')}}">
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" wire:model="description" name="description" class="form-control" id="description" value="{{ old('description')}}">
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" wire:model="image" class="customFile form-control" id="image" value="{{ old('image') }}">
                        @error('image') <span class="text-danger">{{ $message }}</span>@enderror
                    </div><br>
                    <input type="hidden" name="idConsult" wire:model="idConsult">
                    <button class="btn btn-warning" wire:click="back">
                        Kembali
                    </button>
                    <button type="submit" class="btn btn-success">Simpan</button><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
    