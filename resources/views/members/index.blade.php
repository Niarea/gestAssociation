<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des membres
          <div class="float-right">
            <a href="{{ route('members.create') }}" role="button" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded ">Ajouter un membre</a>

             <a href="{{ route('association.index') }}" role="button" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ">Section association</a>
          </div>
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-fixed">
              <thead>
                <tr>
                  <th class="px-4 py-2 w-1/12">Nom</th>
                  <th class="px-4 py-2 w-1/12">Prénom</th>
                  <th class="px-4 py-2 w-1/12">Contact</th>
                  <th class="px-4 py-2 w-1/12">Email</th>
                  <th class="px-4 py-2 w-1/12">Poste</th>
                  <th class="px-2 py-2 w-1/4">Association</th>
                </tr>
              </thead>
              <tbody>
                @foreach($members as $member)
                  @if(auth()->user()->id == $member->association->user_id)
                  <tr>
                    <td class="select-none px-4 py-3">{{ $member->name }}</td>
                    <td class="select-none px-4 py-3">{{ $member->first_name }}</td>
                    <td class="select-none px-4 py-3">{{ $member->contact }}</td>
                    <td class="select-none px-4 py-3">{{ $member->email }}</td>
                    <td class="select-none px-4 py-3">{{ $member->poste }}</td>
                    <td class="select-none px-4 py-3">{{ $member->association->name }}</td>

                    <td class="px-4 py-3">
                        <a href="{{ route('members.show', $member->id) }}" role="button"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Voir</a>
                    </td>

                    <td class=" px-4 py-3">
                        <a href="{{ route('members.edit', $member->id) }}" role="button"
                            class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Modifier</a>
                    </td>

                    <td class=" px-4 py-3">
                      <form id="destroy{{ $member->id }}" action="{{ route('members.destroy', $member->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a role="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        Supprimer
                      </a>

                       {{-- <a role="button" data-id='{{ $member->id }}' data-action="{{ route('members.destroy',$member->id) }}"
                            class="remove-user bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                          onclick="deleteConfirmation({{$member->id}});">
                          Supprimer
                        </a> --}}

                        {{-- <a role='button' onclick="deleteConfirm({{$member->id}});" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</a> --}}
                      </form>
                    </td>
                  </tr>
                    @endif
                  @endforeach
              </tbody>
            </table>

            {{-- <script type="text/javascript">
                function deleteConfirmation(id) {
                    swal({
                        title: "Voulez-vous supprimer ce membre ?",
                        text: "Veuillez être sûre avant de confirmer !",
                        type: "warning",
                        showCancelButton: !0,
                        confirmButtonText: "Oui, je le supprime !",
                        cancelButtonText: "Non, j'annule !",
                        reverseButtons: !0
                    }).then(function (e) {

                        if (e.value === true) {
                            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                            $.ajax({
                                type: 'POST',
                                url: "{{url('/members')}}/" + id,
                                data: {_token: CSRF_TOKEN},
                                dataType: 'JSON',
                                success: function (results) {

                                    if (results.success === true) {
                                        swal("Done!", results.message, "success");
                                    } else {
                                        swal("Error!", results.message, "error");
                                    }
                                }
                            });

                        } else {
                            e.dismiss;
                        }

                    }, function (dismiss) {
                        return false;
                    })
                }
            </script> --}}

        </div>
      </div>
    </div>
</x-app-layout>
