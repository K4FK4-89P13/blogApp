<div {{$attributes->merge(['class' => "$clases border-l-4 p-4"])}} role="alert">
  <p class="font-bold">{{ $title }}</p>
  {{$slot}}
</div>
