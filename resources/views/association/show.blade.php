<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Fiche de l'association <span class="select-none" style="color:red">{{ $association->name }}</span>
             <a href="{{ route('association.index') }}" role="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">Retour</a>
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
          <p class="text-2xl">Nom</p>
          <p class="select-none">{{ $association->name }}</p>
          <p class="text-2xl">Description</p>
          <p class="select-none">{{ $association->description }}</p>
          <p class="text-2xl">Nom du créateur</p>
          <p class="select-none">{{ auth()->user()->name }}</p>
          <p class="text-2xl">Date de création</p>
          <p>{{ $association->created_at->format('d/m/Y') }}</p>
          @if($association->created_at != $association->updated_at)
            <p class="text-2xl">Dernière mise à jour</p>
            <p>{{ $association->updated_at->format('d/m/Y') }}</p>
          @endif
        </div>
      </div>
    </div>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <h1 class="text-2xl text-left md:text-center py-4"><strong>La liste des membres</strong></h1>
              <hr>
              <table class="table-fixed">
                <thead>
                  <tr>
                    <th class="px-4 py-2 w-1/12">Nom</th>
                    <th class="px-4 py-2 w-1/12">Prénom</th>
                    <th class="px-4 py-2 w-1/12">Contact</th>
                    <th class="px-4 py-2 w-1/12">Email</th>
                    <th class="px-4 py-2 w-1/12">Poste</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($members as $member)
                    @if($member->association->name == $association->name)
                      <tr class="bg-gray-100">
                        <td class="select-none border px-4 py-3 w-1/12">{{ $member->name }}</td>
                        <td class="select-none border px-4 py-3 w-1/12">{{ $member->first_name }}</td>
                        <td class="select-none border px-4 py-3 w-1/12">{{ $member->contact }}</td>
                        <td class="select-none border px-4 py-3 w-1/12">{{ $member->email }}</td>
                        <td class="select-none border px-4 py-3 w-1/12">{{ $member->poste }}</td>
                      </tr>
                    @endif
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
</x-app-layout>
