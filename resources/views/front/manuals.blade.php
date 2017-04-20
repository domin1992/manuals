@extends('front.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Moje instrukcje</h2>
                <table class="table">
                    <tbody>
                        @forelse($manuals as $manual)
                            <tr>
                                <td>
                                    <a href="{{ $manual->link() }}">{{ $manual->name }}</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>Brak dostępnych instrukcji</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection