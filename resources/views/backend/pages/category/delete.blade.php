<!-- start modal  -->
<div class="modal fade" id="deleteModal" data-backdrop="static" aria-hidden="true" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header rounded card-danger card-outline">
                <h6 class="modal-title">
                    <i class="fas fa-question-circle"></i>
                    Are You Sure To Delete
                    <i class="fas fa-question"></i>
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <div class="border border-info shadow rounded text-wrap text-center p-2">
                        <b style="vertical-align: middle;" id="deletename"></b>
                    </div>
                </div>
            </div>

            <div class="modal-footer justify-content-between">
                <form id="deleteaction" action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="deleteBtn" class="btn btn-sm btn-success">
                        <i class="fas fa-trash"></i>
                        <b>Delete</b>
                    </button>
                </form>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">
                    <i class="fas fa-times"></i>
                    <b>Cancel</b>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#deleteModal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget);

            const deletename   = button.data('deletename');
            const deleteaction = button.data('deleteaction');

            var modal = $(this);
            modal.find('.modal-body #deletename').html(deletename);
            $("#deleteaction").attr("action", deleteaction);
        });
    });
</script>

<script type="text/javascript">
    document.getElementById('deleteBtn').addEventListener('click', (function(clicked){
        return function(){
            if(!clicked){
                var last = this.innerHTML;
                this.innerHTML = '<span class="spinner-grow spinner-grow-sm text-warning" role="status" aria-hidden="true"></span><b> Deleting</b>';
                clicked = true;
                setTimeout(function(){
                    this.innerHTML = last;
                    clicked = false;
                }.bind(this), 3000);
            }
        };
    })(false), this);
</script>
