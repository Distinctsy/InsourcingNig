@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resume and User Details</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            </div>
                        </div>
                    @endif

                

    <form method="GET" action="{{ route('client.test') }}">
    <div class="form-group">
    <label for="exampleFormControlInput1">First Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="firstname">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Last Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="surname">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Previous Job</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="previous_job">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Years of experience</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>

  <form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Resume</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>

  <!-- <div class="form-group">
    <label for="exampleFormControlSelect2">Years of Experience</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe yourself</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

</form>
                    
                    <br/>

                    <a class="btn btn-primary" href="{{ route('client.test') }}">Proceed to take test</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection