@extends('layouts.app')
@section('pageTitle', 'අප ගැන')
@section('content')
<div class="container" style="margin-bottom: 25px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="container">
        <h5 style="font-size:1.2em; font-weight:bold;">නියෝජ්‍ය ප්‍රධාන ලේකම් (ක්‍රමසම්පාදන) කර්යාලය...</h5>

        <div class="row">
            <div class="col-md-06">
                <img src="{{ asset('image/sgpcimg.jpg') }}"  style="height: 200px !important; margin-bottom: 15px !important;"/>
            </div>
            <div class="col-md-06">
                <img src="{{ asset('image/pln_logo.bmp') }}" style="height: 150px !important; margin: 25px !important;"/>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="font-size: 0.9em !important;">
                    සබරගමුව පළාත් සභාව තුළ උපජාතික මට්ටමෙහි සමස්ථ ක්‍රමසම්පාදන කාර්යයන්හි ප්‍රධාන වගකීම දරන ප්‍රමුඛතම 
                    ආයතනය වනුයේ නියෝජ්‍ය ප්‍රධාන ලේකම් (ක්‍රමසම්පාදන) කාර්යාලයයි. පුද්ගලයන්, සමාජ කණ්ඩායම් සහ 
                    ප්‍රාදේශීය ලේකම් කොට්ඨාශ, දිස්ත්‍රික්ක හෝ පළාත වශයෙන් වූ භූගෝලීය සන්දර්භයන් තුළ පවත්නා අසමතුලිතතාවයන්, 
                    විෂමතාවයන් අවම කිරීම සඳහා වූ සමස්ත සංවර්ධන ක්‍රියාවලිය එයට අයත් වේ.
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-size:1.2em; font-weight:bold;">අපගේ දැක්ම....</h5>
                <p style="font-size: 0.9em !important;">
                පළාත් ක්‍රමසම්පාදනයේ විශීෂ්ඨතම නියමුවා
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-size:1.2em; font-weight:bold;">අපගේ මෙහෙවර.....</h5>
                <p style="font-size: 0.9em !important;">
                සබරගමුව පළාතේ තිරසාර සංවර්ධනයත් ජනතාවගේ උසස් ජීවන මට්ටමත් ළඟාකරගැනීමේ අරමුණ පෙරදැරිව, 
                පවතින සම්පත් කාර්යක්ෂමව හා සඵලමත්ව යොදාගැනීම උදෙසා ක්‍රමවත් ක්‍රමසම්පාදන ක්‍රියාවලියක් තුළින් 
                ප්‍රතිපත්ති තීරකයන්ට සහ සියළු ආයතනවලට අවශ්‍ය මඟපෙන්වීම හා පසුබල සහාය සැපයීම.
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-size:1.2em; font-weight:bold;">ක්‍රියාකාරී දෙපාර්තමේන්තු</h5>
                <div class="accordion" id="accordionExample">
                <ul style="list-style:circle;">
                    <li class="btn-link-collapsed show" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        තොරතුරු, පර්යේෂණ හා වීශේෂ ව්‍යාපෘති දෙපාර්තමේන්තුව 
                        <span class="btn" style="font-size:0.7em;">See More...</span>
                    </li>     
                        <ul id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <li>පළාත් දත්ත පද්ධතිය පවත්වාගෙන යාම.</li>
                            <li>තොරතුරු ඒකකය ක්‍රියාත්මක කිරීම.</li>
                            <li>රැකියා විරහිත උපාධිධාරී යෝජනා ක්‍රමය සම්බන්ධීකරණය කිරීම හා ක්‍රියාත්මක කිරීම.</li>
                            <li>පළාත් වෘත්තීය පුහුණු සැලැස්ම ක්‍රියාවට නැංවීම.</li>
                            <li>කුසලතා සංවර්ධන සැලැස්ම ක්‍රියාවට නැංවීම.</li>
                            <li>සබරගමු පළාත් සභා කාර්යසාධන වාර්තාව සකස් කිරීම.</li>
                            <li>පර්යේෂණ ඒකකය පවත්වාගෙන යාම.</li>
                            <li>ඊ - රාජ්‍ය ප්‍රතිපත්තිය ක්‍රියාවට නැංවීම.</li>
                            <li>දත්ත හා තොරතුරු සැපයීම සඳහා පළාත් වෙබ් අඩවියක් නිර්මාණය කොට පවත්වාගෙන යාම.</li>
                            <li>දත්ත හා තොරතුරු රැස් කිරීම, විශ්ලේෂණය හා ප්‍රකාශයට පත්කිරීමට අදාලව ව්‍යාපෘති වාර්තා සහ සංකල්ප පත්‍රිකා සකස් කිරීම.</li>
                            <li>විශේෂ ව්‍යාපෘති සම්බන්ධීකරණය හා ක්‍රියාවට නැංවීම. (උදා - පුරනැඟුම,තේමා ගම්මානය)</li>
                            <li>භූගෝලීය තොරතුරු පද්ධතිය  ක්‍රියාත්මක කිරීම.</li>
                            <li>සබරගමු පළාත් තොරතුරු කේන්ද්‍රය (උපකාරක කවුළුව - Help Desk) අන්තර්ජාලගත සේවයක් ලෙස ක්‍රියාත්මක කිරීම</li>
                        </ul>
                    <li class="btn-link-collapsed show" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ප්‍රාදේශීය සංවර්ධන හා ආයතන දෙපාර්තමේන්තුව 
                        <span class="btn" style="font-size:0.7em;">See More...</span>
                    </li>     
                        <ul id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <li>ප්‍රාදේශීය සංවර්ධන සැලැස්ම ක්‍රියාවට නැංවීම (පළාත් විමධ්‍යගත අයවැය).</li>
                            <li>කාර්යාලයීය ආයතන, පරිපාලන, මූල්‍ය සහ ගිණුම් කටයුතු.</li>
                            <li>දේශීය හා විදේශීය පුහුණුවීම් .</li>
                            <li>පුනරාවර්තන ඇස්තමේන්තු සහ විසර්ජන ගිණුම් සැකසීම.</li>
                            <li>කාර්යාලයීය පුස්තකාලය හා ලේඛනාගාරය පවත්වාගෙන යාම.</li>
                            <li>ජාතික ප්‍රතිපත්ති හා වැඩසටහන් වලට අදාළ මෙහෙයුම් හා සම්බන්ධීකරණ කටයුතු.</li>
                            <li>ඵලදායිතා වැඩසටහන ක්‍රියාත්මක කිරීම. සහ සම්බන්ධීකරණය.</li>
                            <li>ප්‍රාදේශීය විෂමතා සහ අසමතුලිතතා අවම කිරීම සඳහා ව්‍යාපෘති යෝජනා සහ සංකල්ප පත්‍රිකා සකස් කිරීම.</li>
                        </ul>
                    <li class="btn-link-collapsed show" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        සැලසුම් හා මෙහෙයුම් දෙපාර්තමේන්තුව 
                        <span class="btn" style="font-size:0.7em;">See More...</span>
                    </li>     
                        <ul id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <li>ක්‍රියාත්මක කිරීම හා පසුවිපරම් කිරිමේ සැලැස්මක් සහිතව මධ්‍ය කාලීන පළාත් සංවර්ධන සැලැස්මක් සකස් කිරීම.</li>
                            <li>ප්‍රාග්ධන ඇස්තමේන්තු සැකසීම.</li>
                            <li>වාර්ෂික සංවර්ධන සැලැස්ම සකස් කිරීම/ ප්‍රථිඵල පාදක ආයතනික රාමුව.</li>
                            <li>පළාත් සභාවේ වාර්ෂික ක්‍රියාත්මක සැලැස්ම සකස් කිරීම.</li>
                            <li>පළාත් අමාත්‍යාංශ විසින් සකස් කරන ලද සංවර්ධන සැලසුම් නිරීක්ෂණය කිරීම/ මෙහෙයවීම සහ ඇගයීම.</li>
                            <li>පළාත් සභාවට අනුබද්ධිත අමාත්‍යංශ හා ආයතන වල ප්‍රගතිය මෙහෙයවීම සහ ඇගයීම.</li>
                            <li>වාර්ෂික ඒකාබද්ධ සංවර්ධන සැලැස්ම ක්‍රියාත්මක කිරීමේ අන්තර්ජාල මෙහෙයුම් පද්ධතිය ස්ථාපිත කිරීම.</li>
                            <li>විශේෂ ව්‍යාපෘති සම්බන්ධීකරණය හා ක්‍රියාවට නැංවීම.(UNDP වැඩසටහන)</li>
                            <li>පළාත් සභා ප්‍රතිපත්ති ප්‍රකාශය සකස් කිරීම සහ අයවැය කථාව සකස් කිරීමට අදාළ තොරතුරු ලබා දීම.</li>
                            <li>පළාත් සභා ව්‍යාපෘති වැඩ සටහන් අතර ප්‍රතිපාදන මාරු කිරීම.</li>
                            <li>පළාතේ ආංශීය සැලසුම් සකස් කිරීම.</li>
                            <li>පළාත් භෞතික සැලැස්ම/ උපායමාර්ගික සැලැස්ම/ සංයුක්ත සැලැස්ම සම්බන්ධීකරණය කිරීම.</li>
                            <li>පළාතේ ආංශීය සංවර්ධනය හා සම්බන්ධ ව්‍යාපෘති වාර්තා සහ සංකල්ප පත්‍රිකා සකස් කිරීම.</li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h5 style="font-size:1.2em; font-weight:bold;">ආයතන ව්‍යුහය</h5>
                <a href="{{ asset('file/hirechi.pdf') }}" target="_blank">Click Here</a>
            </div>
        </div>

        </div>  
    </div>
</div>
@endsection