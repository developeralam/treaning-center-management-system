<div>
    <x-loading-indecator />
    @section('title', 'About Us')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">About Us</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="text-center card-header">
                    <h2 class="">About Us</h2>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form wire:submit.prevent="store">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="description">Description<sup class="text-danger">*</sup></label>
                            <x-editor id="description" model="state.description"/>
                        </div>

                        <div class="form-group">
                            <label for="description">test<sup class="text-danger">*</sup></label>
                            <x-editor id="test" model="state.test" />
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
