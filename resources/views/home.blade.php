
<!-- This is old method we use in php to print variables  -->
<?php 
// echo $value;
?>


<!-- Laravel blade template provide the short method to print varibale  -->

<h1>
   {{--  $value  --}}
</h1>


<!-- we are use blade to write php  -->
<!-- for printing plane HTML -->
{{-- @php

$abc = '<b>helo</b>';
@endphp
{!!$abc!!} --}}


{{-- starting if conditions  --}}
{{-- 
@if($value == 1)
<h1>value is 1</h1>
@elseif($value == 2)
<h1>value is 2</h1>
@else
<h1>value is not 1</h1>
@endif --}}