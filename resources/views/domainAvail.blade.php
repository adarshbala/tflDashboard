@extends('layouts.app')

@section('content')
    <div class="container">
            <h1 style="text-align:center;">TFL Domain Inventory</h1>
            <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div style= "background-color:royalblue;font-weight:bold;color:white;font-size:1vw;" class="card-header">Search .school.fj Domains</div>
                                <div style="background-color:orange;" class="card-body">
                                        <form action="/search" method="POST" role="search">
                                        </br>
                                    </br>
                                        {{ csrf_field() }}
                                        <div style="width:50%;margin-left:auto;margin-right:auto;"class="input-group">
                                            <input style="width:100%;" type="text" class="form-control" name="q"
                                                placeholder="Search for domains"> <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    
                                    @if(isset($details))
                                            </br>
                                        <h2 style="text-align:center;"> Domain for  <b>{{ $query }}</b>.school.fj already exist.</h2>
                                        <h3 style="text-align:center;">Inventory Record:</h3>
                                        <table style="width:100%;margin-right:auto;margin-left:auto;text-align:center; background-color:white; border-collapse:collapse;"class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;">ID</th>
                                                    <th style="text-align:center;">Domain (.school.fj)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($details as $domain)
                                                <tr>
                                                    <td>{{$domain->id}}</td>
                                                    <td>{{$domain->domain}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @elseif(isset($message))
                                    </br>
                                        <h2 style="text-align:center">{{ $message }}</h2>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
        
       
    </div>
@endsection





