@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>@lang('app.chartOfAccounts')</h4>
                            <a href="{{ route('chart-of-accounts.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> @lang('app.newAccount')
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>@lang('app.accountName')</th>
                                    <th>@lang('app.accountNumber')</th>
                                    <th>@lang('app.accountType')</th>
                                    <th>@lang('app.accountSubType')</th>
                                    <th>@lang('app.actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chartOfAccounts as $acc)
                                    <tr>
                                        <td>{{ $acc->account_name }}</td>
                                        <td>{{ $acc->account_number }}</td>
                                        <td>{{ $acc->account_type }}</td>
                                        <td>{{ $acc->account_sub_type }}</td>
                                        <td>
                                            <a href="{{ route('chart-of-accounts.show', $acc->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('chart-of-accounts.edit', $acc->id) }}" class="btn btn-success btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('chart-of-accounts.destroy'), $acc->id }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('@lang('app.confirmDelete')')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection