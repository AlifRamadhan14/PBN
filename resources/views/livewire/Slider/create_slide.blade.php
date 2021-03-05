<div>
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="store" >
                        <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" wire:model="title" class="form-control" id="title" >
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" wire:model="description" name="description" class="form-control" id="description" >
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" wire:model="image" class="form-control" id="image" >
                        @error('image') <span class="text-danger">{{ $message }}</span>@enderror
                    </div><br>
                    <input type="hidden" name="idSlide" wire:model="idSlide">
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
    