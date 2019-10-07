@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (isset($message))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <div class="row justify-content-center">
                    <form class="form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">檔案上傳</label>
                            <input  class="form-control-file" type="file" name="ImageFile" id="" accept="image/*"/>
                        </div>
                        <button class="btn btn-primary" type="submit">送出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
