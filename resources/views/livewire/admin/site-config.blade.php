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
            <div class="card card-primary">
                <div class="text-center card-header">
                    <h2 class="">Site Configration</h2>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form wire:submit.prevent="test"> 
                    <div class="card-body row">
                        <div class="form-group col-6">
                            <label for="title">Title <sup class="text-danger">*</sup> </label>
                            <input type="text" wire:model.defer="state.title" class="form-control" id="title" placeholder="Enter Title Here">
                        </div>
                        <div class="form-group col-6">
                            <label for="phone">Phone <sup class="text-danger">*</sup> </label>
                            <input type="text" wire:model.defer="state.phone" class="form-control" id="phone" placeholder="Enter Phone Here">
                        </div>
                        <div class="form-group col-6">
                            <label for="logo">Logo <sup class="text-danger">*</sup> </label>
                            <input type="file" wire:model.defer="state.logo" class="form-control-file" id="logo">
                        </div>
                        <div class="form-group col-6">
                            <label for="favicon">Favicon <sup class="text-danger">*</sup> </label>
                            <input type="text" wire:model.defer="state.favicon" class="form-control-file" id="favicon">
                        </div>
                        <div class="form-group col-6">
                            <label for="description">Description<sup class="text-danger">*</sup></label>
                            <textarea wire:model.defer="state.description" id="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group col-6">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
            
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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