@extends('layouts.app')

@section('title', 'Groups')

    @section('content')
        
    <form action="/groups" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
     
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>  
        @enderror
      </div>
     
      <button type="submit" class="btn btn-info">Submit</button>
    </form>
        
@endsection 