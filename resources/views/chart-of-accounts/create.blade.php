@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>@lang('app.createNewAccount')</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('chart-of-accounts.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="account_name">@lang('app.accountName')</label>
                                <input type="text" name="account_name" id="account_name" class="form-control @error('account_name') is-invalid @enderror" required>
                                @error('account_name')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            <div>
                            
                            <div class="form-group">
                                <label for="account_number">@lang('app.accountName')</label>
                                <input type="text" name="account_number" id="account_number" class="form-control @error('account_number') is-invalid @enderror" required>
                                @error('account_number')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            <div>
                            
                            <div class="form-group">
                                <label for="account_type">@lang('app.accountType')</label>
                                <select name="account_type" id="account_type" class="form-control @error('account_type') is-invalid @enderror" required>
                                    <option value="">@lang('app.selectAccountType')</option>
                                    @foreach ($accountTypes as $type => $subTypes)
                                        <optgroup label="{{ __('app.' . $type) }}">
                                            @foreach ($subTypes as $subType => $label)
                                                <option value="{{ $subType }}">{{ $label }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                                @error('account_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    @lang('app.createAccount')
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection