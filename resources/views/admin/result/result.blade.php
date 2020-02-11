@extends('admin.layout')
@section('content')
<div class="product-status mg-b-30 mg-t-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Daftar Calon Pasangan Ketua dan Wakil Ketua OSIS</h4>
                        <div class="add-product">
                            <a href="product-edit.html">Tambah Paslon</a>
                        </div>
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Pemilih</th>
                                <th>Calon Pasangan</th>
                            </tr>
                        
                                @foreach ($d as $nomor=>$item)
                                <tr>
                                <td>{{$nomor+1}}</td>
                                <td>{{$item->voter->id}}</td>
                                <td>{{$item->paslon->id}}</td>
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