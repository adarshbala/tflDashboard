@extends('layouts.app')

@section('content')
<div class="jumbotron">
     <h1 style="text-align:center;">DNS Dashboard</h1>
    </br> 
    </br>
    <div align="center"class="row">
        <div class="col-lg-4">
            <h2> Top Level Domains </h2>
        </br>
         {{-- <table class="table table-hover table-bordered" style="width:70%;margin-right:auto;margin-left:auto;text-align:center; background-color:white; border-collapse:collapse;">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align:center;">ID</th>
                            <th style="text-align:center;">Domain </th>
                        </tr>
                    </thead>
                @foreach ($domains as $data)
                    <tr>
                        <td>
                            {{$data->ID}}
                        </td>
                        <td>
                            {{$data->domains}}
                        </td>
                    </tr>
                @endforeach
            </table>   --}}
                 
        </div>
        <div class="col-lg-8">
            <h2>Sub-Domain Search</h2>
             <form action="/dashboard/search" method="POST" role="search">
            </br>
                {{ csrf_field() }}
                <div style="width:70%;margin-left:auto;margin-right:auto;"class="input-group">
                    <input style="width:100%;" type="text" class="form-control" name="x"
                        placeholder="Search for TLD (e.g. .com.fj) "> <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>
        </br>
            
            @if(isset($details))
                <h3 style="text-align:center;"> The sub-domains are: </h3>
                <table class="table table-hover table-bordered" style="width:70%;margin-right:auto;margin-left:auto;text-align:center; background-color:white; border-collapse:collapse;">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align:center;">ID</th>
                            <th style="text-align:center;">Sub-domain</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $subdomain)
                        <tr>
                            <td>{{$subdomain->ID}}</td>
                            <td>{{$subdomain->subdomain}}</td>
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
     
@endsection