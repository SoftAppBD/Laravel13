@extends('backend.layouts.app')
@section('title', 'Add Category')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Category</li>
                    </ol>
                </div>
            </div>

            <div class="card shadow-lg rounded card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title"><i class="far fa-list-alt"></i> <b>Add Category</b></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-sm btn-outline-danger" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body table-responsive">
                    <div class="row">
                        <!-- Create -->
                        <div class="col-md-4">
                            <div class="card border border-info p-2">
                                <form action="{{ route('createCategory') }}" method="post">
                                    @csrf
                                    <div class="form-group mt-1">
                                        <label for="category_name">Category Name</label>
                                        <div class="border border-info rounded text-wrap text-center">
                                            <input class="form-control" type="text" name="category_name"
                                                id="category_name" placeholder="Enter Category Name Here"
                                                oninvalid="this.setCustomValidity('Please write Category Name here')"
                                                oninput="this.setCustomValidity('')" required>
                                        </div>
                                    </div>

                                    <center>
                                        <button type="submit" id="createBtn" class="btn btn-info shadow btn-block">
                                            <b>
                                                <i class="fas fa-plus-square"></i>
                                                &nbsp; Create
                                            </b>
                                        </button>
                                    </center>
                                </form>
                            </div>
                        </div>

                        <!-- List -->
                        <div class="col-md-8 table-responsive">
                            <table id="table" class="table table-striped table-hover projects">
                                <thead>
                                    <tr class="text-center bg-info">
                                        <th style="width: 5%">#</th>
                                        <th style="width: 60%" class="text-left">Category</th>
                                        <th style="width: 5%" class="text-left">Status</th>
                                        <th style="width: 30%" class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody id="tableBodyContents">
                                    @foreach ($categories as $key => $data)
                                        <tr class="tableRow" data-id="{{ $data->id }}">
                                            <td class="text-center"><b>{{ ++$key }}.</b></td>

                                            <td>
                                                <small><b>{{ $data->category_name }}</b></small>
                                            </td>

                                            <td class="project-state text-center">
                                                <div class="input-group">
                                                    <label class="switch">
                                                        <input data-id="{{ $data->id }}" class="toggle-class"
                                                            type="checkbox"
                                                            {{ $data->status === 'active' ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </td>

                                            <td class="project-actions text-center">
                                                <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal"
                                                    data-editname="{{ $data->category_name }}"
                                                    data-editaction="{{ route('updateCategory', $data->id) }}">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>

                                                <a class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#deleteModal" data-deletename="{{ $data->category_name }}"
                                                    data-deleteaction="{{ route('deleteCategory', $data->id) }}">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('backend.pages.category.delete')
    @include('backend.pages.category.edit')

    {{-- Status Change --}}
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') === true ? 'active' : 'inactive';
                var data_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/category',
                    data: {
                        'status': status,
                        'data_id': data_id
                    },
                    success: function(data) {
                        if (window.Swal) {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'success',
                                title: data.message,
                                showConfirmButton: false,
                                timer: 1800,
                                timerProgressBar: true
                            });
                        }
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        document.getElementById('createBtn').addEventListener('click', (function(clicked) {
            return function() {
                if (!clicked) {
                    var last = this.innerHTML;
                    this.innerHTML =
                        '<span class="spinner-grow spinner-grow-sm text-warning" role="status" aria-hidden="true"></span><b> Creating</b>';
                    clicked = true;
                    setTimeout(function() {
                        this.innerHTML = last;
                        clicked = false;
                    }.bind(this), 3000);
                }
            };
        })(false), this);
    </script>

@endsection

@section('script')
    <script>
        $('#table').DataTable({
            "pageLength": 10,
            "columnDefs": [{
                "orderable": false,
                "targets": [2]
            }]
        });
    </script>
@endsection
