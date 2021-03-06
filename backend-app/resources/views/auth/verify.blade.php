@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите Ваш E-Mail') }}</div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Ссылка для подтверждения адреса была выслана на Ваш почтовый ящик.') }}
                        </div>
                    @endif
                    {{ __('Перед тем, как продолжить, пожалуйста, проверьте Ваш почтовый ящик на наличие ссылки для подтверждения адреса.') }}
                    {{ __('Если Вы не получили письмо, ') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите, чтобы выслать еще одно') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
