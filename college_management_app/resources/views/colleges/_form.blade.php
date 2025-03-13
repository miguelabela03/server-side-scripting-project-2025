<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label">College Name</label>
            <div class="col-md-9">
                <input type="text" name="name" id="name" class="form-control is-invalid">
                <div class="invalid-feedback">
                    Please choose a college name.
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-md-3 col-form-label">Address</label>
            <div class="col-md-9">
                <textarea name="address" id="address" rows="3"
                    class="form-control"></textarea>
            </div>
        </div>
        <hr>
        <div class="form-group row mb-0">
            <div class="col-md-6">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('colleges.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>