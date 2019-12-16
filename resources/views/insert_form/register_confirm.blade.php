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
                            <p>ඔබගේ උපාධිධාරී/ඩිප්ලෝමාධාරී ලියාපදිංචි අයදුම්පත සාර්ථකව අප ගබඩා කරගන්නා ලදී.</p> 
                            <p>එයට අදාල ඔබගේ ලියාපදිංචි අංකය ලබා ගැනීම සදහා පහත සදහන් යොමු අංකය හා 
                            ලියාපදිංචි වූ දිනය සදහන් කර ඔබගේ උපාධි/ඩිප්ලෝමා සහතිකයේ (විස්තරාත්මක) පැහැදිලි 
                            ඡායාරූප/ඡායාරූපයක් sgdcspregister@gmail.com යන Email ලිපිනයට යොමු කරන්න.</P> 
                            <p>සහතික පත්‍රවල ඡායාරූප ලැබී දින 5ක් තුල ඔබගේ ලියාපදිංචි අංකය ඔබවෙත Email 
                            මාර්ගයෙන් ලැබීමට සලස්වනු ලැබේ.</p> 
                            </strong>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-md-6 row justify-content-center">
                            <lable>Reference Number&nbsp;:  &nbsp;</lable>
                        </div>
                        <div class="col-md-6 row justify-content-center">
                            <lable>Regstered Date&nbsp;: &nbsp; </lable>  
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 row justify-content-center">
                            <strong>
                                {{ request()->ref }}
                            </strong>
                        </div>
                        <div class="col-md-6 row justify-content-center">
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