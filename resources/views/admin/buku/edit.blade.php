@extends('layout.wrapper')
@section('title')
    {{ $data['title'] }}
@endsection
@section('content')
<div class="row">

    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a href="/buku" class="btn btn-warning">Kembali</span>
                </a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('buku-update', $data['buku']->id) }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label class="col-sm-3">Nama buku</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" name="nama" placeholder="Nama buku" value="{{ $data['buku']->nama }}">
                            @if ($errors->has('nama'))
                                <div class="text-danger">
                                    <p>{{ $errors->first('nama')}}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i> Update Data</button>
                        <button type="reset" class="btn btn-warning"><i class="fa fa-save"></i> Reset</button></button>
                    </div>
                </form>
            </div>
    </div>

</div>
@endsection
