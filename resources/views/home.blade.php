@extends('layouts.app')

@section('content')
<!--style="display:inline;"-->
<div class="container">
   <div class="row justify-content-center">     
        <div class="col-md-8">
            <div class="card">
                <div style="background-color:royalblue; font-weight:bold; color:white;"class="card-header">Top Level Domains</div>   
                    <div style="background-color:orange;"class="card-body">
                        <table>
                            @foreach ($domains as $domain)
                                <tr>
                                    <td>
                                        {{$domain->ID}}
                                    </td>
                                    <td>
                                        {{$domain->domain}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                     </div>
                </div>
            </div>
        </div>             
</div>
       
</div>
@endsection
