<x-app-layout>
  <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">

        <div class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0">
          <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
            <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white
             focus:outline-none focus:shadow-outline">Menus</a>
          </div>
          {{-- <nav class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700
             dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
             dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none
              focus:shadow-outline" href="{{ route('welcome.show') }}">Tableau de bord
            </a> --}}

            <nav class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700
                 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
                 dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none
                  focus:shadow-outline" href="{{ route('profile.show') }}">Voir profil
                </a>

            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent
             dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
              dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none
               focus:shadow-outline" href="{{ route('association.index') }}">Section association
            </a>

            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent
             dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
              dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none
               focus:shadow-outline" href="{{ route('members.index') }}">Section membre
            </a>

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <span>Autres actions</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent
                        dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
                        dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                        focus:outline-none focus:shadow-outline" href="{{ route('association.create') }}">Créer association
                    </a>

                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent
                        dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
                        dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                        focus:outline-none focus:shadow-outline" href="{{ route('members.create') }}">Ajouter membre
                    </a>
                </div>
              </div>
            </div>
          </nav>
        </div>

     <div class="flex-grow mx-auto sm:px-4 pt-6 pb-8">
    <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
      <div class="border-b px-6">
        <div class="flex justify-between -mb-px">
          <div class="flex justify-between px-6 -mb-px">
            <h3 class="text-blue-dark py-4 font-bold text-lg">Infos</h3>
          </div>
        </div>
      </div>

      <div class="hidden lg:flex">
        <div class="w-1/3 text-center py-8">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{ DB::table('associations')->where('user_id', auth()->user()->id)->count() }}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide">
             <span style="color:red">Nombre d'association</span>
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{ DB::table('members')->count() }}</span>
              <span class="text-3xl align-top"></span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide">
            <span style="color:red">Nombre de membre</span>
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8">
          <div>
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{ DB::table('users')->count() }}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide">
            <span style="color:red">Nombre d'utilisateurs au total</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer bg-white border-b-2 border-blue-700">
    <div class="container mx-auto px-6">
      <div class="bg-white border-t">
        <div class="container mx-auto px-4 py-4 mb-0">
          <div class="text-center">
            <div class="text-center text-blue-700 font-bold md:mr-4">&copy; 2021 by NIARE ADAMA</div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</x-app-layout>


