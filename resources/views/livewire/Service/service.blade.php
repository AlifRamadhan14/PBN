<div>
    @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
    @endif
    <header class="page-header page-header-dark bg-danger pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-user-cog"></i></div>
                            Service
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-n10">
        
            @if ($isForm)
                @include('livewire.Service.create_service')
            @endif

            @if ($isForm == false)
        <div class="card mb-4">
            <div class="card-body">
                <div>
                    <a wire:click.prevent="create" class="btn btn-outline-danger">add row</a><br><br>
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
                <div class="datatable">
                    <table class="table table-bordered table-hover text-center" width="100%" cellspacing="0">
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
                            @foreach( $service as $item )
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td><img src="{{asset('storage/image/'.$item->image)}}" alt="" srcset="" width="50"></td>
                                    <td>
                                        
                                        <button class="btn btn-success" wire:click="edit({{ $item->id }})">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal{{$item->id}}">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Anda yakin menghapus data ini ? </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>                
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger" wire:click="delete({{ $item->id }})">
                                                Delete
                                            </button>  
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{$service->links()}}
            </div>
        </div>
        @endif        
    </div>
    @push('scripts')
        <script>
            window.livewire.on('confirm', () => {
                $('#exampleModal').modal('hide');
                $('.modal-backdrop').hide();
            });

        </script>
    @endpush
</div>
