@extends('layouts.app')

@section('content')
<div class="jumbotron">
     <h1 style="text-align:center;">DNS Dashboard</h1>
    </br> 
        <div align="center">
            <div align="center"class="row">
                    <div class="col-lg-4">
                        <table>
                            <tr>
                                <td align="center">
                                    <div><img src="{{URL::to('/images/tld_logo.png')}}" alt="TLD logo" style="width:20%;"></img></br></br><p style="font-size:1.5vw;font-weight:bold;">Top Level Domains</p></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <table>
                            <tr>
                                <td  align="center">
                                    <div><img src="{{URL::to('/images/subdomain.png')}}" alt="sub domain Logo" style="width:20%;"></img></br></br><p style="font-size:1.5vw;font-weight:bold;">Sub-Domains</p></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <table>
                            <tr>
                                <td  align="center">
                                        <div><img src="{{URL::to('/images/zonesearch.png')}}" alt="zone lookup Logo" style="width:20%;"></img></br></br><p style="font-size:1.5vw;font-weight:bold;">Lookup: Zone Details</p></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
        </div>        
</div>
<div class="row">
    <div align="center" class="col-lg-4">
        <h2> Top Level Domains </h2>
        </br>

      
    
        <ul class="list-group">
            @foreach ($domains as $data)
             {{-- < class="list-group-item"><h4>{{$data->domains}}</h4></a> --}}
                </br>
                    <div style="width:50%;margin-left:auto;margin-right:auto;"class="input-group">
                        <form>
                            
                            <button style="width:50%;" type="button" class="btn" onclick="passValue('{{$data->domains}}')" ><h4>{{$data->domains}}</h4></button>
                        </form>
                    </div>
            @endforeach 
        </ul>

     
                     {{-- <table class="table table-hover table-bordered" style="width:70%; height:auto;margin-right:auto;margin-left:auto;text-align:center; background-color:white; border-collapse:collapse;">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align:center;">Domain </th>
                        </tr>
                    </thead>
                @foreach ($domains as $data)
                    <tr>
                        <td>
                                {{$data->ID}}
                        </td> 
                        <td>
                             <h4>{{$data->domains}}</h4>
                            <a href="//144.120.113.197/test2.html"> {{$data->domains}}</a>
                             <a href=( "/searchSub/?",{{$data->domains}}) ><h4>{{$data->domains}}</h4> </a>
                            <form action="/searchSub" method="POST" role="search">
                            </br>
                                {{ csrf_field() }}
                                <div style="width:50%;margin-left:auto;margin-right:auto;"class="input-group">
                                    <input type="hidden" name="x"><h4>{{$data->domains}}</h4>
                                </div>
                            </form> 
                            
                        </td>
                    </tr>
                @endforeach
            </table>    --}}
    </div> 
    <script>
        function passValue(para)
        {
            
            //window.location = "/searchSub/?x=" + para;
            $.ajax({
                      type: 'POST',
                      url: '/searchSub',
                      data: {   'x' : para,
                                '_token':  $('meta[name=csrf-token]').attr('content')
                            }
                    , success: function passValue(){
                    console.log("success POST");
                }})
            console.log(para);    
            // $.post('/searchSub', {
            //     '_token': $('meta[name=csrf-token]').attr('content'),
            //     'x': para
            // });
        }
    </script>
    <div align="center" class="col-lg-4">
            <h2>Sub-Domain Search</h2>
            <form action="/searchSub" method="POST" role="search">
            </br>
                {{ csrf_field() }}
                <div style="width:50%;margin-left:auto;margin-right:auto;"class="input-group">
                    <input style="width:100%;" type="text" class="form-control" name="x"
                        placeholder="Search for TLD (e.g. .com.fj) "> <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>
            @if(isset($details))
                <h3 style="text-align:center;"> Results: </h3>
                <table class="table table-hover table-bordered" style="width:70%;margin-right:auto;margin-left:auto;text-align:center; background-color:white; border-collapse:collapse;">
                    <thead class="thead-dark">
                        <tr>
                            {{-- <th style="text-align:center;">ID</th> --}}
                            <th style="text-align:center;">Sub-domain</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $subdomain)
                        <tr>
                            {{-- <td>{{$subdomain->ID}}</td> --}}
                            <td>
                                <h4>{{$subdomain->subdomain}}</h4>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @elseif(isset($message))
            </br>
                <h2 style="text-align:center">{{ $message }}</h2>
            @endif             
    </div> 
    <div align="center" class="col-lg-4">
            <h2>Zone Lookup</h2>
            <form action="//144.120.113.197/test.php" method="POST" role="search">
            </br>
                {{ csrf_field() }}
                <div style="width:50%;margin-left:auto;margin-right:auto;"class="input-group">
                    <input style="width:100%;" type="text" class="form-control" name="domainName" size="35"
                        placeholder="Search zone details (e.g. iep.com.fj) "> <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>           
    </div> 

</div>
<br><br><br>




               
@endsection