@extends('front.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="/instrukcje" method="post">
                    <div class="form-group">
                        <label for="email">Wpisz swój adres e-mail aby uzyskać dostęp do instrukcji</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="button">Wchodzę</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection