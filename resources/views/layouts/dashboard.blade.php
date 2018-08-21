@extends('layouts.app')

@section('content')
<div class="jumbotron">
     <h1 style="text-align:center;">DNS Dashboard</h1>
    </br> 
    </br>
    <div align="center"class="row">
        <div class="col-lg-4">
            <h2> Top Level Domains </h2>
            <table class="table table-hover table-bordered" style="width:70%;margin-right:auto;margin-left:auto;text-align:center; background-color:white; border-collapse:collapse;">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align:center;">ID</th>
                            <th style="text-align:center;">Domain </th>
                        </tr>
                    </thead>
                @foreach ($domains as $domain)
                    <tr>
                        <td>
                            {{$domain->ID}}
                        </td>
                        <td>
                            {{$domain->domains}}
                        </td>
                    </tr>
                @endforeach
            </table>
                 
        </div>
        <div class="col-lg-4">
            <h2> Top Level Domains </h2>
            <table class="table table-hover table-bordered" style="width:70%;margin-right:auto;margin-left:auto;text-align:center; background-color:white; border-collapse:collapse;">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align:center;">ID</th>
                            <th style="text-align:center;">Domain </th>
                        </tr>
                    </thead>
                @foreach ($domains as $domain)
                    <tr>
                        <td>
                            {{$domain->ID}}
                        </td>
                        <td>
                            {{$domain->domains}}
                        </td>
                    </tr>
                @endforeach
            </table>
                     
        </div>
        <div class="col-lg-4">
                <h2> Top Level Domains </h2>
                <table class="table table-hover table-bordered" style="width:70%;margin-right:auto;margin-left:auto;text-align:center; background-color:white; border-collapse:collapse;">
                        <thead class="thead-dark">
                            <tr>
                                <th style="text-align:center;">ID</th>
                                <th style="text-align:center;">Domain </th>
                            </tr>
                        </thead>
                    @foreach ($domains as $domain)
                        <tr>
                            <td>
                                {{$domain->ID}}
                            </td>
                            <td>
                                {{$domain->domains}}
                            </td>
                        </tr>
                    @endforeach
                </table>
                         
            </div>
    </div>  
</div>
     
@endsection