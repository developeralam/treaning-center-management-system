<div>
    <x-loading-indecator />
    @section('title', 'Year')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">Year</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <button data-toggle="modal" wire:click.prevent="addYear" class="float-right btn btn-dark">Add Year</button>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card card-dark">
                <div class="text-center card-header">
                    <h2 class="">Year</h2>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>SI</th>
                                <th class="text-center">Year</th>
                                <th class="text-center" >Status</th>
                                <th width="15%" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($years as $year)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td class="text-center">{{$year->year}}</td>
                                <td class="text-center">{!! $year->status !!}</td>
                                <td class="text-center"><button class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button> | <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-danger">No Data Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="yearModal" tabindex="-1" wire:ignore>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add Year</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="store">
            <div class="modal-body">
               <div class="form-group">
                   <label for="year">Year<sup class="text-danger">*</sup></label>
                   <input type="number" wire:model.defer="state.year" class="form-control @error('year') is-invalid @enderror" id="year" placeholder="Enter Year Here">
                   @error('year')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                   @enderror
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

</div>