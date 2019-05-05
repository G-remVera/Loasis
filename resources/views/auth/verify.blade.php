@extends('connexion.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="log_register">
            <div class="card">
                <div class="card-header">{{ __('Vérifiez votre adresse mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre compte mail pour un lien de vérification.') }}
                    {{ __('Si vous n\'avez pas reçu le mail') }}, <a href="{{ route('verification.resend') }}">{{ __('cliquez ici pour en demander un autre') }}</a>.
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
