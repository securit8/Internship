<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    

    <button onclick="myFunction()">update personal info </button>
<div id="update"  style="display:none">
    <form action="update" method="POST">
    @csrf
    <input type="hidden"  name="id" value="{{ auth()->user()->id}}"> <br>
    <input type="text"  name="School" placeholder="School"> <br>
    <input type="text"  name="Age" placeholder="Age"><br>
    <input type="text"  name="Grade" placeholder="Grade Level"><br>
    <input type="text"  name="Jprogram" placeholder="Monthly Joined Program"><br>
     <button type="submit"> შენახვა <button>
</form>

</div>


<script>
function myFunction() {
  document.getElementById("update").style.display = "block";
}
</script>
</x-app-layout>
