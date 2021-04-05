<div>   
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="store" >
                    <div class=" form-group row">
                        <div class="col-sm 6">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" wire:model="name" class="form-control" id="name" value="{{ old('name')}}">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div><br>
                        <div class="col-sm 6">
                            <label for="phone_num>No telepon</label>
                            <input type="number" min="0" wire:model=phone_num" name="phone" class="form-control" id="phone_num" value="{{ old('phone')}}">
                            @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>                
                    <div class="form-group">
                        <label for="topic">Topic</label>
                        <input type="text" wire:model="topic" name="topic" class="form-control" id="topic" value="{{ old('topic')}}">
                        @error('topic') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" wire:model="description" name="description" class="form-control" id="description" value="{{ old('description')}}">
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div class="custom-file">
                            <input type="file" name="image" wire:model="image" class="custom-file-input" id="image" value="{{ old('image') }}">
                            <label class="custom-file-label" for="customFileLang"></label>                                                 
                        </div>
                        @error('image') <span class="text-danger">{{ $message }}</span>@enderror
                    </div><br>
                    
                    <input type="hidden" name="idConsult" wire:model="idConsult">
                    
                    <button type="submit" class="btn btn-success">Simpan</button><br><br>
                    </form>
                     <h6 class="btn btn-sm" wire:click="back">
                        Kembali
                    </h6>
                </div>
            </div>     
</div>
    