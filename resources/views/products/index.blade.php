@foreach ($products as $product)
    <h2>{{  $product->name }}</h2>
    <h4>{{  $product->description }}</h4>
@endforeach

