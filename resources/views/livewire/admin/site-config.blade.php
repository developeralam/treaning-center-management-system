<div> 
    <x-loading-indecator />
    @section('title', 'Site Config')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">Site Config</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Site Config</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card card-dark">
                <div class="text-center card-header">
                    <h2 class="">Site Configration</h2>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form wire:submit.prevent="store" enctype="multipart/form-data"> 
                    <input type="hidden" wire:model.defer="state.id">
                    <div class="card-body row">
                        <div class="form-group col-6">
                            <label for="title">Title <sup class="text-danger">*</sup> </label>
                            <input type="text" wire:model.defer="state.title" class="form-control" id="title" placeholder="Enter Title Here">
                            @error('title')
                                <div class="invalid-feedback">
                                    <span>{{$message}}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="phone">Phone <sup class="text-danger">*</sup> </label>
                            <input type="text" wire:model.defer="state.phone" class="form-control" id="phone" placeholder="Enter Phone Here">
                        </div>
                        <div class="form-group col-6">
                            <label for="logo">Logo <sup class="text-danger">*</sup> </label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" wire:model.defer="logo" class="custom-file-input" id="logo">
                                    <label class="custom-file-label" for="logo">
                                        @if($logo)
                                            {{$logo->getClientOriginalName()}}
                                        @else
                                            Choose Logo
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <span class="text-muted form-text">Logo Should Be Height:50px Width: 120px</span>
                            @if($logo)
                                <img src="{{$logo->temporaryUrl()}}" class="mt-2" style="width:80px; height=80px;" alt="">
                            @else
                                <img src="{{$state['logourl']}}" class="mt-2" style="width:80px; height=80px;" alt="">
                            @endif
                        </div>
                        <div class="form-group col-6">
                            <label for="favicon">Favicon <sup class="text-danger">*</sup> </label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" wire:model.defer="favicon" class="custom-file-input" id="favicon">
                                    <label class="custom-file-label" for="favicon">
                                        @if($favicon)
                                            {{$favicon->getClientOriginalName()}}
                                        @else
                                        Choose Favicon
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <span class="text-muted form-text">Favicon Should Be Height:64px Width: 64px</span>
                            @if($favicon)
                                <img src="{{$favicon->temporaryUrl()}}" class="mt-2" style="width:80px; height=80px;" alt="">
                            @else
                                <img src="{{$state['faviconurl']}}" class="mt-2" style="width:80px; height=80px;" alt="">
                            @endif
                        </div>
                        <div class="form-group col-6" wire:ignore>
                            <label for="description">Description<sup class="text-danger">*</sup></label>
                            <x-editor id="description" model="state.description" value="{{$state['description']}}"/>
                        </div>
                        <div class="form-group col-6" wire:ignore>
                            <label for="address">Address<sup class="text-danger">*</sup></label>
                            <x-editor id="address" model="state.address" value="{{$state['address']}}" />
                        </div>
                    </div>
                    <!-- /.card-body -->
            
                    <div class="card-footer">
                        <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('js')
{{-- <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );
        
        $("#submit").click(function(){
            var element = document.getElementById('val');
            element.dispatchEvent(new Event('input'));
            var data = $(".ck-content").html();
            $("#val").val(data);
        });
</script> --}}
@endpush