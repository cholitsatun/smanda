@extends('admin.layout')
@section('content')
<div class="product-status mg-b-30 mg-t-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Daftar Pemilih</h4>
                    <div class="add-product">
                        <a href="/admin/voters/tambah">Tambah Pemilih</a>
                    </div>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Setting</th>
                        </tr>
                    
                            @foreach ($a as $nomor=>$item)
                            <tr>
                            <td>{{$nomor+1}}</td>
                            <td>{{$item->nisn}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->class}}</td>
                            <td>{{$item->realpass}}</td>
                            <td>
                                @if ($item->status==0)
                                <button class="ds-setting">Belum Voting</button>
                                @else
                                <button class="pd-setting">Sudah Voting</button>
                                @endif
                            </td>
                            <td>
                                <a href="/admin/voters/{{$item->id}}/edit"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                <form action="/admin/voters/{{$item->id}}" method="POST" style="display:inline">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                            @endforeach
                            
                        

                    </table>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection