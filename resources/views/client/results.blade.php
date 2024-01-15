@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Results of your test</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    <p>{{ session('status') }}</p>

                                    <a href="{{ route('client.test') }}" class="btn btn-primary">Start test again</a>
                                </div>
                            </div>
                        </div>
                    @endif

        
           @if($result->total_points > 4)
           <p>Total points: {{ $result->total_points }} points</p>
          Congratulations you got the job <br>
           <a href="{{ route('client.results.send', $result->id) }}" class="btn btn-primary">GET EMPLOYMENT LETTER BY EMAIL</a>

         @else
        <p>Total points: {{ $result->total_points }} points</p>
        
        <p>Unfortunately your resume and your score is not sufficient to get this job.</p>
        @endif

                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection