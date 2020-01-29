@extends('layouts.app')
@section('pageTitle', 'ලියාපදිංචිය සනාත කිරීම')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                <div  style="font-size:1.5em;">{{ __('ලියාපදිංචිය සනාත කිරීම') }}</div>
                <br>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <strong>
                            <p>ඔබ විසින් යොමු කරණ ලද තොරතුරු 
                                අපගේ දත්ත පද්ධතියට සාර්ථකව ඇතුලත් වී ඇත. 
                                තොරතුර පරීක්ෂා කිරීමෙන් අනතුරුව ලියාපදිංචි විස්තර 
                                ඔබ වෙත යොමු කරණු ඇත.</p> 
                            </strong>
                            <p align="center">තොරතුරු, පරියේෂණ හා විශේෂ ව්‍යාපෘති දෙපාර්තමේන්තුව<br/>
                            නියෝජ්‍ය ප්‍රධාන ලේකම් (ක්‍රමසම්පාදන) කාර්යාලය<br/>
                            සබරගමුව පළාත් සභාව</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-md-12 row justify-content-center">
                            <lable>Regstered Date&nbsp;: &nbsp; </lable>  
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12 row justify-content-center">
                            <strong>
                            {{ request()->date }}
                            </strong>
                        </div>
                    </div>
                </div>   
            </div>  
        </div>
    </div>
    @endsection