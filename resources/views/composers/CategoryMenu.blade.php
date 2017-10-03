<!--cho nay copy tu template qua nhu thay chi ui code sua ben masster gi gi do... tu coi tiep nhe


 -->
<ul>
    @foreach($allproductType as $producttype)
    <li class='has-sub'><a href="{{ action('typemarchandiseController@index', ['id' => $producttype->id]) }}"><span>{{$producttype->name}}</span></a>
    </li>
   @endforeach
</ul>