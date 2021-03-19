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
                            <div class="page-header-icon"><i data-feather="tool"></i></div>
                            Setting
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-n10">        
            @if ($isForm)
                @include('livewire.Setting.create_setting')
            @endif

            @if ($isForm == false)
        <div class="card mb-4">    
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover text-center" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Logo</th>
                                <th>Web Name</th>
                                <th>Web Desc</th>
                                <th>Facebook</th>
                                <th>Instagram</th>
                                <th>Twitter</th>
                                <th>Linkedln</th>
                                <th>Phone</th>
                                <th>Whatsapp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $setting as $item )
                                <tr >
                                    <td>{{$loop->iteration}}</td>                                
                                    <td><img src="{{asset('storage/image/'.$item->logo)}}" alt="" srcset="" width="50"></td>
                                    <td>{{$item->web_name}}</td>
                                    <td>{{$item->web_desc}}</td>
                                    <td>{{$item->facebook}}</td>
                                    <td>{{$item->instagram}}</td>
                                    <td>{{$item->twitter}}</td>
                                    <td>{{$item->linkedln}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->whatsapp}}</td>
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
        </div>               
        @endif                    
    </div>
</div>
