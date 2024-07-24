     <form action="{{ $routeName }}" method="POST">
         @csrf
         <input type="hidden" name="id" value="{{ $id }}">
         <button class="badge bg-danger" type="submit">delete</button>
     </form>
