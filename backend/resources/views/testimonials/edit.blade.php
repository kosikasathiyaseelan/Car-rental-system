@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Feedback</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('testimonials.update', $testimonial->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="testimonial">Testimonial:</label>
                <input type="text" class="form-control" name="testimonial" value={{ $testimonial->testimonial}} />
            </div>

            <div class="form-group">
                <label for="email_id">Email:</label>
                <input type="text" class="form-control" name="email_id" value={{ $testimonial->email_id}} />
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" name="status" value={{ $testimonial->status}} />
            </div>
            <div class="form-group">
                <label for="posting_date">Postingdate:</label>
                <input type="date" class="form-control" name="posting_date" value={{ $testimonial->posting_date }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection