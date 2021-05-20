@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Testimonials</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Testimonial</td>
          <td>Email</td>
          <td>PostingDate</td>
          <td>Status</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($testimonials as $testimonial)
        <tr>
            <td>{{$testimonial->id}}</td>
            <td>{{$testimonial->testimonial}}</td>
            <td>{{$testimonial->email_id}}</td>
            <td>{{$testimonial->status}}</td>
            <td>{{$testimonial->posting_date}}</td>
            <td>
                <a href="{{ route('testimonials.edit',$testimonial->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('testimonials.destroy', $testimonial->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection