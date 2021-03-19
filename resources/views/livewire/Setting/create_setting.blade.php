<div> 
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="store" >
                    <div class="form-group">
                        <label for="image">Logo</label>
                        <div class="custom-file">
                            <input type="file" name="logo" wire:model="logo" class="custom-file-input" id="customFileLang" value="{{ old('logo')}}">
                            <label class="custom-file-label" for="customFileLang"></label>                          
                        </div>
                        @error('logo') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="web_name">web_name</label>
                            <input type="text" name="web_name" wire:model="web_name" class="form-control" id="web_name" value="{{ old('web_name')}}">
                            @error('web_name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col">
                            <label for="web_desc">Web Desc</label>
                            <input type="text" name="web_desc" wire:model="web_desc" class="form-control" id="web_desc" value="{{ old('web_desc')}}">
                            @error('web_desc') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>                                
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="facebook">Facebook</label>
                            <input type="text" name="facebook" wire:model="facebook" class="form-control" id="facebook" value="{{ old('facebook')}}">
                            @error('facebook') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col">
                            <label for="instagram">Instagram</label>
                            <input type="text" name="instagram" wire:model="instagram" class="form-control" id="instagram" value="{{ old('instagram')}}">
                            @error('instagram') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="twitter">Twitter</label>
                            <input type="text" name="twitter" wire:model="twitter" class="form-control" id="twitter" value="{{ old('twitter')}}">
                            @error('twitter') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col">
                            <label for="linkedln">Linkedln</label>
                            <input type="text" name="linkedln" wire:model="linkedln" class="form-control" id="linkedln" value="{{ old('linkedln')}}">
                            @error('linkedln') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>                   
                    <div class="form-group row">
                        <div class="col">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" wire:model="phone" class="form-control" id="phone" value="{{ old('phone')}}">
                            @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col">
                            <label for="whatsapp">Whatsapp</label>
                            <input type="tel" name="whatsapp" wire:model="whatsapp" class="form-control" id="whatsapp" value="{{ old('whatsapp')}}">
                            @error('whatsapp') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>                                        
                    <input type="hidden" name="idSetting" wire:model="idSetting">                              
                    <button type="submit" class="btn btn-success" wire:click="store">Simpan</button><br><br>
                    </form>
                    <h6 class="btn btn-sm" wire:click="back">
                        Kembali
                    </h6>
                </div>
            </div> 
</div>
    