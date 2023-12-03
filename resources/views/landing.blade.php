


<x-common.layout>
@section('title','VPS IT')

<x-homepage.banner :banner="$home_page" />
<x-homepage.header />
 <x-homepage.vision :vision="$home_page"/>
 <x-homepage.mission :mission="$home_page"/>
<x-homepage.services :service="$home_page" :service_list="$servicelist" :service_icon="$serviceicon"/>

 
<x-homepage.partner :partner="$home_page" :partnerlist="$partnerinfo"/>
<x-common.footer :footer="$info"/>

<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>

</x-common.layout>

