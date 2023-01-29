<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des associations
          <div class="float-right">
            <a href="{{ route('association.create') }}" role="button" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Créer une association</a>
        @foreach($associations as $association)
          @if(auth()->user()->id == $association->user_id)
            <a href="{{ route('members.index') }}" role="button" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Section membre</a>
            @break
          @endif
        @endforeach
          </div>
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-fixed">
              <thead>
                <tr>
                  <th class="px-4 py-2 w-1/4">Nom</th>
                  <th class="px-4 py-2 w-1/4">Description</th>
                </tr>
              </thead>
              <tbody>
                @foreach($associations as $association)
                  @if(auth()->user()->id == $association->user_id)
                    <tr>
                      <td class="select-none px-4 py-3">{{ $association->name }}</td>
                      <td class="select-none px-4 py-3">{{ $association->description }}</td>
                      <td class="px-6 py-3"><a href="{{ route('association.show', $association->id) }}" role="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Voir</a></td>
                      <td class=" px-6 py-3"><a href="{{ route('association.edit', $association->id) }}" role="button" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Modifier</a></td>
                      <td class=" px-6 py-3">
                        <form id="destroy{{ $association->id }}" action="{{ route('association.destroy', $association->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <a role="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Supprimer
                          </a>
                        </form>
                      </td class="px-4 py-3">
                    </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
</x-app-layout>
