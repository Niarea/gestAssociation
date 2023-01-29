<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajout d'un nouveau membre
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
          <form method="POST" action="{{ route('members.store') }}">
              @csrf

              <div class="relative mt-4">
                  <x-jet-label class="text-gray-700 text-xs font-bold mb-2" value="Nom" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=name name="name" :value="old('name')" placeholder="Nom du nouveau membre" required autofocus />
              </div>

              <div class="relative mt-4">
                  <x-jet-label class="text-gray-700 text-xs font-bold mb-2" value="Prénom" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=first_name name="first_name" :value="old('first_name')" placeholder="Prénom du nouveau membre" required autofocus />
              </div>

              <div class="relative mt-4">
                  <x-jet-label class="text-gray-700 text-xs font-bold mb-2" value="Contact" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=contact name="contact" :value="old('contact')" placeholder="Contact du nouveau membre" required autofocus />
              </div>

              <div class="relative mt-4">
                  <x-jet-label class="text-gray-700 text-xs font-bold mb-2" value="Email" />
                  <x-jet-input class="block mt-1 w-full" type="email" id=email name="email" :value="old('email')" placeholder="Adresse email" required autofocus />
              </div>

               <div class="relative mt-4">
                  <x-jet-label class="text-gray-700 text-xs font-bold mb-2" value="Poste" />
                  <x-jet-input class="block mt-1 w-full" type="text" id=poste name="poste" :value="old('poste')" placeholder="Son poste" required autofocus />
              </div>

              <div class="relative mt-4">
                  <x-jet-label class="text-gray-700 text-xs font-bold mb-2" value="Association" />
                  <select class="rounded-md w-full mt-1" name="association_id">
                    @foreach($association as $association)
                      @if(auth()->user()->id == $association->user_id)
                    <option value="{{ $association->id }}">{{ $association->name }}</option>
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
