@extends('layouts.admin')
@section('content')

    <div class="card shade mb-4">

        <div class="card-heard py-3 d-flex mx-2">

            <h6 class="m-0 font-weight-bold text-white btn btn-primary">Create Country </h6>

            <div class="ml-auto">

                <a href="{{route('admin.countries.index')}}" class="btn btn-primary">

                    <span class="icon text-white-50"> <i class="fa fa-list"></i> </span>

                    <span class="text">All Country</span>

                </a>
            </div>
        </div>


    </div>

    <div class="card-body">
        <form action="{{route('admin.countries.store')}}" method="post" enctype="multipart/form-data">

            @csrf
            @method('post')

            <div class="row">


                <div class="col-6">
                    <div class="form-group">
                        <label for="name"> Name </label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control">
                        @error('name')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>

                <div class="col-4">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value=""> Select Status</option>

                        <option value="1" {{old('status') == 1 ? 'selected' : ''}}> Active</option>
                        <option value="0" {{old('status') == 0? 'selected' : ''}}>In Active</option>

                    </select>
                    @error('status')<span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class=" col-12 form-group pt-4">

                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Create
                        Country
                    </button>

                </div>


            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>

        $(function () {
            $("#category_images").fileinput({

                theme: "fa5",
                maxFileCount: 1,
                allowedFileTypes: ['image'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
            });
        });

    </script>
@endpush
