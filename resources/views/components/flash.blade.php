@if (session()->has('success'))
<div x-data="{ show: true }"
     x-init="setTimeout(() => show = false, 4000)"
     x-show="show"
class="">
    <div class="alert alert-success" style="position: fixed; ">{{ session('success') }}</div>
</div>
@endif
