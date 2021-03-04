<div>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="users"></i></div>
                            About
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-n10">
        <div class="card mb-4">
            <div class="card-header"></div>
            @if ($isForm)
                @include('livewire.About.create_about')
            @endif

            @if ($isForm == false)
            <div class="card-body">
                <div>
                    <a wire:click.prevent="create" class="btn btn-outline-primary">add row</a><br><br>
                </div><br>
                 <div class="row">
                    <div class="col">
                        <select wire:model="paginate" name="" id="" class="form-control sm w-auto">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                        </select><br>
                    </div>
                    <div class="col-sm-3">
                        <input wire:model="search" type="text" class="form-control sm " placeholder="search">
                    </div>
                </div>
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $about as $item )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->description}}</td>
                                <td><img src="{{asset('storage/image/'.$item->image)}}" alt="" srcset="" width="50"></td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" wire:click="edit({{ $item->id }})">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark" wire:click="delete({{ $item->id }})">
                                        <i class="far fa-trash-alt"></i>
                                    </button> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$about->links()}}
            </div>
            @endif
        </div>
    </div>
</div>
