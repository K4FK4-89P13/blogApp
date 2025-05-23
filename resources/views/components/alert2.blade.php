
<div {{$attributes->merge(['class' => "border-l-4 p-4 $clases"])}} role="alert">
  <p class="font-bold">{{ $title }}</p>
  {{$slot}}
</div>