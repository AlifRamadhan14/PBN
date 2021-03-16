<div>
    @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
    @endif
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="slider"></i></div>
                            Slider
                        </h1>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-n10">
        <div class="card mb-4">
            
            @if ($isForm)
                @include('livewire.Slider.create_slide')
            @endif

            @if ($isForm == false)
            <div class="card-body">
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
                            @foreach( $slide as $item )
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td><img src="{{asset('storage/image/'.$item->image)}}" alt="" srcset="" width="50"></td>
                                    <td>
                                        
                                        <button class="btn btn-success" wire:click="edit({{ $item->id }})">
                                            <i class="far fa-edit"></i>
                                        </button>                          
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>    
            </div>
            @endif
        </div>
    </div>
</div>