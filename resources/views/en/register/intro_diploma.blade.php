@extends('en.layouts.app')
@section('pageTitle', '')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                <div class="" style="font-size:1.5em;">{{ __('සබරගමු පළාතේ රැකියා විරහිත ඩිප්ලෝමාධාරීන් පිළිබඳ සමීක්ෂණය') }}</div>
                <br/>

                <div class="container-fluid" >
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <p>සබරගමුව පළාත් උපාධිධාරී හා ඩිප්ලෝමාධාරී 
                            සමීක්ෂණය කිරීමේ වැඩසටහන සඳහා ඔබ සාදරයෙන් පිළිගනිමු.</p>
                            <p>මෙම වැඩසටහන සබරගමුව පළාත තුළින් උසස් අධ්‍යාපනය අවසන් කර 
                            වාර්ෂිකව සමාජගතවන මානව සම්පත 
                            හඳුනා ගැනීම ප්‍රමුඛ අරමුණ කරගනිමින් ක්‍රියාත්මක කරනු ලබයි. </p>
                            <p>උපාධිධාරී හා ඩිප්ලෝමාධාරී සමීක්ෂණය කිරීමේ වැඩසටහන සඳහා 
                            මාර්ගගතව (online) ලියාපදිංචිය වීමේදී පහත කරුණු කෙරෙහි අවධානය යොමු කරමු.
                            (ඔබට මේ සඳහා Gmail වර්ගයේ විද්‍යත් තැපැල් ලිපිනයකින් ඇතුලත්වී (Log) තිබීම අත්‍යවශ වේ)
                            </p>
                            <ul>
                                <li>දැනටමත් ලියාපදිංචිව, ලියාපදිංචි අංකයක් නිකුත් කර ඇත්නම් නැවත ලියාපදිංචිය අවශ්‍ය නොවනු ඇත. එමෙන්ම සාමාන්‍ය ක්‍රමවේදය ඔස්සේද වැඩසටහන ක්‍රියාත්මක වන බැවින් ද්විත්ව ලියාපදිංචි වීම නොවිය යුතුය</li>
                                <li>ලියාපදිංචි දිනට උපාධි හෝ ඩිප්ලෝමා පාඨමාලාව අවසන් කර තිබිය යුතුය. (සහතිකයේ සඳහන් වලංගු දිනය ලියාපදිංචි දිනට පෙර දිනයක් විය යුතුය)</li>
                                <li>උපාධි හෝ ඩිප්ලෝමා සහතිකයේ පැහැදිලි චායාරූප පිටපතක් උඩුගත කිරීම (upload)  කිරීම අනිවාර්ය අවශ්‍යතාවයකි. එසේ නොමැති අයදුම්පත් ප්‍රතික්ෂේප කරනු ලැබේ.</li>
                                <li>තොරතුර පරීක්ෂා කිරීමෙන් අනතුරුව ඔබගේ විද්‍යුත් ලිපිනයට ‘ලියාපදිංචි අංකය‘ හා ‘ දිනය’ යොමු කරණු ඇත.</li>
                            </ul>
                            <p>වැඩසටහන සම්බන්ධ වැඩිදුර තොරතුරු 045 2222173 (345) මගින් තොරතරු හා සන්නිවේදන තාක්ෂණ 
                            නිලධාරි හෝ 045 2222025 මගින් සහකාර අධ්‍යක්ෂ (ක්‍රමසම්පාදන) ඇමතීමෙන් ලබාගත හැකිවනු ඇත.</p>
                            <br/>
                                                        
                            <p align="center">තොරතුරු, පරියේෂණ හා විශේෂ ව්‍යාපෘති දෙපාර්තමේන්තුව<br/>
                            නියෝජ්‍ය ප්‍රධාන ලේකම් (ක්‍රමසම්පාදන) කාර්යාලය<br/>
                            සබරගමුව පළාත් සභාව</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                        </div>
                        <div class="col-md-2">
                            <a class="btn btnAction" href="{{ url('resource/application/graduate/form')}}" style="">Go to Form</a>
                        </div>
                    </div>
                </div>
            
        </div>  
    </div>
</div>
@endsection