     <form action="{{ $routeName }}" method="POST">
         @csrf
         <input type="hidden" name="id" value="{{ $id }}">
         @if ($parent)
             <input type="hidden" name="parent_id" value="{{ $parent }}">
         @endif
         <button class="badge bg-danger" type="submit">delete</button>
     </form>
