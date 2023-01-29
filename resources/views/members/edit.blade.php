<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modification des informations du membre <span class="select-none" style="color:red">{{ $member->name }} {{ $member->first_name }}</span>
            <a href="{{ route('members.index') }}" role="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">Retour</a>
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
          <x-jet-validation-errors class="mb-4" />
          @if (session()->has('message'))
            <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3">
              {{ session('message') }}
            </div>
          @endif
          <form action="{{ route('members.update', $member->id) }}" method="post">
              @csrf
              @method('put')
              <div class="mt-4">
                  <x-jet-label value="Nom" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=name name="name" :value="old('name', $member->name)" placeholder="Nom du membre" required autofocus />
              </div>

              <div class="mt-4">
                  <x-jet-label value="Prenom" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=first_name name="first_name" :value="old('first_name', $member->first_name)" placeholder="Prénom du membre" required autofocus />
              </div>

              <div class="mt-4">
                  <x-jet-label value="Contact" />
                  <x-jet-input class="block mt-1 w-full" type="tel" id=contact name="contact" :value="old('contact', $member->contact)" placeholder="Contact du membre" required autofocus />
              </div>

              <div class="mt-4">
                  <x-jet-label value="Email" />
                  <x-jet-input class="block mt-1 w-full" type="email" id=email name="email" :value="old('email', $member->email)" placeholder="Adresse email du membre" required autofocus />
              </div>

              <div class="mt-4">
                  <x-jet-label value="Poste" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=poste name="poste" :value="old('poste', $member->poste)" placeholder="Poste du membre" required autofocus />
              </div>

              <div class="mt-4">
                  <x-jet-label value="Association" />
                  <select class="rounded-md shadow-sm mt-1 w-full" name="association_id" type="text" id=association_id>
                    @foreach($associations as $association)
                      @if(auth()->user()->id == $association->user_id)
                    <option value="{{ $association->user_id }}">{{ old('association_id', $association->name) }}</option>
                      @endif
                    @endforeach
                  </select>
              </div>

              <div class="flex items-center justify-end mt-4">
                  <x-jet-button class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold">
                      Envoyer
                  </x-jet-button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
