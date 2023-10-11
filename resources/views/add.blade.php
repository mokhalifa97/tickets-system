@extends('layouts.app')
@section('content')

<div>

        <h1 class="text-center mt-5">Add information</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto"> 
            <form>
                @csrf
                <div class="form-group">
                    <label for="inputPassword5" class="form-label">Phone</label>
                    <input type="text" id="inputPassword5" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <label for="inputPassword5" class="form-label">Jop Title</label>
                    <input type="text" id="inputPassword5" class="form-control" name="jop">
                </div>

                
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
            </div>

</div>
@endsection
