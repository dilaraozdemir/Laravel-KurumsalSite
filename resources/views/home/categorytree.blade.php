@foreach($children as $subcategory)
    <ul class="list-dot">
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}</li>
            <ul class="list-dot">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
        <li><a href="{{route('categoryproduct',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach
