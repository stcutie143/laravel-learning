@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.expense.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.expenses.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                <label for="category">{{ trans('cruds.expense.fields.category') }}</label>
                <select name="category_id" id="category" class="form-control select2">
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" {{ (isset($expense) && $expense->category ? $expense->category->id : old('category_id')) == $id ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                </select>
                @if($errors->has('category_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('category_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
                <label for="amount">{{ trans('cruds.expense.fields.amount') }}*</label>
                <input type="number" id="amount" name="amount" class="form-control" value="{{ old('amount', isset($expense) ? $expense->amount : '') }}" step="0.01" required>
                @if($errors->has('amount'))
                    <em class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.expense.fields.amount_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('expense_name') ? 'has-error' : '' }}">
                <label for="expense_name">{{ trans('cruds.expense.fields.expense_name') }}*</label>
                <input type="text" id="expense_name" name="expense_name" class="form-control" value="{{ old('expense_name', isset($expense) ? $expense->expense_name : '') }}" required>
                @if($errors->has('expense_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('expense_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.expense.fields.expense_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('desc') ? 'has-error' : '' }}">
                <label for="desc">{{ trans('cruds.expense.fields.desc') }}</label>
                <textarea id="desc" name="desc" class="form-control ">{{ old('desc', isset($expense) ? $expense->desc : '') }}</textarea>
                @if($errors->has('desc'))
                    <em class="invalid-feedback">
                        {{ $errors->first('desc') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.expense.fields.desc_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('expense_date') ? 'has-error' : '' }}">
                <label for="expense_date">{{ trans('cruds.expense.fields.expense_date') }}*</label>
                <input type="text" id="expense_date" name="expense_date" class="form-control date" value="{{ old('expense_date', isset($expense) ? $expense->expense_date : '') }}" required>
                @if($errors->has('expense_date'))
                    <em class="invalid-feedback">
                        {{ $errors->first('expense_date') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.expense.fields.expense_date_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection