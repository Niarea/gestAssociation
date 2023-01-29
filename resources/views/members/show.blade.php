<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Fiche du membre <span class="select-none" style="color:red">{{ $members->name }} {{ $members->first_name }}</span>
            <a href="{{ route('members.index') }}" role="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">Retour</a>
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-lg mt-6 px-10 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
          <p class="text-2xl">Nom</p>
          <p class="select-none">{{ $members->name }}</p>

          <p class="text-2xl">Prénom</p>
          <p class="select-none">{{ $members->first_name }}</p>

          <p class="text-2xl">Contact</p>
          <p class="select-none">{{ $members->contact }}</p>

          <p class="text-2xl">Adresse email</p>
          <p class="select-none">{{ $members->email }}</p>

          <p class="text-2xl">Poste</p>
          <p class="select-none">{{ $members->poste }}</p>

          <p class="text-2xl">Association</p>
          <p class="select-none">{{ $association }}</p>

          <p class="text-2xl">Date d'ajout</p>
          <p>{{ $members->created_at }}</p>
          @if($members->created_at != $members->updated_at)
          <p class="text-2xl">Dernière mise à jour</p>
          <p>{{ $members->updated_at->format('d/m/Y') }}</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
