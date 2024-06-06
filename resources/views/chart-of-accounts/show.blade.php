@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>@lang('app.accountDetails')</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>@lang('app.accountName')</label>
                            <p>{{ $chartOfAccount->account_name }}</p>
                        </div>
                        <div class="form-group">
                            <label>@lang('app.accountNumber')</label>
                            <p>{{ $chartOfAccount->account_number }}</p>
                        </div>
                        <div class="form-group">
                            <label>@lang('app.accountType')</label>
                            <p>{{ __('app.' . $chartOfAccount->account_type) }}</p>
                        </div>
                        <div class="form-group">
                            <label>@lang('app.accountSubType')</label>
                            <p>{{ __('app.' . $chartOfAccount->account_sub_type) }}</p>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('chart-of-accounts.edit', $chartOfAccount->id) }}" class="btn btn-primary">
                                <i class="fas fa-edit"></i> @lang('app.edit')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection