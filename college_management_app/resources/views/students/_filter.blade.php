<div class="card-body">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <select class="custom-select">
                    <option value="" selected>All Colleges</option>
                    @foreach($colleges as $id=>$name)
                        <option value={{ $id }}>{{ $name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>