<!-- start modal  -->
<div class="modal fade" aria-hidden="true" id="editModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editaction" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header rounded card-success card-outline">
                    <h5 class="modal-title"><i class="fas fa-edit"></i> Update Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="card border border-success shadow p-2 mt-2">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="editname">Category Name:</label>
                                    <div class="input-group border border-success rounded">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input
                                            class="form-control border border-success"
                                            type="text"
                                            name="category_name"
                                            id="editname"
                                            placeholder="Enter Category Name Here"
                                            oninvalid="this.setCustomValidity('Enter Category Name Here')"
                                            oninput="this.setCustomValidity('')"
                                            required
                                        >
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="submit" id="updateBtn" class="btn btn-sm btn-success">
                            <i class="fas fa-edit"></i>
                            <b>Update</b>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">
                            <i class="fas fa-times"></i>
                            <b>Cancel</b>
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#editModal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget);

            const editname    = button.data('editname');
            const editaction  = button.data('editaction');

            var modal = $(this);
            modal.find('.modal-body #editname').val(editname);
            $("#editaction").attr("action", editaction);
        });
    });
</script>

<script type="text/javascript">
    document.getElementById('updateBtn').addEventListener('click', (function(clicked){
        return function(){
            if(!clicked){
                var last = this.innerHTML;
                this.innerHTML = '<span class="spinner-grow spinner-grow-sm text-warning" role="status" aria-hidden="true"></span><b> Updating</b>';
                clicked = true;
                setTimeout(function(){
                    this.innerHTML = last;
                    clicked = false;
                }.bind(this), 3000);
            }
        };
    })(false), this);
</script>
