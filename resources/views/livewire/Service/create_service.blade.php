<div>
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="store" >
                        <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" wire:model="title" class="form-control" id="title" value="{{ old('title')}}">
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                     <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" wire:model="description" name="description" class="form-control" id="description" value="{{ old('description')}}" >
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div class="custom-file">
                            <input type="file" name="image" wire:model="image" class="custom-file-input" id="customFileLang" value="{{ old('image')}}">
                            <label class="custom-file-label" for="customFileLang"></label>                          
                        </div>
                        @error('image') <span class="text-danger">{{ $message }}</span>@enderror
                    </div><br>
                    <input type="hidden" name="idService" wire:model="idService">                              
                    <button type="submit" class="btn btn-success">Simpan</button><br><br>
                    </form>
                    <h6 class="btn btn-sm" wire:click="back">
                        Kembali
                    </h6>
                </div>
            </div>
        </div>
    </div> 
</div>
    