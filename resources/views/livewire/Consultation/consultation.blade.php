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
                            <div class="page-header-icon"><i class="fas fa-phone-alt"></i></div>
                            Consultation
                        </h1>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-n10">
        <div class="card mb-4">
            @if ($isForm)
                @include('livewire.Consultation.create_consultation')
            @endif

            @if ($isForm == false)        
            <div class="card-body">
                
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
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Topic</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $consult as $item )
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><a href="https://wa.me/+62{{$item->phone}}">https://wa.me/+62{{$item->phone}}</a> </td>
                                    <td>{{$item->topic}}</td>
                                    <td>{{$item->description}}</td>
                                    <td><img src="{{asset('storage/image/'.$item->image)}}" alt="" srcset="" width="50"></td>
                                    <td>                                                           
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
                {{$consult->links()}}
            </div>
            @endif
        </div>
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
