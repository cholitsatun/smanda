@extends('admin.layout')
@section('content')
<div class="product-status mg-b-30 mg-t-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Hasil Voting</h4>
                        <div class="analytics-rounded mg-b-30 res-mg-t-30">
                            <div class="analytics-rounded-content">
                                {{-- <h5>Percentage distribution</h5>
                                <h2><span class="counter">60</span>/20</h2> --}}
                                <div class="text-center">
                                    <div id="sparkline51"></div>
                                </div>
                            </div>
                        </div>
                        {{-- <table>
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
                                
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection