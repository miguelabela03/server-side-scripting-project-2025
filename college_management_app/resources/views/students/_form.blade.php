<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label">Student Name</label>
            <div class="col-md-9">
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-3 col-form-label">Email</label>
            <div class="col-md-9">
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-3 col-form-label">Phone</label>
            <div class="col-md-9">
                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror">

                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="dob" class="col-md-3 col-form-label">Date of Birth</label>
            <div class="col-md-9">
                <input type="date" name="dob" id="dob" value="{{ old('dob') }}" class="form-control @error('dob') is-invalid @enderror">

                @error('dob')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="college_id" class="col-md-3 col-form-label">College Name</label>
            <div class="col-md-9">
                <select name="college_id" id="college_id" class="form-control @error('college_id') is-invalid @enderror">
                    @foreach ($colleges as $id => $name)
                        <option {{ $id == old('college_id') ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>

                @error('college_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <hr>
        <div class="form-group row mb-0">
            <div class="col-md-6">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>