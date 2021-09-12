

<a href="{{url('/test/'. "ruhul amin")}}"> Through Data To Controller  </a>



<form action="{{route('postMan')}}" method="post">
    @csrf 
    <input type="text" name="post" >
    <button type="submit">Submit </button>
</form>