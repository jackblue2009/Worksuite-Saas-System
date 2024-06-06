@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>@lang('app.editAccount')</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('chart-of-accounts.update', $chartOfAccount->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="account_name">@lang('app.accountName')</label>
                                <input type="text" name="account_name" id="account_name" class="form-control @error('account_name') is-invalid @enderror" value="{{ $chartOfAccount->account_name }}" required>
                                @error('account_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="account_number">@lang('app.accountNumber')</label>
                                <input type="text" name="account_number" id="account_number" class="form-control @error('account_number') is-invalid @enderror" value="{{ $chartOfAccount->account_number }}" required>
                                @error('account_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="account_type">@lang('app.accountType')</label>
                                <select name="account_type" id="account_type" class="form-control @error('account_type') is-invalid @enderror" required>
                                    <option value="">@lang('app.selectAccountType')</option>
                                    @foreach ($accountTypes as $type => $subTypes)
                                        <optgroup label="{{ __('app.' . $type) }}">
                                            @foreach ($subTypes as $subType => $label)
                                                <option value="{{ $subType }}" {{ $chartOfAccount->account_sub_type == $subType ? 'selected' : '' }}>{{ $label }}</option>
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
                                    @lang('app.updateAccount')
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection